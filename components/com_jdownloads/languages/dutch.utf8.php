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
DEFINE('_JLIST_VERSION','<br /><br />Graag feedback geven op <a href="http://www.JoomlaAddons.de">www.JoomlaAddons.de</a>.');

DEFINE('_JLIST_PRODUCT_FOOTER','JDownloads');
DEFINE('_JLIST_VERSION_FOOTER','');

// end component infos
//-----------------------------------------------------------

// Installation data

DEFINE('_JLIST_INSTALL_0','Installatiegegevens:');
DEFINE('_JLIST_INSTALL_1','Alle instellingsdata zijn al in de database aanwezig!');
DEFINE('_JLIST_INSTALL_2','Instellingsdata zijn geactualiseerd en in de database opgenomen!');
DEFINE('_JLIST_INSTALL_3','Alle standaard layouts zijn al in de database aanwezig!.');
DEFINE('_JLIST_INSTALL_4','Standaard layouts zijn in de database opgeslagen!');
DEFINE('_JLIST_INSTALL_5','Alle standaard licenties zijn al in de database aanwezig!');
DEFINE('_JLIST_INSTALL_6','Standaard licenties zijn in de database opgeslagen!');
DEFINE('_JLIST_INSTALL_7','De uploadmap /downloads bestaat al en is schrijfbaar!');
DEFINE('_JLIST_INSTALL_8','De uploadmap /downloads bestaat al maar is niet schrijfbaar. Verander de schrijfrechten via een FTP-programma op CHMOD 0755, anders zal JDownloads niet naar behoren functioneren!');
DEFINE('_JLIST_INSTALL_9','De map /downloads werd aangemaakt. Schrijfrechten zijn ingesteld op: CHMOD 0755');
DEFINE('_JLIST_INSTALL_10','Fout: Uploadmap /downloads kon niet aangemaakt worden!<br />Maak deze map aan via een FTP-programma en stel de schrijfrechten in <br />op CHMOD 0755 - anders zal JDownloads niet naar behoren functioneren!');
DEFINE('_JLIST_INSTALL_11','De map voor tijdelijke zipbestanden /downloads/tempzipfiles bestaat al en is schrijfbaar!');
DEFINE('_JLIST_INSTALL_12','De Uploadmap /downloads/tempzipfiles bestaat al maar is niet schrijfbaar. Verander de schrijfrechten met een FTP-programma op CHMOD 0755, anders zal JDownloads niet naar behoren functioneren!');
DEFINE('_JLIST_INSTALL_13','De map /downloads/tempzipfiles is aangemaakt. Schrijfrechten zijn ingesteld op: CHMOD 0755');
DEFINE('_JLIST_INSTALL_14','Fout: Zipmap /downloads/tempzipfiles kon niet aangemaakt worden!<br />Maak deze map aan via een FTP-programma en stel de schrijfrechten in <br />op CHMOD 0755 - anders zal JDownloads niet naar behoren functioneren!');
DEFINE('_JLIST_INSTALL_15','Installatie succesvol!');
DEFINE('_JLIST_INSTALL_16','JDownloads nu starten!');

DEFINE('_JLIST_INSTALL_DB_TIP','Aanwijzing: Wanneer u jDownloads de&iuml;nstalleert worden de databasetabellen van JDownloads niet verwijderd. Bij installatie van een nieuwere versie zal geen data verloren gaan.');
DEFINE('_JLIST_INSTALL_TITLE_FOR_DEFAULT_LAYOUTS','Standaard');

//FRONTEND

DEFINE('_JLIST_FILE_NOT_FOUND','Het aangevraagde bestand werd helaas niet gevonden. Neem contact op met de webmaster om dit te melden.');
DEFINE('_JLIST_LINKTEXT_VIEW_FILE_TYPES','Download starten<br/>(Er wordt een nieuw venster geopend)');
DEFINE('_JLIST_LINKTEXT_ZIP','Download starten');
DEFINE('_JLIST_LINKTEXT_DOWNLOAD_URL','Download');
DEFINE('_JLIST_LINKTEXT_HOME','Terug naar de beginpagina');
DEFINE('_JLIST_DEL_ZIP_ADMIN_INFO','<br />Administrator-Info: Fout bij het verwijderen van tijdelijke zipbestanden, of er zijn geen bestanden aanwezig om te verwijderen!');
DEFINE('_JLIST_FORM_BUTTON_TEXT','Verder');
DEFINE('_JLIST_EMPTY_CAT_TEXT','Categorie bevat nog geen bestanden.<br /><br />');
DEFINE('_JLIST_MAIL_DOWNLOADER_NAME_VISITOR','Bezoeker');
DEFINE('_JLIST_MAIL_DOWNLOADER_GROUP','Gast');
DEFINE('_JLIST_MAILSEND_ERROR','Er is een fout opgetreden bij het verzenden van de e-mail!');
DEFINE('_JLIST_FRONTEND_COUNT_FILES','Aantal bestanden:');
DEFINE('_JLIST_FRONTEND_HOMEPAGE','Homepage');
DEFINE('_JLIST_FRONTEND_BACK_BUTTON','Terug');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_DATE','Datum');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_LICENCE','Licentie');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_AUTHOR','Auteur');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_WEBSITE','Website');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_SYSTEM','Systeem');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_LANGUAGE','Taal');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_DOWNLOAD','Download');
DEFINE('_JLIST_FRONTEND_VERSION_TITLE','Versie: ');
DEFINE('_JLIST_FRONTEND_CAT_ACCESS_REGGED','Om bestanden uit deze categorie te kunnen downloaden moet u geregistreerd zijn. Wanneer u al geregistreerd bent moet u inloggen als gebruiker.<br /><br />');
DEFINE('_JLIST_FRONTEND_COUNT_SUBCATS','Subcategorien: ');



//BACKEND TOOLBAR
DEFINE('_JLIST_BACKEND_COMPONENT_NAME','JDownloads');
DEFINE('_JLIST_BACKEND_TOOLBAR_MAIN','Home');
DEFINE('_JLIST_BACKEND_TOOLBAR_EDIT','Bewerk');
DEFINE('_JLIST_BACKEND_TOOLBAR_REMOVE','verwijderen');
DEFINE('_JLIST_BACKEND_TOOLBAR_CLOSE','Sluit');
DEFINE('_JLIST_BACKEND_TOOLBAR_SUBMAIN','Layouts');

DEFINE('_JLIST_BACKEND_COMPONENT_NAME','JDownloads');
DEFINE('_JLIST_BACKEND_TOOLBAR_MAIN','Menu');
DEFINE('_JLIST_BACKEND_TOOLBAR_EDIT','Bewerken');
DEFINE('_JLIST_BACKEND_TOOLBAR_REMOVE','Verwijderen');
DEFINE('_JLIST_BACKEND_TOOLBAR_CLOSE','Sluiten');
DEFINE('_JLIST_BACKEND_TOOLBAR_SUBMAIN','Layouts');

//BACKEND CPANEL
DEFINE('_JLIST_BACKEND_CPANEL_FILES','Downloads');
DEFINE('_JLIST_BACKEND_CPANEL_CATEGORIES','Categorie&euml;n');
DEFINE('_JLIST_BACKEND_CPANEL_LICENSE','Licenties');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES','Layoutbeheer');
DEFINE('_JLIST_BACKEND_CPANEL_BACKUP','Backup maken');
DEFINE('_JLIST_BACKEND_CPANEL_SETTINGS','Instellingen');
DEFINE('_JLIST_BACKEND_CPANEL_RESTORE','Backup herstellen');
DEFINE('_JLIST_BACKEND_CPANEL_INFO','Gebruiksvoorwaarden');
DEFINE('_JLIST_BACKEND_CPANEL_SUPPORT','Ondersteuning');

// RESULTS FROM AUTOCHECKFILES OPTION
DEFINE('_JLIST_BACKEND_AUTOCHECK_TITLE','<big>Resultaten controle downloadmappen:</big>');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NEW_FILES','Er zijn nieuwe bestanden gevonden en aan de downloads toegevoegd!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_MISSING_FILES','Bestanden werden niet meer gevonden en de status van betreffende downloads zijn gewijzigd naar ongepubliceerd!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NO_NEW_FILES','Er zijn geen nieuwe bestanden gevonden!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NO_MISSING_FILES','Alle Downloadbestanden zijn aangetroffen!');

DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_STATUS','Status');
DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_2','Versie');
DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_3','Ongebruikt');

// STATUS
DEFINE('_JLIST_BACKEND_PANEL_STATUS_TITEL','<font color="#990000"><b><big>Status van de downloadsectie:</big></b></font>');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_DESC_ONLINE','Met deze instelling is de downloadsectie bereikbaar voor uw gasten.');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_DESC_OFFLINE','Met deze instelling is het downloadsectie NIET bereikbaar voor uw gasten!');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_ONLINE','<font color="green"><b><big> ONLINE!</big></b></font>');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_OFFLINE','<font color="red"><b><big> OFFLINE!</big></b></font>');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_OFFLINE_HEADER','Downloadsectie');

// OFFLINE
DEFINE('_JLIST_BACKEND_OFFLINE_OPTION_TITLE','Offline status activeren?');
DEFINE('_JLIST_BACKEND_OFFLINE_OPTION_DESC','Door deze optie wordt de gehele downloadsectie uitgeschakeld. Uw gasten zien de tekst die u hier ingeeft. Alleen gebruikers die in het frontend zijn ingelogd en minstens de status Auteur hebben kunnen de downloadsectie wel bekijken!');
DEFINE('_JLIST_BACKEND_OFFLINE_MESSAGE_TITLE','Aanwijzing voor bezoekers');
DEFINE('_JLIST_BACKEND_OFFLINE_MESSAGE_DEFAULT','<table width="70%" align="center" cellspacing="0" cellpadding="20" border="1"><tr><td align="center">
<h3>De downloadsectie wordt op dit moment bewerkt.<br /><br />Probeer het over enkele minuten alstublieft nogmaals.</h3><br /><img src="components/com_jdownloads/images/offline.png" />
</td></tr></table>');
DEFINE('_JLIST_BACKEND_OFFLINE_MESSAGE_DESC','Typ hier de tekst in die uw gasten zien wanneer de downloadsectie offline is.');
DEFINE('_JLIST_BACKEND_OFFLINE_ADMIN_MESSAGE_TEXT','<div align="center"><b><h3>Downloads zijn OFFLINE!</h3></b></div>');


//BACKEND SETTINGS
DEFINE('_JLIST_BACKEND_SETTINGS','Instellingen');
DEFINE('_JLIST_BACKEND_SETTINGS_SAVED','Instellingen opgeslagen');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_HEAD','E-Mail instellingen ');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_FILES_HEAD','Download instellingen');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_FRONTEND_HEAD','Frontend instellingen');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_BACKEND_HEAD','Backend instellingen');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_SECURITY_HEAD','Beveiligings instellingen');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_IMAGES_HEAD','Afbeeldingen/Iconen instellingen');

DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_DOWNLOADS','Downloads');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_FRONTEND','Frontend');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_BACKEND','Backend');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_IMAGES','Afbeeldingen');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_SECURITY','Beveiliging');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_EMAIL','E-mail');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_SONSTIGE','Overige');

DEFINE('_JLIST_BACKEND_SETTINGS_DATETIME','Datum en tijdformaat');
DEFINE('_JLIST_BACKEND_SETTINGS_DATETIME_DESC','Info over datum en tijdformaat kunt u hier vinden: <a href="http://www.php.net/manual/de/function.date.php" target="_blank">www.php.net</a>');

DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIR','Upload hoofdmap');
DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIR_DESC','De hoofdmap waarin de geuploade bestanden opgeslagen worden. Deze map, alsook <b>alle</b> eventuele aangemaakte submappen <b>moeten</b> schrijfbaar zijn!');

DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIRTEMP','Tijdelijke map');
DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIRTEMP_DESC','Deze map <b>moet</b> aangemaakt <b>en</b> schrijfbaar zijn! Het bevat de tijdelijk aangemaakte zipbestanden voor het tegelijkertijd downloaden van meerdere bestanden. (Deze worden automatisch verwijderd).');

DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO','Upload-map controleren? ');
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_DESC','Wanneer deze optie geslecteerd is, wordt de aangegeven map gecontroleerd en wijzigingen worden in de database automatisch geactualiseerd. Daarbij worden bestanden die via FTP naar de server zijn geupload, automatisch in de database toegevoegd maar worden nog niet in een categorie ondergebracht.');

DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_1','Standaard');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_2','Nieuwste bovenaan');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_3','Nieuwste onderaan');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_4','Naam oplopend');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_5','Naam aflopend');
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_NEW_PIC_TITLE','New file images');
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_NEW_PIC_DESC','Selecteer een image die bij het plaatje "New" hoort');
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_PIC_TITLE','HOT file images');
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_PIC_DESC','Selecteer een image die bij het plaatje "HOT" hoort');

// E-Mail config
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_OPTION_DESC','Indien geactiveerd, wordt na iedere download een e-mail aan het hieronder ingegeven adres verstuurd. <b>Deze optie met enige voorzichtigheid instellen omdat de mail op dit moment nog VOOR het klikken op de downloadlink verstuurd wordt. In de volgende betaversie wordt dit veranderd</b>.');
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_OPTION','E-mail activeren?');

DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_DESC','Het e-mailadres, waarnaar de downloadgegevens moeten worden verstuurd.');
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO','E-mailadres');

DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_HTML_DESC','Indien geactiveerd, wordt de e-mail in HTMLformaat verstuurd. Anders in tekstformaat.');
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_HTML','HTML formaat activeren?');

DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_BETREFF_DESC','Tekst die als onderwerp in de e-mail gebruikt wordt.');
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_BETREFF','Onderwerp Tekst');

// View Frontend Config settings
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_VIEW_HEAD','Opties voor de weergave van het component in Frontend');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_VIEW_OPTION','Beginpagina met categorie&euml;noverzicht activeren?');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_VIEW_OPTION_DESC','Indien geactiveerd, wordt eerst een <b>overzicht van de categorie&euml;n</b> weergegeven. Nadat een categorie geselecteerd is wordt deze met de daarin opgenomen bestanden getoond. Indien gedeactiveerd, worden <b>alle categorie&euml;n incl. bestanden</b> direct weergegeven.<br />');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_COMPO_TEXT','Componentbeschrijving');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_COMPO_TEXT_DESC','Optionele tekst, die <b>tussen</b> componenttitel en de categorie&euml;n weergegeven wordt. De titel wordt automatisch van het menu item overgenomen.<br/><br/>U kunt CSS classen, HTML code evenals de door u gewenste tekst invoegen.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CHECKBOX_TEXT','Checkbox tekst');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CHECKBOX_TEXT_DESC','Tekst die naast de bovenste checkbox van de lijst moet worden weergegeven.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SORTFILESORDER_TEXT','Volgorde');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SORTFILESORDER_DESC','Weergave volgorde van de bestanden in frontend. Kies "Standaard" om de volgorde die in de backend is ingesteld weer te geven.');

// View images seetings
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SHOW_MINIPICS','Iconen weergeven?');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SHOW_MINIPICS_DESC','Indien geactiveerd wordt in de download bestandenlijst naast de bestanden (Licentie, Auteur, Website, Systeem, Taal, Datum en Download-Link) een icoon getoond. Indien gedeactiveerd kunt u in Bestandslayout in plaats van de betreffende syntax een passende tekst toevoegen.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_MINIPICS_SIZE','Grootte van het icoon in pixels');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_MINIPICS_SIZE_DESC','Grootte waarin het icoon weergegeven wordt. Standaard: 20');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CATPICS_SIZE','Grootte van het categorie icoon in pixels');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CATPICS_SIZE_DESC','Grootte waarin het categorie icoon weergegeven wordt. U kunt ook eigen iconen gebruiken, upload uw iconen via FTP in de submap: /catimages. U kunt het icoon dan in het uitklapmenu selecteren. Standaard: 48');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FILEPICS_SIZE','Grootte van het bestandsicoon in pixels');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FILEPICS_SIZE_DESC','Grootte waarin het bestandsicoon weergegeven wordt. U kunt ook eigen iconen gebruiken, upload uw iconen via FTP in de submap: /fileimages. U kunt het icoon dan in het uitklapmenu selecteren. Standaard: 32');


// View backend security settings
// to be translated
DEFINE('_JLIST_BACKEND_SETTINGS_MAIL_SECURITY_DESC','zo YES, dan wordt het email adres niet weergegeven in klare tekst. Dit worddt gedaan vanwege spambots. Onthoudt dat wanneer Javascript uitgeschakeld is in je browser, dat de link dan niet wordt weergegeven. Aanbevolen instelling: JA.');
//
DEFINE('_JLIST_BACKEND_SETTINGS_MAIL_SECURITY_TITEL','E-mail adresses verbergen?');

// View backend Config settings
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_LAYOUTS','WYSIWYG-editor bij layouts gebruiken');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_LAYOUTS_DESC','Indien geactiveerd, wordt bij het bewerken van de layout de geactiveerde wysiwyg-editor gebruikt. Anders een tekstveld. Aanbevolen instelling Nee.');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_FILES','WYSIWYG-Editor bij downloads gebruiken');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_FILES_DESC','Indien geactiveerd, wordt bij het bewerken van de downloads de geactiveerde wysiwyg-editor gebruikt. Anders een tekstveld.');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_CATS','WYSIWYG-Editor bij categorie&euml;n gebruiken');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_CATS_DESC','Indien geactiveerd, wordt bij het bewerken van de categorie&euml;n de geactiveerde wysiwyg-editor gebruikt. Anders een tekstveld.');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_LICENSES','WYSIWYG-Editor bij licenties gebruiken');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_LICENSES_DESC','Indien geactiveerd, wordt bij het bewerken van de licenties de geactiveerde wysiwyg-editor gebruikt. Anders een tekstveld.');

DEFINE('_JLIST_BACKEND_SETTINGS_FILE_SYSTEM_LIST','Selectielijst voor het downloadsveld: "Systeem" bewerken');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_SYSTEM_LIST_DESC','Hier kunt u de inhoud van dit veld bewerken. Tussen alle waarden moet een komma (,) staan.<br /></br><b>Belangrijke aanwijzing:</b> wanneer al downloads in de lijst opgeslagen zijn dan zullen deze veranderingen van invloed zijn op deze downloads. Voorbeeld: Downloads opgeslagen met systeem = "Joomla 1.5". Wanneer u nu op deze positie in de lijst een andere waarde ingeeft (bijv. Windows Vista), dan wordt in de betreffende downloads de nieuwe waarde als systeem aangegeven.! Aanbevolen wordt daarom nieuwe waarden aan het einde van de lijst toe te voegen.');

DEFINE('_JLIST_BACKEND_SETTINGS_FILE_LANGUAGE_LIST','Selectielijst voor het downloadsveld: "Taal" bewerken');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_LANGUAGE_LIST_DESC','Hier kunt u de inhoud van dit veld bewerken. Tussen alle waarden moet een komma (,) staan.<br /></br><b>Belangrijke aanwijzing:<b/> wanneer al downloads in de lijst opgeslagen zijn dan zullen deze veranderingen van invloed zijn op deze downloads. Voorbeeld: Downloads opgeslagen met Taal = "Duits". Wanneer u nu op deze positie in de lijst een andere waarde ingeeft (bijv. Nederlands), dan wordt in de betreffende downloads de nieuwe waarde als taal aangegeven! Aanbevolen wordt daarom nieuwe waarden aan het einde van de lijst toe te voegen.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_ZIPFILE_PREFIX_TEXT','Voorvoegsel voor zipbestanden');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_ZIPFILE_PREFIX_DESC','Wanneer meerdere bestanden geselecteerd worden om te downloaden worden deze automatisch in een tijdelijk zipbestand verpakt en voor de bezoeker als downloadbestand beschikbaar gesteld. De bestandsnaam wordt samengesteld door de aangegeven tekst links (voorvoegsel) en een toevallig getal.');

// Templates Config Backend
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_HEAD','<b>De layouts bepalen de weergave van de inhoud op het frontend.</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_HEAD_INFO','<br />In de installatie zijn enige standaard-layouts inbegrepen. Deze kunnen zonodig aangepast worden, ook kunt u compleet nieuwe layouts aanmaken. Om dit te vereenvoudigen kunt u in de instellingen aangeven of voor de bewerking een WYSIWYG-editor of een gewoon tekstveld gebruikt moet worden.<br/><br/>Wanneer het component niet meer goed functioneert na wijzigingen in de <b>standaard layout</b> kan de <b>orginele inhoud</b> (bedoeld wordt de situatie na de installatie) op elk moment hersteld worden. Wis hiervoor <b>alle tekst</b> uit het tekstveld en klik op opslaan. Dan wordt de orginele layout weer opgeslagen. <b>Attentie:</b> voorgaande wijzigingen gaan hierbij verloren.<br/><br/>Tip: in de Layouts worden een aantal syntaxis (Bijv. <font color=darkred>{files}</font>) gebruikt. Op de plek van de syntaxis wordt op de website de uiteindelijke inhoud gegenereerd en toegevoegd.<br />');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS','Layout: Categorie&euml;n');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_DESC','Dit is de weergave van de <b>Categorie&euml;n</b> in de frontend. Indien bij Instellingen de optie: <b>Beginpagina met categorie&euml;noverzicht</b> geactiveerd is, worden de syntaxis {files} en {checkbox_top} alleen bij de weergave van de afzonderlijke categorie gebruikt.<br /><br />De <font color=red>{files} {form_hidden} {form_button} {checkbox_top}</font> syntaxis <font color=red>NIET</font> uit de code verwijderen! Verwijder de syntax {checkbox_top} alleen uit de code wanneer in Bestandslayout de syntax {url_download} gebruikt wordt. De syntax {files} toont de beschrijvingsgegevens die bij de download ingegeven zijn.<br /><br />Beschikbare syntaxis:<br />{cat_title} {cat_description} {cat_pic} {files} {checkbox_top} {sum_files_cat}');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_INFO_TITLE','<b>Informatie voor layout categorie&euml;n:</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_INFO_TEXT','<p>Deze afbeelding toont een voorbeeld van de weergave van de categorie-beschrijving in het frontend. De donkerrood omrande delen kunnen hier bewerkt worden.</p>');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES','Layout: Bestanden');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DESC','Dit is de weergave van de <b>Bestanden</b> in het frontend.<br /><br>De <font color=red>{checkbox_list}</font> syntax alleen uit de code verwijderen wanneer in plaats daarvan de syntax {url_download} gebruikt wordt!<br /><br />Beschikbare syntaxis:<br />{checkbox_list} {cat_id} {file_id} {file_title} {release} {pic_is_new} {pic_is_hot} {pic_is_updated} {thumbnail} {description} {link_to_details} {file_pic} {price_title} {price_value} {license_title} {license_text} {language_title} {language_text} {filesize_title} {filesize_value} {system_title} {system_text} {author_title} {author_text} {author_url_title} {author_url_text} {created_date_title} {created_date_value} {hits_title} {hits_value} {created_by_title} {created_by_value} {modified_by_title} {modified_by_value} {modified_date_title} {modified_date_value}'); // changed in 1.4 beta (2)
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_INFO_TITLE','<b>Informatie voor layout bestanden:</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_INFO_TEXT','<p>Deze afbeelding toont een voorbeeld van de weergave van de bestandenlijst in het Frontend. Het donkerrood omrande gedeelte kan bewerkt worden.</p>');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL','Layout: Samenvatting / Download starten');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL_DESC','Dit is de weergave van de <b>Samenvatting</b> in het frontend. Uw bezoeker ziet voor de download een samenvatting van de geselecteerde downloads.<br />Hier kunt u de weergave van deze pagina aanpassen. Er kunnen CSS-classen, HTML-code alsook een tekst naar believen toegevoegd worden.<br /><br />De syntax <font color=red>{download_liste}</font> <font color=red>NIET</font> uit de code verwijderen!<br /><br />Beschikbare syntaxis:<br />{summary_pic} {title_text} {download_liste} {license_note} {download_link} {external_download_info}'); // changed in 1.4 beta (2)
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL_INFO_TITLE','<b>Informatie voor de Layout: Samenvatting</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL_INFO_TEXT','<p>Deze afbeelding toont een voorbeeld van de weergave van deze pagina in het frontend. De donkerrood omrande delen kunnen hier bewerkt worden.</p>');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_MAIL','Layout: E-mail');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_MAIL_DESC','Hier kunt u de weergave van de <b>e-mail</b> vastleggen, die (indien geactiveerd) na iedere download aan het bij de Instellingen ingegeven adres verstuurd wordt. U kunt HTML code alsook tekst toevoegen.<br /><br />Beschikbare syntaxis:<br />{file_list} {ip_address} {user_name} {user_group}');

//BACKEND CATSLIST
DEFINE('_JLIST_BACKEND_CATSLIST_TITLE_HEAD','Categorie&euml;n');
DEFINE('_JLIST_BACKEND_CATSLIST_SEARCH','Zoeken');
DEFINE('_JLIST_BACKEND_CATSLIST_SEARCH_LIMIT','Limiet');

