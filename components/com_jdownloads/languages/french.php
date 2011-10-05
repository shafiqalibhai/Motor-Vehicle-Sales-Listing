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
// French translation for jDownloads by Marco Pelozzi 30.05.2008 updated: 25.07.2008
//
// Modified by Arno Betz for jDownloads - http://www.Joomlaaddons.de
// Q&T Team Achim Raji (aka cybergurk) - http://www.filmanleitungen.de
*/

(defined('_VALID_MOS') OR defined('_JEXEC')) or die('Restricted access');

// Components Infos
//-----------------------------------------------------------
// It is not allowed to change or delete this parameters !!!
DEFINE('_JLIST_PRODUCT','jDownloads');
DEFINE('_JLIST_VERSION','<br /><br />Veuillez signaler des erreurs dans le forum du support <a href="http://www.JoomlaAddons.de">www.JoomlaAddons.de</a>.');

DEFINE('_JLIST_PRODUCT_FOOTER','JDownloads');
DEFINE('_JLIST_VERSION_FOOTER','');

// end component infos
//-----------------------------------------------------------

// Installations data

DEFINE('_JLIST_INSTALL_0','Informations concernant l\'installation:');
DEFINE('_JLIST_INSTALL_1','Tous les fichiers de configuration existent dans la base de donn�es!');
DEFINE('_JLIST_INSTALL_2','Le fichier de configuration a �t� mis � jour.');
DEFINE('_JLIST_INSTALL_3','Tous les layouts existent dans la base de donn�es!.');
DEFINE('_JLIST_INSTALL_4','Layouts par d�faut cr��s dans la base de donn�es!');
DEFINE('_JLIST_INSTALL_5','Toutes les licences d�finies par d�faut existent dans la base de donn�es!');
DEFINE('_JLIST_INSTALL_6','Licences par d�faut cr��es dans la base de donn�es!');
DEFINE('_JLIST_INSTALL_7','Le r�pertoire de t�l�chargement /downloads existe et est accessible en �criture!');
DEFINE('_JLIST_INSTALL_8','Le r�pertoire de t�l�chargement /downloads existe mais n\'est PAS accessible en �criture. Veuillez changer les permissions CHMOD � 0777 pour le r�pertoire de t�l�chargement sinon jDownloads ne fonctionnera pas!');
DEFINE('_JLIST_INSTALL_9','Le r�pertoire de t�l�chargement /downloads a �t� cr�� avec permissions CHMOD 0777.');
DEFINE('_JLIST_INSTALL_10','Erreur: le r�pertoire de t�l�chargement /downloads n\'a pas pu �tre cr��!<br />Veuillez le cr�er manuellement vous-m�me via FTP et d�finir les droits CHMOD � 0777 pour le r�pertoire de t�l�chargement, sinon jDownloads ne fonctionnera pas!');
DEFINE('_JLIST_INSTALL_11','Le r�pertoire temporaire /downloads/tempzipfiles pour les fichiers .zip existe et est accessible en �criture!');
DEFINE('_JLIST_INSTALL_12','Le r�pertoire temporaire /downloads/tempzipfiles existe mais n\'est pas accessible en �criture. Veuillez changer les permissions CHMOD � 0777 pour le r�pertoire temp, sinon jDownloads ne fonctionnera pas!');
DEFINE('_JLIST_INSTALL_13','R�pertoire /downloads/tempzipfiles cr�� et accessible en �criture CHMOD 0777 - OK.');
DEFINE('_JLIST_INSTALL_14','Erreur: le r�pertoire .zip /downloads/tempzipfiles n\'a pas pu �tre cr��!<br />Veuillez le cr�er manuellement vous-m�me via FTP et d�finir les droits CHMOD � 0777 pour le r�pertoire .zip.<br />Sinon jDownloads ne fonctionnera pas!');
DEFINE('_JLIST_INSTALL_15','Installation r�ussie!');
DEFINE('_JLIST_INSTALL_16','D�marrer jDownloads!');

DEFINE('_JLIST_INSTALL_DB_TIP','Info: si vous d�sinstallez jDownloads, les d�finitions dans la base de donn�es ne sont pas supprim�es. Ainsi, si vous r�installez ult�rieurement une nouvelle version, les donn�es ne seront pas perdues.');
DEFINE('_JLIST_INSTALL_TITLE_FOR_DEFAULT_LAYOUTS','Standard');

//FRONTEND

DEFINE('_JLIST_FILE_NOT_FOUND','Le fichier requis n\'a pas �t� trouv�. Veuillez informer le responsable du site web.');
DEFINE('_JLIST_LINKTEXT_VIEW_FILE_TYPES','D�marrage t�l�chargement<br />(affichage dans une nouvelle fen�tre du browser)');
DEFINE('_JLIST_LINKTEXT_ZIP','D�marrer le t�l�chargement');
DEFINE('_JLIST_LINKTEXT_DOWNLOAD_URL','T�l�chargement');
DEFINE('_JLIST_LINKTEXT_HOME','Accueil');
DEFINE('_JLIST_DEL_ZIP_ADMIN_INFO','<br />Information: une erreur est survenue pendant la suppression des fichiers zip temporaires ou le fichier n\'existait pas!');
DEFINE('_JLIST_FORM_BUTTON_TEXT','Suite');
DEFINE('_JLIST_EMPTY_CAT_TEXT','Cette cat�gorie ne contient aucun fichier.<br /><br />');
DEFINE('_JLIST_MAIL_DOWNLOADER_NAME_VISITOR','Visiteur');
DEFINE('_JLIST_MAIL_DOWNLOADER_GROUP','Invit�');
DEFINE('_JLIST_MAILSEND_ERROR','Une erreur est survenue durant l\'envoi de cet E-Mail!');
DEFINE('_JLIST_FRONTEND_COUNT_SUBCATS','Sous-cat�gories:');
DEFINE('_JLIST_FRONTEND_COUNT_FILES','Fichiers:');
DEFINE('_JLIST_FRONTEND_HOMEPAGE','Accueil');
DEFINE('_JLIST_FRONTEND_BACK_BUTTON','Retour');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_DATE','Date');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_LICENCE','Licence');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_AUTHOR','Auteur');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_WEBSITE','Page web');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_SYSTEM','Syst�me');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_LANGUAGE','Langue');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_DOWNLOAD','T�l�chargement');
DEFINE('_JLIST_FRONTEND_VERSION_TITLE','v.');       // e.eg. v.1.2.3
DEFINE('_JLIST_FRONTEND_CAT_ACCESS_REGGED','Veuillez SVP vous inscrire ou vous identifier pour t�l�charger les fichiers de cette cat�gorie.<br /><br />');

//BACKEND TOOLBAR
DEFINE('_JLIST_BACKEND_COMPONENT_NAME','JDownloads');
DEFINE('_JLIST_BACKEND_TOOLBAR_MAIN','Menu');
DEFINE('_JLIST_BACKEND_TOOLBAR_EDIT','Editer');
DEFINE('_JLIST_BACKEND_TOOLBAR_REMOVE','Supprimer');
DEFINE('_JLIST_BACKEND_TOOLBAR_CLOSE','Fermer');
DEFINE('_JLIST_BACKEND_TOOLBAR_SUBMAIN','Layouts');

//BACKEND CPANEL
DEFINE('_JLIST_BACKEND_CPANEL_FILES','Fichiers');
DEFINE('_JLIST_BACKEND_CPANEL_CATEGORIES','Cat�gories');
DEFINE('_JLIST_BACKEND_CPANEL_LICENSE','Licenses');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES','Administration Layouts');
DEFINE('_JLIST_BACKEND_CPANEL_BACKUP','Cr�er une sauvegarde');
DEFINE('_JLIST_BACKEND_CPANEL_SETTINGS','Configuration');
DEFINE('_JLIST_BACKEND_CPANEL_RESTORE','Restaurer une sauvegarde');
DEFINE('_JLIST_BACKEND_CPANEL_INFO','Conditions d\'utilisation');
DEFINE('_JLIST_BACKEND_CPANEL_SUPPORT','Support');

// RESULTS FROM AUTOCHECKFILES OPTION
DEFINE('_JLIST_BACKEND_AUTOCHECK_TITLE','Informations concernant la v�rification de la zone de t�l�chargement:');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NEW_FILES','Nouveaux fichier(s) trouv�(s) et ajout�(s) dans la zone de t�l�chargement!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_MISSING_FILES','Fichier(s) non trouv�(s). Les t�l�chargements correspontants on �t� modifi�s en non-public !');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NO_NEW_FILES','Pas de nouveau(x) fichier(s) trouv�(s)!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NO_MISSING_FILES','Tous les fichiers existent!');

DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_STATUS','Etat');
DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_2','Version');
DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_3','Log');


// STATUS
DEFINE('_JLIST_BACKEND_PANEL_STATUS_OFFLINE_HEADER','Etat de la zone de t�l�chargement');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_TITEL','<font color="#990000"><b><big>Etat la zone de t�l�chargement:</big></b></font>');

DEFINE('_JLIST_BACKEND_PANEL_STATUS_DESC_ONLINE','Le mode de maintenance n\'est pas activ�. la zone de t�l�chargement est accessible par les visiteurs.');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_ONLINE','<font color="green"><b><big> ONLINE!</big></b></font>');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_OFFLINE','<font color="red"><b><big> OFFLINE!</big></b></font>');

// OFFLINE
DEFINE('_JLIST_BACKEND_OFFLINE_OPTION_TITLE','Activer maintenance?');
DEFINE('_JLIST_BACKEND_OFFLINE_OPTION_DESC','Cette option met hors ligne l\'affichage de la zone de t�l�chargement lors de la maintenance. Les visiteurs verront uniquement les textes de base et seuls les visiteurs identifi�s comme auteur voient la zone de t�l�chargement.');
DEFINE('_JLIST_BACKEND_OFFLINE_MESSAGE_TITLE','Note pour les visiteurs');
DEFINE('_JLIST_BACKEND_OFFLINE_MESSAGE_DEFAULT','<table width="70%" align="center" cellspacing="0" cellpadding="20" border="1"><tr><td align="center"><h3>Actuellement, jDownloads est en maintenance<br /><br />Veuillez ressayer dans quelques minutes.</h3><br /><img src="components/com_jdownloads/images/offline.png" /></td></tr></table>');
DEFINE('_JLIST_BACKEND_OFFLINE_MESSAGE_DESC','Texte pr�sent� au visiteur lorsque la zone de t�l�chargement est en cours de maintenance.');
DEFINE('_JLIST_BACKEND_OFFLINE_ADMIN_MESSAGE_TEXT','<p align="center"><b><big>Les t�l�chargements sont OFFLINE!</big></b></p>'); // changed in 1.3 RC2

//BACKEND SETTINGS
DEFINE('_JLIST_BACKEND_SETTINGS','Configuration');
DEFINE('_JLIST_BACKEND_SETTINGS_SAVED','Configuration sauvegard�e');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_HEAD','Configuration E-Mail pour t�l�chargements');  // changed in 1.3 rc2
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_FILES_HEAD','Configuration T�l�chargements');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_FRONTEND_HEAD','Configuration Frontend');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_BACKEND_HEAD','Configuration Backend');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_SECURITY_HEAD','Param�tres de S�curit�');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_IMAGES_HEAD','Param�tres Images/Ic�nes');

DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_DOWNLOADS','T�l�chargem.');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_FRONTEND','Frontend');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_BACKEND','Backend');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_IMAGES','Images');   // changed in 1.3 RC2
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_SECURITY','S�curit�');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_EMAIL','E-Mail');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_SONSTIGE','Autres');

DEFINE('_JLIST_BACKEND_SETTINGS_DATETIME','Format Date-Heure');
DEFINE('_JLIST_BACKEND_SETTINGS_DATETIME_DESC','Informations relatives � la syntaxe du format date-heure: <a href="http://www.php.net/manual/fr/function.date.php" target="_blank">www.php.net</a>');

DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIR','R�pertoire de t�l�chargement');
DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIR_DESC','R�pertoire principal avec ses sous-r�pertoires pour le stockage des fichiers. <b>Ce</b> r�pertoire et <b>tous</b> les sous-r�pertoires doivent �tre accessibles en �criture!');

DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIRTEMP','R�pertoire temporaire de t�l�chargement');
DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIRTEMP_DESC','Ce r�pertoire doit exister et �tre accessible en �criture! Il contient les fichiers .zip cr��s temporairement pendant les t�l�chargements (ils sont automatiquement supprim�s en fin de t�l�chargement).');

DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_1','Standard');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_2','Nouveaux en premier');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_3','Nouveaux en dernier');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_4','Nom ascendant');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_5','Nom descendant');

// E-Mail config
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_OPTION_DESC','Si ce param�tre est activ�, un E-Mail est envoy� � l\'adresse sp�cifi�e ci-dessous, apr�s chaque t�l�chargement.');
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_OPTION','Activer E-Mail?');

DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_DESC','Adresse E-Mail � utiliser pour envoi des informations de t�l�chargement.');
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO','Adresse E-Mail');

DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_HTML_DESC','Si cette option est activ�e, les E-Mails sont envoy�s en format HTML; si non, en texte normal.');
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_HTML','Utiliser format HTML?');

DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_BETREFF_DESC','Texte � utiliser comme "Sujet" de l\'E-Mail.');
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_BETREFF','Sujet');


// View Frontend Config settings
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_VIEW_HEAD','Options d\'affichage du composant Frontend');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_COMPO_TEXT','Description du composant');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_COMPO_TEXT_DESC','Texte affich� <b>entre</b> le titre du composant et ses cat�gories. Le titre du composant est automatiquement d�riv� du nom de l\'option menu.<br /><br />Des classes CSS, du code HTML et un texte libre peuvent �tre inclus.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CHECKBOX_TEXT','Texte case � cocher');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CHECKBOX_TEXT_DESC','Texte affich� pr�s de la premi�re case � cocher, pr�sente sur le dessus d\'une liste.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SORTFILESORDER_TEXT','Ordre de tri');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SORTFILESORDER_DESC','Ordre de tri des fichiers dans le Frontend. Selectionner l\'option  "Standard" pour utiliser le crit�re de tri par d�faut du Backend.');

// View images seetings
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SHOW_MINIPICS','Afficher les ic�nes d\'information?');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SHOW_MINIPICS_DESC','Si activ�, une ic�ne est affich�e pr�s de la liste des informations d\'un fichier (Licence, Auteur, etc.). Si d�sactiv�, il est conseill� d\'ins�rer des textes d\'information dans le layout des fichiers.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_MINIPICS_SIZE','Taille en pixels des ic�nes d\'information');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_MINIPICS_SIZE_DESC','Taille d\'affichage pour les ic�nes d\'information. Standard: 20');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CATPICS_SIZE','Taille en pixels des ic�nes associ�es aux cat�gories');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CATPICS_SIZE_DESC','Taille d\'affichage pour les ic�nes des cat�gories. Vous pouvez utiliser vos propres ic�nes, ceux-ci doivent �tre transf�r�es dans le sous-r�pertoire: /catimages. Standard: 48');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FILEPICS_SIZE','Taille en pixels des ic�nes associ�es aux fichiers');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FILEPICS_SIZE_DESC','Taille d\'affichage pour les ic�nes des fichier(s). Vous pouvez utiliser vos propres ic�nes, ceux-ci doivent �tre transf�r�es dans le sous-r�pertoire: /fileimages. Standard: 32');

