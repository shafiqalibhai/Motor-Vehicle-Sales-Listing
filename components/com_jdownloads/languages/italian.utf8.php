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
DEFINE('_JLIST_VERSION','<br /><br />Please give me a feedback in the Forum on <a href="http://www.JoomlaAddons.de">www.JoomlaAddons.de</a>.');

DEFINE('_JLIST_PRODUCT_FOOTER','JDownloads');
DEFINE('_JLIST_VERSION_FOOTER','');

// end component infos
//-----------------------------------------------------------

// Installation data

DEFINE('_JLIST_INSTALL_0','Informazioni di installazione:');
DEFINE('_JLIST_INSTALL_1','Tutte le informazioni di configurazione esistono gi&agrave; nel database!');
DEFINE('_JLIST_INSTALL_2','Informazioni di configurazione aggiornate.');
DEFINE('_JLIST_INSTALL_3','Tutti i layout di default esistono gi&agrave; nel database!.');
DEFINE('_JLIST_INSTALL_4','Layout di default inseriti nel database!');
DEFINE('_JLIST_INSTALL_5','Tutti i tipi di licenza di default esistono gi&agrave; nel database!');
DEFINE('_JLIST_INSTALL_6','Licenze di default inserite nel database!');
DEFINE('_JLIST_INSTALL_7','La cartella di upload esiste ed &egrave; scrivibile!');
DEFINE('_JLIST_INSTALL_8','La cartella di upload esiste ma NON &egrave; scrivibile. Impostare CHMOD su 0777 per la cartella di upload, altrimenti jDownloads non potr&agrave; funzionare!');
DEFINE('_JLIST_INSTALL_9','Cartella di upload creata. Verr&agrave; impostato CHMOD su 0777.');
DEFINE('_JLIST_INSTALL_10','Errore: La cartella di upload non pu&ograve; essere creata!<br />E\'necessario crearla manualmente via FTP ed impostare CHMOD su 0777, altrimenti jDownloads non potr&agrave; funzionare!');
DEFINE('_JLIST_INSTALL_11','La cartella per i file .zip temporanei esiste ed &egrave; scrivibile!');
DEFINE('_JLIST_INSTALL_12','La cartella per i file .zip temporanei /downloads/tempzipfiles esiste ma NON &egrave; scrivibile. Impostare CHMOD su 0777 per la cartella, altrimenti jDownloads non potr&agrave; funzionare!');
DEFINE('_JLIST_INSTALL_13','La cartella /downloads/tempzipfiles &egrave; stata creata. Scrivibile: CHMOD 0777 - OK.');
DEFINE('_JLIST_INSTALL_14','Errore: La cartella per i file .zip temporanei /downloads/tempzipfiles non pu&ograve; essere creata!<br />E\'necessario crearla manualmente via FTP ed impostare CHMOD su 0777.<br />Altrimenti jDownloads non potr&agrave; funzionare!');
DEFINE('_JLIST_INSTALL_15','Installazione avvenuta correttamente!');
DEFINE('_JLIST_INSTALL_16','Avvia jDownloads!');

DEFINE('_JLIST_INSTALL_DB_TIP','Info: Se jDownloads viene disinstallato, le informazioni nel database non verranno cancellate. Se in seguito verr&agrave; utilizzata una nuova versione, le informazioni verranno recuperate ed utilizzate.');
DEFINE('_JLIST_INSTALL_TITLE_FOR_DEFAULT_LAYOUTS','Standard');

//FRONTEND

DEFINE('_JLIST_FILE_NOT_FOUND','Il file richiesto non &egrave; stato trovato. Contattare il webmaster.');
DEFINE('_JLIST_LINKTEXT_VIEW_FILE_TYPES','Avvia download<br />(si aprir&agrave; in una nuova finestra)');
DEFINE('_JLIST_LINKTEXT_ZIP','Avvia download');
DEFINE('_JLIST_LINKTEXT_DOWNLOAD_URL','Download');
DEFINE('_JLIST_LINKTEXT_HOME','Home');
DEFINE('_JLIST_DEL_ZIP_ADMIN_INFO','<br />Admin info: &egrave; avvenuto un errore durante la cancellazione dei file .zip temporanei oppure il file non esiste!');
DEFINE('_JLIST_FORM_BUTTON_TEXT','Continua');
DEFINE('_JLIST_EMPTY_CAT_TEXT','Questa categoria non contiene ancora alcun file.<br /><br />');
DEFINE('_JLIST_MAIL_DOWNLOADER_NAME_VISITOR','Visitor');
DEFINE('_JLIST_MAIL_DOWNLOADER_GROUP','Guest');
DEFINE('_JLIST_MAILSEND_ERROR','E\'avvenuto un errore durante l\'invio di questa e-mail!');
DEFINE('_JLIST_FRONTEND_COUNT_SUBCATS','Sottocategorie:');
DEFINE('_JLIST_FRONTEND_COUNT_FILES','Numero di file:');
DEFINE('_JLIST_FRONTEND_HOMEPAGE','Home');
DEFINE('_JLIST_FRONTEND_BACK_BUTTON','Indietro');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_DATE','Data');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_LICENCE','Licenza');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_AUTHOR','Autore');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_WEBSITE','Sito web');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_SYSTEM','Sistema');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_LANGUAGE','Lingua');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_DOWNLOAD','Download');
DEFINE('_JLIST_FRONTEND_VERSION_TITLE','Versione: ');
DEFINE('_JLIST_FRONTEND_CAT_ACCESS_REGGED','Questa categoria richiede una registrazione per poter scaricare i file. Se sei un utente registrato effettua il login.<br /><br />');

//BACKEND TOOLBAR
DEFINE('_JLIST_BACKEND_COMPONENT_NAME','JDownloads');
DEFINE('_JLIST_BACKEND_TOOLBAR_MAIN','Home');
DEFINE('_JLIST_BACKEND_TOOLBAR_EDIT','Modifica');
DEFINE('_JLIST_BACKEND_TOOLBAR_REMOVE','Cancella');
DEFINE('_JLIST_BACKEND_TOOLBAR_CLOSE','Chiudi');
DEFINE('_JLIST_BACKEND_TOOLBAR_SUBMAIN','Layout');

//BACKEND CPANEL
DEFINE('_JLIST_BACKEND_CPANEL_FILES','Downloads');
DEFINE('_JLIST_BACKEND_CPANEL_CATEGORIES','Categorie');
DEFINE('_JLIST_BACKEND_CPANEL_LICENSE','Licenze');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES','Amministrazione Layout');
DEFINE('_JLIST_BACKEND_CPANEL_BACKUP','Creazione Backup');
DEFINE('_JLIST_BACKEND_CPANEL_SETTINGS','Configurazione');
DEFINE('_JLIST_BACKEND_CPANEL_RESTORE','Recupero Backup');
DEFINE('_JLIST_BACKEND_CPANEL_INFO','Termini di utilizzo');
DEFINE('_JLIST_BACKEND_CPANEL_SUPPORT','Supporto');

// RESULTS FROM AUTOCHECKFILES OPTION
DEFINE('_JLIST_BACKEND_AUTOCHECK_TITLE','Controllo dell\'Area Download:');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NEW_FILES','Sono stati trovati nuovi file, e sono stati aggiunti al sistema!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_MISSING_FILES','Alcuni file non sono stati trovati. Non sono pi&ugrave; accessibili al pubblico!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NO_NEW_FILES','Nessun nuovo file trovato!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NO_MISSING_FILES','Tutti i download pubblicati esistono!');

DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_STATUS','Stato');
DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_2','Versione');
DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_3','Log Attivit&agrave;');

// STATUS
DEFINE('_JLIST_BACKEND_PANEL_STATUS_OFFLINE_HEADER','Stato dell\'Area Download');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_TITEL','<font color="#990000"><b><big>Stato dell\'Area Download:</big></b></font>');

DEFINE('_JLIST_BACKEND_PANEL_STATUS_DESC_ONLINE','Se ONLINE, l\'area di download &egrave; disponibile ai visitatori.');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_ONLINE','<font color="green"><b><big> ONLINE!</big></b></font>');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_OFFLINE','<font color="red"><b><big> OFFLINE!</big></b></font>');

// OFFLINE
DEFINE('_JLIST_BACKEND_OFFLINE_OPTION_TITLE','Attivare la manutenzione?');
DEFINE('_JLIST_BACKEND_OFFLINE_OPTION_DESC','Con questa opzione si pu&ograve; impostare l\'intera area di download su "off". Ai visitatori verr&agrave; mostrato il testo definito di seguito. Solamente i membri registrati con stato "autore" potranno accedere all\'area di download.');
DEFINE('_JLIST_BACKEND_OFFLINE_MESSAGE_TITLE','Nota per i visitatori');
DEFINE('_JLIST_BACKEND_OFFLINE_MESSAGE_DEFAULT','<table width="70%" align="center" cellspacing="0" cellpadding="20" border="1"><tr><td align="center">
<h3>Attualmente stiamo lavorando sull\'area di download.<br /><br />Ritentare l\'accesso tra qualche minuto.</h3><br /><img src="components/com_jdownloads/images/offline.png" />
</td></tr></table>');
DEFINE('_JLIST_BACKEND_OFFLINE_MESSAGE_DESC','Inserire il testo che sar&agrave; mostrato mentre l\'area di download &egrave; in manutenzione.');
DEFINE('_JLIST_BACKEND_OFFLINE_ADMIN_MESSAGE_TEXT','<div align="center"><b><h3>I downloads sono: OFFLINE!</h3></b></div>');

//BACKEND SETTINGS
DEFINE('_JLIST_BACKEND_SETTINGS','Configurazione');
DEFINE('_JLIST_BACKEND_SETTINGS_SAVED','Configurazione salvata');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_HEAD','Configurazione E-mail');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_FILES_HEAD','Configurazione Download');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_FRONTEND_HEAD','Configurazione Frontend');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_BACKEND_HEAD','Configurazione Backend');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_SECURITY_HEAD','Impostazioni di sicurezza');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_IMAGES_HEAD','Impostazioni Immagini/Icone');

DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_DOWNLOADS','Downloads');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_FRONTEND','Frontend');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_BACKEND','Backend');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_IMAGES','Immagini');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_SECURITY','Sicurezza');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_EMAIL','E-Mail');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_SONSTIGE','Altro');

DEFINE('_JLIST_BACKEND_SETTINGS_DATETIME','Formato Data-Ora');
DEFINE('_JLIST_BACKEND_SETTINGS_DATETIME_DESC','Informazioni sul formato: <a href="http://www.php.net/manual/de/function.strftime.php" target="_blank">www.php.net</a>');

DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIR','Cartella di Upload');
DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIR_DESC','Cartella principale per l\'upload dei file. Questa cartella e <b>tutte</b> le sottocartelle devono essere scrivibili!');

DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIRTEMP','Cartella temporanea');
DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIRTEMP_DESC','Questa cartella deve esistere ed essere scrivibile! Contiene i file .zip generati temporaneamente (dopo il download, vengono automaticamente cancellati).');

DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_1','Standard');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_2','Prima i nuovi');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_3','Prima i vecchi');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_4','Per nome asc');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_5','Per nome desc');

// E-Mail config
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_OPTION_DESC','Se questa opzione &egrave; attivata, viene inviata una e-mail all\'indirizzo sottostante per ogni download avviato.');
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_OPTION','Attivare notifica e-mail?');

DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_DESC','Indirizzo e-mail a cui inviare le notifiche dei download.');
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO','Indirizzo e-mail');

DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_HTML_DESC','Se questa opzione &egrave; attivata, le e-mail sono inviate in formato HTML. Altrimenti viene usato il formato plain text.');
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_HTML','Usa formattazione HTML?');

DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_BETREFF_DESC','Testo da utilizzare per il soggetto dell\'e-mail.');
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_BETREFF','Soggetto');

// View Frontend Config settings
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_VIEW_HEAD','Opzioni di visualizzazione frontend del componente');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_COMPO_TEXT','Descrizione del componente');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_COMPO_TEXT_DESC','Testo mostrato <b>tra</b> il titolo del componente e le categorie. Il titolo del componente deriva automaticamente dal nome del menu.<br /><br />Possono essere incluse classi CSS, codice HTML e testo arbitrario.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CHECKBOX_TEXT','Testo del Checkbox');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CHECKBOX_TEXT_DESC','Nota che viene mostrata accanto al check box della lista.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SORTFILESORDER_TEXT','Ordinamento');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SORTFILESORDER_DESC','Ordinamento dei file nel front end. Selezionare "Standard" per usare l\'ordinamento di default del backend.');

// View Images settings
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SHOW_MINIPICS','Mostrare simbolo di informazione?');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SHOW_MINIPICS_DESC','Se attivato, i simboli verranno mostrati. Se distattivato verr&agrave; mostrato del testo.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_MINIPICS_SIZE','Dimensione in pixel del simbolo di informazione');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_MINIPICS_SIZE_DESC','Dimensione a video dei simboli di indormazione. Standard: 20');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CATPICS_SIZE','Dimensione in pixel dei simboli di categoria');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CATPICS_SIZE_DESC','Dimensione a video dei simboli di categoria. E\'possibile utilizzare le proprie icone, inserendo le immagini via FTP nella sottocartella: /catimages. Standard: 48');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FILEPICS_SIZE','Dimensione in pixel dei simboli di file');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FILEPICS_SIZE_DESC','Dimensione a video dei simboli di file. E\'possibile utilizzare le proprie icone, inserendo le immagini via FTP nella sottocartella: /fileimages. Standard: 32');

// View backend security settings
// to be translated
DEFINE('_JLIST_BACKEND_SETTINGS_MAIL_SECURITY_DESC','Se SI, gli indirizzi e-mail non vengono mostrati in chiaro in modo da ignorare gli Spambots. E\'opportuno ricordare che se javascript &egrave; disabilitato nel browser, il link non verr&agrave; mostrato. Impostazione consigliata: SI.');
//
DEFINE('_JLIST_BACKEND_SETTINGS_MAIL_SECURITY_TITEL','Nascondi indirizzi e-mail?');

// View backend Config settings
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_LAYOUTS','Usa editor WYSIWYG per i layout');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_LAYOUTS_DESC','Se questa opzione &egrave; attivata, l\'editor WYSIWYG attualmente selezionato viene usato per la modifica dei layout. Altrimenti viene mostrata una text area semplice.');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_FILES','Usa editor WYSIWYG per i downloads');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_FILES_DESC','Se questa opzione &egrave; attivata, l\'editor WYSIWYG attualmente selezionato viene usato per la modifica dei downloads. Altrimenti viene mostrata una text area semplice.');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_CATS','Usa editor WYSIWYG per le categorie');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_CATS_DESC','Se questa opzione &egrave; attivata, l\'editor WYSIWYG attualmente selezionato viene usato per la modifica delle categorie. Altrimenti viene mostrata una text area semplice.');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_LICENSES','Usa editor WYSIWYG per le licenze');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_LICENSES_DESC','Se questa opzione &egrave; attivata, l\'editor WYSIWYG attualmente selezionato viene usato per la modifica delle licenze. Altrimenti viene mostrata una text area semplice.');

DEFINE('_JLIST_BACKEND_SETTINGS_FILE_SYSTEM_LIST','Selezione campi per i downloads: modifica "Sistema"');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_SYSTEM_LIST_DESC','Qui &egrave; possibile modificare le opzioni proposte per il campo sistema. Tra ogni opzione &egrave; necessario inserire una virgola come separatore (","). <br /><br /><b>Importante:</b> se sono gi&agrave; stati salvati dei download nella lista &egrave; necessario prestare attenzione, visto che ogni modifica si riflette anche sui vecchi download. Esempio: se alcuni download sono salvati con sistema ="Joomla 1.5" e tale voce viene modificata, verranno impostati sul nuovo valore. Aggiungere i nuovi valori sempre in coda alla lista.');

DEFINE('_JLIST_BACKEND_SETTINGS_FILE_LANGUAGE_LIST','Selezione campi per i downloads: modifica "Lingue"');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_LANGUAGE_LIST_DESC','Qui &egrave; possibile modificare le opzioni proposte per il campo lingue. Tra ogni opzione &egrave; necessario inserire una virgola come separatore (","). <br /><br /><b>Importante:</b> se sono gi&agrave; stati salvati dei download nella lista &egrave; necessario prestare attenzione, visto che ogni modifica si riflette anche sui vecchi download. Esempio: se alcuni download sono salvati con lingua ="Tedesco"e tale voce viene modificata, verranno impostati sul nuovo valore. Aggiungere i nuovi valori sempre in coda alla lista.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_ZIPFILE_PREFIX_TEXT','Prefisso di default per il nome dei file ZIP');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_ZIPFILE_PREFIX_DESC','Se vengono selezionai pi&ugrave; file per il download, vengono automaticamente archiviati in un file ZIP temporaneo e forniti all\'utente come un singolo file. Il nome del file ZIP viene creato a partire dal testo specificato a sinistra (prefisso) e da un numero casuale.');

// Templates Config Backend
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_HEAD','<b>I layout determinano il modo con il quale il contenuto viene mostrato nel frontend</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_HEAD_INFO','<br />Vengono inclusi diversi layout standard nell\'installazione di default. Possono essere modificati a piacere ed &egrave; possibile crearne di nuovi. Per semplificare tutto questo, la configurazione permette di selezionare tra l\'uso di un editor WYSIWYG o una text area semplice.<br /><br />Nel caso l\'output sul frontend non funzioni correttamente dopo le modifiche ai <b>layout di default</b> il <b>contenuto originale</b> (ovvero lo stato immediatamente seguente all\'installazione) pu&ograve; essere recuperato in qualsiasi momento. Per fare questo, rimuovere <b>tutto il test</b> dai campi di input del layout e scegliere <b>Salva</b>. La pagina sar&agrave; salvata con i contenuti originali. <b>Attenzione:</b> i cambiamenti gi&agrave; effettuati verranno perduti.<br /><br />Nota: nei layout vengono usate diverse variabili (es. <font color=darkred>{files}</font>). Le variabili vengono rimpiazzata con il contenuto quando la pagina del sito viene generata.<br />');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS','Layout: Categorie');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_DESC','Questa pagina indica come le <b>categorie</b> vengono mostrate nel frontend. Se &egrave; stata selezionata l\'opzione  <b>Mostra home page con riassunto categorie</b> nella configurazione globale, i placeholder (variabili) {files} e {checkbox_top} vengono usati solo per mostrare singole categorie.<br /><br />Le variabili <font color=red>{files} {form_hidden} {form_button} {checkbox_top}</font> <font color=red>NON</font> dovrebbero essere rimosse dal codice! Rimuovere solo la variabile {checkbox_top} dal codice se la variabile {url_download} viene usata nel layout dei file. Il tag {files} viene sostituito con i dati provenienti dal layout del file. <br /><br />I placeholder disponibili (variabili) sono:<br />{cat_title} {cat_description} {cat_pic} {files} {checkbox_top} {sum_subcats} {sum_files_cat}');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_INFO_TITLE','<b>Informazioni sul layout categorie:</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_INFO_TEXT','<p>Il seguente &egrave; un esempio grafico della sezione di descrizione delle categorie come apparirebbe nel frontend. Il bordo rosso scuro indica le aree di cui &egrave; possibile cambiare qui la grafica. </p>');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES','Layout: File');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DESC','Questa pagina indica come i <b>file</b> vengono mostrati nel frontend. <br />I placeholder (variabili) disponibili sono:<br />{checkbox_list} {cat_id} {file_id} {file_title} {release} {pic_is_new} {pic_is_hot} {pic_is_updated} {thumbnail} {description} {link_to_details} {file_pic} {price_title} {price_value} {license_title} {license_text} {language_title} {language_text} {filesize_title} {filesize_value} {system_title} {system_text} {author_title} {author_text} {author_url_title} {author_url_text} {created_date_title} {created_date_value} {hits_title} {hits_value} {created_by_title} {created_by_value} {modified_by_title} {modified_by_value} {modified_date_title} {modified_date_value}'); // changed in 1.4 beta (2)
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_INFO_TITLE','<b>Informazioni sul layout file:</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_INFO_TEXT','<p>Esempio della lista dei file come apparirebbe nel frontend. All\'interno dei rettangoli rossi &egrave; possibile modificare le opzioni grafiche.</p>');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL','Layout: Sommario / Avvia download');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL_DESC','Questa pagina indica come viene mostrato il <b>summario</b> nel frontend. Prima del download viene presentata all\'utente una lista dei file selezionati.<br />Qui &egrave; possibile modificare la grafica della pagina. Possono essere incluse classi CSS, codice HTML e testo arbitrario.<br /><br />La variabile <font color=red>{download_liste}</font> <font color=red>NON</font> dovrebbe essere rimossa dal codice!<br /><br />Placeholder disponibili:<br />{summary_pic} {title_text} {download_liste} {license_note} {download_link} {external_download_info}'); // changed in 1.4 beta (2)
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL_INFO_TITLE','<b>Informazioni sul layout sommario</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL_INFO_TEXT','<p>Esempio grafico di questa pagina come apparirebbe nel frontend. I bordi rosso scuro indicano le aree di cui &egrave; possibile cambiare qui la grafica. </p>');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_MAIL','Layout: E-mail');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_MAIL_DESC','Qui &egrave; possibile formattare le <b>e-mail</b> che (quando attivate) vengono inviate all\'indirizzo e-mail specificato nella configurazione dopo ogni download. Pu&ograve; essere usato codice HTML e testo arbitrario.<br /><br />Placeholder disponibili:<br /> {file_list} {ip_address} {date_time} {user_name} {user_group}');

//BACKEND CATSLIST
DEFINE('_JLIST_BACKEND_CATSLIST_TITLE_HEAD','Categorie');
DEFINE('_JLIST_BACKEND_CATSLIST_SEARCH','Cerca');
DEFINE('_JLIST_BACKEND_CATSLIST_SEARCH_LIMIT','Limite');

DEFINE('_JLIST_BACKEND_CATSLIST_TITLE','Categoria');
DEFINE('_JLIST_BACKEND_CATSLIST_PIC','Simbolo');
DEFINE('_JLIST_BACKEND_CATSLIST_PUBLISHED','Pubblicata');
DEFINE('_JLIST_BACKEND_CATSLIST_LINK','Link');
DEFINE('_JLIST_BACKEND_CATSLIST_LINK_TEXT','Anteprima');
DEFINE('_JLIST_BACKEND_CATSLIST_READ','Leggi');
DEFINE('_JLIST_BACKEND_CATSLIST_DOWNLOAD','Download');
DEFINE('_JLIST_BACKEND_CATSLIST_ORDERING','Ordinamento');
DEFINE('_JLIST_BACKEND_CATSLIST_DEL',' Categorie cancellate.');

