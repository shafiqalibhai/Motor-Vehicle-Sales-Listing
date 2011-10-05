<?php

defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

//Seyret Component v.0.1//
/**
* Content code
* @package SEYRET
* @Copyright (C) 2006 Mustafa DINDAR
* @ All rights reserved
* @ seyret Component is Free Software
* @ Released under GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
* @version 0.1
=========================================================================

* @ French Translation by / Traduction Française par:
* @ version 0.2.1 ====> All/toutes  ===> 2.8.1
* @ Date : 11.01.2008 ===> 07/10/2008
* @ Name / Nom : Félix Dr. Dimitric
* @ Web site / Site web : http://eliopro.com and htp://eliopro.com/maginot
**/	

DEFINE("_COMPONENT_NAME","Seyret: Système d'affichage de liste de vidéos. ");
DEFINE("_PAGE","Page");
DEFINE("_VIDEOLISTHEADERPRE","Vidéos dans \"");
DEFINE("_VIDEOLISTHEADERSUF","\" catégorie");
DEFINE("_HIT","Clics");
DEFINE("_VIDEOTITLE","Titre");
DEFINE("_DETAILS","Détails");
DEFINE("_RATING","Moyenne");
DEFINE("_NUMBEROFVOTE","Votes");
DEFINE("_NOVOTE","Pas de Vote");
DEFINE("_LOGINFORVOTE","Vous devez vous connecter pour pouvoir voter!");
DEFINE("_THANKSFORVOTE","Merci d'avoir voté!");
DEFINE("_WAITAMOMENT","Veuillez patienter!");
DEFINE("_TOPLEVEL","La Première");
DEFINE("_VIDEOGROUPTITLE","Catégories de Vidéos");
DEFINE("_CATEGORIES","Catégories");
DEFINE("_VIDEOS","Vidéos");
DEFINE("_EXPANDALL","Afficher tout");
DEFINE("_CLOSEALL","Fermer tout");
DEFINE("_VIDEO_CATEGORIES","Catégories de Vidéo");
DEFINE("_VIDEOCAT_CODE","Code de la Catégorie");
DEFINE("_VIDEOCAT_NAME","Nom de la Catégorie");
DEFINE("_VIDEOCAT_PARENT","Catégorie parent");
DEFINE("_EDIT_CATEGORY","Éditer la Catégorie");
DEFINE("_NEW_CATEGORY","Nouvelle Catégorie");
DEFINE("_NEWVIDEOCATCOMMENT","Ici, vous pouvez créer les nouvelles catégories de vidéos. N'oubliez pas de sélectionner une catégorie parent s'il s'agit d'une sous-catégorie.");
DEFINE("_DEVELOPER","Développeur");
DEFINE("_INFO","Info");
DEFINE("_SEYRETTHANKS","Merci");
DEFINE("_VERSION_INFO","Version");
DEFINE("_COPYRIGHT","Copyright");
DEFINE("_LICENSE","Licence");
DEFINE("_YOUTUBEID","ID YouTube");
DEFINE("_YOUTUBEIDINFO","Ici vous entrez  <b>ID YouTube</b> afin d'utiliser toutes les fonctionnalités du composant. Le composant utilise cet ID YouTube afin d'afficher le vidéo. Si vous n'entrez pas d'ID, vous devez entrer toutes les informations manuellement: adresse pour la vignette, code, ect.");
DEFINE("_TITLELENGTH","Longueur du titre");
DEFINE("_TITLELENGTHINFO","Veuillez entrer la longueur du titre qui sera affiché dans la liste des vidéos. Selon votre template, entrer la valeur appropriée. ");
DEFINE("_DETAILSLENGTH","Longueur pour Détails");
DEFINE("_DETAILSLENGTHINFO","Veuillez entrer la longueur pour les détails qui sera utilisé dans la liste des vidéos. Selon votre template, entrer la valeur appropriée. ");
DEFINE("_CONFIG_OK","Configuration sauvegardée!");
DEFINE("_CONFIG_ERR","Erreur: La Configuration n'a pas pu être sauvegardée!");
DEFINE("_VIDEOWIDTH","Largeur du Vidéo");
DEFINE("_VIDEOWIDTHINFO","La largeur du Vidéo sur la page d'accueil. Selon votre template, entrer la valeur appropriée.");
DEFINE("_VIDEOHEIGHT","Hauteur du Vidéo");
DEFINE("_VIDEOHEIGHTINFO","La hauteur du vidéo en page d'accueil. Selon votre template, entrer la valeur appropriée.");
DEFINE("_VIDEO_LIST","Liste de Vidéo");
DEFINE("_VTHUMB","Vignette");
DEFINE("_VIDEO","Vidéo");
DEFINE("_EDIT_VIDEO","Éditer le Vidéo");
DEFINE("_NEW_VIDEO","Nouveau Vidéo");
DEFINE("_VSERVERTYPE","Type de Serveur");
DEFINE("_VSERVERCODE","Code Serveur");
DEFINE("_NEWVIDEOCOMMENT","La meilleure façon d'ajouter un nouveau vidéo c'est d'utiliser le panneau en frontend, connecté en tant qu'administrateur. Vous allez entrer le lien du vidéo et le système va entrer les informations du vidéo automatiquement. Ici vous devez entrer les informations manuellement. <br> Si vous éditez un vidéo et n'êtes pas certain concernant les informations du vidéo, ne changez pas le type de serveur de vidéo, le code serveur du vidéo et l'adresse de la vignette. Sinon le composant risque de ne plus fonctionner.");
DEFINE("_APPLY","Appliquer");
DEFINE("_SAVE","Sauvegarder");
DEFINE("_INPUTLINK","Le lien du vidéo");

//Version 0.2=============================================================================================

