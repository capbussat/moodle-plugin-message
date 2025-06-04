<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.

/**
 * Version details for the 'message' plugin
 *
 * @package    local_message
 * @copyright  2025 Ignasi Tort
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @var        stdClass $plugin
 */

defined('MOODLE_INTERNAL') || die();

function  local_message_before_footer(){
   global $DB, $USER;


   $sql = "SELECT * FROM {local_message} lm
        WHERE lm.id NOT IN (
            SELECT messageid FROM {local_message_read}
            WHERE userid = :userid
        )";

   $params = array('userid' => $USER->id);
   $messages = $DB->get_records_sql($sql, $params);
   
   if (empty($messages)) {   
      return;// No messages to display.
   }
   
   // Prepare the choices for message types.  
   $choices = array();  
   $choices[0] = \core\output\notification::NOTIFY_INFO;
   $choices[1] = \core\output\notification::NOTIFY_WARNING;
   $choices[2] = \core\output\notification::NOTIFY_ERROR;
   $choices[3] = \core\output\notification::NOTIFY_SUCCESS;

   foreach($messages as $message) {
      // Display each message using the notification system.
      \core\notification::add($message->messagetext, $choices[$message->messagetype]);

      // Mark the message as displayed by inserting a record in the local_message_read table.
      $DB->insert_record('local_message_read', array(
          'messageid' => $message->id,
          'userid' => $USER->id,
          'timeread' => time()
      ));
   } 
}