// View backend security settings
DEFINE('_JLIST_BACKEND_SETTINGS_MAIL_SECURITY_DESC','Si oui, les adresses E-Mail ne seront pas affich�es en clair pour �viter aux Spambots de les r�cup�rer. Les visiteurs qui n\'ont pas Javascript activ� ne pourront pas afficher les liens. Conseill�: Oui.');
DEFINE('_JLIST_BACKEND_SETTINGS_MAIL_SECURITY_TITEL','Camoufler les adresses E-Mail:');

// View backend Config settings
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_LAYOUTS','Editeur WYSIWYG pour les layouts');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_LAYOUTS_DESC','Si activ�, l\'�diteur WYSIWIG s�lectionn� sera utilis� pour la modification des layouts. Sinon, un simple champ de texte est affich�. Conseill�: Non.');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_FILES','Editeur WYSIWYG pour les t�l�chargements');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_FILES_DESC','Si activ�, l\'�diteur WYSIWIG s�lectionn� sera utilis� pour la modification des t�l�chargements. Sinon, un simple champ de texte est affich�. Conseill�: Non.');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_CATS','Editeur WYSIWYG pour les cat�gories');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_CATS_DESC','Si activ�, l\'�diteur WYSIWIG s�lectionn� sera utilis� pour la modification des cat�gories. Sinon, un simple champ de texte est affich�. Conseill�: Non.');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_LICENSES','Editeur WYSIWYG pour les licences');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_LICENSES_DESC','Si activ�, l\'�diteur WYSIWIG s�lectionn� sera utilis� pour la modification des licences. Sinon, un simple champ de texte est affich�. Conseill�: Non.');

DEFINE('_JLIST_BACKEND_SETTINGS_FILE_SYSTEM_LIST','Liste des options pour le champ "Syst�me" des t�l�chargements');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_SYSTEM_LIST_DESC','Vous pouvez d�finir ici les options de ce champ. Un s�parateur "," est n�cessaire entre chaque option. <br /></br><b>Remarque importante:</b> Si des t�l�chargements sont d�j� pr�sents dans la zone de t�l�chargement, soyez attentif car chaque modification est r�percut�e sur les t�l�chargements existants. Exemple: les t�l�chargements sauvegard�es avec syst�me ="Joomla 1.5" seront associ�s � une autre valeur, par exemple "Windows Vista". Si vous voulez ajouter des nouvelles valeurs, ajoutez les en fin de liste.');

DEFINE('_JLIST_BACKEND_SETTINGS_FILE_LANGUAGE_LIST','Liste des options pour le champ "Langue" des t�l�chargements');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_LANGUAGE_LIST_DESC','Vous pouvez d�finir ici les options de ce champ. Un s�parateur "," est n�cessaire entre chaque option. <br /></br><b>Remarque importante:</b> Si des t�l�chargements sont d�j� pr�sents dans la zone de t�l�chargement, soyez attentif car chaque modification est r�percut�e sur les t�l�chargements existants. Exemple: les t�l�chargements sauvegard�es avec langue ="Fran�ais" seront associ�s � une autre valeur, par exemple "Anglais". Si vous voulez ajouter des nouvelles valeurs, ajoutez les en fin de liste.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_ZIPFILE_PREFIX_TEXT','Nom par d�faut pour fichiers ZIP');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_ZIPFILE_PREFIX_DESC','Si plusieurs fichiers sont s�lectionn�s simultan�ment pour le t�l�chargement, ces fichiers sont automatiquement archiv�s dans un fichier ZIP temporaire et pr�sent�s � l\'utilisateur comme un fichier unique � t�l�charger. Le nom du fichier ZIP est cr�� sur base du pr�fixe sp�cifi� ici, et associ� � un nombre al�atoire.');

// Templates Config Backend
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_HEAD','<b>Les Layouts d�terminent la mani�re dont le contenu est affich� dans le Frontend.</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_HEAD_INFO','<br />Plusieurs layouts standards sont automatiquement inclus lors de l\'installation. Ils peuvent �tre adapt�s selon vos d�sirs et de nouveaux layouts peuvent �tre cr��s. Une option de configuration permet le choix entre l\'editeur WYSIWIG ou un champ de texte simple lors de leur modification .<br /><br />Dans le cas ou le code HTML g�n�r� pour le frontend ne fonctionnerait pas correctement apr�s modification des <b>layouts "d�faut"</b>, le <b>contenu d\'origine</b> (c\'est � dire le contenu juste apr�s l\'installation) peut �tre restaur� � tout moment. Pour ce faire, supprimez<b> tous les textes</b> dans les champs respectifs du layout par d�faut et s�lectionnez l\'option <b>Sauvgarder</b>. Le formulaire sera sauvegard� avec son contenu d\'origine. <b>Attention:</b> les changements d�j� effectu�s seront perdus.<br /><br />Remarque: plusieurs balises sont utilis�es dans les layouts (par exemple <font color=darkred>{files}</font>). Les balises sont automatiquement remplac�es par leurs valeurs r�elles lors de la g�n�ration de la page web.<br />');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS','Layout: Cat�gories');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_DESC','Ce layout d�finit comment les <b>cat�gories</b> sont affich�es dans le frontend. <br />Si vous avez activ� l\'option <b>Affichage page d\'accueil avec sommaire des cat�gories</b> dans les options de configuration globales du composant, les balises {files} et {checkbox_top} sont seulement utilis�es pour l\'affichage simplifi�e des cat�gories.<br /><br />Les balises <font color=red>{files} {form_hidden} {form_button} {checkbox_top}</font> <font color=red>ne doivent pas</font> �tre supprim�es du code! Supprimez uniquement la balise {checkbox_top} du code si la balise {url_download} est utilis�e dans le code du layout. La balise {files} est automatiquement remplac�e par les donn�es associ�es au layout fichier. <br /><br />Les balises disponibles sont:<br />{cat_title} {cat_description} {files} {checkbox_top} {sum_files_cat}');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_INFO_TITLE','<b>Informations relatives au Layout "Cat�gorie":</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_INFO_TEXT','<p>Pr�sentation graphique de l\'affichage dans le frontend r�sultant pour description de la cat�gorie. La bordure rouge indique le contenu que vous pouvez changer � partir des d�finitions layout ci-dessus. </p>');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES','Layout: Fichiers');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DESC','Ce layout d�finit comment les <b>fichiers</b> sont affich�s dans le frontend en dessous de la description de la cat�gorie.<br /><br />Balises disponibles:<br />{checkbox_list} {cat_id} {file_id} {file_title} {release} {pic_is_new} {pic_is_hot} {pic_is_updated} {thumbnail} {description} {link_to_details} {file_pic} {price_title} {price_value} {license_title} {license_text} {language_title} {language_text} {filesize_title} {filesize_value} {system_title} {system_text} {author_title} {author_text} {author_url_title} {author_url_text} {created_date_title} {created_date_value} {hits_title} {hits_value} {created_by_title} {created_by_value} {modified_by_title} {modified_by_value} {modified_date_title} {modified_date_value}'); // changed in 1.4 beta (2)
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_INFO_TITLE','<b>Informations relatives au Layout "Fichiers":</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_INFO_TEXT','<p>Exemple d\'affichage de la liste par le frontend. Vous pouvez modifier les �l�ments visualis�s dans la bo�te avec une bordure rouge.</p>');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL','Layout: Sommaire / D�marrage t�l�chargement');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL_DESC','Ce layout d�finit comment le <b>r�sum�</b> des fichiers � t�l�charg�r est affich� par le frontend. Une liste des fichiers s�lectionn�s pour le t�l�chargement est pr�sent�e � l\'utilisateur avant le t�l�chargement.<br />Avec ce layout, vous pouvez modier la pr�sentation de la page "r�sum�". Des classes CSS, du code HTML ainsi que du texte libre peuvent y �tre inclus.<br /><br />La balise <font color=red>{download_liste}</font> ne devrait <font color=red>PAS</font> �tre supprim�e de ce code!<br /><br />Les balises disponibles sont:<br />{summary_pic} {title_text} {download_liste} {license_note} {download_link} {external_download_info}'); // changed in 1.4 beta (2)
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL_INFO_TITLE','<b>Informations relatives au Layout "R�sum�"</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL_INFO_TEXT','<p>Exemple d\'affichage du r�sum� par le frontend. La bordure rouge indique la zone que vous pouvez modifier de par ce layout. </p>');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_MAIL','Layout: E-Mail');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_MAIL_DESC','Ce layout vous permet de formater les<b>E-Mails</b> qui (si l\'option dans ls configuration est activ�e) seront envoy�s � l\'adresse E-Mail sp�cifi�e (dans la configuration) lors de chaque t�l�chargement. Du code HTML ainsi que du texte libre peuvent y �tre inclus.<br /><br />Balises disponibles:<br /> {file_list} {ip_address} {user_name} {user_group}');

//BACKEND CATSLIST
DEFINE('_JLIST_BACKEND_CATSLIST_TITLE_HEAD','Cat�gories');
DEFINE('_JLIST_BACKEND_CATSLIST_SEARCH','Rechercher');
DEFINE('_JLIST_BACKEND_CATSLIST_SEARCH_LIMIT','Limite');

DEFINE('_JLIST_BACKEND_CATSLIST_TITLE','Cat�gories');
DEFINE('_JLIST_BACKEND_CATSLIST_PIC','Symbole - Ic�ne');
DEFINE('_JLIST_BACKEND_CATSLIST_PUBLISHED','Publi�');
DEFINE('_JLIST_BACKEND_CATSLIST_LINK_TEXT','Lien');
DEFINE('_JLIST_BACKEND_CATSLIST_LINK','Lien');
DEFINE('_JLIST_BACKEND_CATSLIST_CATID','ID-Cat�gorie');
DEFINE('_JLIST_BACKEND_CATSLIST_READ','Lire');
DEFINE('_JLIST_BACKEND_CATSLIST_DOWNLOAD','T�l�charger');
DEFINE('_JLIST_BACKEND_CATSLIST_ORDERING','Trier');
DEFINE('_JLIST_BACKEND_CATSLIST_DEL',' Cat�gorie(s) supprim�e(s).');

// access controll info
DEFINE('_JLIST_BACKEND_CATSLIST_ACCESS_ALL','Tous');
DEFINE('_JLIST_BACKEND_CATSLIST_ACCESS_REGGED','Enregistr�s');
DEFINE('_JLIST_BACKEND_CATSLIST_ACCESS_ADMINS','Sp�ciaux');

//BACKEND CATSEDIT
DEFINE('_JLIST_BACKEND_CATSEDIT_TITLE','Editer cat�gorie');
DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_TITLE','Titre de la cat�gorie obligatiore!');
DEFINE('_JLIST_BACKEND_CATSEDIT_SUC_PUBL',' Cat�gorie(s) publi�e(s).');
DEFINE('_JLIST_BACKEND_CATSEDIT_SUC_UNPUBL',' Cat�gorie(s) d�publi�e(s).');
DEFINE('_JLIST_BACKEND_CATSEDIT_SAVE_ERROR_DIR','Erreur: Le r�pertoire ne pouvait pas �tre renomm�!');
DEFINE('_JLIST_BACKEND_CATSEDIT_EDIT','Editer Cat�gorie');
DEFINE('_JLIST_BACKEND_CATSEDIT_ADD','Ajouter Cat�gorie');
DEFINE('_JLIST_BACKEND_CATS_SAVEORDER','Nouveau tri sauvegard�');
DEFINE('_JLIST_BACKEND_CATS_USED','Cette cat�gorie est en cours de modification par un autre administrateur.');
DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_CAT_COPY','Erreur lors de la copie des r�pertoires de la cat�gorie!');

DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_DESCRIPTION','Description de la cat�gorie');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_PIC_TEXT','S�lection de l\'ic�ne de la cat�gorie');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_PIC_PREVIEW','Pr�visualisation ic�ne');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_PIC_DESC','Le symbole (ic�ne) s�lectionn� peut �tre affich� avec la balise {cat_pic} dans le layout Cat�gorie.');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_TITLE','D�finition des permissions');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_DESC','D�finit les permissions de t�l�chargement pour la Cat�gorie s�lectionn�e. Si vous s�lectionnez "Sp�ciaux", les membres avec le statut Auteur pourront lire et t�l�charger.');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_1','Lecture et t�l�chargement autoris�s pour tous les visiteurs (Public)');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_2','Lecture pour tous, t�l�chargements autoris�s pour utilisateurs enregistr�s');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_3','Seuls les membres enregistr�s peuvent lire et t�l�charger');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_4','Seuls les membres sp�ciaux peuvent lire et t�l�charger');

//BACKEND FILESLIST
DEFINE('_JLIST_BACKEND_FILESLIST_TITLE','T�l�chargements');
DEFINE('_JLIST_BACKEND_FILESLIST_SEARCH','Recherche');
DEFINE('_JLIST_BACKEND_FILESLIST_SEARCH_LIMIT','Limite');
DEFINE('_JLIST_BACKEND_FILESLIST_CATS','Toutes les Cat�gories');
DEFINE('_JLIST_BACKEND_FILESLIST_NOCATS','Aucune Cat�gorie');
DEFINE('_JLIST_BACKEND_FILESLIST_FILE','T�l�chargements');
DEFINE('_JLIST_BACKEND_FILESLIST_HITS','Nombre de t�l�chargements');
DEFINE('_JLIST_BACKEND_FILESLIST_CAT','Cat�gorie');
DEFINE('_JLIST_BACKEND_FILESLIST_RELEASE','Version');
DEFINE('_JLIST_BACKEND_FILESLIST_DESCRIPTION','Description');
DEFINE('_JLIST_BACKEND_FILESLIST_DADDED','Date');
DEFINE('_JLIST_BACKEND_FILESLIST_FILENAME','Nom fichier');
DEFINE('_JLIST_BACKEND_FILESLIST_AUTHOR','Auteur');
DEFINE('_JLIST_BACKEND_FILESLIST_PUBLISHED','Publi�');
DEFINE('_JLIST_BACKEND_FILESLIST_ORDERING','Ordre');
DEFINE('_JLIST_BACKEND_FILESLIST_DEL',' T�l�chargement(s) supprim�(s)');
DEFINE('_JLIST_BACKEND_FILES_SAVEORDER','Nouveu tri sauvegard�');
DEFINE('_JLIST_BACKEND_FILES_USED','Ce t�l�chargement est en cous de modification par un autre administrateur.');

