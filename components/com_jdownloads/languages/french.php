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
DEFINE('_JLIST_INSTALL_1','Tous les fichiers de configuration existent dans la base de données!');
DEFINE('_JLIST_INSTALL_2','Le fichier de configuration a été mis à jour.');
DEFINE('_JLIST_INSTALL_3','Tous les layouts existent dans la base de données!.');
DEFINE('_JLIST_INSTALL_4','Layouts par défaut créés dans la base de données!');
DEFINE('_JLIST_INSTALL_5','Toutes les licences définies par défaut existent dans la base de données!');
DEFINE('_JLIST_INSTALL_6','Licences par défaut créées dans la base de données!');
DEFINE('_JLIST_INSTALL_7','Le répertoire de téléchargement /downloads existe et est accessible en écriture!');
DEFINE('_JLIST_INSTALL_8','Le répertoire de téléchargement /downloads existe mais n\'est PAS accessible en écriture. Veuillez changer les permissions CHMOD à 0777 pour le répertoire de téléchargement sinon jDownloads ne fonctionnera pas!');
DEFINE('_JLIST_INSTALL_9','Le répertoire de téléchargement /downloads a été créé avec permissions CHMOD 0777.');
DEFINE('_JLIST_INSTALL_10','Erreur: le répertoire de téléchargement /downloads n\'a pas pu être créé!<br />Veuillez le créer manuellement vous-même via FTP et définir les droits CHMOD à 0777 pour le répertoire de téléchargement, sinon jDownloads ne fonctionnera pas!');
DEFINE('_JLIST_INSTALL_11','Le répertoire temporaire /downloads/tempzipfiles pour les fichiers .zip existe et est accessible en écriture!');
DEFINE('_JLIST_INSTALL_12','Le répertoire temporaire /downloads/tempzipfiles existe mais n\'est pas accessible en écriture. Veuillez changer les permissions CHMOD à 0777 pour le répertoire temp, sinon jDownloads ne fonctionnera pas!');
DEFINE('_JLIST_INSTALL_13','Répertoire /downloads/tempzipfiles créé et accessible en écriture CHMOD 0777 - OK.');
DEFINE('_JLIST_INSTALL_14','Erreur: le répertoire .zip /downloads/tempzipfiles n\'a pas pu être créé!<br />Veuillez le créer manuellement vous-même via FTP et définir les droits CHMOD à 0777 pour le répertoire .zip.<br />Sinon jDownloads ne fonctionnera pas!');
DEFINE('_JLIST_INSTALL_15','Installation réussie!');
DEFINE('_JLIST_INSTALL_16','Démarrer jDownloads!');

DEFINE('_JLIST_INSTALL_DB_TIP','Info: si vous désinstallez jDownloads, les définitions dans la base de données ne sont pas supprimées. Ainsi, si vous réinstallez ultérieurement une nouvelle version, les données ne seront pas perdues.');
DEFINE('_JLIST_INSTALL_TITLE_FOR_DEFAULT_LAYOUTS','Standard');

//FRONTEND

DEFINE('_JLIST_FILE_NOT_FOUND','Le fichier requis n\'a pas été trouvé. Veuillez informer le responsable du site web.');
DEFINE('_JLIST_LINKTEXT_VIEW_FILE_TYPES','Démarrage téléchargement<br />(affichage dans une nouvelle fenêtre du browser)');
DEFINE('_JLIST_LINKTEXT_ZIP','Démarrer le téléchargement');
DEFINE('_JLIST_LINKTEXT_DOWNLOAD_URL','Téléchargement');
DEFINE('_JLIST_LINKTEXT_HOME','Accueil');
DEFINE('_JLIST_DEL_ZIP_ADMIN_INFO','<br />Information: une erreur est survenue pendant la suppression des fichiers zip temporaires ou le fichier n\'existait pas!');
DEFINE('_JLIST_FORM_BUTTON_TEXT','Suite');
DEFINE('_JLIST_EMPTY_CAT_TEXT','Cette catégorie ne contient aucun fichier.<br /><br />');
DEFINE('_JLIST_MAIL_DOWNLOADER_NAME_VISITOR','Visiteur');
DEFINE('_JLIST_MAIL_DOWNLOADER_GROUP','Invité');
DEFINE('_JLIST_MAILSEND_ERROR','Une erreur est survenue durant l\'envoi de cet E-Mail!');
DEFINE('_JLIST_FRONTEND_COUNT_SUBCATS','Sous-catégories:');
DEFINE('_JLIST_FRONTEND_COUNT_FILES','Fichiers:');
DEFINE('_JLIST_FRONTEND_HOMEPAGE','Accueil');
DEFINE('_JLIST_FRONTEND_BACK_BUTTON','Retour');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_DATE','Date');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_LICENCE','Licence');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_AUTHOR','Auteur');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_WEBSITE','Page web');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_SYSTEM','Système');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_LANGUAGE','Langue');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_DOWNLOAD','Téléchargement');
DEFINE('_JLIST_FRONTEND_VERSION_TITLE','v.');       // e.eg. v.1.2.3
DEFINE('_JLIST_FRONTEND_CAT_ACCESS_REGGED','Veuillez SVP vous inscrire ou vous identifier pour télécharger les fichiers de cette catégorie.<br /><br />');

//BACKEND TOOLBAR
DEFINE('_JLIST_BACKEND_COMPONENT_NAME','JDownloads');
DEFINE('_JLIST_BACKEND_TOOLBAR_MAIN','Menu');
DEFINE('_JLIST_BACKEND_TOOLBAR_EDIT','Editer');
DEFINE('_JLIST_BACKEND_TOOLBAR_REMOVE','Supprimer');
DEFINE('_JLIST_BACKEND_TOOLBAR_CLOSE','Fermer');
DEFINE('_JLIST_BACKEND_TOOLBAR_SUBMAIN','Layouts');

//BACKEND CPANEL
DEFINE('_JLIST_BACKEND_CPANEL_FILES','Fichiers');
DEFINE('_JLIST_BACKEND_CPANEL_CATEGORIES','Catégories');
DEFINE('_JLIST_BACKEND_CPANEL_LICENSE','Licenses');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES','Administration Layouts');
DEFINE('_JLIST_BACKEND_CPANEL_BACKUP','Créer une sauvegarde');
DEFINE('_JLIST_BACKEND_CPANEL_SETTINGS','Configuration');
DEFINE('_JLIST_BACKEND_CPANEL_RESTORE','Restaurer une sauvegarde');
DEFINE('_JLIST_BACKEND_CPANEL_INFO','Conditions d\'utilisation');
DEFINE('_JLIST_BACKEND_CPANEL_SUPPORT','Support');

// RESULTS FROM AUTOCHECKFILES OPTION
DEFINE('_JLIST_BACKEND_AUTOCHECK_TITLE','Informations concernant la vérification de la zone de téléchargement:');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NEW_FILES','Nouveaux fichier(s) trouvé(s) et ajouté(s) dans la zone de téléchargement!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_MISSING_FILES','Fichier(s) non trouvé(s). Les téléchargements correspontants on été modifiés en non-public !');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NO_NEW_FILES','Pas de nouveau(x) fichier(s) trouvé(s)!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NO_MISSING_FILES','Tous les fichiers existent!');

DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_STATUS','Etat');
DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_2','Version');
DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_3','Log');


// STATUS
DEFINE('_JLIST_BACKEND_PANEL_STATUS_OFFLINE_HEADER','Etat de la zone de téléchargement');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_TITEL','<font color="#990000"><b><big>Etat la zone de téléchargement:</big></b></font>');

DEFINE('_JLIST_BACKEND_PANEL_STATUS_DESC_ONLINE','Le mode de maintenance n\'est pas activé. la zone de téléchargement est accessible par les visiteurs.');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_ONLINE','<font color="green"><b><big> ONLINE!</big></b></font>');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_OFFLINE','<font color="red"><b><big> OFFLINE!</big></b></font>');

// OFFLINE
DEFINE('_JLIST_BACKEND_OFFLINE_OPTION_TITLE','Activer maintenance?');
DEFINE('_JLIST_BACKEND_OFFLINE_OPTION_DESC','Cette option met hors ligne l\'affichage de la zone de téléchargement lors de la maintenance. Les visiteurs verront uniquement les textes de base et seuls les visiteurs identifiés comme auteur voient la zone de téléchargement.');
DEFINE('_JLIST_BACKEND_OFFLINE_MESSAGE_TITLE','Note pour les visiteurs');
DEFINE('_JLIST_BACKEND_OFFLINE_MESSAGE_DEFAULT','<table width="70%" align="center" cellspacing="0" cellpadding="20" border="1"><tr><td align="center"><h3>Actuellement, jDownloads est en maintenance<br /><br />Veuillez ressayer dans quelques minutes.</h3><br /><img src="components/com_jdownloads/images/offline.png" /></td></tr></table>');
DEFINE('_JLIST_BACKEND_OFFLINE_MESSAGE_DESC','Texte présenté au visiteur lorsque la zone de téléchargement est en cours de maintenance.');
DEFINE('_JLIST_BACKEND_OFFLINE_ADMIN_MESSAGE_TEXT','<p align="center"><b><big>Les téléchargements sont OFFLINE!</big></b></p>'); // changed in 1.3 RC2

//BACKEND SETTINGS
DEFINE('_JLIST_BACKEND_SETTINGS','Configuration');
DEFINE('_JLIST_BACKEND_SETTINGS_SAVED','Configuration sauvegardée');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_HEAD','Configuration E-Mail pour téléchargements');  // changed in 1.3 rc2
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_FILES_HEAD','Configuration Téléchargements');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_FRONTEND_HEAD','Configuration Frontend');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_BACKEND_HEAD','Configuration Backend');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_SECURITY_HEAD','Paramètres de Sécurité');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_IMAGES_HEAD','Paramètres Images/Icônes');

DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_DOWNLOADS','Téléchargem.');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_FRONTEND','Frontend');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_BACKEND','Backend');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_IMAGES','Images');   // changed in 1.3 RC2
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_SECURITY','Sécurité');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_EMAIL','E-Mail');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_SONSTIGE','Autres');

DEFINE('_JLIST_BACKEND_SETTINGS_DATETIME','Format Date-Heure');
DEFINE('_JLIST_BACKEND_SETTINGS_DATETIME_DESC','Informations relatives à la syntaxe du format date-heure: <a href="http://www.php.net/manual/fr/function.date.php" target="_blank">www.php.net</a>');

DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIR','Répertoire de téléchargement');
DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIR_DESC','Répertoire principal avec ses sous-répertoires pour le stockage des fichiers. <b>Ce</b> répertoire et <b>tous</b> les sous-répertoires doivent être accessibles en écriture!');

DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIRTEMP','Répertoire temporaire de téléchargement');
DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIRTEMP_DESC','Ce répertoire doit exister et être accessible en écriture! Il contient les fichiers .zip créés temporairement pendant les téléchargements (ils sont automatiquement supprimés en fin de téléchargement).');

DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_1','Standard');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_2','Nouveaux en premier');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_3','Nouveaux en dernier');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_4','Nom ascendant');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_5','Nom descendant');

// E-Mail config
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_OPTION_DESC','Si ce paramètre est activé, un E-Mail est envoyé à l\'adresse spécifiée ci-dessous, après chaque téléchargement.');
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_OPTION','Activer E-Mail?');

DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_DESC','Adresse E-Mail à utiliser pour envoi des informations de téléchargement.');
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO','Adresse E-Mail');

DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_HTML_DESC','Si cette option est activée, les E-Mails sont envoyés en format HTML; si non, en texte normal.');
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_HTML','Utiliser format HTML?');

DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_BETREFF_DESC','Texte à utiliser comme "Sujet" de l\'E-Mail.');
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_BETREFF','Sujet');


// View Frontend Config settings
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_VIEW_HEAD','Options d\'affichage du composant Frontend');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_COMPO_TEXT','Description du composant');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_COMPO_TEXT_DESC','Texte affiché <b>entre</b> le titre du composant et ses catégories. Le titre du composant est automatiquement dérivé du nom de l\'option menu.<br /><br />Des classes CSS, du code HTML et un texte libre peuvent être inclus.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CHECKBOX_TEXT','Texte case à cocher');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CHECKBOX_TEXT_DESC','Texte affiché près de la première case à cocher, présente sur le dessus d\'une liste.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SORTFILESORDER_TEXT','Ordre de tri');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SORTFILESORDER_DESC','Ordre de tri des fichiers dans le Frontend. Selectionner l\'option  "Standard" pour utiliser le critère de tri par défaut du Backend.');

// View images seetings
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SHOW_MINIPICS','Afficher les icônes d\'information?');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SHOW_MINIPICS_DESC','Si activé, une icône est affichée près de la liste des informations d\'un fichier (Licence, Auteur, etc.). Si désactivé, il est conseillé d\'insérer des textes d\'information dans le layout des fichiers.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_MINIPICS_SIZE','Taille en pixels des icônes d\'information');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_MINIPICS_SIZE_DESC','Taille d\'affichage pour les icônes d\'information. Standard: 20');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CATPICS_SIZE','Taille en pixels des icônes associées aux catégories');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CATPICS_SIZE_DESC','Taille d\'affichage pour les icônes des catégories. Vous pouvez utiliser vos propres icônes, ceux-ci doivent être transférées dans le sous-répertoire: /catimages. Standard: 48');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FILEPICS_SIZE','Taille en pixels des icônes associées aux fichiers');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FILEPICS_SIZE_DESC','Taille d\'affichage pour les icônes des fichier(s). Vous pouvez utiliser vos propres icônes, ceux-ci doivent être transférées dans le sous-répertoire: /fileimages. Standard: 32');

// View backend security settings
DEFINE('_JLIST_BACKEND_SETTINGS_MAIL_SECURITY_DESC','Si oui, les adresses E-Mail ne seront pas affichées en clair pour éviter aux Spambots de les récupérer. Les visiteurs qui n\'ont pas Javascript activé ne pourront pas afficher les liens. Conseillé: Oui.');
DEFINE('_JLIST_BACKEND_SETTINGS_MAIL_SECURITY_TITEL','Camoufler les adresses E-Mail:');