DEFINE('_JLIST_BACKEND_CATSLIST_TITLE','Categorie&euml;n');
DEFINE('_JLIST_BACKEND_CATSLIST_PIC','Icoon');
DEFINE('_JLIST_BACKEND_CATSLIST_PUBLISHED','Gepubliceerd');
DEFINE('_JLIST_BACKEND_CATSLIST_LINK','Link');
DEFINE('_JLIST_BACKEND_CATSLIST_CATID','Categorie ID');
DEFINE('_JLIST_BACKEND_CATSLIST_READ','Lezen');
DEFINE('_JLIST_BACKEND_CATSLIST_DOWNLOAD','downloaden');
DEFINE('_JLIST_BACKEND_CATSLIST_ORDERING','Sorteren');
DEFINE('_JLIST_BACKEND_CATSLIST_DEL',' Categorie(&euml;n) verwijderd');
// access controll info
DEFINE('_JLIST_BACKEND_CATSLIST_ACCESS_ALL','Publiek');
DEFINE('_JLIST_BACKEND_CATSLIST_ACCESS_REGGED','Geregistreerd');
DEFINE('_JLIST_BACKEND_CATSLIST_ACCESS_ADMINS','Speciaal');

//BACKEND CATSEDIT
DEFINE('_JLIST_BACKEND_CATSEDIT_TITLE','Categorie bewerken');
DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_TITLE','Categorie moet een titel hebben.');
DEFINE('_JLIST_BACKEND_CATSEDIT_SUC_PUBL',' Categorie&euml;n gepubliceerd.');
DEFINE('_JLIST_BACKEND_CATSEDIT_SUC_UNPUBL',' Categorie&euml;n ongepubliceerd.');
DEFINE('_JLIST_BACKEND_CATSEDIT_SAVE_ERROR_DIR','Error: directory could not be renamed!');
DEFINE('_JLIST_BACKEND_CATSEDIT_SAVE','Categorie&euml;n opgeslagen.');
DEFINE('_JLIST_BACKEND_CATSEDIT_EDIT','Categorie bewerken');
DEFINE('_JLIST_BACKEND_CATSEDIT_ADD','Categorie toevoegen');
DEFINE('_JLIST_BACKEND_CATS_SAVEORDER','Nieuwe volgorde opgeslagen');
DEFINE('_JLIST_BACKEND_CATS_USED','Deze categorie wordt op dit moment door een andere administrator bewerkt.');

DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_TITLE','Categorietitel');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_DESCRIPTION','Categorie beschrijving');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_PIC_TEXT','Categorie icoon kiezen');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_PIC_PREVIEW','Voorbeeld');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_PIC_DESC','Het geselecteerde icoon kan via de syntax {cat_pic} in de layout: Categorie&euml;n weergegeven worden.');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_TITLE','Toegangsniveau instellen');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_DESC','Stel hier het toegangsniveau in. Deze geldt voor de categorie, alsook voor de downloads die deze categorie bevat. Wanneer "Special" is ingesteld kunnen gebruikers vanaf de status Auteur bestanden uit deze categorie lezen en downloaden.');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_1','Iedereen kan lezen en downloaden');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_2','Iedereen kan lezen en geregistreerden kunnen downloaden');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_3','Alleen geregistreerden kunnen lezen en downloaden');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_4','Alleen administratoren kunnen lezen en downloaden');


//BACKEND CATSLIST
DEFINE('_JLIST_BACKEND_CATSLIST_TITLE_HEAD','Categorie&euml;n');
DEFINE('_JLIST_BACKEND_CATSLIST_SEARCH','Zoeken');
DEFINE('_JLIST_BACKEND_CATSLIST_SEARCH_LIMIT','Limiet');

DEFINE('_JLIST_BACKEND_CATSLIST_TITLE','Categorie&euml;n');
DEFINE('_JLIST_BACKEND_CATSLIST_PIC','Icoon');
DEFINE('_JLIST_BACKEND_CATSLIST_PUBLISHED','Gepubliceerd');
DEFINE('_JLIST_BACKEND_CATSLIST_LINK','Link');
DEFINE('_JLIST_BACKEND_CATSLIST_CATID','Categorie ID');
DEFINE('_JLIST_BACKEND_CATSLIST_READ','Lezen');
DEFINE('_JLIST_BACKEND_CATSLIST_DOWNLOAD','downloaden');
DEFINE('_JLIST_BACKEND_CATSLIST_ORDERING','Sorteren');
DEFINE('_JLIST_BACKEND_CATSLIST_DEL',' Categorie(&euml;n) verwijderd');
// access controll info
DEFINE('_JLIST_BACKEND_CATSLIST_ACCESS_ALL','Publiek');
DEFINE('_JLIST_BACKEND_CATSLIST_ACCESS_REGGED','Geregistreerd');
DEFINE('_JLIST_BACKEND_CATSLIST_ACCESS_ADMINS','Speciaal');

//BACKEND CATSEDIT
DEFINE('_JLIST_BACKEND_CATSEDIT_TITLE','Categorie bewerken');
DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_TITLE','Categorie moet een titel hebben.');
DEFINE('_JLIST_BACKEND_CATSEDIT_SUC_PUBL',' Categorie&euml;n gepubliceerd.');
DEFINE('_JLIST_BACKEND_CATSEDIT_SUC_UNPUBL',' Categorie&euml;n ongepubliceerd.');
DEFINE('_JLIST_BACKEND_CATSEDIT_SAVE','Categorie&euml;n opgeslagen.');
DEFINE('_JLIST_BACKEND_CATSEDIT_EDIT','Categorie bewerken');
DEFINE('_JLIST_BACKEND_CATSEDIT_ADD','Categorie toevoegen');
DEFINE('_JLIST_BACKEND_CATS_SAVEORDER','Nieuwe volgorde opgeslagen');
DEFINE('_JLIST_BACKEND_CATS_USED','Deze categorie wordt op dit moment door een andere administrator bewerkt.');

DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_TITLE','Categorietitel');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_DESCRIPTION','Categorie beschrijving');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_PIC_TEXT','Categorie icoon kiezen');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_PIC_PREVIEW','Voorbeeld');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_PIC_DESC','Het geselecteerde icoon kan via de syntax {cat_pic} in de layout: Categorie&euml;n weergegeven worden.');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_TITLE','Toegangsniveau instellen');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_DESC','Stel hier het toegangsniveau in. Deze geldt voor de categorie, alsook voor de downloads die deze categorie bevat. Wanneer "Special" is ingesteld kunnen gebruikers vanaf de status Auteur bestanden uit deze categorie lezen en downloaden.');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_1','Iedereen kan lezen en downloaden');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_2','Iedereen kan lezen en geregistreerden kunnen downloaden');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_3','Alleen geregistreerden kunnen lezen en downloaden');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_4','Alleen administratoren kunnen lezen en downloaden');

//BACKEND FILESLIST
DEFINE('_JLIST_BACKEND_FILESLIST_TITLE','Downloads');
DEFINE('_JLIST_BACKEND_FILESLIST_SEARCH','Zoeken');
DEFINE('_JLIST_BACKEND_FILESLIST_SEARCH_LIMIT','Limiet');
DEFINE('_JLIST_BACKEND_FILESLIST_CATS','Alle categorie&euml;n');
DEFINE('_JLIST_BACKEND_FILESLIST_NOCATS','Geen categorie');

DEFINE('_JLIST_BACKEND_FILESLIST_FILE','Downloads');
DEFINE('_JLIST_BACKEND_FILESLIST_HITS','Aantal downloads');
DEFINE('_JLIST_BACKEND_FILESLIST_CAT','Categorie');
DEFINE('_JLIST_BACKEND_FILESLIST_RELEASE','Versie');
DEFINE('_JLIST_BACKEND_FILESLIST_DESCRIPTION','Beschrijving');
DEFINE('_JLIST_BACKEND_FILESLIST_DADDED','Datum');
DEFINE('_JLIST_BACKEND_FILESLIST_URL_DOWNLOAD','Bestands URL');
DEFINE('_JLIST_BACKEND_FILESLIST_AUTHOR','Auteur');
DEFINE('_JLIST_BACKEND_FILESLIST_PUBLISHED','Gepubliceerd');
DEFINE('_JLIST_BACKEND_FILESLIST_ORDERING','Volgorde');
DEFINE('_JLIST_BACKEND_FILESLIST_DEL',' Download(s) verwijderd');
DEFINE('_JLIST_BACKEND_FILES_SAVEORDER','Nieuwe volgorde opgeslagen');
DEFINE('_JLIST_BACKEND_FILES_USED','Deze download wordt op dit moment door een andere administrator bewerkt.');
DEFINE('_JLIST_BACKEND_FILESLIST_FILENAME ','File naam.');

//BACKEND FILESEDIT
DEFINE('_JLIST_BACKEND_FILESEDIT_TABTITLE_1','Basisgegevens');

DEFINE('_JLIST_BACKEND_FILESEDIT_TABTITLE_2','Optioneel');
DEFINE('_JLIST_BACKEND_FILESEDIT_TABTITLE_3','Bestand');

DEFINE('_JLIST_BACKEND_FILESEDIT_TITLE','Download bewerken');
DEFINE('_JLIST_BACKEND_FILESEDIT_ERROR_TITLE','Download moet een titel hebben.');
DEFINE('_JLIST_BACKEND_FILESEDIT_SAVE','Download opgeslagen.');
DEFINE('_JLIST_BACKEND_FILESEDIT_EDIT','Download bewerken');
DEFINE('_JLIST_BACKEND_FILESEDIT_ADD','Download toevoegen');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_LIST_DESC','U kunt hier een bestand selecteren voor deze download, die zich al op de server bevindt.');
DEFINE('_JLIST_BACKEND_FILESEDIT_ROOT_DIR_TITLE','ROOT Downloadmap');
DEFINE('_JLIST_BACKEND_FILESEDIT_UPLOAD_DIR_LIST_DESC','Wanneer hierboven een bestand om te uploaden aangegeven is, kunt u hier de map aangegeven waarin het ge-uploade bestand opgeslagen moet worden. Wanneer niets wordt aangegeven wordt het bestand in de download ROOT-map opgeslagen.<br /><br /><font color"#990000"><b>Nieuwe submappen kunnen via een FTP programma aangemaakt worden. Deze moeten eveneens schrijfbaar zijn - CHMOD 0777.</b></font>');
DEFINE('_JLIST_BACKEND_FILESEDIT_UPLOAD_DIR_LIST_INFO_1','Alle supmappen zijn schrijfbaar!');
DEFINE('_JLIST_BACKEND_FILESEDIT_UPLOAD_DIR_LIST_INFO_2','Supmappen zijn <b>niet</b> schrijfbaar! Controleer de schrijfrechten van de mappen via een FTP-Programm. Deze moeten op CHMOD 0777 staan.');
DEFINE('_JLIST_BACKEND_FILESEDIT_CHECK_PERMISSIONS','Bestand kon niet ge-upload worden. Controleer de schrijfrechten van de doelmap. Deze moet op CHMOD 0777 staan.');
// language
DEFINE('_JLIST_BACKEND_FILESEDIT_LANGUAGE','Taal');

DEFINE('_JLIST_BACKEND_FILESEDIT_LANGUAGE_DEFAULT_LIST','Selecteren:, Duits, Engels, Frans, Italiaans, Spaans, Portugees, Russisch, Pools, Nederlands, Zie beschrijving');
// system
DEFINE('_JLIST_BACKEND_FILESEDIT_SYSTEM','Systeem');
DEFINE('_JLIST_BACKEND_FILESEDIT_SYSTEM_DEFAULT_LIST','Selecteren:, Joomla 1.0, Joomla 1.5, Windows, Linux, MacIntosh');

DEFINE('_JLIST_BACKEND_FILESEDIT_LICENSES_LIST','Licentie selecteren');
DEFINE('_JLIST_BACKEND_FILESEDIT_REMOVE_OK','Bestand verwijderd.');
DEFINE('_JLIST_BACKEND_FILESEDIT_SUC_PUBL',' Download(s) gepubliceerd.');
DEFINE('_JLIST_BACKEND_FILESEDIT_SUC_UNPUBL',' Download(s) ongepubliceerd.');

DEFINE('_JLIST_BACKEND_FILESEDIT_REQUIRES_INFO','Velden met <b><font color=red>*</font></b> zijn verplicht!');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_TITLE','Titel <b><font color=red>*</font></b>');
DEFINE('_JLIST_BACKEND_FILESEDIT_DESCRIPTION','Beschrijving');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FPIC_TEXT','Bestands icoon selecteren');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FPIC_PREVIEW','Voorbeeld');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FPIC_DESC','Het geselecteerde icoon kan via een layout-syntax weergegeven worden.');

DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_CAT','Categorie');
DEFINE('_JLIST_BACKEND_FILESEDIT_LICENSE','Licentie');
DEFINE('_JLIST_BACKEND_FILESEDIT_RELEASE','Versie');
DEFINE('_JLIST_BACKEND_FILESEDIT_SIZE','Grootte');
DEFINE('_JLIST_BACKEND_FILESEDIT_SIZE_DESC','Wanneer niets wordt ingevoerd wordt de waarde automatisch ingesteld.');
DEFINE('_JLIST_BACKEND_FILESEDIT_DADDED','Datum en tijd');
DEFINE('_JLIST_BACKEND_FILESEDIT_DADDED_DESC','Wanneer niets is ingevuld wordt de huidige datum weergegeven.');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE','Bestand om te uploaden selecteren');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_DIR','Selecteer doelmap voor de upload:');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_INFO','Recent toegevoegd bestand:');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_ADD_FROM_SERVER','Recent toegevoegd bestand:');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_ADD_FROM_SERVER_NEW','Bestand van de server selecteren:');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_ADD_FROM_SERVER_LIST','Bestand selecteren:');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_REMOVE','<b>Recent toegevoegd bestand van de server verwijderen</b>');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_HOME','Website (zonder http://)');
DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR','Naam auteur');
DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR_URL','URL of e-mailadres auteur (http:// of mailto:)');
DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR_URL_DESC','E-mailadressen moeten als volgt worden ingegeven: <b>mailto:info@UwWebseite.nl</b>. Deze worden automatisch gecodeerd wanneer dit bij Instellingen vastgelegd is. Geef hier het adres dus ongecodeerd in.');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD','ROOT uploadmap');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD_WRITABLE','Status: <font color=green><strong>SCHRIJFBAAR</strong></font>');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD_NOTWRITABLE','Status: <font color=red><strong>NIET SCHRIJFBAAR</strong></font>');

DEFINE('_JLIST_BACKEND_FILESEDIT_URL_TEMP_WRITABLE','Status: <font color=green><strong>SCHRIJFBAAR</strong></font>');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_TEMP_NOTWRITABLE','Status: <font color=red><strong>NIET SCHRIJFBAAR</strong></font>');
DEFINE('_JLIST_BACKEND_CATSLIST_LINK_TEXT',' '); 

//BACKEND LICENSE LIST
DEFINE('_JLIST_BACKEND_LICLIST_TITLE_HEAD','Licenties');
DEFINE('_JLIST_BACKEND_LICLIST_TITLE','Licentienaam');
DEFINE('_JLIST_BACKEND_LICLIST_LINK','Link');
DEFINE('_JLIST_BACKEND_LICLIST_DEL',' Licentie(s) verwijderd');

//Backend LICENSE EDIT
DEFINE('_JLIST_BACKEND_LICEDIT_TITLE','Licentie  bewerken');
DEFINE('_JLIST_BACKEND_LICEDIT_ERROR_TITLE','Licentie moet een naam hebben.');
DEFINE('_JLIST_BACKEND_LICEDIT_SAVE','Licentie opgeslagen.');
DEFINE('_JLIST_BACKEND_LICEDIT_TEXT','Licentienaam');
DEFINE('_JLIST_BACKEND_LICEDIT_EDIT','Licentie bewerken');
DEFINE('_JLIST_BACKEND_LICEDIT_ADD','Licentie toevoegen');
DEFINE('_JLIST_BACKEND_LIC_USED','Deze licentie wordt op dit moment door een andere administrator bewerkt.');
DEFINE('_JLIST_BACKEND_LICEDIT_LIC_TITLE','Licentienaam');
DEFINE('_JLIST_BACKEND_LICEDIT_LIC_URL','Link naar de licentie');
DEFINE('_JLIST_BACKEND_LICEDIT_LIC_DESCRIPTION','Licentietekst');

//BACKEND TEMPLATES SUBMENU
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_NAME','Layout beheer');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_CATS','Categorie&euml;n');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_FILES','Bestanden');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_SUMMARY','Samenvattingen');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_EMAIL','E-Mails');
DEFINE('_JLIST_BACKEND_TEMPPANEL_TABTEXT_INFO','Gegevens');

// Backend TEMPLATES TEMPLATES TITLES
DEFINE('_JLIST_BACKEND_TEMPLIST_CATTITLE_HEAD','Layout categorie&euml;n');
DEFINE('_JLIST_BACKEND_TEMPLIST_FILESTITLE_HEAD','Layout bestanden');
DEFINE('_JLIST_BACKEND_TEMPLIST_SUMTITLE_HEAD','Layout samenvattingen');
DEFINE('_JLIST_BACKEND_TEMPLIST_MAILTITLE_HEAD','Layout e-mail');

//BACKEND TEMPLATES LIST
DEFINE('_JLIST_BACKEND_TEMPLIST_MENU_TEXT_ACTIVE','Activeren');
DEFINE('_JLIST_BACKEND_TEMPLIST_TITLE','Layoutnaam');
DEFINE('_JLIST_BACKEND_TEMPLIST_TYP','Layouttype');
DEFINE('_JLIST_BACKEND_TEMPLIST_ACTIVE','Aktief');
DEFINE('_JLIST_BACKEND_TEMPLIST_LOCKED','Standaard layout');
DEFINE('_JLIST_BACKEND_TEMPLIST_LOCKED_DESC','<b>Aanwijzing:</b> Standaard layouts zijn vaste bestanddelen van jDownloads en kunnen niet verwijderd worden.<br />Bij het aanmaken van een nieuwe layout wordt de standaard layouttekst als voorbeeld getoond.');
DEFINE('_JLIST_BACKEND_TEMPLIST_DEL',' Layout(s) verwijderd');
DEFINE('_JLIST_BACKEND_TEMPLIST_ERROR_IS_LOCKED','Standaard layouts kunnen niet verwijderd worden.');
DEFINE('_JLIST_BACKEND_TEMPLIST_ERROR_IS_ACTIVE','Actieve layouts kunnen niet verwijderd worden.');

//Backend TEMPLATES EDIT
DEFINE('_JLIST_BACKEND_TEMPEDIT_TITLE','Layout bewerken');
DEFINE('_JLIST_BACKEND_TEMPEDIT_ERROR_TITLE','Fout: Layout moet een naam hebben.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_SAVE','Layout opgeslagen.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_ACTIVE','Layout werd geactiveerd.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_EDIT','Layout bewerken');
DEFINE('_JLIST_BACKEND_TEMPEDIT_ADD','Layout toevoegen');
DEFINE('_JLIST_BACKEND_TEMP_USED','Deze layout wordt op dit moment door een andere administrator bewerkt.');

DEFINE('_JLIST_BACKEND_TEMPEDIT_NAME','Naam');
DEFINE('_JLIST_BACKEND_TEMPEDIT_TYP','Type');
DEFINE('_JLIST_BACKEND_TEMPEDIT_TEXT','Layout');
DEFINE('_JLIST_BACKEND_TEMPEDIT_URL','Link naar voorbeeld');

DEFINE('_JLIST_BACKEND_TEMPEDIT_NAME_DESCRIPTION','Geef een passende naam voor uw layout in.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_TYP_DESCRIPTION','Selecteer het type layout.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_TEXT_DESCRIPTION','Hier wordt de layout van de weergave in het frontend ingesteld.');

//Backend TEMPLATES TYPS
DEFINE('_JLIST_BACKEND_TEMP_TYP1','Categorie&euml;n');
DEFINE('_JLIST_BACKEND_TEMP_TYP2','Bestanden');
DEFINE('_JLIST_BACKEND_TEMP_TYP3','Samenvatting');
DEFINE('_JLIST_BACKEND_TEMP_TYP4','E-Mail');


//Backend Backup and Restore
DEFINE('_JLIST_BACKEND_RESTORE_TITLE_HEAD','Backup herstellen');
DEFINE('_JLIST_BACKEND_RESTORE_FILE','Selecteer een backup');
DEFINE('_JLIST_BACKEND_RESTORE_RUN','Backup nu herstellen');
DEFINE('_JLIST_BACKEND_RESTORE_RUN_FINAL','Wilt u de backup nu terug plaatsen?');
DEFINE('_JLIST_BACKEND_RESTORE_WARNING','Door het starten van de backup worden de huidige opgeslagen gegevens in de database verwijderd en door de backup vervangen.<br /><br />Het kan niet gegarandeerd worden dat dit probleemloos verloopt. Ook kunt u deze actie niet ongedaan maken! Aanbevolen wordt vooraf voor de zekerheid een backup van de database te maken via phpMyAdmin.');
DEFINE('_JLIST_BACKEND_RESTORE_MSG','%s backup werd succesvol hersteld!');


//Backend CSS & LANGUAGE EDIT
DEFINE('_JLIST_BACKEND_EDIT_CSS_TITLE','CSS bestand');
DEFINE('_JLIST_BACKEND_EDIT_LANG_TITLE','Taalbestand');
DEFINE('_JLIST_BACKEND_EDIT_CSS_FIELD_TITLE','Inhoud van het CSS bestand');
DEFINE('_JLIST_BACKEND_EDIT_LANG_FIELD_TITLE','Inhoud van het taalbestand');
DEFINE('_JLIST_BACKEND_EDIT_CSS_TITLE','CSS bestand bewerken');
DEFINE('_JLIST_BACKEND_EDIT_LANG_TITLE','Taalbestand bewerken');
DEFINE('_JLIST_BACKEND_EDIT_CSS_SAVED','CSS bestand opgeslagen!');
DEFINE('_JLIST_BACKEND_EDIT_LANG_SAVED','Taalbestand opgeslagen!');
DEFINE('_JLIST_BACKEND_EDIT_LANG_WRITE_STATUS_TEXT','<big>Het taalbestand is: ');
DEFINE('_JLIST_BACKEND_EDIT_CSS_WRITE_STATUS_TEXT','<big>Het CSS bestand is: ');
DEFINE('_JLIST_BACKEND_EDIT_LANG_CSS_FILE_WRITABLE_YES','<font color="green">schrijfbaar!</font></big>');
DEFINE('_JLIST_BACKEND_EDIT_LANG_CSS_FILE_WRITABLE_NO','<font color="#990000">NIET schrijbaar!</font></big>');
DEFINE('_JLIST_BACKEND_EDIT_LANG_CSS_FILE_WRITABLE_INFO','Om wijzigingen aan het bestand te kunnen opslaan moet deze schrijfbaar zijn. Wijzig via FTP de rechten voor deze bestanden naar CHMOD 0766.');


// BACKEND OTHERS
DEFINE('_JLIST_FRONTEND_NOCAT','Er zijn nog geen categorie&euml;n opgenomen!');
DEFINE('_JLIST_FRONTEND_NOFILES','Er zijn nog een bestanden opgenomen!');

// Information text
DEFINE('_JLIST_BACKEND_INFO_TEXT_TITLE','Informatie over jDownloads');
DEFINE('_JLIST_BACKEND_INFO_LICENSE_TITLE','<b>Gebruikersvoorwaarden en Licentiegegevens:</b>');
DEFINE('_JLIST_BACKEND_INFO_LICENSE_TEXT','Dit component is vrijgegeven onder de <a href="http://www.gnu.de/documents/gpl.de.html" target="_blank">GNU/GPL Licentie</a>.<br />Door de installatie van jDownloads gaat u accoord met de licentievoorwaarden alsook met de hieronder beschreven voorwaarden. Wanneer u niet accoord gaat dan moet u jDownloads de&iuml;nstalleren.<br><br><b>Verdere voorwaarden:</b><br />Het <b>verwijderen van de backlinks</b> op de frontpage van het component is <b>niet toegestaan</b>! Deze moeten bovendien goed zichtbaar zijn. Wilt u desondanks de link verwijderen, dan kunt u daarvoor toestemming krijgen tegen betaling van een klein bedrag. Meer informatie daarover vindt u op <a href="http://www.joomlaaddons.de">www.joomlaaddons.de</a>. Of neem contact op met: <a href="mailto:info@joomlaaddons.de">info@joomlaaddons.de</a>.<br><br>Aanvullend wordt dit component "zoals het is" zonder enige waarborg of garantie beschikbaar gesteld! Voor mogelijk bestandsverlies etc. wordt daarom in geen geval verantwoording genomen. Het gebruik van het component geschiedt op eigen verantwoording.<br /><br /><b>Speciaal dank aan <a href="http://www.filmanleitungen.de">Achim Raji</a> aka Cybergurk</b><br />voor het uitgebreid testen, de verzorging van de duitse taalbestanden en de vele ingebrachte idee&euml;n.');

