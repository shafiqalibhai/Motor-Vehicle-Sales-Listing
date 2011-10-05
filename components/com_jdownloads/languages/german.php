<?php
/**
* @version 1.4 
* @package JDownloads
* @copyright (C) 2008 Arno Betz - www.joomlaaddons.de
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
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
*/

(defined('_VALID_MOS') OR defined('_JEXEC')) or die('Restricted access');

// Components Infos
//-----------------------------------------------------------
// It is not allowed to change or delete this parameters !!!
DEFINE('_JLIST_PRODUCT','jDownloads');
DEFINE('_JLIST_VERSION','<br /><br />Bitte melden Sie Fehler im Support-Forum auf <a href="http://www.JoomlaAddons.de">www.JoomlaAddons.de</a>.');

DEFINE('_JLIST_PRODUCT_FOOTER','jDownloads');
DEFINE('_JLIST_VERSION_FOOTER','');

// end component infos
//-----------------------------------------------------------

// Installations data

DEFINE('_JLIST_INSTALL_0','Informationen zur Installation:');
DEFINE('_JLIST_INSTALL_1','Alle Konfigurationsdaten existieren bereits in der Datenbank!');
DEFINE('_JLIST_INSTALL_2','Konfigurationsdaten wurden aktualisiert, da noch nicht vorhanden!');
DEFINE('_JLIST_INSTALL_3','Alle Default-Layouts existieren bereits in der Datenbank!.');
DEFINE('_JLIST_INSTALL_4','Default-Layouts wurden in Datenbank gespeichert!');
DEFINE('_JLIST_INSTALL_5','Alle Default-Lizenzen existieren bereits in der Datenbank!');
DEFINE('_JLIST_INSTALL_6','Default-Lizenzen in Datenbank gespeichert!');
DEFINE('_JLIST_INSTALL_7','Das Upload Verzeichnis /downloads existiert bereits und ist beschreibbar!');
DEFINE('_JLIST_INSTALL_8','Das Upload Verzeichnis /downloads existiert bereits aber es ist nicht beschreibbar. Setzen Sie die Schreibrechte mit einem FTP-Programm auf CHMOD 0777, andernfalls wird JDownloads nicht einwandfrei funktionieren!');
DEFINE('_JLIST_INSTALL_9','Verzeichnis /downloads wurde erstellt. Schreibzugriff wurde gesetzt: CHMOD 0777');
DEFINE('_JLIST_INSTALL_10','Fehler: Upload Verzeichnis /downloads konnte nicht erstellt werden!<br />Erstellen Sie dieses Verzeichnis per FTP und setzen Sie die Zugriffsrechte<br />auf CHMOD 0777 - andernfalls wird jDownloads nicht einwandfrei funktionieren!');
DEFINE('_JLIST_INSTALL_11','Das Verzeichnis f&uuml;r tempor&auml;re Zipdateien /downloads/tempzipfiles existiert bereits und ist beschreibbar!');
DEFINE('_JLIST_INSTALL_12','Das Upload Verzeichnis /downloads/tempzipfiles existiert bereits aber es ist nicht beschreibbar. Setzen Sie die Schreibrechte mit einem FTP-Programm auf CHMOD 0777, andernfalls wird jDownloads nicht einwandfrei funktionieren!');
DEFINE('_JLIST_INSTALL_13','Verzeichnis /downloads/tempzipfiles wurde erstellt. Schreibzugriff wurde gesetzt: CHMOD 0777');
DEFINE('_JLIST_INSTALL_14','Fehler: Zip-Verzeichnis /downloads/tempzipfiles konnte nicht erstellt werden!<br />Erstellen Sie dieses Verzeichnis per FTP und setzen Sie die Zugriffsrechte<br />auf CHMOD 0777 - andernfalls wird jDownloads nicht einwandfrei funktionieren!');
DEFINE('_JLIST_INSTALL_15','Installation erfolgreich!');
DEFINE('_JLIST_INSTALL_16','jDownloads jetzt starten!');

DEFINE('_JLIST_INSTALL_DB_TIP','Hinweis: Wird jDownloads deinstalliert, so werden die Datenbank-Tabellen von jDownloads NICHT gel&ouml;scht. Bei Installation einer neueren Version gehen somit keine Daten verloren.');
DEFINE('_JLIST_INSTALL_TITLE_FOR_DEFAULT_LAYOUTS','Standard');

//FRONTEND

DEFINE('_JLIST_FILE_NOT_FOUND','Die angeforderte Datei wurde leider nicht gefunden. Bitte kontaktieren Sie den Betreiber dieser Webseite und informieren Sie ihn dar&uuml;ber.');
DEFINE('_JLIST_LINKTEXT_VIEW_FILE_TYPES','Download starten<br />(Anzeige erfolgt in neuem Browserfenster)');
DEFINE('_JLIST_LINKTEXT_ZIP','Download starten');
DEFINE('_JLIST_LINKTEXT_DOWNLOAD_URL','Download');
DEFINE('_JLIST_LINKTEXT_HOME','Zur&uuml;ck zur Startseite');
DEFINE('_JLIST_DEL_ZIP_ADMIN_INFO','<br />Administrator-Info: Fehler beim l&ouml;schen der tempor&auml;ren Zip-Dateien, oder keine Datei zum l&ouml;schen vorhanden!');
DEFINE('_JLIST_FORM_BUTTON_TEXT','Download'); // changed in 1.4 beta (2)  - prior was "Weiter"
DEFINE('_JLIST_EMPTY_CAT_TEXT','Kategorie enth&auml;lt noch keine Dateien.<br /><br />');
DEFINE('_JLIST_MAIL_DOWNLOADER_NAME_VISITOR','Besucher');
DEFINE('_JLIST_MAIL_DOWNLOADER_GROUP','Gast');
DEFINE('_JLIST_MAILSEND_ERROR','Beim versenden der E-Mail ist ein Fehler aufgetreten!');
DEFINE('_JLIST_FRONTEND_COUNT_SUBCATS','Unterkategorien:');
DEFINE('_JLIST_FRONTEND_COUNT_FILES','Dateien:');
DEFINE('_JLIST_FRONTEND_HOMEPAGE','Homepage');
DEFINE('_JLIST_FRONTEND_BACK_BUTTON','Zur&uuml;ck');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_DATE','Datum');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_LICENCE','Lizenz');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_AUTHOR','Autor');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_WEBSITE','Webseite');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_SYSTEM','System');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_LANGUAGE','Sprache');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_DOWNLOAD','Download');
DEFINE('_JLIST_FRONTEND_VERSION_TITLE','v.');       // e.eg. v.1.2.3
DEFINE('_JLIST_FRONTEND_CAT_ACCESS_REGGED','Diese Kategorie erfordert eine Registrierung um Daten downloaden zu k&ouml;nnen.<br />Sollten Sie bereits registriert sein, so melden Sie sich bitte an.<br /><br />');

//BACKEND TOOLBAR
DEFINE('_JLIST_BACKEND_COMPONENT_NAME','JDownloads');
DEFINE('_JLIST_BACKEND_TOOLBAR_MAIN','Men&uuml;');
DEFINE('_JLIST_BACKEND_TOOLBAR_EDIT','&Auml;ndern');
DEFINE('_JLIST_BACKEND_TOOLBAR_REMOVE','L&ouml;schen');
DEFINE('_JLIST_BACKEND_TOOLBAR_CLOSE','Schliessen');
DEFINE('_JLIST_BACKEND_TOOLBAR_SUBMAIN','Layouts');

//BACKEND CPANEL
DEFINE('_JLIST_BACKEND_CPANEL_FILES','Downloads');
DEFINE('_JLIST_BACKEND_CPANEL_CATEGORIES','Kategorien');
DEFINE('_JLIST_BACKEND_CPANEL_LICENSE','Lizenzen');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES','Layout Verwaltung');
DEFINE('_JLIST_BACKEND_CPANEL_BACKUP','Datensicherung erstellen');
DEFINE('_JLIST_BACKEND_CPANEL_SETTINGS','Konfiguration');
DEFINE('_JLIST_BACKEND_CPANEL_RESTORE','Datensicherung wiederherstellen');
DEFINE('_JLIST_BACKEND_CPANEL_INFO','Nutzungsbedingungen');
DEFINE('_JLIST_BACKEND_CPANEL_SUPPORT','Support-Forum');

// RESULTS FROM AUTOCHECKFILES OPTION
DEFINE('_JLIST_BACKEND_AUTOCHECK_TITLE','Die &Uuml;berpr&uuml;fung der Verzeichnisse ergab:');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NEW_FILES','neue Dateien wurden gefunden und den Downloads hinzugef&uuml;gt!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_MISSING_FILES','Dateien wurden nicht mehr gefunden und die entsprechenden Downloads daher auf nicht &ouml;ffentlich ge&auml;ndert!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NO_NEW_FILES','Es wurden keine neuen Dateien gefunden!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NO_MISSING_FILES','Alle ver&ouml;ffentlichten Download-Dateien existieren!');

DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_STATUS','Status');
DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_2','Version');
DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_3','Log');

// STATUS
DEFINE('_JLIST_BACKEND_PANEL_STATUS_OFFLINE_HEADER','Status Downloadbereich');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_TITEL','<font color="#990000"><b><big>Der Downloadbereich ist:</big></b></font>');

DEFINE('_JLIST_BACKEND_PANEL_STATUS_DESC_ONLINE','Der Wartungsmodus ist nicht aktiviert und der Downloadbereich f&uuml;r Besucher daher einsehbar.');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_ONLINE','<font color="green"><b><big> ONLINE!</big></b></font>');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_OFFLINE','<font color="red"><b><big> OFFLINE!</big></b></font>');

// OFFLINE
DEFINE('_JLIST_BACKEND_OFFLINE_OPTION_TITLE','Wartungsmodus aktivieren?');
DEFINE('_JLIST_BACKEND_OFFLINE_OPTION_DESC','Mit dieser Option wird die gesamte Anzeige des Downloadbereiches abgeschaltet. Besuchern wird der unten definierte Text angezeigt. Nur im Frontend angemeldete Mitglieder die mindestens den Status Autor haben, k&ouml;nnen den Downloadbereich trotzdem einsehen!');
DEFINE('_JLIST_BACKEND_OFFLINE_MESSAGE_TITLE','Hinweis f&uuml;r Besucher');
DEFINE('_JLIST_BACKEND_OFFLINE_MESSAGE_DEFAULT','<table width="70%" align="center" cellspacing="0" cellpadding="20" border="1"><tr><td align="center">
<h3>Zur Zeit finden Wartungsarbeiten im Downloadbereich statt.<br /><br />Bitte versuchen Sie es in einigen Minuten noch einmal.</h3><br /><img src="components/com_jdownloads/images/offline.png" />
</td></tr></table>');
DEFINE('_JLIST_BACKEND_OFFLINE_MESSAGE_DESC','Geben Sie hier den Text ein, der Besuchern des Downloadbereiches im Wartungsmodus angezeigt werden soll.');
DEFINE('_JLIST_BACKEND_OFFLINE_ADMIN_MESSAGE_TEXT','<p align="center"><b><big>Downloads sind: OFFLINE!</big></b></p>'); // changed in 1.3 RC2

//BACKEND SETTINGS
DEFINE('_JLIST_BACKEND_SETTINGS','Konfiguration');
DEFINE('_JLIST_BACKEND_SETTINGS_SAVED','Konfiguration gespeichert');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_HEAD','E-Mail Konfiguration f&uuml;r Downloads');   // changed in 1.3 rc2
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_FILES_HEAD','Download Konfiguration');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_FRONTEND_HEAD','Frontend Grundkonfiguration');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_BACKEND_HEAD','Backend Konfiguration');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_SECURITY_HEAD','Sicherheitsrelevante Einstellungen');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_IMAGES_HEAD','Bilder Einstellungen'); // changed in 1.4 beta

DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_DOWNLOADS','Downloads');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_FRONTEND','Frontend');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_BACKEND','Backend');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_IMAGES','Bilder'); // changed in 1.3 RC2
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_SECURITY','Sicherheit');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_EMAIL','E-Mail');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_SONSTIGE','Sonstiges');

DEFINE('_JLIST_BACKEND_SETTINGS_DATETIME','Datums- und Zeitformat');
DEFINE('_JLIST_BACKEND_SETTINGS_DATETIME_DESC','Stellen Sie hier ein, wie das Datum der Download-Dateien angezeigt werden soll. Infos zum Format finden Sie hier: <a href="http://www.php.net/manual/de/function.strftime.php" target="_blank">www.php.net</a>');

DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIR','Download Hauptverzeichnis');
DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIR_DESC','Das Hauptverzeichnis in deren Unterverzeichnisse die hochgeladenen Dateien gespeichert werden. Dieses Verzeichnis, sowie <b>alle</b> automatisch angelegten Unterverzeichnisse <b>m&uuml;ssen</b> beschreibbar sein! Wird hier die Standardbezeichnung f&uuml;r das Hauptverzeichnis ge&auml;ndert, so wird das Verzeichnis automatisch umbenannt.');

DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIRTEMP','Tempor&auml;res Verzeichnis');
DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIRTEMP_DESC','Dieses Verzeichnis <b>muss</b> existieren <b>und</b> beschreibbar sein! Es enth&auml;lt die tempor&auml;r erstellten Zip-Dateien f&uuml;r den sofortigen Download mehrerer Dateien. (Diese werden automatisch gel&ouml;scht).');

DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_1','Standard');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_2','Neueste zuerst');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_3','Neueste zuletzt');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_4','Name aufsteigend');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_5','Name absteigend');

// E-Mail config
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_OPTION_DESC','Wenn aktiviert, wird bei jedem Download eine E-Mail an die unten angegebene Adresse gesendet.');
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_OPTION','E-Mail aktivieren?');

DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_DESC','E-Mail Adresse, an welche die Informationen &uuml;ber Downloads gesendet werden soll.');
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO','E-Mailadresse');

DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_HTML_DESC','Wenn aktiviert, wird die E-Mail im HTML-Format versendet. Ansonsten im Textformat.');
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_HTML','HTML-Format verwenden?');

DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_BETREFF_DESC','Text der in der Betreffzeile der E-Mail stehen soll.');
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_BETREFF','Betreff Text');

// View Frontend Config settings
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_VIEW_HEAD','Optionen zur Darstellung der Komponente im Frontend');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_COMPO_TEXT','Komponentenbeschreibung');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_COMPO_TEXT_DESC','Optionaler Text der <b>zwischen</b> Komponententitel und den Kategorien angezeigt wird. Den Komponententitel k&ouml;nnen Sie ebenfalls in der Konfiguration festlegen.<br /><br />Es k&ouml;nnen CSS-Klassen, HTML-Code sowie beliebiger Text eingef&uuml;gt werden.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CHECKBOX_TEXT','Checkbox Text');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CHECKBOX_TEXT_DESC','Texthinweis der neben der obersten Checkbox der Liste angezeigt werden soll.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SORTFILESORDER_TEXT','Downloads Sortierreihenfolge');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SORTFILESORDER_DESC','Sortierreihenfolge der Dateien bei der Darstellung im Frontend. Wenn die im Backend standardm&auml;&szlig;ig vorgenommene Sortierung verwendet werden soll, so w&auml;hlen Sie: "Standard".');

// View images seetings
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SHOW_MINIPICS','Sollen die Info-Symbole angezeigt werden?');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SHOW_MINIPICS_DESC','Wenn aktiviert, wird in der Liste der Download-Dateien neben den Daten (Lizenz, Autor, Website, System, Sprache, Datum und Download-Link) ein Symbol angezeigt. Bei Deaktivierung sollte &uuml;ber das Datei-Layout entsprechende Texthinweise vor den jeweiligen Patzhaltern eingef&uuml;gt werden.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_MINIPICS_SIZE','Gr&ouml;sse der Info-Symbole in Pixel');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_MINIPICS_SIZE_DESC','Gr&ouml;sse in der die Info-Symbole angezeigt werden sollen. Standard: 20');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CATPICS_SIZE','Gr&ouml;sse der Kategorie Symbole in Pixel');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CATPICS_SIZE_DESC','Gr&ouml;sse in der die Kategorie Symbole angezeigt werden sollen. Es k&ouml;nnen auch eigene Symbole verwendet werden, laden Sie hierzu einfach die Symbole &uuml;ber ein FTP-Programm in das Unterverzeichnis: /catimages. Die Symbole stehen dann automatisch zur Auswahl. Standard: 48');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FILEPICS_SIZE','Gr&ouml;sse der Datei Symbole in Pixel');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FILEPICS_SIZE_DESC','Gr&ouml;sse in der die Datei Symbole angezeigt werden sollen. Es k&ouml;nnen auch eigene Symbole verwendet werden, laden Sie hierzu einfach die Symbole &uuml;ber ein FTP-Programm in das Unterverzeichnis: /fileimages. Die Symbole stehen dann automatisch zur Auswahl. Standard: 32');