// View backend Config settings
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_LAYOUTS','Editeur WYSIWYG pour les layouts');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_LAYOUTS_DESC','Si activé, l\'éditeur WYSIWIG sélectionné sera utilisé pour la modification des layouts. Sinon, un simple champ de texte est affiché. Conseillé: Non.');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_FILES','Editeur WYSIWYG pour les téléchargements');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_FILES_DESC','Si activé, l\'éditeur WYSIWIG sélectionné sera utilisé pour la modification des téléchargements. Sinon, un simple champ de texte est affiché. Conseillé: Non.');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_CATS','Editeur WYSIWYG pour les catégories');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_CATS_DESC','Si activé, l\'éditeur WYSIWIG sélectionné sera utilisé pour la modification des catégories. Sinon, un simple champ de texte est affiché. Conseillé: Non.');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_LICENSES','Editeur WYSIWYG pour les licences');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_LICENSES_DESC','Si activé, l\'éditeur WYSIWIG sélectionné sera utilisé pour la modification des licences. Sinon, un simple champ de texte est affiché. Conseillé: Non.');

DEFINE('_JLIST_BACKEND_SETTINGS_FILE_SYSTEM_LIST','Liste des options pour le champ "Système" des téléchargements');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_SYSTEM_LIST_DESC','Vous pouvez définir ici les options de ce champ. Un séparateur "," est nécessaire entre chaque option. <br /></br><b>Remarque importante:</b> Si des téléchargements sont déjà présents dans la zone de téléchargement, soyez attentif car chaque modification est répercutée sur les téléchargements existants. Exemple: les téléchargements sauvegardées avec système ="Joomla 1.5" seront associés à une autre valeur, par exemple "Windows Vista". Si vous voulez ajouter des nouvelles valeurs, ajoutez les en fin de liste.');

DEFINE('_JLIST_BACKEND_SETTINGS_FILE_LANGUAGE_LIST','Liste des options pour le champ "Langue" des téléchargements');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_LANGUAGE_LIST_DESC','Vous pouvez définir ici les options de ce champ. Un séparateur "," est nécessaire entre chaque option. <br /></br><b>Remarque importante:</b> Si des téléchargements sont déjà présents dans la zone de téléchargement, soyez attentif car chaque modification est répercutée sur les téléchargements existants. Exemple: les téléchargements sauvegardées avec langue ="Français" seront associés à une autre valeur, par exemple "Anglais". Si vous voulez ajouter des nouvelles valeurs, ajoutez les en fin de liste.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_ZIPFILE_PREFIX_TEXT','Nom par défaut pour fichiers ZIP');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_ZIPFILE_PREFIX_DESC','Si plusieurs fichiers sont sélectionnés simultanément pour le téléchargement, ces fichiers sont automatiquement archivés dans un fichier ZIP temporaire et présentés à l\'utilisateur comme un fichier unique à télécharger. Le nom du fichier ZIP est créé sur base du préfixe spécifié ici, et associé à un nombre aléatoire.');

// Templates Config Backend
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_HEAD','<b>Les Layouts déterminent la manière dont le contenu est affiché dans le Frontend.</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_HEAD_INFO','<br />Plusieurs layouts standards sont automatiquement inclus lors de l\'installation. Ils peuvent être adaptés selon vos désirs et de nouveaux layouts peuvent être créés. Une option de configuration permet le choix entre l\'editeur WYSIWIG ou un champ de texte simple lors de leur modification .<br /><br />Dans le cas ou le code HTML généré pour le frontend ne fonctionnerait pas correctement après modification des <b>layouts "défaut"</b>, le <b>contenu d\'origine</b> (c\'est à dire le contenu juste après l\'installation) peut être restauré à tout moment. Pour ce faire, supprimez<b> tous les textes</b> dans les champs respectifs du layout par défaut et sélectionnez l\'option <b>Sauvgarder</b>. Le formulaire sera sauvegardé avec son contenu d\'origine. <b>Attention:</b> les changements déjà effectués seront perdus.<br /><br />Remarque: plusieurs balises sont utilisées dans les layouts (par exemple <font color=darkred>{files}</font>). Les balises sont automatiquement remplacées par leurs valeurs réelles lors de la génération de la page web.<br />');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS','Layout: Catégories');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_DESC','Ce layout définit comment les <b>catégories</b> sont affichées dans le frontend. <br />Si vous avez activé l\'option <b>Affichage page d\'accueil avec sommaire des catégories</b> dans les options de configuration globales du composant, les balises {files} et {checkbox_top} sont seulement utilisées pour l\'affichage simplifiée des catégories.<br /><br />Les balises <font color=red>{files} {form_hidden} {form_button} {checkbox_top}</font> <font color=red>ne doivent pas</font> être supprimées du code! Supprimez uniquement la balise {checkbox_top} du code si la balise {url_download} est utilisée dans le code du layout. La balise {files} est automatiquement remplacée par les données associées au layout fichier. <br /><br />Les balises disponibles sont:<br />{cat_title} {cat_description} {files} {checkbox_top} {sum_files_cat}');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_INFO_TITLE','<b>Informations relatives au Layout "Catégorie":</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_INFO_TEXT','<p>Présentation graphique de l\'affichage dans le frontend résultant pour description de la catégorie. La bordure rouge indique le contenu que vous pouvez changer à partir des définitions layout ci-dessus. </p>');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES','Layout: Fichiers');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DESC','Ce layout définit comment les <b>fichiers</b> sont affichés dans le frontend en dessous de la description de la catégorie.<br /><br />Balises disponibles:<br />{checkbox_list} {cat_id} {file_id} {file_title} {release} {pic_is_new} {pic_is_hot} {pic_is_updated} {thumbnail} {description} {link_to_details} {file_pic} {price_title} {price_value} {license_title} {license_text} {language_title} {language_text} {filesize_title} {filesize_value} {system_title} {system_text} {author_title} {author_text} {author_url_title} {author_url_text} {created_date_title} {created_date_value} {hits_title} {hits_value} {created_by_title} {created_by_value} {modified_by_title} {modified_by_value} {modified_date_title} {modified_date_value}'); // changed in 1.4 beta (2)
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_INFO_TITLE','<b>Informations relatives au Layout "Fichiers":</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_INFO_TEXT','<p>Exemple d\'affichage de la liste par le frontend. Vous pouvez modifier les éléments visualisés dans la boîte avec une bordure rouge.</p>');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL','Layout: Sommaire / Démarrage téléchargement');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL_DESC','Ce layout définit comment le <b>résumé</b> des fichiers à téléchargér est affiché par le frontend. Une liste des fichiers sélectionnés pour le téléchargement est présentée à l\'utilisateur avant le téléchargement.<br />Avec ce layout, vous pouvez modier la présentation de la page "résumé". Des classes CSS, du code HTML ainsi que du texte libre peuvent y être inclus.<br /><br />La balise <font color=red>{download_liste}</font> ne devrait <font color=red>PAS</font> être supprimée de ce code!<br /><br />Les balises disponibles sont:<br />{summary_pic} {title_text} {download_liste} {license_note} {download_link} {external_download_info}'); // changed in 1.4 beta (2)
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL_INFO_TITLE','<b>Informations relatives au Layout "Résumé"</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL_INFO_TEXT','<p>Exemple d\'affichage du résumé par le frontend. La bordure rouge indique la zone que vous pouvez modifier de par ce layout. </p>');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_MAIL','Layout: E-Mail');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_MAIL_DESC','Ce layout vous permet de formater les<b>E-Mails</b> qui (si l\'option dans ls configuration est activée) seront envoyés à l\'adresse E-Mail spécifiée (dans la configuration) lors de chaque téléchargement. Du code HTML ainsi que du texte libre peuvent y être inclus.<br /><br />Balises disponibles:<br /> {file_list} {ip_address} {user_name} {user_group}');

//BACKEND CATSLIST
DEFINE('_JLIST_BACKEND_CATSLIST_TITLE_HEAD','Catégories');
DEFINE('_JLIST_BACKEND_CATSLIST_SEARCH','Rechercher');
DEFINE('_JLIST_BACKEND_CATSLIST_SEARCH_LIMIT','Limite');

DEFINE('_JLIST_BACKEND_CATSLIST_TITLE','Catégories');
DEFINE('_JLIST_BACKEND_CATSLIST_PIC','Symbole - Icône');
DEFINE('_JLIST_BACKEND_CATSLIST_PUBLISHED','Publié');
DEFINE('_JLIST_BACKEND_CATSLIST_LINK_TEXT','Lien');
DEFINE('_JLIST_BACKEND_CATSLIST_LINK','Lien');
DEFINE('_JLIST_BACKEND_CATSLIST_CATID','ID-Catégorie');
DEFINE('_JLIST_BACKEND_CATSLIST_READ','Lire');
DEFINE('_JLIST_BACKEND_CATSLIST_DOWNLOAD','Télécharger');
DEFINE('_JLIST_BACKEND_CATSLIST_ORDERING','Trier');
DEFINE('_JLIST_BACKEND_CATSLIST_DEL',' Catégorie(s) supprimée(s).');

// access controll info
DEFINE('_JLIST_BACKEND_CATSLIST_ACCESS_ALL','Tous');
DEFINE('_JLIST_BACKEND_CATSLIST_ACCESS_REGGED','Enregistrés');
DEFINE('_JLIST_BACKEND_CATSLIST_ACCESS_ADMINS','Spéciaux');

//BACKEND CATSEDIT
DEFINE('_JLIST_BACKEND_CATSEDIT_TITLE','Editer catégorie');
DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_TITLE','Titre de la catégorie obligatiore!');
DEFINE('_JLIST_BACKEND_CATSEDIT_SUC_PUBL',' Catégorie(s) publiée(s).');
DEFINE('_JLIST_BACKEND_CATSEDIT_SUC_UNPUBL',' Catégorie(s) dépubliée(s).');
DEFINE('_JLIST_BACKEND_CATSEDIT_SAVE_ERROR_DIR','Erreur: Le répertoire ne pouvait pas être renommé!');
DEFINE('_JLIST_BACKEND_CATSEDIT_EDIT','Editer Catégorie');
DEFINE('_JLIST_BACKEND_CATSEDIT_ADD','Ajouter Catégorie');
DEFINE('_JLIST_BACKEND_CATS_SAVEORDER','Nouveau tri sauvegardé');
DEFINE('_JLIST_BACKEND_CATS_USED','Cette catégorie est en cours de modification par un autre administrateur.');
DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_CAT_COPY','Erreur lors de la copie des répertoires de la catégorie!');

DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_DESCRIPTION','Description de la catégorie');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_PIC_TEXT','Sélection de l\'icône de la catégorie');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_PIC_PREVIEW','Prévisualisation icône');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_PIC_DESC','Le symbole (icône) sélectionné peut être affiché avec la balise {cat_pic} dans le layout Catégorie.');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_TITLE','Définition des permissions');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_DESC','Définit les permissions de téléchargement pour la Catégorie sélectionnée. Si vous sélectionnez "Spéciaux", les membres avec le statut Auteur pourront lire et télécharger.');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_1','Lecture et téléchargement autorisés pour tous les visiteurs (Public)');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_2','Lecture pour tous, téléchargements autorisés pour utilisateurs enregistrés');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_3','Seuls les membres enregistrés peuvent lire et télécharger');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_4','Seuls les membres spéciaux peuvent lire et télécharger');

//BACKEND FILESLIST
DEFINE('_JLIST_BACKEND_FILESLIST_TITLE','Téléchargements');
DEFINE('_JLIST_BACKEND_FILESLIST_SEARCH','Recherche');
DEFINE('_JLIST_BACKEND_FILESLIST_SEARCH_LIMIT','Limite');
DEFINE('_JLIST_BACKEND_FILESLIST_CATS','Toutes les Catégories');
DEFINE('_JLIST_BACKEND_FILESLIST_NOCATS','Aucune Catégorie');
DEFINE('_JLIST_BACKEND_FILESLIST_FILE','Téléchargements');
DEFINE('_JLIST_BACKEND_FILESLIST_HITS','Nombre de téléchargements');
DEFINE('_JLIST_BACKEND_FILESLIST_CAT','Catégorie');
DEFINE('_JLIST_BACKEND_FILESLIST_RELEASE','Version');
DEFINE('_JLIST_BACKEND_FILESLIST_DESCRIPTION','Description');
DEFINE('_JLIST_BACKEND_FILESLIST_DADDED','Date');
DEFINE('_JLIST_BACKEND_FILESLIST_FILENAME','Nom fichier');
DEFINE('_JLIST_BACKEND_FILESLIST_AUTHOR','Auteur');
DEFINE('_JLIST_BACKEND_FILESLIST_PUBLISHED','Publié');
DEFINE('_JLIST_BACKEND_FILESLIST_ORDERING','Ordre');
DEFINE('_JLIST_BACKEND_FILESLIST_DEL',' Téléchargement(s) supprimé(s)');
DEFINE('_JLIST_BACKEND_FILES_SAVEORDER','Nouveu tri sauvegardé');
DEFINE('_JLIST_BACKEND_FILES_USED','Ce téléchargement est en cous de modification par un autre administrateur.');

//BACKEND FILESEDIT
DEFINE('_JLIST_BACKEND_FILESEDIT_TABTITLE_1','Paramètres');
DEFINE('_JLIST_BACKEND_FILESEDIT_TABTITLE_2','Options');
DEFINE('_JLIST_BACKEND_FILESEDIT_TABTITLE_3','Fichier');

