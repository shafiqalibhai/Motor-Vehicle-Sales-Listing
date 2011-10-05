<?php
/**
* @version 1.2 stable
* @package JDownloads
* @copyright (C) 2008 www.joomlaaddons.de
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
*
* 
*
*/

defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

 global $_VERSION;
 

class menujlist {


	function _DEFAULT(){
		
	}

	function EDIT_MENU()
	{   global $_VERSION;
		mosMenuBar::startTable();
		mosMenuBar::save();
		mosMenuBar::spacer();
		mosMenuBar::cancel();
		if ( $_VERSION->RELEASE < '1.5' ) {
			mosMenuBar::spacer();
			mosMenuBar::custom( '', '../components/com_jdownloads/images/home.png', '../components/com_jdownloads/images/home.png', _JLIST_BACKEND_TOOLBAR_MAIN, false );
		}  
		mosMenuBar::endTable();
	}

	function SETTINGS_MENU()
	{   global $_VERSION;
		mosMenuBar::startTable();
		mosMenuBar::save('config.save');
		mosMenuBar::spacer();
		mosMenuBar::cancel('cancel',_JLIST_BACKEND_TOOLBAR_CLOSE);
		if ( $_VERSION->RELEASE < '1.5' ) {
			mosMenuBar::spacer();
			mosMenuBar::custom( '', '../components/com_jdownloads/images/home.png', '../components/com_jdownloads/images/home.png', _JLIST_BACKEND_TOOLBAR_MAIN, false );
		}
		mosMenuBar::endTable();
	}
	function CATEGORIES_LIST(){
		global $_VERSION;
        mosMenuBar::startTable();
		if ( $_VERSION->RELEASE < '1.5' ) {
			mosMenuBar::custom('files.list', '../components/com_jdownloads/images/downloads_2.png', '../components/com_jdownloads/images/downloads_2.png', _JLIST_BACKEND_CPANEL_FILES, false);		
			mosMenuBar::spacer();        
			mosMenuBar::divider();
			mosMenuBar::spacer();
		}
		mosMenuBar::addNew('categories.edit');
		mosMenuBar::spacer();
		mosMenuBar::publish('categories.publish');
		mosMenuBar::unpublish('categories.unpublish');
		mosMenuBar::spacer();
		mosMenuBar::deleteList(_JLIST_BACKEND_CATSLIST_DEL_QUEST,'categories.delete');
		if ( $_VERSION->RELEASE < '1.5' ) {
			mosMenuBar::spacer();
			mosMenuBar::custom( '', '../components/com_jdownloads/images/home.png', '../components/com_jdownloads/images/home.png', _JLIST_BACKEND_TOOLBAR_MAIN, false );
		}	
		mosMenuBar::endTable();
	}
	function CATEGORIES_ADD(){
		global $_VERSION;
        mosMenuBar::startTable();
		mosMenuBar::save('categories.save');
        mosMenuBar::apply('categories.apply');
		mosMenuBar::spacer();
		mosMenuBar::cancel('categories.cancel');
		if ( $_VERSION->RELEASE < '1.5' ) {
			mosMenuBar::spacer();
			mosMenuBar::custom( '', '../components/com_jdownloads/images/home.png', '../components/com_jdownloads/images/home.png', _JLIST_BACKEND_TOOLBAR_MAIN, false );
		}
        mosMenuBar::endTable();
	}
	function FILES_LIST(){
		global $_VERSION;
        mosMenuBar::startTable();
		if ( $_VERSION->RELEASE < '1.5' ) {
			mosMenuBar::custom('categories.list', '../components/com_jdownloads/images/categories_2.png', '../components/com_jdownloads/images/categories_2.png', _JLIST_BACKEND_CPANEL_CATEGORIES, false);		
			mosMenuBar::spacer();        
			mosMenuBar::divider();
			mosMenuBar::spacer();			
		}
        mosMenuBar::addNew('files.edit');
        mosMenuBar::spacer();
        mosMenuBar::custom( 'files.copy', 'copy.png', 'copy_f2.png', 'Copy', false );     
        mosMenuBar::spacer();
		mosMenuBar::publish('files.publish');
		mosMenuBar::unpublish('files.unpublish');
		mosMenuBar::spacer();
		mosMenuBar::deleteList(_JLIST_BACKEND_FILESLIST_DEL_QUEST,'files.delete');
		if ( $_VERSION->RELEASE < '1.5' ) {
			mosMenuBar::spacer();
			mosMenuBar::custom( '', '../components/com_jdownloads/images/home.png', '../components/com_jdownloads/images/home.png', _JLIST_BACKEND_TOOLBAR_MAIN, false );
		}
		mosMenuBar::endTable();
	}
	function FILES_EDIT(){
        mosMenuBar::startTable();
		mosMenuBar::save('files.save');
		mosMenuBar::spacer();
		mosMenuBar::apply('files.apply');
		mosMenuBar::cancel('files.cancel');
    	mosMenuBar::endTable();
	}
    
