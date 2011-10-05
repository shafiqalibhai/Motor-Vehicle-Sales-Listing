<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

//Seyret Component v.0.2.7.7//
//German language by Cerkes - www.Tuerkei-Digital.de
/**
* Content code
* @package SEYRET
* @Copyright (C) 2006 Mustafa DINDAR
* @ All rights reserved
* @ German language by Cerkes - www.Tuerkeitreff.de | Tuerkei-Digital.de
* @ seyret Component is Free Software
* @ Released under GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
* @version 0.2.7.6 
**/	
DEFINE("_COMPONENT_NAME","Seyret-Video-Auflistungssystem"); 
DEFINE("_JUMPTO","Springe zu ");
DEFINE("_VIDEOLISTHEADERPRE","Videos in \""); 
DEFINE("_VIDEOLISTHEADERSUF","\" Kategorie"); 
DEFINE("_HIT","Treffer"); 
DEFINE("_VIDEOTITLE","Titel"); 
DEFINE("_DETAILS","Details"); 
DEFINE("_RATING","Bewertung"); 
DEFINE("_NUMBEROFVOTE","Stimmen"); 
DEFINE("_NOVOTE","Keine Stimmen"); 
DEFINE("_LOGINFORVOTE","Du solltest dich zum abstimmen einloggen!"); 
DEFINE("_THANKSFORVOTE","Danke für deine stimme!"); 
DEFINE("_WAITAMOMENT","Warte bitte einen Moment!"); 
DEFINE("_TOPLEVEL","Oben"); 
DEFINE("_VIDEOGROUPTITLE","Videokategorien"); 
DEFINE("_CATEGORIES","Kategorien"); 
DEFINE("_VIDEOS","Videos"); 
//DEFINE("_GENERALCONFIG","Allgemein"); 
DEFINE("_EXPANDALL","Alles anzeigen"); 
DEFINE("_CLOSEALL","Alle schließen"); 
DEFINE("_VIDEO_CATEGORIES","Videokategorien"); 
DEFINE("_VIDEOCAT_CODE","Code der Kategorie"); 
DEFINE("_VIDEOCAT_NAME","Name der Kategorie"); 
DEFINE("_VIDEOCAT_PARENT","Überkategorie"); 
DEFINE("_EDIT_CATEGORY","Bearbeitungskategorie"); 
DEFINE("_NEW_CATEGORY","Neue Kategorie"); 
DEFINE("_NEWVIDEOCATCOMMENT","Hier kannst du neue Videokategorien erstellen. Bitte vergiss nicht eine Überkategorie zu wählen, falls dies eine Unterkategorie ist."); 
DEFINE("_DEVELOPER","Entwickler"); 
DEFINE("_INFO","Info"); 
DEFINE("_SEYRETTHANKS","Vielen Dank an"); 
DEFINE("_VERSION_INFO","Version"); 
DEFINE("_COPYRIGHT","Copyright"); 
DEFINE("_LICENSE","Lizenz"); 
DEFINE("_YOUTUBEID","YouTube Entwickler Id"); 
DEFINE("_YOUTUBEIDINFO","Hier solltest du deine <b>YouTube Entwickler Id</b> eingeben um die Komponente vollfunktionell verwenden zu können. Komponente zieht Video Info von YouTube diese ID benutzend. Wenn du diese ID nicht eingibst, musst du jede Information wie Thumbnail Adresse, Servercode, etc. manuell eingeben."); 
DEFINE("_TITLELENGTH","Titellänge"); 
DEFINE("_TITLELENGTHINFO","Bitte füge die Titellänge ein damit sie in der Videoliste verwendet werden kann. Auf der Grundlage deines Templates kannst du den besten Wert finden. "); 
DEFINE("_DETAILSLENGTH","Detailslänge"); 
DEFINE("_DETAILSLENGTHINFO","Bitte gib die Detailslänge an damit sie in dieser Videoliste verwendet werden kann. Auf der Grundlage deines Templates kannst du den besten Wert finden. "); 
DEFINE("_CONFIG_OK","Konfiguration gespeichert!"); 
DEFINE("_CONFIG_ERR","Fehler: Konfiguration konnte nicht gespeichert werden!"); 
DEFINE("_VIDEOWIDTH","Videobreite"); 
DEFINE("_VIDEOWIDTHINFO","Videobreite auf der ersten Seite. Auf der Grundlage deines Templates kannst du den besten Wert finden."); 
DEFINE("_VIDEOHEIGHT","Videohöhe"); 
DEFINE("_VIDEOHEIGHTINFO","Videohöhe auf der ersten Seite. Auf der Grundlage deines Templates kannst du den besten Wert finden."); 
DEFINE("_VIDEO_LIST","Videoliste"); 
DEFINE("_VTHUMB","Vorschau"); 
DEFINE("_VIDEO","Video"); 
DEFINE("_EDIT_VIDEO","Bearbeite Video"); 
DEFINE("_NEW_VIDEO","Neues Video"); 
DEFINE("_VSERVERTYPE","Servertyp"); 
DEFINE("_VSERVERCODE","Servercode"); 
DEFINE("_NEWVIDEOCOMMENT","Die beste Art ein neues Video einzufügen ist die Frontseite mit einem Admin Login zu benutzen. Dort musst du nur den Videolink eingeben und das System zieht alle Videoinformationen automatisch. Hier solltest du alle Videoinformationen manuell eingeben."); 
DEFINE("_APPLY","Absenden"); 
DEFINE("_SAVE","Speichern"); 
DEFINE("_INPUTLINK","<b>Eingabe-Link:</b>"); 

//Version 0.2============================================================================================= 