// View backend security settings
DEFINE('_JLIST_BACKEND_SETTINGS_MAIL_SECURITY_DESC','Wenn JA, werden die E-Mail Adressen nicht im Klartext angezeigt um das auslesen durch Spambots zu erschweren. Beachten Sie, dass Besucher, welche die Javascript-Option in ihrem Browser deaktiviert haben, der Link dann nicht angezeigt wird. Empfohlene Einstellung: JA.');
DEFINE('_JLIST_BACKEND_SETTINGS_MAIL_SECURITY_TITEL','E-Mail Adresse verschleiern:');

// View backend Config settings
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_LAYOUTS','WYSIWYG-Editor bei Layouts verwenden');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_LAYOUTS_DESC','Wenn aktiviert, wird beim bearbeiten der Layouts der aktivierte Wysiwyg-Editor verwendet. Ansonsten ein reines Textfeld. Empfohlene Einstellung: Nein.');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_FILES','WYSIWYG-Editor bei Downloads verwenden');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_FILES_DESC','Wenn aktiviert, wird beim bearbeiten der Downloads der aktivierte Wysiwyg-Editor verwendet. Ansonsten ein reines Textfeld.');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_CATS','WYSIWYG-Editor bei Kategorien verwenden');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_CATS_DESC','Wenn aktiviert, wird beim bearbeiten der Kategorien der aktivierte Wysiwyg-Editor verwendet. Ansonsten ein reines Textfeld.');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_LICENSES','WYSIWYG-Editor bei Lizenzen verwenden');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_LICENSES_DESC','Wenn aktiviert, wird beim bearbeiten der Lizenzen der aktivierte Wysiwyg-Editor verwendet. Ansonsten ein reines Textfeld.');

DEFINE('_JLIST_BACKEND_SETTINGS_FILE_SYSTEM_LIST','Auswahlliste f&uuml;r Downloads Feld: "System" bearbeiten');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_SYSTEM_LIST_DESC','Hier k&ouml;nnen die Inhalte dieses Feldes bearbeitet werden. Zwischen jedem Wert muss ein Komma (,) stehen.<br /></br><b>Wichtiger Hinweis:</b> sollten bereits Downloads mit dieser Liste gespeichert worden sein, so wirken sich &Auml;nderungen hier auf diese Downloads aus. Beispiel: Downloads gespeichert mit System = "Joomla 1.5". Wird an dieser Position der Liste nun ein anderer Wert eingesetzt (z.B. Windows Vista), so steht diese Angabe dann automatisch in den betreffenden Downloads als System! Empfohlen wird daher neue Werte an das Ende der Liste zu setzen.');

DEFINE('_JLIST_BACKEND_SETTINGS_FILE_LANGUAGE_LIST','Auswahlliste f&uuml;r Downloads Feld: "Sprache" bearbeiten');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_LANGUAGE_LIST_DESC','Hier k&ouml;nnen die Inhalte dieses Feldes bearbeitet werden. Zwischen jedem Wert muss ein Komma (,) stehen.<br /></br><b>Wichtiger Hinweis:</b> sollten bereits Downloads mit dieser Liste gespeichert worden sein, so wirken sich &Auml;nderungen hier auf diese Downloads aus. Beispiel: Download gespeichert mit Sprache = "Deutsch". Wird an dieser Position der Liste nun ein anderer Wert eingesetzt (z.B. D&auml;nisch), so steht diese Angabe dann automatisch in den betreffenden Downloads als Spache! Empfohlen wird daher neue Werte an das Ende der Liste zu setzen.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_ZIPFILE_PREFIX_TEXT','Vorangestellter Text bei Zipdateien');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_ZIPFILE_PREFIX_DESC','Werden mehrere Dateien zum Download ausgew&auml;hlt, so werden diese automatisch in eine tempor&auml;re Zipdatei gepackt und dem Besucher als eine einzige Downloaddatei zur Verf&uuml;gung gestellt. Der Dateiname der Zipdatei wird dabei aus dem links angegebenem Text (prefix) und einer Zufallsszahl gebildet.');

// Templates Config Backend
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_HEAD','<b>Die Layouts bestimmen die Darstellung der Inhalte im Frontend.</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_HEAD_INFO','<br />Bei der Installation werden bereits einige Standard-Layouts mitgeliefert. Diese k&ouml;nnen bei Bedarf angepasst, oder auch komplett neue Layouts erstellt werden. Um dies zu vereinfachen kann in der Konfiguration festgelegt werden, ob f&uuml;r die Bearbeitung ein WYSIWYG-Editor, oder ein einfaches Textfeld verwendet werden soll.<br /><br />Sollte die Ausgabe der Komponente im Frontend nach vorgenommenen &Auml;nderungen an den <b>Standard-Layouts</b> nicht mehr einwandfrei funktionieren, so kann jederzeit der <b>Originalinhalt</b> (gemeint ist der Zustand nach der Installation) wieder hergestellt werden. Entfernen Sie hierzu im entsprechenden Standard-Layout Eingabefeld <b>alle Texte</b> und klicken Sie dann auf <b>Speichern</b>. Die Seite wird dann mit dem Originalinhalt geladen aber noch nicht gespeichert. <b>Vorsicht:</b> vorgenommene &Auml;nderungen gehen hierbei verloren.<br /><br />Hinweis: in den Layouts werden etliche Platzhalter (z.B. <font color=darkred>{files}</font>) verwendet. An der Stelle der Platzhalter wird bei der Generierung der eigentlichen Webseite der entsprechende Inhalt eingef&uuml;gt.<br />');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS','Layout: Kategorien');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_DESC','Dies ist die Darstellung der <b>Kategorien</b> im Frontend. Wenn Sie in der Globalen Konfiguration die Option: <b>Startseite mit Kategorien&uuml;bersicht verwenden</b> aktiviert haben, so werden die Platzhalter {files} und {checkbox_top} nur bei der Darstellung der einzelnen Kategorie ber&uuml;cksichtigt.<br /><br />Die <font color=red>{files} {form_hidden} {form_button} {checkbox_top}</font> Platzhalter sollten <font color=red>NICHT</font> aus dem Code entfernt werden! Entfernen Sie den Platzhalter {checkbox_top} nur dann aus dem Code, wenn im Dateien-Layout der Platzhalter {url_download} verwendet wird. Der {files} Tag wird ersetzt mit den Daten die im Layout: "Dateien" angegeben wurden.<br /><br />Verf&uuml;gbare Platzhalter:<br />{cat_title} {cat_description} {cat_pic} {files} {checkbox_top} {sum_subcats} {sum_files_cat}');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_INFO_TITLE','<b>Informationen zum Kategorien Layout:</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_INFO_TEXT','<p>Hier sehen Sie ein grafisches Beispiel f&uuml;r die Darstellung der Kategorie-Beschreibung im Frontend. Der dunkelrote Rahmen, markiert den Bereich dessen Darstellung Sie hier &auml;ndern k&ouml;nnen.</p>');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES','Layout: Dateien');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DESC','Dies ist die Darstellung der <b>Dateiliste</b> im Frontend unterhalb der Kategoriebeschreibung.<br /><br />Verf&uuml;gbare Platzhalter:<br />{checkbox_list} {cat_id} {file_id} {file_title} {release} {pic_is_new} {pic_is_hot} {pic_is_updated} {url_download} {thumbnail} {description} {link_to_details} {file_pic} {price_title} {price_value} {license_title} {license_text} {language_title} {language_text} {filesize_title} {filesize_value} {system_title} {system_text} {author_title} {author_text} {author_url_title} {author_url_text} {created_date_title} {created_date_value} {hits_title} {hits_value} {created_by_title} {created_by_value} {modified_by_title} {modified_by_value} {modified_date_title} {modified_date_value}'); // changed in 1.4 beta (2)
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_INFO_TITLE','<b>Informationen zum Dateien Layout:</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_INFO_TEXT','<p>Hier sehen Sie ein grafisches Beispiel f&uuml;r die Darstellung der Dateiliste im Frontend. Der dunkelrote Rahmen, markiert den Bereich dessen Darstellung Sie hier &auml;ndern k&ouml;nnen.</p>');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL','Layout: Zusammenfassung / Download starten');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL_DESC','Dies ist die Darstellung der <b>Zusammenfassung</b> im Frontend. Es wird dem Besucher vor dem Download eine Aufstellung der ausgewählten Dateien präsentiert.<br />Hier können Sie die Darstellung der Seite anpassen. Es können CSS-Klassen, HTML-Code sowie beliebiger Text eingefügt werden.<br /><br />Die Platzhalter <font color=red>{download_liste} und {download_link}</font> sollte <font color=red>NICHT</font> aus dem Code entfernt werden!<br /><br />Verfügbare Platzhalter:<br />{summary_pic} {title_text} {download_liste} {license_note} {download_link} {external_download_info}'); // changed in 1.4 beta (2)
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL_INFO_TITLE','<b>Informationen zum Layout: Zusammenfassung</b>');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL_INFO_TEXT','<p>Hier sehen Sie ein grafisches Beispiel f&uuml;r die Darstellung dieser Seite im Frontend. Der dunkelrote Rahmen, markiert den Bereich dessen Darstellung Sie hier &auml;ndern k&ouml;nnen.</p>');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_MAIL','Layout: E-Mail');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_MAIL_DESC','Hier k&ouml;nnen Sie die Darstellung der <b>E-Mail</b> festlegen, die (sofern aktiviert) nach jedem Download an die in der Konfiguration festgelegte Adresse versendet wird. Es kann HTML-Code sowie beliebiger Text eingef&uuml;gt werden.<br /><br />Verf&uuml;gbare Platzhalter:<br />{file_list} {ip_address} {date_time} {user_name} {user_group}');

//BACKEND CATSLIST
DEFINE('_JLIST_BACKEND_CATSLIST_TITLE_HEAD','Kategorien');
DEFINE('_JLIST_BACKEND_CATSLIST_SEARCH','Suchen');
DEFINE('_JLIST_BACKEND_CATSLIST_SEARCH_LIMIT','Limit');

DEFINE('_JLIST_BACKEND_CATSLIST_TITLE','Kategorie');
DEFINE('_JLIST_BACKEND_CATSLIST_PIC','Symbol');
DEFINE('_JLIST_BACKEND_CATSLIST_PUBLISHED','Ver&ouml;ffentlicht');
DEFINE('_JLIST_BACKEND_CATSLIST_LINK','Link');
DEFINE('_JLIST_BACKEND_CATSLIST_LINK_TEXT','Vorschau');
DEFINE('_JLIST_BACKEND_CATSLIST_READ','Lesen');
DEFINE('_JLIST_BACKEND_CATSLIST_DOWNLOAD','Downloaden');
DEFINE('_JLIST_BACKEND_CATSLIST_ORDERING','Ordnen');
DEFINE('_JLIST_BACKEND_CATSLIST_DEL',' Kategorie(en) gel&ouml;scht');

// access controll info
DEFINE('_JLIST_BACKEND_CATSLIST_ACCESS_ALL','Jeder');
DEFINE('_JLIST_BACKEND_CATSLIST_ACCESS_REGGED','Registrierte');
DEFINE('_JLIST_BACKEND_CATSLIST_ACCESS_ADMINS','Special');

//BACKEND CATSEDIT
DEFINE('_JLIST_BACKEND_CATSEDIT_TITLE','Kategorie bearbeiten');
DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_TITLE','Kategorie muss ein Titel haben.');
DEFINE('_JLIST_BACKEND_CATSEDIT_SUC_PUBL',' Kategorie(n) ver&ouml;ffentlicht.');
DEFINE('_JLIST_BACKEND_CATSEDIT_SUC_UNPUBL',' Kategorie(n) unver&ouml;ffentlicht.');
DEFINE('_JLIST_BACKEND_CATSEDIT_SAVE_ERROR_DIR','Fehler: Verzeichnis konnte nicht umbenannt werden!');
DEFINE('_JLIST_BACKEND_CATSEDIT_EDIT','Kategorie bearbeiten');
DEFINE('_JLIST_BACKEND_CATSEDIT_ADD','Kategorie hinzuf&uuml;gen');
DEFINE('_JLIST_BACKEND_CATS_SAVEORDER','Neue Reihenfolge gespeichert');
DEFINE('_JLIST_BACKEND_CATS_USED','Diese Kategorie wird momentan von einem anderen Administrator bearbeitet.');
DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_CAT_COPY','Beim Kopieren der Kategorie-Verzeichnisse ist ein Fehler aufgetreten.');

DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_DESCRIPTION','Kategorie Beschreibung');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_PIC_TEXT','Kategorie-Symbol ausw&auml;hlen');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_PIC_PREVIEW','Vorschau');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_PIC_DESC','Das ausgew&auml;hlte Symbol kann &uuml;ber den Platzhalter {cat_pic} im Layout: Kategorien angezeigt werden.');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_TITLE','Zugriffsrechte einstellen');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_DESC','Stellen Sie hier die Zugriffsrechte ein. Diese gelten sowohl f&uuml;r diese Kategorie als auch deren Unterkategorien (unabh&auml;ngig davon welche Rechte diese haben) und die der Kategorie zugeordneten Downloads. <b>Entscheidend f&uuml;r den Zugriff ist immer die Einstellung der &uuml;bergeordneten Kategorie!</b> Bei der Einstellung "Special" k&ouml;nnen Mitglieder ab Status Autor, diese Kategorie lesen und downloaden. Wird kein Feld markiert, gilt der Standardzugriff: Jeder kann lesen und downloaden!');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_1','Jeder kann lesen und downloaden');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_2','Jeder kann lesen und Registrierte k&ouml;nnen downloaden');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_3','Nur Registrierte k&ouml;nnen lesen und downloaden');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_4','Nur "Special" Mitglieder k&ouml;nnen lesen und downloaden');

//BACKEND FILESLIST
DEFINE('_JLIST_BACKEND_FILESLIST_TITLE','Downloads');
DEFINE('_JLIST_BACKEND_FILESLIST_SEARCH','Suchen');
DEFINE('_JLIST_BACKEND_FILESLIST_SEARCH_LIMIT','Limit');
DEFINE('_JLIST_BACKEND_FILESLIST_CATS','Alle Kategorien');
DEFINE('_JLIST_BACKEND_FILESLIST_NOCATS','Keine Kategorie');
DEFINE('_JLIST_BACKEND_FILESLIST_FILE','Downloads');
DEFINE('_JLIST_BACKEND_FILESLIST_HITS','Anzahl');
DEFINE('_JLIST_BACKEND_FILESLIST_CAT','Kategorie');
DEFINE('_JLIST_BACKEND_FILESLIST_RELEASE','Version');

DEFINE('_JLIST_BACKEND_FILESLIST_DESCRIPTION','Beschreibung');
DEFINE('_JLIST_BACKEND_FILESLIST_DADDED','Datum');
DEFINE('_JLIST_BACKEND_FILESLIST_FILENAME','Dateiname');
DEFINE('_JLIST_BACKEND_FILESLIST_AUTHOR','Autor');
DEFINE('_JLIST_BACKEND_FILESLIST_PUBLISHED','Ver&ouml;ffentlicht');
DEFINE('_JLIST_BACKEND_FILESLIST_ORDERING','Reihenfolge');
DEFINE('_JLIST_BACKEND_FILESLIST_DEL',' Download(s) gel&ouml;scht');
DEFINE('_JLIST_BACKEND_FILES_SAVEORDER','Neue Reihenfolge gespeichert');
DEFINE('_JLIST_BACKEND_FILES_USED','Dieser Download wird momentan von einem anderen Administrator bearbeitet.');

