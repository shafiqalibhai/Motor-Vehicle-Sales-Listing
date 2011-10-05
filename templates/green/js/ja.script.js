/*------------------------------------------------------------------------
# JA Quartz for Joomla 1.5 - Version 1.0 - Licence Owner JA24521
# ------------------------------------------------------------------------
# Copyright (C) 2004-2008 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
# @license - Copyrighted Commercial Software
# Author: J.O.O.M Solutions Co., Ltd
# Websites:  http://www.joomlart.com -  http://www.joomlancers.com
# This file may not be redistributed in whole or significant part.
-------------------------------------------------------------------------*/
function switchFontSize (ckname,val){
	var bd = $E('body');
	switch (val) {
		case 'inc':
		if (CurrentFontSize+1 < 7) {
			bd.removeClass('fs'+CurrentFontSize);
			CurrentFontSize++;
			bd.addClass('fs'+CurrentFontSize);
		}
		break;
		case 'dec':
		if (CurrentFontSize-1 > 0) {
			bd.removeClass('fs'+CurrentFontSize);
			CurrentFontSize--;
			bd.addClass('fs'+CurrentFontSize);
		}
		break;
		default:
		bd.removeClass('fs'+CurrentFontSize);
		CurrentFontSize = val;
		bd.addClass('fs'+CurrentFontSize);
	}
	Cookie.set(ckname, CurrentFontSize,{duration:365});
}

function switchTool (ckname, val) {
	createCookie(ckname, val, 365);
	window.location.reload();
}

