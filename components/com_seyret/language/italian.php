<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

//Seyret Component v.0.2.7.8//
/**
* Content code
* @ package SEYRET
* @ Copyright (C) 2007 Mustafa DINDAR
* @ All rights reserved
* @ Seyret Component is Free Software
* @ Released under GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
* @ Version 0.2.7
**/	


//This component is translated in italian by wd1985 from www.3elementi.it and by lino www.cripalmanova.it.

DEFINE("_COMPONENT_NAME","Sistema di video elencazione Seyret");
DEFINE("_JUMPTO","Salta a");
DEFINE("_VIDEOLISTHEADERPRE","Video in \"");
DEFINE("_VIDEOLISTHEADERSUF","\" categoria");
DEFINE("_HIT","Vedi");
DEFINE("_VIDEOTITLE","Titolo");
DEFINE("_DETAILS","Dettagli");
DEFINE("_RATING","Valutazione");
DEFINE("_NUMBEROFVOTE","Voti");
DEFINE("_NOVOTE","Nessun voto");
DEFINE("_LOGINFORVOTE","Devi loggarti per votare!");
DEFINE("_THANKSFORVOTE","Grazie per il tuo voto!");
DEFINE("_WAITAMOMENT","Attendi prego...");
DEFINE("_TOPLEVEL","Top");
DEFINE("_VIDEOGROUPTITLE","Categorie video");
DEFINE("_CATEGORIES","Categorie");
DEFINE("_VIDEOS","Video");
//DEFINE("_GENERALCONFIG","Generale");
DEFINE("_EXPANDALL","Espandi tutto");
DEFINE("_CLOSEALL","Chiudi tutto");
DEFINE("_VIDEO_CATEGORIES","Categorie video");
DEFINE("_VIDEOCAT_CODE","Codici categorie");
DEFINE("_VIDEOCAT_NAME","Nome categoria");
DEFINE("_VIDEOCAT_PARENT","Categorie collegate");
DEFINE("_EDIT_CATEGORY","Edita categoria");
DEFINE("_NEW_CATEGORY","Nuova categoria");
DEFINE("_NEWVIDEOCATCOMMENT","Qui, puoi creare una nuova categoria video. Per piacere non dimenticarti di selezionare le categorie collegate se questa è una sottocategoria.");
DEFINE("_DEVELOPER","Sviluppatore");
DEFINE("_INFO","Info");
DEFINE("_SEYRETTHANKS","Grazie a");
DEFINE("_VERSION_INFO","Versione");
DEFINE("_COPYRIGHT","Copyright");
DEFINE("_LICENSE","Licenza");
DEFINE("_YOUTUBEID","Id sviluppatore YouTube");
DEFINE("_YOUTUBEIDINFO","Qui puoi inserire il tuo <b>Id sviluppatore Youtube </b> in prospettiva di un utilizzo completo delle funzionalità del componente. Il componente prende le sue informazioni video da Youtube usando questo ID. Se non inserisci questo ID, dovrai inserire manualmente tutte le informazione come indirizzo thumbnail, codice server, etc.");
DEFINE("_TITLELENGTH","Lunghezza titolo");
DEFINE("_TITLELENGTHINFO","Per piacere inserisci la lunghezza titolo da usare negli elenchi video. Puoi cambiare questo valore per cercare la lunghezza ottimale, dipende dal tuo template.");
DEFINE("_DETAILSLENGTH","Lunghezza dettagli");
DEFINE("_DETAILSLENGTHINFO","Per piacere inserisci la lunghezza dettagli da usare negli elenchi video. Puoi cambiare questo valore per cercare la lunghezza ottimale, dipende dal tuo template.");
DEFINE("_CONFIG_OK","Configurazione salvata!");
DEFINE("_CONFIG_ERR","Errore: non può essere salvata la configurazione!");
DEFINE("_VIDEOWIDTH","Larghezza video");
DEFINE("_VIDEOWIDTHINFO","Larghezza video nel front end. Puoi cambiare questo valore per cercare la larghezza ottimale, dipende dal tuo template.");
DEFINE("_VIDEOHEIGHT","Altezza video");
DEFINE("_VIDEOHEIGHTINFO","Altezza video nella front page. Puoi cambiare questo valore per cercare l'altezza ottimale, dipende dal tuo template.");
DEFINE("_VIDEO_LIST","Lista video");
DEFINE("_VTHUMB","Thumbnail");
DEFINE("_VIDEO","Video");
DEFINE("_EDIT_VIDEO","Edita video");
DEFINE("_NEW_VIDEO","Nuovo video");
DEFINE("_VSERVERTYPE","Tipo server");
DEFINE("_VSERVERCODE","Codice server");
DEFINE("_NEWVIDEOCOMMENT","La migliore strada per inserire un nuovo video è tramite il front end con l'admin login. Da qui, puoi solo inserire il link video ed il sistema automaticamente automaticamente richiamerà tutte le informazioni video. Nel back end, puoi inserire manualmente tutte le informazioni video.");
DEFINE("_APPLY","Applica");
DEFINE("_SAVE","Salva");
DEFINE("_INPUTLINK","Inserisci link");

//Version 0.2=============================================================================================

