<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

//Seyret Component v.0.2.7.7//
/**
* Content code
* @ package SEYRET
* @ Copyright (C) 2007 Mustafa DINDAR
* @ All rights reserved
* @ Seyret Component is Free Software
* @ Released under GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
* @ Version 0.2.7
**/	
DEFINE("_COMPONENT_NAME","Seyret-Video Listing System");
DEFINE("_JUMPTO","Jump to");
DEFINE("_VIDEOLISTHEADERPRE","Videos in \"");
DEFINE("_VIDEOLISTHEADERSUF","\" category");
DEFINE("_HIT","Views");
DEFINE("_VIDEOTITLE","Title");
DEFINE("_DETAILS","Details");
DEFINE("_RATING","Rating");
DEFINE("_NUMBEROFVOTE","Votes");
DEFINE("_NOVOTE","No Votes");
DEFINE("_LOGINFORVOTE","You need to login to vote!");
DEFINE("_THANKSFORVOTE","Thanks for your vote!");
DEFINE("_WAITAMOMENT","Wait a moment please!");
DEFINE("_TOPLEVEL","Top");
DEFINE("_VIDEOGROUPTITLE","Video Categories");
DEFINE("_CATEGORIES","Categories");
DEFINE("_VIDEOS","Videos");
//DEFINE("_GENERALCONFIG","General");
DEFINE("_EXPANDALL","Expand All");
DEFINE("_CLOSEALL","Close All");
DEFINE("_VIDEO_CATEGORIES","Video Categories");
DEFINE("_VIDEOCAT_CODE","Category Code");
DEFINE("_VIDEOCAT_NAME","Category Name");
DEFINE("_VIDEOCAT_PARENT","Parent Category");
DEFINE("_EDIT_CATEGORY","Edit Category");
DEFINE("_NEW_CATEGORY","New Category");
DEFINE("_NEWVIDEOCATCOMMENT","Create new video categories here. Don't forget to select a parent category if this is a subcategory.");
DEFINE("_DEVELOPER","Developer");
DEFINE("_INFO","Info");
DEFINE("_SEYRETTHANKS","Thanks to");
DEFINE("_VERSION_INFO","Version");
DEFINE("_COPYRIGHT","Copyright");
DEFINE("_LICENSE","License");
DEFINE("_YOUTUBEID","YouTube Developer Id");
DEFINE("_YOUTUBEIDINFO","Enter your <b>YouTube Developer Id</b> here in order to use the component's full functionality. The component pulls video info from YouTube using this ID. If you don't enter this ID, you have to enter all information e.g. thumbnail address, servercode etc- manually.");
DEFINE("_TITLELENGTH","Title Length");
DEFINE("_TITLELENGTHINFO","Enter title length to be used in video listing. Use the best value for your template. ");
DEFINE("_DETAILSLENGTH","Details Length");
DEFINE("_DETAILSLENGTHINFO","Enter details length to be used in video listing. Use the best value for your template. ");
DEFINE("_CONFIG_OK","Configuration saved!");
DEFINE("_CONFIG_ERR","Error: Configuration could not be saved!");
DEFINE("_VIDEOWIDTH","Video Width");
DEFINE("_VIDEOWIDTHINFO","Video width in front page. Use the best value for your template.");
DEFINE("_VIDEOHEIGHT","Video Height");
DEFINE("_VIDEOHEIGHTINFO","Video height in front page. Use the best value for your template.");
DEFINE("_VIDEO_LIST","Video List");
DEFINE("_VTHUMB","Thumbnail");
DEFINE("_VIDEO","Video");
DEFINE("_EDIT_VIDEO","Edit Video");
DEFINE("_NEW_VIDEO","New Video");
DEFINE("_VSERVERTYPE","Server Type");
DEFINE("_VSERVERCODE","Server Code");
DEFINE("_NEWVIDEOCOMMENT","The best way to add a new video is using the front panel with admin login. There, you will just enter video link and system will pull all video information automatically. Here you need to enter all video information manually.");
DEFINE("_APPLY","Apply");
DEFINE("_SAVE","Save");
DEFINE("_INPUTLINK","Input Link");

//Version 0.2=============================================================================================

