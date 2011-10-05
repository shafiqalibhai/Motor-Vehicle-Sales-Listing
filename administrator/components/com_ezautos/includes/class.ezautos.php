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


    
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );



class mosezautos extends mosDBTable {

var $id=null;
var $cid=null;
var $vin=null;
var $rego=null;
var $year=null;
var $make=null;
var $model=null;
// Hrvoje
var $country=null;
var $city=null;

var $derivative=null;
var $engine=null;
var $price=null;
var $price_type=null;
var $showprice=null;
var $trans=null;
var $mileage=null;
var $colour=null;
var $intcolour=null;
var $fuel=null;
var $fuelsystem=null;
var $borestroke=null;
var $power=null;
var $torque=null;
var $weightpower=null;
var $frontbrakes=null;
var $rearbrakes=null;
var $wheeldims=null;
var $turncirc=null;
var $compressionratio=null;
var $tankcapacity=null;
var $extlength=null;
var $extwidth=null;
var $extheight=null;
var $fronttrack=null;
var $reartrack=null;
var $wheelbase=null;
var $frontsus=null;
var $rearsus=null;
var $kerbweight=null;
var $groundclear=null;
var $seatcap=null;
var $cityfuel=null;
var $highwayfuel=null;
var $towingcap=null;
var $countryorigin=null;
var $doorsbody=null;
var $stocknum=null;
var $type=null;
var $freq=null;
var $numowners=null;
var $incltax=null;
var $co2=null;
var $odometer=null;
var $doors=null;
var $body=null;
var $finance=null;
var $deposit=null;
var $repayments=null;
var $term=null;
var $termtype=null;
var $features=null;
var $mileage_unit=null;
var $onroad=null;
var $tax_exp=null;
var $nct_exp=null;
var $images=null;
var $tax_class=null;
var $yearreg=null;
var $yearinsp=null;
var $monthreg=null;
var $monthinsp=null;
var $yearemiss=null;
var $monthemiss=null;
var $smalldesc=null;
var $longdesc=null;
var $image1=null;
var $image2=null;
var $image3=null;
var $image4=null;
var $image5=null;
var $image6=null;
var $image7=null;
var $image8=null;
var $image9=null;
var $image10=null;
var $image11=null;
var $image12=null;
var $image1desc=null;
var $image2desc=null;
var $image3desc=null;
var $image4desc=null;
var $image5desc=null;
var $image6desc=null;
var $image7desc=null;
var $image8desc=null;
var $image9desc=null;
var $image10desc=null;
var $image11desc=null;
var $image12desc=null;
var $image13=null;
var $image14=null;
var $image15=null;
var $image16=null;
var $image17=null;
var $image18=null;
var $image19=null;
var $image20=null;
var $image21=null;
var $image22=null;
var $image23=null;
var $image24=null;
var $image13desc=null;
var $image14desc=null;
var $image15desc=null;
var $image16desc=null;
var $image17desc=null;
var $image18desc=null;
var $image19desc=null;
var $image20desc=null;
var $image21desc=null;
var $image22desc=null;
var $image23desc=null;
var $image24desc=null;
var $video=null;
var $declat=null;
var $declong=null;
var $listdate=null;
var $lastupdate=null;
var $expdate=null;
var $hits=null;
var $tag=null;
var $availability=null;
var $showfeat=null;
var $airco=null;
var $pwin=null;
var $psteer=null;
var $cruise=null;
var $airbag=null;
var $abs=null;
var $amfm=null;
var $cdp=null;
var $atheft=null;
var $tilt=null;
var $custom1a=null;
var $custom2a=null;
var $custom3a=null;
var $custom4a=null;
var $custom5a=null;
var $custom6a=null;
var $custom7a=null;
var $custom8a=null;
var $custom9a=null;
var $custom10a=null;
var $pcode=null;
var $pdfinfo=null;
var $owner=null;
var $premium=null;
var $featured=null;
var $published=null;
var $checked_out=null;
var $checked_out_time=null;
var $editor=null;
var $metadesc=null;
var $metakey=null;
var $email_status=null;

  
  function mosezautos( &$db ) {
    $this->mosDBTable( '#__ezautos', 'id', $db );
  }
function check() {
	$this->id = intval( $this->id );
	return true;
	}
}
  