//BACKEND FILESEDIT
DEFINE('_JLIST_BACKEND_FILESEDIT_TABTITLE_1','Grunddaten');
DEFINE('_JLIST_BACKEND_FILESEDIT_TABTITLE_2','Optional');
DEFINE('_JLIST_BACKEND_FILESEDIT_TABTITLE_3','Datei');

DEFINE('_JLIST_BACKEND_FILESEDIT_TITLE','Download bearbeiten');
DEFINE('_JLIST_BACKEND_FILESEDIT_SENT_IN_FROM','Dieser Download wurde eingereicht von: ');
DEFINE('_JLIST_BACKEND_FILESEDIT_SAVE','Download gespeichert.');
DEFINE('_JLIST_BACKEND_FILESEDIT_EDIT','Download bearbeiten');
DEFINE('_JLIST_BACKEND_FILESEDIT_ADD','Download hinzuf&uuml;gen');

DEFINE('_JLIST_BACKEND_FILESEDIT_ROOT_DIR_TITLE','ROOT Download-Verzeichnis');
DEFINE('_JLIST_BACKEND_FILESEDIT_UPLOAD_DIR_LIST_INFO_1','Alle Unterverzeichnisse sind beschreibbar!');
DEFINE('_JLIST_BACKEND_FILESEDIT_UPLOAD_DIR_LIST_INFO_2','Unterverzeichnisse sind <b>nicht</b> beschreibbar! &Uuml;berpr&uuml;fen Sie die Zugriffsrechte der Verzeichnisse mit einem FTP-Programm. Die CHMOD Werte m&uuml;ssen auf 0777 stehen.');
DEFINE('_JLIST_BACKEND_FILESEDIT_CHECK_PERMISSIONS','Datei konnte nicht hochgeladen werden. &Uuml;berpr&uuml;fen Sie die Zugriffsrechte (CHMOD 0777) f&uuml;r das ausgw&auml;hlte Zielverzeichnis.');

// language
DEFINE('_JLIST_BACKEND_FILESEDIT_LANGUAGE','Sprache');
DEFINE('_JLIST_BACKEND_FILESEDIT_LANGUAGE_DEFAULT_LIST','Ausw&auml;hlen:, Deutsch, Englisch, Franz&ouml;sisch, Italienisch, Spanisch, Portugiesisch, Russisch, Polnisch, Holl&auml;ndisch, Siehe Beschreibung');
// system
DEFINE('_JLIST_BACKEND_FILESEDIT_SYSTEM','System');
DEFINE('_JLIST_BACKEND_FILESEDIT_SYSTEM_DEFAULT_LIST','Ausw&auml;hlen:, Joomla 1.0, Joomla 1.5, Windows, Linux, MacIntosh');

DEFINE('_JLIST_BACKEND_FILESEDIT_LICENSES_LIST','Lizenz ausw&auml;hlen');
DEFINE('_JLIST_BACKEND_FILESEDIT_REMOVE_OK','Datei entfernt.');
DEFINE('_JLIST_BACKEND_FILESEDIT_SUC_PUBL',' Download(s) ver&ouml;ffentlicht.');
DEFINE('_JLIST_BACKEND_FILESEDIT_SUC_UNPUBL',' Download(s) unver&ouml;ffentlicht.');

DEFINE('_JLIST_BACKEND_FILESEDIT_REQUIRES_INFO','Felder mit <b><font color=red>*</font></b> m&uuml;ssen ausgef&uuml;llt werden!');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_TITLE','Titel <b><font color=red>*</font></b>');
DEFINE('_JLIST_BACKEND_FILESEDIT_DESCRIPTION','Beschreibung');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FPIC_TEXT','Datei-Symbol ausw&auml;hlen');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FPIC_PREVIEW','Vorschau');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FPIC_DESC','Das ausgew&auml;hlte Symbol kann &uuml;ber einen Layout-Platzhalter im Frontend angezeigt werden.');

DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_CAT','Kategorie zuordnen <b><font color=red>*</font></b>');

DEFINE('_JLIST_BACKEND_FILESEDIT_LICENSE','Lizenz');
DEFINE('_JLIST_BACKEND_FILESEDIT_RELEASE','Version');
DEFINE('_JLIST_BACKEND_FILESEDIT_SIZE','Gr&ouml;sse');
DEFINE('_JLIST_BACKEND_FILESEDIT_SIZE_DESC','Wenn nicht angegeben, wird versucht den Wert automatisch zu ermitteln.'); // changed in 1.4 beta
DEFINE('_JLIST_BACKEND_FILESEDIT_DADDED','Datum und Uhrzeit');
DEFINE('_JLIST_BACKEND_FILESEDIT_DADDED_DESC','Geben Sie die Daten in folgendem Format ein: <b>YYYY-MM-DD H:mm:ss</b> oder verwenden Sie die Kalenderfunktion. Wenn nicht anders angegeben, wird automatisch das aktuelle Datum/Zeit eingetragen.');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE','Datei zum hochladen ausw&auml;hlen');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_DESC','Hier&uuml;ber kann eine Datei zum Server &uuml;bertragen werden, welche dann f&uuml;r diesen Download verwendet wird.');

DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_INFO','Aktuell zugeordnete Datei:');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_ADD_FROM_SERVER','Aktuell zugeordnete Datei:');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_ADD_FROM_SERVER_NO','Momentan ist keine Datei zugeordnet!');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_ADD_FROM_SERVER_LIST','Datei ausw&auml;hlen:');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_REMOVE','<b>Aktuell zugeordnete Datei auf Server l&ouml;schen</b>');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_HOME','Webseite');
DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR','Autor Name');
DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR_URL','Autor URL oder E-Mail Adresse');
DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR_URL_DESC','Wird hier eine Adresse eingetragen, wird der Autorname als Link zur Webseite oder als "mailto:" dargestellt. E-Mail Adressen werden vor der Ausgabe verschl&uuml;sselt, wenn dies in der Konfiguration entsprechend eingetragen wurde.');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD','ROOT Upload Verzeichnis');

DEFINE('_JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD_WRITABLE','Status: <font color=green><strong>BESCHREIBBAR</strong></font>');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD_NOTWRITABLE','Status: <font color=red><strong>NICHT BESCHREIBBAR</strong></font>');

DEFINE('_JLIST_BACKEND_FILESEDIT_URL_TEMP_WRITABLE','Status: <font color=green><strong>BESCHREIBBAR</strong></font>');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_TEMP_NOTWRITABLE','Status: <font color=red><strong>NICHT BESCHREIBBAR</strong></font>');


//BACKEND LICENSE LIST
DEFINE('_JLIST_BACKEND_LICLIST_TITLE_HEAD','Lizenzen');
DEFINE('_JLIST_BACKEND_LICLIST_TITLE','Lizenzname');
DEFINE('_JLIST_BACKEND_LICLIST_LINK','Link');
DEFINE('_JLIST_BACKEND_LICLIST_DEL',' Lizenz(en) gel&ouml;scht');

//Backend LICENSE EDIT
DEFINE('_JLIST_BACKEND_LICEDIT_TITLE','Lizenz  bearbeiten');
DEFINE('_JLIST_BACKEND_LICEDIT_ERROR_TITLE','Lizenz muss einen Namen haben.');
DEFINE('_JLIST_BACKEND_LICEDIT_SAVE','Lizenz gespeichert.');
DEFINE('_JLIST_BACKEND_LICEDIT_TEXT','Lizenzname');
DEFINE('_JLIST_BACKEND_LICEDIT_EDIT','Lizenz bearbeiten');
DEFINE('_JLIST_BACKEND_LICEDIT_ADD','Lizenz hinzuf&uuml;gen');
DEFINE('_JLIST_BACKEND_LIC_USED','Diese Lizenz wird momentan von einem anderen Administrator bearbeitet.');
DEFINE('_JLIST_BACKEND_LICEDIT_LIC_TITLE','Lizenzname');
DEFINE('_JLIST_BACKEND_LICEDIT_LIC_URL','Link zur Lizenz');
DEFINE('_JLIST_BACKEND_LICEDIT_LIC_DESCRIPTION','Lizenztext');

//BACKEND TEMPLATES SUBMENU
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_NAME','Layout Verwaltung');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_CATS','Kategorien');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_FILES','Dateien');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_SUMMARY','Zusammenfassungen');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_EMAIL','E-Mails');
DEFINE('_JLIST_BACKEND_TEMPPANEL_TABTEXT_INFO','Information');

// Backend TEMPLATES TEMPLATES TITLES
DEFINE('_JLIST_BACKEND_TEMPLIST_CATTITLE_HEAD','Kategorien Layouts');
DEFINE('_JLIST_BACKEND_TEMPLIST_FILESTITLE_HEAD','Downloads Layouts');
DEFINE('_JLIST_BACKEND_TEMPLIST_SUMTITLE_HEAD','Zusammenfassungen Layouts');
DEFINE('_JLIST_BACKEND_TEMPLIST_MAILTITLE_HEAD','E-Mail Layouts');

//BACKEND TEMPLATES LIST
DEFINE('_JLIST_BACKEND_TEMPLIST_MENU_TEXT_ACTIVE','Aktivieren');
DEFINE('_JLIST_BACKEND_TEMPLIST_TITLE','Layoutname');
DEFINE('_JLIST_BACKEND_TEMPLIST_TYP','Layouttyp');
DEFINE('_JLIST_BACKEND_TEMPLIST_ACTIVE','Aktiv');
DEFINE('_JLIST_BACKEND_TEMPLIST_LOCKED','Standard-Layout');
DEFINE('_JLIST_BACKEND_TEMPLIST_LOCKED_DESC','<b>Hinweis:</b> Standard-Layouts sind Bestandteil von jDownloads und k&ouml;nnen nicht gel&ouml;scht werden.<br />Beim Erstellen eines neuen Layouts werden die Standard-Layout Texte als Vorgabe angezeigt.');
DEFINE('_JLIST_BACKEND_TEMPLIST_DEL',' Layout(s) gel&ouml;scht');
DEFINE('_JLIST_BACKEND_TEMPLIST_ERROR_IS_LOCKED','Standard-Layouts k&ouml;nnen nicht gel&ouml;scht werden.');
DEFINE('_JLIST_BACKEND_TEMPLIST_ERROR_IS_ACTIVE','Aktive Layouts k&ouml;nnen nicht gel&ouml;scht werden.');

//Backend TEMPLATES EDIT
DEFINE('_JLIST_BACKEND_TEMPEDIT_TITLE','Layout  bearbeiten');
DEFINE('_JLIST_BACKEND_TEMPEDIT_ERROR_TITLE','Fehler: Layout muss einen Namen haben.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_SAVE','Layout gespeichert.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_ACTIVE','Layout wurde aktiviert.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_EDIT','Layout bearbeiten');
DEFINE('_JLIST_BACKEND_TEMPEDIT_ADD','Layout hinzuf&uuml;gen');
DEFINE('_JLIST_BACKEND_TEMP_USED','Dieses Layout wird momentan von einem anderen Administrator bearbeitet.');

DEFINE('_JLIST_BACKEND_TEMPEDIT_NAME','Name');
DEFINE('_JLIST_BACKEND_TEMPEDIT_TYP','Typ');
DEFINE('_JLIST_BACKEND_TEMPEDIT_TEXT','Layout');
DEFINE('_JLIST_BACKEND_TEMPEDIT_URL','Link zur Vorschau');

DEFINE('_JLIST_BACKEND_TEMPEDIT_NAME_DESCRIPTION','Geben Sie einen aussagekr&auml;ftigen Namen f&uuml;r das Layout an.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_TYP_DESCRIPTION','W&auml;hlen Sie den passenden Typ f&uuml;r das Layout aus.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_TEXT_DESCRIPTION','Hier wird das Layout der Darstellung im Frontend festgelegt.');

//Backend TEMPLATES TYPS
DEFINE('_JLIST_BACKEND_TEMP_TYP1','Kategorien');
DEFINE('_JLIST_BACKEND_TEMP_TYP2','Downloads');
DEFINE('_JLIST_BACKEND_TEMP_TYP3','Zusammenfassung');
DEFINE('_JLIST_BACKEND_TEMP_TYP4','E-Mail');

//Backend Backup and Restore
DEFINE('_JLIST_BACKEND_RESTORE_TITLE_HEAD','Datensicherung wiederherstellen');
DEFINE('_JLIST_BACKEND_RESTORE_FILE','Datensicherungsdatei ausw&auml;hlen');
DEFINE('_JLIST_BACKEND_RESTORE_RUN','Datenbank jetzt wiederherstellen');
DEFINE('_JLIST_BACKEND_RESTORE_RUN_FINAL','Soll die Datenherstellung jetzt gestartet werden?');
DEFINE('_JLIST_BACKEND_RESTORE_WARNING','Mit dem Starten des Wiederherstellungsprozesses werden die aktuell gespeicherten Daten in der Datenbank gel&ouml;scht und mit dem Inhalt der Datensicherungsdatei wieder gef&uuml;llt.<br /><br />Es kann nicht garantiert werden, dass dieser Vorgang erfolgreich durchgef&uuml;hrt wird. Auch kann dieser Vorgang nicht r&uuml;ckg&auml;ngig gemacht werden! Empfohlen wird daher eine vorige Datensicherung der aktuellen jDownloads Datenbank-Tabellen mit der jDownloads Backupfunktion.<br /><br />Wird eine Datensicherung einer &auml;lteren jDownloads-Version &uuml;bertragen, so wird anschliessend versucht diese in die neue Kategorienstruktur zu &uuml;bertragen. Warten Sie auf jeden Fall das Ende des Wiederherstellungsprozesses ab. Bei einer grossen Anzahl Kategorien und Downloads kann dies einige Minuten in Anspruch nehmen. Informationen zu den vorgenommenen Wiederherstellungen finden Sie anschliessend im Register: "Restore Log".');
DEFINE('_JLIST_BACKEND_RESTORE_MSG','%s Datens&auml;tze wurden erfolgreich wiederhergestellt!');
DEFINE('_JLIST_BACKEND_RESTORE_MSG_2','Siehe Informationen im Register: "Restore Log".');

//Backend CSS & LANGUAGE EDIT
DEFINE('_JLIST_BACKEND_EDIT_CSS_TITLE','CSS-Datei');
DEFINE('_JLIST_BACKEND_EDIT_LANG_TITLE','Sprachdatei');
DEFINE('_JLIST_BACKEND_EDIT_CSS_FIELD_TITLE','Inhalt der CSS-Datei');
DEFINE('_JLIST_BACKEND_EDIT_LANG_FIELD_TITLE','Inhalt der Sprachdatei');
DEFINE('_JLIST_BACKEND_EDIT_CSS_TITLE_EDIT','CSS-Datei bearbeiten');
DEFINE('_JLIST_BACKEND_EDIT_LANG_TITLE_EDIT','Sprachdatei bearbeiten');
DEFINE('_JLIST_BACKEND_EDIT_CSS_SAVED','CSS-Datei gespeichert!');
DEFINE('_JLIST_BACKEND_EDIT_LANG_SAVED','Sprachdatei gespeichert!');
DEFINE('_JLIST_BACKEND_EDIT_LANG_WRITE_STATUS_TEXT','<big>Die Sprachdatei ist: ');
DEFINE('_JLIST_BACKEND_EDIT_CSS_WRITE_STATUS_TEXT','<big>Die CSS-Datei ist: ');
DEFINE('_JLIST_BACKEND_EDIT_LANG_CSS_FILE_WRITABLE_YES','<font color="green">beschreibbar!</font></big>');
DEFINE('_JLIST_BACKEND_EDIT_LANG_CSS_FILE_WRITABLE_NO','<font color="#990000">NICHT beschreibbar!</font></big>');
DEFINE('_JLIST_BACKEND_EDIT_LANG_CSS_FILE_WRITABLE_INFO','Um &Auml;nderungen an der Datei speichern zu k&ouml;nnen, muss diese beschreibbar sein. &Auml;ndern Sie mit einem FTP-Programm die Zugriffsrechte f&uuml;r diese Datei auf CHMOD 0766.');


