<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

//Seyret Component v.0.2.6//
/**
* Content code
* @package SEYRET
* @Copyright (C) 2006 Mustafa DINDAR
* @ All rights reserved
* @ seyret Component is Free Software
* @ Released under GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
* @version 0.2.6
**/	
DEFINE("_COMPONENT_NAME","Seyret-Video Listeleme Sistemi");
DEFINE("_JUMPTO","Sayfa");
DEFINE("_VIDEOLISTHEADERPRE","\"");
DEFINE("_VIDEOLISTHEADERSUF","\" kategorisindeki videolar");
DEFINE("_HIT","T�klama");
DEFINE("_VIDEOTITLE","Ba�l�k");
DEFINE("_DETAILS","Detaylar");
DEFINE("_RATING","Be�enilme");
DEFINE("_NUMBEROFVOTE","Oy say�s�");
DEFINE("_NOVOTE","Oy yok");
DEFINE("_LOGINFORVOTE","Oy kullanmak i�in giri� yapmal�s�n�z!");
DEFINE("_THANKSFORVOTE","Oy verdi�iniz i�in te�ekk�rler!");
DEFINE("_WAITAMOMENT","L�tfen bekleyiniz!");
DEFINE("_TOPLEVEL","Ana");
DEFINE("_VIDEOGROUPTITLE","Video Kategorileri");
DEFINE("_CATEGORIES","Kategoriler");
DEFINE("_VIDEOS","Videolar");
//DEFINE("_GENERALCONFIG","Ayarlar");
DEFINE("_EXPANDALL","T�m�n� A�");
DEFINE("_CLOSEALL","T�m�n� Kapat");
DEFINE("_VIDEO_CATEGORIES","Video Kategorileri");
DEFINE("_VIDEOCAT_CODE","Kategori Kodu");
DEFINE("_VIDEOCAT_NAME","Kategori Ad�");
DEFINE("_VIDEOCAT_PARENT","�st Kategori");
DEFINE("_EDIT_CATEGORY","Kategori D�zenle");
DEFINE("_NEW_CATEGORY","Yeni Kategori");
DEFINE("_NEWVIDEOCATCOMMENT","Burada yeni kategorileri olu�turabilirsiniz. Oldu�turdu�unuz kategori alt kategori ise ait oldu�u kategoriyi belirtmeyi unutmay�n�z.");
DEFINE("_DEVELOPER","Geli�tirici");
DEFINE("_INFO","Bilgi");
DEFINE("_SEYRETTHANKS","Te�ekk�r");
DEFINE("_VERSION_INFO","S�r�m");
DEFINE("_COPYRIGHT","Telif Hakk�");
DEFINE("_LICENSE","Lisans");
DEFINE("_YOUTUBEID","YouTube Developer Id");
DEFINE("_YOUTUBEIDINFO","Burada <b>YouTube Developer Id</b> bilgisini girmeniz gerekmektedir. Bile�en bu kodu kullanarak video ba�l���, resim konumu gibi videoya ait bilgileri �ekmektedir. Bu kodu girmemeniz durumunda bile�enin bu �zelli�inden faydalanamayaca��n�z i�in bilgileri kendiniz girmeniz gerekecektir..");
DEFINE("_TITLELENGTH","Ba�l�k Uzunlu�u");
DEFINE("_TITLELENGTHINFO","Video listelerinde g�r�nt�lenecek ba�l���n uzunlu�unu giriniz. Sayfa g�r�n�m�ne g�re en uygun de�eri bulabilirsiniz. ");
DEFINE("_DETAILSLENGTH","Detay Uzunlu�u");
DEFINE("_DETAILSLENGTHINFO","Video listelerinde g�r�nt�lenecek detaylar�n uzunlu�unu giriniz. Sayfa g�r�n�m�ne g�re en uygun de�eri bulabilirsiniz.. ");
DEFINE("_CONFIG_OK","Ayarlar kaydedildi!");
DEFINE("_CONFIG_ERR","Hata: Ayarlar kaydedilemedi!");
DEFINE("_VIDEOWIDTH","Video Geni�li�i");
DEFINE("_VIDEOWIDTHINFO","�n sayfada video geni�li�i. Sayfan�z�n g�r�n�m�ne g�re en uygun de�eri giriniz.");
DEFINE("_VIDEOHEIGHT","Video Y�ksekli�i");
DEFINE("_VIDEOHEIGHTINFO","�n sayfada video y�ksekli�i. Sayfan�z�n g�r�n�m�ne g�re en uygun de�eri giriniz.");
DEFINE("_VIDEO_LIST","Video Listesi");
DEFINE("_VTHUMB","K���k Resim");
DEFINE("_VIDEO","Video");
DEFINE("_EDIT_VIDEO","Video D�zenle");
DEFINE("_NEW_VIDEO","Yeni Video");
DEFINE("_VSERVERTYPE","Sunucu Tipi");
DEFINE("_VSERVERCODE","Sunucu Kodu");
DEFINE("_NEWVIDEOCOMMENT","Yeni video eklemek i�in en uygun yol �n sayfadan admin olarak giri� yaparak admin se�ene�ini kullanmakt�r. Orada sadece video ba�lant�s�n� girerek gereken di�er bilgileri sistemin �ekmesini sa�layabilirsiniz. <br> Bir videoyu d�zenliyorsan�z ve ne yapt���n�zdan iyice emin de�ilseniz l�tfen yan�nda uyar� i�areti olan de�erleri bozmamaya dikkat ediniz. Aksi takdirde bile�enin d�zg�n �al��mas�na engel olabilirsiniz.");
DEFINE("_APPLY","Uygula");
DEFINE("_SAVE","Kaydet");
DEFINE("_INPUTLINK","Ba�lant�y� Giriniz");

//Version 0.2=============================================================================================

