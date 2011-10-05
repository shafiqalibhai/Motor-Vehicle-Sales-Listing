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
//
// Norwegian translation by: Erik Spieler
// erik@spieler.no
//
*/

(defined('_VALID_MOS') OR defined('_JEXEC')) or die('Restricted access');

// Components Infos
//-----------------------------------------------------------
// It is not allowed to change or delete this parameters !!!
DEFINE('_JLIST_PRODUCT','jDownloads');
DEFINE('_JLIST_VERSION','<b>jDownloads Versjon 1.2 stabil</b><br /><br />Vennligst gi tilbakemeldinger p� jDownloads i forumet p�: <a href="http://www.JoomlaAddons.de">www.JoomlaAddons.de</a>.');

DEFINE('_JLIST_PRODUCT_FOOTER','JDownloads');
DEFINE('_JLIST_VERSION_FOOTER','');

// end component infos
//-----------------------------------------------------------

// Installation data

DEFINE('_JLIST_INSTALL_0','Innstallasjonsinformasjon:');
DEFINE('_JLIST_INSTALL_1','Alle konfigurasjonsfiler finnes i databasen!');
DEFINE('_JLIST_INSTALL_2','Konfigurasjonsfilene er oppdatert.');
DEFINE('_JLIST_INSTALL_3','Alle standardlayouter finnes i databasen!.');
DEFINE('_JLIST_INSTALL_4','Standardlayouter lagret til databasen!');
DEFINE('_JLIST_INSTALL_5','Alle standardlisens(er) finnes i databaseen!');
DEFINE('_JLIST_INSTALL_6','Lagret standardlisens(er) til databasen!');
DEFINE('_JLIST_INSTALL_7','Opplastingsmappen finnes og er skrivbar!');
DEFINE('_JLIST_INSTALL_8','Opplastingsmappen finnes, men er IKKE skrivbar. Sett CHMOD til 0777 for denne mappen. jDownloads vil ikke kj�re f�r dette er gjort!');
DEFINE('_JLIST_INSTALL_9','Opplastingsmappen opprettet. Skrivbar: CHMOD 0777 - OK.');
DEFINE('_JLIST_INSTALL_10','Feil: Opplastingsmappen kunne ikke opprettes!<br />Opprett den selv via FTP og sett CHMOD til 0777. jDownloads vil ikke kj�re f�r dette er gjort!');
DEFINE('_JLIST_INSTALL_11','Temp-mappen for .zip eksisterer og er skrivbar!');
DEFINE('_JLIST_INSTALL_12','Opplastingsmappen /downloads/tempzipfiles eksisterer men er IKKE skrivbar. Sett CHMOD til 0777 for denne mappen. jDownloads vil ikke kj�re f�r dette er gjort!');
DEFINE('_JLIST_INSTALL_13','Mappen /downloads/tempzipfiles opprettet. Skrivbar: CHMOD 0777 - OK.');
DEFINE('_JLIST_INSTALL_14','Feil: .zip mappen /downloads/tempzipfiles kunne ikke opprettes!<br />Opprett den selv via FTP og sett CHMOD til 0777.<br />jDownloads vil ikke kj�re f�r dette er gjort!');
DEFINE('_JLIST_INSTALL_15','Innstallasjonen er fullf�rt!');
DEFINE('_JLIST_INSTALL_16','Start jDownloads!');

DEFINE('_JLIST_INSTALL_DB_TIP','Info: Hvis du avinnstallerer jDownloads vil ikke databasetabellene bli slettet. Hvis du p� et senere tidpunkt �nsker � innstallere jDownloads igjen, vil de eksisterende tabellene bli benyttet.');
DEFINE('_JLIST_INSTALL_TITLE_FOR_DEFAULT_LAYOUTS','Standard');

//FRONTEND

DEFINE('_JLIST_FILE_NOT_FOUND','Den forespurte filen ble ikke funnet. Kontakt webmaster.');
DEFINE('_JLIST_LINKTEXT_VIEW_FILE_TYPES','Start nedlasting<br />(vises i nytt vindu)');
DEFINE('_JLIST_LINKTEXT_ZIP','Start nedlasting');
DEFINE('_JLIST_LINKTEXT_DOWNLOAD_URL','Last ned');
DEFINE('_JLIST_LINKTEXT_HOME','Hjem');
DEFINE('_JLIST_DEL_ZIP_ADMIN_INFO','<br />Admin info: en feil oppstod under sletting av midlertidige zip-filer, eller fil eksisterer ikke!');
DEFINE('_JLIST_FORM_BUTTON_TEXT','Fortsett');
DEFINE('_JLIST_EMPTY_CAT_TEXT','Denne kategorien inneholder ingen filer.<br /><br />');
DEFINE('_JLIST_MAIL_DOWNLOADER_NAME_VISITOR','Bes�kende');
DEFINE('_JLIST_MAIL_DOWNLOADER_GROUP','Gjest');
DEFINE('_JLIST_MAILSEND_ERROR','En feil oppstod under sending av denne e-posten!');
DEFINE('_JLIST_FRONTEND_COUNT_SUBCATS','Underkategorier:');
DEFINE('_JLIST_FRONTEND_COUNT_FILES','Antall filer:');
DEFINE('_JLIST_FRONTEND_HOMEPAGE','Hjemmeside');
DEFINE('_JLIST_FRONTEND_BACK_BUTTON','Tilbake');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_DATE','Dato');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_LICENCE','Lisens');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_AUTHOR','Forfatter');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_WEBSITE','Nettsted');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_SYSTEM','System');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_LANGUAGE','Spr�k');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_DOWNLOAD','Last ned');
DEFINE('_JLIST_FRONTEND_VERSION_TITLE','Versjon: ');
DEFINE('_JLIST_FRONTEND_CAT_ACCESS_REGGED','Du m� v�re innlogget for � kunne laste ned filer fra denne kategorien. Hvis du er registrert bruker, vennligst logg inn. <br /><br />');

//BACKEND TOOLBAR
DEFINE('_JLIST_BACKEND_COMPONENT_NAME','JDownloads');
DEFINE('_JLIST_BACKEND_TOOLBAR_MAIN','Hjem');
DEFINE('_JLIST_BACKEND_TOOLBAR_EDIT','Rediger');
DEFINE('_JLIST_BACKEND_TOOLBAR_REMOVE','Slett');
DEFINE('_JLIST_BACKEND_TOOLBAR_CLOSE','Lukk');
DEFINE('_JLIST_BACKEND_TOOLBAR_SUBMAIN','Layouter');

//BACKEND CPANEL
DEFINE('_JLIST_BACKEND_CPANEL_FILES','Filer/oppf�ringer');
DEFINE('_JLIST_BACKEND_CPANEL_CATEGORIES','Kategorier');
DEFINE('_JLIST_BACKEND_CPANEL_LICENSE','Lisenser');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES','Layout administrasjon');
DEFINE('_JLIST_BACKEND_CPANEL_BACKUP','Lag backup');
DEFINE('_JLIST_BACKEND_CPANEL_SETTINGS','Konfigurasjon');
DEFINE('_JLIST_BACKEND_CPANEL_RESTORE','Gjenopprett fra backup');
DEFINE('_JLIST_BACKEND_CPANEL_INFO','Brukervilk�r');
DEFINE('_JLIST_BACKEND_CPANEL_SUPPORT','Brukerst�tte');

// RESULTS FROM AUTOCHECKFILES OPTION
DEFINE('_JLIST_BACKEND_AUTOCHECK_TITLE','Status p� autosjekk av systemet:');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NEW_FILES','Nye filer ble funnet og er lagt inn i filh�ndteringssystemet!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_MISSING_FILES','Fil(ene) ble ikke funnet, og kan ikke vises til brukerne lenger!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NO_NEW_FILES','Ingen nye filer ble funnet!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NO_MISSING_FILES','Alle publiserte oppf�ringer eksisterer!');

DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_STATUS','Status');
DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_2','Versjon');
DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_3','Aktivitetslogg');

// STATUS
DEFINE('_JLIST_BACKEND_PANEL_STATUS_OFFLINE_HEADER','Status filh�ndteringssystem');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_TITEL','<font color="#990000"><b><big>Status p� filh�ndteringssystem:</big></b></font>');

DEFINE('_JLIST_BACKEND_PANEL_STATUS_DESC_ONLINE','Hvis ONLINE, er filh�ndteringssystemet �pent for bes�kende.');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_ONLINE','<font color="green"><b><big> ONLINE!</big></b></font>');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_OFFLINE','<font color="red"><b><big> OFFLINE!</big></b></font>');

// OFFLINE
DEFINE('_JLIST_BACKEND_OFFLINE_OPTION_TITLE','Aktiver vedlikehold?');
DEFINE('_JLIST_BACKEND_OFFLINE_OPTION_DESC','Med dette valget setter du hele filh�ndteringssystemet "offline". Bes�kende vil se teksten under. Kun innloggede brukere med tilgangsniv� "forfatter" har vanlig tilgang.');
DEFINE('_JLIST_BACKEND_OFFLINE_MESSAGE_TITLE','Beskjed til bes�kende');
DEFINE('_JLIST_BACKEND_OFFLINE_MESSAGE_DEFAULT','<table width="70%" align="center" cellspacing="0" cellpadding="20" border="1"><tr><td align="center">
<h3>Vi jobber for �yeblikket med vedlikehold av filh�ndteringssystemet.<br /><br />Vennligst fors�k igjen om noen minutter.</h3><br /><img src="components/com_jdownloads/images/offline.png" />
</td></tr></table>');
DEFINE('_JLIST_BACKEND_OFFLINE_MESSAGE_DESC','Legg inn tekst for visning hvis systemet fremdeles er i vedlikeholdsmodus.');
DEFINE('_JLIST_BACKEND_OFFLINE_ADMIN_MESSAGE_TEXT','<div align="center"><b><h3>Filh�ndteringssystemet er: OFFLINE!</h3></b></div>');

//BACKEND SETTINGS
DEFINE('_JLIST_BACKEND_SETTINGS','Konfigurasjon');
DEFINE('_JLIST_BACKEND_SETTINGS_SAVED','Konfigurasjon lagret');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_HEAD','E-post konfigurasjon ');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_FILES_HEAD','Oppf�ringskonfigurasjon');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_FRONTEND_HEAD','Frontend-konfigurasjon');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_BACKEND_HEAD','Backend-konfigurasjon');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_SECURITY_HEAD','Sikkerhetsinnstillinger');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_IMAGES_HEAD','Bilde/ikon innstillinger');

DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_DOWNLOADS','Oppf�ringer');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_FRONTEND','Frontend');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_BACKEND','Backend');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_IMAGES','Ikoner');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_SECURITY','Sikkerhet');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_EMAIL','E-post');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_SONSTIGE','Annet');

DEFINE('_JLIST_BACKEND_SETTINGS_DATETIME','Dato-tid format');
DEFINE('_JLIST_BACKEND_SETTINGS_DATETIME_DESC','Info om formater: <a href="http://www.php.net/manual/de/function.strftime.php" target="_blank">www.php.net</a>');

DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIR','Opplastingsmappe');
DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIR_DESC','Hovedmappe for opplasting av filer. Denne mappen og <b>alle</b> undermapper m� v�re skrivbare!');

DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIRTEMP','Midlertidig mappe');
DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIRTEMP_DESC','Denne mappen m� eksistere og v�re skrivbar! Den inneholder de midlertidig genererte .zip-filene (slettes etter nedlasting).');

DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_1','Standard');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_2','Nyeste f�rst');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_3','Nyeste sist');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_4','Alfabetisk');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_5','Omvendt alfabetisk');

// E-Mail config
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_OPTION_DESC','Hvis denne er aktivert, blir en e-post sendt til den spesifiserte e-post adressen etter hver nedlasting.');
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_OPTION','Aktiver e-post?');

DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_DESC','E-post adresse for nedlastingsinformasjon.');
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO','E-post adresse');

DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_HTML_DESC','Hvis dette er valgt, blir e-post sendt i HTML-format. Hvis ikke benyttes rentekst.');
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_HTML','Bruk HTML-formatering?');

DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_BETREFF_DESC','Tekst for e-postens emnefelt.');
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_BETREFF','Emne');

// View Frontend Config settings
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_VIEW_HEAD','Komponentens frontend visningsvalg');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_COMPO_TEXT','Komponentbeskrivelse');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_COMPO_TEXT_DESC','Tekst som vises <b>mellom</b> komponentens tittel og dens kategorier. Komponentens tittel genereres automatisk basert p� menynavn.<br /><br />CSS-klasser, HTML-kode og generell tekst kan inkluderes.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CHECKBOX_TEXT','Tekst for avkrysningsboks');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CHECKBOX_TEXT_DESC','Tekst som vises ved den f�rste avkrysningsboksen i listen.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SORTFILESORDER_TEXT','Sortering');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SORTFILESORDER_DESC','Sortering p� filene i frontend. Velg "Standard" for � bruke backends standardsortering.');

// View Images settings
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SHOW_MINIPICS','Vis ikoner?');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SHOW_MINIPICS_DESC','Hvis aktivert vises et ikon. Hvis deaktivert vises tekst.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_MINIPICS_SIZE','Pikselst�rrelse p� ikoner');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_MINIPICS_SIZE_DESC','Visningsst�rrelse p� informasjonssymbolene. Standard: 20');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CATPICS_SIZE','Pikselst�rrelse p� kategoriikoner');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CATPICS_SIZE_DESC','Visningsst�rrelse p� kategoriikonene. Du kan bruke dine egne ved � laste dem opp via FTP til undermappen: /catimages. Standard: 48');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FILEPICS_SIZE','Pikselst�rrelse p� filikoner');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FILEPICS_SIZE_DESC','Visningsst�rrelse p� filikoner. Du kan bruke dine egne ved � laste dem opp via FTP til undermappen: /fileimages. Standard: 32');

// View backend security settings
// to be translated
DEFINE('_JLIST_BACKEND_SETTINGS_MAIL_SECURITY_DESC','Hvis JA, vil ikke e-postadressene vises i rentekst. Dette for � unng� Spambotter. Husk at dersom Javascript er deaktivert i nettleseren vil ikke lenken vises. Anbefalt valg: JA.');
//
DEFINE('_JLIST_BACKEND_SETTINGS_MAIL_SECURITY_TITEL','Skjul e-post adresser?');

// View backend Config settings
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_LAYOUTS','Bruk WYSIWYG-editor for layoutbeskrivelser');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_LAYOUTS_DESC','Hvis dette valget er aktivert, vil forh�ndsdefinert WYSIWYG-editor bli brukt for redigering av beskrivelsen til layouter. Hvis WYSIWYG er deaktivert, vil en enkel tekstboks bli vist.');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_FILES','Bruk WYSIWYG-editor for filbeskrivelser');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_FILES_DESC','Hvis dette valget er aktivert, vil forh�ndsdefinert WYSIWYG-editor bli brukt for redigering av beskrivelsen til tilgjengelige filer. Hvis WYSIWYG er deaktivert, vil en enkel tekstboks bli vist.');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_CATS','Bruk WYSIWYG-editor for kategoribeskrivelser');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_CATS_DESC','Hvis dette valget er aktivert, vil forh�ndsdefinert WYSIWYG-editor bli brukt for redigering av kategoribeskrivelserr. Hvis WYSIWYG er deaktivert, vil en enkel tekstboks bli vist.');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_LICENSES','Bruk WYSIWYG-editor for lisenser');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_LICENSES_DESC','Hvis dette valget er aktivert, vil forh�ndsdefinert WYSIWYG-editor bli brukt for redigering av lisensbeskrivelser. Hvis WYSIWYG er deaktivert, vil en enkel tekstboks bli vist.');

DEFINE('_JLIST_BACKEND_SETTINGS_FILE_SYSTEM_LIST','Nedtrekksliste for "System"');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_SYSTEM_LIST_DESC','Her kan du legge til og fjerne valg som vises i nedtrekksmenyen for "system" i filredigeringsmenyen. Du m� bruke komma (,) mellom hver verdi du definerer her. <br /><br /><b>Viktig merknad:</b> For � unng� at "system" for filer allerede lagt inn endres, m� du legge til nye verdier p� slutten av listen. �nsker du likevel � legge inn ny(e) system(er) i midten av listen, m� du sjekke hver eneste oppf�ring og evt. oppdatere systemet i nedtrekkslisten.');

DEFINE('_JLIST_BACKEND_SETTINGS_FILE_LANGUAGE_LIST','Nedtrekksliste for "Spr�k"');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_LANGUAGE_LIST_DESC','er kan du legge til og fjerne valg som vises i nedtrekksmenyen for "spr�k" i filredigeringsmenyen. Du m� bruke komma (,) mellom hver verdi du definerer her. <br /><br /><b>Viktig merknad:</b> For � unng� at innlagt "spr�"k for filer allerede lagt inn, m� du legge til nye verdier p� slutten av listen. �nsker du likevel � legge inn ny(e) spr�k i midten av listen, m� du sjekke hver eneste oppf�ring og evt. oppdatere spr�ket i nedtrekkslisten');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_ZIPFILE_PREFIX_TEXT','Standard tittel prefiks for ZIP-filer');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_ZIPFILE_PREFIX_DESC','Hvis 2 eller flere filer �nskes lastet ned, pakkes de automatisk i en midlertidig ZIP-fil som s� lastes ned av brukeren. Navnet p� ZIP-filen best�r av den definerte prefiksen til venstre, og et tilfeldig nummer.');

// Templates Config Backend
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_HEAD','<b>Layouter definerer hvordan innhold vises i frontend</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_HEAD_INFO','<br />Flere standardlayouter er inkludert i innstallasjonen. Dissse kan skreddersys som �nsket, samtidig som nye layouter kan lages. For � forenkle prosessen kan du enten bruke forvalgt WYSIWYG verkt�y eller en enkel tekstboks.<br /><br />Hvis endringer utf�rt p� en av <b>standardlayoutene</b> gj�r at disse ikke vises ordentlig i frontend, kan disse rulles tilbake til orginalinnstillingene n�r som helst. For � gj�re dette, fjern <b>all tekst</b> i den respektive layoutens inndata felter og velg <b>Lagre</b>. Siden vil bli lagret med orginalinnholdet. <b>Advarsel:</b> Endringer allerede utf�rt vil bli tapt.<br /><br />Merk: Flere plassholdere benyttes i layouter (f.eks. <font color=darkred>{files}</font>). Plassholderene erstattes med innhold n�r nettsiden genereres.<br />');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS','Layout: Kategorier');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_DESC','Dette er hvordan <b>kategorier</b> vises i frontend. Hvis du var valgt <b>Vis hjemmesiden med kategorioversikt</b> i den globale konfigurasjonen, vil plassholdernene (variablene) {files} og {checkbox_top} kun bli brukt for � vise enkeltkategorier.<br /><br /><font color=red>{files} {form_hidden} {form_button} {checkbox_top}</font> variablene <font color=red>B�R IKKE</font> fjernes fra koden! Fjern kun plassholderen {checkbox_top} fra koden hvis {url_download} brukes i fillayouten. {files} plassholderen erstattes av data fra fillayouten. <br /><br />Tilgjengelige plassholdere:<br />{cat_title} {cat_description} {cat_pic} {files} {checkbox_top} {sum_subcats} {sum_files_cat}');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_INFO_TITLE','<b>Informasjon vedr�rende kategorilayout:</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_INFO_TEXT','<p>Dette er et grafisk eksempel p� frontend kategoribeskrivelse. Den r�de skillelinjen indikerer omr�det du kan endre utseende for. </p>');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES','Layout: Filer');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DESC','Dette er hvordan<b>filer</b> vises i frontend. <br />Tilgjengelige plassholdere:<br />{checkbox_list} {cat_id} {file_id} {file_title} {release} {pic_is_new} {pic_is_hot} {pic_is_updated} {thumbnail} {description} {link_to_details} {file_pic} {price_title} {price_value} {license_title} {license_text} {language_title} {language_text} {filesize_title} {filesize_value} {system_title} {system_text} {author_title} {author_text} {author_url_title} {author_url_text} {created_date_title} {created_date_value} {hits_title} {hits_value} {created_by_title} {created_by_value} {modified_by_title} {modified_by_value} {modified_date_title} {modified_date_value}'); // changed in 1.4 beta (2)
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_INFO_TITLE','<b>Informasjon vedr�rende fillayout:</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_INFO_TEXT','<p>Eksempel p� listevisning i frontend. Du kan endre visningsvalg i den r�de boksen.</p>');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL','Layout: Oppsummering / Start nedlasting');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL_DESC','Dette er hvordan <b>oppsummeringen</b> vises i frontend. En liste over valgte filer vises til brukeren f�r nedlastingen kan starte.<br />Her kan du endre visningen av denne oppsummeringen. CSS-klasser, HTML-kode og generell tekst kan brukes.<br /><br /><font color=red>{download_liste}</font> plassholderen <font color=red>B�R IKKE</font> fjernes fra koden!<br /><br />Tilgjengelige plassholdere:<br />{summary_pic} {title_text} {download_liste} {license_note} {download_link} {external_download_info}'); // changed in 1.4 beta (2)
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL_INFO_TITLE','<b>Informasjon vedr�rende oppsummeringslayout</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL_INFO_TEXT','<p>Dette er et grafisk eksempel p� denne sidens utseende i frontend. Den m�rker�de skillelinjen indikerer omr�det du kan endre utseende for. </p>');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_MAIL','Layout: E-post');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_MAIL_DESC','Her formaterer du <b>e-postene</b> som (dersom aktivert) blir sendt til e-postadressen spesifisert i konfigurasjonen etter hver nedlasting. HTML-kode og generell tekst kan brukes.<br /><br />Tilgjengelige plassholdere:<br /> {file_list} {ip_address} {date_time} {user_name} {user_group}');

//BACKEND CATSLIST
DEFINE('_JLIST_BACKEND_CATSLIST_TITLE_HEAD','Kategorier');
DEFINE('_JLIST_BACKEND_CATSLIST_SEARCH','S�k');
DEFINE('_JLIST_BACKEND_CATSLIST_SEARCH_LIMIT','Begrens');

DEFINE('_JLIST_BACKEND_CATSLIST_TITLE','kategori');
DEFINE('_JLIST_BACKEND_CATSLIST_PIC','Symbol');
DEFINE('_JLIST_BACKEND_CATSLIST_PUBLISHED','Publisert');
DEFINE('_JLIST_BACKEND_CATSLIST_LINK','Lenke');
DEFINE('_JLIST_BACKEND_CATSLIST_LINK_TEXT','Forh�ndsvis');
DEFINE('_JLIST_BACKEND_CATSLIST_READ','Les');
DEFINE('_JLIST_BACKEND_CATSLIST_DOWNLOAD','Last ned');
DEFINE('_JLIST_BACKEND_CATSLIST_ORDERING','Sortering');
DEFINE('_JLIST_BACKEND_CATSLIST_DEL',' Kategori(er) slettet.');

