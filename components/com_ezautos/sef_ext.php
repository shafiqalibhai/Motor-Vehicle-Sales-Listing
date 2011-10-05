<?php

#############################################################################
#                                                                           #
#  EZ Autos v1.0 SEF Advance file                                           #
#  By: Kathy Strickland                                                     #
#  Copyright (C) 2006 K.J. Strickland, Raptor Developments Pty Ltd          #
#  All rights reserved                                                      #
#  http://www.raptorservices.com.au                                         #
#  Released as a commercial addon!                                          #
#                                                                           #
#  Comments: for SEF Advance > v3.6                                         #
#                                                                           #
#############################################################################


class sef_ezautos {

	function create ($string) {


		$sefstring = '';

		if (eregi('&amp;task=',$string)) {
			$temp = explode('&amp;task=', $string);
			$temp = explode('&', $temp[1]);
			$sefstring .= sefencode($temp[0]).'/';
		}

		if (eregi('&amp;id=',$string)) {
			$temp = explode('&amp;id=', $string);
			$temp = explode('&', $temp[1]);
			$sefstring .= sefencode($temp[0])."/";
		}

		// $sefstring == "$var1/$id/"

		return $sefstring;

	}


	function revert ($url_array, $pos) {

		if (( ini_get('register_globals')==1 && (!defined('RG_EMULATION') || RG_EMULATION==1) ) ||
			( ini_get('register_globals')==0 && (defined('RG_EMULATION') && RG_EMULATION==1) ) ) {
			global $task, $id;
		}

		$QUERY_STRING = '';

		if (isset($url_array[$pos+2]) && $url_array[$pos+2]!='') {

			$task = $url_array[$pos+2];
			$_GET['task'] = $task;
			$_REQUEST['task'] = $task;
			$QUERY_STRING .= "&task=$task";

		}

		if (isset($url_array[$pos+3]) && $url_array[$pos+3]!='') {

			$id = $url_array[$pos+3];
			$_GET['id'] = $id;
			$_REQUEST['id'] = $id;
			$QUERY_STRING .= "&id=$id";

		}

		return $QUERY_STRING;

	}

}

?>