// access controll info
DEFINE('_JLIST_BACKEND_CATSLIST_ACCESS_ALL','TUTTI');
DEFINE('_JLIST_BACKEND_CATSLIST_ACCESS_REGGED','Registrati');
DEFINE('_JLIST_BACKEND_CATSLIST_ACCESS_ADMINS','Speciale');

//BACKEND CATSEDIT
DEFINE('_JLIST_BACKEND_CATSEDIT_TITLE','Modifica categoria');
DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_TITLE','La categoria deve avere un titolo');
DEFINE('_JLIST_BACKEND_CATSEDIT_SUC_PUBL',' Categorie pubblicate.');
DEFINE('_JLIST_BACKEND_CATSEDIT_SUC_UNPUBL',' Categorie sospese.');
DEFINE('_JLIST_BACKEND_CATSEDIT_SAVE_ERROR_DIR','Errore: la cartella non pu&ograve; essere rinominata!');
DEFINE('_JLIST_BACKEND_CATSEDIT_EDIT','Modifica Categoria');
DEFINE('_JLIST_BACKEND_CATSEDIT_ADD','Aggiungi Categoria');
DEFINE('_JLIST_BACKEND_CATS_SAVEORDER','Nuovo ordinamento salvato');
DEFINE('_JLIST_BACKEND_CATS_USED','Questa categoria &egrave; attualmente in fase di editing da parte di un altro amministratore.');
DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_CAT_COPY','E\'avvenuto un errore durante un\'operazione di copia della lista Categorie.');

DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_DESCRIPTION','Descrizione Categoria');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_PIC_TEXT','Seleziona il simbolo della categoria');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_PIC_PREVIEW','Anteprima immagine');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_PIC_DESC','Il simbolo selezionato pu&ograve; essere mostrato con {cat_pic} nel layout della categoria.');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_TITLE','Imposta diritti');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_DESC','Modifica diritti. Definisce i diritti utente per le categorie, le sottocartelle e i download inclusi. <b>Decisiva per l\'accesso &egrave; SEMPRE la categoria superiore.</b> Se viene impostato "speciale", i membri con lo status "autore" possono accedere e scaricare.');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_1','Lettura e download Pubblico');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_2','Gli Utenti Pubblici e Registrati possono leggere e scaricare');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_3','Solo gli Utenti Registrati possono leggere e scaricare');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_4','Solo i Membri Speciali possono leggere e scaricare');

//BACKEND FILESLIST
DEFINE('_JLIST_BACKEND_FILESLIST_TITLE','Download');
DEFINE('_JLIST_BACKEND_FILESLIST_SEARCH','Cerca');
DEFINE('_JLIST_BACKEND_FILESLIST_SEARCH_LIMIT','Limite');
DEFINE('_JLIST_BACKEND_FILESLIST_CATS','Tutte le Categorie');
DEFINE('_JLIST_BACKEND_FILESLIST_NOCATS','Nessuna Categoria');
DEFINE('_JLIST_BACKEND_FILESLIST_FILE','Download');
DEFINE('_JLIST_BACKEND_FILESLIST_HITS','Numero di Download');
DEFINE('_JLIST_BACKEND_FILESLIST_CAT','Categorie');
DEFINE('_JLIST_BACKEND_FILESLIST_RELEASE','Versione');

DEFINE('_JLIST_BACKEND_FILESLIST_DESCRIPTION','Descrizione');
DEFINE('_JLIST_BACKEND_FILESLIST_DADDED','Data');
DEFINE('_JLIST_BACKEND_FILESLIST_FILENAME','Nome del file');
DEFINE('_JLIST_BACKEND_FILESLIST_AUTHOR','Autore');
DEFINE('_JLIST_BACKEND_FILESLIST_PUBLISHED','Pubblicato');
DEFINE('_JLIST_BACKEND_FILESLIST_ORDERING','Ordinamento');
DEFINE('_JLIST_BACKEND_FILESLIST_DEL',' Download cancellati');
DEFINE('_JLIST_BACKEND_FILES_SAVEORDER','Nuovo ordinamento salvato');
DEFINE('_JLIST_BACKEND_FILES_USED','Questo download &egrave; attualmente in fase di editing da parte di un altro amministratore.');

//BACKEND FILESEDIT
DEFINE('_JLIST_BACKEND_FILESEDIT_TABTITLE_1','Base');
DEFINE('_JLIST_BACKEND_FILESEDIT_TABTITLE_2','Opzionale');
DEFINE('_JLIST_BACKEND_FILESEDIT_TABTITLE_3','File');

DEFINE('_JLIST_BACKEND_FILESEDIT_TITLE','Modifica Download');
DEFINE('_JLIST_BACKEND_FILESEDIT_SENT_IN_FROM','Questo download &egrave; stato salvato da: ');
DEFINE('_JLIST_BACKEND_FILESEDIT_SAVE','Download salvato.');
DEFINE('_JLIST_BACKEND_FILESEDIT_EDIT','Modifica Download');
DEFINE('_JLIST_BACKEND_FILESEDIT_ADD','Aggiungi Download');

//DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_LIST_DESC','Select file for downloading from the server.');
DEFINE('_JLIST_BACKEND_FILESEDIT_ROOT_DIR_TITLE','ROOT directory per il Download (Upload)');

DEFINE('_JLIST_BACKEND_FILESEDIT_UPLOAD_DIR_LIST_INFO_1','Tutte le Sottocartelle sono scrivibili!');
DEFINE('_JLIST_BACKEND_FILESEDIT_UPLOAD_DIR_LIST_INFO_2','Le sottocartelle <b>NON</b> sono scrivibili! Controllare i diritti sul server (FTP: impostare CHMOD su 0777)');
DEFINE('_JLIST_BACKEND_FILESEDIT_CHECK_PERMISSIONS','Il file non pu&ograve; essere caricato. Controllare i diritti sul server (FTP: impostare CHMOD su 0777)');

// language
DEFINE('_JLIST_BACKEND_FILESEDIT_LANGUAGE','Lingua');
DEFINE('_JLIST_BACKEND_FILESEDIT_LANGUAGE_DEFAULT_LIST','Seleziona:, Inglese, Tedesco, Francese, Italiano, Spagnolo, Portoghese, Russo, Polacco, Olandese');

// system
DEFINE('_JLIST_BACKEND_FILESEDIT_SYSTEM','Sistema');
DEFINE('_JLIST_BACKEND_FILESEDIT_SYSTEM_DEFAULT_LIST','Seleziona:, Joomla 1.0, Joomla 1.5, Windows, Linux, MacIntosh');

DEFINE('_JLIST_BACKEND_FILESEDIT_LICENSES_LIST','Seleziona Licenza');
DEFINE('_JLIST_BACKEND_FILESEDIT_REMOVE_OK','File cancellato.');
DEFINE('_JLIST_BACKEND_FILESEDIT_SUC_PUBL',' Download pubblicati.');
DEFINE('_JLIST_BACKEND_FILESEDIT_SUC_UNPUBL',' Download sospesi.');

DEFINE('_JLIST_BACKEND_FILESEDIT_REQUIRES_INFO','I campi marcati con <b><font color=red>*</font></b> sono obbligatori!');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_TITLE','Titolo <b><font color=red>*</font></b>');
DEFINE('_JLIST_BACKEND_FILESEDIT_DESCRIPTION','Descrizione');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FPIC_TEXT','Seleziona il simbolo del File');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FPIC_PREVIEW','Anteprima');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FPIC_DESC','L\'oggetto selezionato potrebbe essere mostrato su un placeholder.');

DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_CAT','Assocazione Categoria <b><font color=red>*</font></b>');
DEFINE('_JLIST_BACKEND_FILESEDIT_LICENSE','Licenza');
DEFINE('_JLIST_BACKEND_FILESEDIT_RELEASE','Versione');
DEFINE('_JLIST_BACKEND_FILESEDIT_SIZE','Dimensione');
DEFINE('_JLIST_BACKEND_FILESEDIT_SIZE_DESC','Se non viene scelta, la dimensione verr&agrave; impostata automaticamente');
DEFINE('_JLIST_BACKEND_FILESEDIT_DADDED','Data e Ora');
DEFINE('_JLIST_BACKEND_FILESEDIT_DADDED_DESC','Definire la data nel seguente formato: <b>YYYY-MM-DD H:mm:ss</b> o usare la funzione calendario. Quando &egrave; mancante viene usata automaticamente la data/ora corrente');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE','Selezionare il file per l\'upload');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_DESC','In questo campo &egrave; possibile indicare un nome di file che verr&agrave; caricato sul server. Il nome del file verr&agrave; usato per il download.');

DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_INFO','File assegnato:');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_ADD_FROM_SERVER','Un file assegnato:');

DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_ADD_FROM_SERVER_NO','Non &egrave; stato assegnato alcun file!');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_ADD_FROM_SERVER_LIST','Selezionare un file');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_REMOVE','<b>Cancellare il file assegnato dal server</b>');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_HOME','Sito Web (senza http://)');
DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR','Nome dell\'autore');
DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR_URL','URL o indirizzo e-mail dell\'autore');
DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR_URL_DESC','L\'indirizzo email verr&agrave; automaticamente criptato.');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD','Cartella di ROOT per l\'Upload');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD_WRITABLE','Stato: <font color=green><strong>SCRIVIBILE</strong></font>');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD_NOTWRITABLE','Stato: <font color=red><strong>NON SCRIVIBILE</strong></font>');

DEFINE('_JLIST_BACKEND_FILESEDIT_URL_TEMP_WRITABLE','Stato: <font color=green><strong>SCRIVIBILE</strong></font>');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_TEMP_NOTWRITABLE','Stato: <font color=red><strong>NON SCRIVIBILE</strong></font>');

//BACKEND LICENSE LIST
DEFINE('_JLIST_BACKEND_LICLIST_TITLE_HEAD','Licenze');
DEFINE('_JLIST_BACKEND_LICLIST_TITLE','Nome della licenza');
DEFINE('_JLIST_BACKEND_LICLIST_LINK','Link');
DEFINE('_JLIST_BACKEND_LICLIST_DEL',' Licenze cancellate');

//Backend LICENSE EDIT
DEFINE('_JLIST_BACKEND_LICEDIT_TITLE','Modifica licenza');
DEFINE('_JLIST_BACKEND_LICEDIT_ERROR_TITLE','Una licenza deve avere un nome.');
DEFINE('_JLIST_BACKEND_LICEDIT_SAVE','Licenza salvata.');
DEFINE('_JLIST_BACKEND_LICEDIT_TEXT','Nome della Licenza');
DEFINE('_JLIST_BACKEND_LICEDIT_EDIT','Modifica license');
DEFINE('_JLIST_BACKEND_LICEDIT_ADD','Aggiungi license');
DEFINE('_JLIST_BACKEND_LIC_USED','Questa licenza &egrave; attualmente in fase di editing da parte di un altro amministratore.');
DEFINE('_JLIST_BACKEND_LICEDIT_LIC_TITLE','Nome della Licenza');
DEFINE('_JLIST_BACKEND_LICEDIT_LIC_URL','Link alla licenza');
DEFINE('_JLIST_BACKEND_LICEDIT_LIC_DESCRIPTION','Descrizione Licenza');

