/**
* @version		$Id: fckeditor.php 1154 18-1-2008 AW
* @package		JoomlaFCK
* @copyright	Copyright (C) 2006 - 2008 WebXSolution Ltd. All rights reserved.
* @license		Creative Commons Licence
* The code for this additional work for the FCKeditor has been  been written/modified by WebxSolution Ltd.
* You may not copy or distribute the work without written consent
* from WebxSolution Ltd.
*/
var JFCKFileBrowserImages = new Array();JFCKFileBrowserImages.process = function(size){var TBElement = document.getElementById("tableFiles"); var SPANElements = TBElement.getElementsByTagName("span"); var process = 0; if(navigator.userAgent.match(/MSIE/i)){process = 1;}; var spanelem = null; var imgelem = null; var newImg = null; for(var i = 0;i < SPANElements.length;i++){spanelem = SPANElements.item(i); newImg = new Image();imgelem = spanelem.childNodes.item(0); newImg.name = imgelem.id; newImg.src = imgelem.src; var height = newImg.height; var width = newImg.width; this.push(newImg); if(process && height && width){spanelem.style.height =  (height < (2*size))  ? (2*size)  + "px" :"auto";spanelem.style.width =  (width <  (2*size)) ? (2*size) + "px" :"auto"; if(imgelem && imgelem.tagName == 'IMG' && imgelem.src.match(/.+\.(gif|jpg|png)$/i)){imgelem.style.height =  (height > (4*size))  ? (4*size)  + "px" :"auto";imgelem.style.width =  (width >  (4*size) ) ? (4*size) + "px" :"auto";imgelem.height = height;imgelem.width = width;}}}}; function AddPreviewDescriptions (){for(var i = 0;i < JFCKFileBrowserImages.length;i++){var image = JFCKFileBrowserImages[i]; var SPANElement = document.getElementById(image.name).parentNode; var DIVElement = document.createElement("div");DIVElement.id = "previewText";DIVElement.innerHTML = '<div><strong>FileName<\/strong>: '+ image.name  + '<\/div><div>' + image.height + ' x' +image.width + 'px<\/div>';SPANElement.appendChild(DIVElement);}};JFCKFileBrowserImages.process(50);AddPreviewDescriptions();