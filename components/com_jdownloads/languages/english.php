<?php
/**
* @version 1.4
* @package JDownloads
* @copyright (C) 2008 Arno Betz - www.joomlaaddons.de
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
*
* 
* ======================
// German translation from doQment by David Jakob (aka iamalive) 2007.05.16
// http://www.websites4u.ch / admin@websites4u.ch
//
// Translation for http://www.Joomlaportal.ch
// Demo: http://demo.joomlaaddons.de 
//
// Modified by Arno Betz for jDownloads - http://www.Joomlaaddons.de
// Q&T Team Achim Raji (aka cybergurk) - http://www.filmanleitungen.de
//
// JDownloads 1.0 alpha translated to English from scratch uniquely for jDownloads
// by Carlo Capocasa <theman@carlocapocasa.com> - http://carlocapocasa.com
//
// JDownloads 1.1 alpha translated to English for http://www.Joomlaaddons.de
// by Lucio Bresser <info@per-ipsum.org> - http://www.per-ipsum.org

// JDownloads 1.2 alpha (first draft) translated to English for http://www.Joomlaaddons.de
// by Daniel Pardons  (aka dpardons) - http://www.joompad.be
*/

(defined('_VALID_MOS') OR defined('_JEXEC')) or die('Restricted access');

// Components Infos
//-----------------------------------------------------------
// It is not allowed to change or delete this parameters !!!
DEFINE('_JLIST_PRODUCT','jDownloads');
DEFINE('_JLIST_VERSION','<br /><br />Please give me feedback in the Forum on <a href="http://www.JoomlaAddons.de">www.JoomlaAddons.de</a>.');

DEFINE('_JLIST_PRODUCT_FOOTER','JDownloads');
DEFINE('_JLIST_VERSION_FOOTER','');

// end component infos
//-----------------------------------------------------------

// Installation data

DEFINE('_JLIST_INSTALL_0','Install information:');
DEFINE('_JLIST_INSTALL_1','All config files exist in the database!');
DEFINE('_JLIST_INSTALL_2','Config files are refreshed.');
DEFINE('_JLIST_INSTALL_3','All default layouts exist in the database!.');
DEFINE('_JLIST_INSTALL_4','Saved default layouts in the database!');
DEFINE('_JLIST_INSTALL_5','All default license(s) exist in the database!');
DEFINE('_JLIST_INSTALL_6','Saved default license(s) in the database!');
DEFINE('_JLIST_INSTALL_7','The upload directory exists and is writable!');
DEFINE('_JLIST_INSTALL_8','The upload directory exists and is NOT writable. Set CHMOD on 0777 for the upload directory, otherwise jDownloads won\'t run!');
DEFINE('_JLIST_INSTALL_9','Upload directory created. CHMOD 0777 would be set.');
DEFINE('_JLIST_INSTALL_10','Error: Upload directory couldn\'t be created!<br />Create it yourself via FTP and set CHMOD on 0777 for the upload directory, otherwise jDownloads won\'t run!');
DEFINE('_JLIST_INSTALL_11','The temporary directory for .zip exists and is writable!');
DEFINE('_JLIST_INSTALL_12','The upload directory /downloads/tempzipfiles exists but is NOT writable. Set CHMOD on 0777 for the temp directory, otherwise jDownloads won\'t run!');
DEFINE('_JLIST_INSTALL_13','Directory /downloads/tempzipfiles created. Writable: CHMOD 0777 - OK.');
DEFINE('_JLIST_INSTALL_14','Error: .zip directory /downloads/tempzipfiles couldn\'t be created!<br />Create it yourself via FTP and set CHMOD on 0777 for the .zip directory.<br />Otherwise jDownloads won\'t run!');
DEFINE('_JLIST_INSTALL_15','Installation successful!');
DEFINE('_JLIST_INSTALL_16','Start jDownloads!');

DEFINE('_JLIST_INSTALL_DB_TIP','Info: Uninstalling jDownloads will not delete the database. If you later install a new version of jDownloads, the current database will be used.');
DEFINE('_JLIST_INSTALL_TITLE_FOR_DEFAULT_LAYOUTS','Standard');

//FRONTEND

DEFINE('_JLIST_FILE_NOT_FOUND','The requested file was not found. Please inform the webmaster.');
DEFINE('_JLIST_LINKTEXT_VIEW_FILE_TYPES','Start download<br />(display in a new browser window)');
DEFINE('_JLIST_LINKTEXT_ZIP','Start download');
DEFINE('_JLIST_LINKTEXT_DOWNLOAD_URL','Download');
DEFINE('_JLIST_LINKTEXT_HOME','Home');
DEFINE('_JLIST_DEL_ZIP_ADMIN_INFO','<br />Admin info: error occured while deleting the temporary zip files or file does not exist!');
DEFINE('_JLIST_FORM_BUTTON_TEXT','Continue');
DEFINE('_JLIST_EMPTY_CAT_TEXT','This category does not contain any files yet.<br /><br />');
DEFINE('_JLIST_MAIL_DOWNLOADER_NAME_VISITOR','Visitor');
DEFINE('_JLIST_MAIL_DOWNLOADER_GROUP','Guest');
DEFINE('_JLIST_MAILSEND_ERROR','An error occured sending this e-mail!');
DEFINE('_JLIST_FRONTEND_COUNT_SUBCATS','Subcategories:'); // please use only a short text for this
DEFINE('_JLIST_FRONTEND_COUNT_FILES','Files:'); // please use only a short text for this
DEFINE('_JLIST_FRONTEND_HOMEPAGE','Homepage');
DEFINE('_JLIST_FRONTEND_BACK_BUTTON','Back');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_DATE','Date');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_LICENCE','License');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_AUTHOR','Author');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_WEBSITE','Website');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_SYSTEM','System');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_LANGUAGE','Language');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_DOWNLOAD','Download');
DEFINE('_JLIST_FRONTEND_VERSION_TITLE','Version: ');
DEFINE('_JLIST_FRONTEND_CAT_ACCESS_REGGED','Please register or login to download files from this category.<br /><br />');

//BACKEND TOOLBAR
DEFINE('_JLIST_BACKEND_COMPONENT_NAME','JDownloads');
DEFINE('_JLIST_BACKEND_TOOLBAR_MAIN','Home');
DEFINE('_JLIST_BACKEND_TOOLBAR_EDIT','Edit');
DEFINE('_JLIST_BACKEND_TOOLBAR_REMOVE','Delete');
DEFINE('_JLIST_BACKEND_TOOLBAR_CLOSE','Close');
DEFINE('_JLIST_BACKEND_TOOLBAR_SUBMAIN','Layouts');

//BACKEND CPANEL
DEFINE('_JLIST_BACKEND_CPANEL_FILES','Downloads');
DEFINE('_JLIST_BACKEND_CPANEL_CATEGORIES','Categories');
DEFINE('_JLIST_BACKEND_CPANEL_LICENSE','Licenses');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES','Layouts Administration');
DEFINE('_JLIST_BACKEND_CPANEL_BACKUP','Backup Creation');
DEFINE('_JLIST_BACKEND_CPANEL_SETTINGS','Configuration');
DEFINE('_JLIST_BACKEND_CPANEL_RESTORE','Backup Restoration');
DEFINE('_JLIST_BACKEND_CPANEL_INFO','Terms of use');
DEFINE('_JLIST_BACKEND_CPANEL_SUPPORT','Support');

// RESULTS FROM AUTOCHECKFILES OPTION
DEFINE('_JLIST_BACKEND_AUTOCHECK_TITLE','Information about Download Area check:');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NEW_FILES','New file(s) found and added to the database!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_MISSING_FILES','File(s) not found. The downloads have been unpublished for public access!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NO_NEW_FILES','No new files found!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NO_MISSING_FILES','All published downloads exist!');

DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_STATUS','Status');
DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_2','Version');
DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_3','Action log');

// STATUS
DEFINE('_JLIST_BACKEND_PANEL_STATUS_OFFLINE_HEADER','Status Download Area');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_TITEL','<font color="#990000"><b><big>Status download area:</big></b></font>');

DEFINE('_JLIST_BACKEND_PANEL_STATUS_DESC_ONLINE','If ONLINE, the download area is readable for visitors.');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_ONLINE','<font color="green"><b><big> ONLINE!</big></b></font>');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_OFFLINE','<font color="red"><b><big> OFFLINE!</big></b></font>');

// OFFLINE
DEFINE('_JLIST_BACKEND_OFFLINE_OPTION_TITLE','Activate maintenance?');
DEFINE('_JLIST_BACKEND_OFFLINE_OPTION_DESC','With this option you set the whole display of the download area "off". Visitors would be shown the text defined below. Only logged in members with status "author" could view the download area.');
DEFINE('_JLIST_BACKEND_OFFLINE_MESSAGE_TITLE','Notice for visitors');
DEFINE('_JLIST_BACKEND_OFFLINE_MESSAGE_DEFAULT','<table width="70%" align="center" cellspacing="0" cellpadding="20" border="1"><tr><td align="center">
<h3>At the moment we are still working on the download area.<br /><br />Please try again in a few minutes.</h3><br /><img src="components/com_jdownloads/images/offline.png" />
</td></tr></table>');
DEFINE('_JLIST_BACKEND_OFFLINE_MESSAGE_DESC','Insert text that will be displayed if the download area is still in maintenance.');
DEFINE('_JLIST_BACKEND_OFFLINE_ADMIN_MESSAGE_TEXT','<p align="center"><b><big>The downloads are: OFFLINE!</big></b></p>'); // changed in 1.3 RC2

//BACKEND SETTINGS
DEFINE('_JLIST_BACKEND_SETTINGS','Configuration');
DEFINE('_JLIST_BACKEND_SETTINGS_SAVED','Configuration saved');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_HEAD','E-mail Configuration for downloads'); // changed in 1.3 rc2
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_FILES_HEAD','Download Configuration');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_FRONTEND_HEAD','Frontend Configuration');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_BACKEND_HEAD','Backend Configuration');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_SECURITY_HEAD','Security Settings');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_IMAGES_HEAD','Pictures/Icons Settings');

DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_DOWNLOADS','Downloads');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_FRONTEND','Frontend');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_BACKEND','Backend');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_IMAGES','Pictures');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_SECURITY','Security');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_EMAIL','E-Mail');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_SONSTIGE','Other');

DEFINE('_JLIST_BACKEND_SETTINGS_DATETIME','Date-Time format');
DEFINE('_JLIST_BACKEND_SETTINGS_DATETIME_DESC','Info about the format: <a href="http://www.php.net/manual/de/function.strftime.php" target="_blank">www.php.net</a>');

DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIR','Upload Directory');
DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIR_DESC','Main directory for uploading files. This directory and <b>all</b> subdirectories must be writable!');

DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIRTEMP','Temporary directory');
DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIRTEMP_DESC','This directory must exist and be writable! It contains the temporarily created .zip files (after downloading, automatic deleting).');

DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_1','Standard');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_2','Newest first');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_3','Newest last');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_4','Name upward');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_5','Name downward');

// E-Mail config
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_OPTION_DESC','If this is activated an e-mail is sent to the address specified below after every download.');
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_OPTION','Activate e-mail?');

DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_DESC','E-mail address to send download information to.');
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO','E-mail address');

DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_HTML_DESC','If this option is activated, e-mails are sent in HTML format. If not, plain text is used.');
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_HTML','Use HTML-formatting?');

DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_BETREFF_DESC','Text to use for e-mail\'s subject.');
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_BETREFF','Subject');

// View Frontend Config settings
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_VIEW_HEAD','Component frontend display options');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_COMPO_TEXT','Component description');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_COMPO_TEXT_DESC','Text displayed <b>between</b> the component\'s title and its categories. The component title is automatically derived from the menu name.<br /><br />CSS classes, HTML code and arbitrary text may be included.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CHECKBOX_TEXT','Checkbox Text');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CHECKBOX_TEXT_DESC','Notice to be displayed by the top check box of the list.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SORTFILESORDER_TEXT','Sorting order');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SORTFILESORDER_DESC','Order by which files are sorted in the front end. Select "Standard" to use the backend\'s default order.');

// View Images settings
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SHOW_MINIPICS','Display information symbols?');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SHOW_MINIPICS_DESC','If activated, the symbol will be displayed. If disabled a text will be displayed.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_MINIPICS_SIZE','Size in pixels of the info symbol');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_MINIPICS_SIZE_DESC','Displaysize for info symbols. Standard: 20');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CATPICS_SIZE','Size in pixels of the category symbols');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CATPICS_SIZE_DESC','Displaysize for category symbols. You can use your own icons, only uploading by FTP in the subdirectory: /catimages. Standard: 48');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FILEPICS_SIZE','Size in pixel of the file symbols');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FILEPICS_SIZE_DESC','Displaysize for file(s) symbols. You can use your own icons, only uploading by FTP in the subdirectory: /fileimages. Standard: 32');

// View backend security settings
// to be translated
DEFINE('_JLIST_BACKEND_SETTINGS_MAIL_SECURITY_DESC','If YES, the e-mail addresses are not displayed in clear text in order to ignore Spambots. Remember that if javascript is disabled in your browser, the link will not be displayed. Recommended setting: YES.');
//
DEFINE('_JLIST_BACKEND_SETTINGS_MAIL_SECURITY_TITEL','E-mail addresses concealing?');