// access controll info
DEFINE('_JLIST_BACKEND_CATSLIST_ACCESS_ALL','ALLE');
DEFINE('_JLIST_BACKEND_CATSLIST_ACCESS_REGGED','Registrerte');
DEFINE('_JLIST_BACKEND_CATSLIST_ACCESS_ADMINS','Spesiell');

//BACKEND CATSEDIT
DEFINE('_JLIST_BACKEND_CATSEDIT_TITLE','Rediger kategori');
DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_TITLE','Kategorien m� ha en tittel');
DEFINE('_JLIST_BACKEND_CATSEDIT_SUC_PUBL',' Kategori(er) publisert.');
DEFINE('_JLIST_BACKEND_CATSEDIT_SUC_UNPUBL',' Kategori(er) avpublisert.');
DEFINE('_JLIST_BACKEND_CATSEDIT_SAVE_ERROR_DIR','Feil: kunne ikke endre mappenavn!');
DEFINE('_JLIST_BACKEND_CATSEDIT_EDIT','Rediger kategori');
DEFINE('_JLIST_BACKEND_CATSEDIT_ADD','Legg til kategori');
DEFINE('_JLIST_BACKEND_CATS_SAVEORDER','Ny sortering lagret');
DEFINE('_JLIST_BACKEND_CATS_USED','Denne kategorien redigeres av en annen administrator.');
DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_CAT_COPY','En feil oppstod under kopiering av kategorilisten.');

DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_DESCRIPTION','Kategoribeskrivelse');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_PIC_TEXT','Velg kategoriikon');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_PIC_PREVIEW','Forh�ndsvis ikon');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_PIC_DESC','valgt ikon kan vises med {cat_pic} i kategorilayouten.');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_TITLE','Sett tilgangsrettigheter');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_DESC','Rediger tilgangsrettigheter. Definer tilgangsrettigheter for kategorier, underkategorier, og tilh�rende filer. <b>Brukerrettigheter overf�res til alle kategorier/filer under den du redigerer.</b> Hvis du velger "Spesiell", kan "Forfattere" og h�yere lese og laste ned.');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_1','Uregistrerte brukere kan lese og laste ned');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_2','Registrerte og uregistrerte brukere kan lese og laste ned');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_3','Kun registrerte brukere kan lese og laste ned');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_4','Kun spesielle brukere kan lese og laste ned');

//BACKEND FILESLIST
DEFINE('_JLIST_BACKEND_FILESLIST_TITLE','Oppf�ringer');
DEFINE('_JLIST_BACKEND_FILESLIST_SEARCH','S�k');
DEFINE('_JLIST_BACKEND_FILESLIST_SEARCH_LIMIT','Begrens');
DEFINE('_JLIST_BACKEND_FILESLIST_CATS','Alle kategorier');
DEFINE('_JLIST_BACKEND_FILESLIST_NOCATS','Ingen kategori');
DEFINE('_JLIST_BACKEND_FILESLIST_FILE','Oppf�ringer');
DEFINE('_JLIST_BACKEND_FILESLIST_HITS','Antall nedlastinger');
DEFINE('_JLIST_BACKEND_FILESLIST_CAT','Kategori');
DEFINE('_JLIST_BACKEND_FILESLIST_RELEASE','Versjon');

DEFINE('_JLIST_BACKEND_FILESLIST_DESCRIPTION','Beskrivelse');
DEFINE('_JLIST_BACKEND_FILESLIST_DADDED','Dato');
DEFINE('_JLIST_BACKEND_FILESLIST_FILENAME','Filnavn');
DEFINE('_JLIST_BACKEND_FILESLIST_AUTHOR','Forfatter');
DEFINE('_JLIST_BACKEND_FILESLIST_PUBLISHED','Publisert');
DEFINE('_JLIST_BACKEND_FILESLIST_ORDERING','Sortering');
DEFINE('_JLIST_BACKEND_FILESLIST_DEL',' Oppf�ring(er) slettet');
DEFINE('_JLIST_BACKEND_FILES_SAVEORDER','Ny sortering lagret');
DEFINE('_JLIST_BACKEND_FILES_USED','Denne oppf�ringen redigeres av en annen administrator.');

//BACKEND FILESEDIT
DEFINE('_JLIST_BACKEND_FILESEDIT_TABTITLE_1','Basisinfo');
DEFINE('_JLIST_BACKEND_FILESEDIT_TABTITLE_2','Valgfri info');
DEFINE('_JLIST_BACKEND_FILESEDIT_TABTITLE_3','Filer');

DEFINE('_JLIST_BACKEND_FILESEDIT_TITLE','Rediger oppf�ring');
DEFINE('_JLIST_BACKEND_FILESEDIT_SENT_IN_FROM','Denne oppf�ringen var gjort tilgjengelig av: ');
DEFINE('_JLIST_BACKEND_FILESEDIT_SAVE','Oppf�ring lagret.');
DEFINE('_JLIST_BACKEND_FILESEDIT_EDIT','Rediger oppf�ring');
DEFINE('_JLIST_BACKEND_FILESEDIT_ADD','Legg til oppf�ring');

//DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_LIST_DESC','Velg fil for nedlasting fra serveren.');
DEFINE('_JLIST_BACKEND_FILESEDIT_ROOT_DIR_TITLE','Rot nedlastings (opplastings) mappe');

DEFINE('_JLIST_BACKEND_FILESEDIT_UPLOAD_DIR_LIST_INFO_1','Alle undermapper er skrivbare!');
DEFINE('_JLIST_BACKEND_FILESEDIT_UPLOAD_DIR_LIST_INFO_2','Undermapper <b>IKKE</b> skrivbare! Sjekk rettighetene p� serveren (FTP: sett CHMOD til 0777)');
DEFINE('_JLIST_BACKEND_FILESEDIT_CHECK_PERMISSIONS','Fil kunne ikke lastes opp. Sjekk rettighetene p� serveren (FTP: sett CHMOD til 0777)');

// language
DEFINE('_JLIST_BACKEND_FILESEDIT_LANGUAGE','Spr�k');
DEFINE('_JLIST_BACKEND_FILESEDIT_LANGUAGE_DEFAULT_LIST','Velg:, Norsk, Engelsk, Tysk, Fransk, Italiensk, Spansk');

// system
DEFINE('_JLIST_BACKEND_FILESEDIT_SYSTEM','System');
DEFINE('_JLIST_BACKEND_FILESEDIT_SYSTEM_DEFAULT_LIST','Velg:, Joomla 1.0, Joomla 1.5, Windows, Linux, Mac');

DEFINE('_JLIST_BACKEND_FILESEDIT_LICENSES_LIST','Velg lisens');
DEFINE('_JLIST_BACKEND_FILESEDIT_REMOVE_OK','oppf�ring(er) slettet.');
DEFINE('_JLIST_BACKEND_FILESEDIT_SUC_PUBL',' oppf�ring(er) publisert.');
DEFINE('_JLIST_BACKEND_FILESEDIT_SUC_UNPUBL',' oppf�ring(er) avpublisert.');

DEFINE('_JLIST_BACKEND_FILESEDIT_REQUIRES_INFO','Felt markert med <b><font color=red>*</font></b> m� fylles ut!');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_TITLE','Tittel <b><font color=red>*</font></b>');
DEFINE('_JLIST_BACKEND_FILESEDIT_DESCRIPTION','Beskrivelse');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FPIC_TEXT','Velg filikon');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FPIC_PREVIEW','Forh�ndsvis');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FPIC_DESC','valgt ikon kan vises over en plassholder.');

DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_CAT','Kategoriassosiasjon <b><font color=red>*</font></b>');
DEFINE('_JLIST_BACKEND_FILESEDIT_LICENSE','Lisens');
DEFINE('_JLIST_BACKEND_FILESEDIT_RELEASE','Versjon');
DEFINE('_JLIST_BACKEND_FILESEDIT_SIZE','St�rrelse');
DEFINE('_JLIST_BACKEND_FILESEDIT_SIZE_DESC','Hvis ikke definert, vil st�rrelsen bli satt automatisk');
DEFINE('_JLIST_BACKEND_FILESEDIT_DADDED','Dato og tid');
DEFINE('_JLIST_BACKEND_FILESEDIT_DADDED_DESC','Definer datoen i f�lgende format: <b>����-MM-DD T:mm:ss</b> eller bruk kalenderfunksjonen. Hvis utelatt, blir den n�v�rende dato/tid brukt.');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE','Velg fil for opplasting');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_DESC','Du kan spesifisere et navn p� filen du �nsker � legge p� server i dette feltet. Dette navnet blir brukt ved nedlasting.');

DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_INFO','N�v�rende tilegnet fil:');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_ADD_FROM_SERVER','En n�v�rende tilegnet fil:');

DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_ADD_FROM_SERVER_NO','Det er ikke tilegnet noen fil!');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_ADD_FROM_SERVER_LIST','Velg fil');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_REMOVE','<b>Slett tilegnet fil fra server</b>');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_HOME','Nettsted (med http://)');
DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR','Forfatter');
DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR_URL','Forfatterens URL eller e-post addresse');
DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR_URL_DESC','E-postadresser vil bli kryptert automatisk.');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD','ROT opplastingsmappe');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD_WRITABLE','Status: <font color=green><strong>SKRIVBAR</strong></font>');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD_NOTWRITABLE','Status: <font color=red><strong>IKKE SKRIVBAR</strong></font>');

DEFINE('_JLIST_BACKEND_FILESEDIT_URL_TEMP_WRITABLE','Status: <font color=green><strong>SKRIVBAR</strong></font>');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_TEMP_NOTWRITABLE','Status: <font color=red><strong>IKKE SKRIVBAR</strong></font>');

//BACKEND LICENSE LIST
DEFINE('_JLIST_BACKEND_LICLIST_TITLE_HEAD','Lisenser');
DEFINE('_JLIST_BACKEND_LICLIST_TITLE','Lisensnavn');
DEFINE('_JLIST_BACKEND_LICLIST_LINK','Lenke');
DEFINE('_JLIST_BACKEND_LICLIST_DEL',' Lisens(er) slettet');

//Backend LICENSE EDIT
DEFINE('_JLIST_BACKEND_LICEDIT_TITLE','Rediger lisens');
DEFINE('_JLIST_BACKEND_LICEDIT_ERROR_TITLE','En lisens m� ha et navn.');
DEFINE('_JLIST_BACKEND_LICEDIT_SAVE','Lisens lagret.');
DEFINE('_JLIST_BACKEND_LICEDIT_TEXT','Lisensnavn');
DEFINE('_JLIST_BACKEND_LICEDIT_EDIT','Rediger lisens');
DEFINE('_JLIST_BACKEND_LICEDIT_ADD','Legg til lisens');
DEFINE('_JLIST_BACKEND_LIC_USED','Denne lisensen redigeres av en annen administrator.');
DEFINE('_JLIST_BACKEND_LICEDIT_LIC_TITLE','Lisensnavn');
DEFINE('_JLIST_BACKEND_LICEDIT_LIC_URL','Lenke til lisens');
DEFINE('_JLIST_BACKEND_LICEDIT_LIC_DESCRIPTION','Lisensbeskrivelse');