DEFINE("_ISTHISFRESHINSTALL","Seyret veritaban� tablolar� bulunamad�.<br><strong>Veri kayb�ndan ka��nmak i�in dikkatli olunuz.</strong><br>");
DEFINE("_IFTHISISFRESHINSTALL","E�ER BU YEN� B�R KURULUMSA");
DEFINE("_IFTHISISUNINSTALL","B�LE�EN� KALDIRIYORSANIZ");
DEFINE("_THISWILLDROPTABLES","Kurulumu tamamlamak i�in a�a��daki resme t�klay�n�z.");
DEFINE("_INSTALLATTENTION","<strong>Bu i�lemde mevcut b�t�n tablolar de�i�tirilecek.</strong>."); 
DEFINE("_FRESHINSTALLSUCCESS","Seyret Veritaban� Ba�ar�yla Kuruldu.");
DEFINE("_UNINSTALLEXPL","Seyret veritaban� tablolar�n� ba�ar�yla kald�rd�n�z.<br><br>L�tfen Joomla bile�en y�netimi b�l�m�nden bile�eni tamamen kald�rmay� unutmay�n�z.");
//DEFINE("_THISISANUPDATEINFO","Seyret bile�enini y�kseltiyorsunuz.<br><b>Maalesef bu seferlik eski Bu y�zden b�t�n video bilgilerini kaybedeceksiniz.<br>Fakat ileriki s�r�mler i�in veritaban� y�kseltme imkan� sunaca��z.</b>");
DEFINE("_THISISANUPDATE","Y�KSELT");
DEFINE("_JOOMLAALEMMESSAGE","Joomlaholic �lanlar�");
DEFINE("_YOUDONTWANTTRACKING","Mesaj al�m� i�in izin vermiyorsunuz. Yeni s�r�m ve g�venlik duyurular�n� buradan izleyemeyeceksiniz. Ayarlar b�l�m�nden mesaj al�m� �zelli�ini a�man�z� tavsiye ediyoruz.");
DEFINE("_VERSIONTRACKINGINFO","<b>Burada Joomlaholic mesajlar�n� al�p almayaca��n�z� belirleyebilirsiniz.<br><br>Mesaj al�m�n� onaylarsan�z, sistem Joomlaholic sunucular�na ba�lanacak ve sitenize �zel bir kullan�c� kodu olu�turulacakt�r. <br><br>B�ylece y�netim panelinden Joomlaholic mesajlar�n� g�rebilecek, yeni s�r�mlerden haberdar olacaks�n�z.<br><br>Ayr�ca bu kullan�c� kimli�iniz video indirme �zelli�i i�in kullan�lacakt�r. <br><br>E�er mesaj al�m�n� kapatmay� se�erseniz Joomlaholic sunucular�na ba�lanmayacaks�n�z.<b>");
DEFINE("_PLEASESELECTTRACKINGCHOICE","L�TFEN SE��N�Z");
DEFINE("_THEME","Tema");
DEFINE("_THEMEINFO","L�tfen sitenizde kullanaca��n�z Seyret bile�eni temas�n� se�iniz.");
DEFINE("_ADDVIDEO","Video Ekle");
DEFINE("_PENDINGVID","Bekleyen Videolar");
DEFINE("_SORTBY","S�rala");
DEFINE("_NOSERVERFOUNDREPORTIT","�zg�n�z, fakat bu ba�lant�ya uygun bir video sunucu bulamad�k. Ba�lant�n�n do�ru oldu�undan eminseniz site y�neticiniz ile irtibata ge�iniz.");
DEFINE("_ADDEDBY","Ekleyen");
DEFINE("_ADDEDDATE","Tarih");
//DEFINE("_YOUSHOULDLOGINTOADDVIDEO","Video eklemek i�in giri� yapmal�s�n�z.");
DEFINE("_ASCENDING","Artan");
DEFINE("_DESCENDING","Azalan");
DEFINE("_POPUPVIDEOWIDTH","A��l�r pencere video geni�li�i");
DEFINE("_POPUPVIDEOHEIGHT","A��l�r pencere video y�ksekli�i");
DEFINE("_DEFAULTSORTBY","�ntan�ml� video s�ralama kriteri");
DEFINE("_DEFAULTSORT","�ntan�ml� s�ralama �ekli");
DEFINE("_POPUPVIDEOWIDTHINFO","Burada, a��l�r penceredeki video geni�li�ini belirtiniz. Pencere geni�li�i buradaki geni�likten 100px daha fazla olacakt�r.");
DEFINE("_POPUPVIDEOHEIGHTINFO","Burada, a��l�r penceredeki video y�ksekli�ini belirtiniz. Pencere geni�li�i buradaki y�kseklikten 100px daha fazla olacakt�r.");
DEFINE("_DEFAULTSORTBYINFO","L�tfen s�ralama kriterini belirleyiniz."); 
DEFINE("_DEFAULTSORTINFO","L�tfen s�ralama �eklini artan veya azalan olarak belirleyiniz."); 
DEFINE("_THISAREAISONLYFORREGISTEREDUSERS","Sadece kay�tl� kullan�c�lar video indirebilir. L�tfen kullan�c� ad�n�zla siteye giri� yap�n�z.");  
DEFINE("_COPYTHISLINK","Kopyalay�n�z");  
DEFINE("_YOURUSERIDRESTORED","Kullan�c� kodunu yeniden kaydedildi!");   
DEFINE("_YOURUSERIDGENERATED","Kullan�c� kodunuz ba�ar�yla olu�turuldu!");   
DEFINE("_YOURUSERIDPROBLEM","Joomlaholic kullan�c� kodunuzla ilgili bir problem var! L�tfen Joomlaholic y�neticileriyle irtibata ge�iniz!");  
DEFINE("_YOUDONTHAVEADMINISTRATORRIGHTS","Y�netici haklar�n�z yok! E�er y�netici olman�za ra�men bu mesaj� al�yorsan�z muhtemelen acl problemleri ya��yorsunuzdur. Bekleyen videolar� onaylamak i�in y�netici panelini kullanabilirsiniz.");  
DEFINE("_IFPUBLISHED","Yay�nlanma Durumu");   
DEFINE("_YES","Evet");   
DEFINE("_NO","Hay�r");   
DEFINE("_ENABLEDOWNLOADS","�ndirmeleri Etkinle�tir");   
DEFINE("_ENABLEDOWNLOADSINFO","Bu s�r�mde indirme linkleri Joomlaholic sunucular�nda olu�turuluyor. Video indirmeyi etkinle�tirmek i�in Joomlaholic sistemine en az $7 ba���laman�z gerekmektedir. <br>E�er hen�z ba���ta bulunmad�ysan�z soldaki men�den Ba���lar b�l�m�ne gidiniz. Ba��� yapt�ktan sonra yine ayn� yerden bizi bilgilendirmeyi unutmay�n�z.");   
DEFINE("_JALEMUSERID","Joomlaholic Kullan�c� Kodu"); 
DEFINE("_JALEMUSERIDINFO","Sitenizin Joomlaholic kullan�c� kodu. Bu kod b�t�n Joomlaholic i�lemlerinde i�inize yrayacak."); 
DEFINE("_DONATIONS","Ba���lar"); 
DEFINE("_DONATIONHEADER","Ba���lar"); 
DEFINE("_YOUHAVENTDONATEDYET","Hen�z ba��� yapmad���n�z g�r�l�yor.");
DEFINE("_YOUHAVENTDONATEDSTEP1","<b>Ad�m-1: </b> A�a��da ba��� yapmak istedi�iniz miktara t�klayarak Paypal ba��� sayfas�na gidiniz. A��lan sayfada Joomlaholic kullan�c� kodunuz da eklenmi� olacakt�r.");
DEFINE("_YOUHAVENTDONATEDSTEP2","<b>Ad�m-2: </b>Ba��� yapt�ktan sonra a�a��daki alana miktar�n� yaz�n�z ve bize bildiriniz. <p><b>Bu bizi ba��� yapt���n�z konusunda uyaracakt�r.</b> <p> Bizi bilgilendirince biz hesab�m�z� kontrol edinceye kadar �ntan�ml� olarak video indirme �zelli�i a��lacakt�r. <p>E�er ba����n�z do�ruy onayalanacak, de�ilse reddedilecek ve sitenize ait video indirme �zelli�i kapat�lacakt�r."); 
DEFINE("_SUBMIT","Bildir ve indirmeleri a�"); 
DEFINE("_INFORMJOOMLAALEM","Joomlaholic i�in yapt���n�z ba��� miktar�: "); 
DEFINE("_YOURDONATIONAPPROVED","Ba����n�z onayland�. Video indirme �zelli�ini kullanmaya devam edebilirsiniz. <p>Ba����n�z i�in te�ekk�rler."); 
DEFINE("_YOURDONATIONPENDING","Ba��� raporunuz onay bekliyor. Ayarlar b�l�m�ne giderek indirme �zelli�ini a�abilirsiniz. <p>Fakat ba����n�z� onaylamazsak video indirme �zelli�i sunucular�m�zdan kapat�lacakt�r. <p>Ba����n�z i�in te�ekk�rler."); 
DEFINE("_YOURDONATIONREJECTED","Ba��� raporunuz reddedildi. <p>Maalesef ba����n�z� onaylayamad�k. <p>Bunun hata oldu�unu d���n�yorsan�z bize mail ile ula��n�z."); 
DEFINE("_UNINSTALL","Kald�r"); 
DEFINE("_CAUTION","Dikkat"); 
DEFINE("_CAUTIONUNINSTALL2","Bu i�lem Seyret veritaban� tablolar�n� kal�c� olarak silecek.<p>Seyret veritaban� tablolar�n� kald�rmak istiyorsan�z a�a��daki resme t�klay�n�z."); 
DEFINE("_CAUTIONUNINSTALL3","Bu i�lem sadece Seyret veritaban� tablolar�n� kald�racakt�r. Bundan sonra Joomla bile�en y�kleme/kald�rma b�l�m�ne giderek bile�eni tamamen kald�r�n�z."); 
DEFINE("_UNINSTALLDATABASESUCCESS","Seyret Veritaban� tablolar� ba�ar�yla kald�r�ld�!");
DEFINE("_NOJALEMUSERID","Ge�erli bir Joomlaholic kullan�c� kodunuz yok! <p>Bu kod olmadan Joomlaholic ile irtibat kuramazs�n�z. <p>Muhtemelen mesaj al�m� kapal�d�r. Ayarlar b�l�m�nden mesaj al�m�n� etkinle�tirebilirsiniz.<p> Daha sonra kullan�c� kodunuz otomatik olarak olu�turulacakt�r.");
DEFINE("_MESSAGEFEED","Mesaj Al�m�"); 
DEFINE("_MESSAGEFEEDINFO","Mesaj al�m� se�ene�ini buradan ayarlayabilirsiniz. Ge�erli bir Joomlaholic kullan�c� kodunuz yoksa mesaj al�m�n� etkinle�tirmenizi tavsiye ederiz. Etkinle�tirince kullan�c� kodunuz otomatik olarak olu�turulacakt�r. Daha sonra mesaj al�m�n� kapatsan�z bile, kullan�c� kodunuz silinmeyecektir. Ayn� zamanda bile�eni kald�r�p yeniden kursan�z bile eski kullan�c� kodunuz Joomlaholic sunucular�ndan okunarak yeniden kaydedilecektir."); 
DEFINE("_ENABLED","Etkin"); 
DEFINE("_DISABLED","Kapal�"); 
DEFINE("_VIDEOCOUNTINVLIST","Video #");
DEFINE("_VIDEOCOUNTINVLISTINFO","Video listesinde yer alan video say�s�n� buradan ayarlayabilirsiniz.");
DEFINE("_DELETEVIDEOCONFIRMMESSAGE","Bu video kal�c� olarak silinecek. Emin misiniz?"); 
DEFINE("_DELETETHISVIDEO","Bu videoyu sil");
DEFINE("_PUBLISH","Yay�nla");
//that's enough for 0.2. Let's leave something to 0.3 :)