DEFINE("_ISTHISFRESHINSTALL","Seyret database tables are not available.<br><strong>Be careful to avoid data loss.</strong><br>");
DEFINE("_IFTHISISFRESHINSTALL","IF THIS IS FRESH INSTALL");
DEFINE("_IFTHISISUNINSTALL","IF YOU WANT TO UNINSTALL COMPONENT");
DEFINE("_THISWILLDROPTABLES","To complete installation, just click on the picture below.");
DEFINE("_INSTALLATTENTION","<strong>In this operation all data tables will be replaced.</strong>."); 
DEFINE("_FRESHINSTALLSUCCESS","Seyret Database Installed Successfully.");
DEFINE("_UNINSTALLEXPL","You have successfully uninstalled Seyret database tables.<br><br>Now do not forget to complete uninstallation from Joomla component manager.");
//DEFINE("_THISISANUPDATEINFO","It seems that you are upgrading Seyret component.<br><b>Unfortunately your database tables will not be saved and you will loose all video items.<br>The next releases we will Provide database upgrade feature.</b>");
DEFINE("_THISISANUPDATE","UPGRADE");
DEFINE("_JOOMLAALEMMESSAGE","Joomlaholic Board");
DEFINE("_YOUDONTWANTTRACKING","You don't have permission for message feeding. This means you will not receive any release or security anouncements here. We advice you to enable message feeding from the Configuration Panel.");
DEFINE("_VERSIONTRACKINGINFO","<b>Here you can select whether or not to open Joomlaholic messages.<br><br>If you select yes, system will connect to  Joomlaholic server and will get a new Joomlaholic user id automatically for your site. <br><br>Then you will be able to see Joomlaholic messages in your admin panel and will be made aware of new versions or security updates.<br><br>Also your Joomlaholic user id will be used for the video download option.<br><br>If you select not to receive messages, the system will not connect to Joomlaholic servers.<b>");
DEFINE("_PLEASESELECTTRACKINGCHOICE","PLEASE SELECT");
DEFINE("_THEME","Theme");
DEFINE("_THEMEINFO","Please select the Seyret component theme you wish to use on your site.");
DEFINE("_ADDVIDEO","Add Videos");
DEFINE("_PENDINGVID","Pending Videos");
DEFINE("_SORTBY","Sort By");
DEFINE("_NOSERVERFOUNDREPORTIT","Sorry but we couldn't find any appropriate video server that fits your video link. If you are sure that your video link is correct, contact your site administrator.");
DEFINE("_ADDEDBY","Added by");
DEFINE("_ADDEDDATE","Date");
//DEFINE("_YOUSHOULDLOGINTOADDVIDEO","You need to login to add videos.");
DEFINE("_ASCENDING","Ascending");
DEFINE("_DESCENDING","Descending");
DEFINE("_POPUPVIDEOWIDTH","Popup video width");
DEFINE("_POPUPVIDEOHEIGHT","Popup video height");
DEFINE("_DEFAULTSORTBY","Default video sort");
DEFINE("_DEFAULTSORT","Default sort order");
DEFINE("_POPUPVIDEOWIDTHINFO","Define video width in popup window. Window dimensions will be 100px greater than embedded video dimensions.");
DEFINE("_POPUPVIDEOHEIGHTINFO","Define video height in popup window.");
DEFINE("_DEFAULTSORTBYINFO","Select default sort by criteria."); 
DEFINE("_DEFAULTSORTINFO","Select default sort type, ascending or descending."); 
DEFINE("_THISAREAISONLYFORREGISTEREDUSERS","Only registered users may download videos. Please login or register.");  
//DEFINE("_COPYTHISLINK","Copy link");  
DEFINE("_YOURUSERIDRESTORED","Your user id was successfully restored!");   
DEFINE("_YOURUSERIDGENERATED","Your user id was successfully generated!");   
DEFINE("_YOURUSERIDPROBLEM","It seems that there is a problem with your Joomlaholic user id. It has been removed from the database. This may occur when you move your site. Refresh page to obtain a new one.");  
DEFINE("_YOUDONTHAVEADMINISTRATORRIGHTS","You don't have administrator or editor rights! If you have rights and receive this message, you may be having acl Problems. To check pending videos, you may also use administrator backend.");  
DEFINE("_IFPUBLISHED","Publish Status");   
DEFINE("_YES","Yes");   
DEFINE("_NO","No");   
DEFINE("_ENABLEDOWNLOADS","Enable Downloads");   
DEFINE("_ENABLEDOWNLOADSINFO","Seyret can produce download links.");   
DEFINE("_JALEMUSERID","Joomlaholic User Id"); 
DEFINE("_JALEMUSERIDINFO","Your site's Joomlaholic user id. This will be used in all Joomlaholic operations."); 
DEFINE("_DONATIONS","Donations"); 
DEFINE("_DONATIONHEADER","Donations"); 
DEFINE("_YOUHAVENTDONATEDYET","It seems that you haven't donated yet.");
DEFINE("_YOUHAVENTDONATEDSTEP1","<b>Step-1: </b> Click one of the Paypal logos with your donation amount and go to Paypal Donation Page. In the Paypal page, your Joomlaholic user id will be included.");
//DEFINE("_YOUHAVENTDONATEDSTEP2","<b>Step-2: </b>After you donate, please enter amount below and submit. <p><b>This will inform us about your donation.</b>  After your post, video downloads will be enabled automatically until we check our account. If your donation is in the correct amount, it will be approved, otherwise it will be rejected and your video download feature will be disabled."); 
DEFINE("_SUBMIT","Submit and enable downloads"); 
DEFINE("_INFORMJOOMLAALEM","Inform Joomlaholic About Donation Amount: "); 
DEFINE("_YOURDONATIONAPPROVED","Your donation is approved. You may use the download option now. <p>Thanks for your donation."); 
DEFINE("_YOURDONATIONPENDING","Your donation report is pending. You may go to Configuration menu to enable download option now. <p>But if we don't approve your donation, download option will be disabled for your site. <p>Thanks for your donation."); 
DEFINE("_YOURDONATIONREJECTED","Your donation report is rejected. <p>Unfortunately we couldn't approve your donation. <p>If you think that this is a mistake, please contact us via email."); 
DEFINE("_UNINSTALL","Uninstall"); 
DEFINE("_CAUTION","Caution"); 
DEFINE("_CAUTIONUNINSTALL2","This operation will drop all Seyret database tables permanently.<p>If you want to uninstall Seyret database tables, click the image below."); 
DEFINE("_CAUTIONUNINSTALL3","This operation will uninstall only Seyret database tables. After that, you should go to Joomla Component Install/Uninstall Manager and remove Seyret Component to complete uninstallation."); 
DEFINE("_UNINSTALLDATABASESUCCESS","Seyret Database Tables are uninstalled successfully!");
DEFINE("_NOJALEMUSERID","You don't have a valid Joomlaholic user id! <p>You cannot contact Joomlaholic without a valid user id. <p>Probably message feeding is disabled. You can switch on message feeding from configuration panel.<p> Then your user id will be generated automatically.");
DEFINE("_MESSAGEFEED","Message Feed"); 
DEFINE("_MESSAGEFEEDINFO","You can select message feed status here. If you don't have a Joomlaholic user id, we advice you to get one. If you enable message feeds, you will get a user id for your site automatically. If you disable tracking your user id will not be deleted. Also if you reinstall Seyret completely, your old user id will be restored from Joomlaholic servers."); 
DEFINE("_ENABLED","Enabled"); 
DEFINE("_DISABLED","Disabled"); 
DEFINE("_VIDEOCOUNTINVLIST","Video #");
DEFINE("_VIDEOCOUNTINVLISTINFO","Here you can define number of videos in video list in front page.");
DEFINE("_DELETEVIDEOCONFIRMMESSAGE","This video will be deleted permanently. Would you like to continue?"); 
DEFINE("_DELETETHISVIDEO","Delete this video");
DEFINE("_PUBLISH","Publish");  
//that's enough for 0.2. Let's leave something to 0.3 :)

//0.2.1 start
DEFINE("_PUBLISHED","Published");  
DEFINE("_UPLOADVIDEO","Upload Video"); 
DEFINE("_UPLOADVIDEOINFORM","<b>1-</b> Upload your video. Please do not upload videos with unsuitable content for our site. <br/><b>Please note: Upload only FLV, MPG, WMV, AVI, MP3 and SWF files otherwise the system will reject your file.</b>"); 
DEFINE("_UPLOADANDGOTONEXT","Upload and go to next step"); 
DEFINE("_UPLOADTHUMBNAILINFORM","<b>2-</b> Upload a thumbnail for your video. Upload a thumbanail that is relevant to your video. <br/> <b>Please note: Upload only GIF, JPG or PNG files.</b><br/> If you don't have a thumbnail for this video, don't forget to check the box below."); 
DEFINE("_NOTHUMBNAILFORTHISVIDEO","I don't have a thumbnail to upload for my video."); 
DEFINE("_COPY","Copy");  
DEFINE("_THISISANUPDATEINFO","It seems that you are upgrading Seyret component.<br><b>Upgrade script will not drop your Seyret database tables.<br>But we advice you to backup your database.</b>");
DEFINE("_DBVERSION_INFO","Old version"); 
DEFINE("_NEWVERSION_INFO","You will upgrade to version"); 
DEFINE("_PROCEEDUPGRADE","To Proceed upgrade operation just click the image below"); 
DEFINE("_UPGRADEATTENTION","If you think that something went wrong after upgrade, restore your tables from backup files and please inform us. www.joomlaholic.com"); 
DEFINE("_UPGRADESUCCESS","Seyret is successfully upgraded!");  
DEFINE("_USERSUPLOADVIDEO","Users can upload video");  
DEFINE("_USERSUPLOADVIDEOINFO","Please define your user upload permissions.");  
DEFINE("_VIDEOMAXSIZE","Maximum video size");  
DEFINE("_VIDEOMAXSIZEINFO","Maximum size for user video uploads in <b>MBytes</b>. This value should be integer. Also pay attention to php.ini upload limits.");  
DEFINE("_THUMBMAXSIZE","Maximum thumbnail size");  
DEFINE("_THUMBMAXSIZEINFO","Maximum size for user thumbnail uploads in <b>MBytes</b>.  This value should be integer. Also pay attention to php.ini upload limits.");  
DEFINE("_RESIZETHUMBWIDTH","Resize Thumbnail Width"); 
DEFINE("_RESIZETHUMBWIDTHINFO","Uploaded video thumbnails will be resized. This value defines width of thumbnail."); 
DEFINE("_EMBEDBOXWIDTH","Embed Box Width"); 
DEFINE("_EMBEDBOXWIDTHINFO","This value defines the width of embed link box and copy link box."); 
DEFINE("_ADDVIDEOINFO","Please copy your video links and paste into the inputbox, then click the 'Apply' button. <b>Please ensure you are using the correct video link format.</b> Then click the 'Save' button. For additional assistance please visit the Help page.");