//BACKEND TEMPLATES SUBMENU
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_NAME','Layoutadministrasjon');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_CATS','Kategorier');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_FILES','Filer');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_SUMMARY','Oppsummering');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_EMAIL','E-poster');
DEFINE('_JLIST_BACKEND_TEMPPANEL_TABTEXT_INFO','Informasjon');

// Backend TEMPLATES TEMPLATES TITLES
DEFINE('_JLIST_BACKEND_TEMPLIST_CATTITLE_HEAD','Kategorilayouter');
DEFINE('_JLIST_BACKEND_TEMPLIST_FILESTITLE_HEAD','Fillayouter');
DEFINE('_JLIST_BACKEND_TEMPLIST_SUMTITLE_HEAD','Oppsummeringslayouter');
DEFINE('_JLIST_BACKEND_TEMPLIST_MAILTITLE_HEAD','E-post layouter');

//BACKEND TEMPLATES LIST
DEFINE('_JLIST_BACKEND_TEMPLIST_MENU_TEXT_ACTIVE','Aktiver');
DEFINE('_JLIST_BACKEND_TEMPLIST_TITLE','Layout navn');
DEFINE('_JLIST_BACKEND_TEMPLIST_TYP','Layout type');
DEFINE('_JLIST_BACKEND_TEMPLIST_ACTIVE','Aktiv');
DEFINE('_JLIST_BACKEND_TEMPLIST_LOCKED','Standardlayout');
DEFINE('_JLIST_BACKEND_TEMPLIST_LOCKED_DESC','<b>Merk:</b> Standardlayouter er en vital del av jDownloads og kan ikke slettes. <br />Ved opprettelse av en ny layout, vil standardparametre v�re fyllt inn.');
DEFINE('_JLIST_BACKEND_TEMPLIST_DEL',' Layout(er) slettet');
DEFINE('_JLIST_BACKEND_TEMPLIST_ERROR_IS_LOCKED','Standardlayouter kan ikke slettes.');
DEFINE('_JLIST_BACKEND_TEMPLIST_ERROR_IS_ACTIVE','Aktive layouter kan ikke slettes.');

//Backend TEMPLATES EDIT
DEFINE('_JLIST_BACKEND_TEMPEDIT_TITLE','Rediger layout');
DEFINE('_JLIST_BACKEND_TEMPEDIT_ERROR_TITLE','Feil: En layout m� ha et navn.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_SAVE','Layout lagret.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_ACTIVE','Layout aktivert.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_EDIT','Rediger layout');
DEFINE('_JLIST_BACKEND_TEMPEDIT_ADD','Legg til layout');
DEFINE('_JLIST_BACKEND_TEMP_USED','Denne layouten redigeres av en annen administrator.');

DEFINE('_JLIST_BACKEND_TEMPEDIT_NAME','Navn');
DEFINE('_JLIST_BACKEND_TEMPEDIT_TYP','Type');
DEFINE('_JLIST_BACKEND_TEMPEDIT_TEXT','Layout');
DEFINE('_JLIST_BACKEND_TEMPEDIT_URL','Forh�ndsvis');

DEFINE('_JLIST_BACKEND_TEMPEDIT_NAME_DESCRIPTION','Gi en relevant tittel til denne layouten.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_TYP_DESCRIPTION','Velg relevant layouttype.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_TEXT_DESCRIPTION','Her velges layout for frontend visning.');

//Backend TEMPLATES TYPS
DEFINE('_JLIST_BACKEND_TEMP_TYP1','Kategorier');
DEFINE('_JLIST_BACKEND_TEMP_TYP2','Filer');
DEFINE('_JLIST_BACKEND_TEMP_TYP3','Oppsummering');
DEFINE('_JLIST_BACKEND_TEMP_TYP4','E-post');


//Backend Backup and Restore
DEFINE('_JLIST_BACKEND_RESTORE_TITLE_HEAD','Gjenopprett fra Backup');
DEFINE('_JLIST_BACKEND_RESTORE_FILE','Velg backupfil');
DEFINE('_JLIST_BACKEND_RESTORE_RUN','Gjenopprett databasen n�');
DEFINE('_JLIST_BACKEND_RESTORE_RUN_FINAL','Starte gjenopprettelse fra Backup?');
DEFINE('_JLIST_BACKEND_RESTORE_WARNING','Under gjenopprettelse fra backup, vil den aktive databasen erstattes av backupdatabasen.<br /><br />Det finnes ingen garanti for at ting fungerer akkurat som det skal etter fullf�rt gjenopprettelse. For �kt sikkerhet, er det anbefalt � ta en backup via FTP, f�r du fortsetter. Hvis en ny jDownloads versjon endrer aktive databasetabeller, vil en gjenopprettelse fors�ke � h�ndtere nye kategoristrukturer. Vennligst vent til gjenopprettelsen er fullf�rt f�r du forlater siden. Hvis databasestrukturen inneholder mange kategorier og filer, kan gjenopprettelsen ta flere minutter. Informasjon vedr�rende gjenopprettelsen finnes i gjenopprettelsesloggen"');
DEFINE('_JLIST_BACKEND_RESTORE_MSG','%s gjenopprettelsen ble fullf�rt med suksess.');
DEFINE('_JLIST_BACKEND_RESTORE_MSG_2','Se gjenopprettelsesinformasjon i loggboken: "Gjenopprettelseslogg".');

//Backend CSS & LANGUAGE EDIT
DEFINE('_JLIST_BACKEND_EDIT_CSS_TITLE','CSS-fil');
DEFINE('_JLIST_BACKEND_EDIT_LANG_TITLE','Spr�kfil');
DEFINE('_JLIST_BACKEND_EDIT_CSS_FIELD_TITLE','CSS-filens innhold');
DEFINE('_JLIST_BACKEND_EDIT_LANG_FIELD_TITLE','Spr�kfilens innhold');
DEFINE('_JLIST_BACKEND_EDIT_CSS_TITLE_EDIT','Rediger CSS-fil');
DEFINE('_JLIST_BACKEND_EDIT_LANG_TITLE_EDIT','Rediger spr�kfil');
DEFINE('_JLIST_BACKEND_EDIT_CSS_SAVED','CSS-fil lagret');
DEFINE('_JLIST_BACKEND_EDIT_LANG_SAVED','Spr�kfil lagret');
DEFINE('_JLIST_BACKEND_EDIT_LANG_WRITE_STATUS_TEXT','<big>Spr�kfilen er: ');
DEFINE('_JLIST_BACKEND_EDIT_CSS_WRITE_STATUS_TEXT','<big>CSS-filen er: ');
DEFINE('_JLIST_BACKEND_EDIT_LANG_CSS_FILE_WRITABLE_YES','<font color="green">SKRIVBAR!</font></big>');
DEFINE('_JLIST_BACKEND_EDIT_LANG_CSS_FILE_WRITABLE_NO','<font color="#990000">IKKE SKRIVBAR!</font></big>');
DEFINE('_JLIST_BACKEND_EDIT_LANG_CSS_FILE_WRITABLE_INFO','Filen m� v�re skrivbar for � kunne lagre nye valg. Det kan v�re at du m� endre rettighetene p� filen: CHMOD til 0777.');

// BACKEND OTHERS
DEFINE('_JLIST_FRONTEND_NOCAT','Ingen kategorier tilgjengelige enda!');
DEFINE('_JLIST_FRONTEND_NOFILES','Ingen oppf�ringer er tilgjengelige for denne kategorien!');

// Information text
DEFINE('_JLIST_BACKEND_INFO_TEXT_TITLE','jDownloads informasjon');
DEFINE('_JLIST_BACKEND_INFO_LICENSE_TITLE','<b>Lisensinformasjon:</b>');
DEFINE('_JLIST_BACKEND_INFO_LICENSE_TEXT','Denne komponenten er publisert under <a href="http://www.gnu.de/documents/gpl.de.html" target="_blank">GNU/GPL lisens</a>.<br />Ved � innstallere jDownloads aksepterer du vilk�rene i denne lisensen, i tillegg til de spesifisert under. Hvis du ikke godtar vilk�rene, skal du umiddelbart slette denne komponenten. <br /><br /><b>Tilleggsvilk�r:</b><br />Det er <b>ikke tillatt</b> � fjerne lenken fra <b>komponentens forside! Lenken m� ogs� v�re synlig. Hvis du �nsker � fjerne lenken, kontakt meg p�: <a href="mailto:info@joomlaaddons.de">info@joomlaaddons.de</a>.Skriv p� engelsk eller tysk!<br /><br />Denne komponenten er ogs� gjort tilgjengelig "as is" uten noen form for eksplisitt eller implisitt garanti! Ansvar aksepteres ikke for tap av data, osv. Ansvar for bruk av denne komponenten ligger hos den som innstallerte den.<br /><b>Takk til alle som har bidratt til utviklingen av jDownloads.</b>');

DEFINE('_JLIST_BACKEND_INFO_LINK_BACK','Tilbake');

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

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_MAIL_DEFAULT','Nedlastingsvarsel!<br />
<br />
F�lgende filer ble forespurt for nedlasting:<br />
{file_list}
<br /><br />
Dato og tid: {date_time}<br />
Navn: {user_name}<br />
Brukergruppe: {user_group}<br />
Brukers IP-Addresse: {ip_address}<br /><br />
Denne e-posten er automatisk generert!');

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
DEFINE('_JLIST_SETTINGS_LICENSE1_URL','http://www.gnu.no/licenses/gpl.html');

DEFINE('_JLIST_SETTINGS_LICENSE2_TITLE','GNU/LGPL');
DEFINE('_JLIST_SETTINGS_LICENSE2_TEXT','');
DEFINE('_JLIST_SETTINGS_LICENSE2_URL','http://www.gnu.no/licenses/lgpl.html');

DEFINE('_JLIST_SETTINGS_LICENSE3_TITLE','Donationware');
DEFINE('_JLIST_SETTINGS_LICENSE3_TEXT','');
DEFINE('_JLIST_SETTINGS_LICENSE3_URL','http://en.wikipedia.org/wiki/Donationware');

DEFINE('_JLIST_SETTINGS_LICENSE4_TITLE','Linkware');
DEFINE('_JLIST_SETTINGS_LICENSE4_TEXT','');
DEFINE('_JLIST_SETTINGS_LICENSE4_URL','http://en.wikipedia.org/wiki/Linkware');

DEFINE('_JLIST_SETTINGS_LICENSE5_TITLE','Charityware');
DEFINE('_JLIST_SETTINGS_LICENSE5_TEXT','');
DEFINE('_JLIST_SETTINGS_LICENSE5_URL','http://en.wikipedia.org/wiki/Charityware');

DEFINE('_JLIST_SETTINGS_LICENSE6_TITLE','Kommersiell lisens');
DEFINE('_JLIST_SETTINGS_LICENSE6_TEXT','');
DEFINE('_JLIST_SETTINGS_LICENSE6_URL','');

DEFINE('_JLIST_SETTINGS_LICENSE7_TITLE','Creative Commons');
DEFINE('_JLIST_SETTINGS_LICENSE7_TEXT','');
DEFINE('_JLIST_SETTINGS_LICENSE7_URL','http://en.wikipedia.org/wiki/Creative_Commons_licenses');

///////////////////////////////////////////////////////////////////////////////
// Install default config values - Please do not delete this !!!
// Installations Vorgabewerte f&uuml;r Konfigurationen - NICHT l&ouml;schen !!!
///////////////////////////////////////////////////////////////////////////////
DEFINE('_JLIST_SETTINGS_INSTALL_1','<b>Velg alle filer:</b>');
DEFINE('_JLIST_SETTINGS_INSTALL_2','');
DEFINE('_JLIST_SETTINGS_INSTALL_3','Varsel om full�rte nedlastinger');
DEFINE('_JLIST_SETTINGS_INSTALL_4','webmaster@dittnettsted.no');
DEFINE('_JLIST_SETTINGS_INSTALL_5','info@dittnettsted.no');