// BACKEND OTHERS
DEFINE('_JLIST_FRONTEND_NOCAT','Noch keine Kategorien vorhanden!');
DEFINE('_JLIST_FRONTEND_NOFILES','Diese Kategorie enth&auml;lt noch keine Downloads!');

// Information text
DEFINE('_JLIST_BACKEND_INFO_TEXT_TITLE','Informationen zu jDownloads');
DEFINE('_JLIST_BACKEND_INFO_LICENSE_TITLE','<b>Nutzungsbedingungen und Lizenzinformationen:</b>');
DEFINE('_JLIST_BACKEND_INFO_LICENSE_TEXT','Diese Komponente wird ver&ouml;ffentlicht unter der <a href="http://www.gnu.de/documents/gpl.de.html" target="_blank">GNU/GPL Lizenz</a>.<br />Mit der Installation von jDownloads erkennen Sie diese Lizenz sowie die unten aufgef&uuml;hrten Bedingungen an. Wenn Sie dies nicht w&uuml;nschen, so m&uuml;ssen Sie jDownloads wieder deinstallieren.<br /><br /><b>Weitere Bedingungen:</b><br />Das <b>entfernen des Backlinks</b> auf der Frontpage der Komponente ist <b>nicht erlaubt</b>! Dieser muss ausserdem gut sichtbar sein. M&ouml;chten Sie diesen Link trotzdem entfernen, so kann die Erlaubnis daf&uuml;r gegen Zahlung einer kleinen Geb&uuml;hr erteilt werden. N&auml;here Informationen hierzu finden Sie auf <a href="http://www.joomlaaddons.de">www.joomlaaddons.de</a>. Oder nehmen Sie einfach Kontakt mit mir auf: <a href="mailto:info@joomlaaddons.de">info@joomlaaddons.de</a>.<br /><br />Des weiteren wird diese Erweiterung "so wie sie ist" ohne jegliche Gew&auml;hrleistung oder Garantie zur Verf&uuml;gung gestellt! F&uuml;r m&ouml;gliche Datenverluste etc. wird daher keinerlei Haftung &uuml;bernommen. Der Einsatz der Komponente erfolgt auf eigene Verantwortung der installierenden Person.<br /><br /><b>Mein Dank an alle Personen, die mich bei der Entwicklung von jDownloads unterst&uuml;tzt haben.');

DEFINE('_JLIST_BACKEND_INFO_LINK_BACK','Zur&uuml;ck');

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

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_MAIL_DEFAULT','Mitteilung &uuml;ber einen Download!<br />
<br />
Folgende Dateien wurden zum Download angefordert:<br />
{file_list}
<br /><br />
Datum und Zeit: {date_time}<br />
Name: {user_name}<br />
Benutzergruppe: {user_group}<br />
Besucher IP-Adresse: {ip_address}<br /><br />
Dies ist eine automatisch generierte E-Mail.');

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
DEFINE('_JLIST_SETTINGS_LICENSE3_TEXT','Bei der <strong>Donationware</strong> (von engl. donation = Spende) handelt es sich um Freeware, wobei der Autor um eine Spende in beliebiger H&ouml;he bittet, um die durch Weiterentwicklung oder Verbreitung der Software entstehenden Kosten zu kompensieren.<br />Quelle: Wikipedia');
DEFINE('_JLIST_SETTINGS_LICENSE3_URL','');

DEFINE('_JLIST_SETTINGS_LICENSE4_TITLE','Linkware');
DEFINE('_JLIST_SETTINGS_LICENSE4_TEXT','Linkware fordert bei Benutzung einen Link auf die Autorenwebsite.');
DEFINE('_JLIST_SETTINGS_LICENSE4_URL','');

DEFINE('_JLIST_SETTINGS_LICENSE5_TITLE','Charityware');
DEFINE('_JLIST_SETTINGS_LICENSE5_TEXT','Charityware erlaubt die freie Nutzung, der Autor bittet aber bei Gefallen um eine Spende f&uuml;r einen guten Zweck.');
DEFINE('_JLIST_SETTINGS_LICENSE5_URL','');

DEFINE('_JLIST_SETTINGS_LICENSE6_TITLE','Kommerzielle Lizenz');
DEFINE('_JLIST_SETTINGS_LICENSE6_TEXT','');
DEFINE('_JLIST_SETTINGS_LICENSE6_URL','');

DEFINE('_JLIST_SETTINGS_LICENSE7_TITLE','Creative Commons');
DEFINE('_JLIST_SETTINGS_LICENSE7_TEXT','');
DEFINE('_JLIST_SETTINGS_LICENSE7_URL','http://de.wikipedia.org/wiki/Creative_Commons#Standard-Lizenzen');

///////////////////////////////////////////////////////////////////////////////
// Install default config values - Please do not delete this !!!
// Installations Vorgabewerte f&uuml;r Konfigurationen - NICHT l&ouml;schen !!!
///////////////////////////////////////////////////////////////////////////////
DEFINE('_JLIST_SETTINGS_INSTALL_1','<b>Alle Dateien markieren:</b>');
DEFINE('_JLIST_SETTINGS_INSTALL_2','');
DEFINE('_JLIST_SETTINGS_INSTALL_3','Informationen &uuml;ber Downloads');
DEFINE('_JLIST_SETTINGS_INSTALL_4','webmaster@ihreWebsite.de');
DEFINE('_JLIST_SETTINGS_INSTALL_5','info@ihrewebsite.de');

// ****************************************************************************
//		NEW IN VERSION 1.2 beta
// ****************************************************************************

// JAVASCRIPT (jdownloads.js) MESSAGES <<< Umlaute NICHT umwandeln !! >>>
DEFINE('_JLIST_JAVASCRIPT_TEXT_2','Es wurde noch keine Datei dieser Kategorie zum Download ausgew&auml;hlt.\\n');
DEFINE('_JLIST_JAVASCRIPT_TEXT_1','Bitte markieren Sie mindestens eine Datei dieser Kategorie und\\nklicken Sie dann erneut auf diese Schaltfl&auml;che.');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_TEXT_TO_SHORT','Geben Sie mindestens 3 Zeichen ein!'); 
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_NO_OPTION','Sie müssen mindestens eine Suchoption ausw&auml;hlen!'); 
// end javascript messages


DEFINE('_JLIST_INSTALL_1_2','Alle Datenfelder existieren bereits in der Datenbank!');
DEFINE('_JLIST_INSTALL_2_2','Datenfelder wurden ge&auml;ndert oder hinzugef&uuml;gt, da noch nicht vorhanden!');
DEFINE('_JLIST_INSTALL_17','JoomFish Installation gefunden! Die JoomFish Definitions-Dateien f&uuml;r jDownloads wurden kopiert nach:');
DEFINE('_JLIST_INSTALL_18','Keine JoomFish Installation gefunden. Die JoomFish Definitions-Dateien sind zu finden in:');
DEFINE('_JLIST_INSTALL_19','Wenn Sie diese zu einem sp&auml;teren Zeitpunkt mit JoomFish verwenden wollen, verwenden Sie den Installer von JoomFish hierzu.');

DEFINE('_JLIST_FRONTEND_HOME_LINKTEXT','&Uuml;bersicht');
DEFINE('_JLIST_FRONTEND_SUBTITLE_OVER_CATLIST','&Uuml;bersicht');
DEFINE('_JLIST_FRONTEND_SUBTITLE_OVER_ONE_CAT','Kategorie');
DEFINE('_JLIST_FRONTEND_SUBTITLE_OVER_DETAIL','Download im Detail');

// PAGENAVIGATION FRONTEND
DEFINE('_JLIST_FRONTEND_HEADER_PAGENAVI_PAGE_TEXT','Seite:');
DEFINE('_JLIST_FRONTEND_HEADER_PAGENAVI_TO_TEXT','von');

DEFINE('_JLIST_BACKEND_FILESEDIT_PRICE','Preis');
DEFINE('_JLIST_BACKEND_FILESEDIT_PRICE_DESC','Geben Sie den Preis inklusive W&auml;hrung ein.');

DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_4','Restore Log');

//FRONTEND UPLOAD
DEFINE('_JLIST_FRONTEND_UPLOAD_ACCESS_ONLY_REGGED','Sie m&uuml;ssen registriert sein um Dateien einreichen zu k&ouml;nnen. Sollten Sie bereits registriert sein, so melden Sie sich bitte zuvor auf der Webseite an.');
DEFINE('_JLIST_FRONTEND_UPLOAD_ACCESS_ONLY_SPECIALS','Sie verf&uuml;gen nicht &uuml;ber die Berechtigung Dateien einreichen zu k&ouml;nnen.');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_NO_CATS_EXIST','Fehler: Dateien k&ouml;nnen erst eingereicht werden, wenn mindestens eine Kategorie angelegt und ver&ouml;ffentlicht wurde.');    
DEFINE('_JLIST_FRONTEND_UPLOAD_LINKTEXT','Datei einreichen');
DEFINE('_JLIST_FRONTEND_UPLOAD_PAGE_TITLE','Datei einreichen');
DEFINE('_JLIST_FRONTEND_UPLOAD_FILENAME','Eingereichte Datei:');
DEFINE('_JLIST_FRONTEND_UPLOAD_FILENAME_BUTTON_TEXT_SEND','Absenden');
DEFINE('_JLIST_FRONTEND_UPLOAD_FILENAME_BUTTON_TEXT_CLEAR','Felder l&ouml;schen');
DEFINE('_JLIST_FRONTEND_UPLOAD_ALLOWED_FILETYPE','Erlaubte Dateitypen');
DEFINE('_JLIST_FRONTEND_UPLOAD_ALLOWED_MAX_SIZE','Erlaubte Dateigr&ouml;sse');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_NO_VALUE','Fehler: Sie haben nicht alle Pflichtfelder fehlerfrei ausgef&uuml;llt!<br />Bitte korrigieren Sie die markierten Felder.');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_FILETYPE','Fehler: Sie haben versucht einen unerlaubten Dateitype einzureichen!<br />Verwenden Sie nur die aufgef&uuml;hrten Dateitypen!');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_FILESIZE','Fehler: Sie haben versucht eine Datei hochzuladen, welche die maximale Dateigr&ouml;sse &uuml;berschreitet!');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_MOVE_FILE','Fehler: Beim Speichern der Datei auf dem Server ist ein Fehler aufgetreten!');
DEFINE('_JLIST_FRONTEND_UPLOAD_OK','Die Datei wurde erfolgreich &uuml;bertragen!<br />Vor Ver&ouml;ffentlichung der Datei wird diese eventuell noch gepr&uuml;ft.');

// FRONTEND UPLOAD FIELD TITLE
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_NAME','Ihr Name:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_MAIL','Ihre E-Mail Adresse:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_TITLE_FILE','Titel der Datei:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_DESC_FILE','Kurzbeschreibung der Datei:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_DESC_FILE_LONG','Langbeschreibung der Datei:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_AUTHOR','Autor Name:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_AUTHOR_URL','Autor Webseite:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_LIZENZ','Lizenz:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_VERSION','Version:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_PRICE','Preis:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_LISTBOXES','Ausw&auml;hlen:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_CATEGORY','Kategorie:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_LANGUAGE','Sprache:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_SYSTEM','System:');
DEFINE('_JLIST_FRONTEND_UPLOAD_SYMBOL_TEXT','Pflichtfeld');

//FRONTEND SEARCH
DEFINE('_JLIST_FRONTEND_SEARCH_LINKTEXT','Downloads suchen');

// AUTOCHECK DOWNLOADS
DEFINE('_JLIST_BACKEND_AUTOCHECK_NEW_CATS','neue Verzeichnisse wurden gefunden und als neue Kategorien hinzugef&uuml;gt!!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_MISSING_CATS','Kategorie-Verzeichnisse wurden nicht mehr gefunden und die entsprechenden Kategorien daher auf nicht &ouml;ffentlich ge&auml;ndert!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NO_NEW_CATS','Es wurden keine neuen Verzeichnisse gefunden!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NO_MISSING_CATS','Alle ver&ouml;ffentlichten Kategorie-Verzeichnisse existieren!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_LOG_TITLE','Zuletzt ausgef&uuml;hrte Aktionen:');
DEFINE('_JLIST_BACKEND_AUTOCHECK_LOG_TAB_TITLE','Letzte Aktionen bei der &Uuml;berwachung der Download-Verzeichnisse'); 
DEFINE('_JLIST_BACKEND_AUTOCHECK_REFRESH_MESSAGE','Sie m&uuml;ssen diese Seite aktualisieren um die &Auml;nderungen zu sehen!'); 

DEFINE('_JLIST_BACKEND_RESTORE_LOG_TAB_TITLE','Ergebniss der letzten Daten-Wiederherstellung'); 

DEFINE('_JLIST_BACKEND_PANEL_STATUS_DESC_OFFLINE','Der Wartungsmodue wurde aktiviert! Daher ist der Downloadbereich momentan f&uuml;r normale Besucher NICHT einsehbar! F&uuml;r Mitglieder ab der Gruppe: "Author" ist der Bereich dennoch sichtbar.');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_DOWNLOADS_HEADER','Status Downloads');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_DOWNLOADS_OFF_DESC','Die automatische &Uuml;berwachung der Download-Verzeichnisse ist deaktiviert!');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_VERSION_HEADER','Informationen zur aktuellen jDownloads Version');

DEFINE('_JLIST_BACKEND_SETTINGS_DEL_TEMPFILE_TIME','Nach wieviel Minuten tempor&auml;re Zip-Dateien l&ouml;schen');
DEFINE('_JLIST_BACKEND_SETTINGS_DEL_TEMPFILE_TIME_DESC','Geben Sie einen Wert in Minuten an, nach der die tempor&auml;r erstellten Zip-Dateien f&uuml;r Sammeldownloads vom Server wieder gel&ouml;scht werden sollen. Sollten Sie gro&szlig;e Dateien anbieten, so sollten Sie den Wert h&ouml;her setzen. Vorgabewert: 20 (Minuten).');

DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_FRONTEND_HEAD_UPLOAD','Frontend Upload Konfiguration');
DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIR_RENAME_ERROR','FEHLER: Download Hauptverzeichnis konnte nicht umbenannt werden!');
DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIR_RENAME_OK',' - Download Hauptverzeichnis erfolgreich umbenannt!');

DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO','Download-Verzeichnis &uuml;berwachen? ');
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_DESC','Wenn diese Option gew&auml;hlt ist, werden alle Verzeichnisse auf Ver&auml;nderungen &uuml;berpr&uuml;ft und die Datenbank automatisch aktualisiert. Somit werden Verzeichnisse und Dateien, die per FTP auf den Server geladen werden, automatisch als neue Datens&auml;tze in der Kategorie- und Downloadtabelle hinzugef&uuml;gt. Werden Kategorien oder Download-Dateien nicht mehr gefunden, so werden die betreffenden Eintr&auml;ge auf: <b>Nicht &Ouml;ffentlich</b> gesetzt. <b>Standard Einstellung: JA.</b>');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_USE_CHECKBOX_INFO','<b>Hinweis:</b> Optionen zur Anzeige von Download Checkboxen finden Sie in den Dateien-Layouts in der Layout Verwaltung!');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_USE_SYMBOLE_INFO','<b>Hinweis:</b> Optionen zur Anzeige der Mini-Symbole finden Sie in den Dateien-Layouts in der Layout Verwaltung!');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FILES_PER_SIDE','Anzahl Eintr&auml;ge pro Seite');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FILES_PER_SIDE_DESC','Geben Sie hier die Anzahl der Kategorien/Downloads an, die im Frontend pro Seite angezeigt werden sollen.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_HEADER_TITLE','Titel der im Header angezeigt wird');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_HEADER_DESC','Geben Sie hier den Titel an, der bei der Ansicht im Frontend im Kopf der Componente angezeigt werden soll, z.B. "Downloads".');

