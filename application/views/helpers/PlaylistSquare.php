<?php

/**
 * View_Helper_PlaylistSquare
 *
 * @package Amuzi
 * @version 1.0
 * Amuzi - Online music
 * Copyright (C) 2010-2012  Diogo Oliveira de Melo
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
class View_Helper_PlaylistSquare extends Zend_View_Helper_Abstract
{
    public function playlistSquare($playlistRow)
    {
        return '<div class="item-square playlist-square object-playlist" playlistid="' . $playlistRow->id . '">'
            . '<div class="cover"><img src="' . $playlistRow->getCover() . '"/></div>'
            . '<div class="name">' . $playlistRow->name . '</div>'
            . '<a href="#" class="play button"><img src="/img/play_icon_square.png"/></a>'
            . '<a href="#" class="remove button"><img src="/img/remove_icon_square.png"/></a>'
            . '</div>';
    }
}