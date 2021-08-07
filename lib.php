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
 * Admin Tool Penelopebot is defined here.
 *
 * @package     tool_penelopebot
 * @copyright   2020 Larissa de Mattos <larissa.mattos@ufabc.edu.br>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();


// Insere html na página
function tool_penelopebot_before_standard_top_of_body_html() {
   global $PAGE;
   global $COURSE;
   global $USER;   

  // Pegar os parâmetros configurados pelo usuário
  $toolconfig = get_config('tool_penelopebot');
  $count = count(get_object_vars($toolconfig));
  if($count === 1){
    $val = 'null';
  }else{
	  $val = $toolconfig->course_name;
  }

  // Verifica se o usuário está logado na página do curso que deve ser renderizado o APC
  if (strpos($COURSE->fullname, $val) !== false){
    $renderer = $PAGE->get_renderer('tool_penelopebot');
    $renderable = new \tool_penelopebot\output\central_ajuda($toolconfig->chat_icon, $toolconfig->chat_title, $toolconfig->agent_id, $toolconfig->language_code, $USER->firstname);        
    return $renderer->render($renderable);
  }
}

// Injeta JS ou CSS na página
function tool_penelopebot_before_footer() {
  global $PAGE;
  global $COURSE;
  global $USER;
 
  // Pegar os parâmetros configurados pelo usuário
  $toolconfig = get_config('tool_penelopebot');
  $count = count(get_object_vars($toolconfig));
  if($count === 1){
    $val = 'null';
  }else{
	  $val = $toolconfig->course_name;
  }

  // Verifica se o usuário está logado na página do curso que deve ser injetado JS
  if (strpos($COURSE->fullname, $val) !== false){
    $var = array($USER->firstname);
    $PAGE->requires->js_call_amd('tool_penelopebot/central-ajuda', 'init', $var);
  }
}