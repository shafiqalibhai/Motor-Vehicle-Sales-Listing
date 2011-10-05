<?php 
/**
 * Joom!Fish - Multi Lingual extention and translation manager for Joomla!
 * Copyright (C) 2003-2009 Think Network GmbH, Munich
 *
 * All rights reserved.  The Joom!Fish project is a set of extentions for
 * the content management system Joomla!. It enables Joomla!
 * to manage multi lingual sites especially in all dynamic information
 * which are stored in the database.
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307,USA.
 *
 * The "GNU General Public License" (GPL) is available at
 * http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * -----------------------------------------------------------------------------
 * $Id: default.php 1251 2009-01-06 18:33:02Z apostolov $
 * @package joomfish
 * @subpackage Views
 *
*/
defined('_JEXEC') or die('Restricted access'); ?>
<div id="joomfish">
	<form action="index.php" method="post" name="adminForm">
	<table width="90%" border="0" cellpadding="2" cellspacing="2" class="adminform" >	<tr align="center" valign="middle">
      <td align="left" valign="top" width="70%">
		<h2>Where do we start?</h2>
	   <p>Ever ask yourself how you can create a multi-language web site without copying the
		whole Joomla tables? The Joom!Fish is one of the possible answers.<br />
		&nbsp;<br />
		The Joom!Fish components supports you managing all your content translations, even the
		content of all the components/modules, in your web site. The component is so flexible that you
		can easily add new components and after that translate the new generated content.<br />
		&nbsp;</p>

		<h2>What do we understand as a content?</h2>
		<p>If we speak about content, we mean any text or other information that is stored in
		one of the tables the Joomla Open Server provides. There are some text information, like
		the text of some links, which are stored in system wide language files. These files
		give you an easy change to switch your site between different languages. <strong>But</strong>
		the news, articles or other <em>content</em> you are creating is only in the language
		you write it :-(.<br />
		&nbsp;<br />
		The Joom!Fish is a solution to help you translating this content ;-) so that your
		site gets really multi-lingual. Each definition of dynamic content we call component elements.<br />
		&nbsp;</p>

		<h2>What does the component for you?</h2>
		<p>We didn't wanted to create a mashine translation or other computer based translation method.
		The aim is to support the translation process, which you will have in a bit bigger enviornment.
		At the moment you have some external editors which create new content for you, someone has
		to have control over the translation.<br />
		&nbsp;<br />
		With the Joom!Fish this person can check all content to find not yet translated items,
		see resently changed items or just manage the supported languages. Based on this your person
		in charge can translate the content items whenever he/she wants and also with any technique
		it is preferred.</p>

		<h2>How does it work?</h2>
		<p>Pretty easy. In the component menu you find the component configuration (available in the control panel toolbar) to change all the
		general settings of apperience and so on. This is the usual stuff.<br />
		The main thing you have to configure here is for which languages you want to provide the translations.
		Just select the languages you want in the list.</p>

		<p>The second part is a bit more difficult. The definition of component elements is directly conntected
		to your database. That's why we decided not to make this configuration available in the Administrator!<br />
		The administrator shows you in the <a href="index2.php?option=com_joomfish&task=elements.show">"Configuration of content's"</a>
		all installed content element definitions. These definitions are hold in XML files which are
		stored in the subdirectory "contentelements" below your administration dir of Joom!Fish.<br />
		If you wish you add a new content or change existing once you have to modify the XML files, which
		should not be to difficult.<br />
		Most important here you, will find some nice possibilities to check if the XML files pointing
		to the correct information ;-)<br />
		&nbsp;<br />
		If you add a new XML file for a not yet implemented component/module make sure you edit also
		the component/module PHP scripts.</p>

		<p>For the translation process you just use the <a href="index2.php?option=com_joomfish&task=translate.overview">"Translation"</a> menu. There you will find a
		list of the content's in your database. After selecting a content you can easily
		work with the translation and store it to your database.</p>
	   &nbsp;<br />
		 <p>That's it so far. Any ideas, problems and so on - just check out our forum<br>
	   &nbsp;<br />
	   Alex, Geraint, Ivo & Robin</p>
		</td>
		<td align="left" valign="top" nowrap>
			<?php $this->_sideMenu();?>
			<?php $this->_creditsCopyright(); ?>
		</td>
	</tr>
  </table>
<input type="hidden" name="option" value="com_joomfish" />
<input type="hidden" name="task" value="help.show" />
<input type="hidden" name="boxchecked" value="0" />
<?php echo JHTML::_( 'form.token' ); ?>
</form>
</div>
