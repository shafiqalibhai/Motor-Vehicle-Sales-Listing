<?php
/**
* @version 1.4
* @package JDownloads
* @copyright (C) 2008 Arno Betz - www.joomlaaddons.de
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
*
* 
* ======================
// Srpski prevod uradio Vasilj Miloševic (::eboye::) 2008.09.20
// http://www.urban-design.org.uk / eboyee@gmail.com
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
DEFINE('_JLIST_VERSION','<br /><br />Please give me a feedback in the Forum on <a href="http://www.JoomlaAddons.de">www.JoomlaAddons.de</a>.');

DEFINE('_JLIST_PRODUCT_FOOTER','JDownloads');
DEFINE('_JLIST_VERSION_FOOTER','');

// end component infos
//-----------------------------------------------------------

// Installation data

DEFINE('_JLIST_INSTALL_0','Informacije o instalaciji:');
DEFINE('_JLIST_INSTALL_1','Svi konfiguracioni fajlovi postoje u bazi!');
DEFINE('_JLIST_INSTALL_2','Konfiguracioni fajlovi su osveženi.');
DEFINE('_JLIST_INSTALL_3','Svi podrazumevani izgledi postoje u bazi!.');
DEFINE('_JLIST_INSTALL_4','Sacuvani podrazumevani izgledi u bazu!');
DEFINE('_JLIST_INSTALL_5','Sve podrazumevane licence postoje u bazi!');
DEFINE('_JLIST_INSTALL_6','Sacuvane podrazumevane licence u bazu!');
DEFINE('_JLIST_INSTALL_7','Direktorijum za upload postoji i moguc je upis!');
DEFINE('_JLIST_INSTALL_8','Direktorijum za upload postoji i NIJE moguc upis. Podesite CHMOD na 0777 za direktorijum za uplaod, u protivnom jDownloads nece raditi!');
DEFINE('_JLIST_INSTALL_9','Direktorijum za upload kreiran. CHMOD 0777 ce biti postavljen.');
DEFINE('_JLIST_INSTALL_10','Greška: Direktorijum za upload nije moguce kreirati!<br />Kreirajte ga rucno preko FTPa i podesite CHMOD na 0777 za direktorijum za upload, u protivnom jDownloads nece raditi!');
DEFINE('_JLIST_INSTALL_11','Privremeni direktorijum za .zip postoji i moguc je upis!');
DEFINE('_JLIST_INSTALL_12','Direktorijum za upis /skidanje /privremenih zip fajlova postoji i NIJE moguc upis. Podesite CHMOD na 0777 za direktorijum za upload, u protivnom jDownloads nece raditi!');
DEFINE('_JLIST_INSTALL_13','Direktorijum za upis /skidanje /privremenih zip fajlova kreiran. Mogucnost upisa: CHMOD 0777 - OK.');
DEFINE('_JLIST_INSTALL_14','Greška: .zip direktorijum /skidanje/privremenih zip fajlova nije moguce kreirati!<br />Kreirajte ga rucno preko FTPa i podesite CHMOD na 0777 za direktorijum privremenih .zip fajlova.<br />u protivnom jDownloads nece raditi!!');
DEFINE('_JLIST_INSTALL_15','Instalacija uspešna!');
DEFINE('_JLIST_INSTALL_16','Pokreni jDownloads!');

DEFINE('_JLIST_INSTALL_DB_TIP','Info: Ako deinstalirate jDownloads baza nece biti obrisana. Ako kasnije budete koristili noviju verziju, baza ce biti ponovo korišcena.');
DEFINE('_JLIST_INSTALL_TITLE_FOR_DEFAULT_LAYOUTS','Standard');

//FRONTEND

DEFINE('_JLIST_FILE_NOT_FOUND','Traženi fajl nije naden. Molimo obavestite webmastera.');
DEFINE('_JLIST_LINKTEXT_VIEW_FILE_TYPES','Zapocni download<br />(prikaži u novom prozoru)');
DEFINE('_JLIST_LINKTEXT_ZIP','Zapocni download');
DEFINE('_JLIST_LINKTEXT_DOWNLOAD_URL','Download');
DEFINE('_JLIST_LINKTEXT_HOME','Pocetna strana');
DEFINE('_JLIST_DEL_ZIP_ADMIN_INFO','<br />Informacija za Administratora: desila se greška pri brisanju privremenih zip fajlova ili fajl ne postoji!');
DEFINE('_JLIST_FORM_BUTTON_TEXT','Nastavi');
DEFINE('_JLIST_EMPTY_CAT_TEXT','Ova kategorija još uvek ne sadrži fajlove.<br /><br />');
DEFINE('_JLIST_MAIL_DOWNLOADER_NAME_VISITOR','Posetioc');
DEFINE('_JLIST_MAIL_DOWNLOADER_GROUP','Gost');
DEFINE('_JLIST_MAILSEND_ERROR','Desila se greška pri slanju e-mail-a!');
DEFINE('_JLIST_FRONTEND_COUNT_SUBCATS','Pod-kategorije:');
DEFINE('_JLIST_FRONTEND_COUNT_FILES','Broj fajlova:');
DEFINE('_JLIST_FRONTEND_HOMEPAGE','Pocetna strana');
DEFINE('_JLIST_FRONTEND_BACK_BUTTON','Nazad');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_DATE','Datum');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_LICENCE','Licenca');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_AUTHOR','Autor');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_WEBSITE','Web-sajt');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_SYSTEM','Sistem');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_LANGUAGE','Jezik');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_DOWNLOAD','Download');
DEFINE('_JLIST_FRONTEND_VERSION_TITLE','Verzija: ');
DEFINE('_JLIST_FRONTEND_CAT_ACCESS_REGGED','Ova kategorija zahteva registraciju za download fajlova. Ako ste registrovani, molimo vas ulogujte se.<br /><br />');

//BACKEND TOOLBAR
DEFINE('_JLIST_BACKEND_COMPONENT_NAME','JDownloads');
DEFINE('_JLIST_BACKEND_TOOLBAR_MAIN','Pocetna');
DEFINE('_JLIST_BACKEND_TOOLBAR_EDIT','Izmeni');
DEFINE('_JLIST_BACKEND_TOOLBAR_REMOVE','Obriši');
DEFINE('_JLIST_BACKEND_TOOLBAR_CLOSE','Zatvori');
DEFINE('_JLIST_BACKEND_TOOLBAR_SUBMAIN','Izgledi');

//BACKEND CPANEL
DEFINE('_JLIST_BACKEND_CPANEL_FILES','Downloads');
DEFINE('_JLIST_BACKEND_CPANEL_CATEGORIES','Kategorije');
DEFINE('_JLIST_BACKEND_CPANEL_LICENSE','Licence');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES','Administracija izgleda');
DEFINE('_JLIST_BACKEND_CPANEL_BACKUP','Pravljenje sigurnosne kopije');
DEFINE('_JLIST_BACKEND_CPANEL_SETTINGS','Konfiguracija');
DEFINE('_JLIST_BACKEND_CPANEL_RESTORE','Vracanje sigurnosne kopije');
DEFINE('_JLIST_BACKEND_CPANEL_INFO','Uslovi korišcenja');
DEFINE('_JLIST_BACKEND_CPANEL_SUPPORT','Podrška');

// RESULTS FROM AUTOCHECKFILES OPTION
DEFINE('_JLIST_BACKEND_AUTOCHECK_TITLE','Informacije o proveri Download odeljka:');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NEW_FILES','Nadeni novi fajlovi i dodati u download-bazu!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_MISSING_FILES','Fajl(ovi) nisu nadeni. Fajlovi više nisu citljivi za javnost!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NO_NEW_FILES','Nisu nadeni novi fajlovi!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NO_MISSING_FILES','Svi objavljeni download-i postoje!');

DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_STATUS','Status');
DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_2','Verzija');
DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_3','Log akcija');

// STATUS
DEFINE('_JLIST_BACKEND_PANEL_STATUS_OFFLINE_HEADER','Odeljak za Status Download-a');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_TITEL','<font color="#990000"><b><big>Odeljak za Status Download-a:</big></b></font>');

DEFINE('_JLIST_BACKEND_PANEL_STATUS_DESC_ONLINE','Ako je ONLINE, odeljak za download je citljiv za posetioce.');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_ONLINE','<font color="green"><b><big> ONLINE!</big></b></font>');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_OFFLINE','<font color="red"><b><big> OFFLINE!</big></b></font>');

// OFFLINE
DEFINE('_JLIST_BACKEND_OFFLINE_OPTION_TITLE','Aktivirati održavanje?');
DEFINE('_JLIST_BACKEND_OFFLINE_OPTION_DESC','Sa ovom opcijom podešavate ceo odeljak za download na "iskljuceno". Posetiocima ce biti prikazan tekst ispod. Samo korisnici sa statusom "author" su u mogucnosti da vide download odeljak.');
DEFINE('_JLIST_BACKEND_OFFLINE_MESSAGE_TITLE','Poruka za posetioce');
DEFINE('_JLIST_BACKEND_OFFLINE_MESSAGE_DEFAULT','<table width="70%" align="center" cellspacing="0" cellpadding="20" border="1"><tr><td align="center">
<h3>Trenutno radimo na download odeljku.<br /><br />Molimo vas pokušajte ponovo za koji minut.</h3><br /><img src="components/com_jdownloads/images/offline.png" />
</td></tr></table>');
DEFINE('_JLIST_BACKEND_OFFLINE_MESSAGE_DESC','Ubacite tekst koji ce biti prikazan ako je download odeljak još pod održavanjem.');
DEFINE('_JLIST_BACKEND_OFFLINE_ADMIN_MESSAGE_TEXT','<div align="center"><b><h3>Download-i su: OFFLINE!</h3></b></div>');

//BACKEND SETTINGS
DEFINE('_JLIST_BACKEND_SETTINGS','Konfiguracija');
DEFINE('_JLIST_BACKEND_SETTINGS_SAVED','Konfiguracija sacuvana');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_HEAD','E-mail Konfiguracija');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_FILES_HEAD','Download Konfiguracija');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_FRONTEND_HEAD','Frontend Konfiguracija');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_BACKEND_HEAD','Backend Konfiguracija');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_SECURITY_HEAD','Sigurnosna Podešavanja');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_IMAGES_HEAD','Podešavanja Slika/Ikona');

DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_DOWNLOADS','Downloadi');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_FRONTEND','Frontend');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_BACKEND','Backend');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_IMAGES','Slike');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_SECURITY','Sigurnost');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_EMAIL','E-Mail');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_SONSTIGE','Ostalo');

DEFINE('_JLIST_BACKEND_SETTINGS_DATETIME','Format datuma-vremena');
DEFINE('_JLIST_BACKEND_SETTINGS_DATETIME_DESC','Informacije o formatu: <a href="http://www.php.net/manual/de/function.strftime.php" target="_blank">www.php.net</a>');

DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIR','Direktorijum za Upload');
DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIR_DESC','Glavni direktorijum za upload fajlova. Ovaj direktorijum i <b>all</b> pod-direktorijumi moraju imati mogucnost upisa!');

DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIRTEMP','Privremeni direktorijum');
DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIRTEMP_DESC','Ovaj direktorijum mora postojati i imati mogucnost upisa! On sadrži privremeno kreirane .zip fajlove (posle downloada, automatski se brišu).');

DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_1','Standard');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_2','Poslednje prvo');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_3','Poslednje zadnje');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_4','Po imenu na gore');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_5','Po imenu na dole');

// E-Mail config
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_OPTION_DESC','Ako je ovo aktivirano, e-mail se šalje na adresu upisanu ispod posle svakog downloada.');
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_OPTION','Aktivirati e-mail?');

DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_DESC','E-mail adresa na koju se šalju informacije o downloadu.');
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO','E-mail adresa');

DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_HTML_DESC','Ako je ova opcija aktivirana, e-mail se šalje u HTML formatu. U suprotnom, koristi se "plain text" format.');
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_HTML','Koristiti HTML-format?');

DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_BETREFF_DESC','Tekst koji ce se koristiti za subjekat e-mail-a.');
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_BETREFF','Subjekat');

// View Frontend Config settings
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_VIEW_HEAD','Opcije frontend izgleda komponente');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_COMPO_TEXT','Opis komponente');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_COMPO_TEXT_DESC','Tekst prikazan <b>izmedu</b> naziva komponente i njenih kategorija. Naziv komponente se automatski preuzima iz imena u meniju.<br /><br />CSS klase, HTML kod i arbitarni tekst može biti ukljucen.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CHECKBOX_TEXT','Checkbox Tekst');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CHECKBOX_TEXT_DESC','Obaveštenje za prikaz za vrh check box-a liste.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_VIEW_FILE_TYPES','Koji tipovi fajlova (ekstenzije) da se prikazuju?');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_VIEW_FILE_TYPES_DESC','Ukljuciti tipove fajlova, koji ce biti otvoreni u novom prozoru. Izmedu svake ekstenzije morate staviti ","');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SORTFILESORDER_TEXT','Redosled sortiranja');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SORTFILESORDER_DESC','Redosled po kom se fajlovi sortiraju u frontend-u. Selektujte "Standard" da bi ste koristili backend-ov podrazumevani redosled.');

// View Images settings
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SHOW_MINIPICS','Prikaz informacionih simbola?');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SHOW_MINIPICS_DESC','Ako je aktivirano, simboli ce biti prikazani. Ako je iskljuceno, prikazuje se tekst.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_MINIPICS_SIZE','Velicina u pikselima za informacioni simbol');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_MINIPICS_SIZE_DESC','Velicina prikaza za informacione simbole. Standard: 20');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CATPICS_SIZE','Velicina u pikselima za simbol kategorije');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CATPICS_SIZE_DESC','Velicina prikaza za simbol kategorije. Možete koristiti svoje ikone, samo uploadovanjem preko FTPa u pod-direktorijum: /catimages. Standard: 48');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FILEPICS_SIZE','Velicina u pikselima za simbol fajla');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FILEPICS_SIZE_DESC','Velicina prikaza za simbol fajlova. Možete koristiti svoje ikone, samo uploadovanjem preko FTPa u pod-direktorijum: /fileimages. Standard: 32');

// View backend security settings
// to be translated
DEFINE('_JLIST_BACKEND_SETTINGS_MAIL_SECURITY_DESC','Ako je namešteno na DA, e-mail adrese nisu prikazane u cistom tekstu da bi sprecili Spambotove. Upamtite da ako je iskljucena javascripta u vašem browser-u, link nece biti prikazan. Preporuceno podešavanje: DA.');
//
DEFINE('_JLIST_BACKEND_SETTINGS_MAIL_SECURITY_TITEL','Skrivanje e-mail adresa?');

// View backend Config settings
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_LAYOUTS','Koristi WYSIWYG-editor za izglede');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_LAYOUTS_DESC','Ako je ova opcija aktivirana, trenutno selektovan WYSIWYG editor se koristi za izmenu izgleda. Ako nije, obican text area se prikazuje.');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_FILES','Koristi WYSIWYG-editor za downloade');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_FILES_DESC','Ako je ova opcija aktivirana, trenutno selektovan WYSIWYG editor se koristi za izmenu downloada. Ako nije, obican text area se prikazuje.');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_CATS','Koristi WYSIWYG-editor za kategorije');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_CATS_DESC','Ako je ova opcija aktivirana, trenutno selektovan WYSIWYG editor se koristi za izmenu kategorija. Ako nije, obican text area se prikazuje.');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_LICENSES','Koristi WYSIWYG-editor za licence');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_LICENSES_DESC','Ako je ova opcija aktivirana, trenutno selektovan WYSIWYG editor se koristi za izmenu licenci. Ako nije, obican text area se prikazuje.');

DEFINE('_JLIST_BACKEND_SETTINGS_FILE_SYSTEM_LIST','Selektuj polja za download: edit "Sistem"');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_SYSTEM_LIST_DESC','Ovde možete menjati predložene opcije za polja. Izmedu svake opcije potreban je "," razdelnik. <br /><br /><b>Važna naznaka:</b> ako vec imate sacuvane download liste, budite pažljivi, jer svaka promena utice na download-e. Primer: Ako su neki downloadi sacuvani pod sistemom "Joomla 1.5", bice podešeni na drugu vrednost npr. "Windows Vista". Dodajte nove vrednosti na kraj liste.');

DEFINE('_JLIST_BACKEND_SETTINGS_FILE_LANGUAGE_LIST','Selektuj polja za download: edit "Jezik"');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_LANGUAGE_LIST_DESC','Ovde možete menjati predložene opcije za polja. Izmedu svake opcije potreban je "," razdelnik. <br /><br /><b>Važna naznaka:</b> ako vec imate sacuvane download liste, budite pažljivi, jer svaka promena utice na download-e. Primer: Ako su neki downloadi sacuvani pod jezikom ="Deutsch", bice podešeni na drugu vrednost npr. "French". Dodajte nove vrednosti na kraj liste.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_ZIPFILE_PREFIX_TEXT','Podrazumevani prefiks za naziv ZIP fajlova');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_ZIPFILE_PREFIX_DESC','Ako je selektovano više fajlova za download, oni su automatski arhivirani u privremeni ZIP fajl i prezentovani korisniku kao jedan fajl za download. Ime ZIP fajla se dodeljuje od prefiksa i nasumicnog broja.');

// Templates Config Backend
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_HEAD','<b>Izgledi odreduju nacin prikazivanja sadržaja u frontend-u</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_HEAD_INFO','<br />Nekoliko standardnih izgleda je sadržano pri instalaciji. Oni mogu biti prilagodeni po želji i novi izgledi mogu biti kreirani. Pojednostavljena konfiguracija vam omogucuje da putem WYSIWYG editora ili obicnog text area za editovanje, menjate izglede.<br /><br />U slucaju da frontend komponente ne funkcioniše ispravno posle izmena <b>podrazumevanih izgleda originalnog sadržaja</b> (misli se na stanje posle instalacije) može se uvek vratiti na pocetnu vrednost. Da bi ste to uradili, obrišite <b>sav tekst</b> u respektivnom izgledu i <b>sacuvajte</b>. Stranica ce biti sacuvana sa originalnim sadržajem. <b>Pažnja:</b> promene napravljene ce biti izgubljene.<br /><br />Napomena: nekoliko promenljivih je korišceno u izgledu (npr. <font color=darkred>{files}</font>). Promenljive ce biti zamenjene sa stvarnim sadržajem kada se generišu na sajtu.<br />');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS','Izgled: Kategorije');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_DESC','Ovo je primer kako se <b>kategorije</b> prikazuju u frontendu. Ako ste selektovali opciju <b>Prikaži pocetnu stranicu sa pregledom kategorija</b> u globalnim konfiguracijama, {files} i {checkbox_top} promenljive su samo za prikazivanje jedne kategorije.<br /><br /><font color=red>{files} {form_hidden} {form_button} {checkbox_top}</font> promenljive <font color=red>NE</font> bi trebale biti uklonjene iz koda! Obrišite samo promenljive {checkbox_top} iz koda ako je promenljiva {url_download} korišcena u izgledu fajla. {files} tag je zamenjen sa podacima iz izgleda fajla. <br /><br />Dostupne promenljive (variables):<br />{cat_title} {cat_description} {cat_pic} {files} {checkbox_top} {sum_subcats} {sum_files_cat}');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_INFO_TITLE','<b>Informacije o izgledu kategorije:</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_INFO_TEXT','<p>Ovo je graficki primer frontenda opisa kategorije. Tamno crvena ivica ukazuje polje kojem ovde možete menjati vrednosti.</p>');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES','Izgled: Fajlovi');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DESC','Ovo je primer kako su <b>fajlovi</b> prikazani u frontedu. <br />Dostupne promenljive:<br />{checkbox_list} {cat_id} {file_id} {file_title} {release} {pic_is_new} {pic_is_hot} {pic_is_updated} {thumbnail} {description} {link_to_details} {file_pic} {price_title} {price_value} {license_title} {license_text} {language_title} {language_text} {filesize_title} {filesize_value} {system_title} {system_text} {author_title} {author_text} {author_url_title} {author_url_text} {created_date_title} {created_date_value} {hits_title} {hits_value} {created_by_title} {created_by_value} {modified_by_title} {modified_by_value} {modified_date_title} {modified_date_value}'); // changed in 1.4 beta (2)
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_INFO_TITLE','<b>Informacije o izgledu fajla:</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_INFO_TEXT','<p>Primer za prikazivanje liste u frontendu. Unutar crvenog pravougaonika možete menjati nacin prikazivanja.</p>');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL','Izgled: Suma / Start download');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL_DESC','Ovo je izgled <b>sume</b> u frontendu. Lista selektovanih fajlova je predstavljena korisniku pre downloada.<br />Ovde možete modifikovati izgled te strane. CSS klase, HTML kod i arbitarni tekst mogu biti sadržani.<br /><br /><font color=red>{download_liste}</font> Promenljive <font color=red>NE</font> treba brisati iz koda!<br /><br />Dostupne promenljive:<br />{summary_pic} {title_text} {download_liste} {license_note} {download_link} {external_download_info}'); // changed in 1.4 beta (2)
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL_INFO_TITLE','<b>Informacije o izgledu sume</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL_INFO_TEXT','<p>Ovo je graficki prikaz ove strane u frontendu. Tamno crvena ivica ukazuje na polje kojem možete menjti izgled ovde. </p>');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_MAIL','Izgled: e-mail');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_MAIL_DESC','Ovde možete da podešavate <b>e-mail-ove</b> koji (kad su aktivirani) budu poslati na adresu definisanu u kategoriji posle svakog downloada. HTML kod i arbitarni tekst mogu biti ukljuceni.<br /><br />Dostupne promenljive:<br /> {file_list} {ip_address} {date_time} {user_name} {user_group}');

//BACKEND CATSLIST
DEFINE('_JLIST_BACKEND_CATSLIST_TITLE_HEAD','Kategorije');
DEFINE('_JLIST_BACKEND_CATSLIST_SEARCH','Pretraga');
DEFINE('_JLIST_BACKEND_CATSLIST_SEARCH_LIMIT','Ogranicenja');

DEFINE('_JLIST_BACKEND_CATSLIST_TITLE','Kategorija');
DEFINE('_JLIST_BACKEND_CATSLIST_PIC','Simbol');
DEFINE('_JLIST_BACKEND_CATSLIST_PUBLISHED','Objavljeno');
DEFINE('_JLIST_BACKEND_CATSLIST_LINK','Link');
DEFINE('_JLIST_BACKEND_CATSLIST_LINK_TEXT','Prikaz');
DEFINE('_JLIST_BACKEND_CATSLIST_READ','Citaj');
DEFINE('_JLIST_BACKEND_CATSLIST_DOWNLOAD','Download');
DEFINE('_JLIST_BACKEND_CATSLIST_ORDERING','Sortiranje');
DEFINE('_JLIST_BACKEND_CATSLIST_DEL',' Obrisana Kategorija(e).');

// access controll info
DEFINE('_JLIST_BACKEND_CATSLIST_ACCESS_ALL','SVI');
DEFINE('_JLIST_BACKEND_CATSLIST_ACCESS_REGGED','Registrovani');
DEFINE('_JLIST_BACKEND_CATSLIST_ACCESS_ADMINS','Specijalni');

//BACKEND CATSEDIT
DEFINE('_JLIST_BACKEND_CATSEDIT_TITLE','Izmni kategoriju');
DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_TITLE','Kategorija mora imati naziv');
DEFINE('_JLIST_BACKEND_CATSEDIT_SUC_PUBL',' Objavljene kategorije.');
DEFINE('_JLIST_BACKEND_CATSEDIT_SUC_UNPUBL',' Ne objavljene kategorije.');
DEFINE('_JLIST_BACKEND_CATSEDIT_SAVE_ERROR_DIR','Greška: direktorijum ne može biti preimenovan!');
DEFINE('_JLIST_BACKEND_CATSEDIT_EDIT','Izmeni kategoriju');
DEFINE('_JLIST_BACKEND_CATSEDIT_ADD','Dodaj kategoriju');
DEFINE('_JLIST_BACKEND_CATS_SAVEORDER','Novi redosled sacuvan');
DEFINE('_JLIST_BACKEND_CATS_USED','Ovu kategoriju menja drugi administrator.');
DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_CAT_COPY','Greška se desila prilikom kopiranja liste kategorije.');

DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_DESCRIPTION','Opis Kategorije');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_PIC_TEXT','Izaberi simbol kategorije');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_PIC_PREVIEW','Prikaz slike');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_PIC_DESC','Selektovan simbol može biti prikazan sa {cat_pic} u izgledu kategorije.');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_TITLE','Postavi prava');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_DESC','Izmeni prava. Definišite korisnicka prava za kategorije, poddirektorijume i ukljucene downloade. <b>Presudna za pristup je UVEK superiorna kategorija.</b> Ako selektujete "specijalni", korisnici sa "autor" statusom ce moci da vide i skidaju.');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_1','Javno citanje i  download');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_2','Javni i registrovani korisnici mogu da citaju i skidaju');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_3','Samo registrovani korisnici mogu da citaju i skidaju');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_4','Samo specijalni korisnici mogu da citaju i skidaju');

//BACKEND FILESLIST
DEFINE('_JLIST_BACKEND_FILESLIST_TITLE','Downloadi');
DEFINE('_JLIST_BACKEND_FILESLIST_SEARCH','Pretraga');
DEFINE('_JLIST_BACKEND_FILESLIST_SEARCH_LIMIT','Ogranicenja');
DEFINE('_JLIST_BACKEND_FILESLIST_CATS','Sve kategorije');
DEFINE('_JLIST_BACKEND_FILESLIST_NOCATS','Bez kategorije');
DEFINE('_JLIST_BACKEND_FILESLIST_FILE','Downloadi');
DEFINE('_JLIST_BACKEND_FILESLIST_HITS','Broj downloada');
DEFINE('_JLIST_BACKEND_FILESLIST_CAT','Kategorije');
DEFINE('_JLIST_BACKEND_FILESLIST_RELEASE','Verzija');

DEFINE('_JLIST_BACKEND_FILESLIST_DESCRIPTION','Opis');
DEFINE('_JLIST_BACKEND_FILESLIST_DADDED','Datum');
DEFINE('_JLIST_BACKEND_FILESLIST_FILENAME','Ime fajla');
DEFINE('_JLIST_BACKEND_FILESLIST_AUTHOR','Autor');
DEFINE('_JLIST_BACKEND_FILESLIST_PUBLISHED','Objavljeno');
DEFINE('_JLIST_BACKEND_FILESLIST_ORDERING','Redosled');
DEFINE('_JLIST_BACKEND_FILESLIST_DEL',' Download(i) obrisan(i)');
DEFINE('_JLIST_BACKEND_FILES_SAVEORDER','Novi redosled sacuvan');
DEFINE('_JLIST_BACKEND_FILES_USED','Ovaj download menja drugi administrator.');

//BACKEND FILESEDIT
DEFINE('_JLIST_BACKEND_FILESEDIT_TABTITLE_1','Baza');
DEFINE('_JLIST_BACKEND_FILESEDIT_TABTITLE_2','Opciono');
DEFINE('_JLIST_BACKEND_FILESEDIT_TABTITLE_3','Fajlovi');

DEFINE('_JLIST_BACKEND_FILESEDIT_TITLE','Izmeni Download');
DEFINE('_JLIST_BACKEND_FILESEDIT_SENT_IN_FROM','Ovaj download je postavio: ');
DEFINE('_JLIST_BACKEND_FILESEDIT_SAVE','Download sacuvan.');
DEFINE('_JLIST_BACKEND_FILESEDIT_EDIT','Izmeni Download');
DEFINE('_JLIST_BACKEND_FILESEDIT_ADD','Dodaj Download');

//DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_LIST_DESC','Select file for downloading from the server.');
DEFINE('_JLIST_BACKEND_FILESEDIT_ROOT_DIR_TITLE','KORENI Download (Upload) direktorijum');

DEFINE('_JLIST_BACKEND_FILESEDIT_UPLOAD_DIR_LIST_INFO_1','Svi poddirektorijumi su upisivi!');
DEFINE('_JLIST_BACKEND_FILESEDIT_UPLOAD_DIR_LIST_INFO_2','Poddirektorijumi <b>NISU</b> upisivi! Proverite prava na vašem serveru (FTP: namestite na CHMOD 0777)');
DEFINE('_JLIST_BACKEND_FILESEDIT_CHECK_PERMISSIONS','Fajl nije moguce postaviti. Proverite prava na vašem serveru (FTP: namestite na CHMOD 0777)');

// language
DEFINE('_JLIST_BACKEND_FILESEDIT_LANGUAGE','Jezik');
DEFINE('_JLIST_BACKEND_FILESEDIT_LANGUAGE_DEFAULT_LIST','Selektuj:, Srpski, English, German, French, Italian, Spain, Portuguese, Russian, Polish, Dutch');

// system
DEFINE('_JLIST_BACKEND_FILESEDIT_SYSTEM','Sistem');
DEFINE('_JLIST_BACKEND_FILESEDIT_SYSTEM_DEFAULT_LIST','Selektuj:, Joomla 1.0, Joomla 1.5, Windows, Linux, MacIntosh');

DEFINE('_JLIST_BACKEND_FILESEDIT_LICENSES_LIST','Selektuj Licencu');
DEFINE('_JLIST_BACKEND_FILESEDIT_REMOVE_OK','Fajl obrisan.');
DEFINE('_JLIST_BACKEND_FILESEDIT_SUC_PUBL',' Download(i) objavljeni.');
DEFINE('_JLIST_BACKEND_FILESEDIT_SUC_UNPUBL',' Download(i) de-objavljeni.');

DEFINE('_JLIST_BACKEND_FILESEDIT_REQUIRES_INFO','Polja markirana <b><font color=red>*</font></b> moraju biti popunjena!');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_TITLE','Naziv <b><font color=red>*</font></b>');
DEFINE('_JLIST_BACKEND_FILESEDIT_DESCRIPTION','Opis');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FPIC_TEXT','Izaberite simbol fajla');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FPIC_PREVIEW','Prikaži');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FPIC_DESC','Selekcija ne može biti prikazana preko promenljive.');

DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_CAT','Asocijacija kategorije <b><font color=red>*</font></b>');
DEFINE('_JLIST_BACKEND_FILESEDIT_LICENSE','Licenca');
DEFINE('_JLIST_BACKEND_FILESEDIT_RELEASE','Verzija');
DEFINE('_JLIST_BACKEND_FILESEDIT_SIZE','Velicina');
DEFINE('_JLIST_BACKEND_FILESEDIT_SIZE_DESC','Ako nije izabrano, velicina ce biti postavljena automatski');
DEFINE('_JLIST_BACKEND_FILESEDIT_DADDED','Datum i vreme');
DEFINE('_JLIST_BACKEND_FILESEDIT_DADDED_DESC','Definišite datum u sledecem formatu: <b>YYYY-MM-DD H:mm:ss</b> ili koristite kalendar. Ako je ostavljeno prazno trenutni datum-vreme se koristi automatski');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE','Selektuj fajl za upload');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_DESC','U ovom polju možete dodeliti ime fajla za postavljen dajl na server. Ovo ime ce biti korišceno za skidanje.');

DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_INFO','Trenutno dodeljen fajl:');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_ADD_FROM_SERVER','Trenutno dodeljen fajl:');

DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_ADD_FROM_SERVER_NO','Trenutno nema dodeljenog fajla!');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_ADD_FROM_SERVER_LIST','Selektuj fajl');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_REMOVE','<b>Obriši trenutno dodelje fajl sa servera</b>');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_HOME','Sajt (bez http:// na pocetku)');
DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR','Ime autora');
DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR_URL','Link ka autoru ili e-mail adresa');
DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR_URL_DESC','e-mail adrese ce biti automatski enkriptovane.');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD','KORENI direktorijum za postavljanje');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD_WRITABLE','Status: <font color=green><strong>UPIS MOGUC</strong></font>');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD_NOTWRITABLE','Status: <font color=red><strong>UPIS NIJE MOGUC</strong></font>');

DEFINE('_JLIST_BACKEND_FILESEDIT_URL_TEMP_WRITABLE','Status: <font color=green><strong>UPIS MOGUC</strong></font>');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_TEMP_NOTWRITABLE','Status: <font color=red><strong>UPIS NIJE MOGUC</strong></font>');

//BACKEND LICENSE LIST
DEFINE('_JLIST_BACKEND_LICLIST_TITLE_HEAD','Licence');
DEFINE('_JLIST_BACKEND_LICLIST_TITLE','Ime licence');
DEFINE('_JLIST_BACKEND_LICLIST_LINK','Link');
DEFINE('_JLIST_BACKEND_LICLIST_DEL',' Licenca(e) obrisane');

//Backend LICENSE EDIT
DEFINE('_JLIST_BACKEND_LICEDIT_TITLE','Izmeni licencu');
DEFINE('_JLIST_BACKEND_LICEDIT_ERROR_TITLE','Licenca mora imeti ime.');
DEFINE('_JLIST_BACKEND_LICEDIT_SAVE','Licenca sacuvana.');
DEFINE('_JLIST_BACKEND_LICEDIT_TEXT','Ime licence');
DEFINE('_JLIST_BACKEND_LICEDIT_EDIT','Izmeni licencu');
DEFINE('_JLIST_BACKEND_LICEDIT_ADD','Dodaj licencu');
DEFINE('_JLIST_BACKEND_LIC_USED','Ovu licencu menja drugi administrator.');
DEFINE('_JLIST_BACKEND_LICEDIT_LIC_TITLE','Ime licence');
DEFINE('_JLIST_BACKEND_LICEDIT_LIC_URL','Link ka licenci');
DEFINE('_JLIST_BACKEND_LICEDIT_LIC_DESCRIPTION','Opis licence');

//BACKEND TEMPLATES SUBMENU
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_NAME','Administracija izgleda');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_CATS','Kategorije');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_FILES','Fijlovi');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_SUMMARY','Suma');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_EMAIL','e-mail-ovi');
DEFINE('_JLIST_BACKEND_TEMPPANEL_TABTEXT_INFO','Informacije');

// Backend TEMPLATES TEMPLATES TITLES
DEFINE('_JLIST_BACKEND_TEMPLIST_CATTITLE_HEAD','Izgledi kategorija');
DEFINE('_JLIST_BACKEND_TEMPLIST_FILESTITLE_HEAD','Izgledi fajlova');
DEFINE('_JLIST_BACKEND_TEMPLIST_SUMTITLE_HEAD','Izgledi sume');
DEFINE('_JLIST_BACKEND_TEMPLIST_MAILTITLE_HEAD','Izgledi e-mail-ova');

//BACKEND TEMPLATES LIST
DEFINE('_JLIST_BACKEND_TEMPLIST_MENU_TEXT_ACTIVE','Aktiviraj');
DEFINE('_JLIST_BACKEND_TEMPLIST_TITLE','Ime izgleda');
DEFINE('_JLIST_BACKEND_TEMPLIST_TYP','Tip izgleda');
DEFINE('_JLIST_BACKEND_TEMPLIST_ACTIVE','Aktiviraj');
DEFINE('_JLIST_BACKEND_TEMPLIST_LOCKED','Podrazumevani izgled');
DEFINE('_JLIST_BACKEND_TEMPLIST_LOCKED_DESC','<b>Obaveštenje:</b> Podrazumevani izgledi su interni deo jDownloads-a i ne mogu biti obrisani. <br />Pri kreiranju novih podrazumevanih izgleda podrazumevani izgled teksta se prikazuje.');
DEFINE('_JLIST_BACKEND_TEMPLIST_DEL',' Izgled(i) obrisani');
DEFINE('_JLIST_BACKEND_TEMPLIST_ERROR_IS_LOCKED','Podrazumevani izgledi ne mogu biti obrisani.');
DEFINE('_JLIST_BACKEND_TEMPLIST_ERROR_IS_ACTIVE','Aktivni izgledi ne mogu biti obrisani.');

//Backend TEMPLATES EDIT
DEFINE('_JLIST_BACKEND_TEMPEDIT_TITLE','Izmeni izgled');
DEFINE('_JLIST_BACKEND_TEMPEDIT_ERROR_TITLE','Greška: Izgled mora imati ime.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_SAVE','Izgled sacuvan.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_ACTIVE','Izgled aktiviran.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_EDIT','Izmeni Izgled');
DEFINE('_JLIST_BACKEND_TEMPEDIT_ADD','Dodaj Izgled');
DEFINE('_JLIST_BACKEND_TEMP_USED','Ovaj izgled menja drugi administrator.');

DEFINE('_JLIST_BACKEND_TEMPEDIT_NAME','Ime');
DEFINE('_JLIST_BACKEND_TEMPEDIT_TYP','Tip');
DEFINE('_JLIST_BACKEND_TEMPEDIT_TEXT','Izgled');
DEFINE('_JLIST_BACKEND_TEMPEDIT_URL','Link za prikaz');

DEFINE('_JLIST_BACKEND_TEMPEDIT_NAME_DESCRIPTION','Stavite opisno ime za izgled.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_TYP_DESCRIPTION','Selektujte odgovarajuc tip izgleda.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_TEXT_DESCRIPTION','Ovde se bira izgled za frontend.');

//Backend TEMPLATES TYPS
DEFINE('_JLIST_BACKEND_TEMP_TYP1','Kategorije');
DEFINE('_JLIST_BACKEND_TEMP_TYP2','Fajlovi');
DEFINE('_JLIST_BACKEND_TEMP_TYP3','Suma');
DEFINE('_JLIST_BACKEND_TEMP_TYP4','e-mail');


//Backend Backup and Restore
DEFINE('_JLIST_BACKEND_RESTORE_TITLE_HEAD','Vracanje sigurnosne kopije');
DEFINE('_JLIST_BACKEND_RESTORE_FILE','Odaberite fajl sigurnosne kopije');
DEFINE('_JLIST_BACKEND_RESTORE_RUN','Vrati sigurnosnu kopiju odmah');
DEFINE('_JLIST_BACKEND_RESTORE_RUN_FINAL','Zapocni vracanje?');
DEFINE('_JLIST_BACKEND_RESTORE_WARNING','Za vreme vracanja, trenutna baza ce biti zamenjena sigurnosnom.<br /><br />NEMA garancije da ce sigurnosna kopija raditi bez problema. Za dodavanje sigurnosti, preporucljivo je napraviti sigurnosnu kopiju preko FTP klijenta. Ako nova jdownloads verzija preuzima trenutnu bazu, jdownloads vracanje ce pokušati da prilagodi novoj strukturi kategorija. Molimo sacekajte da se vracanje sigurnosne kopije završi pre odlaska sa stranice. u slucaju velike strukture kategorije i fajlova, proces vracanja može potrajati nekoliko minuta. Informacije o procesu vracanja mogu se naci u "Restore Log"');
DEFINE('_JLIST_BACKEND_RESTORE_MSG','%s Vracanje sigurnosne kopije je uspešno završeno.');
DEFINE('_JLIST_BACKEND_RESTORE_MSG_2','Pogledajte informacije o vracanju u logu: "Restore Log".');

//Backend CSS & LANGUAGE EDIT
DEFINE('_JLIST_BACKEND_EDIT_CSS_TITLE','CSS-fajl');
DEFINE('_JLIST_BACKEND_EDIT_LANG_TITLE','Fajl za jezik');
DEFINE('_JLIST_BACKEND_EDIT_CSS_FIELD_TITLE','Sadržaj CSS fajla');
DEFINE('_JLIST_BACKEND_EDIT_LANG_FIELD_TITLE','Sadržaj fajla za jezik');
DEFINE('_JLIST_BACKEND_EDIT_CSS_TITLE_EDIT','Izmeni CSS-fajl');
DEFINE('_JLIST_BACKEND_EDIT_LANG_TITLE_EDIT','Izmeni fajl za jezik');
DEFINE('_JLIST_BACKEND_EDIT_CSS_SAVED','CSS-fajl sacuvan');
DEFINE('_JLIST_BACKEND_EDIT_LANG_SAVED','Fajl za jezik sacuvan');
DEFINE('_JLIST_BACKEND_EDIT_LANG_WRITE_STATUS_TEXT','<big>Fajl za jezik je: ');
DEFINE('_JLIST_BACKEND_EDIT_CSS_WRITE_STATUS_TEXT','<big>CSS-fajl je: ');
DEFINE('_JLIST_BACKEND_EDIT_LANG_CSS_FILE_WRITABLE_YES','<font color="green">UPIS!</font></big>');
DEFINE('_JLIST_BACKEND_EDIT_LANG_CSS_FILE_WRITABLE_NO','<font color="#990000">NIJE UPISIV!</font></big>');
DEFINE('_JLIST_BACKEND_EDIT_LANG_CSS_FILE_WRITABLE_INFO','Fajl mora biti upisiv da bi sacuvali nova podešavanja. Možda morate promeniti prava na fajl na CHMOD 0777.');

// BACKEND OTHERS
DEFINE('_JLIST_FRONTEND_NOCAT','Još nema dostupnih kategorija!');
DEFINE('_JLIST_FRONTEND_NOFILES','Još nema dostupnih fajlova za ovu kategoriju!');

// Information text
DEFINE('_JLIST_BACKEND_INFO_TEXT_TITLE','jDownloads informacije');
DEFINE('_JLIST_BACKEND_INFO_LICENSE_TITLE','<b>Informacije u vezi licence:</b>');
DEFINE('_JLIST_BACKEND_INFO_LICENSE_TEXT','Ova komponenta je izdata pod <a href="http://www.gnu.de/documents/gpl.de.html" target="_blank">GNU/GPL licencom</a>.<br />Instaliranjem jDownloads-a prihvatate uslove ove licence kao i uslove navedene ispod. Ako ne prihvatate ovo, pod obavezom ste da uklonite komponentu. <br /><br /><b>Dodatni uslovi:</b><br /><b>Nije dozvoljeno</b> brisati povratni link na <b>naslovnoj strani komponente</b>! Povratni link dodatno mora da bude vidljiv. Ako bi ste želeli da uklonite link, molim vas da me kontaktirate: <a href="mailto:info@joomlaaddons.de">info@joomlaaddons.de</a>.<br /><br />Dodatno, ova komponenta je izdata "kakva jeste" bez dodatnih garancija! Mogucnost gubitka podataka je odbacena, itd. Korišcenje komponente je pod odgovornošcu osobe koja je instalira.<br /><b>Hvala svim korisnicima, koji su doprineli u razvoju.');

DEFINE('_JLIST_BACKEND_INFO_LINK_BACK','Nazad');

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
DEFINE('_JLIST_SETTINGS_LICENSE3_TEXT','Donacije su potrebne za dalji razvoj i/ili širenje software-a.<br />Izvor: Wikipedia');
DEFINE('_JLIST_SETTINGS_LICENSE3_URL','');

DEFINE('_JLIST_SETTINGS_LICENSE4_TITLE','Linkware');
DEFINE('_JLIST_SETTINGS_LICENSE4_TEXT','Linkware se zahteva da autorovom sajtu za vreme korišcenja software-a.');
DEFINE('_JLIST_SETTINGS_LICENSE4_URL','');

DEFINE('_JLIST_SETTINGS_LICENSE5_TITLE','Charityware');
DEFINE('_JLIST_SETTINGS_LICENSE5_TEXT','Charityware dozvoljava slobodno korišcenje, autor traži donacije za dobar razlog.');
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
DEFINE('_JLIST_SETTINGS_INSTALL_1','<b>Selektuj sve fajlove:</b>');
DEFINE('_JLIST_SETTINGS_INSTALL_2','');
DEFINE('_JLIST_SETTINGS_INSTALL_3','Informacija o downloadu');
DEFINE('_JLIST_SETTINGS_INSTALL_4','webmaster@yourwebsite.com');
DEFINE('_JLIST_SETTINGS_INSTALL_5','info@yourwebsite.com');


// ****************************************************************************
//		NEW IN VERSION 1.2 beta
// ****************************************************************************

// JAVASCRIPT (jdownloads.js) MESSAGES <<< Umlaute NICHT umwandeln !! >>>
DEFINE('_JLIST_JAVASCRIPT_TEXT_2','Još uvek ne postoji nijedan fajl za download u ovoj kategoriji.\\n');
DEFINE('_JLIST_JAVASCRIPT_TEXT_1','Molimo vas da selektujete bar jedan fajl u kategoriji pre stiskanja dugmeta za nastavljanje.');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_TEXT_TO_SHORT','Tekst pretrage prekratak, molimo vas da unesete ba 3 karaktera!'); 
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_NO_OPTION','Morate odabrati bar jednu opciju pretrage!'); 
// end javascript messages


DEFINE('_JLIST_INSTALL_1_2','Podaci vec postoje u bazi!');
DEFINE('_JLIST_INSTALL_2_2','Data was altered, added or non existent (translation or context to be checked!)!');
DEFINE('_JLIST_INSTALL_17','Instalacija JoomFish-a nadena! jDownloads JoomFish definicije dodate:');
//------------------------------------------
DEFINE('_JLIST_INSTALL_18','jDownloads JoomFish podaci definicije su kopirani u:');
DEFINE('_JLIST_INSTALL_19','Ako želite da koristite ove definicije sa JoomFish-om, prekopirajte ih posle:');

DEFINE('_JLIST_FRONTEND_HOME_LINKTEXT','Pregled');
DEFINE('_JLIST_FRONTEND_SUBTITLE_OVER_CATLIST','Pregled');
DEFINE('_JLIST_FRONTEND_SUBTITLE_OVER_ONE_CAT','Kategorija');
DEFINE('_JLIST_FRONTEND_SUBTITLE_OVER_DETAIL','Detalji downloada');

// PAGENAVIGATION FRONTEND
DEFINE('_JLIST_FRONTEND_HEADER_PAGENAVI_PAGE_TEXT','Strana:');
DEFINE('_JLIST_FRONTEND_HEADER_PAGENAVI_TO_TEXT','od');

DEFINE('_JLIST_BACKEND_FILESEDIT_PRICE','Cena');
DEFINE('_JLIST_BACKEND_FILESEDIT_PRICE_DESC','Odaberi cenu i valutu.');

DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_4','Restore Log');

//FRONTEND UPLOAD
DEFINE('_JLIST_FRONTEND_UPLOAD_ACCESS_ONLY_REGGED','Morate biti registrovan korisnik da bi poslali fajlove. Ako ste vec registrovani na ovom sajtu, molimo va ulogujte se. ');
DEFINE('_JLIST_FRONTEND_UPLOAD_ACCESS_ONLY_SPECIALS','Nemate ovlašcenja da postavite fajlove.');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_NO_CATS_EXIST','Greška: Fajlovi mogu biti postavljeni samo ako je predhodno napravljena kategorija u objavljena.');    
DEFINE('_JLIST_FRONTEND_UPLOAD_LINKTEXT','Postavi fajl');
DEFINE('_JLIST_FRONTEND_UPLOAD_PAGE_TITLE','Postavi fajl');
DEFINE('_JLIST_FRONTEND_UPLOAD_FILENAME','Selektuj fajl:');
DEFINE('_JLIST_FRONTEND_UPLOAD_FILENAME_BUTTON_TEXT_SEND','Pošalji fajl');
DEFINE('_JLIST_FRONTEND_UPLOAD_FILENAME_BUTTON_TEXT_CLEAR','Obriši polja');
DEFINE('_JLIST_FRONTEND_UPLOAD_ALLOWED_FILETYPE','Dozvoljene ekstenzije');
DEFINE('_JLIST_FRONTEND_UPLOAD_ALLOWED_MAX_SIZE','Dozvoljena maksimalna velicina');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_NO_VALUE','Greška: nisu sva polja popunjena!<br />Molimo vas da popunite sva zahtevana polja.');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_FILETYPE','Greška: ekstenzija odabranog fajla nije podržana!<br />Molimo vas da selektujete samo dozvoljene ekstenzije.');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_FILESIZE','Greška: velicina odabranog fajla je veca od dozvoljene maksimalne velicine!');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_MOVE_FILE','Greška: desila se greška pri transferu fajla na server!');
DEFINE('_JLIST_FRONTEND_UPLOAD_OK','Fajl je uspešno transferovan na server!<br />Objavljivanje još mora biti odobreno.');

// FRONTEND UPLOAD FIELD TITLE
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_NAME','Vaše ime:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_MAIL','Vaša e-mail adresa:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_TITLE_FILE','Naziv downloada:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_PRICE','Cena:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_DESC_FILE','Kratak opis:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_DESC_FILE_LONG','Duži opis:');    
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_AUTHOR','Ime autora:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_AUTHOR_URL','Sajt autora:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_LIZENZ','Licenca:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_VERSION','Verzija:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_LISTBOXES','Selktuj:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_CATEGORY','Kategorija:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_LANGUAGE','Jezik:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_SYSTEM','Sistem:');
DEFINE('_JLIST_FRONTEND_UPLOAD_SYMBOL_TEXT','Obavezna polja');

//FRONTEND SEARCH
DEFINE('_JLIST_FRONTEND_SEARCH_LINKTEXT','Pretraži');

// AUTOCHECK DOWNLOADS
DEFINE('_JLIST_BACKEND_AUTOCHECK_NEW_CATS','novi direktorijumi su nadeni i dodati kao kategorije!!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_MISSING_CATS','Direktorijum kategorija nisu više nadeni, tako da odgovarajuce kategorije nece biti objavljene!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NO_NEW_CATS','Nisu nadeni novi direktorijumi!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NO_MISSING_CATS','Svi objavljeni direktorijumi kategorija postoje!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_LOG_TITLE','Poslednja interna poruka (izvršene akcije):');
DEFINE('_JLIST_BACKEND_AUTOCHECK_LOG_TAB_TITLE','Poslednja interna poruka (akcije) za vreme Downloada pracene'); 
DEFINE('_JLIST_BACKEND_AUTOCHECK_REFRESH_MESSAGE','Morate osvežiti stranicu da bi ste videli izmene!'); 

DEFINE('_JLIST_BACKEND_RESTORE_LOG_TAB_TITLE','Rezultati poslednjeg vracanja sigurnosne kopije'); 

DEFINE('_JLIST_BACKEND_PANEL_STATUS_DESC_OFFLINE','Mod za izmene je aktiviran! Odeljak za download nije dostupan trenutno za normalne korisnike! Takode nije dostupna ni za clanove koji pripadaju "Autor" grupi.');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_DOWNLOADS_HEADER','Status Downloada');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_DOWNLOADS_OFF_DESC','Automatski monitoring direktorijuma za download nije aktiviran!');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_VERSION_HEADER','Informacije o trenutnoj verziji jDownloadsa');

DEFINE('_JLIST_BACKEND_SETTINGS_DEL_TEMPFILE_TIME','Kašnjenje (u minutama) za brisanje privremenog zip fajla');
DEFINE('_JLIST_BACKEND_SETTINGS_DEL_TEMPFILE_TIME_DESC','Naznacite vrednost u minutama, posle kog se privremeno kreirani Zip fajlovi za višestruki download brišu sa servera. Ako nudite velike fajlove, onda bi trebali da stavite vecu vrednost. Podrazumevana vrednost je 20 minuta.');

DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_FRONTEND_HEAD_UPLOAD','Konfiguracija Frontend Uploada');
DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIR_RENAME_ERROR','Greška: Koreni direktorijum za download nije moguce preimenovati!');
DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIR_RENAME_OK',' - Koreni direktorijum za download uspešno preimenovan!');

DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO','Monitoring direktorijuma za download? ');
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_DESC','Ako je ova opcija selektovana, svi direktorijumi su pregledani za promene i baza je automatski osvežena. Tako da direktorijumi i fajlovi dodati preko FTPa na server su automatski dodati kao novi podaci u Download i Kategorije tabelama. Ako kategorije ili fajlovi nisu više nadeni, onda odgovarajuci unosi su podešeni na : <b>Nije objavljeno</b >.<b>Standardno podešavanje: DA.</b>');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_USE_CHECKBOX_INFO','<b>Naznaka:</b> Opcija sa Check box-om za download se definiše u administraciji izgleda!');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_USE_SYMBOLE_INFO','<b>Naznaka:</b> Mini simboli prikaz se definiše u administraciji izgleda za fajlove!');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FILES_PER_SIDE','Broj stavki po strani');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FILES_PER_SIDE_DESC','Podesite broj kategorija/downloada koji ce biti prikazan na stranici u front-end-u.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_HEADER_TITLE','Naziv koji ce biti korišcen za header');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_HEADER_DESC','Definišite ovde naziv koji ce biti prikazivan u front-end-u kao naziv komponente, npr.. "Downloads".');

// FRONTEND UPLOAD CONFIG
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACTIVE','Frontend Upload aktivacija:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACTIVE_DESC','Ako je aktivirano, korisnicke grupe definisane ispod mogu postavljati fajlove preko formulara.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_PERMISSIONS','Ko može da postavlja fajlove:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_PERMISSIONS_DESC','Ovde definišete koje grupe korisnika mogu da postavljaju fajlove. "Specijalni" postavka omogucuje clanovima sa statusom >= "author" da pristupe formularu za postavljanje.');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACCESS_ALL','Svi');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACCESS_REGGED','Registrovani');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACCESS_ADMINS','Specijalni');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILETYPES','Dozvoljene ekstenzije fajlova:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILETYPES_DESC','Definišite individualne ekstenzije koje mogu biti postavljene sa formularom za postavljanje. Izmedu svake stavke mora stajati zarez (,).');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILESIZE','Maksimalna velicina u KB:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILESIZE_DESC','Definišite ovde maksimalnu dozvoljenu velicinu za postavljanje fajlova u kilobajtima (1024 Kb = 1 Mb). Podrazumevana vrednost: 2048.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FORM_TEXT','Tekst za formular za postavljanje:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FORM_TEXT_DESC','Ovde definišete izgled za upload formular (ispred ili iza teksta). Promenljiva: {form} ce biti zamenjena sa stvarnim formularom u frontend izlazu. Simbol promenljive ne može biti obrisan!');

// Platzhalter {form} NICHT ÄNDERN ODER LÖSCHEN !!!
// DO NOT DELETE, EDIT OR TRANSLATE: {form} !!! 

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FORM_TEXT_LAYOUT','Ovaj formular omogucuje postavljanje fajla na server. Sva polja sa simbolima su obavezna. Vaše ime ili e-mail adresa nece nikad biti odana trecem licu i služi samo za internu upotrebu.<br />
{form}<br />');

DEFINE('_JLIST_BACKEND_TEMPLIST_DEL_QUEST','Obriši izgled(e)?');
DEFINE('_JLIST_BACKEND_LICLIST_DEL_QUEST','Obriši Licencu(e)?');

DEFINE('_JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD_STATUS_DESC','Ovde vidite konfiguracioni status za KORENI direktorijum za upload. Ako nije moguc upis, molimo vas da proverite pristupna prava sa FTP programom. Prava bi trebala da budu na CHMOD 0777.');

DEFINE('_JLIST_BACKEND_FILESEDIT_HITS','Broj prošlih Downloada');
DEFINE('_JLIST_BACKEND_FILESEDIT_HITS_DESC','Ovde Download brojac može biti promenjen ili anuliran');

DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_CAT_DESC','Morate dodeliti Download kategoriji. Selektujte iz liste odgovarajucu kategoriju. Ako kasnije selektujete drugu kategoriju, onda ce fajlovi biti automatski premešteni u direktorijum nove kategorije.');

DEFINE('_JLIST_BACKEND_FILESEDIT_DESCRIPTION_KURZ','Kratak opis');
DEFINE('_JLIST_BACKEND_FILESEDIT_DESCRIPTION_LONG','Dugacak opis');
DEFINE('_JLIST_BACKEND_FILESEDIT_EDITOR_INFO','U formularu za konfiguraciju može biti namešteno da li je aktiviran WYSIWYG editor ili obicno polje za tekst za izmene.');
DEFINE('_JLIST_BACKEND_FILESEDIT_SENT_IN_FROM_STATUS','Status: ');
DEFINE('_JLIST_BACKEND_FILESEDIT_SENT_IN_FROM_EMAIL','e-mail adrese: ');
DEFINE('_JLIST_BACKEND_FILESEDIT_ERROR_TITLE','Greška: Download mora imati naziv!');
DEFINE('_JLIST_BACKEND_FILESEDIT_CATLIST_ERROR','Greška: nije dodeljena kategorija!');
DEFINE('_JLIST_BACKEND_FILESEDIT_SAVE_MOVEFILE_ERROR',' - Greška: Fajl nije moguce premestiti!');
DEFINE('_JLIST_BACKEND_FILESEDIT_SAVE_MOVEFILE_OK',' - Fajl uspešno premešten!');

DEFINE('_JLIST_BE_NO_PUBL_FILES','Fajlovi bez kategorije ne mogu biti objavljeni!');
DEFINE('_JLIST_BACKEND_FILESLIST_DEL_QUEST','Obriši Fajl(ove)?');
DEFINE('_JLIST_BACKEND_FILESLIST_DESCRIPTION_SHORT','Opis (Kratak)');
DEFINE('_JLIST_BACKEND_FILESLIST_PIC','Simbol');
DEFINE('_JLIST_BACKEND_FILESLIST_DEL_FILES_OPTION','<font color=#990000>Obriši dodeljen fajl u akciji za brisanje:</font>');

DEFINE('_JLIST_BACKEND_FILESLIST_DEL_FILES_OPTION_TOOLTIP','Ako DA, fajlovi ne brišu se samo fajlovi nego i fajlovi sa servera! Ako fajl nije obrisan a pritom monitoring ukljucen, onda je fajl automatski smatran kao nova stavka!<br /><b>Preporuceno podešavanje: DA</b >.');
DEFINE('_JLIST_BACKEND_FILESEDIT_DEL_FILES_OK',' - Vezani fajlovi se takode brišu.');
DEFINE('_JLIST_BACKEND_FILESEDIT_DEL_FILES_ERROR',' - Vezani fajlovi se ne brišu dok ne nestanu.');
DEFINE('_JLIST_BACKEND_FILESLIST_FILE_ID','ID');

DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_CAT_DEL_AFTER_COPY','Desila se greška prilikom brisanja stare kategorije');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_TITLE','Naziv kategorije<b><font color=red>*</font></b>');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_TITLE_DESC','Identifikacija kategorije. Za svaku kategoriju kreira se direktorijum sa imenom baziranim na nazivu ali bez specijalnih karaktera? Izuzeci: <b>" - _ . , " </b>i space (prazno polje).');
DEFINE('_JLIST_BACKEND_CATSEDIT_ROOT_CAT_LISTBOX','Glavna kategorija');
DEFINE('_JLIST_BACKEND_CATSEDIT_ROOT_CAT_LISTBOX_NEW','Nova glavna kategorija');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_TITLE','Dodeljenost kategorije');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_TITLE_NEW','Nova kategorija kreirana u / kao <b><font color=red>*</font></b>');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_DESC_NEW','Ako se nova kategorija kreira, onda selektujte "Glavna kategorija". Ako nova kategorija treba da bude podkategorija postojece kategorije, onda odaberite postojecu kategoriju kao nadkategoriju. Nova kategorija ce biti kreirana ispod. Hijerarhija može biti menjana kasnije.');

DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_DESC','Ako želite da premestite kategoriju, selektujte nadkategoriju gde želite da premestite. Ako podkategorija treba kasnije da služi kao glavna, selektujte "Glavna kategorija" opciju.<br /><br /><b>Savet:</b> 
Prilikom cuvanja, trenutna kategorija se odmah prebacuje na serveru. Ako prebacena kategorija sadrži podkategorije, one su takode premeštene. Da bi bili sigurni sa internim operacijama, SVE kategorije koje se trenutno menjaju su zakljcane dok se ova operacija izvršava!');
DEFINE('_JLIST_BACKEND_CATSEDIT_SAVE','Kategorija sacuvana.');
DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_TITLE_CHARS_NOT_ALLOWED','Greška: naziv sadrži nedozvoljene specijalne karaktere!');
DEFINE('_JLIST_BACKEND_CATSLIST_DEL_QUEST','Obriši kategoriju(e)?');
DEFINE('_JLIST_BACKEND_CATSLIST_CATID','ID');
DEFINE('_JLIST_BACKEND_CATSLIST_PATH','Direktorijum');

// BACKEND CATS DELETE
DEFINE('_JLIST_BE_NO_DEL_SUBCATS_EXISTS','Kategoriju nije moguce obrisati jer sadrži podkategorije!');
DEFINE('_JLIST_BE_NO_DEL_FILES_EXISTS','Kategoriju nije moguce obrisati jer sadrži fajlove!');
DEFINE('_JLIST_BE_DEL_CATS_DIRS_OK',' - Direktorijum uspešno obrisan!');
DEFINE('_JLIST_BE_DEL_CATS_DIRS_ERROR',' - Gredka prilikom brisanja!');

DEFINE('_JLIST_BACKEND_NO_SELECT_ACTION','Molimo vas da prvo odaberete linijske stavke.!');

DEFINE('_JLIST_BE_SETTINGS_FILES_PER_SIDE_BE_TITLE','Koliko linija da prikazuje u listi');
DEFINE('_JLIST_BE_SETTINGS_FILES_PER_SIDE_BE_DESC','Ovde možete da definišete koliko linija da se prikazuje u listi u Backendu.');

DEFINE('_JLIST_UPLOAD_MAX_FILESIZE_INFO_TITLE','Maksimalna velicina kao definisana u konfiguracionom php.ini fajlu:');

DEFINE('_JLIST_BACKEND_TEMPLATE_ACTIVE_ERROR','Samo JEDAN izgled može biti selektovan za aktivaciju!');
DEFINE('_JLIST_AUTO_FILE_CHECK_IMPORT_BY','Automatsko ukljucivanje');          
DEFINE('_JLIST_AUTO_FILE_CHECK_ADDED',   'Fajl dodat    ');
DEFINE('_JLIST_AUTO_FILE_CHECK_DISABLED','Fajl nije naden      ');
DEFINE('_JLIST_AUTO_CAT_CHECK_ADDED',    'Kategorija dodata');
DEFINE('_JLIST_AUTO_CAT_CHECK_DISABLED', 'Kategorija nije nadena  ');

// MESSAGES AFTER CHECK FILES AND DIRS WHEN UPDATED FROM 1.1 alpha
DEFINE('_JLIST_CHECK_CATS_TITEL1','Updateovali ste vašu staru verziju jDownloadsa na verziju 1.2');     
DEFINE('_JLIST_CHECK_CATS_TITEL2','Kao posledica, sve kategorije i fajlovi vec kreirani moraju biti transferovani u novu strukturu kategorija!');          

DEFINE('_JLIST_CHECK_FINISH','Proces prekinut!');
DEFINE('_JLIST_CHECK_CATS_CREATE','Kategorije-direktorijumi kreirani!');
DEFINE('_JLIST_CHECK_FILES_MOVE','Fajlovi premešteni!!');
DEFINE('_JLIST_CHECK_FILES_NOT_FOUND','Fajlovi nisu nadeni!');
DEFINE('_JLIST_CHECK_FILES_NOT_MOVED','Fajlovi ne mogu biti premešteni na dodeljenu kategoriju!');
DEFINE('_JLIST_CHECK_CATS_NOT_FOUND','Kategorija ne može biti kreirana!');

// MESSAGES AFTER RESTORE BACKUPFILE
DEFINE('_JLIST_AFTER_RESTORE_TITLE_1','Proces vracanja aktivan:');
DEFINE('_JLIST_AFTER_RESTORE_1','Sadrcaj vracen!');
DEFINE('_JLIST_AFTER_RESTORE_TITLE_2','Proces provere baze zapocet:');
DEFINE('_JLIST_AFTER_RESTORE_3','Sigurnosna kopija kreirana sa predhodnom verijom jDownloads-a!');
DEFINE('_JLIST_AFTER_RESTORE_4','Kategorije i fajlovi se proveravaju:');
DEFINE('_JLIST_AFTER_RESTORE_TITLE_3','Detaljni rezultat:');

DEFINE('_JLIST_AUTOCHECK_DIR_NOT_EXIST','Greška: Koreni direktorijum ne postoji!');
DEFINE('_JLIST_AUTOCHECK_DIR_NOT_EXIST_2','Molimo vas da napravite dva direktorijuma /downloads i /downloads/tempzipfiles u vašem Joomla korenom direktorijumu preko ftp programa i podesite pristupna prava na CHMOD 0777 - u suprotnom jDownloads nece raditi!');
DEFINE('_JLIST_FRONTEND_HEADER_CATLIST_TITLE','Selektujte Kategoriju');
DEFINE('_JLIST_FRONTEND_HEADER_SUMMARY_TITLE','Suma');
DEFINE('_JLIST_FRONTEND_HEADER_FINISH_TITLE','Download');

// FRONTEND SEARCH
DEFINE('_JLIST_FRONTEND_SEARCH_TITLE','Pretraga');
DEFINE('_JLIST_FRONTEND_SEARCH_TEXT_TITLE','Traži sledece');
DEFINE('_JLIST_FRONTEND_SEARCH_IN_TITLE','Pretraži po nazivima');
DEFINE('_JLIST_FRONTEND_SEARCH_IN_DESC','Pretraži po opisu');
DEFINE('_JLIST_FRONTEND_SEARCH_INFO_TEXT','Maksimalno se prikazuje 20 fajlova u rezultatu pretrage.');  
DEFINE('_JLIST_FRONTEND_SEARCH_BUTTON_TEXT','Traži');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_TITLE','Rezultati pretrage');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_SUM_FILES','nadeno');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_NO_SUM_FILES','Nijedan fajl nije naden kao rezultat pretrage.');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_SEARCH_TEXT','Traženo');

// NEW LAYOUT FOR VIEW DOWNLOAD-DETAILS
DEFINE('_JLIST_BACKEND_TEMP_TYP5','Detalji Download-a');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_DETAILS','Detalji Download-a');
DEFINE('_JLIST_BACKEND_TEMPLIST_DETAILSTITLE_HEAD','Izgled Detalja Download-a');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS','Izgled: Detalji Download-a');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_DESC','Ovo je izgled strane Download <b>detalja</b> u front-endu.<br /><br />Ne brišite promenljivu <font color=red>{url_download}</font>!<br /><br />Dostupne promenljive:<br />{file_title} {thumbnail} {pic_is_new} {pic_is_hot} {pic_is_updated} {url_download} {mirror_1} {mirror_2} {description_long} {details_block_title} {license_title} {license_text} {price_title} {price_value} {language_title} {language_text} {filesize_title} {filesize_value} {system_title} {system_text} {author_title} {author_text} {author_url_title} {author_url_text} {created_date_title} {created_date_value} {hits_title} {hits_value} {created_by_title} {created_by_value} {modified_by_title} {modified_by_value} {modified_date_title} {modified_date_value}.'); // changed in 1.4 beta (2)
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_INFO_TITLE','<b>Informacije o izgledu za detalje downloada:</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_INFO_TEXT','<p>Graficki primer stranice u frontendu. Tamno crvena ivica ukazuje na polje koje možete da menjate ovde.</p>');

// FRONTEND DOWNLOAD DETAILSITE
DEFINE('_JLIST_FE_DETAILS_PATHWAY_TEXT','Lokacija fajla');
DEFINE('_JLIST_FE_DETAILS_LINK_TEXT_TO_DETAILS','>> Detalji');
DEFINE('_JLIST_FE_DETAILS_LICENSE_TITLE','Licenca');
DEFINE('_JLIST_FE_DETAILS_PRICE_TITLE','Cena');
DEFINE('_JLIST_FE_DETAILS_LANGUAGE_TITLE','Jezik');
DEFINE('_JLIST_FE_DETAILS_FILESIZE_TITLE','Velicina');
DEFINE('_JLIST_FE_DETAILS_SYSTEM_TITLE','Sistem');
DEFINE('_JLIST_FE_DETAILS_AUTHOR_TITLE','Autor');
DEFINE('_JLIST_FE_DETAILS_AUTHOR_URL_TITLE','Sajt');
DEFINE('_JLIST_FE_DETAILS_CREATED_DATE_TITLE','Kreirano');
DEFINE('_JLIST_FE_DETAILS_HITS_TITLE','Download sekcija');

// LAYOUT DOWNLOAD-DETAILS
///////////////////////////////////////////////////////////////////////////////
// Template defaults for _jdownloads_templates - Please do not change this and NO translation here!!!
// Vorgabewerte f&uuml;r Layouttabelle - hier bitte KEINE &Auml;nderungen oder Übersetzungen hier vornehmen !!!
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
DEFINE('_JLIST_BACKEND_TEMPEDIT_NOTE_TITLE','Naznake izgleda');
DEFINE('_JLIST_BACKEND_TEMPEDIT_NOTE_DESC','Dodatne informacije za izgled mogu biti definisane ovde.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_CHECKBOX_TITLE','Da li izgled koristi CHECK box-e?');
DEFINE('_JLIST_BACKEND_TEMPEDIT_CHECKBOX_DESC','Ako da, CHECK box naslovna linija i dugme za nastavak se prikazuju. Dodatna promenljiva <b>{checkbox_list}</b> mora biti ubacena u izgled. Ako ne, promenljiva <b>{url_download}</b>mora biti ubacena u izgled.'); 
DEFINE('_JLIST_BACKEND_TEMPEDIT_SYMBOLE_TITLE','Ubaci mini-simbol?');
DEFINE('_JLIST_BACKEND_TEMPEDIT_SYMBOLE_DESC','Ako da, mini-simbol ce biti ubacen. Velicina simbola može biti podešena u konfiguracionom delu.');

DEFINE('_JLIST_FE_YES','Da');
DEFINE('_JLIST_FE_NO','Ne');

DEFINE('_JLIST_BACKEND_EDIT_PUBLISHED','Objavljeno');
DEFINE('_JLIST_BACKEND_FILESEDIT_MODIFIED_DATE','Zadnji put modifikovano');
DEFINE('_JLIST_BACKEND_FILESEDIT_MODIFIED_BY','od strane');
DEFINE('_JLIST_BACKEND_FILESEDIT_CREATED_BY','Kreirao');

DEFINE('_JLIST_BACKEND_FILESEDIT_INFO_FIELDS_DESC','Kutijice levo, daju informacije: ime izdavaca, poslednjeg editora, poslednje vreme izmene');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CATLISTBOX_ACTIVE','Prikaži listu kategorija u zaglavlju?');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CATLISTBOX_DESC','Ako DA, lista sa svim objavljenim kategorijama za korisnike prema njihovim pravima  se prikazuju na desnoj strani zaglavlja. Iz ove liste je moguce direktno pristupati Kategoriji/Podkategoriji.');

// SAMPLE DATA 
DEFINE('_JLIST_SAMPLE_DATA_CAT_NAME_ROOT','Primer kategorije');
DEFINE('_JLIST_SAMPLE_DATA_CAT_NAME_SUB','Primer podkategorije');
DEFINE('_JLIST_SAMPLE_DATA_CAT_NAME_TEXT','Ovo je primer kategorije za ilustraciju. Ovo može biti obrisano bilo kada.');
DEFINE('_JLIST_SAMPLE_DATA_FILE_NAME','Primer fajla');
DEFINE('_JLIST_SAMPLE_DATA_FILE_NAME_TEXT','Ovo je primer fajla za ilustraciju. Ovo može biti obrisano bilo kada.');
DEFINE('_JLIST_SAMPLE_DATA_CREATE_ERROR','Zbog greške, primeri nisu kreirani! Molimo vas da proverite opcije u jDownloads glavnom meniju.');
DEFINE('_JLIST_SAMPLE_DATA_CREATE_OK','Primeri uspešno kreirani!');
DEFINE('_JLIST_SAMPLE_DATA_BE_OPTION_LINK_TEXT','Instaliraj primere sada');
DEFINE('_JLIST_SAMPLE_DATA_EXISTS','Primeri vec postoje!');
DEFINE('_JLIST_SAMPLE_DATA_BACK_TO_PANEL','Vrati se na kontrolni panel');


DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_HEAD_INFO2','<br /><b><u>Objašnjenje izgleda</u></b><br /><b>Kategorije: </b>Definiše izgled kategorija kao i fajlova za korišcenje CHECK box-a iznad i ispod download liste.<br /><b>Fajlovi: </b>Definiše izgled Download liste prikazane ispod kategorija.<br /><b>Detalji Download-a: </b>Definiše izgled Detaljnog prikaza download-a.<br /><b>Suma: </b>Definiše izgled sumirane stranice (sa koje se zapocinje download) sa listom selektovanih fajlova za download.<br /><b>e-mails: </b>Definiše izgled e-mail-a koji se šalje administratoru posle svakog download-a.');

// ANTI_LEECH_CONFIG
DEFINE('_JLIST_BACKEND_SETTINGS_ANTILEECH_TITLE','Zaštita vašeg Download-direktorijuma?');
DEFINE('_JLIST_BACKEND_SETTINGS_ANTILEECH_DESK','Ako DA, htaccess.txt ce biti kopiran u vaš koreni download direktorijum i biti preimenovan u .htaccess. Zaštita ce biti aktivirana i svaki spoljni pristup blokiran ukljucujuci i poddirektorijume. <b><Preporuceno: DA!</b>');
DEFINE('_JLIST_ACTIVE_ANTILEECH_ERROR',' - Greška pri kopiranju htaccess.txt fajla!');
DEFINE('_JLIST_ACTIVE_ANTILEECH_OK',' - Zaštita od skidanja aktivirana!');
DEFINE('_JLIST_ACTIVE_ANTILEECH_OFF_ERROR',' - Greška pri brisanju .htaccess fajla!');
DEFINE('_JLIST_ACTIVE_ANTILEECH_OFF_OK',' - Zaštita od skidanja deaktivirana!');

DEFINE('_JLIST_FRONTEND_ANTILEECH_MESSAGE','Neovlašcen pristup fajlovima!');
DEFINE('_JLIST_FRONTEND_FILE_NOT_FOUND_MESSAGE','Traženi fajl nije naden!<br /><br />Molimo da obavestite Webmaster-a!');

DEFINE('_JLIST_FRONTEND_SUMMARY_ZIP_FILESIZE','Velicina paketa za download');
DEFINE('_JLIST_FRONTEND_NEXT_SITE_BUTTON','&nbsp;>>&nbsp;');
DEFINE('_JLIST_FRONTEND_PREV_SITE_BUTTON','&nbsp;<<&nbsp;');

DEFINE('_JLIST_FRONTEND_SUBHEADER_NUMBER_OF_CATS_TITLE','Broj kategorija');
DEFINE('_JLIST_FRONTEND_SUBHEADER_NUMBER_OF_SUBCATS_TITLE','Broj podkategorija');
DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_CATLIST','Molimo vas da izaberete kategoriju ili >Glavnu kategoriju<');

// NEW OPTION FOR DIREKT DOWNLOAD LINK
DEFINE('_JLIST_BACKEND_SETTINGS_DIRECT_DOWNLOAD_ACTIVE_TITLE','Aktivirati direktan download?');
DEFINE('_JLIST_BACKEND_SETTINGS_DIRECT_DOWNLOAD_ACTIVE_DESC','Ako DA: prilikom korišcenja promenljive <b>{url_download}</b> u izgledu, download se odmah zapocinje, bez prikaza sume.');

// NEW OPTION FOR HOT AND NEW IMAGES IN DOWNLOADS
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_TITLE','Na kojoj tacki je download validan kao "popularan"');
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_DESC','Definišite broj skidanja posle kojeg je fajl oznacen sa "HOT". Iza naziva fajla "HOT" simbol ce biti prikazan.');
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_NEW_PIC_TITLE','Naziv fajla za simbol');
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_NEW_PIC_DESC','Fajl mora biti u direktorijumu: <b>../components/com_jdownloads/images</b>.');
DEFINE('_JLIST_BACKEND_SETTINGS_NEW_TITLE','Koliko dugo je fajl "new"');
DEFINE('_JLIST_BACKEND_SETTINGS_NEW_DESC','Definišite broj dana, koliko je fajl validan kao "NEW". Iza naziva fajla "NEW" simbol ce biti prikazan.');
// NEW OPTION FOR DOWNLOAD PIC BUTTON IN DOWNLOAD DETAILS
DEFINE('_JLIST_BACKEND_SETTINGS_DETAILS_DOWNLOAD_BUTTON_TITLE','Naziv fajla za simbol'); 
DEFINE('_JLIST_BACKEND_SETTINGS_DETAILS_DOWNLOAD_BUTTON_DESC','Fajl mora biti u direktorijumu <b>../components/com_jdownloads/images</b> i bice korišcen u detaljima kao link za skidanje.');

// NEW IN 1.2 beta 2
DEFINE('_JLIST_FRONTEND_UPLOAD_AUTO_PUBLISH','Fajlovi se automatski objavljuju:');
DEFINE('_JLIST_FRONTEND_UPLOAD_AUTO_PUBLISH_DESC','Ako DA, fajlovi ce biti objavljeni odmah posle upload-a.');

// NEW IN 1.2 stable
DEFINE('_JLIST_BACKEND_DIRSEDIT_CREATE_DIR_MESSAGE_ERROR','Greška: Direktorijum nije moguce kreirati! Proverite preko FTPa da je CHMOD postavljen na 0777 za sve jDownloads direktorijume!');

// NEW IN 1.3 stable

// FOR CREATES MAIN MENU IN INSTALL
DEFINE('_JLIST_BACKEND_CPANEL_MAIN','Kontrolni panel');
DEFINE('_JLIST_INSTALL_DEFAULT_DATE_FORMAT','%Y-%m-%d %H:%M:%S');

// NEW OPTION SORTORDER CATEGORIES
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SORTCATSORDER_TEXT','Redosled sortiranja kategorija');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SORTCATSORDER_DESC','Redosled po kom su kategorije sortirane u frontendu. Izaberite "Standard" da bi koristili backend-ov podrazumevani redosled.');
DEFINE('_JLIST_BACKEND_SETTINGS_CATS_ORDER_1','Standard');
DEFINE('_JLIST_BACKEND_SETTINGS_CATS_ORDER_2','Po imenu na gore');
DEFINE('_JLIST_BACKEND_SETTINGS_CATS_ORDER_3','Po imenu na dole');

// NEW TAB TITLE FOR AUTODETECT
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_TAB_TITLE','Monitoring');
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_HEADER_TITLE','Monitoring download direktorijuma');

// NEW OPTION AUTOPUBLISH NEW FOUNDED FILES
DEFINE('_JLIST_BACKEND_SETTINGS_DOWNLOADS_AUTOPUBLISH_TITLE','Automatsko objavljivanje fajlova?');
DEFINE('_JLIST_BACKEND_SETTINGS_DOWNLOADS_AUTOPUBLISH_DESC','Ako DA, novi fajlovi su odmah objavljeni. Podrazumeva se da ste ovu opciju predhodno aktivirali.<br /><b>Podrazumevano: Ne.</b>');

// NEW OPTION  FOR AUTODETECT ALL FILES
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_ALL_FILES_TITLE','Monitoring svih tipova fajlova?');
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_ALL_FILES_DESC','Ako je ova opcija aktivirana, svi tipovi fajlova se motre!');

// NEW OPTION  FOR AUTODETECT ONLY THIS FILES
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_ONLY_THIS_FILES_TITLE','Monitoring samo sledecih tipova fajlova:');
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_ONLY_THIS_FILES_DESC','Ako je ova opcija aktivirana, samo tipovi fajlova ovde definisani se motre! Vrednosti moraju biti odvojene zarezom (,).');

// NEW COPY DOWNLOADS FUNCTION
DEFINE('_JLIST_BACKEND_FILES_COPY_TITLE','Kopiraj fajlove');
DEFINE('_JLIST_BACKEND_FILES_COPY_DESC','Izaberite ciljnu kategoriju.');
DEFINE('_JLIST_BACKEND_FILES_COPY_TEXT_1','Ovi fajlovi su oznaceni za kopiranje:');
DEFINE('_JLIST_BACKEND_FILES_COPY_TEXT_2','Naznaka: Ako selektujete istu kategoriju, stvara se kopija kao: "Copy from <i>Naziv-Fajla</i>"!');
DEFINE('_JLIST_BACKEND_FILES_COPY_TEXT_3','Objavite kopirane fajlove:');
DEFINE('_JLIST_BACKEND_FILES_COPY_TEXT_4','Takode kopiraj fajlove:');
DEFINE('_JLIST_BACKEND_FILES_COPY_DOWNLOADS_TEXT','Kopiraj iz');
DEFINE('_JLIST_BACKEND_FILES_COPY_SAVED','Fajlovi kopirani!');

// NEW OPTION EXTERN DOWNLOAD URL
DEFINE('_JLIST_BACKEND_FILE_EDIT_EXT_DOWNLOAD_TITLE','Eksterni link za fajl:');
DEFINE('_JLIST_BACKEND_FILE_EDIT_EXT_DOWNLOAD_INFO','Za eksterni link ka fajlu, morate prvo obrisati lokalni fajl.');
DEFINE('_JLIST_BACKEND_FILE_EDIT_EXT_DOWNLOAD_DESC','Ovde možete postaviti URL (putanju) ka eksternom fajlu. Ostavite onda polje za upload fajla prazno.');

//NEW OPTION FOR JCOMMENTS INTEGRATION
DEFINE('_JLIST_BACKEND_SETTINGS_JCOMMENTS_TITLE','Funkcija komentara za JComments?');
DEFINE('_JLIST_BACKEND_SETTINGS_JCOMMENTS_DESC','Da, aktiviraj funkciju komentara iz <b>JComments</b> u frontendu.<br /><b>JComments</b> nije ukljucen u jDownloads i morate ga instalirati i konfigurisati posebno.<br />Možete skinuti JComments ekstenziju sa <a href="http://www.joomlatune.com">www.joomlatune.com.</a>');
DEFINE('_JLIST_BACKEND_SETTINGS_JCOMMENTS_EXISTS_DESC','Da, prikaži funkciju JComments u detaljnom prikazu za fajlove<br /><b>JComments je vec instaliran!</b>');

// NEW TAB FOR FRONTEND UPLOAD CONFIG
DEFINE('_JLIST_BACKEND_SETTINGS_FE_UPLOAD_TAB_TITLE','Uploadi');
DEFINE('_JLIST_BACKEND_SETTINGS_FE_UPLOAD_TITLE_HEAD','Formular za konfiguraciju Frontend upload-a');

// NEW DOWNLOAD FIELDS FOR DOWNLOAD MIRRORS
DEFINE('_JLIST_BACKEND_FILESEDIT_MIRROR_URL_TITLE','Alternativni eksterni link ka fajlu:');
DEFINE('_JLIST_BACKEND_FILESEDIT_MIRROR_URL_DESC','Ovde možete definisati drugi server za download (mirror server).<br />U aktiviranim izgledima za fajlove morate postaviti promenljive {mirror_1} {mirror_2}.');

//NEW FOR PLUGINS TAB
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_PLUGINS','Dodaci');

//NEW FOR FILE PLUGIN
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_FILEPLUGIN_HEAD','Konfiguracija dodataka (mos_jdownloads_file)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(c) by Pelma for jDownloads');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_DEFAULTLAYOUT','Podrazumevani izgled:');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_DEFAULTLAYOUT_DESC','Ovaj izgled se koristi da prikaže fajlove u stavkama, ako je dodatak <b>aktiviran</b> (pogledajte ispod).');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_NOT_INSTALLED','Dodatak mos_jdownloads_file može biti korišcen da prikaže fajlove jDownload u clancima i nije sastavni deo jDownloads i mora biti instaliran posebno. <br /><b>Status: Dodatak još uvek nije instaliran!</b><br />Možete naci dodatke na <a href="http://demo.joomlaaddons.de/index.php?option=com_jdownloads&Itemid=69&task=viewcategory&catid=9">www.JoomlaAddons.de</a>.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_ONLINEPART','Parametri za aktiviranje dodatka');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINEPART','Parametri za iskljucene dodatke');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWNEW','Prikaži simbol NEW');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWNEW_DESC','Prikaži (ili ne) simbol NEW u clancima.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWHOT','Prikaži HOT-simbol');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWHOT_DESC','Prikaži (ili ne) HOT-simbol u clancima.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_ENABLEPLUGIN','Aktiviraj dodatak');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_ENABLEPLUGIN_DESC','Aktiviraj dodatak. Ovo nije isti parametar kao parametar za objavljivanje u Joomla-i (publish). Ako iskljucite dodatak ovde, možete da obavestite posetioca o ovome. (Pogledaj parametre ispod)!');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWDISABLED','Prikaži poruku u slucaju iskljucenog dodatka');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWDISABLED_DESC','Kada iskljucite dodatak, možete prikazati poruku za mesto skidanja. Pogledaj parametre ispod.<br \><b>Ne</b>: Da ne prikaže ništa.<br \><b>Podrazumevani izgled</b>: Prikazuje poruku koristeci podrazumevani izgled (vidi gore).<br \><b>Offline izgled</b>: Prikazuje poruku koristeci offline izgled (pogledaj ispod).');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_DOWNLOADTITLE','Prikaži originalni naziv fajla');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_DOWNLOADTITLE_DESC','Da: prikazuje originalni naziv fajla (i njegov simbol) u vašoj offline-poruci.  Ne: zamenjuje originalni naziv fajla sa sadržajem polja "Zamena naziva" ispod.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINETITLE','Zamena naziva');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINETITLE_DESC','Naziv za prikazivanje kada je dodatak iskljucen (zavisi od vaše selekcije iznad).');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINEDESC','Opis zamene');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINEDESC_DESC','Kada je dodatak iskljucen, ovaj opis se prikazuje na mestu originalnog opisa.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT','Offline izgled (kada je dodatak iskljucen)');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT_DESC','Koristi ovaj izgled za prikazivanje offline-poruke kada je dodatak iskljucen.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT_OPT1','Ne');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT_OPT2','Podrazumevani izgled');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT_OPT3','Offline izgled');
DEFINE('_JLIST_FRONTEND_SETTINGS_FILEPLUGIN_OFFLINE_FILETITLE','Download je iskljucen.');
DEFINE('_JLIST_FRONTEND_SETTINGS_FILEPLUGIN_DESCRIPTION','Ako imate dozvolu za download, molimo vas da kontaktirate webmastera.');
DEFINE('_JLIST_FRONTEND_SETTINGS_FILEPLUGIN_FILEUNKNOWN','Nije moguce naci fajl! ID=<b>{fileid}</b>');
DEFINE('_JLIST_FRONTEND_SETTINGS_FILEPLUGIN_LAYOUTUNKNOWN','Nije moguce naci izgled <b>{thelayout}</b>!');

// NEW OPTIONS FOR DEFAULT CAT ICON
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_CAT_FILE_NO_DEFAULT_PIC','Nije selektovana slika!');
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_CAT_PIC_TITLE','Podrazumevana slika za kategorije:');
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_CAT_PIC_DESC','Ovde je moguce selektovati simbol, koji je odmah dodeljen novoj kategoriji. Naznaceno je u velicini gore.');

// NEW OPTIONS FOR DEFAULT FILE ICON
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_FILE_PIC_TITLE','Podrazumevana slika za fajlove:');
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_FILE_PIC_DESC','Ovde možete izabrati simbol, koji je automatski dodeljen novim fajlovima. Naznaceno je u velicini gore.');

// FOR MISSING NEW MINIPICS
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_PRICE','Cena');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_FILESIZE','Velicina');

// FOR DATAFIELDS IN  DOWNLOAD DETAILVIEW
DEFINE('_JLIST_FE_DETAILS_CREATED_BY_TITLE','Kreirao');
DEFINE('_JLIST_FE_DETAILS_MODIFIED_BY_TITLE','Modifikovao');
DEFINE('_JLIST_FE_DETAILS_MODIFIED_DATE_TITLE','Promenjeno');

// FOR EXTERN FILES -  USER INFO IF CHECKBOXES ACTIVE
// PLEASE USE NOT SPECIAL CHARS e.g. " ' & ...
DEFINE('_JLIST_FRONTEND_EXTERN_FILE_USER_INFO','Ovaj fajl mora biti skidan posebno, pošto se nalazi na drugom serveru. Tako da ne može biti ukljucen u grupni download.');

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