DEFINE("_ISTHISFRESHINSTALL","Non sono disponibili le tabelle datbase Seyret.<br><strong>Attenzione alle perdite di dati.</strong><br>");
DEFINE("_IFTHISISFRESHINSTALL","SE QUESTA E' UNA NUOVA INSTALLAZIONE");
DEFINE("_IFTHISISUNINSTALL","SE VUOI DISINSTALLARE QUESTO COMPONENTE");
DEFINE("_THISWILLDROPTABLES","per completare l'installazione, devi solo cliccare sulla figura sottostante.");
DEFINE("_INSTALLATTENTION","<strong>In questa operazione tutte le tabelle dati saranno rimpiazzate.</strong>."); 
DEFINE("_FRESHINSTALLSUCCESS","Database Seyret installato con successo.");
DEFINE("_UNINSTALLEXPL","Hai rimosso con successo tutte le tabelle database Seyret.<br><br>Non dimenticare adesso di disinstallare Seyret dal tuo component manager Joomla.");
//DEFINE("_THISISANUPDATEINFO","Se vuoi aggiornare il componente Seyret.<br><b>Sfortunatamente, questa procedura non protegge il vecchio database Seyret, perderai tutti i tuoi video.<br>Provvederemo ad un aggiornamento database nelle prossime versioni.</b>");
DEFINE("_THISISANUPDATE","AGGIORNA");
DEFINE("_JOOMLAALEMMESSAGE","Joomlaholic Board");
DEFINE("_YOUDONTWANTTRACKING","Non ti garantisce i permessi per l'alimentazione messaggi. Questo significa che non riceverai nessun annuncio di rilascio aggiornamenti o per sicurezza qui. Ti avviseremo con un messaggio aperto tramite il pannello configurazione.");
DEFINE("_VERSIONTRACKINGINFO","<b>Qui potete selezionare se aprire i messaggi di Joomlaholic oppure no.<br><br>Se selezionate sù, il sistema collegherà all'assistente di Joomlaholic ed automaticamente richiamerà una nuova identificazione usuario di Joomlaholic per il vostro luogo. <br><br><Allora potrete vedere i messaggi di Joomlaholic nel vostro admin rivestire e sarete comunicati di nuovi versioni o aggiornamenti di sicurezza.<br><br>La vostra identificazione usuario di Joomlaholic inoltre sarà usata per la video caratteristica di trasferimento dal sistema centrale verso i satelliti.<br><br>Se scegliete di non ricevere queste notifiche, il sistema non si collegherà agli assistenti di Joomlaholic.<b>");
DEFINE("_PLEASESELECTTRACKINGCHOICE","SELEZIONA PER FAVORE");
DEFINE("_THEME","tema");
DEFINE("_THEMEINFO","Per favore seleziona la Skin del componente Seyret che vuoi usare nel tuo sito.");
DEFINE("_ADDVIDEO","Aggiungi video");
DEFINE("_PENDINGVID","Video in attesa");
DEFINE("_SORTBY","Ordinato per");
DEFINE("_NOSERVERFOUNDREPORTIT","Scusa, ma non possiamo trovare un appropriato video server che possegga il tuo link video. Se sei sicuro che il tuo link video è corretto, per piacere contatta gli amministratori del sito.");
DEFINE("_ADDEDBY","Aggiunto da");
DEFINE("_ADDEDDATE","Data");
//DEFINE("_YOUSHOULDLOGINTOADDVIDEO","Devi loggarti per aggiungere i video.");
DEFINE("_ASCENDING","Ascendente");
DEFINE("_DESCENDING","Discendente");
DEFINE("_POPUPVIDEOWIDTH","Larghezza video popupPopup video width");
DEFINE("_POPUPVIDEOHEIGHT","Altezza video popup");
DEFINE("_DEFAULTSORTBY","Tipo di video standard");
DEFINE("_DEFAULTSORT","Ordine di video standard");
DEFINE("_POPUPVIDEOWIDTHINFO","Per piacere definisci larghezza video per la finestra popup qui. Le dimenzioni della finesta devono essere 100px più grandi che per le dimensioni dei video embedded.");
DEFINE("_POPUPVIDEOHEIGHTINFO","Per piacere definisce l'altezza video per le finestre popup qui.");
DEFINE("_DEFAULTSORTBYINFO","Per favore seleziona i criteri standard di ordine per."); 
DEFINE("_DEFAULTSORTINFO","Per piacere seleziona il tipo di ordine standard, ascendente o discendente."); 
DEFINE("_THISAREAISONLYFORREGISTEREDUSERS","Solo gli utenti registrati possono scaricare i video. Per piacere loggin o registrati.");  
//DEFINE("_COPYTHISLINK","Copia link");  
DEFINE("_YOURUSERIDRESTORED","Il tuo ID utente è stato ripristinato con successo!");   
DEFINE("_YOURUSERIDGENERATED","Il tuo ID utente è stato generato con successo!");   
DEFINE("_YOURUSERIDPROBLEM","Sembra ci sia un problema con il tuo user Id Joomlaholic, prova a toglierlo dal database. Questo potrebbe accadere quando muovi il tuo sito. Aggiorna la pagina per prendere un nuovo ID utente Joomlaholic.");  
DEFINE("_YOUDONTHAVEADMINISTRATORRIGHTS","Non hai il permesso di editore o amministratore! Se hai questi permessi e vedi questo messaggio, potresti avere problemi ACL. Per controllare i video pendenti, devi usare il backend amministratore.");
DEFINE("_IFPUBLISHED","Stato pubblicazione");
DEFINE("_YES","Si");
DEFINE("_NO","No");
DEFINE("_ENABLEDOWNLOADS","Abilita download");
DEFINE("_ENABLEDOWNLOADSINFO"," Questa è una caratteristica della versione pro. Se il tuo Seyret non è pro, l'opzione download non funziona.");
DEFINE("_JALEMUSERID","ID utente Joomlaholic"); 
DEFINE("_JALEMUSERIDINFO","Id utente Joomlaholic del tuo sito. Questo verrà usato in tutte le operazioni Joomlaholic."); 
DEFINE("_DONATIONS","Donazioni"); 
DEFINE("_DONATIONHEADER","Donazioni"); 
DEFINE("_YOUHAVENTDONATEDYET","Sembra che non hai ancora fatto una donazione.");
DEFINE("_YOUHAVENTDONATEDSTEP1","<b>Step-1: </b> Clicca una volta sul logo Paypal con l'ammontare della donazione ed entrerai nelle pagine Donazioni di Paypal. Nella pagina Paypal, il tuo Id utente Joomlaholic sarà incluso.");
DEFINE("_YOUHAVENTDONATEDSTEP2","<b>Step-2: </b>Dopo che hai fatto la donazione, per piacere inserisci l'ammontare sottostante e clicca invia. <p><b>Questo servirà per informarci a riguardo della tua donazione.</b>  Dopo il tuo invio, il download video sarà abilitato automaticamente una volta che avremo controllato l'account. Se la donazione è valida, sarà approvata, altrimenti sarà respinta e la caratteristica download video sarà disabilitata."); 
DEFINE("_SUBMIT","Sottoscriti ed abilita i download"); 
DEFINE("_INFORMJOOMLAALEM","Informa Joomlaholic sull'ammontare della donazione: "); 
DEFINE("_YOURDONATIONAPPROVED","La tua donazione è approvata. Puoi usare l'opzione download da adesso. <p>Grazie per la tua donazione."); 
DEFINE("_YOURDONATIONPENDING","La tua donazione è pendente. Puoi andare nel menu configurazione ed abilitare l'opzione download. <p>Se la tua donazione non sarà approvata, l'opzione download sarà nuovamente disabilitata per il tuo sito. <p>Grazie per la donazione."); 
DEFINE("_YOURDONATIONREJECTED","La tua donazione è stata respinta. <p>Sfortunatamente non abbiamo potuto approvare la tua donazione. <p>Se pensi che sia un errore, contattaci via email."); 
DEFINE("_UNINSTALL","Disinstalla"); 
DEFINE("_CAUTION","Pericolo"); 
DEFINE("_CAUTIONUNINSTALL2","Questa operazione rimuoverà permanentemente tutte le tabelle database di Seyret. <p>Se sei sicuro di rimuovere le tabelle database Seyret, clicca l'immagine sottostante."); 
DEFINE("_CAUTIONUNINSTALL3","Questa operazione disinstallerà solamente le tabelle database Seyret. Dopo di che, potrai rimuovere il componente Seyret usando il Manager Installazione/Disinstallazione Componenti di Joomla per completare la disinstallazione."); 
DEFINE("_UNINSTALLDATABASESUCCESS","Tabelle database Seyret rimosse con successo!");
DEFINE("_NOJALEMUSERID","Non hai un valido Id utente Joomlaholic!<p>Non puoi contattare Joomlaholic senza un valito Id utente.<p>Il message feeding probabilmente è disattivato. Puoi attivare il messaggio feedin dal pannello configurazione. <p>Il tuo Id utente sarà allora aumentativamente generato.");
DEFINE("_MESSAGEFEED","Messaggio Feed"); 
DEFINE("_MESSAGEFEEDINFO","Qui puoi selezionale lo stato del messaggio feed. Se tu non hai un Id utente Joomlaholic, avvisaci per dartene uno. Se sei abilitato al messaggio feed, riceverai automaticamente un Id utente per il tuo sito. Se hai disattivato il tracking, il tuo Id utente non sarà cancellato. Allora, se tu rinstalli completamente Seyret, il tuo vecchio Id utente sarà ripristinato dai server Joomlaholic."); 
DEFINE("_ENABLED","Abilitato"); 
DEFINE("_DISABLED","Disattivato"); 
DEFINE("_VIDEOCOUNTINVLIST","Video #");
DEFINE("_VIDEOCOUNTINVLISTINFO","Qui puoi definire il numero di video che vuoi vedere nella lista video sulla prima pagina.");
DEFINE("_DELETEVIDEOCONFIRMMESSAGE","Questo video sarà cancellato permanentemente. Sei sicuro?"); 
DEFINE("_DELETETHISVIDEO","Cancella questo video");
DEFINE("_PUBLISH","Pubblica");  
//that's enough for 0.2. Let's leave something to 0.3 :)