// please delete or comment  _THISISANUPDATEINFO line on 80
// pay attention, in  line 115 $3 is changed to $7
//0.2.3. end

//====================================================================================
//0.2.4
DEFINE("_ADMANAGEMENT","Ad Management"); 
DEFINE("_TOP","Top"); 
DEFINE("_ADLINK","Ad Link"); 
DEFINE("_REMOTESERVERFILES","File list on ads server"); 
DEFINE("_NEWADCOMMENT","Select category for the ad. You can also enter a flv link that is not listed in select list."); 
DEFINE("_REMOTESERVERADDRESS","Your remote server ads directory"); 
DEFINE("_AD","Video Ads"); 
DEFINE("_NEW_AD","New Ad"); 
DEFINE("_EDIT_AD","Edit Ad"); 
DEFINE("_PARENT","Parent"); 

//0.2.5
DEFINE("_VIDEOURL","URL");  
DEFINE("_VIDEOEMBEDCODE","Embed"); 
DEFINE("_VOTEIT","Vote it");
DEFINE("_LOGINTOVOTE","Login to vote");
DEFINE("_GENERALCONFIG","General"); //comment line 31
DEFINE("_CONFIG","Configuration"); 
DEFINE("_ADSCONFIG","Ads");
DEFINE("_EXTRAS","Extras");
DEFINE("_WRITEHELP","Write Help");
DEFINE("_SNIPPETS","HTML Snippet");
DEFINE("_WRITEHELPCOMMENT","If you want to use help system, you can edit your own help page.");
DEFINE("_SNIPPETCOMMENT","If you want to use a snippet after video embed code, edit it here.");
DEFINE("_REPORTVIDEOINFORM","Please write the reason for your report. Our moderators will review your report shortly.");
DEFINE("_VIDEOID","Video Id");
DEFINE("_REPORTEDBY","Reported By");
DEFINE("_REPORTEDDATE","Report Date");
DEFINE("_REPORTCOMMENT","Report Reason");
DEFINE("_REPORTREPLY","Reply");

//line 115,148,150 changed