DEFINE('_JLIST_BACKEND_FILESEDIT_TITLE','Modifier Téléchargement');
DEFINE('_JLIST_BACKEND_FILESEDIT_SENT_IN_FROM','Ce fichier a été soumis par: ');
DEFINE('_JLIST_BACKEND_FILESEDIT_SAVE','Téléchargement sauvegardé.');
DEFINE('_JLIST_BACKEND_FILESEDIT_EDIT','Modifier Téléchargement');
DEFINE('_JLIST_BACKEND_FILESEDIT_ADD','Ajouter Téléchargement');
//DEFINE('D_JLIST_BACKEND_FILESEDIT_FILE_LIST_DESC','Hier kann eine Datei f&uuml;r diesen Download ausgew&auml;hlt werden, die sich bereits auf dem Server befindet. Es werden nur die Dateien des Kategorie-Verzeichnisses angezeigt, welches der auf der Seite "Grunddaten" markierten Kategorie entspricht.');
DEFINE('_JLIST_BACKEND_FILESEDIT_ROOT_DIR_TITLE','Répertoire RACINE de téléchargement');
DEFINE('_JLIST_BACKEND_FILESEDIT_UPLOAD_DIR_LIST_INFO_1','Tous les sous répertoires sont accessibles en écriture!');
DEFINE('_JLIST_BACKEND_FILESEDIT_UPLOAD_DIR_LIST_INFO_2','Les sous répertoires ne sont <b>PAS</b> accessibles en écriture! Vérifiez les permissions CHMOD 0777 sur le serveur');
DEFINE('_JLIST_BACKEND_FILESEDIT_CHECK_PERMISSIONS','Les fichiers ne peuvent être transférés. Vérifiez les permissions CHMOD 0777 sur le serveur');

// language
DEFINE('_JLIST_BACKEND_FILESEDIT_LANGUAGE','Langue');
DEFINE('_JLIST_BACKEND_FILESEDIT_LANGUAGE_DEFAULT_LIST','Sélectionner:, Français, Anglais, Allemand, Italien, Espagnol, Portugais, Russe, Polonais, Holandais, Voir description');
// system
DEFINE('_JLIST_BACKEND_FILESEDIT_SYSTEM','Système');
DEFINE('_JLIST_BACKEND_FILESEDIT_SYSTEM_DEFAULT_LIST','Sélectionner:, Joomla 1.0, Joomla 1.5, Windows XP, Windows Vista, Linux, MacIntosh');

DEFINE('_JLIST_BACKEND_FILESEDIT_LICENSES_LIST','Selectionnez la License');
DEFINE('_JLIST_BACKEND_FILESEDIT_REMOVE_OK','Fichier supprimé.');
DEFINE('_JLIST_BACKEND_FILESEDIT_SUC_PUBL',' Téléchargement(s) publié(s).');
DEFINE('_JLIST_BACKEND_FILESEDIT_SUC_UNPUBL',' Téléchargement(s) dépublié(s).');

DEFINE('_JLIST_BACKEND_FILESEDIT_REQUIRES_INFO','Les champs marqués <b><font color=red>*</font></b> doivent être impérativement remplis!');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_TITLE','Titre <b><font color=red>*</font></b>');
DEFINE('_JLIST_BACKEND_FILESEDIT_DESCRIPTION','Description');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FPIC_TEXT','Selectionnez une icône pour le Fichier');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FPIC_PREVIEW','Prévisualisation');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FPIC_DESC','L\'icône sélectionnée ne peut être affiché en superposition sur une balise.');

DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_CAT','Attribuer une catégorie <b><font color=red>*</font></b>');

DEFINE('_JLIST_BACKEND_FILESEDIT_LICENSE','Licence');
DEFINE('_JLIST_BACKEND_FILESEDIT_RELEASE','Version');
DEFINE('_JLIST_BACKEND_FILESEDIT_SIZE','Taille');
DEFINE('_JLIST_BACKEND_FILESEDIT_SIZE_DESC','Si non défini, la taille sera obtenue automatiquement si possible.');
DEFINE('_JLIST_BACKEND_FILESEDIT_DADDED','Date et heure');
DEFINE('_JLIST_BACKEND_FILESEDIT_DADDED_DESC','Lorsque ce champ est omis, la date courante est automatiquement utilisée');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE','Sélectionnez le fichier à télécharger');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_DESC','Transférer un fichier vers le serveur. Il sera utilisé pour ce téléchargement.');

DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_INFO','Fichier actuellement assigné:');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_ADD_FROM_SERVER','Fichier actuellement assigné:');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_ADD_FROM_SERVER_NO','Aucun fichier assigné actuellement!');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_ADD_FROM_SERVER_LIST','Selectionner fichier');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_REMOVE','<b>Supprimer le fichier courant assigné du serveur</b>');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_HOME','URL site web (sans préfixe http://)');
DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR','Nom de l\'auteur');
DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR_URL','URL auteur ou adresse E-Mail');
DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR_URL_DESC','Lorsque vous indiquez une adresse ici, le nom de l\'auteur est représenté comme lien vers une page web ou comme adresse mailto:. Les adresses E-Mail sont camouflées si l\'option correspondante est activée.');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD','Répertoire RACINE de téléchargement');

DEFINE('_JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD_WRITABLE','Statut: <font color=green><strong>accessible en ECRITURE</strong></font>');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD_NOTWRITABLE','Statut: <font color=red><strong>NON accessible en ECRITURE</strong></font>');

DEFINE('_JLIST_BACKEND_FILESEDIT_URL_TEMP_WRITABLE','Statut: <font color=green><strong>accessible en ECRITURE</strong></font>');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_TEMP_NOTWRITABLE','Statut: <font color=red><strong>NON accessible en ECRITURE</strong></font>');


//BACKEND LICENSE LIST
DEFINE('_JLIST_BACKEND_LICLIST_TITLE_HEAD','Licences');
DEFINE('_JLIST_BACKEND_LICLIST_TITLE','Nom de la Licence');
DEFINE('_JLIST_BACKEND_LICLIST_LINK','Lien');
DEFINE('_JLIST_BACKEND_LICLIST_DEL',' Licence(s) supprimée(s)');

//Backend LICENSE EDIT
DEFINE('_JLIST_BACKEND_LICEDIT_TITLE','Modifier Licence');
DEFINE('_JLIST_BACKEND_LICEDIT_ERROR_TITLE','Une Licence doit avoir un nom.');
DEFINE('_JLIST_BACKEND_LICEDIT_SAVE','Licence sauvegardée.');
DEFINE('_JLIST_BACKEND_LICEDIT_TEXT','Nom de Licence');
DEFINE('_JLIST_BACKEND_LICEDIT_EDIT','Modifier Licence');
DEFINE('_JLIST_BACKEND_LICEDIT_ADD','Ajout Licence');
DEFINE('_JLIST_BACKEND_LIC_USED','Cette Licence est en cours de modification par un autre administrateur.');
DEFINE('_JLIST_BACKEND_LICEDIT_LIC_TITLE','Nom de Licence');
DEFINE('_JLIST_BACKEND_LICEDIT_LIC_URL','Lien vers Licence');
DEFINE('_JLIST_BACKEND_LICEDIT_LIC_DESCRIPTION','Description Licence');

//BACKEND TEMPLATES SUBMENU
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_NAME','Administration Layouts');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_CATS','Catégories');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_FILES','Fichiers');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_SUMMARY','Résumés');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_EMAIL','E-Mails');
DEFINE('_JLIST_BACKEND_TEMPPANEL_TABTEXT_INFO','Informations');

// Backend TEMPLATES TEMPLATES TITLES
DEFINE('_JLIST_BACKEND_TEMPLIST_CATTITLE_HEAD','Layouts Catégories');
DEFINE('_JLIST_BACKEND_TEMPLIST_FILESTITLE_HEAD','Layouts Fichiers');
DEFINE('_JLIST_BACKEND_TEMPLIST_SUMTITLE_HEAD','Layouts Résumés');
DEFINE('_JLIST_BACKEND_TEMPLIST_MAILTITLE_HEAD','Layouts E-Mails');

//BACKEND TEMPLATES LIST
DEFINE('_JLIST_BACKEND_TEMPLIST_MENU_TEXT_ACTIVE','Activer');
DEFINE('_JLIST_BACKEND_TEMPLIST_TITLE','Nom du Layout');
DEFINE('_JLIST_BACKEND_TEMPLIST_TYP','Type Layout');
DEFINE('_JLIST_BACKEND_TEMPLIST_ACTIVE','Actif');
DEFINE('_JLIST_BACKEND_TEMPLIST_LOCKED','Layout par défaut');
DEFINE('_JLIST_BACKEND_TEMPLIST_LOCKED_DESC','<b>Remarque:</b> Les layouts par défaut font partie intégrante de jDownloads et ne peuvent pas être supprimés. <br />Lors de la création d\'un nouveau Layout, les textes associés au layout par défaut sont utilisés comme défauts pour le nouveau.');
DEFINE('_JLIST_BACKEND_TEMPLIST_DEL',' Layout(s) supprimé(s)');
DEFINE('_JLIST_BACKEND_TEMPLIST_ERROR_IS_LOCKED','Les Layouts par défaut ne peuvent être supprimés.');
DEFINE('_JLIST_BACKEND_TEMPLIST_ERROR_IS_ACTIVE','Les Layouts actifs ne peuvent être supprimés.');

//Backend TEMPLATES EDIT
DEFINE('_JLIST_BACKEND_TEMPEDIT_TITLE','Modifier Layout');
DEFINE('_JLIST_BACKEND_TEMPEDIT_ERROR_TITLE','Erreur: Un layout doit avoir un nom.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_SAVE','Layout sauvegardé.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_ACTIVE','Layout activé.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_EDIT','Modifier Layout');
DEFINE('_JLIST_BACKEND_TEMPEDIT_ADD','Ajouter layout');
DEFINE('_JLIST_BACKEND_TEMP_USED','Ce layout est en cours de modification par un autre administrateur.');

DEFINE('_JLIST_BACKEND_TEMPEDIT_NAME','Nom');
DEFINE('_JLIST_BACKEND_TEMPEDIT_TYP','Type');
DEFINE('_JLIST_BACKEND_TEMPEDIT_TEXT','Layout');
DEFINE('_JLIST_BACKEND_TEMPEDIT_URL','Lien pour visualisation');


DEFINE('_JLIST_BACKEND_TEMPEDIT_NAME_DESCRIPTION','Définissez un nom significatif pour ce Layout.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_TYP_DESCRIPTION','Sélectionnez un type de Layout approprié.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_TEXT_DESCRIPTION','Définition du layout pour le frontend.');

//Backend TEMPLATES TYPS
DEFINE('_JLIST_BACKEND_TEMP_TYP1','Catégories');
DEFINE('_JLIST_BACKEND_TEMP_TYP2','Fichiers');
DEFINE('_JLIST_BACKEND_TEMP_TYP3','Sommaire');
DEFINE('_JLIST_BACKEND_TEMP_TYP4','E-Mail');

//Backend Backup and Restore
DEFINE('_JLIST_BACKEND_RESTORE_TITLE_HEAD','Restaurer Sauvegarde');
DEFINE('_JLIST_BACKEND_RESTORE_FILE','Selectionnez un fichier de sauvegarde');
DEFINE('_JLIST_BACKEND_RESTORE_RUN','Restaurer la base de données maintenant');
DEFINE('_JLIST_BACKEND_RESTORE_RUN_FINAL','Démarrage restauration de la sauvegarde?');
DEFINE('_JLIST_BACKEND_RESTORE_WARNING','Suite à la restauration de la sauvegarde, la base de données actuelle sera remplacée par la base de données de la sauvegarde.<br /><br />Il n\'y a PAS de garantie que l\'opération de restauration de la sauvegarde fonctionne sans problème. Il est recommandé de réaliser au préalable une sauvegarde via un client FTP pour plus de sécurité.');
DEFINE('_JLIST_BACKEND_RESTORE_MSG','%s Enregistrements restaurés avec succès.');
DEFINE('_JLIST_BACKEND_RESTORE_MSG_2','Voir les informations dans le registre: "Restore Log".');


//Backend CSS & LANGUAGE EDIT
DEFINE('_JLIST_BACKEND_EDIT_CSS_TITLE','Fichier CSS');
DEFINE('_JLIST_BACKEND_EDIT_LANG_TITLE','Fichier Langue');
DEFINE('_JLIST_BACKEND_EDIT_CSS_FIELD_TITLE','Contenu du fichier CSS');
DEFINE('_JLIST_BACKEND_EDIT_LANG_FIELD_TITLE','Contenu du fichier Langue');
DEFINE('_JLIST_BACKEND_EDIT_CSS_TITLE_EDIT','Modifer fichier CSS');
DEFINE('_JLIST_BACKEND_EDIT_LANG_TITLE_EDIT','Modifier fichier Langue');
DEFINE('_JLIST_BACKEND_EDIT_CSS_SAVED','Fichier CSS sauvegardé');
DEFINE('_JLIST_BACKEND_EDIT_LANG_SAVED','Fichier Langue sauvegardé');
DEFINE('_JLIST_BACKEND_EDIT_LANG_WRITE_STATUS_TEXT','<big>Le fichier Langue est: ');
DEFINE('_JLIST_BACKEND_EDIT_CSS_WRITE_STATUS_TEXT','<big>Le fichier CSS est: ');
DEFINE('_JLIST_BACKEND_EDIT_LANG_CSS_FILE_WRITABLE_YES','<font color="green">accessible en écriture!</font></big>');
DEFINE('_JLIST_BACKEND_EDIT_LANG_CSS_FILE_WRITABLE_NO','<font color="#990000">NON accessible en écriture!</font></big>');
DEFINE('_JLIST_BACKEND_EDIT_LANG_CSS_FILE_WRITABLE_INFO','Le fichier doit être accessible en écriture pour autoriser la sauvegarde des nouveaux paramètres. Vous devez éventuellement modifier les permissions sur le fichier à CHMOD 0777.');


// BACKEND OTHERS
DEFINE('_JLIST_FRONTEND_NOCAT','Aucune catégorie disponible actuellement!');
DEFINE('_JLIST_FRONTEND_NOFILES','Aucun fichier disponible actuellement!');

