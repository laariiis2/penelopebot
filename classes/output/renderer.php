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
 * Penelopebot tool renderer
 *
 * @package    tool_penelopebot
 * @copyright  2020, Larissa de Mattos <larissa.mattos@ufabc.edu.br>
 */
namespace tool_penelopebot\output;
defined('MOODLE_INTERNAL') || die;

use plugin_renderer_base;  
 
class renderer extends plugin_renderer_base {
    /**                                                                                                                             
     * Defer to template.                                                                                                           
     *                                                                                                                              
     * @param central_ajuda $page                                                                                                      
     *                                                                                                                              
     * @return string html for the page                                                                                             
     */                                                                                                                             
    public function render_central_ajuda($page) {                                                                                      
        $data = $page->export_for_template($this);                                                                                  
        return parent::render_from_template('tool_penelopebot/central_ajuda', $data);                                                         
    }           
}