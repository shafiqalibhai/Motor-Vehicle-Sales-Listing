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

<form action="index.php" method="post" name="adminForm">
<table class="adminform">
    <tr>
      <td width="30%" align="left" valign="top"><strong><?php echo JText::_('Default Language'); ?></strong></td>
      <td align="left" valign="top"><?php echo JText::_('DEFAULT_LANGUAGE_HELP'); ?></td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top"><strong><?php echo JText::_('Component Admin Interface Language'); ?></strong></td>
      <td><?php echo JText::_('LANGUAGE_HELP'); ?></td>
    <tr>
</table>
<div id="editcell">
	<table class="adminlist">
	<thead>
		<tr>
			<th width="20">
			</th>
			<th class="title">
				<?php echo $this->fetchTooltip('TITLE_NAME', 'NAME_HELP'); ?>
			</th>
			<th width="5%" class="title" nowrap="nowrap">
				<?php echo $this->fetchTooltip('TITLE_ACTIVE', JText::_('ACTIVE_HELP')); ?>
			</th>
			<th width="5%" class="title" nowrap="nowrap">
				<?php echo $this->fetchTooltip('TITLE_ISOCODE', JText::_('ISOCODE_HELP')); ?>
			</th>
			<th width="10%" class="title" nowrap="nowrap">
				<?php echo $this->fetchTooltip('TITLE_SHORTCODE', JText::_('SHORTCODE_HELP')); ?>
			</th>
			<th width="10%" class="title" nowrap="nowrap">
				<?php echo $this->fetchTooltip('TITLE_JOOMLA', JText::_('JOOMLACODE_HELP')); ?>
			</th>
			<th width="10%" class="title">
				<?php echo $this->fetchTooltip('TITLE_FALLBACK', JText::_('FALLBACK_HELP')); ?>
			</th>
			<th width="15%" class="title">
				<?php echo $this->fetchTooltip('TITLE_IMAGE', JText::_('IMAGES_DIR_HELP')); ?>
			</th>
			<th width="5%" class="title" nowrap="nowrap">
				<?php echo JHTML::_('grid.sort',  'Order', 'l.ordering', $this->lists['order_Dir'], $this->lists['order'] ); ?>
			</th>
			<th class="title">
				<?php echo $this->fetchTooltip('TITLE_CONFIG', JText::_('CONFIG_HELP')); ?>
			</th>
		</tr>
	</thead>
	<tfoot></tfoot>
	<tbody>
		<?php
		$k=0;
		$i=0;
		reset($this->items);
		$model = $this->getModel('languages');
		$siteLang = $model->getDefaultLanguage();		
		foreach ($this->items as $language ) { ?>
		<tr class="<?php echo 'row' . $k; ?>">
	      	<td align="center">
      			<input type="hidden" name="cid[]" value="<?php echo $language->id; ?>" />
				<?php 
				if ( $siteLang != $language->code ) {?>
      			<input type="checkbox" name="checkboxid[]" id="cb<?php echo $language->id; ?>" value="1" onclick="isChecked(this.checked);" />
	      		<?php }?>
	      	</td>
			<td><input type="text" name="name[]" value="<?php echo $language->name; ?>" size="30" maxlength="100" /></td>
			<td align="center"><input type="checkbox" name="active[]"<?php echo $language->active==1 ? ' checked' : ''; ?> value="<?php echo $language->id; ?>" /></td>
			<td><?php echo strpos($language->iso, ',') > 0 ? substr($language->iso, 0, strpos($language->iso, ',')) : $language->iso;?><input type="hidden" name="iso[]" value="<?php echo $language->iso; ?>" /></td>
			<td><input type="text" name="shortCode[]" value="<?php echo $language->shortcode; ?>" size="10" maxlength="10" /></td>
			<td><input type="text" readonly="readonly" name="code[]" value="<?php echo $language->code; ?>" size="13" maxlength="20" /></td>
			<td><input type="text" name="fallbackCode[]" value="<?php echo $language->fallback_code; ?>" size="10" maxlength="20" /></td>
			<td nowrap="nowrap">
	      		<input type="text" name="image[]" value="<?php echo $language->image; ?>" size="30" />
	      		<?php echo $this->languageImage($language, 'components/com_joomfish/images/', null, '/images/M_images/', $language->name); ?>
			</td>
	      <td><input type="text" name="order[]" value="<?php echo $language->ordering; ?>" size="5" maxlength="5" /></td>
	      <td align="center"><input type="hidden" name="params[]" value="<?php echo $language->params; ?>" />
	      <?php if ( $language->id>0) { ?>
	      	<a href="<?php echo JRoute::_("index.php?option=com_joomfish&amp;task=languages.translateConfig&amp;cid[]=".$language->id);?>"><?php echo JHTML::_('image.administrator', 'menu/icon-16-config.png', '/images/', null, null, JText::_("EDIT"));?></a>
	      <?php } else { ?>
	      	<?php echo JHTML::_('image.administrator', 'menu/icon-16-config.png', '/images/', null, null, JText::_("EDIT"));?>
	      <?php }?>
		  </td>
		      <?php
		      $k = 1 - $k;
		      $i++;
		}?>
		</tr>
	</tbody>
	</table>

<input type="hidden" name="option" value="com_joomfish" />
<input type="hidden" name="task" value="languages.show" />
<input type="hidden" name="boxchecked" value="0" />
<input type="hidden" name="filter_order" value="<?php echo $this->lists['order']; ?>" />
<input type="hidden" name="filter_order_Dir" value="<?php echo $this->lists['order_Dir']; ?>" />
<?php echo JHTML::_( 'form.token' ); ?>
</div>
</form>