// ****************************************************************************
//		NEW IN VERSION 1.2 beta
// ****************************************************************************

// JAVASCRIPT (jdownloads.js) MESSAGES <<< Umlaute NICHT umwandeln !! >>>
DEFINE('_JLIST_JAVASCRIPT_TEXT_2','Det finnes ingen filer i denne kategorien.\\n');
DEFINE('_JLIST_JAVASCRIPT_TEXT_1','Vennligst velg minst en fil i en kategori f�r du trykker fortsett-knappen.');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_TEXT_TO_SHORT','S�keteksten er for kort, vennligst legg inn minst tre tegn!'); 
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_NO_OPTION','Du m� velge minst ett s�kevalg!'); 
// end javascript messages


DEFINE('_JLIST_INSTALL_1_2','Det finnes allerede data i databasen!');
DEFINE('_JLIST_INSTALL_2_2','Data ble endret, lagt til, eller finnes ikke!');
DEFINE('_JLIST_INSTALL_17','JoomFish innstallasjon ble funnet! jDownloads JoomFish definisjoner ble lagt til:');
//------------------------------------------
DEFINE('_JLIST_INSTALL_18','jDownloads JoomFish definisjoner ble kopiert til:');
DEFINE('_JLIST_INSTALL_19','Hvis du vil bruke disse definisjonene med JoomFish, kopier dem etter:');

DEFINE('_JLIST_FRONTEND_HOME_LINKTEXT','Oversikt');
DEFINE('_JLIST_FRONTEND_SUBTITLE_OVER_CATLIST','Oversikt');
DEFINE('_JLIST_FRONTEND_SUBTITLE_OVER_ONE_CAT','Kategori');
DEFINE('_JLIST_FRONTEND_SUBTITLE_OVER_DETAIL','Nedlastingsdetaljer');

// PAGENAVIGATION FRONTEND
DEFINE('_JLIST_FRONTEND_HEADER_PAGENAVI_PAGE_TEXT','Side:');
DEFINE('_JLIST_FRONTEND_HEADER_PAGENAVI_TO_TEXT','av');

DEFINE('_JLIST_BACKEND_FILESEDIT_PRICE','Pris');
DEFINE('_JLIST_BACKEND_FILESEDIT_PRICE_DESC','Tillegn pris og valuta.');

DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_4','Gjenopprettelseslogg');

//FRONTEND UPLOAD
DEFINE('_JLIST_FRONTEND_UPLOAD_ACCESS_ONLY_REGGED','Du m� v�re en registrert bruker for � kunne sende filer. Er du allerede registrert, vennligst logg inn f�rst. ');
DEFINE('_JLIST_FRONTEND_UPLOAD_ACCESS_ONLY_SPECIALS','Du har ikke n�dvendige rettigheter for � kunne sende filer.');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_NO_CATS_EXIST','Feil: Filer kan kun sendes dersom minst en kategori er opprettet og publisert.');    
DEFINE('_JLIST_FRONTEND_UPLOAD_LINKTEXT','Send fil');
DEFINE('_JLIST_FRONTEND_UPLOAD_PAGE_TITLE','Send fil');
DEFINE('_JLIST_FRONTEND_UPLOAD_FILENAME','Velg fil:');
DEFINE('_JLIST_FRONTEND_UPLOAD_FILENAME_BUTTON_TEXT_SEND','Send fil');
DEFINE('_JLIST_FRONTEND_UPLOAD_FILENAME_BUTTON_TEXT_CLEAR','Slett felter');
DEFINE('_JLIST_FRONTEND_UPLOAD_ALLOWED_FILETYPE','Tillatte filendelser');
DEFINE('_JLIST_FRONTEND_UPLOAD_ALLOWED_MAX_SIZE','Maksst�rrelse');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_NO_VALUE','Feil: Ikke alle felter ble fyllt inn!<br />Vennligst fyll inn p�krevde felter.');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_FILETYPE','Feil: Valgt filendelse st�ttes ikke!<br />Velg kun filer med tillatte filendelser.');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_FILESIZE','Feil: St�rrelsen p� filen din overstiger maksst�rrelse!');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_MOVE_FILE','Feil: En feil oppstod under overf�ring av fil til serveren!');
DEFINE('_JLIST_FRONTEND_UPLOAD_OK','Filen ble overf�rt til serveren!<br />Publisering m� godkjennes f�r den blir synlig.');

// FRONTEND UPLOAD FIELD TITLE
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_NAME','Ditt navn:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_MAIL','Din e-postadresse:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_TITLE_FILE','Tittel:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_PRICE','Pris:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_DESC_FILE','Kort beskrivelse:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_DESC_FILE_LONG','Lang beskrivelse:');    
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_AUTHOR','Forfatter:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_AUTHOR_URL','Forfatterens nettsted:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_LIZENZ','Lisens:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_VERSION','Versjon:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_LISTBOXES','Velg:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_CATEGORY','Kategori:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_LANGUAGE','Spr�k:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_SYSTEM','System:');
DEFINE('_JLIST_FRONTEND_UPLOAD_SYMBOL_TEXT','P�krevd felt');

//FRONTEND SEARCH
DEFINE('_JLIST_FRONTEND_SEARCH_LINKTEXT','S�k filh�ndteringssystyem');

// AUTOCHECK DOWNLOADS
DEFINE('_JLIST_BACKEND_AUTOCHECK_NEW_CATS','nye mapper ble funnet og lagt til som nye kategorier!!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_MISSING_CATS','Kategorimapper finnes ikke lenger. Av den grunn ble ikke kategoriene publisert!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NO_NEW_CATS','Ny mappe ble ikke funnet!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NO_MISSING_CATS','Alle publiserte kategorimappene eksisterer!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_LOG_TITLE','Siste interne beskjeder (utf�rte aksjoner):');
DEFINE('_JLIST_BACKEND_AUTOCHECK_LOG_TAB_TITLE','Siste interne beskjeder (aksjoner) under overv�king av nedlastingsmappene'); 
DEFINE('_JLIST_BACKEND_AUTOCHECK_REFRESH_MESSAGE','Du m� oppdatere siden for � se endringene!'); 

DEFINE('_JLIST_BACKEND_RESTORE_LOG_TAB_TITLE','Resultat av siste gjenopprettelse fra backup'); 

DEFINE('_JLIST_BACKEND_PANEL_STATUS_DESC_OFFLINE','Vedlikeholdsmodus er aktivert! Av den grunn kan ikke systemet n�es av normale brukere! Systemet kan fremdeles n�es av brukere med tilgangsniv� "Forfatter" eller h�yere.');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_DOWNLOADS_HEADER','Systemstatus');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_DOWNLOADS_OFF_DESC','Automatisk overv�king av nedlastingsmappene er deaktivert!');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_VERSION_HEADER','Jdownloads versjonsinfo');

DEFINE('_JLIST_BACKEND_SETTINGS_DEL_TEMPFILE_TIME','Forsinkelse (i minutter) for sletting av midlertidige ZIP-filer');
DEFINE('_JLIST_BACKEND_SETTINGS_DEL_TEMPFILE_TIME_DESC','Indiker en verdi i minutter. Etter dette antall minutter er passert vil midlertidige ZIP-filer genereret ved nedlasting av flere filer som en ZIP-fil bli slettet fra serveren. Hvis du har mange store filer som tilbys for nedlasting, b�r du sette denne verdien h�yere. Standard: 20 (minutter).');

DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_FRONTEND_HEAD_UPLOAD','Konfigurasjon for frontend opplasting');
DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIR_RENAME_ERROR','FEIL: Rotmappen for nedlastninger kunne ikke gis nytt navn!');
DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIR_RENAME_OK',' - Rotmappen for nedlastninger har f�tt nytt navn!');

DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO','Overv�kning av nedlastningsmapper? ');
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_DESC','Hvis Ja, blir alle mapper overv�ket for endringer, og databasen oppdateres automatisk. Mapper og filer overf�rt via FTP blir automatisk lagt til i kategori og nedlatningstabellene. Hvis filer og kategorier ikke blir funnet av overv�kningen, blir de satt til: <b>Ikke publisert</b >.<b>Standard: JA.</b>');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_USE_CHECKBOX_INFO','<b>Merk:</b> Valg for avkrysningsbokser ifm. nedlastinger er definert i fillayouten!');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_USE_SYMBOLE_INFO','<b>Merk:</b> Valg for mini-ikoner ifm. nedlastinger er definert i fillayouten!');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FILES_PER_SIDE','Antall oppf�ringer pr. side');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FILES_PER_SIDE_DESC','Legg inn hvor mange kategorier/oppf�ringer som skal vises pr. side i frontend.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_HEADER_TITLE','jDownloads sitt navn');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_HEADER_DESC','Legg inn tittelen som vis vises i frontend som jDownloads sitt navn, f.eks. "Dokumenth�ndteringssystem" eller "Filbibliotek".');

// FRONTEND UPLOAD CONFIG
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACTIVE','Frontend opplasting aktivering:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACTIVE_DESC','Hvis aktivert, vil brukergruppen definert under kunne laste opp dokumenter via et skjema fra frontend.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_PERMISSIONS','Hvem kan laste opp filer:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_PERMISSIONS_DESC','Her kan du definere hvem som har lov til � laste opp filer. "Spesiell" gir kun brukere med tilgangsniv� forfatter eller h�yere mulighet til � laste opp.');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACCESS_ALL','Alle');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACCESS_REGGED','Registrert');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACCESS_ADMINS','Spesiell');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILETYPES','Tillatte filendelser:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILETYPES_DESC','Definer hvilke filendelser som er tillatt for opplasting. Komma (,) brukes mellom hver filendelse.');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILESIZE','Makssst�rrelse i KB:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILESIZE_DESC','Definer makst�rrelse p� sendte filer i KB (1024 Kb = 1 Mb). Forh�ndsdefinert verdi: 2048.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FORM_TEXT','Tekst i opplastningsskjema:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FORM_TEXT_DESC','Her definerer du utseendet (innhold og format) p� opplastningsskjemaet. Plassholderen: {form} vil erstattes av selve skjemaet ved visning i frontend. Plassholderen kan ikke slettes!');

// Platzhalter {form} NICHT �NDERN ODER L�SCHEN !!!
// DO NOT DELETE, EDIT OR TRANSLATE: {form} !!! 

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FORM_TEXT_LAYOUT','Dette skjemaet gir deg mulighet til � laste opp en fil til serveren. Alle felt med tilh�rende symbol m� fylles ut. Ditt navn eller e-post adresse vil aldri bli formidlet til 3.part, og brukes kun internt av kontroll- og valideringshensyn.<br />
{form}<br />');

DEFINE('_JLIST_BACKEND_TEMPLIST_DEL_QUEST','Slett layout(er)?');
DEFINE('_JLIST_BACKEND_LICLIST_DEL_QUEST','Slett lisens(er)?');

DEFINE('_JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD_STATUS_DESC','Her kan du se konfigurasjonsstatusen for opplastings-rotmappen. Hvis den ikke er skrivbar, sjekk tilgangsrettighetene via FTP. CHMOD m� settes til 0777.');