DEFINE("_ISTHISFRESHINSTALL","Les tables de la base de données Seyret ne sont pas disponible.<br><strong>Soyez prudent afin d'éviter la perte de données.</strong><br>");
DEFINE("_IFTHISISFRESHINSTALL","S'IL S'AGIT D'UNE NOUVELLE INSTALLATION");
DEFINE("_IFTHISISUNINSTALL","SI VOUS DÉSIREZ DÉSINSTALLER LE COMPOSANT");
DEFINE("_THISWILLDROPTABLES","Pour terminer l'installation, cliquer sur \"Seyret Database\".");
DEFINE("_INSTALLATTENTION","<strong>Lors de cette opération toutes les données seront remplacées.</strong>."); 
DEFINE("_FRESHINSTALLSUCCESS","Installation de la base de données de Seyret avec Succès.");
DEFINE("_UNINSTALLEXPL","Vous avez désinstallé les tables de la base de données de Seyret.<br><br>Maintenant n'oubliez pas de terminer la désinstallation via le gestionnaire d'installation de composant de Joomla.");
DEFINE("_JOOMLAALEMMESSAGE","Joomla Alem");
DEFINE("_YOUDONTWANTTRACKING","Vous n'avez pas la permission pour la réception des messages rss. Cela signifie que vous ne recevrez pas de nouvelles concernant les futures versions ou les annonces de sécurité ici. Nous vous conseillons d'ouvrir la réception de messages du Panneau de Configuration.");
DEFINE("_VERSIONTRACKINGINFO","<b>Ici vous pouvez sélectionner si vous désirez ouvrir les messages Joomla-alem ou non.<br><br>Si vous sélectionnez oui, le système vous connectera au serveur de Joomla-alem et générera un nouvel ID d'utilisateur Joomla-alem automatiquement pour votre site. <br><br>Alors, vous serez capable de voir les messages de Joomla-alem messages dans votre panneau de contrôle et vous serez au courant ainsi des nouvelles versions et des mises à jour de sécurité.<br><br>Également votre ID d'utilisateur Joomla-alem sera utilisé pour l'option de téléchargement de vidéo.<br><br>Si vous sélectionnez de ne pas recevoir de messages, le système ne se connectera pas au serveur de Joomla-alem.<b>");
DEFINE("_PLEASESELECTTRACKINGCHOICE","VEUILLEZ SÉLECTIONNER");
DEFINE("_THEME","Thème");
DEFINE("_THEMEINFO","Veuillez sélectionner le thème pour le composant Seyret que vous désirez utiliser pour votre site.");
DEFINE("_ADDVIDEO","Vidéos Ajoutés");
DEFINE("_PENDINGVID","Vidéos en attente");
DEFINE("_SORTBY","Trié par");
DEFINE("_NOSERVERFOUNDREPORTIT","Désolé, mais on ne peut pas trouver de serveur de vidéo approprié au lien du vidéo. Si vous êtes certain que le lien du vidéo est correct, veuillez contacter l'administrateur du site.");
DEFINE("_ADDEDBY","Ajouté par");
DEFINE("_ADDEDDATE","Date");
DEFINE("_YOUSHOULDLOGINTOADDVIDEO","Vous devez vous connecter afin de pouvoir ajouter des vidéos.");
DEFINE("_ASCENDING","Ascendant");
DEFINE("_DESCENDING","Descendant");
DEFINE("_POPUPVIDEOWIDTH","Largeur de la fenêtre popup du vidéo");
DEFINE("_POPUPVIDEOHEIGHT","Hauteur de la fenêtre popup du vidéo");
DEFINE("_DEFAULTSORTBY","Tri des vidéo par défaut");
DEFINE("_DEFAULTSORT","Ordre de tri par défaut");
DEFINE("_POPUPVIDEOWIDTHINFO","Définir ici la largeur du vidéo dans la fenêtre popup. Les dimensions de la fenêtre vont être 100px de plus que les dimensions du vidéo.");
DEFINE("_POPUPVIDEOHEIGHTINFO","Définir ici la largeur du vidéo dans la fenêtre popup.");
DEFINE("_DEFAULTSORTBYINFO","Veuillez sélectionner tri par défaut par critère."); 
DEFINE("_DEFAULTSORTINFO","Veuillez sélectionner le type de tri par défaut, ascendant ou descendant."); 
DEFINE("_THISAREAISONLYFORREGISTEREDUSERS","Seulement les utilisateurs enregistrés peuvent transférer des vidéos. Veuillez vous connecter ou vous enregistrer.");  
DEFINE("_COPYTHISLINK","Copier le lien");  
DEFINE("_YOURUSERIDRESTORED","Votre ID utilisateur a été restauré avec succès!");   
DEFINE("_YOURUSERIDGENERATED","Votre ID utilisateur a été généré avec succès!");   
DEFINE("_YOURUSERIDPROBLEM","Il semble qu'un problème est survenu avec votre ID utilisateur Joomla-alem. Veuillez contacter l'administrateur de joomla-alem!");  
DEFINE("_YOUDONTHAVEADMINISTRATORRIGHTS","Vous n'avez pas les droits en tant qu'administrateur ou éditeur sur ce site! Si vous avez ces droits et voyez ce message, vous avez peut-être un problème avec acl. Pour vérifier les vidéos en attente, vous pouvez également vous connecter via l'administration en backend.");  
DEFINE("_IFPUBLISHED","Statut de publication");   
DEFINE("_YES","Oui");   
DEFINE("_NO","Non");   
DEFINE("_ENABLEDOWNLOADS","Activer le transfert");   
DEFINE("_ENABLEDOWNLOADSINFO","Les liens de téléchargement sont générés sur le serveur de Joomla-alem pour cette version. Pour activer le téléchargement de vidéos, il vous suffit de faire un don de 3$ et plus qui serait apprécié afin que le projet de levée de fonds pour Joomla-Alem. Quand nous aurons atteint $1500 - qui seront utilisé pour acheter un nouvel ordinateur, nous allons immédiatement sortir une nouvelle version et tous les liens de téléchargement seront généré sur votre propre serveur.<br>Si vous n'avez pas encore fait de don, vous pouvez utiliser le menu de gauche sous Donation. N'oubliez pas de nous informer concernant votre don.");   
DEFINE("_JALEMUSERID","ID Utilisateur Joomla-Alem"); 
DEFINE("_JALEMUSERIDINFO","Votre ID utilisateur Joomla-Alem de votre site. Ceci sera utilisé lors de toutes les opérations de Joomla-Alem."); 
DEFINE("_DONATIONS","Dons"); 
DEFINE("_DONATIONHEADER","Dons"); 
DEFINE("_YOUHAVENTDONATEDYET","Il semble que vous n'ayez pas encore fait de don.");
DEFINE("_YOUHAVENTDONATEDSTEP1","<b>Étape-1: </b> Cliquer sur le logo de Paypal avec votre montant et aller vers la page Paypal. Sur la page de Paypal, votre ID d'utilisateur Joomla Alem sera inclus.");
DEFINE("_YOUHAVENTDONATEDSTEP2","<b>Étape-2: </b>Après avoir donné, veuillez entrer le montant et cliquez sur soumettre. <p><b>Cela nous informera de votre don.</b> <p> Après votre envoi. <p>Si votre paiement a été vérifié, il sera approuvé et vous pourrez télécharger automatiquement, sinon votre demande sera rejetée et l'option de téléchargement sera désactivée."); 
DEFINE("_SUBMIT","Soumettre et activez les téléchargements"); 
DEFINE("_INFORMJOOMLAALEM","Informer Joomla Alem concernant le montant du don: "); 
DEFINE("_YOURDONATIONAPPROVED","Votre don a été approuvé. Vous avez accès à l'option de téléchargement maintenant. <p>Merci pour votre don."); 
DEFINE("_YOURDONATIONPENDING","Votre rapport de don est en attente. Vous pouvez activer l'option de téléchargement dans votre menu de configuration. <p>Mais si jamais nous n'approuvons pas votre don, l'option téléchargement sera désactivée pour votre site. <p>Merci pour votre don."); 
DEFINE("_YOURDONATIONREJECTED","Votre rapport de don été rejeté. <p>Malheureusement, nous ne pouvons pas approuver votre don. <p>Si vous croyez qu'il s'agit d'une erreur, veuillez nous contacter via courriel."); 
DEFINE("_UNINSTALL","Désinstaller"); 
DEFINE("_CAUTION","Attention"); 
DEFINE("_CAUTIONUNINSTALL2","Cette opération va vider les tables de la base de données de Seyret de façon définitive.<p>Si vous désirez procéder, cliquer l'image ci-dessous."); 
DEFINE("_CAUTIONUNINSTALL3","Cette opération va supprimer seulement les tables de la base de données de Seyret. Ensuite, vous devez désinstaller le composant Seyret via le gestionnaire d'Installation de Joomla afin de compléter la désinstallation."); 
DEFINE("_UNINSTALLDATABASESUCCESS","Les tables de la base de données de Seyret ont été désinstallées avec succès!");
DEFINE("_NOJALEMUSERID","Vous n'avez pas un ID utilisateur Joomla-Alem valide! <p>Vous ne pouvez pas vous connecter à Joomla-alem sans un ID d'utilisateur valide. <p>Il se peut que la réception de messages soit désactivée. Vous pouvez activer la réception des messages à partir du panneau de coontrôle.<p> Alors, votre ID d'utilisateur sera généré automatiquement.");
DEFINE("_MESSAGEFEED","Réception de messages"); 
DEFINE("_MESSAGEFEEDINFO","Vous pouvez sélectionner le statut de réception de message. Si vous n'avez pas de ID d'utilisateur Joomla-alem, nous vous conseillons d'en obtenir un. Si vous activez la réception des messages, vous aurez un ID d'utilisateur automatiquement. Même si vous désactivez l'option, votre ID d'utilisateur ne sera pas supprimé. Également si vous réinstallez Seyret complètement, votre ancien ID d'utilisateur sera restauré à partir du serveur de Joomla-Alem."); 
DEFINE("_ENABLED","Activé"); 
DEFINE("_DISABLED","Désactivé"); 
DEFINE("_VIDEOCOUNTINVLIST","# Vidéo");
DEFINE("_VIDEOCOUNTINVLISTINFO","Le nombre de vidéos dans la liste des vidéos en page d'accueil.");
DEFINE("_DELETEVIDEOCONFIRMMESSAGE","Êtes-vous certain? Ce vidéo va être supprimé définitivement."); 
DEFINE("_DELETETHISVIDEO","Supprimer cette vidéo");
DEFINE("_PUBLISH","Publier");

//that's enough for 0.2. Let's leave something to 0.3 :)

//Traduction Française de la version v 0.2.1, 0.2.3, 0.2.4, 0.2.5 et V 2.0.6 par Félix Dr. Dimitric http://eliopro.com :)

