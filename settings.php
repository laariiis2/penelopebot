<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Elastic search engine settings.
 *
 * @package    tool_penelopebot
 * @copyright  2020 Larissa de Mattos <larissa.mattos@ufabc.edu.br>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

global $PAGE;

if ($hassiteconfig) {
    $settings = new admin_settingpage('tool_penelopebot', get_string('pluginname', 'tool_penelopebot'));
    $ADMIN->add('tools', $settings);
    $settings->add(new admin_setting_heading('tool_penelopebot_settings', '', get_string('pluginname_desc', 'tool_penelopebot')));
    if (! during_initial_install ()) {
        // Basic settings.
        $settings->add(new admin_setting_configtext('tool_penelopebot/chat_icon',
                get_string('chat_icon', 'tool_penelopebot' ),
                get_string('chat_icon_desc', 'tool_penelopebot'),
                'https://icons.iconarchive.com/icons/google/noto-emoji-animals-nature/256/22214-dog-face-icon.png', PARAM_TEXT));

        $settings->add(new admin_setting_configtext('tool_penelopebot/chat_title',
                get_string('chat_title', 'tool_penelopebot' ),
                get_string('chat_title_desc', 'tool_penelopebot'),
                'PeneloPInha', PARAM_TEXT));

        $settings->add(new admin_setting_configtext('tool_penelopebot/agent_id',
                get_string('agent_id', 'tool_penelopebot' ),
                get_string('agent_id_desc', 'tool_penelopebot'),
                '7430552c-7f0e-4bbc-84f8-6427db738253', PARAM_TEXT));

        $settings->add(new admin_setting_configtext('tool_penelopebot/language_code',
                get_string('language_code', 'tool_penelopebot' ),
                get_string('language_code_desc', 'tool_penelopebot'),
                'pt-br', PARAM_TEXT));

        $settings->add(new admin_setting_configtext('tool_penelopebot/course_name',
                get_string('course_name', 'tool_penelopebot' ),
                get_string('course_name', 'tool_penelopebot'),
                'Processamento da Informação', PARAM_TEXT));

    }
}