    function FILES_COPY(){
        global $_VERSION;
        mosMenuBar::startTable();
        mosMenuBar::save('files.copy.save');
        mosMenuBar::spacer();
        mosMenuBar::cancel('files.list'); 
        if ( $_VERSION->RELEASE < '1.5' ) {
            mosMenuBar::spacer();
            mosMenuBar::custom( '', '../components/com_jdownloads/images/home.png', '../components/com_jdownloads/images/home.png', _JLIST_BACKEND_TOOLBAR_MAIN, false );
        }
        mosMenuBar::endTable(); 
    }

    function LICENSE_LIST(){
        global $_VERSION;
		mosMenuBar::startTable();
		mosMenuBar::addNew('license.edit');
		mosMenuBar::spacer();
		mosMenuBar::deleteList(_JLIST_BACKEND_LICLIST_DEL_QUEST,'license.delete');
		if ( $_VERSION->RELEASE < '1.5' ) {
			mosMenuBar::spacer();
			mosMenuBar::custom( '', '../components/com_jdownloads/images/home.png', '../components/com_jdownloads/images/home.png', _JLIST_BACKEND_TOOLBAR_MAIN, false );
		}
		mosMenuBar::endTable();
	}
	function LICENSE_EDIT(){
        global $_VERSION;
		mosMenuBar::startTable();
		mosMenuBar::save('license.save');
		mosMenuBar::spacer();
		mosMenuBar::cancel('license.cancel');
		if ( $_VERSION->RELEASE < '1.5' ) {
			mosMenuBar::spacer();
			mosMenuBar::custom( '', '../components/com_jdownloads/images/home.png', '../components/com_jdownloads/images/home.png', _JLIST_BACKEND_TOOLBAR_MAIN, false );
		}
		mosMenuBar::endTable();
    }
    
	function TEMPLATES_MENU(){
		global $_VERSION;
        if ( $_VERSION->RELEASE < '1.5' ) {
            mosMenuBar::startTable();
            mosMenuBar::custom( '', '../components/com_jdownloads/images/home.png', '../components/com_jdownloads/images/home.png', _JLIST_BACKEND_TOOLBAR_MAIN, false );
            mosMenuBar::endTable(); 
        }
	}

    function TEMPLATES_LIST_CATS(){
        global $_VERSION;
		mosMenuBar::startTable();
		mosMenuBar::custom( 'templates.active.cats', 'apply.png', 'apply_f2.png', _JLIST_BACKEND_TEMPLIST_MENU_TEXT_ACTIVE, true );
		mosMenuBar::spacer();
		mosMenuBar::addNew('templates.edit.cats');
		mosMenuBar::spacer();
		mosMenuBar::deleteList(_JLIST_BACKEND_TEMPLIST_DEL_QUEST,'templates.delete.cats');
		if ( $_VERSION->RELEASE < '1.5' ) {
			mosMenuBar::spacer();
			mosMenuBar::custom( 'templates.menu', '../components/com_jdownloads/images/layouts.png', '../components/com_jdownloads/images/layouts.png', _JLIST_BACKEND_TOOLBAR_SUBMAIN, false );
			mosMenuBar::spacer();
			mosMenuBar::custom( '', '../components/com_jdownloads/images/home.png', '../components/com_jdownloads/images/home.png', _JLIST_BACKEND_TOOLBAR_MAIN, false );
		}
		mosMenuBar::endTable();
	}
	function TEMPLATES_EDIT_CATS(){
        global $_VERSION;
		mosMenuBar::startTable();
		mosMenuBar::save('templates.save.cats');
        mosMenuBar::spacer();
		mosMenuBar::apply('templates.apply.cats');
		mosMenuBar::spacer();
		mosMenuBar::cancel('templates.cancel.cats');
		if ( $_VERSION->RELEASE < '1.5' ) {
			mosMenuBar::spacer();
			mosMenuBar::custom( '', '../components/com_jdownloads/images/home.png', '../components/com_jdownloads/images/home.png', _JLIST_BACKEND_TOOLBAR_MAIN, false );
		}
		mosMenuBar::endTable();
    }