//BACKEND TEMPLATES SUBMENU
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_NAME','Amministrazione layout');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_CATS','Categorie');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_FILES','File');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_SUMMARY','Sommario');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_EMAIL','E-Mail');
DEFINE('_JLIST_BACKEND_TEMPPANEL_TABTEXT_INFO','Informazioni');

// Backend TEMPLATES TEMPLATES TITLES
DEFINE('_JLIST_BACKEND_TEMPLIST_CATTITLE_HEAD','Layout Categorie');
DEFINE('_JLIST_BACKEND_TEMPLIST_FILESTITLE_HEAD','Layout File');
DEFINE('_JLIST_BACKEND_TEMPLIST_SUMTITLE_HEAD','Layout Sommario');
DEFINE('_JLIST_BACKEND_TEMPLIST_MAILTITLE_HEAD','Layout E-Mail');

//BACKEND TEMPLATES LIST
DEFINE('_JLIST_BACKEND_TEMPLIST_MENU_TEXT_ACTIVE','Attivare');
DEFINE('_JLIST_BACKEND_TEMPLIST_TITLE','Nome del layout');
DEFINE('_JLIST_BACKEND_TEMPLIST_TYP','Tipo di layout');
DEFINE('_JLIST_BACKEND_TEMPLIST_ACTIVE','Attivo');
DEFINE('_JLIST_BACKEND_TEMPLIST_LOCKED','Layout di default');
DEFINE('_JLIST_BACKEND_TEMPLIST_LOCKED_DESC','<b>Nota:</b> I layout di default sono parte integrante di jDownloads e non possono essere cancellati. <br />Quando si creano nuovi layout viene mostrato per default il testo dei layout standard.');
DEFINE('_JLIST_BACKEND_TEMPLIST_DEL',' Layout cancellati');
DEFINE('_JLIST_BACKEND_TEMPLIST_ERROR_IS_LOCKED','I layout di default non possono essere cancellati.');
DEFINE('_JLIST_BACKEND_TEMPLIST_ERROR_IS_ACTIVE','I layout attivi non possono essere cancellati.');

//Backend TEMPLATES EDIT
DEFINE('_JLIST_BACKEND_TEMPEDIT_TITLE','Modifica Layout');
DEFINE('_JLIST_BACKEND_TEMPEDIT_ERROR_TITLE','Errore: Un layout deve avere un nome.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_SAVE','Layout salvato.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_ACTIVE','Layout attivato.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_EDIT','Modifica Layout');
DEFINE('_JLIST_BACKEND_TEMPEDIT_ADD','Aggiungi Layout');
DEFINE('_JLIST_BACKEND_TEMP_USED','Questo layout &egrave; attualmente in fase di editing da parte di un altro amministratore.');

DEFINE('_JLIST_BACKEND_TEMPEDIT_NAME','Nome');
DEFINE('_JLIST_BACKEND_TEMPEDIT_TYP','Tipo');
DEFINE('_JLIST_BACKEND_TEMPEDIT_TEXT','Layout');
DEFINE('_JLIST_BACKEND_TEMPEDIT_URL','Link anteprima');

DEFINE('_JLIST_BACKEND_TEMPEDIT_NAME_DESCRIPTION','Indicare un nome significativo per questo layout.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_TYP_DESCRIPTION','Selezionare un tipo di layout appropriato.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_TEXT_DESCRIPTION','Qui viene mostrato un esempio del layout selezionato nel frontend.');

//Backend TEMPLATES TYPS
DEFINE('_JLIST_BACKEND_TEMP_TYP1','Categorie');
DEFINE('_JLIST_BACKEND_TEMP_TYP2','File');
DEFINE('_JLIST_BACKEND_TEMP_TYP3','Sommario');
DEFINE('_JLIST_BACKEND_TEMP_TYP4','E-Mail');


//Backend Backup and Restore
DEFINE('_JLIST_BACKEND_RESTORE_TITLE_HEAD','Recupero Backup');
DEFINE('_JLIST_BACKEND_RESTORE_FILE','Selezionare un file di backup');
DEFINE('_JLIST_BACKEND_RESTORE_RUN','Recupero database');
DEFINE('_JLIST_BACKEND_RESTORE_RUN_FINAL','Iniziare il recupero da backup?');
DEFINE('_JLIST_BACKEND_RESTORE_WARNING','Durante il recupero, il databaase corrente verr&agrave; rimpiazzato con il database contenuto nel backup.<br /><br />Non c\'&egrave; garanzia che il recupero funzioni senza problemi. Per maggior sicurezza, &egrave; consigliabile effettuare un backup tramite un client ftp. Se una nuova versione di jdownloads altera il database attuale, un recupero di jdownloads cercher&agrave; di gestire al meglio i cambiamenti. Attendere la fine del recupero prima di lasciare la pagina. In caso di grandi strutture di categorie e file, il processo di recupero pu&ograve; richiedere diversi minuti. Le informazioni sul processo di recupero possono essere rintracciate nel "Log Recupero"');
DEFINE('_JLIST_BACKEND_RESTORE_MSG','%s Il Recupero &egrave; stato eseguito con successo.');
DEFINE('_JLIST_BACKEND_RESTORE_MSG_2','Controllare le informazioni di recupero nel log: "Log Recupero".');

//Backend CSS & LANGUAGE EDIT
DEFINE('_JLIST_BACKEND_EDIT_CSS_TITLE','File CSS');
DEFINE('_JLIST_BACKEND_EDIT_LANG_TITLE','File di Lingua');
DEFINE('_JLIST_BACKEND_EDIT_CSS_FIELD_TITLE','Contenuto del file CSS');
DEFINE('_JLIST_BACKEND_EDIT_LANG_FIELD_TITLE','Contenuto del file di Lingua');
DEFINE('_JLIST_BACKEND_EDIT_CSS_TITLE_EDIT','Modifica file CSS');
DEFINE('_JLIST_BACKEND_EDIT_LANG_TITLE_EDIT','Modifica file di Lingua');
DEFINE('_JLIST_BACKEND_EDIT_CSS_SAVED','File CSS salvato');
DEFINE('_JLIST_BACKEND_EDIT_LANG_SAVED','File di Lingua salvato');
DEFINE('_JLIST_BACKEND_EDIT_LANG_WRITE_STATUS_TEXT','<big>Il file di Lingua &egrave;: ');
DEFINE('_JLIST_BACKEND_EDIT_CSS_WRITE_STATUS_TEXT','<big>Il file CSS &egrave;: ');
DEFINE('_JLIST_BACKEND_EDIT_LANG_CSS_FILE_WRITABLE_YES','<font color="green">scrivibile!</font></big>');
DEFINE('_JLIST_BACKEND_EDIT_LANG_CSS_FILE_WRITABLE_NO','<font color="#990000">NON scrivibile!</font></big>');
DEFINE('_JLIST_BACKEND_EDIT_LANG_CSS_FILE_WRITABLE_INFO','Il file deve essere scrivibile affinch&eacute; le nuove impostazioni vengano salvate. Pu&ograve; essere necessario cambiare i diritti di accesso al file impostando CHMOD su 0777.');

// BACKEND OTHERS
DEFINE('_JLIST_FRONTEND_NOCAT','Nessuna categoria disponibile!');
DEFINE('_JLIST_FRONTEND_NOFILES','Nessun file disponibile per questa categoria!');

// Information text
DEFINE('_JLIST_BACKEND_INFO_TEXT_TITLE','Informazioni jDownloads');
DEFINE('_JLIST_BACKEND_INFO_LICENSE_TITLE','<b>Information di Licenza:</b>');
DEFINE('_JLIST_BACKEND_INFO_LICENSE_TEXT','Questo componente &egrave; pubblicato con una <a href="http://www.gnu.de/documents/gpl.de.html" target="_blank">licenza GNU/GPL</a>.<br />Installando jDownloads vengono accettati tutti i termini della licenza e le condizioni specificate sotto. Se le condizioni non vengono accettate, &egrave; obbligatorio rimuovere questo componente. <br /><br /><b>Condizioni aggiuntive:</b><br /><b>Non &egrave; permesso</b> rimuovere i link nella <b>pagina principale del componente</b>! Il link deve essere inoltre visibile. Se &egrave; assolutamente necessario rimuovere il link, contattare preventivamente l\'autore: <a href="mailto:info@joomlaaddons.de">info@joomlaaddons.de</a>.<br /><br />Inoltre, questo componente &egrave; fornito "cos&igrave; com\'&egrave;" senza alcuna garanzia esplicita o implicita! Non si assumono responsabilit&agrave; in caso di perdita di dati, etc. L\'uso del componente &egrave; esclusiva responsabilit&agrave; dell\'utente che effettua l\'installazione.<br /><b>Grazie a tutti gli utenti che mi hanno aiutato nello sviluppo.');

DEFINE('_JLIST_BACKEND_INFO_LINK_BACK','Indietro');

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

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_MAIL_DEFAULT','Notifica download!<br />
<br />
E\'stato richiesto il download dei seguenti file:<br />
{file_list}
<br /><br />
Data e Ora: {date_time}<br />
Nome: {user_name}<br />
Gruppo: {user_group}<br />
Indirizzo IP dell\'Utente: {ip_address}<br /><br />
Questa Email &egrave; stata generata automaticamente!');

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
DEFINE('_JLIST_SETTINGS_LICENSE1_URL','http://www.gnu.org/licenses/gpl.html');

DEFINE('_JLIST_SETTINGS_LICENSE2_TITLE','GNU/LGPL');
DEFINE('_JLIST_SETTINGS_LICENSE2_TEXT','');
DEFINE('_JLIST_SETTINGS_LICENSE2_URL','http://www.gnu.org/licenses/lgpl.html');

DEFINE('_JLIST_SETTINGS_LICENSE3_TITLE','Donationware');
DEFINE('_JLIST_SETTINGS_LICENSE3_TEXT','E\'necessaria una donazione per ulteriori sviluppi e/o diffusione del software.<br />Fonte: Wikipedia');
DEFINE('_JLIST_SETTINGS_LICENSE3_URL','http://en.wikipedia.org/wiki/Donationware');

DEFINE('_JLIST_SETTINGS_LICENSE4_TITLE','Linkware');
DEFINE('_JLIST_SETTINGS_LICENSE4_TEXT','Linkware richiede un link verso il sito dell\'autore per l\'utilizzo del software.');
DEFINE('_JLIST_SETTINGS_LICENSE4_URL','');

DEFINE('_JLIST_SETTINGS_LICENSE5_TITLE','Charityware');
DEFINE('_JLIST_SETTINGS_LICENSE5_TEXT','Charityware permette l\'uso libero, l\'autore richiede una donazione per una buona causa.');
DEFINE('_JLIST_SETTINGS_LICENSE5_URL','');

DEFINE('_JLIST_SETTINGS_LICENSE6_TITLE','Licenza commerciale');
DEFINE('_JLIST_SETTINGS_LICENSE6_TEXT','');
DEFINE('_JLIST_SETTINGS_LICENSE6_URL','');

DEFINE('_JLIST_SETTINGS_LICENSE7_TITLE','Creative Commons');
DEFINE('_JLIST_SETTINGS_LICENSE7_TEXT','');
DEFINE('_JLIST_SETTINGS_LICENSE7_URL','http://creativecommons.org/about/licenses/meet-the-licenses');

