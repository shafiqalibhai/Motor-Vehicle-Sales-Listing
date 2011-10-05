<?php
/**
 * @author 		Matt Beckman, Founding Engineer, Infinovision, www.infinovision.com
 * @version		$Id: jvideo_search.php 1 2008-09-09 12:06:06 Infinovation, LLC $
 * @package		Joomla
 * @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

$mainframe->registerEvent( 'onPrepareContent', 'plgContentJVideo' );


function plgContentJVideo( &$row, &$params, $page=0 )
{
	$db =& JFactory::getDBO();
 
	$plugin =& JPluginHelper::getPlugin('content', 'jvideo_content');
 
	// {jvideo id=1234 preview=true|false autoplay=true|false}
 	$regex = '/{jvideo\s*.*?}/i';
 
	$pluginParams = new JParameter( $plugin->params );
 
	if ( !$pluginParams->get( 'enabled', 1 ) ) {
		$row->text = preg_replace( $regex, '', $row->text );
		return true;
	}
 
	preg_match_all( $regex, $row->text, $matches );
 
 	$count = count( $matches[0] );
 
 	if ( $count ) {
 		if (!plgContentJVideoStartup()) {
 			$row->text 	= preg_replace( $regex, JText::_("JVideo not available"), $row->text );
 			return;
 		}
 		
 		plgContentJVideoProcess( $row, $matches, $count, $regex );
	}
}

function plgContentJVideoStartup()
{
	// Make sure JVideo is installed
	if (!file_exists(JPATH_ROOT.DS.'components'.DS.'com_jvideo'.DS.'assets'.DS.'lib'.DS.'infin-lib.php'))
	{
		return false;
	}

	// Include the JVideo Library
	@include_once(JPATH_ROOT.DS.'components'.DS.'com_jvideo'.DS.'assets'.DS.'lib'.DS.'infin-lib.php');
	
	// Load JVideo config (if not already loaded)
	if (is_null(JRequest::getVar('jvConfig')) || JRequest::getVar('jvConfig') == "")
	{
		$plg_jvConfig =& plgContentJVideoGetConfig();
		JRequest::setVar('jvConfig', $plg_jvConfig);
	}
	else
	{
		$plg_jvConfig =& JRequest::getVar('jvConfig');
	}

	// Load video plugin
	@include_once(JPATH_ROOT.DS.'components'.DS.'com_jvideo'.DS.'plugins'.DS.$plg_jvConfig->videoSystem.DS.'video.php');
	
	return true;
}

function plgContentJVideoGetConfig()
{
		$db =& JFactory::getDBO();
	
		$sql = "SELECT * FROM #__jvideo_config";
		$db->setQuery($sql);
		
		$obj = $db->loadObject();

		$plg_jvConfig = new JVConfig();
		$plg_jvConfig->aspectConstraint = $obj->aspect_constraint;
		$plg_jvConfig->autoPlay = $obj->auto_play;
		$plg_jvConfig->bradPos = $obj->brad_pos;
		$plg_jvConfig->clientGUID = $obj->client_guid;
		$plg_jvConfig->hasPNG = $obj->has_png;
		$plg_jvConfig->hasRatings = $obj->has_ratings;
		$plg_jvConfig->infinoAccountKey = $obj->infino_acctKey;
		$plg_jvConfig->infinoSecretKey = $obj->infino_secretKey;
		$plg_jvConfig->infinoAccountID = $obj->infino_accountId;
		$plg_jvConfig->infinoDomain = $obj->infino_domain;
		$plg_jvConfig->infinoUserID = $obj->infino_userId;
		$plg_jvConfig->lastChecked = $obj->lastChecked;
		$plg_jvConfig->minGID = $obj->min_gid;
		$plg_jvConfig->profileSystem = $obj->profile_system;
		$plg_jvConfig->regLevel = $obj->reg_level;
		$plg_jvConfig->showEmbedded = $obj->show_embeded;
		$plg_jvConfig->videoPlayerHeight = $obj->video_player_height;
		$plg_jvConfig->videoPlayerWidth = $obj->video_player_width;
		$plg_jvConfig->profileSystem = $obj->profile_system;
		$plg_jvConfig->videoSystem = $obj->video_system;
		$plg_jvConfig->commentsSystem = $obj->comments_system;
		$plg_jvConfig->mapProfileURL = $obj->map_profile_url;
		$plg_jvConfig->mapProfileTable = $obj->map_profile_table;
		$plg_jvConfig->mapProfileID = $obj->map_profile_id;
		$plg_jvConfig->mapProfileUserID = $obj->map_profile_user_id;
		$plg_jvConfig->mapProfileAvatar = $obj->map_profile_avatar;
		$plg_jvConfig->mapProfileAvatarPrefix = $obj->map_profile_avatar_prefix;
		$plg_jvConfig->proxyEnabled = $obj->proxyEnabled;
		$plg_jvConfig->proxyHost = $obj->proxyHost;
		$plg_jvConfig->proxyPort = $obj->proxyPort;
		$plg_jvConfig->proxyUsername = $obj->proxyUsername;
		$plg_jvConfig->proxyPassword = $obj->proxyPassword;
		$plg_jvConfig->proxyTimeout = $obj->proxyTimeout;
		$plg_jvConfig->proxyResponseTimeout = $obj->proxyResponseTimeout;
		$plg_jvConfig->minApprGID = $obj->min_appr_gid;
		$plg_jvConfig->requireAdminVidAppr = $obj->require_admin_vid_appr;
		$plg_jvConfig->cacheThumbnails = $obj->cacheThumbnails;
		$plg_jvConfig->fullSync = $obj->fullSync;
		$plg_jvConfig->seoEnabled = $obj->seoEnabled;
		$plg_jvConfig->seoFileExtension = $obj->seoFileExtension;
		return $plg_jvConfig;
}


function plgContentJVideoProcess ( &$row, &$matches, $count, $regex )
{
	// get config
	$plg_jvConfig =& JRequest::getVar('jvConfig');
	
	if (array_key_exists('videoPlayerHeight', get_object_vars($plg_jvConfig)))
		$defaultHeight = $plg_jvConfig->videoPlayerHeight;
	else
		$defaultHeight = 0;
		
	if (array_key_exists('videoPlayerWidth', get_object_vars($plg_jvConfig)))
		$defaultWidth = $plg_jvConfig->videoPlayerWidth;
	else
		$defaultWidth = 0;
	
	if (array_key_exists('autoPlay', get_object_vars($plg_jvConfig)))
		$defaultAutoPlay = $plg_jvConfig->autoPlay;
	else
		$defaultAutoPlay = false;
	
	// run through all matches
	for ( $i = 0; $i < $count; $i++ )
	{		
 		// separate attributes
 		$match = str_replace( 'jvideo', '', $matches[0][$i]);
 		$match = str_replace( '{', '', $match);
 		$match = str_replace( '}', '', $match);
 		$match = str_replace( '"', '', $match);
 		$match = trim($match);
 		$match = explode(' ', $match);
		
 		$params = array(
 			"id" => 0,
 			"autoplay" => $defaultAutoPlay,
 			"height" => $defaultHeight,
 			"width" => $defaultWidth,
 			"allowfullscreen" => true,
 			"accountkey" => $plg_jvConfig->infinoAccountKey,
 			"flashvars" => null
 		);
 		
 		foreach ($match as $param)
 		{
 			$key = strtolower(strtok($param, '='));
 			$value = strtolower(strtok('='));
 			
 			switch ($key)
 			{
 				case "id":
 				case "height":
 				case "width":
 					$value = (int) $value;
 					break;
 				case "autoplay":
 				case "allowfullscreen":
 					$value = strtolower($value) == "false" ? false : (bool) $value;
 					break;
 				default:
 					// unknown attr; skip it
 					continue 2;
 			}
 			
 			$params[$key] = $value;
 		}

 		// check attributes
 		if ($params["id"] <= 0)
 		{
 			// invalid video ID; skip
 			continue;	
 		}

 		// setup the video
 		$infinovationVideo = new InfinovationVideo($plg_jvConfig->infinoAccountKey, $plg_jvConfig->infinoSecretKey);

 		// run it through a proxy (if necessary)
 		plgContentJVideoProxyControl($infinovationVideo);
 		
 		// retrieve the video Guid
 		$videoGuid = plgContentJVideoGetVideoGuid($params["id"], $plg_jvConfig->requireAdminVidAppr);
 		
 		if (!$videoGuid)
 		{
 			$row->text = preg_replace( '{'. $matches[0][$i] .'}', JText::_("Video not available"), $row->text );
 			continue;	
 		}

 		// setup the all important flash vars
		$params["flashvars"] = $infinovationVideo->getPlayerFlashVars($videoGuid, $params["autoplay"]);

		// get the embed code
 		$code = plgContentJVideoGetEmbedCode($params);
 		
 		// update the frontend
		$row->text 	= preg_replace( '{'. $matches[0][$i] .'}', $code, $row->text );
 	}
 
	$row->text = preg_replace( $regex, '', $row->text );
}


function plgContentJVideoGetEmbedCode( &$params )
{	
	$code = "<!-- JVideo! Embedded Video -->\n"
		."<object width=\"". (int) $params["width"] ."\" height=\"" . (int) $params["height"]."\">\n"
		."<param name=\"allowFullScreen\" value=\"".((bool)$params["allowfullscreen"] ? "true" : "false") ."\" />\n"
		."<param name=\"src\" value=\"http://manage.infinovation.com/assets/player.swf?a=".$params["accountkey"]."&v=1\"/>\n"
		."<param name=\"allowScriptAccess\" value=\"always\" />\n"
		."<param name=\"flashvars\" value=\"".$params["flashvars"]."\" />\n"
		."<param name=\"wmode\" value=\"transparent\"></param>\n"
		."<embed src=\"http://manage.infinovation.com/assets/player.swf?a=".$params["accountkey"]."&v=1\" "
		."type=\"application/x-shockwave-flash\" wmode=\"transparent\" width=\"".(int)$params["width"]."\" height=\"".(int)$params["height"]."\" allowFullScreen=\"".((bool)$params["allowfullscreen"] ? "true" : "false")."\" "
		."flashVars=\"".$params["flashvars"]."\"></embed>\n"
		."</object>\n";
	
	return $code;
}

function plgContentJVideoGetVideoGuid($id, $reqAdminApproval)
{
	$db =& JFactory::getDBO();
	$sql = "SELECT infin_vid_id, published, publish_up, publish_down, admin_approved, status "
		."FROM #__jvideos "
		."WHERE id = " . (int) $id . " "
		."LIMIT 1";
	
	$db->setQuery($sql);
	$obj = $db->loadObjectList();
	
	if (count($obj))
	{
		$obj = $obj[0];
		
		if (    ((time() >= strtotime($obj->publish_up)) || ($obj->publish_up == "0000-00-00 00:00:00"))
			 && ((time() <= strtotime($obj->publish_down)) || ($obj->publish_down == "0000-00-00 00:00:00"))
			 && ($obj->status == 'complete')
			 && ($obj->published)
			 && ($reqAdminApproval && $obj->admin_approved || !$reqAdminApproval)
			)
		{
			return $obj->infin_vid_id;	
		}
		else
		{
			return false;
		}
	}
	else
	{
		return false;
	}
}

function plgContentJVideoProxyControl(InfinovationSoapBase &$base)
{
	$plg_jvConfig =& JRequest::getVar('jvConfig');
	
	if ($plg_jvConfig->proxyEnabled)
	{
		$base->enableProxy();
		$base->setProxyParams(
			$plg_jvConfig->proxyHost,
			$plg_jvConfig->proxyPort,
			$plg_jvConfig->proxyUsername,
			$plg_jvConfig->proxyPassword,
			$plg_jvConfig->proxyTimeout,
			$plg_jvConfig->proxyResponseTimeout
		);
	}
	else
	{
		$base->disableProxy();
	}
}
?>