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
$document = &JFactory::getDocument();
$document->addStyleSheet(JURI::base()."modules/mod_sparta/css/mystyles.css");
if($params->get('lib')==1)
{
  $document->addScript(JURI::base()."modules/mod_sparta/js/jquery.js");
}
$myvar = " var SPA = jQuery.noConflict();";
$document->addScriptDeclaration($myvar);
$document->addScript(JURI::base()."modules/mod_sparta/js/spartan.js");
$contentb="

	SPA(document).ready(function(){	
	SPA('#spartanContainer').sparta({width:'".$galleryWidth."', height:'".$galleryHeight."', color:'".$color."', speed:'".$speed."'});	
	});
	
	SPA.fn.sparta.defaults = {};	
	SPA.fn.sparta.defaults.width='600';
	SPA.fn.sparta.defaults.height='150';
	SPA.fn.sparta.defaults.color='#e41952';
	SPA.fn.sparta.defaults.speed='2000';
	SPA.fn.sparta.defaults.fontFamily='Arial';
	SPA.fn.sparta.defaults.images = [];
	SPA.fn.sparta.defaults.descs = [];
	var myimages = ".json_encode($images).";
	var mytexts = ".json_encode($texts).";
	for(var i=0; i<myimages.length; i++)
	{
	  SPA.fn.sparta.defaults.images[i]=myimages[i];
	  SPA.fn.sparta.defaults.descs[i]=mytexts[i];
	 }
";
$document->addScriptDeclaration($contentb);
 $superstyle = "
#spartanContainer div div img
{
	width:".$galleryWidth."px;
	height:".$galleryHeight."px;
}
";
$document->addStyleDeclaration($superstyle);

?>

<div id="spartanContainer">
</div>