//0.2.1 start
 
DEFINE("_UPLOADVIDEO","Video Y�kle"); 
DEFINE("_UPLOADVIDEOINFORM","Burada videolar�n�z� y�kleyebilirsiniz. L�tfen site i�eri�imize uymayan videolar� y�klemeyiniz. <br/><b>Sadece flv videolar� y�klemeye dikkat ediniz. Aksi durumda videolar�n�z oynat�lmayacakt�r.</b>"); 
DEFINE("_UPLOADANDGOTONEXT","Y�kle ve sonraki ad�ma ge�"); 
DEFINE("_UPLOADTHUMBNAILINFORM","Videonuz i�in k���k resim y�kleyebilirsiniz. Videonuzu en iyi anlatabilecek bir k���k resim y�klemeye dikkat ediniz. <br/> <b>Sadece JPG resimleri y�kleyiniz.</b><br/>Bu video i�in k���k resim y�klemeyecekseniz a�a��daki kutucu�u i�aretlemeyi unutmay�n�z."); 
DEFINE("_NOTHUMBNAILFORTHISVIDEO","Videom i�in k���k resim y�klemeyece�im."); 
DEFINE("_COPY","Kopyala");  
DEFINE("_THISISANUPDATEINFO","Seyret bile�enini i�in s�r�m y�kseltmeye ho�geldiniz.<br><b>Bu i�lemde Seyret veritaban� tablolar� silinmeyecektir.<br>Fakat yine de veritaban� yede�ini alman�z� tavsiye ederiz.</b>");
DEFINE("_DBVERSION_INFO","Eski s�r�m"); 
DEFINE("_NEWVERSION_INFO","Y�kseltme yapt���n�z s�r�m"); 
DEFINE("_PROCEEDUPGRADE","Y�kseltme i�lemine devam etmek i�in a�a��daki resme t�klay�n�z."); 
DEFINE("_UPGRADEATTENTION","Y�kseltme i�leminden sonra bir�eylerin ters gitti�ini d���n�yorsan�z, yedek dosyalar�ndan veri taban�n�z� geri y�kleyiniz ve bu konuda bizi bilgilendiriniz. www.joomlaholic.com"); 
DEFINE("_UPGRADESUCCESS","Seyret s�r�m� ba�ar�yla y�kseltildi!");  
DEFINE("_USERSUPLOADVIDEO","Kullan�c�lar video ekleyebilir");  
DEFINE("_USERSUPLOADVIDEOINFO","L�tfen kullan�c�lar�n�z�n video ekleme iznini d�zenleyiniz.");  
DEFINE("_VIDEOMAXSIZE","Maksimum video boyutu");  
DEFINE("_VIDEOMAXSIZEINFO","Kullan�c�lar�n y�kleyece�i videonun <b>Megabayt</b> cinsinden boyutunu belirleyiniz. Bunun tamsay� olmas�na dikkat ediniz. Ayr�ca php.ini y�kleme s�n�rlar�n� da dikkate al�n�z.");  
DEFINE("_THUMBMAXSIZE","Maksimum k���k resim boyutu");  
DEFINE("_THUMBMAXSIZEINFO","Kullan�c�lar�n y�kleyece�i k���k resimlerin <b>Megabayt</b> cinsinden boyutunu belirleyiniz. Bunun tamsay� olmas�na dikkat ediniz. Ayr�ca php.ini y�kleme s�n�rlar�n� da dikkate al�n�z.");  
DEFINE("_RESIZETHUMBWIDTH","K���k resim �l�ekleme geni�li�i"); 
DEFINE("_RESIZETHUMBWIDTHINFO","Uploaded video thumbnails will be resized. This value defines width of thumbnail."); 
DEFINE("_EMBEDBOXWIDTH","Embed Box Width"); 
DEFINE("_EMBEDBOXWIDTHINFO","This value defines the width of embed link box and copy link box."); 
DEFINE("_ADDVIDEOINFO","L�tfen video linkini kopyalay�p a�a��daki kutuya yap��t�r�n. Daha sonra 'Uygula' d��mesine t�klay�n. <b>Video linkinin do�ru bi�imde olmas�na dikkat edin.</b> Gereken d�zenlemeleri yapt�ktan sonra kaydedin. Detayl� bilgi i�in yard�m sayfam�z� ziyaret edebilirsiniz."); 

// please delete or comment  _THISISANUPDATEINFO line on 80
// pay attention, in  line 115 $3 is changed to $5
//0.2.3. end

//====================================================================================
//0.2.4
DEFINE("_ADMANAGEMENT","Reklam Y�netimi"); 
DEFINE("_TOP","Ana"); 
DEFINE("_ADLINK","Reklam Linki"); 
DEFINE("_REMOTESERVERFILES","Reklam sunucular�nda dosya listesi "); 
DEFINE("_NEWADCOMMENT","Reklam i�in kategori se�iniz. Listede olmayan bir flv dosyas�na da do�rudan link verebilirsiniz."); 
DEFINE("_REMOTESERVERADDRESS","Your remote server ads directory"); 
DEFINE("_AD","Video Reklamlar�"); 
DEFINE("_NEW_AD","Yeni Reklam"); 
DEFINE("_EDIT_AD","Reklam D�zenle"); 
DEFINE("_PARENT","Kategori"); 