//0.2.6 -------------------starts
DEFINE("_VIDEOSINALLCATEGORIES","Videos"); 
DEFINE("_VIDEOCAT","Category"); 
DEFINE("_SEARCH","Search"); 
DEFINE("_DISPLAY","Display"); 
DEFINE("_PERMISSIONS","Permissions"); 
DEFINE("_SYSTEM","System"); 
DEFINE("_USERSCREENNAME","User Screen Name"); 
DEFINE("_USERSCREENNAMECOMMENT","You can define screenname: username or real name."); 
DEFINE("_USEREMOTESERVERSUPPORT","Use remote server"); 
DEFINE("_USEREMOTESERVERSUPPORTINFO","You can select remote server support here. This is not a very complete feature. Will be worked on. It is designed for ad usage first."); 
DEFINE("_REMOTESERVERADSDIRECTORY","Remote Ads Directory"); 
DEFINE("_REMOTESERVERADSDIRECTORYINFO","Define your remote server ads directory here. Be sure that this address contains special index.php that comes with component."); 
DEFINE("_REMOTESERVERVIDEOSDIRECTORY","Remote Videos Directory"); 
DEFINE("_REMOTESERVERVIDEOSDIRECTORYINFO","Define your remote server ads directory here. Be sure that this address contains special index.php that comes with component."); 
DEFINE("_REMOTESERVERCHECKSTRING","Remote Check String"); 
DEFINE("_REMOTESERVERCHECKSTRINGINFO","This is a security string that prevents unauthorized directory listing. Change this string in remote index.php too."); 
DEFINE("_PLEASESELECT","Please select...");
DEFINE("_SUPERADMINRIGHTS","Super Administrator Rights");
DEFINE("_SUPERADMINRIGHTSINFO","Super Administrators have all rights. There will be no restrictions for them.");
DEFINE("_RIGHTS","Seyret Access Rights");
DEFINE("_CANSEEADMINTOOLBAR","Can see admin toolbar");
DEFINE("_CANSEEREPORTEDVIDESBUTTON","Can see reported videos button");
DEFINE("_CANSEEPENDINGVIDESBUTTON","Can see pending videos button");
DEFINE("_CANSEEADDVIDEOSBUTTON","Can see add videos button");
DEFINE("_CANADDVIDEOS","Can add videos");
DEFINE("_CANSEEUPLOADVIDEOSBUTTON","Can see upload videos button");
DEFINE("_CANUPLOADVIDEOS","Can upload videos");
DEFINE("_CANSEEMYVIDEOSBUTTON","Can see my videos button");
DEFINE("_CANSEEFEATUREDVIDEOSBUTTON","Can see featured videos button");
DEFINE("_CANSEESEARCHVIDEOSBUTTON","Can see search button");
DEFINE("_CANSEEHELPBUTTON","Can see help button");
DEFINE("_CANSEEDELETEVIDEOBUTTON","Can see delete video button");
DEFINE("_CANDELETEVIDEO","Can delete videos");
//DEFINE("_CANSEEEDITVIDEOBUTTON","Can see edit video button");
DEFINE("_CANEDITVIDEO","Can edit video");
DEFINE("_CANSEEFULLSCREENBUTTON","Can see full screen button");
DEFINE("_CANSEEDOWNLOADBUTTON","Can see download button");
DEFINE("_CANDOWNLOADVIDEO","Can download video");
DEFINE("_CANSEEREPORTBUTTON","Can see report button");
DEFINE("_CANREPORTVIDEOS","Can report videos");
DEFINE("_CANSEEDIRECTLINKBOX","Can see direct link box");
DEFINE("_CANSEEEMBEDBOX","Can see embed box");
DEFINE("_CANSEEVOTESTARTS","Can see vote stars");
DEFINE("_CANVOTE","Can vote");
DEFINE("_CANSEECOMMENTS","Can see comments");
DEFINE("_SEYRETACL","Seyret Access Permissions");
DEFINE("_EDIT_SEYRETACL","Edit Seyret Access Permissions");
DEFINE("_NEW_SEYRETACL","New Seyret Access Permissions");
DEFINE("_JACLNAME","Joomla Access Level");
DEFINE("_ACLCOMMENT","Please be careful with Joomla Access Level Name. It is important that you use lower case letters here otherwise it will not work correctly. For example, it is Administrator in Joomla ACL but here you should write administrator. At least you should create a 'guest' access level.");
DEFINE("_YOUDONTHAVEPERMISSIONS","You don't have permission for this operation. <p>If you are not logged in, please login to site and try again.");
DEFINE("_DOWNLOADS","Downloads");
DEFINE("_CANPUBLISHVIDEO","Can publish video");
DEFINE("_VIDEOADDEDSUCCESFULLY","Video has been added successfully. ");
DEFINE("_CANSEEVIDEOSERVERDETAILS","Can see video server details");
DEFINE("_AD_VIDEO_LIST","Ad Videos List");
DEFINE("_REMOTESERVERSUPPORTISNOTENABLED","Remote server support is not enabled. Please enable it from configuration panel.");
DEFINE("_USEAJAXBROWSING","Ajax Browsing");
DEFINE("_USEAJAXBROWSINGINFO","Use Ajax Supported Browsing. Don't forget this is a beta feature. Default should be yes. If you have Problems with no, just change it.");
DEFINE("_TWOCOLUMNSVIDEOLIST","Multi columns video listing");
DEFINE("_TWOCOLUMNSVIDEOLISTINFO","Multi columns video listing in front page. Select the most suitable choice for your template.");
DEFINE("_MULTICOLUMNCOUNT","Multi columns count");
DEFINE("_MULTICOLUMNCOUNTINFO","If you enable multi columns video listing, please also define the column count that you want.");
DEFINE("_YOUHAVENOACCESSRIGHTTOTHISVIDEO","You don't have access rights to this video. Please login first. If you've already logged in, then you should upgrade your account. Just click <a href={accesslevelupgradelink_dontchangethis}>here.</a>");
DEFINE("_VIDEOACCESSLEVEL","Video Access Level");
DEFINE("_UPGRADEACCESSLEVELLINK","Access Level Upgrade Link");
DEFINE("_UPGRADEACCESSLEVELLINKINFO","If you are using access levels for your videos, you can enter a link for user access level upgrade. Your users will see this link when they click a video that they don't have access rights to.");
DEFINE("_ACCESSLEVELCOUNT","Access Level Count");
DEFINE("_ACCESSLEVELCOUNTINFO","If you want to use access levels for your videos, you can configure the maximum number of access levels. Don't forget that, bigger number means higher access levels. If you leave blank this means everybody can access your videos.");
DEFINE("_VIDEOCAT_DIR","Category Directory");
DEFINE("_CATEGORYDIRECTORYWILLBEGENERATED","Directory for this category will be generated automatically. All videos for this category will be placed under this category.");
DEFINE("_LOCALFILESDIRECTORY","Base directory for local files");
DEFINE("_LOCALFILESDIRECTORYINFO","Base directory for local files. Category directories will be created under this directory. Should be in <b>/dir1/dir2</b> format.");
DEFINE("_LOCALVIDEO","Local Video");
DEFINE("_LOCALVIDEOINFO","If you wish to use local video, select the video file and thumbnail.");
DEFINE("_VIDEOCAT_FILELIST","Video List");
DEFINE("_VIDEOCAT_THUMBLIST","Thumbnail List");
DEFINE("_VIDEOSERVER","Video Server");
DEFINE("_VIDEOSERVERINFO","If you wish to add a video from a video server like YouTube of Google, enter the link and click th Apply button.");
DEFINE("_SERVERCODES","Server Codes");
DEFINE("_SERVERCODESINFO","If you're editing a video item and aren't sure about video info, please don't change anything here otherwise you'll cause the component to malfunction.");
DEFINE("_ATTRIBUTES","Attributes");
DEFINE("_THISISABACKUPFILE","This is a backup file");
DEFINE("_VIDEOADS","Video Ads");
DEFINE("_IMAGEADS","Image Ads");
DEFINE("_USEIMAGEADSYSTEM","Use Image Ad System");
DEFINE("_IMAGEADDURATION","Image Ad Duration");
DEFINE("_ISDOWNLOADABLE","Downloadable");
DEFINE("_ALLOWURLVALUE","allow_url_fopen");
DEFINE("_ALLOWURLVALUEINFO","Shows your php settings to allow_url_fopen which will be used for reading urls.");
DEFINE("_ON","On");
DEFINE("_OFF","Off");
DEFINE("_CURLLIB","curl Library");
DEFINE("_CURLLIBINFO","If this library is installed, Seyret will use it as default to read url contents.");
DEFINE("_NOTINSTALLED","Not Installed");
DEFINE("_INSTALLED","Installed");
DEFINE("_SEYRETFUNCSTATUS","Seyret Functionality");
DEFINE("_PASSED","Passed");
DEFINE("_FAILED","Failed");
DEFINE("_SEYRETFUNCSTATUSINFO","If seyret functionality test failed, this means both functions to get url content are disabled and you will not be able to use Seyret's full functionality. We advice you to contact your hosting Provider to enable at least one allow_url_fopen or curl.");
DEFINE("_IMAGEADDEFAULT","Default Image Ad");
DEFINE("_USEIMAGEADSYSTEMINFO","Image ads will be shown before videos if you choose yes. <b>This will run only if Pro features are enabled.</b>");
DEFINE("_IMAGEADDEFAULTINFO","Default image ad. If an image ad is not defined for a category, this ad will be shown as default.");
DEFINE("_IMAGEADDURATIONINFO","Duration of image ads to be shown in milliseconds.");
DEFINE("_UPLOADEDSUCCESSFULLY","Video uploaded successfully. Based on the site configurations, your video will be published immediately or will await moderation.");
DEFINE("_ID","Id");
DEFINE("_AD_IMAGE_LIST","Ad Image List");
DEFINE("_NEWIMAGEADCOMMENT","Please enter full URL of your image ad to be displayed. Also don't forget to select the category. If you define image ads for more than one in a category, a random one will be shown on front page. Please define the URL address to open after ad click.");
DEFINE("_REALNAME","Real Name");
DEFINE("_UNKNOWN","Guest");  
DEFINE("_RESETMYDOWNLOADSTATUS","Click here if you want to reset video download donation report"); 
DEFINE("_VIDEODOWNLOADOPTION","Video Download Option"); 
DEFINE("_PROSTATUS","Seyret Pro Status"); 
DEFINE("_SEYRETISNOTPRO","Your Seyret version is not upgraded to Pro version. In Pro version you'll have some more options to use Seyret. You can find more details about Pro version on www.joomlaholic.com. <p>Once you upgrade to Pro version, in newer versions you'll go on using as Pro."); 
DEFINE("_MAKEPROBUTTON","Upgrade to Pro"); 
DEFINE("_MAKEMEPRO","Enter the amount of Donation  "); 
//DEFINE("_UPGRADETOPRO","<b>Step-1:</b> Upgrading Pro version requires at least 40 USD to be donated. When you click one of the buttons below, you'll be redirected to Paypal page with required info automatically."); 
DEFINE("_UPGRADETOPROSTEP2","<b>Step-2:</b> This will inform us about your donation. After we approve your Pro donation, you'll be able to immediately start using Pro version. ApProving time will be minimal."); 
DEFINE("_SEYRETPROISPENDING","Your donation report for Pro features is pending approval. Sorry, we didn't receive any information from Paypal about your donation, so your report will be approved manually. Please check shortly. <p> If you think there is a mistake in your report, you can clear your Pro donation report by clicking the link below."); 
DEFINE("_RESETMYPROSTATUS","Click here if you want to reset Pro features donation report"); 
DEFINE("_SEYRETPROISAPPROVEDREFRESH","Your donation report is approved. <p>Please refresh this page now."); 
DEFINE("_COULDNTCONNECTTRYLATER","Your donation is reported, but we couldn't connect to Joomlaholic server for status control. Please try again later."); 
DEFINE("_YOUCANRESETIFMISTAKENLY","If you think there is a mistake in your report, you can clear your Pro donation report by clicking the link below."); 
DEFINE("_PROAPPROVED","Your Pro features donation is approved. Enjoy it.");
DEFINE("_NEEDTOUPDATE","Seyret Pro features definitons are outdated. We strongly advice you to update it.");
//DEFINE("_UPDATEPROPHP","Update Pro definitions.");
DEFINE("_ITISUPTODATE","Seyret Pro features definitons are up-to-date.");
DEFINE("_SEYRETPROISREJECTED","Your report is rejected. Our controls show that you didn't donate for Pro version. Your donation report will be reset to give option for you to donate. If you think that this is a mistake, please contact us."); 
DEFINE("_THISISAPROVERSIONFEATURE","Upgrade To Pro");
DEFINE("_GOTODONATIONSPAGETOENABLEPRO","This is a Pro version feature. You can enable Pro version features from Donations page.");
DEFINE("_USEVIDEOADSYSTEMINFO","Video ads will be shown in own player before videos if you choose yes. <b>This will run only if Pro features are enabled.</b>");
DEFINE("_USEVIDEOADSYSTEM","Use Video Ad System");
DEFINE("_VIDEOINFOREFRESHED","Video information is updated.");
DEFINE("_THUMBWIDTHINLIST","Thumb width in video list.");
DEFINE("_THUMBWIDTHINLISTINFO","Thumbnail width in video list. Use only number, don't add px.");
DEFINE("_FEATURED","Featured");
DEFINE("_DISCUSSIONONFORUM","Discussion");
DEFINE("_CLICKHERETODISCUSS","Click here to discuss the video");
DEFINE("_TOPICRE","Re: ");