//BACKEND FILESEDIT
DEFINE('_JLIST_BACKEND_FILESEDIT_TABTITLE_1','Param�tres');
DEFINE('_JLIST_BACKEND_FILESEDIT_TABTITLE_2','Options');
DEFINE('_JLIST_BACKEND_FILESEDIT_TABTITLE_3','Fichier');

DEFINE('_JLIST_BACKEND_FILESEDIT_TITLE','Modifier T�l�chargement');
DEFINE('_JLIST_BACKEND_FILESEDIT_SENT_IN_FROM','Ce fichier a �t� soumis par: ');
DEFINE('_JLIST_BACKEND_FILESEDIT_SAVE','T�l�chargement sauvegard�.');
DEFINE('_JLIST_BACKEND_FILESEDIT_EDIT','Modifier T�l�chargement');
DEFINE('_JLIST_BACKEND_FILESEDIT_ADD','Ajouter T�l�chargement');
//DEFINE('D_JLIST_BACKEND_FILESEDIT_FILE_LIST_DESC','Hier kann eine Datei f&uuml;r diesen Download ausgew&auml;hlt werden, die sich bereits auf dem Server befindet. Es werden nur die Dateien des Kategorie-Verzeichnisses angezeigt, welches der auf der Seite "Grunddaten" markierten Kategorie entspricht.');
DEFINE('_JLIST_BACKEND_FILESEDIT_ROOT_DIR_TITLE','R�pertoire RACINE de t�l�chargement');
DEFINE('_JLIST_BACKEND_FILESEDIT_UPLOAD_DIR_LIST_INFO_1','Tous les sous r�pertoires sont accessibles en �criture!');
DEFINE('_JLIST_BACKEND_FILESEDIT_UPLOAD_DIR_LIST_INFO_2','Les sous r�pertoires ne sont <b>PAS</b> accessibles en �criture! V�rifiez les permissions CHMOD 0777 sur le serveur');
DEFINE('_JLIST_BACKEND_FILESEDIT_CHECK_PERMISSIONS','Les fichiers ne peuvent �tre transf�r�s. V�rifiez les permissions CHMOD 0777 sur le serveur');

// language
DEFINE('_JLIST_BACKEND_FILESEDIT_LANGUAGE','Langue');
DEFINE('_JLIST_BACKEND_FILESEDIT_LANGUAGE_DEFAULT_LIST','S�lectionner:, Fran�ais, Anglais, Allemand, Italien, Espagnol, Portugais, Russe, Polonais, Holandais, Voir description');
// system
DEFINE('_JLIST_BACKEND_FILESEDIT_SYSTEM','Syst�me');
DEFINE('_JLIST_BACKEND_FILESEDIT_SYSTEM_DEFAULT_LIST','S�lectionner:, Joomla 1.0, Joomla 1.5, Windows XP, Windows Vista, Linux, MacIntosh');

DEFINE('_JLIST_BACKEND_FILESEDIT_LICENSES_LIST','Selectionnez la License');
DEFINE('_JLIST_BACKEND_FILESEDIT_REMOVE_OK','Fichier supprim�.');
DEFINE('_JLIST_BACKEND_FILESEDIT_SUC_PUBL',' T�l�chargement(s) publi�(s).');
DEFINE('_JLIST_BACKEND_FILESEDIT_SUC_UNPUBL',' T�l�chargement(s) d�publi�(s).');

DEFINE('_JLIST_BACKEND_FILESEDIT_REQUIRES_INFO','Les champs marqu�s <b><font color=red>*</font></b> doivent �tre imp�rativement remplis!');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_TITLE','Titre <b><font color=red>*</font></b>');
DEFINE('_JLIST_BACKEND_FILESEDIT_DESCRIPTION','Description');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FPIC_TEXT','Selectionnez une ic�ne pour le Fichier');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FPIC_PREVIEW','Pr�visualisation');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FPIC_DESC','L\'ic�ne s�lectionn�e ne peut �tre affich� en superposition sur une balise.');

DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_CAT','Attribuer une cat�gorie <b><font color=red>*</font></b>');

DEFINE('_JLIST_BACKEND_FILESEDIT_LICENSE','Licence');
DEFINE('_JLIST_BACKEND_FILESEDIT_RELEASE','Version');
DEFINE('_JLIST_BACKEND_FILESEDIT_SIZE','Taille');
DEFINE('_JLIST_BACKEND_FILESEDIT_SIZE_DESC','Si non d�fini, la taille sera obtenue automatiquement si possible.');
DEFINE('_JLIST_BACKEND_FILESEDIT_DADDED','Date et heure');
DEFINE('_JLIST_BACKEND_FILESEDIT_DADDED_DESC','Lorsque ce champ est omis, la date courante est automatiquement utilis�e');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE','S�lectionnez le fichier � t�l�charger');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_DESC','Transf�rer un fichier vers le serveur. Il sera utilis� pour ce t�l�chargement.');

DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_INFO','Fichier actuellement assign�:');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_ADD_FROM_SERVER','Fichier actuellement assign�:');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_ADD_FROM_SERVER_NO','Aucun fichier assign� actuellement!');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_ADD_FROM_SERVER_LIST','Selectionner fichier');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_REMOVE','<b>Supprimer le fichier courant assign� du serveur</b>');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_HOME','URL site web (sans pr�fixe http://)');
DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR','Nom de l\'auteur');
DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR_URL','URL auteur ou adresse E-Mail');
DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR_URL_DESC','Lorsque vous indiquez une adresse ici, le nom de l\'auteur est repr�sent� comme lien vers une page web ou comme adresse mailto:. Les adresses E-Mail sont camoufl�es si l\'option correspondante est activ�e.');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD','R�pertoire RACINE de t�l�chargement');

DEFINE('_JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD_WRITABLE','Statut: <font color=green><strong>accessible en ECRITURE</strong></font>');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD_NOTWRITABLE','Statut: <font color=red><strong>NON accessible en ECRITURE</strong></font>');

DEFINE('_JLIST_BACKEND_FILESEDIT_URL_TEMP_WRITABLE','Statut: <font color=green><strong>accessible en ECRITURE</strong></font>');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_TEMP_NOTWRITABLE','Statut: <font color=red><strong>NON accessible en ECRITURE</strong></font>');


//BACKEND LICENSE LIST
DEFINE('_JLIST_BACKEND_LICLIST_TITLE_HEAD','Licences');
DEFINE('_JLIST_BACKEND_LICLIST_TITLE','Nom de la Licence');
DEFINE('_JLIST_BACKEND_LICLIST_LINK','Lien');
DEFINE('_JLIST_BACKEND_LICLIST_DEL',' Licence(s) supprim�e(s)');

//Backend LICENSE EDIT
DEFINE('_JLIST_BACKEND_LICEDIT_TITLE','Modifier Licence');
DEFINE('_JLIST_BACKEND_LICEDIT_ERROR_TITLE','Une Licence doit avoir un nom.');
DEFINE('_JLIST_BACKEND_LICEDIT_SAVE','Licence sauvegard�e.');
DEFINE('_JLIST_BACKEND_LICEDIT_TEXT','Nom de Licence');
DEFINE('_JLIST_BACKEND_LICEDIT_EDIT','Modifier Licence');
DEFINE('_JLIST_BACKEND_LICEDIT_ADD','Ajout Licence');
DEFINE('_JLIST_BACKEND_LIC_USED','Cette Licence est en cours de modification par un autre administrateur.');
DEFINE('_JLIST_BACKEND_LICEDIT_LIC_TITLE','Nom de Licence');
DEFINE('_JLIST_BACKEND_LICEDIT_LIC_URL','Lien vers Licence');
DEFINE('_JLIST_BACKEND_LICEDIT_LIC_DESCRIPTION','Description Licence');

//BACKEND TEMPLATES SUBMENU
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_NAME','Administration Layouts');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_CATS','Cat�gories');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_FILES','Fichiers');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_SUMMARY','R�sum�s');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_EMAIL','E-Mails');
DEFINE('_JLIST_BACKEND_TEMPPANEL_TABTEXT_INFO','Informations');

// Backend TEMPLATES TEMPLATES TITLES
DEFINE('_JLIST_BACKEND_TEMPLIST_CATTITLE_HEAD','Layouts Cat�gories');
DEFINE('_JLIST_BACKEND_TEMPLIST_FILESTITLE_HEAD','Layouts Fichiers');
DEFINE('_JLIST_BACKEND_TEMPLIST_SUMTITLE_HEAD','Layouts R�sum�s');
DEFINE('_JLIST_BACKEND_TEMPLIST_MAILTITLE_HEAD','Layouts E-Mails');

//BACKEND TEMPLATES LIST
DEFINE('_JLIST_BACKEND_TEMPLIST_MENU_TEXT_ACTIVE','Activer');
DEFINE('_JLIST_BACKEND_TEMPLIST_TITLE','Nom du Layout');
DEFINE('_JLIST_BACKEND_TEMPLIST_TYP','Type Layout');
DEFINE('_JLIST_BACKEND_TEMPLIST_ACTIVE','Actif');
DEFINE('_JLIST_BACKEND_TEMPLIST_LOCKED','Layout par d�faut');
DEFINE('_JLIST_BACKEND_TEMPLIST_LOCKED_DESC','<b>Remarque:</b> Les layouts par d�faut font partie int�grante de jDownloads et ne peuvent pas �tre supprim�s. <br />Lors de la cr�ation d\'un nouveau Layout, les textes associ�s au layout par d�faut sont utilis�s comme d�fauts pour le nouveau.');
DEFINE('_JLIST_BACKEND_TEMPLIST_DEL',' Layout(s) supprim�(s)');
DEFINE('_JLIST_BACKEND_TEMPLIST_ERROR_IS_LOCKED','Les Layouts par d�faut ne peuvent �tre supprim�s.');
DEFINE('_JLIST_BACKEND_TEMPLIST_ERROR_IS_ACTIVE','Les Layouts actifs ne peuvent �tre supprim�s.');

//Backend TEMPLATES EDIT
DEFINE('_JLIST_BACKEND_TEMPEDIT_TITLE','Modifier Layout');
DEFINE('_JLIST_BACKEND_TEMPEDIT_ERROR_TITLE','Erreur: Un layout doit avoir un nom.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_SAVE','Layout sauvegard�.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_ACTIVE','Layout activ�.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_EDIT','Modifier Layout');
DEFINE('_JLIST_BACKEND_TEMPEDIT_ADD','Ajouter layout');
DEFINE('_JLIST_BACKEND_TEMP_USED','Ce layout est en cours de modification par un autre administrateur.');

DEFINE('_JLIST_BACKEND_TEMPEDIT_NAME','Nom');
DEFINE('_JLIST_BACKEND_TEMPEDIT_TYP','Type');
DEFINE('_JLIST_BACKEND_TEMPEDIT_TEXT','Layout');
DEFINE('_JLIST_BACKEND_TEMPEDIT_URL','Lien pour visualisation');


DEFINE('_JLIST_BACKEND_TEMPEDIT_NAME_DESCRIPTION','D�finissez un nom significatif pour ce Layout.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_TYP_DESCRIPTION','S�lectionnez un type de Layout appropri�.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_TEXT_DESCRIPTION','D�finition du layout pour le frontend.');

//Backend TEMPLATES TYPS
DEFINE('_JLIST_BACKEND_TEMP_TYP1','Cat�gories');
DEFINE('_JLIST_BACKEND_TEMP_TYP2','Fichiers');
DEFINE('_JLIST_BACKEND_TEMP_TYP3','Sommaire');
DEFINE('_JLIST_BACKEND_TEMP_TYP4','E-Mail');

//Backend Backup and Restore
DEFINE('_JLIST_BACKEND_RESTORE_TITLE_HEAD','Restaurer Sauvegarde');
DEFINE('_JLIST_BACKEND_RESTORE_FILE','Selectionnez un fichier de sauvegarde');
DEFINE('_JLIST_BACKEND_RESTORE_RUN','Restaurer la base de donn�es maintenant');
DEFINE('_JLIST_BACKEND_RESTORE_RUN_FINAL','D�marrage restauration de la sauvegarde?');
DEFINE('_JLIST_BACKEND_RESTORE_WARNING','Suite � la restauration de la sauvegarde, la base de donn�es actuelle sera remplac�e par la base de donn�es de la sauvegarde.<br /><br />Il n\'y a PAS de garantie que l\'op�ration de restauration de la sauvegarde fonctionne sans probl�me. Il est recommand� de r�aliser au pr�alable une sauvegarde via un client FTP pour plus de s�curit�.');
DEFINE('_JLIST_BACKEND_RESTORE_MSG','%s Enregistrements restaur�s avec succ�s.');
DEFINE('_JLIST_BACKEND_RESTORE_MSG_2','Voir les informations dans le registre: "Restore Log".');


//Backend CSS & LANGUAGE EDIT
DEFINE('_JLIST_BACKEND_EDIT_CSS_TITLE','Fichier CSS');
DEFINE('_JLIST_BACKEND_EDIT_LANG_TITLE','Fichier Langue');
DEFINE('_JLIST_BACKEND_EDIT_CSS_FIELD_TITLE','Contenu du fichier CSS');
DEFINE('_JLIST_BACKEND_EDIT_LANG_FIELD_TITLE','Contenu du fichier Langue');
DEFINE('_JLIST_BACKEND_EDIT_CSS_TITLE_EDIT','Modifer fichier CSS');
DEFINE('_JLIST_BACKEND_EDIT_LANG_TITLE_EDIT','Modifier fichier Langue');
DEFINE('_JLIST_BACKEND_EDIT_CSS_SAVED','Fichier CSS sauvegard�');
DEFINE('_JLIST_BACKEND_EDIT_LANG_SAVED','Fichier Langue sauvegard�');
DEFINE('_JLIST_BACKEND_EDIT_LANG_WRITE_STATUS_TEXT','<big>Le fichier Langue est: ');
DEFINE('_JLIST_BACKEND_EDIT_CSS_WRITE_STATUS_TEXT','<big>Le fichier CSS est: ');
DEFINE('_JLIST_BACKEND_EDIT_LANG_CSS_FILE_WRITABLE_YES','<font color="green">accessible en �criture!</font></big>');
DEFINE('_JLIST_BACKEND_EDIT_LANG_CSS_FILE_WRITABLE_NO','<font color="#990000">NON accessible en �criture!</font></big>');
DEFINE('_JLIST_BACKEND_EDIT_LANG_CSS_FILE_WRITABLE_INFO','Le fichier doit �tre accessible en �criture pour autoriser la sauvegarde des nouveaux param�tres. Vous devez �ventuellement modifier les permissions sur le fichier � CHMOD 0777.');


// BACKEND OTHERS
DEFINE('_JLIST_FRONTEND_NOCAT','Aucune cat�gorie disponible actuellement!');
DEFINE('_JLIST_FRONTEND_NOFILES','Aucun fichier disponible actuellement!');

