<?php
/**
* FILL IN
*/
 
defined('JPATH_BASE') or die();
 
class JElementMytimezones extends JElement
{
    var    $_name = 'Mytimezones';
 
    function fetchElement($name, $value, &$node, $control_name)
    {
        if(!strlen($value)) {
            $conf =& JFactory::getConfig();
            $value = $conf->getValue('config.offset');
        }
 
        $mytimezones = array (
            JHTML::_('select.option', 'Pacific/Auckland',      JText::_('IFLW (UTC -12.00)')),
            JHTML::_('select.option', 'Pacific/Samoa',          JText::_('SST (UTC -11.00)')),
            JHTML::_('select.option', 'Pacific/Honolulu',       JText::_('HST (UTC -10.00)')),
            JHTML::_('select.option', 'America/Anchorage',      JText::_('YST (UTC -9.00)')),
            JHTML::_('select.option', 'America/Los_Angeles',    JText::_('PST (UTC -8.00)')),
            JHTML::_('select.option', 'America/Denver',         JText::_('MST (UTC -7.00)')),
            JHTML::_('select.option', 'America/Chicago',        JText::_('CST (UTC -6.00)')),
            JHTML::_('select.option', 'America/New_York',       JText::_('EST (UTC -5.00)')),
            JHTML::_('select.option', 'America/Santiago',       JText::_('CLT (UTC -4.00)')),
            JHTML::_('select.option', 'America/Sao_Paulo',      JText::_('BST (UTC -3.00)')),
            JHTML::_('select.option', 'Atlantic/South_Georgia', JText::_('FST (UTC -2.00)')),
            JHTML::_('select.option', 'Atlantic/Azores',         JText::_('AT (UTC -1.00)')),
            JHTML::_('select.option', 'UTC',                    JText::_('GMT (UTC 0.00)')),
            JHTML::_('select.option', 'Europe/Brussels',        JText::_('CET (UTC +1.00)')),
            JHTML::_('select.option', 'Europe/Istanbul',        JText::_('EET (UTC +2.00)')),
            JHTML::_('select.option', 'Europe/Moscow',          JText::_('MSK (UTC +3.00)')),
            JHTML::_('select.option', 'Asia/Dubai',             JText::_('MSD (UTC +4.00)')),
            JHTML::_('select.option', 'Asia/Karachi',           JText::_('TMT (UTC +5.00)')),
            JHTML::_('select.option', 'Asia/Kolkata',           JText::_('IST (UTC +5.30)')),
            JHTML::_('select.option', 'Asia/Omsk',             JText::_('OMST (UTC +6.00)')),
            JHTML::_('select.option', 'Asia/Jakarta',           JText::_('ICT (UTC +7.00)')),
            JHTML::_('select.option', 'Asia/Singapore',        JText::_('AWST (UTC +8.00)')),
            JHTML::_('select.option', 'Asia/Tokyo',             JText::_('JST (UTC +9.00)')),
            JHTML::_('select.option', 'Australia/Adelaide',    JText::_('ACST (UTC +9.30)')),
            JHTML::_('select.option', 'Australia/Sydney',      JText::_('AEST (UTC +10.00)')),
            JHTML::_('select.option', 'Pacific/Noumea',        JText::_('MAGT (UTC +11.00)')),
            JHTML::_('select.option', 'Pacific/Auckland',      JText::_('NZST (UTC +12.00)'))
						);
 
        return JHTML::_('select.genericlist',  $mytimezones, ''.$control_name.'['.$name.']', ' class="inputbox"', 'value', 'text', $value, $control_name.$name );
    }
}
?>