DEFINE("_VIDEOINFO","Video Info");
DEFINE("_INPUTFBDISCUSSTOPIC","Subject");
DEFINE("_INPUTFBDISCUSSMESSAGE","Message");
DEFINE("_CATEGORYINFO","Category Info");
DEFINE("_CATEGORYNAME","Title");
DEFINE("_SUBCATEGORIES","Subcategories");
DEFINE("_VIDEOSINCAT","Video count");
DEFINE("_DISCUSSPOSTHEADER","Post a new message");
DEFINE("_SUBMITCOMMENT","Submit");
DEFINE("_LOGINTOWRITECOMMENT","Login to write comment");
DEFINE("_DONTDONATEIFYOUWILLMAKEPRO","If you are planning to upgrade to Pro, don't donate for download option. Pro users have this feature enabled already.");
DEFINE("_COMMENTINGSYSTEM","Commenting Sytsem");
DEFINE("_JOMCOMMENT","Jom Comment");
DEFINE("_FIREBOARD","Fireboard");
DEFINE("_COMMENTINGSYSTEMINFO","Select the default commenting system.");
DEFINE("_PUBLISHAFTERMODERATED","Will be published after moderation.");
DEFINE("_SHOWVIDEOTOOLTIPS","Show Video Tooltips");
DEFINE("_SHOWVIDEOTOOLTIPSINFO","Select the status of video tooltips here.");
DEFINE("_SHOWCATEGORYTOOLTIPS","Show Category Tooltips");
DEFINE("_SHOWCATEGORYTOOLTIPSINFO","Select the status of category tooltips here.");

DEFINE("_INTEGRATION","Integration");
DEFINE("_FIREBOARDCATEGORYFORDISCUSS","FB Discuss Category");
DEFINE("_FIREBOARDCATEGORYFORDISCUSSINFO","If you want to use Fireboard plugin only for commenting, leave this field as 0. If you want to use it as a discuss plugin, enter the category number for Fireboard.");
DEFINE("_LEAVEVIDEOLINK","Add backlink to video");
DEFINE("_LEAVEVIDEOLINKINFO","Add backlink to video in the first post of fireboard discuss thread.");
DEFINE("_YOUAREUSINGPRO","Your Seyret is PRO Version");
DEFINE("_GOTODONATIONSPAGE","To upgrade definitons, please go to Donations Page");
DEFINE("_NOTPROWANTTOUPGRADE","Your Seyret is not Pro version.<br> If you want to upgrade, go to donations menu. It will take only three minutes to complete.");
 

DEFINE("_IMAGEAD","Image Ads");
DEFINE("_CLICKLINK","Click Link");
DEFINE("_LOCALADSDIRECTORY","Local Ads Directory");
DEFINE("_LOCALADSDIRECTORYINFO","If you want to use local video ads, please define local ad directory address.");
DEFINE("_RSSCHANNELTITLEPRE","Latest Videos in ");
DEFINE("_RSSCHANNELTITLEPOST","Category");
DEFINE("_RSSLATESTVIDEOSCATDESCPRE","This feed contains latest videos from");
DEFINE("_RSSLATESTVIDEOSCATDESCPOST","site");

DEFINE("_CLISKHERETOSTART","Click here to start");
DEFINE("_DISABLEPRO","Disable Pro Features");
DEFINE("_DISABLEPROINFO","If there are some Problems with Pro features, -like video server changes- you can disable Pro functions temporarily until the Problem is solved.");



DEFINE("_TAGS","Tags");
DEFINE("_DIAGNOSTICS","Diagnostics");
DEFINE("_FILESYSTEM","File System"); 
DEFINE("_TEHERAREOWNERSHIPPROBLEMS","There are some file ownership Problems on your system. You may face some Problems. If errors occur, try giving 0777 rights to Problematic directories. But if you don't have any Problems we advice strict 0755");  
DEFINE("_THEREAREMISSINGFILES","There are some missing folders in seyretfiles directory tree. Because of file ownership Problems, they are not created automatically. You will have Problems with Seyret. Try ftp layer below to solve this Problem.");  
DEFINE("_MISSING","MISSING");
DEFINE("_FTPSERVER","Ftp Server");
DEFINE("_FTPUSERNAME","Ftp Username");
DEFINE("_FTPPASSWORD","Ftp Password");
DEFINE("_JOOMLAROOT","Joomla Root");
DEFINE("_TRYFTP","Try Ftp");
DEFINE("_NEEDFTP_LAYER","Ftp Account Details");
DEFINE("_FTPSERVERINFO","Enter ftp server for this site. Like ftp.example.com");
DEFINE("_FTPUSERNAMEINFO","Enter your ftp username");
DEFINE("_FTPPASSWORDINFO","Enter ftp password");
DEFINE("_JOOMLAROOTINFO","Main directory for your Joomla install. Be careful with this value. This is not full address of directory. It is relative to your ftp access. May be like /www  or  /httpdocs");
DEFINE("_THEREARENOPROBLEMS","There are no Problems with seyret file system on your site.");
DEFINE("_DIRECTORY","Directory"); 
DEFINE("_OWNER","Owner"); 
DEFINE("_ACCESS","Access"); 
DEFINE("_RESULT","Result"); 
DEFINE("_CONNECTION","Connection");
DEFINE("_CACHE","Cache");
DEFINE("_CLEARVIDEOCACHE","Click here to clear video cache");

DEFINE("_GOOGLECONNECTCHECK","Google Connect");
DEFINE("_CONNECTED","Connected");
DEFINE("_GOOGLECONNECTCHECKINFO","This is a test for your server connection ability.");

// 0.2.7 	*** added by Balaam ***
DEFINE("_NORIGHTS","You do not appear to have sufficient rights to access this feature.<br/>Please contact your system administrator or webmaster.");