//0.2.5
DEFINE("_VIDEOURL","Link");  
DEFINE("_VIDEOEMBEDCODE","Ekle"); 
DEFINE("_VOTEIT","Oy ver");
DEFINE("_LOGINTOVOTE","Oy vermek i�in giri� yap�n�z");
DEFINE("_GENERALCONFIG","Genel"); //comment line 31
DEFINE("_CONFIG","Ayarlar"); 
DEFINE("_ADSCONFIG","Reklam");
DEFINE("_EXTRAS","Ekstra");
DEFINE("_WRITEHELP","Yard�m Olu�tur");
DEFINE("_SNIPPETS","HTML Kodu");
DEFINE("_WRITEHELPCOMMENT","Yard�m sistemini kullanmak istiyorsan�z, kendi yard�m dosyan�z� olu�turabilirsiniz.");
DEFINE("_SNIPPETCOMMENT","Video g�mme kodunun sonuna reklam koymak istiyorsan�z burada olu�turabilirsiniz.");
DEFINE("_REPORTVIDEOINFORM","L�tfen raporlama sebebinizi yaz�n�z. Y�neticilerimiz en k�sa zamanda raporunuzu okuyacakt�r.");
DEFINE("_VIDEOID","Video Kodu");
DEFINE("_REPORTEDBY","Raporlayan");
DEFINE("_REPORTEDDATE","Rapor Tarihi");
DEFINE("_REPORTCOMMENT","Rapor Sebebi");
DEFINE("_REPORTREPLY","Cevap");



//0.2.6 -------------------starts
DEFINE("_VIDEOSINALLCATEGORIES","Videolar"); 
DEFINE("_VIDEOCAT","Kategori"); 
DEFINE("_SEARCH","Arama"); 
DEFINE("_DISPLAY","G�r�n�m"); 
DEFINE("_PERMISSIONS","�zinler"); 
DEFINE("_SYSTEM","Sistem"); 
DEFINE("_USERSCREENNAME","Kullan�c�n�n G�r�nen Ad�"); 
DEFINE("_USERSCREENNAMECOMMENT","Kullan�c�lar�n sitenizde g�r�nen ad�n� se�ebilirsiniz : kullan�c� ad� veya ger�ek ad�."); 
DEFINE("_USEREMOTESERVERSUPPORT","Uzak sunucu kullan"); 
DEFINE("_USEREMOTESERVERSUPPORTINFO","Uzak sunucu kullanma �zelli�ini etkinle�tirebilirsiniz. <b>Bu �zellik hen�z tamamlanmad�</b>."); 
DEFINE("_REMOTESERVERADSDIRECTORY","Uzak Reklam Dizini"); 
DEFINE("_REMOTESERVERADSDIRECTORYINFO","Uzak sunucu reklam dizinini giriniz. Bu dizinin bile�enle birlikte verilen index dosyas�n� i�erdi�inden emin olunuz."); 
DEFINE("_REMOTESERVERVIDEOSDIRECTORY","Uzak Video Diizni"); 
DEFINE("_REMOTESERVERVIDEOSDIRECTORYINFO","Uzak sunucu video dizinini giriniz. Bu dizinin bile�enle birlikte verilen index dosyas�n� i�erdi�inden emin olunuz."); 
DEFINE("_REMOTESERVERCHECKSTRING","Uzak sunucu kontrol de�eri"); 
DEFINE("_REMOTESERVERCHECKSTRINGINFO","Uzak sunucularda yer alan dosyalar�n yetkisiz listelenmesini engellemek i�in bu de�eri belirleyiniz. Buraya girdi�iniz de�eri index.php dosyas�nda da de�i�tirmeyi unutmay�n�z."); 
DEFINE("_PLEASESELECT","L�tfen se�iniz...");
DEFINE("_SUPERADMINRIGHTS","S�per Y�netici Haklar�");
DEFINE("_SUPERADMINRIGHTSINFO","S�per Y�neticiler t�m haklara sahiptirler. Herhangi bir k�s�tlama olmayacakt�r.");
DEFINE("_RIGHTS","Seyret Eri�im Haklar�");
DEFINE("_CANSEEADMINTOOLBAR","Y�netici ara� �ubu�unu g�rebilir");
DEFINE("_CANSEEREPORTEDVIDESBUTTON","Raporlanan Videolar d��mesini g�rebilir");
DEFINE("_CANSEEPENDINGVIDESBUTTON","Bekleyen videolar d��mesini g�rebilir");
DEFINE("_CANSEEADDVIDEOSBUTTON","Video ekle d��mesini g�rebilir");
DEFINE("_CANADDVIDEOS","Video ekleyebilir");
DEFINE("_CANSEEUPLOADVIDEOSBUTTON","Video y�kle d��mesini g�rebilir");
DEFINE("_CANUPLOADVIDEOS","Video y�kleyebilir");
DEFINE("_CANSEEMYVIDEOSBUTTON","Videolar�m d��mesini g�rebilir");
DEFINE("_CANSEEFEATUREDVIDEOSBUTTON","Se�ilmi� videolar d��mesini g�rebilir");
DEFINE("_CANSEESEARCHVIDEOSBUTTON","Arama d��mesini g�rebilir");
DEFINE("_CANSEEHELPBUTTON","Yard�m d��mesini g�rebilir");
DEFINE("_CANSEEDELETEVIDEOBUTTON","Video sil d��mesini g�rebilir");
DEFINE("_CANDELETEVIDEO","Videolar� silebilir");
DEFINE("_CANSEEEDITVIDEOBUTTON","Videolar� d�zenle d��mesini g�rebilir");
DEFINE("_CANEDITVIDEO","Videolar� d�zenleyebilir");
DEFINE("_CANSEEFULLSCREENBUTTON","Tam ekran d��mesini g�rebilir");
DEFINE("_CANSEEDOWNLOADBUTTON","�ndir d��mesini g�rebilir");
DEFINE("_CANDOWNLOADVIDEO","Videolar� indirebilir");
DEFINE("_CANSEEREPORTBUTTON","Raporla d��mesini g�rebilir");
DEFINE("_CANREPORTVIDEOS","Videolar� Raporlayabilir");
DEFINE("_CANSEEDIRECTLINKBOX","Link kutusunu g�rebilir");
DEFINE("_CANSEEEMBEDBOX","G�mme kodunu g�rebilir");
DEFINE("_CANSEEVOTESTARTS","Oy y�ld�zlar�n� g�rebilir");
DEFINE("_CANVOTE","Oy kullanabilir");
DEFINE("_CANSEECOMMENTS","Yorumlar� g�rebilir");
DEFINE("_SEYRETACL","Seyret Eri�im �zinleri");
DEFINE("_EDIT_SEYRETACL","Seyret Eri�im �zinlerini D�zenle");
DEFINE("_NEW_SEYRETACL","Yeni Seyret Eri�im �zni");
DEFINE("_JACLNAME","Joomla Eri�im D�zeyi");
DEFINE("_YOUDONTHAVEPERMISSIONS","Bu i�lem i�in yeterli izin d�zeyiniz yok. <p>Siteye giri� yapmad�ysan�z l�tfen giri� yap�n�z.");
DEFINE("_DOWNLOADS","�ndirilme");
DEFINE("_CANPUBLISHVIDEO","Videolar� yay�nlayabilir");
DEFINE("_VIDEOADDEDSUCCESFULLY","Video ba�ar�yla eklendi. ");
DEFINE("_CANSEEVIDEOSERVERDETAILS","Video sunucu detaylar�n� g�rebilir.");
DEFINE("_AD_VIDEO_LIST","Reklam Videolar� Listesi");
DEFINE("_REMOTESERVERSUPPORTISNOTENABLED","Uzak sunucu deste�i etkin de�il. L�tfen ayar panelinden etkinle�tiriniz.");
DEFINE("_USEAJAXBROWSING","Ajax Destekli Gezinme");
DEFINE("_USEAJAXBROWSINGINFO","Ajax destekli gezinme se�ene�i. Hen�z bu bir beta �zelli�idir. �ntan�ml� olarak evet kullan�n�z. Hay�r se�ene�i ile problem ya�arsan�z de�i�tiriniz.");
DEFINE("_TWOCOLUMNSVIDEOLIST","�ok s�tunlu video listeleme");
DEFINE("_TWOCOLUMNSVIDEOLISTINFO","Ana sayfada �ok s�tunlu video listeleme. Teman�za uygun olarak istedi�iniz se�imi yap�n�z.");
DEFINE("_MULTICOLUMNCOUNT","S�tun say�s�");
DEFINE("_MULTICOLUMNCOUNTINFO","S�tun say�s�n� giriniz.");
DEFINE("_YOUHAVENOACCESSRIGHTTOTHISVIDEO","Videolar� izleyebilmek i�in, �ye olmal�s�n�z. �ye olmak i�in; <a href={accesslevelupgradelink_dontchangethis}> link'e t�klay�n�z.</a>");
DEFINE("_VIDEOACCESSLEVEL","Video Eri�im Seviyesi");
DEFINE("_UPGRADEACCESSLEVELLINK","Eri�im Seviyesi Y�kseltme Linki");
DEFINE("_UPGRADEACCESSLEVELLINKINFO","Videolar�n�z i�in eri�im s�n�r� koyuyorsan�z, kullan�c�lar�n�za heasp y�kseltme ba�vurusu i�in bir link belirleyebilirsiniz.");
DEFINE("_ACCESSLEVELCOUNT","Eri�im D�zeyi Say�s�");
DEFINE("_ACCESSLEVELCOUNTINFO","Videolar�n�z i�in eri�im d�zeyi koyuyorsan�z, eri�im d�zeyi say�s�n� belirleyebilirsiniz . Y�ksek rakamlar�n daha y�ksek eri�im hakk� oldu�unu unutmay�n�z. Bo� b�rak�rsan�z videolar�n�za herkes eri�ecektir.");
DEFINE("_VIDEOCAT_DIR","Kategori Dizini");
DEFINE("_CATEGORYDIRECTORYWILLBEGENERATED","Bu kategori i�in dizin otomatik olarak olu�turulacakt�r. Bu kategoride olu�turulan videolar� bu kategori alt�nda toplay�n�z.");
DEFINE("_LOCALFILESDIRECTORY","Yerel dosyalar i�in ana dizin");
DEFINE("_LOCALFILESDIRECTORYINFO","Yerel dosyalar i�in ana dizin. Kategori klas�rleri bu ana dizin alt�nda olu�turulacakt�r. <b>/dir1/dir2</b> bi�iminde olmal�d�r.");
DEFINE("_LOCALVIDEO","Yerel Video");
DEFINE("_LOCALVIDEOINFO","Yerel bir video kullanacaksan�z video ve k���k resmi se�iniz.");
DEFINE("_VIDEOCAT_FILELIST","Video Listesi");
DEFINE("_VIDEOCAT_THUMBLIST","K���k Resim Listesi");
DEFINE("_VIDEOSERVER","Video Sunucusu");
DEFINE("_VIDEOSERVERINFO","E�er ba�ka bir video sunucusundan video ekleyecekseniz -youtube gibi, google gibi- linki giriniz ve uygula butonuna bas�n�z.");
DEFINE("_SERVERCODES","Sunucu Kodlar�");
DEFINE("_SERVERCODESINFO","Bir videoyu d�zenliyor ve ne yapt���n�zdan tam emin de�ilseniz, bu k�s�mda de�i�iklik yapmay�n�z. Aksi taktirde bile�enin �al��mas�nda hata olu�abilir.");
DEFINE("_ATTRIBUTES","�zellikler");
DEFINE("_THISISABACKUPFILE","Bu bir yedek dosyas�d�r");
DEFINE("_VIDEOADS","Video Reklamlar�");
DEFINE("_IMAGEADS","Resim Reklamlar�");
DEFINE("_USEIMAGEADSYSTEM","Resim reklam� sistemini kullan");
DEFINE("_IMAGEADDURATION","Resim Reklam� S�resi");


