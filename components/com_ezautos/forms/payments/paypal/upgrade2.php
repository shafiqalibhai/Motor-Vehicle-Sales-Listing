<?php

#############################################################################
#                                                                           #
#  EZ Autos 5.0.0 - A Mambo Motor Vehicle Sales Listing component           #
#  By: Kathy Strickland (aka PixelBunyiP)                                   #
#  Copyright (C) 2006 K.J. Strickland, Raptor Developments Pty Ltd          #
#  All rights reserved                                                      #
#  http://www.raptorservices.com.au                                         #
#  Released as a commercial component!                                      #
#                                                                           #
#############################################################################


# Don't allow direct linking
  defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

?>

						<form action="https://<?php echo "$domain";?>/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_xclick" />
						<input type="hidden" name="bn" value="Raptor Services EZ Autos" />
						<input type="hidden" name="business" value="<?php echo $paypal_email;?>" />
						<input type="hidden" name="item_name" value="<?php echo stripslashes( _EZAUTOS_PREMIUM );?>" />
						<input type="hidden" name="item_number" value="<?php echo $row->id;?>" />
						<input type="hidden" name="amount" value="<?php echo $premium_cost;?>" />
						<input type="hidden" name="no_shipping" value="1" />
						<input type="hidden" name="return" value="<?php echo $mosConfig_live_site; ?>/index.php?option=com_ezautos&amp;Itemid=<?php echo $myItemid;?>&amp;task=success" />
						<input type="hidden" name="cancel_return" value="<?php echo $mosConfig_live_site; ?>/index.php?option=com_ezautos&amp;Itemid=<?php echo $myItemid;?>&amp;task=cancel" />
						<input type="hidden" name="no_note" value="1" />
						<input type="hidden" name="notify_url" value="<?php echo $mosConfig_live_site; ?>/index.php?option=com_ezautos&amp;Itemid=<?php echo $myItemid;?>&amp;task=upgrade2" />
						<input type="hidden" name="currency_code" value="<?php echo $currency;?>" />
						<input type="image" src="components/com_ezautos/images/<?php echo $button_image;?>" name="submit" alt="Make payments with PayPal - it's fast, free and secure!" />
						<input type="hidden" name="on0" value="Listing Owner" />
						<input type="hidden" name="os0" value="<?php echo $my->id;?>" />
						</form>


