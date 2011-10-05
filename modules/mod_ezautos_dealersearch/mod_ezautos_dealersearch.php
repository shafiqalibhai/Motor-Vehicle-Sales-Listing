<?php

/**
* FileName: mod_ezautos_dealersearch.php
* Date: 01-11-2008
* License: Commercial copyright
* Script Version #: 2.7
* EZ Autos Version #: 5.2.0 stable
* Author: K.J. Strickland - http://www.raptorservices.com.au
**/

/** ensure this file is being included by a parent file */

defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

# Kill notices because people panic for no reason
error_reporting(E_ALL ^ E_NOTICE);

# call some core configuration variables:
global $mainframe, $mosConfig_lang;

DEFINE("EZADMIN_PATH1b","administrator/components/com_ezautos");

if (file_exists(EZADMIN_PATH1b."/config.ezautos.php")) {
  include(EZADMIN_PATH1b."/config.ezautos.php");
} else {
echo 'Configuration file not available';
}


# Get the right language file

if ($ea_cms == 3){
DEFINE("LANGUAGE_PATH1b","modules/mod_ezautos_dealersearch/mod_ezautos_dealersearch");
} else {
DEFINE("LANGUAGE_PATH1b","modules/mod_ezautos_dealersearch");
}

if (file_exists(LANGUAGE_PATH1b."/".$mainframe->getCfg( 'lang' ).".php")) {
  include(LANGUAGE_PATH1b."/".$mainframe->getCfg( 'lang' ).".php");
} elseif (file_exists(LANGUAGE_PATH1b."/english.php"))  {
  include(LANGUAGE_PATH1b."/english.php");
} else {
echo "Language file is not available";
}


  # Build Dealer Locality select list

	$sql	= "SELECT DISTINCT dl.dealer_locality as value, dl.dealer_locality as text FROM #__ezautos_profile AS dl WHERE dl.dealer_locality !='' ORDER by dl.dealer_locality ASC";
	$database->setQuery($sql);
	if (!$database->query()) {
		echo $database->stderr();
		return;
	}

	$dlocalitylist[] = mosHTML::makeOption( '', _MOD_EZAUTOS_DS3 );
	$dlocalitylist = array_merge( $dlocalitylist, $database->loadObjectList() );
	$lists['dealerloc'] = mosHTML::selectList( $dlocalitylist, 'dealer_locality', 'class="searchbox" size="1"','value', 'text', '');


  # Define dealer/seller type

	$dealer_typeit[] = mosHTML::makeOption( '', _MOD_EZAUTOS_DS4 );
  	$dealer_typeit[] = mosHTML::makeOption( _MOD_EZAUTOS_DS5, _MOD_EZAUTOS_DS5 );
  	$dealer_typeit[] = mosHTML::makeOption( _MOD_EZAUTOS_DS6, _MOD_EZAUTOS_DS6 );
  
  	$lists['dealer_type'] = mosHTML::selectList( $dealer_typeit, 'dealer_type', 'class="searchbox" size="1"' , 'value', 'text', '' );


echo '<table width="100%" class="moduletable' . $moduleclass_sfx .'">';

?>
	<tr>
		<td>

		<form name="dealersearchfilter" action="<?php echo sefRelToAbs("index.php?option=com_ezautos&amp;task=dealerresults&amp;Itemid=$myItemid");?>" method="post">
		<input type="hidden" name="option" value="com_ezautos" />
		<input type="hidden" name="Itemid" value="<?php echo $myItemid;?>" />
		<input type="hidden" name="task" value="dealerresults" />

			<table border="0" width="100%">

				<tr>
					<td><strong><?php echo _MOD_EZAUTOS_DS1;?>:-</strong><br />
<?php echo $lists['dealer_type'];?><br />
<?php echo $lists['dealerloc'];?><br /><input class="button" type="submit" name="<?php echo _MOD_EZAUTOS_DS2;?>" value="<?php echo _MOD_EZAUTOS_DS2;?>" /></td>
				</tr>
			</table>

		</form>

		</td>
	</tr>
</table>