// Information text
DEFINE('_JLIST_BACKEND_INFO_TEXT_TITLE','Informations jDownloads');
DEFINE('_JLIST_BACKEND_INFO_LICENSE_TITLE','<b>Informations de Licence:</b>');
DEFINE('_JLIST_BACKEND_INFO_LICENSE_TEXT','Ce composant est publi� sous la licence <a href="http://www.gnu.de/documents/gpl.de.html" target="_blank">GNU/GPL licensing</a>.<br />En installant jDownoads, vous acceptez les termes de la licence ainsi que les conditions reprises ci-apr�s. Si vous ne souhaitez pas respecter ces conditions, vous �tes dans l\'obligation de supprimer ce composant. <br><br><b>Conditions suppl�mentaires:</b><br />Il n\'est <b>pas autoris�</b> d\'enlever le lien original sur <b>la page d\'accueil du composant</b>! Ce lien doit �tre bien visible. Si vous d�sirez enlever malgr� tout ce lien, veuillez me contacter: <a href="mailto:info@joomlaaddons.de">info@joomlaaddons.de</a>.<br><br>De plus, ce composant est fourni "as is" sans aucune garantie explicite ou implicite! Aucune responsabilit� n\'est engag�e en cas de perte de donn�es, ... etc. L\'emploi de ce composant est r�alis� sous l\'enti�re responsabilit� de la personne ayant r�alis� son installation.');

DEFINE('_JLIST_BACKEND_INFO_LINK_BACK','Retour');

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

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_MAIL_DEFAULT','Notice de t�l�chargement!<br />
<br />
Les fichiers suivants ont �t� s�lectionn�s pour t�l�chargement:<br />
{file_list}
<br /><br />
Date et heure: {date_time}<br />
Nom: {user_name}<br />
Groupe: {user_group}<br />
Adtesse IP: {ip_address}<br /><br />
Cet E-Mail a �t� g�n�r� automatiquement!');

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
DEFINE('_JLIST_SETTINGS_LICENSE1_TEXT','Licence publique g�n�rale GNU');
DEFINE('_JLIST_SETTINGS_LICENSE1_URL','http://fr.wikipedia.org/wiki/Licence_publique_g%C3%A9n%C3%A9rale_GNU');

DEFINE('_JLIST_SETTINGS_LICENSE2_TITLE','GNU/LGPL');
DEFINE('_JLIST_SETTINGS_LICENSE2_TEXT','Licence publique g�n�rale limit�e GNU');
DEFINE('_JLIST_SETTINGS_LICENSE2_URL','http://fr.wikipedia.org/wiki/Licence_publique_g%C3%A9n%C3%A9rale_limit%C3%A9e_GNU');

DEFINE('_JLIST_SETTINGS_LICENSE3_TITLE','Donationware');
DEFINE('_JLIST_SETTINGS_LICENSE3_TEXT','La donation demand�e sert aux d�veloppements futurs et/ou � la distribution du logiciel.<br />Source: Wikipedia');
DEFINE('_JLIST_SETTINGS_LICENSE3_URL','http://fr.wikipedia.org/wiki/Donationware');

DEFINE('_JLIST_SETTINGS_LICENSE4_TITLE','Linkware');
DEFINE('_JLIST_SETTINGS_LICENSE4_TEXT','Un Lien URL vers le site du d�veloppeur doit �tre visible lorsque vous utilisez le logiciel.');
DEFINE('_JLIST_SETTINGS_LICENSE4_URL','');

DEFINE('_JLIST_SETTINGS_LICENSE5_TITLE','Charityware');
DEFINE('_JLIST_SETTINGS_LICENSE5_TEXT','Charityware autorise un libre emploi, le d�veloppeur demande de r�aliser une donation � une oeuvre caritative.');
DEFINE('_JLIST_SETTINGS_LICENSE5_URL','http://fr.wikipedia.org/wiki/Charityware');

DEFINE('_JLIST_SETTINGS_LICENSE6_TITLE','Licence commerciale');
DEFINE('_JLIST_SETTINGS_LICENSE6_TEXT','Utilisation soumise � r�tribution du d�veloppeur ou du distributeur.');
DEFINE('_JLIST_SETTINGS_LICENSE6_URL','');

DEFINE('_JLIST_SETTINGS_LICENSE7_TITLE','Creative Commons');
DEFINE('_JLIST_SETTINGS_LICENSE7_TEXT','Un ensemble de licences r�gissant les conditions de r�utilisation et/ou de distribution.');
DEFINE('_JLIST_SETTINGS_LICENSE7_URL','http://fr.wikipedia.org/wiki/Licence_Creative_Commons');

///////////////////////////////////////////////////////////////////////////////
// Install default config values - Please do not delete this !!!
// Installations Vorgabewerte f&uuml;r Konfigurationen - NICHT l&ouml;schen !!!
///////////////////////////////////////////////////////////////////////////////
DEFINE('_JLIST_SETTINGS_INSTALL_1','<b>S�lectionner tous les fichiers:</b>');
DEFINE('_JLIST_SETTINGS_INSTALL_2','Vous pouvez d�finir ici le texte de pr�sentation du composant.<br />');
DEFINE('_JLIST_SETTINGS_INSTALL_3','Informations sur les t�l�chargements');
DEFINE('_JLIST_SETTINGS_INSTALL_4','webmaster@votresite.com');
DEFINE('_JLIST_SETTINGS_INSTALL_5','info@votresite.com');

// ****************************************************************************
//		NEW IN VERSION 1.2 beta
// ****************************************************************************

// JAVASCRIPT (jdownloads.js) MESSAGES <<< Umlaute NICHT umwandeln !! >>>
DEFINE('_JLIST_JAVASCRIPT_TEXT_2','Aucun fichier de cette cat�gorie n\'a �t� s�l�ctionn� pour t�l�chargement.\\n');
DEFINE('_JLIST_JAVASCRIPT_TEXT_1','Veuillez s�lectionner au moins un fichier de cette cat�gorie et\\ncliquez � nouveau sur le bouton..');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_TEXT_TO_SHORT','Introduisez au moins 3 caract�res!');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_NO_OPTION','Veuillez s�lectionner au moins 1 option de recherche!');
// end javascript messages


DEFINE('_JLIST_INSTALL_1_2','Tous les champs existent d�j� dans la base de donn�es!');
DEFINE('_JLIST_INSTALL_2_2','Des champs de donn�es ont �t� modifi�s ou ajout�s, car inexistants!');
DEFINE('_JLIST_INSTALL_17','Installation JoomFish trouv�e! Les fichiers JoomFish de jDownloads ont �t� copi�s vers:');
DEFINE('_JLIST_INSTALL_18','Les fichiers JoomFish de jDownloads ont �t� copi�s vers:');
DEFINE('_JLIST_INSTALL_19','Si vous voulez les utiliser avec JoomFish, veuillez les copier vers:');

DEFINE('_JLIST_FRONTEND_HOME_LINKTEXT','Accueil');
DEFINE('_JLIST_FRONTEND_SUBTITLE_OVER_CATLIST','Vue d\'ensemble');
DEFINE('_JLIST_FRONTEND_SUBTITLE_OVER_ONE_CAT','Cat�gorie');
DEFINE('_JLIST_FRONTEND_SUBTITLE_OVER_DETAIL','D�tail du t�l�chargement');

// PAGENAVIGATION FRONTEND
DEFINE('_JLIST_FRONTEND_HEADER_PAGENAVI_PAGE_TEXT','Page:');
DEFINE('_JLIST_FRONTEND_HEADER_PAGENAVI_TO_TEXT','sur');

DEFINE('_JLIST_BACKEND_FILESEDIT_PRICE','Prix');
DEFINE('_JLIST_BACKEND_FILESEDIT_PRICE_DESC','Introduisez le prix avec la devise.');

DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_4','Restore Log');

//FRONTEND UPLOAD
DEFINE('_JLIST_FRONTEND_UPLOAD_ACCESS_ONLY_REGGED','Vous devez �tre enregistr� pour pouvoir soumettre des fichiers. Si vous �tes d�j� enregistr�, veuillez vous identifier sur la page principale du site.');
DEFINE('_JLIST_FRONTEND_UPLOAD_ACCESS_ONLY_SPECIALS','Vous n\'avez pas les droits pour soumettre des fichiers.');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_NO_CATS_EXIST','Erreur: Au moins une cat�gorie publi�e doit exister pour pouvoir soumettre des fichiers.');
DEFINE('_JLIST_FRONTEND_UPLOAD_LINKTEXT','Soumettre fichier');
DEFINE('_JLIST_FRONTEND_UPLOAD_PAGE_TITLE','Soumettre fichier');
DEFINE('_JLIST_FRONTEND_UPLOAD_FILENAME','Fichier soumis:');
DEFINE('_JLIST_FRONTEND_UPLOAD_FILENAME_BUTTON_TEXT_SEND','Envoyer');
DEFINE('_JLIST_FRONTEND_UPLOAD_FILENAME_BUTTON_TEXT_CLEAR','Vider champs');
DEFINE('_JLIST_FRONTEND_UPLOAD_ALLOWED_FILETYPE','Types de fichier permis');
DEFINE('_JLIST_FRONTEND_UPLOAD_ALLOWED_MAX_SIZE','Taille max. des fichiers');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_NO_VALUE','Erreur: vous n\'avez pas correctement rempli tous les champs!<br />Veuillez corriger les champse marqu�s.');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_FILETYPE','Erreur: Vous avez essay� de soumettre un type de fichier interdit!<br />Veuillez utiliser uniquement les types list�s!');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_FILESIZE','Erreur: Votre fichier d�passe la taille maximale permise!');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_MOVE_FILE','Erreur: Un erreur s\'est produite lors de l\'enregistrement du fichier sur le serveur!');
DEFINE('_JLIST_FRONTEND_UPLOAD_OK','Le fichier a �t� transmis correctement!<br />Il sera �ventuellement v�rifi� avant sa publication.');

// FRONTEND UPLOAD FIELD TITLE
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_NAME','Votre nom:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_MAIL','Votre adresse E-Mail:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_TITLE_FILE','Titre du fichier:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_DESC_FILE','R�sum�:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_DESC_FILE_LONG','Description longue du fichier:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_AUTHOR','Nom auteur:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_AUTHOR_URL','Page web auteur:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_LIZENZ','Licence:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_VERSION','Version:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_PRICE','Prix:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_LISTBOXES','S�lectionner:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_CATEGORY','Cat�gorie:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_LANGUAGE','Langue:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_SYSTEM','Syst�me:');
DEFINE('_JLIST_FRONTEND_UPLOAD_SYMBOL_TEXT','Champ obligatoire');

//FRONTEND SEARCH
DEFINE('_JLIST_FRONTEND_SEARCH_LINKTEXT','Recherche');

// AUTOCHECK DOWNLOADS
DEFINE('_JLIST_BACKEND_AUTOCHECK_NEW_CATS','Des nouveaux r�pertoires ont �t� trouv�s et ajout�s comme nouvelles cat�gories!!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_MISSING_CATS','Certains r�pertoires de cat�gories n\'ont pas pu �tre trouv�s et les cat�gories correspondantes ont �t� d�publi�es!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NO_NEW_CATS','Aucun nouveau r�pertoire trouv�!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NO_MISSING_CATS','Toutes les cat�gories publi�es existent!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_LOG_TITLE','Derni�res actions ex�cut�es:');
DEFINE('_JLIST_BACKEND_AUTOCHECK_LOG_TAB_TITLE','Derni�res actions apr�s surveillance des r�pertoires');
DEFINE('_JLIST_BACKEND_AUTOCHECK_REFRESH_MESSAGE','Vous devez actualiser cette page pour voir les modifications!');

DEFINE('_JLIST_BACKEND_RESTORE_LOG_TAB_TITLE','Resultat de la derni�re restauration des donn�es');

DEFINE('_JLIST_BACKEND_PANEL_STATUS_DESC_OFFLINE','Le mode de maintenance a �t� activ�! Les visiteurs ne peuvent PAS consulter la zone de t�l�chargement! Les membres du groupe "Auteur" ont quand-m�me acc�s.');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_DOWNLOADS_HEADER','Etat t�l�chargements');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_DOWNLOADS_OFF_DESC','La surveillance automatique des r�pertoires de t�l�chargements est d�sctiv�e!');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_VERSION_HEADER','Informations concernant la version actuelle de jDownloads');

DEFINE('_JLIST_BACKEND_SETTINGS_DEL_TEMPFILE_TIME','Suppression des fichiers temporaires apr�s combien de minutes');
DEFINE('_JLIST_BACKEND_SETTINGS_DEL_TEMPFILE_TIME_DESC','Indiquez un temps en minutes apr�s lequel les fichier zip temporaires seront effac�s. A augmenter si vous proposez des fichiers volumineux. Par d�faut: 20 (Minutes).');

DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_FRONTEND_HEAD_UPLOAD','Configuration soumission frontent');
DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIR_RENAME_ERROR','Erreur: Le r�pertoire RACINE de t�l�chargement n\'a pas pu �tre renomm�!');
DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIR_RENAME_OK',' - r�pertoire RACINE renomm� avec succ�s!');

DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO','Surveiller le r�pertoire de t�l�chargement? ');
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_DESC','Si activ�, tous les r�pertoires sont surveill�s, et la base de donn�es est mise � jour automatiquement. Tous les r�pertoires et fichiers qui ont �t� envoy�s par FTP sont automatiquement ins�r�s dans la base de donn�es. Si des cat�gories et fichiers sont introuvables, leurs enregistrements sont chang�s en: <b>Non publi�</b>. <b>R�glage standard: Oui.</b>');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_USE_CHECKBOX_INFO','<b>Remarque:</b> Vous trouvez les options d\'affichage des cases � cocher des t�l�chargements, dans la gestion des layouts des fichiers!');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_USE_SYMBOLE_INFO','<b>Remarque:</b> Vous trouvez les options d\'affichage des ic�nes, dans la gestion des layouts des fichiers!');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FILES_PER_SIDE','Nombre d\'entr�es par page');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FILES_PER_SIDE_DESC','Indiquez ici le nombre d\'entr�es � afficher dans cat�gories et fichiers sur le frontend.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_HEADER_TITLE','Titre � afficher dans l\'ent�te');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_HEADER_DESC','Indiquez ici le titre � afficher dans l\'ent�te du composant, p.ex. "T�l�chargements".');