//0.2.1 start
DEFINE("_PUBLISHED","Publier");  
DEFINE("_UPLOADVIDEO","Importer une vidéo"); 
DEFINE("_UPLOADVIDEOINFORM","Importer une vidéo depuis votre ordinateur");
DEFINE("_UPLOADANDGOTONEXT","ETAPE SUIVANTE"); 
DEFINE("_UPLOADTHUMBNAILINFORM","Importer une image pour illustrer votre vidéo "); 
DEFINE("_NOTHUMBNAILFORTHISVIDEO","Ne pas télécharger d'images pour illustrer cette vidéo."); 
DEFINE("_COPY","Copier");  
DEFINE("_THISISANUPDATEINFO","Il semble que vous essayez d'améliorer le manuscrit du composant Seyret.
Pendant les mises à jours, ne laissez pas tomber les tables de votre base de données. Seyret nous conseil toujours de faire une protection en sauvegardant régulierement votre base de données. ");
DEFINE("_DBVERSION_INFO","Vieille version "); 
DEFINE("_NEWVERSION_INFO","Vous faite une mise à jour"); 
DEFINE("_PROCEEDUPGRADE","Pour procéder à la mise à jour cliquez juste sur l'image si dessous."); 
DEFINE("_UPGRADEATTENTION","Si vous pensez que quelque chose a mal tourné après mise à niveau, reconstituez vos tables à partir des dossiers de secours et svp informez-nous. www.joomla-alem.com"); 
DEFINE("_UPGRADESUCCESS","Le composant Seyret est correctement mis à jour !");  
DEFINE("_USERSUPLOADVIDEO","L'utilisateur peu importer des vidéos");  
DEFINE("_USERSUPLOADVIDEOINFO","Merci de définir les permissions pour importer des vidéos");  
DEFINE("_VIDEOMAXSIZE","Taille maximum des vidéos");  
DEFINE("_VIDEOMAXSIZEINFO","Taille maximum pour les téléchargements de vidéos autorisé en Méga-Bytes. Cette valeur devrait être un nombre entier. En outre attention aux limites de téléchargement dans votre fichier php.ini !");  
DEFINE("_THUMBMAXSIZE","Taille maximum de miniatures");  
DEFINE("_THUMBMAXSIZEINFO","Taille maximum pour les téléchargements de miniatures autorisé en Méga-Bytes. Cette valeur devrait être un nombre entier. En outre attention aux limites de téléchargement dans votre fichier php.ini !");  
DEFINE("_RESIZETHUMBWIDTH","Nouvelle taille des miniatures");
DEFINE("_RESIZETHUMBWIDTHINFO","Cette valeur va définir la taille des miniatures des vidéos."); 
DEFINE("_EMBEDBOXWIDTH","Taille du lecteur"); 
DEFINE("_EMBEDBOXWIDTHINFO","Cette valeur définit la largeur du lecteur et copient la boîte de lien."); 
DEFINE("_ADDVIDEOINFO","Entrez ici le lien de la vidéo que vous désirez importer d'un autre serveur. Copiez simplement le lien complet qui figure dans la barre d’adresse de votre navigateur ou se trouve votre vidéo. Nous supportons la plupart des serveurs connus.");

//0.2.3. end

//====================================================================================
//0.2.4
DEFINE("_ADMANAGEMENT","Introduction PRO"); 
DEFINE("_TOP","Top"); 
DEFINE("_ADLINK","Ajouter un lien"); 
DEFINE("_REMOTESERVERFILES","Liste issus du serveur distant"); 
DEFINE("_NEWADCOMMENT","Choisissez la catégorie. Vous pouvez également écrire un lien flv qui n'est pas énuméré dans la liste choisie. "); 
DEFINE("_REMOTESERVERADDRESS","Le chemin de votre serveur distant"); 
DEFINE("_AD","Ajouter vidéo"); 
DEFINE("_NEW_AD","Nouveau"); 
DEFINE("_EDIT_AD","Editer"); 
DEFINE("_PARENT","Parent"); 

//0.2.5
DEFINE("_VIDEOURL","Lien");  
DEFINE("_VIDEOEMBEDCODE","Lecteur"); 
DEFINE("_VOTEIT","Voter");
DEFINE("_LOGINTOVOTE","Connectez-vous pour voter");
DEFINE("_GENERALCONFIG","Configuration General"); //comment line 31
DEFINE("_CONFIG","Configuration"); 
DEFINE("_ADSCONFIG","Ajouter");
DEFINE("_EXTRAS","Support");
DEFINE("_WRITEHELP","Ecrivez l'aide");
DEFINE("_SNIPPETS","Extrait HTML");
DEFINE("_WRITEHELPCOMMENT","Si vous voulez employer le système d'aide, vous pouvez éditer votre propre page d'aide.");
DEFINE("_SNIPPETCOMMENT","Si vous voulez employer un extrait pour le code de la vidéo, éditez le ici. ");
DEFINE("_REPORTVIDEOINFORM","Veuillez écrire la raison de votre signalement. Nos modérateurs passeront en revue votre rapport sous peu et agirons en consequence.");
DEFINE("_VIDEOID","Id de la vidéo");
DEFINE("_REPORTEDBY","Signalé par");
DEFINE("_REPORTEDDATE","Date du signalement");
DEFINE("_REPORTCOMMENT","Raison du signalement");
DEFINE("_REPORTREPLY","Réponse ");

//line 115,148,150 changed

//0.2.6 -------------------starts
DEFINE("_VIDEOSINALLCATEGORIES","Vidéos"); 
DEFINE("_VIDEOCAT","Catégories"); 
DEFINE("_SEARCH","Chercher"); 
DEFINE("_DISPLAY","Afficher"); 
DEFINE("_PERMISSIONS","Permissions"); 
DEFINE("_SYSTEM","System"); 
DEFINE("_USERSCREENNAME","Nom à afficher"); 
DEFINE("_USERSCREENNAMECOMMENT","Définnissez le nom à afficher: nom réel ou identifiant de connexions."); 
DEFINE("_USEREMOTESERVERSUPPORT","Utilisez un serveur distant ?"); 
DEFINE("_USEREMOTESERVERSUPPORTINFO","L'activation du serveur distant se fera ici. Ce n'est pas un dispositif encore au point car il n'est qu'en version BETA. Cette option ne sera fonctionnel que dans la version PRO. "); 
DEFINE("_REMOTESERVERADSDIRECTORY","Chemin du serveur distant"); 
DEFINE("_REMOTESERVERADSDIRECTORYINFO","Définissez le serveur distant ici quand cette fonction ne sera plus BETA. Attention, soyez sûr que cette adresse contiens bien l'index.php spécial qu'intègre le composant Seyret. Cette option ne sera fonctionnel que dans la version PRO."); 
DEFINE("_REMOTESERVERVIDEOSDIRECTORY","Chemin des vidéos sur le serveur distant"); 
DEFINE("_REMOTESERVERVIDEOSDIRECTORYINFO","Définissez le chemin de stockage du serveur distant ici. Attention, soyez sûr que cette adresse contiens bien l'index.php spécial qui vient avec le composant Seyret. Uniquement pour le version Pro."); 
DEFINE("_REMOTESERVERCHECKSTRING","Contrôle du serveur distant"); 
DEFINE("_REMOTESERVERCHECKSTRINGINFO","C'est une clef de sécurité qui empêche les listes non autorisée dans votre annuaire. Changez cette clef dans l'index.php du serveur distant aussi. Pour la version PRO"); 
DEFINE("_PLEASESELECT","Séléctionner s.v.p ...");
DEFINE("_SUPERADMINRIGHTS","Droits des supers administrateurs");
DEFINE("_SUPERADMINRIGHTSINFO","Les supers administrateurs ont tous les droits. Il n'y aura aucune restriction pour eux. ");
DEFINE("_RIGHTS","Droits aux accès Seyret");
DEFINE("_CANSEEADMINTOOLBAR","Peu voir la barre d'outils administrateur");
DEFINE("_CANSEEREPORTEDVIDESBUTTON","Peu voir le boutons des vidéos signalés");
DEFINE("_CANSEEPENDINGVIDESBUTTON","Peu voir le bouton des vidéos en attentes");
DEFINE("_CANSEEADDVIDEOSBUTTON","Peu voir le boutons d'ajouts des vidéos");
DEFINE("_CANADDVIDEOS","Peu ajouter des vidéos");
DEFINE("_CANSEEUPLOADVIDEOSBUTTON","Peu voir le bouton d'importations de vidéos");
DEFINE("_CANUPLOADVIDEOS","Peu importer des vidéos");
DEFINE("_CANSEEMYVIDEOSBUTTON","Peu voir le boutons de ses vidéos");
DEFINE("_CANSEEFEATUREDVIDEOSBUTTON","Peu voir le boutons de descriptions des vidéos");
DEFINE("_CANSEESEARCHVIDEOSBUTTON","Peu voir le bouton de recherches de vidéos");
DEFINE("_CANSEEHELPBUTTON","Peu voir help button");
DEFINE("_CANSEEDELETEVIDEOBUTTON","Peu voir delete video button");
DEFINE("_CANDELETEVIDEO","Peu supprimer des vidéos");
DEFINE("_CANSEEEDITVIDEOBUTTON","Peu voir le bouton d'édition des vidéos");
DEFINE("_CANEDITVIDEO","Peu editer les vidéos");
DEFINE("_CANSEEFULLSCREENBUTTON","Peu voir le bouton d'affichage en pleine écran");
DEFINE("_CANSEEDOWNLOADBUTTON","Peu voir le bouton de téléchargement des viséos");
DEFINE("_CANDOWNLOADVIDEO","Peu télécharger des vidéos");
DEFINE("_CANSEEREPORTBUTTON","Peu voir le bouton pour signaler les vidéos");
DEFINE("_CANREPORTVIDEOS","Peu signaler des vidéos videos");
DEFINE("_CANSEEDIRECTLINKBOX","Peu voir le lien direct du lecteur");
DEFINE("_CANSEEEMBEDBOX","Peu voir le code du lecteur");
DEFINE("_CANSEEVOTESTARTS","Peu voir les étoiles des votes");
DEFINE("_CANVOTE","Peu voter");
DEFINE("_CANSEECOMMENTS","Peu voir les commentaires");
DEFINE("_SEYRETACL","Accès aux permissions Seyret ");
DEFINE("_EDIT_SEYRETACL","Editer l'accès aux permissions Seyret ");
DEFINE("_NEW_SEYRETACL","Nouvel accès aux permissions Seyret");
DEFINE("_JACLNAME","Permissions de Joomla");
DEFINE("_ACLCOMMENT","Veuillez faire attention avec le nom des niveaux d'accès par défaut de Joomla. Il est très important d'employer des niveaux inferieures aux votre ici, autrement cela ne fonctionnera pas correctement ! Par exemple, c'est 'Administrator' dans Joomla mais ici vous devriez écrire 'administrator' avec un 'a' minuscule. Vous devez au moins créer un niveau d'accès d''invité pour que le composant fonctionne, c'est a dire 'guest' en Anglais");
DEFINE("_YOUDONTHAVEPERMISSIONS","Vous n'avez pas la permission d'effectuer cette opération, veuillez vous connecter ou vous identifier au préalable !");
DEFINE("_DOWNLOADS","télécharger");
DEFINE("_CANPUBLISHVIDEO","Peu publier des vidéos");
DEFINE("_VIDEOADDEDSUCCESFULLY","Vidéo ajouté avec succès ! ");
DEFINE("_CANSEEVIDEOSERVERDETAILS","Peu voir les détailles des vidéos sur le serveur");
DEFINE("_EDITTHISVIDEO","Editer cette vidéo");
DEFINE("_AD_VIDEO_LIST","Ajout de vidéos en intro avant la vidéo principale");
DEFINE("_REALNAME","Nom réel");

// 0.2.6.9 -------------------starts

DEFINE("_JUMPTO","Aller à la page");
DEFINE("_IMAGEADS","Image ajouté en intro");
DEFINE("_VIDEOADS","Vidéo ajouté en intro");
DEFINE("_GOTODONATIONSPAGETOENABLEPRO","Aller à la page des dons et activer la version pro");
DEFINE("_THISISAPROVERSIONFEATURE","Cette emplacement est reservé à la varsion professionnel");
DEFINE("_NOTPROWANTTOUPGRADE","Amelioration vers la version professionnel");
DEFINE("_ID","ID");
DEFINE("_ATTRIBUTES","Attribut");
DEFINE("_FEATURED","Etat");
DEFINE("_VIDEODOWNLOADOPTION","Option pour le téléchargement");
DEFINE("_PROSTATUS","Statut de la version professionnel");
DEFINE("_SEYRETISNOTPRO","Votre version de Seyret n'est pas encore professionnel");
DEFINE("_UPGRADETOPRO","Choisissez votre montant pour obtenir la version professionnel de Seyret");
DEFINE("_UPGRADETOPROSTEP2","Mise à jour vers la version professionnel étape N°2");
DEFINE("_SEYRETPROISPENDING","Votre version professionnel de Seyret est en attente de validation");
DEFINE("_RESETMYPROSTATUS","Annuler ma version professionnel");
DEFINE("_RESETMYDOWNLOADSTATUS","Annuler mon option de téléchargement");
DEFINE("_MAKEMEPRO","Payer");
DEFINE("_MAKEPROBUTTON","Confirmer le payement");
DEFINE("_DONTDONATEIFYOUWILLMAKEPRO","NE DONNEZ PAS ICI SI VOUS DESIREZ OBTENIR LA VERSION PROFESSIONNEL !");
DEFINE("_VIDEOINFO","Information sur cette vidéo");
DEFINE("_VIDEOCAT_DIR","Chemin de cette catégorie");
DEFINE("_INTEGRATION","Integration");
DEFINE("_COMMENTINGSYSTEM","Choix du composant pour les commentaires");
DEFINE("_FIREBOARD","Fireboard");
DEFINE("_JOMCOMMENT","Jomcomment");
DEFINE("_COMMENTINGSYSTEMINFO","Indiquez ici le composant que vous avez intégré à votre site web pour permettre à vos visiteurs de discuter sur l'ensemble de vos vidéos.");
DEFINE("_FIREBOARDCATEGORYFORDISCUSS","Nombre de catégories que vous autorisez");
DEFINE("_FIREBOARDCATEGORYFORDISCUSSINFO","Indiquez ici le nombre maximal de sujets pour lesquel vous autorisez les discusions pour le composant FIREBOARD");
DEFINE("_LEAVEVIDEOLINK","Montrer le lien des vidéos");
DEFINE("_LEAVEVIDEOLINKINFO","Vous pouvez choisir de cacher ou montrer le lien exacte des vidéos ici");
DEFINE("_IMAGEADDEFAULT","Chemin de l'image par defaut");
DEFINE("_USEIMAGEADSYSTEM","Utiliser l'image par défaut ?");
DEFINE("_IMAGEADDURATION","Affichage en miliseconde");
DEFINE("_USEIMAGEADSYSTEMINFO","Indiquez si vous voulez activer l'image par defaut pour l'introduction de vos vidéos. Cette option n'est fonctionnel que dans la version PRO");
DEFINE("_IMAGEADDEFAULTINFO","indiquez ici le chemin complet ou se trouve votre image par defaut, dans le cas contraire c'est l'image de seyret sur son propre serveur qui sera utilisé");
DEFINE("_IMAGEADDURATIONINFO","Indiquez simplement en miliseconde le temps d'affichage de votre image par defaut");
DEFINE("_USEVIDEOADSYSTEM","Ajouter une vidéo d'intro ?");
DEFINE(" _USEVIDEOADSYSTEMINFO ","Utiliser la fonction d'ajout automatique d'intro du système");
DEFINE("_USEVIDEOADSYSTEMINFO","Choisissez si vous voulez activer les vidéos d'introduction que vous avez défini. Cette option n'est fonctionnel que dans la verions PRO");
DEFINE("_TWOCOLUMNSVIDEOLIST","Affichage principal sur 2 colonnes");
DEFINE("_TWOCOLUMNSVIDEOLISTINFO","Choisissez si vous désirez tout afficher sur 2 colonnes");
DEFINE("_MULTICOLUMNCOUNT","Choisissez le nombre de colonnes pour afficher les vidéos");
DEFINE("_MULTICOLUMNCOUNTINFO","Choisissez le nombre de colonnes désiré pour afficher les vidéos en fronted pour les visiteurs de votre site");
DEFINE("_THUMBWIDTHINLIST","Largeurdes miniatures");
DEFINE("_THUMBWIDTHINLISTO","Largeur de miniatures");
DEFINE("_THUMBWIDTHINLISTINFO","Choisissez la largeurs des miniatures ici");
DEFINE("_SHOWVIDEOTOOLTIPS","Montrer les Tooltip ?");
DEFINE("_SHOWVIDEOTOOLTIPSINFO","Choisissez ici si vous désirez fournir une aide intéractive à vos visiteurs au passage de la souris pour vos vidéos publié");
DEFINE("_SHOWCATEGORYTOOLTIPS","Montrer les Tooltip pour les catégories des vidéos ?");
DEFINE("_SHOWCATEGORYTOOLTIPSINFO","Choisissez ici si vous désirez montrer ou non les catégories des vidéos à vos visiteurs au passage de la souris");
DEFINE("_DISCUSSPOSTHEADER","Forum sur cette vidéo");
DEFINE("_DISCUSSIONONFORUM","Forum de discution sur cette vidéo");
DEFINE("_UNKNOWN","Auteur innconus");
DEFINE("_LOGINTOWRITECOMMENT","Connectez-vous pour en parler sur le forum");
DEFINE("_CLICKHERETODISCUSS","Cliquez ici pour en parler sur le Forum !");
DEFINE("_USSPOSTHEADER","Forum en cours");
DEFINE("_INPUTFBDISCUSSTOPIC","Sujet de la discusion");
DEFINE("_INPUTFBDISCUSSMESSAGE","Message pour le forum ");
DEFINE("_SUBMITCOMMENT","Soumettre");
DEFINE("_TOPICRE","Réponse");

// 0.2.7.4 -------------------starts

DEFINE("_DIAGNOSTICS","Diagnostic");
DEFINE("_TAGS","Tag");
DEFINE("_VIDEOACCESSLEVEL","Niveau d'accès vidéo");
DEFINE("_ISDOWNLOADABLE","Téléchargeable");
DEFINE("_LOCALVIDEO","Vidéo local");
DEFINE("_LOCALVIDEOINFO","Information sur la vidéo");
DEFINE("_VIDEOCAT_FILELIST","Liste des fichier de la catégorie");
DEFINE("_VIDEOCAT_THUMBLIST","Liste des miniatures de cette catégorie");
DEFINE("_VIDEOSERVER","Serveur vidéo");
DEFINE("_VIDEOSERVERINFO","Info sur le serveur de vidéos");
DEFINE("_SERVERCODES","Code serveur");
DEFINE("_SERVERCODESINFO","Info sur les codes du serveur");
DEFINE("_FILESYSTEM","Fichier systeme");
DEFINE("_DIRECTORY","Chemin");
DEFINE("_OWNER","Propriétaire");
DEFINE("_ACCESS","Accès");
DEFINE("_RESULT","Résultat");
DEFINE("_TEHERAREOWNERSHIPPROBLEMS","Ceci sont des problèmes qui incombent aux propriétaires");
DEFINE("_CONNECTION","Connexion");
DEFINE("_ON","Oui");
DEFINE("_SEYRETFUNCSTATUS","Etat des fonctions de Seyret");
DEFINE("_PASSED","Opérationnel");
DEFINE("_CACHE","Cache");
DEFINE("_CLEARVIDEOCACHE","Effacer le cache des vidéos");
DEFINE("_CURLLIB","Bibliothèque");
DEFINE("_ALLOWURLVALUE","Permissions sur les url's");
DEFINE("_CURLLIBINFO","Bibliothèque de Seyret");
DEFINE("_ALLOWURLVALUEINFO","Indique si les url sont disponibles dans Seyret");
DEFINE("_DISABLEPRO","Désactiver la version Pro");
DEFINE("_DISABLEPROINFO","Vous pouvez activer ici la version pro de Seyret à la condition d'avoir payé cette option.");
DEFINE("_SEYRETFUNCSTATUSINFO","Indique les fonctions générales de Seyret");
DEFINE("_ACCESSLEVELCOUNT","Niveau d'accés");
DEFINE("_INSTALLED","Installé");
DEFINE("_USEAJAXBROWSING","Utiliser le navigateur AJAX");
DEFINE("_USEAJAXBROWSINGINFO","Utilise la téchnologie Ajax pour naviguer dans les vidéos");
DEFINE("_ACCESSLEVELCOUNTD","Niveau d'accès");
DEFINE("_ACCESSLEVELCOUNTINFO","Indiquez le niveau d'accés pour accéder aux vidéos");
DEFINE("_UPGRADEACCESSLEVELLINK","Lien pour les mises à jours");
DEFINE("_UPGRADEACCESSLEVELLINKINFO","Chemin du lien permanent qui indique les mises à jour du composant Seyret");
DEFINE("_LOCALFILESDIRECTORY","Chemin pour les vidéos en local");
DEFINE("_LOCALFILESDIRECTORYINFO","Indiquez le chemin par défaut pour stoquer les vidéos que vous téléchargez en local sur votre propre serveur");
DEFINE("_LOCALADSDIRECTORY","Chemin pour les vidéos locales ajoutés");
DEFINE("_LOCALADSDIRECTORYINFO","Indiquez ici le chemin exact ou seront stockés les vidéos pour vos introductions, cette fonction est exclusivement resérvé à la version PRO");
DEFINE("_GOOGLECONNECTCHECK","Connexion serveur Google");
DEFINE("_GOOGLECONNECTCHECKINFO","Indique si la connexion au serveur de vidéos de Google à réussi, notez que vos vidéos peuvent être visible depuis Google même si la connexion à échoué mais des erreurs et/ou des conflits d'affichages sont possible parfois");
DEFINE("_FAILED","Echoué");
DEFINE("_CONNECTED","Connecté");
DEFINE("_YOUAREUSINGPRO","Vous utilisez la version profesionnel");
DEFINE("_PROAPPROVED","Approuvé");
DEFINE("_ITISUPTODATE"," La version est à jour");
DEFINE("_AD_IMAGE_LIST","Ajout d'images en intro avant la vidéo principale");
DEFINE("_IMAGEAD","Ajouter une image pour l'intro de vos vidéos");
DEFINE("_CLICKLINK","Lien du click");
DEFINE("_NEWIMAGEADCOMMENT","Commentaire sur la nouvelle image");
DEFINE("_GOTODONATIONSPAGE","Allez à la page de donnation");
DEFINE("_NEEDTOUPDATE","Il est nécessaire de mettre à jour");
DEFINE("_YOUCANRESETIFMISTAKENLY","Annulation de la version professionnel");
DEFINE("_COULDNTCONNECTTRYLATER","Ne peut pas se connecter au serveur, essayez simplement plus tard");
DEFINE("_UPDATEPROPHP"," Faire la mise à jour vers la version professionnel des fichier *.PHP");
DEFINE("_CATEGORYDIRECTORYWILLBEGENERATED","Chemin de la catégorie à générer");
// information avec l'effet Ajax en Fronted pour les catégories principales.
DEFINE("_CATEGORYINFO","INFORMATIONS GENERALES");
DEFINE("_CATEGORYNAME","Catégorie ");
DEFINE("_SUBCATEGORIES","Sous-catégories");
DEFINE("_VIDEOSINCAT","Nombre de vidéos");

//Ajouté le 11.01.2008 par Félix Dr. Dimitric (Merci à Kcin pour le rapport de BUG)

DEFINE("_VIDEOINPLAYLIST","Vidéos dans la playlist");

//Mise à jour et correctif par FELIX 11.02.2008 découvert en se basant sur le Fichier Anglais d'origine

DEFINE("_REMOTESERVERSUPPORTISNOTENABLED","L'appui de serveur à distance n'est pas permis. Veuillez le permettre du panneau de configuration.");
DEFINE("_FILESYSTEM","Systeme de fichier"); 
DEFINE("_TEHERAREOWNERSHIPPROBLEMS","Il y a des problèmes d'autorisations et d'accès sur des dossiers de votre système. Vous pouvez rencontrer quelques problèmes pour télécharger des vidéos. Si des erreurs se produisent, essayez de donner 0777 comme droits sur les dossiers en questions (CHMOD). Si vous n'avez aucun problème, nous proposerions de limiter les droits à 0755 par sécurité");  
DEFINE("_THEREAREMISSINGFILES","Il y a quelques dossiers absents dans l'arborecence d'annuaire des fichiers de Seyret. En raison des problèmes d'accès de dossier, ils ne sont pas créés automatiquement. Vous rencontrerez plusieurs problèmes avec Seyret dans ce cas. Essayez la couche de ftp ci-dessous pour résoudre ce problème.");  
DEFINE("_MISSING","MANQUER");
DEFINE("_FTPSERVER","Serveur FTP ");
DEFINE("_FTPUSERNAME","Nom d'utilisateur FTP");
DEFINE("_FTPPASSWORD","Mot de passe FTP");
DEFINE("_JOOMLAROOT","Joomla Root (Racine de votre site)");
DEFINE("_TRYFTP","Essais FTP");
DEFINE("_NEEDFTP_LAYER","Détail du compte FTP");
DEFINE("_FTPSERVERINFO","Entrez l'adresse pour ce serveur FTP dans cette emplacement. Comme ftp.exemple.com");
DEFINE("_FTPUSERNAMEINFO","Enter votre nom d'utilisateur FTP");
DEFINE("_FTPPASSWORDINFO","Entrer votre mot de passe FTP");
DEFINE("_JOOMLAROOTINFO","Chemin principal de votre installation de Joomla. Faites attention avec cette valeur. Ce n'est pas entièrement - le chemin qualifié à votre répertoire local. Il est relatif à votre adresse ftp. Peut-être comme /www ou /httpdocs");
DEFINE("_THEREARENOPROBLEMS","Il n'y a aucun problème avec le système de fichiers de Seyret sur votre emplacement.");
DEFINE("_RSSCHANNELTITLEPRE","Dernière vidéo dans");
DEFINE("_RSSCHANNELTITLEPOST","Categorie");

//Version 0.2.7.7 - Ajouté le 11.21.2008 par Félix Dr. Dimitric
DEFINE("_SEYRETMENU","Paramétres généraux");
DEFINE("_NORIGHTS","Vous ne semblent pas disposer de suffisamment de droits pour accéder à cette fonctionnalité. <br/> S’il vous plaît, contactez votre administrateur système ou webmaster.");
DEFINE("_CONVERSION","Conversion");
DEFINE("_FFMPEGPATH","Chemin FFMPEG");
DEFINE("_FFMPEGPATHINFO","Entrez le chemin pour le ffmpeg. ");
DEFINE("_VIDEOCONVERSION","FLV Conversion");
DEFINE("_ENABLEFLVCONVERSION","Autoriser la Conversion FLV ");
DEFINE("_ENABLEFLVCONVERSIONINFO","Cette option est disponible seulement avec Seyret PRO. Si vous rencontrez des problèmes avec la conversion flv ou si vous n'avez pas un serveur puissant, vous pouvez désactiver la conversion flv.");
DEFINE("_ENABLEAUTOMATICTHUMBNAILEXTRACTION","Autoriser l'extraction des miniatures");
DEFINE("_ENABLEAUTOMATICTHUMBNAILEXTRACTIONINFO","Cette option n'est disponible qu'avec Seyret PRO. Si vous rencontrez des problèmes avec l'extraction des vignettes, vous pouvez le désactiver ici.");
DEFINE("_INSTANTVIDEOPROCESS","Proccesus de conversion immédiates");
DEFINE("_INSTANTVIDEOPROCESSINFO","Si vous sélectionnez Oui, les vidéos transférées seront traitées tout de suite après l'upload. Si vous sélectionnez Non, ils ne seront pas traité dans le processus. Les vidéos transférées seront sauvegardées et seront ajoutés à la file d'attente de conversion. l'administrateur va alors les convertirs.");
DEFINE("_INSTANTTHUMBPROCESS","Extraction automatiques des vignettes");
DEFINE("_INSTANTTHUMBPROCESSINFO","Si vous sélectionnez Oui, les vignettes de vos vidéos transférées seront extraites instantanément. Nous conseillons cette fonctionnalité, afin que vos utilisateurs soit en mesure de choisir leur vignette pour leur vidéo.");
DEFINE("_VIDEODIMENSIONS","Dimensions FLV");
DEFINE("_VIDEODIMENSIONSINFO","Définissez les dimensions de votre flv ici. N'oubliez pas que les plus grandes dimensions entraîneront une grande taille de fichier. Donc, essayer de définir la taille optimale pour vos besoins et votre serveur.");
DEFINE("_AUDIOBITRATE","Débit du bitrate audio ");
DEFINE("_AUDIOBITRATEINFO","Préciser le débit audio pour généré le fichier flv. La valeur par défaut est de 64");
DEFINE("_AUDIOSAMPLINGFREQUENCY","Frequence de l'extrait audio");
DEFINE("_AUDIOSAMPLINGFREQUENCYINFO","Préciser la fréquence d'échantillonnage audio généré flv. La valeur par défaut est 44100.");
DEFINE("_VIDEOFRAMERATE","Image video par secondes");
DEFINE("_VIDEOFRAMERATEINFO","Choisissez le nombre d'images par secondes. Par défaut c'est 25");
DEFINE("_VIDEOBITRATE","Video Bitrate");
DEFINE("_VIDEOBITRATEINFO","Choisissez le débit de la video. Par defaut c'est 200");
DEFINE("_THUMBNAILEXRACTION","Extraction des miniatures");
DEFINE("_THUMBNAILDIMENSIONS","Dimensions des miniatures");
DEFINE("_THUMBNAILDIMENSIONSINFO","Dimensions des miniatures ici.");
DEFINE("_THUMBNAILDIMENSIONSBIG","Dimensions des grandes miniatures ici");
DEFINE("_THUMBNAILDIMENSIONSBIGINFO","Il y aura une grande vignette extraite. Celui-ci sera utilisé pour l'aperçu de l'image dans le lecteur flash.");
DEFINE("_SCREENSHOTSECOND","Obtenir l'image sur la seconde");
DEFINE("_SCREENSHOTSECONDINFO","Définissez la durée d'affichage par défaut pour extraire les images miniatures. Sur certaines vidéos à l'aide de l'horloge 00:00:00 cela entraînera une image noire, donc par défaut c'est 00:00:05");
DEFINE("_UNPROCESSEDFILEINFO","Il y a un non envoi de la vidéo sur votre compte. Si vous souhaitez la partager, vous devez remplir correctement le processus de publication. Si vous ne vous présentez pas, votre vidéo sera supprimé après un certain délai.");
DEFINE("_UPLOADEDFILENAME","Nom de fichier");
DEFINE("_UPLOADEDDATE","Date de l'envois");
DEFINE("_SELECTVIDEOSTOUPLOAD","Selectionner les Videos");
DEFINE("_SELECTVIDEOSTOUPLOADINFO","Sélectionnez les vidéos que vous voulez charger. Une fois que vous avez choisi, elles seronts ajoutés à la file d'envoi.");
DEFINE("_SELECTTHUMBSTOUPLOAD","Selectionner une miniature");
DEFINE("_SELECTTHUMBSTOUPLOADINFO","Vous pouvez envoyer un aperçu de votre vidéo. Essayez d'uploader une vignette qui représente votre vidéo.");
DEFINE("_BROWSEFILES","Parcourir vos fichiers");
DEFINE("_UPLOADINGFILE","Importation");
DEFINE("_UPLOADCOMPLETE","Términé !");
DEFINE("_REMOVEFROMQUEUE","Supprimer de la liste");
DEFINE("_VIDEOFILES","Fichier vidéo");
DEFINE("_MAXFILESIZEEXCEEDS","Ce fichier depasse la taile maximum autorisé.");
DEFINE("_MAXIMUM","Max");
DEFINE("_UPLOADQUEUE","File d'attente");
DEFINE("_UPLOADQUEUEINFO","Vérifier les fichiers sélectionnés avant de commencer le transfert.");
DEFINE("_STARTUPLOAD","Commencer le transfert");
DEFINE("_INPROCESSPLEASEWAIT","Merci de patienter, le résultat du transfert est en cours de contrôle");
DEFINE("_TERMSOFUSEINFO","S’il vous plaît lisez attentivement les conditions d'utilisation.");
DEFINE("_TERMSOFUSE","TERMS DU SERVICE");
DEFINE("_ACCEPTTERMSOFUSE","J'ai lu les conditions d'utilisation et les accepte toutes.");
DEFINE("_DENYTERMSOFUSE","Je n'accepte pas les conditions d'utilisation. Je tiens à le désinstaller.");
DEFINE("_DENYCONFIRMINFO","Si vous n'acceptez pas les conditions d'utilisation, vous devez désinstaller complètement Seyret. <br> Si vous choisissez de désinstaller ici, toutes les tables de base de données seront supprimées.");
DEFINE("_DENYCONFIRM","CONFIRMATION");
DEFINE("_ILLREADTERMSAGAIN","Je veux lire les conditions d'utilisation.");
DEFINE("_ILLUNINSTALL","Je suis sûr, je veux désinstaller complètement.");
DEFINE("_NOCOMMENT","Sans commentaires");
DEFINE("_CANSEEEDITVIDEOBUTTON","Peut voir le bouton pour éditer pour toutes les vidéos");
DEFINE("_CANEDITANYVIDEO","Peuvent modifier toutes les vidéos");
DEFINE("_CANEDITOWNVIDEO","Peuvent modifier une seul vidéo");
DEFINE("_CANDELETEANYVIDEO","Peuvent supprimer toutes les vidéos");
DEFINE("_CANDELETEOWNVIDEO","Peuvent supprimer une vidéo");
DEFINE("_USEJOOMLAEDITOR","Utiliser l'editeur de Joomla");
DEFINE("_USEJOOMLAEDITORINFO","Si vous choisissez oui, le processus l'éditions des vidéos se fera avec l'éditeur joomla pour les détails de la vidéo. Certains éditeurs peuvent alors causer des problèmes de sécurités.");
DEFINE("_RSSCHANNELTITLEALLCATEGORIES","Dernières vidéos dans toutes les catégories.");
DEFINE("_RSSCHANNELTITLEHIGHESTRATEDPRE","Vidéo la mieux notée dans");
DEFINE("_RSSCHANNELTITLEHIGHESTRATEDPOST","Categorie");
DEFINE("_RSSCHANNELTITLEALLCATEGORIESHIGHESTRATED","Vidéos la mieux notée dans toutes les catégories");
DEFINE("_RSSVIDEOSCATDESCPRE","Ce flux contient les vidéos de");
DEFINE("_RSSVIDEOSCATDESCPOST","site");
DEFINE("_GENERATERSSFEEDINFO","S’il vous plaît sélectionnez le type des options du flux ci-dessous. Le lien sera mis à jour automatiquement lorsque vous modifiez les options.");
DEFINE("_ALLCATEGORIES","Toutes les categories");
DEFINE("_VIDEOUPLOADISSUCCESS","Votre fichier à été mis à jour avec succès.");
DEFINE("_VIDEOCONVERTSUCCESS","Votre vidéo à été traité avec succès.");
DEFINE("_VIDEOCONVERTPOSTPONED","Votre vidéo sera bientôt transformé par l'administrateur.");
DEFINE("_VIDEOCONVERTNOTSET","La conversion de vidéo n'est pas configuré sur ce serveur.");
DEFINE("_UPLOADCONTROL","Vérification du transfert");
DEFINE("_CONVERSIONCHECK","Conversion de vidéo");
DEFINE("_THUMBNAILCHECK","Extraction de miniatures");
DEFINE("_GETTINGINPUTFORM","Obtenir le formulaire de saisie");
DEFINE("_PLEASEFILLTHEDETAILSBELOW","S’il vous plaît entrer les renseignements suivants au sujet de votre vidéo.");
DEFINE("_THUMBNAILSEXTRACTED","Les vignettes sont générées.");
DEFINE("_THUMBNAILSEXTRACTIONBYADMIN","Les vignettes sont générées.");
DEFINE("_NOTHUMBNAILSEXTRACT","Les vignettes ne seront pas générés par le système.");
DEFINE("_DONTEXTRACT","Ne peut pas extraire ");
DEFINE("_PLEASESELECTTHUMBNAIL","S’il vous plaît sélectionnez un aperçu pour votre vidéo");
DEFINE("_SIZEEXCEEDSERVERCONF","Échec de l'envoi. Votre vidéo est de taille supérieure à la configuration du serveur qui limite la taille maximum.");
DEFINE("_SIZEEXCEEDCOMPONENTCONF","Échec de l'envoi. Votre vidéo de configuration du composant dépasse la taille maximale autorisé.");
DEFINE("_PARTIALUPLOADERROR","La vidéo n'a été que partiellement téléchargé. Essayez à nouveau s’il vous plaît.");
DEFINE("_UNSUPPORTEDFILETYPE","Type de fichier non supporté.");
DEFINE("_THEFILEISBIGGERPOSTMAXSIZE","Votre fichier est plus grand que ce que le serveur peu supporter.");
DEFINE("_NOTUPLOADEDERROR","Le fichier vidéo n'est pas transféré. S’il vous plaît essayer à nouveau.");
DEFINE("_SEYRETDATE","Date");
DEFINE("_PROUPDATEERROR","Les définitions PRO n'ont pas put être mis à jour. Probablement que vous avez un problème avec les permissions d'écriture.");
DEFINE("_FORMOREINFORMATIONABOUTPRO","Vous pouvez trouver quelques informations sur la version pro sur notre wiki. S’il vous plaît, cliquez ici.");
DEFINE("_COULDNTCONNECTTRYLATER","Nous n'avons pas pu nous connecter au serveur Joomlaholic pour vérifier votre statut pour le composant Seyret. S’il vous plaît réessayer ultérieurement."); 
DEFINE("_VIDEOLINK","Lien vidéo"); 
DEFINE("_SHOWORIGINALVIDEOLINK","Montrer le lien de la vidéo originel"); 
DEFINE("_SHOWORIGINALVIDEOLINKINFO","Sélectionnez Oui pour afficher un lien vers l'emplacement d'origine de la vidéo sous le lecteur intégré."); 
DEFINE("_ORIGINALVIDEOISHERE","Voir la vidéo dans son context original"); 
DEFINE("_FFMPEGPREEXEC","S'exécuter avant ffmpeg"); 
DEFINE("_FFMPEGPREEXECINFO","Si vous êtes sur un hébergement mutualisé et que vous avez compilé ffmpeg vous-même, vous devrez peut-être exécuter certaines définitions de l'environnement pour inclure les bibliothèques. Si ffmpeg est installé par votre société d'hébergement, laissez cette valeur vide."); 
DEFINE("_CACHEDIRISMISSINGPLEASECREATE","La suite de dossiers caches ne peuvent pas être créé par le système. S’il vous plaît créer manuellement et de façon appropriée les permissions de lecture / écriture."); 
DEFINE("_ERRORREPORTING","Rapport d'erreurs");
DEFINE("_ERRORREPORTINGINFO","Vous pouvez définir la politique de votre système de signalisation des erreurs ici.");
DEFINE("_NOERRORREPORT","Ne pas signaler toute les erreurs");
DEFINE("_SHOWERRORSEXCEPTNOTICES","Afficher toutes les erreurs, sauf les notices");
DEFINE("_SHOWERRORSINCLUDINGNOTICES","Afficher toutes les erreurs y compris les notices");
DEFINE("_PLAYTIME","Durée");
DEFINE("_SECONDS","Secondes");

//Traduction Française de la version Seyret 0.2.7.8 à partir d'ici par Félix Dr. Dimitric

DEFINE("_STARTBATCHCONVERSION","Commencez la conversion par lots");
DEFINE("_BATCHCONVERSIONINFO","Vous pouvez convertir toutes les vidéos non-flv en flv et extraire des miniatures. Veuillez choisir les options de conversion ici.");
DEFINE("_DONTEXTRACTTHUMBNAIL","Ne pas extraire de miniatures des vidéos.");
DEFINE("_EXTRACTALLTHUMBNAILS","Extraire tous les miniatures pour des vidéos non-flv.");
DEFINE("_EXTRACTONLYMISSINGTHUMBNAILS","Extraire les miniatures pour des vidéos non-flv si les miniatures sont absentes.");
DEFINE("_DONTCONERTTOFLV","Ne convertissez pas en flv si vous voulez seulement extraire des miniatures, vérifiez ceci.");
DEFINE("_FORCEREENCODEOLDFLV","Forcez les vidéos téléchargées à être réencodé en flv avec vos réglages.");
DEFINE("_DELETEORIGINALFILE","Supprimez la vidéo originale non-flv du serveur après conversion.");
DEFINE("_DEFAULTTIMETOSNAPSHOT","Temps par défaut pour prendre une capture d'image de la vidéo en secondes.");
DEFINE("_CONVERSIONVIDEOCOUNT","Calcul du nobre de conversion pour cette fois");
DEFINE("_UPLOADCOMPLETE","Merci de patienter un instant !");
DEFINE("_RIGHTCLICKANDSAVE","Clic droit pour sauver ...");
DEFINE("_FIREBOARDCONFIGERROR","Il y a une erreur avec votre installation de Fireboard. Le fichier de configuration de Fireboard ne peut pas être trouvé. Veuillez vérifier votre installation de Fireboard.");
DEFINE("_FFMPEGNOTFOUND","Erreur : Outil de convertisseur non trouvé. Veuillez contacter l'administrateur.");
DEFINE("_MENCODERNOTFOUND","Erreur : Outil de convertisseur non trouvé. Veuillez contacter l'administrateur.");
DEFINE("_INPUTFILENOTFOUND","Erreur : Dossier d'entrée non trouvé. Veuillez contacter l'administrateur.");
DEFINE("_APPLIEDVIDEOLINK","Lien de la vidéo");
DEFINE("_TAGLIST","Tags");
DEFINE("_VIDEODESCRIPTION","Description");
DEFINE("_CATEGORYLISTSELECT","Category");
DEFINE("_SERVERTYPE","Type de serveur");
DEFINE("_SERVERCODE","Code serveur");
DEFINE("_THUMBNAIL","Miniature");
DEFINE("_ADDEDDATE2","Ajouté");
DEFINE("_PUBLISHSELECT","Status de publication");
DEFINE("_SUBMITDETAILSCLICK","Details");
DEFINE("_FEATUREDVIDEOS","Description");
DEFINE("_LATESTVIDEOS","Dernière");
DEFINE("_HIGHESTRATEDVIDEOS","Meilleur notes");
DEFINE("_MOSTDISCUSSEDVIDEOS","Plus commentées");
DEFINE("_MOSTVIEWEDVIDEOS","Plus regardés");
DEFINE("_INCATEGORY","Catégorie");
DEFINE("_INCHANNEL","Chaine");
DEFINE("_DISPLAYSTYLE","Afficher");
DEFINE("_CATIDS","ID de catégories");
DEFINE("_SEARCHVIDEOS","Chercher des vidéos"); 
DEFINE("_SMALLSTATISTICSPRE","Total "); 
DEFINE("_SMALLSTATISTICSPOST"," vidéos");  
DEFINE("_VIDEOSINCATEGORYPRE","Vidéos dans");  
DEFINE("_VIDEOSINCATEGORYPOST","catégorie");   
DEFINE("_GUEST","Invité");
DEFINE("_JOINED","Joindre");
DEFINE("_OWNEDVIDEOSCOUNT"," Vidéos");
DEFINE("_THISVIDEOINFORMATION","Cette Vidéo");
DEFINE("_THISVIDEOINFORMATIONMORE","Autres informations");
DEFINE("_SUBSCRIBETHISCHANNEL","Souscrire à cette chaine");
DEFINE("_DIRECTURL","URL");
DEFINE("_EMBED","Partager");
DEFINE("_REPORTBTN","Signaler");
DEFINE("_DELETEBTN","Supprimer");
DEFINE("_EDITBTN","Editer");
DEFINE("_REFRESHBTN","Rafraichir");
DEFINE("_VIDEOINPLAYLIST","Videos:");
DEFINE("_CATEGORIESQUICKLIST","Liste rapide");
DEFINE("_READMORE","Plus d'informations");
DEFINE("_DOWNLOADBTN","Télécharger");
DEFINE("_FULLSCREENBTN","Plein écran");
DEFINE("_ABOUTTHISVIDEO","Information sur cette vidéo");
DEFINE("_LESS","Moins d'informations");

DEFINE("_REPLYBTN","Reply");

DEFINE("_ADDFROMANOTHERSERVER","Ajouter depuis un autre serveur");
DEFINE("_UPLOADFROMMYCOMPUTER","Mise à jour depuis mon ordinateur");
DEFINE("_YOUAREADDINGAREPLYTO","Vous ajoutez une vidéo en réponse de");
DEFINE("_NOTAREPLY","Pas de réponse");
DEFINE("_ISAREPLYTO","Réponse de");
DEFINE("_THISISAREPLYTOPRE","Cette vidéo est une réponse à");
DEFINE("_THISISAREPLYTOPOST","");

DEFINE("_SEYRETPLUGINS","Mise à jour Plugin");

// News : by Félix Dr. Dimitric Seyret version 2.8.0 le 25/06/2008

DEFINE("_FORCELAMESUPPORT","Support du compresseur LAME");
DEFINE("_FORCELAMESUPPORTINFO","Vous pouvez désactiver le support pour la conversion LAME. Cette démarche permettra de déterminer vos problèmes de conversion vidéo. Information : LAME est une librairie (DLL) permettant de produire et de manipuler des fichiers MP3. Certains logiciels nécessitent d'installer cette librairie pour pouvoir gérer le format MP3.");
DEFINE("_DONATEFORPROMETHOD1","<b>METHODE 1 :</ b> Vous pouvez obtenir Seyret pro en faisant un don via Paypal. Cliquez sur un des logos Paypal avec votre don et aller directement à la page Paypal don. Dans la page Paypal, votre nom d'utilisateur Joomlaholic sera inclus.");
DEFINE("_DONATEFORPROMETHOD2","<b>METHODE 2 :</b> Si vous avez un coupon Seyret pro, vous pouvez l'utiliser pour mettre à niveau votre version de Seyret.");
DEFINE("_COUPONMETHOD","Utilisez le coupon Seyret Pro");
DEFINE("_PAYVIAPAYPAL","Donnez via Paypal");
DEFINE("_WANTTOUSECOUPON","Je veux utilisez le coupon Seyret Pro");
DEFINE("_SUBMITCOUPON","Soumettre mon Coupon");
DEFINE("_MOVEPRO","Basculer vers la License Seyret Professionnel");
DEFINE("_MOVEPROINFO","Si vous voulez obtenir votre licence pro, s’il vous plaît demandez votre code coupon ici. Après avoir obtenu votre code de coupon utilisez-le vite, vous devriez l'utiliser dans les 6 heures. Utilisez ce code sur votre nouveau site, allez à la page des dons dans la configuration de Seyret.");
DEFINE("_REQUESTCOUPONCODETOMOVE","Demande de code de coupon");
DEFINE("_UPDATEPROPHP","Mise à jour de définitions Pro");
DEFINE("_THISISYOURCOUPONCODE","Il s'agit de votre code coupon. Il est limité dans le temps. Il ne sera valable que dans le prochaines 2 heures. Si vous ne l'utilisez pas dans les 2 heures, s’il vous plaît demandez un nouveau code de coupon. <br/> Vous pouvez utiliser ce code coupon sur un autre site pour déplacer votre licence pro. <br/> Vous pouvez déplacer une licence pour un maximum de trois fois. <br/>");
DEFINE("_SECURITYCODENEEDED","Votre code de sécurité est manquant !");
DEFINE("_SECURITYCODENEEDEDINFO","Il s'agit d'une installation locale. Votre version pro est approuvé, mais en raison de nouvelles sécurité qui on été augmenté, vous devez entrer votre code de sécurité de niveau dite '2' qui a été envoyé à votre adresse e-mail. Jusqu'à ce que vous saisissiez ce code, votre version pro ne sera pas activée. <br> Si vous n'avez pas reçu votre code de la sécurité, s’il vous plaît contactez l'administrateur Joomlaholic avec vos informations de paiement.");
DEFINE("_SECURITYCODENEEDEDENTER","Entrez votre code de sécurité");
DEFINE("_ENTERYOURSECURITYCODE2","Entrez le code de sécurité de niveau '2' ici. ATTENTION ! Ne communiquez jamais votre code de sécurité 2 avec qui que ce soit.");
DEFINE("_SUBMITSC2","Soumettre");

//DEFINE("_CATEGORYINFO","Catégories d'informations");

DEFINE("_CATEGORIESQUICKLIST","Liste rapide");
//-----------------------
DEFINE("_THISTHREADISABOUTPRE","Ce fil est d'environ");
DEFINE("_THISTHREADISABOUTPOST","video.");
DEFINE("_THISVIDEOISADDEDBEFORE","Cette vidéo a été ajoutée avant.");
DEFINE("_MOVELIMIT","Limite de déplacement");
DEFINE("SHOWREPLIES","Réponses vidéos");
DEFINE("_VIDEONOTFOUND","Vidéo non trouvé");
DEFINE("_SEYRETCOMPATIBLEPLUGINS","Mises à jour disponibles. Voici les extensions qui sont compatibles avec votre propre version de Seyret.");


//--------------Flash Dashboard
DEFINE("_PROSTATUSLABEL","Version Pro ");
DEFINE("_JHUSERID","JH id Utilisateur");
DEFINE("_FLAPROAPPROVED","Approuvé");
DEFINE("_FLANOTPRO","Non mis à jour");
DEFINE("_SYSTEMINFOL","INFO SYSTEM ");
DEFINE("_PRODEFINITIONS","Definitions Pro ");
DEFINE("_FLATERMSOFUSE","CONDITIONS D'UTILISATION");
DEFINE("_YOURVERSION","Version installée");
DEFINE("_LATESTVERSION","Ancienne version");
DEFINE("_JH_MESSAGES","JH MESSAGES");
DEFINE("_PRODEFINITIONSUPTODATE","Version à jour");
DEFINE("_PRODEFINITIONSOUTDATED","Version dépassés");
DEFINE("_PRODEFINITIONSNOTPRO","Version standard");
DEFINE("_SECNEEDED","Code de sécurité nécessaires");
DEFINE("_CONNERROR","Erreur de connexion");
DEFINE("_SEYRETTHEME","Theme de Seyret");
DEFINE("_SBUTTONPACK"," Pack Bouton");
DEFINE("_HALLOFFAME","PANTHÉON");
DEFINE("_VERSIONSPONSOR","VERSION SPONSORISE");

//------------ Version : 2.8.1

DEFINE("_VIDEORESPONSESYSTEM","Activer le système de réponse vidéo");
DEFINE("_VIDEORESPONSESYSTEMINFO","Activer le système de réponse vidéo. Cela fonctionne avec la version Pro seulement.");

DEFINE("_PLAYERSKIN","Apparence du lecteur");

DEFINE("_LONGTAILADS","Publicité Longtail");
DEFINE("_LONGTAILENTERCODE","S'il vous plaît copiez le code javascript de votre compte publicitaire Longtail depuis la page d'intégration de vos Videos et collez-le dans la boîte de réception ci-dessous.  ");
DEFINE("_LONGTAILVIDEOTUTORIAL","Pour un didacticiel vidéo, s'il vous plaît, cliquez ici.");
DEFINE("_SUBMITLONGTAILCODE","Envoyer.");
DEFINE("_LONGTAILENTEREDPARAMETERS","Vos paramètres d'enregistrement publicitaires Longtail sont les suivants:");
DEFINE("_LONGTAILNOTENTEREDPARAMETERS","Longtail n'a pas encore été configuré.");
DEFINE("_LONGTAILSOLUTIONCONFIG","Configuration de Longtail ");
DEFINE("_LONGTAILSOLUTIONINFO","Longtail est la première solution pour diffuser de la publicité sur vos vidéos en temps réel. Avec Seyret Pro, vous pouvez facilement grâce à la solution Longtail afficher sur vos vidéos des annonces publicitaires de votre choix et ainsi rentabiliser votre site web très facilement. Inscrivez-vous sur le site web de Longtail, c'est gratuit et commencez à gagner de l'argent immédiatement.");
DEFINE("_FREELONGTAILSIGNUP","Inscription à Longtail - GRATUIT");

//Line 469

//Les lignes suivantes sont pour la version 0.2.8 pas pour la 0.2.7. Ne demandez rien, profitez juste de ce qui existe déjà. Merci.

DEFINE("_VIDEOINPLAYLIST","Vidéos:");

?>