// View backend Config settings
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_LAYOUTS','Use WYSIWYG-editor for layouts');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_LAYOUTS_DESC','If this option is activated, the currently selected WYSIWYG editor is used for editing layouts. If it is not, a simple text area is displayed.');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_FILES','Use WYSIWYG-editor for downloads');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_FILES_DESC','If this option is activated, the currently selected WYSIWYG editor is used for editing downloads. If it is not, a simple text area is displayed.');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_CATS','Use WYSIWYG-editor for categories');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_CATS_DESC','If this option is activated, the currently selected WYSIWYG editor is used for editing categories. If it is not, a simple text area is displayed.');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_LICENSES','Use WYSIWYG-editor for licenses');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_LICENSES_DESC','If this option is activated, the currently selected WYSIWYG editor is used for editing licenses. If it is not, a simple text area is displayed.');

DEFINE('_JLIST_BACKEND_SETTINGS_FILE_SYSTEM_LIST','Select downloads field: edit "System"');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_SYSTEM_LIST_DESC','Here you can edit the proposed options for the field. Between each option you need a "," separator. <br /><br /><b>Important notice:</b> if you have already saved some downloads in the list, be careful, because every change is passed on to the downloads. Example: if some downloads are saved with system ="Joomla 1.5", they will be set to another value eg. "Windows Vista". Add new values at the end of the list.');

DEFINE('_JLIST_BACKEND_SETTINGS_FILE_LANGUAGE_LIST','Select downloads field: edit "Language"');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_LANGUAGE_LIST_DESC','Here you can edit the proposed options for the field. Between each option you need a "," separator. <br /><br /><b>Important noctice:</b> if you have already saved downloads in the list, be careful, because every change is passed on to the downloads. Example: The downloads saved with language ="Deutsch", they will be set to another value eg. "French". Add new values at the end of the list.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_ZIPFILE_PREFIX_TEXT','Default title prefix for ZIP files');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_ZIPFILE_PREFIX_DESC','If multiple files are selected for download, they are automatically archived into a temporary ZIP file and presented to the user as a single file for download. The ZIP file\'s name is created from the text specified to the left (prefix) and a random number.');

// Templates Config Backend
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_HEAD','<b>Layouts determine the way content is displayed in the frontend</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_HEAD_INFO','<br />Several standard layouts are included upon installation. They may be customized as desired and new layouts may be created. To simplify this configuration allows selection between using a WYSIWYG editor or a simple text area for editing.<br /><br />In case the component\'s frontend output does not work properly after making changes to the <b>default layouts</b> the <b>original contents</b> (meaning the status after the installation) may be restored at any time. To do this, remove <b>all texts</b> in the respective default layout input fields and select <b>Save</b>. The page will be saved with its original contents. <b>Caution:</b> changes already made will be lost.<br /><br />Note: several variables are used in layouts (e.g. <font color=darkred>{files}</font>). The variables are replaced with the actual contents when the actual website is generated.<br />');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS','Layout: Categories');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_DESC','This is how <b>categories</b> are displayed in the frontend. If you have selected the option <b>Display home page with category overview</b> in the global configuration, the {files} and {checkbox_top} placeholders (variables) are only used for displaying single categories.<br /><br /><font color=red>{files} {form_hidden} {form_button} {checkbox_top}</font> variables should <font color=red>NOT</font> be removed from the code! Only remove the variable {checkbox_top} from the code if the variable {url_download} is used in the file layout. The {files} tag is replaced with data from the file layout. <br /><br />Available placeholders (variables):<br />{cat_title} {cat_description} {cat_pic} {files} {checkbox_top} {sum_subcats} {sum_files_cat}');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_INFO_TITLE','<b>Category layout information:</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_INFO_TEXT','<p>This is a graphical example of frontend category description display. The dark red border indicates the area you can change the display for here. </p>');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES','Layout: Files');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DESC','This is how <b>files</b> are displayed in the fronted. <br />Available placeholders (variables):<br />{checkbox_list} {cat_id} {file_id} {file_title} {release} {pic_is_new} {pic_is_hot} {pic_is_updated} {thumbnail} {description} {link_to_details} {file_pic} {price_title} {price_value} {license_title} {license_text} {language_title} {language_text} {filesize_title} {filesize_value} {system_title} {system_text} {author_title} {author_text} {author_url_title} {author_url_text} {created_date_title} {created_date_value} {hits_title} {hits_value} {created_by_title} {created_by_value} {modified_by_title} {modified_by_value} {modified_date_title} {modified_date_value}'); // changed in 1.4 beta (2)
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_INFO_TITLE','<b>Information about file layout:</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_INFO_TEXT','<p>Example for displaying the list in frontend. Inside the red box you can edit the displaying options.</p>');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL','Layout: Summary / Start download');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL_DESC','This is the frontend <b>summary</b> display. A list of selected files is presented to the user before downloading.<br />Here is where you can modify the display of this page. CSS classes, HTML code and arbitrary text may be included.<br /><br />The <font color=red>{download_liste} and {download_link}</font> variable should <font color=red>NOT</font> be removed from the code!<br /><br />Available placeholders:<br />{summary_pic} {title_text} {download_liste} {license_note} {download_link} {external_download_info}'); // changed in 1.4 beta (2)

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL_INFO_TITLE','<b>Information about summary layout</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL_INFO_TEXT','<p>This is a graphical example of this page in the frontend. The dark red border indicates the area you can change the display from here. </p>');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_MAIL','Layout: E-mail');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_MAIL_DESC','Here is where you may format <b>e-mails</b> that (when activated) get sent to the e-mail address specified in configuration after every download. HTML code and arbitrary text may be included.<br /><br />Available placeholders:<br /> {file_list} {ip_address} {date_time} {user_name} {user_group}');

//BACKEND CATSLIST
DEFINE('_JLIST_BACKEND_CATSLIST_TITLE_HEAD','Categories');
DEFINE('_JLIST_BACKEND_CATSLIST_SEARCH','Search');
DEFINE('_JLIST_BACKEND_CATSLIST_SEARCH_LIMIT','Limit');

DEFINE('_JLIST_BACKEND_CATSLIST_TITLE','Category');
DEFINE('_JLIST_BACKEND_CATSLIST_PIC','Symbol');
DEFINE('_JLIST_BACKEND_CATSLIST_PUBLISHED','Published');
DEFINE('_JLIST_BACKEND_CATSLIST_LINK','Link');
DEFINE('_JLIST_BACKEND_CATSLIST_LINK_TEXT','Preview');
DEFINE('_JLIST_BACKEND_CATSLIST_READ','Read');
DEFINE('_JLIST_BACKEND_CATSLIST_DOWNLOAD','Download');
DEFINE('_JLIST_BACKEND_CATSLIST_ORDERING','Ordering');
DEFINE('_JLIST_BACKEND_CATSLIST_DEL',' Category(ies) deleted.');

// access controll info
DEFINE('_JLIST_BACKEND_CATSLIST_ACCESS_ALL','ALL');
DEFINE('_JLIST_BACKEND_CATSLIST_ACCESS_REGGED','Registered');
DEFINE('_JLIST_BACKEND_CATSLIST_ACCESS_ADMINS','Special');

//BACKEND CATSEDIT
DEFINE('_JLIST_BACKEND_CATSEDIT_TITLE','Edit category');
DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_TITLE','Category must have a title');
DEFINE('_JLIST_BACKEND_CATSEDIT_SUC_PUBL',' Category(ies) published.');
DEFINE('_JLIST_BACKEND_CATSEDIT_SUC_UNPUBL',' Category(ies) unpublished.');
DEFINE('_JLIST_BACKEND_CATSEDIT_SAVE_ERROR_DIR','Error: directory could not be renamed!');
DEFINE('_JLIST_BACKEND_CATSEDIT_EDIT','Edit Category');
DEFINE('_JLIST_BACKEND_CATSEDIT_ADD','Add Category');
DEFINE('_JLIST_BACKEND_CATS_SAVEORDER','New ordering saved');
DEFINE('_JLIST_BACKEND_CATS_USED','This category is being edited by another administrator.');
DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_CAT_COPY','A failure occured during Category-List copy operation.');

DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_DESCRIPTION','Category Description');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_PIC_TEXT','Select category symbol');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_PIC_PREVIEW','Picture preview');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_PIC_DESC','The selected symbol can be displayed with {cat_pic} in the category layout.');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_TITLE','Set rights');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_DESC','Edit rights. Define the User rights for the categories, subdirectories and the included downloads. <b>Decisive for access are ALWAYS the superior category.</b> If you select "special", members with "author" status can read and download.');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_1','Public read and download');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_2','Public and Registered User can read and download');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_3','Only Registered User can read and download');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_4','Only Special Member can read and download');

//BACKEND FILESLIST
DEFINE('_JLIST_BACKEND_FILESLIST_TITLE','Downloads');
DEFINE('_JLIST_BACKEND_FILESLIST_SEARCH','Search');
DEFINE('_JLIST_BACKEND_FILESLIST_SEARCH_LIMIT','Limit');
DEFINE('_JLIST_BACKEND_FILESLIST_CATS','All Categories');
DEFINE('_JLIST_BACKEND_FILESLIST_NOCATS','No Category');
DEFINE('_JLIST_BACKEND_FILESLIST_FILE','Downloads');
DEFINE('_JLIST_BACKEND_FILESLIST_HITS','Number of Downloads');
DEFINE('_JLIST_BACKEND_FILESLIST_CAT','Categorie');
DEFINE('_JLIST_BACKEND_FILESLIST_RELEASE','Version');

DEFINE('_JLIST_BACKEND_FILESLIST_DESCRIPTION','Description');
DEFINE('_JLIST_BACKEND_FILESLIST_DADDED','Date');
DEFINE('_JLIST_BACKEND_FILESLIST_FILENAME','File name');
DEFINE('_JLIST_BACKEND_FILESLIST_AUTHOR','Author');
DEFINE('_JLIST_BACKEND_FILESLIST_PUBLISHED','Published');
DEFINE('_JLIST_BACKEND_FILESLIST_ORDERING','Order');
DEFINE('_JLIST_BACKEND_FILESLIST_DEL',' Download(s) deleted');
DEFINE('_JLIST_BACKEND_FILES_SAVEORDER','New order saved');
DEFINE('_JLIST_BACKEND_FILES_USED','This download is being edited by another administrator.');

//BACKEND FILESEDIT
DEFINE('_JLIST_BACKEND_FILESEDIT_TABTITLE_1','Base');
DEFINE('_JLIST_BACKEND_FILESEDIT_TABTITLE_2','Optional');
DEFINE('_JLIST_BACKEND_FILESEDIT_TABTITLE_3','Files');

DEFINE('_JLIST_BACKEND_FILESEDIT_TITLE','Edit Download');
DEFINE('_JLIST_BACKEND_FILESEDIT_SENT_IN_FROM','This download was filed from: ');
DEFINE('_JLIST_BACKEND_FILESEDIT_SAVE','Download saved.');
DEFINE('_JLIST_BACKEND_FILESEDIT_EDIT','Edit Download');
DEFINE('_JLIST_BACKEND_FILESEDIT_ADD','Add Download');

//DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_LIST_DESC','Select file for downloading from the server.');
DEFINE('_JLIST_BACKEND_FILESEDIT_ROOT_DIR_TITLE','ROOT Download (Upload) directory');

DEFINE('_JLIST_BACKEND_FILESEDIT_UPLOAD_DIR_LIST_INFO_1','All Subdirectories are writable!');
DEFINE('_JLIST_BACKEND_FILESEDIT_UPLOAD_DIR_LIST_INFO_2','Subdirectories <b>NOT</b> writeble! Check the rights on your server (FTP: set to CHMOD 0777)');
DEFINE('_JLIST_BACKEND_FILESEDIT_CHECK_PERMISSIONS','File could not be uploaded. Check the rights on your server (FTP: set to CHMOD 0777)');

// language
DEFINE('_JLIST_BACKEND_FILESEDIT_LANGUAGE','Language');
DEFINE('_JLIST_BACKEND_FILESEDIT_LANGUAGE_DEFAULT_LIST','Select:, English, German, French, Italian, Spain, Portuguese, Russian, Polish, Dutch');

// system
DEFINE('_JLIST_BACKEND_FILESEDIT_SYSTEM','System');
DEFINE('_JLIST_BACKEND_FILESEDIT_SYSTEM_DEFAULT_LIST','Select:, Joomla 1.0, Joomla 1.5, Windows, Linux, MacIntosh');

DEFINE('_JLIST_BACKEND_FILESEDIT_LICENSES_LIST','Select License');
DEFINE('_JLIST_BACKEND_FILESEDIT_REMOVE_OK','File deleted.');
DEFINE('_JLIST_BACKEND_FILESEDIT_SUC_PUBL',' Download(s) published.');
DEFINE('_JLIST_BACKEND_FILESEDIT_SUC_UNPUBL',' Download(s) unpublished.');

DEFINE('_JLIST_BACKEND_FILESEDIT_REQUIRES_INFO','Fields marked <b><font color=red>*</font></b> must be filled in!');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_TITLE','Title <b><font color=red>*</font></b>');
DEFINE('_JLIST_BACKEND_FILESEDIT_DESCRIPTION','Description');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FPIC_TEXT','Select File item symbol');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FPIC_PREVIEW','Preview');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FPIC_DESC','Selected item could be displayed over a placeholder.');

DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_CAT','Category association <b><font color=red>*</font></b>');
DEFINE('_JLIST_BACKEND_FILESEDIT_LICENSE','Licence');
DEFINE('_JLIST_BACKEND_FILESEDIT_RELEASE','Version');
DEFINE('_JLIST_BACKEND_FILESEDIT_SIZE','Size');
DEFINE('_JLIST_BACKEND_FILESEDIT_SIZE_DESC','If no choice, the size will be set automatically if possible.'); // changed in 1.4 beta

DEFINE('_JLIST_BACKEND_FILESEDIT_DADDED','Date and time');
DEFINE('_JLIST_BACKEND_FILESEDIT_DADDED_DESC','Define the date in the following format: <b>YYYY-MM-DD H:mm:ss</b> or use the calendar function. When omitted the current date-time is used automatically');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE','Select file for upload');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_DESC','In this field you can assign a file name for the file transferred to the server. This file name will be used for downloading.');

DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_INFO','Currently assigned file:');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_ADD_FROM_SERVER','A Currently assigned file:');

DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_ADD_FROM_SERVER_NO','There is currently no assigned file!');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_ADD_FROM_SERVER_LIST','Select file');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_REMOVE','<b>Delete currently assigned file from server</b>');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_HOME','Web site (without http:// in front)');
DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR','Author Name');
DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR_URL','Author URL or e-mail address');
DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR_URL_DESC','Email adresses will be automaticly crypted.');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD','ROOT Upload directory');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD_WRITABLE','Status: <font color=green><strong>WRITABLE</strong></font>');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD_NOTWRITABLE','Status: <font color=red><strong>NOT WRITABLE</strong></font>');

DEFINE('_JLIST_BACKEND_FILESEDIT_URL_TEMP_WRITABLE','Status: <font color=green><strong>WRITABLE</strong></font>');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_TEMP_NOTWRITABLE','Status: <font color=red><strong>NOT WRITABLE</strong></font>');

//BACKEND LICENSE LIST
DEFINE('_JLIST_BACKEND_LICLIST_TITLE_HEAD','Licenses');
DEFINE('_JLIST_BACKEND_LICLIST_TITLE','License name');
DEFINE('_JLIST_BACKEND_LICLIST_LINK','Link');
DEFINE('_JLIST_BACKEND_LICLIST_DEL',' Licence(s) deleted');

//Backend LICENSE EDIT
DEFINE('_JLIST_BACKEND_LICEDIT_TITLE','Edit license');
DEFINE('_JLIST_BACKEND_LICEDIT_ERROR_TITLE','A license must have a name.');
DEFINE('_JLIST_BACKEND_LICEDIT_SAVE','License saved.');
DEFINE('_JLIST_BACKEND_LICEDIT_TEXT','License name');
DEFINE('_JLIST_BACKEND_LICEDIT_EDIT','Edit license');
DEFINE('_JLIST_BACKEND_LICEDIT_ADD','Add license');
DEFINE('_JLIST_BACKEND_LIC_USED','This license is being edited by another administrator.');
DEFINE('_JLIST_BACKEND_LICEDIT_LIC_TITLE','License name');
DEFINE('_JLIST_BACKEND_LICEDIT_LIC_URL','Link to license');
DEFINE('_JLIST_BACKEND_LICEDIT_LIC_DESCRIPTION','License description');

//BACKEND TEMPLATES SUBMENU
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_NAME','Layout administration');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_CATS','Categories');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_FILES','Files');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_SUMMARY','Summary');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_EMAIL','E-Mails');
DEFINE('_JLIST_BACKEND_TEMPPANEL_TABTEXT_INFO','Information');

// Backend TEMPLATES TEMPLATES TITLES
DEFINE('_JLIST_BACKEND_TEMPLIST_CATTITLE_HEAD','Category Layouts');
DEFINE('_JLIST_BACKEND_TEMPLIST_FILESTITLE_HEAD','File Layouts');
DEFINE('_JLIST_BACKEND_TEMPLIST_SUMTITLE_HEAD','Summary Layouts');
DEFINE('_JLIST_BACKEND_TEMPLIST_MAILTITLE_HEAD','E-Mail Layouts');

//BACKEND TEMPLATES LIST
DEFINE('_JLIST_BACKEND_TEMPLIST_MENU_TEXT_ACTIVE','Activate');
DEFINE('_JLIST_BACKEND_TEMPLIST_TITLE','Layout name');
DEFINE('_JLIST_BACKEND_TEMPLIST_TYP','Layout type');
DEFINE('_JLIST_BACKEND_TEMPLIST_ACTIVE','Active');
DEFINE('_JLIST_BACKEND_TEMPLIST_LOCKED','Default layout');
DEFINE('_JLIST_BACKEND_TEMPLIST_LOCKED_DESC','<b>Note:</b> Default layouts are integral parts of jDownloads and cannot be deleted. <br />On creating a new layout default layout texts are displayed as default.');
DEFINE('_JLIST_BACKEND_TEMPLIST_DEL',' Layout(s) deleted');
DEFINE('_JLIST_BACKEND_TEMPLIST_ERROR_IS_LOCKED','Default layouts cannot be deteled.');
DEFINE('_JLIST_BACKEND_TEMPLIST_ERROR_IS_ACTIVE','Active layouts cannot be deleted.');

//Backend TEMPLATES EDIT
DEFINE('_JLIST_BACKEND_TEMPEDIT_TITLE','Edit Layout');
DEFINE('_JLIST_BACKEND_TEMPEDIT_ERROR_TITLE','Error: A layout must have a name.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_SAVE','Layout saved.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_ACTIVE','Layout activated.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_EDIT','Edit Layout');
DEFINE('_JLIST_BACKEND_TEMPEDIT_ADD','Add Layout');
DEFINE('_JLIST_BACKEND_TEMP_USED','This layout is being edited by another administrator.');

DEFINE('_JLIST_BACKEND_TEMPEDIT_NAME','Name');
DEFINE('_JLIST_BACKEND_TEMPEDIT_TYP','Type');
DEFINE('_JLIST_BACKEND_TEMPEDIT_TEXT','Layout');
DEFINE('_JLIST_BACKEND_TEMPEDIT_URL','Preview link');

DEFINE('_JLIST_BACKEND_TEMPEDIT_NAME_DESCRIPTION','State a meaningful name for this layout.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_TYP_DESCRIPTION','Select the appropriate layout type.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_TEXT_DESCRIPTION','This is where the layout for frontend display is selected.');

//Backend TEMPLATES TYPS
DEFINE('_JLIST_BACKEND_TEMP_TYP1','Categories');
DEFINE('_JLIST_BACKEND_TEMP_TYP2','Files');
DEFINE('_JLIST_BACKEND_TEMP_TYP3','Summary');
DEFINE('_JLIST_BACKEND_TEMP_TYP4','E-Mail');


//Backend Backup and Restore
DEFINE('_JLIST_BACKEND_RESTORE_TITLE_HEAD','Restore Backup');
DEFINE('_JLIST_BACKEND_RESTORE_FILE','Select a backup file');
DEFINE('_JLIST_BACKEND_RESTORE_RUN','Restore the database right now');
DEFINE('_JLIST_BACKEND_RESTORE_RUN_FINAL','Start backup restoration?');
DEFINE('_JLIST_BACKEND_RESTORE_WARNING','During backup restoration, the current database will be replaced by the backup database.<br /><br />There is NO warranty that the restore of the backup works without problems. For added security, it is recommended to make before execution a backup via a ftp-client. If a new jdownloads version alters the current database tables, a jdownloads restauration will attemps to cope with any new category structure. Please wait the end of the backup restoration operation before leaving the page. In case of large structure for categories and files, the restoration process can take several minutes. Information about the restoration process can be found in the "Restore Log"');
DEFINE('_JLIST_BACKEND_RESTORE_MSG','%s The Restore was successfully executed.');
DEFINE('_JLIST_BACKEND_RESTORE_MSG_2','See restore information in logbook: "Restore Log".');

//Backend CSS & LANGUAGE EDIT
DEFINE('_JLIST_BACKEND_EDIT_CSS_TITLE','CSS-file');
DEFINE('_JLIST_BACKEND_EDIT_LANG_TITLE','Languagefile');
DEFINE('_JLIST_BACKEND_EDIT_CSS_FIELD_TITLE','Content of the CSS-file');
DEFINE('_JLIST_BACKEND_EDIT_LANG_FIELD_TITLE','Content of the Language-file');
DEFINE('_JLIST_BACKEND_EDIT_CSS_TITLE_EDIT','Edit CSS-file');
DEFINE('_JLIST_BACKEND_EDIT_LANG_TITLE_EDIT','Edit Language-file');
DEFINE('_JLIST_BACKEND_EDIT_CSS_SAVED','CSS-file saved');
DEFINE('_JLIST_BACKEND_EDIT_LANG_SAVED','Languagefile saved');
DEFINE('_JLIST_BACKEND_EDIT_LANG_WRITE_STATUS_TEXT','<big>The Language-file is: ');
DEFINE('_JLIST_BACKEND_EDIT_CSS_WRITE_STATUS_TEXT','<big>The CSS-file is: ');
DEFINE('_JLIST_BACKEND_EDIT_LANG_CSS_FILE_WRITABLE_YES','<font color="green">writable!</font></big>');
DEFINE('_JLIST_BACKEND_EDIT_LANG_CSS_FILE_WRITABLE_NO','<font color="#990000">NOT writable!</font></big>');
DEFINE('_JLIST_BACKEND_EDIT_LANG_CSS_FILE_WRITABLE_INFO','The file must be writable to save new settings. May be you have to change the rights on the file to CHMOD 0777.');

// BACKEND OTHERS
DEFINE('_JLIST_FRONTEND_NOCAT','No categories available yet!');
DEFINE('_JLIST_FRONTEND_NOFILES','No files available yet for this category!');

// Information text
DEFINE('_JLIST_BACKEND_INFO_TEXT_TITLE','jDownloads information');
DEFINE('_JLIST_BACKEND_INFO_LICENSE_TITLE','<b>Licensing information:</b>');
DEFINE('_JLIST_BACKEND_INFO_LICENSE_TEXT','This component is published under <a href="http://www.gnu.de/documents/gpl.de.html" target="_blank">GNU/GPL licensing</a>.<br />By installing jDownloads you accept the terms of this license as well as the conditions specified below. If you do not accept this, you are under obligation to remove this component again. <br /><br /><b>Additional conditions:</b><br />It is <b>not allowed</b> to remove the backlink on the <b>component front page</b>! The backlink additionally needs to be visible. If you would like to remove this link anyway, please contact me: <a href="mailto:info@joomlaaddons.de">info@joomlaaddons.de</a>.<br /><br />Additionally, this component is provided "as is" without any express or implied warranty! Liability is disclaimed for possible data loss, etc. Component use is under the sole installing person\'s responsibility.<br /><b>Thank you very much at all users, who helped me in the development.');

DEFINE('_JLIST_BACKEND_INFO_LINK_BACK','Back');

///////////////////////////////////////////////////////////////////////////////
// Template defaults for _jdownloads_templates - Please do not change this !!!
// Vorgabewerte f&uuml;r Layouttabelle - hier bitte KEINE &Auml;nderungen vornehmen !!!
///////////////////////////////////////////////////////////////////////////////

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_DEFAULT','{cat_title_begin}<div style="background-color:#EFEFEF; padding:6px;">{subcats_title_text}</div>{cat_title_end}
{cat_info_begin}<table width="100%" style="border-bottom: 1px solid #cccccc;">
<tr valign="top" border="0px">
<td width="75%" style="padding:5px;">{cat_pic}<b>{cat_title}</b></td>
<td width="15%" style="padding:5px; text-align:right">{sum_subcats}</td>
<td width="10%" style="padding:5px; text-align:right">{sum_files_cat}</td>
<tr valign="top" border="0px">
<td colspan="3" width="100%" style="padding:5px;">{cat_description}</td>
</tr>
</table>{cat_info_end}

<table border="0" cellspacing="2" cellpadding="5" width="100%" style=" background: #ffffff;">
{checkbox_top}
</table>
{files}
{form_hidden}
<div style="text-align:right">{form_button}</div>'); // changed in 1.4 beta (2)

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT','{files_title_begin}<div style="background-color:#EFEFEF; padding:6px;">
{files_title_text}</div>{files_title_end}

<table width="100%" border="0" cellpadding="5" cellspacing="5" style="background:#F8F8F8;border-bottom:1px solid #cccccc;">

        <tr valign="top">
            <td width="90%" valign="top"{file_pic} <b>{file_title}</b>
 {release} {pic_is_new}{pic_is_hot}{pic_is_updated}</td>
        </tr>
        <tr valign="top">
	    <td valign="top" class="jd_body" width"90%">{screenshot_begin}<a href="{screenshot}" rel="lightbox" > <img src="{thumbnail}" align="right" /></a>{screenshot_end}{description}</td>
        </tr>
        <tr>
            <td valign="top" width="10%" align="center"></td>
	</tr>
        <tr>
         <td style="background:#F5F5F5; padding:5px;" valign="top" width="90%"><small>{license_text} {author_text} {author_url_text} {created_date_value} {language_text} {system_text} {filesize_value} {hits_value}</small></td>
 	 <td valign="top" width="10%" align="center">
             {checkbox_list}
         </td>
       </tr>