DEFINE("_ISDOWNLOADABLE","�ndirilebilir");
DEFINE("_ALLOWURLVALUE","allow_url_fopen");
DEFINE("_ALLOWURLVALUEINFO","allow_url_fopen i�in php ayarlar�n�z� g�sterir.");
DEFINE("_ON","A��k");
DEFINE("_OFF","Kapal�");
DEFINE("_CURLLIB","curl K�t�phanesi");
DEFINE("_CURLLIBINFO","Bu k�t�phane y�kl�yse url okumak i�in bu fonksiyon kullan�lacakt�r.");
DEFINE("_NOTINSTALLED","Kurulu de�il");
DEFINE("_INSTALLED","Kurulu");
DEFINE("_SEYRETFUNCSTATUS","Seyret Fonksiyon Testi");
DEFINE("_PASSED","Ba�ar�l�");
DEFINE("_FAILED","Ba�ar�s�z");
DEFINE("_SEYRETFUNCSTATUSINFO","Bu test ba�ar�s�z ise Seyret bile�eninin en �nemli �zelliklerini kullanamayacaks�n�z demektir. Hosting firman�zla g�r��erek yukar�daki �zelliklerden en az�ndan birini a�t�rman�z� tavsiye ederiz.");
DEFINE("_IMAGEADDEFAULT","�n tan�ml� resim reklam�");
DEFINE("_USEIMAGEADSYSTEMINFO","Evet se�erseniz videolardan �nce reklam resmi g�r�necektir. <b>Bu sadece pro �zellikleri etkinse �al��acakt�r.</b>");
DEFINE("_IMAGEADDEFAULTINFO","�n tan�ml� resim reklam�. Bir kategori i�in reklam bulunamazsa buradaki reklam g�r�nt�lenecektir.");
DEFINE("_IMAGEADDURATIONINFO","Milisaniye olarak reklam resminin g�r�nt�lenme s�resi.");
DEFINE("_UPLOADEDSUCCESSFULLY","Video ba�ar�yla y�klendi. Ayarlara ba�l� olarak ya hemen yay�nlanacakt�r veya y�neticinin onay�ndan sonra yay�nlanacakt�r.");
DEFINE("_ID","Id");
DEFINE("_AD_IMAGE_LIST","Resim Reklamlar� Listesi");
DEFINE("_NEWIMAGEADCOMMENT","L�tfen g�sterilecek resim dosyas�n�n tam adresini giriniz. Kategori se�meyide unutmay�n�z. E�er birden fazla resim dosyas�n� bir kategoriye atam��san�z, �n sayfada rastgele bir se�im ile g�sterilecektir. L�tfen t�klamadan sonra a��lacak adresi giriniz.");
DEFINE("_REALNAME","Ger�ek �sim");
DEFINE("_UNKNOWN","Misafir");  
DEFINE("_RESETMYDOWNLOADSTATUS","Video indirme raporunuzu s�f�rlamak istiyorsan�z buraya t�klay�n�z."); 
DEFINE("_VIDEODOWNLOADOPTION","Video �ndirme �zelli�i"); 
DEFINE("_PROSTATUS","Seyret Pro Durumu"); 
DEFINE("_SEYRETISNOTPRO","Seyret, hen�z pro s�r�m�ne y�kseltilmi� de�il. Pro s�r�m�nde kullanabilece�iniz ekstra baz� �zellikler bulunacakt�r. Daha detayl� bilgiyi www.joomlaholic.com sitesinde bulabilirsiniz. <p>Pro s�r�m� i�in sadece bir kez �deme yapacaks�n�z. Yeni s�r�mlerde otomatik olarak pro kullanmaya devam edeceksiniz."); 
DEFINE("_MAKEPROBUTTON","Pro s�r�m�ne y�kselt"); 
DEFINE("_MAKEMEPRO","Ba��� miktar�n� giriniz:"); 
DEFINE("_UPGRADETOPRO","<b>Ad�m-1:</b> Pro s�r�m�n� kullanabilmek i�in en az�ndan 40 USD ba��� yapmal�s�n�z. A�a��daki d��melerden birine basarsan�z, otomatik pro onaylama i�lemi i�in gerekli bilgilerle birlikte bir paypal sayfas� a��lacakt�r."); 
DEFINE("_UPGRADETOPROSTEP2","<b>Ad�m-2:</b> Bu i�lem, bizi �deme yapt���n�z konusunda bilgilendirecektir. Pro s�r�m�n�z onayland�ktan sonra hemen kullanmaya ba�layabileceksiniz . ��lemleri buradan yaparsan�z otomatik onaylama yap�lacakt�r. Havale ile �deme i�in bizimle irtibata ge�ebilirsiniz."); 
DEFINE("_SEYRETPROISPENDING","Pro i�in ba��� raporunuz onay bekliyor. �zg�n�z ama Paypal'den �demenize dair bir bilgi hen�z ula�mad�. Paypal �deme raporunuzla bize ba�vurunuz. <p> E�er yanl��l�kla bildirimde bulundu�unuzu d���n�yorsan�z a�a��daki ba�lant�ya t�klay�n�z."); 
DEFINE("_RESETMYPROSTATUS","Pro �zellikleri bildirmini s�f�rlamak i�in buraya t�klay�n�z"); 
DEFINE("_SEYRETPROISAPPROVEDREFRESH","Ba��� raporunuz onayland�. <p>L�tfen sayfay� yenileyiniz."); 
DEFINE("_COULDNTCONNECTTRYLATER","Bildiriminiz ger�ekle�mi�tir. Fakat bildirim onay� i�in joomlaholic sunucular�na ba�lanamad�k. L�tfen daha sonra tekrar deneyiniz."); 
DEFINE("_YOUCANRESETIFMISTAKENLY","E�er yanl��l�kla bildirimde bulundu�unuzu d���n�yorsan�z a�a��daki ba�lant�ya t�klay�n�z."); 
DEFINE("_PROAPPROVED","Pro s�r�m� bildiriminiz onaylanm��t�r. Hay�rl� olsun.");
DEFINE("_NEEDTOUPDATE","Seyret pro tan�mlamalar� eski. Kesinlikle g�ncellemenizi tavsiye ediyoruz.");
DEFINE("_UPDATEPROPHP","Pro tan�mlamalar�n� g�ncelle�tirmek i�in buraya t�klay�n�z.");
DEFINE("_ITISUPTODATE","Seyret pro tan�mlamalar�n�z g�ncel. Yapman�z gereken bir�ey bulunmamaktad�r.");
DEFINE("_SEYRETPROISREJECTED","Bildirminiz reddedilmi�tir. Kontrollerimize g�re ba��� bildiriminiz do�ru de�il. �imdi bildiriminiz s�f�rlanacakt�r. Bunun hata oldu�unu d���n�yorsanz� bizimle irtibata ge�iniz"); 
DEFINE("_THISISAPROVERSIONFEATURE","Pro s�r�m�ne ge�iniz");
DEFINE("_GOTODONATIONSPAGETOENABLEPRO","Bu �zellik sadece pro s�r�m� i�in ge�erlidir. Ba���lar sayfas�ndan pro s�r�m�ne y�kseltme yapabilirsiniz");
DEFINE("_USEVIDEOADSYSTEMINFO","Evet se�erseniz, videolar�n�zdan �nce, se�ti�iniz bir video reklam� g�sterilecektir. <b>Sadece pro s�r�m� ile �al��acakt�r.</b>");
DEFINE("_USEVIDEOADSYSTEM","Video reklam sistemini kullan");
DEFINE("_VIDEOINFOREFRESHED","Video bilgileri g�ncellendi.");
DEFINE("_THUMBWIDTHINLIST","Video listesindeki k���k resim geni�li�i.");
DEFINE("_THUMBWIDTHINLISTINFO","Video listesindeki k���k resim geni�li�i. Sadece say� kullan�n�z, px eklemeyiniz.");
DEFINE("_FEATURED","Se�ilmi�");
DEFINE("_DISCUSSIONONFORUM","Tart��ma");
DEFINE("_CLICKHERETODISCUSS","Videoyu tart��mak i�in buraya t�klay�n�z");
DEFINE("_TOPICRE","Cevap: ");