DEFINE("_ISTHISFRESHINSTALL","Die Seyret Datenbanktabellen sind nicht verfügbar.<br><strong>Sei vorsichtig um Datenverlust zu vermeiden.</strong><br>"); 
DEFINE("_IFTHISISFRESHINSTALL","FALLS DAS EINE NEUINSTALLATION IST"); 
DEFINE("_IFTHISISUNINSTALL","FALLS DU DIE KOMPONENTE DEINSTALIEREN WILLST"); 
DEFINE("_THISWILLDROPTABLES","Um die Installation zu vervollständigen klicke einfach unten auf das Bild ."); 
DEFINE("_INSTALLATTENTION","<strong>Bei dieser Operation werden alle Datenbanktabellen ersetzt.</strong>."); 
DEFINE("_FRESHINSTALLSUCCESS","Seyret Datenbank erfolgreich installiert."); 
DEFINE("_UNINSTALLEXPL","Du hast erfolgreich die Seyret Datenbanktabellen deinstalliert.<br><br>Vergiss nicht Seyret auch im  Joomla Komponentenmanager zu deinstallieren."); 
//DEFINE("_THISISANUPDATEINFO","Es scheint as würdest du Seyret Komponente upgraden.<br><b>Leider werden wir diesmal die alte Seyret Datenbank nicht beschützen können. Deshalb wirst du alle Videos verlieren.<br>Aber für die nächste Ausgabe werden wir ein Datenbank Upgrade funktion anbieten.</b>"); 
DEFINE("_THISISANUPDATE","UPGRADE"); 
DEFINE("_JOOMLAALEMMESSAGE","Joomlaholic Board"); 
DEFINE("_YOUDONTWANTTRACKING","Du hast keine Erlaubnis für Nachrichtenzufluss erteilt. Das heißt dass du hier keine Ausgaben oder Sicherheitsanmerkungen bekommen wirst. Wir empfehlen dir Nachrichtenzufluss in der Konfiguration zu aktivieren."); 
DEFINE("_VERSIONTRACKINGINFO","<b>Hier kannst du auswählen ob du Joomlaholic Nachrichten öffnen willst oder nicht.<br><br>Wenn du JA wählst, wird dich das System mit dem Joomlaholic Server verbinden und für deine Seite automatish eine neue Joomlaholic Benutzer-ID holen. <br><br>Dann wirst du im Backend Joomlaholic Nachrichten sehen können und über neue Versionen oder Sicherheitsupdates in Kenntnis gesetzt.<br><br>Deine Joomlaholic Benutzer-ID wird auch für die Video-Download-Optionen benutzt werden.<br><br>Wenn du auswählst keine Nachrichten zu bekommen, wird dich das System nicht mit dem Joomlaholic Server verbinden.<b>"); 
DEFINE("_PLEASESELECTTRACKINGCHOICE","Bitte auswählen"); 
DEFINE("_THEME","Theme"); 
DEFINE("_THEMEINFO","Bitte wähle Seyret Komponenten Theme aus, das du auf deiner Seite benutzen willst."); 
DEFINE("_ADDVIDEO","Videos Hinzufügen"); 
DEFINE("_PENDINGVID","Anstehende Videos"); 
DEFINE("_SORTBY","Sortieren nach"); 
DEFINE("_NOSERVERFOUNDREPORTIT","Leider konnten wir keinen geeigneten Videoserver der zu deinem Videolink passt finden. Wenn du sicher bist dass dieser Videolink stimmt, kontaktiere den Administrator der Website."); 
DEFINE("_ADDEDBY","Hinzugefügt von"); 
DEFINE("_ADDEDDATE","Datum"); 
//DEFINE("_YOUSHOULDLOGINTOADDVIDEO","Du solltest dich einloggen um Videos hinzuzufügen."); 
DEFINE("_ASCENDING","Aufsteigend"); 
DEFINE("_DESCENDING","Absteigend"); 
DEFINE("_POPUPVIDEOWIDTH","Popup Videobreite"); 
DEFINE("_POPUPVIDEOHEIGHT","Popup Videohöhe"); 
DEFINE("_DEFAULTSORTBY","Voreingestellte Videosortierung"); 
DEFINE("_DEFAULTSORT"," Voreingestellte Reihenfolge der Sortierung "); 
DEFINE("_POPUPVIDEOWIDTHINFO","Bitte definiere hier die Videobreite in dem Popup Fenster. Fenstergröße ist 100px größer als die eingebettete Videogröße."); 
DEFINE("_POPUPVIDEOHEIGHTINFO"," Bitte definiere hier die Videohöhe in dem Popup Fenster."); 
DEFINE("_DEFAULTSORTBYINFO","Bitte wähle voreingestellte Sortierung nach Kriterien."); 
DEFINE("_DEFAULTSORTINFO","Bitte wähle voreingestellten Sortierungstypen aufsteigend oder absteigend."); 
DEFINE("_THISAREAISONLYFORREGISTEREDUSERS","Nur registrierte Benutzer können Videos herunterladen. Bitte einloggen oder registrieren."); 
//DEFINE("_COPYTHISLINK","Link kopieren"); 
DEFINE("_YOURUSERIDRESTORED","Deine Benutzer-ID wurde erfolgreich wiederhergestellt!"); 
DEFINE("_YOURUSERIDGENERATED"," Deine Benutzer-ID wurde erfolgreich erstellt!"); 
DEFINE("_YOURUSERIDPROBLEM","Es scheint als gäbe es ein Problem mit deiner Joomlaholic Benutzer-ID. Sie wurde von der Datenbank gelöscht. Das kann auftreten wenn du deine Seite verlässt. Aktuallisiere die Seite und erstelle ein neues."); 
DEFINE("_YOUDONTHAVEADMINISTRATORRIGHTS","Du hast keine Administrator oder Editorrechte! Wenn du die Rechte hast und trotzdem diese Nachricht erhältst, könntest du acl Probleme haben. Anstehende Videos kannst du auch im Admin Backend überprüfen."); 
DEFINE("_IFPUBLISHED","Status der Veröffentlichung"); 
DEFINE("_YES","Ja"); 
DEFINE("_NO","Nein"); 
DEFINE("_ENABLEDOWNLOADS","Download ermöglichen"); 
DEFINE("_ENABLEDOWNLOADSINFO","Das ist ein feature der Pro-Version. Wenn dein Seyret keine Pro-Version ist, wird die download Option nicht funktionieren."); 
DEFINE("_JALEMUSERID","Joomlaholic Benutzer-ID"); 
DEFINE("_JALEMUSERIDINFO","Die Joomlaholic Benutzer-ID deiner Seite. Diese wird in allen Joomlaholic Operationen verwendet."); 
DEFINE("_DONATIONS","Spenden"); 
DEFINE("_DONATIONHEADER","Spenden"); 
DEFINE("_YOUHAVENTDONATEDYET","Es scheint dass du bisher nicht gespendet hast."); 
DEFINE("_YOUHAVENTDONATEDSTEP1","<b>Schritt-1: </b> Klicke zuerst auf eines der Paypal Logos mit deinem Spendenbetrag und geh auf die Paypal Spendenseite. Auf der Paypal Seite wird deine Joomlaholic Benutzer-ID eingeschlossen sein."); 
DEFINE("_YOUHAVENTDONATEDSTEP2","<b>Schritt-2: </b> Gebe bitte nachdem du gespendet hast unten den Betrag ein und sende es ab. <p><b>Wir werden über deine Spende informiert.</b> Nach deiner Spende werden Videodownloads automatisch möglich sein bis wir unser Konto überprüft haben. Wenn deine Spende stimmt, wird es bestätigt. Andernfalls wird es widerrufen und dein Videodownload Feature wird gesperrt."); 
DEFINE("_SUBMIT","Absenden und Downloadmöglichkeit aktiviren"); 
DEFINE("_INFORMJOOMLAALEM","Informiere Joomlaholic über den Spendenbetrag: "); 
DEFINE("_YOURDONATIONAPPROVED","Deine Spende ist bestätigt. Du kannst weiterhin die Downloadfunktion nutzen. <p>Danke für deine Spende."); 
DEFINE("_YOURDONATIONPENDING","Dein Spende wird bearbeitet. Du kannst jetzt in der Konfigurationsübersicht die Downloadfunktion aktivieren. <p>Wenn wir aber deine Spende nicht bestätigen, wird die Downloadfunktion für deine Seite gesperrt. <p>Danke für deine Spende."); 
DEFINE("_YOURDONATIONREJECTED","Dein Spende wurde zurückgewiesen. <p>Leider konnten wir deine Spende nicht bestätigen. <p>Wenn du glaubst dass dies ein Irrtum ist, kontaktiere uns bitte per E-Mail."); 
DEFINE("_UNINSTALL","Deinstallieren"); 
DEFINE("_CAUTION","Achtung"); 
DEFINE("_CAUTIONUNINSTALL2","Diese Operation wird alle Seyret Datenbanktabellen dauerhaft außer Betrieb setzen.<p>Wenn du die  Seyret Datenbanktabellen deinstallieren willst, klicke unten auf das Bild."); 
DEFINE("_CAUTIONUNINSTALL3","Diese Operation wird nur Seyret Datenbanktabellen deinstallieren. Danach solltest du zu Joomla Komponenten Installierungs-/Deinstallierungsmanager gehen und die Seyret Komponente entfernen um die deinstallation zu vollenden."); 
DEFINE("_UNINSTALLDATABASESUCCESS","Seyret Datenbanktabellen sind erfolgreich deinstalliert worden!"); 
DEFINE("_NOJALEMUSERID","Du hast keine gültige Joomlaholic Benutzer-ID! <p>Du kannst Joomlaholic nicht ohne gültige Benutzer-ID kontaktieren. <p>Wahrscheinlich ist der Nachrichtenzufluss nicht aktiv. In der Konfiguration kannst du den  Nachrichtenzufluss einschalten.<p> Dann wird deine Benutzer-ID automatisch erstellt."); 
DEFINE("_MESSAGEFEED","Nachrichtenzufluss"); 
DEFINE("_MESSAGEFEEDINFO","Du kannst den Status des Nachrichtenzuflusses hier auswählen. Wenn du keine Joomlaholic Benutzer-ID hast, empfehlen wir dir eine zu besorgen. Wenn du den Nachrichtenzufluss ermöglichst, wirst du für deine Seite automatisch eine Benutzer-ID bekommen. Auch wenn du dann eine weiterleitung verhinderst, wird deine Benutzer-ID nicht gelöscht. Auch wenn du Seyret komplett deinstallierst, wird deine alte Benutzer-ID von Joomlaholic Servern wiederhergestellt werden."); 
DEFINE("_ENABLED","Aktivieren"); 
DEFINE("_DISABLED","Deaktivieren"); 
DEFINE("_VIDEOCOUNTINVLIST","Video #"); 
DEFINE("_VIDEOCOUNTINVLISTINFO","Hier kannst du die Anzahl der Videos definieren, die in der Videoliste auf der Startseite erscheinen sollen."); 
DEFINE("_DELETEVIDEOCONFIRMMESSAGE","Dieses Video wird dauerhaft gelöscht. Bist du sicher?"); 
DEFINE("_DELETETHISVIDEO","Lösch dieses Video"); 
DEFINE("_PUBLISH","Veröffentlichen"); 
//that's enough for 0.2. Let's leave something to 0.3  