// FRONTEND UPLOAD CONFIG
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACTIVE','Frontend Upload aktivieren:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACTIVE_DESC','Wenn aktiviert k&ouml;nnen die unten festgelegten Benutzergruppen Dateien &uuml;ber ein Formular einreichen.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_PERMISSIONS','Wer darf Dateien hochladen:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_PERMISSIONS_DESC','Hier wird festgelegt, welche Benutzgruppe Dateien einreichen darf. Bei der Einstellung "Special" haben nur Mitglieder ab Status "Autor" Zugriff auf das Upload-Formular.');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACCESS_ALL','Jeder');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACCESS_REGGED','Registrierte');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACCESS_ADMINS','Special');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILETYPES','Erlaubte Dateitypen:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILETYPES_DESC','Geben Sie hier die einzelnen Dateiendungen an, welche &uuml;ber das Upload-Formular eingereicht werden d&uuml;rfen. Zwischen jedem Wert muss ein Komma (,) stehen.');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILESIZE','Maximale Dateigr&ouml;sse in KB:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILESIZE_DESC','Geben Sie hier die maximal erlaubte Dateigr&ouml;sse f&uuml;r eingereichte Dateien in Kilobyte an (1024 KB = 1 MB. Vorgabewert: 2048.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FORM_TEXT','Texte des Uploadformulars:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FORM_TEXT_DESC','Hier kann das Aussehen ober-und unterhalb des Upload-Formulars bearbeitet werden. An der Stelle des Platzhalters: <font color="red">{form}</font> wird das eigentliche Formular im Frontend ausgegeben. Der Platzhalter darf <b>nicht</b> gel&ouml;scht werden!');

// Platzhalter {form} NICHT ÄNDERN ODER LÖSCHEN !!!
// DO NOT DELETE, EDIT OR TRANSLATE: {form} !!! 
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FORM_TEXT_LAYOUT','Hier k&ouml;nnen Dateien auf den Server hochgeladen werden. Alle mit einem Symbol hervorgehobenen Felder m&uuml;ssen Daten enthalten. Ihr Name und E-Mail Adresse werden nicht an Dritte weitergegeben oder ver&ouml;ffentlicht und dienen uns lediglich zur Information.<br />
{form}<br />');

DEFINE('_JLIST_BACKEND_TEMPLIST_DEL_QUEST','Layout(s) l&ouml;schen?');
DEFINE('_JLIST_BACKEND_LICLIST_DEL_QUEST','Lizenz(en) l&ouml;schen?');

DEFINE('_JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD_STATUS_DESC','Hier sehen Sie den Status des in der Konfiguration angegebenem ROOT Upload Verzeichnis. Ist dieses nicht beschreibbar, so &uuml;berpr&uuml;fen Sie mit einem FTP-Programm die Zugriffsrechte. Diese m&uuml;ssen auf CHMOD 0777 stehen.');

DEFINE('_JLIST_BACKEND_FILESEDIT_HITS','Anzahl der bisherigen Downloads');
DEFINE('_JLIST_BACKEND_FILESEDIT_HITS_DESC','Hier kann der Download Z&auml;hler ver&auml;ndert oder zur&uuml;ckgesetzt werden');

DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_CAT_DESC','Welcher Kategorie soll dieser Download zugeordnet werden. W&auml;hlen Sie aus der Liste die gew&uuml;nschte aus. Wird sp&auml;ter eine andere Kategorie ausgew&auml;hlt, so wird die Download-Datei automatisch in das Verzeichnis der neuen Kategorie verschoben.');

DEFINE('_JLIST_BACKEND_FILESEDIT_DESCRIPTION_KURZ','Beschreibung - Kurz');
DEFINE('_JLIST_BACKEND_FILESEDIT_DESCRIPTION_LONG','Beschreibung - Lang');
DEFINE('_JLIST_BACKEND_FILESEDIT_EDITOR_INFO','In der Konfiguration kann festgelegt werden, ob hier nur einfache Texteingabefelder oder der aktivierte WYSIWYG-Editor verwendet wird.');
DEFINE('_JLIST_BACKEND_FILESEDIT_SENT_IN_FROM_STATUS','Status: ');
DEFINE('_JLIST_BACKEND_FILESEDIT_SENT_IN_FROM_EMAIL','E-Mail Adresse: ');
DEFINE('_JLIST_BACKEND_FILESEDIT_ERROR_TITLE','Fehler: Download muss einen Titel haben!');
DEFINE('_JLIST_BACKEND_FILESEDIT_CATLIST_ERROR','Fehler: Es wurde keine Kategorie zugeordnet!');
DEFINE('_JLIST_BACKEND_FILESEDIT_SAVE_MOVEFILE_ERROR',' - Fehler: Datei konnte nicht verschoben werden!');
DEFINE('_JLIST_BACKEND_FILESEDIT_SAVE_MOVEFILE_OK',' - Datei erfolgreich verschoben!');

DEFINE('_JLIST_BE_NO_PUBL_FILES','Downloads ohne Kategoriezuordnung k&ouml;nnen nicht ver&ouml;ffentlicht werden!');
DEFINE('_JLIST_BACKEND_FILESLIST_DEL_QUEST','Download(s) l&ouml;schen?');
DEFINE('_JLIST_BACKEND_FILESLIST_DESCRIPTION_SHORT','Beschreibung (Kurz)');
DEFINE('_JLIST_BACKEND_FILESLIST_PIC','Symbol');
DEFINE('_JLIST_BACKEND_FILESLIST_DEL_FILES_OPTION','<font color=#990000>Beim L&ouml;schen von Downloads auch Dateien l&ouml;schen:</font>');
DEFINE('_JLIST_BACKEND_FILESLIST_DEL_FILES_OPTION_TOOLTIP','Wenn JA, wird nicht nur der Download sondern auch die zugewiesene Datei vom Server gel&ouml;scht! Wird die Datei nicht gel&ouml;scht und die &Uuml;berwachung der Download-Verzeichnisse ist  aktiviert, so wird die Datei anschlie&szlig;end als neuer Download automatisch wieder gespeichert!<br /><b>Empfohlene Einstellung: JA</b>.');
DEFINE('_JLIST_BACKEND_FILESEDIT_DEL_FILES_OK',' - Auch zugeordnete Datei(en) gel&ouml;scht.');
DEFINE('_JLIST_BACKEND_FILESEDIT_DEL_FILES_ERROR',' - Zugeordnete Datei(en) nicht gel&ouml;scht da nicht vorhanden.');
DEFINE('_JLIST_BACKEND_FILESLIST_FILE_ID','ID');

DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_CAT_DEL_AFTER_COPY','Beim L&ouml;schen der alten Kategorie-Verzeichnisse ist ein Fehler aufgetreten.');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_TITLE','Kategorie Titel <b><font color=red>*</font></b>');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_TITLE_DESC','Bezeichnung der Kategorie. Da f&uuml;r jeden Kategorietitel ein gleichlautendes Verzeichnis erstellt wird, sind Sonderzeichen nicht erlaubt. Ausnahmen: <b>" - _ . , " </b>sowie Leerzeichen.');
DEFINE('_JLIST_BACKEND_CATSEDIT_ROOT_CAT_LISTBOX','Hauptkategorie');
DEFINE('_JLIST_BACKEND_CATSEDIT_ROOT_CAT_LISTBOX_NEW','Neue Hauptkategorie');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_TITLE','Kategorie Zuordnung');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_TITLE_NEW','Neue Kategorie erstellen in / als <b><font color=red>*</font></b>');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_DESC_NEW','Soll eine neue Hauptkategorie angelegt werden, so markieren Sie "Neue Hauptkategorie". Soll die neue Kategorie als Unterkategorie dienen, so markieren Sie die Kategorie die &uuml;bergeordnet sein soll. Hierin wird dann die Kategorie angelegt. Die Zuordnung kann auch noch zu einem sp&auml;teren Zeitpunkt ge&auml;ndert werden.');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_DESC','Wollen Sie eine Kategorie verschieben, so markieren Sie die Kategorie in der die aktuelle Kategorie verschoben werden soll. Soll eine Unterkategorie zuk&uuml;nftig als Hauptkategorie dienen, so markieren Sie "Hauptkategorie".<br /><br /><b>Hinweis:</b> Bei &Auml;nderungen hier wird das komplette gleichnamige Verzeichnis auf dem Server automatisch verschoben. Enth&auml;lt die verschobene Kategorie Unterkategorien, so werden auch diese mit verschoben. Um diese Aktionen nicht zu gef&auml;hrden, werden beim Editieren einer Kategorie ALLE anderen Kategorien f&uuml;r &Auml;nderungen gesperrt!');
DEFINE('_JLIST_BACKEND_CATSEDIT_SAVE','Kategorie gespeichert.');
DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_TITLE_CHARS_NOT_ALLOWED','Fehler: Der Titel enthielt unerlaubte Sonderzeichen!');
DEFINE('_JLIST_BACKEND_CATSLIST_DEL_QUEST','Kategorie(en) l&ouml;schen?');
DEFINE('_JLIST_BACKEND_CATSLIST_CATID','ID');
DEFINE('_JLIST_BACKEND_CATSLIST_PATH','Verzeichnis');

// BACKEND CATS DELETE
DEFINE('_JLIST_BE_NO_DEL_SUBCATS_EXISTS','Kategorie kann nicht gel&ouml;scht werden, da Unterkategorien vorhanden!');
DEFINE('_JLIST_BE_NO_DEL_FILES_EXISTS','Kategorie kann nicht gel&ouml;scht werden, da Downloads hierzu existieren!');
DEFINE('_JLIST_BE_DEL_CATS_DIRS_OK',' - Verzeichnis erfolgreich gel&ouml;scht!');
DEFINE('_JLIST_BE_DEL_CATS_DIRS_ERROR',' - FEHLER beim L&ouml;schen des Verzeichnisses!');

DEFINE('_JLIST_BACKEND_NO_SELECT_ACTION','Es muss zuerst ein Eintrag in der Liste markiert werden!');

DEFINE('_JLIST_BE_SETTINGS_FILES_PER_SIDE_BE_TITLE','Wieviele Zeilen anzeigen bei Listen');
DEFINE('_JLIST_BE_SETTINGS_FILES_PER_SIDE_BE_DESC','Wieviele Zeilen sollen als Vorgabe bei Listenansichten im Backend angezeigt werden.');

DEFINE('_JLIST_UPLOAD_MAX_FILESIZE_INFO_TITLE','Maximale Dateigr&ouml;sse laut php.ini:');

DEFINE('_JLIST_BACKEND_TEMPLATE_ACTIVE_ERROR','Es darf nur EIN Layout markiert werden um es zu aktivieren!');
DEFINE('_JLIST_AUTO_FILE_CHECK_IMPORT_BY','System');  // changed in 1.4 beta   
DEFINE('_JLIST_AUTO_FILE_CHECK_ADDED',   'Datei hinzugef&uuml;gt    ');
DEFINE('_JLIST_AUTO_FILE_CHECK_DISABLED','Datei nicht gefunden      ');
DEFINE('_JLIST_AUTO_CAT_CHECK_ADDED',    'Kategorie hinzugef&uuml;gt');
DEFINE('_JLIST_AUTO_CAT_CHECK_DISABLED', 'Kategorie nicht gefunden  ');

// MESSAGES AFTER CHECK FILES AND DIRS WHEN UPDATED FROM 1.1 alpha
DEFINE('_JLIST_CHECK_CATS_TITEL1','Sie haben von einer &auml;lteren jDownloads-Version auf die Version 1.2 upgedatet!');     
DEFINE('_JLIST_CHECK_CATS_TITEL2','Daher m&uuml;ssen nun alle bereits angelegten Kategorien und Downloads in die neue Kategoriestruktur &uuml;bertragen werden!');          

DEFINE('_JLIST_CHECK_FINISH','Der Vorgang wurde beendet!');
DEFINE('_JLIST_CHECK_CATS_CREATE','Kategorie-Verzeichnisse wurden erstellt!');
DEFINE('_JLIST_CHECK_FILES_MOVE','Download-Dateien wurden verschoben!');
DEFINE('_JLIST_CHECK_FILES_NOT_FOUND','Download-Dateien wurden nicht gefunden!');
DEFINE('_JLIST_CHECK_FILES_NOT_MOVED','Download-Dateien konnten nicht in das zugewiesene Kategorie-Verzeichnis verschoben werden!');
DEFINE('_JLIST_CHECK_CATS_NOT_FOUND','Kategorie-Verzeichnisse konnten nicht erstellt werden!');

// MESSAGES AFTER RESTORE BACKUPFILE
DEFINE('_JLIST_AFTER_RESTORE_TITLE_1','Datenwiederherstellung l&auml;uft:');
DEFINE('_JLIST_AFTER_RESTORE_1','Datens&auml;tze wurden wieder hergestellt!');
DEFINE('_JLIST_AFTER_RESTORE_TITLE_2','&Uuml;berpr&uuml;fung der Datenbankinhalte wird gestartet:');
DEFINE('_JLIST_AFTER_RESTORE_3','Backup wurde von einer &auml;lterer jDownloads-Version eingespielt!');
DEFINE('_JLIST_AFTER_RESTORE_4','Daher werden nun die Kategorie-Verzeichnisse und Downloads &uuml;berpr&uuml;ft:');
DEFINE('_JLIST_AFTER_RESTORE_TITLE_3','Ergebnisse im Detail:');

DEFINE('_JLIST_AUTOCHECK_DIR_NOT_EXIST','FEHLER: Upload Root-Verzeichnis existiert nicht!');
DEFINE('_JLIST_AUTOCHECK_DIR_NOT_EXIST_2','Erstellen Sie die Verzeichnisse /downloads und /downloads/tempzipfiles in Ihrem Joomla-Hauptverzeichnis per FTP-Programm und setzen Sie die Zugriffsrechte auf CHMOD 0777 - andernfalls wird jDownloads nicht funktionieren!');
DEFINE('_JLIST_FRONTEND_HEADER_CATLIST_TITLE','Kategorie:');
DEFINE('_JLIST_FRONTEND_HEADER_SUMMARY_TITLE','Zusammenfassung');
DEFINE('_JLIST_FRONTEND_HEADER_FINISH_TITLE','Download');

// FRONTEND SEARCH
DEFINE('_JLIST_FRONTEND_SEARCH_TITLE','Downloads suchen');
DEFINE('_JLIST_FRONTEND_SEARCH_TEXT_TITLE','Suchen nach');
DEFINE('_JLIST_FRONTEND_SEARCH_IN_TITLE','Suchen in Titel');
DEFINE('_JLIST_FRONTEND_SEARCH_IN_DESC','Suchen in Beschreibung');
DEFINE('_JLIST_FRONTEND_SEARCH_INFO_TEXT','Maximal werden die 20 neuesten Downloads angezeigt, die dem Suchergebnis entsprechen.');  
DEFINE('_JLIST_FRONTEND_SEARCH_BUTTON_TEXT','Suchen');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_TITLE','Suchergebnis');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_SUM_FILES','Gefunden');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_NO_SUM_FILES','Es wurden keine Downloads gefunden');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_SEARCH_TEXT','Gesuchter Begriff');

// NEW LAYOUT FOR VIEW DOWNLOAD-DETAILS
DEFINE('_JLIST_BACKEND_TEMP_TYP5','Download-Details');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_DETAILS','Download-Details');
DEFINE('_JLIST_BACKEND_TEMPLIST_DETAILSTITLE_HEAD','Download-Details Layouts');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS','Layout: Download-Details');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_DESC','Dies ist die Darstellung der <b>Detailseite</b> eines Downloads im Frontend.<br /><br />Der <font color=red>{url_download}</font> Platzhalter darf nicht aus dem Code entfernt werden!<br /><br />Verf&uuml;gbare Platzhalter:<br />{file_title} {thumbnail} {pic_is_new} {pic_is_hot} {pic_is_updated} {url_download} {mirror_1} {mirror_2} {description_long} {details_block_title} {license_title} {license_text} {price_title} {price_value} {language_title} {language_text} {filesize_title} {filesize_value} {system_title} {system_text} {author_title} {author_text} {author_url_title} {author_url_text} {created_date_title} {created_date_value} {hits_title} {hits_value} {created_by_title} {created_by_value} {modified_by_title} {modified_by_value} {modified_date_title} {modified_date_value}.'); // changed in 1.4 beta (2)
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_INFO_TITLE','<b>Informationen zum Download-Details Layout:</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_INFO_TEXT','<p>Hier sehen Sie ein grafisches Beispiel f&uuml;r die Detaildarstellung eines Downloads im Frontend. Der dunkelrote Rahmen, markiert den Bereich dessen Darstellung Sie hier &auml;ndern k&ouml;nnen.</p>');