// Information text
DEFINE('_JLIST_BACKEND_INFO_TEXT_TITLE','Informations jDownloads');
DEFINE('_JLIST_BACKEND_INFO_LICENSE_TITLE','<b>Informations de Licence:</b>');
DEFINE('_JLIST_BACKEND_INFO_LICENSE_TEXT','Ce composant est publié sous la licence <a href="http://www.gnu.de/documents/gpl.de.html" target="_blank">GNU/GPL licensing</a>.<br />En installant jDownoads, vous acceptez les termes de la licence ainsi que les conditions reprises ci-après. Si vous ne souhaitez pas respecter ces conditions, vous êtes dans l\'obligation de supprimer ce composant. <br><br><b>Conditions supplémentaires:</b><br />Il n\'est <b>pas autorisé</b> d\'enlever le lien original sur <b>la page d\'accueil du composant</b>! Ce lien doit être bien visible. Si vous désirez enlever malgré tout ce lien, veuillez me contacter: <a href="mailto:info@joomlaaddons.de">info@joomlaaddons.de</a>.<br><br>De plus, ce composant est fourni "as is" sans aucune garantie explicite ou implicite! Aucune responsabilité n\'est engagée en cas de perte de données, ... etc. L\'emploi de ce composant est réalisé sous l\'entière responsabilité de la personne ayant réalisé son installation.');

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

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_MAIL_DEFAULT','Notice de téléchargement!<br />
<br />
Les fichiers suivants ont été sélectionnés pour téléchargement:<br />
{file_list}
<br /><br />
Date et heure: {date_time}<br />
Nom: {user_name}<br />
Groupe: {user_group}<br />
Adtesse IP: {ip_address}<br /><br />
Cet E-Mail a été généré automatiquement!');

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
DEFINE('_JLIST_SETTINGS_LICENSE1_TEXT','Licence publique générale GNU');
DEFINE('_JLIST_SETTINGS_LICENSE1_URL','http://fr.wikipedia.org/wiki/Licence_publique_g%C3%A9n%C3%A9rale_GNU');

DEFINE('_JLIST_SETTINGS_LICENSE2_TITLE','GNU/LGPL');
DEFINE('_JLIST_SETTINGS_LICENSE2_TEXT','Licence publique générale limitée GNU');
DEFINE('_JLIST_SETTINGS_LICENSE2_URL','http://fr.wikipedia.org/wiki/Licence_publique_g%C3%A9n%C3%A9rale_limit%C3%A9e_GNU');

DEFINE('_JLIST_SETTINGS_LICENSE3_TITLE','Donationware');
DEFINE('_JLIST_SETTINGS_LICENSE3_TEXT','La donation demandée sert aux développements futurs et/ou à la distribution du logiciel.<br />Source: Wikipedia');
DEFINE('_JLIST_SETTINGS_LICENSE3_URL','http://fr.wikipedia.org/wiki/Donationware');

DEFINE('_JLIST_SETTINGS_LICENSE4_TITLE','Linkware');
DEFINE('_JLIST_SETTINGS_LICENSE4_TEXT','Un Lien URL vers le site du développeur doit être visible lorsque vous utilisez le logiciel.');
DEFINE('_JLIST_SETTINGS_LICENSE4_URL','');

DEFINE('_JLIST_SETTINGS_LICENSE5_TITLE','Charityware');
DEFINE('_JLIST_SETTINGS_LICENSE5_TEXT','Charityware autorise un libre emploi, le développeur demande de réaliser une donation à une oeuvre caritative.');
DEFINE('_JLIST_SETTINGS_LICENSE5_URL','http://fr.wikipedia.org/wiki/Charityware');

DEFINE('_JLIST_SETTINGS_LICENSE6_TITLE','Licence commerciale');
DEFINE('_JLIST_SETTINGS_LICENSE6_TEXT','Utilisation soumise à rétribution du développeur ou du distributeur.');
DEFINE('_JLIST_SETTINGS_LICENSE6_URL','');

DEFINE('_JLIST_SETTINGS_LICENSE7_TITLE','Creative Commons');
DEFINE('_JLIST_SETTINGS_LICENSE7_TEXT','Un ensemble de licences régissant les conditions de réutilisation et/ou de distribution.');
DEFINE('_JLIST_SETTINGS_LICENSE7_URL','http://fr.wikipedia.org/wiki/Licence_Creative_Commons');

///////////////////////////////////////////////////////////////////////////////
// Install default config values - Please do not delete this !!!
// Installations Vorgabewerte f&uuml;r Konfigurationen - NICHT l&ouml;schen !!!
///////////////////////////////////////////////////////////////////////////////
DEFINE('_JLIST_SETTINGS_INSTALL_1','<b>Sélectionner tous les fichiers:</b>');
DEFINE('_JLIST_SETTINGS_INSTALL_2','Vous pouvez définir ici le texte de présentation du composant.<br />');
DEFINE('_JLIST_SETTINGS_INSTALL_3','Informations sur les téléchargements');
DEFINE('_JLIST_SETTINGS_INSTALL_4','webmaster@votresite.com');
DEFINE('_JLIST_SETTINGS_INSTALL_5','info@votresite.com');

// ****************************************************************************
//		NEW IN VERSION 1.2 beta
// ****************************************************************************

// JAVASCRIPT (jdownloads.js) MESSAGES <<< Umlaute NICHT umwandeln !! >>>
DEFINE('_JLIST_JAVASCRIPT_TEXT_2','Aucun fichier de cette catégorie n\'a été séléctionné pour téléchargement.\\n');
DEFINE('_JLIST_JAVASCRIPT_TEXT_1','Veuillez sélectionner au moins un fichier de cette catégorie et\\ncliquez à nouveau sur le bouton..');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_TEXT_TO_SHORT','Introduisez au moins 3 caractères!');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_NO_OPTION','Veuillez sélectionner au moins 1 option de recherche!');
// end javascript messages


DEFINE('_JLIST_INSTALL_1_2','Tous les champs existent déjà dans la base de données!');
DEFINE('_JLIST_INSTALL_2_2','Des champs de données ont été modifiés ou ajoutés, car inexistants!');
DEFINE('_JLIST_INSTALL_17','Installation JoomFish trouvée! Les fichiers JoomFish de jDownloads ont été copiés vers:');
DEFINE('_JLIST_INSTALL_18','Les fichiers JoomFish de jDownloads ont été copiés vers:');
DEFINE('_JLIST_INSTALL_19','Si vous voulez les utiliser avec JoomFish, veuillez les copier vers:');

DEFINE('_JLIST_FRONTEND_HOME_LINKTEXT','Accueil');
DEFINE('_JLIST_FRONTEND_SUBTITLE_OVER_CATLIST','Vue d\'ensemble');
DEFINE('_JLIST_FRONTEND_SUBTITLE_OVER_ONE_CAT','Catégorie');
DEFINE('_JLIST_FRONTEND_SUBTITLE_OVER_DETAIL','Détail du téléchargement');

// PAGENAVIGATION FRONTEND
DEFINE('_JLIST_FRONTEND_HEADER_PAGENAVI_PAGE_TEXT','Page:');
DEFINE('_JLIST_FRONTEND_HEADER_PAGENAVI_TO_TEXT','sur');

DEFINE('_JLIST_BACKEND_FILESEDIT_PRICE','Prix');
DEFINE('_JLIST_BACKEND_FILESEDIT_PRICE_DESC','Introduisez le prix avec la devise.');

DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_4','Restore Log');

//FRONTEND UPLOAD
DEFINE('_JLIST_FRONTEND_UPLOAD_ACCESS_ONLY_REGGED','Vous devez être enregistré pour pouvoir soumettre des fichiers. Si vous êtes déjà enregistré, veuillez vous identifier sur la page principale du site.');
DEFINE('_JLIST_FRONTEND_UPLOAD_ACCESS_ONLY_SPECIALS','Vous n\'avez pas les droits pour soumettre des fichiers.');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_NO_CATS_EXIST','Erreur: Au moins une catégorie publiée doit exister pour pouvoir soumettre des fichiers.');
DEFINE('_JLIST_FRONTEND_UPLOAD_LINKTEXT','Soumettre fichier');
DEFINE('_JLIST_FRONTEND_UPLOAD_PAGE_TITLE','Soumettre fichier');
DEFINE('_JLIST_FRONTEND_UPLOAD_FILENAME','Fichier soumis:');
DEFINE('_JLIST_FRONTEND_UPLOAD_FILENAME_BUTTON_TEXT_SEND','Envoyer');
DEFINE('_JLIST_FRONTEND_UPLOAD_FILENAME_BUTTON_TEXT_CLEAR','Vider champs');
DEFINE('_JLIST_FRONTEND_UPLOAD_ALLOWED_FILETYPE','Types de fichier permis');
DEFINE('_JLIST_FRONTEND_UPLOAD_ALLOWED_MAX_SIZE','Taille max. des fichiers');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_NO_VALUE','Erreur: vous n\'avez pas correctement rempli tous les champs!<br />Veuillez corriger les champse marqués.');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_FILETYPE','Erreur: Vous avez essayé de soumettre un type de fichier interdit!<br />Veuillez utiliser uniquement les types listés!');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_FILESIZE','Erreur: Votre fichier dépasse la taille maximale permise!');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_MOVE_FILE','Erreur: Un erreur s\'est produite lors de l\'enregistrement du fichier sur le serveur!');
DEFINE('_JLIST_FRONTEND_UPLOAD_OK','Le fichier a été transmis correctement!<br />Il sera éventuellement vérifié avant sa publication.');

// FRONTEND UPLOAD FIELD TITLE
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_NAME','Votre nom:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_MAIL','Votre adresse E-Mail:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_TITLE_FILE','Titre du fichier:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_DESC_FILE','Résumé:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_DESC_FILE_LONG','Description longue du fichier:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_AUTHOR','Nom auteur:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_AUTHOR_URL','Page web auteur:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_LIZENZ','Licence:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_VERSION','Version:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_PRICE','Prix:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_LISTBOXES','Sélectionner:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_CATEGORY','Catégorie:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_LANGUAGE','Langue:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_SYSTEM','Système:');
DEFINE('_JLIST_FRONTEND_UPLOAD_SYMBOL_TEXT','Champ obligatoire');

//FRONTEND SEARCH
DEFINE('_JLIST_FRONTEND_SEARCH_LINKTEXT','Recherche');

// AUTOCHECK DOWNLOADS
DEFINE('_JLIST_BACKEND_AUTOCHECK_NEW_CATS','Des nouveaux répertoires ont été trouvés et ajoutés comme nouvelles catégories!!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_MISSING_CATS','Certains répertoires de catégories n\'ont pas pu être trouvés et les catégories correspondantes ont été dépubliées!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NO_NEW_CATS','Aucun nouveau répertoire trouvé!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NO_MISSING_CATS','Toutes les catégories publiées existent!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_LOG_TITLE','Dernières actions exécutées:');
DEFINE('_JLIST_BACKEND_AUTOCHECK_LOG_TAB_TITLE','Dernières actions après surveillance des répertoires');
DEFINE('_JLIST_BACKEND_AUTOCHECK_REFRESH_MESSAGE','Vous devez actualiser cette page pour voir les modifications!');

DEFINE('_JLIST_BACKEND_RESTORE_LOG_TAB_TITLE','Resultat de la dernière restauration des données');

DEFINE('_JLIST_BACKEND_PANEL_STATUS_DESC_OFFLINE','Le mode de maintenance a été activé! Les visiteurs ne peuvent PAS consulter la zone de téléchargement! Les membres du groupe "Auteur" ont quand-même accès.');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_DOWNLOADS_HEADER','Etat téléchargements');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_DOWNLOADS_OFF_DESC','La surveillance automatique des répertoires de téléchargements est désctivée!');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_VERSION_HEADER','Informations concernant la version actuelle de jDownloads');

DEFINE('_JLIST_BACKEND_SETTINGS_DEL_TEMPFILE_TIME','Suppression des fichiers temporaires après combien de minutes');
DEFINE('_JLIST_BACKEND_SETTINGS_DEL_TEMPFILE_TIME_DESC','Indiquez un temps en minutes après lequel les fichier zip temporaires seront effacés. A augmenter si vous proposez des fichiers volumineux. Par défaut: 20 (Minutes).');

DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_FRONTEND_HEAD_UPLOAD','Configuration soumission frontent');
DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIR_RENAME_ERROR','Erreur: Le répertoire RACINE de téléchargement n\'a pas pu être renommé!');
DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIR_RENAME_OK',' - répertoire RACINE renommé avec succès!');

DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO','Surveiller le répertoire de téléchargement? ');
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_DESC','Si activé, tous les répertoires sont surveillés, et la base de données est mise à jour automatiquement. Tous les répertoires et fichiers qui ont été envoyés par FTP sont automatiquement insérés dans la base de données. Si des catégories et fichiers sont introuvables, leurs enregistrements sont changés en: <b>Non publié</b>. <b>Réglage standard: Oui.</b>');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_USE_CHECKBOX_INFO','<b>Remarque:</b> Vous trouvez les options d\'affichage des cases à cocher des téléchargements, dans la gestion des layouts des fichiers!');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_USE_SYMBOLE_INFO','<b>Remarque:</b> Vous trouvez les options d\'affichage des icônes, dans la gestion des layouts des fichiers!');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FILES_PER_SIDE','Nombre d\'entrées par page');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FILES_PER_SIDE_DESC','Indiquez ici le nombre d\'entrées à afficher dans catégories et fichiers sur le frontend.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_HEADER_TITLE','Titre à afficher dans l\'entête');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_HEADER_DESC','Indiquez ici le titre à afficher dans l\'entête du composant, p.ex. "Téléchargements".');

// FRONTEND UPLOAD CONFIG
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACTIVE','Activer la soumission du frontend:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACTIVE_DESC','Si activé, les groupes indiqués plus bas pourront soumettre des fichiers.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_PERMISSIONS','Qui a le droit de soumettre des fichiers:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_PERMISSIONS_DESC','Définir le groupe qui a le droit de soumettre des fichiers.');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACCESS_ALL','Public');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACCESS_REGGED','Membre');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACCESS_ADMINS','Spécial');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILETYPES','Types des fichiers permis:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILETYPES_DESC','Indiquez ici tous les types de fichiers qui pourront êtres soumis au moyen du formulaire du frontend. Séparation des valeurs par des virgiules (,) .');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILESIZE','Taille maximale en Ko:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILESIZE_DESC','Indiquez ici la taille maximale des fichiers en Ko (1024 Ko = 1 Mo. Réglage standard: 2048.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FORM_TEXT','Apparence du formulaire de soumission:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FORM_TEXT_DESC','Ici vous pouvez modifier l\'apparence du formulaire de soumission. A la place de la balise: <font color="red">{form}</font> le formulaire proprement dit est affiché. La balise <font color="red">{form}</font> ne doit <b>PAS</b> être supprimée!');

