<?php
/*------------------------------------------------------------------------
# JA Quartz for Joomla 1.5 - Version 1.0 - Licence Owner JA24521
# ------------------------------------------------------------------------
# Copyright (C) 2004-2008 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
# @license - Copyrighted Commercial Software
# Author: J.O.O.M Solutions Co., Ltd
# Websites:  http://www.joomlart.com -  http://www.joomlancers.com
# This file may not be redistributed in whole or significant part.
-------------------------------------------------------------------------*/
 // no direct access
defined('_JEXEC') or die('Restricted access'); ?>
<?php if($type == 'logout') : ?>
<div id="logout-wrap">
<form action="index.php" method="post" name="login" id="login">
<?php if ($params->get('greeting')) : ?>
	<div><?php echo JText::sprintf( 'HINAME', $user->get('name') ); ?></div>
<?php endif; ?>
		<input type="submit" name="Submit" class="button" value="<?php echo JText::_( 'BUTTON_LOGOUT'); ?>" />

	<input type="hidden" name="option" value="com_user" />
	<input type="hidden" name="task" value="logout" />
	<input type="hidden" name="return" value="<?php echo $return; ?>" />
</form>
</div>
<?php else : ?>
<?php if(JPluginHelper::isEnabled('authentication', 'openid')) : ?>
	<?php JHTML::_('script', 'openid.js'); ?>
<?php endif; ?>
<div id="login-wrap">
<form action="<?php echo JRoute::_( 'index.php', true, $params->get('usesecure')); ?>" method="post" name="login" id="login" >
	<?php echo $params->get('pretext'); ?>

			<label for="mod_login_username" class="ja-login-user">
				<span><?php echo JText::_('Username') ?></span>
				<input name="username" id="mod_login_username" type="text" class="inputbox" alt="username" size="10" />
			</label>

			<label for="mod_login_password" class="ja-login-password">
				<span><?php echo JText::_('Password') ?></span>
				<input type="password" id="mod_login_password" name="passwd" class="inputbox" size="10" alt="password" />
			</label>

			<label for="mod_login_remember">
				<input type="hidden" name="remember" id="mod_login_remember" class="inputbox" value="yes" alt="Remember Me" />
			</label>
			<input type="submit" name="Submit" class="button" value="Login" />

			<div class="ja-login-links">
			<a href="<?php echo JRoute::_( 'index.php?option=com_user&view=reset' ); ?>">
			<?php echo JText::_('FORGOT_YOUR_PASSWORD'); ?></a>
			<!--<a href="<?php echo JRoute::_( 'index.php?option=com_user&view=remind' ); ?>">
			<?php echo JText::_('FORGOT_YOUR_USERNAME'); ?></a>-->
			<?php 
				$usersConfig = &JComponentHelper::getParams( 'com_users' );
				if ($usersConfig->get('allowUserRegistration')) : ?>
				<a href="<?php echo JRoute::_( 'index.php?option=com_user&task=register' ); ?>">
					<?php echo JText::_('REGISTER'); ?></a>
			<?php endif; ?>
			</div>
	<?php echo $params->get('posttext'); ?>

	<input type="hidden" name="option" value="com_user" />
	<input type="hidden" name="task" value="login" />
	<input type="hidden" name="return" value="<?php echo $return; ?>" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>
</div>
<?php endif; ?>