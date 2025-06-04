<?php
/**
 * @package    local_message
 * @copyright  2025 Ignasi Tort
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or late
 * 
 */

// moodleform is defined in formslib.php
require_once("$CFG->libdir/formslib.php");

class message_edit extends \moodleform {
    // Add elements to form.
    public function definition() {
        // A reference to the form is stored in $this->form.
        // A common convention is to store it in a variable, such as `$mform`.
        $mform = $this->_form; // Don't forget the underscore!

        // Add elements to your form.
        $mform->addElement('text','messagetext', get_string('messagetext', 'local_message'), array('size' => '64', 'maxlength' => '255'));

        // Set type of element.
        $mform->setType('messagetext', PARAM_NOTAGS);

        // Default value.
        $mform->setDefault('messagetext', get_string('enter_message','local_message'));

        $choices = array();
        $choices['0'] = \core\output\notification::NOTIFY_SUCCESS;
        $choices['1'] = \core\output\notification::NOTIFY_WARNING;
        $choices['2'] = \core\output\notification::NOTIFY_ERROR;
        $choices['3'] = \core\output\notification::NOTIFY_INFO;
        
        $mform->addElement('select','messagetype',get_string('messagetype', 'local_message'),$choices);
        $this->add_action_buttons();
    }

    // Custom validation should be added here.
    function validation($data, $files) {
        return [];
    }
}