///////////////////////////////////////////////////////////////////////////////
// Install default config values - Please do not delete this !!!
// Installations Vorgabewerte f&uuml;r Konfigurationen - NICHT l&ouml;schen !!!
///////////////////////////////////////////////////////////////////////////////
DEFINE('_JLIST_SETTINGS_INSTALL_1','<b>Seleziona tutti i file:</b>');
DEFINE('_JLIST_SETTINGS_INSTALL_2','');
DEFINE('_JLIST_SETTINGS_INSTALL_3','Informazioni sui download');
DEFINE('_JLIST_SETTINGS_INSTALL_4','webmaster@yourwebsite.com');
DEFINE('_JLIST_SETTINGS_INSTALL_5','info@yourwebsite.com');


// ****************************************************************************
//		NEW IN VERSION 1.2 beta
// ****************************************************************************

// JAVASCRIPT (jdownloads.js) MESSAGES <<< Umlaute NICHT umwandeln !! >>>
DEFINE('_JLIST_JAVASCRIPT_TEXT_2','Non esiste ancora alcun file da scaricare in questa categoria.\\n');
DEFINE('_JLIST_JAVASCRIPT_TEXT_1','Selezionare almeno un file in una categoria prima di continuare.');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_TEXT_TO_SHORT','Il testo di ricerca e\' troppo corto, specificare almeno 3 caratteri!'); 
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_NO_OPTION','E\'necessario scegliere almeno un\'opzione per la ricerca!'); 
// end javascript messages


DEFINE('_JLIST_INSTALL_1_2','I dati esistono gi&agrave; nel database!');
DEFINE('_JLIST_INSTALL_2_2','I dati sono stati alterati, aggiunti o non esistono (traduzione o contesto da controllare!)!');
DEFINE('_JLIST_INSTALL_17','Trovata un\'installazione di JoomFish! Le definizioni JoomFish per jDownloads sono state aggiunte:');
//------------------------------------------
DEFINE('_JLIST_INSTALL_18','Le definizioni JoomFish per jDownloads sono state copiate in:');
DEFINE('_JLIST_INSTALL_19','Se si desidera usare queste definizioni con JoomFish, copiarle dopo:');

DEFINE('_JLIST_FRONTEND_HOME_LINKTEXT','Overview');
DEFINE('_JLIST_FRONTEND_SUBTITLE_OVER_CATLIST','Overview');
DEFINE('_JLIST_FRONTEND_SUBTITLE_OVER_ONE_CAT','Categoria');
DEFINE('_JLIST_FRONTEND_SUBTITLE_OVER_DETAIL','Dettagli download');

// PAGENAVIGATION FRONTEND
DEFINE('_JLIST_FRONTEND_HEADER_PAGENAVI_PAGE_TEXT','Pagina:');
DEFINE('_JLIST_FRONTEND_HEADER_PAGENAVI_TO_TEXT','su');

DEFINE('_JLIST_BACKEND_FILESEDIT_PRICE','Prezzo');
DEFINE('_JLIST_BACKEND_FILESEDIT_PRICE_DESC','Indica prezzi e valute.');

DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_4','Log Recupero');

//FRONTEND UPLOAD
DEFINE('_JLIST_FRONTEND_UPLOAD_ACCESS_ONLY_REGGED','E\'necessario essere utent registrati per aggiungere files. Se si &egrave; gi&agrave; utenti registrati, effettuare il login. ');
DEFINE('_JLIST_FRONTEND_UPLOAD_ACCESS_ONLY_SPECIALS','Non hai autorizzazioni per l\'invio di files.');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_NO_CATS_EXIST','Errore: I file possono essere inviato se esiste almeno una categoria pubblicata.');    
DEFINE('_JLIST_FRONTEND_UPLOAD_LINKTEXT','Invia file');
DEFINE('_JLIST_FRONTEND_UPLOAD_PAGE_TITLE','Invia file');
DEFINE('_JLIST_FRONTEND_UPLOAD_FILENAME','Seleziona file:');
DEFINE('_JLIST_FRONTEND_UPLOAD_FILENAME_BUTTON_TEXT_SEND','Invia file');
DEFINE('_JLIST_FRONTEND_UPLOAD_FILENAME_BUTTON_TEXT_CLEAR','Azzera campi');
DEFINE('_JLIST_FRONTEND_UPLOAD_ALLOWED_FILETYPE','Extensions file permesse');
DEFINE('_JLIST_FRONTEND_UPLOAD_ALLOWED_MAX_SIZE','Dimensione massima permessa');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_NO_VALUE','Errore: non tutti i campi richiesti sono stati riempiti!<br />Inserire le informazioni nei campi richiesti.');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_FILETYPE','Errore: L\'estensione del file selezionato non &egrave; supportata!<br />Selezionare solo file con estensioni valide.');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_FILESIZE','Errore: la dimensione del file selezionato e maggiore della dimensione massima permessa!');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_MOVE_FILE','Errore: Si &egrave; verificato un errore durante il trasferimento del file sul server!');
DEFINE('_JLIST_FRONTEND_UPLOAD_OK','Il file &egrave; stato trasferito con successo sul server!<br />La pubblicazione deve ancora essere approvata.');

// FRONTEND UPLOAD FIELD TITLE
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_NAME','Nome:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_MAIL','Indirizzo E-Mail:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_TITLE_FILE','Titolo del Download:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_PRICE','Prezzo:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_DESC_FILE','Descrizione breve:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_DESC_FILE_LONG','Descrizione estesa:');    
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_AUTHOR','Nome dell\'autore:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_AUTHOR_URL','Sito Web dell\'autore:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_LIZENZ','Licenza:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_VERSION','Versione:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_LISTBOXES','Seleziona:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_CATEGORY','Categoria:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_LANGUAGE','Lingua:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_SYSTEM','Sistema:');
DEFINE('_JLIST_FRONTEND_UPLOAD_SYMBOL_TEXT','Campo obbligatorio');

//FRONTEND SEARCH
DEFINE('_JLIST_FRONTEND_SEARCH_LINKTEXT','Ricerca Download');

// AUTOCHECK DOWNLOADS
DEFINE('_JLIST_BACKEND_AUTOCHECK_NEW_CATS','sono state trovate nuove cartelle e sono state aggiunte come nuove categorie!!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_MISSING_CATS','Le cartelle di categoria non sono state trovate, pertanto le categorie in questione saranno sospese!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NO_NEW_CATS','Nessuna nuova cartella!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NO_MISSING_CATS','Tutte le cartelle delle categorie pubblicate esistono!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_LOG_TITLE','Ultimo messaggio interno (azioni eseguite):');
DEFINE('_JLIST_BACKEND_AUTOCHECK_LOG_TAB_TITLE','Ultimo messaggio interno (azioni) durante il controllo delle cartelle di Download'); 
DEFINE('_JLIST_BACKEND_AUTOCHECK_REFRESH_MESSAGE','E\'necessario aggiornare la pagina per vedere le modifiche!'); 

DEFINE('_JLIST_BACKEND_RESTORE_LOG_TAB_TITLE','Risultati dell\'ultimo recupero da backup'); 

DEFINE('_JLIST_BACKEND_PANEL_STATUS_DESC_OFFLINE','La modalit&agrave; manutenzione &egrave; attivata! L\'area di Download non &egrave; disponibile ai normali visitatori! Questa area di download &egrave; comunque accessibile ai membri che appartengono al gruppo "Autori".');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_DOWNLOADS_HEADER','Stato Download');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_DOWNLOADS_OFF_DESC','Il controllo automatico delle cartelle di Download &egrave; disattivato!');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_VERSION_HEADER','Informazioni di versione di Jdownloads');

DEFINE('_JLIST_BACKEND_SETTINGS_DEL_TEMPFILE_TIME','Ritardo (in minuti) per la cancellazione dei file zip temporanei');
DEFINE('_JLIST_BACKEND_SETTINGS_DEL_TEMPFILE_TIME_DESC','Indicare un valore in minuti, dopo il quale i file Zip temporanei per i download multipli devono essere cancellati dal server. Se vengono scaricati file molto grandi, si deve impostare un valore pi&ugrave; alto. Valore di default: 20 (minuti).');

DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_FRONTEND_HEAD_UPLOAD','Configurazione Upload nel Frontend');
DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIR_RENAME_ERROR','ERRORE: La cartella root per i Download non pu&ograve; essere rinominata!');
DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIR_RENAME_OK',' - La cartella di root per i Download &egrave; stata rinominata con successo!');

DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO','controllo delle cartelle di Download? ');
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_DESC','Se viene impostata questa opzione, tutte le cartelle vengono controllate per eventuali modifiche ed il database viene automaticamente aggiornato. In questo modo le cartelle ed i file caricati sul server via ftp vengono aggiunti automaticamente come nuovi record nelle categorie e nelle tabelle dei Download. Se delle categorie o dei file non vengono trovati, lo stato viene impostato come <b>Sospeso</b > e <b>Impostazioni standard: SI.</b>');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_USE_CHECKBOX_INFO','<b>Nota:</b> Le opzioni dei check box per gli annunci di Download sono definite nella parte di amministrazione del layout per i file!');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_USE_SYMBOLE_INFO','<b>Nota:</b> Le opzioni grafiche per i mini simboli sono definite nella parte di amministrazione del layout per i file!');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FILES_PER_SIDE','Numero di oggetti per pagina');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FILES_PER_SIDE_DESC','Indicare qui il numero di Categorie/Download che saranno mostrati in una singola pagina del front-end.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_HEADER_TITLE','Titolo da usare come header');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_HEADER_DESC','Definire qui il titolo che verr&agrave; mostrato dal front-end come titolo del componenete, es. "Downloads".');

// FRONTEND UPLOAD CONFIG
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACTIVE','Attivazione Upload dal Frontend:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACTIVE_DESC','Se attivato, i gruppi utente definiti sotto possono inviare file attraverso un form specifico.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_PERMISSIONS','Chi pu&ograve; effettuare upload:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_PERMISSIONS_DESC','Qui vengono definiti i gruppi di utenti che possono inviare file. L\'impostazione "Speciale" permette l\'accesso alle funzionalit&agrave; di upload da parte dei membri con stato >= "autore".');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACCESS_ALL','Tutti');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACCESS_REGGED','Registrati');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACCESS_ADMINS','Speciale');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILETYPES','Estensioni file permesse:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILETYPES_DESC','Definire qui le estensioni individuali che possono essere inviate tramite la form di Upload. Inserire una virgola (,) per separare i valori.');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILESIZE','Dimensione Massima in KB:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILESIZE_DESC','Definire qui la dimensione massima permessa per i file inviati in kilobytes (1024 Kb = 1 Mb). Valore di default: 2048.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FORM_TEXT','Testo della form di Upload:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FORM_TEXT_DESC','Definire qui il layout (contenuto e formato) della form di Upload (prima o dopo il testo della form). Il placeholder: {form} sar&agrave; sostituito con la form vera e propria sul front-end. Il simbolo del placeholder non pu&ograve; essere cancellato!');

// Platzhalter {form} NICHT ÄNDERN ODER LÖSCHEN !!!
// DO NOT DELETE, EDIT OR TRANSLATE: {form} !!! 

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FORM_TEXT_LAYOUT','Questa form ti permette di inviare un file sul server. Tutti i campi marcati con un simbolo sono obbligatori. Il nome o l\'indirizzo e-mail non saranno comunicati a terzi e vengono usati internamente al sistema a fini informativi.<br />
{form}<br />');

DEFINE('_JLIST_BACKEND_TEMPLIST_DEL_QUEST','Cancellare Layout?');
DEFINE('_JLIST_BACKEND_LICLIST_DEL_QUEST','Cancellare Licenze?');