</table>'); // changed in 1.4 beta (2)

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_SUMMARY_DEFAULT','<div class="jd_cat_title" style="padding:5px; font-size:10px; font-weight:normal;">{summary_pic} {title_text}</div>
<div valign="top" style="padding:5px;">
{download_liste}<br />
{license_note}
</div><br />
<div style="text-align:center">{download_link}</div>
<br /><div style="text-align:center">{external_download_info}</div>'); // changed in 1.4 beta (2)


DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_MAIL_DEFAULT','Download Notice!<br />
<br />
The following files were requested for downloading:<br />
{file_list}
<br /><br />
Date and time: {date_time}<br />
Name: {user_name}<br />
Usergroup: {user_group}<br />
User IP-Adress: {ip_address}<br /><br />
This Email is generated automatically!');

//////////////////////////////////////////////////////////////////////////////////
// End template defaults for _jdownloads_templates
// Ende Vorgabewerte f&uuml;r Layouts
//////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////
// Licenses defaults for _jdownloads_license - Please do not change this !!!
// Vorgabewerte f&uuml;r Lizenzentabelle - hier bitte KEINE &Auml;nderungen vornehmen !!!
///////////////////////////////////////////////////////////////////////////////
DEFINE('_JLIST_SETTINGS_LICENSE_TOTAL','7');

DEFINE('_JLIST_SETTINGS_LICENSE1_TITLE','GNU/GPL');
DEFINE('_JLIST_SETTINGS_LICENSE1_TEXT','');
DEFINE('_JLIST_SETTINGS_LICENSE1_URL','http://www.gnu.de/documents/gpl.de.html');

DEFINE('_JLIST_SETTINGS_LICENSE2_TITLE','GNU/LGPL');
DEFINE('_JLIST_SETTINGS_LICENSE2_TEXT','');
DEFINE('_JLIST_SETTINGS_LICENSE2_URL','http://www.gnu.de/documents/lgpl.de.html');

DEFINE('_JLIST_SETTINGS_LICENSE3_TITLE','Donationware');
DEFINE('_JLIST_SETTINGS_LICENSE3_TEXT','The donation is needed for further development and/or software spreading.<br />Source: Wikipedia');
DEFINE('_JLIST_SETTINGS_LICENSE3_URL','');

DEFINE('_JLIST_SETTINGS_LICENSE4_TITLE','Linkware');
DEFINE('_JLIST_SETTINGS_LICENSE4_TEXT','Linkware required a Link on the author\'s website during software usage.');
DEFINE('_JLIST_SETTINGS_LICENSE4_URL','');

DEFINE('_JLIST_SETTINGS_LICENSE5_TITLE','Charityware');
DEFINE('_JLIST_SETTINGS_LICENSE5_TEXT','Charityware permits free use, the author asks for a donation for a good purpose.');
DEFINE('_JLIST_SETTINGS_LICENSE5_URL','');

DEFINE('_JLIST_SETTINGS_LICENSE6_TITLE','Commercial license');
DEFINE('_JLIST_SETTINGS_LICENSE6_TEXT','');
DEFINE('_JLIST_SETTINGS_LICENSE6_URL','');

DEFINE('_JLIST_SETTINGS_LICENSE7_TITLE','Creative Commons');
DEFINE('_JLIST_SETTINGS_LICENSE7_TEXT','');
DEFINE('_JLIST_SETTINGS_LICENSE7_URL','http://de.wikipedia.org/wiki/Creative_Commons#Standard-Lizenzen');

///////////////////////////////////////////////////////////////////////////////
// Install default config values - Please do not delete this !!!
// Installations Vorgabewerte f&uuml;r Konfigurationen - NICHT l&ouml;schen !!!
///////////////////////////////////////////////////////////////////////////////
DEFINE('_JLIST_SETTINGS_INSTALL_1','<b>Select all files:</b>');
DEFINE('_JLIST_SETTINGS_INSTALL_2','');
DEFINE('_JLIST_SETTINGS_INSTALL_3','Information about the downloads');
DEFINE('_JLIST_SETTINGS_INSTALL_4','webmaster@yourwebsite.com');
DEFINE('_JLIST_SETTINGS_INSTALL_5','info@yourwebsite.com');


// ****************************************************************************
//		NEW IN VERSION 1.2 beta
// ****************************************************************************

// JAVASCRIPT (jdownloads.js) MESSAGES <<< Umlaute NICHT umwandeln !! >>>
DEFINE('_JLIST_JAVASCRIPT_TEXT_2','There is not yet any file to download in this category.\\n');
DEFINE('_JLIST_JAVASCRIPT_TEXT_1','Please select at least one file in a category before pressing the continue button.');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_TEXT_TO_SHORT','Search text too short, please provide at least 3 characters!'); 
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_NO_OPTION','You must choose at least one search option!'); 
// end javascript messages


DEFINE('_JLIST_INSTALL_1_2','Data is already existing in the database!');
DEFINE('_JLIST_INSTALL_2_2','Data was altered, added or non existent (translation or context to be checked!)!');
DEFINE('_JLIST_INSTALL_17','JoomFish Installation found! The jDownloads JoomFish definitions were added:');
//------------------------------------------
DEFINE('_JLIST_INSTALL_18','The jDownloads JoomFish definitions data were copied to:');
DEFINE('_JLIST_INSTALL_19','If you want to use these definitions with JoomFish, use the installer from Joomfish.');

DEFINE('_JLIST_FRONTEND_HOME_LINKTEXT','Overview');
DEFINE('_JLIST_FRONTEND_SUBTITLE_OVER_CATLIST','Overview');
DEFINE('_JLIST_FRONTEND_SUBTITLE_OVER_ONE_CAT','Category');
DEFINE('_JLIST_FRONTEND_SUBTITLE_OVER_DETAIL','Download details');

// PAGENAVIGATION FRONTEND
DEFINE('_JLIST_FRONTEND_HEADER_PAGENAVI_PAGE_TEXT','Page:');
DEFINE('_JLIST_FRONTEND_HEADER_PAGENAVI_TO_TEXT','of');

DEFINE('_JLIST_BACKEND_FILESEDIT_PRICE','Price');
DEFINE('_JLIST_BACKEND_FILESEDIT_PRICE_DESC','Provide price and currency.');

DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_4','Restore Log');

//FRONTEND UPLOAD
DEFINE('_JLIST_FRONTEND_UPLOAD_ACCESS_ONLY_REGGED','You must be a registered user in order to submit files. If you are already registered with this web site, please login first. ');
DEFINE('_JLIST_FRONTEND_UPLOAD_ACCESS_ONLY_SPECIALS','You do not have authorization to submit files.');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_NO_CATS_EXIST','Error: Files can be only submitted if at least one category were created and published.');    
DEFINE('_JLIST_FRONTEND_UPLOAD_LINKTEXT','Submit file');
DEFINE('_JLIST_FRONTEND_UPLOAD_PAGE_TITLE','Submit file');
DEFINE('_JLIST_FRONTEND_UPLOAD_FILENAME','Select file:');
DEFINE('_JLIST_FRONTEND_UPLOAD_FILENAME_BUTTON_TEXT_SEND','Send file');
DEFINE('_JLIST_FRONTEND_UPLOAD_FILENAME_BUTTON_TEXT_CLEAR','Clear Fields');
DEFINE('_JLIST_FRONTEND_UPLOAD_ALLOWED_FILETYPE','Allowed file extensions');
DEFINE('_JLIST_FRONTEND_UPLOAD_ALLOWED_MAX_SIZE','Allowed max size');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_NO_VALUE','Error: not all fields are filled!<br />Please fill the required fields.');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_FILETYPE','Error: selected file extension is not supported!<br />Please select only allowed file extensions.');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_FILESIZE','Error: size of selected file is greater than allowed max size!');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_MOVE_FILE','Error: an error occured during server file transfer!');
DEFINE('_JLIST_FRONTEND_UPLOAD_OK','The file was successfully transferred to the server!<br />Publishing must still be approved.');

// FRONTEND UPLOAD FIELD TITLE
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_NAME','Your Name:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_MAIL','Your E-Mail Addresss:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_TITLE_FILE','Download Title:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_PRICE','Price:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_DESC_FILE','Short Description:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_DESC_FILE_LONG','Long Description:');    
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_AUTHOR','Author Name:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_AUTHOR_URL','Author Website:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_LIZENZ','Licence:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_VERSION','Version:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_LISTBOXES','Select:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_CATEGORY','Category:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_LANGUAGE','Language:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_SYSTEM','System:');
DEFINE('_JLIST_FRONTEND_UPLOAD_SYMBOL_TEXT','Mandatory field');

//FRONTEND SEARCH
DEFINE('_JLIST_FRONTEND_SEARCH_LINKTEXT','Search Downloads');

// AUTOCHECK DOWNLOADS
DEFINE('_JLIST_BACKEND_AUTOCHECK_NEW_CATS','new directories were found and added as new categories!!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_MISSING_CATS','Category directories were not any longer found and therefore the appropriate
categories were not published!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NO_NEW_CATS','No new directory found!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NO_MISSING_CATS','All published category directories exist!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_LOG_TITLE','Last internal messages (executed actions):');
DEFINE('_JLIST_BACKEND_AUTOCHECK_LOG_TAB_TITLE','Last internal messages (actions) during Download directories monitoring'); 
DEFINE('_JLIST_BACKEND_AUTOCHECK_REFRESH_MESSAGE','You must refresh the page to see the modifications!'); 

DEFINE('_JLIST_BACKEND_RESTORE_LOG_TAB_TITLE','Results for last backup restoration'); 

DEFINE('_JLIST_BACKEND_PANEL_STATUS_DESC_OFFLINE','The maintenance mode is activated! Therefore the Download area is not available at the moment for normal visitors! This download area is nevertheless available for members belonging to the "Author" group.');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_DOWNLOADS_HEADER','Downloads Status');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_DOWNLOADS_OFF_DESC','The automatic monitoring of the Download directories is deactivated!');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_VERSION_HEADER','Jdownloads current version information');

DEFINE('_JLIST_BACKEND_SETTINGS_DEL_TEMPFILE_TIME','Delay (in minutes) for temporary zip file deletion');
DEFINE('_JLIST_BACKEND_SETTINGS_DEL_TEMPFILE_TIME_DESC','Indicate a value in minutes, after which the temporary created Zip files for multiple downloads are to be deleted by the server. If you offer large files, then you should set a higher value. Default value: 20 (minutes).');

DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_FRONTEND_HEAD_UPLOAD','Frontend Upload Configuration');
DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIR_RENAME_ERROR','ERROR: Download root directory could not be renamed!');
DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIR_RENAME_OK',' - Download root directory successfully renamed!');

DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO','Download directory monitoring? ');
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_DESC','If this option is selected, all directories are checked for modifications and the data base is automatically updated . Therefore directories and files loaded by ftp on the server are added automatically as new data records in the category and Download tables. If categories or Download files are not any longer found, then the related entries are set as : <b>Not published</b >.<b>Standard setting: YES.</b>');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_USE_CHECKBOX_INFO','<b>Note:</b> Check box options for Download announcement are defined in the layout administration part for files layout!');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_USE_SYMBOLE_INFO','<b>Note:</b> Mini symbols display options are defined in the layout administration part for files layouts!');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FILES_PER_SIDE','Number of entries per page');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FILES_PER_SIDE_DESC','Indicate here the number of Categorien/Downloads entries that will be displayed per page by the front-end.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_HEADER_TITLE','Title to be used as header');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_HEADER_DESC','Define here the title that will be displayed by the front-end as component title, e.g.. "Downloads".');

// FRONTEND UPLOAD CONFIG
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACTIVE','Frontend Upload activation:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACTIVE_DESC','If activated, the user groups defined below can submit files with a
form.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_PERMISSIONS','Who may upload files:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_PERMISSIONS_DESC','Here you define which group of users may submit files. The "Special" setting allows members with status >= "author" to access the Upload form.');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACCESS_ALL','All');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACCESS_REGGED','Registered');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACCESS_ADMINS','Special');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILETYPES','Allowed file extensions:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILETYPES_DESC','Define here the individual file extensions that may be submitted with the Upload form. Between each value a comma (,) must be inserted.');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILESIZE','Maximum Size in KB:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILESIZE_DESC','Define here the max. size allowed for submitted files in kilobytes (1024 Kb = 1 Mb). Pre-set value: 2048.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FORM_TEXT','Upload form text:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FORM_TEXT_DESC','Define here the layout (contents and format) of the Upload form (before or below form text). The placeholder: {form} will be replaced by the actual form on front-end output. The placeholder symbol can not be deleted!');

// Platzhalter {form} NICHT ÄNDERN ODER LÖSCHEN !!!
// DO NOT DELETE, EDIT OR TRANSLATE: {form} !!! 

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FORM_TEXT_LAYOUT','This form allows you to upload a file to the server. All fields with a symbol are mandatory fields. Your name or e-mail address will never be communicated to third party and is solely internally used for information.<br />
{form}<br />');

DEFINE('_JLIST_BACKEND_TEMPLIST_DEL_QUEST','Delete Layout(s)?');
DEFINE('_JLIST_BACKEND_LICLIST_DEL_QUEST','Delete Licence(s)?');

DEFINE('_JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD_STATUS_DESC','Here you see the configuration status of the  ROOT Upload directory. If it is not writable, please chech the access rights with a FTP program. The rights must be on CHMOD 0777.');

DEFINE('_JLIST_BACKEND_FILESEDIT_HITS','Number of past Downloads');
DEFINE('_JLIST_BACKEND_FILESEDIT_HITS_DESC','Here the Download counter can be changed or reset');

DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_CAT_DESC','You must assign the Download to a category. Select from the list the appropriate category. If another category is later selected, then the Download file is automatically moved  into the directory of the new category.');

DEFINE('_JLIST_BACKEND_FILESEDIT_DESCRIPTION_KURZ','Short Description');
DEFINE('_JLIST_BACKEND_FILESEDIT_DESCRIPTION_LONG','Long Description');
DEFINE('_JLIST_BACKEND_FILESEDIT_EDITOR_INFO','In the configuration form it can be set whether the activated WYSIWYG editor or a simple text box will be used for edition.');
DEFINE('_JLIST_BACKEND_FILESEDIT_SENT_IN_FROM_STATUS','Status: ');
DEFINE('_JLIST_BACKEND_FILESEDIT_SENT_IN_FROM_EMAIL','E-Mail Address: ');
DEFINE('_JLIST_BACKEND_FILESEDIT_ERROR_TITLE','Error: Download must have a Title!');
DEFINE('_JLIST_BACKEND_FILESEDIT_CATLIST_ERROR','Error: no category is assigned!');
DEFINE('_JLIST_BACKEND_FILESEDIT_SAVE_MOVEFILE_ERROR',' - Error: Download File could not be moved!');
DEFINE('_JLIST_BACKEND_FILESEDIT_SAVE_MOVEFILE_OK',' - Download file successfully moved!');

DEFINE('_JLIST_BE_NO_PUBL_FILES','Downloads without category allocation cannot be published!');
DEFINE('_JLIST_BACKEND_FILESLIST_DEL_QUEST','Delete Download(s)?');
DEFINE('_JLIST_BACKEND_FILESLIST_DESCRIPTION_SHORT','Description (Short)');
DEFINE('_JLIST_BACKEND_FILESLIST_PIC','Symbol');
DEFINE('_JLIST_BACKEND_FILESLIST_DEL_FILES_OPTION','<font color=#990000>Delete associated download file on download data delete action:</font>');

DEFINE('_JLIST_BACKEND_FILESLIST_DEL_FILES_OPTION_TOOLTIP','If YES, download data is not only deleted but also the associated file by the server! If the file is not deleted and the monitoring of the Download directories is activated, then the file is automatically considered as new stored Download !<br /><b>Recommended setting: YES</b >.');
DEFINE('_JLIST_BACKEND_FILESEDIT_DEL_FILES_OK',' - Associated file(s) also deleted.');
DEFINE('_JLIST_BACKEND_FILESEDIT_DEL_FILES_ERROR',' - Associated file(s) not deleted since missing.');
DEFINE('_JLIST_BACKEND_FILESLIST_FILE_ID','ID');

DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_CAT_DEL_AFTER_COPY','An error occured during old Category directory delete operation');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_TITLE','Category title<b><font color=red>*</font></b>');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_TITLE_DESC','Category identification. For each category a directory is created with a name based on the title but without special characters? Exceptions: <b>" - _ . , " </b>and space character.');
DEFINE('_JLIST_BACKEND_CATSEDIT_ROOT_CAT_LISTBOX','Main Category');
DEFINE('_JLIST_BACKEND_CATSEDIT_ROOT_CAT_LISTBOX_NEW','New main category');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_TITLE','Category Assignment');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_TITLE_NEW','New category created in / as <b><font color=red>*</font></b>');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_DESC_NEW','If a new main category is to be created, then select "Main Category". If the new category is to serve as Subcategory of an existing category, then select the superordinate existing category. A new category is then created below. The hierarchical allocation can still be modified  at a later point in time.');

DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_DESC','If you want to move a category, then select the subordinate category where you want to move below the current category. If a Subcategory is to serve in the future as main category, then select "Main Category" option.<br /><br /><b>Advice:</b> 
On save operation, the current directory is shifted automatically on the server. If the shifted category contains
Subcategries, they are also shifted. In order to be safe with the internal operations, ALL other categories currently under modifications are closed at category edit time!');
DEFINE('_JLIST_BACKEND_CATSEDIT_SAVE','Category saved.');
DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_TITLE_CHARS_NOT_ALLOWED','Error: the title contains forbidden special characters!');
DEFINE('_JLIST_BACKEND_CATSLIST_DEL_QUEST','Delete Category(ies)?');
DEFINE('_JLIST_BACKEND_CATSLIST_CATID','ID');
DEFINE('_JLIST_BACKEND_CATSLIST_PATH','Directory');

// BACKEND CATS DELETE
DEFINE('_JLIST_BE_NO_DEL_SUBCATS_EXISTS','Category cannot be deleted due to existence of Subcategories!');
DEFINE('_JLIST_BE_NO_DEL_FILES_EXISTS','Category cannot be deleted due to existence of Downloads files!');
DEFINE('_JLIST_BE_DEL_CATS_DIRS_OK',' - Directory successfully deleted!');
DEFINE('_JLIST_BE_DEL_CATS_DIRS_ERROR',' - Error during directory delete operation!');

DEFINE('_JLIST_BACKEND_NO_SELECT_ACTION','Please select first a line entry.!');

DEFINE('_JLIST_BE_SETTINGS_FILES_PER_SIDE_BE_TITLE','How many lines in list display');
DEFINE('_JLIST_BE_SETTINGS_FILES_PER_SIDE_BE_DESC','Here you can define how many lines are to be displayed in the list layout by the Backend.');

DEFINE('_JLIST_UPLOAD_MAX_FILESIZE_INFO_TITLE','Maximum size as defined in config file php.ini:');

DEFINE('_JLIST_BACKEND_TEMPLATE_ACTIVE_ERROR','Only ONE layout can be selected for activation!');
DEFINE('_JLIST_AUTO_FILE_CHECK_IMPORT_BY','System'); // changed in 1.4 beta         
DEFINE('_JLIST_AUTO_FILE_CHECK_ADDED',   'Download added    ');
DEFINE('_JLIST_AUTO_FILE_CHECK_DISABLED','Download not found      ');
DEFINE('_JLIST_AUTO_CAT_CHECK_ADDED',    'Category added');
DEFINE('_JLIST_AUTO_CAT_CHECK_DISABLED', 'Category not found  ');

// MESSAGES AFTER CHECK FILES AND DIRS WHEN UPDATED FROM 1.1 alpha
DEFINE('_JLIST_CHECK_CATS_TITEL1','You have updated your old jDownloads version to the Version 1.2');     
DEFINE('_JLIST_CHECK_CATS_TITEL2','As a consequence, all categories and Downloads already created must be now
transferred into the new category structure!');          

DEFINE('_JLIST_CHECK_FINISH','Process terminated!');
DEFINE('_JLIST_CHECK_CATS_CREATE','Categories-directories created!');
DEFINE('_JLIST_CHECK_FILES_MOVE','Download files shifted!!');
DEFINE('_JLIST_CHECK_FILES_NOT_FOUND','Download-files not found!');
DEFINE('_JLIST_CHECK_FILES_NOT_MOVED','Download-files could not be shifted into the assigned category directory!');
DEFINE('_JLIST_CHECK_CATS_NOT_FOUND','Category-directories could not be created!');

// MESSAGES AFTER RESTORE BACKUPFILE
DEFINE('_JLIST_AFTER_RESTORE_TITLE_1','Restoration process running:');
DEFINE('_JLIST_AFTER_RESTORE_1','Records restored!');
DEFINE('_JLIST_AFTER_RESTORE_TITLE_2','Database contents check started:');
DEFINE('_JLIST_AFTER_RESTORE_3','Backup was created with an older jDownloads version!');
DEFINE('_JLIST_AFTER_RESTORE_4','The category directories and Downloads are now checked:');
DEFINE('_JLIST_AFTER_RESTORE_TITLE_3','Detailed results:');

DEFINE('_JLIST_AUTOCHECK_DIR_NOT_EXIST','ERROR: Upload root directory does not exist!');
DEFINE('_JLIST_AUTOCHECK_DIR_NOT_EXIST_2','Please create the 2 directories /downloads and /downloads/tempzipfiles in your Joomla root directory by ftp program and set the directories access rights to CHMOD 0777 - otherwise jDownloads will not work!');
DEFINE('_JLIST_FRONTEND_HEADER_CATLIST_TITLE','Select Category');
DEFINE('_JLIST_FRONTEND_HEADER_SUMMARY_TITLE','Summary');
DEFINE('_JLIST_FRONTEND_HEADER_FINISH_TITLE','Download');

// FRONTEND SEARCH
DEFINE('_JLIST_FRONTEND_SEARCH_TITLE','Downloads search');
DEFINE('_JLIST_FRONTEND_SEARCH_TEXT_TITLE','Search for');
DEFINE('_JLIST_FRONTEND_SEARCH_IN_TITLE','Search in Title');
DEFINE('_JLIST_FRONTEND_SEARCH_IN_DESC','Search in Description');
DEFINE('_JLIST_FRONTEND_SEARCH_INFO_TEXT','A maximum of 20 files is displayed as search result.');  
DEFINE('_JLIST_FRONTEND_SEARCH_BUTTON_TEXT','Search');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_TITLE','Search results');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_SUM_FILES','found');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_NO_SUM_FILES','No file found as search result.');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_SEARCH_TEXT','Search term');

// NEW LAYOUT FOR VIEW DOWNLOAD-DETAILS
DEFINE('_JLIST_BACKEND_TEMP_TYP5','Download-Details');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_DETAILS','Download-Details');
DEFINE('_JLIST_BACKEND_TEMPLIST_DETAILSTITLE_HEAD','Download-Details Layouts');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS','Layout: Download-Details');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_DESC','This is the layout of the Downloads <b>Details page</b> in the 
Front-end.<br /><br />Do not remove the placeholder variable <font color=red>{url_download}</font>!<br /><br />Available variables (placeholders):<br />{file_title} {thumbnail} {pic_is_new} {pic_is_hot} {pic_is_updated} {url_download} {mirror_1} {mirror_2} {description_long} {details_block_title} {license_title} {license_text} {price_title} {price_value} {language_title} {language_text} {filesize_title} {filesize_value} {system_title} {system_text} {author_title} {author_text} {author_url_title} {author_url_text} {created_date_title} {created_date_value} {hits_title} {hits_value} {created_by_title} {created_by_value} {modified_by_title} {modified_by_value} {modified_date_title} {modified_date_value}.'); // changed in 1.4 beta (2)
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_INFO_TITLE','<b>Information about Download details layout:</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_INFO_TEXT','<p>Graphical example of this page in the frontend. The dark red border indicates the area you can change the display from here.</p>');

// FRONTEND DOWNLOAD DETAILSITE
DEFINE('_JLIST_FE_DETAILS_PATHWAY_TEXT','Files location');
DEFINE('_JLIST_FE_DETAILS_LINK_TEXT_TO_DETAILS','>> Details');
DEFINE('_JLIST_FE_DETAILS_LICENSE_TITLE','Licence');
DEFINE('_JLIST_FE_DETAILS_PRICE_TITLE','Price');
DEFINE('_JLIST_FE_DETAILS_LANGUAGE_TITLE','Language');
DEFINE('_JLIST_FE_DETAILS_FILESIZE_TITLE','Size');
DEFINE('_JLIST_FE_DETAILS_SYSTEM_TITLE','System');
DEFINE('_JLIST_FE_DETAILS_AUTHOR_TITLE','Author');
DEFINE('_JLIST_FE_DETAILS_AUTHOR_URL_TITLE','Website');
DEFINE('_JLIST_FE_DETAILS_CREATED_DATE_TITLE','Created');
DEFINE('_JLIST_FE_DETAILS_HITS_TITLE','Downloads');