DEFINE("_PUBLISHED","Pubblica");  
DEFINE("_UPLOADVIDEO","Inoltra video"); 
DEFINE("_UPLOADVIDEOINFORM","<b>1-</b> Puoi inoltrare video in questa sezione. Per favore non inoltrare video che non sono in armonia con i contenuti da noi accettati. <br/><b> fai attenzione a inoltrare solo video in flv. In caso negativo utilizza Il tasto di Inoltro video.</b>"); 
DEFINE("_UPLOADANDGOTONEXT","Inoltra il video e prosegui al prossimo passo"); 
DEFINE("_UPLOADTHUMBNAILINFORM","<b>2-</b> Tu puoi anche inoltrare una video thumbnail. Cerca di inoltrare un thumbnail che richiami bene il tuo video. <br/> <b>Per favore utilizza solo GIF, JPG or PNG files.</b><br/> Se tu non hai una thumbnail per questo video, non ti preoccupare. non dimenticare di controllare il box in basso."); 
DEFINE("_NOTHUMBNAILFORTHISVIDEO","Non inoltrerà una thumbnail per il mio video."); 
DEFINE("_COPY","Copia");  
DEFINE("_THISISANUPDATEINFO","Sembra che vuoi upgradare il tuo componente Seyret.<br><b>Lo script di Upgrade non cancellerà le tue tabelle database Seyret.<br>Ma ti consigliamo di effettuare un backup del database.</b>");
DEFINE("_DBVERSION_INFO","Vecchia versione"); 
DEFINE("_NEWVERSION_INFO","Puoi upgradare alla versione"); 
DEFINE("_PROCEEDUPGRADE","Per procedere le operazioni di upgrade devi solo cliccare l'immagine sottostante"); 
DEFINE("_UPGRADEATTENTION","Se pensi che qualcosa sia sbagliato dopo il tuo upgrade, ristora le tue tabelle dal file backup ed per piacere informaci. www.joomla-alem.com"); 
DEFINE("_UPGRADESUCCESS","Seyret è stato upgradato con successo!");  
DEFINE("_USERSUPLOADVIDEO","Utente può inoltrare video");  
DEFINE("_USERSUPLOADVIDEOINFO","Perfavore defisci i permessi dell'utente in merito all'inoltro di video.");  
DEFINE("_VIDEOMAXSIZE","Grandezza video massima");  
DEFINE("_VIDEOMAXSIZEINFO","Massima grandezza per gli upload video degli utenti in <b>MBytes</b>. Questo valore deve essere intero. Presta attenzione al limite upload in php.ini .");  
DEFINE("_THUMBMAXSIZE","Grandezza massima thumbnail");  
DEFINE("_THUMBMAXSIZEINFO","Grandezza massima per le thumbnail caricate dagli utenti in <b>MBytes</b>.  Questo valore deve essere intero. Presta attenzione al limite caricamento in php.ini.");  
DEFINE("_RESIZETHUMBWIDTH","Seleziona la larghezza delle Thumbnail"); 
DEFINE("_RESIZETHUMBWIDTHINFO","Carica thumbnail video che saranno riadattate. Questo valore definisce la larghezza delle thumnail."); 
DEFINE("_EMBEDBOXWIDTH","Larghezza Embed Box"); 
DEFINE("_EMBEDBOXWIDTHINFO","Questo valore definisce la larghezza del collegamento embed ed il box dove copiare il collegamento."); 
DEFINE("_ADDVIDEOINFO","Per piacere copia ed incolla il tuo collegamento video nel box inserimento e clicca il bottone 'Applica'. <b>Per piacere presta attenzione al formato correto del collegamento video. </b> Allora clicca il pottone 'Salva'. Per maggiori informazioni per piacere visita le pagine di aiuto."); 

// please delete or comment  _THISISANUPDATEINFO line on 80
// pay attention, in  line 115 $3 is changed to $5
//0.2.3. end

//====================================================================================
//0.2.4
DEFINE("_ADMANAGEMENT","Gestione pubblicità"); 
DEFINE("_TOP","Top"); 
DEFINE("_ADLINK","Collegamento pubblicità"); 
DEFINE("_REMOTESERVERFILES","Lista file sul server pubblicità"); 
DEFINE("_NEWADCOMMENT","Seleziona categoria per la pubblicità. Puoi inserire un collegamento Flv  che non è elencato nella lista selezione."); 
DEFINE("_REMOTESERVERADDRESS","La tua cartella pubblicità sul server remoto"); 
DEFINE("_AD","Video Pubblicità"); 
DEFINE("_NEW_AD","Nuova pubblicità"); 
DEFINE("_EDIT_AD","Edita pubblicità"); 
DEFINE("_PARENT","Parent"); 

//0.2.5
DEFINE("_VIDEOURL","URL");  
DEFINE("_VIDEOEMBEDCODE","Embed"); 
DEFINE("_VOTEIT","Votalo");
DEFINE("_LOGINTOVOTE","Login per votare");
DEFINE("_GENERALCONFIG","Generale"); //comment line 31
DEFINE("_CONFIG","Configurazione"); 
DEFINE("_ADSCONFIG","Pubblicità");
DEFINE("_EXTRAS","Extra");
DEFINE("_WRITEHELP","Scrivi aiuto");
DEFINE("_SNIPPETS","HTML Snippet");
DEFINE("_WRITEHELPCOMMENT","Se tu usi il sistema di aiuti, puoi scrivere le tue pagine di aiuto.");
DEFINE("_SNIPPETCOMMENT","Se vuoi usare uno snippet dopo un codice video embed, scrivilo qui.");
DEFINE("_REPORTVIDEOINFORM","Per piacere scrivi la ragione del tuo report. I nostri moderatori controlleranno il tuo report in breve.");
DEFINE("_VIDEOID","Id Video");
DEFINE("_REPORTEDBY","Riportato da");
DEFINE("_REPORTEDDATE","Data rapporto");
DEFINE("_REPORTCOMMENT","Ragione rapporto");
DEFINE("_REPORTREPLY","Replica");

//line 115,148,150 changed