// Platzhalter {form} NICHT ÄNDERN ODER LÖSCHEN !!!
// DO NOT DELETE, EDIT OR TRANSLATE: {form} !!!
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FORM_TEXT_LAYOUT','Ici vous pouvez envoyer des fichiers vers le serveur. Tous les champs avec un symbole rouge doivent être remplis obligatoirement.<br /> Votre nom et votre adresse E-Mail ne seront pas communiqués à des tiers ou publiés.<br /><br />{form}<br />');

DEFINE('_JLIST_BACKEND_TEMPLIST_DEL_QUEST','Supprimer layout(s)?');
DEFINE('_JLIST_BACKEND_LICLIST_DEL_QUEST','Supprimer licence(s)?');

DEFINE('_JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD_STATUS_DESC','Ici vous voyez l\'état du répertoire racine des téléchargements. Si celui-ci n\'a pas de permissions en écriture, veuillez modifier les droits CHMOD 0777.');

DEFINE('_JLIST_BACKEND_FILESEDIT_HITS','Nombre de téléchargements effectués');
DEFINE('_JLIST_BACKEND_FILESEDIT_HITS_DESC','Ici vous pouvez modifier le compteur des téléchargements');

DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_CAT_DESC','A quelle catégorie voulez-vous assigner ce fichier? Séléctionnez la catégorie désirée dans la liste. Si vous séléctionnez une autre catégorie plus tard, le fichier sera déplacé automatiquement dans le répertoire correspondant');

DEFINE('_JLIST_BACKEND_FILESEDIT_DESCRIPTION_KURZ','Description courte');
DEFINE('_JLIST_BACKEND_FILESEDIT_DESCRIPTION_LONG','Description longue');
DEFINE('_JLIST_BACKEND_FILESEDIT_EDITOR_INFO','Dans la configuration on peut définir si on veut utiliser ici des simples champs texte ou l\'éditeur WYSIWYG actif.');
DEFINE('_JLIST_BACKEND_FILESEDIT_SENT_IN_FROM_STATUS','Etat: ');
DEFINE('_JLIST_BACKEND_FILESEDIT_SENT_IN_FROM_EMAIL','Adresse E-Mail: ');
DEFINE('_JLIST_BACKEND_FILESEDIT_ERROR_TITLE','Erreur: Veuillez indiquer un titre!');
DEFINE('_JLIST_BACKEND_FILESEDIT_CATLIST_ERROR','Erreur: Veuillez sélectionner une catégorie!');
DEFINE('_JLIST_BACKEND_FILESEDIT_SAVE_MOVEFILE_ERROR',' - Erreur: Le fichier n\'a pas pu être déplacé!');
DEFINE('_JLIST_BACKEND_FILESEDIT_SAVE_MOVEFILE_OK',' - Fichier déplacé avec succès!');

DEFINE('_JLIST_BE_NO_PUBL_FILES','Des fichiers non attribués à une catégorie ne peuvent pas être publiés!');
DEFINE('_JLIST_BACKEND_FILESLIST_DEL_QUEST','Supprimer le(s) téléchargement(s)?');
DEFINE('_JLIST_BACKEND_FILESLIST_DESCRIPTION_SHORT','Description (courte)');
DEFINE('_JLIST_BACKEND_FILESLIST_PIC','Symbole');
DEFINE('_JLIST_BACKEND_FILESLIST_DEL_FILES_OPTION','<font color=#990000>Effacer les fichiers lors de la supression du téléchargement:</font>');
//DEFINE('D_JLIST_BACKEND_FILESLIST_DEL_FILES_OPTION_YES','Ja');
//DEFINE('D_JLIST_BACKEND_FILESLIST_DEL_FILES_OPTION_NO','Nein');
DEFINE('_JLIST_BACKEND_FILESLIST_DEL_FILES_OPTION_TOOLTIP','Si Oui, le téléchargement ne sera non seulement supprimé, mais le fichier associé sera supprimé du serveur! Si le fichier n\'est pas supprimé du serveur, et la surveillance des répertoire est activée, le fichier sera alors considéré comme nouveau et inséré dans la base de données,!<br /><b>Réglage conseillé: Oui</b>.');
DEFINE('_JLIST_BACKEND_FILESEDIT_DEL_FILES_OK',' - Fichiers associés supprimés.');
DEFINE('_JLIST_BACKEND_FILESEDIT_DEL_FILES_ERROR',' - Fichiers associés pas supprimés, car inexistants.');
DEFINE('_JLIST_BACKEND_FILESLIST_FILE_ID','ID');

DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_CAT_DEL_AFTER_COPY','Erreur lors de la suppression des anciens répertoires des catégories.');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_TITLE','Titre catégorie <b><font color=red>*</font></b>');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_TITLE_DESC','Désignation de la catégorie. Les caractères spéciaux ne sont pas permis, car pour chaque titre de catégorie, un répertoire du même nom est créé sur le serveur. Exceptions: <b>" - _ . , " </b>ainsi que les espaces.');
DEFINE('_JLIST_BACKEND_CATSEDIT_ROOT_CAT_LISTBOX','Catégorie principale');
DEFINE('_JLIST_BACKEND_CATSEDIT_ROOT_CAT_LISTBOX_NEW','Nouvelle catégorie principale');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_TITLE','Attribution');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_TITLE_NEW','Création d\'une nouvelle catégorie dans  / comme <b><font color=red>*</font></b>');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_DESC_NEW','Si vous voulez mettre en place une nouvelle catégorie principale veuillez cocher "Nouvelle catégorie principale". Si la nouvelle catégorie doit servir comme sous-catégorie, veuillez marquer la catégorie parent. Vous pouvez modifier l\'assignation plus tard.');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_DESC','Lorsque vous voulez déplacer une catégorie veuillez cocher la catégorie vers laquelle vous voulez déplacer la catégorie actuelle. Si une sous-catégorie doit devenir une catégorie principalle, veuillez cocher "Catégorie principale".<br /><br /><b>Remarque:</b> Lors de modifications, le répertoire complet (du même nom) sera automatiquement déplacé sur le serveur. Si la catégorie à déplacer contient des sous-catégories, celles-ci seront aussi déplacées. Pour ne pas compromettre ces actions lors de la modification d\'une catégorie, TOUTES les autres catégories seront protégées contre toute modification!');
DEFINE('_JLIST_BACKEND_CATSEDIT_SAVE','Catégorie mémorisée.');
DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_TITLE_CHARS_NOT_ALLOWED','Erreur: Le titre contient des symboles interdits!');
DEFINE('_JLIST_BACKEND_CATSLIST_DEL_QUEST','Supprimer la/les catégorie(s)?');
DEFINE('_JLIST_BACKEND_CATSLIST_CATID','ID');
DEFINE('_JLIST_BACKEND_CATSLIST_PATH','Répertoire');

// BACKEND CATS DELETE
DEFINE('_JLIST_BE_NO_DEL_SUBCATS_EXISTS','La catégorie ne peut pas être supprimée, des sous-catégories existent!');
DEFINE('_JLIST_BE_NO_DEL_FILES_EXISTS','La catégorie ne peut pas être supprimée, elle contient des fichiers!');
DEFINE('_JLIST_BE_DEL_CATS_DIRS_OK',' - Répertoire supprimé!');
DEFINE('_JLIST_BE_DEL_CATS_DIRS_ERROR',' - ERREUR lors de la suppression du répertoire!');

DEFINE('_JLIST_BACKEND_NO_SELECT_ACTION','Veuillez d\'abord cocher une entrée dans la liste!');

DEFINE('_JLIST_BE_SETTINGS_FILES_PER_SIDE_BE_TITLE','Nombre de lignes à afficher pour les listes');
DEFINE('_JLIST_BE_SETTINGS_FILES_PER_SIDE_BE_DESC','Nombre de lignes à afficher dans les listes dans le backend.');

DEFINE('_JLIST_UPLOAD_MAX_FILESIZE_INFO_TITLE','Taille max. selon php.ini:');

DEFINE('_JLIST_BACKEND_TEMPLATE_ACTIVE_ERROR','Pour être activé, un seul layout peut être coché!');
DEFINE('_JLIST_AUTO_FILE_CHECK_IMPORT_BY','Système');
DEFINE('_JLIST_AUTO_FILE_CHECK_ADDED',   'Fichier ajouté            ');
DEFINE('_JLIST_AUTO_FILE_CHECK_DISABLED','Fichier introuvable       ');
DEFINE('_JLIST_AUTO_CAT_CHECK_ADDED',    'Catégorie ajoutée         ');
DEFINE('_JLIST_AUTO_CAT_CHECK_DISABLED', 'Catégorie introuvable     ');

// MESSAGES AFTER CHECK FILES AND DIRS WHEN UPDATED FROM 1.1 alpha
DEFINE('_JLIST_CHECK_CATS_TITEL1','Vaus avez mis à jour une ancienne version de jDownloads vers la version 1.2!');
DEFINE('_JLIST_CHECK_CATS_TITEL2','Toutes les anciennes catégories et tous les anciens fichiers seront mainenant transférés vers la nouvelle structure!');

DEFINE('_JLIST_CHECK_FINISH','Le processus est terminé!');
DEFINE('_JLIST_CHECK_CATS_CREATE','Les répertoires des catégories ont été générés!');
DEFINE('_JLIST_CHECK_FILES_MOVE','Les fichiers ont été déplacés!');
DEFINE('_JLIST_CHECK_FILES_NOT_FOUND','Pas de fichiers trouvés!');
DEFINE('_JLIST_CHECK_FILES_NOT_MOVED','Les fichiers n\'ont pas pu ètre déplacés!');
DEFINE('_JLIST_CHECK_CATS_NOT_FOUND','Les répertoires des catégories n\'ont pas pu être créés!');

// MESSAGES AFTER RESTORE BACKUPFILE
DEFINE('_JLIST_AFTER_RESTORE_TITLE_1','Restauration des données en cours:');
DEFINE('_JLIST_AFTER_RESTORE_1','Enregistrements ont été récupérés!');
DEFINE('_JLIST_AFTER_RESTORE_TITLE_2','La vérification des bases de données va démarrer:');
DEFINE('_JLIST_AFTER_RESTORE_3','La sauvegarde d\'une ancienne version de jDownloads a été récupérée!');
DEFINE('_JLIST_AFTER_RESTORE_4','Pour cette raison, toutes les catégories et tous les fichiers sont vérifiés:');
DEFINE('_JLIST_AFTER_RESTORE_TITLE_3','Résultats en détail:');

DEFINE('_JLIST_AUTOCHECK_DIR_NOT_EXIST','Erreur: Répertoire racine de téléchargement inexistant!');
DEFINE('_JLIST_AUTOCHECK_DIR_NOT_EXIST_2','Veuillez créer les répertoires /downloads et /downloads/tempzipfiles dans le répertoire principal de Joomla et mettez les droits CHMOD 0777 - sinon jDownloads ne fonctionnera pas!');
DEFINE('_JLIST_FRONTEND_HEADER_CATLIST_TITLE','Catégorie:');
DEFINE('_JLIST_FRONTEND_HEADER_SUMMARY_TITLE','Résumé');
DEFINE('_JLIST_FRONTEND_HEADER_FINISH_TITLE','Télécharger');

// FRONTEND SEARCH
DEFINE('_JLIST_FRONTEND_SEARCH_TITLE','Recherche fichiers');
DEFINE('_JLIST_FRONTEND_SEARCH_TEXT_TITLE','Critères');
DEFINE('_JLIST_FRONTEND_SEARCH_IN_TITLE','Chercher dans titres');
DEFINE('_JLIST_FRONTEND_SEARCH_IN_DESC','Chercher dans descriptions');
DEFINE('_JLIST_FRONTEND_SEARCH_INFO_TEXT','Au maximum 20 fichiers seront affichés.');
DEFINE('_JLIST_FRONTEND_SEARCH_BUTTON_TEXT','Chercher');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_TITLE','Résultat');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_SUM_FILES','Trouvé');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_NO_SUM_FILES','Pas de fichiers trouvés');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_SEARCH_TEXT','Terme recherché');

// NEW LAYOUT FOR VIEW DOWNLOAD-DETAILS
DEFINE('_JLIST_BACKEND_TEMP_TYP5','Détails-fichiers');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_DETAILS','Détails fichiers');
DEFINE('_JLIST_BACKEND_TEMPLIST_DETAILSTITLE_HEAD','Layout détail téléchargement');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS','Layout: Détails téléchargement');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_DESC','Représentation détaillé du fichier dans le frontend.<br /><br />Ne pas supprimer la balise <font color=red>{url_download}</font> du code!<br /><br />Balises disponibles:<br />{file_title} {thumbnail} {pic_is_new} {pic_is_hot} {pic_is_updated} {url_download} {mirror_1} {mirror_2} {description_long} {details_block_title} {license_title} {license_text} {price_title} {price_value} {language_title} {language_text} {filesize_title} {filesize_value} {system_title} {system_text} {author_title} {author_text} {author_url_title} {author_url_text} {created_date_title} {created_date_value} {hits_title} {hits_value} {created_by_title} {created_by_value} {modified_by_title} {modified_by_value} {modified_date_title} {modified_date_value}.'); // changed in 1.4 beta (2)
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_INFO_TITLE','<b>Informations relatives au Layout "Détail fichier":</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_INFO_TEXT','<p> Le cadre en rouge indique la zone que vous pouvez adapter ici.</p>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_INFO_TEXT','<p>Ici vous pouvez voir un exemple graphique de la présentation détaillées des téléchargements. Le cadre rouge indique la zone de la présentation.</p>');