// FRONTEND UPLOAD CONFIG
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACTIVE','Activer la soumission du frontend:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACTIVE_DESC','Si activ�, les groupes indiqu�s plus bas pourront soumettre des fichiers.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_PERMISSIONS','Qui a le droit de soumettre des fichiers:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_PERMISSIONS_DESC','D�finir le groupe qui a le droit de soumettre des fichiers.');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACCESS_ALL','Public');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACCESS_REGGED','Membre');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACCESS_ADMINS','Sp�cial');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILETYPES','Types des fichiers permis:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILETYPES_DESC','Indiquez ici tous les types de fichiers qui pourront �tres soumis au moyen du formulaire du frontend. S�paration des valeurs par des virgiules (,) .');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILESIZE','Taille maximale en Ko:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILESIZE_DESC','Indiquez ici la taille maximale des fichiers en Ko (1024 Ko = 1 Mo. R�glage standard: 2048.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FORM_TEXT','Apparence du formulaire de soumission:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FORM_TEXT_DESC','Ici vous pouvez modifier l\'apparence du formulaire de soumission. A la place de la balise: <font color="red">{form}</font> le formulaire proprement dit est affich�. La balise <font color="red">{form}</font> ne doit <b>PAS</b> �tre supprim�e!');

// Platzhalter {form} NICHT �NDERN ODER L�SCHEN !!!
// DO NOT DELETE, EDIT OR TRANSLATE: {form} !!!
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FORM_TEXT_LAYOUT','Ici vous pouvez envoyer des fichiers vers le serveur. Tous les champs avec un symbole rouge doivent �tre remplis obligatoirement.<br /> Votre nom et votre adresse E-Mail ne seront pas communiqu�s � des tiers ou publi�s.<br /><br />{form}<br />');

DEFINE('_JLIST_BACKEND_TEMPLIST_DEL_QUEST','Supprimer layout(s)?');
DEFINE('_JLIST_BACKEND_LICLIST_DEL_QUEST','Supprimer licence(s)?');

DEFINE('_JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD_STATUS_DESC','Ici vous voyez l\'�tat du r�pertoire racine des t�l�chargements. Si celui-ci n\'a pas de permissions en �criture, veuillez modifier les droits CHMOD 0777.');

DEFINE('_JLIST_BACKEND_FILESEDIT_HITS','Nombre de t�l�chargements effectu�s');
DEFINE('_JLIST_BACKEND_FILESEDIT_HITS_DESC','Ici vous pouvez modifier le compteur des t�l�chargements');

DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_CAT_DESC','A quelle cat�gorie voulez-vous assigner ce fichier? S�l�ctionnez la cat�gorie d�sir�e dans la liste. Si vous s�l�ctionnez une autre cat�gorie plus tard, le fichier sera d�plac� automatiquement dans le r�pertoire correspondant');

DEFINE('_JLIST_BACKEND_FILESEDIT_DESCRIPTION_KURZ','Description courte');
DEFINE('_JLIST_BACKEND_FILESEDIT_DESCRIPTION_LONG','Description longue');
DEFINE('_JLIST_BACKEND_FILESEDIT_EDITOR_INFO','Dans la configuration on peut d�finir si on veut utiliser ici des simples champs texte ou l\'�diteur WYSIWYG actif.');
DEFINE('_JLIST_BACKEND_FILESEDIT_SENT_IN_FROM_STATUS','Etat: ');
DEFINE('_JLIST_BACKEND_FILESEDIT_SENT_IN_FROM_EMAIL','Adresse E-Mail: ');
DEFINE('_JLIST_BACKEND_FILESEDIT_ERROR_TITLE','Erreur: Veuillez indiquer un titre!');
DEFINE('_JLIST_BACKEND_FILESEDIT_CATLIST_ERROR','Erreur: Veuillez s�lectionner une cat�gorie!');
DEFINE('_JLIST_BACKEND_FILESEDIT_SAVE_MOVEFILE_ERROR',' - Erreur: Le fichier n\'a pas pu �tre d�plac�!');
DEFINE('_JLIST_BACKEND_FILESEDIT_SAVE_MOVEFILE_OK',' - Fichier d�plac� avec succ�s!');

DEFINE('_JLIST_BE_NO_PUBL_FILES','Des fichiers non attribu�s � une cat�gorie ne peuvent pas �tre publi�s!');
DEFINE('_JLIST_BACKEND_FILESLIST_DEL_QUEST','Supprimer le(s) t�l�chargement(s)?');
DEFINE('_JLIST_BACKEND_FILESLIST_DESCRIPTION_SHORT','Description (courte)');
DEFINE('_JLIST_BACKEND_FILESLIST_PIC','Symbole');
DEFINE('_JLIST_BACKEND_FILESLIST_DEL_FILES_OPTION','<font color=#990000>Effacer les fichiers lors de la supression du t�l�chargement:</font>');
//DEFINE('D_JLIST_BACKEND_FILESLIST_DEL_FILES_OPTION_YES','Ja');
//DEFINE('D_JLIST_BACKEND_FILESLIST_DEL_FILES_OPTION_NO','Nein');
DEFINE('_JLIST_BACKEND_FILESLIST_DEL_FILES_OPTION_TOOLTIP','Si Oui, le t�l�chargement ne sera non seulement supprim�, mais le fichier associ� sera supprim� du serveur! Si le fichier n\'est pas supprim� du serveur, et la surveillance des r�pertoire est activ�e, le fichier sera alors consid�r� comme nouveau et ins�r� dans la base de donn�es,!<br /><b>R�glage conseill�: Oui</b>.');
DEFINE('_JLIST_BACKEND_FILESEDIT_DEL_FILES_OK',' - Fichiers associ�s supprim�s.');
DEFINE('_JLIST_BACKEND_FILESEDIT_DEL_FILES_ERROR',' - Fichiers associ�s pas supprim�s, car inexistants.');
DEFINE('_JLIST_BACKEND_FILESLIST_FILE_ID','ID');

DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_CAT_DEL_AFTER_COPY','Erreur lors de la suppression des anciens r�pertoires des cat�gories.');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_TITLE','Titre cat�gorie <b><font color=red>*</font></b>');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_TITLE_DESC','D�signation de la cat�gorie. Les caract�res sp�ciaux ne sont pas permis, car pour chaque titre de cat�gorie, un r�pertoire du m�me nom est cr�� sur le serveur. Exceptions: <b>" - _ . , " </b>ainsi que les espaces.');
DEFINE('_JLIST_BACKEND_CATSEDIT_ROOT_CAT_LISTBOX','Cat�gorie principale');
DEFINE('_JLIST_BACKEND_CATSEDIT_ROOT_CAT_LISTBOX_NEW','Nouvelle cat�gorie principale');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_TITLE','Attribution');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_TITLE_NEW','Cr�ation d\'une nouvelle cat�gorie dans  / comme <b><font color=red>*</font></b>');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_DESC_NEW','Si vous voulez mettre en place une nouvelle cat�gorie principale veuillez cocher "Nouvelle cat�gorie principale". Si la nouvelle cat�gorie doit servir comme sous-cat�gorie, veuillez marquer la cat�gorie parent. Vous pouvez modifier l\'assignation plus tard.');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_DESC','Lorsque vous voulez d�placer une cat�gorie veuillez cocher la cat�gorie vers laquelle vous voulez d�placer la cat�gorie actuelle. Si une sous-cat�gorie doit devenir une cat�gorie principalle, veuillez cocher "Cat�gorie principale".<br /><br /><b>Remarque:</b> Lors de modifications, le r�pertoire complet (du m�me nom) sera automatiquement d�plac� sur le serveur. Si la cat�gorie � d�placer contient des sous-cat�gories, celles-ci seront aussi d�plac�es. Pour ne pas compromettre ces actions lors de la modification d\'une cat�gorie, TOUTES les autres cat�gories seront prot�g�es contre toute modification!');
DEFINE('_JLIST_BACKEND_CATSEDIT_SAVE','Cat�gorie m�moris�e.');
DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_TITLE_CHARS_NOT_ALLOWED','Erreur: Le titre contient des symboles interdits!');
DEFINE('_JLIST_BACKEND_CATSLIST_DEL_QUEST','Supprimer la/les cat�gorie(s)?');
DEFINE('_JLIST_BACKEND_CATSLIST_CATID','ID');
DEFINE('_JLIST_BACKEND_CATSLIST_PATH','R�pertoire');

// BACKEND CATS DELETE
DEFINE('_JLIST_BE_NO_DEL_SUBCATS_EXISTS','La cat�gorie ne peut pas �tre supprim�e, des sous-cat�gories existent!');
DEFINE('_JLIST_BE_NO_DEL_FILES_EXISTS','La cat�gorie ne peut pas �tre supprim�e, elle contient des fichiers!');
DEFINE('_JLIST_BE_DEL_CATS_DIRS_OK',' - R�pertoire supprim�!');
DEFINE('_JLIST_BE_DEL_CATS_DIRS_ERROR',' - ERREUR lors de la suppression du r�pertoire!');

DEFINE('_JLIST_BACKEND_NO_SELECT_ACTION','Veuillez d\'abord cocher une entr�e dans la liste!');

DEFINE('_JLIST_BE_SETTINGS_FILES_PER_SIDE_BE_TITLE','Nombre de lignes � afficher pour les listes');
DEFINE('_JLIST_BE_SETTINGS_FILES_PER_SIDE_BE_DESC','Nombre de lignes � afficher dans les listes dans le backend.');

DEFINE('_JLIST_UPLOAD_MAX_FILESIZE_INFO_TITLE','Taille max. selon php.ini:');

DEFINE('_JLIST_BACKEND_TEMPLATE_ACTIVE_ERROR','Pour �tre activ�, un seul layout peut �tre coch�!');
DEFINE('_JLIST_AUTO_FILE_CHECK_IMPORT_BY','Syst�me');
DEFINE('_JLIST_AUTO_FILE_CHECK_ADDED',   'Fichier ajout�            ');
DEFINE('_JLIST_AUTO_FILE_CHECK_DISABLED','Fichier introuvable       ');
DEFINE('_JLIST_AUTO_CAT_CHECK_ADDED',    'Cat�gorie ajout�e         ');
DEFINE('_JLIST_AUTO_CAT_CHECK_DISABLED', 'Cat�gorie introuvable     ');

// MESSAGES AFTER CHECK FILES AND DIRS WHEN UPDATED FROM 1.1 alpha
DEFINE('_JLIST_CHECK_CATS_TITEL1','Vaus avez mis � jour une ancienne version de jDownloads vers la version 1.2!');
DEFINE('_JLIST_CHECK_CATS_TITEL2','Toutes les anciennes cat�gories et tous les anciens fichiers seront mainenant transf�r�s vers la nouvelle structure!');

DEFINE('_JLIST_CHECK_FINISH','Le processus est termin�!');
DEFINE('_JLIST_CHECK_CATS_CREATE','Les r�pertoires des cat�gories ont �t� g�n�r�s!');
DEFINE('_JLIST_CHECK_FILES_MOVE','Les fichiers ont �t� d�plac�s!');
DEFINE('_JLIST_CHECK_FILES_NOT_FOUND','Pas de fichiers trouv�s!');
DEFINE('_JLIST_CHECK_FILES_NOT_MOVED','Les fichiers n\'ont pas pu �tre d�plac�s!');
DEFINE('_JLIST_CHECK_CATS_NOT_FOUND','Les r�pertoires des cat�gories n\'ont pas pu �tre cr��s!');

// MESSAGES AFTER RESTORE BACKUPFILE
DEFINE('_JLIST_AFTER_RESTORE_TITLE_1','Restauration des donn�es en cours:');
DEFINE('_JLIST_AFTER_RESTORE_1','Enregistrements ont �t� r�cup�r�s!');
DEFINE('_JLIST_AFTER_RESTORE_TITLE_2','La v�rification des bases de donn�es va d�marrer:');
DEFINE('_JLIST_AFTER_RESTORE_3','La sauvegarde d\'une ancienne version de jDownloads a �t� r�cup�r�e!');
DEFINE('_JLIST_AFTER_RESTORE_4','Pour cette raison, toutes les cat�gories et tous les fichiers sont v�rifi�s:');
DEFINE('_JLIST_AFTER_RESTORE_TITLE_3','R�sultats en d�tail:');

DEFINE('_JLIST_AUTOCHECK_DIR_NOT_EXIST','Erreur: R�pertoire racine de t�l�chargement inexistant!');
DEFINE('_JLIST_AUTOCHECK_DIR_NOT_EXIST_2','Veuillez cr�er les r�pertoires /downloads et /downloads/tempzipfiles dans le r�pertoire principal de Joomla et mettez les droits CHMOD 0777 - sinon jDownloads ne fonctionnera pas!');
DEFINE('_JLIST_FRONTEND_HEADER_CATLIST_TITLE','Cat�gorie:');
DEFINE('_JLIST_FRONTEND_HEADER_SUMMARY_TITLE','R�sum�');
DEFINE('_JLIST_FRONTEND_HEADER_FINISH_TITLE','T�l�charger');

// FRONTEND SEARCH
DEFINE('_JLIST_FRONTEND_SEARCH_TITLE','Recherche fichiers');
DEFINE('_JLIST_FRONTEND_SEARCH_TEXT_TITLE','Crit�res');
DEFINE('_JLIST_FRONTEND_SEARCH_IN_TITLE','Chercher dans titres');
DEFINE('_JLIST_FRONTEND_SEARCH_IN_DESC','Chercher dans descriptions');
DEFINE('_JLIST_FRONTEND_SEARCH_INFO_TEXT','Au maximum 20 fichiers seront affich�s.');
DEFINE('_JLIST_FRONTEND_SEARCH_BUTTON_TEXT','Chercher');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_TITLE','R�sultat');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_SUM_FILES','Trouv�');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_NO_SUM_FILES','Pas de fichiers trouv�s');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_SEARCH_TEXT','Terme recherch�');

// NEW LAYOUT FOR VIEW DOWNLOAD-DETAILS
DEFINE('_JLIST_BACKEND_TEMP_TYP5','D�tails-fichiers');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_DETAILS','D�tails fichiers');
DEFINE('_JLIST_BACKEND_TEMPLIST_DETAILSTITLE_HEAD','Layout d�tail t�l�chargement');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS','Layout: D�tails t�l�chargement');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_DESC','Repr�sentation d�taill� du fichier dans le frontend.<br /><br />Ne pas supprimer la balise <font color=red>{url_download}</font> du code!<br /><br />Balises disponibles:<br />{file_title} {thumbnail} {pic_is_new} {pic_is_hot} {pic_is_updated} {url_download} {mirror_1} {mirror_2} {description_long} {details_block_title} {license_title} {license_text} {price_title} {price_value} {language_title} {language_text} {filesize_title} {filesize_value} {system_title} {system_text} {author_title} {author_text} {author_url_title} {author_url_text} {created_date_title} {created_date_value} {hits_title} {hits_value} {created_by_title} {created_by_value} {modified_by_title} {modified_by_value} {modified_date_title} {modified_date_value}.'); // changed in 1.4 beta (2)
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_INFO_TITLE','<b>Informations relatives au Layout "D�tail fichier":</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_INFO_TEXT','<p> Le cadre en rouge indique la zone que vous pouvez adapter ici.</p>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_INFO_TEXT','<p>Ici vous pouvez voir un exemple graphique de la pr�sentation d�taill�es des t�l�chargements. Le cadre rouge indique la zone de la pr�sentation.</p>');