DEFINE('_JLIST_BACKEND_INFO_LINK_BACK','Terug');


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

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_MAIL_DEFAULT','Download aanwijzing!<br />
<br />
De volgende files staan te wachten op gedownlaod te worden:<br />
{file_list}
<br /><br />
Datum en tijd: {date_time}<br />
Naam: {user_name}<br />
Gebruikergroep: {user_group}<br />
Gebruiker IP-Adress: {ip_address}<br /><br />
Deze email is automatisch gegenereerd!');

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
DEFINE('_JLIST_SETTINGS_LICENSE3_TEXT','<strong>Donationware</strong> is Freeware, waarbij de auteur om een bijdrage naar believen vraagt, om de kosten van het (door)ontwikkelen en verspreiden van de software te compenseren.<br />Quelle: Wikipedia');
DEFINE('_JLIST_SETTINGS_LICENSE3_URL','');

DEFINE('_JLIST_SETTINGS_LICENSE4_TITLE','Linkware');
DEFINE('_JLIST_SETTINGS_LICENSE4_TEXT','');
DEFINE('_JLIST_SETTINGS_LICENSE4_URL','Linkware vereist een link naar de website van de auteur bij gebruik.');

DEFINE('_JLIST_SETTINGS_LICENSE5_TITLE','Charityware');
DEFINE('_JLIST_SETTINGS_LICENSE5_TEXT','Charityware veroorloofd vrij gebruik, de auteur vraagt een donatie voor een goed doel wanneer de download bevalt.');
DEFINE('_JLIST_SETTINGS_LICENSE5_URL','');

DEFINE('_JLIST_SETTINGS_LICENSE6_TITLE','Commerci&euml;le licentie');
DEFINE('_JLIST_SETTINGS_LICENSE6_TEXT','');
DEFINE('_JLIST_SETTINGS_LICENSE6_URL','');

DEFINE('_JLIST_SETTINGS_LICENSE7_TITLE','Creative Commons');
DEFINE('_JLIST_SETTINGS_LICENSE7_TEXT','');
DEFINE('_JLIST_SETTINGS_LICENSE7_URL','http://de.wikipedia.org/wiki/Creative_Commons#Standard-Lizenzen');


///////////////////////////////////////////////////////////////////////////////
// Install default config values - Please do not delete this !!!
// Installations Vorgabewerte f&uuml;r Konfigurationen - NICHT l&ouml;schen !!!
///////////////////////////////////////////////////////////////////////////////
DEFINE('_JLIST_SETTINGS_INSTALL_1','<b>Selecteer alle files:</b>');
DEFINE('_JLIST_SETTINGS_INSTALL_2','');
DEFINE('_JLIST_SETTINGS_INSTALL_3','Informatie over de downloads');
DEFINE('_JLIST_SETTINGS_INSTALL_4','webmaster@jouwwebsite.com');
DEFINE('_JLIST_SETTINGS_INSTALL_5','info@jouwwebsite.com');


// ****************************************************************************
//		NEW IN VERSION 1.2 beta
// ****************************************************************************

// JAVASCRIPT (jdownloads.js) MESSAGES <<< Umlaute NICHT umwandeln !! >>>
DEFINE('_JLIST_JAVASCRIPT_TEXT_2','Er zijn nog geen files aanwezig in deze categorie om gedownload te worden.\\n');
DEFINE('_JLIST_JAVASCRIPT_TEXT_1','Selecteer minimaal 1 file om te kunnen downloaden.');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_TEXT_TO_SHORT','Zoek term te kort, minimale invoer: 3 karakters!'); 
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_NO_OPTION','Je moet tenminste 1 zoek optie aanklikken!'); 
// end javascript messages


DEFINE('_JLIST_INSTALL_1_2','Data is al aanwezig in de database!');
DEFINE('_JLIST_INSTALL_2_2','Data is veranderd, toegevoegd of bestaat niet!)!');
DEFINE('_JLIST_INSTALL_17','JoomFish Installation gevonden! De jDownloads JoomFish definities zijn toegevoegd:');
//------------------------------------------
DEFINE('_JLIST_INSTALL_18','De jDownloads JoomFish definities data zijn gekopieerd naar:');
DEFINE('_JLIST_INSTALL_19','Als je deze definities wilt gebruiken met JoomFish, Kopieer ze dan achter:');

DEFINE('_JLIST_FRONTEND_HOME_LINKTEXT','Overzicht');
DEFINE('_JLIST_FRONTEND_SUBTITLE_OVER_CATLIST','Overzicht');
DEFINE('_JLIST_FRONTEND_SUBTITLE_OVER_ONE_CAT','Categorie');
DEFINE('_JLIST_FRONTEND_SUBTITLE_OVER_DETAIL','Download details');

// PAGENAVIGATION FRONTEND
DEFINE('_JLIST_FRONTEND_HEADER_PAGENAVI_PAGE_TEXT','Pagina:');
DEFINE('_JLIST_FRONTEND_HEADER_PAGENAVI_TO_TEXT','van de');

DEFINE('_JLIST_BACKEND_FILESEDIT_PRICE','Prijs');
DEFINE('_JLIST_BACKEND_FILESEDIT_PRICE_DESC','Verzorg een prijs.');

DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_4','Herstel Log');

//FRONTEND UPLOAD
DEFINE('_JLIST_FRONTEND_UPLOAD_ACCESS_ONLY_REGGED','Je moet geregistreerd zijn om Files te kunnen uploaden. Als je al geregistreerd bent zal je eerst moeten inloggen. ');
DEFINE('_JLIST_FRONTEND_UPLOAD_ACCESS_ONLY_SPECIALS','Je hebt niet de toestemming om files te uploaden.');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_NO_CATS_EXIST','Error: Files kunnen alleen worden geupload als tenminste 1 categorie is gemaakt en gepubliceerd is.');    
DEFINE('_JLIST_FRONTEND_UPLOAD_LINKTEXT','Upload een file');
DEFINE('_JLIST_FRONTEND_UPLOAD_PAGE_TITLE','Verstuur file');
DEFINE('_JLIST_FRONTEND_UPLOAD_FILENAME','Selecteer file:');
DEFINE('_JLIST_FRONTEND_UPLOAD_FILENAME_BUTTON_TEXT_SEND','Verzend file');
DEFINE('_JLIST_FRONTEND_UPLOAD_FILENAME_BUTTON_TEXT_CLEAR','Leeg de invoer velden');
DEFINE('_JLIST_FRONTEND_UPLOAD_ALLOWED_FILETYPE','Toegestane bestands extensies');
DEFINE('_JLIST_FRONTEND_UPLOAD_ALLOWED_MAX_SIZE','Toegestane bestandsgrootte');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_NO_VALUE','Error: niet alle velden zijn ingevuld!<br />Vul alstublieft alle benodigde velden in.');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_FILETYPE','Error: De volgende file extensie wordt niet ondersteund!<br />Selecteer een andere extensie.');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_FILESIZE','Error: de geselecteerde bestandsgrootte is groter dan de toegestande bestandsgrootte!');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_MOVE_FILE','Error: een error heeft zich voorgedaan tijdens het oploaden!');
DEFINE('_JLIST_FRONTEND_UPLOAD_OK','De file is met succes geupload naar de server!!<br />Publicatie moet eerst worden goed bevonden.');

// FRONTEND UPLOAD FIELD TITLE
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_NAME','Je naam:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_MAIL','Je E-Mail Adress:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_TITLE_FILE','Download Titel:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_PRICE','Prijs:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_DESC_FILE','Korte Beschrijving:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_DESC_FILE_LONG','Lange Beschrijving:');    
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_AUTHOR','Auteur naam:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_AUTHOR_URL','Author Website:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_LIZENZ','Licenctie:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_VERSION','Versie:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_LISTBOXES','Selecteer:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_CATEGORY','Categorie:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_LANGUAGE','Taal:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_SYSTEM','Systeem:');
DEFINE('_JLIST_FRONTEND_UPLOAD_SYMBOL_TEXT','Mandatory veld');

//FRONTEND SEARCH
DEFINE('_JLIST_FRONTEND_SEARCH_LINKTEXT','Zoek in de Downloads');

// AUTOCHECK DOWNLOADS
DEFINE('_JLIST_BACKEND_AUTOCHECK_NEW_CATS','Nieuwe mappen gevonden. Deze mappen zijn toegevoegd als nieuwe categorien!!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_MISSING_CATS','Category mappen worden niet gevonden en daardoor niet gepubliceerd!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NO_NEW_CATS','Geen nieuwe map gevonden!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NO_MISSING_CATS','Alle gepubliceerde mappen bestaan!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_LOG_TITLE','Laatste interne bericht(Uitgevoerde opties):');
DEFINE('_JLIST_BACKEND_AUTOCHECK_LOG_TAB_TITLE','Laatste interne bericht (acties) tijdens Download directories monitoring'); 
DEFINE('_JLIST_BACKEND_AUTOCHECK_REFRESH_MESSAGE','Je moet de pagina verversen om de toepassingen te kunnen bekijken.!'); 

DEFINE('_JLIST_BACKEND_RESTORE_LOG_TAB_TITLE','Resultaten voor de laatste backup restauratie.'); 

DEFINE('_JLIST_BACKEND_PANEL_STATUS_DESC_OFFLINE','The maintenance mode is activated! Therefore the Download area is not available at the moment for normal visitors! This download area is nevertheless available for members belonging to the "Author" group.');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_DOWNLOADS_HEADER','Downloads Status');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_DOWNLOADS_OFF_DESC','De automatische monitoring van de Download mappen is gedeactiveerd!');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_VERSION_HEADER','Jdownloads huidige version informatie');

DEFINE('_JLIST_BACKEND_SETTINGS_DEL_TEMPFILE_TIME','Vertraging (in minuten) voor tijdelijke zip file verwidering');
DEFINE('_JLIST_BACKEND_SETTINGS_DEL_TEMPFILE_TIME_DESC','Geeft het aantal minuten weer, dat de sevrer nodig heeft om de tijdelijke zip files te verwijderen. Voor grotere bestanden moet een hogere waarde worden aangegeven. Standaard: 20 minuten.');

DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_FRONTEND_HEAD_UPLOAD','Frontend Upload Configuratiie');
DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIR_RENAME_ERROR','ERROR: Download root map kon niet worden hernoemd!');
DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIR_RENAME_OK',' - Download root map succesvol hernoemd!');

DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO','Download map monitoring? ');
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_DESC','Wanneer deze functie is geselecteerd, worden alle mappen gecontroleerd op veranderingen en wordt de database automatisch bijgewerkt. Hierdoor worden files die via FTP zijn geupload automatisch toegekent aan categorieen en downlaod tabellen. Wanneer categorieen of download files niet meer worden gevonden, dan worden de aanliggende entries weergegeven als: <b>Not published</b >.<b>Standaard setting: JA.</b>');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_USE_CHECKBOX_INFO','<b>Note:</b> Check box opties voor Download meldingen zijn ingegeven in het layout "administratie" gedeelte, onder files layout!');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_USE_SYMBOLE_INFO','<b>Note:</b> Mini symbolen display opties worden ingesteld in de layout administratie, onder files layout!');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FILES_PER_SIDE','Aantal files per pagina');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FILES_PER_SIDE_DESC',' Geef hier het nummer weer dat aangeeft hoeveel categorien/Downloads aantallen er per pagina beschikbaar zijn in de frontend.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_HEADER_TITLE','Titel die gebruikt moet worden in de Header');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_HEADER_DESC','Geef hier de titel die moet worden weergegeven in de frontend. Bijvoorbeeld" Downloads.');

// FRONTEND UPLOAD CONFIG
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACTIVE','Frontend Upload activatie:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACTIVE_DESC','Wanneer geactiveerd, de gebruikersgroep hieronder aangegeven kunnen file suploaden.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_PERMISSIONS','Wie mag files uploaden:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_PERMISSIONS_DESC',' Hier kun je aangeven welke gebruiker files mogen uploaden. DE "Speciaal" setting zorgt ervoor dat members met de status - Auteur - toegang hebben tot uploaden van files.');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACCESS_ALL','Iedereen');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACCESS_REGGED','Geregistreerd');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACCESS_ADMINS','Speciaal');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILETYPES','Toegestane File extensies:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILETYPES_DESC','Geef hier aan welke file extensies er gebruikt mogen worden. Tussen elke waarde moet een komma (,) worden geplaats.');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILESIZE','Maximum grootte in KB:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILESIZE_DESC','Geef hier de maximale grootte aan van de file. Toegestane grootte voor files die geupload moet worden in KB (1024 Kb = 1 Mb). Standaard waarde: 2048.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FORM_TEXT','Upload formulier tekst:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FORM_TEXT_DESC','Geef hier weer hoe de layout van de upload form eruit ziet (erboven of eronder). De plaatshouder: {form} wordt vervangen door het echte formulier in de frontend. Het plaatshouder symbool kan niet worden verwijderd!');