// LAYOUT DOWNLOAD-DETAILS
///////////////////////////////////////////////////////////////////////////////
// Template defaults for _jdownloads_templates - Please do not change this and NO translation here!!!
// Vorgabewerte f&uuml;r Layouttabelle - hier bitte KEINE &Auml;nderungen oder Übersetzungen hier vornehmen !!!
///////////////////////////////////////////////////////////////////////////////
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_DEFAULT_NAME','Standard 1.4'); // changed in 1.4 beta
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT_NAME','Standard 1.4'); // changed in 1.4 beta

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_DEFAULT_NAME','Standard 1.4 - Full Info'); // changed in 1.4 beta
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_DEFAULT','<table width="100%" border="0" cellpadding="0" cellspacing="5">
    <tr>
    <td height="38" colspan="3" valign="top"><span style="font-size:13pt;">{file_pic} {file_title} {pic_is_new}{pic_is_hot}{pic_is_updated}</span></td>
  </tr>
  <tr>
    <td width="313" height="370" valign="top">{screenshot_begin}<a href="{screenshot}" rel="lightbox" > <img src="{thumbnail}" align="right" /></a>{screenshot_end} {description_long}</td>
    <td width="23" valign="top"></td>
    <td width="150" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-style:solid; border-width:thin; border-color:#CECECE; padding:5px;" bgcolor="#EFEFEF">
      <tr>
       <td height="25" colspan="2" valign="top">
        <p align="center" style="background-color:#CECECE; padding:2px;"><b>{details_block_title}</b></p>
        </td>
      </tr>
      <tr>
        <td height="20" valign="top">{filesize_title}</td>
          <td valign="top" style="text-align:right;">{filesize_value}</td>
      </tr>
      <tr>
        <td height="20" valign="top">{hits_title}</td>
          <td valign="top" style="text-align:right;">{hits_value}</td>
      </tr>
      <tr>
        <td height="20" valign="top">{language_title}</td>
          <td valign="top" style="text-align:right;">{language_text}</td>
      </tr>
      <tr>
        <td height="20" valign="top">{license_title}</td>
          <td valign="top" style="text-align:right;">{license_text}</td>
      </tr>
      <tr>
        <td height="20" valign="top">{author_title}</td>
          <td valign="top" style="text-align:right;">{author_text}</td>
      </tr>
      <tr>
        <td height="20" valign="top">{author_url_title}</td>
          <td valign="top" style="text-align:right;">{author_url_text}</td>
      </tr>
      <tr>
        <td height="20" valign="top">{price_title}</td>
          <td valign="top" style="text-align:right;">{price_value}</td>
      </tr>
      <tr>  
         <td height="20" valign="top">{created_date_title}</td>
          <td valign="top" style="text-align:right;">{created_date_value}</td>
      </tr>
      <tr>
        <td height="20" valign="top">{created_by_title}</td>
          <td valign="top" style="text-align:right;">{created_by_value}</td>
      </tr>
      <tr>
        <td height="20" valign="top">{modified_date_title}</td>
          <td valign="top" style="text-align:right;">{modified_date_value}</td>
      </tr>
      <tr>
        <td height="20" valign="top">{modified_by_title}</td>
          <td valign="top" style="text-align:right;">{modified_by_value}</td>
      </tr>
      <tr>
         <td height="103" colspan="2" align="center" valign="middle">
         <p align="center"><font size="2">{url_download}</font><br />{mirror_1} {mirror_2}</p></td>
      </tr>
       </table></td>
  </tr>
  <tr>
    <td height="0"></td>
    <td></td>
    <td></td>
  </tr>
  </table>'); // changed in 1.4 beta (2)

// NEW FILESLIST LAYOUT SIMPLE (FOR USE WITH DETAILS_LAYOUT)
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT_NEW_SIMPLE_1_NAME','Standard layout with Checkboxes');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT_NEW_SIMPLE_1','{files_title_begin}<div style="background-color:#EFEFEF; padding:6px;">{files_title_text}</div>{files_title_end}

<table width="100%" style="padding:3px;" bgcolor="#F5F5F5">
   <tr>
   <td width="80%"> {file_pic} {file_title} {release} {pic_is_new}{pic_is_hot}{pic_is_updated}         
   </td>
        <td width="10%">
            <p align="center"> </p>
        </td>
        <td width="10%">
            <p align="center">{checkbox_list}</p>
        </td>
  </tr>
</table>
<table width="100%" style="padding:3px;">    
<tr>
        <td width="70%" align="left" valign="top" colspan="3">{screenshot_begin}<a href="{screenshot}" rel="lightbox"> <img src="{thumbnail}" align="right"/></a>{screenshot_end}{description}
        </td>
        <td width="10%" valign="top">{created_date_title}<br />{filesize_title}<br />{hits_title}</td>
        <td width="10%" valign="top">{created_date_value}<br />{filesize_value}<br />{hits_value}</td>
    </tr>
    <tr><td> </td></tr>
</table>'); // changed in 1.4 beta (2)

DEFINE('_JLIST_BACKEND_TEMPEDIT_TITLE_NOT_ALLOWED_TO_CHANGE_DESK','You can not change names from default layouts!'); 
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT_NEW_SIMPLE_2_NAME','Standard layout without Checkboxes');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT_NEW_SIMPLE_2','{files_title_begin}<div style="background-color:#EFEFEF; padding:6px;">{files_title_text}</div>{files_title_end}

<table width="100%" style="padding:3px;" bgcolor="#F5F5F5">
   <tr>
   <td width="80%"> {file_pic} {file_title} {release} {pic_is_new}{pic_is_hot}{pic_is_updated}         
   </td>
        <td width="10%">
            <p align="center"> </p>
        </td>
        <td width="10%">
            <p align="center">{url_download}</p>
        </td>
  </tr>
</table>
<table width="100%" style="padding:3px;">    
<tr>
        <td width="70%" align="left" valign="top" colspan="3">{screenshot_begin}<a href="{screenshot}" rel="lightbox"> <img src="{thumbnail}" align="right"/></a>{screenshot_end}{description}
        </td>
        <td width="10%" valign="top">{created_date_title}<br />{filesize_title}<br />{hits_title}</td>
        <td width="10%" valign="top">{created_date_value}<br />{filesize_value}<br />{hits_value}</td>
    </tr>
    <tr><td></td></tr>
</table>'); // changed 1.4 beta (2)

// END LAYOUTS
// NEW LAYOUTS PARAMETER
DEFINE('_JLIST_BACKEND_TEMPEDIT_NOTE_TITLE','Layout notes');
DEFINE('_JLIST_BACKEND_TEMPEDIT_NOTE_DESC','Additional information for the layout can be defined here.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_CHECKBOX_TITLE','Does the layout use CHECK boxes?');
DEFINE('_JLIST_BACKEND_TEMPEDIT_CHECKBOX_DESC','If yes, the CHECK box heading line and the Continue button are displayed on output. Additionally the placeholder symbol <b>{checkbox_list}</b> must be
inserted  in the layout. If not, the placehoder symbol <b>{url_download}</b>must instead be inserted in the layout.'); 
DEFINE('_JLIST_BACKEND_TEMPEDIT_SYMBOLE_TITLE','Insert mini-symbol?');
DEFINE('_JLIST_BACKEND_TEMPEDIT_SYMBOLE_DESC','If yes, the designated mini-symbol will be inserted. The symbol sizes can be adjusted in the configuration settings.'); // changed in 1.4 beta

DEFINE('_JLIST_FE_YES','Yes');
DEFINE('_JLIST_FE_NO','No');

DEFINE('_JLIST_BACKEND_EDIT_PUBLISHED','Published');
DEFINE('_JLIST_BACKEND_FILESEDIT_MODIFIED_DATE','Last modified');
DEFINE('_JLIST_BACKEND_FILESEDIT_MODIFIED_BY','by');
DEFINE('_JLIST_BACKEND_FILESEDIT_CREATED_BY','Created by');

DEFINE('_JLIST_BACKEND_FILESEDIT_INFO_FIELDS_DESC','The boxes on the left, provide file informations: name of publisher, last editor, last edit time');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CATLISTBOX_ACTIVE','Display Category listbox in header?');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CATLISTBOX_DESC','If YES, a listbox with all published categories available for the User according to User access rights are displayed on the right of the header. From this list box, you can go directly to the  wanted Category/Subcategory.');

// SAMPLE DATA 
DEFINE('_JLIST_SAMPLE_DATA_CAT_NAME_ROOT','Category example');
DEFINE('_JLIST_SAMPLE_DATA_CAT_NAME_SUB','Subcategory example');
DEFINE('_JLIST_SAMPLE_DATA_CAT_NAME_TEXT','This is a Category example for illustration. This definition can be removed at any time.');
DEFINE('_JLIST_SAMPLE_DATA_FILE_NAME','Download example');
DEFINE('_JLIST_SAMPLE_DATA_FILE_NAME_TEXT','This is a Download (file) example for illustration. This definition can be removed at any time.');
DEFINE('_JLIST_SAMPLE_DATA_CREATE_ERROR','Due to an error, example data was not created! Please check Options in jDownloads main menu.');
DEFINE('_JLIST_SAMPLE_DATA_CREATE_OK','Example data successfully created!');
DEFINE('_JLIST_SAMPLE_DATA_BE_OPTION_LINK_TEXT','Install Example data now');
DEFINE('_JLIST_SAMPLE_DATA_EXISTS','Example data already existing!');
DEFINE('_JLIST_SAMPLE_DATA_BACK_TO_PANEL','Back to Control panel');


DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_HEAD_INFO2','<br /><b><u>Layouts explanation</u></b><br /><b>Categories: </b>Defines the layout of the categories as well as the download items for the use of the CHECK boxes above and below the Download list.<br /><b>Files: </b>Defines the layout of the Download list displayed below the categories (see here above).<br /><b>Download-Details: </b>Defines the layout of the Download detailed view.<br /><b>Summary: </b>Defines the layout of the download summary page (from which you actually start dowloading) with the list of selected files to be downloaded.'); // changed in 1.3  RC2


// ANTI_LEECH_CONFIG
DEFINE('_JLIST_BACKEND_SETTINGS_ANTILEECH_TITLE','Protecting your Download-directory?');
DEFINE('_JLIST_BACKEND_SETTINGS_ANTILEECH_DESK','If YES, the htaccess.txt file will be copied in your download root-directory and renamed in .htaccess. Now the protection is activated and all external file and subdirectory accesses are blocked. <b>Recommended: YES!</b>');
DEFINE('_JLIST_ACTIVE_ANTILEECH_ERROR',' - ERROR copying htaccess.txt!');
DEFINE('_JLIST_ACTIVE_ANTILEECH_OK',' - Download protection is activated!');
DEFINE('_JLIST_ACTIVE_ANTILEECH_OFF_ERROR',' - Error deleting .htaccess!');
DEFINE('_JLIST_ACTIVE_ANTILEECH_OFF_OK',' - Download protection is deactivated!');

DEFINE('_JLIST_FRONTEND_ANTILEECH_MESSAGE','Unauthorized access to downloads!');
DEFINE('_JLIST_FRONTEND_FILE_NOT_FOUND_MESSAGE','The recommended file wasn\'t found!<br /><br />Please inform your Webmaster!');

DEFINE('_JLIST_FRONTEND_SUMMARY_ZIP_FILESIZE','Filesize for Download package');
DEFINE('_JLIST_FRONTEND_NEXT_SITE_BUTTON','&nbsp;>>&nbsp;');
DEFINE('_JLIST_FRONTEND_PREV_SITE_BUTTON','&nbsp;<<&nbsp;');

DEFINE('_JLIST_FRONTEND_SUBHEADER_NUMBER_OF_CATS_TITLE','Number of Categories');
DEFINE('_JLIST_FRONTEND_SUBHEADER_NUMBER_OF_SUBCATS_TITLE','Number of Subcategories');
DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_CATLIST','Please choose a category or >Main category<');

// NEW OPTION FOR DIREKT DOWNLOAD LINK
DEFINE('_JLIST_BACKEND_SETTINGS_DIRECT_DOWNLOAD_ACTIVE_TITLE','Activate direct-download?');
DEFINE('_JLIST_BACKEND_SETTINGS_DIRECT_DOWNLOAD_ACTIVE_DESC','If YES: the placeholder <b>{url_download}</b> is used to start the download immediately, without displaying further information.');

// NEW OPTION FOR HOT AND NEW IMAGES IN DOWNLOADS
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_TITLE','At what point is a download marked as "popular"');
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_DESC','Indicate the number of downloads needed to mark a download as "HOT". The "HOT" symbol will be displayed next to the download tile.');
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_NEW_PIC_TITLE','Filename of the symbol');
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_NEW_PIC_DESC','The indicated file must be in the directory: <b>../images/jdownloads/hotimages</b>.');
DEFINE('_JLIST_BACKEND_SETTINGS_NEW_TITLE','How long is a recent download considered "new"');
DEFINE('_JLIST_BACKEND_SETTINGS_NEW_DESC','Indicate the number of days after creation that a download is marked as "NEW". The "NEW" symbol will be displayed next to the download title.');
// NEW OPTION FOR DOWNLOAD PIC BUTTON IN DOWNLOAD DETAILS
DEFINE('_JLIST_BACKEND_SETTINGS_DETAILS_DOWNLOAD_BUTTON_TITLE','Select Download Button'); // changed in 1.3 rc2
DEFINE('_JLIST_BACKEND_SETTINGS_DETAILS_DOWNLOAD_BUTTON_DESC','The indicated file must be in the directory <b>../images/jdownloads/downloadimages </b>The activated buttons were used at the download details, the summary and the mirror links.'); // changed in 1.3 RC2

// NEW IN 1.2 beta 2
DEFINE('_JLIST_FRONTEND_UPLOAD_AUTO_PUBLISH','Download auto publish:');
DEFINE('_JLIST_FRONTEND_UPLOAD_AUTO_PUBLISH_DESC','When YES, the download file is published after uploading.');

// NEW IN 1.2 stable
DEFINE('_JLIST_BACKEND_DIRSEDIT_CREATE_DIR_MESSAGE_ERROR','Error: Directory couldn\'t be created! Check via FTP this and set CHMOD on 0777 for all jDownloads directories!');

// NEW IN 1.3 stable

// FOR CREATES MAIN MENU IN INSTALL
DEFINE('_JLIST_BACKEND_CPANEL_MAIN','Control panel');
DEFINE('_JLIST_INSTALL_DEFAULT_DATE_FORMAT','%Y-%m-%d %H:%M:%S');

// NEW OPTION SORTORDER CATEGORIES
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SORTCATSORDER_TEXT','Categories sort order');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SORTCATSORDER_DESC','Order used to sort Categories in the front end. Select "Standard" to use the backend\'s default order.');
DEFINE('_JLIST_BACKEND_SETTINGS_CATS_ORDER_1','Standard');
DEFINE('_JLIST_BACKEND_SETTINGS_CATS_ORDER_2','Name upward');
DEFINE('_JLIST_BACKEND_SETTINGS_CATS_ORDER_3','Name downward');

// NEW TAB TITLE FOR AUTODETECT
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_TAB_TITLE','Monitoring');
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_HEADER_TITLE','Monitoring of the download folders');