// FRONTEND DOWNLOAD DETAILSITE
DEFINE('_JLIST_FE_DETAILS_PATHWAY_TEXT','Sie befinden sich hier');
DEFINE('_JLIST_FE_DETAILS_LINK_TEXT_TO_DETAILS','>> Details');
DEFINE('_JLIST_FE_DETAILS_LICENSE_TITLE','Lizenz');
DEFINE('_JLIST_FE_DETAILS_PRICE_TITLE','Preis');
DEFINE('_JLIST_FE_DETAILS_LANGUAGE_TITLE','Sprache');
DEFINE('_JLIST_FE_DETAILS_FILESIZE_TITLE','Dateigr&ouml;&szlig;e');
DEFINE('_JLIST_FE_DETAILS_SYSTEM_TITLE','System');
DEFINE('_JLIST_FE_DETAILS_AUTHOR_TITLE','Autor');
DEFINE('_JLIST_FE_DETAILS_AUTHOR_URL_TITLE','Webseite');
DEFINE('_JLIST_FE_DETAILS_CREATED_DATE_TITLE','Erstellt am');
DEFINE('_JLIST_FE_DETAILS_HITS_TITLE','Downloads');

// LAYOUT DOWNLOAD-DETAILS
///////////////////////////////////////////////////////////////////////////////
// Template defaults for _jdownloads_templates - Please do not change this and NO translation here!!!
// Vorgabewerte f&uuml;r Layouttabelle - hier bitte KEINE &Auml;nderungen oder Übersetzungen hier vornehmen !!!
///////////////////////////////////////////////////////////////////////////////
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_DEFAULT_NAME','Standard 1.4'); // changed in 1.4 beta
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT_NAME','Standard 1.4'); // changed in 1.4 beta

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_DEFAULT_NAME','Standard 1.4 - Komplette Infos'); // changed in 1.4 beta
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
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT_NEW_SIMPLE_1_NAME','Einfache Darstellung mit Checkboxen');
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

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT_NEW_SIMPLE_2_NAME','Einfache Darstellung ohne Checkboxen');
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
DEFINE('_JLIST_BACKEND_TEMPEDIT_TITLE_NOT_ALLOWED_TO_CHANGE_DESK','Namen von Standard-Layouts k&ouml;nnen nicht ge&auml;ndert werden!');
DEFINE('_JLIST_BACKEND_TEMPEDIT_NOTE_TITLE','Layout Notizen');
DEFINE('_JLIST_BACKEND_TEMPEDIT_NOTE_DESC','Hier k&ouml;nnen zus&auml;tzliche Informationen zum Layout gespeichert werden.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_CHECKBOX_TITLE','Verwendet das Layout Checkboxen?');
DEFINE('_JLIST_BACKEND_TEMPEDIT_CHECKBOX_DESC','Wenn ja, wird bei der Ausgabe die Checkbox-Kopfzeile und der "Weiter" Button  angezeigt. Ausserdem muss dann der Platzhalter <b>{checkbox_list}</b> im Layout eingef&uuml;gt werden. Wenn nein, muss stattdessen der Platzhalter <b>{url_download}</b> im Layout eingef&uuml;gt/verwendet werden.'); 
DEFINE('_JLIST_BACKEND_TEMPEDIT_SYMBOLE_TITLE','Mini-Symbole einf&uuml;gen?');
DEFINE('_JLIST_BACKEND_TEMPEDIT_SYMBOLE_DESC','Wenn ja, werden vor den entsprechenden Platzhaltern Mini-Symbole eingefügt. Die Größe der Symbole kann in der Konfiguration eingestellt werden. Wenn deaktiviert, müssen entsprechende Textbezeichner vor den Platzhaltern eingesetzt werden.'); // changed in 1.4 beta

DEFINE('_JLIST_FE_YES','Ja');
DEFINE('_JLIST_FE_NO','Nein');

DEFINE('_JLIST_BACKEND_EDIT_PUBLISHED','Ver&ouml;ffentlichen');
DEFINE('_JLIST_BACKEND_FILESEDIT_MODIFIED_DATE','Zuletzt ge&auml;ndert');
DEFINE('_JLIST_BACKEND_FILESEDIT_MODIFIED_BY','von');
DEFINE('_JLIST_BACKEND_FILESEDIT_CREATED_BY','Erstellt von');
DEFINE('_JLIST_BACKEND_FILESEDIT_INFO_FIELDS_DESC','Die nebenstehenden Felder dienen lediglich der Information und halten fest, wer und wann die Daten erfasst oder zuletzt ge&auml;ndert hat.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CATLISTBOX_ACTIVE','Kategorie Listbox im Header anzeigen?');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CATLISTBOX_DESC','Wenn ja, wird im Header aussen rechts eine Listbox mit allen ver&ouml;ffentlichten Kategorien angezeigt zu dem der Anwender laut seinem Status Zugriff hat. Hier&uuml;ber kann er dann gezielt sofort zur gew&uuml;nschten Kategorie/Unterkategorie gelangen.');

// SAMPLE DATA 
DEFINE('_JLIST_SAMPLE_DATA_CAT_NAME_ROOT','Beispiel Kategorie');
DEFINE('_JLIST_SAMPLE_DATA_CAT_NAME_SUB','Beispiel Unterkategorie');
DEFINE('_JLIST_SAMPLE_DATA_CAT_NAME_TEXT','Hier eine Beispiel Kategorie zur Veranschaulichung. Diese k&ouml;nnen Sie jederzeit wieder l&ouml;schen.');
DEFINE('_JLIST_SAMPLE_DATA_FILE_NAME','Beispiel Download');
DEFINE('_JLIST_SAMPLE_DATA_FILE_NAME_TEXT','Hier ein Beispiel Download zur Veranschaulichung. Diesen k&ouml;nnen Sie jederzeit wieder l&ouml;schen.');
DEFINE('_JLIST_SAMPLE_DATA_CREATE_ERROR','Auf Grund eines Fehlers konnten die Beispieldaten nicht erstellt werden! Nutzen Sie die Option im Hauptmen&uuml; von jDownloads.');
DEFINE('_JLIST_SAMPLE_DATA_CREATE_OK','Beispieldaten wurden erfolgreich hinzugef&uuml;gt!');
DEFINE('_JLIST_SAMPLE_DATA_BE_OPTION_LINK_TEXT','Jetzt Beispieldaten erstellen');
DEFINE('_JLIST_SAMPLE_DATA_EXISTS','Beispieldaten sind bereits vorhanden!');
DEFINE('_JLIST_SAMPLE_DATA_BACK_TO_PANEL','Zur&uuml;ck zum Hauptmen&uuml;');


DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_HEAD_INFO2','<br /><b><u>Erkl&auml;rung zu den Layouts</u></b><br /><b>Kategorien: </b>Im Kategorie Layout wird die Darstellung der Kategorien sowie der Elemente f&uuml;r die Verwendung der Checkboxen ober- und unterhalb der Downloadliste festgelegt.<br /><b>Dateien: </b>Hier wird die Darstellung der Downloadliste unterhalb der Kategorien festgelegt.<br /><b>Download-Details: </b>Hier wird die Darstellung eines Downloads in der Detailansicht festgelegt.<br /><b>Zusammenfassung: </b>Hier wird die Darstellung der Seite festgelegt, von der der eigentlich Download startet und dem Anwender eine &Uuml;bersicht der aktivierten Downloads angezeigt wird.'); // changed in 1.3 RC2

// ANTI_LEECH_CONFIG
DEFINE('_JLIST_BACKEND_SETTINGS_ANTILEECH_TITLE','Download Ordner sch&uuml;tzen?');
DEFINE('_JLIST_BACKEND_SETTINGS_ANTILEECH_DESK','Bei ja, wird die Datei htaccess.txt in das Download-ROOT Verzeichnis kopiert und in: .htaccess umbenannt. Damit wird der Schutz aktiviert und alle externen Datei-Zugriffe auf dieses Verzeichnis und alle darin enthaltenen Unterverzeichnisse blockiert. <b>Empfohlene Einstellung: JA!</b>');
DEFINE('_JLIST_ACTIVE_ANTILEECH_ERROR',' - Fehler beim Kopieren der htaccess.txt!');
DEFINE('_JLIST_ACTIVE_ANTILEECH_OK',' - Download Schutz aktiviert!');
DEFINE('_JLIST_ACTIVE_ANTILEECH_OFF_ERROR',' - Fehler beim entfernen der .htaccess!');
DEFINE('_JLIST_ACTIVE_ANTILEECH_OFF_OK',' - Download Schutz deaktiviert!');

DEFINE('_JLIST_FRONTEND_ANTILEECH_MESSAGE','Unerlaubter Zugriff auf Downloads!');
DEFINE('_JLIST_FRONTEND_FILE_NOT_FOUND_MESSAGE','Die angeforderte Datei wurde nicht gefunden!<br /><br />Bitte informieren Sie den Webmaster dar&uuml;ber!');

DEFINE('_JLIST_FRONTEND_SUMMARY_ZIP_FILESIZE','Dateigr&ouml;&szlig;e des angeforderten Sammel-Downloads');
DEFINE('_JLIST_FRONTEND_NEXT_SITE_BUTTON','&nbsp;>>&nbsp;');
DEFINE('_JLIST_FRONTEND_PREV_SITE_BUTTON','&nbsp;<<&nbsp;');

DEFINE('_JLIST_FRONTEND_SUBHEADER_NUMBER_OF_CATS_TITLE','Anzahl Kategorien');
DEFINE('_JLIST_FRONTEND_SUBHEADER_NUMBER_OF_SUBCATS_TITLE','Anzahl Unterkategorien');
DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_CATLIST','Es muss eine Kategorie oder >Hauptkategorie< markiert sein.');

// NEW OPTION FOR DIREKT DOWNLOAD LINK
DEFINE('_JLIST_BACKEND_SETTINGS_DIRECT_DOWNLOAD_ACTIVE_TITLE','Direkt-Download aktivieren?');
DEFINE('_JLIST_BACKEND_SETTINGS_DIRECT_DOWNLOAD_ACTIVE_DESC','Wenn JA, wird bei Verwendung des Platzhalters <b>{url_download}</b> im Layout der Download sofort gestartet, ohne die Seite Zusammenfassung anzuzeigen.');

// NEW OPTION FOR HOT AND NEW IMAGES IN DOWNLOADS
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_TITLE','Ab wann gilt ein Download als "beliebt"');
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_DESC','Geben Sie hier die Anzahl an Downloads an, ab der ein Download als "HOT" (beliebt) gelten soll. Hinter dem Download-Titel wird dann das unten angegebene Symbol angezeigt. Bei 0 wird kein Symbol angezeigt.');
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_NEW_PIC_TITLE','Dateiname des Symbols');
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_NEW_PIC_DESC','Hier stehen alle Bilddateien aus dem Ordner: <b>../images/jdownloads/hotimages </b>zur Auswahl.'); // changed in 1.3 RC2
DEFINE('_JLIST_BACKEND_SETTINGS_NEW_TITLE','Wie lange gilt ein Download als "neu"');
DEFINE('_JLIST_BACKEND_SETTINGS_NEW_DESC','Geben Sie hier die Anzahl Tage an, wie lange ein Download als "neu" gelten soll.  Hinter dem Download-Titel wird dann das unten angegebene Symbol angezeigt. Bei 0 wird kein Symbol angezeigt.');

// NEW OPTION FOR DOWNLOAD PIC BUTTON IN DOWNLOAD DETAILS
DEFINE('_JLIST_BACKEND_SETTINGS_DETAILS_DOWNLOAD_BUTTON_TITLE','Download Button'); // changed in 1.3 RC2 
DEFINE('_JLIST_BACKEND_SETTINGS_DETAILS_DOWNLOAD_BUTTON_DESC','Hier stehen alle Bilddateien aus dem Ordner: <b>../images/jdownloads/downloadimages </b>zur Auswahl. Die aktivierten Buttons werden auf der Download-Detailseite und die Zusammenfassung f&uuml;r den Download- und die Mirror-Links verwendet.'); // changed in 1.3 RC2

// NEW IN 1.2 beta 2
DEFINE('_JLIST_FRONTEND_UPLOAD_AUTO_PUBLISH','Download sofort ver&ouml;ffentlichen:');
DEFINE('_JLIST_FRONTEND_UPLOAD_AUTO_PUBLISH_DESC','Wenn JA, wird der Download nach dem Upload sofort ver&ouml;ffentlicht.');

// NEW IN 1.2 stable
DEFINE('_JLIST_BACKEND_DIRSEDIT_CREATE_DIR_MESSAGE_ERROR','Fehler: Verzeichnis konnte nicht erstellt werden! &Uuml;berpr&uuml;fen Sie die Zugriffsrechte der Verzeichnisse mit einem FTP-Programm. Die CHMOD Werte m&uuml;ssen auf 0777 stehen.');

// NEW IN 1.3 stable

// FOR CREATES MAIN MENU IN INSTALL
DEFINE('_JLIST_BACKEND_CPANEL_MAIN','Hauptmen&uuml;');
DEFINE('_JLIST_INSTALL_DEFAULT_DATE_FORMAT','%d.%m.%Y %H:%M:%S');

// NEW OPTION SORTORDER CATEGORIES
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SORTCATSORDER_TEXT','Kategorien Sortierreihenfolge');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SORTCATSORDER_DESC','Sortierreihenfolge der Kategorien bei der Darstellung im Frontend. Wenn die im Backend standardm&auml;&szlig;ig vorgenommene Sortierung verwendet werden soll, so w&auml;hlen Sie: "Standard".');
DEFINE('_JLIST_BACKEND_SETTINGS_CATS_ORDER_1','Standard');
DEFINE('_JLIST_BACKEND_SETTINGS_CATS_ORDER_2','Name aufsteigend');
DEFINE('_JLIST_BACKEND_SETTINGS_CATS_ORDER_3','Name absteigend');

// NEW TAB TITLE FOR AUTODETECT 
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_TAB_TITLE','&Uuml;berwachung');
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_HEADER_TITLE','&Uuml;berwachung der Download-Verzeichnisse konfigurieren');

// NEW OPTION AUTOPUBLISH NEW FOUNDED FILES
DEFINE('_JLIST_BACKEND_SETTINGS_DOWNLOADS_AUTOPUBLISH_TITLE','Downloads automatisch ver&ouml;ffentlichen?');
DEFINE('_JLIST_BACKEND_SETTINGS_DOWNLOADS_AUTOPUBLISH_DESC','Wenn Ja, werden neu gefundene Dateien sofort ver&ouml;ffentlicht. Vorrausgesetzt, die Option zur &Uuml;berwachung der Downloads oben ist aktiviert.<br /><b>Standard Einstellung: Nein.</b>');

// NEW OPTION  FOR AUTODETECT ALL FILES
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_ALL_FILES_TITLE','Alle Dateitypen &uuml;berwachen?');
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_ALL_FILES_DESC','Ist diese Option aktiviert, werden alle Dateien &uuml;berwacht, unabh&auml;ngig vom Dateityp!');

// NEW OPTION  FOR AUTODETECT ONLY THIS FILES
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_ONLY_THIS_FILES_TITLE','Nur folgende Dateitypen &uuml;berwachen:');
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_ONLY_THIS_FILES_DESC','Wenn die obere Option deaktiviert ist, werden nur die hier aufgef&uuml;hrten Dateitypen &uuml;berwacht! Zwischen jedem Wert muss ein Komma (,) stehen.');

// NEW COPY DOWNLOADS FUNCTION
DEFINE('_JLIST_BACKEND_FILES_COPY_TITLE','Downloads kopieren');
DEFINE('_JLIST_BACKEND_FILES_COPY_DESC','W&auml;hlen Sie die Kategorie aus, in der Kopien der ausgew&auml;hlten Downloads erstellt werden sollen.');
DEFINE('_JLIST_BACKEND_FILES_COPY_TEXT_1','Folgende Downloads werden kopiert:');
DEFINE('_JLIST_BACKEND_FILES_COPY_TEXT_2','Hinweis: Wenn Sie die gleiche Kategorie als Ziel ausw&auml;hlen, wird darin eine "Kopie von <i>Downloadbezeichner</i>" angelegt!');
DEFINE('_JLIST_BACKEND_FILES_COPY_TEXT_3','Kopierte Downloads ver&ouml;ffentlichen:');
DEFINE('_JLIST_BACKEND_FILES_COPY_TEXT_4','Auch zugewiesene Datei kopieren:');
DEFINE('_JLIST_BACKEND_FILES_COPY_DOWNLOADS_TEXT','Kopie von');
DEFINE('_JLIST_BACKEND_FILES_COPY_SAVED','Downloads wurden kopiert!');