//0.2.1 start 
DEFINE("_PUBLISHED","Veröffentlicht"); 
DEFINE("_UPLOADVIDEO","Video hochladen"); 
DEFINE("_UPLOADVIDEOINFORM","<b>1-</b> Du kannst deine Videos hier hochladen. Bitte lade keine Videos hoch, die nicht zu unserem Seiteninhalt passen. <br/><b>Achte darauf nur flv, mpg, wmv, avi, mp3 und swf Dateien hochzuladen. Andernfalls kann dein Video nicht angezeigt werden.</b>"); 
DEFINE("_UPLOADANDGOTONEXT","Hochladen und zum nächsten Schritt gehen"); 
DEFINE("_UPLOADTHUMBNAILINFORM","<b>2-</b> Du kannst ein Vorschaubild für dein Video hochladen. Versuch ein Vorschaubild hochzuladen, die dein Video gut präsentiert. <br/> <b>Bitte versuch nur GIF, JPG oder PNG Dateien hochzuladen. </b><br/> Wenn du kein Vorschaubild für dieses Video hast, vergiss nicht das Feld unten zu überprüfen."); 
DEFINE("_NOTHUMBNAILFORTHISVIDEO","Ich möchte kein Vorschaubild für mein Video hochladen."); 
DEFINE("_COPY","Kopieren"); 
DEFINE("_THISISANUPDATEINFO","Es scheint als würdest du die Seyret Komponente upgraden.<br><b>Ein Upgraden des Skripts wird deine Seyret Datenbanktabellen nicht löschen.<br>Wir empfehlen dir aber ausdrücklich ein Backup deiner Datenbank zu erstellen.</b>"); 
DEFINE("_DBVERSION_INFO","Alte Version"); 
DEFINE("_NEWVERSION_INFO","Du wirst deine Version upgraden"); 
DEFINE("_PROCEEDUPGRADE","Um die Upgrade-Operation durchzuführen klicke einfach unten auf das Bild"); 
DEFINE("_UPGRADEATTENTION","Wenn du denkst dass nach deinem Upgrade irgendetwas schief gelaufen ist, stelle deine datenbanktabellen wieder her und informiere uns unter www.joomlaholic.com"); 
DEFINE("_UPGRADESUCCESS","Seyret wurde erfolgreich upgegradet!"); 
DEFINE("_USERSUPLOADVIDEO","Benutzer können Videos hochladen"); 
DEFINE("_USERSUPLOADVIDEOINFO","Bitte definiere deine Benutzerrechte zum hochladen von Videos."); 
DEFINE("_VIDEOMAXSIZE","Maximale Videogröße"); 
DEFINE("_VIDEOMAXSIZEINFO","Maximale Größe von Uploads für Benutzer in <b>MBytes</b>. Dieser Betrag sollte eine ganze Zahl sein. Achte auch auf php.ini Upload Grenzen."); 
DEFINE("_THUMBMAXSIZE","Maximale Vorschaubildgröße"); 
DEFINE("_THUMBMAXSIZEINFO","Maximale Größe für das Vorschaubild der Uploads von Benutzern in <b>MBytes</b>. Dieser Betrag sollte eine ganze Zahl sein. Achte auch auf php.ini Upload Grenzen."); 
DEFINE("_RESIZETHUMBWIDTH","Vorschaubildbreite anpassen"); 
DEFINE("_RESIZETHUMBWIDTHINFO","Hochgeladene Vorschaubilder des Videos werden angepasst. Dieser Wert definiert die Breite des Vorschaubildes."); 
DEFINE("_EMBEDBOXWIDTH","Einbetten Feldbreite"); 
DEFINE("_EMBEDBOXWIDTHINFO"," Dieser Wert definiert die Breite des Einbetten, sowie das Kopieren Link Feldes."); 
DEFINE("_ADDVIDEOINFO","Bitte kopiere und füge deine Video links in das Eingabefeld ein und klicke auf 
den 'Absenden' Button. <b>Bitte achte auf richtiges Videolinkformat.</b> Klicke 
dann auf den 'Speichern' Button. Für alle unterstützten Video-Portale und mehr Informationen, rufe die <b>Hilfe</b> auf."); 

// please delete or comment _THISISANUPDATEINFO line on 80 
// pay attention, in line 115 $3 is changed to $5 
//0.2.3. end 

//==================================================================================== 
//0.2.4 
DEFINE("_ADMANAGEMENT","Werbe Management"); 
DEFINE("_TOP","Oben"); 
DEFINE("_ADLINK","Werbe-Link"); 
DEFINE("_REMOTESERVERFILES","Dateiliste auf Werbe-Server"); 
DEFINE("_NEWADCOMMENT","Wähle Kategorie für die Werbung. Du kannst auch einen flv link, der nicht in der Auswahlliste aufgeführt ist, eingeben."); 
DEFINE("_REMOTESERVERADDRESS","Dein Fern-Server Werbe Verzeichnis"); 
DEFINE("_AD","Video Werbung"); 
DEFINE("_NEW_AD","Neue Werbung"); 
DEFINE("_EDIT_AD","Bearbeite Werbung"); 
DEFINE("_PARENT","Übergeordnet"); 

//0.2.5 
DEFINE("_VIDEOURL","URL"); 
DEFINE("_VIDEOEMBEDCODE","Einbettung"); 
DEFINE("_VOTEIT","Abstimmen"); 
DEFINE("_LOGINTOVOTE","Logge dich ein zum abstimmen"); 
DEFINE("_GENERALCONFIG","Allgemein"); //comment line 31 
DEFINE("_CONFIG","Konfiguration"); 
DEFINE("_ADSCONFIG","Werbung konfigurieren"); 
DEFINE("_EXTRAS","Extras"); 
DEFINE("_WRITEHELP","Schreibe hilfe"); 
DEFINE("_SNIPPETS","HTML Schnipsel"); 
DEFINE("_WRITEHELPCOMMENT","Wenn du das Hilfesystem verwenden möchtest, kannst du deine eigene Hilfeseite bearbeiten."); 
DEFINE("_SNIPPETCOMMENT","Wenn du ein Schnipsel nach dem Videoeinbettungscode verwenden willst, bearbeite es hier."); 
DEFINE("_REPORTVIDEOINFORM","Bitte schreibe den Grund für deinen Bericht. Unsere Moderatoren werden deinen Bericht bald überprüfen."); 
DEFINE("_VIDEOID","Video Id"); 
DEFINE("_REPORTEDBY","Berichtet von"); 
DEFINE("_REPORTEDDATE","Berichtsdatum"); 
DEFINE("_REPORTCOMMENT","Berichtsgrund"); 
DEFINE("_REPORTREPLY","Antworten"); 

//line 115,148,150 changed 

//0.2.6 -------------------starts 
DEFINE("_VIDEOSINALLCATEGORIES","Videos"); 
DEFINE("_VIDEOCAT","Kategorie"); 
DEFINE("_SEARCH","Suchen"); 
DEFINE("_DISPLAY","Anzeigen"); 
DEFINE("_PERMISSIONS","Erlaubnisse"); 
DEFINE("_SYSTEM","System"); 
DEFINE("_USERSCREENNAME","Benutzerbildschirmname"); 
DEFINE("_USERSCREENNAMECOMMENT","Du kannst Bildschirmnamen definieren: Benutzername oder den  richtigen Namen."); 
DEFINE("_USEREMOTESERVERSUPPORT","Benutze Fernserver"); 
DEFINE("_USEREMOTESERVERSUPPORTINFO","Du kannst die Fernserverunterstützung hier auswählen. Dies Feature ist noch nicht komplett. Es wird daran gearbeitet. Es wurde zuerst für Werbenutzung errichtet."); 
DEFINE("_REMOTESERVERADSDIRECTORY","Fernwerbeverzeichnis"); 
DEFINE("_REMOTESERVERADSDIRECTORYINFO","Definiere hier dein Fernwerbeverzeichnis. Versichere dich, dass diese Adresse eine  spezielle index.php enthalten sollte, die ein bestandteil der Komponente ist."); 
DEFINE("_REMOTESERVERVIDEOSDIRECTORY","Fernvideoverzeichnis"); 
DEFINE("_REMOTESERVERVIDEOSDIRECTORYINFO"," Definiere hier  dein Fernserverwerbeverzeichnis. Versichere dich, dass diese Adresse eine spezielle index.php enthalten sollte, die ein bestandteil der Komponente ist."); 
DEFINE("_REMOTESERVERCHECKSTRING","Fernüberprüfungssteuerung"); 
DEFINE("_REMOTESERVERCHECKSTRINGINFO","Dies ist eine Sicherheits Zeichenkette, die unauthorisierte Verzeichnisauflistung verhindert. Ändere diese Sicherheits Zeichenkette auch in der Fern index.php."); 
DEFINE("_PLEASESELECT","Bitte auswählen..."); 
DEFINE("_SUPERADMINRIGHTS","Super Administrator Rechte"); 
DEFINE("_SUPERADMINRIGHTSINFO","Super Administratoren haben alle Rechte. Für sie gibt es keine Einschränkungen."); 
DEFINE("_RIGHTS","Seyret Zugriffsrechte"); 
DEFINE("_CANSEEADMINTOOLBAR","kann Admin Funktionsleiste sehen "); 
DEFINE("_CANSEEREPORTEDVIDESBUTTON","kann den 'berichtete Videos' Button sehen"); 
DEFINE("_CANSEEPENDINGVIDESBUTTON","kann den 'anstehende Videos' Button sehen"); 
DEFINE("_CANSEEADDVIDEOSBUTTON","kann den 'Füge Videos hinzu' Button sehen"); 
DEFINE("_CANADDVIDEOS","kann Videos hinzufügen"); 
DEFINE("_CANSEEUPLOADVIDEOSBUTTON","Kann den 'Videos hochladen' Button sehen"); 
DEFINE("_CANUPLOADVIDEOS","Kann Videos hochladen"); 
DEFINE("_CANSEEMYVIDEOSBUTTON","kann den 'Meine Videos' Button sehen"); 
DEFINE("_CANSEEFEATUREDVIDEOSBUTTON","kann den 'featured' Button sehen"); 
DEFINE("_CANSEESEARCHVIDEOSBUTTON","Kann den 'Suchen' Button sehen"); 
DEFINE("_CANSEEHELPBUTTON","Kann den 'Hilfe' Button sehen"); 
DEFINE("_CANSEEDELETEVIDEOBUTTON","Kann den 'Löschen' Button sehen"); 
DEFINE("_CANDELETEVIDEO","Kann Videos löschen"); 
DEFINE("_CANSEEEDITVIDEOBUTTON","Kann den 'Videos bearbeiten' Button sehen"); 
DEFINE("_CANEDITVIDEO","Kann Videos bearbeiten"); 
DEFINE("_CANSEEFULLSCREENBUTTON","Kann den 'Vollbildschirm' Button sehen"); 
DEFINE("_CANSEEDOWNLOADBUTTON","Kann den 'Download' Button sehen"); 
DEFINE("_CANDOWNLOADVIDEO","Kann Videos downloaden"); 
DEFINE("_CANSEEREPORTBUTTON","Kann den 'Berichten' Button sehen"); 
DEFINE("_CANREPORTVIDEOS","Kann über Videos berichten"); 
DEFINE("_CANSEEDIRECTLINKBOX","Kann den 'Direkten Link' Button sehen"); 
DEFINE("_CANSEEEMBEDBOX","Kann das Einbetten Feld sehen"); 
DEFINE("_CANSEEVOTESTARTS","Kann die Bewertungssterne sehen"); 
DEFINE("_CANVOTE","Kann bewerten"); 
DEFINE("_CANSEECOMMENTS","Kann Kommentare sehen"); 
DEFINE("_SEYRETACL","Seyret Zugriffsrechte"); 
DEFINE("_EDIT_SEYRETACL","Bearbeite Seyret Zugriffsrechte"); 
DEFINE("_NEW_SEYRETACL","Neue Seyret Zugriffsrechte"); 
DEFINE("_JACLNAME","Joomla Zugriffs-Level"); 
DEFINE("_ACLCOMMENT","Bitte sei vorsichtig mit Joomla Zugriffslevelnamen.Es ist sehr wichtig, daß, du hier niedrigere Rechte  benutzen solltest. Andernfalls wird es nicht richtig funktionieren. Zum Beispiel heißt es Administrator bei Joomla ACL aber  hier solltest du Verwalter schreiben. Du solltest mindestens eine Gast Zugriffsebene erstellen."); 
DEFINE("_YOUDONTHAVEPERMISSIONS","Du hast für diese Operation keine Benutzerrechte. <p>Wenn du nicht eingeloggt bist, log dich bitte ein und versuche es nochmal."); 
DEFINE("_DOWNLOADS","Downloads"); 
DEFINE("_CANPUBLISHVIDEO","Kann Videos veröffentlichen"); 
DEFINE("_VIDEOADDEDSUCCESFULLY","Video erfolgreich hinzugefügt. "); 
DEFINE("_CANSEEVIDEOSERVERDETAILS","Kann Videoserverdetails sehen");
DEFINE("_AD_VIDEO_LIST","Videoliste hinzufügen");
DEFINE("_REMOTESERVERSUPPORTISNOTENABLED","Fernserver unterstützung ist nicht aktiviert. Bitte aktiviere es in der  Konfiguration.");
DEFINE("_USEAJAXBROWSING","Ajax Browsing");
DEFINE("_USEAJAXBROWSINGINFO","Benutze Ajax unterstütuung. Vergiss nicht das diese funktion sich im Beta stadium befindet. Voreingestellt ist JA. Wenn du probleme mit NEIN hast, dann stelle es einfach wieder um.");
DEFINE("_TWOCOLUMNSVIDEOLIST","Mehrspaltige videoauflistung");
DEFINE("_TWOCOLUMNSVIDEOLISTINFO","Mehrspaltige videoauflistung auf der Startseite. Wenn dein Template es unterstützt, treffe eine verwendbare wahl.");
DEFINE("_MULTICOLUMNCOUNT","Spaltenanzahl");
DEFINE("_MULTICOLUMNCOUNTINFO","Wenn du mehrspaltige videoauflistung gewählt hast, definiere bitte auch die Anzahl der Spalten die du möchtest.");
DEFINE("_YOUHAVENOACCESSRIGHTTOTHISVIDEO","Du hast keine Zugriffsrechte für dieses Video. Bitte log dich erst ein. Wenn du schon eingelogt bist, aktuallisiere deinen Account. Klicke dazu <a href={accesslevelupgradelink_dontchangethis}>hier.</a>");
DEFINE("_VIDEOACCESSLEVEL","Video Zugriffsebene");
DEFINE("_UPGRADEACCESSLEVELLINK","Zugriffsebenen Upgrade Link");
DEFINE("_UPGRADEACCESSLEVELLINKINFO","Wenn du Zugriffsebenen für deine Videos benutzt, kannst du einen Link zum upgrade der Benutzerzugriffsebene eingeben. Deine Benutzer werden dann diesen Link sehen das sie keine Nutzerrechte haben wenn sie ein Video wählen.");
DEFINE("_ACCESSLEVELCOUNT","Zugriffsebenenzähler");
DEFINE("_ACCESSLEVELCOUNTINFO","Wenn du für deine Videos Zugriffsebenen nutzen möchtest, kannst du die maximale Anzahl der Zugriffebenen konfigurieren. Vergiss nicht, größere Zahl bedeutet auch höhere Rechte. Wenn du es frei lässt, bedeutet das, dass jeder Zugang zu deinen Video hat.");
DEFINE("_VIDEOCAT_DIR","Kategorie Verzeichnis");
DEFINE("_CATEGORYDIRECTORYWILLBEGENERATED","Das Verzeichnis für diese Kategorie wird automatisch generiert. Alle  videos für diese Kategorie werden unter dieser Kategorie abgelegt.");
DEFINE("_LOCALFILESDIRECTORY","Basis Verzeichnis für lokale Dateien");
DEFINE("_LOCALFILESDIRECTORYINFO","Basis Verzeichnis für lokale Dateien. Kategorie Verzeichnisse werden unter diesem Verzeichnis erstellt. Sollte im <b>/dir1/dir2</b> format sein.");
DEFINE("_LOCALVIDEO","Lokales Video");
DEFINE("_LOCALVIDEOINFO","Wenn du ein Lokales Video benutzen möchtest, wähle die Videodatei und das Vorschaubild aus.");
DEFINE("_VIDEOCAT_FILELIST","Video Auflistung");
DEFINE("_VIDEOCAT_THUMBLIST","Vorschaubild auflistung");
DEFINE("_VIDEOSERVER","Video Server");
DEFINE("_VIDEOSERVERINFO","Wenn du ein Video von einem Video-Server hinzufügen möchtest wie z.B Youtube, Google, gebe den Link ein und klicke auf das Absenden Button.");
DEFINE("_SERVERCODES","Server Codes");
DEFINE("_SERVERCODESINFO","Wenn du ein Video editieren möchtest und du  über die informationen das Video nicht sicher bist, ändere hier bitte nichts ansonsten kann es zu störungen der Komponente kommen.");
DEFINE("_ATTRIBUTES","Attribute");
DEFINE("_THISISABACKUPFILE","Das ist eine Backup Datei");
DEFINE("_VIDEOADS","Video Werbung");
DEFINE("_IMAGEADS","Image Werbung");
DEFINE("_USEIMAGEADSYSTEM","Benutze Image Werbesystem");
DEFINE("_IMAGEADDURATION","Dauer der Image Werbung");
DEFINE("_ISDOWNLOADABLE","Downloadbar");
DEFINE("_ALLOWURLVALUE","allow_url_fopen");
DEFINE("_ALLOWURLVALUEINFO","Zeigt deine php Einstellungen für allow_url_fopen was für das auslesen der URL´s benutzt wird.");
DEFINE("_ON","An");
DEFINE("_OFF","Aus");
DEFINE("_CURLLIB","curl Library");
DEFINE("_CURLLIBINFO","Wenn diese library installiert ist, wird Seyret es als Vorgabe zum lesen der url contents benutzen.");
DEFINE("_NOTINSTALLED","Nicht Installiert");
DEFINE("_INSTALLED","Installiert");
DEFINE("_SEYRETFUNCSTATUS","Seyret Funktionalität");
DEFINE("_PASSED","Erfolgreich");
DEFINE("_FAILED","Gescheitert");
DEFINE("_SEYRETFUNCSTATUSINFO","Wenn der test der Seyret funktionalität gescheitert ist, bedeutet das dass beide Funktionen zum übermitteln der URL contents ausgeschaltet ist und es ist dann nicht möglich die volle Funktion von Seyret zu nutzen. Wir empfehlen deinen Hoster zu kontaktieren um das letztere einzuschalten, allow_url_fopen oder curl.");
DEFINE("_IMAGEADDEFAULT","Voreingestellte Image Werbung");
DEFINE("_USEIMAGEADSYSTEMINFO","Wenn du Ja auswählst, wird die Image Werbung vor dem Video gezeigt. <b>Das funktioniert nur wenn die PRO funktionen aktiviert sind.</b>");
DEFINE("_IMAGEADDEFAULTINFO","Voreingestellte Image Werbung. Wenn eine image Werbung nicht für eine Kategorie definiert ist, wird diese Werbung als voreingestellt angezeigt.");
DEFINE("_IMAGEADDURATIONINFO","Dauer der image Werbung wird in millisekunden angezeigt.");
DEFINE("_UPLOADEDSUCCESSFULLY","Video erfolgreich hochgeladen. Je nach Einstellungen deiner Seite, wird dein Video direkt veröffentlicht oder wartet auf moderation.");
DEFINE("_ID","Id");
DEFINE("_AD_IMAGE_LIST","Anzeigen Image Liste");
DEFINE("_NEWIMAGEADCOMMENT","Bitte gebe die komplette URL deiner image Anzeige ein welches angezeigt werden soll. Vergiss  nicht die Kategorie auszuwählen. Wenn du mehr als eine image Anzeige in einer Kategorie definieren willst, wird im Frontend eine zufällige Auswahl getroffen und angezeigt. Bitte definiere die URL Adresse, die nach einem klick auf die Anzeige geöffnet werden soll.");
DEFINE("_REALNAME","Realer Name");
DEFINE("_UNKNOWN","Gast");  
DEFINE("_RESETMYDOWNLOADSTATUS","Klicke hier wenn du die Spende für das Video Downloaden zurücksetzen willst."); 
DEFINE("_VIDEODOWNLOADOPTION","Video Download Option"); 
DEFINE("_PROSTATUS","Seyret PRO Status"); 
DEFINE("_SEYRETISNOTPRO","Deine Seyret Version ist keine <b>PRO Version</b>. In der PRO Version stehen dir mehr Möglichkeiten von Seyret zur verfügung. Mehr Details über die PRO Version findest du auf www.joomlaholic.com. <p>Sobald du ein upgrade auf die PRO Version geamacht hast, kannst du auch in den neueren Versionen die PRO Version weiter nutzen."); 
DEFINE("_MAKEPROBUTTON","Upgrade zur PRO Version"); 
DEFINE("_MAKEMEPRO","Gebe den Betrag deiner Spende ein."); 
DEFINE("_UPGRADETOPRO","<b>Schritt-1:</b> Das upgraden auf die PRO Version erfordert eine Spende von mindestens 40 USD. Wenn du eine der Tasten unten klickst, wirst du automatisch zur Paypal Seite mit den erforderlichen informationen umgeleiteit."); 
DEFINE("_UPGRADETOPROSTEP2","<b>Schritt-2:</b> Wir werden über deine Spende informiert. Nachdem wir deine Spende für die PRO Version genehmigt haben, kannst du sofort die PRO Version nutzen. Die Wartezeit bis zur Genehmigung ist minimal."); 
DEFINE("_SEYRETPROISPENDING","Deine Spende für PRO funktionen wartet auf die Genehmigung. Leider erhielten wir keine Informationen von Paypal über deine Spende, also wird deine Spende manuell genehmigt. Bitte überprüfe es sehr bald. <p> Wenn du irrtümlich einen Antrag gestellt hast, kannst du deinen Antrag zurück nehmen, indem du unten auf den Link klickst."); 
DEFINE("_RESETMYPROSTATUS","Klicke hier wenn du deinen Antrag auf die PRO Version zurücksetzen willst."); 
DEFINE("_SEYRETPROISAPPROVEDREFRESH","Deine Spende wurde anerkannt. <p>Bitte aktuallisiere jetzt die Seite."); 
DEFINE("_COULDNTCONNECTTRYLATER","Deine Spende ist abgesendet aber können für den Status keine verbindung mit dem Joomlaholic Server aufnehmen. Bitte versuche es später erneut."); 
DEFINE("_YOUCANRESETIFMISTAKENLY","Wenn du irrtümlich einen Antrag gestellt hast, kannst du deinen Antrag zurücknehmen indem du unten auf den Link klickst."); 
DEFINE("_PROAPPROVED","Deine Spende für die PRO Version wurde anerkannt. Viel Spass damit.");
DEFINE("_NEEDTOUPDATE","Deine Seyret PRO Funktionseigenschaften sind veraltet. Wir empfehlen ausdrücklich diese zu aktuallisieren.");
DEFINE("_UPDATEPROPHP","Klicke hier um die PRO Eigenschaften zu aktuallisieren.");
DEFINE("_ITISUPTODATE","Seyret PRO Funktionseigenschaften sind aktuell. Keine weiteren Maßnahmen mehr erforderlich.");
DEFINE("_SEYRETPROISREJECTED","Dein Antrag wird zurückgewiesen. Unsere Kontrollen haben ergeben, daß du für die PRO Version nicht gespendet hast. Dein Antrag wird jetzt zurückgestellt, um dir Gelegenheit zu geben, damit du wirklich spendest. Kontaktiere uns bitte wenn du denkst, daß es sich dabei um einen irrtum handelt."); 
DEFINE("_THISISAPROVERSIONFEATURE","Upgrade zur PRO Version");
DEFINE("_GOTODONATIONSPAGETOENABLEPRO","Das ist eine Funktion der PRO Version. Du kannst die PRO funktionen auf der Spendenseite aktivieren.");
DEFINE("_USEVIDEOADSYSTEMINFO","Bei Ja werden die Video Anzeigen im eigenem Player vor den Videos gezeigt. <b>Dieses feature wird nur funktionieren wenn die PRO funktion aktiviert ist.</b>");
DEFINE("_USEVIDEOADSYSTEM","Benutze Video Anzeigen System");
DEFINE("_VIDEOINFOREFRESHED","Video information ist aktuallisiert.");
DEFINE("_THUMBWIDTHINLIST","Vorschaubildbreite in der Videoliste.");
DEFINE("_THUMBWIDTHINLISTINFO","Vorschaubildbreite in der Videoliste. Benutze nur Zahlen, keine Pixel.");
DEFINE("_FEATURED","Featured");
DEFINE("_DISCUSSIONONFORUM","Diskussion");
DEFINE("_CLICKHERETODISCUSS","Klicke hier um über das Video zu diskutieren");
DEFINE("_TOPICRE","Re: ");


DEFINE("_VIDEOINFO","Video Info");
DEFINE("_INPUTFBDISCUSSTOPIC","Thema");
DEFINE("_INPUTFBDISCUSSMESSAGE","Nachricht");
DEFINE("_CATEGORYINFO","Kategorie Info");
DEFINE("_CATEGORYNAME","Titel");
DEFINE("_SUBCATEGORIES","Unterkategorien");
DEFINE("_VIDEOSINCAT","Videoanzahl");
DEFINE("_DISCUSSPOSTHEADER","Schreibe eine neue Nachricht");
DEFINE("_SUBMITCOMMENT","Absenden");
DEFINE("_LOGINTOWRITECOMMENT","Log dich ein um ein Kommentar zu schreiben");
DEFINE("_DONTDONATEIFYOUWILLMAKEPRO","Wenn du vor hast auf die PRO Version upzugraden, spende nicht für die Download Möglichkeit. Bei Seyret PRO Benutzern ist dieses feature bereits aktiviert.");
DEFINE("_COMMENTINGSYSTEM","Kommentar System");
DEFINE("_JOMCOMMENT","Jom Comment");
DEFINE("_FIREBOARD","Fireboard");
DEFINE("_COMMENTINGSYSTEMINFO","Wähle das voreingestellte Kommentarsystem aus.");
DEFINE("_PUBLISHAFTERMODERATED","Wird nach der Freigabe veröffentlicht.");
DEFINE("_SHOWVIDEOTOOLTIPS","Zeige Video Tooltips");
DEFINE("_SHOWVIDEOTOOLTIPSINFO","Wähle hier den Status der Video tooltips.");
DEFINE("_SHOWCATEGORYTOOLTIPS","Zeige Kategorie Tooltips");
DEFINE("_SHOWCATEGORYTOOLTIPSINFO","Wähle hier den Status der Kategorie tooltips.");

DEFINE("_INTEGRATION","Integration");
DEFINE("_FIREBOARDCATEGORYFORDISCUSS","FB Diskussionskategorie");
DEFINE("_FIREBOARDCATEGORYFORDISCUSSINFO","Wenn du das Fireboard plugin nur zum kommentieren benutzen möchtest, lasse dieses Feld auf 0. Wenn du es als diskussions plugin benutzen möchtest, gebe die Kategorienummer vom Fireboard ein.");
DEFINE("_LEAVEVIDEOLINK","Füge Link zum Video ein");
DEFINE("_LEAVEVIDEOLINKINFO","Füge Link zum Video im ersten Beitrag des Fireboard diskussionsthema ein.");
DEFINE("_YOUAREUSINGPRO","Dein Seyret ist eine PRO Version");
DEFINE("_GOTODONATIONSPAGE","Gehe bitte für informationen zum upgraden zur Spendenseite");
DEFINE("_NOTPROWANTTOUPGRADE","Deine Seyret Version ist keine Pro-Version. Möchtest du auf die <b>PRO Version</b> upgraden? Wenn ja, kannst du das auf der Spendenseite machen.");


DEFINE("_IMAGEAD","Image Ads");
DEFINE("_CLICKLINK","Klick Link");
DEFINE("_LOCALADSDIRECTORY","Lokales Ads Verzeichnis");
DEFINE("_LOCALADSDIRECTORYINFO","Wenn du ein Lokales ads benutzen möchtest, gebe bitte dazu die Adresse des Lokalen Verzeichnisses an.");
DEFINE("_RSSCHANNELTITLEPRE","Letzte Videos in ");
DEFINE("_RSSCHANNELTITLEPOST","Kategorie");
DEFINE("_RSSLATESTVIDEOSCATDESCPRE","Dieses feed enthält letztes video von");
DEFINE("_RSSLATESTVIDEOSCATDESCPOST","Seite");

DEFINE("_CLISKHERETOSTART","Klicke hier um zu starten");
DEFINE("_DISABLEPRO","Pro Features ausschalten");
DEFINE("_DISABLEPROINFO","Wenn es probleme mit den Pro features geben sollte, wie z.B änderungen an den Video Servern, kannst du dir Pro funktionen vorübergehend ausschalten bis das Problem gelöst ist.");

DEFINE("_TAGS","Tags");
DEFINE("_DIAGNOSTICS","Diagnose");
DEFINE("_FILESYSTEM","File System"); 
DEFINE("_TEHERAREOWNERSHIPPROBLEMS","Auf deinem System sind einige probleme mit den Verzeichnissrechten. Du kannst einige Probleme lösen. Wenn Störungen auftreten, ändere die Rechte zu den problematischen Verzeichnissen auf 777. Aber wenn du keine Probleme hast, raten wir die Rechte auf das sicherere 755 zu setzen");  
DEFINE("_THEREAREMISSINGFILES","Es fehlen einige Dateien im Seyret Verzeichnis. Aufgrund von Rechte problemen sind sie nicht automatisch erstellt worden. Du wirst Probleme mit Seyret bekommen. Versuche unten per FTP dieses Problem zu lösen.");  
DEFINE("_MISSING","FEHLEN");
DEFINE("_FTPSERVER","Ftp Server");
DEFINE("_FTPUSERNAME","Ftp Benutzername");
DEFINE("_FTPPASSWORD","Ftp Passwort");
DEFINE("_JOOMLAROOT","Joomla Root");
DEFINE("_TRYFTP","Versuche FTP");
DEFINE("_NEEDFTP_LAYER","FTP Zugang Details");
DEFINE("_FTPSERVERINFO","Gebe FTP Server für diese Seite ein. Zum Beispiel: ftp.example.com");
DEFINE("_FTPUSERNAMEINFO","Gebe deinen ftp Benutzernamen ein");
DEFINE("_FTPPASSWORDINFO","Gebe dein ftp Passwort ein");
DEFINE("_JOOMLAROOTINFO","Hauptverzeichnis für deine Joomla installation. Sei vorsichtig damit. Das ist keine vollständige adresse des Verzeichnisses. Es ist relativ zu deinem FTP Zugang. Beispiele: / www oder / httpdocs");
DEFINE("_THEREARENOPROBLEMS","Es gibt keine Probleme mit dem Seyret Dateisystem auf deiner Website.");
DEFINE("_DIRECTORY","Verzeichnis"); 
DEFINE("_OWNER","Eigentümer"); 
DEFINE("_ACCESS","Zugang"); 
DEFINE("_RESULT","Ergebnis"); 
DEFINE("_CONNECTION","Verbindung");
DEFINE("_CACHE","Cache");
DEFINE("_CLEARVIDEOCACHE","Klicke hier um video cache zu leeren");

DEFINE("_GOOGLECONNECTCHECK","Google verbinden");
DEFINE("_CONNECTED","Verbunden");
DEFINE("_GOOGLECONNECTCHECKINFO","Dies ist ein Verbindungstest zum Server.");
 

// 0.2.7 	*** added by Balaam ***
DEFINE("_NORIGHTS","Du scheinst nicht über ausreichende Rechte für den Zugriff auf diese Funktion zu haben. <br/> Bitte wende dich an deinen System-Administrator oder Webmaster.");

//0.2.7.7 starts
DEFINE("_CONVERSION","Umwandlung");
DEFINE("_FFMPEGPATH","FFMPEG Pfad");
DEFINE("_FFMPEGPATHINFO","Gebe den Pfad für ffmpeg ein. ");
DEFINE("_VIDEOCONVERSION","FLV Umwandlung");
DEFINE("_ENABLEFLVCONVERSION","FLV Umwandlung aktivieren");
DEFINE("_ENABLEFLVCONVERSIONINFO","Diese Option funktioniert nur mit Seyret PRO. Wenn du Probleme mit der flv Wandlung hast oder wenn du nicht über einen starken Server verfügst, kannst du die flv Umwandlung deaktivieren.");
DEFINE("_ENABLEAUTOMATICTHUMBNAILEXTRACTION","Generieren von Thumbnails aktivieren");
DEFINE("_ENABLEAUTOMATICTHUMBNAILEXTRACTIONINFO","Diese Option funktioniert nur mit Seyret PRO. Wenn du Probleme mit dem generieren von Vorschaubildern hast, kannst du es es deaktivieren.");
DEFINE("_INSTANTVIDEOPROCESS","Instant Video-Konvertierung-Prozess");
DEFINE("_INSTANTVIDEOPROCESSINFO","Wenn du ja wählst, werden hoch geladene Videos nur nach dem Hochladen bearbeitet. Wenn du nein wählst, werden sie nicht verarbeitet. Hoch geladene Videos werden gespeichert und zur Warteschlange zum Konvertieren hinzugefügt. Der Administrator wird es dann konvertieren.");
DEFINE("_INSTANTTHUMBPROCESS","Instant Thumbnails");
DEFINE("_INSTANTTHUMBPROCESSINFO","Wenn du ja wählst, werden die Thumbnails für deine hoch geladenen Videos sofort erzeugt. Wir empfehlen diese Funktion, so dass deine Nutzer in der Lage sein werden, sich ihre Thumbnails für ihre Videos auszuwählen.");
DEFINE("_VIDEODIMENSIONS","FLV Dimensionen");


DEFINE("_VIDEODIMENSIONSINFO","Stelle hier deine flv größe ein. Vergiss nicht: größer erzeugt auch eine größere Datei. Versuche also das optimale für deine Bedürfnisse und deinem Server zu finden.");
DEFINE("_AUDIOBITRATE","Audio Bitrate");
DEFINE("_AUDIOBITRATEINFO","Definiere Audio Bitrate für die erzeguten flv Dateien.  Voreingestellt ist 64");
DEFINE("_AUDIOSAMPLINGFREQUENCY","Audio Sampling Frequenz");
DEFINE("_AUDIOSAMPLINGFREQUENCYINFO","Definiere Audio Sampling Frequenz für erzeugte flv Dateien. Voreingestellt ist 44100.");
DEFINE("_VIDEOFRAMERATE","Video Frame Rate");
DEFINE("_VIDEOFRAMERATEINFO","Stelle die Bildwiederholungsfrequenz ein. Voreingestellt ist 25");
DEFINE("_VIDEOBITRATE","Video Bitrate");
DEFINE("_VIDEOBITRATEINFO","Stelle die Video Bitrate ein. Voreingestellt ist 200");
DEFINE("_THUMBNAILEXRACTION","Thumbnail generieren");
DEFINE("_THUMBNAILDIMENSIONS","Thumbnail Dimensionen");
DEFINE("_THUMBNAILDIMENSIONSINFO","Stelle die Thumbnail größen hier ein.");
DEFINE("_THUMBNAILDIMENSIONSBIG","Große Thumbnail Dimensionen");
DEFINE("_THUMBNAILDIMENSIONSBIGINFO","Das wird ein großes Thumbnail erzeugen. Es wird als Vorschaubild eines Flash Players genutzt.");
DEFINE("_SCREENSHOTSECOND","Ein zweites Bild");
DEFINE("_SCREENSHOTSECONDINFO","Stelle die Standard-Zeit zu generieren des Thumbnails ein. Auf einigen Videos mit 00:00:00 werden ein schwarzes Bild ergeben, deshalb ist standardmäßig 00:00:05 eingestellt.");
DEFINE("_UNPROCESSEDFILEINFO","Es befindet sich ein unbearbeitetes Video auf deinem Account. Wenn du es tauschen möchtest, musst du den Veröffentlichung-Prozess beenden lassen. Wenn du nicht weiter machst, werden deinen hoch geladenen Videos nach einer Frist gelöscht.");
DEFINE("_UPLOADEDFILENAME","Datei Name");
DEFINE("_UPLOADEDDATE","Upload Datum");
DEFINE("_SELECTVIDEOSTOUPLOAD","Wähle Videos");
DEFINE("_SELECTVIDEOSTOUPLOADINFO","Wähle die Videos aus, die du hoch laden möchtest. Nach der Auswahl werden sie in die Warteschleife zum hoch laden hinzugefügt.");
DEFINE("_SELECTTHUMBSTOUPLOAD","Wähle Thumbnail");
DEFINE("_SELECTTHUMBSTOUPLOADINFO","Du kannst ein Vorschaubild für dein Video hochladen. Versuche ein Vorschaubild hochzuladen was dein Video repräsentiert.");
DEFINE("_BROWSEFILES","Durchsuche Dateien");
DEFINE("_UPLOADINGFILE","Hochladen");
DEFINE("_UPLOADCOMPLETE","Fertiggestellt!");
DEFINE("_REMOVEFROMQUEUE","Aus der Warteschleife entfernen");
DEFINE("_VIDEOFILES","Video Dateien");
DEFINE("_MAXFILESIZEEXCEEDS","Diese Datei überschreitet die maximale Dateigröße.");
DEFINE("_MAXIMUM","Max");
DEFINE("_UPLOADQUEUE","Warteschleife zum Hochladen");
DEFINE("_UPLOADQUEUEINFO","Überprüfe die ausgewählten Dateien und starten Sie das Hochladen.");
DEFINE("_STARTUPLOAD","Start Upload");
DEFINE("_INPROCESSPLEASEWAIT","Warten bitte, Upload Ergebnis wird geprüft...");
DEFINE("_TERMSOFUSEINFO","Bitte lese die Nutzungsbedingungen sorgfältig durch.");
DEFINE("_TERMSOFUSE","AGB");
DEFINE("_ACCEPTTERMSOFUSE","Ich habe die Nutzungsbedingungen gelesen und akzeptiere alle Punkte.");
DEFINE("_DENYTERMSOFUSE","Ich akzeptiere die Nutzungsbedingungen nicht. Ich will deinstallieren.");
DEFINE("_DENYCONFIRMINFO","Wenn du die Nutzung nicht akzeptierst, solltest du Seyret komplett deinstallieren.<br>Wenn du hier deinstallieren wählst, werden alle Datenbank-Tabellen entfernt.");
DEFINE("_DENYCONFIRM","BESTÄTIGEN");
DEFINE("_ILLREADTERMSAGAIN","Ich möchte die Nutzungsbedingungen erneut lesen.");
DEFINE("_ILLUNINSTALL","Ich bin mir sicher. Ich möchte komplett deinstallieren.");
DEFINE("_NOCOMMENT","Kein Kommentar");
DEFINE("_CANSEEEDITVIDEOBUTTON","Kann die Schaltfläche ´Bearbeiten´ für alle Videos sehen");
DEFINE("_CANEDITANYVIDEO","Kann alle Videos bearbeiten");
DEFINE("_CANEDITOWNVIDEO","Kann eigene Videos bearbeiten");
DEFINE("_CANDELETEANYVIDEO","Kann alle Videos löschen");
DEFINE("_CANDELETEOWNVIDEO","Kann eigene Videos löschen");
DEFINE("_USEJOOMLAEDITOR","Benutze den Joomla Editor");
DEFINE("_USEJOOMLAEDITORINFO","Wenn du ja wählst, wird beim Video input Prozess für die Details der Videos der HTML Editor von Joomla verwendet. Auf einigen Editoren, kann dies zu einem Sicherheits-Problemen führen.");
DEFINE("_RSSCHANNELTITLEALLCATEGORIES","Aktuelle Filme in allen Kategorien");
DEFINE("_RSSCHANNELTITLEHIGHESTRATEDPRE","Höchst bewertete Videos in");
DEFINE("_RSSCHANNELTITLEHIGHESTRATEDPOST","Kategorie");
DEFINE("_RSSCHANNELTITLEALLCATEGORIESHIGHESTRATED","Höchst bewertete Videos in allen Kategorien");
DEFINE("_RSSVIDEOSCATDESCPRE","Dieser Feed enthält die Videos von");
DEFINE("_RSSVIDEOSCATDESCPOST","Site");
DEFINE("_GENERATERSSFEEDINFO","Bitte wähle unten deinen Feed-Typ und Feed-Optionen aus. Der Feed Link wird automatisch aktualisiert wenn du die Optionen änderst.");

DEFINE("_ALLCATEGORIES","Alle Kategorien");


DEFINE("_VIDEOUPLOADISSUCCESS","Deine Datei ist erfolgreich hoch geladen worden.");
DEFINE("_VIDEOCONVERTSUCCESS","Dein Video ist erfolgreich verarbeitet worden.");
DEFINE("_VIDEOCONVERTPOSTPONED","Dein Video wird bald vom Admin verarbeitet.");
DEFINE("_VIDEOCONVERTNOTSET","Auf diesem Server ist die Video-Konvertierung nicht gesetzt.");




DEFINE("_UPLOADCONTROL","Upload Check");
DEFINE("_CONVERSIONCHECK","Video konvertierung");
DEFINE("_THUMBNAILCHECK","Thumbnail erzeugung");
DEFINE("_GETTINGINPUTFORM","Eingabeformular anfordern");
DEFINE("_PLEASEFILLTHEDETAILSBELOW","Bitte gebe folgende Details zu deinem Video ein.");


DEFINE("_THUMBNAILSEXTRACTED","Thumbnails sind generiert worden.");
DEFINE("_THUMBNAILSEXTRACTIONBYADMIN","Thumbnails werden später vom Admin erzeugt.");
DEFINE("_NOTHUMBNAILSEXTRACT","Thumbnails werden vom System nicht generiert.");

DEFINE("_DONTEXTRACT","Nicht erzeugt");

 
DEFINE("_PLEASESELECTTHUMBNAIL","Bitte wähle ein Vorschaubild für dein Video aus");

DEFINE("_SIZEEXCEEDSERVERCONF","Hochladen fehlgeschlagen. Dein Video überschreitet die Maximalgröße der Server-Konfiguration.");
DEFINE("_SIZEEXCEEDCOMPONENTCONF","Hochladen fehlgeschlagen. Dein Video überschreitet die Maximalgröße der Komponenten-Konfiguration.");
DEFINE("_PARTIALUPLOADERROR","Das Video wurde nur teilweise hoch geladen. Bitte versuche es erneut.");
DEFINE("_UNSUPPORTEDFILETYPE","Nicht unterstützter Dateityp.");
DEFINE("_THEFILEISBIGGERPOSTMAXSIZE","Datei ist größer als die maximale Server-post-Größe.");


DEFINE("_NOTUPLOADEDERROR","Video-Datei wurde nicht hoch geladen. Bitte versuche es erneut.");
DEFINE("_SEYRETDATE","Datum");
DEFINE("_SEYRETMENU","SEYRET MENÜ");
DEFINE("_PROUPDATEERROR","Pro-Definitionen konnte nicht aktualisiert werden. Wahrscheinlich hast du ein Problem mit dem Schreibzugriff.");
DEFINE("_FORMOREINFORMATIONABOUTPRO","Hier findest du einige Informationen über die Pro-Version auf unserer Wiki. Bitte klicke dazu hier.");
DEFINE("_COULDNTCONNECTTRYLATER","Wir konnten keine Verbindung mit dem Joomlaholic-Server zur überprüfung deines Seyret Status aufbauen. Bitte versuche es zu einem späteren Zeitpunkt erneut."); 
DEFINE("_VIDEOLINK","Video Link"); 

DEFINE("_SHOWORIGINALVIDEOLINK","Zeige Original Video Link"); 
DEFINE("_SHOWORIGINALVIDEOLINKINFO","Wähle ´Ja´ um einen Link auf die ursprüngliche Position unter den eingebettetem Video zu zeigen."); 
DEFINE("_ORIGINALVIDEOISHERE","Klicke hier um das Original Video zu sehen."); 

DEFINE("_FFMPEGPREEXEC","Vor dem ffmpeg ausführen"); 
DEFINE("_FFMPEGPREEXECINFO","Wenn du auf einem Shared-Hosting hostest und selbst ffmpeg kompilierst, musst du in die include libraries einige definitionen ausführen. Wenn ffmpeg von deinem Hoster installiert worden ist, dann lasse diesen Wert einfach leer."); 

DEFINE("_CACHEDIRISMISSINGPLEASECREATE","Folgender Cache-Ordner konnte vom System nicht erstellt werden. Bitte erstelle ihn manuell und gebe ihm entsprechende Lese-und Schreibrechte."); 

DEFINE("_ERRORREPORTING","Fehler Meldung");
DEFINE("_ERRORREPORTINGINFO","Du kannst dein System Fehlerbericht hier definieren.");
DEFINE("_NOERRORREPORT","Keinerlei Fehlermeldungen mitgeteilt");
DEFINE("_SHOWERRORSEXCEPTNOTICES","Zeige alle Fehler außer den Hinweisen");
DEFINE("_SHOWERRORSINCLUDINGNOTICES","Zeige alle Fehler inklusive den Hinweisen");
DEFINE("_PLAYTIME","Spielzeit");
DEFINE("_SECONDS","Sekunden"); 

//--------------------------------------------


DEFINE("_APPLIEDVIDEOLINK","Video Link");
DEFINE("_TAGLIST","Tags");
DEFINE("_VIDEODESCRIPTION","Description");
DEFINE("_CATEGORYLISTSELECT","Category");
DEFINE("_SERVERTYPE","Server Type");
DEFINE("_SERVERCODE","Server Code");
DEFINE("_THUMBNAIL","Thumbnail");
DEFINE("_ADDEDDATE2","Added");
DEFINE("_PUBLISHSELECT","Publish Status");
DEFINE("_SUBMITDETAILSCLICK","Details");

DEFINE("_FEATUREDVIDEOS","Spezial");
DEFINE("_LATESTVIDEOS","Neuste");
DEFINE("_HIGHESTRATEDVIDEOS","Hoch bewertet");
DEFINE("_MOSTDISCUSSEDVIDEOS","Meist diskutiert");
DEFINE("_MOSTVIEWEDVIDEOS","Meist gesehen");
DEFINE("_READMORE","Mehr");
DEFINE("_LESS","Weniger");
DEFINE("_INCATEGORY","Kategorie");
DEFINE("_INCHANNEL","Kanal");
DEFINE("_DISPLAYSTYLE","Display");
DEFINE("_CATIDS","Category Ids");

DEFINE("_SEARCHVIDEOS","Search Videos");
DEFINE("_SMALLSTATISTICSPRE","Total ");
DEFINE("_SMALLSTATISTICSPOST"," videos");
DEFINE("_VIDEOSINCATEGORYPRE","Videos in ");
DEFINE("_VIDEOSINCATEGORYPOST"," category");
DEFINE("_GUEST"," Gast");

DEFINE("_JOINED"," Joined");
DEFINE("_OWNEDVIDEOSCOUNT"," Videos");
DEFINE("_THISVIDEOINFORMATION","This Video");
DEFINE("_THISVIDEOINFORMATIONMORE","Other Information");
DEFINE("_SUBSCRIBETHISCHANNEL","Subscribe this channel");
DEFINE("_DIRECTURL"," URL");
DEFINE("_EMBED"," Embed");

DEFINE("_FULLSCREENBTN","Full Screen");
DEFINE("_DOWNLOADBTN","Download");
DEFINE("_REPORTBTN","Melden");
DEFINE("_DELETEBTN","Löschen");
DEFINE("_EDITBTN","Editieren");
DEFINE("_REFRESHBTN","Aktualisieren");

DEFINE("_ABOUTTHISVIDEO","Informationen");


DEFINE("_CATEGORIESQUICKLIST","Quick List");
//-----------------------
 
//These lines are for 0.2.8 not in 0.2.7. please don't ask. just working

DEFINE("_VIDEOINPLAYLIST","Videos:");

?>