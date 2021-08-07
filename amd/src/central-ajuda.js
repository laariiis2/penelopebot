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
 * Javascript controller for central ajuda.
 *
 * @module     tool_penelopebot/central-ajuda
 * @package    tool_penelopebot
 * @copyright  2020, Larissa de Mattos <larissa.mattos@ufabc.edu.br>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @since      3.1
 */
define(['jquery'], function () {
var centralAjuda = {};

centralAjuda.init = function (firstname) {
const dfMessenger = document.querySelector('df-messenger');
dfMessenger.addEventListener('df-info-card-clicked', function (event) {
event.preventDefault();
var picnumber = Math.floor((Math.random() * 10) + 1);
var text = '';
if (picnumber == 1) {
text = firstname + ', percebi que você clicou no link. Eu continuo por aqui, se precisar de algo é só dizer!';
} else if (picnumber == 2) {
text = 'Legal '+firstname +', você acessou um link. Permaneço por aqui, se precisar de algo é só falar!';
} else if (picnumber == 3) {
text = firstname + ', percebi que você está acessando os links ;) Eu continuo por aqui, se precisar de algo é só falar :)';
}else if (picnumber == 4) {
    text = firstname + ', observei que você está acessando os links ;) Legal!';
}else if (picnumber == 5) {
    text = firstname + ', notei que você está clicando nos links :D Se precisar de outros materiais, é só me dizer :)';
}else if (picnumber == 6) {
    text = firstname + ', que ótimo que você está clicando nos links que eu encontrei para você :D ';
}else if (picnumber == 7) {
    text = 'Estou contente que você está acessando os materias que achei para você, ' + firstname +'. ';
}else if (picnumber == 8) {
    text = firstname + ', que ótimo que você está acessando os links que encontrei para você :D';
}else if (picnumber == 9) {
text = firstname + ', notei que você está acessando os links :D Se precisar de mais materiais de estudo, é só me falar :)';
}else {
text = 'Já sabe '+ firstname + ', estou por aqui, se precisar de algo é só dizer :P';
}
dfMessenger.renderCustomText(text);
});
};
return centralAjuda;
});