// NEW OPTION EXTERN DOWNLOAD URL
DEFINE('_JLIST_BACKEND_FILE_EDIT_EXT_DOWNLOAD_TITLE','Externer Dateilink:');
DEFINE('_JLIST_BACKEND_FILE_EDIT_EXT_DOWNLOAD_INFO','Soll eine externe Datei verlinkt werden, muss zuvor die Lokal zugewiesene Datei gel&ouml;scht werden.');
DEFINE('_JLIST_BACKEND_FILE_EDIT_EXT_DOWNLOAD_DESC','Hier k&ouml;nnen Sie eine externe Datei f&uuml;r diesen Download angeben. Lassen Sie dann das Eingabefeld f&uuml;r den Dateiupload oben leer.<br ><b>Wichtiger Hinweis:</b> Soll ein Link auf einen Sharehoster (z.B. Rapidshare) geleitet werden, so kann ein funktionierender Download nicht garantiert werden. Testen Sie dies also unbedingt zuvor. Auch kann die Dateigr&ouml;&szlig;e nicht immer ermittelt werden. Diese muss dann manuell eingetragen werden.'); //changed in 1.3 RC2

//NEW OPTION FOR JCOMMENTS INTEGRATION
DEFINE('_JLIST_BACKEND_SETTINGS_JCOMMENTS_TITLE','Kommentarfunktionen von JComments verwenden?');
DEFINE('_JLIST_BACKEND_SETTINGS_JCOMMENTS_DESC','Wenn Ja, wird die Kommentarfunktion von <b>JComments</b> in der Detailansicht der Downloads verwendet. <b>JComments</b> ist kein Bestandteil von jDownloads und muss hierzu separat installiert und konfiguriert werden. <br /><b>Status: Die Komponente ist noch nicht installiert!</b><br />Die Erweiterung ist auf <a href="http://www.joomlatune.com">www.joomlatune.com</a> zu finden.');
DEFINE('_JLIST_BACKEND_SETTINGS_JCOMMENTS_EXISTS_DESC','Wenn Ja, wird die Kommentarfunktion von <b>JComments</b> in der Detailansicht der Downloads verwendet. <br /><b>Status: JComments ist bereits installiert!</b>');

// NEW TAB FOR FRONTEND UPLOAD CONFIG
DEFINE('_JLIST_BACKEND_SETTINGS_FE_UPLOAD_TAB_TITLE','Uploads');
DEFINE('_JLIST_BACKEND_SETTINGS_FE_UPLOAD_TITLE_HEAD','Frontend Uploadformular konfigurieren');

// NEW DOWNLOAD FIELDS FOR DOWNLOAD MIRRORS
DEFINE('_JLIST_BACKEND_FILESEDIT_MIRROR_URL_TITLE','Alternativer <b>zus&auml;tzlicher</b> externer Dateilink:');
DEFINE('_JLIST_BACKEND_FILESEDIT_MIRROR_URL_DESC','Hier kann zus&auml;tzlich eine weitere externe Datei auf einem anderen Server angegeben werden (Mirror).<br />Bei Verwendung m&uuml;ssen im aktivierten Dateien- oder Details-Layout die Platzhalter {mirror_1} {mirror_2} eingef&uuml;gt werden. Im &uuml;brigen gilt hier das gleiche für Sharehoster Dateien wie beim Feld: Externer Dateilink!'); // changed in 1.4 beta');

//NEW TEXT FOR MIRRORS
DEFINE('_JLIST_FRONTEND_MIRROR_URL_TITLE_1','Mirror 1');
DEFINE('_JLIST_FRONTEND_MIRROR_URL_TITLE_2','Mirror 2');

//NEW FOR PLUGINS TAB
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_PLUGINS','Plugins');

//NEW FOR FILE PLUGIN
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_FILEPLUGIN_HEAD','Artikel Plugin konfigurieren (mos_jdownloads_file)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(c) by Pelma for jDownloads');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_DEFAULTLAYOUT','Standard-Layout festlegen:');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_DEFAULTLAYOUT_DESC','Mit dem hier ausgew&auml;hlten Layout werden die Downloads in den Artikeln angezeigt, wenn das Plugin <b>aktiviert</b> ist. (Siehe Parameter unten).');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_NOT_INSTALLED','Das Datei-Plugin f&uuml;r die Ansicht von Downloads innerhalb von Artikeln, ist kein fester Bestandteil von jDownloads und muss hierzu seperat installiert werden. <br /><b>Status: Das Artikel Plugin ist noch nicht installiert!</b><br />Die Erweiterung ist auf <a href="http://demo.joomlaaddons.de/index.php?option=com_jdownloads&Itemid=69&task=viewcategory&catid=9">www.JoomlaAddons.de</a> zu finden.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_ONLINEPART','Parameter, Plugin aktiviert');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINEPART','Parameter, Plugin deaktiviert');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWNEW','NEW-Symbol anzeigen');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWNEW_DESC','Anzeigen (oder nicht) des Symboles f&uuml;r neue Downloads.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWHOT','HOT-Symbol anzeigen');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWHOT_DESC','Anzeigen (oder nicht) des Symboles f&uuml;r heisse Downloads (HOT-Symbol).');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_ENABLEPLUGIN','Plugin aktivieren');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_ENABLEPLUGIN_DESC','Aktivieren des Plugins. Dies hat nichts zu tun mit der Publikation des Plugins in Joomla. Falls das Plugin hier deaktiviert ist haben Sie die M&ouml;glichkeit den Besucher dar&uuml;ber zu informieren. (Siehe folgende Parameter)!');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWDISABLED','Meldung anzeigen wenn Plugin deaktiviert');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWDISABLED_DESC','Wenn das Plugin deaktiviert ist, k&ouml;nnen Sie den Besucher dar&uuml;ber informieren. (oder eben nicht). Siehe Parameter unten. <br \><b>Nein</b>: Nichts anzeigen.<br \><b>Defaultlayout</b>: Das Defaultlayout wird verwendet.<br \><b>Offlinelayout</b>: Das Offlinelayout wird verwendet.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_DOWNLOADTITLE','Originaltitel des Downloads anzeigen (wenn Plugin deaktiviert)');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_DOWNLOADTITLE_DESC','Wenn <b>Ja</b> wird der Originaltitel (und das Symbol) des Downloads angezeigt, obwohl das Plugin deaktiverit ist.<br \>Wenn <b>Nein</b> wird der Titel des Downloads ersetzt durch den Inhalt des Feldes "Titel wenn Plugin deaktiviert" weiter unten.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINETITLE','Titel wenn Plugin deaktiviert');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINETITLE_DESC','Ersatztitel wird angezeigt wenn die Option oben auf Ja steht.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINEDESC','Beschreibung wenn Plugin deaktiviert.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINEDESC_DESC','Diese Beschreibung wird anstelle der Original Downloadbeschreibung angezeigt wenn das Plugin deaktiviert ist..');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT','Offlinelayout (wenn Plugin deaktiviert)');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT_DESC','Das hier ausgew&auml;hlte Layout wird verwendet wenn das Plugin deaktiviert ist.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT_OPT1','Nein');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT_OPT2','Standard-Layout');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT_OPT3','Offline-Layout');
DEFINE('_JLIST_FRONTEND_SETTINGS_FILEPLUGIN_OFFLINE_FILETITLE','Die Downloads sind deaktivert.');
DEFINE('_JLIST_FRONTEND_SETTINGS_FILEPLUGIN_DESCRIPTION','Falls Sie trotzdem die Erlaubnis haben die Dateien herunterzuladen, wollen Sie bitte den Webmaster informieren.');
DEFINE('_JLIST_FRONTEND_SETTINGS_FILEPLUGIN_FILEUNKNOWN','Der Download ID=<b>{fileid}</b> exisitert nicht! ');
DEFINE('_JLIST_FRONTEND_SETTINGS_FILEPLUGIN_LAYOUTUNKNOWN','Das Layout <b>{thelayout}</b> existiert nicht!');

// NEW OPTIONS FOR DEFAULT CAT ICON
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_CAT_FILE_NO_DEFAULT_PIC','Kein Symbol ausgew&auml;hlt!');
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_CAT_PIC_TITLE','Standard Symbol f&uuml;r Kategorien:');
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_CAT_PIC_DESC','Hier kann ein Symbol ausgew&auml;hlt werden, welches automatisch neuen Kategorien zugeordnet wird. Es wird in der oben gespeicherten Gr&ouml;&szlig;e hier angezeigt.');

// NEW OPTIONS FOR DEFAULT FILE ICON
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_FILE_PIC_TITLE','Standard Symbol f&uuml;r Downloads:');
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_FILE_PIC_DESC','Hier kann ein Symbol ausgew&auml;hlt werden, welches automatisch neuen Downloads zugeordnet wird. Es wird in der oben gespeicherten Gr&ouml;&szlig;e hier angezeigt.');

// FOR MISSING NEW MINIPICS
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_PRICE','Preis');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_FILESIZE','Dateigr&ouml;&szlig;e');

// FOR DATAFIELDS IN  DOWNLOAD DETAILVIEW
DEFINE('_JLIST_FE_DETAILS_CREATED_BY_TITLE','Erstellt von');
DEFINE('_JLIST_FE_DETAILS_MODIFIED_BY_TITLE','Ge&auml;ndert von');
DEFINE('_JLIST_FE_DETAILS_MODIFIED_DATE_TITLE','Ge&auml;ndert am');

// FOR EXTERN FILES -  USER INFO IF CHECKBOXES ACTIVE
// PLEASE USE NOT SPECIAL CHARS e.g. " ' & ...
DEFINE('_JLIST_FRONTEND_EXTERN_FILE_USER_INFO','Dieser Download muss separat heruntergeladen werden, da die Datei sich<br />auf einem anderen Server befindet. Somit ist dieser Download<br />f&uuml;r einen Sammel-Download nicht geeignet.');

// FOR SAMPLE PIC IN EMAIL LAYOUT 
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_EMAIL_INFO_TITLE','<b>Informationen zum Layout: Emails</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_EMAIL_INFO_TEXT','<p>Hier sehen Sie ein grafisches Beispiel f&uuml;r die Darstellung dieser Informationen in der &uuml;bermittelten E-Mail. Der dunkelrote Rahmen, markiert den Bereich dessen Darstellung Sie hier &auml;ndern k&ouml;nnen.</p>');

// ******************************************************************************
// NEW IN 1.4 pre-release
// ******************************************************************************

// INSTALL - MOVE  IMAGES DIRECTORIES TO JOOMLA/IMAGES/JDOWNLOADS
DEFINE('_JLIST_INSTALL_MOVE_IMAGES_ERROR','Probleme beim Verschieben der Bilder Verzeichnisse.');
DEFINE('_JLIST_INSTALL_MOVE_IMAGES_OK','Bilderordner erfolgreich verschoben nach ../images/jdownloads/.');
DEFINE('_JLIST_INSTALL_MOVE_IMAGES_DEST_DIR_EXIST','Die Bilderordner ../images/jdownloads/ existieren bereits!');
DEFINE('_JLIST_INSTALL_MOVE_IMAGES_COPY_ERROR','FEHLER: Bilderordner kann nicht kopiert werden!');
DEFINE('_JLIST_INSTALL_MOVE_IMAGES_DEL_AFTER_COPY_ERROR','FEHLER: Nach dem Kopieren, konnte der Bilderordner im Quellverzeichnis nicht gel&ouml;scht werden!');

DEFINE('_JLIST_BACKEND_SETTINGS_IMAGES_NOTE','Hinweis: W&auml;hrend der Installation von jDownloads, werden alle verwendeten Bilderordner verschoben in das Joomla Unterverzeichnis: /images/jdownloads/. Somit gehen bei einer Deinstallation von jDownloads (z.B. f&uuml;r ein Update), keine Bilddateien verloren.');

// FOR MAIL AFTER FRONTEND UPLOADS
DEFINE('_JLIST_SETTINGS_INSTALL_6','Informationen &uuml;ber einen Dateiupload!');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_UPLOAD_HEAD','E-Mail Konfiguration f&uuml;r Uploads');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_UPLOAD_TEMPLATE_TITLE','E-Mail Layout');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_UPLOAD_TEMPLATE_DESC','Hier k&ouml;nnen Sie die Darstellung der <b>E-Mail</b> festlegen, die (sofern aktiviert) nach jedem Upload an die oben festgelegte Adresse versendet wird. Es kann HTML-Code sowie beliebiger Text eingef&uuml;gt werden.<br /><br />Verf&uuml;gbare Platzhalter:<br />{name} {mail} {date} {ip} {file_title} {file_name} {description}');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_DOWNLOAD_TEMPLATE_DESC','Hier k&ouml;nnen Sie die Darstellung der <b>E-Mail</b> festlegen, die (sofern aktiviert) nach jedem Download an die oben festgelegte Adresse versendet wird. Es kann HTML-Code sowie beliebiger Text eingef&uuml;gt werden.<br /><br />Verf&uuml;gbare Platzhalter:<br />{file_list} {ip_address} {date_time} {user_name} {user_email} {user_group}'); // changed in 1.4 beta (2)  {user_email} added
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_UPLOAD_TEMPLATE','Mitteilung &uuml;ber eine Dateieinsendung!<br />
<br />
Einsender: {name}<br />
E-Mail: {mail}<br />
IP-Adresse: {ip}<br /><br />
Dateiname: {file_name}<br />
Titel: {file_title}<br />
Beschreibung: {description}<br />
Datum und Zeit: {date}<br /><br />
Dies ist eine automatisch generierte E-Mail.');

// NEW FOR "NEW" IMAGES
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_NEW_PIC_DESC2','Hier stehen alle Bilddateien aus dem Ordner: <b>../images/jdownloads/newimages </b>zur Auswahl.'); 

// FOR NEW OPTIONS: SCREENSHOT UPLOAD
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_TITLE','Gr&ouml;&szlig;e der Vorschaubilder (Thumbnails) einstellen');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_INFO','Sollen Screenshots zu den Downloads verwendet werden, so werden nach dem Upload eines Bildes automatisch verkleinerte Kopien (Thumbnails) davon erstellt. Hier kann die Gr&ouml;&szlig;e der Thumbnails eingestellt werden. Hinweis: Bedingung hierf&uuml;r ist, das die GD Bibliothek auf dem Server installiert ist (siehe Status).');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_STATUS_GD_OK','Status: GD Library ist vorhanden!');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_STATUS_GD_NOT_OK','Status: GD Library ist nicht vorhanden!');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_SIZE_HEIGHT','Maximale H&ouml;he in Pixel (z.B: 150).');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_SIZE_WIDTH','Maximale Breite in Pixel (z.B: 150).');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_CREATE_ALL_NEW_TITLE','Alle Thumbnails beim Speichern neu erstellen? ');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_CREATE_ALL_NEW_DESC','L&ouml;scht nach dem Speichern der Konfiguration alle aktuell vorhandenen Vorschaubilder (thumbnails) und erstellt diese mit den oben angegebenen Abmessungen neu.');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_CREATE_ALL_MESSAGE','Alle Vorschaubilder wurden neu erstellt! ');

