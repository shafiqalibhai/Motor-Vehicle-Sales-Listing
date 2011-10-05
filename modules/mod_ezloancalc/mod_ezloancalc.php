<?php

/**
* FileName: mod_ezloancalc.php
* Date: 24-10-2008
* License: Commercial Copyright
* Script Version #: 2.7
* Author: K.J. Strickland - http://www.raptorservices.com.au
**/

/** ensure this file is being included by a parent file */
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

# call some core configuration variables:
global $mainframe, $mosConfig_lang;


$moduleclass_sfx    = $params->get( 'moduleclass_sfx' );
$cms12 	= $params->get( 'cms12' ) ;


# Get the right language file

if ($cms12 == 3){
DEFINE("LANGUAGE_PATH12","modules/mod_ezloancalc/mod_ezloancalc");
} else {
DEFINE("LANGUAGE_PATH12","modules/mod_ezloancalc");
}

if (file_exists(LANGUAGE_PATH12."/".$mainframe->getCfg( 'lang' ).".php")) {
  include(LANGUAGE_PATH12."/".$mainframe->getCfg( 'lang' ).".php");
} elseif (file_exists(LANGUAGE_PATH12."/english.php"))  {
  include(LANGUAGE_PATH12."/english.php");
} else {
echo "Language file is not available or EZ LoanCalc is not configured correctly for the CMS you're using";
}


echo '<table width="100%" class="moduletable' . $moduleclass_sfx .'">';
echo '<tr>';
echo '<td>';

?>

<?php echo _EZLOANCALC_INTRO; ?>
		</td>
   </tr>
	<tr>
		<td>

 <script type="text/javascript">

<!--

function calc()
{
f = document.repayment
amt = f.amt.value
annual_int = f.interest.value/100
term = f.term.value
monthly = annual_int/12
monthly_pay = Math.floor((amt*monthly)/(1-Math.pow((1+monthly),(-1*term*12)))*100)/100
f.monthly.value = currency(monthly_pay) 
}

function currency(num)
{
var dollars = Math.floor(num);
for (var i = 0; i < num.length; i++)
{
  if (num.charAt(i) == ".")
break;
}
var cents = "" + Math.round(num * 100);
cents = cents.substring(cents.length-2, cents.length);
return (dollars + "." + cents)
}

//-->

</script>



<form method="post" action="" name="repayment">

<table>
	<tr>
		<td>
		<?php echo _EZLOANCALC_AMOUNT; ?>:<br />
		<?php echo _EZLOANCALC_CURRENCY; ?> 
		<input type="text" name="amt" size="15" maxlength="15" class="inputbox" />
		</td>
   </tr>
   <tr> 
		<td><?php echo _EZLOANCALC_RATE; ?>:<br />
		&nbsp;&nbsp; 
		<input type="text" name="interest" size="15" maxlength="15" class="inputbox" />
		<?php echo _EZLOANCALC_PERCENT; ?>
		</td>
   </tr>
   <tr> 
		<td><?php echo _EZLOANCALC_TERM; ?>:<br />
		&nbsp;&nbsp; 
		<input type="text" name="term" size="15" maxlength="15" class="inputbox" />
		<?php echo _EZLOANCALC_YRS; ?>
		</td>
   </tr>
   <tr> 
		<td><br />
		<input type="button" onclick="calc()" name="<?php echo _EZLOANCALC_CALC; ?>" value="<?php echo _EZLOANCALC_CALC; ?>" class="button" />
		<input type="reset" name="<?php echo _EZLOANCALC_CLEAR; ?>" value="<?php echo _EZLOANCALC_CLEAR; ?>"  class="button" />
		</td>
   </tr>
   <tr> 
		<td><br /><?php echo _EZLOANCALC_REPAY; ?>:<br />
		<?php echo _EZLOANCALC_CURRENCY; ?> 
		<input type="text" name="monthly" size="15" maxlength="15" class="inputbox" />
		</td>
   </tr>
</table>

</form>

		</td>
   </tr>
</table>