// Platzhalter {form} NICHT ÄNDERN ODER LÖSCHEN !!!
// DO NOT DELETE, EDIT OR TRANSLATE: {form} !!! 

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FORM_TEXT_LAYOUT','Dit formulier geeft je de mogelijkheid om bestanden te uploaden naar de server. Alle velden met een mandatory veld (verplicht of gedwongen) moeten worden ingevuld. Je email adres wordt niet uitgereikt aan derden en is puur voor dit component als informatie beschikbaar.<br />
{form}<br />');

DEFINE('_JLIST_BACKEND_TEMPLIST_DEL_QUEST','Verwijder Layout(s)?');
DEFINE('_JLIST_BACKEND_LICLIST_DEL_QUEST','Verwijder Licenctie (s)?');

DEFINE('_JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD_STATUS_DESC','Hier kun je configuratie status zien van de root upload map. De rechten moeten staan op CHMOD 0777.');

DEFINE('_JLIST_BACKEND_FILESEDIT_HITS','Nummer van aantal Downloads');
DEFINE('_JLIST_BACKEND_FILESEDIT_HITS_DESC','Hier kan de download teller worden veranderd of worden gereset.');

DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_CAT_DESC','Je moet de download aan een ecategorie toewijzen. Selecteer uit de lijst een geschikte categorie. Wanneer later een andere categorie worde geselecteerd, dan worde de download automatisch naar een andere map en categorie geplaatst.');

DEFINE('_JLIST_BACKEND_FILESEDIT_DESCRIPTION_KURZ','Korte beschrijving');
DEFINE('_JLIST_BACKEND_FILESEDIT_DESCRIPTION_LONG','Lange beschrijving');
DEFINE('_JLIST_BACKEND_FILESEDIT_EDITOR_INFO','In het configuratie formulier kan worden aangegeven of de WYSIWUG editor of een simpele tekst box moet worden gebruikt om tekst te bewerkenb.');
DEFINE('_JLIST_BACKEND_FILESEDIT_SENT_IN_FROM_STATUS','Status: ');
DEFINE('_JLIST_BACKEND_FILESEDIT_SENT_IN_FROM_EMAIL','E-Mail Adrss: ');
DEFINE('_JLIST_BACKEND_FILESEDIT_ERROR_TITLE','Error: Download moet een titel hebben!');
DEFINE('_JLIST_BACKEND_FILESEDIT_CATLIST_ERROR','Error: geen categorie aangegeven!');
DEFINE('_JLIST_BACKEND_FILESEDIT_SAVE_MOVEFILE_ERROR',' - Error: Download File kon niet worden verplaatst!');
DEFINE('_JLIST_BACKEND_FILESEDIT_SAVE_MOVEFILE_OK',' - Download file successvol verplaatst');

DEFINE('_JLIST_BE_NO_PUBL_FILES','Downloads zonder een toegewezen categorie kunnen niet worden gepubliceerd.!');
DEFINE('_JLIST_BACKEND_FILESLIST_DEL_QUEST','verwiijderde Download(s)?');
DEFINE('_JLIST_BACKEND_FILESLIST_DESCRIPTION_SHORT','Beschrijvin (kort)');
DEFINE('_JLIST_BACKEND_FILESLIST_PIC','Symbool');
DEFINE('_JLIST_BACKEND_FILESLIST_DEL_FILES_OPTION','<font color=#990000>Verwijder de gekoppelde download file bij de download data verwijder actie:</font>');

DEFINE('_JLIST_BACKEND_FILESLIST_DEL_FILES_OPTION_TOOLTIP','zo JA, niet alleen de download data maar ook de gekoppelde file op server wordt hiermee verwijderd! Wanneer de file niet verwijderd is en de monitoring van de download mappen is actie dan wordt de file automatisch als downloadbaar beschouwd!<br /><b>Aanbevolen setting: JA</b >.');
DEFINE('_JLIST_BACKEND_FILESEDIT_DEL_FILES_OK',' - Gekoppeld file(s) zijn verwijderd.');
DEFINE('_JLIST_BACKEND_FILESEDIT_DEL_FILES_ERROR',' - gekoppeld file(s) niet verwijderd omdat ze niet gevonden worden.');
DEFINE('_JLIST_BACKEND_FILESLIST_FILE_ID','ID');

DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_CAT_DEL_AFTER_COPY','Een error heeft plaats gevonden tijdens het verwijdenen van een oude categorie.');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_TITLE','Categorie titel<b><font color=red>*</font></b>');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_TITLE_DESC','Categorie identificatie. Voor elke categorie wordt er een map gemaakt met de naam die gelijk is aan de titel van de categorie. speciale tekens en spacies niet geincludeerd.s: <b>" - _ . , " </b>.');
DEFINE('_JLIST_BACKEND_CATSEDIT_ROOT_CAT_LISTBOX','Hoofd Categorie');
DEFINE('_JLIST_BACKEND_CATSEDIT_ROOT_CAT_LISTBOX_NEW','Nieuwe hoofd categorie');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_TITLE','Categorie toewijzing');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_TITLE_NEW','Nieuwe categorie gemaakt in <b><font color=red>*</font></b>');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_DESC_NEW','Als een nieuwe categorie wordt aangemaakt, selecteerd dan Hoofd categorie. ALs de categorie als een sub categorie moet dienen moet dit apart worden aangegeven. Een nieuwe categorie wordt vervolgend eronder geplaatst.');

DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_DESC',' Als een sub categorie moet dienen als hoofd categorie, selecteer dan " hoofd categorie"!');
DEFINE('_JLIST_BACKEND_CATSEDIT_SAVE','Categorie opgeslagen.');
DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_TITLE_CHARS_NOT_ALLOWED','Error: De opgelagen titel bevat een speciaal karakter. Dit is niet toegestaan!');
DEFINE('_JLIST_BACKEND_CATSLIST_DEL_QUEST','Verwijder Categorie(n)?');
DEFINE('_JLIST_BACKEND_CATSLIST_CATID','ID');
DEFINE('_JLIST_BACKEND_CATSLIST_PATH','Map');

// BACKEND CATS DELETE
DEFINE('_JLIST_BE_NO_DEL_SUBCATS_EXISTS','Categorie kan niet worden verwijderd omdat er subcategorien ontstaan.!');
DEFINE('_JLIST_BE_NO_DEL_FILES_EXISTS','Categorie kan niet worden verwijderd omdat ernog download files in zitten.!');
DEFINE('_JLIST_BE_DEL_CATS_DIRS_OK',' - Map successfully verwijderd!');
DEFINE('_JLIST_BE_DEL_CATS_DIRS_ERROR',' - Error tijdens het verwijderen van deze map!');

DEFINE('_JLIST_BACKEND_NO_SELECT_ACTION','Selecteer eerst een file of map.!');

DEFINE('_JLIST_BE_SETTINGS_FILES_PER_SIDE_BE_TITLE','Hoeveel regels moegen worden weergegeven.');
DEFINE('_JLIST_BE_SETTINGS_FILES_PER_SIDE_BE_DESC','Hier kun je aangeven hoeveel regels er worden weergegeven in de lijst van de backend.');

DEFINE('_JLIST_UPLOAD_MAX_FILESIZE_INFO_TITLE','Maximum grootte zoals is aangegeven in de configuratie file php.ini:');

DEFINE('_JLIST_BACKEND_TEMPLATE_ACTIVE_ERROR','Er kan meer 1 layout worden geselecteerd voor activatie!');
DEFINE('_JLIST_AUTO_FILE_CHECK_IMPORT_BY','Auto Import');          
DEFINE('_JLIST_AUTO_FILE_CHECK_ADDED',   'Download toegevoegd    ');
DEFINE('_JLIST_AUTO_FILE_CHECK_DISABLED','Download niet gevonden  ');
DEFINE('_JLIST_AUTO_CAT_CHECK_ADDED',    'Category toegevoegd');
DEFINE('_JLIST_AUTO_CAT_CHECK_DISABLED', 'Category niet gevonden  ');

// MESSAGES AFTER CHECK FILES AND DIRS WHEN UPDATED FROM 1.1 alpha
DEFINE('_JLIST_CHECK_CATS_TITEL1','Je hebt Jdownloads geupdate naar versie 1.2 Stable.');     
DEFINE('_JLIST_CHECK_CATS_TITEL2','Als gevolg, alle categorien en downloads moeten nu worden verplaatst naar een andere catergorie structuur!');          

DEFINE('_JLIST_CHECK_FINISH','Proces Afgebroken!');
DEFINE('_JLIST_CHECK_CATS_CREATE','Categories-mappen aangemaakt!');
DEFINE('_JLIST_CHECK_FILES_MOVE','Download files bewerkt!!');
DEFINE('_JLIST_CHECK_FILES_NOT_FOUND','Download-files niet gevonden!');
DEFINE('_JLIST_CHECK_FILES_NOT_MOVED','Download-files konen niet bewerkt worden in de geactiveerde categorie!');
DEFINE('_JLIST_CHECK_CATS_NOT_FOUND','Category-mappen konden niet worden aangemaakt!');

// MESSAGES AFTER RESTORE BACKUPFILE
DEFINE('_JLIST_AFTER_RESTORE_TITLE_1','Restoratie proces lopend:');
DEFINE('_JLIST_AFTER_RESTORE_1','Records hersteld!');
DEFINE('_JLIST_AFTER_RESTORE_TITLE_2','Database contents check started:');
DEFINE('_JLIST_AFTER_RESTORE_3','Backup is gemaakt met een oudere versie van Jdownload!');
DEFINE('_JLIST_AFTER_RESTORE_4','The category directories and Downloads are now checked:');
DEFINE('_JLIST_AFTER_RESTORE_TITLE_3','Gedetaileerde resultaten:');

DEFINE('_JLIST_AUTOCHECK_DIR_NOT_EXIST','ERROR: Upload root map bestaat niet!');
DEFINE('_JLIST_AUTOCHECK_DIR_NOT_EXIST_2','Maa alstublieft 2 mappen aan: /Downlaods en /downloads/tempzipfiles je Joomla root map d.m.v. een FTP programma en zet de rechten op CHMOD 0777. Wanneer niet dit niet gedaan wordt zal Jdownloads niet werken!');
DEFINE('_JLIST_FRONTEND_HEADER_CATLIST_TITLE','Selecteer Categorie');
DEFINE('_JLIST_FRONTEND_HEADER_SUMMARY_TITLE','Samenvatting');
DEFINE('_JLIST_FRONTEND_HEADER_FINISH_TITLE','Download');

// FRONTEND SEARCH
DEFINE('_JLIST_FRONTEND_SEARCH_TITLE','Downloads zoeker');
DEFINE('_JLIST_FRONTEND_SEARCH_TEXT_TITLE','Zoek voor');
DEFINE('_JLIST_FRONTEND_SEARCH_IN_TITLE','Zoek in titel');
DEFINE('_JLIST_FRONTEND_SEARCH_IN_DESC','Zoek in beschrijving');
DEFINE('_JLIST_FRONTEND_SEARCH_INFO_TEXT','Een maximum van 20 files is weergegeven als zoekresuktaat.');  
DEFINE('_JLIST_FRONTEND_SEARCH_BUTTON_TEXT','Zoek');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_TITLE','Zoek resultaten');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_SUM_FILES','Gevonden:');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_NO_SUM_FILES','Geen files gevonden na het zoeken.');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_SEARCH_TEXT','Zoek term');