DEFINE("_VIDEOINFO","Video Bilgisi");
DEFINE("_INPUTFBDISCUSSTOPIC","Konu");
DEFINE("_INPUTFBDISCUSSMESSAGE","Mesaj");
DEFINE("_CATEGORYINFO","Kategori Bilgisi");
DEFINE("_CATEGORYNAME","Ba�l�k");
DEFINE("_SUBCATEGORIES","Alt kategoriler");
DEFINE("_VIDEOSINCAT","Video say�s�");
DEFINE("_DISCUSSPOSTHEADER","Yeni mesaj g�nder");
DEFINE("_SUBMITCOMMENT","G�nder");
DEFINE("_LOGINTOWRITECOMMENT","Yorum yazmak i�in siteye giri� yap�n�z");
DEFINE("_DONTDONATEIFYOUWILLMAKEPRO","Pro s�r�m�ne y�kseltmeyi d���n�yorsan�z indirme �zelli�i i�in ba��� yapmay�n�z. Pro s�r�m�nde zaten ba��� etkin olacakt�r..");
DEFINE("_COMMENTINGSYSTEM","Yorum Sistemi");
DEFINE("_JOMCOMMENT","Jom Comment");
DEFINE("_FIREBOARD","Fireboard");
DEFINE("_COMMENTINGSYSTEMINFO","�n tan�ml� yorum sistemini se�iniz.");
DEFINE("_PUBLISHAFTERMODERATED","Onayland�ktan sonra yay�nlanacakt�r.");
DEFINE("_SHOWVIDEOTOOLTIPS","Video �pu�lar�n� G�ster");
DEFINE("_SHOWVIDEOTOOLTIPSINFO","Fare imleci ile resim �zerine gelince videonun detaylar� g�r�nt�lenebilir.");
DEFINE("_SHOWCATEGORYTOOLTIPS","Kategori �pu�lar�n� G�ster");
DEFINE("_SHOWCATEGORYTOOLTIPSINFO","Fare imleci ile resim �zerine gelince kategorinin detaylar� g�r�nt�lenebilir.");

DEFINE("_INTEGRATION","B�t�nle�me");
DEFINE("_FIREBOARDCATEGORYFORDISCUSS","FB Tart��ma Kategorisi");
DEFINE("_FIREBOARDCATEGORYFORDISCUSSINFO","Videolar�n tart���ld��� ba�l�klar�n gidece�i Fireboard kategorisini giriniz.");
DEFINE("_LEAVEVIDEOLINK","Video i�in geri link");
DEFINE("_LEAVEVIDEOLINKINFO","Fireboard tart��ma ba�l���nda video i�in geri link verebilirsiniz.");
DEFINE("_YOUAREUSINGPRO","Seyret Pro kullan�yorsunuz");
DEFINE("_GOTODONATIONSPAGE","Tan�mlamalar� y�kseltmek i�in Ba���lar sayfas�na gidiniz.");
DEFINE("_NOTPROWANTTOUPGRADE","Seyret standart s�r�m� kullan�yorsunuz.<br> Pro s�r�m�ne y�kseltmek i�in Ba���lar sayfas�na gidiniz. Sadece �� dakikada pro s�r�m�ne y�kseltebilirsiniz.");
 