class mosLeads extends mosDBTable {

var $lid=null;
var $lead_name=null;
var $hphone=null;
var $wphone=null;
var $mobile=null;
var $fax=null;
var $email=null;
var $cid=null;
var $make=null;
var $model=null;

// Hrvoje
var $country=null;
var $city=null;

var $budget=null;
var $maxprice=null;
var $minyear=null;
var $maxyear=null;
var $source=null;
var $comments=null;
var $date=null;
var $checked_out=null;
var $checked_out_time=null;
var $editor=null;
var $published=null;
var $html=null;
var $listwanted=null;

function mosLeads( &$db ) {
	$this->mosDBTable( '#__ezautos_leads', 'lid', $db );
	}
function check() {
	$this->lid = intval( $this->lid );
	return true;
	}
}


class mosCatgs extends mosDBTable {

var $cid=null;
var $name=null;
var $description=null;
var $image=null;
var $taxclass=null;
var $published=null;
var $ordering=null;
var $access=null;
var $checked_out=null;
var $checked_out_time=null;
var $editor=null;

function mosCatgs( &$db ) {
	$this->mosDBTable( '#__ezautos_catg', 'cid', $db );
	}
function check() {
	$this->cid = intval( $this->cid );
	return true;
	}
}


class mosPrice extends mosDBTable {

var $pid=null;
var $range=null;
var $display=null;
var $published=null;
var $ordering=null;
var $checked_out=null;
var $checked_out_time=null;
var $editor=null;

	function mosPrice( &$db ) {

		$this->mosDBTable( '#__ezautos_price', 'pid', $db );

  }
function check() {
	$this->pid = intval( $this->pid );
	return true;
	}
}


class mosMake extends mosDBTable {

var $maid=null;
var $make=null;
var $make_image=null;
var $published=null;
var $ordering=null;
var $checked_out=null;
var $checked_out_time=null;
var $editor=null;

	function mosMake( &$db ) {

		$this->mosDBTable( '#__ezautos_make', 'maid', $db );

  }
function check() {
	$this->maid = intval( $this->maid );
	return true;
	}
}

// Hrvoje
class mosCountry extends mosDBTable {
var $coid=null;
var $country=null;
var $country_image=null;
var $published=null;
var $ordering=null;
var $checked_out=null;
var $checked_out_time=null;
var $editor=null;
	function mosCountry( &$db ) {
		$this->mosDBTable( '#__ezautos_country', 'coid', $db );
  }
function check() {
	$this->coid = intval( $this->coid );
	return true;
	}
}
///////////////////


class mosModel extends mosDBTable {

var $moid=null;
var $makeid=null;
var $model=null;
var $ordering=null;
var $published=null;
var $checked_out=null;
var $checked_out_time=null;
var $editor=null;

	function mosModel( &$db ) {

		$this->mosDBTable( '#__ezautos_model', 'moid', $db );

  }
function check() {
	$this->moid = intval( $this->moid );
	return true;
	}
}


// Hrvoje
class mosCity extends mosDBTable {
var $ciid=null;
var $coutryid=null;
var $city=null;
var $ordering=null;
var $published=null;
var $checked_out=null;
var $checked_out_time=null;
var $editor=null;
	function mosCity( &$db ) {
		$this->mosDBTable( '#__ezautos_city', 'ciid', $db );
  }
function check() {
	$this->ciid = intval( $this->ciid );
	return true;
	}
}
////////////////////////





class mosEnginesize extends mosDBTable {

var $esid=null;
var $engine=null;
var $published=null;
var $ordering=null;
var $checked_out=null;
var $checked_out_time=null;
var $editor=null;

	function mosEnginesize( &$db ) {

		$this->mosDBTable( '#__ezautos_enginesize', 'esid', $db );

  }
function check() {
	$this->esid = intval( $this->esid );
	return true;
	}
}


class mosLightbox extends mosDBTable {

var $llid=null;
var $uid=null;
var $propid=null;
var $date=null;

	function mosLightbox( &$db ) {

		$this->mosDBTable( '#__ezautos_lightbox', 'llid', $db );

  }
function check() {
	$this->llid = intval( $this->llid );
	return true;
	}
}


class mosProfile extends mosDBTable {

