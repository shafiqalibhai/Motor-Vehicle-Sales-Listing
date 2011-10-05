/**
 * Picasa Webalbum Integration Library
 * This library was inspired and based on pwa  by Dieter Raber (http://www.gnu.org/copyleft/lesser.html)
 * @name pwi-0.3.js
 * @author Jeroen Diderik - http://www.multiprof.nl
 * @version 0.2
 * @date March 27, 2008
 * @copyright (c) 2008 Jeroen Diderik(www.multiprof.nl)
 * @license Creative Commons Attribution-Share Alike 3.0 Netherlands License - http://creativecommons.org/licenses/by-sa/3.0/nl/
 * @example Visit http://www.multiprof.nl/ for more informations about this library
 */
 

// ****  DONT CHANGE BELOW UNLESS YOU KNOW WHAT YOU ARE DOING ****
//preset globals
var pwi_currAlbum = "";
var pwi_currAlbumTitle = "";
var pwi_currPhoto = "";
var pwi_page = "";
var pwi_si = 1;
var pwi_storage_albums;
var pwi_storage_photos;
var pwi_storage_photo;
var pwi_history = "";

// various functions
//get querytring (for later use to make deeplinks)
function readGet() {
	var _GET = new Array();
	var uriStr = window.location.href.replace(/&amp;/g, '&');
	var paraArr,
	paraSplit;
	if (uriStr.indexOf('?') > -1) {
		var uriArr = uriStr.split('?');
		var paraStr = uriArr[1];
	} else {
		return _GET;
	}
	if (paraStr.indexOf('&') > -1) {
		paraArr = paraStr.split('&');
	} else {
		paraArr = new Array(paraStr);
	}
	for (var i = 0; i < paraArr.length; i++) {
		paraArr[i] = paraArr[i].indexOf('=') > -1 ? paraArr[i] : paraArr[i] + '=';
		paraSplit = paraArr[i].split('=');
		_GET[paraSplit[0]] = decodeURI(paraSplit[1].replace(/\+/g, ' '));
	}
	return _GET;
};
var _GET = readGet();

//fast string concat function ( var.push(x), var.toString() )
function StringCat() {
	var sp;
	var ep;
	var l = 0;
	this.push = function(what) {
		if (typeof(sp) == 'undefined') {
			ep = new Array();
			sp = ep;
		} else {
			var oep = ep;
			ep = new Array();
			oep[1] = ep;
		}
		ep[0] = what; ++l;
	};
	this.toString = function() {
		if (l == 0) return;
		while (l > 1) {
			var ptr = sp;
			var nsp = new Array();
			var nep = nsp;
			var nl = 0;
			while (typeof(ptr) != 'undefined') {
				if (typeof(nep[0]) == 'undefined') {
					nep[0] = ptr[0]; ++nl;
				} else {
					if (typeof(ptr[0]) != 'undefined') nep[0] += ptr[0];
					nep[1] = new Array();
					nep = nep[1];
				};
				ptr = ptr[1];
			};
			sp = nsp;
			ep = nep;
			l = nl;
		};
		return sp[0];
	};
}

function formatDateTime(dt) {
	var today = new Date(Number(dt));
	var year = today.getYear();
	if (year < 1000) {
		year += 1900
	};
	return (today.getDate() + "-" + (today.getMonth() + 1) + "-" + year + " " + today.getHours() + ":" + (today.getMinutes() < 10 ? "0" + today.getMinutes() : today.getMinutes()));
}

var photoids = new Array();


function getAlbums() {
	if (pwi_storage_albums) {
		show(false, pwi_storage_albums);
	} else {
		show(true, '');
		var url = 'http://picasaweb.google.com/data/feed/api/user/' + pwi_username + '?category=album&max-results=' + pwi_maxalbums + '&access=public&alt=json';
		$.getJSON(url, 'callback=?', albums);
	}
}

function getAlbum(albumid, newPage) {
	if (albumid != pwi_currAlbum || pwi_page != newPage) {
		pwi_page = newPage;
		pwi_currAlbum = albumid;
		pwi_si = ((pwi_page - 1) * pwi_maxresults) + 1;
		var url = 'http://picasaweb.google.com/data/feed/api/user/' + pwi_username + '/albumid/' + albumid + '?category=photo&max-results=' + pwi_maxresults + '&start-index=' + pwi_si + '&alt=json';
		show(true, '');
		$.getJSON(url, 'callback=?', album);
	} else {
		show(false, pwi_storage_photos);
	}
}

function fromHistory(hash) {
	if (hash) {
		var a,p;
		if (hash.indexOf("/") > 0) {
			a = hash.split("/")[0];
			p = hash.split("/")[1];
			getAlbum(a, p);
		}
	} else {
		getAlbums();
	}
}