//0.2.6 -------------------starts
DEFINE("_VIDEOSINALLCATEGORIES","Video"); 
DEFINE("_VIDEOCAT","Categorie"); 
DEFINE("_SEARCH","Cerca"); 
DEFINE("_DISPLAY","Visualizza"); 
DEFINE("_PERMISSIONS","Permessi"); 
DEFINE("_SYSTEM","Sistema"); 
DEFINE("_USERSCREENNAME","Nome utente visualizzato"); 
DEFINE("_USERSCREENNAMECOMMENT","Puoi definire che nome visualizzare: nome utente o nome reale."); 
DEFINE("_USEREMOTESERVERSUPPORT","Usa server remoto"); 
DEFINE("_USEREMOTESERVERSUPPORTINFO","Puoi selezionare il supporto server remoto qui. Questa non è una caratteristica completa. Ci lavoreremo su. E' disegnato principalmente per un utilizzo pubblicitario."); 
DEFINE("_REMOTESERVERADSDIRECTORY","Cartella pubblicità remota"); 
DEFINE("_REMOTESERVERADSDIRECTORYINFO","Definisci la cartella pubblicitaria sul suo server remoto qui. Assicurati che questo indirizzo contenga lo speciale index.php che è uscito con il componente."); 
DEFINE("_REMOTESERVERVIDEOSDIRECTORY","Cartella video remota"); 
DEFINE("_REMOTESERVERVIDEOSDIRECTORYINFO","Definisci la cartella pubblicità sul server remoto qui. Assicurati che questo indirizzo contenga lo speciale index.php che è uscito con il componente."); 
DEFINE("_REMOTESERVERCHECKSTRING","Stringa controllo remoto"); 
DEFINE("_REMOTESERVERCHECKSTRINGINFO","Questa è una stringa di sicurezza che previene le liste cartelle non autorizzate. Cambia questa stringa nel tuo index.php remoto."); 
DEFINE("_PLEASESELECT","Per piacere seleziona...");
DEFINE("_SUPERADMINRIGHTS","Diritti Super Administrator");
DEFINE("_SUPERADMINRIGHTSINFO","Super Administrators ha pieni permessi. Non ci saranno restrizioni per loro.");
DEFINE("_RIGHTS","Diritti Accesso Seyret");
DEFINE("_CANSEEADMINTOOLBAR","Può vedere la toolbar admin");
DEFINE("_CANSEEREPORTEDVIDESBUTTON","Può vedere il bottone video reported");
DEFINE("_CANSEEPENDINGVIDESBUTTON","Può vedere il bottone video pendenti");
DEFINE("_CANSEEADDVIDEOSBUTTON","Può vedere il bottone aggiungi nuovi video");
DEFINE("_CANADDVIDEOS","Può aggiungere video");
DEFINE("_CANSEEUPLOADVIDEOSBUTTON","Può vedere il bottone carica video");
DEFINE("_CANUPLOADVIDEOS","Può caricare video");
DEFINE("_CANSEEMYVIDEOSBUTTON","Può vedere il bottone vedi miei video");
DEFINE("_CANSEEFEATUREDVIDEOSBUTTON","Può vedere il bottone video featured");
DEFINE("_CANSEESEARCHVIDEOSBUTTON","Può vedere il bottone cerca");
DEFINE("_CANSEEHELPBUTTON","Può vedere il bottone aiuto");
DEFINE("_CANSEEDELETEVIDEOBUTTON","Può vedere il bottone cancella video");
//DEFINE("_CANDELETEVIDEO","Può cancellare i video");
// DEFINE("_CANSEEEDITVIDEOBUTTON","Può vedere il bottone edita video");
// DEFINE("_CANEDITVIDEO","Può editare i video");
DEFINE("_CANSEEFULLSCREENBUTTON","Può vedere il bottone a tutto schermo");
DEFINE("_CANSEEDOWNLOADBUTTON","Può vedere il bottone download");
DEFINE("_CANDOWNLOADVIDEO","Può scaricare i video");
DEFINE("_CANSEEREPORTBUTTON","Può vedere il bottone report");
DEFINE("_CANREPORTVIDEOS","Può riportare video");
DEFINE("_CANSEEDIRECTLINKBOX","Può vedere il box collegamento diretto");
DEFINE("_CANSEEEMBEDBOX","Può vedere il box embed");
DEFINE("_CANSEEVOTESTARTS","Può vedere le stelle vota");
DEFINE("_CANVOTE","Può votare");
DEFINE("_CANSEECOMMENTS","Può vedere i commenti");
DEFINE("_SEYRETACL","Permessi accesso Seyret");
DEFINE("_EDIT_SEYRETACL","Scrivi permessi accesso Seyret");
DEFINE("_NEW_SEYRETACL","Nuovo permesso accesso Seyret");
DEFINE("_JACLNAME","Livello accesso Joomla");
DEFINE("_ACLCOMMENT","Per piacere utilizza i nomi accesso Joomla con molta cautela. E' molto importante usare i casi bassi qui, altrimenti potrebbe non funzionare correttamente. Per esempio, se l'Amministratore nel Joomla ACL ma qui scrivi amministratore. Potresti creare un livello accesso 'utente'.");
DEFINE("_YOUDONTHAVEPERMISSIONS","Non hai i permessi per questa operazione.<p>Se non sei loggato, per piacere fai il login al tuo account e riprova.");
DEFINE("_DOWNLOADS","Download");
DEFINE("_CANPUBLISHVIDEO","Può pubblicare i video");
DEFINE("_VIDEOADDEDSUCCESFULLY","Video aggiunto con successo. ");
DEFINE("_CANSEEVIDEOSERVERDETAILS","Può vedere i dettagli video server");
DEFINE("_AD_VIDEO_LIST","Lista video pubblicitari");
DEFINE("_REMOTESERVERSUPPORTISNOTENABLED","Il supporto sul server remoto non è abilitato. Per piacere abilitano dal pannello configurazione.");
DEFINE("_USEAJAXBROWSING","Browsing Ajax");
DEFINE("_USEAJAXBROWSINGINFO","Usa la supportata lettura rapida Ajax. Non dimenticare che è una caratteristica beta. Di default dovrebbe essere si. Se incontri problemi, devi solo disabilitarla.");
DEFINE("_TWOCOLUMNSVIDEOLIST","Lista video Multi-colunna");
DEFINE("_TWOCOLUMNSVIDEOLISTINFO","Lista video Multi-colunna nella pagina iniziale. Seleziona l'opzione che ritieni opportuna con la tua skin.");
DEFINE("_MULTICOLUMNCOUNT","Contatore Multi-colunna");
DEFINE("_MULTICOLUMNCOUNTINFO","Se la lista multi-colonna video è abilitata, per piacere definisci il numero di colonne desiderato.");
DEFINE("_YOUHAVENOACCESSRIGHTTOTHISVIDEO","Non hai diritto all'accesso di questo video. Per piacere effettua il login. Se sei già loggato, allora devi upgradare il tuo account. Devi solo cliccare <a href={accesslevelupgradelink_dontchangethis}>qui.</a>");
DEFINE("_VIDEOACCESSLEVEL","Livello accesso video");
DEFINE("_UPGRADEACCESSLEVELLINK","Collegamento upgrade livello accesso");
DEFINE("_UPGRADEACCESSLEVELLINKINFO","Se stai usando livelli accesso per i tuoi video, tu puoi inserire un link per l'upgrade livello accesso degli utenti. I tuoi utenti vedranno questo link quando loro cliccheranno un video per cui non hanno i diritti di accesso.");
DEFINE("_ACCESSLEVELCOUNT","Numero di livelli accesso");
DEFINE("_ACCESSLEVELCOUNTINFO","Se vuoi usare un livello accesso per i tuoi video, devi configurare il massimo numero di livelli di accesso. Non dimenticare che, più alto numero significa un più alto livello di accessi. Se lo lasci bianco, significa che tutti hanno accesso ai tuoi video.");
DEFINE("_VIDEOCAT_DIR","Cartella categorie");
DEFINE("_CATEGORYDIRECTORYWILLBEGENERATED","La cartella per questa categoria verrà automaticamente generata. Tutti i video per questa categoria saranno piazzati sotto questa categoria.");
DEFINE("_LOCALFILESDIRECTORY","Cartella base per i file locali");
DEFINE("_LOCALFILESDIRECTORYINFO","Cartella base per i file locali. Le cartelle categorie saranno create sotto questa cartella. Potrebbero essere in <b>/dir1/dir2</b> formato.");
DEFINE("_LOCALVIDEO","Video locale");
DEFINE("_LOCALVIDEOINFO","Se usi il video locale, seleziona il file video e la thumbnail.");
DEFINE("_VIDEOCAT_FILELIST","Lista video");
DEFINE("_VIDEOCAT_THUMBLIST","Lista Thumbnail");
DEFINE("_VIDEOSERVER","Server Video");
DEFINE("_VIDEOSERVERINFO","Se aggiungi un video da un video server - tipo youtube, google, etc.- inserisci il collegamento e clicca il bottone applica.");
DEFINE("_SERVERCODES","Codici Server");
DEFINE("_SERVERCODESINFO","Se editi un oggetto video e non sei sicuro sulle info video, per piacere non cambiare nulla qui, altrimenti potresti causare un malfunzionamento del componente.");
DEFINE("_ATTRIBUTES","Attributi");
DEFINE("_THISISABACKUPFILE","Questo è un file backup");
DEFINE("_VIDEOADS","Pubblicità video");
DEFINE("_IMAGEADS","Pubblicità immagine");
DEFINE("_USEIMAGEADSYSTEM","Usa il sistema pubblicitario immagini");
DEFINE("_IMAGEADDURATION","Durata pubblicità immagine");
DEFINE("_ISDOWNLOADABLE","Scaricabile");
DEFINE("_ALLOWURLVALUE","allow_url_fopen");
DEFINE("_ALLOWURLVALUEINFO","Vedi la tua configurazione php per allow_url_fopen che deve essere usata per leggere gli Urls.");
DEFINE("_ON","On");
DEFINE("_OFF","Off");
DEFINE("_CURLLIB","Libreria curl");
DEFINE("_CURLLIBINFO","Se questa libreria è installata, Seyret di default userà essa per leggere gli Url contenuti.");
DEFINE("_NOTINSTALLED","Non Installato");
DEFINE("_INSTALLED","Installato");
DEFINE("_SEYRETFUNCSTATUS","Funzionalità Seyret");
DEFINE("_PASSED","Passato");
DEFINE("_FAILED","Fallito");
DEFINE("_SEYRETFUNCSTATUSINFO","Se il testo sulle funzionalità di Seyret fallisce, significa che entrambe le funzioni per prendere il contenuto Url sono disabilitate e non saranno utilizzabili da Seyret. Ti consigliamo di contattare il tuo provider hosting per abilitare sia allow_url_fopen che curl.");
DEFINE("_IMAGEADDEFAULT","Immagine pubblicitaria di default");
DEFINE("_USEIMAGEADSYSTEMINFO","Quando si, l'immagine pubblicitaria sarà visualizzata prima della partenza del video.<b> Questo funziona solamente se le caratteristiche pro sono abilitate.</b>");
DEFINE("_IMAGEADDEFAULTINFO","Immagine pubblicitaria di default. Se nessuna immagine pubblicitaria è definita per una categoria, questa pubblicità sarà visualizzata di default.");
DEFINE("_IMAGEADDURATIONINFO","Durata dell'immagine pubblicitaria da visualizzare (in millisecondi).");
DEFINE("_UPLOADEDSUCCESSFULLY","Video caricato con successo. Dipende dalle configurazioni del sito, se vuoi che sia pubblicato immediatamente oppure attendere i moderatori.");
DEFINE("_ID","ID");
DEFINE("_AD_IMAGE_LIST","Lista immagini pubblicitarie");
DEFINE("_NEWIMAGEADCOMMENT","Per piacere inserisci l'Url completo della tua immagine pubblicitaria da visualizzare. Non dimenticarti di selezionale la categoria. Se definisci più di una immagine pubblicitaria in una categoria, sarà selezionata casualmente per essere visualizzata in prima pagina. Per piacere definisci l'indirizzo Url da aprire dopo il click.");
DEFINE("_REALNAME","Nome reale");
DEFINE("_UNKNOWN","Utente");  
DEFINE("_RESETMYDOWNLOADSTATUS","Clicca qui se vuoi resettare il report donazione video download"); 
DEFINE("_VIDEODOWNLOADOPTION","Opzione Video Download"); 
DEFINE("_PROSTATUS","Stato Seyret Pro"); 
DEFINE("_SEYRETISNOTPRO","La tua versione di Seyret non è stata upgradata alla versione pro. La versione pro ha diverse opzioni addizionali per usare Seyret. I dettagli sulla versione pro possono essere trovati su www.joomlaholic.com.<p>Una volta upgradato alla versione pro, potrai continuare ad usare Seyret pro nelle prossime versioni.");
DEFINE("_MAKEPROBUTTON","Upgrade a Pro"); 
DEFINE("_MAKEMEPRO","Inserisci l'ammontare della donazione "); 
DEFINE("_UPGRADETOPRO","<b>Step-1:</b> L'upgrade alla versione pro richieste almeno 40 dollari da donare. Quando clicci su uno dei bottoni sottostanti, saranno automaticamente redirezionato alla pagina Paypal con tutte le informazioni richieste  già inserite."); 
//DEFINE("_UPGRADETOPROSTEP2","<b>Step-2:</b> Questo ci informerà sulla tua donazione. Dopo che avremo approvato la tua donazione Pro, sarai immediatamente abilitato ad usare la versione pro. Il tempo di approvazione è minimo."); 
DEFINE("_SEYRETPROISPENDING","Il report donazione alle caratteristiche pro è in attesa di approvazione. Scusa, non abbiamo preso nessuna informazione da Paypal sulla tua donazione, il tuo report dovrà essere approvato manualmente. Per piacere controlla sotto brevemente. <p>Se pensi che il tuo report donazione sia un errore, puoi eliminarlo cliccando il collegamento sottostante."); 
DEFINE("_RESETMYPROSTATUS","Clicca qui se vuoi resettare il report sulla donazione per le caratteristiche pro"); 
DEFINE("_SEYRETPROISAPPROVEDREFRESH","Il report donazione è stato approvato. <p>Per piacere aggiorna questa pagina adesso."); 
//DEFINE("_COULDNTCONNECTTRYLATER","Non possiamo connetterci al server Joomlaholic per controllare il suo stato. Per piacere prova più tardi."); 
DEFINE("_YOUCANRESETIFMISTAKENLY","Se pensi che il tuo report sia un errore, puoi eliminare il tuo report per le caratteristiche pro cliccando il collegamento sottostante."); 
DEFINE("_PROAPPROVED","La donazione per le caratteristiche pro è stata approvata. Divertiti!");
DEFINE("_NEEDTOUPDATE","Le definizioni delle caratteristiche pro del tuo Seyret sono fuori data. Noi di avvisiamo fortemente di updatarle.");
DEFINE("_UPDATEPROPHP","Clicca qui per updatare le tue definizioni pro.");
DEFINE("_ITISUPTODATE","Le definizioni caratteristiche di Seyret pro sono state updatate. Nessun update necessario.");
DEFINE("_SEYRETPROISREJECTED","Il tuo report è stato respinto. Il nostro sistema visualizza che non hai effettuato alcuna donazione per la versione pro. Il report della tua donazione sarà ora resettato per permettere una donazione reale. Se pensi che ci sia un errore, contattaci."); 
DEFINE("_THISISAPROVERSIONFEATURE","Upgrade al Pro");
DEFINE("_GOTODONATIONSPAGETOENABLEPRO","Questa è una caratteristica della versione pro. Puoi abilitare le caratteristiche della versione pro dalla pagina donazioni.");
DEFINE("_USEVIDEOADSYSTEMINFO","Se si, la pubblicità video sarà visualizzata prima dell'inizio del video. <b>Questo solamente se le caratteristiche pro sono attivate.</b>");
DEFINE("_USEVIDEOADSYSTEM","Usa il sistema pubblicitario video");
DEFINE("_VIDEOINFOREFRESHED","Informazioni video aggiornate.");
DEFINE("_THUMBWIDTHINLIST","Larghezza Thumb nella lista video.");
DEFINE("_THUMBWIDTHINLISTINFO","Larghezza Thumbnail nella lista video. Usare solo numeri, non aggiungere px.");
DEFINE("_FEATURED","Featured");
DEFINE("_DISCUSSIONONFORUM","Discussione");
DEFINE("_CLICKHERETODISCUSS","Clicca qui per discutere il video");
DEFINE("_TOPICRE","Re: ");


