/*------------------------------------------------------------------------
# JA Quartz for Joomla 1.5 - Version 1.0 - Licence Owner JA24521
# ------------------------------------------------------------------------
# Copyright (C) 2004-2008 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
# @license - Copyrighted Commercial Software
# Author: J.O.O.M Solutions Co., Ltd
# Websites:  http://www.joomlart.com -  http://www.joomlancers.com
# This file may not be redistributed in whole or significant part.
-------------------------------------------------------------------------*/

sfHover = function() {
	var sfEls = document.getElementById("ja-cssmenu").getElementsByTagName("li");
	for (var i=0; i<sfEls.length; ++i) {
		sfEls[i].onmouseover=function() {
			clearTimeout(this.timer);
			if(this.className.indexOf("sfhover") == -1)
				this.className+="sfhover";
		}
		sfEls[i].onmouseout=function() {
			this.timer = setTimeout(sfHoverOut.bind(this), 20);
		}
	}
}

function sfHoverOut() {
	clearTimeout(this.timer);
	this.className=this.className.replace(new RegExp("sfhover\\b"), "");
}

if (window.attachEvent) window.attachEvent("onload", sfHover);