// FRONTEND DOWNLOAD DETAILSITE
DEFINE('_JLIST_FE_DETAILS_PATHWAY_TEXT','Vois êtes ici');
DEFINE('_JLIST_FE_DETAILS_LINK_TEXT_TO_DETAILS','>> Détails');
DEFINE('_JLIST_FE_DETAILS_LICENSE_TITLE','Licence');
DEFINE('_JLIST_FE_DETAILS_PRICE_TITLE','Prix');
DEFINE('_JLIST_FE_DETAILS_LANGUAGE_TITLE','Langue');
DEFINE('_JLIST_FE_DETAILS_FILESIZE_TITLE','Taille');
DEFINE('_JLIST_FE_DETAILS_SYSTEM_TITLE','Système');
DEFINE('_JLIST_FE_DETAILS_AUTHOR_TITLE','Auteur');
DEFINE('_JLIST_FE_DETAILS_AUTHOR_URL_TITLE','Page Web');
DEFINE('_JLIST_FE_DETAILS_CREATED_DATE_TITLE','Créé le');
DEFINE('_JLIST_FE_DETAILS_HITS_TITLE','Téléchargements');

// LAYOUT DOWNLOAD-DETAILS
///////////////////////////////////////////////////////////////////////////////
// Template defaults for _jdownloads_templates - Please do not change this and NO translation here!!!
// Vorgabewerte f&uuml;r Layouttabelle - hier bitte KEINE &Auml;nderungen oder Übersetzungen hier vornehmen !!!
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
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT_NEW_SIMPLE_1_NAME','Représentation simple avec cases à cocher');
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

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT_NEW_SIMPLE_2_NAME','Représentation simple sans cases à cocher');
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
DEFINE('_JLIST_BACKEND_TEMPEDIT_TITLE_NOT_ALLOWED_TO_CHANGE_DESK','Les noms des layouts standards ne peuvent être modifiés!');
DEFINE('_JLIST_BACKEND_TEMPEDIT_NOTE_TITLE','Annotation layout');
DEFINE('_JLIST_BACKEND_TEMPEDIT_NOTE_DESC','Ici vous pouvez introduire des annotations supplémentaires concernant le layout.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_CHECKBOX_TITLE','Utilisation de cases à cocher dans ce layout?');
DEFINE('_JLIST_BACKEND_TEMPEDIT_CHECKBOX_DESC','Si Oui, Affichage de l\'entête avec les cases à cocher, et du bouton "Suite". La balise <b>{checkbox_list}</b> doit être insérée dans le layout. Si Non, la balise <b>{url_download}</b> doit être insérée dans le layout.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_SYMBOLE_TITLE','Insérer des icônes miniatures?');
DEFINE('_JLIST_BACKEND_TEMPEDIT_SYMBOLE_DESC','Si Oui, les icônes sont affichés devant les balises. La taille des icônes peut être définie dans la configuration de jDownloads.');

DEFINE('_JLIST_FE_YES','Oui');
DEFINE('_JLIST_FE_NO','Non');

DEFINE('_JLIST_BACKEND_EDIT_PUBLISHED','Publier');
DEFINE('_JLIST_BACKEND_FILESEDIT_MODIFIED_DATE','Dernière modif.');
DEFINE('_JLIST_BACKEND_FILESEDIT_MODIFIED_BY','par');
DEFINE('_JLIST_BACKEND_FILESEDIT_CREATED_BY','Créé par');
DEFINE('_JLIST_BACKEND_FILESEDIT_INFO_FIELDS_DESC','Les champs en marge servent comme information et renseignent sur les dernières modifications des données (qui et quand).');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CATLISTBOX_ACTIVE','Afficher la liste des catégories dans l\'entête?');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CATLISTBOX_DESC','Si Oui, la liste des catégories (listbox) est affichée à droite dans l\'entête. L\'utilisateur peut accéder directement à la catégorie souhaitée.');

// SAMPLE DATA
DEFINE('_JLIST_SAMPLE_DATA_CAT_NAME_ROOT','Exemple de categorie');
DEFINE('_JLIST_SAMPLE_DATA_CAT_NAME_SUB','Exemple de sous-categorie');
DEFINE('_JLIST_SAMPLE_DATA_CAT_NAME_TEXT','Voici un exemple d\'une catégorie. Vous pouvez la supprimer à tout moment.');
DEFINE('_JLIST_SAMPLE_DATA_FILE_NAME','Exemple de telechargement');
DEFINE('_JLIST_SAMPLE_DATA_FILE_NAME_TEXT','Voici un fichier à télécharger comme exemple. Vous pouvez le supprimer à tout moment.');
DEFINE('_JLIST_SAMPLE_DATA_CREATE_ERROR','Suite à une erreur, les exemples n\'ont pas pu être générés. Utilisez l\'option dans le menu principal de jDownloads.');
DEFINE('_JLIST_SAMPLE_DATA_CREATE_OK','Les exemples ont pu être configuré avec succès!');
DEFINE('_JLIST_SAMPLE_DATA_BE_OPTION_LINK_TEXT','Générer des données de démo.');
DEFINE('_JLIST_SAMPLE_DATA_EXISTS','Exemples déjà présents!');
DEFINE('_JLIST_SAMPLE_DATA_BACK_TO_PANEL','Retour au menu principal;');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_HEAD_INFO2','<br /><b><u>Explications concernant les layouts</u></b><br /><b>Catégories: </b>Un layout "catégorie" définit la présentation des catégories ainsi que l\'utilisation des cases à cocher en haut et en bas de la liste des fichiers.<br /><b>Fichiers: </b>Un layout "fichier" définit la présentation de la liste des fichiers en dessous des catégories.<br /><b>Détails fichiers: </b>Un layout "Détail fichier" définit la présentation détaillée d\'un fichier.<br /><b>Résumé: </b>Un layout "Résumé" définit la présentation de la page de téléchargement sur laquelle l\'utilisateur voit le résumé de tous le fichiers séléctionnés pour le téléchargement.'); // changed in 1.3 RC2

// ANTI_LEECH_CONFIG
DEFINE('_JLIST_BACKEND_SETTINGS_ANTILEECH_TITLE','Protéger le répertoire de téléchargement?');
DEFINE('_JLIST_BACKEND_SETTINGS_ANTILEECH_DESK','Si Oui, le fichier htaccess.txt est copié dans le répertoire racine et renommé en: .htaccess . La protection est activée et tous les accès externes sur ce répertoire et les sous-répertoires sont bloqués. <b>Réglage conseillé: OUI!</b>');
DEFINE('_JLIST_ACTIVE_ANTILEECH_ERROR',' - Erreur lors de la copie de htaccess.txt!');
DEFINE('_JLIST_ACTIVE_ANTILEECH_OK',' - Protéction des fichiers activée!');
DEFINE('_JLIST_ACTIVE_ANTILEECH_OFF_ERROR',' - Erreur lors de la suppression de .htaccess!');
DEFINE('_JLIST_ACTIVE_ANTILEECH_OFF_OK',' - Protéction des fichiers désactivée!');

DEFINE('_JLIST_FRONTEND_ANTILEECH_MESSAGE','Accès illicite aux fichiers!');
DEFINE('_JLIST_FRONTEND_FILE_NOT_FOUND_MESSAGE','Le fichier demandé ne peut pas être trouvé!<br /><br />Veuillez informer le Webmaster!');

DEFINE('_JLIST_FRONTEND_SUMMARY_ZIP_FILESIZE','Taille du fichier zip du téléchargement groupé');
DEFINE('_JLIST_FRONTEND_NEXT_SITE_BUTTON','&nbsp;>>&nbsp;');
DEFINE('_JLIST_FRONTEND_PREV_SITE_BUTTON','&nbsp;<<&nbsp;');

DEFINE('_JLIST_FRONTEND_SUBHEADER_NUMBER_OF_CATS_TITLE','Nombre de catégories');
DEFINE('_JLIST_FRONTEND_SUBHEADER_NUMBER_OF_SUBCATS_TITLE','Nombre de sous-catégories');
DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_CATLIST','Une catégorie ou >catégorie principale< doit être cochée.');

// NEW OPTION FOR DIREKT DOWNLOAD LINK
DEFINE('_JLIST_BACKEND_SETTINGS_DIRECT_DOWNLOAD_ACTIVE_TITLE','Activer le téléchargement direct?');
DEFINE('_JLIST_BACKEND_SETTINGS_DIRECT_DOWNLOAD_ACTIVE_DESC','Si Oui, le téléchargement démarre directement en utilisant la balise <b>{url_download}</b> dans le layout, sans afficher la page principale du fichier.');

// NEW OPTION FOR HOT AND NEW IMAGES IN DOWNLOADS
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_TITLE','A partir de quand un téléchargement est-il considéré comme "populaire"');
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_DESC','Indiquez le nombre de téléchargements, à partir duquel un fichier est considéré comme "populaire". L\'icone séléctionné sera affiché à côté du titre du fichier. Pour ne pas afficher d\'icône, veuillez introduire 0.');
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_NEW_PIC_TITLE','Nom du fichier de l\'icône');
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_NEW_PIC_DESC','Ici vous trouvez la sélection du répertoire: <b>../images/jdownloads/hotimages </b>!"'); // changed in 1.3 RC2
DEFINE('_JLIST_BACKEND_SETTINGS_NEW_TITLE','Combien de temps,un téléchargement est-il considéré comme "nouveau"');
DEFINE('_JLIST_BACKEND_SETTINGS_NEW_DESC','Introduisez le nombre de jours pendant lequel un téléchargement est considéré comme "nouveau". Derrière le nom du fichier, l\'icône défini plus bas est affiché. Pour ne pas afficher d\'icône, veuillez introduire 0.');
// NEW OPTION FOR DOWNLOAD PIC BUTTON IN DOWNLOAD DETAILS
DEFINE('_JLIST_BACKEND_SETTINGS_DETAILS_DOWNLOAD_BUTTON_TITLE','Bouton "téléchargement"'); // changed in 1.3 RC2
DEFINE('_JLIST_BACKEND_SETTINGS_DETAILS_DOWNLOAD_BUTTON_DESC','Ici vous trouvez la sélection du répertoire: <b>../images/jdownloads/downloadimages </b>. Les images activées sont utilisés comme boutons pour le téléchagement et les liens vers les miroirs, sur la page détaillée des téléchargements et dans le résumé.');  // changed in 1.3 RC2

// NEW IN 1.2 beta 2
DEFINE('_JLIST_FRONTEND_UPLOAD_AUTO_PUBLISH','Publier immédiatement les fichiers:');
DEFINE('_JLIST_FRONTEND_UPLOAD_AUTO_PUBLISH_DESC','Si Oui, les fichiers soumis seront publiés automatiquement.');

// NEW IN 1.2 stable
DEFINE('_JLIST_BACKEND_DIRSEDIT_CREATE_DIR_MESSAGE_ERROR','Erreur: Le répertoire n\'a pas pu être créé. Veuillez vérifier les droits d\'accès des répertoires. Les valeurs CHMOD doivent être 0777.');

// NEW IN 1.2.2 stable
// FOR CREATES MAIN MENU IN INSTALL
DEFINE('_JLIST_BACKEND_CPANEL_MAIN','Menu principal');
DEFINE('_JLIST_INSTALL_DEFAULT_DATE_FORMAT','%d.%m.%Y %H:%M:%S');

// NEW OPTION SORTORDER CATEGORIES
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SORTCATSORDER_TEXT','Tri des catégories');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SORTCATSORDER_DESC','Ordre dans lequel les catégories sont triées dans le frontend. Sélectionnez "Standard" pour le tri par défaut du backend.');
DEFINE('_JLIST_BACKEND_SETTINGS_CATS_ORDER_1','Standard');
DEFINE('_JLIST_BACKEND_SETTINGS_CATS_ORDER_2','Nom ascendant');
DEFINE('_JLIST_BACKEND_SETTINGS_CATS_ORDER_3','Nom déscendant');

// NEW TAB TITLE FOR AUTODETECT
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_TAB_TITLE','Surveillance');
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_HEADER_TITLE','Configuration de la surveillance des répertoires');
// NEW OPTION AUTOPUBLISH NEW FOUNDED FILES
DEFINE('_JLIST_BACKEND_SETTINGS_DOWNLOADS_AUTOPUBLISH_TITLE','Publier automatiquement les fichiers?');
DEFINE('_JLIST_BACKEND_SETTINGS_DOWNLOADS_AUTOPUBLISH_DESC','Si oui, les nouveaux fichier sont publiés automatiquement. Si l\'option plus haut est activée.<br /><b>Défaut: Non.</b>');
// NEW OPTION  FOR AUTODETECT ALL FILES
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_ALL_FILES_TITLE','Surveiller tous les types de fichier?');
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_ALL_FILES_DESC','Lorsque cette option est activée, tous les types de fichiers sont surveillés!');
// NEW OPTION  FOR AUTODETECT ONLY THIS FILES
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_ONLY_THIS_FILES_TITLE','Surveiller uniquement les types suivants:');
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_ONLY_THIS_FILES_DESC','Si activé, uniquement les types indiqués sont surveillés! Séparer la liste avec des virgules (,) .');

// NEW COPY DOWNLOADS FUNCTION
DEFINE('_JLIST_BACKEND_FILES_COPY_TITLE','Copier Fichiers');
DEFINE('_JLIST_BACKEND_FILES_COPY_DESC','Sélectionnez la catégorie cible.');
DEFINE('_JLIST_BACKEND_FILES_COPY_TEXT_1','Les fichiers suivant ont été sélectionnés:');
DEFINE('_JLIST_BACKEND_FILES_COPY_TEXT_2','Remarque: Lorsque vous sélectionnez la même catégorie, le nouveau fichier aura le préfixe: "Copie de <i>Titre du fichier</i>"!');
DEFINE('_JLIST_BACKEND_FILES_COPY_TEXT_3','Publier les fichiers copiés:');
DEFINE('_JLIST_BACKEND_FILES_COPY_TEXT_4','Copier aussi le fichier:');
DEFINE('_JLIST_BACKEND_FILES_COPY_DOWNLOADS_TEXT','Copie de');
DEFINE('_JLIST_BACKEND_FILES_COPY_SAVED','Les fichiers ont été copiés!');