// NEW OPTION AUTOPUBLISH NEW FOUNDED FILES
DEFINE('_JLIST_BACKEND_SETTINGS_DOWNLOADS_AUTOPUBLISH_TITLE','Automatically publish downloads?');
DEFINE('_JLIST_BACKEND_SETTINGS_DOWNLOADS_AUTOPUBLISH_DESC','If Yes, newly found files are published immediately. It is assumed the above option is enabled.<br /><b>Default: No.</b>');

// NEW OPTION  FOR AUTODETECT ALL FILES
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_ALL_FILES_TITLE','Monitor all filetypes?');
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_ALL_FILES_DESC','If this option is activated, all file types are monitored!');

// NEW OPTION  FOR AUTODETECT ONLY THIS FILES
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_ONLY_THIS_FILES_TITLE','Monitor only the following file types:');
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_ONLY_THIS_FILES_DESC','If this option is activated, only the file types mentioned here are monitored! Values must be separated by commas (,).');

// NEW COPY DOWNLOADS FUNCTION
DEFINE('_JLIST_BACKEND_FILES_COPY_TITLE','Copy Downloads');
DEFINE('_JLIST_BACKEND_FILES_COPY_DESC','Select the Target Category.');
DEFINE('_JLIST_BACKEND_FILES_COPY_TEXT_1','These Downloads are marked for copy:');
DEFINE('_JLIST_BACKEND_FILES_COPY_TEXT_2','Hint: If you select the self category, it\'s created the copy as: "Copy from <i>Download-Title</i>"!');
DEFINE('_JLIST_BACKEND_FILES_COPY_TEXT_3','Publish copied Downloads:');
DEFINE('_JLIST_BACKEND_FILES_COPY_TEXT_4','Copy also File:');
DEFINE('_JLIST_BACKEND_FILES_COPY_DOWNLOADS_TEXT','Copy from');
DEFINE('_JLIST_BACKEND_FILES_COPY_SAVED','Downloads are copied!');

// NEW OPTION EXTERN DOWNLOAD URL
DEFINE('_JLIST_BACKEND_FILE_EDIT_EXT_DOWNLOAD_TITLE','External file link:');
DEFINE('_JLIST_BACKEND_FILE_EDIT_EXT_DOWNLOAD_INFO','For an external file link, you have to delete the local file at first.');
DEFINE('_JLIST_BACKEND_FILE_EDIT_EXT_DOWNLOAD_DESC','Here you can indicate an external file for this download. If this option is used, nothing should be specified in the above input field.<br><b>Important information: </b> Downloads may NOT work if the target file is hosted on a sharehoster site (e.g. Rapidshare), and it may not be possible to determine file size (use manual method, instead). Please check and confirm all external downloads.'); // changed in 1.3 RC2

//NEW OPTION FOR JCOMMENTS INTEGRATION
DEFINE('_JLIST_BACKEND_SETTINGS_JCOMMENTS_TITLE','Support JComments?');
DEFINE('_JLIST_BACKEND_SETTINGS_JCOMMENTS_DESC','Yes, activate the comments function from <b>JComments</b> in the frontend.<br /><b>JComments</b> is NOT included with jDownloads and must be installed and configured separately (see <a href="http://www.joomlatune.com">www.joomlatune.com</a>');
DEFINE('_JLIST_BACKEND_SETTINGS_JCOMMENTS_EXISTS_DESC','Yes, shows the JComments function in the download details pages<br /><b>JComments is already installed!</b>');

// NEW TAB FOR FRONTEND UPLOAD CONFIG
DEFINE('_JLIST_BACKEND_SETTINGS_FE_UPLOAD_TAB_TITLE','Uploads');
DEFINE('_JLIST_BACKEND_SETTINGS_FE_UPLOAD_TITLE_HEAD','Frontend upload formula configuration');

// NEW DOWNLOAD FIELDS FOR DOWNLOAD MIRRORS
DEFINE('_JLIST_BACKEND_FILESEDIT_MIRROR_URL_TITLE','Alternative <u>further</u> external file link:'); // changed in 1.4 beta
DEFINE('_JLIST_BACKEND_FILESEDIT_MIRROR_URL_DESC','Here you can set a mirror server for the download.<br />In the activated Layouts for Files and/or Download-Details you have to fill in the placeholders  {mirror_1} {mirror_2}.'); // changed in 1.4 beta

//NEW TEXT FOR MIRRORS
DEFINE('_JLIST_FRONTEND_MIRROR_URL_TITLE_1','Mirror 1');
DEFINE('_JLIST_FRONTEND_MIRROR_URL_TITLE_2','Mirror 2');

//NEW FOR PLUGINS TAB
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_PLUGINS','Plugins');

//NEW FOR FILE PLUGIN
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_FILEPLUGIN_HEAD','Configuration of the Content-Plugin (mos_jdownloads_file)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(c) by Pelma for jDownloads');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_DEFAULTLAYOUT','Default layout:');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_DEFAULTLAYOUT_DESC','This layout is used to show the downloads in the content, as the plugin is <b>enabled</b> (see below).');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_NOT_INSTALLED','The content-plugin mos_jdownloads_file which can be used to show downloads of jDownloads in articles is not an inherent part of jDownloads and has to be installed separately. <br /><b>Status: The content plugin is not installed yet!</b><br />You can find the extension on <a href="http://demo.joomlaaddons.de/index.php?option=com_jdownloads&Itemid=69&task=viewcategory&catid=9">www.JoomlaAddons.de</a>.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_ONLINEPART','Parameters for enabled plugin');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINEPART','Parameters for disabled plugin');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWNEW','Show NEW-symbol');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWNEW_DESC','Show (or not) the NEW-symbol in contents.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWHOT','Show HOT-symbol');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWHOT_DESC','Show (or not) the HOT-symbol in contents.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_ENABLEPLUGIN','Enable plugin');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_ENABLEPLUGIN_DESC','Enable the plugin. This is not the same as the publish parameter in Joomla. When you disable the plugin here, you can inform the visitor about this. (See parameters below)!');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWDISABLED','Show message when plugin disabled');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWDISABLED_DESC','When you disable the plugin, you can show a message in place of the download. See parameters below.<br \><b>No</b>: To show nothing.<br \><b>Default layout</b>: Show a message using the default layout (see above).<br \><b>Offline layout</b>: Show a message using the offline layout (see below).');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_DOWNLOADTITLE','Show the original download title');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_DOWNLOADTITLE_DESC','Yes: use the original download title (and its symbol) in your offline-message.  No: replace the original downloadtitle by the content of the field "Title replacement" below.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINETITLE','Title replacement');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINETITLE_DESC','Title to show when the plugin is disabled (depends on your selection above).');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINEDESC','Description replacement');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINEDESC_DESC','When the plugin is disabled, this description will be shown in place of the original download description.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT','Offline layout (when plugin disabled)');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT_DESC','Use this layout to show offline message when plugin disabled.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT_OPT1','No');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT_OPT2','Default layout');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT_OPT3','Offline layout');
DEFINE('_JLIST_FRONTEND_SETTINGS_FILEPLUGIN_OFFLINE_FILETITLE','Downloads are disabled.');
DEFINE('_JLIST_FRONTEND_SETTINGS_FILEPLUGIN_DESCRIPTION','If you are allowed to download, please contact the webmaster.');
DEFINE('_JLIST_FRONTEND_SETTINGS_FILEPLUGIN_FILEUNKNOWN','Cannot find the download! ID=<b>{fileid}</b>');
DEFINE('_JLIST_FRONTEND_SETTINGS_FILEPLUGIN_LAYOUTUNKNOWN','Cannot find the layout <b>{thelayout}</b>!');

// NEW OPTIONS FOR DEFAULT CAT ICON
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_CAT_FILE_NO_DEFAULT_PIC','No Image selected!');
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_CAT_PIC_TITLE','Default Image for Categories:');
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_CAT_PIC_DESC','Here a symbol can be assigned for automatic use with new categories.  It is indicated in the size stored above here.');

// NEW OPTIONS FOR DEFAULT FILE ICON
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_FILE_PIC_TITLE','Default Image for Downloads:');
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_FILE_PIC_DESC','Here a symbol can be assigned for automatic use with new downloads.  It is indicated in the size stored above here.');

// FOR MISSING NEW MINIPICS
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_PRICE','Price');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_FILESIZE','Filesize');

// FOR DATAFIELDS IN  DOWNLOAD DETAILVIEW
DEFINE('_JLIST_FE_DETAILS_CREATED_BY_TITLE','Created by'); // changed in 1.4 beta 
DEFINE('_JLIST_FE_DETAILS_MODIFIED_BY_TITLE','Modified by'); // changed in 1.4 beta
DEFINE('_JLIST_FE_DETAILS_MODIFIED_DATE_TITLE','Changed at'); // changed in 1.4 beta

// FOR EXTERN FILES -  USER INFO IF CHECKBOXES ACTIVE
// PLEASE USE NOT SPECIAL CHARS e.g. " ' & ...
DEFINE('_JLIST_FRONTEND_EXTERN_FILE_USER_INFO','This file needs to be downloaded separately, as it is located on another server. Therefore this file cannot be included in a grouped download.');DEFINE('_JLIST_FRONTEND_EXTERN_FILE_USER_INFO','This file needs to be downloaded separately, as it is located on another server. Therefore this file cannot be included in a grouped download.');

// FOR SAMPLE PIC IN EMAIL LAYOUT 
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_EMAIL_INFO_TITLE','<b>Information about email layout</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_EMAIL_INFO_TEXT','<p>This is a graphical example of this information in the transmitted email. The dark red border indicates the area you can change the display from here. </p>');

// ******************************************************************************
// NEW IN 1.4 pre-release
// ******************************************************************************

// INSTALL - MOVE  IMAGES DIRECTORIES TO JOOMLA/IMAGES/JDOWNLOADS
DEFINE('_JLIST_INSTALL_MOVE_IMAGES_ERROR','Problems with moved images directories.');
DEFINE('_JLIST_INSTALL_MOVE_IMAGES_OK','images directories moved to ../images/jdownloads/');
DEFINE('_JLIST_INSTALL_MOVE_IMAGES_DEST_DIR_EXIST','The images directory ../images/jdownloads/ already exists!');
DEFINE('_JLIST_INSTALL_MOVE_IMAGES_COPY_ERROR','ERROR: Cannot copy images directory!');
DEFINE('_JLIST_INSTALL_MOVE_IMAGES_DEL_AFTER_COPY_ERROR','ERROR: Cannot delete images source directory after copy!');

DEFINE('_JLIST_BACKEND_SETTINGS_IMAGES_NOTE','Note: after the installation from jDownloads, all used images directories will moved to the Joomla subdirectory: /images/jdownloads/. When you de-install jDownloads (e.g.for updates), all images are not deleted.');
// FOR MAIL AFTER FRONTEND UPLOADS

DEFINE('_JLIST_SETTINGS_INSTALL_6','A new file is uploaded!');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_UPLOAD_HEAD','e-mail configuration for file uploads');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_UPLOAD_TEMPLATE_TITLE','e-mail layout');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_UPLOAD_TEMPLATE_DESC','Here you can specify the layout of the <b>E-Mail</b>, which (if activates) is dispatched after each upload to the address specified above. HTML code as well as arbitrary text can be inserted.<br /><br />Available place-holder:<br />{name} {mail} {date} {ip} {file_title} {file_name} {description}');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_DOWNLOAD_TEMPLATE_DESC','Here you can specify the layout of the <b>E-Mail</b>, which (if activates) is dispatched after each download to the address specified above. HTML code as well as arbitrary text can be inserted<br /><br />Available place-holder:<br />{file_list} {ip_address} {date_time} {user_name} {user_email} {user_group}'); // changed in 1.4 beta 
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_UPLOAD_TEMPLATE','Report on a file upload!<br />
<br />
Sender: {name}<br />
E-Mail: {mail}<br />
IP-Adress: {ip}<br /><br />
Filename: {file_name}<br />
Title: {file_title}<br />
Description: {description}<br />
Date: {date}<br /><br />
This is an automatically generated E-Mail.');

// NEW FOR "NEW" IMAGES
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_NEW_PIC_DESC2','List of all pictures from the directory: <b>../images/jdownloads/newimages </b> to select.'); 

// FOR NEW OPTIONS: SCREENSHOT UPLOAD
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_TITLE','Size of the preview pictures (thumbnails) determine');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_INFO','If Screenshots are to be used for the downloads, after the Upload of a picture a automatically generated thumbnail is provided of it. Size of the thumbnail can be determind. Note: Condition for this is, a installed version of the GD library on the server (see status).');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_STATUS_GD_OK','Status: GD Library is present!');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_STATUS_GD_NOT_OK','Status: GD Library is missing!');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_SIZE_HEIGHT','Maximum height in pixels  (e.q.: 150).');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_SIZE_WIDTH','Maximum width in pixels (e.q.: 150).');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_CREATE_ALL_NEW_TITLE','All thumbnails provide again when storing?');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_CREATE_ALL_NEW_DESC','Deletes after storing the configuration all up-to-date existing preview pictures (thumbnails) and built new thumbnails with the dimensions indicated above again.');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_CREATE_ALL_MESSAGE','All preview pictures new built were again provided!');