// NEW FIELDS IN EDIT FILES FOR SCREENSHOTS
DEFINE('_JLIST_BACKEND_FILESEDIT_THUMBNAIL_LIST_NO_PIC','Kein Bild ausgew&auml;hlt');
DEFINE('_JLIST_BACKEND_FILESEDIT_THUMBNAIL_LIST_TITLE','Bild vom Server ausw&auml;hlen:');
DEFINE('_JLIST_BACKEND_FILESEDIT_THUMBNAIL_LIST_DESC','Hier stehen alle verkleinerten Bilder im Ordner <b>/images/jdownloads/screenshots/thumbnails </b>zur Auswahl. Das aktivierte Bild kann dann &uuml;ber den Platzhalter {thumbnail} im Layout angezeigt werden.');
DEFINE('_JLIST_BACKEND_FILESEDIT_THUMBNAIL_UPLOAD_TITLE','Bild zum hochladen ausw&auml;hlen:');
DEFINE('_JLIST_BACKEND_FILESEDIT_THUMBNAIL_UPLOAD_DESC','Hier kann ein Bild zum Server hochgeladen werden. Dieses wird dann f&uuml;r diesen Download verwendet. Das Original wird im Ordner <b>/images/jdownloads/screenshots</b> gespeichert und automatisch eine verkleinerte Version (thumbnail) davon erstellt.');

// FOR MIRROR LINK - JAVASCRIPT ERROR MESSAGE
DEFINE('_JLIST_BACKEND_FILESEDIT_ERROR_ONLY_MIRROR','Fehler: Geben Sie zuerst eine interne oder externe Datei an. Ein Mirror Link ist nur zus&auml;tzlich m&ouml;glich.');

// FOR NEW MIRROR DOWNLOAD BUTTONS
DEFINE('_JLIST_BACKEND_SETTINGS_DETAILS_MIRROR_BUTTON_TITLE1','1. Mirror Button'); 
DEFINE('_JLIST_BACKEND_SETTINGS_DETAILS_MIRROR_BUTTON_TITLE2','2. Mirror Button'); 

// FOR NEW "UPDATED" ICON IN DOWNLOADS TITLE
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_NEW_PIC_DESC3','Hier stehen alle Bilddateien aus dem Ordner: <b>../images/jdownloads/updimages </b>zur Auswahl.');
DEFINE('_JLIST_BACKEND_SETTINGS_UPD_TITLE','Wie lange gilt ein Download als "aktualisiert"');
DEFINE('_JLIST_BACKEND_SETTINGS_UPD_DESC','Geben Sie hier die Anzahl Tage an, die ein Download als "aktualisiert" gelten soll. Hinter dem Download-Titel wird dann das unten angegebene Symbol angezeigt. Als aktualisiert gilt ein Download nur dann, wenn die entsprechende Option im Download aktiviert wurde. Bei 0 wird kein Symbol angezeigt.'); // changed in 1.4 beta

// FOR NEW OPTION - LOAD FILE IN BROWSER - NOT DOWNLOAD
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_VIEW_FILE_TYPES','Welche Dateitypen sollen im Browser ge&ouml;ffnet werden');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_VIEW_FILE_TYPES_DESC','Geben Sie hier die Dateitypen an, welche nicht als Download angeboten werden sollen. Diese werden in einem neuen Browserfenster zur Ansicht ge&ouml;ffnet. Zwischen jedem Wert muss ein Komma (,) stehen. Beispiel: html,htm,txt,pdf,doc,jpg,jpeg,png,gif');

//NEW FRONTEND PIC UPLOAD FIELD
DEFINE('_JLIST_FRONTEND_UPLOAD_PIC_FILETITLE','Screenshot:');
DEFINE('_JLIST_FRONTEND_UPLOAD_PIC_ALLOWED_FILES','Erlaubte Dateitypen:');

// NEW FILTER OPTION IN FILES LIST - BACKEND
DEFINE('_JLIST_BACKEND_FILESLIST_FILTER_PUBLISHED','Ver&ouml;ffentlichte');
DEFINE('_JLIST_BACKEND_FILESLIST_FILTER_UNPUBLISHED','Unver&ouml;ffentlichte');

// NEW INFO WHEN USING LIGHTBOX PLACEHOLDER
DEFINE('_JLIST_BACKEND_TEMPEDIT_INFO_LIGHTBOX','Um die Screenshots mit der Lightbox Funktion anzuzeigen, m&uuml;ssen die Platzhalter in dieser Form verwendet werden:<br /><b>{screenshot_begin} < a href="{screenshot}" rel="lightbox" > < img src="{thumbnail}" align="right" />< /a > {screenshot_end}</b><br />Hinweis: Die Leerzeichen im obigen HTML-Code (hinter < und vor >) wurden hier nur zu Darstellungszwecken eingef&uuml;gt!'); // changed in 1.4 beta (2)

// ******************************************************************************
// NEW IN 1.4 beta
// ******************************************************************************

// NEW OPTION FOR MANAGER ACCESS IN BACKEND
DEFINE('_JLIST_BACKEND_SETTINGS_MANAGER_ACCESS','Zugriff f&uuml;r Manager?');
DEFINE('_JLIST_BACKEND_SETTINGS_MANAGER_ACCESS_DESC','Wenn ja, haben auch Mitglieder der Gruppe Manager Zugriff auf alle jDownloads Funktionen im Backend. Wenn Nein, nur Administratoren.');

// NEW OPTION FOR VIEW PLACEHOLDER IMAGE FOR SCREENSHOTS IN DETAIL SITE
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PLACEHOLDER_TITLE','Screenshot Platzhalter in Detailseite anzeigen?');
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PLACEHOLDER_TEXT','Wenn ja, wird bei Downloads denen kein Screenshot zugeordnet wurde, in der Detailansicht das links zu sehende Bild in der Layout Platzhalter Position angezeigt.');

// NEW OPTION FOR VIEW PLACEHOLDER IMAGE FOR SCREENSHOTS IN FILESLIST
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PLACEHOLDER_IN_LIST_TITLE','Screenshot Platzhalter in Downloadlisten anzeigen?');
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PLACEHOLDER_IN_LIST_TEXT','Wenn ja, wird bei Downloads denen kein Screenshot zugeordnet wurde, in den Downloadlisten das links oben zu sehende Bild in der Layout Platzhalter Position angezeigt.');

// NEW OPTION FOR VIEW CATEGORY INFOS IN LISTVIEW - FRONTEND
DEFINE('_JLIST_BACKEND_SETTINGS_CAT_VIEW_INFO_IN_LISTS_TITLE','Kategorie Informationen anzeigen?');
DEFINE('_JLIST_BACKEND_SETTINGS_CAT_VIEW_INFO_IN_LISTS_TEXT','Wenn ja, werden die Informationen der aktuell angezeigten Kategorie unterhalb der Navigationsleiste erneut angezeigt. Da der Name der Kategorie auch in der Navigationsleiste angezeigt wird, ist dies aber nicht immer erw&uuml;nscht.');

// NEW OPTION FOR VIEW PAGE NAVIGATION ON THE BOTTOM - FRONTEND
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PAGENAVI_BOTTOM_TITLE','Seitennavigation unten anzeigen?');
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PAGENAVI_BOTTOM_TEXT','Wenn ja, wird am Seitenende ebenfalls eine Seitennavigation angezeigt.');

// NEW OPTION FOR VIEW PAGE NAVIGATION ON THE TOP - FRONTEND
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PAGENAVI_TOP_TITLE','Seitennavigation oben anzeigen?');
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PAGENAVI_TOP_TEXT','Wenn ja, wird am Seitenanfang eine Seitennavigation angezeigt.');

// PUBLISH FILES MESSAGE IN BACKEND
DEFINE('_JLIST_BACKEND_EDIT_FILES_CAN_NOT_PUBLISH_INFO','Download(s) enthielten keine Dateizuordnung. Ver&ouml;ffentlichung so nicht m&ouml;glich!');

DEFINE('_JLIST_BACKEND_EDIT_FILES_SET_UPDATE_TITLE','Download als aktualisiert markieren:');
DEFINE('_JLIST_BACKEND_EDIT_FILES_SET_UPDATE_TEXT','Wenn ja, wird in der Frontendansicht dieser Download als aktualisiert (Updated) optisch hervorgehoben. Die Dauer der Hervorhebung kann in der Konfiguration eingestellt werden.');

// FOR NEW META INFORMATION FIELDS IN CAT AND FILES EDIT
DEFINE('_JLIST_BACKEND_EDIT_METADESC_TITLE','Meta Beschreibung (meta-description):');
DEFINE('_JLIST_BACKEND_EDIT_METADESC_DESC','Optional kann hier eine kurze Beschreibung f&uuml;r das meta-description Feld erstellt werden. Diese werden dann in der HTML-Browserausgabe eingef&uuml;gt.');
DEFINE('_JLIST_BACKEND_EDIT_METAKEY_TITLE','Meta Stichw&ouml;rter (meta-keywords):');
DEFINE('_JLIST_BACKEND_EDIT_METAKEY_DESC','Optional k&ouml;nnen hier Stichw&ouml;rter f&uuml;r das meta-keywords Feld erstellt werden. Diese werden dann in der HTML-Browserausgabe eingef&uuml;gt.');

DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR_INFOS_TITLE','Informationen zum Autor der Datei');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_HOME_DESC','URL zur Autoren Website. Diese wird im Frontend als Link angezeigt.');
DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR_DESC','Wird hier ein Name eingegeben und unten eine Webadresse oder E-Mail, so wird dieser im Frontend als Link zur Website oder als E-Mail Link angezeigt.');

// NEW PARAMETER IN SEARCH
DEFINE('_JLIST_FRONTEND_SEARCH_NUMBERS','Anzahl Suchergebnisse');

// NEW USER INFO BY EXTERN SHAREHOSTER LINK
DEFINE('_JLIST_FRONTEND_DOWNLOAD_GO_TO_OTHER_SITE_INFO','Die angeforderte Datei befindet sich auf einer fremden Website.<br />Bitte folgen Sie den Hinweisen dort um den Download zu starten.');

// NEW OPTION IN  EDIT DOWNLOADS
DEFINE('_JLIST_BACKEND_FILESEDIT_OPEN_LINK_IN_OTHER_WEBSITE_TITLE','Download auf fremder Website');
DEFINE('_JLIST_BACKEND_FILESEDIT_OPEN_LINK_IN_OTHER_WEBSITE_DESC','Wenn Ja, liegt die Datei auf einer fremden Webseite (z.B. Sharehoster) und der Download kann nur von dieser fremden Seite gestartet werden! Der Mausklick auf den Download l&auml;dt dann diese Webseite im Browser.');

// NEW SERVER INFO TAB IN CPANEL TAB
DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_5','Server Info');
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_TITLE','Informationen zur aktuellen Server Konfiguration'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_DESC','Die maximal zul&auml;ssige Dateigr&ouml;&szlig;e f&uuml;r Uploads h&auml;ngt von den Einstellungen der aktuellen Server Konfiguration (php.ini) ab. Unten sind die f&uuml;r Uploads relevanten aktuellen Werte zu sehen. Stellen Sie sicher, das die Werte ausreichend hoch sind. Sollten Sie selber keinen Zugriff auf die php.ini haben, wenden Sie sich an Ihren Hoster. Informationen zu den Parametern sind auf www.php.net zu finden.'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_FILE_UPLOADS','Datei-Upload erlaubt (file_uploads):'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_MAX_FILESIZE','Erlaubte Dateigr&ouml;&szlig;e (max_filesize):'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_POST_MAX_SIZE','Erlaubte POST Gr&ouml;&szlig;e (post_max_size):'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_MEMORY_LIMIT','Speicherbeschr&auml;nkung auf (memory_limit):'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_MAX_EXECUTION_TIME','Maximale Scriptlaufzeit (max_execution_time):'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_MAX_INPUT_TIME','Maximale Scriptlaufzeit f&uuml;r Uploads (max_input_time):'); 

// NEW MESSAGE AFTER EDIT CATEGORIES AND CHANGING THE ACCESS LEVEL
DEFINE('_JLIST_BACKEND_CATSEDIT_SUM_CATS_ACCESS_LEVEL_CHANGED_AFTER_EDIT_MSG','Unterkategorien wurden auf die selben Zugriffsrechte gesetzt!');
DEFINE('_JLIST_BACKEND_CATSEDIT_CATS_ACCESS_LEVEL_CAN_NOT_CHANGED_MSG','Hinweis: Kategorien k&ouml;nnen keine niedrigeren Zugriffsrechte haben als die direkt &uuml;bergeordneten! Zugriffsrechte wurden daher zur&uuml;ckgesetzt.');

// NEW MINI ICON TITLE
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_DOWNLOAD_HITS','Downloads');
// ADDITIONAL INFO IN FILES LAYOUT
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DESC2','Mit den Platzhaltern {files_title_begin} {files_title_text} {files_title_end} kann eine Titelzeile oberhalb der Dateiliste erstellt werden.'); // changed in 1.4 beta (2) 
// ADDITIONAL INFO IN CAT LAYOUT
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_DESC2','Mit den Platzhaltern {cat_title_begin} {subcats_title_text} {cat_title_end} kann eine Titelzeile oberhalb der Unterkategorien erstellt werden.'); // changed in 1.4 beta (2) 
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_DESC3','Die Platzhalter {cat_info_begin} und {cat_info_end} markieren den Bereich, der die Informationen zur Kategorie beinhaltet. In der Konfiguration kann dieser Bereich dann oberhalb der Datelisten ausgeblendet werden.'); 

// NEW MESSAGES FOR INSTALLATION
DEFINE('_JLIST_INSTALL_20','Bitte warten - Die Kategorien Zugriffsrechte werden &uuml;berpr&uuml;ft...');
DEFINE('_JLIST_INSTALL_21','&Uuml;berpr&uuml;fung beendet.');

// NEW IN 1.4 beta (2)

// NEW TEXT FOR LAYOUT FIELDS TITLE PLACEHOLDERS IN THE FRONTEND VIEW  (layout: files)
DEFINE('_JLIST_FE_FILELIST_LICENSE_TITLE','Lizenz');
DEFINE('_JLIST_FE_FILELIST_PRICE_TITLE','Preis');
DEFINE('_JLIST_FE_FILELIST_LANGUAGE_TITLE','Sprache');
DEFINE('_JLIST_FE_FILELIST_FILESIZE_TITLE','Dateigr&ouml;&szlig;e');
DEFINE('_JLIST_FE_FILELIST_SYSTEM_TITLE','System');
DEFINE('_JLIST_FE_FILELIST_AUTHOR_TITLE','Autor');
DEFINE('_JLIST_FE_FILELIST_AUTHOR_URL_TITLE','Webseite');
DEFINE('_JLIST_FE_FILELIST_CREATED_DATE_TITLE','Erstellt am');
DEFINE('_JLIST_FE_FILELIST_HITS_TITLE','Downloads');
DEFINE('_JLIST_FE_FILELIST_CREATED_BY_TITLE','Erstellt von');
DEFINE('_JLIST_FE_FILELIST_MODIFIED_BY_TITLE','Ge&auml;ndert von');
DEFINE('_JLIST_FE_FILELIST_MODIFIED_DATE_TITLE','Ge&auml;ndert am');
// NEW FOR PLACEHOLDER   {files_title_text} and  {subcats_title_text}  {details_block_title}
DEFINE('_JLIST_FE_FILELIST_TITLE_OVER_FILES_LIST','Dateien:');
DEFINE('_JLIST_FE_FILELIST_TITLE_OVER_SUBCATS_LIST','Unterkategorien:');
DEFINE('_JLIST_FE_DETAILS_DATA_BLOCK_TITLE','Daten');
// NEW PLACEHOLDERS FOR SUMMARY PAGE  {license_note}  {title_text}
DEFINE('_JLIST_FE_SUMMARY_PAGE_LICENSE_NOTE','Mit dem Download erkennen Sie die jeweiligen Lizenzbedingungen an.');
DEFINE('_JLIST_FE_SUMMARY_PAGE_TITLE_TEXT','Hier sehen Sie eine Aufstellung der von Ihnen zum Download ausgew&auml;hlten Dateien');

// NEW INSTALL MESSAGES FOR UPDATE
DEFINE('_JLIST_INSTALL_WARNING_CAT_ACCESS_RIGHTS','Einige Kategorie Zugriffsrechte mussten korrigiert werden. Überpr&uuml;fen Sie daher die Kategorien vor der Ver&ouml;ffentlichung!');
DEFINE('_JLIST_INSTALL_WARNING_DEFAULT_LAYOUTS_ARE_ACTIVE','Auf Grund neuer Platzhalter, wurden die neuen Standard Layouts v1.4 aktiviert! Dies kann in der Layout-Verwaltung ge&auml;ndert werden.');

?>