// NEW OPTION EXTERN DOWNLOAD URL
DEFINE('_JLIST_BACKEND_FILE_EDIT_EXT_DOWNLOAD_TITLE','Lien vers fichier externe:');
DEFINE('_JLIST_BACKEND_FILE_EDIT_EXT_DOWNLOAD_INFO','Avant de créer un lien externe, veuillez en premier supprimer le fichier local.');
DEFINE('_JLIST_BACKEND_FILE_EDIT_EXT_DOWNLOAD_DESC','URL vers un fichier externe. Veuillez laisser le champ vers le fichier interne libre.');

//NEW OPTION FOR JCOMMENTS INTEGRATION
DEFINE('_JLIST_BACKEND_SETTINGS_JCOMMENTS_TITLE','Utiliser les fonctions pour JComments?');
DEFINE('_JLIST_BACKEND_SETTINGS_JCOMMENTS_DESC','Si oui, les fonctions de <b>JComments</b> sont activées dans la vue de détaillée du fichier. <b>JComments</b> ne fait pas partie de jDownloads et doit être installé séparément <br /><b>Etat: jComments n\'est pas installé!</b><br />Vous trouvet ce composant sur <a href="http://www.joomlatune.com">www.joomlatune.com</a> .');
DEFINE('_JLIST_BACKEND_SETTINGS_JCOMMENTS_EXISTS_DESC','Si oui, les fonctions de <b>JComments</b> sont activées dans la vue de détaillée du fichier. <br /><b>Etat: JComments est déjà installé!</b>');

// NEW TAB FOR FRONTEND UPLOAD CONFIG
DEFINE('_JLIST_BACKEND_SETTINGS_FE_UPLOAD_TAB_TITLE','Uploads');
DEFINE('_JLIST_BACKEND_SETTINGS_FE_UPLOAD_TITLE_HEAD','Configuration du formulaire uploads du frontend');

// NEW DOWNLOAD FIELDS FOR DOWNLOAD MIRRORS
DEFINE('_JLIST_BACKEND_FILESEDIT_MIRROR_URL_TITLE','Lien alternatif vers un fichier externe supplémentaire:');
DEFINE('_JLIST_BACKEND_FILESEDIT_MIRROR_URL_DESC','Vous pouvez indiquer ici un fichier supplémentaire p.ex. sur un autre serveur. (Miroir).<br />Lorsque vous utilisez cette possibilité, vous devez ajouter les balises {mirror_1} {mirror_2} dans votre layout. Pour des fichiers externes auprès des Sharehosters comme définit dans le champ: Lien externe.');

//NEW TEXT FOR MIRRORS
DEFINE('_JLIST_FRONTEND_MIRROR_URL_TITLE_1','Miroir 1');
DEFINE('_JLIST_FRONTEND_MIRROR_URL_TITLE_2','Miroir 2');

//NEW FOR PLUGINS TAB
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_PLUGINS','Plugins');

//NEW FOR FILE PLUGIN
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_FILEPLUGIN_HEAD','Configuration du plugin pour les articles (mos_jdownloads_file)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(c) Pelma pour jDownloads');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_DEFAULTLAYOUT','Layout standard:');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_DEFAULTLAYOUT_DESC','Le layout sélectionné ici est utilisé pour l\'affichage des fichiers dans les articles, lorsque le plugin est <b>activé</b> (voir plus bas).');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_NOT_INSTALLED','Le plugin qui sert à afficher les fichiers de jDownloads à l\'intérieur des articles ne fait pas partie intégrante de jDownloads. Il doit être installé séparément. <br /><b>Etat: Pas encore installé!</b><br />Vous trouvez cette extension sur <a href="http://demo.joomlaaddons.de/index.php?option=com_jdownloads&Itemid=69&task=viewcategory&catid=9">www.JoomlaAddons.de</a>.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_ONLINEPART','Paramètres lorsque le Plugin est activé');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINEPART','Paramètres lorsque le Plugin est désactivé');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWNEW','Afficher le symbole NEW');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWNEW_DESC','Afficher (ou non) le symbole NEW dans les articles.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWHOT','Afficher le symbole HOT');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWHOT_DESC','Afficher (ou non) le symbole HOT dans les articles.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_ENABLEPLUGIN','Activer le plugin');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_ENABLEPLUGIN_DESC','Activation du plugin. Ceci n\'a rien à voir avec la publication du plugin dans Joomla. Lorsque le plugin est désactivé ici, vous avez la possibilité d\'en informer le visiteur (voir paramètres qui suivent)!');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWDISABLED','Afficher un message lorsque le plugin est désactivé');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWDISABLED_DESC','Lorsque le plugin est désactivé, vous pouvez en informer le visiteur (ou non). Voir les paramètres qui suivent.<br \><b>Non</b>: Rien ne sera affiché.<br \><b>Oui</b>: Le layout standard est utilisé.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_DOWNLOADTITLE','Afficher le titre du fichier lorsque le plugin est désactivé');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_DOWNLOADTITLE_DESC','Si Oui, le titre original du fichier (et son symbole) est affiché, malgré que le plugin soit désactivé. Si non, le titre sera remplaçé par le contenu du champ "Titre à afficher lorsque le plugin est désactivé" plus bas.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINETITLE','Titre à afficher lorsque le plugin est désactivé');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINETITLE_DESC','Titre à afficher lorsque le plugin est désactivé (dépend de votre sélection plus haut).');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINEDESC','Description à afficher lorsque le plugin est désactivé');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINEDESC_DESC','La Description qui sera affichée à la place de la description originale du fichier, lorsque le plugin est désactivé.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT','Layout spécial (si plugin désactivé)');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT_DESC','Le layout sélectionné ici est utilisé pour l\'affichage des fichiers dans les articles, lorsque le plugin est <b>désactivé</b>.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT_OPT1','Non');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT_OPT2','Layout standard');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT_OPT3','Layout spécial');
DEFINE('_JLIST_FRONTEND_SETTINGS_FILEPLUGIN_OFFLINE_FILETITLE','Les téléchargements sont désactivés.');
DEFINE('_JLIST_FRONTEND_SETTINGS_FILEPLUGIN_DESCRIPTION','Si vous avez besoin des fichiers, veuillez prendre contact avec le webmestre.');
DEFINE('_JLIST_FRONTEND_SETTINGS_FILEPLUGIN_FILEUNKNOWN','Le fichier est introuvable! ID=<b>{fileid}</b>');
DEFINE('_JLIST_FRONTEND_SETTINGS_FILEPLUGIN_LAYOUTUNKNOWN','Le layout <b>{thelayout}</b> est introuvable!');

// NEW OPTIONS FOR DEFAULT CAT ICON
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_CAT_FILE_NO_DEFAULT_PIC','Aucun symbole sélectionné!');
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_CAT_PIC_TITLE','Symbole standard pour les catégories:');
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_CAT_PIC_DESC','Le symbole sélectionné ici sera utilisé automatiquement pour les nouvelles catégories. Il est affiché ici dans la taille séléctionnée plus haut.');

// NEW OPTIONS FOR DEFAULT FILE ICON
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_FILE_PIC_TITLE','Symbole standard pour les fichiers:');
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_FILE_PIC_DESC','Le symbole sélectionné ici sera utilisé automatiquement pour les nouveaux fichiers. Il est affiché ici dans la taille séléctionnée plus haut.');

// FOR MISSING NEW MINIPICS
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_PRICE','Prix');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_FILESIZE','Taille');

// FOR DATAFIELDS IN  DOWNLOAD DETAILVIEW
DEFINE('_JLIST_FE_DETAILS_CREATED_BY_TITLE','Créé par');
DEFINE('_JLIST_FE_DETAILS_MODIFIED_BY_TITLE','Modifié par');
DEFINE('_JLIST_FE_DETAILS_MODIFIED_DATE_TITLE','Modifié le');

// FOR EXTERN FILES -  USER INFO IF CHECKBOXES ACTIVE
// PLEASE USE NOT SPECIAL CHARS e.g. " ' & ...
DEFINE('_JLIST_FRONTEND_EXTERN_FILE_USER_INFO','Ce fichier doit être téléchargé séparément puisque il se trouve sur un autre serveur. Par conséquent, il n\'est pas approprié pour un téléchargement groupé.');DEFINE('_JLIST_FRONTEND_EXTERN_FILE_USER_INFO','Ce fichier doit être téléchargé séparément puisque il se trouve sur un autre serveur. Par conséquent, il n\'est pas approprié pour un téléchargement groupé.');

// FOR SAMPLE PIC IN EMAIL LAYOUT
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_EMAIL_INFO_TITLE','<b>Informations concernant le layout: E-Mails</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_EMAIL_INFO_TEXT','<p>Voici un exemple graqhique de la présentation des informations du message transmis. De cadre en rouge foncé indique la zone qui peut être adaptée ici.</p>');

// ******************************************************************************
// NEW IN 1.4 pre-release
// ******************************************************************************

// INSTALL - MOVE  IMAGES DIRECTORIES TO JOOMLA/IMAGES/JDOWNLOADS
DEFINE('_JLIST_INSTALL_MOVE_IMAGES_ERROR','Problèmes lors du déplacement des répertoires des images.');
DEFINE('_JLIST_INSTALL_MOVE_IMAGES_OK','Répertoires des images déplacés avec succès vers  ../images/jdownloads/.');
DEFINE('_JLIST_INSTALL_MOVE_IMAGES_DEST_DIR_EXIST','Les répertoires des images ../images/jdownloads/ existent déjà!');
DEFINE('_JLIST_INSTALL_MOVE_IMAGES_COPY_ERROR','ERREUR: Le répertoire des images n\'a pas pu être copié!');
DEFINE('_JLIST_INSTALL_MOVE_IMAGES_DEL_AFTER_COPY_ERROR','ERREUR: Le répertoire source des images n\'a pas pu être supprimé après la copie!');

DEFINE('_JLIST_BACKEND_SETTINGS_IMAGES_NOTE','Remarque: Lors de l\'installation de jDownloads, tous les répertoires des images seront déplacés vers le sous-répertoire: /images/jdownloads/. Par conséquent, lors de la suppression de jDownloads (p.ex. avant l\'installation d\'une nouvelle release), plus aucune image ne sera perdue.');

// FOR MAIL AFTER FRONTEND UPLOADS
DEFINE('_JLIST_SETTINGS_INSTALL_6','Informations concernant un upload!');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_UPLOAD_HEAD','E-Mail Configurations pour uploads');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_UPLOAD_TEMPLATE_TITLE','E-Mail Layout');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_UPLOAD_TEMPLATE_DESC','Ici vous pouvez définir la présentation des <b>E-Mails</b> qui sont envoyés, après chaque upload, à l\'adresse indiquée ci-dessus (si activé). Vous pouvez utiliser du code HTML ainsi que n\'importe quel texte.<br /><br />Balises disponibles:<br />{name} {mail} {date} {ip} {file_title} {file_name} {description} ');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_DOWNLOAD_TEMPLATE_DESC','Ici vous pouvez définir la présentation des <b>E-Mails</b> qui sont envoyés, après chaque téléchargement, à l\'adresse indiquée ci-dessus (si activé). Vous pouvez utiliser du code HTML ainsi que n\'importe quel texte.<br /><br />Balises disponibles:<br />{file_list} {ip_address} {date_time} {user_name} {user_email} {user_group}'); // changed in 1.4 beta 
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_UPLOAD_TEMPLATE','Message concernant un upload de fichier!<br />
<br />
Envoyeur: {name}<br />
E-Mail: {mail}<br />
Adresse IP: {ip}<br /><br />
Nom du fichier: {file_name}<br />
Titre: {file_title}<br />
Description: {description}<br />
Date / Heure: {date}<br /><br />
Ce Message a été généré automatiquement.');

// NEW FOR NEW IMAGES
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_NEW_PIC_DESC2','Voici le choix des images du répertoire: <b>../images/jdownloads/newimages </b>.');

// FOR NEW OPTIONS: SCREENSHOT UPLOAD
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_TITLE','Définir la taille des aperçus des images (Thumbnails)');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_INFO','Lors de l\'utilisation des captures d\'écrans, des aperçus réduits des images (thumbnails) sont générés automatiquement. Ici vous pouvez définir la taille de ces thumbnails. Remarque: La bibliothèque GD doit être installée sur le serveur (Voir état).');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_STATUS_GD_OK','Etat: GD Library présent!');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_STATUS_GD_NOT_OK','Etat: GD Library pas présent!');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_SIZE_HEIGHT','Hauteur maximale en pixel (p.ex. 150).');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_SIZE_WIDTH','Largeur maximale en pixel (p.ex. 150).');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_CREATE_ALL_NEW_TITLE','Recréer tous les aperçus des images lors de la sauvegarde? ');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_CREATE_ALL_NEW_DESC','Supprime tous les aperçus réduits (thumbnails) lors de la sauvegarde de la configuration, et les regénère, en utilisant les dimensions indiquées.');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_CREATE_ALL_MESSAGE','Tous les aperçus ont été recréés ');

// NEW FIELDS IN EDIT FILES FOR SCREENSHOTS
DEFINE('_JLIST_BACKEND_FILESEDIT_THUMBNAIL_LIST_NO_PIC','Aucune image sélectionnée');
DEFINE('_JLIST_BACKEND_FILESEDIT_THUMBNAIL_LIST_TITLE','Sélectionner une image du serveur:');
DEFINE('_JLIST_BACKEND_FILESEDIT_THUMBNAIL_LIST_DESC','Ici sont à disposition toutes les images réduites du répertoire <b>/images/jdownloads/screenshots/thumbnails</b>. L\'image activée peut être affichée dans le layout au moyen de la balise {thumbnail}.');
DEFINE('_JLIST_BACKEND_FILESEDIT_THUMBNAIL_UPLOAD_TITLE','Sélectionner une image pour upload:');
DEFINE('_JLIST_BACKEND_FILESEDIT_THUMBNAIL_UPLOAD_DESC','Ici vous pouvez télécharger une image vers le serveur. Celle-ci sera utilisée pour ce download. L\'original est mémorisé dans le répertoire <b>/images/jdownloads/screenshots</b>, et une version réduite (thumbnail) est créée automatiquement.');

