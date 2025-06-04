<?php
/**
 * @package    local_message
 * @copyright  2025 Ignasi Tort
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or late
 * 
 */

require_once(__DIR__. '/../../config.php');
require_once( $CFG->dirroot . '/local/message/classes/form/edit.php');

global $DB;

$PAGE->set_url( new moodle_url( url: '/local/message/edit.php'));
$PAGE->set_context(\context_system::instance());
$PAGE->set_title(title: get_string('edit_messages','local_message'));

$mform = new message_edit();

// Form processing and displaying is done here.
if ($mform->is_cancelled()) {
    // You can handle the cancel operation here.
    redirect( url:$CFG->wwwroot . '/local/message/manage.php', message: get_string('message_form_cancelled', 'local_message'));

} else if ($fromform = $mform->get_data()) {
    // When the form is submitted, and the data is successfully validated,
    // the `get_data()` function will return the data posted in the form.
    
    $record = new stdClass();
    $record->messagetext = $fromform->messagetext;
    $record->messagetype = $fromform->messagetype;
    $DB->insert_record('local_message', $record);
    redirect( url:$CFG->wwwroot . '/local/message/manage.php',
        message: get_string('message_form_saved','local_message')
         . $fromform->messagetext);
    
} 
 
echo $OUTPUT->header();

// Display the form.
$mform->display();

echo $OUTPUT->footer();
