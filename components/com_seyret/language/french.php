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

* @ French Translation by / Traduction Fran�aise par:
* @ version 0.2.1 ====> All/toutes  ===> 2.8.1
* @ Date : 11.01.2008 ===> 07/10/2008
* @ Name / Nom : F�lix Dr. Dimitric
* @ Web site / Site web : http://eliopro.com and htp://eliopro.com/maginot
**/	

DEFINE("_COMPONENT_NAME","Seyret: Syst�me d'affichage de liste de vid�os. ");
DEFINE("_PAGE","Page");
DEFINE("_VIDEOLISTHEADERPRE","Vid�os dans \"");
DEFINE("_VIDEOLISTHEADERSUF","\" cat�gorie");
DEFINE("_HIT","Clics");
DEFINE("_VIDEOTITLE","Titre");
DEFINE("_DETAILS","D�tails");
DEFINE("_RATING","Moyenne");
DEFINE("_NUMBEROFVOTE","Votes");
DEFINE("_NOVOTE","Pas de Vote");
DEFINE("_LOGINFORVOTE","Vous devez vous connecter pour pouvoir voter!");
DEFINE("_THANKSFORVOTE","Merci d'avoir vot�!");
DEFINE("_WAITAMOMENT","Veuillez patienter!");
DEFINE("_TOPLEVEL","La Premi�re");
DEFINE("_VIDEOGROUPTITLE","Cat�gories de Vid�os");
DEFINE("_CATEGORIES","Cat�gories");
DEFINE("_VIDEOS","Vid�os");
DEFINE("_EXPANDALL","Afficher tout");
DEFINE("_CLOSEALL","Fermer tout");
DEFINE("_VIDEO_CATEGORIES","Cat�gories de Vid�o");
DEFINE("_VIDEOCAT_CODE","Code de la Cat�gorie");
DEFINE("_VIDEOCAT_NAME","Nom de la Cat�gorie");
DEFINE("_VIDEOCAT_PARENT","Cat�gorie parent");
DEFINE("_EDIT_CATEGORY","�diter la Cat�gorie");
DEFINE("_NEW_CATEGORY","Nouvelle Cat�gorie");
DEFINE("_NEWVIDEOCATCOMMENT","Ici, vous pouvez cr�er les nouvelles cat�gories de vid�os. N'oubliez pas de s�lectionner une cat�gorie parent s'il s'agit d'une sous-cat�gorie.");
DEFINE("_DEVELOPER","D�veloppeur");
DEFINE("_INFO","Info");
DEFINE("_SEYRETTHANKS","Merci");
DEFINE("_VERSION_INFO","Version");
DEFINE("_COPYRIGHT","Copyright");
DEFINE("_LICENSE","Licence");
DEFINE("_YOUTUBEID","ID YouTube");
DEFINE("_YOUTUBEIDINFO","Ici vous entrez  <b>ID YouTube</b> afin d'utiliser toutes les fonctionnalit�s du composant. Le composant utilise cet ID YouTube afin d'afficher le vid�o. Si vous n'entrez pas d'ID, vous devez entrer toutes les informations manuellement: adresse pour la vignette, code, ect.");
DEFINE("_TITLELENGTH","Longueur du titre");
DEFINE("_TITLELENGTHINFO","Veuillez entrer la longueur du titre qui sera affich� dans la liste des vid�os. Selon votre template, entrer la valeur appropri�e. ");
DEFINE("_DETAILSLENGTH","Longueur pour D�tails");
DEFINE("_DETAILSLENGTHINFO","Veuillez entrer la longueur pour les d�tails qui sera utilis� dans la liste des vid�os. Selon votre template, entrer la valeur appropri�e. ");
DEFINE("_CONFIG_OK","Configuration sauvegard�e!");
DEFINE("_CONFIG_ERR","Erreur: La Configuration n'a pas pu �tre sauvegard�e!");
DEFINE("_VIDEOWIDTH","Largeur du Vid�o");
DEFINE("_VIDEOWIDTHINFO","La largeur du Vid�o sur la page d'accueil. Selon votre template, entrer la valeur appropri�e.");
DEFINE("_VIDEOHEIGHT","Hauteur du Vid�o");
DEFINE("_VIDEOHEIGHTINFO","La hauteur du vid�o en page d'accueil. Selon votre template, entrer la valeur appropri�e.");
DEFINE("_VIDEO_LIST","Liste de Vid�o");
DEFINE("_VTHUMB","Vignette");
DEFINE("_VIDEO","Vid�o");
DEFINE("_EDIT_VIDEO","�diter le Vid�o");
DEFINE("_NEW_VIDEO","Nouveau Vid�o");
DEFINE("_VSERVERTYPE","Type de Serveur");
DEFINE("_VSERVERCODE","Code Serveur");
DEFINE("_NEWVIDEOCOMMENT","La meilleure fa�on d'ajouter un nouveau vid�o c'est d'utiliser le panneau en frontend, connect� en tant qu'administrateur. Vous allez entrer le lien du vid�o et le syst�me va entrer les informations du vid�o automatiquement. Ici vous devez entrer les informations manuellement. <br> Si vous �ditez un vid�o et n'�tes pas certain concernant les informations du vid�o, ne changez pas le type de serveur de vid�o, le code serveur du vid�o et l'adresse de la vignette. Sinon le composant risque de ne plus fonctionner.");
DEFINE("_APPLY","Appliquer");
DEFINE("_SAVE","Sauvegarder");
DEFINE("_INPUTLINK","Le lien du vid�o");

//Version 0.2=============================================================================================