// FRONTEND DOWNLOAD DETAILSITE
DEFINE('_JLIST_FE_DETAILS_PATHWAY_TEXT','Vois �tes ici');
DEFINE('_JLIST_FE_DETAILS_LINK_TEXT_TO_DETAILS','>> D�tails');
DEFINE('_JLIST_FE_DETAILS_LICENSE_TITLE','Licence');
DEFINE('_JLIST_FE_DETAILS_PRICE_TITLE','Prix');
DEFINE('_JLIST_FE_DETAILS_LANGUAGE_TITLE','Langue');
DEFINE('_JLIST_FE_DETAILS_FILESIZE_TITLE','Taille');
DEFINE('_JLIST_FE_DETAILS_SYSTEM_TITLE','Syst�me');
DEFINE('_JLIST_FE_DETAILS_AUTHOR_TITLE','Auteur');
DEFINE('_JLIST_FE_DETAILS_AUTHOR_URL_TITLE','Page Web');
DEFINE('_JLIST_FE_DETAILS_CREATED_DATE_TITLE','Cr�� le');
DEFINE('_JLIST_FE_DETAILS_HITS_TITLE','T�l�chargements');

// LAYOUT DOWNLOAD-DETAILS
///////////////////////////////////////////////////////////////////////////////
// Template defaults for _jdownloads_templates - Please do not change this and NO translation here!!!
// Vorgabewerte f&uuml;r Layouttabelle - hier bitte KEINE &Auml;nderungen oder �bersetzungen hier vornehmen !!!
///////////////////////////////////////////////////////////////////////////////
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_DEFAULT_NAME','Standard 1.4');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT_NAME','Standard 1.4');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_DEFAULT_NAME','Standard 1.4 - Information complete');
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
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT_NEW_SIMPLE_1_NAME','Repr�sentation simple avec cases � cocher');
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

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT_NEW_SIMPLE_2_NAME','Repr�sentation simple sans cases � cocher');
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
DEFINE('_JLIST_BACKEND_TEMPEDIT_TITLE_NOT_ALLOWED_TO_CHANGE_DESK','Les noms des layouts standards ne peuvent �tre modifi�s!');
DEFINE('_JLIST_BACKEND_TEMPEDIT_NOTE_TITLE','Annotation layout');
DEFINE('_JLIST_BACKEND_TEMPEDIT_NOTE_DESC','Ici vous pouvez introduire des annotations suppl�mentaires concernant le layout.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_CHECKBOX_TITLE','Utilisation de cases � cocher dans ce layout?');
DEFINE('_JLIST_BACKEND_TEMPEDIT_CHECKBOX_DESC','Si Oui, Affichage de l\'ent�te avec les cases � cocher, et du bouton "Suite". La balise <b>{checkbox_list}</b> doit �tre ins�r�e dans le layout. Si Non, la balise <b>{url_download}</b> doit �tre ins�r�e dans le layout.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_SYMBOLE_TITLE','Ins�rer des ic�nes miniatures?');
DEFINE('_JLIST_BACKEND_TEMPEDIT_SYMBOLE_DESC','Si Oui, les ic�nes sont affich�s devant les balises. La taille des ic�nes peut �tre d�finie dans la configuration de jDownloads.');

DEFINE('_JLIST_FE_YES','Oui');
DEFINE('_JLIST_FE_NO','Non');

DEFINE('_JLIST_BACKEND_EDIT_PUBLISHED','Publier');
DEFINE('_JLIST_BACKEND_FILESEDIT_MODIFIED_DATE','Derni�re modif.');
DEFINE('_JLIST_BACKEND_FILESEDIT_MODIFIED_BY','par');
DEFINE('_JLIST_BACKEND_FILESEDIT_CREATED_BY','Cr�� par');
DEFINE('_JLIST_BACKEND_FILESEDIT_INFO_FIELDS_DESC','Les champs en marge servent comme information et renseignent sur les derni�res modifications des donn�es (qui et quand).');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CATLISTBOX_ACTIVE','Afficher la liste des cat�gories dans l\'ent�te?');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CATLISTBOX_DESC','Si Oui, la liste des cat�gories (listbox) est affich�e � droite dans l\'ent�te. L\'utilisateur peut acc�der directement � la cat�gorie souhait�e.');

// SAMPLE DATA
DEFINE('_JLIST_SAMPLE_DATA_CAT_NAME_ROOT','Exemple de categorie');
DEFINE('_JLIST_SAMPLE_DATA_CAT_NAME_SUB','Exemple de sous-categorie');
DEFINE('_JLIST_SAMPLE_DATA_CAT_NAME_TEXT','Voici un exemple d\'une cat�gorie. Vous pouvez la supprimer � tout moment.');
DEFINE('_JLIST_SAMPLE_DATA_FILE_NAME','Exemple de telechargement');
DEFINE('_JLIST_SAMPLE_DATA_FILE_NAME_TEXT','Voici un fichier � t�l�charger comme exemple. Vous pouvez le supprimer � tout moment.');
DEFINE('_JLIST_SAMPLE_DATA_CREATE_ERROR','Suite � une erreur, les exemples n\'ont pas pu �tre g�n�r�s. Utilisez l\'option dans le menu principal de jDownloads.');
DEFINE('_JLIST_SAMPLE_DATA_CREATE_OK','Les exemples ont pu �tre configur� avec succ�s!');
DEFINE('_JLIST_SAMPLE_DATA_BE_OPTION_LINK_TEXT','G�n�rer des donn�es de d�mo.');
DEFINE('_JLIST_SAMPLE_DATA_EXISTS','Exemples d�j� pr�sents!');
DEFINE('_JLIST_SAMPLE_DATA_BACK_TO_PANEL','Retour au menu principal;');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_HEAD_INFO2','<br /><b><u>Explications concernant les layouts</u></b><br /><b>Cat�gories: </b>Un layout "cat�gorie" d�finit la pr�sentation des cat�gories ainsi que l\'utilisation des cases � cocher en haut et en bas de la liste des fichiers.<br /><b>Fichiers: </b>Un layout "fichier" d�finit la pr�sentation de la liste des fichiers en dessous des cat�gories.<br /><b>D�tails fichiers: </b>Un layout "D�tail fichier" d�finit la pr�sentation d�taill�e d\'un fichier.<br /><b>R�sum�: </b>Un layout "R�sum�" d�finit la pr�sentation de la page de t�l�chargement sur laquelle l\'utilisateur voit le r�sum� de tous le fichiers s�l�ctionn�s pour le t�l�chargement.'); // changed in 1.3 RC2

// ANTI_LEECH_CONFIG
DEFINE('_JLIST_BACKEND_SETTINGS_ANTILEECH_TITLE','Prot�ger le r�pertoire de t�l�chargement?');
DEFINE('_JLIST_BACKEND_SETTINGS_ANTILEECH_DESK','Si Oui, le fichier htaccess.txt est copi� dans le r�pertoire racine et renomm� en: .htaccess . La protection est activ�e et tous les acc�s externes sur ce r�pertoire et les sous-r�pertoires sont bloqu�s. <b>R�glage conseill�: OUI!</b>');
DEFINE('_JLIST_ACTIVE_ANTILEECH_ERROR',' - Erreur lors de la copie de htaccess.txt!');
DEFINE('_JLIST_ACTIVE_ANTILEECH_OK',' - Prot�ction des fichiers activ�e!');
DEFINE('_JLIST_ACTIVE_ANTILEECH_OFF_ERROR',' - Erreur lors de la suppression de .htaccess!');
DEFINE('_JLIST_ACTIVE_ANTILEECH_OFF_OK',' - Prot�ction des fichiers d�sactiv�e!');

DEFINE('_JLIST_FRONTEND_ANTILEECH_MESSAGE','Acc�s illicite aux fichiers!');
DEFINE('_JLIST_FRONTEND_FILE_NOT_FOUND_MESSAGE','Le fichier demand� ne peut pas �tre trouv�!<br /><br />Veuillez informer le Webmaster!');

DEFINE('_JLIST_FRONTEND_SUMMARY_ZIP_FILESIZE','Taille du fichier zip du t�l�chargement group�');
DEFINE('_JLIST_FRONTEND_NEXT_SITE_BUTTON','&nbsp;>>&nbsp;');
DEFINE('_JLIST_FRONTEND_PREV_SITE_BUTTON','&nbsp;<<&nbsp;');

DEFINE('_JLIST_FRONTEND_SUBHEADER_NUMBER_OF_CATS_TITLE','Nombre de cat�gories');
DEFINE('_JLIST_FRONTEND_SUBHEADER_NUMBER_OF_SUBCATS_TITLE','Nombre de sous-cat�gories');
DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_CATLIST','Une cat�gorie ou >cat�gorie principale< doit �tre coch�e.');

// NEW OPTION FOR DIREKT DOWNLOAD LINK
DEFINE('_JLIST_BACKEND_SETTINGS_DIRECT_DOWNLOAD_ACTIVE_TITLE','Activer le t�l�chargement direct?');
DEFINE('_JLIST_BACKEND_SETTINGS_DIRECT_DOWNLOAD_ACTIVE_DESC','Si Oui, le t�l�chargement d�marre directement en utilisant la balise <b>{url_download}</b> dans le layout, sans afficher la page principale du fichier.');

// NEW OPTION FOR HOT AND NEW IMAGES IN DOWNLOADS
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_TITLE','A partir de quand un t�l�chargement est-il consid�r� comme "populaire"');
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_DESC','Indiquez le nombre de t�l�chargements, � partir duquel un fichier est consid�r� comme "populaire". L\'icone s�l�ctionn� sera affich� � c�t� du titre du fichier. Pour ne pas afficher d\'ic�ne, veuillez introduire 0.');
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_NEW_PIC_TITLE','Nom du fichier de l\'ic�ne');
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_NEW_PIC_DESC','Ici vous trouvez la s�lection du r�pertoire: <b>../images/jdownloads/hotimages </b>!"'); // changed in 1.3 RC2
DEFINE('_JLIST_BACKEND_SETTINGS_NEW_TITLE','Combien de temps,un t�l�chargement est-il consid�r� comme "nouveau"');
DEFINE('_JLIST_BACKEND_SETTINGS_NEW_DESC','Introduisez le nombre de jours pendant lequel un t�l�chargement est consid�r� comme "nouveau". Derri�re le nom du fichier, l\'ic�ne d�fini plus bas est affich�. Pour ne pas afficher d\'ic�ne, veuillez introduire 0.');
// NEW OPTION FOR DOWNLOAD PIC BUTTON IN DOWNLOAD DETAILS
DEFINE('_JLIST_BACKEND_SETTINGS_DETAILS_DOWNLOAD_BUTTON_TITLE','Bouton "t�l�chargement"'); // changed in 1.3 RC2
DEFINE('_JLIST_BACKEND_SETTINGS_DETAILS_DOWNLOAD_BUTTON_DESC','Ici vous trouvez la s�lection du r�pertoire: <b>../images/jdownloads/downloadimages </b>. Les images activ�es sont utilis�s comme boutons pour le t�l�chagement et les liens vers les miroirs, sur la page d�taill�e des t�l�chargements et dans le r�sum�.');  // changed in 1.3 RC2

// NEW IN 1.2 beta 2
DEFINE('_JLIST_FRONTEND_UPLOAD_AUTO_PUBLISH','Publier imm�diatement les fichiers:');
DEFINE('_JLIST_FRONTEND_UPLOAD_AUTO_PUBLISH_DESC','Si Oui, les fichiers soumis seront publi�s automatiquement.');

// NEW IN 1.2 stable
DEFINE('_JLIST_BACKEND_DIRSEDIT_CREATE_DIR_MESSAGE_ERROR','Erreur: Le r�pertoire n\'a pas pu �tre cr��. Veuillez v�rifier les droits d\'acc�s des r�pertoires. Les valeurs CHMOD doivent �tre 0777.');

// NEW IN 1.2.2 stable
// FOR CREATES MAIN MENU IN INSTALL
DEFINE('_JLIST_BACKEND_CPANEL_MAIN','Menu principal');
DEFINE('_JLIST_INSTALL_DEFAULT_DATE_FORMAT','%d.%m.%Y %H:%M:%S');

// NEW OPTION SORTORDER CATEGORIES
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SORTCATSORDER_TEXT','Tri des cat�gories');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SORTCATSORDER_DESC','Ordre dans lequel les cat�gories sont tri�es dans le frontend. S�lectionnez "Standard" pour le tri par d�faut du backend.');
DEFINE('_JLIST_BACKEND_SETTINGS_CATS_ORDER_1','Standard');
DEFINE('_JLIST_BACKEND_SETTINGS_CATS_ORDER_2','Nom ascendant');
DEFINE('_JLIST_BACKEND_SETTINGS_CATS_ORDER_3','Nom d�scendant');

// NEW TAB TITLE FOR AUTODETECT
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_TAB_TITLE','Surveillance');
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_HEADER_TITLE','Configuration de la surveillance des r�pertoires');
// NEW OPTION AUTOPUBLISH NEW FOUNDED FILES
DEFINE('_JLIST_BACKEND_SETTINGS_DOWNLOADS_AUTOPUBLISH_TITLE','Publier automatiquement les fichiers?');
DEFINE('_JLIST_BACKEND_SETTINGS_DOWNLOADS_AUTOPUBLISH_DESC','Si oui, les nouveaux fichier sont publi�s automatiquement. Si l\'option plus haut est activ�e.<br /><b>D�faut: Non.</b>');
// NEW OPTION  FOR AUTODETECT ALL FILES
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_ALL_FILES_TITLE','Surveiller tous les types de fichier?');
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_ALL_FILES_DESC','Lorsque cette option est activ�e, tous les types de fichiers sont surveill�s!');
// NEW OPTION  FOR AUTODETECT ONLY THIS FILES
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_ONLY_THIS_FILES_TITLE','Surveiller uniquement les types suivants:');
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_ONLY_THIS_FILES_DESC','Si activ�, uniquement les types indiqu�s sont surveill�s! S�parer la liste avec des virgules (,) .');

// NEW COPY DOWNLOADS FUNCTION
DEFINE('_JLIST_BACKEND_FILES_COPY_TITLE','Copier Fichiers');
DEFINE('_JLIST_BACKEND_FILES_COPY_DESC','S�lectionnez la cat�gorie cible.');
DEFINE('_JLIST_BACKEND_FILES_COPY_TEXT_1','Les fichiers suivant ont �t� s�lectionn�s:');
DEFINE('_JLIST_BACKEND_FILES_COPY_TEXT_2','Remarque: Lorsque vous s�lectionnez la m�me cat�gorie, le nouveau fichier aura le pr�fixe: "Copie de <i>Titre du fichier</i>"!');
DEFINE('_JLIST_BACKEND_FILES_COPY_TEXT_3','Publier les fichiers copi�s:');
DEFINE('_JLIST_BACKEND_FILES_COPY_TEXT_4','Copier aussi le fichier:');
DEFINE('_JLIST_BACKEND_FILES_COPY_DOWNLOADS_TEXT','Copie de');
DEFINE('_JLIST_BACKEND_FILES_COPY_SAVED','Les fichiers ont �t� copi�s!');