DEFINE("_IMAGEAD","Resim Reklamlar�");
DEFINE("_CLICKLINK","T�klama Linki");
DEFINE("_LOCALADSDIRECTORY","Yerel Reklamlar Dizini");
DEFINE("_LOCALADSDIRECTORYINFO","Yerel reklamlar� kullanmak istiyorsan�z dizin giriniz.");
DEFINE("_RSSCHANNELTITLEPRE","");
DEFINE("_RSSCHANNELTITLEPOST","kategorisindeki son videolar");
DEFINE("_RSSLATESTVIDEOSCATDESCPRE","");
DEFINE("_RSSLATESTVIDEOSCATDESCPOST","Sitesindeki son videolar");

DEFINE("_CLISKHERETOSTART","Ba�lamak i�in buray� t�klay�n�z");
DEFINE("_DISABLEPRO","Pro �zelliklerini Kapat");
DEFINE("_DISABLEPROINFO","Problem ��kan baz� durumlarda -uzak video sunucularda yap�lan de�i�iklikler gibi- sorun ��z�lene kadar pro �zelliklerini kapatabilirsiniz.");



DEFINE("_TAGS","Etiketler");
DEFINE("_DIAGNOSTICS","Analiz");
DEFINE("_FILESYSTEM","Dosya Sistemi"); 
DEFINE("_TEHERAREOWNERSHIPPROBLEMS","Sisteminizde dosya sahiplik sorunlar� var. Baz� sorunlarla kar��la�abilirsiniz. E�er hata ile kar��la��rsan�z sorunlu dizinlere 777 haklar� vermeyi deneyin. Hata ile kar��la�m�yorsan�z izin olarak 755 kullanman�z� tavsiye ediyoruz.");  
DEFINE("_THEREAREMISSINGFILES","Seyret dizin a�ac�nda eksik baz� klas�rler mevcut. Dosya sahiplik sorunundan dolay� otomatik olarak olu�turulamad�. Seyret kullan�m�nda baz� sorunlar ��kacakt�r. Bu sorunu ��zmek i�in a�a��daki ftp arac�n� kullan�n.");  
DEFINE("_MISSING","EKS�K");
DEFINE("_FTPSERVER","Ftp Sunucu");
DEFINE("_FTPUSERNAME","Ftp Kullan�c� Ad�");
DEFINE("_FTPPASSWORD","Ftp �ifresi");
DEFINE("_JOOMLAROOT","Joomla K�k Dizini");
DEFINE("_TRYFTP","Ftp ile dene");
DEFINE("_NEEDFTP_LAYER","Ftp Hesap Detaylar�");
DEFINE("_FTPSERVERINFO","Bu site i�in ftp hesab�n� girin. ftp.exapmle.com gibi");
DEFINE("_FTPUSERNAMEINFO","Ftp kullan�c� ad�n� girin");
DEFINE("_FTPPASSWORDINFO","Ftp �ifresini girin");
DEFINE("_JOOMLAROOTINFO","Joomla kurulumunuz i�in ana dizin. Bu de�ere dikkat edin. Bu adres dizinin tam adresi olmamal�. Ftp eri�iminize g�re bir de�er alacakt�r. Mesela /www  veya  /httpdocs gibi.");
DEFINE("_THEREARENOPROBLEMS","Seyret dizin sisteminde bir sorun yok.");
DEFINE("_DIRECTORY","Dizin"); 
DEFINE("_OWNER","Sahibi"); 
DEFINE("_ACCESS","Eri�im"); 
DEFINE("_RESULT","Sonu�"); 
DEFINE("_CONNECTION","Ba�lant�");
DEFINE("_CACHE","�nbellek");
DEFINE("_CLEARVIDEOCACHE","Video �nbelle�ini temizlemek i�in buraya t�klay�n�z.");

DEFINE("_GOOGLECONNECTCHECK","Google Ba�lant�");
DEFINE("_CONNECTED","Ba�land�");
DEFINE("_GOOGLECONNECTCHECKINFO","Bu sunucunuzun ba�lant� kabiliyetini test eder.");

//0.2.7.7 starts
DEFINE("_CONVERSION","D�n��t�rme");
DEFINE("_FFMPEGPATH","FFMPEG yolu");
DEFINE("_FFMPEGPATHINFO","ffmpeg i�in dizin yolunu giriniz. ");
DEFINE("_VIDEOCONVERSION","FLV D�n��t�rme");
DEFINE("_ENABLEFLVCONVERSION","FLV D�n��t�rme Etkin");
DEFINE("_ENABLEFLVCONVERSIONINFO","Bu �zellik sadece Seyret PRO ile �al��acakt�r. flv d�n��t�rme ile ilgili sorun ya�arsan�z veya g��l� bir sunucunuz yoksa bu �zelli�i devre d��� b�rakabilirsiniz.");
DEFINE("_ENABLEAUTOMATICTHUMBNAILEXTRACTION","K���k Resim ��karma Etkin");
DEFINE("_ENABLEAUTOMATICTHUMBNAILEXTRACTIONINFO","Bu �zellik sadece Seyret PRO ile �al��acakt�r. K���k resim ��karma ile ilgili sorun ya�arsan�z veya g��l� bir sunucunuz yoksa bu �zelli�i devre d��� b�rakabilirsiniz.");
DEFINE("_INSTANTVIDEOPROCESS","Videolar� Hemen D�n��t�r");
DEFINE("_INSTANTVIDEOPROCESSINFO","Evet se�erseniz, y�klenen videolar hemen flv'ye d�n��t�r�lecektir. Hay�r se�erseniz d�n��t�rme i�lemi yap�lmayacakt�r. Y�klenen videolar kaydedilecek ve d�n��t�rme s�ras�na eklenecektir. Y�netici daha sonra bu videolar� d�n��t�rebilir.");
DEFINE("_INSTANTTHUMBPROCESS","K���k Resimleri Hemen ��kar");
DEFINE("_INSTANTTHUMBPROCESSINFO","If you select yes, thumbnails for your uploaded videos will be extracted instantly. We advice this feature, so that your users will be able to select their thumbnail for their video.");
DEFINE("_VIDEODIMENSIONS","FLV Boyutlar�");
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
DEFINE("_SELECTVIDEOSTOUPLOAD","Video se�iniz");
DEFINE("_SELECTVIDEOSTOUPLOADINFO","Y�klemek istedi�iniz videoyu se�iniz. Se�ti�iniz video y�kleme listesine al�nacakt�r.");
DEFINE("_SELECTTHUMBSTOUPLOAD","Select Thumbnail");
DEFINE("_SELECTTHUMBSTOUPLOADINFO","You can upload a thumbnail for your video. Try to upload a thumbnail that represents your video well.");
DEFINE("_BROWSEFILES","G�zat");
DEFINE("_UPLOADINGFILE","Y�kleniyor ..");
DEFINE("_UPLOADCOMPLETE","L�tfen bekleyiniz, detaylar al�n�yor!");
DEFINE("_REMOVEFROMQUEUE","Listeden Kald�r");
DEFINE("_VIDEOFILES","Video dosyalar�");
DEFINE("_MAXFILESIZEEXCEEDS","Bu dosya, izin verilen maksimum b�y�kl��� a��yor!");
DEFINE("_MAXIMUM","Max");
DEFINE("_UPLOADQUEUE","Y�kleme Listesi");
DEFINE("_UPLOADQUEUEINFO","Se�ti�iniz dosyalar� kontrol edin ve y�kleme i�lemini ba�lat�n.");
DEFINE("_STARTUPLOAD","Y�kle");
DEFINE("_INPROCESSPLEASEWAIT","L�tfen bekleyiniz, y�kleme sonucu kontrol ediliyor...");
DEFINE("_TERMSOFUSEINFO","L�tfen kullan�m s�zle�mesini dikkatlice okuyunuz.");
DEFINE("_TERMSOFUSE","Kullan�m S�zle�mesi");
DEFINE("_ACCEPTTERMSOFUSE","I've read terms of use and accept all of them.");
DEFINE("_DENYTERMSOFUSE","I don't accept terms of use. I want to uninstall.");
DEFINE("_DENYCONFIRMINFO","If you don't accept terms of use, you should uninstall Seyret completely.<br>If you select uninstalling here, all database tables will be removed.");
DEFINE("_DENYCONFIRM","CONFIRM");
DEFINE("_ILLREADTERMSAGAIN","I want to read terms of use again.");
DEFINE("_ILLUNINSTALL","I'm sure, I want to uninstall completely.");
DEFINE("_NOCOMMENT","No comment");
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