DEFINE('_JLIST_BACKEND_FILESEDIT_HITS','Antall fullf�rte nedlastninger');
DEFINE('_JLIST_BACKEND_FILESEDIT_HITS_DESC','Nedlastningstelleren kan endres eller tilbakestilles herfra');

DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_CAT_DESC','Du m� tilegne en kategori til filen. Velg en kategori fra listen. Ved endring av kategori p� et senere tidspunkt, flyttes filen til mappen for valgt kategori.');

DEFINE('_JLIST_BACKEND_FILESEDIT_DESCRIPTION_KURZ','Kort beskrivelse');
DEFINE('_JLIST_BACKEND_FILESEDIT_DESCRIPTION_LONG','Lang beskrivelse');
DEFINE('_JLIST_BACKEND_FILESEDIT_EDITOR_INFO','Du kan bestemme om du vil bruke forvalgt WYSIWYG-editor eller en tekstboks ved � g� inn i konfigurasjonsmenyen.');
DEFINE('_JLIST_BACKEND_FILESEDIT_SENT_IN_FROM_STATUS','Status: ');
DEFINE('_JLIST_BACKEND_FILESEDIT_SENT_IN_FROM_EMAIL','E-post adresse: ');
DEFINE('_JLIST_BACKEND_FILESEDIT_ERROR_TITLE','Feil: Oppf�ringen m� ha en tittel!');
DEFINE('_JLIST_BACKEND_FILESEDIT_CATLIST_ERROR','feil: Oppf�ringen m� tilegnes en kategori!');
DEFINE('_JLIST_BACKEND_FILESEDIT_SAVE_MOVEFILE_ERROR',' - Feil: Oppf�ringen kunne ikke flyttes!');
DEFINE('_JLIST_BACKEND_FILESEDIT_SAVE_MOVEFILE_OK',' - Oppf�ringen ble flyttet!');

DEFINE('_JLIST_BE_NO_PUBL_FILES','Oppf�ringer som ikke er tilegnet noen kategori kan ikke publiseres!');
DEFINE('_JLIST_BACKEND_FILESLIST_DEL_QUEST','Slett oppf�ring?');
DEFINE('_JLIST_BACKEND_FILESLIST_DESCRIPTION_SHORT','Beskrivelse (kort)');
DEFINE('_JLIST_BACKEND_FILESLIST_PIC','Ikon');
DEFINE('_JLIST_BACKEND_FILESLIST_DEL_FILES_OPTION','<font color=#990000>Slett assosiert fil fra server ved sletting av nedlastingsinformasjon:</font>');

DEFINE('_JLIST_BACKEND_FILESLIST_DEL_FILES_OPTION_TOOLTIP','Hvis JA, blir ogs� filen p� serveren slettet og ikke bare oppf�ringen! Hvis filen ikke slettes og overv�kning av filmappenen er aktivert, s� blir filen automatisk lagt til som en ny oppf�ring !<br /><b>Anbefalt valg: JA</b >.');
DEFINE('_JLIST_BACKEND_FILESEDIT_DEL_FILES_OK',' - Assosiert(e) fil(er) slettet.');
DEFINE('_JLIST_BACKEND_FILESEDIT_DEL_FILES_ERROR',' - Assosiert(e) fil(er) ikke slettet, da de ikke ble funnet.');
DEFINE('_JLIST_BACKEND_FILESLIST_FILE_ID','ID');

DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_CAT_DEL_AFTER_COPY','En feil oppstod under sletting av gammel kategorimappe');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_TITLE','Kategoritittel<b><font color=red>*</font></b>');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_TITLE_DESC','Kategoriidentifikasjon. For hver kategori opprettes en mappe basert p� tittelen men uten spesielle tegn? Unntak: <b>" - _ . , " </b>og mellomrom.');
DEFINE('_JLIST_BACKEND_CATSEDIT_ROOT_CAT_LISTBOX','Hovedkategori');
DEFINE('_JLIST_BACKEND_CATSEDIT_ROOT_CAT_LISTBOX_NEW','Ny hovedkategori');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_TITLE','Kategoritilh�righet');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_TITLE_NEW','Ny kategori opprettet i / som <b><font color=red>*</font></b>');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_DESC_NEW','Hvis en ny hovedkategori skal opprettes, velg "Hovedkategori". Hvis den nye kategorien skal tjene som underkategori av en eksisterende en, velg den overordnede kategorien. Den nye kategorien blir da lagt under denne. Den hierarkiske inndelingen kan endres p� et senere tidspunkt dersom �nskelig.');

DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_DESC','Hvis du �nsker � flytte en kategori, merk den kategorien du �nsker skal tjene som overkategori. Hvis du �nsker at en underkategori skal tjene som en hovedkategori, velg da "Hovedkategori" fra listen.<br /><br /><b>Merk:</b> 
Ved lagring blir mappen p� serveren flyttet automatisk. Hvis kategorien ogs� inneholder underkategorier, blir disse ogs� flyttet slik at strukturen opperettholdes. For � bevare systemets integritet, vil alle kategorier l�ses n�r en annen redigeres!');
DEFINE('_JLIST_BACKEND_CATSEDIT_SAVE','Kategori lagret.');
DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_TITLE_CHARS_NOT_ALLOWED','Feil: Tittelen inneholder ikke-tillatte tegn!');
DEFINE('_JLIST_BACKEND_CATSLIST_DEL_QUEST','Slett kategori(er)?');
DEFINE('_JLIST_BACKEND_CATSLIST_CATID','ID');
DEFINE('_JLIST_BACKEND_CATSLIST_PATH','Mappe');

// BACKEND CATS DELETE
DEFINE('_JLIST_BE_NO_DEL_SUBCATS_EXISTS','Kategorien kan ikke slettes da det finnes underkategorier. Disse m� evt. slettes f�rst!');
DEFINE('_JLIST_BE_NO_DEL_FILES_EXISTS','Kategorien kan ikke slettes da den fremdeles inneholder filer!');
DEFINE('_JLIST_BE_DEL_CATS_DIRS_OK',' - Mappen ble slettet!');
DEFINE('_JLIST_BE_DEL_CATS_DIRS_ERROR',' - En feil oppstod under sletting av mappen!');

DEFINE('_JLIST_BACKEND_NO_SELECT_ACTION','Du m� velge en kategori fra listen!');

DEFINE('_JLIST_BE_SETTINGS_FILES_PER_SIDE_BE_TITLE','Hvor mange linjer i listevisning?');
DEFINE('_JLIST_BE_SETTINGS_FILES_PER_SIDE_BE_DESC','Her definerer du hvor mange linjer som skal vises i listevisning backend.');

DEFINE('_JLIST_UPLOAD_MAX_FILESIZE_INFO_TITLE','Maksst�rrelse som definert i konfigurasjonsfilen php.ini:');

DEFINE('_JLIST_BACKEND_TEMPLATE_ACTIVE_ERROR','Kun EN layout kan aktiveres!');
DEFINE('_JLIST_AUTO_FILE_CHECK_IMPORT_BY','Autoimporter');          
DEFINE('_JLIST_AUTO_FILE_CHECK_ADDED',   'Oppf�ring lagt til    ');
DEFINE('_JLIST_AUTO_FILE_CHECK_DISABLED','Oppf�ring ble ikke funnet      ');
DEFINE('_JLIST_AUTO_CAT_CHECK_ADDED',    'Kategori lagt til');
DEFINE('_JLIST_AUTO_CAT_CHECK_DISABLED', 'Kategori ble ikke funnet  ');

// MESSAGES AFTER CHECK FILES AND DIRS WHEN UPDATED FROM 1.1 alpha
DEFINE('_JLIST_CHECK_CATS_TITEL1','Du har oppdatert din gamle jDownloads versjon til 1.2');     
DEFINE('_JLIST_CHECK_CATS_TITEL2','Konsekvensen er at alle eksisterende kategorier og filer m� overf�res til den nye kategoristrukturen!');          

DEFINE('_JLIST_CHECK_FINISH','Prosess avbrutt!');
DEFINE('_JLIST_CHECK_CATS_CREATE','Kategorier og mapper ble opprettet!');
DEFINE('_JLIST_CHECK_FILES_MOVE','Oppf�ringer/filer ble flyttet!!');
DEFINE('_JLIST_CHECK_FILES_NOT_FOUND','Oppf�ringer/filer ble ikke funnet!');
DEFINE('_JLIST_CHECK_FILES_NOT_MOVED','Oppf�ringer/filer kunne ikke flyttes over i tilegnet kategorimappe!');
DEFINE('_JLIST_CHECK_CATS_NOT_FOUND','Kategorimapper kunne ikke opprettes!');

// MESSAGES AFTER RESTORE BACKUPFILE
DEFINE('_JLIST_AFTER_RESTORE_TITLE_1','Gjenopprettelsesprosess kj�rer:');
DEFINE('_JLIST_AFTER_RESTORE_1','Data gjenopprettet!');
DEFINE('_JLIST_AFTER_RESTORE_TITLE_2','Database innholdssjekk startet:');
DEFINE('_JLIST_AFTER_RESTORE_3','Backup ble laget med en eldre jDownloads versjon!');
DEFINE('_JLIST_AFTER_RESTORE_4','Kategorimappene og oppf�ringene er n� sjekket:');
DEFINE('_JLIST_AFTER_RESTORE_TITLE_3','Detaljerte resultater:');

DEFINE('_JLIST_AUTOCHECK_DIR_NOT_EXIST','FEIL: Rotmappen for opplastinger eksisterer ikke!');
DEFINE('_JLIST_AUTOCHECK_DIR_NOT_EXIST_2','Vennligst opprett f�lgende 2 mapper /downloads and /downloads/tempzipfiles i din Joomla rotmappe via FTP og sett tilgangsrettighetene (CHMOD) til 0777. jDownloads ikke fungere f�r dette er gjort!');
DEFINE('_JLIST_FRONTEND_HEADER_CATLIST_TITLE','Velg kategori');
DEFINE('_JLIST_FRONTEND_HEADER_SUMMARY_TITLE','Oppsummmering');
DEFINE('_JLIST_FRONTEND_HEADER_FINISH_TITLE','Last ned');

// FRONTEND SEARCH
DEFINE('_JLIST_FRONTEND_SEARCH_TITLE','S�k i filh�ndteringssystemet');
DEFINE('_JLIST_FRONTEND_SEARCH_TEXT_TITLE','S�k etter');
DEFINE('_JLIST_FRONTEND_SEARCH_IN_TITLE','Tittels�k');
DEFINE('_JLIST_FRONTEND_SEARCH_IN_DESC','S�k i beskrivelse');
DEFINE('_JLIST_FRONTEND_SEARCH_INFO_TEXT','Maks 20 filer vises i s�keresultatet.');  
DEFINE('_JLIST_FRONTEND_SEARCH_BUTTON_TEXT','S�k');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_TITLE','S�keresultat');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_SUM_FILES','funnet');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_NO_SUM_FILES','S�ket ditt ga ingen treff.');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_SEARCH_TEXT','S�keterm');