//0.2.7.7 starts
DEFINE("_CONVERSION","Conversion");
DEFINE("_FFMPEGPATH","FFMPEG Path");
DEFINE("_FFMPEGPATHINFO","Enter the path for ffmpeg. ");
DEFINE("_VIDEOCONVERSION","FLV Conversion");
DEFINE("_ENABLEFLVCONVERSION","Enable FLV Conversion");
DEFINE("_ENABLEFLVCONVERSIONINFO","This option will work with only Seyret PRO. If you encounter any problems with flv conversion or if you don't have a strong server, you can disable flv conversion.");
DEFINE("_ENABLEAUTOMATICTHUMBNAILEXTRACTION","Enable thumbnail extraction");
DEFINE("_ENABLEAUTOMATICTHUMBNAILEXTRACTIONINFO","This option will work with only Seyret PRO. If you encounter any problems with thumbnail extraction, you can disable it.");
DEFINE("_INSTANTVIDEOPROCESS","Instant Video Conversion Process");
DEFINE("_INSTANTVIDEOPROCESSINFO","If you select yes, uploaded videos will be processed just after upload. If you select no, they will not be processes. Uploaded videos will be saved and will be added to conversion queue. Administrator will convert them.");
DEFINE("_INSTANTTHUMBPROCESS","Instant Thumbnail Extraction");
DEFINE("_INSTANTTHUMBPROCESSINFO","If you select yes, thumbnails for your uploaded videos will be extracted instantly. We advice this feature, so that your users will be able to select their thumbnail for their video.");
DEFINE("_VIDEODIMENSIONS","FLV Dimensions");
DEFINE("_VIDEODIMENSIONSINFO","Set your flv dimensions here. Don't forget that, bigger dimensions will result big file size. So try to set the optimum size for your needs and server.");
DEFINE("_AUDIOBITRATE","Audio Bitrate");
DEFINE("_AUDIOBITRATEINFO","Define audio bitrate for generated flv files.  Default is 64");
DEFINE("_AUDIOSAMPLINGFREQUENCY","Audio Sampling Frequency");
DEFINE("_AUDIOSAMPLINGFREQUENCYINFO","Define audio sampling frequency for generated flv files. Default is 44100.");
DEFINE("_VIDEOFRAMERATE","Video Frame Rate");
DEFINE("_VIDEOFRAMERATEINFO","Set video frame rate. Default is 25");
DEFINE("_VIDEOBITRATE","Video Bitrate");
DEFINE("_VIDEOBITRATEINFO","Set video bitrate. Default is 200");
DEFINE("_THUMBNAILEXRACTION","Thumbnail Extraction");
DEFINE("_THUMBNAILDIMENSIONS","Thumbnail Dimensions");
DEFINE("_THUMBNAILDIMENSIONSINFO","Set thumbnail dimensions here.");
DEFINE("_THUMBNAILDIMENSIONSBIG","Big Thumbnail Dimensions");
DEFINE("_THUMBNAILDIMENSIONSBIGINFO","There will be a big thumbnail extracted. This will be used for flash player preview image.");
DEFINE("_SCREENSHOTSECOND","Get image on second");
DEFINE("_SCREENSHOTSECONDINFO","Set the default time to extract the thumbnal image. On some videos using 00:00:00 will result a black image, so default is 00:00:05");
DEFINE("_UNPROCESSEDFILEINFO","There is an unprocessed video upload on your account. If you want to share it, you should complete publishing process. If you don't go on, your uploaded video will be deleted after time limit.");
DEFINE("_UPLOADEDFILENAME","File Name");
DEFINE("_UPLOADEDDATE","Upload Date");
DEFINE("_SELECTVIDEOSTOUPLOAD","Select Videos");
DEFINE("_SELECTVIDEOSTOUPLOADINFO","Select videos that you want to upload. After you select, it will be added to upload queue.");
DEFINE("_SELECTTHUMBSTOUPLOAD","Select Thumbnail");
DEFINE("_SELECTTHUMBSTOUPLOADINFO","You can upload a thumbnail for your video. Try to upload a thumbnail that represents your video well.");
DEFINE("_BROWSEFILES","Browse Files");
DEFINE("_UPLOADINGFILE","Uploading ...");
//DEFINE("_UPLOADCOMPLETE","Completed!");
DEFINE("_REMOVEFROMQUEUE","Remove from queue");
DEFINE("_VIDEOFILES","Video Files");
DEFINE("_MAXFILESIZEEXCEEDS","This file exceeds permitted maximum file size.");
DEFINE("_MAXIMUM","Max");
DEFINE("_UPLOADQUEUE","Upload Queue");
DEFINE("_UPLOADQUEUEINFO","Check the selected files and start uploading.");
DEFINE("_STARTUPLOAD","Start Upload");
DEFINE("_INPROCESSPLEASEWAIT","Please wait, upload result is being checked...");
DEFINE("_TERMSOFUSEINFO","Please read terms of use carefully.");
DEFINE("_TERMSOFUSE","TERMS OF USE");
DEFINE("_ACCEPTTERMSOFUSE","I've read terms of use and accept all of them.");
DEFINE("_DENYTERMSOFUSE","I don't accept terms of use. I want to uninstall.");
DEFINE("_DENYCONFIRMINFO","If you don't accept terms of use, you should uninstall Seyret completely.<br>If you select uninstalling here, all database tables will be removed.");
DEFINE("_DENYCONFIRM","CONFIRM");
DEFINE("_ILLREADTERMSAGAIN","I want to read terms of use again.");
DEFINE("_ILLUNINSTALL","I'm sure, I want to uninstall completely.");
DEFINE("_NOCOMMENT","No comment");
DEFINE("_CANSEEEDITVIDEOBUTTON","Can see edit button for all videos");
DEFINE("_CANEDITANYVIDEO","Can edit all videos");
DEFINE("_CANEDITOWNVIDEO","Can edit own videos");
DEFINE("_CANDELETEANYVIDEO","Can delete all videos");
DEFINE("_CANDELETEOWNVIDEO","Can delete own videos");
DEFINE("_USEJOOMLAEDITOR","Use Joomla editor");
DEFINE("_USEJOOMLAEDITORINFO","If you choose yes, on video input process, joomla html editor will be used for video details area. On some editors, this may cause security problem.");
DEFINE("_RSSCHANNELTITLEALLCATEGORIES","Latest Videos in all categories");
DEFINE("_RSSCHANNELTITLEHIGHESTRATEDPRE","Highest Rated Videos in");
DEFINE("_RSSCHANNELTITLEHIGHESTRATEDPOST","Category");
DEFINE("_RSSCHANNELTITLEALLCATEGORIESHIGHESTRATED","Highest Rated Videos in all categories");
DEFINE("_RSSVIDEOSCATDESCPRE","This feed contains the videos from");
DEFINE("_RSSVIDEOSCATDESCPOST","site");
DEFINE("_GENERATERSSFEEDINFO","Please select feed type and your feed options below. Feed link will be updated automatically when you change options.");

DEFINE("_ALLCATEGORIES","All Categories");


DEFINE("_VIDEOUPLOADISSUCCESS","Your file is successfully uploaded.");
DEFINE("_VIDEOCONVERTSUCCESS","Your video is successfully processed.");
DEFINE("_VIDEOCONVERTPOSTPONED","Your video will be processed by admin soon.");
DEFINE("_VIDEOCONVERTNOTSET","Video conversion is not set on this server.");




DEFINE("_UPLOADCONTROL","Upload Check");
DEFINE("_CONVERSIONCHECK","Video Conversion");
DEFINE("_THUMBNAILCHECK","Thumbnail Extraction");
DEFINE("_GETTINGINPUTFORM","Getting Input Form");
DEFINE("_PLEASEFILLTHEDETAILSBELOW","Please enter the following details about your video.");