function createCookie(name,value,days) {
	if (days) {
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else expires = "";
	document.cookie = name+"="+value+expires+"; path=/";
}

String.prototype.trim = function() { return this.replace(/^\s+|\s+$/g, ""); };

//addEvent - attach a function to an event
function jaAddEvent(obj, evType, fn){
	if (obj.addEventListener){
		obj.addEventListener(evType, fn, false);
		return true;
	} else if (obj.attachEvent){
		var r = obj.attachEvent("on"+evType, fn);
		return r;
	} else {
		return false;
	}
}

function equalHeight(){	
	if ($('ja-botsl')) {
		makeEqualHeight (getElementsByClass ('moduletable.*', $('ja-botsl'), 'div'));
	}	
}

function makeEqualHeight(divs, offset) {
	divs = $$(divs);
	if (!offset) offset = 0;
	if(!divs || divs.length < 2) return;
	var maxh = 0;
	divs.each(function(el, i){
		var ch = el.getCoordinates().height;
		maxh = (maxh < ch) ? ch : maxh;
	},this);
	maxh += offset;
	divs.each(function(el, i){
		el.setStyle('height', maxh-el.getStyle('padding-top').toInt()-el.getStyle('padding-bottom').toInt());
	},this);
}

function getDeepestDiv (div) {
	while (div.getChildren().length==1 && (div.getChildren()[0].tagName == 'DIV'))
	{
		div = div.getChildren()[0];
	}
	return div;
}

function preloadImages () {
	var imgs = new Array();
	for (var i = 0; i < arguments.length; i++) {
		var imgsrc = arguments[i];
		imgs[i] = new Image();
		imgs[i].src = imgsrc;
	}
}

//Add span to module title
function addSpanToTitle () {
	//var colobj = document.getElementById ('ja-col');
	//if (!colobj) return;
	var modules = getElementsByClass ('module.*', null, "div");
	if (!modules) return;
	for (var i=0; i<modules.length; i++) {
		var module = modules[i];
		var title = module.getElementsByTagName ("h3")[0];
		if (title) {
			text = title.innerHTML;
			var pos = text.indexOf(' ');
			if (pos!=-1) {
				title.innerHTML = "<span>"+text.substr(0,pos)+"</span>"+text.substr(pos);
			}else{
				title.innerHTML = "<span>"+text+"</span>";
			}
		}
	}
}

function makeTransBg(el, bgimgdf, sizingMethod, type, offset){
	var objs = el;
	if(!objs) return;
	if ($type(objs) != 'array') objs = [objs];
	if(!sizingMethod) sizingMethod = 'crop';
	if(!offset) offset = 0;
	var blankimg = siteurl + 'images/blank.png';
	objs.each(function(obj) {
		var bgimg = bgimgdf;
		if (obj.tagName == 'IMG') {
			//This is an image
			if (!bgimg) bgimg = obj.src;
			if (!(/\.png$/i).test(bgimg) || (/blank\.png$/i).test(bgimg)) return;

			obj.setStyle('height',obj.offsetHeight);
			obj.setStyle('width',obj.offsetWidth);
			obj.src = blankimg;
			obj.setStyle ('visibility', 'visible');
			obj.setStyle('filter', "progid:DXImageTransform.Microsoft.AlphaImageLoader(src="+bgimg+", sizingMethod='"+sizingMethod+"')");
		}else{
			//Background
			if (!bgimg) bgimg = obj.getStyle('backgroundImage');
			var pattern = new RegExp('url\s*[\(\"\']*([^\'\"\)]*)[\'\"\)]*');
			if ((m = pattern.exec(bgimg))) bgimg = m[1];
			if (!(/\.png$/i).test(bgimg) || (/blank\.png$/i).test(bgimg)) return;
			if (!type)
			{
				obj.setStyles({'background': 'none'});

				if(obj.getStyle('position')!='absolute' && obj.getStyle('position')!='relative') {
					obj.setStyle('position', 'relative');
				}

				obj.getChildren().each(function(el){
					if(el.getStyle('position')!='absolute' && el.getStyle('position')!='relative')
					{
						el.setStyle('position', 'relative');
					}
					el.setStyle('z-index',2);
				});
				//Create background layer:
				var bgdiv = new Element('IMG');
				bgdiv.src = blankimg;
				bgdiv.width = obj.offsetWidth - offset;
				bgdiv.height = obj.offsetHeight - offset;
				bgdiv.setStyles({
				'position': 'absolute',
				'top': 0,
				'left': -obj.getStyle('padding-left').toInt()
				});

				bgdiv.className = 'TransBG';

				bgdiv.setStyle('filter', "progid:DXImageTransform.Microsoft.AlphaImageLoader(src="+bgimg+", sizingMethod='"+sizingMethod+"')");
				bgdiv.inject(obj, 'top');
				//alert(obj.innerHTML + '\n' + bgdiv.innerHTML);
			} else {
				obj.setStyle('filter', "progid:DXImageTransform.Microsoft.AlphaImageLoader(src="+bgimg+", sizingMethod='"+sizingMethod+"')");
			}
		}
	}.bind(this));
}

function isIE6() {
	version=0
	if (navigator.appVersion.indexOf("MSIE")!=-1){
		temp=navigator.appVersion.split("MSIE")
		version=parseFloat(temp[1])
	}
	return (version && (version < 7));
}

function getElementsByClass(searchClass,node,tag) {
	var classElements = new Array();
	var j = 0;
	if ( node == null )
	node = document;
	if ( tag == null )
	tag = '*';
	var els = node.getElementsByTagName(tag);
	var elsLen = els.length;
	var pattern = new RegExp('(^|\\s)'+searchClass+'(\\s|$)');
	for (var i = 0; i < elsLen; i++) {
		if ( pattern.test(els[i].className) ) {
			classElements[j] = els[i];
			j++;
		}
	}
	//alert(searchClass + j);
	return classElements;
}

//Add 1st item identity
jaAddFirstItemToTopmenu = function() {
	li = $E('#ja-topnav ul li');
	if(li) {
		li.addClass('ja-firstitem');
	}
}

jaRemoveLastContentSeparator = function () {
	var els = $$('#ja-content .article_separator');
	if (els && els.length) els[els.length-1].remove();
}

jaRemoveLastTrBg = function () {
	var els = $$('#ja-topsl3 tr');	
	if (!els || els.length<1) return;
	var obj = els[els.length-1];
	if (els[els.length-1].innerHTML.trim()=='' && els.length>2) {
		obj.remove();
		obj = els[els.length-2];
	}
	if (obj) obj.setStyle('background','none');
}

fixMenuWidth = function() {
	//Fix for dropline and split menu
		var lis = $('ja-mainnav').getElement('ul').getChildren();
		if (lis.length)
		{
			var w = Math.floor($('ja-mainnav').offsetWidth / lis.length);
			lis.setStyle ('width', w);
		}
}

moveReadmore = function () {
	var articles = $$('.contentpaneopen');
	if (!articles) return;
	articles.each(function(article) {
		var readmore = article.getElement('.readon');
		var article_content = article.getElement('.article-content');
		if (readmore && article_content) {
			readmore.remove().inject(article_content);
		}
	});
}

addIEHover = function() {
	if (!window.ie6) return;
	var obj = $('ja-topsl');
	if (!obj || !obj.getChildren()) return;
	obj.getChildren().each(function(el){
		var cls = 'topsl-hover-center';
		if (el.className.test ('ja-box-left')) {
			cls = 'topsl-hover-left';
		}
		if (el.className.test ('ja-box-right')) {
			cls = 'topsl-hover-right';
		}
		el.addEvent('mouseenter', function(){
			el.addClass(cls);
		}.bind(this));
		el.addEvent('mouseleave', function(){
			el.removeClass(cls);
		}.bind(this));
	});
}

window.addEvent ('load', function() {
	equalHeight();
	//new MenuIcon($E('#ja-mainnav'));
});

var boxes = [];
showBox = function (box,focusobj) {
	box=$(box);
	if (!box) return;
	boxes.include (box);
	if (box.getStyle('display') == 'none') {
		box.setStyles({
			display: 'block',
			opacity: 0
		});
	}
	if (box.status == 'show') {
		//hide
		box.status = 'hide';
		var fx = new Fx.Style (box,'opacity');
		fx.stop();
		fx.start (box.getStyle('opacity'), 0);
	} else {
		boxes.each(function(box1){
			if (box1!=box && box1.status=='show') {
				box1.status = 'hide';
				var fx = new Fx.Style (box1,'opacity');
				fx.stop();
				fx.start (box1.getStyle('opacity'), 0);
			}
		},this);
		box.status = 'show';
		var fx = new Fx.Style (box,'opacity',{onComplete:function(){if($(focusobj))$(focusobj).focus();}});
		fx.stop();
		fx.start (box.getStyle('opacity'), 1);
	}
}

//Add event for slideshow
slideshowOnWalk = function () {
	if (window.JaSlideshow) {
		var n = JaSlideshow.options.images.length;
		var inactive_opacity = 0.4;
		for (var i=0; i<n; i++) {
			var thumb = $('jsnav'+i);
			if (!thumb || thumb.className.test('active')) continue;
			thumb.setStyle ('opacity', inactive_opacity);
		}
		//add mask
		JaSlideshow.mask = new Element ('div', {'id':'ja-slideshow-mask'}).inject (JaSlideshow.elementdiv);
    if (JaSlideshow.options.urls) {
      JaSlideshow.mask.setStyle ('cursor', 'pointer');
  		JaSlideshow.mask.onclick = function() {
  			location.href = JaSlideshow.options.urls[0];
  		}
  	}
		JaSlideshow.onWalk = function (current) {
			//alert (current);
			var fxOptions = {duration:JaSlideshow.options.duration[0], wait:false}
			var thumb1 = $('jsnav'+current[2]);
			thumb1fx = new Fx.Style (thumb1, 'opacity', fxOptions);
			thumb1fx.start (inactive_opacity);
			var thumb2 = $('jsnav'+current[0]);
			thumb2fx = new Fx.Style (thumb2, 'opacity', fxOptions);
			thumb2fx.start (1);
			//thumb.setStyle ('opacity', 0.7);
      if (JaSlideshow.options.urls) {
  			JaSlideshow.mask.onclick = function() {
  				location.href = JaSlideshow.options.urls[current[2]];
  			}
  		}
		}
	}
}