DEFINE("_VIDEOINFO","Info Video");
DEFINE("_INPUTFBDISCUSSTOPIC","Oggetto");
DEFINE("_INPUTFBDISCUSSMESSAGE","Messaggio");
DEFINE("_CATEGORYINFO","Category Info");
DEFINE("_CATEGORYNAME","Titolo");
DEFINE("_SUBCATEGORIES","Sottocategorie");
DEFINE("_VIDEOSINCAT","Conteggio Video");
DEFINE("_DISCUSSPOSTHEADER","Posta un nuovo messaggio");
DEFINE("_SUBMITCOMMENT","Sottoscrivi");
DEFINE("_LOGINTOWRITECOMMENT","Login per scrivere un commento");
DEFINE("_DONTDONATEIFYOUWILLMAKEPRO","Se stai pianificando di aggiornare alla versione pro, non donare per l'optzione download. Gli utenti pro possono avere questa caratteristica abilitata di default.");
DEFINE("_COMMENTINGSYSTEM","Sistema di commento");
DEFINE("_JOMCOMMENT","Jom Comment");
DEFINE("_FIREBOARD","Fireboard");
DEFINE("_COMMENTINGSYSTEMINFO","Seleziona il sistema di commenti standard.");
DEFINE("_PUBLISHAFTERMODERATED","Sarà pubblicato dopo la moderazione.");
DEFINE("_SHOWVIDEOTOOLTIPS","Visualizza tooltips video");
DEFINE("_SHOWVIDEOTOOLTIPSINFO","Seleziona lo stato dei video tooltips qui.");
DEFINE("_SHOWCATEGORYTOOLTIPS","Vedi categoria Tooltips");
DEFINE("_SHOWCATEGORYTOOLTIPSINFO","Seleziona lo stato della categoria tooltips qui.");