DEFINE("_THUMBNAILSEXTRACTED","Thumbnails are generated.");
DEFINE("_THUMBNAILSEXTRACTIONBYADMIN","Thumbnails will be generated by admin later.");
DEFINE("_NOTHUMBNAILSEXTRACT","Thumbnails will not be generated by system.");

DEFINE("_DONTEXTRACT","Don't extract");

 
DEFINE("_PLEASESELECTTHUMBNAIL","Please select a thumbnail for your video");

DEFINE("_SIZEEXCEEDSERVERCONF","Upload failed. Your video size exceeds server configuration maximum size.");
DEFINE("_SIZEEXCEEDCOMPONENTCONF","Upload failed. Your video size exceeds component configuration maximum size.");
DEFINE("_PARTIALUPLOADERROR","The video was only partially uploaded. Try again please.");
DEFINE("_UNSUPPORTEDFILETYPE","Unsupported file type.");
DEFINE("_THEFILEISBIGGERPOSTMAXSIZE","File is larger than server maximum post size.");


DEFINE("_NOTUPLOADEDERROR","Video file was not uploaded. Please try again.");
DEFINE("_SEYRETDATE","Date");
DEFINE("_SEYRETMENU","SEYRET MENU");
DEFINE("_PROUPDATEERROR","Pro definitions couldn't be updated. Probably you are having a problem with write permissions.");
DEFINE("_FORMOREINFORMATIONABOUTPRO","You can find some information about pro version on our wiki. Please click here.");
DEFINE("_COULDNTCONNECTTRYLATER2","We couldn't connect to the Joomlaholic server to check your Seyret status. Please try again later."); 
DEFINE("_VIDEOLINK","Video Link"); 

DEFINE("_SHOWORIGINALVIDEOLINK","Show Original Video Link"); 
DEFINE("_SHOWORIGINALVIDEOLINKINFO","Select yes to show a link to the original location of video beneath the embedded player."); 
DEFINE("_ORIGINALVIDEOISHERE","Click here to see original video."); 

DEFINE("_FFMPEGPREEXEC","Execute before ffmpeg"); 
DEFINE("_FFMPEGPREEXECINFO","If you are on a shared hosting and you've compiled ffmpeg yourself, you may need to execute some environment definitions to include libraries. If ffmpeg is installed by your hosting company, leave this value blank."); 

DEFINE("_CACHEDIRISMISSINGPLEASECREATE","Following cache folder could not be created by system. Please create it manually and give appropriate read/write permissions."); 

DEFINE("_ERRORREPORTING","Error Reporting");
DEFINE("_ERRORREPORTINGINFO","You can define your system error reporting policy here.");
DEFINE("_NOERRORREPORT","Don't report any errors");
DEFINE("_SHOWERRORSEXCEPTNOTICES","Show all errors except notices");
DEFINE("_SHOWERRORSINCLUDINGNOTICES","Show all errors including notices");
DEFINE("_PLAYTIME","Playtime");
DEFINE("_SECONDS","Seconds");

DEFINE("_STARTBATCHCONVERSION","Start Batch Conversion");
DEFINE("_BATCHCONVERSIONINFO","You can convert all non-flv videos to flv and extract thumbnails. Please select conversion options here.");
DEFINE("_DONTEXTRACTTHUMBNAIL","Don't extract thumbnails.");
DEFINE("_EXTRACTALLTHUMBNAILS","Extract all thumbnails for non-flv videos.");
DEFINE("_EXTRACTONLYMISSINGTHUMBNAILS","Extract thumbnails for non-flv videos if thumbnail is missing.");
DEFINE("_DONTCONERTTOFLV","Don't convert to flv. If you only want to extract thumbnails, check this.");
DEFINE("_FORCEREENCODEOLDFLV","Force reencoding uploaded flv videos with your settings.");
DEFINE("_DELETEORIGINALFILE","Delete original non-flv video from server after conversion.");
DEFINE("_DEFAULTTIMETOSNAPSHOT","Default time to take snapshot for video in seconds.");
DEFINE("_CONVERSIONVIDEOCOUNT","Video count to convert this time.");



DEFINE("_UPLOADCOMPLETE","Please wait, getting form!");
DEFINE("_RIGHTCLICKANDSAVE","Right click and save...");

DEFINE("_FIREBOARDCONFIGERROR","There is an error with your Fireboard installation. Fireboard Configuration File cannot be found. Please check your Fireboard installation.");
DEFINE("_ABOUTTHISVIDEO","About this video");
DEFINE("_FFMPEGNOTFOUND","Error: Converter tool not found. Please contact administrator.");
DEFINE("_MENCODERNOTFOUND","Error: Converter tool not found. Please contact administrator.");
DEFINE("_INPUTFILENOTFOUND","Error: Input file not found. Please contact administrator.");

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

DEFINE("_FEATUREDVIDEOS","Featured");
DEFINE("_LATESTVIDEOS","Latest");
DEFINE("_HIGHESTRATEDVIDEOS","Highest Rated");
DEFINE("_MOSTDISCUSSEDVIDEOS","Most Discussed");
DEFINE("_MOSTVIEWEDVIDEOS","Most Viewed");
DEFINE("_READMORE","More");
DEFINE("_LESS","Less");
DEFINE("_INCATEGORY","Category");
DEFINE("_INCHANNEL","Channel");
DEFINE("_DISPLAYSTYLE","Display");
DEFINE("_CATIDS","Category Ids");

DEFINE("_SEARCHVIDEOS","Search Videos"); 
DEFINE("_SMALLSTATISTICSPRE","Total "); 
DEFINE("_SMALLSTATISTICSPOST"," videos");  
DEFINE("_VIDEOSINCATEGORYPRE","Videos in ");  
DEFINE("_VIDEOSINCATEGORYPOST"," category");   
DEFINE("_GUEST"," Guest");

DEFINE("_JOINED"," Joined");
DEFINE("_OWNEDVIDEOSCOUNT"," Videos");
DEFINE("_THISVIDEOINFORMATION","This Video");
DEFINE("_THISVIDEOINFORMATIONMORE","Other Information");
DEFINE("_SUBSCRIBETHISCHANNEL","Subscribe this channel");
DEFINE("_DIRECTURL"," URL");
DEFINE("_EMBED"," Embed");

DEFINE("_FULLSCREENBTN","Full Screen");
DEFINE("_DOWNLOADBTN","Download");
DEFINE("_REPORTBTN","Report");
DEFINE("_DELETEBTN","Delete");
DEFINE("_EDITBTN","Edit");
DEFINE("_REFRESHBTN","Refresh");
DEFINE("_REPLYBTN","Response");

DEFINE("_ADDFROMANOTHERSERVER","Add from another site");
DEFINE("_UPLOADFROMMYCOMPUTER","Upload from computer");
DEFINE("_YOUAREADDINGAREPLYTO","You are adding a video response to");
DEFINE("_NOTAREPLY","Not a response");
DEFINE("_ISAREPLYTO","Response to");
DEFINE("_THISISAREPLYTOPRE","This video is a response to");
DEFINE("_THISISAREPLYTOPOST","");

DEFINE("_SEYRETPLUGINS","Plugin Updates");
DEFINE("_FORCELAMESUPPORT","Lame Support");
DEFINE("_FORCELAMESUPPORTINFO","You can disable Lame support for conversion. This will help to determine your video conversion problems.");


