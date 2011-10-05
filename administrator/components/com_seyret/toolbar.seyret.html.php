<?php

//Seyret Component v.0.2//
/**
* Content code
* @package SEYRET
* @Copyright (C) 2007 Mustafa DINDAR
* @ All rights reserved
* @ seyret Component is Free Software
* @ Released under GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
* @version 0.2
**/	



defined('_VALID_MOS') or
	die('No access.');

class menu_seyret {

function intromenu() 
{
 	mosMenuBar::startTable();
    mosMenuBar::back(); 
    mosMenuBar::endTable(); 
}



// videocat toolbars***********************************
function videocatlist() 
{
 	mosMenuBar::startTable(); 
    mosMenuBar::divider(); 
    mosMenuBar::addNew("newvideocat");
    mosMenuBar::editList("editvideocat"); 
    mosMenuBar::deleteList("","removevideocat");
    mosMenuBar::spacer();
    mosMenuBar::endTable(); 
}

function editvideocat() 
{
 	mosMenuBar::startTable();
    mosMenuBar::save("savevideocat");
    mosMenuBar::cancel("cancelvideocat");
    mosMenuBar::spacer();
    mosMenuBar::endTable();
}

function admanagement() 
{
 	mosMenuBar::startTable(); 
    mosMenuBar::divider(); 
    mosMenuBar::addNew("newad");
    mosMenuBar::editList("editad"); 
    mosMenuBar::deleteList("","removead");
    mosMenuBar::spacer();
    mosMenuBar::endTable(); 
}


function imageadmanagement() 
{
 	mosMenuBar::startTable(); 
    mosMenuBar::divider(); 
    mosMenuBar::addNew("newimagead");
    mosMenuBar::editList("editimagead"); 
    mosMenuBar::deleteList("","removeimagead");
    mosMenuBar::spacer();
    mosMenuBar::endTable(); 
}


function editad() 
{
 	mosMenuBar::startTable();
    mosMenuBar::save("savead");
    mosMenuBar::cancel("cancelad");
    mosMenuBar::spacer();
    mosMenuBar::endTable();
}

function editimagead() 
{
 	mosMenuBar::startTable();
    mosMenuBar::save("saveimagead");
    mosMenuBar::cancel("cancelimagead");
    mosMenuBar::spacer();
    mosMenuBar::endTable();
}


//config********************************
function configuration() 
{
 	mosMenuBar::startTable();
    mosMenuBar::save("saveconfig");
    mosMenuBar::cancel("cancelconfig");
    mosMenuBar::spacer();
    mosMenuBar::endTable();
}

function videoslist($seyretpro) 
{
 	mosMenuBar::startTable(); 
    mosMenuBar::divider(); 
	if ($seyretpro=="1"){
		mosMenuBar::custom( 'backupvideo', 'save.png', 'save_f2.png','Backup', true );	
    }
	mosMenuBar::addNew("newvideo");
    mosMenuBar::editList("editvideo"); 
    mosMenuBar::deleteList("","removevideo");
    mosMenuBar::spacer();
    mosMenuBar::endTable(); 
}


function editvideo() 
{
 	mosMenuBar::startTable();
    mosMenuBar::save("savevideo");
    mosMenuBar::cancel("cancelvideo");
    mosMenuBar::spacer();
    mosMenuBar::endTable();
}


function extras() 
{
 	mosMenuBar::startTable();
    mosMenuBar::save("saveextras");
    mosMenuBar::cancel("cancelextras");
    mosMenuBar::spacer();
    mosMenuBar::endTable();
}


function permissions() 
{
 	mosMenuBar::startTable(); 
    mosMenuBar::divider(); 
    mosMenuBar::addNew("newseyretacl");
    mosMenuBar::editList("editseyretacl"); 
    mosMenuBar::deleteList("","removeseyretacl");
    mosMenuBar::spacer();
    mosMenuBar::endTable(); 
}


function editseyretacl() 
{
 	mosMenuBar::startTable();
    mosMenuBar::save("saveseyretacl");
    mosMenuBar::cancel("cancelseyretacl");
    mosMenuBar::spacer();
    mosMenuBar::endTable();
}



}//  menu_seyret  class'ýn sonu





?>