DEFINE("_INTEGRATION","Integrazione");
DEFINE("_FIREBOARDCATEGORYFORDISCUSS","Categoria discussione FB");
DEFINE("_FIREBOARDCATEGORYFORDISCUSSINFO","Se vuoi usare il plugin Fireboard solo per i commenti, lascia questo campo a 0. Se vuoi usarlo come un plugin di discussione, inserisci il numero categoria di Fireboard.");
DEFINE("_LEAVEVIDEOLINK","Aggiungi backlink al video");
DEFINE("_LEAVEVIDEOLINKINFO","Aggiungi backlink al video nel primo post della discussione fireboard thread.");
DEFINE("_YOUAREUSINGPRO","Il tuo Seyret è una versione Pro");
DEFINE("_GOTODONATIONSPAGE","Per aggiornare le tue definizioni, per piacere vai alla pagina Donazioni");
DEFINE("_NOTPROWANTTOUPGRADE","Non stai usando la versione Seyret pro.<br>Per aggionrare, vai al menù Donazione. L'aggiornamento durerà solo tre minuti per essere completo.");
 

DEFINE("_IMAGEAD","Immagine pubblicitaria");
DEFINE("_CLICKLINK","Clicca collegamento");
DEFINE("_LOCALADSDIRECTORY","Cartella pubblicità locale");
DEFINE("_LOCALADSDIRECTORYINFO","Se vuoi utilizzare la pubblicità video locale, perpiacere definisci la cartella pubblicità locale.");
DEFINE("_RSSCHANNELTITLEPRE","Ultimo video in ");
DEFINE("_RSSCHANNELTITLEPOST","Categoria");
// DEFINE("_RSSLATESTVIDEOSCATDESCPRE","Questo seme contiene l'ultimo video da");
// DEFINE("_RSSLATESTVIDEOSCATDESCPOST","sito");

DEFINE("_CLISKHERETOSTART","Clicca qui per iniziare");
DEFINE("_DISABLEPRO","Disabilita le caratteristiche pro");
DEFINE("_DISABLEPROINFO","Se incontri problemi con le caratteristiche pro, - come nei cambiamenti del video server - puoi disabilitare lefunzioni pro temporaneamente fino a che il problema non sarà risolto.");



DEFINE("_TAGS","Tags");
DEFINE("_DIAGNOSTICS","Diagnostica");
DEFINE("_FILESYSTEM","File di Sistema"); 
DEFINE("_TEHERAREOWNERSHIPPROBLEMS","Ci sono problemi con file proprietari sul tuo sistema. Potresti incontrare alcuni problemi nel caricamento dei video. Se sopraggiungono errori, prova a fare 0777 diritti alle cartelle problematiche. Se non hai problemi, ti suggeriamo vivamente di limitare i diritti a 0755");  
DEFINE("_THEREAREMISSINGFILES","Ci sono alcuni faldoni scomparsi nell'albero cartelle dei file Seyret. Perché di problemi su file proprietari, loro non vengono creati automaticamente. Potresti incontrare problemi con Seyret. Prova tramite l'accesso Ftp sottostante a risolvere questo problema.");  
DEFINE("_MISSING","SCOMPARSO");
DEFINE("_FTPSERVER","FTP Server");
DEFINE("_FTPUSERNAME","FTP Nome utente");
DEFINE("_FTPPASSWORD","FTP Password");
DEFINE("_JOOMLAROOT","Cartella Joomla");
DEFINE("_TRYFTP","Prova FTP");
DEFINE("_NEEDFTP_LAYER","Dettagli account FTP");
DEFINE("_FTPSERVERINFO","Inserisci server FTP per questo sito. Come ftp.example.com");
DEFINE("_FTPUSERNAMEINFO","Inserisci il tuo nome utente FTP");
DEFINE("_FTPPASSWORDINFO","Inserisci la password FTP");
DEFINE("_JOOMLAROOTINFO","Cartella principale per la tua installazione Joomla. Attenzione con questo valore. Questo non è una path pienamente qualificata alla tua cartella principale. E' relativa alla pagina principale via FTP. potrebbe essere /www  o  /httpdocs");
DEFINE("_THEREARENOPROBLEMS","NOn ci sono problemi con il file di sistema Seyret sul tuo sito.");
DEFINE("_DIRECTORY","Cartella"); 
DEFINE("_OWNER","Proprietario"); 
DEFINE("_ACCESS","Accesso"); 
DEFINE("_RESULT","Risultato"); 
DEFINE("_CONNECTION","Connessione");
DEFINE("_CACHE","Cache");
DEFINE("_CLEARVIDEOCACHE","Clicca qui per pulire la cache video");

DEFINE("_GOOGLECONNECTCHECK","Connetti a Google");
DEFINE("_CONNECTED","Connesso");
DEFINE("_GOOGLECONNECTCHECKINFO","Questo è un test per le capacità connettive del tuo server.");

// 0.2.7 	*** added by Balaam ***
DEFINE("_NORIGHTS","You do not appear to have sufficient rights to access this feature.<br/>Please contact your system administrator or webmaster.");