// NEW LAYOUT FOR VIEW DOWNLOAD-DETAILS
DEFINE('_JLIST_BACKEND_TEMP_TYP5','Nedlastingsdetaljer');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_DETAILS','Nedlastningsdetaljer');
DEFINE('_JLIST_BACKEND_TEMPLIST_DETAILSTITLE_HEAD','Layouter for nedlastningsdetaljer');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS','Layout: Nedlastningsdetaljer');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_DESC','Dette er layouten for siden for <b>nedlastningsdetaljer</b> i frontend.<br /><br />Ikke fjern plassholderen: <font color=red>{url_download}</font>!<br /><br />Tilgjengelige plassholdere:<br />{file_title} {thumbnail} {pic_is_new} {pic_is_hot} {pic_is_updated} {url_download} {mirror_1} {mirror_2} {description_long} {details_block_title} {license_title} {license_text} {price_title} {price_value} {language_title} {language_text} {filesize_title} {filesize_value} {system_title} {system_text} {author_title} {author_text} {author_url_title} {author_url_text} {created_date_title} {created_date_value} {hits_title} {hits_value} {created_by_title} {created_by_value} {modified_by_title} {modified_by_value} {modified_date_title} {modified_date_value}.'); // changed in 1.4 beta (2)
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_INFO_TITLE','<b>Informasjon ang. layout for nedlastningsdetaljer:</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_INFO_TEXT','<p>Grafisk eksempel p� hvordan denne siden kan se ut i frontend. Den m�rker�de skillelinjen indikerer omr�det du kan modifisere herfra.</p>');

// FRONTEND DOWNLOAD DETAILSITE
DEFINE('_JLIST_FE_DETAILS_PATHWAY_TEXT','Fillokasjon');
DEFINE('_JLIST_FE_DETAILS_LINK_TEXT_TO_DETAILS','>> Detaljer');
DEFINE('_JLIST_FE_DETAILS_LICENSE_TITLE','Lisens');
DEFINE('_JLIST_FE_DETAILS_PRICE_TITLE','Pris');
DEFINE('_JLIST_FE_DETAILS_LANGUAGE_TITLE','Spr�k');
DEFINE('_JLIST_FE_DETAILS_FILESIZE_TITLE','St�rrelse');
DEFINE('_JLIST_FE_DETAILS_SYSTEM_TITLE','System');
DEFINE('_JLIST_FE_DETAILS_AUTHOR_TITLE','Forfatter');
DEFINE('_JLIST_FE_DETAILS_AUTHOR_URL_TITLE','Nettsted');
DEFINE('_JLIST_FE_DETAILS_CREATED_DATE_TITLE','Opprettet');
DEFINE('_JLIST_FE_DETAILS_HITS_TITLE','Antall nedlastinger');

// LAYOUT DOWNLOAD-DETAILS
///////////////////////////////////////////////////////////////////////////////
// Template defaults for _jdownloads_templates - Please do not change this and NO translation here!!!
// Vorgabewerte f&uuml;r Layouttabelle - hier bitte KEINE &Auml;nderungen oder �bersetzungen hier vornehmen !!!
///////////////////////////////////////////////////////////////////////////////
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_DEFAULT_NAME','Standard 1.4');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT_NAME','Standard 1.4');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_DEFAULT_NAME','Standard 1.4 - Full Info');
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
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT_NEW_SIMPLE_1_NAME','Standard layout med avkrysningsbokser');
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
DEFINE('_JLIST_BACKEND_TEMPEDIT_TITLE_NOT_ALLOWED_TO_CHANGE_DESK','Du kan ikke endre navn p� standardlayouter!'); 
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT_NEW_SIMPLE_2_NAME','Standard layout med avkrysningsbokser');
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
DEFINE('_JLIST_BACKEND_TEMPEDIT_NOTE_TITLE','Layoutnotiser');
DEFINE('_JLIST_BACKEND_TEMPEDIT_NOTE_DESC','Tilleggsinformasjon for layouten kan legges inn her.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_CHECKBOX_TITLE','Bruker layouten avkrysningsbokser?');
DEFINE('_JLIST_BACKEND_TEMPEDIT_CHECKBOX_DESC','Hvis JA vil headingen med avkrysningsboks, og fortsett knappen vises. I tillegg m� enten plassholderen <b>{checkbox_list}</b> eller <b>{url_download}</b>legges inn i layouten.'); 
DEFINE('_JLIST_BACKEND_TEMPEDIT_SYMBOLE_TITLE','Legg til mini-ikon?');
DEFINE('_JLIST_BACKEND_TEMPEDIT_SYMBOLE_DESC','Hvis JA vil det designerte mini-ikon bli lagt til. Ikonets st�rrelse kan justeres i konfigurasjonen.');

DEFINE('_JLIST_FE_YES','Ja');
DEFINE('_JLIST_FE_NO','Nei');

DEFINE('_JLIST_BACKEND_EDIT_PUBLISHED','Publisert');
DEFINE('_JLIST_BACKEND_FILESEDIT_MODIFIED_DATE','Sist endret');
DEFINE('_JLIST_BACKEND_FILESEDIT_MODIFIED_BY','av');
DEFINE('_JLIST_BACKEND_FILESEDIT_CREATED_BY','Opprettet av');

DEFINE('_JLIST_BACKEND_FILESEDIT_INFO_FIELDS_DESC','Boksene til venstre inneholder filinformasjon: navn p� publiserer, siste redigerer, siste redigeringstidspunkt');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CATLISTBOX_ACTIVE','Vis kategoriliste i header?');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CATLISTBOX_DESC','Hvis JA vil en listeboks med alle publiserte kategorier tilgjengelig for brukeren (avhengig av tilgangsniv�) vises til h�yre for headeren. Fra listeboksen kan du g� direkte til �nsket kategori/underkategori.');

// SAMPLE DATA 
DEFINE('_JLIST_SAMPLE_DATA_CAT_NAME_ROOT','Eksempel p� kategori');
DEFINE('_JLIST_SAMPLE_DATA_CAT_NAME_SUB','Eksempel p� underkategori');
DEFINE('_JLIST_SAMPLE_DATA_CAT_NAME_TEXT','Dette er et eksempel p� en kategori for illustrasjon. Denne kan fjernes n�r som helst.');
DEFINE('_JLIST_SAMPLE_DATA_FILE_NAME','Oppf�ringseksempel');
DEFINE('_JLIST_SAMPLE_DATA_FILE_NAME_TEXT','Dette er en oppf�ring for illustrasjon. Denne kan fjernes n�r som helst.');
DEFINE('_JLIST_SAMPLE_DATA_CREATE_ERROR','Pga. en feil ble ikke eksempeldata lagt inn! Vennligst sjekk valgene i jDownloads sin hovedmeny.');
DEFINE('_JLIST_SAMPLE_DATA_CREATE_OK','Eksempeldata ble lagt inn!');
DEFINE('_JLIST_SAMPLE_DATA_BE_OPTION_LINK_TEXT','Innstaller eksempeldata n�');
DEFINE('_JLIST_SAMPLE_DATA_EXISTS','Eksempeldata eksisterer allerede!');
DEFINE('_JLIST_SAMPLE_DATA_BACK_TO_PANEL','Tilbake til kontrollpanel');


DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_HEAD_INFO2','<br /><b><u>Forklaring vedr�rende layouter</u></b><br /><b>Kategorier: </b>Definerer utseendet p� kategoriene og for bruken av avkrysningsbokser over og under fillisten for nedlasting.<br /><b>Filer: </b>Definerer utsendet p� nedlastningslisten vist under kategoriene (se over).<br /><b>Nedlastningsdetaljer: </b>Definerer utseendet p� siden for nedlastningsdetaljer.<br /><b>Oppsummering: </b>Definerer utseendet p� oppsummeringssiden (der hvor selve nedlastningen starter) med listen over valgte filer for nedlating.<br /><b>E-poster: </b>Definerer utseendet p� e-post sendt til administrator etter hver nedlastning.');

// ANTI_LEECH_CONFIG
DEFINE('_JLIST_BACKEND_SETTINGS_ANTILEECH_TITLE','Beskyttelse av nedlastingsmappen?');
DEFINE('_JLIST_BACKEND_SETTINGS_ANTILEECH_DESK','Hvis JA vil htaccess.txt filen bli kopiert inn i nedlastings-rotmappen og navnet endres til .htaccess. Da vil alle eksterne henvendelser mot filene bli blokkert inkludert de som finnes i underkategorier. <b>Anbefalt: JA!</b>');
DEFINE('_JLIST_ACTIVE_ANTILEECH_ERROR',' - En feil oppstod under kopiering av htaccess.txt!');
DEFINE('_JLIST_ACTIVE_ANTILEECH_OK',' - Nedlastingsbeskyttelse er aktivert!');
DEFINE('_JLIST_ACTIVE_ANTILEECH_OFF_ERROR',' - En feil oppstod under sletting av .htaccess filen!');
DEFINE('_JLIST_ACTIVE_ANTILEECH_OFF_OK',' - Nedlastingsbeskyttelse er deaktivert!');

DEFINE('_JLIST_FRONTEND_ANTILEECH_MESSAGE','Uautorisert tilgang til oppf�ringer/filer!');
DEFINE('_JLIST_FRONTEND_FILE_NOT_FOUND_MESSAGE','Den anbefalte filen ble ikke funnet!<br /><br />Vennligst informer Webmaster!');

DEFINE('_JLIST_FRONTEND_SUMMARY_ZIP_FILESIZE','Filst�rrelse for filpakke (ZIP):');
DEFINE('_JLIST_FRONTEND_NEXT_SITE_BUTTON','&nbsp;>>&nbsp;');
DEFINE('_JLIST_FRONTEND_PREV_SITE_BUTTON','&nbsp;<<&nbsp;');

DEFINE('_JLIST_FRONTEND_SUBHEADER_NUMBER_OF_CATS_TITLE','Antall kategorier');
DEFINE('_JLIST_FRONTEND_SUBHEADER_NUMBER_OF_SUBCATS_TITLE','Antall underkategorier');
DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_CATLIST','Vennligst velg en kategori eller >Hovedkategori<');

// NEW OPTION FOR DIREKT DOWNLOAD LINK
DEFINE('_JLIST_BACKEND_SETTINGS_DIRECT_DOWNLOAD_ACTIVE_TITLE','Aktiver direktenedlasting?');
DEFINE('_JLIST_BACKEND_SETTINGS_DIRECT_DOWNLOAD_ACTIVE_DESC','Hvis JA: Ved � bruke plassholderen <b>{url_download}</b> i layouten, vil nedlastingen starte umiddelbart uten � vise noen oppsummering.');

// NEW OPTION FOR HOT AND NEW IMAGES IN DOWNLOADS
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_TITLE','N�r skal en oppf�ring f� betegnelsen "popul�r"');
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_DESC','Indiker antall nedlastinger som skal til for � f� betegnelsen "Popul�r". "Popul�r"-ikonet vil vises etter navnet.');
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_NEW_PIC_TITLE','Ikonets filnavn');
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_NEW_PIC_DESC','Den indikerte filen m� finnes i mappen: <b>../components/com_jdownloads/images</b>.');
DEFINE('_JLIST_BACKEND_SETTINGS_NEW_TITLE','Hvor lenge skal en oppf�ring ha betegnelsen "Ny"');
DEFINE('_JLIST_BACKEND_SETTINGS_NEW_DESC','Indiker antall dager en opp�ring skal ha betegnelsen "NY". "NY"-ikonet vil vises etter filnavnet.');
// NEW OPTION FOR DOWNLOAD PIC BUTTON IN DOWNLOAD DETAILS
DEFINE('_JLIST_BACKEND_SETTINGS_DETAILS_DOWNLOAD_BUTTON_TITLE','"Last ned"-ikonets filnavn'); 
DEFINE('_JLIST_BACKEND_SETTINGS_DETAILS_DOWNLOAD_BUTTON_DESC','Den indikerte filen m� finnes i mappen <b>../components/com_jdownloads/images</b> og vil bli brukt p� siden for nedlastingsdetaljer som lenke for nedlasting.');

