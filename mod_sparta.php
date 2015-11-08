<?php 

/**
 * @package Module Sparta for Joomla! 3.x
 * @version $Id: mod_sparta 1.0.0 2015-07-25 23:26:33Z $
 * @author Kian William Nowrouzian
 * @copyright (C) 2015- Kian William Nowrouzian
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 
 This file is part of sparta.
    sparta is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.
    sparta is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
    You should have received a copy of the GNU General Public License
    along with sparta.  If not, see <http://www.gnu.org/licenses/>.
 
**/


?>
<?php
defined('_JEXEC') or die('Restricted Access'); 
if(!defined('DS')){define('DS', DIRECTORY_SEPARATOR);}
require_once(dirname(__FILE__).DS.'helper.php');

$galleryWidth = $params->get('txtW');
$galleryHeight = $params->get('txtH');

$color= $params->get('clr');
$speed = $params->get('tm');
if($speed<1000)
{
	$speed=1000;
}
 
 $items = json_decode(str_replace("|qq|", "\"", $params->get('slides')));
 foreach($items as $i=>$item)
 {	
		$images[] = JURI::base().$item->imgname;	
		$texts[]=$item->imgtext;	
 }

require_once(JModuleHelper::getLayoutPath('mod_sparta'));
?>