DEFINE("_ISTHISFRESHINSTALL","Les tables de la base de donn�es Seyret ne sont pas disponible.<br><strong>Soyez prudent afin d'�viter la perte de donn�es.</strong><br>");
DEFINE("_IFTHISISFRESHINSTALL","S'IL S'AGIT D'UNE NOUVELLE INSTALLATION");
DEFINE("_IFTHISISUNINSTALL","SI VOUS D�SIREZ D�SINSTALLER LE COMPOSANT");
DEFINE("_THISWILLDROPTABLES","Pour terminer l'installation, cliquer sur \"Seyret Database\".");
DEFINE("_INSTALLATTENTION","<strong>Lors de cette op�ration toutes les donn�es seront remplac�es.</strong>."); 
DEFINE("_FRESHINSTALLSUCCESS","Installation de la base de donn�es de Seyret avec Succ�s.");
DEFINE("_UNINSTALLEXPL","Vous avez d�sinstall� les tables de la base de donn�es de Seyret.<br><br>Maintenant n'oubliez pas de terminer la d�sinstallation via le gestionnaire d'installation de composant de Joomla.");
DEFINE("_JOOMLAALEMMESSAGE","Joomla Alem");
DEFINE("_YOUDONTWANTTRACKING","Vous n'avez pas la permission pour la r�ception des messages rss. Cela signifie que vous ne recevrez pas de nouvelles concernant les futures versions ou les annonces de s�curit� ici. Nous vous conseillons d'ouvrir la r�ception de messages du Panneau de Configuration.");
DEFINE("_VERSIONTRACKINGINFO","<b>Ici vous pouvez s�lectionner si vous d�sirez ouvrir les messages Joomla-alem ou non.<br><br>Si vous s�lectionnez oui, le syst�me vous connectera au serveur de Joomla-alem et g�n�rera un nouvel ID d'utilisateur Joomla-alem automatiquement pour votre site. <br><br>Alors, vous serez capable de voir les messages de Joomla-alem messages dans votre panneau de contr�le et vous serez au courant ainsi des nouvelles versions et des mises � jour de s�curit�.<br><br>�galement votre ID d'utilisateur Joomla-alem sera utilis� pour l'option de t�l�chargement de vid�o.<br><br>Si vous s�lectionnez de ne pas recevoir de messages, le syst�me ne se connectera pas au serveur de Joomla-alem.<b>");
DEFINE("_PLEASESELECTTRACKINGCHOICE","VEUILLEZ S�LECTIONNER");
DEFINE("_THEME","Th�me");
DEFINE("_THEMEINFO","Veuillez s�lectionner le th�me pour le composant Seyret que vous d�sirez utiliser pour votre site.");
DEFINE("_ADDVIDEO","Vid�os Ajout�s");
DEFINE("_PENDINGVID","Vid�os en attente");
DEFINE("_SORTBY","Tri� par");
DEFINE("_NOSERVERFOUNDREPORTIT","D�sol�, mais on ne peut pas trouver de serveur de vid�o appropri� au lien du vid�o. Si vous �tes certain que le lien du vid�o est correct, veuillez contacter l'administrateur du site.");
DEFINE("_ADDEDBY","Ajout� par");
DEFINE("_ADDEDDATE","Date");
DEFINE("_YOUSHOULDLOGINTOADDVIDEO","Vous devez vous connecter afin de pouvoir ajouter des vid�os.");
DEFINE("_ASCENDING","Ascendant");
DEFINE("_DESCENDING","Descendant");
DEFINE("_POPUPVIDEOWIDTH","Largeur de la fen�tre popup du vid�o");
DEFINE("_POPUPVIDEOHEIGHT","Hauteur de la fen�tre popup du vid�o");
DEFINE("_DEFAULTSORTBY","Tri des vid�o par d�faut");
DEFINE("_DEFAULTSORT","Ordre de tri par d�faut");
DEFINE("_POPUPVIDEOWIDTHINFO","D�finir ici la largeur du vid�o dans la fen�tre popup. Les dimensions de la fen�tre vont �tre 100px de plus que les dimensions du vid�o.");
DEFINE("_POPUPVIDEOHEIGHTINFO","D�finir ici la largeur du vid�o dans la fen�tre popup.");
DEFINE("_DEFAULTSORTBYINFO","Veuillez s�lectionner tri par d�faut par crit�re."); 
DEFINE("_DEFAULTSORTINFO","Veuillez s�lectionner le type de tri par d�faut, ascendant ou descendant."); 
DEFINE("_THISAREAISONLYFORREGISTEREDUSERS","Seulement les utilisateurs enregistr�s peuvent transf�rer des vid�os. Veuillez vous connecter ou vous enregistrer.");  
DEFINE("_COPYTHISLINK","Copier le lien");  
DEFINE("_YOURUSERIDRESTORED","Votre ID utilisateur a �t� restaur� avec succ�s!");   
DEFINE("_YOURUSERIDGENERATED","Votre ID utilisateur a �t� g�n�r� avec succ�s!");   
DEFINE("_YOURUSERIDPROBLEM","Il semble qu'un probl�me est survenu avec votre ID utilisateur Joomla-alem. Veuillez contacter l'administrateur de joomla-alem!");  
DEFINE("_YOUDONTHAVEADMINISTRATORRIGHTS","Vous n'avez pas les droits en tant qu'administrateur ou �diteur sur ce site! Si vous avez ces droits et voyez ce message, vous avez peut-�tre un probl�me avec acl. Pour v�rifier les vid�os en attente, vous pouvez �galement vous connecter via l'administration en backend.");  
DEFINE("_IFPUBLISHED","Statut de publication");   
DEFINE("_YES","Oui");   
DEFINE("_NO","Non");   
DEFINE("_ENABLEDOWNLOADS","Activer le transfert");   
DEFINE("_ENABLEDOWNLOADSINFO","Les liens de t�l�chargement sont g�n�r�s sur le serveur de Joomla-alem pour cette version. Pour activer le t�l�chargement de vid�os, il vous suffit de faire un don de 3$ et plus qui serait appr�ci� afin que le projet de lev�e de fonds pour Joomla-Alem. Quand nous aurons atteint $1500 - qui seront utilis� pour acheter un nouvel ordinateur, nous allons imm�diatement sortir une nouvelle version et tous les liens de t�l�chargement seront g�n�r� sur votre propre serveur.<br>Si vous n'avez pas encore fait de don, vous pouvez utiliser le menu de gauche sous Donation. N'oubliez pas de nous informer concernant votre don.");   
DEFINE("_JALEMUSERID","ID Utilisateur Joomla-Alem"); 
DEFINE("_JALEMUSERIDINFO","Votre ID utilisateur Joomla-Alem de votre site. Ceci sera utilis� lors de toutes les op�rations de Joomla-Alem."); 
DEFINE("_DONATIONS","Dons"); 
DEFINE("_DONATIONHEADER","Dons"); 
DEFINE("_YOUHAVENTDONATEDYET","Il semble que vous n'ayez pas encore fait de don.");
DEFINE("_YOUHAVENTDONATEDSTEP1","<b>�tape-1: </b> Cliquer sur le logo de Paypal avec votre montant et aller vers la page Paypal. Sur la page de Paypal, votre ID d'utilisateur Joomla Alem sera inclus.");
DEFINE("_YOUHAVENTDONATEDSTEP2","<b>�tape-2: </b>Apr�s avoir donn�, veuillez entrer le montant et cliquez sur soumettre. <p><b>Cela nous informera de votre don.</b> <p> Apr�s votre envoi. <p>Si votre paiement a �t� v�rifi�, il sera approuv� et vous pourrez t�l�charger automatiquement, sinon votre demande sera rejet�e et l'option de t�l�chargement sera d�sactiv�e."); 
DEFINE("_SUBMIT","Soumettre et activez les t�l�chargements"); 
DEFINE("_INFORMJOOMLAALEM","Informer Joomla Alem concernant le montant du don: "); 
DEFINE("_YOURDONATIONAPPROVED","Votre don a �t� approuv�. Vous avez acc�s � l'option de t�l�chargement maintenant. <p>Merci pour votre don."); 
DEFINE("_YOURDONATIONPENDING","Votre rapport de don est en attente. Vous pouvez activer l'option de t�l�chargement dans votre menu de configuration. <p>Mais si jamais nous n'approuvons pas votre don, l'option t�l�chargement sera d�sactiv�e pour votre site. <p>Merci pour votre don."); 
DEFINE("_YOURDONATIONREJECTED","Votre rapport de don �t� rejet�. <p>Malheureusement, nous ne pouvons pas approuver votre don. <p>Si vous croyez qu'il s'agit d'une erreur, veuillez nous contacter via courriel."); 
DEFINE("_UNINSTALL","D�sinstaller"); 
DEFINE("_CAUTION","Attention"); 
DEFINE("_CAUTIONUNINSTALL2","Cette op�ration va vider les tables de la base de donn�es de Seyret de fa�on d�finitive.<p>Si vous d�sirez proc�der, cliquer l'image ci-dessous."); 
DEFINE("_CAUTIONUNINSTALL3","Cette op�ration va supprimer seulement les tables de la base de donn�es de Seyret. Ensuite, vous devez d�sinstaller le composant Seyret via le gestionnaire d'Installation de Joomla afin de compl�ter la d�sinstallation."); 
DEFINE("_UNINSTALLDATABASESUCCESS","Les tables de la base de donn�es de Seyret ont �t� d�sinstall�es avec succ�s!");
DEFINE("_NOJALEMUSERID","Vous n'avez pas un ID utilisateur Joomla-Alem valide! <p>Vous ne pouvez pas vous connecter � Joomla-alem sans un ID d'utilisateur valide. <p>Il se peut que la r�ception de messages soit d�sactiv�e. Vous pouvez activer la r�ception des messages � partir du panneau de coontr�le.<p> Alors, votre ID d'utilisateur sera g�n�r� automatiquement.");
DEFINE("_MESSAGEFEED","R�ception de messages"); 
DEFINE("_MESSAGEFEEDINFO","Vous pouvez s�lectionner le statut de r�ception de message. Si vous n'avez pas de ID d'utilisateur Joomla-alem, nous vous conseillons d'en obtenir un. Si vous activez la r�ception des messages, vous aurez un ID d'utilisateur automatiquement. M�me si vous d�sactivez l'option, votre ID d'utilisateur ne sera pas supprim�. �galement si vous r�installez Seyret compl�tement, votre ancien ID d'utilisateur sera restaur� � partir du serveur de Joomla-Alem."); 
DEFINE("_ENABLED","Activ�"); 
DEFINE("_DISABLED","D�sactiv�"); 
DEFINE("_VIDEOCOUNTINVLIST","# Vid�o");
DEFINE("_VIDEOCOUNTINVLISTINFO","Le nombre de vid�os dans la liste des vid�os en page d'accueil.");
DEFINE("_DELETEVIDEOCONFIRMMESSAGE","�tes-vous certain? Ce vid�o va �tre supprim� d�finitivement."); 
DEFINE("_DELETETHISVIDEO","Supprimer cette vid�o");
DEFINE("_PUBLISH","Publier");

//that's enough for 0.2. Let's leave something to 0.3 :)

//Traduction Fran�aise de la version v 0.2.1, 0.2.3, 0.2.4, 0.2.5 et V 2.0.6 par F�lix Dr. Dimitric http://eliopro.com :)