// NEW IN 1.2 beta 2
DEFINE('_JLIST_FRONTEND_UPLOAD_AUTO_PUBLISH','Autopubliser:');
DEFINE('_JLIST_FRONTEND_UPLOAD_AUTO_PUBLISH_DESC','Hvis JA, blir filen publisert umiddelbart etter opplasting.');

// NEW IN 1.2 stable
DEFINE('_JLIST_BACKEND_DIRSEDIT_CREATE_DIR_MESSAGE_ERROR','Feil: Mappen kunne ikke opprettes! Sjekk via FTP og sett CHMOD til 0777 for alle jDownloads mapper!');

// NEW IN 1.3 stable

// FOR CREATES MAIN MENU IN INSTALL
DEFINE('_JLIST_BACKEND_CPANEL_MAIN','Kontrollpanel');
DEFINE('_JLIST_INSTALL_DEFAULT_DATE_FORMAT','%Y-%m-%d %H:%M:%S');

// NEW OPTION SORTORDER CATEGORIES
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SORTCATSORDER_TEXT','Sortering p� kategorier');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SORTCATSORDER_DESC','Sortering p� kategoriene i frontend. Velg "Standard" for � bruke backends standardsortering.');
DEFINE('_JLIST_BACKEND_SETTINGS_CATS_ORDER_1','Standard');
DEFINE('_JLIST_BACKEND_SETTINGS_CATS_ORDER_2','Alfabetisk');
DEFINE('_JLIST_BACKEND_SETTINGS_CATS_ORDER_3','Omvendt alfabetisk');

// NEW OPTION AUTOPUBLISH NEW FOUNDED FILES
DEFINE('_JLIST_BACKEND_SETTINGS_DOWNLOADS_AUTOPUBLISH_TITLE','Autopubliser?');
DEFINE('_JLIST_BACKEND_SETTINGS_DOWNLOADS_AUTOPUBLISH_DESC','Hvis ja blir nye filer/oppf�ringer publisert omg�ende.<br /><b>Standard: Nei.</b>');

// NEW COPY DOWNLOADS FUNCTION
DEFINE('_JLIST_BACKEND_FILES_COPY_TITLE','Kopier oppf�ringer');
DEFINE('_JLIST_BACKEND_FILES_COPY_DESC','Velg m�lkategori.');
DEFINE('_JLIST_BACKEND_FILES_COPY_TEXT_1','F�lgende oppf�ringer er merket for kopiering:');
DEFINE('_JLIST_BACKEND_FILES_COPY_TEXT_2','Merk: Hvis m�lkategorien er den samme som kildekategorien, blir kopiene gitt navnet: Kopi av <i>Nedlasting</i>"!');
DEFINE('_JLIST_BACKEND_FILES_COPY_TEXT_3','Publiser kopierte oppf�ringer:');
DEFINE('_JLIST_BACKEND_FILES_COPY_TEXT_4','Kopier ogs�:');
DEFINE('_JLIST_BACKEND_FILES_COPY_DOWNLOADS_TEXT','Kopier fra');
DEFINE('_JLIST_BACKEND_FILES_COPY_SAVED','Oppf�ringene ble kopiert!');

// NEW OPTION EXTERN DOWNLOAD URL
DEFINE('_JLIST_BACKEND_FILE_EDIT_EXT_DOWNLOAD_TITLE','Ekstern lenke:');
DEFINE('_JLIST_BACKEND_FILE_EDIT_EXT_DOWNLOAD_INFO','�nsker du � bruke en ekstern lenke, m� du slette den lokale filen f�rst.');
DEFINE('_JLIST_BACKEND_FILE_EDIT_EXT_DOWNLOAD_DESC','Her kan du legge inn en URL til en ekstern fil for denne oppf�ringen. La filopplastningsboksen v�re tom.');

//NEW OPTION FOR JCOMMENTS INTEGRATION
DEFINE('_JLIST_BACKEND_SETTINGS_JCOMMENTS_TITLE','JComments kommentarfunksjon?');
DEFINE('_JLIST_BACKEND_SETTINGS_JCOMMENTS_DESC','Hvis Ja aktiveres kommentarfunksjonen <b>JComments</b> frontend.<br /><b>JComments</b> er ikke inkludert i jDownloads, og du m� derfor innstallere og konfigurere denne f�rst.<br />JComments kan lastes ned fra <a href="http://www.joomlatune.com">www.joomlatune.com.</a>');
DEFINE('_JLIST_BACKEND_SETTINGS_JCOMMENTS_EXISTS_DESC','Hvis JA vises JComments p� siden for nedlastningsdetaljer<br /><b>JComments er allerede innstallert!</b>');

// NEW TAB FOR FRONTEND UPLOAD CONFIG
DEFINE('_JLIST_BACKEND_SETTINGS_FE_UPLOAD_TAB_TITLE','Opplastninger');
DEFINE('_JLIST_BACKEND_SETTINGS_FE_UPLOAD_TITLE_HEAD','Frontend opplastningskonfigurasjon');

// NEW DOWNLOAD FIELDS FOR DOWNLOAD MIRRORS
DEFINE('_JLIST_BACKEND_FILESEDIT_MIRROR_URL_TITLE','Alternativ ekstern fillenke:');
DEFINE('_JLIST_BACKEND_FILESEDIT_MIRROR_URL_DESC','Du kan definere en "mirror server" for denne oppf�ringen.<br />I den aktive layouten for filer eller nedlastningsdetaljer m� du evt. fylle inn plassholderene: {mirror_1} {mirror_2}.');

//NEW FOR PLUGINS TAB
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_PLUGINS','Programtillegg');

//NEW FOR FILE PLUGIN
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_FILEPLUGIN_HEAD','Konfigurasjon for innholdstillegg(mos_jdownloads_file)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(c) by Pelma for jDownloads');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_DEFAULTLAYOUT','Standardlayout:');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_DEFAULTLAYOUT_DESC','Denne layouten er for � vise en oppf�ring i innhold/artikler hvis relevant programtillegg er <b>sl�tt p�</b> (se under).');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_NOT_INSTALLED','Programtillegg for oppf�ringer i artikler (mos_jdownloads_file) er ikke en del av jDownloads kjernen, og m� innstalleres separat. <br /><b>Status: Programtillegg ikke innstallert!</b><br />Du kan laste ned denne fra <a href="http://demo.joomlaaddons.de/index.php?option=com_jdownloads&Itemid=69&task=viewcategory&catid=9">www.JoomlaAddons.de</a>.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_ONLINEPART','Parametre for p�sl�tt programtilleggg');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINEPART','Parametre for avsl�tt programtillegg');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWNEW','Vis NY-ikon');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWNEW_DESC','Visning av NY-symbolet i artikler.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWHOT','Vis Popul�r-ikon');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWHOT_DESC','Visning av Popul�r-ikonet i artikler.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_ENABLEPLUGIN','Sl� p� programtillegg');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_ENABLEPLUGIN_DESC','Sl� p� programtillegg. Dette er ikke det samme som "Publiser" parameteret i Joomla. Sl�r du av programtillegget herfra kan du informere dine bes�kende om dette (se parametre under)!');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWDISABLED','Vis beskjed hvis programtillegget er avsl�tt');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWDISABLED_DESC','N�r du sl�r av programtillegget, kan du vise en beskjed istedenfor oppf�ringen. Se parametre under.<br \><b>Nei</b>: For ikke � vise noe.<br \><b>Standardlayoutlayout</b>: Vis en melding ved � bruke standardlayouten (se over).<br \><b>Offline-layout</b>: Vis en melding ved � bruke offline-layouten (se under).');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_DOWNLOADTITLE','Vis orginal nedlastningstittel');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_DOWNLOADTITLE_DESC','JA: bruk orginal tittel (med tilh�rende ikon) i din offline-beskjed.  NEI: erstatt orginal tittel med innholdet i boksen "Tittelerstatning" under.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINETITLE','Tittelerstatning');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINETITLE_DESC','Visningstittel n�r programtillegg er avsl�tt (avhenger av valgene dine over).');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINEDESC','Beskrivelseserstatning');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINEDESC_DESC','Visningsbeskrivelse n�r programtillegg er avsl�tt.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT','Offline layout (N�r programtillegg er avsl�tt)');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT_DESC','Bruk denne layouten for � vise offline-beskjed n�r programtillegget er avsl�tt.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT_OPT1','Nei');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT_OPT2','Standardlayout');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT_OPT3','Offline layout');
DEFINE('_JLIST_FRONTEND_SETTINGS_FILEPLUGIN_OFFLINE_FILETITLE','Oppf�ringer ikke tilgjengelig.');
DEFINE('_JLIST_FRONTEND_SETTINGS_FILEPLUGIN_DESCRIPTION','Hvis du har tillatelse til � laste ned, kontakt webmaster.');
DEFINE('_JLIST_FRONTEND_SETTINGS_FILEPLUGIN_FILEUNKNOWN','Kan ikke finne filen ID=<b>{fileid}</b>');
DEFINE('_JLIST_FRONTEND_SETTINGS_FILEPLUGIN_LAYOUTUNKNOWN','Kan ikke finne layouten <b>{thelayout}</b>!');

// NEW OPTIONS FOR DEFAULT CAT ICON
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_CAT_FILE_NO_DEFAULT_PIC','Intet bilde valgt!');
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_CAT_PIC_TITLE','Standardikon for kategorier:');
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_CAT_PIC_DESC','Velg et ikon som tilegnes automatisk til nye kategorier.');

// NEW OPTIONS FOR DEFAULT FILE ICON
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_FILE_PIC_TITLE','Standardikon for oppf�ringer:');
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_FILE_PIC_DESC','Velg et ikon som tilegnes automatisk til nye oppf�ringer.');

// FOR MISSING NEW MINIPICS
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_PRICE','Pris');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_FILESIZE','Filst�rrelse');

// FOR DATAFIELDS IN  DOWNLOAD DETAILVIEW
DEFINE('_JLIST_FE_DETAILS_CREATED_BY_TITLE','Opprettet av');
DEFINE('_JLIST_FE_DETAILS_MODIFIED_BY_TITLE','Endret av');
DEFINE('_JLIST_FE_DETAILS_MODIFIED_DATE_TITLE','Endret den');

// FOR EXTERN FILES -  USER INFO IF CHECKBOXES ACTIVE
// PLEASE USE NOT SPECIAL CHARS e.g. " ' & ...
DEFINE('_JLIST_FRONTEND_EXTERN_FILE_USER_INFO','Denne filen m� lastes ned separat, da den ligger p� en ekstern server. Av denne grunn kan den ikke inkluderes i en flerfilsnedlasting.');

// FOR SAMPLE PIC IN EMAIL LAYOUT 
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_EMAIL_INFO_TITLE','<b>Information about email layout</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_EMAIL_INFO_TEXT','<p>This is a graphical example of this information in the transmitted email. The dark red border indicates the area you can change the display from here. </p>');

//NEW TEXT FOR MIRRORS LINK
DEFINE('_JLIST_FRONTEND_MIRROR_URL_TITLE_1','Mirror 1');
DEFINE('_JLIST_FRONTEND_MIRROR_URL_TITLE_2','Mirror 2');

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
DEFINE('_JLIST_BACKEND_SETTINGS_UPD_DESC','Indicate here the number of days, which a Download is to be considered as �updated�. Behind the Download title the symbol is then indicated. As updated a Download is considered after each change to it. With 0 no symbol is indicated.');

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