    function TEMPLATES_LIST_FILES(){
        global $_VERSION;
		mosMenuBar::startTable();
		mosMenuBar::custom( 'templates.active.files', 'apply.png', 'apply_f2.png', _JLIST_BACKEND_TEMPLIST_MENU_TEXT_ACTIVE, true );
		mosMenuBar::spacer();
		mosMenuBar::addNew('templates.edit.files');
		mosMenuBar::spacer();
		mosMenuBar::deleteList(_JLIST_BACKEND_TEMPLIST_DEL,'templates.delete.files');
		if ( $_VERSION->RELEASE < '1.5' ) {
			mosMenuBar::spacer();
			mosMenuBar::custom( 'templates.menu', '../components/com_jdownloads/images/layouts.png', '../components/com_jdownloads/images/layouts.png', _JLIST_BACKEND_TOOLBAR_SUBMAIN, false );
			mosMenuBar::spacer();
			mosMenuBar::custom( '', '../components/com_jdownloads/images/home.png', '../components/com_jdownloads/images/home.png', _JLIST_BACKEND_TOOLBAR_MAIN, false );
		}
		mosMenuBar::endTable();
	}
	function TEMPLATES_EDIT_FILES(){
        global $_VERSION;
		mosMenuBar::startTable();
		mosMenuBar::save('templates.save.files');
        mosMenuBar::spacer();
		mosMenuBar::apply('templates.apply.files');
		mosMenuBar::spacer();
		mosMenuBar::cancel('templates.cancel.files');
		if ( $_VERSION->RELEASE < '1.5' ) {
			mosMenuBar::spacer();
			mosMenuBar::custom( '', '../components/com_jdownloads/images/home.png', '../components/com_jdownloads/images/home.png', _JLIST_BACKEND_TOOLBAR_MAIN, false );
		}
		mosMenuBar::endTable();
    }
    
    function TEMPLATES_LIST_DETAILS(){
        global $_VERSION;
        mosMenuBar::startTable();
        mosMenuBar::custom( 'templates.active.details', 'apply.png', 'apply_f2.png', _JLIST_BACKEND_TEMPLIST_MENU_TEXT_ACTIVE, true );
        mosMenuBar::spacer();
        mosMenuBar::addNew('templates.edit.details');
        mosMenuBar::spacer();
        mosMenuBar::deleteList(_JLIST_BACKEND_TEMPLIST_DEL,'templates.delete.details');
		if ( $_VERSION->RELEASE < '1.5' ) {
			mosMenuBar::spacer();
			mosMenuBar::custom( 'templates.menu', '../components/com_jdownloads/images/layouts.png', '../components/com_jdownloads/images/layouts.png', _JLIST_BACKEND_TOOLBAR_SUBMAIN, false );
			mosMenuBar::spacer();
			mosMenuBar::custom( '', '../components/com_jdownloads/images/home.png', '../components/com_jdownloads/images/home.png', _JLIST_BACKEND_TOOLBAR_MAIN, false );
		}
        mosMenuBar::endTable();
    }
    function TEMPLATES_EDIT_DETAILS(){
        global $_VERSION;
        mosMenuBar::startTable();
        mosMenuBar::save('templates.save.details');
        mosMenuBar::spacer();
        mosMenuBar::apply('templates.apply.details');
        mosMenuBar::spacer();
        mosMenuBar::cancel('templates.cancel.details');
		if ( $_VERSION->RELEASE < '1.5' ) {
			mosMenuBar::spacer();
			mosMenuBar::custom( '', '../components/com_jdownloads/images/home.png', '../components/com_jdownloads/images/home.png', _JLIST_BACKEND_TOOLBAR_MAIN, false );
		}
        mosMenuBar::endTable();
    }    