// NEW OPTION EXTERN DOWNLOAD URL
DEFINE('_JLIST_BACKEND_FILE_EDIT_EXT_DOWNLOAD_TITLE','Lien vers fichier externe:');
DEFINE('_JLIST_BACKEND_FILE_EDIT_EXT_DOWNLOAD_INFO','Avant de cr�er un lien externe, veuillez en premier supprimer le fichier local.');
DEFINE('_JLIST_BACKEND_FILE_EDIT_EXT_DOWNLOAD_DESC','URL vers un fichier externe. Veuillez laisser le champ vers le fichier interne libre.');

//NEW OPTION FOR JCOMMENTS INTEGRATION
DEFINE('_JLIST_BACKEND_SETTINGS_JCOMMENTS_TITLE','Utiliser les fonctions pour JComments?');
DEFINE('_JLIST_BACKEND_SETTINGS_JCOMMENTS_DESC','Si oui, les fonctions de <b>JComments</b> sont activ�es dans la vue de d�taill�e du fichier. <b>JComments</b> ne fait pas partie de jDownloads et doit �tre install� s�par�ment <br /><b>Etat: jComments n\'est pas install�!</b><br />Vous trouvet ce composant sur <a href="http://www.joomlatune.com">www.joomlatune.com</a> .');
DEFINE('_JLIST_BACKEND_SETTINGS_JCOMMENTS_EXISTS_DESC','Si oui, les fonctions de <b>JComments</b> sont activ�es dans la vue de d�taill�e du fichier. <br /><b>Etat: JComments est d�j� install�!</b>');

// NEW TAB FOR FRONTEND UPLOAD CONFIG
DEFINE('_JLIST_BACKEND_SETTINGS_FE_UPLOAD_TAB_TITLE','Uploads');
DEFINE('_JLIST_BACKEND_SETTINGS_FE_UPLOAD_TITLE_HEAD','Configuration du formulaire uploads du frontend');

// NEW DOWNLOAD FIELDS FOR DOWNLOAD MIRRORS
DEFINE('_JLIST_BACKEND_FILESEDIT_MIRROR_URL_TITLE','Lien alternatif vers un fichier externe suppl�mentaire:');
DEFINE('_JLIST_BACKEND_FILESEDIT_MIRROR_URL_DESC','Vous pouvez indiquer ici un fichier suppl�mentaire p.ex. sur un autre serveur. (Miroir).<br />Lorsque vous utilisez cette possibilit�, vous devez ajouter les balises {mirror_1} {mirror_2} dans votre layout. Pour des fichiers externes aupr�s des Sharehosters comme d�finit dans le champ: Lien externe.');

//NEW TEXT FOR MIRRORS
DEFINE('_JLIST_FRONTEND_MIRROR_URL_TITLE_1','Miroir 1');
DEFINE('_JLIST_FRONTEND_MIRROR_URL_TITLE_2','Miroir 2');

//NEW FOR PLUGINS TAB
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_PLUGINS','Plugins');

//NEW FOR FILE PLUGIN
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_FILEPLUGIN_HEAD','Configuration du plugin pour les articles (mos_jdownloads_file)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(c) Pelma pour jDownloads');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_DEFAULTLAYOUT','Layout standard:');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_DEFAULTLAYOUT_DESC','Le layout s�lectionn� ici est utilis� pour l\'affichage des fichiers dans les articles, lorsque le plugin est <b>activ�</b> (voir plus bas).');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_NOT_INSTALLED','Le plugin qui sert � afficher les fichiers de jDownloads � l\'int�rieur des articles ne fait pas partie int�grante de jDownloads. Il doit �tre install� s�par�ment. <br /><b>Etat: Pas encore install�!</b><br />Vous trouvez cette extension sur <a href="http://demo.joomlaaddons.de/index.php?option=com_jdownloads&Itemid=69&task=viewcategory&catid=9">www.JoomlaAddons.de</a>.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_ONLINEPART','Param�tres lorsque le Plugin est activ�');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINEPART','Param�tres lorsque le Plugin est d�sactiv�');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWNEW','Afficher le symbole NEW');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWNEW_DESC','Afficher (ou non) le symbole NEW dans les articles.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWHOT','Afficher le symbole HOT');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWHOT_DESC','Afficher (ou non) le symbole HOT dans les articles.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_ENABLEPLUGIN','Activer le plugin');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_ENABLEPLUGIN_DESC','Activation du plugin. Ceci n\'a rien � voir avec la publication du plugin dans Joomla. Lorsque le plugin est d�sactiv� ici, vous avez la possibilit� d\'en informer le visiteur (voir param�tres qui suivent)!');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWDISABLED','Afficher un message lorsque le plugin est d�sactiv�');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWDISABLED_DESC','Lorsque le plugin est d�sactiv�, vous pouvez en informer le visiteur (ou non). Voir les param�tres qui suivent.<br \><b>Non</b>: Rien ne sera affich�.<br \><b>Oui</b>: Le layout standard est utilis�.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_DOWNLOADTITLE','Afficher le titre du fichier lorsque le plugin est d�sactiv�');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_DOWNLOADTITLE_DESC','Si Oui, le titre original du fichier (et son symbole) est affich�, malgr� que le plugin soit d�sactiv�. Si non, le titre sera rempla�� par le contenu du champ "Titre � afficher lorsque le plugin est d�sactiv�" plus bas.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINETITLE','Titre � afficher lorsque le plugin est d�sactiv�');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINETITLE_DESC','Titre � afficher lorsque le plugin est d�sactiv� (d�pend de votre s�lection plus haut).');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINEDESC','Description � afficher lorsque le plugin est d�sactiv�');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINEDESC_DESC','La Description qui sera affich�e � la place de la description originale du fichier, lorsque le plugin est d�sactiv�.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT','Layout sp�cial (si plugin d�sactiv�)');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT_DESC','Le layout s�lectionn� ici est utilis� pour l\'affichage des fichiers dans les articles, lorsque le plugin est <b>d�sactiv�</b>.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT_OPT1','Non');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT_OPT2','Layout standard');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT_OPT3','Layout sp�cial');
DEFINE('_JLIST_FRONTEND_SETTINGS_FILEPLUGIN_OFFLINE_FILETITLE','Les t�l�chargements sont d�sactiv�s.');
DEFINE('_JLIST_FRONTEND_SETTINGS_FILEPLUGIN_DESCRIPTION','Si vous avez besoin des fichiers, veuillez prendre contact avec le webmestre.');
DEFINE('_JLIST_FRONTEND_SETTINGS_FILEPLUGIN_FILEUNKNOWN','Le fichier est introuvable! ID=<b>{fileid}</b>');
DEFINE('_JLIST_FRONTEND_SETTINGS_FILEPLUGIN_LAYOUTUNKNOWN','Le layout <b>{thelayout}</b> est introuvable!');

// NEW OPTIONS FOR DEFAULT CAT ICON
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_CAT_FILE_NO_DEFAULT_PIC','Aucun symbole s�lectionn�!');
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_CAT_PIC_TITLE','Symbole standard pour les cat�gories:');
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_CAT_PIC_DESC','Le symbole s�lectionn� ici sera utilis� automatiquement pour les nouvelles cat�gories. Il est affich� ici dans la taille s�l�ctionn�e plus haut.');

// NEW OPTIONS FOR DEFAULT FILE ICON
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_FILE_PIC_TITLE','Symbole standard pour les fichiers:');
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_FILE_PIC_DESC','Le symbole s�lectionn� ici sera utilis� automatiquement pour les nouveaux fichiers. Il est affich� ici dans la taille s�l�ctionn�e plus haut.');

// FOR MISSING NEW MINIPICS
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_PRICE','Prix');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_FILESIZE','Taille');

// FOR DATAFIELDS IN  DOWNLOAD DETAILVIEW
DEFINE('_JLIST_FE_DETAILS_CREATED_BY_TITLE','Cr�� par');
DEFINE('_JLIST_FE_DETAILS_MODIFIED_BY_TITLE','Modifi� par');
DEFINE('_JLIST_FE_DETAILS_MODIFIED_DATE_TITLE','Modifi� le');

// FOR EXTERN FILES -  USER INFO IF CHECKBOXES ACTIVE
// PLEASE USE NOT SPECIAL CHARS e.g. " ' & ...
DEFINE('_JLIST_FRONTEND_EXTERN_FILE_USER_INFO','Ce fichier doit �tre t�l�charg� s�par�ment puisque il se trouve sur un autre serveur. Par cons�quent, il n\'est pas appropri� pour un t�l�chargement group�.');DEFINE('_JLIST_FRONTEND_EXTERN_FILE_USER_INFO','Ce fichier doit �tre t�l�charg� s�par�ment puisque il se trouve sur un autre serveur. Par cons�quent, il n\'est pas appropri� pour un t�l�chargement group�.');

// FOR SAMPLE PIC IN EMAIL LAYOUT
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_EMAIL_INFO_TITLE','<b>Informations concernant le layout: E-Mails</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_EMAIL_INFO_TEXT','<p>Voici un exemple graqhique de la pr�sentation des informations du message transmis. De cadre en rouge fonc� indique la zone qui peut �tre adapt�e ici.</p>');

// ******************************************************************************
// NEW IN 1.4 pre-release
// ******************************************************************************

// INSTALL - MOVE  IMAGES DIRECTORIES TO JOOMLA/IMAGES/JDOWNLOADS
DEFINE('_JLIST_INSTALL_MOVE_IMAGES_ERROR','Probl�mes lors du d�placement des r�pertoires des images.');
DEFINE('_JLIST_INSTALL_MOVE_IMAGES_OK','R�pertoires des images d�plac�s avec succ�s vers  ../images/jdownloads/.');
DEFINE('_JLIST_INSTALL_MOVE_IMAGES_DEST_DIR_EXIST','Les r�pertoires des images ../images/jdownloads/ existent d�j�!');
DEFINE('_JLIST_INSTALL_MOVE_IMAGES_COPY_ERROR','ERREUR: Le r�pertoire des images n\'a pas pu �tre copi�!');
DEFINE('_JLIST_INSTALL_MOVE_IMAGES_DEL_AFTER_COPY_ERROR','ERREUR: Le r�pertoire source des images n\'a pas pu �tre supprim� apr�s la copie!');

DEFINE('_JLIST_BACKEND_SETTINGS_IMAGES_NOTE','Remarque: Lors de l\'installation de jDownloads, tous les r�pertoires des images seront d�plac�s vers le sous-r�pertoire: /images/jdownloads/. Par cons�quent, lors de la suppression de jDownloads (p.ex. avant l\'installation d\'une nouvelle release), plus aucune image ne sera perdue.');

// FOR MAIL AFTER FRONTEND UPLOADS
DEFINE('_JLIST_SETTINGS_INSTALL_6','Informations concernant un upload!');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_UPLOAD_HEAD','E-Mail Configurations pour uploads');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_UPLOAD_TEMPLATE_TITLE','E-Mail Layout');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_UPLOAD_TEMPLATE_DESC','Ici vous pouvez d�finir la pr�sentation des <b>E-Mails</b> qui sont envoy�s, apr�s chaque upload, � l\'adresse indiqu�e ci-dessus (si activ�). Vous pouvez utiliser du code HTML ainsi que n\'importe quel texte.<br /><br />Balises disponibles:<br />{name} {mail} {date} {ip} {file_title} {file_name} {description} ');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_DOWNLOAD_TEMPLATE_DESC','Ici vous pouvez d�finir la pr�sentation des <b>E-Mails</b> qui sont envoy�s, apr�s chaque t�l�chargement, � l\'adresse indiqu�e ci-dessus (si activ�). Vous pouvez utiliser du code HTML ainsi que n\'importe quel texte.<br /><br />Balises disponibles:<br />{file_list} {ip_address} {date_time} {user_name} {user_email} {user_group}'); // changed in 1.4 beta 
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_UPLOAD_TEMPLATE','Message concernant un upload de fichier!<br />
<br />
Envoyeur: {name}<br />
E-Mail: {mail}<br />
Adresse IP: {ip}<br /><br />
Nom du fichier: {file_name}<br />
Titre: {file_title}<br />
Description: {description}<br />
Date / Heure: {date}<br /><br />
Ce Message a �t� g�n�r� automatiquement.');

// NEW FOR NEW IMAGES
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_NEW_PIC_DESC2','Voici le choix des images du r�pertoire: <b>../images/jdownloads/newimages </b>.');

// FOR NEW OPTIONS: SCREENSHOT UPLOAD
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_TITLE','D�finir la taille des aper�us des images (Thumbnails)');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_INFO','Lors de l\'utilisation des captures d\'�crans, des aper�us r�duits des images (thumbnails) sont g�n�r�s automatiquement. Ici vous pouvez d�finir la taille de ces thumbnails. Remarque: La biblioth�que GD doit �tre install�e sur le serveur (Voir �tat).');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_STATUS_GD_OK','Etat: GD Library pr�sent!');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_STATUS_GD_NOT_OK','Etat: GD Library pas pr�sent!');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_SIZE_HEIGHT','Hauteur maximale en pixel (p.ex. 150).');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_SIZE_WIDTH','Largeur maximale en pixel (p.ex. 150).');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_CREATE_ALL_NEW_TITLE','Recr�er tous les aper�us des images lors de la sauvegarde? ');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_CREATE_ALL_NEW_DESC','Supprime tous les aper�us r�duits (thumbnails) lors de la sauvegarde de la configuration, et les reg�n�re, en utilisant les dimensions indiqu�es.');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_CREATE_ALL_MESSAGE','Tous les aper�us ont �t� recr��s ');

// NEW FIELDS IN EDIT FILES FOR SCREENSHOTS
DEFINE('_JLIST_BACKEND_FILESEDIT_THUMBNAIL_LIST_NO_PIC','Aucune image s�lectionn�e');
DEFINE('_JLIST_BACKEND_FILESEDIT_THUMBNAIL_LIST_TITLE','S�lectionner une image du serveur:');
DEFINE('_JLIST_BACKEND_FILESEDIT_THUMBNAIL_LIST_DESC','Ici sont � disposition toutes les images r�duites du r�pertoire <b>/images/jdownloads/screenshots/thumbnails</b>. L\'image activ�e peut �tre affich�e dans le layout au moyen de la balise {thumbnail}.');
DEFINE('_JLIST_BACKEND_FILESEDIT_THUMBNAIL_UPLOAD_TITLE','S�lectionner une image pour upload:');
DEFINE('_JLIST_BACKEND_FILESEDIT_THUMBNAIL_UPLOAD_DESC','Ici vous pouvez t�l�charger une image vers le serveur. Celle-ci sera utilis�e pour ce download. L\'original est m�moris� dans le r�pertoire <b>/images/jdownloads/screenshots</b>, et une version r�duite (thumbnail) est cr��e automatiquement.');