//0.2.7.7 starts
DEFINE("_CONVERSION","Conversione");
DEFINE("_FFMPEGPATH","Path FFMPEG");
DEFINE("_FFMPEGPATHINFO","Inserisci la path per ffmpeg. ");
DEFINE("_VIDEOCONVERSION","Conversione FLV");
DEFINE("_ENABLEFLVCONVERSION","Abilita conversione FLV");
DEFINE("_ENABLEFLVCONVERSIONINFO","Questa opzione funziona solo su Seyret pro. Se incontri problemi con la convesione flv o dr non hai un server potente, disabilita la conversione flv.");
DEFINE("_ENABLEAUTOMATICTHUMBNAILEXTRACTION","Abilita l'estrazione thumbnail");
DEFINE("_ENABLEAUTOMATICTHUMBNAILEXTRACTIONINFO","Questa opzione lavorerà solo con Seyret pro. Se hai problemi con l'estrazione thumbnail, puoi disabilitarla.");
DEFINE("_INSTANTVIDEOPROCESS","Processo di conversione instantanea video");
DEFINE("_INSTANTVIDEOPROCESSINFO","Se selzioni si, i video caricati saranno processati subito dopo il caricament. Se selezioni no, non saranno processati. I video caricati saranno salvati e potranno essere aggiunti nella coda conversione. Gli amministratori potranno convertirli.");
DEFINE("_INSTANTTHUMBPROCESS","Estrazione instantanea Thumbnail");
DEFINE("_INSTANTTHUMBPROCESSINFO","Se selzioni si, le thumbnail per i tuoi video caricati saranno estratti instantaneamente. Ti avvisiamo che questa caratteristica, può dare la possibilità agli utenti di selezionale la loro thumbnail per i propri video.");
DEFINE("_VIDEODIMENSIONS","FLV Dimensione");
DEFINE("_VIDEODIMENSIONSINFO","Settare le dimensioni Flv qui. NOn dimenticarlo, dimensioni più grandi comporteranno file più grandi. Prova a configurare la dimensione ottimale per le necessità del tuo server.");
DEFINE("_AUDIOBITRATE","Audio Bitrate");
DEFINE("_AUDIOBITRATEINFO","Definisci il bitrate audio per i file flv generati. Di default è 64");
DEFINE("_AUDIOSAMPLINGFREQUENCY","Frequenza audio esempio");
DEFINE("_AUDIOSAMPLINGFREQUENCYINFO","Definisci la frequenza per gli esempi audio dei file flv generati. Di default è 44100.");
DEFINE("_VIDEOFRAMERATE","Video Frame Rate");
DEFINE("_VIDEOFRAMERATEINFO","Seleziona il video frame rate. Di Default è 25");
DEFINE("_VIDEOBITRATE","Video Bitrate");
DEFINE("_VIDEOBITRATEINFO","Seleziona il video bitrate. Di Default è 200");
DEFINE("_THUMBNAILEXRACTION","Estrazione Thumbnail");
DEFINE("_THUMBNAILDIMENSIONS","Dimensioni Thumbnail");
DEFINE("_THUMBNAILDIMENSIONSINFO","Seleziona le dimensioni thumbnail qui.");
DEFINE("_THUMBNAILDIMENSIONSBIG","Dimesioni grandi Thumbnail");
DEFINE("_THUMBNAILDIMENSIONSBIGINFO","Sarà estratta una grande thumbnail. Questa sarà usata per come immagine di anteprima nel flash player.");
DEFINE("_SCREENSHOTSECOND","Prendi immagine sul secondo");
DEFINE("_SCREENSHOTSECONDINFO","Seleziona il tempo standard per estrarre l'immagine thumbnail. Su alcuni video si usa 00:00:00 che risulterà una immagine nera, di standard è 00:00:05");
DEFINE("_UNPROCESSEDFILEINFO","Ci sono caricamenti video senza processare sul tuo account. Se vuoi trasmetterli, dovresti completare il processo di pubblicazione. Se non va avanti, il tuo file caricato sarà cancellato dopo i limiti di tempo.");
DEFINE("_UPLOADEDFILENAME","Nome File");
DEFINE("_UPLOADEDDATE","Data caricamento");
DEFINE("_SELECTVIDEOSTOUPLOAD","Seleziona video");
DEFINE("_SELECTVIDEOSTOUPLOADINFO","Seleziona video che vuoi caricare. Dopo la selezione, sarà aggiunto alla coda di caricamento.");
DEFINE("_SELECTTHUMBSTOUPLOAD","Seleziona Thumbnail");
DEFINE("_SELECTTHUMBSTOUPLOADINFO","Puoi caricare una thumbnail per il tuo video. Prova a caricare una thumbnail che rappresenta il tuo video bene.");
DEFINE("_BROWSEFILES","File passati in rassegna");
DEFINE("_UPLOADINGFILE","Caricamento");
DEFINE("_UPLOADCOMPLETE","Completato!");
DEFINE("_REMOVEFROMQUEUE","Rimuovi dalla coda");
DEFINE("_VIDEOFILES","File Video");
DEFINE("_MAXFILESIZEEXCEEDS","Questo file eccede dalla grandezza massima permessa.");
DEFINE("_MAXIMUM","Max");
DEFINE("_UPLOADQUEUE","Coda di caricamento");
DEFINE("_UPLOADQUEUEINFO","Controlla il file selezionato e inizia il caricamento.");
DEFINE("_STARTUPLOAD","Inizia caricamento");
DEFINE("_INPROCESSPLEASEWAIT","Attendi prego, il risultato del caricamento è stato controllato...");
DEFINE("_TERMSOFUSEINFO","Per piacere leggi i termini di utilizzo attentamente.");
DEFINE("_TERMSOFUSE","TERMINI DI UTILIZZO");
DEFINE("_ACCEPTTERMSOFUSE","Ho letto i termini di utilizzo e li accetto tutti.");
DEFINE("_DENYTERMSOFUSE","Non accetto i termini di utilizzo. Voglio disinstallare.");
DEFINE("_DENYCONFIRMINFO","Se non accetti i termini di utilizzo, dovresti cancellare completamente Seyret.<br>Se selezioni disinstalla qui, tutte le tabelle saranno rimosse.");
DEFINE("_DENYCONFIRM","CONFERMA");
DEFINE("_ILLREADTERMSAGAIN","Voglio leggere i termini di utilizzo ancora.");
DEFINE("_ILLUNINSTALL","Sono sicuro, voglio disinstallarlo completamente.");
DEFINE("_NOCOMMENT","Nessun commento");
DEFINE("_CANSEEEDITVIDEOBUTTON","Può vedere il bottone edita per tutti i video");
DEFINE("_CANEDITANYVIDEO","Può editare tutti i video");
DEFINE("_CANEDITOWNVIDEO","Può editare i propri video");
DEFINE("_CANDELETEANYVIDEO","Può cancellare tutti i video");
DEFINE("_CANDELETEOWNVIDEO","Può cancellare i propri video");
DEFINE("_USEJOOMLAEDITOR","Usa l'editor Joomla");
DEFINE("_USEJOOMLAEDITORINFO","Se scegli si, sul processo di video input, sarà utilizzato il joomla html editor per l'area dei video dettagliata. Alcuni editor, possono causare problemi di sicurezza.");
DEFINE("_RSSCHANNELTITLEALLCATEGORIES","Ultimi video in tutte le categorie");
DEFINE("_RSSCHANNELTITLEHIGHESTRATEDPRE","I video più quotati in");
DEFINE("_RSSCHANNELTITLEHIGHESTRATEDPOST","Categoria");
DEFINE("_RSSCHANNELTITLEALLCATEGORIESHIGHESTRATED","I video più votati in tutte le categorie");
DEFINE("_RSSVIDEOSCATDESCPRE","Questo seme contiene video da");
DEFINE("_RSSVIDEOSCATDESCPOST","sito");
DEFINE("_GENERATERSSFEEDINFO","Per piacere seleziona il tipo di seme e le opzioni del seme sotto. Il collefamento al seme sarà aggiornato automaticamente quando cambi le opzioni.");

DEFINE("_ALLCATEGORIES","Tutte le categorie");


DEFINE("_VIDEOUPLOADISSUCCESS","Il tuo file è stato caricato con successo.");
DEFINE("_VIDEOCONVERTSUCCESS","Il tuo video è stato processato con successo.");
DEFINE("_VIDEOCONVERTPOSTPONED","Il tuo video sarà processato dagli amministratori prossimamente.");
DEFINE("_VIDEOCONVERTNOTSET","La conversione video non è stata configurata su questo server.");




DEFINE("_UPLOADCONTROL","Controlla caricamento");
DEFINE("_CONVERSIONCHECK","Conversione Video");
DEFINE("_THUMBNAILCHECK","Estrazione Thumbnail");
DEFINE("_GETTINGINPUTFORM","Form per inserimento input");
DEFINE("_PLEASEFILLTHEDETAILSBELOW","Per piacere inserisci i seguenti dettagli sul tuo video.");


DEFINE("_THUMBNAILSEXTRACTED","Le Thumbnails sono generate.");
DEFINE("_THUMBNAILSEXTRACTIONBYADMIN","Le Thumbnails saranno generate dagli amministratori dopo.");
DEFINE("_NOTHUMBNAILSEXTRACT","Le Thumbnails non saranno generate dal sistema.");

DEFINE("_DONTEXTRACT","Non estratto");

 
DEFINE("_PLEASESELECTTHUMBNAIL","Per piacere seleziona una thumbnail per i tuoi video");

DEFINE("_SIZEEXCEEDSERVERCONF","Caricamento fallito. La grandezza del tuo video eccede per la grandezza massima configurata sul server.");
DEFINE("_SIZEEXCEEDCOMPONENTCONF","Caricamento fallito. Il tuo video eccede la grandezza massima configurata sul componente.");
DEFINE("_PARTIALUPLOADERROR","Il video è stato caricato solo parzialmente. Prova di nuovo.");
DEFINE("_UNSUPPORTEDFILETYPE","Tipo di file non supportato.");
DEFINE("_THEFILEISBIGGERPOSTMAXSIZE","Il file è più largo della grandezza massima supportata dal server.");