//0.2.1 start
DEFINE("_PUBLISHED","Publier");  
DEFINE("_UPLOADVIDEO","Importer une vid�o"); 
DEFINE("_UPLOADVIDEOINFORM","Importer une vid�o depuis votre ordinateur");
DEFINE("_UPLOADANDGOTONEXT","ETAPE SUIVANTE"); 
DEFINE("_UPLOADTHUMBNAILINFORM","Importer une image pour illustrer votre vid�o "); 
DEFINE("_NOTHUMBNAILFORTHISVIDEO","Ne pas t�l�charger d'images pour illustrer cette vid�o."); 
DEFINE("_COPY","Copier");  
DEFINE("_THISISANUPDATEINFO","Il semble que vous essayez d'am�liorer le manuscrit du composant Seyret.
Pendant les mises � jours, ne laissez pas tomber les tables de votre base de donn�es. Seyret nous conseil toujours de faire une protection en sauvegardant r�gulierement votre base de donn�es. ");
DEFINE("_DBVERSION_INFO","Vieille version "); 
DEFINE("_NEWVERSION_INFO","Vous faite une mise � jour"); 
DEFINE("_PROCEEDUPGRADE","Pour proc�der � la mise � jour cliquez juste sur l'image si dessous."); 
DEFINE("_UPGRADEATTENTION","Si vous pensez que quelque chose a mal tourn� apr�s mise � niveau, reconstituez vos tables � partir des dossiers de secours et svp informez-nous. www.joomla-alem.com"); 
DEFINE("_UPGRADESUCCESS","Le composant Seyret est correctement mis � jour !");  
DEFINE("_USERSUPLOADVIDEO","L'utilisateur peu importer des vid�os");  
DEFINE("_USERSUPLOADVIDEOINFO","Merci de d�finir les permissions pour importer des vid�os");  
DEFINE("_VIDEOMAXSIZE","Taille maximum des vid�os");  
DEFINE("_VIDEOMAXSIZEINFO","Taille maximum pour les t�l�chargements de vid�os autoris� en M�ga-Bytes. Cette valeur devrait �tre un nombre entier. En outre attention aux limites de t�l�chargement dans votre fichier php.ini !");  
DEFINE("_THUMBMAXSIZE","Taille maximum de miniatures");  
DEFINE("_THUMBMAXSIZEINFO","Taille maximum pour les t�l�chargements de miniatures autoris� en M�ga-Bytes. Cette valeur devrait �tre un nombre entier. En outre attention aux limites de t�l�chargement dans votre fichier php.ini !");  
DEFINE("_RESIZETHUMBWIDTH","Nouvelle taille des miniatures");
DEFINE("_RESIZETHUMBWIDTHINFO","Cette valeur va d�finir la taille des miniatures des vid�os."); 
DEFINE("_EMBEDBOXWIDTH","Taille du lecteur"); 
DEFINE("_EMBEDBOXWIDTHINFO","Cette valeur d�finit la largeur du lecteur et copient la bo�te de lien."); 
DEFINE("_ADDVIDEOINFO","Entrez ici le lien de la vid�o que vous d�sirez importer d'un autre serveur. Copiez simplement le lien complet qui figure dans la barre d�adresse de votre navigateur ou se trouve votre vid�o. Nous supportons la plupart des serveurs connus.");

//0.2.3. end

//====================================================================================
//0.2.4
DEFINE("_ADMANAGEMENT","Introduction PRO"); 
DEFINE("_TOP","Top"); 
DEFINE("_ADLINK","Ajouter un lien"); 
DEFINE("_REMOTESERVERFILES","Liste issus du serveur distant"); 
DEFINE("_NEWADCOMMENT","Choisissez la cat�gorie. Vous pouvez �galement �crire un lien flv qui n'est pas �num�r� dans la liste choisie. "); 
DEFINE("_REMOTESERVERADDRESS","Le chemin de votre serveur distant"); 
DEFINE("_AD","Ajouter vid�o"); 
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
DEFINE("_WRITEHELPCOMMENT","Si vous voulez employer le syst�me d'aide, vous pouvez �diter votre propre page d'aide.");
DEFINE("_SNIPPETCOMMENT","Si vous voulez employer un extrait pour le code de la vid�o, �ditez le ici. ");
DEFINE("_REPORTVIDEOINFORM","Veuillez �crire la raison de votre signalement. Nos mod�rateurs passeront en revue votre rapport sous peu et agirons en consequence.");
DEFINE("_VIDEOID","Id de la vid�o");
DEFINE("_REPORTEDBY","Signal� par");
DEFINE("_REPORTEDDATE","Date du signalement");
DEFINE("_REPORTCOMMENT","Raison du signalement");
DEFINE("_REPORTREPLY","R�ponse ");

//line 115,148,150 changed

//0.2.6 -------------------starts
DEFINE("_VIDEOSINALLCATEGORIES","Vid�os"); 
DEFINE("_VIDEOCAT","Cat�gories"); 
DEFINE("_SEARCH","Chercher"); 
DEFINE("_DISPLAY","Afficher"); 
DEFINE("_PERMISSIONS","Permissions"); 
DEFINE("_SYSTEM","System"); 
DEFINE("_USERSCREENNAME","Nom � afficher"); 
DEFINE("_USERSCREENNAMECOMMENT","D�finnissez le nom � afficher: nom r�el ou identifiant de connexions."); 
DEFINE("_USEREMOTESERVERSUPPORT","Utilisez un serveur distant ?"); 
DEFINE("_USEREMOTESERVERSUPPORTINFO","L'activation du serveur distant se fera ici. Ce n'est pas un dispositif encore au point car il n'est qu'en version BETA. Cette option ne sera fonctionnel que dans la version PRO. "); 
DEFINE("_REMOTESERVERADSDIRECTORY","Chemin du serveur distant"); 
DEFINE("_REMOTESERVERADSDIRECTORYINFO","D�finissez le serveur distant ici quand cette fonction ne sera plus BETA. Attention, soyez s�r que cette adresse contiens bien l'index.php sp�cial qu'int�gre le composant Seyret. Cette option ne sera fonctionnel que dans la version PRO."); 
DEFINE("_REMOTESERVERVIDEOSDIRECTORY","Chemin des vid�os sur le serveur distant"); 
DEFINE("_REMOTESERVERVIDEOSDIRECTORYINFO","D�finissez le chemin de stockage du serveur distant ici. Attention, soyez s�r que cette adresse contiens bien l'index.php sp�cial qui vient avec le composant Seyret. Uniquement pour le version Pro."); 
DEFINE("_REMOTESERVERCHECKSTRING","Contr�le du serveur distant"); 
DEFINE("_REMOTESERVERCHECKSTRINGINFO","C'est une clef de s�curit� qui emp�che les listes non autoris�e dans votre annuaire. Changez cette clef dans l'index.php du serveur distant aussi. Pour la version PRO"); 
DEFINE("_PLEASESELECT","S�l�ctionner s.v.p ...");
DEFINE("_SUPERADMINRIGHTS","Droits des supers administrateurs");
DEFINE("_SUPERADMINRIGHTSINFO","Les supers administrateurs ont tous les droits. Il n'y aura aucune restriction pour eux. ");
DEFINE("_RIGHTS","Droits aux acc�s Seyret");
DEFINE("_CANSEEADMINTOOLBAR","Peu voir la barre d'outils administrateur");
DEFINE("_CANSEEREPORTEDVIDESBUTTON","Peu voir le boutons des vid�os signal�s");
DEFINE("_CANSEEPENDINGVIDESBUTTON","Peu voir le bouton des vid�os en attentes");
DEFINE("_CANSEEADDVIDEOSBUTTON","Peu voir le boutons d'ajouts des vid�os");
DEFINE("_CANADDVIDEOS","Peu ajouter des vid�os");
DEFINE("_CANSEEUPLOADVIDEOSBUTTON","Peu voir le bouton d'importations de vid�os");
DEFINE("_CANUPLOADVIDEOS","Peu importer des vid�os");
DEFINE("_CANSEEMYVIDEOSBUTTON","Peu voir le boutons de ses vid�os");
DEFINE("_CANSEEFEATUREDVIDEOSBUTTON","Peu voir le boutons de descriptions des vid�os");
DEFINE("_CANSEESEARCHVIDEOSBUTTON","Peu voir le bouton de recherches de vid�os");
DEFINE("_CANSEEHELPBUTTON","Peu voir help button");
DEFINE("_CANSEEDELETEVIDEOBUTTON","Peu voir delete video button");
DEFINE("_CANDELETEVIDEO","Peu supprimer des vid�os");
DEFINE("_CANSEEEDITVIDEOBUTTON","Peu voir le bouton d'�dition des vid�os");
DEFINE("_CANEDITVIDEO","Peu editer les vid�os");
DEFINE("_CANSEEFULLSCREENBUTTON","Peu voir le bouton d'affichage en pleine �cran");
DEFINE("_CANSEEDOWNLOADBUTTON","Peu voir le bouton de t�l�chargement des vis�os");
DEFINE("_CANDOWNLOADVIDEO","Peu t�l�charger des vid�os");
DEFINE("_CANSEEREPORTBUTTON","Peu voir le bouton pour signaler les vid�os");
DEFINE("_CANREPORTVIDEOS","Peu signaler des vid�os videos");
DEFINE("_CANSEEDIRECTLINKBOX","Peu voir le lien direct du lecteur");
DEFINE("_CANSEEEMBEDBOX","Peu voir le code du lecteur");
DEFINE("_CANSEEVOTESTARTS","Peu voir les �toiles des votes");
DEFINE("_CANVOTE","Peu voter");
DEFINE("_CANSEECOMMENTS","Peu voir les commentaires");
DEFINE("_SEYRETACL","Acc�s aux permissions Seyret ");
DEFINE("_EDIT_SEYRETACL","Editer l'acc�s aux permissions Seyret ");
DEFINE("_NEW_SEYRETACL","Nouvel acc�s aux permissions Seyret");
DEFINE("_JACLNAME","Permissions de Joomla");
DEFINE("_ACLCOMMENT","Veuillez faire attention avec le nom des niveaux d'acc�s par d�faut de Joomla. Il est tr�s important d'employer des niveaux inferieures aux votre ici, autrement cela ne fonctionnera pas correctement ! Par exemple, c'est 'Administrator' dans Joomla mais ici vous devriez �crire 'administrator' avec un 'a' minuscule. Vous devez au moins cr�er un niveau d'acc�s d''invit� pour que le composant fonctionne, c'est a dire 'guest' en Anglais");
DEFINE("_YOUDONTHAVEPERMISSIONS","Vous n'avez pas la permission d'effectuer cette op�ration, veuillez vous connecter ou vous identifier au pr�alable !");
DEFINE("_DOWNLOADS","t�l�charger");
DEFINE("_CANPUBLISHVIDEO","Peu publier des vid�os");
DEFINE("_VIDEOADDEDSUCCESFULLY","Vid�o ajout� avec succ�s ! ");
DEFINE("_CANSEEVIDEOSERVERDETAILS","Peu voir les d�tailles des vid�os sur le serveur");
DEFINE("_EDITTHISVIDEO","Editer cette vid�o");
DEFINE("_AD_VIDEO_LIST","Ajout de vid�os en intro avant la vid�o principale");
DEFINE("_REALNAME","Nom r�el");

// 0.2.6.9 -------------------starts

DEFINE("_JUMPTO","Aller � la page");
DEFINE("_IMAGEADS","Image ajout� en intro");
DEFINE("_VIDEOADS","Vid�o ajout� en intro");
DEFINE("_GOTODONATIONSPAGETOENABLEPRO","Aller � la page des dons et activer la version pro");
DEFINE("_THISISAPROVERSIONFEATURE","Cette emplacement est reserv� � la varsion professionnel");
DEFINE("_NOTPROWANTTOUPGRADE","Amelioration vers la version professionnel");
DEFINE("_ID","ID");
DEFINE("_ATTRIBUTES","Attribut");
DEFINE("_FEATURED","Etat");
DEFINE("_VIDEODOWNLOADOPTION","Option pour le t�l�chargement");
DEFINE("_PROSTATUS","Statut de la version professionnel");
DEFINE("_SEYRETISNOTPRO","Votre version de Seyret n'est pas encore professionnel");
DEFINE("_UPGRADETOPRO","Choisissez votre montant pour obtenir la version professionnel de Seyret");
DEFINE("_UPGRADETOPROSTEP2","Mise � jour vers la version professionnel �tape N�2");
DEFINE("_SEYRETPROISPENDING","Votre version professionnel de Seyret est en attente de validation");
DEFINE("_RESETMYPROSTATUS","Annuler ma version professionnel");
DEFINE("_RESETMYDOWNLOADSTATUS","Annuler mon option de t�l�chargement");
DEFINE("_MAKEMEPRO","Payer");
DEFINE("_MAKEPROBUTTON","Confirmer le payement");
DEFINE("_DONTDONATEIFYOUWILLMAKEPRO","NE DONNEZ PAS ICI SI VOUS DESIREZ OBTENIR LA VERSION PROFESSIONNEL !");
DEFINE("_VIDEOINFO","Information sur cette vid�o");
DEFINE("_VIDEOCAT_DIR","Chemin de cette cat�gorie");
DEFINE("_INTEGRATION","Integration");
DEFINE("_COMMENTINGSYSTEM","Choix du composant pour les commentaires");
DEFINE("_FIREBOARD","Fireboard");
DEFINE("_JOMCOMMENT","Jomcomment");
DEFINE("_COMMENTINGSYSTEMINFO","Indiquez ici le composant que vous avez int�gr� � votre site web pour permettre � vos visiteurs de discuter sur l'ensemble de vos vid�os.");
DEFINE("_FIREBOARDCATEGORYFORDISCUSS","Nombre de cat�gories que vous autorisez");
DEFINE("_FIREBOARDCATEGORYFORDISCUSSINFO","Indiquez ici le nombre maximal de sujets pour lesquel vous autorisez les discusions pour le composant FIREBOARD");
DEFINE("_LEAVEVIDEOLINK","Montrer le lien des vid�os");
DEFINE("_LEAVEVIDEOLINKINFO","Vous pouvez choisir de cacher ou montrer le lien exacte des vid�os ici");
DEFINE("_IMAGEADDEFAULT","Chemin de l'image par defaut");
DEFINE("_USEIMAGEADSYSTEM","Utiliser l'image par d�faut ?");
DEFINE("_IMAGEADDURATION","Affichage en miliseconde");
DEFINE("_USEIMAGEADSYSTEMINFO","Indiquez si vous voulez activer l'image par defaut pour l'introduction de vos vid�os. Cette option n'est fonctionnel que dans la version PRO");
DEFINE("_IMAGEADDEFAULTINFO","indiquez ici le chemin complet ou se trouve votre image par defaut, dans le cas contraire c'est l'image de seyret sur son propre serveur qui sera utilis�");
DEFINE("_IMAGEADDURATIONINFO","Indiquez simplement en miliseconde le temps d'affichage de votre image par defaut");
DEFINE("_USEVIDEOADSYSTEM","Ajouter une vid�o d'intro ?");
DEFINE(" _USEVIDEOADSYSTEMINFO ","Utiliser la fonction d'ajout automatique d'intro du syst�me");
DEFINE("_USEVIDEOADSYSTEMINFO","Choisissez si vous voulez activer les vid�os d'introduction que vous avez d�fini. Cette option n'est fonctionnel que dans la verions PRO");
DEFINE("_TWOCOLUMNSVIDEOLIST","Affichage principal sur 2 colonnes");
DEFINE("_TWOCOLUMNSVIDEOLISTINFO","Choisissez si vous d�sirez tout afficher sur 2 colonnes");
DEFINE("_MULTICOLUMNCOUNT","Choisissez le nombre de colonnes pour afficher les vid�os");
DEFINE("_MULTICOLUMNCOUNTINFO","Choisissez le nombre de colonnes d�sir� pour afficher les vid�os en fronted pour les visiteurs de votre site");
DEFINE("_THUMBWIDTHINLIST","Largeurdes miniatures");
DEFINE("_THUMBWIDTHINLISTO","Largeur de miniatures");
DEFINE("_THUMBWIDTHINLISTINFO","Choisissez la largeurs des miniatures ici");
DEFINE("_SHOWVIDEOTOOLTIPS","Montrer les Tooltip ?");
DEFINE("_SHOWVIDEOTOOLTIPSINFO","Choisissez ici si vous d�sirez fournir une aide int�ractive � vos visiteurs au passage de la souris pour vos vid�os publi�");
DEFINE("_SHOWCATEGORYTOOLTIPS","Montrer les Tooltip pour les cat�gories des vid�os ?");
DEFINE("_SHOWCATEGORYTOOLTIPSINFO","Choisissez ici si vous d�sirez montrer ou non les cat�gories des vid�os � vos visiteurs au passage de la souris");
DEFINE("_DISCUSSPOSTHEADER","Forum sur cette vid�o");
DEFINE("_DISCUSSIONONFORUM","Forum de discution sur cette vid�o");
DEFINE("_UNKNOWN","Auteur innconus");
DEFINE("_LOGINTOWRITECOMMENT","Connectez-vous pour en parler sur le forum");
DEFINE("_CLICKHERETODISCUSS","Cliquez ici pour en parler sur le Forum !");
DEFINE("_USSPOSTHEADER","Forum en cours");
DEFINE("_INPUTFBDISCUSSTOPIC","Sujet de la discusion");
DEFINE("_INPUTFBDISCUSSMESSAGE","Message pour le forum ");
DEFINE("_SUBMITCOMMENT","Soumettre");
DEFINE("_TOPICRE","R�ponse");

// 0.2.7.4 -------------------starts

DEFINE("_DIAGNOSTICS","Diagnostic");
DEFINE("_TAGS","Tag");
DEFINE("_VIDEOACCESSLEVEL","Niveau d'acc�s vid�o");
DEFINE("_ISDOWNLOADABLE","T�l�chargeable");
DEFINE("_LOCALVIDEO","Vid�o local");
DEFINE("_LOCALVIDEOINFO","Information sur la vid�o");
DEFINE("_VIDEOCAT_FILELIST","Liste des fichier de la cat�gorie");
DEFINE("_VIDEOCAT_THUMBLIST","Liste des miniatures de cette cat�gorie");
DEFINE("_VIDEOSERVER","Serveur vid�o");
DEFINE("_VIDEOSERVERINFO","Info sur le serveur de vid�os");
DEFINE("_SERVERCODES","Code serveur");
DEFINE("_SERVERCODESINFO","Info sur les codes du serveur");
DEFINE("_FILESYSTEM","Fichier systeme");
DEFINE("_DIRECTORY","Chemin");
DEFINE("_OWNER","Propri�taire");
DEFINE("_ACCESS","Acc�s");
DEFINE("_RESULT","R�sultat");
DEFINE("_TEHERAREOWNERSHIPPROBLEMS","Ceci sont des probl�mes qui incombent aux propri�taires");
DEFINE("_CONNECTION","Connexion");
DEFINE("_ON","Oui");
DEFINE("_SEYRETFUNCSTATUS","Etat des fonctions de Seyret");
DEFINE("_PASSED","Op�rationnel");
DEFINE("_CACHE","Cache");
DEFINE("_CLEARVIDEOCACHE","Effacer le cache des vid�os");
DEFINE("_CURLLIB","Biblioth�que");
DEFINE("_ALLOWURLVALUE","Permissions sur les url's");
DEFINE("_CURLLIBINFO","Biblioth�que de Seyret");
DEFINE("_ALLOWURLVALUEINFO","Indique si les url sont disponibles dans Seyret");
DEFINE("_DISABLEPRO","D�sactiver la version Pro");
DEFINE("_DISABLEPROINFO","Vous pouvez activer ici la version pro de Seyret � la condition d'avoir pay� cette option.");
DEFINE("_SEYRETFUNCSTATUSINFO","Indique les fonctions g�n�rales de Seyret");
DEFINE("_ACCESSLEVELCOUNT","Niveau d'acc�s");
DEFINE("_INSTALLED","Install�");
DEFINE("_USEAJAXBROWSING","Utiliser le navigateur AJAX");
DEFINE("_USEAJAXBROWSINGINFO","Utilise la t�chnologie Ajax pour naviguer dans les vid�os");
DEFINE("_ACCESSLEVELCOUNTD","Niveau d'acc�s");
DEFINE("_ACCESSLEVELCOUNTINFO","Indiquez le niveau d'acc�s pour acc�der aux vid�os");
DEFINE("_UPGRADEACCESSLEVELLINK","Lien pour les mises � jours");
DEFINE("_UPGRADEACCESSLEVELLINKINFO","Chemin du lien permanent qui indique les mises � jour du composant Seyret");
DEFINE("_LOCALFILESDIRECTORY","Chemin pour les vid�os en local");
DEFINE("_LOCALFILESDIRECTORYINFO","Indiquez le chemin par d�faut pour stoquer les vid�os que vous t�l�chargez en local sur votre propre serveur");
DEFINE("_LOCALADSDIRECTORY","Chemin pour les vid�os locales ajout�s");
DEFINE("_LOCALADSDIRECTORYINFO","Indiquez ici le chemin exact ou seront stock�s les vid�os pour vos introductions, cette fonction est exclusivement res�rv� � la version PRO");
DEFINE("_GOOGLECONNECTCHECK","Connexion serveur Google");
DEFINE("_GOOGLECONNECTCHECKINFO","Indique si la connexion au serveur de vid�os de Google � r�ussi, notez que vos vid�os peuvent �tre visible depuis Google m�me si la connexion � �chou� mais des erreurs et/ou des conflits d'affichages sont possible parfois");
DEFINE("_FAILED","Echou�");
DEFINE("_CONNECTED","Connect�");
DEFINE("_YOUAREUSINGPRO","Vous utilisez la version profesionnel");
DEFINE("_PROAPPROVED","Approuv�");
DEFINE("_ITISUPTODATE"," La version est � jour");
DEFINE("_AD_IMAGE_LIST","Ajout d'images en intro avant la vid�o principale");
DEFINE("_IMAGEAD","Ajouter une image pour l'intro de vos vid�os");
DEFINE("_CLICKLINK","Lien du click");
DEFINE("_NEWIMAGEADCOMMENT","Commentaire sur la nouvelle image");
DEFINE("_GOTODONATIONSPAGE","Allez � la page de donnation");
DEFINE("_NEEDTOUPDATE","Il est n�cessaire de mettre � jour");
DEFINE("_YOUCANRESETIFMISTAKENLY","Annulation de la version professionnel");
DEFINE("_COULDNTCONNECTTRYLATER","Ne peut pas se connecter au serveur, essayez simplement plus tard");
DEFINE("_UPDATEPROPHP"," Faire la mise � jour vers la version professionnel des fichier *.PHP");
DEFINE("_CATEGORYDIRECTORYWILLBEGENERATED","Chemin de la cat�gorie � g�n�rer");
// information avec l'effet Ajax en Fronted pour les cat�gories principales.
DEFINE("_CATEGORYINFO","INFORMATIONS GENERALES");
DEFINE("_CATEGORYNAME","Cat�gorie ");
DEFINE("_SUBCATEGORIES","Sous-cat�gories");
DEFINE("_VIDEOSINCAT","Nombre de vid�os");

//Ajout� le 11.01.2008 par F�lix Dr. Dimitric (Merci � Kcin pour le rapport de BUG)

DEFINE("_VIDEOINPLAYLIST","Vid�os dans la playlist");

//Mise � jour et correctif par FELIX 11.02.2008 d�couvert en se basant sur le Fichier Anglais d'origine

DEFINE("_REMOTESERVERSUPPORTISNOTENABLED","L'appui de serveur � distance n'est pas permis. Veuillez le permettre du panneau de configuration.");
DEFINE("_FILESYSTEM","Systeme de fichier"); 
DEFINE("_TEHERAREOWNERSHIPPROBLEMS","Il y a des probl�mes d'autorisations et d'acc�s sur des dossiers de votre syst�me. Vous pouvez rencontrer quelques probl�mes pour t�l�charger des vid�os. Si des erreurs se produisent, essayez de donner 0777 comme droits sur les dossiers en questions (CHMOD). Si vous n'avez aucun probl�me, nous proposerions de limiter les droits � 0755 par s�curit�");  
DEFINE("_THEREAREMISSINGFILES","Il y a quelques dossiers absents dans l'arborecence d'annuaire des fichiers de Seyret. En raison des probl�mes d'acc�s de dossier, ils ne sont pas cr��s automatiquement. Vous rencontrerez plusieurs probl�mes avec Seyret dans ce cas. Essayez la couche de ftp ci-dessous pour r�soudre ce probl�me.");  
DEFINE("_MISSING","MANQUER");
DEFINE("_FTPSERVER","Serveur FTP ");
DEFINE("_FTPUSERNAME","Nom d'utilisateur FTP");
DEFINE("_FTPPASSWORD","Mot de passe FTP");
DEFINE("_JOOMLAROOT","Joomla Root (Racine de votre site)");
DEFINE("_TRYFTP","Essais FTP");
DEFINE("_NEEDFTP_LAYER","D�tail du compte FTP");
DEFINE("_FTPSERVERINFO","Entrez l'adresse pour ce serveur FTP dans cette emplacement. Comme ftp.exemple.com");
DEFINE("_FTPUSERNAMEINFO","Enter votre nom d'utilisateur FTP");
DEFINE("_FTPPASSWORDINFO","Entrer votre mot de passe FTP");
DEFINE("_JOOMLAROOTINFO","Chemin principal de votre installation de Joomla. Faites attention avec cette valeur. Ce n'est pas enti�rement - le chemin qualifi� � votre r�pertoire local. Il est relatif � votre adresse ftp. Peut-�tre comme /www ou /httpdocs");
DEFINE("_THEREARENOPROBLEMS","Il n'y a aucun probl�me avec le syst�me de fichiers de Seyret sur votre emplacement.");
DEFINE("_RSSCHANNELTITLEPRE","Derni�re vid�o dans");
DEFINE("_RSSCHANNELTITLEPOST","Categorie");

//Version 0.2.7.7 - Ajout� le 11.21.2008 par F�lix Dr. Dimitric
DEFINE("_SEYRETMENU","Param�tres g�n�raux");
DEFINE("_NORIGHTS","Vous ne semblent pas disposer de suffisamment de droits pour acc�der � cette fonctionnalit�. <br/> S�il vous pla�t, contactez votre administrateur syst�me ou webmaster.");
DEFINE("_CONVERSION","Conversion");
DEFINE("_FFMPEGPATH","Chemin FFMPEG");
DEFINE("_FFMPEGPATHINFO","Entrez le chemin pour le ffmpeg. ");
DEFINE("_VIDEOCONVERSION","FLV Conversion");
DEFINE("_ENABLEFLVCONVERSION","Autoriser la Conversion FLV ");
DEFINE("_ENABLEFLVCONVERSIONINFO","Cette option est disponible seulement avec Seyret PRO. Si vous rencontrez des probl�mes avec la conversion flv ou si vous n'avez pas un serveur puissant, vous pouvez d�sactiver la conversion flv.");
DEFINE("_ENABLEAUTOMATICTHUMBNAILEXTRACTION","Autoriser l'extraction des miniatures");
DEFINE("_ENABLEAUTOMATICTHUMBNAILEXTRACTIONINFO","Cette option n'est disponible qu'avec Seyret PRO. Si vous rencontrez des probl�mes avec l'extraction des vignettes, vous pouvez le d�sactiver ici.");
DEFINE("_INSTANTVIDEOPROCESS","Proccesus de conversion imm�diates");
DEFINE("_INSTANTVIDEOPROCESSINFO","Si vous s�lectionnez Oui, les vid�os transf�r�es seront trait�es tout de suite apr�s l'upload. Si vous s�lectionnez Non, ils ne seront pas trait� dans le processus. Les vid�os transf�r�es seront sauvegard�es et seront ajout�s � la file d'attente de conversion. l'administrateur va alors les convertirs.");
DEFINE("_INSTANTTHUMBPROCESS","Extraction automatiques des vignettes");
DEFINE("_INSTANTTHUMBPROCESSINFO","Si vous s�lectionnez Oui, les vignettes de vos vid�os transf�r�es seront extraites instantan�ment. Nous conseillons cette fonctionnalit�, afin que vos utilisateurs soit en mesure de choisir leur vignette pour leur vid�o.");
DEFINE("_VIDEODIMENSIONS","Dimensions FLV");
DEFINE("_VIDEODIMENSIONSINFO","D�finissez les dimensions de votre flv ici. N'oubliez pas que les plus grandes dimensions entra�neront une grande taille de fichier. Donc, essayer de d�finir la taille optimale pour vos besoins et votre serveur.");
DEFINE("_AUDIOBITRATE","D�bit du bitrate audio ");
DEFINE("_AUDIOBITRATEINFO","Pr�ciser le d�bit audio pour g�n�r� le fichier flv. La valeur par d�faut est de 64");
DEFINE("_AUDIOSAMPLINGFREQUENCY","Frequence de l'extrait audio");
DEFINE("_AUDIOSAMPLINGFREQUENCYINFO","Pr�ciser la fr�quence d'�chantillonnage audio g�n�r� flv. La valeur par d�faut est 44100.");
DEFINE("_VIDEOFRAMERATE","Image video par secondes");
DEFINE("_VIDEOFRAMERATEINFO","Choisissez le nombre d'images par secondes. Par d�faut c'est 25");
DEFINE("_VIDEOBITRATE","Video Bitrate");
DEFINE("_VIDEOBITRATEINFO","Choisissez le d�bit de la video. Par defaut c'est 200");
DEFINE("_THUMBNAILEXRACTION","Extraction des miniatures");
DEFINE("_THUMBNAILDIMENSIONS","Dimensions des miniatures");
DEFINE("_THUMBNAILDIMENSIONSINFO","Dimensions des miniatures ici.");
DEFINE("_THUMBNAILDIMENSIONSBIG","Dimensions des grandes miniatures ici");
DEFINE("_THUMBNAILDIMENSIONSBIGINFO","Il y aura une grande vignette extraite. Celui-ci sera utilis� pour l'aper�u de l'image dans le lecteur flash.");
DEFINE("_SCREENSHOTSECOND","Obtenir l'image sur la seconde");
DEFINE("_SCREENSHOTSECONDINFO","D�finissez la dur�e d'affichage par d�faut pour extraire les images miniatures. Sur certaines vid�os � l'aide de l'horloge 00:00:00 cela entra�nera une image noire, donc par d�faut c'est 00:00:05");
DEFINE("_UNPROCESSEDFILEINFO","Il y a un non envoi de la vid�o sur votre compte. Si vous souhaitez la partager, vous devez remplir correctement le processus de publication. Si vous ne vous pr�sentez pas, votre vid�o sera supprim� apr�s un certain d�lai.");
DEFINE("_UPLOADEDFILENAME","Nom de fichier");
DEFINE("_UPLOADEDDATE","Date de l'envois");
DEFINE("_SELECTVIDEOSTOUPLOAD","Selectionner les Videos");
DEFINE("_SELECTVIDEOSTOUPLOADINFO","S�lectionnez les vid�os que vous voulez charger. Une fois que vous avez choisi, elles seronts ajout�s � la file d'envoi.");
DEFINE("_SELECTTHUMBSTOUPLOAD","Selectionner une miniature");
DEFINE("_SELECTTHUMBSTOUPLOADINFO","Vous pouvez envoyer un aper�u de votre vid�o. Essayez d'uploader une vignette qui repr�sente votre vid�o.");
DEFINE("_BROWSEFILES","Parcourir vos fichiers");
DEFINE("_UPLOADINGFILE","Importation");
DEFINE("_UPLOADCOMPLETE","T�rmin� !");
DEFINE("_REMOVEFROMQUEUE","Supprimer de la liste");
DEFINE("_VIDEOFILES","Fichier vid�o");
DEFINE("_MAXFILESIZEEXCEEDS","Ce fichier depasse la taile maximum autoris�.");
DEFINE("_MAXIMUM","Max");
DEFINE("_UPLOADQUEUE","File d'attente");
DEFINE("_UPLOADQUEUEINFO","V�rifier les fichiers s�lectionn�s avant de commencer le transfert.");
DEFINE("_STARTUPLOAD","Commencer le transfert");
DEFINE("_INPROCESSPLEASEWAIT","Merci de patienter, le r�sultat du transfert est en cours de contr�le");
DEFINE("_TERMSOFUSEINFO","S�il vous pla�t lisez attentivement les conditions d'utilisation.");
DEFINE("_TERMSOFUSE","TERMS DU SERVICE");
DEFINE("_ACCEPTTERMSOFUSE","J'ai lu les conditions d'utilisation et les accepte toutes.");
DEFINE("_DENYTERMSOFUSE","Je n'accepte pas les conditions d'utilisation. Je tiens � le d�sinstaller.");
DEFINE("_DENYCONFIRMINFO","Si vous n'acceptez pas les conditions d'utilisation, vous devez d�sinstaller compl�tement Seyret. <br> Si vous choisissez de d�sinstaller ici, toutes les tables de base de donn�es seront supprim�es.");
DEFINE("_DENYCONFIRM","CONFIRMATION");
DEFINE("_ILLREADTERMSAGAIN","Je veux lire les conditions d'utilisation.");
DEFINE("_ILLUNINSTALL","Je suis s�r, je veux d�sinstaller compl�tement.");
DEFINE("_NOCOMMENT","Sans commentaires");
DEFINE("_CANSEEEDITVIDEOBUTTON","Peut voir le bouton pour �diter pour toutes les vid�os");
DEFINE("_CANEDITANYVIDEO","Peuvent modifier toutes les vid�os");
DEFINE("_CANEDITOWNVIDEO","Peuvent modifier une seul vid�o");
DEFINE("_CANDELETEANYVIDEO","Peuvent supprimer toutes les vid�os");
DEFINE("_CANDELETEOWNVIDEO","Peuvent supprimer une vid�o");
DEFINE("_USEJOOMLAEDITOR","Utiliser l'editeur de Joomla");
DEFINE("_USEJOOMLAEDITORINFO","Si vous choisissez oui, le processus l'�ditions des vid�os se fera avec l'�diteur joomla pour les d�tails de la vid�o. Certains �diteurs peuvent alors causer des probl�mes de s�curit�s.");
DEFINE("_RSSCHANNELTITLEALLCATEGORIES","Derni�res vid�os dans toutes les cat�gories.");
DEFINE("_RSSCHANNELTITLEHIGHESTRATEDPRE","Vid�o la mieux not�e dans");
DEFINE("_RSSCHANNELTITLEHIGHESTRATEDPOST","Categorie");
DEFINE("_RSSCHANNELTITLEALLCATEGORIESHIGHESTRATED","Vid�os la mieux not�e dans toutes les cat�gories");
DEFINE("_RSSVIDEOSCATDESCPRE","Ce flux contient les vid�os de");
DEFINE("_RSSVIDEOSCATDESCPOST","site");
DEFINE("_GENERATERSSFEEDINFO","S�il vous pla�t s�lectionnez le type des options du flux ci-dessous. Le lien sera mis � jour automatiquement lorsque vous modifiez les options.");
DEFINE("_ALLCATEGORIES","Toutes les categories");
DEFINE("_VIDEOUPLOADISSUCCESS","Votre fichier � �t� mis � jour avec succ�s.");
DEFINE("_VIDEOCONVERTSUCCESS","Votre vid�o � �t� trait� avec succ�s.");
DEFINE("_VIDEOCONVERTPOSTPONED","Votre vid�o sera bient�t transform� par l'administrateur.");
DEFINE("_VIDEOCONVERTNOTSET","La conversion de vid�o n'est pas configur� sur ce serveur.");
DEFINE("_UPLOADCONTROL","V�rification du transfert");
DEFINE("_CONVERSIONCHECK","Conversion de vid�o");
DEFINE("_THUMBNAILCHECK","Extraction de miniatures");
DEFINE("_GETTINGINPUTFORM","Obtenir le formulaire de saisie");
DEFINE("_PLEASEFILLTHEDETAILSBELOW","S�il vous pla�t entrer les renseignements suivants au sujet de votre vid�o.");
DEFINE("_THUMBNAILSEXTRACTED","Les vignettes sont g�n�r�es.");
DEFINE("_THUMBNAILSEXTRACTIONBYADMIN","Les vignettes sont g�n�r�es.");
DEFINE("_NOTHUMBNAILSEXTRACT","Les vignettes ne seront pas g�n�r�s par le syst�me.");
DEFINE("_DONTEXTRACT","Ne peut pas extraire ");
DEFINE("_PLEASESELECTTHUMBNAIL","S�il vous pla�t s�lectionnez un aper�u pour votre vid�o");
DEFINE("_SIZEEXCEEDSERVERCONF","�chec de l'envoi. Votre vid�o est de taille sup�rieure � la configuration du serveur qui limite la taille maximum.");
DEFINE("_SIZEEXCEEDCOMPONENTCONF","�chec de l'envoi. Votre vid�o de configuration du composant d�passe la taille maximale autoris�.");
DEFINE("_PARTIALUPLOADERROR","La vid�o n'a �t� que partiellement t�l�charg�. Essayez � nouveau s�il vous pla�t.");
DEFINE("_UNSUPPORTEDFILETYPE","Type de fichier non support�.");
DEFINE("_THEFILEISBIGGERPOSTMAXSIZE","Votre fichier est plus grand que ce que le serveur peu supporter.");
DEFINE("_NOTUPLOADEDERROR","Le fichier vid�o n'est pas transf�r�. S�il vous pla�t essayer � nouveau.");
DEFINE("_SEYRETDATE","Date");
DEFINE("_PROUPDATEERROR","Les d�finitions PRO n'ont pas put �tre mis � jour. Probablement que vous avez un probl�me avec les permissions d'�criture.");
DEFINE("_FORMOREINFORMATIONABOUTPRO","Vous pouvez trouver quelques informations sur la version pro sur notre wiki. S�il vous pla�t, cliquez ici.");
DEFINE("_COULDNTCONNECTTRYLATER","Nous n'avons pas pu nous connecter au serveur Joomlaholic pour v�rifier votre statut pour le composant Seyret. S�il vous pla�t r�essayer ult�rieurement."); 
DEFINE("_VIDEOLINK","Lien vid�o"); 
DEFINE("_SHOWORIGINALVIDEOLINK","Montrer le lien de la vid�o originel"); 
DEFINE("_SHOWORIGINALVIDEOLINKINFO","S�lectionnez Oui pour afficher un lien vers l'emplacement d'origine de la vid�o sous le lecteur int�gr�."); 
DEFINE("_ORIGINALVIDEOISHERE","Voir la vid�o dans son context original"); 
DEFINE("_FFMPEGPREEXEC","S'ex�cuter avant ffmpeg"); 
DEFINE("_FFMPEGPREEXECINFO","Si vous �tes sur un h�bergement mutualis� et que vous avez compil� ffmpeg vous-m�me, vous devrez peut-�tre ex�cuter certaines d�finitions de l'environnement pour inclure les biblioth�ques. Si ffmpeg est install� par votre soci�t� d'h�bergement, laissez cette valeur vide."); 
DEFINE("_CACHEDIRISMISSINGPLEASECREATE","La suite de dossiers caches ne peuvent pas �tre cr�� par le syst�me. S�il vous pla�t cr�er manuellement et de fa�on appropri�e les permissions de lecture / �criture."); 
DEFINE("_ERRORREPORTING","Rapport d'erreurs");
DEFINE("_ERRORREPORTINGINFO","Vous pouvez d�finir la politique de votre syst�me de signalisation des erreurs ici.");
DEFINE("_NOERRORREPORT","Ne pas signaler toute les erreurs");
DEFINE("_SHOWERRORSEXCEPTNOTICES","Afficher toutes les erreurs, sauf les notices");
DEFINE("_SHOWERRORSINCLUDINGNOTICES","Afficher toutes les erreurs y compris les notices");
DEFINE("_PLAYTIME","Dur�e");
DEFINE("_SECONDS","Secondes");

//Traduction Fran�aise de la version Seyret 0.2.7.8 � partir d'ici par F�lix Dr. Dimitric

DEFINE("_STARTBATCHCONVERSION","Commencez la conversion par lots");
DEFINE("_BATCHCONVERSIONINFO","Vous pouvez convertir toutes les vid�os non-flv en flv et extraire des miniatures. Veuillez choisir les options de conversion ici.");
DEFINE("_DONTEXTRACTTHUMBNAIL","Ne pas extraire de miniatures des vid�os.");
DEFINE("_EXTRACTALLTHUMBNAILS","Extraire tous les miniatures pour des vid�os non-flv.");
DEFINE("_EXTRACTONLYMISSINGTHUMBNAILS","Extraire les miniatures pour des vid�os non-flv si les miniatures sont absentes.");
DEFINE("_DONTCONERTTOFLV","Ne convertissez pas en flv si vous voulez seulement extraire des miniatures, v�rifiez ceci.");
DEFINE("_FORCEREENCODEOLDFLV","Forcez les vid�os t�l�charg�es � �tre r�encod� en flv avec vos r�glages.");
DEFINE("_DELETEORIGINALFILE","Supprimez la vid�o originale non-flv du serveur apr�s conversion.");
DEFINE("_DEFAULTTIMETOSNAPSHOT","Temps par d�faut pour prendre une capture d'image de la vid�o en secondes.");
DEFINE("_CONVERSIONVIDEOCOUNT","Calcul du nobre de conversion pour cette fois");
DEFINE("_UPLOADCOMPLETE","Merci de patienter un instant !");
DEFINE("_RIGHTCLICKANDSAVE","Clic droit pour sauver ...");
DEFINE("_FIREBOARDCONFIGERROR","Il y a une erreur avec votre installation de Fireboard. Le fichier de configuration de Fireboard ne peut pas �tre trouv�. Veuillez v�rifier votre installation de Fireboard.");
DEFINE("_FFMPEGNOTFOUND","Erreur : Outil de convertisseur non trouv�. Veuillez contacter l'administrateur.");
DEFINE("_MENCODERNOTFOUND","Erreur : Outil de convertisseur non trouv�. Veuillez contacter l'administrateur.");
DEFINE("_INPUTFILENOTFOUND","Erreur : Dossier d'entr�e non trouv�. Veuillez contacter l'administrateur.");
DEFINE("_APPLIEDVIDEOLINK","Lien de la vid�o");
DEFINE("_TAGLIST","Tags");
DEFINE("_VIDEODESCRIPTION","Description");
DEFINE("_CATEGORYLISTSELECT","Category");
DEFINE("_SERVERTYPE","Type de serveur");
DEFINE("_SERVERCODE","Code serveur");
DEFINE("_THUMBNAIL","Miniature");
DEFINE("_ADDEDDATE2","Ajout�");
DEFINE("_PUBLISHSELECT","Status de publication");
DEFINE("_SUBMITDETAILSCLICK","Details");
DEFINE("_FEATUREDVIDEOS","Description");
DEFINE("_LATESTVIDEOS","Derni�re");
DEFINE("_HIGHESTRATEDVIDEOS","Meilleur notes");
DEFINE("_MOSTDISCUSSEDVIDEOS","Plus comment�es");
DEFINE("_MOSTVIEWEDVIDEOS","Plus regard�s");
DEFINE("_INCATEGORY","Cat�gorie");
DEFINE("_INCHANNEL","Chaine");
DEFINE("_DISPLAYSTYLE","Afficher");
DEFINE("_CATIDS","ID de cat�gories");
DEFINE("_SEARCHVIDEOS","Chercher des vid�os"); 
DEFINE("_SMALLSTATISTICSPRE","Total "); 
DEFINE("_SMALLSTATISTICSPOST"," vid�os");  
DEFINE("_VIDEOSINCATEGORYPRE","Vid�os dans");  
DEFINE("_VIDEOSINCATEGORYPOST","cat�gorie");   
DEFINE("_GUEST","Invit�");
DEFINE("_JOINED","Joindre");
DEFINE("_OWNEDVIDEOSCOUNT"," Vid�os");
DEFINE("_THISVIDEOINFORMATION","Cette Vid�o");
DEFINE("_THISVIDEOINFORMATIONMORE","Autres informations");
DEFINE("_SUBSCRIBETHISCHANNEL","Souscrire � cette chaine");
DEFINE("_DIRECTURL","URL");
DEFINE("_EMBED","Partager");
DEFINE("_REPORTBTN","Signaler");
DEFINE("_DELETEBTN","Supprimer");
DEFINE("_EDITBTN","Editer");
DEFINE("_REFRESHBTN","Rafraichir");
DEFINE("_VIDEOINPLAYLIST","Videos:");
DEFINE("_CATEGORIESQUICKLIST","Liste rapide");
DEFINE("_READMORE","Plus d'informations");
DEFINE("_DOWNLOADBTN","T�l�charger");
DEFINE("_FULLSCREENBTN","Plein �cran");
DEFINE("_ABOUTTHISVIDEO","Information sur cette vid�o");
DEFINE("_LESS","Moins d'informations");

DEFINE("_REPLYBTN","Reply");

DEFINE("_ADDFROMANOTHERSERVER","Ajouter depuis un autre serveur");
DEFINE("_UPLOADFROMMYCOMPUTER","Mise � jour depuis mon ordinateur");
DEFINE("_YOUAREADDINGAREPLYTO","Vous ajoutez une vid�o en r�ponse de");
DEFINE("_NOTAREPLY","Pas de r�ponse");
DEFINE("_ISAREPLYTO","R�ponse de");
DEFINE("_THISISAREPLYTOPRE","Cette vid�o est une r�ponse �");
DEFINE("_THISISAREPLYTOPOST","");

DEFINE("_SEYRETPLUGINS","Mise � jour Plugin");

// News : by F�lix Dr. Dimitric Seyret version 2.8.0 le 25/06/2008

DEFINE("_FORCELAMESUPPORT","Support du compresseur LAME");
DEFINE("_FORCELAMESUPPORTINFO","Vous pouvez d�sactiver le support pour la conversion LAME. Cette d�marche permettra de d�terminer vos probl�mes de conversion vid�o. Information : LAME est une librairie (DLL) permettant de produire et de manipuler des fichiers MP3. Certains logiciels n�cessitent d'installer cette librairie pour pouvoir g�rer le format MP3.");
DEFINE("_DONATEFORPROMETHOD1","<b>METHODE 1 :</ b> Vous pouvez obtenir Seyret pro en faisant un don via Paypal. Cliquez sur un des logos Paypal avec votre don et aller directement � la page Paypal don. Dans la page Paypal, votre nom d'utilisateur Joomlaholic sera inclus.");
DEFINE("_DONATEFORPROMETHOD2","<b>METHODE 2 :</b> Si vous avez un coupon Seyret pro, vous pouvez l'utiliser pour mettre � niveau votre version de Seyret.");
DEFINE("_COUPONMETHOD","Utilisez le coupon Seyret Pro");
DEFINE("_PAYVIAPAYPAL","Donnez via Paypal");
DEFINE("_WANTTOUSECOUPON","Je veux utilisez le coupon Seyret Pro");
DEFINE("_SUBMITCOUPON","Soumettre mon Coupon");
DEFINE("_MOVEPRO","Basculer vers la License Seyret Professionnel");
DEFINE("_MOVEPROINFO","Si vous voulez obtenir votre licence pro, s�il vous pla�t demandez votre code coupon ici. Apr�s avoir obtenu votre code de coupon utilisez-le vite, vous devriez l'utiliser dans les 6 heures. Utilisez ce code sur votre nouveau site, allez � la page des dons dans la configuration de Seyret.");
DEFINE("_REQUESTCOUPONCODETOMOVE","Demande de code de coupon");
DEFINE("_UPDATEPROPHP","Mise � jour de d�finitions Pro");
DEFINE("_THISISYOURCOUPONCODE","Il s'agit de votre code coupon. Il est limit� dans le temps. Il ne sera valable que dans le prochaines 2 heures. Si vous ne l'utilisez pas dans les 2 heures, s�il vous pla�t demandez un nouveau code de coupon. <br/> Vous pouvez utiliser ce code coupon sur un autre site pour d�placer votre licence pro. <br/> Vous pouvez d�placer une licence pour un maximum de trois fois. <br/>");
DEFINE("_SECURITYCODENEEDED","Votre code de s�curit� est manquant !");
DEFINE("_SECURITYCODENEEDEDINFO","Il s'agit d'une installation locale. Votre version pro est approuv�, mais en raison de nouvelles s�curit� qui on �t� augment�, vous devez entrer votre code de s�curit� de niveau dite '2' qui a �t� envoy� � votre adresse e-mail. Jusqu'� ce que vous saisissiez ce code, votre version pro ne sera pas activ�e. <br> Si vous n'avez pas re�u votre code de la s�curit�, s�il vous pla�t contactez l'administrateur Joomlaholic avec vos informations de paiement.");
DEFINE("_SECURITYCODENEEDEDENTER","Entrez votre code de s�curit�");
DEFINE("_ENTERYOURSECURITYCODE2","Entrez le code de s�curit� de niveau '2' ici. ATTENTION ! Ne communiquez jamais votre code de s�curit� 2 avec qui que ce soit.");
DEFINE("_SUBMITSC2","Soumettre");

//DEFINE("_CATEGORYINFO","Cat�gories d'informations");

DEFINE("_CATEGORIESQUICKLIST","Liste rapide");
//-----------------------
DEFINE("_THISTHREADISABOUTPRE","Ce fil est d'environ");
DEFINE("_THISTHREADISABOUTPOST","video.");
DEFINE("_THISVIDEOISADDEDBEFORE","Cette vid�o a �t� ajout�e avant.");
DEFINE("_MOVELIMIT","Limite de d�placement");
DEFINE("SHOWREPLIES","R�ponses vid�os");
DEFINE("_VIDEONOTFOUND","Vid�o non trouv�");
DEFINE("_SEYRETCOMPATIBLEPLUGINS","Mises � jour disponibles. Voici les extensions qui sont compatibles avec votre propre version de Seyret.");


//--------------Flash Dashboard
DEFINE("_PROSTATUSLABEL","Version Pro ");
DEFINE("_JHUSERID","JH id Utilisateur");
DEFINE("_FLAPROAPPROVED","Approuv�");
DEFINE("_FLANOTPRO","Non mis � jour");
DEFINE("_SYSTEMINFOL","INFO SYSTEM ");
DEFINE("_PRODEFINITIONS","Definitions Pro ");
DEFINE("_FLATERMSOFUSE","CONDITIONS D'UTILISATION");
DEFINE("_YOURVERSION","Version install�e");
DEFINE("_LATESTVERSION","Ancienne version");
DEFINE("_JH_MESSAGES","JH MESSAGES");
DEFINE("_PRODEFINITIONSUPTODATE","Version � jour");
DEFINE("_PRODEFINITIONSOUTDATED","Version d�pass�s");
DEFINE("_PRODEFINITIONSNOTPRO","Version standard");
DEFINE("_SECNEEDED","Code de s�curit� n�cessaires");
DEFINE("_CONNERROR","Erreur de connexion");
DEFINE("_SEYRETTHEME","Theme de Seyret");
DEFINE("_SBUTTONPACK"," Pack Bouton");
DEFINE("_HALLOFFAME","PANTH�ON");
DEFINE("_VERSIONSPONSOR","VERSION SPONSORISE");

//------------ Version : 2.8.1

DEFINE("_VIDEORESPONSESYSTEM","Activer le syst�me de r�ponse vid�o");
DEFINE("_VIDEORESPONSESYSTEMINFO","Activer le syst�me de r�ponse vid�o. Cela fonctionne avec la version Pro seulement.");

DEFINE("_PLAYERSKIN","Apparence du lecteur");

DEFINE("_LONGTAILADS","Publicit� Longtail");
DEFINE("_LONGTAILENTERCODE","S'il vous pla�t copiez le code javascript de votre compte publicitaire Longtail depuis la page d'int�gration de vos Videos et collez-le dans la bo�te de r�ception ci-dessous.  ");
DEFINE("_LONGTAILVIDEOTUTORIAL","Pour un didacticiel vid�o, s'il vous pla�t, cliquez ici.");
DEFINE("_SUBMITLONGTAILCODE","Envoyer.");
DEFINE("_LONGTAILENTEREDPARAMETERS","Vos param�tres d'enregistrement publicitaires Longtail sont les suivants:");
DEFINE("_LONGTAILNOTENTEREDPARAMETERS","Longtail n'a pas encore �t� configur�.");
DEFINE("_LONGTAILSOLUTIONCONFIG","Configuration de Longtail ");
DEFINE("_LONGTAILSOLUTIONINFO","Longtail est la premi�re solution pour diffuser de la publicit� sur vos vid�os en temps r�el. Avec Seyret Pro, vous pouvez facilement gr�ce � la solution Longtail afficher sur vos vid�os des annonces publicitaires de votre choix et ainsi rentabiliser votre site web tr�s facilement. Inscrivez-vous sur le site web de Longtail, c'est gratuit et commencez � gagner de l'argent imm�diatement.");
DEFINE("_FREELONGTAILSIGNUP","Inscription � Longtail - GRATUIT");

//Line 469

//Les lignes suivantes sont pour la version 0.2.8 pas pour la 0.2.7. Ne demandez rien, profitez juste de ce qui existe d�j�. Merci.

DEFINE("_VIDEOINPLAYLIST","Vid�os:");

?>