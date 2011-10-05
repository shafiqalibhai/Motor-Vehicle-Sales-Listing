<?php


#############################################################################
#                                                                           #
#  EZ Autos 5.2.0 - A Mambo/Joomla Motor Vehicle Sales Listing component    #
#  By: Kathy Strickland (aka PixelBunyiP)                                   #
#  Copyright (C) 2006 K.J. Strickland, Raptor Developments Pty Ltd          #
#  All rights reserved                                                      #
#  http://www.raptorservices.com.au                                         #
#  Released as a commercial component!                                      #
#                                                                           #
#############################################################################


//Don't allow direct linking
  defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );


class ezPageNav {


	var $limitstart = null;
	var $limit 		= null;
	var $total 		= null;


	function ezPageNav( $total, $limitstart, $limit ) {

		$this->total 		= (int) $total;
		$this->limitstart 	= (int) max( $limitstart, 0 );
		$this->limit 		= (int) max( $limit, 1 );

		if ($this->limit > $this->total) {
			$this->limitstart = 0;
		}
		if (($this->limit-1)*$this->limitstart > $this->total) {
			$this->limitstart -= $this->limitstart % $this->limit;
		}
	}


#  return string The html for the limit # input box


	function getBox () {
		$limits = array();
		for ($i=5; $i <= 30; $i+=5) {
			$limits[] = mosHTML::makeOption( "$i" );
		}
		$limits[] = mosHTML::makeOption( "50" );

		// build the html select list
		$html = mosHTML::selectList( $limits, 'limit', 'class="inputbox" size="1" onchange="document.pageForm.submit();"',
		'value', 'text', $this->limit );
		$html .= '<input type="hidden" name="limitstart" value="'.$this->limitstart.'" />';
		return $html;
	}


#  Write the html limit # input box for the pages


	function writeBox () {
		echo ezPageNav::getBox();
	}


#  return the page counter


	function writeCounter() {
		echo $this->getCounter();
	}


#  html for the page counter, eg Results 1-10 of the total


	function getCounter() {
		$html = '';
		$from_result = $this->limitstart+1;
		if ($this->limitstart + $this->limit < $this->total) {
			$to_result = $this->limitstart + $this->limit;
		} else {
			$to_result = $this->total;
		}
		if ($this->total > 0) {
			$html .= _EZAUTOS_NAV_RESULTS." $from_result - $to_result "._EZAUTOS_NAV_OF." $this->total";
		}
		return $html;
	}




#  return the page links, eg 1 2 3 ... blablabla


	function writeLinks() {
		echo $this->getLinks();
	}


#  html for the page links, eg previous, next, 1 2 3 ... blablabla


	function getLinks() {
		$html 				= '';
		$displayed_pages 	= 10;
		$total_pages 		= ceil( $this->total / $this->limit );
		$this_page 			= ceil( ($this->limitstart+1) / $this->limit );
		$start_loop 		= (floor(($this_page-1)/$displayed_pages))*$displayed_pages+1;
		if ($start_loop + $displayed_pages - 1 < $total_pages) {
			$stop_loop = $start_loop + $displayed_pages - 1;
		} else {
			$stop_loop = $total_pages;
		}


		if ($this_page > 1) {
			$page = ($this_page - 2) * $this->limit;
			$html .= '<a href="#start" class="pagenav" title="first page" onclick="javascript: document.pageForm.limitstart.value=0; document.pageForm.submit();return false;">'. _EZAUTOS_NAV_LT . _EZAUTOS_NAV_LT .'&nbsp;'. _EZAUTOS_NAV_START .'</a>';
			$html .= '<a href="#prev" class="pagenav" title="previous page" onclick="javascript: document.pageForm.limitstart.value='.$page.'; document.pageForm.submit();return false;">'. _EZAUTOS_NAV_LT .'&nbsp;'. _EZAUTOS_NAV_PREVIOUS .'</a>';
		} else {
			$html .= '<span class="pagenav">'. _EZAUTOS_NAV_LT . _EZAUTOS_NAV_LT .'&nbsp;'. _EZAUTOS_NAV_START .'</span> ';
			$html .= '<span class="pagenav">'. _EZAUTOS_NAV_LT .'&nbsp;'. _EZAUTOS_NAV_PREVIOUS .'</span> ';
		}

		for ($i=$start_loop; $i <= $stop_loop; $i++) {
			$page = ($i - 1) * $this->limit;
			if ($i == $this_page) {
				$html .= '<span class="pagenav"> '.$i.' </span>';
			} else {
				$html .= '<a href="#'.$i.'" class="pagenav" onclick="javascript: document.pageForm.limitstart.value='.$page.'; document.pageForm.submit();return false;"><strong>'.$i.'</strong></a>';
			}
		}

		if ($this_page < $total_pages) {
			$page = $this_page * $this->limit;
			$end_page = ($total_pages-1) * $this->limit;
			$html .= '<a href="#next" class="pagenav" title="next page" onclick="javascript: document.pageForm.limitstart.value='.$page.'; document.pageForm.submit();return false;">'. _EZAUTOS_NAV_NEXT .'&nbsp;'. _EZAUTOS_NAV_RT .'</a>';
			$html .= '<a href="#end" class="pagenav" title="end page" onclick="javascript: document.pageForm.limitstart.value='.$end_page.'; document.pageForm.submit();return false;">'. _EZAUTOS_NAV_END .'&nbsp;'. _EZAUTOS_NAV_RT . _EZAUTOS_NAV_RT .'</a>';
		} else {
			$html .= '<span class="pagenav">'. _EZAUTOS_NAV_NEXT .'&nbsp;'. _EZAUTOS_NAV_RT .'</span> ';
			$html .= '<span class="pagenav">'. _EZAUTOS_NAV_END .'&nbsp;'. _EZAUTOS_NAV_RT . _EZAUTOS_NAV_RT .'</span>';
		}
		return $html;
	}




}
?>