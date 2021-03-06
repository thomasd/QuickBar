<?php
/**
 * Quip
 *
 * Copyright 2012-13 by JP DeVries <jp.devries@modx.com>
 *
 * This file is part of Quip, a simple commenting component for MODx Revolution.
 *
 * Quip is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Quip is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Quip; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package quickbar
 */
/**
 * @package quickbar
 * @subpackage build
 */
$chunks = array();

$chunks[1]= $modx->newObject('modChunk');
$chunks[1]->fromArray(array(
    'id' => 1,
    'name' => 'quickbar',
    'description' => 'QuickBar markup used with QuickBar Snippet',
    'snippet' => file_get_contents($sources['source_core'].'/elements/chunks/chunk.quickbar.php'),
));
//$properties = include $sources['data'].'properties/properties.quip.php';
//$snippets[1]->setProperties($properties);

return $chunks;