	var	$prid=null;
	var	$mid=null;
	var $dealer_name=null;
	var $dealer_company=null;
	var $dealer_type=null;
	var $dealer_info=null;
	var $dealer_unitnum=null;
	var $dealer_address1=null;
	var $dealer_address2=null;
	var $dealer_locality=null;
	var $dealer_pcode=null;
	var $dealer_state=null;
	var $dealer_country=null;
	var $show_addy=null;
	var $dealer_declat=null;
	var $dealer_declong=null;
	var $phone_pref=null;
	var $dealer_phone=null;
	var $fax_pref=null;
	var $dealer_fax=null;
	var $mobile_pref=null;
	var $dealer_mobile=null;
	var $dealer_sms=null;
	var $show_sms=null;
	var $dealer_exempt=null;
	var $feat_upgr=null;
	var $publish_own=null;
	var $reset_own=null;
	var $dealer_email=null;
	var $dealer_msn=null;
	var $dealer_skype=null;
	var $dealer_ymsgr=null;
	var $dealer_icq=null;
	var $dealer_web=null;
	var $dealer_blog=null;
	var $dealer_image=null;
	var $dealer_logo=null;
	var $dealer_pdf=null;
	var $page_topper=null;
	var $linkit=null;
	var $dealer_bio=null;
	var $carlister=null;
	var $published=null;
	var $checked_out=null;
	var $checked_out_time=null;
	var $editor=null;

function mosProfile( &$db ) {
	$this->mosDBTable( '#__ezautos_profile', 'prid', $db );
	}
function check() {
	$this->prid = intval( $this->prid );
	return true;
	}
}


class mosezContent extends mosDBTable {

	var $contid=null;
	var $title=null;
	var $content=null;
	var $checked_out=null;
	var $checked_out_time=null;
	var $editor=null;

	function mosezContent( &$db ) {

		$this->mosDBTable( '#__ezautos_content', 'contid', $db );

  }
function check() {
	$this->contid = intval( $this->contid );
	return true;
	}
}




class mosezMail extends mosDBTable {

	var $mailid=null;
	var $name=null;
	var $email=null;
	var $confirmed=null;
	var $exported=null;
	var $date=null;
	var $checked_out=null;
	var $checked_out_time=null;
	var $editor=null;

	function mosezMail( &$db ) {

		$this->mosDBTable( '#__ezautos_mail', 'mailid', $db );

  }
function check() {
	$this->mailid = intval( $this->mailid );
	return true;
	}
}


class mosezPostcodes extends mosDBTable {

	var $id=null;
	var $pcode=null;
	var $city=null;
	var $state=null;
	var $county=null;
	var $latitude=null;
	var $longitude=null;

	function mosezPostcodes( &$db ) {

		$this->mosDBTable( '#__ezautos_postcodes', 'id', $db );

  }
function check() {
	$this->id = intval( $this->id );
	return true;
	}
}


class mosFeatures extends mosDBTable {

var $id=null;
var $feature=null;
var $ordering=null;

	function mosFeatures( &$db ) {

		$this->mosDBTable( '#__ezautos_features', 'id', $db );

  }
function check() {
	$this->id = intval( $this->id );
	return true;
	}
}


class mosLettermanSubs extends mosDBTable {

	var $subscriber_id=null;
	var $subscriber_name=null;
	var $user_id=null;
	var $subscriber_email=null;
	var $confirmed=null;
	var $subscribe_date=null;

	function mosLettermanSubs( &$database ) {
		$this->mosDBTable( '#__letterman_subscribers', 'subscriber_id', $database );
	}
}




/**************************************************\
 REALLY BASIC FUNCTION TO CHECK VALID EMAIL FORMATS
\**************************************************/


function check_email($str){

    //returns 1 if valid email, 0 if not

    if(preg_match("/[\w\.\-]+@\w+[\w\.\-]*?\.\w{1,4}/", $str))


        return 1;

    else

        return 0;
}




class ezauHTML {

function ezToolTip($tooltip) {
	global $mosConfig_live_site;
	$html = "<a href=\"#\" onMouseOver=\"return overlib('" . $tooltip . "', BELOW, RIGHT);\" onmouseout=\"return nd();\"><img src=\"" . $mosConfig_live_site . "/components/com_ezautos/images/fyi.gif\" border=\"0\" /></a>";
	return $html;
}

function ezWarning($warning) {
	global $mosConfig_live_site;
	$html = "<a href=\"#\" onMouseOver=\"return overlib('" . $warning . "', BELOW, RIGHT);\" onmouseout=\"return nd();\"><img src=\"" . $mosConfig_live_site . "/components/com_ezautos/images/warning.gif\" border=\"0\" /></a>";
	return $html;
}