DEFINE("_VIDEOUPLOADISSUCCESS","Video ba�ar�yla y�klendi.");
DEFINE("_VIDEOCONVERTSUCCESS","Videonuz ba�ar�yla d�n��t�r�ld�.");
DEFINE("_VIDEOCONVERTPOSTPONED","Your video will be processed by admin soon.");
DEFINE("_VIDEOCONVERTNOTSET","Video conversion is not set on this server.");




DEFINE("_UPLOADCONTROL","Y�kleme Kontrol");
DEFINE("_CONVERSIONCHECK","Video D�n��t�rme");
DEFINE("_THUMBNAILCHECK","Video Resmi Olu�turma");
DEFINE("_GETTINGINPUTFORM","Bilgi Formu");
DEFINE("_PLEASEFILLTHEDETAILSBELOW","L�tfen videonuz i�in a�a��daki detaylar� giriniz.");


DEFINE("_THUMBNAILSEXTRACTED","Thumbnails are generated.");
DEFINE("_THUMBNAILSEXTRACTIONBYADMIN","Thumbnails will be generated by admin later.");
DEFINE("_NOTHUMBNAILSEXTRACT","Thumbnails will not be generated by system.");

DEFINE("_DONTEXTRACT","Don't extract");

 
DEFINE("_PLEASESELECTTHUMBNAIL","L�tfen videonuz i�in bir k���k resim se�iniz");

DEFINE("_SIZEEXCEEDSERVERCONF","Upload failed. Your video size exceeds server configuration maximum size.");
DEFINE("_SIZEEXCEEDCOMPONENTCONF","Upload failed. Your video size exceeds component configuration maximum size.");
DEFINE("_PARTIALUPLOADERROR","The video was only partially uploaded. Try again please.");
DEFINE("_UNSUPPORTEDFILETYPE","Unsupported file type.");
DEFINE("_THEFILEISBIGGERPOSTMAXSIZE","File is larger than server maximum post size.");


DEFINE("_NOTUPLOADEDERROR","Video file was not uploaded. Please try again.");
DEFINE("_SEYRETDATE","Tarih");
DEFINE("_SEYRETMENU","SEYRET MEN�");
DEFINE("_PROUPDATEERROR","Pro definitions couldn't be updated. Probably you are having a problem with write permissions.");
DEFINE("_FORMOREINFORMATIONABOUTPRO","You can find some information about pro version on our wiki. Please click here.");
DEFINE("_VIDEOLINK","Video Link"); 

DEFINE("_SHOWORIGINALVIDEOLINK","Show Original Video Link"); 
DEFINE("_SHOWORIGINALVIDEOLINKINFO","Select yes to show a link to the original location of video beneath the embedded player."); 
DEFINE("_ORIGINALVIDEOISHERE","Click here to see original video."); 

DEFINE("_FFMPEGPREEXEC","Execute before ffmpeg"); 
DEFINE("_FFMPEGPREEXECINFO","If you are on a shared hosting and you've compiled ffmpeg yourself, you may need to execute some environment definitions to include libraries. If ffmpeg is installed by your hosting company, leave this value blank."); 

DEFINE("_CACHEDIRISMISSINGPLEASECREATE","Following cache folder could not be created by system. Please create it manually and give appropriate read/write permissions."); 

DEFINE("_ERRORREPORTING","Hata Raporlama");
DEFINE("_ERRORREPORTINGINFO","You can define your system error reporting policy here.");
DEFINE("_NOERRORREPORT","Don't report any errors");
DEFINE("_SHOWERRORSEXCEPTNOTICES","Show all errors except notices");
DEFINE("_SHOWERRORSINCLUDINGNOTICES","Show all errors including notices");
DEFINE("_PLAYTIME","Oynatma S�resi");
DEFINE("_SECONDS","Saniye");




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




DEFINE("_RIGHTCLICKANDSAVE","Right click and save...");

DEFINE("_FIREBOARDCONFIGERROR","There is an error with your Fireboard installation. Fireboard Configuration File cannot be found. Please check your Fireboard installation.");
DEFINE("_ABOUTTHISVIDEO","Video hakk�nda");
DEFINE("_FFMPEGNOTFOUND","Hata: D�n��t�rme arac� bulunamad�. L�tfen y�netici ile g�r���n.");
DEFINE("_MENCODERNOTFOUND","Hata: D�n��t�rme arac� bulunamad�. L�tfen y�netici ile g�r���n.");
DEFINE("_INPUTFILENOTFOUND","Hata: Girdi dosyas� bulunamad�. L�tfen y�netici ile g�r���n.");

//--------------------------------------------


DEFINE("_APPLIEDVIDEOLINK","Video Link");
DEFINE("_TAGLIST","Etiketler");
DEFINE("_VIDEODESCRIPTION","Detaylar");
DEFINE("_CATEGORYLISTSELECT","Kategori");
DEFINE("_SERVERTYPE","Server Type");
DEFINE("_SERVERCODE","Server Code");
DEFINE("_THUMBNAIL","Thumbnail");
DEFINE("_ADDEDDATE2","Added");
DEFINE("_PUBLISHSELECT","Publish Status");
DEFINE("_SUBMITDETAILSCLICK","Details");

DEFINE("_FEATUREDVIDEOS","Se�ilenler");
DEFINE("_LATESTVIDEOS","En yeniler");
DEFINE("_HIGHESTRATEDVIDEOS","Be�enilenler");
DEFINE("_MOSTDISCUSSEDVIDEOS","�ok Tart���lanlar");
DEFINE("_MOSTVIEWEDVIDEOS","�ok izlenenler");
DEFINE("_READMORE","Daha fazla");
DEFINE("_LESS","Daha az");
DEFINE("_INCATEGORY","Kategori");
DEFINE("_INCHANNEL","Channel");
DEFINE("_DISPLAYSTYLE","Display");
DEFINE("_CATIDS","Category Ids");

DEFINE("_SEARCHVIDEOS","Search Videos"); 
DEFINE("_SMALLSTATISTICSPRE","Total "); 
DEFINE("_SMALLSTATISTICSPOST"," videos");  
DEFINE("_VIDEOSINCATEGORYPRE","Videos in ");  
DEFINE("_VIDEOSINCATEGORYPOST"," category");   
DEFINE("_GUEST"," Guest");

// DEFINE("_JOINED"," Joined");
// DEFINE("_OWNEDVIDEOSCOUNT"," Videos");
// DEFINE("_THISVIDEOINFORMATION","This Video");
// DEFINE("_THISVIDEOINFORMATIONMORE","Other Information");
// DEFINE("_SUBSCRIBETHISCHANNEL","Subscribe this channel");
// DEFINE("_DIRECTURL"," URL");
// DEFINE("_EMBED"," Embed");

DEFINE("_FULLSCREENBTN","Tam Ekran");
DEFINE("_DOWNLOADBTN","�ndir");
DEFINE("_REPORTBTN","Raporla");
DEFINE("_DELETEBTN","Sil");
DEFINE("_EDITBTN","D�zenle");
DEFINE("_REFRESHBTN","Yenile");


DEFINE("_CATEGORIESQUICKLIST","Quick List");


//comment line 94
//Line 169 - _ADDVIDEOINFO changed
//Line 109 - _YOURUSERIDPROBLEM changed
?>