    function TEMPLATES_LIST_SUMMARY(){
        global $_VERSION;
		mosMenuBar::startTable();
		mosMenuBar::custom( 'templates.active.summary', 'apply.png', 'apply_f2.png', _JLIST_BACKEND_TEMPLIST_MENU_TEXT_ACTIVE, true );
		mosMenuBar::spacer();
		mosMenuBar::addNew('templates.edit.summary');
		mosMenuBar::spacer();
		mosMenuBar::deleteList(_JLIST_BACKEND_TEMPLIST_DEL,'templates.delete.summary');
		if ( $_VERSION->RELEASE < '1.5' ) {
			mosMenuBar::spacer();
			mosMenuBar::custom( 'templates.menu', '../components/com_jdownloads/images/layouts.png', '../components/com_jdownloads/images/layouts.png', _JLIST_BACKEND_TOOLBAR_SUBMAIN, false );
			mosMenuBar::spacer();
			mosMenuBar::custom( '', '../components/com_jdownloads/images/home.png', '../components/com_jdownloads/images/home.png', _JLIST_BACKEND_TOOLBAR_MAIN, false );
		}
		mosMenuBar::endTable();
	}
	function TEMPLATES_EDIT_SUMMARY(){
        global $_VERSION;
		mosMenuBar::startTable();
		mosMenuBar::save('templates.save.summary');
        mosMenuBar::spacer();
		mosMenuBar::apply('templates.apply.summary');
		mosMenuBar::spacer();
		mosMenuBar::cancel('templates.cancel.summary');
		if ( $_VERSION->RELEASE < '1.5' ) {
			mosMenuBar::spacer();
			mosMenuBar::custom( '', '../components/com_jdownloads/images/home.png', '../components/com_jdownloads/images/home.png', _JLIST_BACKEND_TOOLBAR_MAIN, false );
		}
		mosMenuBar::endTable();
    }
    
 	function CSS_EDIT(){
        global $_VERSION;
		mosMenuBar::startTable();
		mosMenuBar::save('css.save');
		mosMenuBar::spacer();
		mosMenuBar::cancel('templates.menu');
		if ( $_VERSION->RELEASE < '1.5' ) {
			mosMenuBar::spacer();
			mosMenuBar::custom( 'templates.menu', '../components/com_jdownloads/images/layouts.png', '../components/com_jdownloads/images/layouts.png', _JLIST_BACKEND_TOOLBAR_SUBMAIN, false );
			mosMenuBar::spacer();
			mosMenuBar::custom( '', '../components/com_jdownloads/images/home.png', '../components/com_jdownloads/images/home.png', _JLIST_BACKEND_TOOLBAR_MAIN, false );
		}
		mosMenuBar::endTable();
    }
    
	function LANG_EDIT(){
        global $_VERSION;
		mosMenuBar::startTable();
		mosMenuBar::save('language.save');
        mosMenuBar::spacer();
		mosMenuBar::cancel('templates.menu');
		if ( $_VERSION->RELEASE < '1.5' ) {
			mosMenuBar::spacer();
			mosMenuBar::custom( 'templates.menu', '../components/com_jdownloads/images/layouts.png', '../components/com_jdownloads/images/layouts.png', _JLIST_BACKEND_TOOLBAR_SUBMAIN, false );
			mosMenuBar::spacer();
			mosMenuBar::custom( '', '../components/com_jdownloads/images/home.png', '../components/com_jdownloads/images/home.png', _JLIST_BACKEND_TOOLBAR_MAIN, false );
		}
		mosMenuBar::endTable();
    }

	function RESTORE_MENU(){
		global $_VERSION;
        if ( $_VERSION->RELEASE < '1.5' ) {
            mosMenuBar::startTable();
            mosMenuBar::custom( '', '../components/com_jdownloads/images/home.png', '../components/com_jdownloads/images/home.png', _JLIST_BACKEND_TOOLBAR_MAIN, false );
            mosMenuBar::endTable(); 
        }
	}
	
	function INFO_MENU(){
        global $_VERSION;
        if ( $_VERSION->RELEASE < '1.5' ) {
            mosMenuBar::startTable();
            mosMenuBar::custom( '', '../components/com_jdownloads/images/home.png', '../components/com_jdownloads/images/home.png', _JLIST_BACKEND_TOOLBAR_MAIN, false );
            mosMenuBar::endTable(); 
        }		
	}
    
}

?>