DEFINE('_JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD_STATUS_DESC','Qui &egrave; possibile vedere lo stato di configurazione della cartella di ROOT per l\'Upload. Se non &egrave; scrivibile, controllare i diritti con un programma FTP. I diritti devono essere impostati con CHMOD su 0777.');

DEFINE('_JLIST_BACKEND_FILESEDIT_HITS','Numero di Download');
DEFINE('_JLIST_BACKEND_FILESEDIT_HITS_DESC','Qui &egrave; possibile cambiare o resettare il contatore dei Download');

DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_CAT_DESC','E\'necessario assegnare al Download una categoria. Selezionare dalla lista la categoria appropriata. Se viene selezionata in seguito un\'altra categoria, il file in Download viene automaticamente spostato nella cartella della nuova categoria.');

DEFINE('_JLIST_BACKEND_FILESEDIT_DESCRIPTION_KURZ','Descrizione breve');
DEFINE('_JLIST_BACKEND_FILESEDIT_DESCRIPTION_LONG','Descrizione estesa');
DEFINE('_JLIST_BACKEND_FILESEDIT_EDITOR_INFO','Nella form di configurazione pu&ograve; essere impostato se per le modifiche verr&agrave; utilizzato l\'editor WYSIWYG o una textbox semplice.');
DEFINE('_JLIST_BACKEND_FILESEDIT_SENT_IN_FROM_STATUS','Stato: ');
DEFINE('_JLIST_BACKEND_FILESEDIT_SENT_IN_FROM_EMAIL','Indirizzo E-Mail: ');
DEFINE('_JLIST_BACKEND_FILESEDIT_ERROR_TITLE','Errore: un Download deve avere un Titolo!');
DEFINE('_JLIST_BACKEND_FILESEDIT_CATLIST_ERROR','Errore: non &egrave; stata assegnata alcuna categoria!');
DEFINE('_JLIST_BACKEND_FILESEDIT_SAVE_MOVEFILE_ERROR',' - Errore: Il file in Download non pu&ograve; essere spostato!');
DEFINE('_JLIST_BACKEND_FILESEDIT_SAVE_MOVEFILE_OK',' - File in Download spostato con successo!');

DEFINE('_JLIST_BE_NO_PUBL_FILES','I Download senza categoria non possono essere pubblicati!');
DEFINE('_JLIST_BACKEND_FILESLIST_DEL_QUEST','Cancellare Download?');
DEFINE('_JLIST_BACKEND_FILESLIST_DESCRIPTION_SHORT','Descrizione (Breve)');
DEFINE('_JLIST_BACKEND_FILESLIST_PIC','Simbolo');
DEFINE('_JLIST_BACKEND_FILESLIST_DEL_FILES_OPTION','<font color=#990000>Cancella i file associati al download in caso di cancellazione del Download:</font>');

DEFINE('_JLIST_BACKEND_FILESLIST_DEL_FILES_OPTION_TOOLTIP','Se SI, non vengono cancellati solo i dati del download, ma anche i file associati vengono rimossi dal server! Se il file non viene cancellato ma &egrave; attivo il controllo delle cartelle di Download, il file viene automaticamente considerato come un nuovo download!<br /><b>Impostazione raccomandata: SI</b >.');
DEFINE('_JLIST_BACKEND_FILESEDIT_DEL_FILES_OK',' - Cancellati anche i file associati.');
DEFINE('_JLIST_BACKEND_FILESEDIT_DEL_FILES_ERROR',' - File associati non cancellati perch&eacute; mancanti.');
DEFINE('_JLIST_BACKEND_FILESLIST_FILE_ID','ID');

DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_CAT_DEL_AFTER_COPY','E\'avvenuto un errore durante la cancellazione di una vecchia Categoria');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_TITLE','Titolo della Categoria <b><font color=red>*</font></b>');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_TITLE_DESC','Identificativo della Categoria. Per ogni categoria viene creata una cartella con il nome bassato sul titolo della categoria privato di eventuali caratteri speciali. Eccezioni: <b>" - _ . , " </b>e il carattere di spazio.');
DEFINE('_JLIST_BACKEND_CATSEDIT_ROOT_CAT_LISTBOX','Categoria Principale');
DEFINE('_JLIST_BACKEND_CATSEDIT_ROOT_CAT_LISTBOX_NEW','Nuova categoria principale');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_TITLE','Assegnazione categorie');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_TITLE_NEW','Nuova categoria creata in / come <b><font color=red>*</font></b>');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_DESC_NEW','Se &egrave; necessario creare una nuova categoria principale, selezionare "Categoria Principale". Se la nuova categoria deve fungere da Sottocategoria di una categoria esistente, selezionare la categoria esistente di cui deve fare parte. La nuova categoria viene creata a livello immediatamente sottostante. La gerarchia pu&ograve; essere modificata in qualsiasi momento.');

DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_DESC','Se &egrave; necessario spostare una categoria, selezionare la categoria in cui inserirla. Se una Sottocategoria deve essere impostata come categoria principale, selezionare "Categoria Principale".<br /><br /><b>Attenzione:</b> 
Al momento del salvataggio, la cartella corrente viene spostata automaticamente sul server. Se la categoria spostata contiene Sottocategorie, esse vengono spostate assieme al genitore. Per rendere sicura l\'operazione, TUTTE le altre categorie in fase di modifica vengono chiuse al momento dell\'operazione!');
DEFINE('_JLIST_BACKEND_CATSEDIT_SAVE','Categoria salvata.');
DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_TITLE_CHARS_NOT_ALLOWED','Errore: il titolo contiene caratteri non accettabili!');
DEFINE('_JLIST_BACKEND_CATSLIST_DEL_QUEST','Cancellare Categorie?');
DEFINE('_JLIST_BACKEND_CATSLIST_CATID','ID');
DEFINE('_JLIST_BACKEND_CATSLIST_PATH','Cartella');

// BACKEND CATS DELETE
DEFINE('_JLIST_BE_NO_DEL_SUBCATS_EXISTS','La Categoria non pu&ograve; essere cancellata per l\'esistenza di Sottocategorie!');
DEFINE('_JLIST_BE_NO_DEL_FILES_EXISTS','La Categoria non pu&ograve; essere cancellata per l\'esistenza di file in Download!');
DEFINE('_JLIST_BE_DEL_CATS_DIRS_OK',' - Cartella cancellata con successo!');
DEFINE('_JLIST_BE_DEL_CATS_DIRS_ERROR',' - Errore durante la cancellazione della cartella!');

DEFINE('_JLIST_BACKEND_NO_SELECT_ACTION','Selezionare prima una riga.!');

DEFINE('_JLIST_BE_SETTINGS_FILES_PER_SIDE_BE_TITLE','Quante righe mostrare nella lista');
DEFINE('_JLIST_BE_SETTINGS_FILES_PER_SIDE_BE_DESC','Qui &egrave; possibile definire quante righe vengono mostrate dal backend nel layout delle liste.');

DEFINE('_JLIST_UPLOAD_MAX_FILESIZE_INFO_TITLE','Massima dimensione definita nel file di configurazione php.ini:');

DEFINE('_JLIST_BACKEND_TEMPLATE_ACTIVE_ERROR','Solo UN layout pu&ograve; essere selezionato per l\'attivazione!');
DEFINE('_JLIST_AUTO_FILE_CHECK_IMPORT_BY','Auto Importazione');          
DEFINE('_JLIST_AUTO_FILE_CHECK_ADDED',   'Download aggiunto    ');
DEFINE('_JLIST_AUTO_FILE_CHECK_DISABLED','Download non trovato      ');
DEFINE('_JLIST_AUTO_CAT_CHECK_ADDED',    'Categoria aggiunta');
DEFINE('_JLIST_AUTO_CAT_CHECK_DISABLED', 'Categoria non trovata  ');

// MESSAGES AFTER CHECK FILES AND DIRS WHEN UPDATED FROM 1.1 alpha
DEFINE('_JLIST_CHECK_CATS_TITEL1','E\'stata aggiornata la vecchia versione di jDownloads alla Versione 1.2');     
DEFINE('_JLIST_CHECK_CATS_TITEL2','Come conseguenza, tutte le categorie ed i Download gi&agrave; creati devono essere trasferiti nella nuova struttura di categorie!');          

DEFINE('_JLIST_CHECK_FINISH','Processo terminato!');
DEFINE('_JLIST_CHECK_CATS_CREATE','Cartelle delle Categorie create!');
DEFINE('_JLIST_CHECK_FILES_MOVE','File in Download spostati!!');
DEFINE('_JLIST_CHECK_FILES_NOT_FOUND','File in Download non trovati!');
DEFINE('_JLIST_CHECK_FILES_NOT_MOVED','I file in Download non possono essere spostati nella cartella della categoria assegnata!');
DEFINE('_JLIST_CHECK_CATS_NOT_FOUND','Le cartelle delle Categorie non possono essere create!');

// MESSAGES AFTER RESTORE BACKUPFILE
DEFINE('_JLIST_AFTER_RESTORE_TITLE_1','Processo di Recupero in corso:');
DEFINE('_JLIST_AFTER_RESTORE_1','Record recuperati!');
DEFINE('_JLIST_AFTER_RESTORE_TITLE_2','Controllo Database avviato:');
DEFINE('_JLIST_AFTER_RESTORE_3','Il backup &egrave; stato creato con una vecchia versione di jDownloads!');
DEFINE('_JLIST_AFTER_RESTORE_4','Le cartelle delle categorie e dei Download verranno controllate:');
DEFINE('_JLIST_AFTER_RESTORE_TITLE_3','Risultati dettagliati:');

DEFINE('_JLIST_AUTOCHECK_DIR_NOT_EXIST','ERRORE: La cartella di root per l\'Upload non esiste!');
DEFINE('_JLIST_AUTOCHECK_DIR_NOT_EXIST_2','E\'necessario creare le due cartelle /downloads e /downloads/tempzipfiles nella cartella di root di Joomla, tramite un programma ftp ed impostare i permessi con CHMOD su 0777 - altrimenti jDownloads non potr&agrave; funzionare!');
DEFINE('_JLIST_FRONTEND_HEADER_CATLIST_TITLE','Selezionare Categoria');
DEFINE('_JLIST_FRONTEND_HEADER_SUMMARY_TITLE','Sommario');
DEFINE('_JLIST_FRONTEND_HEADER_FINISH_TITLE','Download');

// FRONTEND SEARCH
DEFINE('_JLIST_FRONTEND_SEARCH_TITLE','Ricerca Download');
DEFINE('_JLIST_FRONTEND_SEARCH_TEXT_TITLE','Cerca');
DEFINE('_JLIST_FRONTEND_SEARCH_IN_TITLE','Cerca nei Titoli');
DEFINE('_JLIST_FRONTEND_SEARCH_IN_DESC','Cerca nelle Descrizioni');
DEFINE('_JLIST_FRONTEND_SEARCH_INFO_TEXT','Verranno mostrati al massimo 20 file come risultato.');  
DEFINE('_JLIST_FRONTEND_SEARCH_BUTTON_TEXT','Cerca');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_TITLE','Risultati ricerca');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_SUM_FILES','trovati');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_NO_SUM_FILES','Non &egrave; stato trovato alcun file durante la ricerca.');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_SEARCH_TEXT','Termini di ricerca');