DEFINE("_DONATEFORPROMETHOD1","<b>METHOD 1 :</b> You can get Seyret pro by donating via Paypal. Click one of the Paypal logos with your donation amount and go to Paypal Donation Page. In the Paypal page, your Joomlaholic user id will be included.");
DEFINE("_DONATEFORPROMETHOD2","<b>METHOD 2 :</b> If you have a Seyret pro Coupon, you can use it to upgrade your Seyret to pro.");
DEFINE("_COUPONMETHOD","Use Seyret Pro Coupon");
DEFINE("_PAYVIAPAYPAL","Donate via Paypal");
DEFINE("_WANTTOUSECOUPON","I want to use Seyret Coupon");
DEFINE("_SUBMITCOUPON","Submit Coupon");
DEFINE("_MOVEPRO","Move Pro License");
DEFINE("_MOVEPROINFO","If you want to move your pro license, please request a coupon code here. After you get your pro coupon code, you should use it in 6 hours. Use that code on your new site, on donations page.");

DEFINE("_REQUESTCOUPONCODETOMOVE","Request Coupon Code");

DEFINE("_UPDATEPROPHP","Update Pro definitions");
DEFINE("_THISISYOURCOUPONCODE","This is your coupon code. It is case sensitive. It will be valid in next 2 hours. If you don't use it in 2 hours, please request a new coupon code.<br/> You can use this coupon code on another site to move your pro license.<br/>You can move a pro license up to three times.<br/>");
DEFINE("_SECURITYCODENEEDED","Security Code Is Missing");
DEFINE("_SECURITYCODENEEDEDINFO","This is a local installation. Your pro is approved, however due to your security, you should enter your 'Security Code 2' that was sent to your mail address. Until you enter this code, pro version will not be activated.<br> If you have not received your Security Code, please contact Joomlaholic Administrator with your payment details.");
DEFINE("_SECURITYCODENEEDEDENTER","Enter Security Code");
DEFINE("_ENTERYOURSECURITYCODE2","Enter Security Code 2 Here. Never share your Security code 2 with anybody.");
DEFINE("_SUBMITSC2","Submit");


//DEFINE("_CATEGORYINFO","Category Info");

DEFINE("_CATEGORIESQUICKLIST","Quick List");
//-----------------------
DEFINE("_THISTHREADISABOUTPRE","This thread is about");
DEFINE("_THISTHREADISABOUTPOST","video.");


DEFINE("_THISVIDEOISADDEDBEFORE","This video was added before.");




DEFINE("_MOVELIMIT","Move Limit");

DEFINE("SHOWREPLIES","Video Responses");
DEFINE("_VIDEONOTFOUND","Video not found");

DEFINE("_SEYRETCOMPATIBLEPLUGINS","Listed updates are the packages that are compatible with your Seyret version.");



//--------------Flash Dashboard
DEFINE("_PROSTATUSLABEL","Pro Version");
DEFINE("_JHUSERID","JH User Id");
DEFINE("_FLAPROAPPROVED","Approved");
DEFINE("_FLANOTPRO","Not Upgraded");
DEFINE("_SYSTEMINFOL","SYSTEM INFO");
DEFINE("_PRODEFINITIONS","Pro Definitions");
DEFINE("_FLATERMSOFUSE","TERMS OF USE");
DEFINE("_YOURVERSION","Installed Version");
DEFINE("_LATESTVERSION","Latest Version");
DEFINE("_JH_MESSAGES","JH MESSAGES");
DEFINE("_PRODEFINITIONSUPTODATE","Up-to-date");
DEFINE("_PRODEFINITIONSOUTDATED","Outdated");
DEFINE("_PRODEFINITIONSNOTPRO","Standard Version");
DEFINE("_SECNEEDED","Security Code Needed");
DEFINE("_CONNERROR","Connection Error");
DEFINE("_SEYRETTHEME","Seyret Theme");
DEFINE("_SBUTTONPACK","Button Pack");
DEFINE("_HALLOFFAME","HALL OF FAME");
DEFINE("_VERSIONSPONSOR","VERSION SPONSOR");






//------------

DEFINE("_VIDEORESPONSESYSTEM","Enable Video Response System");
DEFINE("_VIDEORESPONSESYSTEMINFO","Enable Video response system. This will work with pro version only.");

DEFINE("_PLAYERSKIN","Player Skin");

DEFINE("_LONGTAILADS","LongTail Ads");
DEFINE("_LONGTAILENTERCODE","Please copy the javascript code from your LongTail Video Integration page and paste it to the inbox below.  ");
DEFINE("_LONGTAILVIDEOTUTORIAL","For a video tutorial, please click here.");
DEFINE("_SUBMITLONGTAILCODE","Submit");
DEFINE("_LONGTAILENTEREDPARAMETERS","Your recorded LongTail Integration parameters are as following:");
DEFINE("_LONGTAILNOTENTEREDPARAMETERS","LongTail has not been configured yet.");
DEFINE("_LONGTAILSOLUTIONCONFIG","LongTail Configuration");
DEFINE("_LONGTAILSOLUTIONINFO","LongTail Video is the premier destination for online video solutions. Whether you're a webmaster looking for the best website player; a consumer looking for a great desktop player; a publisher interested in driving more traffic to their site or monetizing videos with ads, LongTail Video can help.<p>With Seyret Pro, you can easily publish LongTail Video Ads on your site. Signing up to LongTail Video Ads is FREE. Sign up and start earning money immediately.");
DEFINE("_FREELONGTAILSIGNUP","Sign up LongTail - FREE");


DEFINE("_CACHECATEGORYIMAGES","Cache Category Images");
DEFINE("_CACHECATEGORYIMAGESINFO","You can save category images on your own server. If you select yes, category images will be downloaded on your server automatically.");
DEFINE("_CACHEVIDEOIMAGES","Cache Video Images");
DEFINE("_CACHEVIDEOIMAGESINFO","You can save video thumbnails on your server. If you select yes, video thumbnails will be downloaded on your server automatically.");
DEFINE("_INTEGRATEAUP","Integrate Alpha User Points");
DEFINE("_INTEGRATEAUPINFO","Pro feature - You can integrate Alpha User Points component with your Seyret");





DEFINE("_LATESTVIDEOSCOLUMNCOUNT","Latest Videos Columns");
DEFINE("_LATESTVIDEOSCOLUMNCOUNTINFO","Latest Videos Columns Count on SEYRET MAIN PAGE");
DEFINE("_HIGRATEDVIDEOSCOLUMNCOUNT","Highest Rated Videos Columns");
DEFINE("_HIGRATEDVIDEOSCOLUMNCOUNTINFO","Highest Rated Videos Columns Count on SEYRET MAIN PAGE");
DEFINE("_MOSTVVIDEOSCOLUMNCOUNT","Most Viewed Videos Columns");
DEFINE("_MOSTVVIDEOSCOLUMNCOUNTINFO","Most Viewed Videos Columns Count on SEYRET MAIN PAGE");
DEFINE("_FEATUREDVIDEOSCOLUMNCOUNT","Featured Videos Columns");
DEFINE("_FEATUREDVIDEOSCOLUMNCOUNTINFO","Featured Videos Columns Count on SEYRET MAIN PAGE");










//Line 469




DEFINE("_VIDEOINPLAYLIST","Videos:");



?>