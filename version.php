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

$plugin->component = 'local_message';     // Full name of the plugin (type_name).
$plugin->version   = 2025060101;          // The current plugin version (YYYYMMDDXX).
$plugin->requires  = 2022041900;          // Requires this Moodle version (Moodle 4.2 = 2022041900).
$plugin->maturity  = MATURITY_STABLE;     // This is considered as ready for production.
$plugin->release   = '1.0';               // Human-readable version name.