// NEW LAYOUT FOR VIEW DOWNLOAD-DETAILS
DEFINE('_JLIST_BACKEND_TEMP_TYP5','Download-Details');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_DETAILS','Download-Details');
DEFINE('_JLIST_BACKEND_TEMPLIST_DETAILSTITLE_HEAD','Download-Details Layouts');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS','Layout: Download-Details');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_DESC','Dit is de layout van de Downloads  <b>Details pagina</b> in de 
Front-end.<br /><br />Verwijder niet de plaatshouder variabele <font color=red>{url_download}</font>!<br /><br />verkrijgbare variabelen (placeholders):<br />{file_title} {thumbnail} {pic_is_new} {pic_is_hot} {pic_is_updated} {url_download} {mirror_1} {mirror_2} {description_long} {details_block_title} {license_title} {license_text} {price_title} {price_value} {language_title} {language_text} {filesize_title} {filesize_value} {system_title} {system_text} {author_title} {author_text} {author_url_title} {author_url_text} {created_date_title} {created_date_value} {hits_title} {hits_value} {created_by_title} {created_by_value} {modified_by_title} {modified_by_value} {modified_date_title} {modified_date_value}.'); // changed in 1.4 beta (2)
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_INFO_TITLE','<b>Informatie over Download details layout:</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_INFO_TEXT','<p>Grafisch voorbeeld van deze pagina in de frontend. De donkere grens geeft aan dat je de display vanaf hier kunt aanpassen.</p>');

// FRONTEND DOWNLOAD DETAILSITE
DEFINE('_JLIST_FE_DETAILS_PATHWAY_TEXT','File locatie');
DEFINE('_JLIST_FE_DETAILS_LINK_TEXT_TO_DETAILS','>> Details');
DEFINE('_JLIST_FE_DETAILS_LICENSE_TITLE','Licentie');
DEFINE('_JLIST_FE_DETAILS_PRICE_TITLE','Prijs');
DEFINE('_JLIST_FE_DETAILS_LANGUAGE_TITLE','Taal');
DEFINE('_JLIST_FE_DETAILS_FILESIZE_TITLE','Grootte');
DEFINE('_JLIST_FE_DETAILS_SYSTEM_TITLE','Systeem');
DEFINE('_JLIST_FE_DETAILS_AUTHOR_TITLE','Auteur');
DEFINE('_JLIST_FE_DETAILS_AUTHOR_URL_TITLE','Website');
DEFINE('_JLIST_FE_DETAILS_CREATED_DATE_TITLE','Gemaakt op');
DEFINE('_JLIST_FE_DETAILS_HITS_TITLE','Downloads');

// LAYOUT DOWNLOAD-DETAILS
///////////////////////////////////////////////////////////////////////////////
// Template defaults for _jdownloads_templates - Please do not change this and NO translation here!!!
// Vorgabewerte f&uuml;r Layouttabelle - hier bitte KEINE &Auml;nderungen oder Übersetzungen hier vornehmen !!!
///////////////////////////////////////////////////////////////////////////////
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_DEFAULT_NAME','Standard 1.4');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT_NAME','Standard 1.4');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_DEFAULT_NAME','Standaard 1.4 - Volledige Info');
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
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT_NEW_SIMPLE_1_NAME','Standaard layout met Checkboxes');
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
DEFINE('_JLIST_BACKEND_TEMPEDIT_TITLE_NOT_ALLOWED_TO_CHANGE_DESK','Je kunt de namen van de standaard layout niet veranderen!'); 
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT_NEW_SIMPLE_2_NAME','Standaard layout zonder Checkboxes');
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
DEFINE('_JLIST_BACKEND_TEMPEDIT_NOTE_TITLE','Layout notities');
DEFINE('_JLIST_BACKEND_TEMPEDIT_NOTE_DESC','Extra informatie voor de layoout kan hier worden ingegegeven.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_CHECKBOX_TITLE','Gebruikt de layout CHECK boxes?');
DEFINE('_JLIST_BACKEND_TEMPEDIT_CHECKBOX_DESC','zo JA, de CHECK box heading regele en de continue button worden nu weergegeven in de layout. Overige plaatshouder symbolen <b>{checkbox_list}</b>  moeten worden ingevoerd in de layout. Zo niet, dan moet het plaatshouder symbool ingevoerd worden in de layout.<b>{url_download}</b>.'); 
DEFINE('_JLIST_BACKEND_TEMPEDIT_SYMBOLE_TITLE','Voer mini-symbol in?');
DEFINE('_JLIST_BACKEND_TEMPEDIT_SYMBOLE_DESC','zoja, het aangegeven mini-symbool word ingegeven. De symbool grootte kan worden aangepast in de configuratie settings.');

DEFINE('_JLIST_FE_YES','Ja');
DEFINE('_JLIST_FE_NO','Nee');

DEFINE('_JLIST_BACKEND_EDIT_PUBLISHED','Gepubliceerd');
DEFINE('_JLIST_BACKEND_FILESEDIT_MODIFIED_DATE','Laatste keer aangepast');
DEFINE('_JLIST_BACKEND_FILESEDIT_MODIFIED_BY','door');
DEFINE('_JLIST_BACKEND_FILESEDIT_CREATED_BY','Gemaakt door');

DEFINE('_JLIST_BACKEND_FILESEDIT_INFO_FIELDS_DESC','De velden aan de linkerkant, verzorgen informatie zoals: name van de maker, laatste keer geedit en door wij geedit.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CATLISTBOX_ACTIVE','Geef Categorie lijstbox in header weer?');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CATLISTBOX_DESC','zo JA, een lijst box met alle gepubliceerde categorien zijn beschikbaar voor gebruikers die gekoppeld zijn aan rechten die worden weergegeven in de Header. Vanuit deze lijst kun je direct naar een Categorie/Subcategorie gaan.');

// SAMPLE DATA 
DEFINE('_JLIST_SAMPLE_DATA_CAT_NAME_ROOT','Categorie voorbeeld');
DEFINE('_JLIST_SAMPLE_DATA_CAT_NAME_SUB','Subcategory voorbeeld');
DEFINE('_JLIST_SAMPLE_DATA_CAT_NAME_TEXT','Dit is een categorie voorbeeld illustratie. Deze kan worden verwijderd wanneer dit gewenst is.');
DEFINE('_JLIST_SAMPLE_DATA_FILE_NAME','Download voorbeeld');
DEFINE('_JLIST_SAMPLE_DATA_FILE_NAME_TEXT','Dit is een voorbeel download (file). Dit voorbeel kan verwijderd worden wanneer dit gewenst is.');
DEFINE('_JLIST_SAMPLE_DATA_CREATE_ERROR','Door een fout is de voorbeeld data niet geinstalleerd. Kijk de opties na in het Jdownloads hoofd menu.');
DEFINE('_JLIST_SAMPLE_DATA_CREATE_OK','Voorbeeld data is met succesvol geinstalleerd!');
DEFINE('_JLIST_SAMPLE_DATA_BE_OPTION_LINK_TEXT','Installeer voorbeeld data nu.');
DEFINE('_JLIST_SAMPLE_DATA_EXISTS','Voorbeeld data is al geinstalleerd.!');
DEFINE('_JLIST_SAMPLE_DATA_BACK_TO_PANEL','Terug naar de Control panel');


DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_HEAD_INFO2','<br /><b><u>Layouts explanation</u></b><br /><b>Categorien: </b>Defines the layout of the categories as well as the download items for the use of the CHECK boxes above and below the Download list.<br /><b>Files: </b>Defines the layout of the Download list displayed below the categories (see hereabove).<br /><b>Download-Details: </b>Defines the layout of the Download detailed view.<br /><b>Summary: </b>Defines the layout of the download summary page (from which you actually start dowloading) with the list of selected files to be downloaded.<br /><b>E-Mails: </b>.');

// ANTI_LEECH_CONFIG
DEFINE('_JLIST_BACKEND_SETTINGS_ANTILEECH_TITLE','Beveilig de Download-map?');
DEFINE('_JLIST_BACKEND_SETTINGS_ANTILEECH_DESK','zo YES, dan wordt de htaccess.txt file naar de downlaod root map gekopieerd en wordt de file hernoemd naar htacces. De beveiliging is geactiveerd en alle externe file toegang is geblokkeerd. Dit geld ook voor de submappen. <b>Aanbevolen: JA!</b>');
DEFINE('_JLIST_ACTIVE_ANTILEECH_ERROR',' - ERROR tijdens het kopieren van HTACCES.TXT!');
DEFINE('_JLIST_ACTIVE_ANTILEECH_OK',' - Download beveiliging is geactiveerd!');
DEFINE('_JLIST_ACTIVE_ANTILEECH_OFF_ERROR',' - Error tijdens het verwijderen van htaccess!');
DEFINE('_JLIST_ACTIVE_ANTILEECH_OFF_OK',' - Download beveiliging is gedeactiveerd!');

DEFINE('_JLIST_FRONTEND_ANTILEECH_MESSAGE','ongeautoriseerde toegang tot downloads.!');
DEFINE('_JLIST_FRONTEND_FILE_NOT_FOUND_MESSAGE','Het aanbevolen document was niet gevonden!<br /><br />Contacteer de administrator van deze website!');

DEFINE('_JLIST_FRONTEND_SUMMARY_ZIP_FILESIZE','File grootte voor download pakket');
DEFINE('_JLIST_FRONTEND_NEXT_SITE_BUTTON','&nbsp;>>&nbsp;');
DEFINE('_JLIST_FRONTEND_PREV_SITE_BUTTON','&nbsp;<<&nbsp;');

DEFINE('_JLIST_FRONTEND_SUBHEADER_NUMBER_OF_CATS_TITLE','Aantal Categorien');
DEFINE('_JLIST_FRONTEND_SUBHEADER_NUMBER_OF_SUBCATS_TITLE','Aantal subcategorien');
DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_CATLIST','Kies alstublieft een categorie.<');

// NEW OPTION FOR DIREKT DOWNLOAD LINK
DEFINE('_JLIST_BACKEND_SETTINGS_DIRECT_DOWNLOAD_ACTIVE_TITLE','Activeer direct-download?');
DEFINE('_JLIST_BACKEND_SETTINGS_DIRECT_DOWNLOAD_ACTIVE_DESC','Zo JA: tijdens het gebruik van de plaatshouder <b>{url_download}</b> in de layout, wordt de download automatisch gestart, zonder weergave van een samenvatting.');

// NEW OPTION FOR HOT AND NEW IMAGES IN DOWNLOADS
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_TITLE','Bij welk punt is een download "populiar"');
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_DESC','Geeft aan hoeveel downloads er nodig zijn om een download als "HOT" te beschouwen. Achter de titel zal het "HOT" symbool te zien zijn.');
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_NEW_PIC_TITLE','Filename van het symbool');
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_NEW_PIC_DESC','De aangegeven files moet in de volgende map staan: <b>../components/com_jdownloads/images</b>.');
DEFINE('_JLIST_BACKEND_SETTINGS_NEW_TITLE','Hoe lang is een download aangegeven als "new"');
DEFINE('_JLIST_BACKEND_SETTINGS_NEW_DESC','Geeft aan hoe lang de file aangegeven wordt als "NEW". Achter de download titel staat het "NEW" symbool.');

// NEW OPTION FOR DOWNLOAD PIC BUTTON IN DOWNLOAD DETAILS
DEFINE('_JLIST_BACKEND_SETTINGS_DETAILS_DOWNLOAD_BUTTON_TITLE','Filenaam van downloadsymbol'); 
DEFINE('_JLIST_BACKEND_SETTINGS_DETAILS_DOWNLOAD_BUTTON_DESC','De aangegeven files moet in de volgende map staan: <b>../components/com_jdownloads/images</b> en wordt gebruikt voor de download-detail-site als een download link.');

// NEW IN 1.2 beta 2
DEFINE('_JLIST_FRONTEND_UPLOAD_AUTO_PUBLISH','Download automatisch publiseren:');
DEFINE('_JLIST_FRONTEND_UPLOAD_AUTO_PUBLISH_DESC','bij JA, wordt de download file beschikbaar na de upload.');

// NEW IN 1.2 stable
DEFINE('_JLIST_BACKEND_DIRSEDIT_CREATE_DIR_MESSAGE_ERROR','Error: map kon niet worden aangemaakt! Controleer via FTP voor de map en verander eventueel de CHMOD nssr 0777 voor alle jDownloads mappen!');

// NEW IN 1.3 stable

// FOR CREATES MAIN MENU IN INSTALL
DEFINE('_JLIST_BACKEND_CPANEL_MAIN','Control panel');
DEFINE('_JLIST_INSTALL_DEFAULT_DATE_FORMAT','%d.%m.%Y %H:%M:%S');

// NEW OPTION SORTORDER CATEGORIES
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SORTCATSORDER_TEXT','Categories sort order');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SORTCATSORDER_DESC','Order by which Categories are sorted in the front end. Select "Standard" to use the backend\'s default order.');
DEFINE('_JLIST_BACKEND_SETTINGS_CATS_ORDER_1','Standard');
DEFINE('_JLIST_BACKEND_SETTINGS_CATS_ORDER_2','Name upward');
DEFINE('_JLIST_BACKEND_SETTINGS_CATS_ORDER_3','Name downward');