// NEW LAYOUT FOR VIEW DOWNLOAD-DETAILS
DEFINE('_JLIST_BACKEND_TEMP_TYP5','Dettaglio Download');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_DETAILS','Dettaglio Download');
DEFINE('_JLIST_BACKEND_TEMPLIST_DETAILSTITLE_HEAD','Layout Dettaglio Download');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS','Layout: Dettaglio Download');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_DESC','Questo &egrave; il layout della pagina del <b>Dettaglio Download</b> nel Front-end.<br /><br />Non rimuovere il placeholder <font color=red>{url_download}</font>!<br /><br />Variabili disponibili (placeholder):<br />{file_title} {thumbnail} {pic_is_new} {pic_is_hot} {pic_is_updated} {url_download} {mirror_1} {mirror_2} {description_long} {details_block_title} {license_title} {license_text} {price_title} {price_value} {language_title} {language_text} {filesize_title} {filesize_value} {system_title} {system_text} {author_title} {author_text} {author_url_title} {author_url_text} {created_date_title} {created_date_value} {hits_title} {hits_value} {created_by_title} {created_by_value} {modified_by_title} {modified_by_value} {modified_date_title} {modified_date_value}.'); // changed in 1.4 beta (2)
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_INFO_TITLE','<b>Informazioni sul layout di Dettaglio Download:</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_INFO_TEXT','<p>Esempio Grafico di questa pagina nel frontend. Il bordo rosso scuro indica le aree che &egrave; possibile modificare da qui.</p>');

// FRONTEND DOWNLOAD DETAILSITE
DEFINE('_JLIST_FE_DETAILS_PATHWAY_TEXT','Posizione dei file');
DEFINE('_JLIST_FE_DETAILS_LINK_TEXT_TO_DETAILS','>> Dettagli');
DEFINE('_JLIST_FE_DETAILS_LICENSE_TITLE','Licenza');
DEFINE('_JLIST_FE_DETAILS_PRICE_TITLE','Prezzo');
DEFINE('_JLIST_FE_DETAILS_LANGUAGE_TITLE','Lingua');
DEFINE('_JLIST_FE_DETAILS_FILESIZE_TITLE','Dimensione');
DEFINE('_JLIST_FE_DETAILS_SYSTEM_TITLE','Sistema');
DEFINE('_JLIST_FE_DETAILS_AUTHOR_TITLE','Autore');
DEFINE('_JLIST_FE_DETAILS_AUTHOR_URL_TITLE','Sito Web');
DEFINE('_JLIST_FE_DETAILS_CREATED_DATE_TITLE','Creato');
DEFINE('_JLIST_FE_DETAILS_HITS_TITLE','Download');

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
DEFINE('_JLIST_BACKEND_TEMPEDIT_NOTE_TITLE','Note layout');
DEFINE('_JLIST_BACKEND_TEMPEDIT_NOTE_DESC','Qui &egrave; possibile inserire informazioni aggiuntive per il layout.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_CHECKBOX_TITLE','Il layout usa CHECK box?');
DEFINE('_JLIST_BACKEND_TEMPEDIT_CHECKBOX_DESC','Se si, l\'intestazione per i CHECK box ed il bottone Continua verranno mostrati nella pagina. Inoltre il simbolo di placeholder <b>{checkbox_list}</b> deve essere inserito nel layout. Altrimenti deve essere inserito nel layout il simbolo di placeholder <b>{url_download}</b>.'); 
DEFINE('_JLIST_BACKEND_TEMPEDIT_SYMBOLE_TITLE','Inserire mini-simboli?');
DEFINE('_JLIST_BACKEND_TEMPEDIT_SYMBOLE_DESC','Se si il mini-simbolo indicato verr&agrave; inserito. Le dimensioni del simbolo possono essere modificate nelle impostazioni di configurazione.');

DEFINE('_JLIST_FE_YES','Si');
DEFINE('_JLIST_FE_NO','No');

DEFINE('_JLIST_BACKEND_EDIT_PUBLISHED','Pubblicato');
DEFINE('_JLIST_BACKEND_FILESEDIT_MODIFIED_DATE','Ultima modifica');
DEFINE('_JLIST_BACKEND_FILESEDIT_MODIFIED_BY','di');
DEFINE('_JLIST_BACKEND_FILESEDIT_CREATED_BY','Creato da');

DEFINE('_JLIST_BACKEND_FILESEDIT_INFO_FIELDS_DESC','I riquadri sulla sinistra forniscono informazioni sul file: nome del redattore, ultimo editore, ultima modifica');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CATLISTBOX_ACTIVE','Mostrare una listbox di Categorie sull\'header?');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CATLISTBOX_DESC','Se Si, verr&agrave; mostrata a destra dell\'header una listbox contenente tutte le categorie pubblicate disponibili all\'utente secondo i suoi diritti. Dalla lista &egrave; possibile spostarsi direttamente sulla Categoria/Sottocategoria selezionata.');

// SAMPLE DATA 
DEFINE('_JLIST_SAMPLE_DATA_CAT_NAME_ROOT','Esempio di Categoria');
DEFINE('_JLIST_SAMPLE_DATA_CAT_NAME_SUB','Esempio di Sottocategoria');
DEFINE('_JLIST_SAMPLE_DATA_CAT_NAME_TEXT','Questa &egrave; una Categoria di esempio. Questa definizione pu&ograve; essere rimossa in qualunque momento.');
DEFINE('_JLIST_SAMPLE_DATA_FILE_NAME','Esempio di Download');
DEFINE('_JLIST_SAMPLE_DATA_FILE_NAME_TEXT','Questo &egrave; un Download (file) di esempio. Questa definizione pu&ograve; essere rimosssa in qualunque momento.');
DEFINE('_JLIST_SAMPLE_DATA_CREATE_ERROR','I dati di esempio non sono stati creati per un errore! Controllare le opzioni nel menu principale di jDownloads.');
DEFINE('_JLIST_SAMPLE_DATA_CREATE_OK','Dati di esempio creati con successo!');
DEFINE('_JLIST_SAMPLE_DATA_BE_OPTION_LINK_TEXT','Installazione dati di esempio');
DEFINE('_JLIST_SAMPLE_DATA_EXISTS','I dati di esempio esistono gi&agrave;!');
DEFINE('_JLIST_SAMPLE_DATA_BACK_TO_PANEL','Torna al pannello di controllo');


DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_HEAD_INFO2','<br /><b><u>Spiegazione dei layout</u></b><br /><b>Categorie: </b>Definisce il layout delle categorie e degli oggetti in download per l\'uso dei CHECK box sopra e sotto la lista dei Download.<br /><b>File: </b>Definisce il layout della lista dei Download mostrata sotto le Categorie (vedi sopra).<br /><b>Dettagli Download: </b>Definisce il layout della vista dettagliata del Download.<br /><b>Sommario: </b>Definisce il layout della pagina di sommario del download (dalla quale inizia effettivamente il download) con la lista dei file che verranno scaricati.<br /><b>E-Mail: </b>Definisce il layout delle E-Mail ricevute dagli Admin dopo ogni download.');

// ANTI_LEECH_CONFIG
DEFINE('_JLIST_BACKEND_SETTINGS_ANTILEECH_TITLE','Protezione della cartella di Download?');
DEFINE('_JLIST_BACKEND_SETTINGS_ANTILEECH_DESK','Se SI, il file htaccess.txt verr&agrave; copiato nella cartella root dei Download e rinominato .htaccess. In tal modo si attiva la protezione e tutti gli accessi esterni ai file verranno bloccati nella cartella e in tutte le sottocartelle. <b>Raccomandato: SI!</b>');
DEFINE('_JLIST_ACTIVE_ANTILEECH_ERROR',' - ERRORE durante la copia di htaccess.txt!');
DEFINE('_JLIST_ACTIVE_ANTILEECH_OK',' - La protezione dei Download &egrave; attivata!');
DEFINE('_JLIST_ACTIVE_ANTILEECH_OFF_ERROR',' - Errore durante la cancellazione di .htaccess!');
DEFINE('_JLIST_ACTIVE_ANTILEECH_OFF_OK',' - La protezione dei Download &egrave; disattivata!');

DEFINE('_JLIST_FRONTEND_ANTILEECH_MESSAGE','Accesso non autorizzato ai download!');
DEFINE('_JLIST_FRONTEND_FILE_NOT_FOUND_MESSAGE','Il file raccomandato non &egrave; stato trovato!<br /><br />Contattare il Webmaster!');

DEFINE('_JLIST_FRONTEND_SUMMARY_ZIP_FILESIZE','Dimensione del pacchetto di Download');
DEFINE('_JLIST_FRONTEND_NEXT_SITE_BUTTON','&nbsp;>>&nbsp;');
DEFINE('_JLIST_FRONTEND_PREV_SITE_BUTTON','&nbsp;<<&nbsp;');

DEFINE('_JLIST_FRONTEND_SUBHEADER_NUMBER_OF_CATS_TITLE','Numero di Categorie');
DEFINE('_JLIST_FRONTEND_SUBHEADER_NUMBER_OF_SUBCATS_TITLE','Numero di Sottocategorie');
DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_CATLIST','Selezionare una categoria oppure >Categoria Principale<');

// NEW OPTION FOR DIREKT DOWNLOAD LINK
DEFINE('_JLIST_BACKEND_SETTINGS_DIRECT_DOWNLOAD_ACTIVE_TITLE','Attivare il direct-download?');
DEFINE('_JLIST_BACKEND_SETTINGS_DIRECT_DOWNLOAD_ACTIVE_DESC','Se SI: quando viene usato il placeholder <b>{url_download}</b> nel layout, il download inizia immediatamente, senza che venga mostrato il sommario.');

// NEW OPTION FOR HOT AND NEW IMAGES IN DOWNLOADS
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_TITLE','In che momento un download &egrave; marcato come "popolare"');
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_DESC','Indica il numero di download minimi perch&eacute; l\'oggetto venga marcato "HOT". Dietro il titolo del download verr&agrave; mostrato il simbolo "HOT".');
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_NEW_PIC_TITLE','Nome del file per il simbolo');
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_NEW_PIC_DESC','Il file indicato deve risiedere nella cartella: <b>../components/com_jdownloads/images</b>.');
DEFINE('_JLIST_BACKEND_SETTINGS_NEW_TITLE','Per quanto tempo un download &egrave; marcato come "Novit&agrave;"');
DEFINE('_JLIST_BACKEND_SETTINGS_NEW_DESC','Indica il numero di giorni per cui un download viene marcato come "Novit&agrave;". Dietro il titolo del download verr&agrave; mostrato il simbolo "NEW".');
// NEW OPTION FOR DOWNLOAD PIC BUTTON IN DOWNLOAD DETAILS
DEFINE('_JLIST_BACKEND_SETTINGS_DETAILS_DOWNLOAD_BUTTON_TITLE','Nome del file per il simbolo di download'); 
DEFINE('_JLIST_BACKEND_SETTINGS_DETAILS_DOWNLOAD_BUTTON_DESC','Il file indicato deve risiedere nella cartella <b>../components/com_jdownloads/images</b> e verr&agrave; usato come link per lo scaricamento nella pagina di dettaglio del download.');

// NEW IN 1.2 beta 2
DEFINE('_JLIST_FRONTEND_UPLOAD_AUTO_PUBLISH','Autopubblicazione Download:');
DEFINE('_JLIST_FRONTEND_UPLOAD_AUTO_PUBLISH_DESC','Se SI, il file in download verr&agrave; pubblicato immediatamente dopo l\'upload.');

