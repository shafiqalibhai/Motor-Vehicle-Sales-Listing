<?php
/**
* @version		$Id: mod_globalnews.php 2008 vargas $
* @package		Joomla
* @copyright	Copyright (C) 2005 - 2007 Open Source Matters. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

defined('_JEXEC') or die('Restricted access');

require_once (dirname(__FILE__).DS.'helper.php');

global $globalnews_id;

if ( !$globalnews_id ) : $globalnews_id =1; endif;

$cat      = modGlobalNewsHelper::getGN_Cats($params);
$total    = count ( $cat );
$cols     = $params->get( 'cols', 1 );
$empty    = $params->get( 'empty', 0 );
$layout   = $params->get( 'layout', 'list' );
$show_cat = $params->get( 'show_cat', 1 );
$width    = $params->get( 'width', 'auto' );

if ( $width == 'auto' ) : $width = 100/$cols . '%'; endif;

if ( $params->get('write_css', 1) )
{
	$padding  = (int)$params->get('padding', '5px');
	$border   = $params->get('border', '1px solid #EFEFEF');
	$color    = $params->get('color', '#FFFFFF');

    $header   = '.gn_header_'.$globalnews_id.'{'
		       .'background-color:'.$params->get('header_color', '#EFEFEF').';'
			   .'border:'.$border.';'
		       .'border-bottom:none;'
		       .'padding:'.(int)$params->get('header_padding', '5px').'px;'
		       .'}';

    $marquee  = 'border:'.$border.';'
	           .( $show_cat != 0 ? 'border-top:none;' : '' )
		       .'padding:'.$padding.'px;'
		       .'height:'.((int)$params->get('height', '100px')-2*$padding).'px;'
		       .'background-color:'.$color.';'
		       .'overflow:hidden;';
			 
    switch ( $layout ) {
	 
         case 'list' :
               $css =  $header
			           .'.gn_list_'.$globalnews_id.'{'
		               .$marquee
		               .'}';
               break;
		
         case 'static' :
               $css =  $header
			           .'.gn_static_'.$globalnews_id.'{'
		               .$marquee
		               .'}';
               break;

         case 'slider' :
               $css =  $header
			           .'.gn_slider_'.$globalnews_id.'{'
		               .$marquee
			           .'border-bottom:none;'
		               .'}'
		               .'.gn_slider_'.$globalnews_id.' .opacitylayer{'
		               .'height:100%;'
		               .'filter:progid:DXImageTransform.Microsoft.alpha(opacity=100);'
		               .'-moz-opacity:1;'
		               .'opacity:1;'
		               .'}'
		               .'.gn_slider_'.$globalnews_id.' .contentdiv{'
		               .'display: none;'
		               .'}'
		               .'.gn_pagination_'.$globalnews_id.'{'
			           .'border:'.$border.';'
			           .'border-top:none;'
		               .'padding:2px '.$padding.'px;'
		               .'text-align:right;'
		               .'background-color:'.$color.';'
		               .'}'
					   .'.gn_pagination_'.$globalnews_id.' a:link{'
		               .'font-weight:bold;'
		               .'padding:0 2px'
		               .'}'
		               .'.gn_pagination_'.$globalnews_id.' a:hover,'
					   .'.gn_pagination_'.$globalnews_id.' a.selected{'
		               .'color:#000;'
		               .'}';
               break;

         case 'browser' :
	 
               $containerIds = '#gn_container_'.$globalnews_id.'_1';
               for ($m=2;$m<=$total;$m++) { 
			        $containerIds.=',#gn_container_'.$globalnews_id.'_'.$m; }
               $css = $header
			         .$containerIds.'{'
		             .$marquee
		             .'position: relative;'
		             .'}';
               break;

         case 'scroller' :
	 
               $scrollerIds = '#gn_scroller_'.$globalnews_id.'_1';
               for ($m=2;$m<=$total;$m++) { 
			        $scrollerIds.=',#gn_scroller_'.$globalnews_id.'_'.$m; }
               $css = $header
			         .$scrollerIds.'{'
		             .$marquee
		             .'}';
               break;
	}
	 
	$css .= '.gn_clr{clear:both;height:0}';

    jimport('joomla.filesystem.file');

    JFile::write(dirname(__FILE__).DS.'scripts'.DS.'css'.DS.'gn_css_'.$globalnews_id.'.css',$css);
}

JHTML::stylesheet('gn_css_'.$globalnews_id.'.css','modules/mod_globalnews/scripts/css/',false);

require(JModuleHelper::getLayoutPath('mod_globalnews'));

$globalnews_id++;