// NEW TAB TITLE FOR AUTODETECT
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_TAB_TITLE','Monitoring');
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_HEADER_TITLE','Monitoring of the download-folders');

// NEW OPTION AUTOPUBLISH NEW FOUNDED FILES
DEFINE('_JLIST_BACKEND_SETTINGS_DOWNLOADS_AUTOPUBLISH_TITLE','Automatisch de downloads publiceren?');
DEFINE('_JLIST_BACKEND_SETTINGS_DOWNLOADS_AUTOPUBLISH_DESC','JA, nieuw gevonden bestanden worden automatisch gepubliceerd. Er wordt aangenomen dat je de bovenstaande optie hebt aangevinkt.<br /><b>Default: No.</b>');

// NEW OPTION  FOR AUTODETECT ALL FILES
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_ALL_FILES_TITLE','Monitor all filetypes?');
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_ALL_FILES_DESC','If this option is activated, all filetypes are monitored!');

// NEW OPTION  FOR AUTODETECT ONLY THIS FILES
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_ONLY_THIS_FILES_TITLE','Monitor only the following filetypes:');
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_ONLY_THIS_FILES_DESC','If this option is activated, only the filetypes mentioned here are monitored! Values must be separated by commas (,).');

// NEW COPY DOWNLOADS FUNCTION
DEFINE('_JLIST_BACKEND_FILES_COPY_TITLE','Kopieer Downloads');
DEFINE('_JLIST_BACKEND_FILES_COPY_DESC','Selecteer de Doel Categorie.');
DEFINE('_JLIST_BACKEND_FILES_COPY_TEXT_1','Deze downloads zijn gemarkeerd om te Kopieeren.');
DEFINE('_JLIST_BACKEND_FILES_COPY_TEXT_2','TIP: Wanneer je de zelf categorie selecteerd, dan wordt de kopie aangemaakt als: "Kopie van <i>Download-Title</i>"!');
DEFINE('_JLIST_BACKEND_FILES_COPY_TEXT_3','Publiceer gekopieerde Downloads:');
DEFINE('_JLIST_BACKEND_FILES_COPY_TEXT_4','Kopieern ook de volgende bestanden:');
DEFINE('_JLIST_BACKEND_FILES_COPY_DOWNLOADS_TEXT','Kopie van');
DEFINE('_JLIST_BACKEND_FILES_COPY_SAVED','Downloads zijn gekopieeerd!');

// NEW OPTION EXTERN DOWNLOAD URL
DEFINE('_JLIST_BACKEND_FILE_EDIT_EXT_DOWNLOAD_TITLE','Externe bestands link:');
DEFINE('_JLIST_BACKEND_FILE_EDIT_EXT_DOWNLOAD_INFO','Voor een externe bestandslink, dien je eerst het lokale bestand te verwijderen.');
DEFINE('_JLIST_BACKEND_FILE_EDIT_EXT_DOWNLOAD_DESC','Geef hier de URL in die je wilt gebruiken als externe link voor deze download. Laat vervolgens het veld voor uploaden, leeg.');

//NEW OPTION FOR JCOMMENTS INTEGRATION
DEFINE('_JLIST_BACKEND_SETTINGS_JCOMMENTS_TITLE','Commentaar op de functies van JComments?');
DEFINE('_JLIST_BACKEND_SETTINGS_JCOMMENTS_DESC','JA, activeer de commentaar functie van <b>JComments</b> in tde frontend.<br /><b>JComments</b> is niet verwerkt in jDownloads en je zult het eerst moeten installeren en configureren.<br />Je kunt de JComments extensie downloaden van <a href="http://www.joomlatune.com">www.joomlatune.com.</a>');
DEFINE('_JLIST_BACKEND_SETTINGS_JCOMMENTS_EXISTS_DESC','JA, laat de JComments functie zien in de download detail pagina.<br /><b>JComments is al geinstalleerd!</b>');

// NEW TAB FOR FRONTEND UPLOAD CONFIG
DEFINE('_JLIST_BACKEND_SETTINGS_FE_UPLOAD_TAB_TITLE','Uploads');
DEFINE('_JLIST_BACKEND_SETTINGS_FE_UPLOAD_TITLE_HEAD','Frontend upload formulier configuratie');

// NEW DOWNLOAD FIELDS FOR DOWNLOAD MIRRORS
DEFINE('_JLIST_BACKEND_FILESEDIT_MIRROR_URL_TITLE','Alternative externe bestands link:');
DEFINE('_JLIST_BACKEND_FILESEDIT_MIRROR_URL_DESC','Hier kun je een mirror server aangeven voor de download.<br />In de geactiveerde layouts voor de bestands of downloads details moet je de placeholders invullen. {mirror_1} {mirror_2}.');

//NEW TEXT FOR MIRRORS
DEFINE('_JLIST_FRONTEND_MIRROR_URL_TITLE_1','Mirror 1');
DEFINE('_JLIST_FRONTEND_MIRROR_URL_TITLE_2','Mirror 2');

//NEW FOR PLUGINS TAB
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_PLUGINS','Plugins');

//NEW FOR FILE PLUGIN
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_FILEPLUGIN_HEAD','Configuratie van Content-Plugin (mos_jdownloads_file)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(c) door Pelma voor jDownloads');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_DEFAULTLAYOUT','Standaard layout:');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_DEFAULTLAYOUT_DESC','Deze layout wordt gebruikt om de download te laten zijn in de inhoud, als de plugin <b>enabled</b> is (kijk hieronder).');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_NOT_INSTALLED','De content-plugin mos_jdownloads_file die gebruikt kan worden om downloads van jDownloads weer te geven in een artikel, is niet een ingebouwde functie van jDownloads en moet apart worden geinstalleerd. <br /><b>Status: De content plugin is nog niet geinstalleerd!</b><br />Je kunt de extensie vinden op <a href="http://demo.joomlaaddons.de/index.php?option=com_jdownloads&Itemid=69&task=viewcategory&catid=9">www.JoomlaAddons.de</a>.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_ONLINEPART','Parameters voor het inschakelen van de plugin');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINEPART','Parameters voor het uitschakelen van deplugin');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWNEW','Show NEW-symbol');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWNEW_DESC','Show (of niet) het NEW-symbol in de inhoud.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWHOT','Show HOT-symbool');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWHOT_DESC','Show (of niet) het HOT-symbol in de inhoud.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_ENABLEPLUGIN','plugin inschakelen');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_ENABLEPLUGIN_DESC','Inschakelen van de plugin. Dit is niet hetzelfde als de publiceer parameter in Joomla. Wanneer je de plugin uitschakeld in Joomla, kun je de bezoekers hierover informeren.(S)!');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWDISABLED','Laat een bericht zien wanneer de plugin uigeschakeld is.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWDISABLED_DESC','Wanneer je de plugin uitschakeld, kun je een breicht plaatsen op de plek van de download. Bekijk de parameters hier beneden.<br \><b>No</b>: Laat niks zien.<br \><b>Default layout</b>: Laat een bericht achter bij het gebruik van de standaard layout.(Bekijk hierboven).<br \><b>Offline layout</b>: Geeft een bericht weer als de standaard layout offline is. (Bekijk hieronder.)');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_DOWNLOADTITLE','Laat de originele download titel zien.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_DOWNLOADTITLE_DESC','JA: gebruik de originele download titel. (en zijn symbool) in het offlinebericht. Nee: vervang het originele bericht door de inhoud van het veld " Titel vervanging" hieronder.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINETITLE','Titel vervanging.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINETITLE_DESC','Titel die moet worden weergeveven wanneer de plugin uitgeschakeld is. to show when plugin disabled (dit hangt af van de instellingen hieronder).');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINEDESC','Beschrijving van de vervanging');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINEDESC_DESC','Wanneer de plugin is uitgeschakeld, dan wordt deze beschrijving getoond in plaats van de originele download beschrijving.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT','Offline layout (wanneer de plugin is uitgeschakeld)');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT_DESC','Gebruik deze layout om offline berichten te laten zien wanneer de plugin uitgeschakeld is.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT_OPT1','Nee');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT_OPT2','Standaard layout');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT_OPT3','Offline layout');
DEFINE('_JLIST_FRONTEND_SETTINGS_FILEPLUGIN_OFFLINE_FILETITLE','Downloads zijn uitgeschalekd.');
DEFINE('_JLIST_FRONTEND_SETTINGS_FILEPLUGIN_DESCRIPTION','Wanneer je niet kunt downloaden, gelieve contact op te nemen met de webmaster.');
DEFINE('_JLIST_FRONTEND_SETTINGS_FILEPLUGIN_FILEUNKNOWN','Kan de download niet vinden! ID=<b>{fileid}</b>');
DEFINE('_JLIST_FRONTEND_SETTINGS_FILEPLUGIN_LAYOUTUNKNOWN','Kan de layout niet vinden! <b>{thelayout}</b>!');

// NEW OPTIONS FOR DEFAULT CAT ICON
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_CAT_FILE_NO_DEFAULT_PIC','Geen plaatje geselecteerd!');
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_CAT_PIC_TITLE','Standaard plaatje voor categorien:');
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_CAT_PIC_DESC','Selecteer hier een symbool, dat automatisch aan een categorie wordt toegewezen. Het symbool wordt hierboven weergegeven.');

// NEW OPTIONS FOR DEFAULT FILE ICON
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_FILE_PIC_TITLE','Standaard plaatje voor Downloads:');
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_FILE_PIC_DESC','Selecteer hier een symbool, dat automatisch aan Downlaods wordt toegewezen. Het symbool wordt hierboven weergegeven.');

// FOR MISSING NEW MINIPICS
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_PRICE','Prijs');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_FILESIZE','Bestandsgrootte');

// FOR DATAFIELDS IN  DOWNLOAD DETAILVIEW
DEFINE('_JLIST_FE_DETAILS_CREATED_BY_TITLE','Created by');
DEFINE('_JLIST_FE_DETAILS_MODIFIED_BY_TITLE','Modified by');
DEFINE('_JLIST_FE_DETAILS_MODIFIED_DATE_TITLE','Changed at');

// FOR EXTERN FILES -  USER INFO IF CHECKBOXES ACTIVE
// PLEASE USE NOT SPECIAL CHARS e.g. " ' & ...
DEFINE('_JLIST_FRONTEND_EXTERN_FILE_USER_INFO','This file needs to be downloaded separately, as it is located on another server. Therefore this file cannot been included in a grouped download.');DEFINE('_JLIST_FRONTEND_EXTERN_FILE_USER_INFO','This file needs to be downloaded separately, as it is located on another server. Therefore this file cannot been included in a grouped download.');

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
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_DOWNLOAD_TEMPLATE_DESC','Here you can specify the layout of the <b>E-Mail</b>, which (if activates) is dispatched after each download to the address specified above. HTML code as well as arbitrary text can be inserted<br /><br />Available place-holder:<br />{file_list} {ip_address} {date_time} {user_name} {user_group}');
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
DEFINE('_JLIST_BACKEND_SETTINGS_UPD_DESC','Indicate here the number of days, which a Download is to be considered as “updated”. Behind the Download title the symbol is then indicated. As updated a Download is considered after each change to it. With 0 no symbol is indicated.');

// FOR NEW OPTION - LOAD FILE IN BROWSER - NOT DOWNLOAD
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_VIEW_FILE_TYPES','Which file types are to be opened in the Browser');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_VIEW_FILE_TYPES_DESC','Indicate the file types, which not to be offered as Download. These files are opened in a new browser to the opinion. Between each option you need a (,) separator. Example: html,htm,txt,pdf,doc,jpg,jpeg,png,gif');

//NEW FRONTEND PIC UPLOAD FIELD
DEFINE('_JLIST_FRONTEND_UPLOAD_PIC_FILETITLE','Screenshot:');
DEFINE('_JLIST_FRONTEND_UPLOAD_PIC_ALLOWED_FILES','Permitted file types:');

// NEW FILTER OPTION IN FILES LIST - BACKEND
DEFINE('_JLIST_BACKEND_FILESLIST_FILTER_PUBLISHED','Published');
DEFINE('_JLIST_BACKEND_FILESLIST_FILTER_UNPUBLISHED','Unpublished');

// NEW INFO WHEN USING LIGHTBOX PLACEHOLDER
DEFINE('_JLIST_BACKEND_TEMPEDIT_INFO_LIGHTBOX','When you will use the Screenshots with the Lightbox Function, you must set the placeholder with this syntax: a href="{screenshot}" rel="lightbox" > <img src="{thumbnail}" align="right" /></a>');  

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