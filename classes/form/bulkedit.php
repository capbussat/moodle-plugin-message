<?php
/**
 * @package    local_message
 * @copyright  2025 Ignasi Tort
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or late
 * 
 */

// moodleform is defined in formslib.php
require_once("$CFG->libdir/formslib.php");

class message_bulkedit extends \moodleform {
    // Add elements to form.
    public function definition() {
        
        // get messages records
        global $DB;
        $messages = $DB->get_records('local_message');

        // Define the form.
        $mform = $this->_form; // Don't forget the underscore!

        $mform->addElement('static', 'choosemesages', 'Chosse messages');
        $mform->addElement('cancel', 'cancelbutton', get_string('cancel'));

        foreach ($messages as $message) {
            // message_id_ requires '_' before the id number
            $mform->addElement('advcheckbox','message_id_' . $message->id, $message->messagetext);
        }
        
        $mform->addElement('submit', 'submitbutton', get_string('submit'));
       
    }

    // Custom validation should be added here.
    function validation($data, $files) {
        return [];
    }
}