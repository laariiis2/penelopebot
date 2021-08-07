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
 * Class containing data for courses view in the Penelopebot tool.
 *
 * @package    tool_penelopebot
 * @copyright  2020, Larissa de Mattos <larissa.mattos@ufabc.edu.br>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace tool_penelopebot\output;
use renderable;                                                                                                                     
use renderer_base;                                                                                                                  
use templatable;                                                                                                                    
use stdClass;                                                                                                                       
 
class central_ajuda implements renderable, templatable {                                                                               
    /** @var string $sometext Some text to show how to pass data to a template. */                                                  
    var $chat_icon = null;     
    var $chat_title = null;     
    var $agent_id = null;     
    var $language_code = null;    
 
    public function __construct($chat_icon, $chat_title, $agent_id, $language_code, $firstname) {                                                                                        
        $this->chat_icon = $chat_icon;        
        $this->chat_title = $chat_title;     
        $this->agent_id = $agent_id;     
        $this->language_code = $language_code;         
        $this->firstname = $firstname;                                                                                                                
    }
 
    /**                                                                                                                             
     * Export this data so it can be used as the context for a mustache template.                                                   
     *                                                                                                                              
     * @return stdClass                                                                                                             
     */                                                                                                                             
    public function export_for_template(renderer_base $output) {                                                                    
        $data = new stdClass();                                                                                                     
        $data->chat_icon = $this->chat_icon;           
        $data->chat_title = $this->chat_title;    
        $data->agent_id = $this->agent_id;    
        $data->language_code = $this->language_code;    
        $data->firstname = $this->firstname;                                                                                 
        return $data;                                                                                                               
    }
}