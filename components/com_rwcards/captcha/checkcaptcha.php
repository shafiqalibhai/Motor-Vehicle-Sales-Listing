<?php
/**
* RWCards to check captcha code
* 
* @author Ralf Weber  <ralf@weberr.de>
* @version 3.0
* @copyright Copyright (c) 2007, LoadBrain
* @link http://www.weberr.de/
*
* @license GNU/GPL
*/

require_once 'class.captcha.php';

	 	if (empty($_GET['session_code'])) 
	 	{ 
	 	 	 $session_code = md5(round(rand(0,40000))); 
		 } 
		 else 
		 { 
		 	 $session_code=$_GET['session_code']; 
		 }	
	
  	$my_captcha = new captcha( $session_code, './__TEMP__' ); 

if (!$my_captcha->verify( $_GET['captchaCode'] ) )
{
echo $_GET['message'];
}			
?>