// NEW IN 1.2 stable
DEFINE('_JLIST_BACKEND_DIRSEDIT_CREATE_DIR_MESSAGE_ERROR','Errore: La cartella non pu&ograve; essere creata! Controllare via FTP ed impostare CHMOD su 0777 per tutte le cartelle di jDownloads!');

// NEW IN 1.3 stable

// FOR CREATES MAIN MENU IN INSTALL
DEFINE('_JLIST_BACKEND_CPANEL_MAIN','Pannello di controllo');
DEFINE('_JLIST_INSTALL_DEFAULT_DATE_FORMAT','%d-%m-%Y %H:%M:%S');

// NEW OPTION SORTORDER CATEGORIES
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SORTCATSORDER_TEXT','Ordinamento Categorie');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SORTCATSORDER_DESC','Ordinamento delle Categorie nel front end. Selezionare "Standard" per usare l\'ordinamento di default del backend.');
DEFINE('_JLIST_BACKEND_SETTINGS_CATS_ORDER_1','Standard');
DEFINE('_JLIST_BACKEND_SETTINGS_CATS_ORDER_2','Nome Asc');
DEFINE('_JLIST_BACKEND_SETTINGS_CATS_ORDER_3','Nome Desc');

// NEW TAB TITLE FOR AUTODETECT
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_TAB_TITLE','Controllo');
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_HEADER_TITLE','Controllo delle cartelle di download');

// NEW OPTION AUTOPUBLISH NEW FOUNDED FILES
DEFINE('_JLIST_BACKEND_SETTINGS_DOWNLOADS_AUTOPUBLISH_TITLE','Pubblicare automaticametne i download?');
DEFINE('_JLIST_BACKEND_SETTINGS_DOWNLOADS_AUTOPUBLISH_DESC','Se Si, i nuovi file verranno pubblicati immediatamente, se l\'opzione soprastante &egrave; attivata.<br /><b>Default: No.</b>');

// NEW OPTION  FOR AUTODETECT ALL FILES
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_ALL_FILES_TITLE','Controllare tutti i tipi di file?');
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_ALL_FILES_DESC','Se l\'opzione viene attivata, tutti i tipi di file vengono controllati!');

// NEW OPTION  FOR AUTODETECT ONLY THIS FILES
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_ONLY_THIS_FILES_TITLE','Controllare solo i seguenti tipi di file:');
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_ONLY_THIS_FILES_DESC','Se l\'opzione viene attivata, solo i tipi di file menzionati qui verranno controllati! I valori vanno separati con un carattere di virgola (,).');

// NEW COPY DOWNLOADS FUNCTION
DEFINE('_JLIST_BACKEND_FILES_COPY_TITLE','Copia Download');
DEFINE('_JLIST_BACKEND_FILES_COPY_DESC','Selezionare la Categoria di Destinazione.');
DEFINE('_JLIST_BACKEND_FILES_COPY_TEXT_1','Questi download sono marcati per la copia:');
DEFINE('_JLIST_BACKEND_FILES_COPY_TEXT_2','Hint: Se selezioni la categoria di origine come destinazione, le copie verranno create come: "Copy from <i>Titolo Download</i>"!');
DEFINE('_JLIST_BACKEND_FILES_COPY_TEXT_3','Pubblica i Download copiati:');
DEFINE('_JLIST_BACKEND_FILES_COPY_TEXT_4','Copia anche il file:');
DEFINE('_JLIST_BACKEND_FILES_COPY_DOWNLOADS_TEXT','Copia da');
DEFINE('_JLIST_BACKEND_FILES_COPY_SAVED','I Download sono stati copiati!');

// NEW OPTION EXTERN DOWNLOAD URL
DEFINE('_JLIST_BACKEND_FILE_EDIT_EXT_DOWNLOAD_TITLE','Link a file esterno:');
DEFINE('_JLIST_BACKEND_FILE_EDIT_EXT_DOWNLOAD_INFO','Per un link ad un file esterno, &egrave; necessario cancellare prima il file locale.');
DEFINE('_JLIST_BACKEND_FILE_EDIT_EXT_DOWNLOAD_DESC','Qui puoi impostare un URL verso un file esterno. Il campo per il nome del file andr&agrave; lasciato vuoto.');

//NEW OPTION FOR JCOMMENTS INTEGRATION
DEFINE('_JLIST_BACKEND_SETTINGS_JCOMMENTS_TITLE','Funzioni di commento di JComments?');
DEFINE('_JLIST_BACKEND_SETTINGS_JCOMMENTS_DESC','Si, attiva le funzioni di commento di <b>JComments</b> nel frontend.<br /><b>JComments</b> non &egrave; incluso in jDownloads ed &egrave; quindi necessario installarlo e configurarlo separatamente prima di poterlo utilizzare.<br />L\'estensione JComments &egrave; disponibile qui: <a href="http://www.joomlatune.com">www.joomlatune.com.</a>');
DEFINE('_JLIST_BACKEND_SETTINGS_JCOMMENTS_EXISTS_DESC','Si, mostra le funzioni JComments nelle pagine di dettaglio dei download<br /><b>JComments &grave; gi&agrave; installato!</b>');

// NEW TAB FOR FRONTEND UPLOAD CONFIG
DEFINE('_JLIST_BACKEND_SETTINGS_FE_UPLOAD_TAB_TITLE','Upload');
DEFINE('_JLIST_BACKEND_SETTINGS_FE_UPLOAD_TITLE_HEAD','Configurazione upload da Frontend');

// NEW DOWNLOAD FIELDS FOR DOWNLOAD MIRRORS
DEFINE('_JLIST_BACKEND_FILESEDIT_MIRROR_URL_TITLE','Link esterno alternativo:');
DEFINE('_JLIST_BACKEND_FILESEDIT_MIRROR_URL_DESC','Qui puoi impostare un mirror per il download.<br />Nei layout per i File e per il Dettaglio Download sar&agrave; necessario usare i placeholders  {mirror_1} {mirror_2}.');

//NEW FOR PLUGINS TAB
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_PLUGINS','Plugin');

//NEW FOR FILE PLUGIN
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_FILEPLUGIN_HEAD','Configurazione dei Plugin (mos_jdownloads_file)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(c) by Pelma per jDownloads');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_DEFAULTLAYOUT','Layout di default:');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_DEFAULTLAYOUT_DESC','Questo layout viene usato per mostrare i downloads quando il plugin viene <b>attivato</b> (vedi sotto).');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_NOT_INSTALLED','Il plugin mos_jdownloads_file che pu&ograve; essere usato per mostrare i download di jDownloads negli articoli non fa parte direttamente di jDownloads e deve essere installato separatamente. <br /><b>Stato: Il plugin non &egrave; ancora installato!</b><br />Puoi scaricare l\'estensione qui: <a href="http://demo.joomlaaddons.de/index.php?option=com_jdownloads&Itemid=69&task=viewcategory&catid=9">www.JoomlaAddons.de</a>.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_ONLINEPART','Parametri per il plugin attivato');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINEPART','Parametri per il plugin disattivato');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWNEW','Mostra il simbolo NEW');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWNEW_DESC','Mostra (o meno) il simbolo NEW nei contenuti.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWHOT','Mostra il simbolo HOT');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWHOT_DESC','Mostra (o meno) il simbolo HOT nei contenuti.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_ENABLEPLUGIN','Attiva plugin');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_ENABLEPLUGIN_DESC','Attiva il plugin. Non &egrave; la stessa cosa del parametro pubblica di Joomla. Quando il plugin viene disattivato, &egrave; possibile informare i visitatori. (Vedi parametri sottostanti)!');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWDISABLED','Mostra messaggio quando il plugin &egrave; disattivato');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWDISABLED_DESC','Quando il plugin viene disattivato, &egrave; possibile mostrare un messaggio al posto del download. Vedi i parametri sottostanti.<br \><b>No</b>: Non viene mostrato alcunch&eacute;.<br \><b>Layout di Default</b>: Mostra un messaggio usando il layout di default (vedi sopra).<br \><b>Layout Offline</b>: Mostra un messaggio usando il layout offline (vedi sotto).');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_DOWNLOADTITLE','Mostra il titolo originale del download');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_DOWNLOADTITLE_DESC','Si: usa il titolo originale dell\'elemento in download (ed il suo simbolo) nel messaggio offline.  No: rimpiazza il titolo del download con il contenuto del campo "Titolo offline" pi&ugrave; sotto.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINETITLE','Titolo offline');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINETITLE_DESC','Titolo da mostrare quando il plugin viene disattivato (dipende dalle opzioni soprastanti).');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINEDESC','Descrizione offline');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINEDESC_DESC','Quando il plugin viene disattivato, questa descrizione sar&agrave; mostrata al posto della descrizione originale.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT','Layout Offline (quando il plugin &egrave; disattivato)');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT_DESC','Questo layout pu&ograve; essere usato per mostrare messaggi offline quando il plugin &egrave; disattivato.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT_OPT1','No');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT_OPT2','Layout di default');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT_OPT3','Layout Offline');
DEFINE('_JLIST_FRONTEND_SETTINGS_FILEPLUGIN_OFFLINE_FILETITLE','I download sono disabilitati.');
DEFINE('_JLIST_FRONTEND_SETTINGS_FILEPLUGIN_DESCRIPTION','Se viene permesso ugualmente il download, contattare il webmaster.');
DEFINE('_JLIST_FRONTEND_SETTINGS_FILEPLUGIN_FILEUNKNOWN','Impossibile trovare il download! ID=<b>{fileid}</b>');
DEFINE('_JLIST_FRONTEND_SETTINGS_FILEPLUGIN_LAYOUTUNKNOWN','Impossibile trovare il layout <b>{thelayout}</b>!');

// NEW OPTIONS FOR DEFAULT CAT ICON
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_CAT_FILE_NO_DEFAULT_PIC','Nessuna immagine selezionata!');
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_CAT_PIC_TITLE','Immagine di default per le Categorie:');
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_CAT_PIC_DESC','Qui pu&ograve; essere specificato un simbolo che viene assegnato automaticamente alle nuove categorie.');

// NEW OPTIONS FOR DEFAULT FILE ICON
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_FILE_PIC_TITLE','Immagine di default per i Download:');
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_FILE_PIC_DESC','Qui pu&ograve; essere specificato un simbolo che viene assegnato automaticamente ai nuovi download.');

// FOR MISSING NEW MINIPICS
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_PRICE','Prezzo');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_FILESIZE','Dimensione del file');

// FOR DATAFIELDS IN  DOWNLOAD DETAILVIEW
DEFINE('_JLIST_FE_DETAILS_CREATED_BY_TITLE','Creato da');
DEFINE('_JLIST_FE_DETAILS_MODIFIED_BY_TITLE','Modificato da');
DEFINE('_JLIST_FE_DETAILS_MODIFIED_DATE_TITLE','Modificato il');

// FOR EXTERN FILES -  USER INFO IF CHECKBOXES ACTIVE
// PLEASE USE NOT SPECIAL CHARS e.g. " ' & ...
DEFINE('_JLIST_FRONTEND_EXTERN_FILE_USER_INFO','Questo file deve essere scaricato separatamente, essendo ospitato su un sito esterno. Il file non pu&ograve; quindi essere incluso in un gruppo per il download.');
DEFINE('_JLIST_FRONTEND_EXTERN_FILE_USER_INFO','Questo file deve essere scaricato separatamente, essendo ospitato su un sito esterno. Il file non pu&ograve; quindi essere incluso in un gruppo per il download.');

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