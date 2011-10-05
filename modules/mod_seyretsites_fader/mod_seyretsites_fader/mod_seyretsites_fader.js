/*
// "Simple Image Rotator" Module for Joomla! 1.0.x - Version 1.0
// License: http://www.gnu.org/copyleft/gpl.html
// Authors: Fotis Evangelou - George Chouliaras
// Copyright (c) 2006 - 2007 JoomlaWorks.gr - http://www.joomlaworks.gr
// Project page at http://www.joomlaworks.gr - Demos at http://demo.joomlaworks.gr
// ***Last update: March 23rd, 2007***
*/

var delay = 5000;
var transition = 40;
var imageContainer = 'jw-sir';
var preLoader = 'jw-sir-loading';
var d=document, imgs = new Array(), zInterval = null, current=0, pause=false;
function so_init() {
	if(!d.getElementById || !d.createElement)return;
	imgs = d.getElementById(imageContainer).getElementsByTagName("img");
	for(i=1;i<imgs.length;i++) imgs[i].xOpacity = 0;
	imgs[0].style.display = "block";
	imgs[0].xOpacity = .99;
	setTimeout(so_xfade,delay);
}
function so_xfade() {
	cOpacity = imgs[current].xOpacity;
	nIndex = imgs[current+1]?current+1:0;
	nOpacity = imgs[nIndex].xOpacity;
	cOpacity-=.05; 
	nOpacity+=.05;
	imgs[nIndex].style.display = "block";
	imgs[current].xOpacity = cOpacity;
	imgs[nIndex].xOpacity = nOpacity;
	setOpacity(imgs[current]); 
	setOpacity(imgs[nIndex]);
	if(cOpacity<=0) {
		imgs[current].style.display = "none";
		current = nIndex;
		setTimeout(so_xfade,delay);
	} else {
		setTimeout(so_xfade,transition);
	}
	function setOpacity(obj) {
		if(obj.xOpacity>.99) {
			obj.xOpacity = .99;
			return;
		}
		obj.style.opacity = obj.xOpacity;
		obj.style.MozOpacity = obj.xOpacity;
		obj.style.filter = "alpha(opacity=" + (obj.xOpacity*100) + ")";
	}
}
function hideLoading() {document.getElementById(preLoader).style.display = 'none';}

// Load everything up
function init_ahr() {
    if (arguments.callee.done) return;
    arguments.callee.done = true;
		so_init();
		hideLoading();
};
// DOM2
if ( typeof window.addEventListener != "undefined" ) { window.addEventListener( "load", init_ahr, false ); }
// IE 
else if ( typeof window.attachEvent != "undefined" ) { window.attachEvent( "onload", init_ahr ); }
else {
	if ( window.onload != null ) {
		var oldOnload = window.onload;
		window.onload = function ( e ) {
			oldOnload( e );
			init_ahr();
		};
	}
	else 
		window.onload = init_ahr;
}