DEFINE("_NOTUPLOADEDERROR","Il file video non è stato caricato. Riprova.");
DEFINE("_SEYRETDATE","Data");
DEFINE("_SEYRETMENU","SEYRET MENU");
DEFINE("_PROUPDATEERROR","Le definizioni pro non sono state aggiornate. Probabilmente hai avuto un problemacon la scrittura dei permessi.");
DEFINE("_FORMOREINFORMATIONABOUTPRO","Puoi trovare alcune informazioni sulla versione pro sul nostro wiki. Clicca qui.");
DEFINE("_COULDNTCONNECTTRYLATER","Non possiamo connetterci al server Joomlaholic per controllare lo stato del tuo Seyret. Riprova più tardi."); 
DEFINE("_VIDEOLINK","Collegamento Video"); 

DEFINE("_SHOWORIGINALVIDEOLINK","Vedi collegamento video originale"); 
DEFINE("_SHOWORIGINALVIDEOLINKINFO","Seleziona si per vedere un link nella localizzazione originale del sotto il player embedded."); 
DEFINE("_ORIGINALVIDEOISHERE","Clicca qui per vedere il video originale."); 

DEFINE("_FFMPEGPREEXEC","Esegui prima ffmpeg"); 
DEFINE("_FFMPEGPREEXECINFO","Se sei su un hosting condiviso ed hai compilato da solo il ffmpeg, potresti avere bisogno di eseguire alcune definizioni ambientali per includere le librerie. Se ffmpeg è installato dalla tua compagnia di hosting, lascia questo valore in bianco."); 

DEFINE("_CACHEDIRISMISSINGPLEASECREATE","La seguente cartella cache non può essere creata dal sistema. Per piacere creala manualmente e dalle gli appropriati permessi di lettura/scrittura."); 

DEFINE("_ERRORREPORTING","Errore riportato");
DEFINE("_ERRORREPORTINGINFO","Puoi definire la politica del tuo sistema per gli errori riportati qui.");
DEFINE("_NOERRORREPORT","NOn riportare nessun errore");
DEFINE("_SHOWERRORSEXCEPTNOTICES","Vedi tutti gli errori eccetto gli avvisi");
DEFINE("_SHOWERRORSINCLUDINGNOTICES","Vedi tutti gli errori inclusi gli avvisi");
DEFINE("_PLAYTIME","Playtime");
DEFINE("_SECONDS","Secondi");


DEFINE("_STARTBATCHCONVERSION","Avvia la conversione");
DEFINE("_BATCHCONVERSIONINFO","Puoi convertire tutti i file flv e non, ed estrarre un anteprima. Seleziona le opzioni di conversione.");
DEFINE("_DONTEXTRACTTHUMBNAIL","Non estrarre un anteprima.");
DEFINE("_EXTRACTALLTHUMBNAILS","Estrai ttue le anteprime per il file video non flv.");
DEFINE("_EXTRACTONLYMISSINGTHUMBNAILS","Estrai un ateprima, se mancante, per i file video non flv.");
DEFINE("_DONTCONERTTOFLV","Non convertire in flv. Se si vuole estrarre solo una miniatura, selezione questa opzione.");
DEFINE("_FORCEREENCODEOLDFLV","Forza il reencoding del file video flv caricando le tue impostazioni.");
DEFINE("_DELETEORIGINALFILE","Elimina file orginale non-flv dopo la conversione.");
DEFINE("_DEFAULTTIMETOSNAPSHOT","Tempo standard per prendere una snapshot per il video in secondi.");
DEFINE("_CONVERSIONVIDEOCOUNT","Questo tempo converte il conteggio video.");



DEFINE("_UPLOADCOMPLETE","Attendere per favore, sto invianfo il form!");
DEFINE("_RIGHTCLICKANDSAVE","Clicca con il tasto destro per salvare..");

DEFINE("_FIREBOARDCONFIGERROR","Esiste un errore con l'istallazione del tuo Fireboard. File della configurazione di Fireboard non possono essere trovati. Controlla la tua installazione di Fireboard.");
DEFINE("_ABOUTTHISVIDEO","Approposito di questo video");
DEFINE("_FFMPEGNOTFOUND","Tool di conversione non trovato. Contatta l''amministratore.");
DEFINE("_MENCODERNOTFOUND","Error: Tool di conversione non trovato. Contatta l'amministratore.");
DEFINE("_INPUTFILENOTFOUND","Error: Non ho trovato la fonte del file. Contatta l'amministratore.");

//--------------------------------------------


DEFINE("_APPLIEDVIDEOLINK","Video Link");
DEFINE("_TAGLIST","Tags");
DEFINE("_VIDEODESCRIPTION","Descrizione");
DEFINE("_CATEGORYLISTSELECT","Categoria");
DEFINE("_SERVERTYPE","Tipo server");
DEFINE("_SERVERCODE","Codice server");
DEFINE("_THUMBNAIL","Anteprima");
DEFINE("_ADDEDDATE2","Aggiungi");
DEFINE("_PUBLISHSELECT","Pubblica stato");
DEFINE("_SUBMITDETAILSCLICK","Detagli");

DEFINE("_FEATUREDVIDEOS","Più visti");
DEFINE("_LATESTVIDEOS","Ultimi");
DEFINE("_HIGHESTRATEDVIDEOS","Più votati");
DEFINE("_MOSTDISCUSSEDVIDEOS","Piu idscussi");
DEFINE("_MOSTVIEWEDVIDEOS","Ultimi visti");
DEFINE("_READMORE","Altro");
DEFINE("_LESS","Meno");
DEFINE("_INCATEGORY","Categoria");
DEFINE("_INCHANNEL","Canale");
DEFINE("_DISPLAYSTYLE","Display");
DEFINE("_CATIDS","Categoria Ids");

DEFINE("_SEARCHVIDEOS","Cerca Video"); 
DEFINE("_SMALLSTATISTICSPRE","Totale "); 
DEFINE("_SMALLSTATISTICSPOST"," videos");  
DEFINE("_VIDEOSINCATEGORYPRE","Video in ");  
DEFINE("_VIDEOSINCATEGORYPOST"," categoria");   
DEFINE("_GUEST"," Ospiti");

DEFINE("_JOINED"," Iscritto");
DEFINE("_OWNEDVIDEOSCOUNT"," Video");
DEFINE("_THISVIDEOINFORMATION","Questo Video");
DEFINE("_THISVIDEOINFORMATIONMORE","Altre informazioni");
DEFINE("_SUBSCRIBETHISCHANNEL","Iscrivit al canale");
DEFINE("_DIRECTURL"," URL");
DEFINE("_EMBED"," Incorpora");

DEFINE("_FULLSCREENBTN","Schermo intero");
DEFINE("_DOWNLOADBTN","Download");
DEFINE("_REPORTBTN","Rapporto");
DEFINE("_DELETEBTN","Elimina");
DEFINE("_EDITBTN","Modifica");
DEFINE("_REFRESHBTN","Ricarica");
DEFINE("_REPLYBTN","Ripeti");

DEFINE("_ADDFROMANOTHERSERVER","Aggiungi da un altro Server");
DEFINE("_UPLOADFROMMYCOMPUTER","Carica dal mio Computer");
DEFINE("_YOUAREADDINGAREPLYTO","Stai aggiungendo il Repley  del video a");
DEFINE("_NOTAREPLY","Nessuna Ripetizione");
DEFINE("_ISAREPLYTO","é un repley di");
DEFINE("_THISISAREPLYTOPRE","Questo video è una replica di");
DEFINE("_THISISAREPLYTOPOST","");

DEFINE("_SEYRETPLUGINS","Aggiornamento Plugin ");


DEFINE("_CATEGORIESQUICKLIST","Quick List");
//-----------------------


//Line 469


//These lines are for 0.2.8 not in 0.2.7. please don't ask. just working

DEFINE("_VIDEOINPLAYLIST","Videos:");



?>