	function makeOption( $value, $text='' ) {
		$obj = new stdClass;
		$obj->value = $value;
		$obj->text = trim( $text ) ? $text : $value;
		return $obj;
	}

	function selectList ( &$arr, $tag_name, $tag_attribs, $key, $text, $selected=NULL ) {
		if (is_array($arr)){
		  reset( $arr );
		}
		$html = "\n<select name=\"$tag_name\" $tag_attribs>";
		for ($i=0, $n=count( $arr ); $i < $n; $i++ ) {
			$k = $arr[$i]->$key;
			$t = $arr[$i]->$text;
			$id = isset($arr[$i]->id) ? $arr[$i]->id : null;

			$extra = '';
			$extra .= $id ? " id=\"" . $arr[$i]->id . "\"" : '';
			if (is_array( $selected )) {
				foreach ($selected as $obj) {
					$k2 = $obj->$key;
					if ($k == $k2) {
						$extra .= " selected=\"selected\"";
						break;
					}
				}
			} else {
				$extra .= ($k == $selected ? " selected=\"selected\"" : '');
			}
			$html .= "\n\t<option value=\"".$k."\"$extra>" . $t . "</option>";
		}
		$html .= "\n</select>\n";
		return $html;
	}

	function yesnoSelectList( $tag_name, $tag_attribs, $selected, $yes=false, $no=false ) {
		$arr = array(
		ezauHTML::makeOption( '0', $no  ? $no  : _EZAUTOS_CONFIG_NO ),
		ezauHTML::makeOption( '1', $yes ? $yes : _EZAUTOS_CONFIG_YES ),
		);

		return ezauHTML::selectList( $arr, $tag_name, $tag_attribs, 'value', 'text', $selected );
	}

	function radioList( &$arr, $tag_name, $tag_attribs, $selected=null, $key='value', $text='text' ) {
		reset( $arr );
		$html = "";
		foreach ($arr as $choice) {
			$id = @$choice->id;
			$extra = $id ? " id=\"" . $choice->id . "\"" : '';
			if (is_array( $selected )) {
				foreach ($selected as $obj) {
					if ($choice->$key == $obj->$key) {
						$extra .= ' selected="selected"';
						break;
					}
				}
			} else {
				$extra .= ($choice->$key == $selected ? " checked=\"checked\"" : '');
			}
			$html .= "\n\t<input type=\"radio\" name=\"$tag_name\" value=\"".$choice->$key."\"$extra $tag_attribs />" . $choice->$text;
		}
		$html .= "\n";
		return $html;
	}

	function yesnoRadioList( $tag_name, $tag_attribs, $selected, $yes=false, $no=false ) {

		$arr = array(
		ezauHTML::makeOption( '0', $no  ? $no  : _EZAUTOS_CONFIG_NO ),
		ezauHTML::makeOption( '1', $yes ? $yes : _EZAUTOS_CONFIG_YES )
		);
		return ezauHTML::radioList( $arr, $tag_name, $tag_attribs, $selected );
	}


	function Images( $name, &$active, $javascript=NULL, $directory=NULL ) {
		global $mosConfig_absolute_path;

		if ( !$javascript ) {
			$javascript = "onchange=\"javascript:if (document.forms[0].image.options[selectedIndex].value!='') {document.imagelib.src='../images/stories/' + document.forms[0].image.options[selectedIndex].value} else {document.imagelib.src='../images/blank.png'}\"";
		}
		if ( !$directory ) {
			$directory = '/images/stories';
		}

		$imageFiles = mosReadDirectory( $mosConfig_absolute_path . $directory );
		$images = array(  ezauHTML::makeOption( '', _EZAUTOS_VLDET_CHOOSENEW ) );
		foreach ( $imageFiles as $file ) {
			if ( eregi( "bmp|gif|jpg|png", $file ) ) {
				$images[] = ezauHTML::makeOption( $file );
			}
		}
		$images = ezauHTML::selectList( $images, $name, 'class="inputbox" size="1" '. $javascript, 'value', 'text', $active );

		return $images;
	}



}



/**************************************************\
            AJAX STUFF FOR DROPDOWN LISTS
\**************************************************/


function includeAjax($option){
global $mosConfig_live_site;

if (mosGetParam($_REQUEST, 'task', '') != "newrss" && mosGetParam($_REQUEST, 'task', '') != "google") {

?>
<script type="text/javascript" src="<?php echo $mosConfig_live_site;?>/components/com_ezautos/library/ajax/ajax.js"></script>
<?php

}

}

?>