// FOR MIRROR LINK - JAVASCRIPT ERROR MESSAGE
DEFINE('_JLIST_BACKEND_FILESEDIT_ERROR_ONLY_MIRROR','Erreur: Veuillez d\'abord indiquer un fichier interne ou externe. Un lien miroir est uniquement possible comme suppl�ment.');

// FOR NEW MIRROR DOWNLOAD BUTTONS
DEFINE('_JLIST_BACKEND_SETTINGS_DETAILS_MIRROR_BUTTON_TITLE1','1. bouton miroir');
DEFINE('_JLIST_BACKEND_SETTINGS_DETAILS_MIRROR_BUTTON_TITLE2','2. bouton miroir');

// FOR NEW UPDATE ICON IN DOWNLOADS TITLE
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_NEW_PIC_DESC3','Ici sont � disposition toutes les images du r�pertoire: <b>../images/jdownloads/updimages </b>.');
DEFINE('_JLIST_BACKEND_SETTINGS_UPD_TITLE','Combien de temps un fichier est-il consid�r� comme "actualis�"');
DEFINE('_JLIST_BACKEND_SETTINGS_UPD_DESC','Veuillez indiquer ici le nombre de jours pendant lequel un fichier est consid�r� comme "actualis�". Le symbole s�lectionn� en bas sera affich� derri�re le titre du fichier. Un fichier est consid�r� comme actualis� lorsque l\'option correspondante du fichier a �t� activ�. Pas de symbole si vous indiquez 0.');

// FOR NEW OPTION - LOAD FILE IN BROWSER - NOT DOWNLOAD
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_VIEW_FILE_TYPES','Quels types doivent �tre ouverts directement dans le navigateur');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_VIEW_FILE_TYPES_DESC','Indiquez les types de fichiers qui ne sont pas consid�r�s comme t�l�chargements. Ils seront ouverts dans une nouvelle fen�tre du navigateur. Veuillez s�parer les entr�es avec des virgules (,). Exemple: html,htm,txt,pdf,doc,jpg,jpeg,png,gif');

//NEW FRONTEND PIC UPLOAD FIELD
DEFINE('_JLIST_FRONTEND_UPLOAD_PIC_FILETITLE','Capture d\'�cran:');
DEFINE('_JLIST_FRONTEND_UPLOAD_PIC_ALLOWED_FILES','Types permis:');

// NEW FILTER OPTION IN FILES LIST - BACKEND
DEFINE('_JLIST_BACKEND_FILESLIST_FILTER_PUBLISHED','publi�s');
DEFINE('_JLIST_BACKEND_FILESLIST_FILTER_UNPUBLISHED','non publi�s');

// NEW INFO WHEN USING LIGHTBOX PLACEHOLDER
DEFINE('_JLIST_BACKEND_TEMPEDIT_INFO_LIGHTBOX','Pour afficher des captures \'�cran avec la fonction Lightbox, vous devez utilier les balises comme suit: <br /><b>{screenshot_begin}< a href="{screenshot}" rel="lightbox" > < img src="{thumbnail}" align="right" /></a >{screenshot_end}</b><br />Remarque: les espaces du code HTML (derri�re les < et devant les >) ont �t� ajout�s pour des raisons de formatage de ce texte!'); // changed in 1.4 beta 

// ******************************************************************************
// new in 1.4 beta
// ******************************************************************************

// NEW OPTION FOR MANAGER ACCESS IN BACKEND
DEFINE('_JLIST_BACKEND_SETTINGS_MANAGER_ACCESS','Acc�s pour managers?');
DEFINE('_JLIST_BACKEND_SETTINGS_MANAGER_ACCESS_DESC','Si Oui, les membres du groupe Manager ont acc�s � toutes les fonctions du backend de jDownloads. Si Non, uniquement les administrateurs.');

// NEW OPTION FOR VIEW PLACEHOLDER IMAGE FOR SCREENSHOTS IN DETAIL SITE
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PLACEHOLDER_TITLE','Afficher image par d�faut des captures d\'�cran sur la page des d�tails?');
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PLACEHOLDER_TEXT','Si Oui, l\'image � gauche est affich�e sur la page de d�tails, au cas ou aucune capture d\'�cran n\'est s�lectionn� pour le fichier en cours.');

// NEW OPTION FOR VIEW PLACEHOLDER IMAGE FOR SCREENSHOTS IN FILESLIST
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PLACEHOLDER_IN_LIST_TITLE','Afficher image par d�faut des captures d\'�cran sur la page des listes de fichiers?');
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PLACEHOLDER_IN_LIST_TEXT','Si Oui, l\'image � gauche est affich�e sur la page de la liste des fichiers, au cas ou aucune capture d\'�cran n\'est s�lectionn� pour le fichier correspondant.');

// NEW OPTION FOR VIEW CATEGORY INFOS IN LISTVIEW - FRONTEND
DEFINE('_JLIST_BACKEND_SETTINGS_CAT_VIEW_INFO_IN_LISTS_TITLE','Afficher les informations des cat�gories?');
DEFINE('_JLIST_BACKEND_SETTINGS_CAT_VIEW_INFO_IN_LISTS_TEXT','So Oui, une ligne d\'information de la cat�gorie en cours est affich�e en dessous de la liste de navigation. Puisque le nom de la cat�gorie en cours est affich�e dans la liste de navigation, ceci n\'est pas toujours d�sir�');

// NEW OPTION FOR VIEW PAGE NAVIGATION ON THE BOTTOM - FRONTEND
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PAGENAVI_BOTTOM_TITLE','Afficher la liste de navigation en bas de page?');
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PAGENAVI_BOTTOM_TEXT','Si Oui, une liste de navigation est �galement affich�e en bas de page.');

// NEW OPTION FOR VIEW PAGE NAVIGATION ON THE TOP - FRONTEND
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PAGENAVI_TOP_TITLE','Afficher la liste de navigation en haut de la page?');
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PAGENAVI_TOP_TEXT','Si Oui, une liste de navigation est affich�e en haut de la page.');

// PUBLISH FILES MESSAGE IN BACKEND
DEFINE('_JLIST_BACKEND_EDIT_FILES_CAN_NOT_PUBLISH_INFO','Quelques t�l�chargements n\'ont pas eu d\'affectation � un fichier. Publication pas possible!');

DEFINE('_JLIST_BACKEND_EDIT_FILES_SET_UPDATE_TITLE','Marquer le t�l�chargement comme mis � jour:');
DEFINE('_JLIST_BACKEND_EDIT_FILES_SET_UPDATE_TEXT','Si Oui, le fichier actualis� sera accentu� optiquement (Symbole updated). Le temps, durant lequel un fichier reste dans l\'�tat actualis�, peut �tre r�gl� dans les options.');

// FOR NEW META INFORMATION FIELDS IN CAT AND FILES EDIT
DEFINE('_JLIST_BACKEND_EDIT_METADESC_TITLE','Meta description (meta-description):');
DEFINE('_JLIST_BACKEND_EDIT_METADESC_DESC','Ici vous pouvez introduire un texte qui sera ins�r� dans pa partie meta-description du code HTML g�n�r�.');
DEFINE('_JLIST_BACKEND_EDIT_METAKEY_TITLE','Mots-cl� Meta (meta-keywords):');
DEFINE('_JLIST_BACKEND_EDIT_METAKEY_DESC','Ici vous pouvez introduire un texte qui sera ins�r� dans la partie meta-keywords du code HTML g�n�r�.');

DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR_INFOS_TITLE','Informations concernant l\'auteur du fichier');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_HOME_DESC','Lien URL vers le site de l\'auteur. Il sera affich� comme lien dans le frontend.');
DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR_DESC','Lorsque vous introduisez un nom et en bas une adresse internet ou une adresse mail, celui-ci sera affich� respectivement comme lien vers une page internet ou comme lien vers une mail.');

// NEW PARAMETER IN SEARCH
DEFINE('_JLIST_FRONTEND_SEARCH_NUMBERS','Nombre de r�sultats de recherche');

// NEW USER INFO BY EXTERN SHAREHOSTER LINK
DEFINE('_JLIST_FRONTEND_DOWNLOAD_GO_TO_OTHER_SITE_INFO','Le fichier demand� se trouve sur une page d\'un fournisseur tiers. <br />Veuillez SVP suivre les instrictions de ce fournisseur pour d�marrer le t�l�chargement.');

// NEW OPTION IN  EDIT DOWNLOADS
DEFINE('_JLIST_BACKEND_FILESEDIT_OPEN_LINK_IN_OTHER_WEBSITE_TITLE','Fichier provient d\'une page d\'un autre fournisseur');
DEFINE('_JLIST_BACKEND_FILESEDIT_OPEN_LINK_IN_OTHER_WEBSITE_DESC','Si Oui, le fichier se trouve sur un site d\'un autre fournisseur que le v�tre (p.ex. Sharehoster), et le t�l�chargement doit �tre d�marr� sur le site de ce fournisseur. Le lien du bouton de t�l�chargement charge la page correspondante.');

// NEW SERVER INFO TAB IN CPANEL TAB
DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_5','Info serveur');
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_TITLE','Informations sur la configuration actuelle du serveur'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_DESC','La taille maximale des fichiers � t�l�charger d�pend de la configuration du serveur (php.ini). En bas vous voyez les valeurs actuelles. Assurez-vous que ces valeurs sont adapt�es � vos besoins. Si vous ne deviez pas avoir acc�s au fichier php.ini, veuillez vous adresser � votre FAI. Vous trouvez des informatios concernant les valeurs sur www.php.net.'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_FILE_UPLOADS','T�l�chargement autoris� (file_uploads):'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_MAX_FILESIZE','Taille max. permise (max_filesize):'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_POST_MAX_SIZE','Taille max. POST (post_max_size):'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_MEMORY_LIMIT','Syst�me limit� � (memory_limit):'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_MAX_EXECUTION_TIME','Temps max. de l\'ex�ution du script (max_execution_time):'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_MAX_INPUT_TIME','Temps max. de l\'ex�ution du script pour t�l�chargements (max_input_time):'); 

// NEW MESSAGE AFTER EDIT CATEGORIES AND CHANGING THE ACCESS LEVEL
DEFINE('_JLIST_BACKEND_CATSEDIT_SUM_CATS_ACCESS_LEVEL_CHANGED_AFTER_EDIT_MSG','Les sous-cat�gories ont re�u les m�mes droits!');
DEFINE('_JLIST_BACKEND_CATSEDIT_CATS_ACCESS_LEVEL_CAN_NOT_CHANGED_MSG','Remarque: Une souscat�gorie ne peut pas avoir des droits qui sont inf�rieurs � la cat�gorie au-dessus. Pour cette raison les droits ont �t�s adapt�s.');

// NEW MINI ICON TITLE
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_DOWNLOAD_HITS','T�l�chargements');
// ADDITIONAL INFO IN FILES LAYOUT
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DESC2','A l\'aide des balises {files_title_begin} {files_title_text} {files_title_end} vous pouvez ins�rer un ligne de titre au-dessus de la liste des fichiers.'); 
// ADDITIONAL INFO IN CAT LAYOUT
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_DESC2','A l\'aide des balises {cat_title_begin} {subcats_title_text} {cat_title_end} vous pouvez ins�rer un ligne de titre au-dessus de la liste des cat�gories.'); 
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_DESC3','Les balises {cat_info_begin} et {cat_info_end} marquent la zone qui contient les informations concernant la cat�gorie. Dans la configuration, cette zone peut �tre masqu�e.'); 

// NEW MESSAGES FOR INSTALLATION
DEFINE('_JLIST_INSTALL_20','V�rification des droits en cours... Veuillez attendre SVP!');
DEFINE('_JLIST_INSTALL_21','Verification des droits termin�e.');

// NEW IN 1.4 beta (2)

// NEW TEXT FOR LAYOUT FIELDS TITLE PLACEHOLDERS IN THE FRONTEND VIEW  (layout: files)
DEFINE('_JLIST_FE_FILELIST_LICENSE_TITLE','Licence');
DEFINE('_JLIST_FE_FILELIST_PRICE_TITLE','Prix');
DEFINE('_JLIST_FE_FILELIST_LANGUAGE_TITLE','Langue');
DEFINE('_JLIST_FE_FILELIST_FILESIZE_TITLE','Taille');
DEFINE('_JLIST_FE_FILELIST_SYSTEM_TITLE','Syst�me');
DEFINE('_JLIST_FE_FILELIST_AUTHOR_TITLE','Auteur');
DEFINE('_JLIST_FE_FILELIST_AUTHOR_URL_TITLE','Page Web');
DEFINE('_JLIST_FE_FILELIST_CREATED_DATE_TITLE','Date');
DEFINE('_JLIST_FE_FILELIST_HITS_TITLE','T�l�chargements');
DEFINE('_JLIST_FE_FILELIST_CREATED_BY_TITLE','Cr�� par');
DEFINE('_JLIST_FE_FILELIST_MODIFIED_BY_TITLE','Modifi� par');
DEFINE('_JLIST_FE_FILELIST_MODIFIED_DATE_TITLE','Derni�re modification');
// NEW FOR PLACEHOLDER   {files_title_text} and  {subcats_title_text}  {details_block_title}
DEFINE('_JLIST_FE_FILELIST_TITLE_OVER_FILES_LIST','Fichiers:');
DEFINE('_JLIST_FE_FILELIST_TITLE_OVER_SUBCATS_LIST','Sous-cat�gories:');
DEFINE('_JLIST_FE_DETAILS_DATA_BLOCK_TITLE','Donn�es');
// NEW PLACEHOLDERS FOR SUMMARY PAGE  {license_note}  {title_text}
DEFINE('_JLIST_FE_SUMMARY_PAGE_LICENSE_NOTE','En t�l�chargeant, vous acceptez les conditions de la licence.');
DEFINE('_JLIST_FE_SUMMARY_PAGE_TITLE_TEXT','Ici vous pouvez voir la liste des fichiers s�lectionn�s pour le t�l�chargement');

// NEW INSTALL MESSAGES FOR UPDATE
DEFINE('_JLIST_INSTALL_WARNING_CAT_ACCESS_RIGHTS','Il y a eu des changements dans les param�tres des droits des cat�gories. Veuillez contr�ler vos cat�gories avant leur publication!');
DEFINE('_JLIST_INSTALL_WARNING_DEFAULT_LAYOUTS_ARE_ACTIVE','Suite � l\'introduction de nouvelles balises, les nouveaux layouts standards 1.4 ont �t� activ�s. Vous pouvez les changer dans les param�tres des layouts.');

?>