// FOR MIRROR LINK - JAVASCRIPT ERROR MESSAGE
DEFINE('_JLIST_BACKEND_FILESEDIT_ERROR_ONLY_MIRROR','Erreur: Veuillez d\'abord indiquer un fichier interne ou externe. Un lien miroir est uniquement possible comme supplément.');

// FOR NEW MIRROR DOWNLOAD BUTTONS
DEFINE('_JLIST_BACKEND_SETTINGS_DETAILS_MIRROR_BUTTON_TITLE1','1. bouton miroir');
DEFINE('_JLIST_BACKEND_SETTINGS_DETAILS_MIRROR_BUTTON_TITLE2','2. bouton miroir');

// FOR NEW UPDATE ICON IN DOWNLOADS TITLE
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_NEW_PIC_DESC3','Ici sont à disposition toutes les images du répertoire: <b>../images/jdownloads/updimages </b>.');
DEFINE('_JLIST_BACKEND_SETTINGS_UPD_TITLE','Combien de temps un fichier est-il considéré comme "actualisé"');
DEFINE('_JLIST_BACKEND_SETTINGS_UPD_DESC','Veuillez indiquer ici le nombre de jours pendant lequel un fichier est considéré comme "actualisé". Le symbole sélectionné en bas sera affiché derrière le titre du fichier. Un fichier est considéré comme actualisé lorsque l\'option correspondante du fichier a été activé. Pas de symbole si vous indiquez 0.');

// FOR NEW OPTION - LOAD FILE IN BROWSER - NOT DOWNLOAD
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_VIEW_FILE_TYPES','Quels types doivent être ouverts directement dans le navigateur');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_VIEW_FILE_TYPES_DESC','Indiquez les types de fichiers qui ne sont pas considérés comme téléchargements. Ils seront ouverts dans une nouvelle fenêtre du navigateur. Veuillez sèparer les entrées avec des virgules (,). Exemple: html,htm,txt,pdf,doc,jpg,jpeg,png,gif');

//NEW FRONTEND PIC UPLOAD FIELD
DEFINE('_JLIST_FRONTEND_UPLOAD_PIC_FILETITLE','Capture d\'écran:');
DEFINE('_JLIST_FRONTEND_UPLOAD_PIC_ALLOWED_FILES','Types permis:');

// NEW FILTER OPTION IN FILES LIST - BACKEND
DEFINE('_JLIST_BACKEND_FILESLIST_FILTER_PUBLISHED','publiés');
DEFINE('_JLIST_BACKEND_FILESLIST_FILTER_UNPUBLISHED','non publiés');

// NEW INFO WHEN USING LIGHTBOX PLACEHOLDER
DEFINE('_JLIST_BACKEND_TEMPEDIT_INFO_LIGHTBOX','Pour afficher des captures \'écran avec la fonction Lightbox, vous devez utilier les balises comme suit: <br /><b>{screenshot_begin}< a href="{screenshot}" rel="lightbox" > < img src="{thumbnail}" align="right" /></a >{screenshot_end}</b><br />Remarque: les espaces du code HTML (derrière les < et devant les >) ont été ajoutés pour des raisons de formatage de ce texte!'); // changed in 1.4 beta 

// ******************************************************************************
// new in 1.4 beta
// ******************************************************************************

// NEW OPTION FOR MANAGER ACCESS IN BACKEND
DEFINE('_JLIST_BACKEND_SETTINGS_MANAGER_ACCESS','Accès pour managers?');
DEFINE('_JLIST_BACKEND_SETTINGS_MANAGER_ACCESS_DESC','Si Oui, les membres du groupe Manager ont accès à toutes les fonctions du backend de jDownloads. Si Non, uniquement les administrateurs.');

// NEW OPTION FOR VIEW PLACEHOLDER IMAGE FOR SCREENSHOTS IN DETAIL SITE
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PLACEHOLDER_TITLE','Afficher image par défaut des captures d\'écran sur la page des détails?');
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PLACEHOLDER_TEXT','Si Oui, l\'image à gauche est affichée sur la page de détails, au cas ou aucune capture d\'écran n\'est sélectionné pour le fichier en cours.');

// NEW OPTION FOR VIEW PLACEHOLDER IMAGE FOR SCREENSHOTS IN FILESLIST
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PLACEHOLDER_IN_LIST_TITLE','Afficher image par défaut des captures d\'écran sur la page des listes de fichiers?');
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PLACEHOLDER_IN_LIST_TEXT','Si Oui, l\'image à gauche est affichée sur la page de la liste des fichiers, au cas ou aucune capture d\'écran n\'est sélectionné pour le fichier correspondant.');

// NEW OPTION FOR VIEW CATEGORY INFOS IN LISTVIEW - FRONTEND
DEFINE('_JLIST_BACKEND_SETTINGS_CAT_VIEW_INFO_IN_LISTS_TITLE','Afficher les informations des catégories?');
DEFINE('_JLIST_BACKEND_SETTINGS_CAT_VIEW_INFO_IN_LISTS_TEXT','So Oui, une ligne d\'information de la catégorie en cours est affichée en dessous de la liste de navigation. Puisque le nom de la catégorie en cours est affichée dans la liste de navigation, ceci n\'est pas toujours désiré');

// NEW OPTION FOR VIEW PAGE NAVIGATION ON THE BOTTOM - FRONTEND
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PAGENAVI_BOTTOM_TITLE','Afficher la liste de navigation en bas de page?');
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PAGENAVI_BOTTOM_TEXT','Si Oui, une liste de navigation est également affichée en bas de page.');

// NEW OPTION FOR VIEW PAGE NAVIGATION ON THE TOP - FRONTEND
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PAGENAVI_TOP_TITLE','Afficher la liste de navigation en haut de la page?');
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PAGENAVI_TOP_TEXT','Si Oui, une liste de navigation est affichée en haut de la page.');

// PUBLISH FILES MESSAGE IN BACKEND
DEFINE('_JLIST_BACKEND_EDIT_FILES_CAN_NOT_PUBLISH_INFO','Quelques téléchargements n\'ont pas eu d\'affectation à un fichier. Publication pas possible!');

DEFINE('_JLIST_BACKEND_EDIT_FILES_SET_UPDATE_TITLE','Marquer le téléchargement comme mis à jour:');
DEFINE('_JLIST_BACKEND_EDIT_FILES_SET_UPDATE_TEXT','Si Oui, le fichier actualisé sera accentué optiquement (Symbole updated). Le temps, durant lequel un fichier reste dans l\'état actualisé, peut être réglé dans les options.');

// FOR NEW META INFORMATION FIELDS IN CAT AND FILES EDIT
DEFINE('_JLIST_BACKEND_EDIT_METADESC_TITLE','Meta description (meta-description):');
DEFINE('_JLIST_BACKEND_EDIT_METADESC_DESC','Ici vous pouvez introduire un texte qui sera inséré dans pa partie meta-description du code HTML généré.');
DEFINE('_JLIST_BACKEND_EDIT_METAKEY_TITLE','Mots-clé Meta (meta-keywords):');
DEFINE('_JLIST_BACKEND_EDIT_METAKEY_DESC','Ici vous pouvez introduire un texte qui sera inséré dans la partie meta-keywords du code HTML généré.');

DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR_INFOS_TITLE','Informations concernant l\'auteur du fichier');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_HOME_DESC','Lien URL vers le site de l\'auteur. Il sera affiché comme lien dans le frontend.');
DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR_DESC','Lorsque vous introduisez un nom et en bas une adresse internet ou une adresse mail, celui-ci sera affiché respectivement comme lien vers une page internet ou comme lien vers une mail.');

// NEW PARAMETER IN SEARCH
DEFINE('_JLIST_FRONTEND_SEARCH_NUMBERS','Nombre de résultats de recherche');

// NEW USER INFO BY EXTERN SHAREHOSTER LINK
DEFINE('_JLIST_FRONTEND_DOWNLOAD_GO_TO_OTHER_SITE_INFO','Le fichier demandé se trouve sur une page d\'un fournisseur tiers. <br />Veuillez SVP suivre les instrictions de ce fournisseur pour démarrer le téléchargement.');

// NEW OPTION IN  EDIT DOWNLOADS
DEFINE('_JLIST_BACKEND_FILESEDIT_OPEN_LINK_IN_OTHER_WEBSITE_TITLE','Fichier provient d\'une page d\'un autre fournisseur');
DEFINE('_JLIST_BACKEND_FILESEDIT_OPEN_LINK_IN_OTHER_WEBSITE_DESC','Si Oui, le fichier se trouve sur un site d\'un autre fournisseur que le vôtre (p.ex. Sharehoster), et le téléchargement doit être démarré sur le site de ce fournisseur. Le lien du bouton de téléchargement charge la page correspondante.');

// NEW SERVER INFO TAB IN CPANEL TAB
DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_5','Info serveur');
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_TITLE','Informations sur la configuration actuelle du serveur'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_DESC','La taille maximale des fichiers à télécharger dépend de la configuration du serveur (php.ini). En bas vous voyez les valeurs actuelles. Assurez-vous que ces valeurs sont adaptées à vos besoins. Si vous ne deviez pas avoir accès au fichier php.ini, veuillez vous adresser à votre FAI. Vous trouvez des informatios concernant les valeurs sur www.php.net.'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_FILE_UPLOADS','Téléchargement autorisé (file_uploads):'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_MAX_FILESIZE','Taille max. permise (max_filesize):'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_POST_MAX_SIZE','Taille max. POST (post_max_size):'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_MEMORY_LIMIT','Système limité à (memory_limit):'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_MAX_EXECUTION_TIME','Temps max. de l\'exéution du script (max_execution_time):'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_MAX_INPUT_TIME','Temps max. de l\'exéution du script pour téléchargements (max_input_time):'); 

// NEW MESSAGE AFTER EDIT CATEGORIES AND CHANGING THE ACCESS LEVEL
DEFINE('_JLIST_BACKEND_CATSEDIT_SUM_CATS_ACCESS_LEVEL_CHANGED_AFTER_EDIT_MSG','Les sous-catégories ont reçu les mêmes droits!');
DEFINE('_JLIST_BACKEND_CATSEDIT_CATS_ACCESS_LEVEL_CAN_NOT_CHANGED_MSG','Remarque: Une souscatégorie ne peut pas avoir des droits qui sont inférieurs à la catégorie au-dessus. Pour cette raison les droits ont étés adaptés.');

// NEW MINI ICON TITLE
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_DOWNLOAD_HITS','Téléchargements');
// ADDITIONAL INFO IN FILES LAYOUT
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DESC2','A l\'aide des balises {files_title_begin} {files_title_text} {files_title_end} vous pouvez insérer un ligne de titre au-dessus de la liste des fichiers.'); 
// ADDITIONAL INFO IN CAT LAYOUT
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_DESC2','A l\'aide des balises {cat_title_begin} {subcats_title_text} {cat_title_end} vous pouvez insérer un ligne de titre au-dessus de la liste des catégories.'); 
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_DESC3','Les balises {cat_info_begin} et {cat_info_end} marquent la zone qui contient les informations concernant la catégorie. Dans la configuration, cette zone peut être masquée.'); 

// NEW MESSAGES FOR INSTALLATION
DEFINE('_JLIST_INSTALL_20','Vérification des droits en cours... Veuillez attendre SVP!');
DEFINE('_JLIST_INSTALL_21','Verification des droits terminée.');

// NEW IN 1.4 beta (2)

// NEW TEXT FOR LAYOUT FIELDS TITLE PLACEHOLDERS IN THE FRONTEND VIEW  (layout: files)
DEFINE('_JLIST_FE_FILELIST_LICENSE_TITLE','Licence');
DEFINE('_JLIST_FE_FILELIST_PRICE_TITLE','Prix');
DEFINE('_JLIST_FE_FILELIST_LANGUAGE_TITLE','Langue');
DEFINE('_JLIST_FE_FILELIST_FILESIZE_TITLE','Taille');
DEFINE('_JLIST_FE_FILELIST_SYSTEM_TITLE','Système');
DEFINE('_JLIST_FE_FILELIST_AUTHOR_TITLE','Auteur');
DEFINE('_JLIST_FE_FILELIST_AUTHOR_URL_TITLE','Page Web');
DEFINE('_JLIST_FE_FILELIST_CREATED_DATE_TITLE','Date');
DEFINE('_JLIST_FE_FILELIST_HITS_TITLE','Téléchargements');
DEFINE('_JLIST_FE_FILELIST_CREATED_BY_TITLE','Créé par');
DEFINE('_JLIST_FE_FILELIST_MODIFIED_BY_TITLE','Modifié par');
DEFINE('_JLIST_FE_FILELIST_MODIFIED_DATE_TITLE','Dernière modification');
// NEW FOR PLACEHOLDER   {files_title_text} and  {subcats_title_text}  {details_block_title}
DEFINE('_JLIST_FE_FILELIST_TITLE_OVER_FILES_LIST','Fichiers:');
DEFINE('_JLIST_FE_FILELIST_TITLE_OVER_SUBCATS_LIST','Sous-catégories:');
DEFINE('_JLIST_FE_DETAILS_DATA_BLOCK_TITLE','Données');
// NEW PLACEHOLDERS FOR SUMMARY PAGE  {license_note}  {title_text}
DEFINE('_JLIST_FE_SUMMARY_PAGE_LICENSE_NOTE','En téléchargeant, vous acceptez les conditions de la licence.');
DEFINE('_JLIST_FE_SUMMARY_PAGE_TITLE_TEXT','Ici vous pouvez voir la liste des fichiers sélectionnés pour le téléchargement');

// NEW INSTALL MESSAGES FOR UPDATE
DEFINE('_JLIST_INSTALL_WARNING_CAT_ACCESS_RIGHTS','Il y a eu des changements dans les paramètres des droits des catégories. Veuillez contrôler vos catégories avant leur publication!');
DEFINE('_JLIST_INSTALL_WARNING_DEFAULT_LAYOUTS_ARE_ACTIVE','Suite à l\'introduction de nouvelles balises, les nouveaux layouts standards 1.4 ont été activés. Vous pouvez les changer dans les paramètres des layouts.');

?>