// NEW FIELDS IN EDIT FILES FOR SCREENSHOTS
DEFINE('_JLIST_BACKEND_FILESEDIT_THUMBNAIL_LIST_NO_PIC','No pictures select');
DEFINE('_JLIST_BACKEND_FILESEDIT_THUMBNAIL_LIST_TITLE','Please select picture on server:');
DEFINE('_JLIST_BACKEND_FILESEDIT_THUMBNAIL_LIST_DESC','All reduced pictures are located to selection here in the directory <b>/images/jdownloads/screenshots/thumbnails </b>. The activated picture can be indicated then with the substitute symbol {thumbnail} in the layout.');
DEFINE('_JLIST_BACKEND_FILESEDIT_THUMBNAIL_UPLOAD_TITLE','Select picture to upload:');
DEFINE('_JLIST_BACKEND_FILESEDIT_THUMBNAIL_UPLOAD_DESC','Here a picture can be uploaded to the server. This is used for this download. The original is stored in the file <b>/images/jdownloads/screenshots</b> and a reduced version (thumbnail) is generated automatically.');

// FOR MIRROR LINK - JAVASCRIPT ERROR MESSAGE
DEFINE('_JLIST_BACKEND_FILESEDIT_ERROR_ONLY_MIRROR','Error: Please select first an internal or external file. Mirror link is only optionally possible.');

// FOR NEW MIRROR DOWNLOAD BUTTONS
DEFINE('_JLIST_BACKEND_SETTINGS_DETAILS_MIRROR_BUTTON_TITLE1','First Mirror Button'); 
DEFINE('_JLIST_BACKEND_SETTINGS_DETAILS_MIRROR_BUTTON_TITLE2','Second Mirror Button'); 

// FOR NEW "UPDATED" ICON IN DOWNLOADS TITLE
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_NEW_PIC_DESC3','List of all pictures from the directory: <b>../images/jdownloads/updimages </b> to select.');
DEFINE('_JLIST_BACKEND_SETTINGS_UPD_TITLE','How long a download is considered as "updated" (days)');
DEFINE('_JLIST_BACKEND_SETTINGS_UPD_DESC','Indicate here the number of days, which a Download is to be considered as “updated”. Behind the Download title the symbol is then indicated. As updated a Download is considered after each change to it. With 0 no symbol is indicated.'); // changed in 1.4 beta

// FOR NEW OPTION - LOAD FILE IN BROWSER - NOT DOWNLOAD
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_VIEW_FILE_TYPES','Which file types are to be opened in the Browser');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_VIEW_FILE_TYPES_DESC','Indicate the file types that should not trigger a download. These files are opened in a new browser window. Between each option you need a (,) separator. Example: html,htm,txt,pdf,doc,jpg,jpeg,png,gif');

//NEW FRONTEND PIC UPLOAD FIELD
DEFINE('_JLIST_FRONTEND_UPLOAD_PIC_FILETITLE','Screenshot:');
DEFINE('_JLIST_FRONTEND_UPLOAD_PIC_ALLOWED_FILES','Permitted file types:');

// NEW FILTER OPTION IN FILES LIST - BACKEND
DEFINE('_JLIST_BACKEND_FILESLIST_FILTER_PUBLISHED','Published');
DEFINE('_JLIST_BACKEND_FILESLIST_FILTER_UNPUBLISHED','Unpublished');

// NEW INFO WHEN USING LIGHTBOX PLACEHOLDER
DEFINE('_JLIST_BACKEND_TEMPEDIT_INFO_LIGHTBOX','When you will use the Screenshots with the Lightbox Function, you must set the placeholder with this syntax:<br /><b>{screenshot_begin}< a href="{screenshot}" rel="lightbox" > < img src="{thumbnail}" align="right" />< /a>{screenshot_end}</b><br />Note: Please delete spaces before and after <>.'); // changed in 1.4 beta  

// ******************************************************************************
// new in 1.4 beta
// ******************************************************************************

// NEW OPTION FOR MANAGER ACCESS IN BACKEND
DEFINE('_JLIST_BACKEND_SETTINGS_MANAGER_ACCESS','Access for managers?');
DEFINE('_JLIST_BACKEND_SETTINGS_MANAGER_ACCESS_DESC','If set to Yes, the members of the group Manager have access to all backend functions of jDownloads. If set to No, only Administrators.');

// NEW OPTION FOR VIEW PLACEHOLDER IMAGE FOR SCREENSHOTS IN DETAIL SITE
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PLACEHOLDER_TITLE','Show the Screenshot tag in the detailpage?');
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PLACEHOLDER_TEXT','If set to Yes, the picture in the left is displayed in the detail view if no screenshot is assigned to the download.');

// NEW OPTION FOR VIEW PLACEHOLDER IMAGE FOR SCREENSHOTS IN FILESLIST
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PLACEHOLDER_IN_LIST_TITLE','Show screenshots-tag in the downloads-lists?');
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PLACEHOLDER_IN_LIST_TEXT','If set to Yes, the picture in the left is displayed in the download lists if no screenshot is assigned to the download.');

// NEW OPTION FOR VIEW CATEGORY INFOS IN LISTVIEW - FRONTEND
DEFINE('_JLIST_BACKEND_SETTINGS_CAT_VIEW_INFO_IN_LISTS_TITLE','Show category-info?');
DEFINE('_JLIST_BACKEND_SETTINGS_CAT_VIEW_INFO_IN_LISTS_TEXT','If set to Yes, the category information is shown again under the navigation bar. As the name of the category is already visible in the navigationbar, this is not always welcome.');

// NEW OPTION FOR VIEW PAGE NAVIGATION ON THE BOTTOM - FRONTEND
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PAGENAVI_BOTTOM_TITLE','Show page navigation at the bottom?');
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PAGENAVI_BOTTOM_TEXT','If set to Yes, a page navigation bar is displayed at the bottom of the page.');

// NEW OPTION FOR VIEW PAGE NAVIGATION ON THE TOP - FRONTEND
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PAGENAVI_TOP_TITLE','Show page navigation at the top?');
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PAGENAVI_TOP_TEXT','If set to Yes, a page navigation bar is displayed at the top of the page.');

// PUBLISH FILES MESSAGE IN BACKEND
DEFINE('_JLIST_BACKEND_EDIT_FILES_CAN_NOT_PUBLISH_INFO','As some download(s) had no file assignment, the publication not possible!');

DEFINE('_JLIST_BACKEND_EDIT_FILES_SET_UPDATE_TITLE','Mark download as updated:');
DEFINE('_JLIST_BACKEND_EDIT_FILES_SET_UPDATE_TEXT','If set to Yes, the download is marked as updated in the frontend. The duration of the updated state can be set in the configuration.');

// FOR NEW META INFORMATION FIELDS IN CAT AND FILES EDIT
DEFINE('_JLIST_BACKEND_EDIT_METADESC_TITLE','Meta description:');
DEFINE('_JLIST_BACKEND_EDIT_METADESC_DESC','Here you can optionally set a short meta description for the meta-description field. This will be inserted in the HTML-output.');
DEFINE('_JLIST_BACKEND_EDIT_METAKEY_TITLE','Meta keywords:');
DEFINE('_JLIST_BACKEND_EDIT_METAKEY_DESC','Here you can optionally set some keywords for the meta-keywords field. These will be inserted in the HTML-output.');

DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR_INFOS_TITLE','Information about the author of the file');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_HOME_DESC','URL to the webpage of the author. This will be shown in the frontend as a link.');
DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR_DESC','Here you can enter a name and below a web adress or an e-mail. In the frontend you will see either a link to a webpage or an email link.');

// NEW PARAMETER IN SEARCH
DEFINE('_JLIST_FRONTEND_SEARCH_NUMBERS','Number of search results');

// NEW USER INFO BY EXTERN SHAREHOSTER LINK
DEFINE('_JLIST_FRONTEND_DOWNLOAD_GO_TO_OTHER_SITE_INFO','The requested file is located on an external webpage. <br />Please follow their instructions to start the download.');

// NEW OPTION IN  EDIT DOWNLOADS
DEFINE('_JLIST_BACKEND_FILESEDIT_OPEN_LINK_IN_OTHER_WEBSITE_TITLE','File on external webpage');
DEFINE('_JLIST_BACKEND_FILESEDIT_OPEN_LINK_IN_OTHER_WEBSITE_DESC','If set to yes, the file is located on an external webpage.(e.g. Sharehoster) and the download can only be started on the external page. A click on the download starts this page in the browser.');

// NEW SERVER INFO TAB IN CPANEL TAB
DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_5','Server Info');
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_TITLE','Information about the current server configuration'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_DESC','The maximum size of the files depends on the current settings of the server (php.ini). Below you can see the current relevant values for uploads. Please check that the values are set high enough. If you don\'t have access to php.ini, contact your hoster. You can find information about the parameters in www.php.net. '); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_FILE_UPLOADS','Allowed file uploads:'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_MAX_FILESIZE','Maximum allowed filesize (max_filesize):'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_POST_MAX_SIZE','Maximum allowed POST size: (post_max_size):'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_MEMORY_LIMIT','Memory limit (memory_limit):'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_MAX_EXECUTION_TIME','Maximum execution time of scripts (max_execution_time):'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_MAX_INPUT_TIME','Maximum input time for uploads (max_input_time):'); 

// NEW MESSAGE AFTER EDIT CATEGORIES AND CHANGING THE ACCESS LEVEL
DEFINE('_JLIST_BACKEND_CATSEDIT_SUM_CATS_ACCESS_LEVEL_CHANGED_AFTER_EDIT_MSG','Subcategories will be set to the same access rights!');
DEFINE('_JLIST_BACKEND_CATSEDIT_CATS_ACCESS_LEVEL_CAN_NOT_CHANGED_MSG','Note: A Category can\'t have a lower access level than a higher-level category. Access level was reset.');
DEFINE('_JLIST_BACKEND_CATSEDIT_CATS_ACCESS_LEVEL_CAN_NOT_CHANGED_MSG','Information: Subcategories can not have lower rights than their immediate parent category. Therefore, access rights have been reset.');

// NEW MINI ICON TITLE
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_DOWNLOAD_HITS','Downloads');
// ADDITIONAL INFO IN FILES LAYOUT
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DESC2','Use the placeholders {files_title_begin} {files_title_text} {files_title_end} to insert a title above the filelist.'); // changed in 1.4 beta (2) 
// ADDITIONAL INFO IN CAT LAYOUT
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_DESC2','Use the placeholders {cat_title_begin} {subcats_title_text} {cat_title_end} to insert a title above the subcategories.'); // changed in 1.4 beta (2) 
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_DESC3','The placeholders {cat_info_begin} and {cat_info_end} mark the zone where the informaton about a category are displayed. This zone can be masked with the parameter in the configuration.'); 

// NEW MESSAGES FOR INSTALLATION
DEFINE('_JLIST_INSTALL_20','Please wait - Checking category rights...');
DEFINE('_JLIST_INSTALL_21','Categories check is finished.');

// NEW IN 1.4 beta (2)

// NEW TEXT FOR LAYOUT FIELDS TITLE PLACEHOLDERS IN THE FRONTEND VIEW  (layout: files)
DEFINE('_JLIST_FE_FILELIST_LICENSE_TITLE','License');
DEFINE('_JLIST_FE_FILELIST_PRICE_TITLE','Price');
DEFINE('_JLIST_FE_FILELIST_LANGUAGE_TITLE','Language');
DEFINE('_JLIST_FE_FILELIST_FILESIZE_TITLE','Filesize');
DEFINE('_JLIST_FE_FILELIST_SYSTEM_TITLE','System');
DEFINE('_JLIST_FE_FILELIST_AUTHOR_TITLE','Author');
DEFINE('_JLIST_FE_FILELIST_AUTHOR_URL_TITLE','Website');
DEFINE('_JLIST_FE_FILELIST_CREATED_DATE_TITLE','Date');
DEFINE('_JLIST_FE_FILELIST_HITS_TITLE','Hits');
DEFINE('_JLIST_FE_FILELIST_CREATED_BY_TITLE','Created by');
DEFINE('_JLIST_FE_FILELIST_MODIFIED_BY_TITLE','Changed by');
DEFINE('_JLIST_FE_FILELIST_MODIFIED_DATE_TITLE','Last changed');
// NEW FOR PLACEHOLDER   {files_title_text} and  {subcats_title_text}  {details_block_title}
DEFINE('_JLIST_FE_FILELIST_TITLE_OVER_FILES_LIST','Files:');
DEFINE('_JLIST_FE_FILELIST_TITLE_OVER_SUBCATS_LIST','Subcategories:');
DEFINE('_JLIST_FE_DETAILS_DATA_BLOCK_TITLE','Data');
// NEW PLACEHOLDERS FOR SUMMARY PAGE  {license_note}  {title_text}
DEFINE('_JLIST_FE_SUMMARY_PAGE_LICENSE_NOTE','With the download, you acknowledge the license conditions.');
DEFINE('_JLIST_FE_SUMMARY_PAGE_TITLE_TEXT','Here you see the selected files to the download');

// NEW INSTALL MESSAGES FOR UPDATE
DEFINE('_JLIST_INSTALL_WARNING_CAT_ACCESS_RIGHTS','There were some changes in the categories security settings. Therefore please check your categories before publishing!');
DEFINE('_JLIST_INSTALL_WARNING_DEFAULT_LAYOUTS_ARE_ACTIVE','Due to the introduction of a new set of placeholders the new 1.4 default layout was activated. You can change that in the layout settings.');

?>