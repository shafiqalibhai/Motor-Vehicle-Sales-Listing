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
DEFINE("_HIT","Týklama");
DEFINE("_VIDEOTITLE","Baþlýk");
DEFINE("_DETAILS","Detaylar");
DEFINE("_RATING","Beðenilme");
DEFINE("_NUMBEROFVOTE","Oy sayýsý");
DEFINE("_NOVOTE","Oy yok");
DEFINE("_LOGINFORVOTE","Oy kullanmak için giriþ yapmalýsýnýz!");
DEFINE("_THANKSFORVOTE","Oy verdiðiniz için teþekkürler!");
DEFINE("_WAITAMOMENT","Lütfen bekleyiniz!");
DEFINE("_TOPLEVEL","Ana");
DEFINE("_VIDEOGROUPTITLE","Video Kategorileri");
DEFINE("_CATEGORIES","Kategoriler");
DEFINE("_VIDEOS","Videolar");
//DEFINE("_GENERALCONFIG","Ayarlar");
DEFINE("_EXPANDALL","Tümünü Aç");
DEFINE("_CLOSEALL","Tümünü Kapat");
DEFINE("_VIDEO_CATEGORIES","Video Kategorileri");
DEFINE("_VIDEOCAT_CODE","Kategori Kodu");
DEFINE("_VIDEOCAT_NAME","Kategori Adý");
DEFINE("_VIDEOCAT_PARENT","Üst Kategori");
DEFINE("_EDIT_CATEGORY","Kategori Düzenle");
DEFINE("_NEW_CATEGORY","Yeni Kategori");
DEFINE("_NEWVIDEOCATCOMMENT","Burada yeni kategorileri oluþturabilirsiniz. Olduþturduðunuz kategori alt kategori ise ait olduðu kategoriyi belirtmeyi unutmayýnýz.");
DEFINE("_DEVELOPER","Geliþtirici");
DEFINE("_INFO","Bilgi");
DEFINE("_SEYRETTHANKS","Teþekkür");
DEFINE("_VERSION_INFO","Sürüm");
DEFINE("_COPYRIGHT","Telif Hakký");
DEFINE("_LICENSE","Lisans");
DEFINE("_YOUTUBEID","YouTube Developer Id");
DEFINE("_YOUTUBEIDINFO","Burada <b>YouTube Developer Id</b> bilgisini girmeniz gerekmektedir. Bileþen bu kodu kullanarak video baþlýðý, resim konumu gibi videoya ait bilgileri çekmektedir. Bu kodu girmemeniz durumunda bileþenin bu özelliðinden faydalanamayacaðýnýz için bilgileri kendiniz girmeniz gerekecektir..");
DEFINE("_TITLELENGTH","Baþlýk Uzunluðu");
DEFINE("_TITLELENGTHINFO","Video listelerinde görüntülenecek baþlýðýn uzunluðunu giriniz. Sayfa görünümüne göre en uygun deðeri bulabilirsiniz. ");
DEFINE("_DETAILSLENGTH","Detay Uzunluðu");
DEFINE("_DETAILSLENGTHINFO","Video listelerinde görüntülenecek detaylarýn uzunluðunu giriniz. Sayfa görünümüne göre en uygun deðeri bulabilirsiniz.. ");
DEFINE("_CONFIG_OK","Ayarlar kaydedildi!");
DEFINE("_CONFIG_ERR","Hata: Ayarlar kaydedilemedi!");
DEFINE("_VIDEOWIDTH","Video Geniþliði");
DEFINE("_VIDEOWIDTHINFO","Ön sayfada video geniþliði. Sayfanýzýn görünümüne göre en uygun deðeri giriniz.");
DEFINE("_VIDEOHEIGHT","Video Yüksekliði");
DEFINE("_VIDEOHEIGHTINFO","Ön sayfada video yüksekliði. Sayfanýzýn görünümüne göre en uygun deðeri giriniz.");
DEFINE("_VIDEO_LIST","Video Listesi");
DEFINE("_VTHUMB","Küçük Resim");
DEFINE("_VIDEO","Video");
DEFINE("_EDIT_VIDEO","Video Düzenle");
DEFINE("_NEW_VIDEO","Yeni Video");
DEFINE("_VSERVERTYPE","Sunucu Tipi");
DEFINE("_VSERVERCODE","Sunucu Kodu");
DEFINE("_NEWVIDEOCOMMENT","Yeni video eklemek için en uygun yol ön sayfadan admin olarak giriþ yaparak admin seçeneðini kullanmaktýr. Orada sadece video baðlantýsýný girerek gereken diðer bilgileri sistemin çekmesini saðlayabilirsiniz. <br> Bir videoyu düzenliyorsanýz ve ne yaptýðýnýzdan iyice emin deðilseniz lütfen yanýnda uyarý iþareti olan deðerleri bozmamaya dikkat ediniz. Aksi takdirde bileþenin düzgün çalýþmasýna engel olabilirsiniz.");
DEFINE("_APPLY","Uygula");
DEFINE("_SAVE","Kaydet");
DEFINE("_INPUTLINK","Baðlantýyý Giriniz");

//Version 0.2=============================================================================================

DEFINE("_ISTHISFRESHINSTALL","Seyret veritabaný tablolarý bulunamadý.<br><strong>Veri kaybýndan kaçýnmak için dikkatli olunuz.</strong><br>");
DEFINE("_IFTHISISFRESHINSTALL","EÐER BU YENÝ BÝR KURULUMSA");
DEFINE("_IFTHISISUNINSTALL","BÝLEÞENÝ KALDIRIYORSANIZ");
DEFINE("_THISWILLDROPTABLES","Kurulumu tamamlamak için aþaðýdaki resme týklayýnýz.");
DEFINE("_INSTALLATTENTION","<strong>Bu iþlemde mevcut bütün tablolar deðiþtirilecek.</strong>."); 
DEFINE("_FRESHINSTALLSUCCESS","Seyret Veritabaný Baþarýyla Kuruldu.");
DEFINE("_UNINSTALLEXPL","Seyret veritabaný tablolarýný baþarýyla kaldýrdýnýz.<br><br>Lütfen Joomla bileþen yönetimi bölümünden bileþeni tamamen kaldýrmayý unutmayýnýz.");
//DEFINE("_THISISANUPDATEINFO","Seyret bileþenini yükseltiyorsunuz.<br><b>Maalesef bu seferlik eski Bu yüzden bütün video bilgilerini kaybedeceksiniz.<br>Fakat ileriki sürümler için veritabaný yükseltme imkaný sunacaðýz.</b>");
DEFINE("_THISISANUPDATE","YÜKSELT");
DEFINE("_JOOMLAALEMMESSAGE","Joomlaholic Ýlanlarý");
DEFINE("_YOUDONTWANTTRACKING","Mesaj alýmý için izin vermiyorsunuz. Yeni sürüm ve güvenlik duyurularýný buradan izleyemeyeceksiniz. Ayarlar bölümünden mesaj alýmý özelliðini açmanýzý tavsiye ediyoruz.");
DEFINE("_VERSIONTRACKINGINFO","<b>Burada Joomlaholic mesajlarýný alýp almayacaðýnýzý belirleyebilirsiniz.<br><br>Mesaj alýmýný onaylarsanýz, sistem Joomlaholic sunucularýna baðlanacak ve sitenize özel bir kullanýcý kodu oluþturulacaktýr. <br><br>Böylece yönetim panelinden Joomlaholic mesajlarýný görebilecek, yeni sürümlerden haberdar olacaksýnýz.<br><br>Ayrýca bu kullanýcý kimliðiniz video indirme özelliði için kullanýlacaktýr. <br><br>Eðer mesaj alýmýný kapatmayý seçerseniz Joomlaholic sunucularýna baðlanmayacaksýnýz.<b>");
DEFINE("_PLEASESELECTTRACKINGCHOICE","LÜTFEN SEÇÝNÝZ");
DEFINE("_THEME","Tema");
DEFINE("_THEMEINFO","Lütfen sitenizde kullanacaðýnýz Seyret bileþeni temasýný seçiniz.");
DEFINE("_ADDVIDEO","Video Ekle");
DEFINE("_PENDINGVID","Bekleyen Videolar");
DEFINE("_SORTBY","Sýrala");
DEFINE("_NOSERVERFOUNDREPORTIT","Üzgünüz, fakat bu baðlantýya uygun bir video sunucu bulamadýk. Baðlantýnýn doðru olduðundan eminseniz site yöneticiniz ile irtibata geçiniz.");
DEFINE("_ADDEDBY","Ekleyen");
DEFINE("_ADDEDDATE","Tarih");
//DEFINE("_YOUSHOULDLOGINTOADDVIDEO","Video eklemek için giriþ yapmalýsýnýz.");
DEFINE("_ASCENDING","Artan");
DEFINE("_DESCENDING","Azalan");
DEFINE("_POPUPVIDEOWIDTH","Açýlýr pencere video geniþliði");
DEFINE("_POPUPVIDEOHEIGHT","Açýlýr pencere video yüksekliði");
DEFINE("_DEFAULTSORTBY","Öntanýmlý video sýralama kriteri");
DEFINE("_DEFAULTSORT","Öntanýmlý sýralama þekli");
DEFINE("_POPUPVIDEOWIDTHINFO","Burada, açýlýr penceredeki video geniþliðini belirtiniz. Pencere geniþliði buradaki geniþlikten 100px daha fazla olacaktýr.");
DEFINE("_POPUPVIDEOHEIGHTINFO","Burada, açýlýr penceredeki video yüksekliðini belirtiniz. Pencere geniþliði buradaki yükseklikten 100px daha fazla olacaktýr.");
DEFINE("_DEFAULTSORTBYINFO","Lütfen sýralama kriterini belirleyiniz."); 
DEFINE("_DEFAULTSORTINFO","Lütfen sýralama þeklini artan veya azalan olarak belirleyiniz."); 
DEFINE("_THISAREAISONLYFORREGISTEREDUSERS","Sadece kayýtlý kullanýcýlar video indirebilir. Lütfen kullanýcý adýnýzla siteye giriþ yapýnýz.");  
DEFINE("_COPYTHISLINK","Kopyalayýnýz");  
DEFINE("_YOURUSERIDRESTORED","Kullanýcý kodunu yeniden kaydedildi!");   
DEFINE("_YOURUSERIDGENERATED","Kullanýcý kodunuz baþarýyla oluþturuldu!");   
DEFINE("_YOURUSERIDPROBLEM","Joomlaholic kullanýcý kodunuzla ilgili bir problem var! Lütfen Joomlaholic yöneticileriyle irtibata geçiniz!");  
DEFINE("_YOUDONTHAVEADMINISTRATORRIGHTS","Yönetici haklarýnýz yok! Eðer yönetici olmanýza raðmen bu mesajý alýyorsanýz muhtemelen acl problemleri yaþýyorsunuzdur. Bekleyen videolarý onaylamak için yönetici panelini kullanabilirsiniz.");  
DEFINE("_IFPUBLISHED","Yayýnlanma Durumu");   
DEFINE("_YES","Evet");   
DEFINE("_NO","Hayýr");   
DEFINE("_ENABLEDOWNLOADS","Ýndirmeleri Etkinleþtir");   
DEFINE("_ENABLEDOWNLOADSINFO","Bu sürümde indirme linkleri Joomlaholic sunucularýnda oluþturuluyor. Video indirmeyi etkinleþtirmek için Joomlaholic sistemine en az $7 baðýþlamanýz gerekmektedir. <br>Eðer henüz baðýþta bulunmadýysanýz soldaki menüden Baðýþlar bölümüne gidiniz. Baðýþ yaptýktan sonra yine ayný yerden bizi bilgilendirmeyi unutmayýnýz.");   
DEFINE("_JALEMUSERID","Joomlaholic Kullanýcý Kodu"); 
DEFINE("_JALEMUSERIDINFO","Sitenizin Joomlaholic kullanýcý kodu. Bu kod bütün Joomlaholic iþlemlerinde iþinize yrayacak."); 
DEFINE("_DONATIONS","Baðýþlar"); 
DEFINE("_DONATIONHEADER","Baðýþlar"); 
DEFINE("_YOUHAVENTDONATEDYET","Henüz baðýþ yapmadýðýnýz görülüyor.");
DEFINE("_YOUHAVENTDONATEDSTEP1","<b>Adým-1: </b> Aþaðýda baðýþ yapmak istediðiniz miktara týklayarak Paypal baðýþ sayfasýna gidiniz. Açýlan sayfada Joomlaholic kullanýcý kodunuz da eklenmiþ olacaktýr.");
DEFINE("_YOUHAVENTDONATEDSTEP2","<b>Adým-2: </b>Baðýþ yaptýktan sonra aþaðýdaki alana miktarýný yazýnýz ve bize bildiriniz. <p><b>Bu bizi baðýþ yaptýðýnýz konusunda uyaracaktýr.</b> <p> Bizi bilgilendirince biz hesabýmýzý kontrol edinceye kadar öntanýmlý olarak video indirme özelliði açýlacaktýr. <p>Eðer baðýþýnýz doðruy onayalanacak, deðilse reddedilecek ve sitenize ait video indirme özelliði kapatýlacaktýr."); 
DEFINE("_SUBMIT","Bildir ve indirmeleri aç"); 
DEFINE("_INFORMJOOMLAALEM","Joomlaholic için yaptýðýnýz baðýþ miktarý: "); 
DEFINE("_YOURDONATIONAPPROVED","Baðýþýnýz onaylandý. Video indirme özelliðini kullanmaya devam edebilirsiniz. <p>Baðýþýnýz için teþekkürler."); 
DEFINE("_YOURDONATIONPENDING","Baðýþ raporunuz onay bekliyor. Ayarlar bölümüne giderek indirme özelliðini açabilirsiniz. <p>Fakat baðýþýnýzý onaylamazsak video indirme özelliði sunucularýmýzdan kapatýlacaktýr. <p>Baðýþýnýz için teþekkürler."); 
DEFINE("_YOURDONATIONREJECTED","Baðýþ raporunuz reddedildi. <p>Maalesef baðýþýnýzý onaylayamadýk. <p>Bunun hata olduðunu düþünüyorsanýz bize mail ile ulaþýnýz."); 
DEFINE("_UNINSTALL","Kaldýr"); 
DEFINE("_CAUTION","Dikkat"); 
DEFINE("_CAUTIONUNINSTALL2","Bu iþlem Seyret veritabaný tablolarýný kalýcý olarak silecek.<p>Seyret veritabaný tablolarýný kaldýrmak istiyorsanýz aþaðýdaki resme týklayýnýz."); 
DEFINE("_CAUTIONUNINSTALL3","Bu iþlem sadece Seyret veritabaný tablolarýný kaldýracaktýr. Bundan sonra Joomla bileþen yükleme/kaldýrma bölümüne giderek bileþeni tamamen kaldýrýnýz."); 
DEFINE("_UNINSTALLDATABASESUCCESS","Seyret Veritabaný tablolarý baþarýyla kaldýrýldý!");
DEFINE("_NOJALEMUSERID","Geçerli bir Joomlaholic kullanýcý kodunuz yok! <p>Bu kod olmadan Joomlaholic ile irtibat kuramazsýnýz. <p>Muhtemelen mesaj alýmý kapalýdýr. Ayarlar bölümünden mesaj alýmýný etkinleþtirebilirsiniz.<p> Daha sonra kullanýcý kodunuz otomatik olarak oluþturulacaktýr.");
DEFINE("_MESSAGEFEED","Mesaj Alýmý"); 
DEFINE("_MESSAGEFEEDINFO","Mesaj alýmý seçeneðini buradan ayarlayabilirsiniz. Geçerli bir Joomlaholic kullanýcý kodunuz yoksa mesaj alýmýný etkinleþtirmenizi tavsiye ederiz. Etkinleþtirince kullanýcý kodunuz otomatik olarak oluþturulacaktýr. Daha sonra mesaj alýmýný kapatsanýz bile, kullanýcý kodunuz silinmeyecektir. Ayný zamanda bileþeni kaldýrýp yeniden kursanýz bile eski kullanýcý kodunuz Joomlaholic sunucularýndan okunarak yeniden kaydedilecektir."); 
DEFINE("_ENABLED","Etkin"); 
DEFINE("_DISABLED","Kapalý"); 
DEFINE("_VIDEOCOUNTINVLIST","Video #");
DEFINE("_VIDEOCOUNTINVLISTINFO","Video listesinde yer alan video sayýsýný buradan ayarlayabilirsiniz.");
DEFINE("_DELETEVIDEOCONFIRMMESSAGE","Bu video kalýcý olarak silinecek. Emin misiniz?"); 
DEFINE("_DELETETHISVIDEO","Bu videoyu sil");
DEFINE("_PUBLISH","Yayýnla");
//that's enough for 0.2. Let's leave something to 0.3 :)

//0.2.1 start
 
DEFINE("_UPLOADVIDEO","Video Yükle"); 
DEFINE("_UPLOADVIDEOINFORM","Burada videolarýnýzý yükleyebilirsiniz. Lütfen site içeriðimize uymayan videolarý yüklemeyiniz. <br/><b>Sadece flv videolarý yüklemeye dikkat ediniz. Aksi durumda videolarýnýz oynatýlmayacaktýr.</b>"); 
DEFINE("_UPLOADANDGOTONEXT","Yükle ve sonraki adýma geç"); 
DEFINE("_UPLOADTHUMBNAILINFORM","Videonuz için küçük resim yükleyebilirsiniz. Videonuzu en iyi anlatabilecek bir küçük resim yüklemeye dikkat ediniz. <br/> <b>Sadece JPG resimleri yükleyiniz.</b><br/>Bu video için küçük resim yüklemeyecekseniz aþaðýdaki kutucuðu iþaretlemeyi unutmayýnýz."); 
DEFINE("_NOTHUMBNAILFORTHISVIDEO","Videom için küçük resim yüklemeyeceðim."); 
DEFINE("_COPY","Kopyala");  
DEFINE("_THISISANUPDATEINFO","Seyret bileþenini için sürüm yükseltmeye hoþgeldiniz.<br><b>Bu iþlemde Seyret veritabaný tablolarý silinmeyecektir.<br>Fakat yine de veritabaný yedeðini almanýzý tavsiye ederiz.</b>");
DEFINE("_DBVERSION_INFO","Eski sürüm"); 
DEFINE("_NEWVERSION_INFO","Yükseltme yaptýðýnýz sürüm"); 
DEFINE("_PROCEEDUPGRADE","Yükseltme iþlemine devam etmek için aþaðýdaki resme týklayýnýz."); 
DEFINE("_UPGRADEATTENTION","Yükseltme iþleminden sonra birþeylerin ters gittiðini düþünüyorsanýz, yedek dosyalarýndan veri tabanýnýzý geri yükleyiniz ve bu konuda bizi bilgilendiriniz. www.joomlaholic.com"); 
DEFINE("_UPGRADESUCCESS","Seyret sürümü baþarýyla yükseltildi!");  
DEFINE("_USERSUPLOADVIDEO","Kullanýcýlar video ekleyebilir");  
DEFINE("_USERSUPLOADVIDEOINFO","Lütfen kullanýcýlarýnýzýn video ekleme iznini düzenleyiniz.");  
DEFINE("_VIDEOMAXSIZE","Maksimum video boyutu");  
DEFINE("_VIDEOMAXSIZEINFO","Kullanýcýlarýn yükleyeceði videonun <b>Megabayt</b> cinsinden boyutunu belirleyiniz. Bunun tamsayý olmasýna dikkat ediniz. Ayrýca php.ini yükleme sýnýrlarýný da dikkate alýnýz.");  
DEFINE("_THUMBMAXSIZE","Maksimum küçük resim boyutu");  
DEFINE("_THUMBMAXSIZEINFO","Kullanýcýlarýn yükleyeceði küçük resimlerin <b>Megabayt</b> cinsinden boyutunu belirleyiniz. Bunun tamsayý olmasýna dikkat ediniz. Ayrýca php.ini yükleme sýnýrlarýný da dikkate alýnýz.");  
DEFINE("_RESIZETHUMBWIDTH","Küçük resim ölçekleme geniþliði"); 
DEFINE("_RESIZETHUMBWIDTHINFO","Uploaded video thumbnails will be resized. This value defines width of thumbnail."); 
DEFINE("_EMBEDBOXWIDTH","Embed Box Width"); 
DEFINE("_EMBEDBOXWIDTHINFO","This value defines the width of embed link box and copy link box."); 
DEFINE("_ADDVIDEOINFO","Lütfen video linkini kopyalayýp aþaðýdaki kutuya yapýþtýrýn. Daha sonra 'Uygula' düðmesine týklayýn. <b>Video linkinin doðru biçimde olmasýna dikkat edin.</b> Gereken düzenlemeleri yaptýktan sonra kaydedin. Detaylý bilgi için yardým sayfamýzý ziyaret edebilirsiniz."); 

// please delete or comment  _THISISANUPDATEINFO line on 80
// pay attention, in  line 115 $3 is changed to $5
//0.2.3. end

//====================================================================================
//0.2.4
DEFINE("_ADMANAGEMENT","Reklam Yönetimi"); 
DEFINE("_TOP","Ana"); 
DEFINE("_ADLINK","Reklam Linki"); 
DEFINE("_REMOTESERVERFILES","Reklam sunucularýnda dosya listesi "); 
DEFINE("_NEWADCOMMENT","Reklam için kategori seçiniz. Listede olmayan bir flv dosyasýna da doðrudan link verebilirsiniz."); 
DEFINE("_REMOTESERVERADDRESS","Your remote server ads directory"); 
DEFINE("_AD","Video Reklamlarý"); 
DEFINE("_NEW_AD","Yeni Reklam"); 
DEFINE("_EDIT_AD","Reklam Düzenle"); 
DEFINE("_PARENT","Kategori"); 

//0.2.5
DEFINE("_VIDEOURL","Link");  
DEFINE("_VIDEOEMBEDCODE","Ekle"); 
DEFINE("_VOTEIT","Oy ver");
DEFINE("_LOGINTOVOTE","Oy vermek için giriþ yapýnýz");
DEFINE("_GENERALCONFIG","Genel"); //comment line 31
DEFINE("_CONFIG","Ayarlar"); 
DEFINE("_ADSCONFIG","Reklam");
DEFINE("_EXTRAS","Ekstra");
DEFINE("_WRITEHELP","Yardým Oluþtur");
DEFINE("_SNIPPETS","HTML Kodu");
DEFINE("_WRITEHELPCOMMENT","Yardým sistemini kullanmak istiyorsanýz, kendi yardým dosyanýzý oluþturabilirsiniz.");
DEFINE("_SNIPPETCOMMENT","Video gömme kodunun sonuna reklam koymak istiyorsanýz burada oluþturabilirsiniz.");
DEFINE("_REPORTVIDEOINFORM","Lütfen raporlama sebebinizi yazýnýz. Yöneticilerimiz en kýsa zamanda raporunuzu okuyacaktýr.");
DEFINE("_VIDEOID","Video Kodu");
DEFINE("_REPORTEDBY","Raporlayan");
DEFINE("_REPORTEDDATE","Rapor Tarihi");
DEFINE("_REPORTCOMMENT","Rapor Sebebi");
DEFINE("_REPORTREPLY","Cevap");



//0.2.6 -------------------starts
DEFINE("_VIDEOSINALLCATEGORIES","Videolar"); 
DEFINE("_VIDEOCAT","Kategori"); 
DEFINE("_SEARCH","Arama"); 
DEFINE("_DISPLAY","Görünüm"); 
DEFINE("_PERMISSIONS","Ýzinler"); 
DEFINE("_SYSTEM","Sistem"); 
DEFINE("_USERSCREENNAME","Kullanýcýnýn Görünen Adý"); 
DEFINE("_USERSCREENNAMECOMMENT","Kullanýcýlarýn sitenizde görünen adýný seçebilirsiniz : kullanýcý adý veya gerçek adý."); 
DEFINE("_USEREMOTESERVERSUPPORT","Uzak sunucu kullan"); 
DEFINE("_USEREMOTESERVERSUPPORTINFO","Uzak sunucu kullanma özelliðini etkinleþtirebilirsiniz. <b>Bu özellik henüz tamamlanmadý</b>."); 
DEFINE("_REMOTESERVERADSDIRECTORY","Uzak Reklam Dizini"); 
DEFINE("_REMOTESERVERADSDIRECTORYINFO","Uzak sunucu reklam dizinini giriniz. Bu dizinin bileþenle birlikte verilen index dosyasýný içerdiðinden emin olunuz."); 
DEFINE("_REMOTESERVERVIDEOSDIRECTORY","Uzak Video Diizni"); 
DEFINE("_REMOTESERVERVIDEOSDIRECTORYINFO","Uzak sunucu video dizinini giriniz. Bu dizinin bileþenle birlikte verilen index dosyasýný içerdiðinden emin olunuz."); 
DEFINE("_REMOTESERVERCHECKSTRING","Uzak sunucu kontrol deðeri"); 
DEFINE("_REMOTESERVERCHECKSTRINGINFO","Uzak sunucularda yer alan dosyalarýn yetkisiz listelenmesini engellemek için bu deðeri belirleyiniz. Buraya girdiðiniz deðeri index.php dosyasýnda da deðiþtirmeyi unutmayýnýz."); 
DEFINE("_PLEASESELECT","Lütfen seçiniz...");
DEFINE("_SUPERADMINRIGHTS","Süper Yönetici Haklarý");
DEFINE("_SUPERADMINRIGHTSINFO","Süper Yöneticiler tüm haklara sahiptirler. Herhangi bir kýsýtlama olmayacaktýr.");
DEFINE("_RIGHTS","Seyret Eriþim Haklarý");
DEFINE("_CANSEEADMINTOOLBAR","Yönetici araç çubuðunu görebilir");
DEFINE("_CANSEEREPORTEDVIDESBUTTON","Raporlanan Videolar düðmesini görebilir");
DEFINE("_CANSEEPENDINGVIDESBUTTON","Bekleyen videolar düðmesini görebilir");
DEFINE("_CANSEEADDVIDEOSBUTTON","Video ekle düðmesini görebilir");
DEFINE("_CANADDVIDEOS","Video ekleyebilir");
DEFINE("_CANSEEUPLOADVIDEOSBUTTON","Video yükle düðmesini görebilir");
DEFINE("_CANUPLOADVIDEOS","Video yükleyebilir");
DEFINE("_CANSEEMYVIDEOSBUTTON","Videolarým düðmesini görebilir");
DEFINE("_CANSEEFEATUREDVIDEOSBUTTON","Seçilmiþ videolar düðmesini görebilir");
DEFINE("_CANSEESEARCHVIDEOSBUTTON","Arama düðmesini görebilir");
DEFINE("_CANSEEHELPBUTTON","Yardým düðmesini görebilir");
DEFINE("_CANSEEDELETEVIDEOBUTTON","Video sil düðmesini görebilir");
DEFINE("_CANDELETEVIDEO","Videolarý silebilir");
DEFINE("_CANSEEEDITVIDEOBUTTON","Videolarý düzenle düðmesini görebilir");
DEFINE("_CANEDITVIDEO","Videolarý düzenleyebilir");
DEFINE("_CANSEEFULLSCREENBUTTON","Tam ekran düðmesini görebilir");
DEFINE("_CANSEEDOWNLOADBUTTON","Ýndir düðmesini görebilir");
DEFINE("_CANDOWNLOADVIDEO","Videolarý indirebilir");
DEFINE("_CANSEEREPORTBUTTON","Raporla düðmesini görebilir");
DEFINE("_CANREPORTVIDEOS","Videolarý Raporlayabilir");
DEFINE("_CANSEEDIRECTLINKBOX","Link kutusunu görebilir");
DEFINE("_CANSEEEMBEDBOX","Gömme kodunu görebilir");
DEFINE("_CANSEEVOTESTARTS","Oy yýldýzlarýný görebilir");
DEFINE("_CANVOTE","Oy kullanabilir");
DEFINE("_CANSEECOMMENTS","Yorumlarý görebilir");
DEFINE("_SEYRETACL","Seyret Eriþim Ýzinleri");
DEFINE("_EDIT_SEYRETACL","Seyret Eriþim Ýzinlerini Düzenle");
DEFINE("_NEW_SEYRETACL","Yeni Seyret Eriþim Ýzni");
DEFINE("_JACLNAME","Joomla Eriþim Düzeyi");
DEFINE("_YOUDONTHAVEPERMISSIONS","Bu iþlem için yeterli izin düzeyiniz yok. <p>Siteye giriþ yapmadýysanýz lütfen giriþ yapýnýz.");
DEFINE("_DOWNLOADS","Ýndirilme");
DEFINE("_CANPUBLISHVIDEO","Videolarý yayýnlayabilir");
DEFINE("_VIDEOADDEDSUCCESFULLY","Video baþarýyla eklendi. ");
DEFINE("_CANSEEVIDEOSERVERDETAILS","Video sunucu detaylarýný görebilir.");
DEFINE("_AD_VIDEO_LIST","Reklam Videolarý Listesi");
DEFINE("_REMOTESERVERSUPPORTISNOTENABLED","Uzak sunucu desteði etkin deðil. Lütfen ayar panelinden etkinleþtiriniz.");
DEFINE("_USEAJAXBROWSING","Ajax Destekli Gezinme");
DEFINE("_USEAJAXBROWSINGINFO","Ajax destekli gezinme seçeneði. Henüz bu bir beta özelliðidir. Öntanýmlý olarak evet kullanýnýz. Hayýr seçeneði ile problem yaþarsanýz deðiþtiriniz.");
DEFINE("_TWOCOLUMNSVIDEOLIST","Çok sütunlu video listeleme");
DEFINE("_TWOCOLUMNSVIDEOLISTINFO","Ana sayfada çok sütunlu video listeleme. Temanýza uygun olarak istediðiniz seçimi yapýnýz.");
DEFINE("_MULTICOLUMNCOUNT","Sütun sayýsý");
DEFINE("_MULTICOLUMNCOUNTINFO","Sütun sayýsýný giriniz.");
DEFINE("_YOUHAVENOACCESSRIGHTTOTHISVIDEO","Videolarý izleyebilmek için, üye olmalýsýnýz. Üye olmak için; <a href={accesslevelupgradelink_dontchangethis}> link'e týklayýnýz.</a>");
DEFINE("_VIDEOACCESSLEVEL","Video Eriþim Seviyesi");
DEFINE("_UPGRADEACCESSLEVELLINK","Eriþim Seviyesi Yükseltme Linki");
DEFINE("_UPGRADEACCESSLEVELLINKINFO","Videolarýnýz için eriþim sýnýrý koyuyorsanýz, kullanýcýlarýnýza heasp yükseltme baþvurusu için bir link belirleyebilirsiniz.");
DEFINE("_ACCESSLEVELCOUNT","Eriþim Düzeyi Sayýsý");
DEFINE("_ACCESSLEVELCOUNTINFO","Videolarýnýz için eriþim düzeyi koyuyorsanýz, eriþim düzeyi sayýsýný belirleyebilirsiniz . Yüksek rakamlarýn daha yüksek eriþim hakký olduðunu unutmayýnýz. Boþ býrakýrsanýz videolarýnýza herkes eriþecektir.");
DEFINE("_VIDEOCAT_DIR","Kategori Dizini");
DEFINE("_CATEGORYDIRECTORYWILLBEGENERATED","Bu kategori için dizin otomatik olarak oluþturulacaktýr. Bu kategoride oluþturulan videolarý bu kategori altýnda toplayýnýz.");
DEFINE("_LOCALFILESDIRECTORY","Yerel dosyalar için ana dizin");
DEFINE("_LOCALFILESDIRECTORYINFO","Yerel dosyalar için ana dizin. Kategori klasörleri bu ana dizin altýnda oluþturulacaktýr. <b>/dir1/dir2</b> biçiminde olmalýdýr.");
DEFINE("_LOCALVIDEO","Yerel Video");
DEFINE("_LOCALVIDEOINFO","Yerel bir video kullanacaksanýz video ve küçük resmi seçiniz.");
DEFINE("_VIDEOCAT_FILELIST","Video Listesi");
DEFINE("_VIDEOCAT_THUMBLIST","Küçük Resim Listesi");
DEFINE("_VIDEOSERVER","Video Sunucusu");
DEFINE("_VIDEOSERVERINFO","Eðer baþka bir video sunucusundan video ekleyecekseniz -youtube gibi, google gibi- linki giriniz ve uygula butonuna basýnýz.");
DEFINE("_SERVERCODES","Sunucu Kodlarý");
DEFINE("_SERVERCODESINFO","Bir videoyu düzenliyor ve ne yaptýðýnýzdan tam emin deðilseniz, bu kýsýmda deðiþiklik yapmayýnýz. Aksi taktirde bileþenin çalýþmasýnda hata oluþabilir.");
DEFINE("_ATTRIBUTES","Özellikler");
DEFINE("_THISISABACKUPFILE","Bu bir yedek dosyasýdýr");
DEFINE("_VIDEOADS","Video Reklamlarý");
DEFINE("_IMAGEADS","Resim Reklamlarý");
DEFINE("_USEIMAGEADSYSTEM","Resim reklamý sistemini kullan");
DEFINE("_IMAGEADDURATION","Resim Reklamý Süresi");


DEFINE("_ISDOWNLOADABLE","Ýndirilebilir");
DEFINE("_ALLOWURLVALUE","allow_url_fopen");
DEFINE("_ALLOWURLVALUEINFO","allow_url_fopen için php ayarlarýnýzý gösterir.");
DEFINE("_ON","Açýk");
DEFINE("_OFF","Kapalý");
DEFINE("_CURLLIB","curl Kütüphanesi");
DEFINE("_CURLLIBINFO","Bu kütüphane yüklüyse url okumak için bu fonksiyon kullanýlacaktýr.");
DEFINE("_NOTINSTALLED","Kurulu deðil");
DEFINE("_INSTALLED","Kurulu");
DEFINE("_SEYRETFUNCSTATUS","Seyret Fonksiyon Testi");
DEFINE("_PASSED","Baþarýlý");
DEFINE("_FAILED","Baþarýsýz");
DEFINE("_SEYRETFUNCSTATUSINFO","Bu test baþarýsýz ise Seyret bileþeninin en önemli özelliklerini kullanamayacaksýnýz demektir. Hosting firmanýzla görüþerek yukarýdaki özelliklerden en azýndan birini açtýrmanýzý tavsiye ederiz.");
DEFINE("_IMAGEADDEFAULT","Ön tanýmlý resim reklamý");
DEFINE("_USEIMAGEADSYSTEMINFO","Evet seçerseniz videolardan önce reklam resmi görünecektir. <b>Bu sadece pro özellikleri etkinse çalýþacaktýr.</b>");
DEFINE("_IMAGEADDEFAULTINFO","Ön tanýmlý resim reklamý. Bir kategori için reklam bulunamazsa buradaki reklam görüntülenecektir.");
DEFINE("_IMAGEADDURATIONINFO","Milisaniye olarak reklam resminin görüntülenme süresi.");
DEFINE("_UPLOADEDSUCCESSFULLY","Video baþarýyla yüklendi. Ayarlara baðlý olarak ya hemen yayýnlanacaktýr veya yöneticinin onayýndan sonra yayýnlanacaktýr.");
DEFINE("_ID","Id");
DEFINE("_AD_IMAGE_LIST","Resim Reklamlarý Listesi");
DEFINE("_NEWIMAGEADCOMMENT","Lütfen gösterilecek resim dosyasýnýn tam adresini giriniz. Kategori seçmeyide unutmayýnýz. Eðer birden fazla resim dosyasýný bir kategoriye atamýþsanýz, ön sayfada rastgele bir seçim ile gösterilecektir. Lütfen týklamadan sonra açýlacak adresi giriniz.");
DEFINE("_REALNAME","Gerçek Ýsim");
DEFINE("_UNKNOWN","Misafir");  
DEFINE("_RESETMYDOWNLOADSTATUS","Video indirme raporunuzu sýfýrlamak istiyorsanýz buraya týklayýnýz."); 
DEFINE("_VIDEODOWNLOADOPTION","Video Ýndirme Özelliði"); 
DEFINE("_PROSTATUS","Seyret Pro Durumu"); 
DEFINE("_SEYRETISNOTPRO","Seyret, henüz pro sürümüne yükseltilmiþ deðil. Pro sürümünde kullanabileceðiniz ekstra bazý özellikler bulunacaktýr. Daha detaylý bilgiyi www.joomlaholic.com sitesinde bulabilirsiniz. <p>Pro sürümü için sadece bir kez ödeme yapacaksýnýz. Yeni sürümlerde otomatik olarak pro kullanmaya devam edeceksiniz."); 
DEFINE("_MAKEPROBUTTON","Pro sürümüne yükselt"); 
DEFINE("_MAKEMEPRO","Baðýþ miktarýný giriniz:"); 
DEFINE("_UPGRADETOPRO","<b>Adým-1:</b> Pro sürümünü kullanabilmek için en azýndan 40 USD baðýþ yapmalýsýnýz. Aþaðýdaki düðmelerden birine basarsanýz, otomatik pro onaylama iþlemi için gerekli bilgilerle birlikte bir paypal sayfasý açýlacaktýr."); 
DEFINE("_UPGRADETOPROSTEP2","<b>Adým-2:</b> Bu iþlem, bizi ödeme yaptýðýnýz konusunda bilgilendirecektir. Pro sürümünüz onaylandýktan sonra hemen kullanmaya baþlayabileceksiniz . Ýþlemleri buradan yaparsanýz otomatik onaylama yapýlacaktýr. Havale ile ödeme için bizimle irtibata geçebilirsiniz."); 
DEFINE("_SEYRETPROISPENDING","Pro için baðýþ raporunuz onay bekliyor. Üzgünüz ama Paypal'den ödemenize dair bir bilgi henüz ulaþmadý. Paypal ödeme raporunuzla bize baþvurunuz. <p> Eðer yanlýþlýkla bildirimde bulunduðunuzu düþünüyorsanýz aþaðýdaki baðlantýya týklayýnýz."); 
DEFINE("_RESETMYPROSTATUS","Pro özellikleri bildirmini sýfýrlamak için buraya týklayýnýz"); 
DEFINE("_SEYRETPROISAPPROVEDREFRESH","Baðýþ raporunuz onaylandý. <p>Lütfen sayfayý yenileyiniz."); 
DEFINE("_COULDNTCONNECTTRYLATER","Bildiriminiz gerçekleþmiþtir. Fakat bildirim onayý için joomlaholic sunucularýna baðlanamadýk. Lütfen daha sonra tekrar deneyiniz."); 
DEFINE("_YOUCANRESETIFMISTAKENLY","Eðer yanlýþlýkla bildirimde bulunduðunuzu düþünüyorsanýz aþaðýdaki baðlantýya týklayýnýz."); 
DEFINE("_PROAPPROVED","Pro sürümü bildiriminiz onaylanmýþtýr. Hayýrlý olsun.");
DEFINE("_NEEDTOUPDATE","Seyret pro tanýmlamalarý eski. Kesinlikle güncellemenizi tavsiye ediyoruz.");
DEFINE("_UPDATEPROPHP","Pro tanýmlamalarýný güncelleþtirmek için buraya týklayýnýz.");
DEFINE("_ITISUPTODATE","Seyret pro tanýmlamalarýnýz güncel. Yapmanýz gereken birþey bulunmamaktadýr.");
DEFINE("_SEYRETPROISREJECTED","Bildirminiz reddedilmiþtir. Kontrollerimize göre baðýþ bildiriminiz doðru deðil. Þimdi bildiriminiz sýfýrlanacaktýr. Bunun hata olduðunu düþünüyorsanzý bizimle irtibata geçiniz"); 
DEFINE("_THISISAPROVERSIONFEATURE","Pro sürümüne geçiniz");
DEFINE("_GOTODONATIONSPAGETOENABLEPRO","Bu özellik sadece pro sürümü için geçerlidir. Baðýþlar sayfasýndan pro sürümüne yükseltme yapabilirsiniz");
DEFINE("_USEVIDEOADSYSTEMINFO","Evet seçerseniz, videolarýnýzdan önce, seçtiðiniz bir video reklamý gösterilecektir. <b>Sadece pro sürümü ile çalýþacaktýr.</b>");
DEFINE("_USEVIDEOADSYSTEM","Video reklam sistemini kullan");
DEFINE("_VIDEOINFOREFRESHED","Video bilgileri güncellendi.");
DEFINE("_THUMBWIDTHINLIST","Video listesindeki küçük resim geniþliði.");
DEFINE("_THUMBWIDTHINLISTINFO","Video listesindeki küçük resim geniþliði. Sadece sayý kullanýnýz, px eklemeyiniz.");
DEFINE("_FEATURED","Seçilmiþ");
DEFINE("_DISCUSSIONONFORUM","Tartýþma");
DEFINE("_CLICKHERETODISCUSS","Videoyu tartýþmak için buraya týklayýnýz");
DEFINE("_TOPICRE","Cevap: ");


DEFINE("_VIDEOINFO","Video Bilgisi");
DEFINE("_INPUTFBDISCUSSTOPIC","Konu");
DEFINE("_INPUTFBDISCUSSMESSAGE","Mesaj");
DEFINE("_CATEGORYINFO","Kategori Bilgisi");
DEFINE("_CATEGORYNAME","Baþlýk");
DEFINE("_SUBCATEGORIES","Alt kategoriler");
DEFINE("_VIDEOSINCAT","Video sayýsý");
DEFINE("_DISCUSSPOSTHEADER","Yeni mesaj gönder");
DEFINE("_SUBMITCOMMENT","Gönder");
DEFINE("_LOGINTOWRITECOMMENT","Yorum yazmak için siteye giriþ yapýnýz");
DEFINE("_DONTDONATEIFYOUWILLMAKEPRO","Pro sürümüne yükseltmeyi düþünüyorsanýz indirme özelliði için baðýþ yapmayýnýz. Pro sürümünde zaten baðýþ etkin olacaktýr..");
DEFINE("_COMMENTINGSYSTEM","Yorum Sistemi");
DEFINE("_JOMCOMMENT","Jom Comment");
DEFINE("_FIREBOARD","Fireboard");
DEFINE("_COMMENTINGSYSTEMINFO","Ön tanýmlý yorum sistemini seçiniz.");
DEFINE("_PUBLISHAFTERMODERATED","Onaylandýktan sonra yayýnlanacaktýr.");
DEFINE("_SHOWVIDEOTOOLTIPS","Video Ýpuçlarýný Göster");
DEFINE("_SHOWVIDEOTOOLTIPSINFO","Fare imleci ile resim üzerine gelince videonun detaylarý görüntülenebilir.");
DEFINE("_SHOWCATEGORYTOOLTIPS","Kategori Ýpuçlarýný Göster");
DEFINE("_SHOWCATEGORYTOOLTIPSINFO","Fare imleci ile resim üzerine gelince kategorinin detaylarý görüntülenebilir.");

DEFINE("_INTEGRATION","Bütünleþme");
DEFINE("_FIREBOARDCATEGORYFORDISCUSS","FB Tartýþma Kategorisi");
DEFINE("_FIREBOARDCATEGORYFORDISCUSSINFO","Videolarýn tartýþýldýðý baþlýklarýn gideceði Fireboard kategorisini giriniz.");
DEFINE("_LEAVEVIDEOLINK","Video için geri link");
DEFINE("_LEAVEVIDEOLINKINFO","Fireboard tartýþma baþlýðýnda video için geri link verebilirsiniz.");
DEFINE("_YOUAREUSINGPRO","Seyret Pro kullanýyorsunuz");
DEFINE("_GOTODONATIONSPAGE","Tanýmlamalarý yükseltmek için Baðýþlar sayfasýna gidiniz.");
DEFINE("_NOTPROWANTTOUPGRADE","Seyret standart sürümü kullanýyorsunuz.<br> Pro sürümüne yükseltmek için Baðýþlar sayfasýna gidiniz. Sadece üç dakikada pro sürümüne yükseltebilirsiniz.");
 

DEFINE("_IMAGEAD","Resim Reklamlarý");
DEFINE("_CLICKLINK","Týklama Linki");
DEFINE("_LOCALADSDIRECTORY","Yerel Reklamlar Dizini");
DEFINE("_LOCALADSDIRECTORYINFO","Yerel reklamlarý kullanmak istiyorsanýz dizin giriniz.");
DEFINE("_RSSCHANNELTITLEPRE","");
DEFINE("_RSSCHANNELTITLEPOST","kategorisindeki son videolar");
DEFINE("_RSSLATESTVIDEOSCATDESCPRE","");
DEFINE("_RSSLATESTVIDEOSCATDESCPOST","Sitesindeki son videolar");

DEFINE("_CLISKHERETOSTART","Baþlamak için burayý týklayýnýz");
DEFINE("_DISABLEPRO","Pro Özelliklerini Kapat");
DEFINE("_DISABLEPROINFO","Problem çýkan bazý durumlarda -uzak video sunucularda yapýlan deðiþiklikler gibi- sorun çözülene kadar pro özelliklerini kapatabilirsiniz.");



DEFINE("_TAGS","Etiketler");
DEFINE("_DIAGNOSTICS","Analiz");
DEFINE("_FILESYSTEM","Dosya Sistemi"); 
DEFINE("_TEHERAREOWNERSHIPPROBLEMS","Sisteminizde dosya sahiplik sorunlarý var. Bazý sorunlarla karþýlaþabilirsiniz. Eðer hata ile karþýlaþýrsanýz sorunlu dizinlere 777 haklarý vermeyi deneyin. Hata ile karþýlaþmýyorsanýz izin olarak 755 kullanmanýzý tavsiye ediyoruz.");  
DEFINE("_THEREAREMISSINGFILES","Seyret dizin aðacýnda eksik bazý klasörler mevcut. Dosya sahiplik sorunundan dolayý otomatik olarak oluþturulamadý. Seyret kullanýmýnda bazý sorunlar çýkacaktýr. Bu sorunu çözmek için aþaðýdaki ftp aracýný kullanýn.");  
DEFINE("_MISSING","EKSÝK");
DEFINE("_FTPSERVER","Ftp Sunucu");
DEFINE("_FTPUSERNAME","Ftp Kullanýcý Adý");
DEFINE("_FTPPASSWORD","Ftp Þifresi");
DEFINE("_JOOMLAROOT","Joomla Kök Dizini");
DEFINE("_TRYFTP","Ftp ile dene");
DEFINE("_NEEDFTP_LAYER","Ftp Hesap Detaylarý");
DEFINE("_FTPSERVERINFO","Bu site için ftp hesabýný girin. ftp.exapmle.com gibi");
DEFINE("_FTPUSERNAMEINFO","Ftp kullanýcý adýný girin");
DEFINE("_FTPPASSWORDINFO","Ftp þifresini girin");
DEFINE("_JOOMLAROOTINFO","Joomla kurulumunuz için ana dizin. Bu deðere dikkat edin. Bu adres dizinin tam adresi olmamalý. Ftp eriþiminize göre bir deðer alacaktýr. Mesela /www  veya  /httpdocs gibi.");
DEFINE("_THEREARENOPROBLEMS","Seyret dizin sisteminde bir sorun yok.");
DEFINE("_DIRECTORY","Dizin"); 
DEFINE("_OWNER","Sahibi"); 
DEFINE("_ACCESS","Eriþim"); 
DEFINE("_RESULT","Sonuç"); 
DEFINE("_CONNECTION","Baðlantý");
DEFINE("_CACHE","Önbellek");
DEFINE("_CLEARVIDEOCACHE","Video önbelleðini temizlemek için buraya týklayýnýz.");

DEFINE("_GOOGLECONNECTCHECK","Google Baðlantý");
DEFINE("_CONNECTED","Baðlandý");
DEFINE("_GOOGLECONNECTCHECKINFO","Bu sunucunuzun baðlantý kabiliyetini test eder.");

//0.2.7.7 starts
DEFINE("_CONVERSION","Dönüþtürme");
DEFINE("_FFMPEGPATH","FFMPEG yolu");
DEFINE("_FFMPEGPATHINFO","ffmpeg için dizin yolunu giriniz. ");
DEFINE("_VIDEOCONVERSION","FLV Dönüþtürme");
DEFINE("_ENABLEFLVCONVERSION","FLV Dönüþtürme Etkin");
DEFINE("_ENABLEFLVCONVERSIONINFO","Bu özellik sadece Seyret PRO ile çalýþacaktýr. flv dönüþtürme ile ilgili sorun yaþarsanýz veya güçlü bir sunucunuz yoksa bu özelliði devre dýþý býrakabilirsiniz.");
DEFINE("_ENABLEAUTOMATICTHUMBNAILEXTRACTION","Küçük Resim Çýkarma Etkin");
DEFINE("_ENABLEAUTOMATICTHUMBNAILEXTRACTIONINFO","Bu özellik sadece Seyret PRO ile çalýþacaktýr. Küçük resim çýkarma ile ilgili sorun yaþarsanýz veya güçlü bir sunucunuz yoksa bu özelliði devre dýþý býrakabilirsiniz.");
DEFINE("_INSTANTVIDEOPROCESS","Videolarý Hemen Dönüþtür");
DEFINE("_INSTANTVIDEOPROCESSINFO","Evet seçerseniz, yüklenen videolar hemen flv'ye dönüþtürülecektir. Hayýr seçerseniz dönüþtürme iþlemi yapýlmayacaktýr. Yüklenen videolar kaydedilecek ve dönüþtürme sýrasýna eklenecektir. Yönetici daha sonra bu videolarý dönüþtürebilir.");
DEFINE("_INSTANTTHUMBPROCESS","Küçük Resimleri Hemen Çýkar");
DEFINE("_INSTANTTHUMBPROCESSINFO","If you select yes, thumbnails for your uploaded videos will be extracted instantly. We advice this feature, so that your users will be able to select their thumbnail for their video.");
DEFINE("_VIDEODIMENSIONS","FLV Boyutlarý");
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
DEFINE("_SELECTVIDEOSTOUPLOAD","Video seçiniz");
DEFINE("_SELECTVIDEOSTOUPLOADINFO","Yüklemek istediðiniz videoyu seçiniz. Seçtiðiniz video yükleme listesine alýnacaktýr.");
DEFINE("_SELECTTHUMBSTOUPLOAD","Select Thumbnail");
DEFINE("_SELECTTHUMBSTOUPLOADINFO","You can upload a thumbnail for your video. Try to upload a thumbnail that represents your video well.");
DEFINE("_BROWSEFILES","Gözat");
DEFINE("_UPLOADINGFILE","Yükleniyor ..");
DEFINE("_UPLOADCOMPLETE","Lütfen bekleyiniz, detaylar alýnýyor!");
DEFINE("_REMOVEFROMQUEUE","Listeden Kaldýr");
DEFINE("_VIDEOFILES","Video dosyalarý");
DEFINE("_MAXFILESIZEEXCEEDS","Bu dosya, izin verilen maksimum büyüklüðü aþýyor!");
DEFINE("_MAXIMUM","Max");
DEFINE("_UPLOADQUEUE","Yükleme Listesi");
DEFINE("_UPLOADQUEUEINFO","Seçtiðiniz dosyalarý kontrol edin ve yükleme iþlemini baþlatýn.");
DEFINE("_STARTUPLOAD","Yükle");
DEFINE("_INPROCESSPLEASEWAIT","Lütfen bekleyiniz, yükleme sonucu kontrol ediliyor...");
DEFINE("_TERMSOFUSEINFO","Lütfen kullaným sözleþmesini dikkatlice okuyunuz.");
DEFINE("_TERMSOFUSE","Kullaným Sözleþmesi");
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


DEFINE("_VIDEOUPLOADISSUCCESS","Video baþarýyla yüklendi.");
DEFINE("_VIDEOCONVERTSUCCESS","Videonuz baþarýyla dönüþtürüldü.");
DEFINE("_VIDEOCONVERTPOSTPONED","Your video will be processed by admin soon.");
DEFINE("_VIDEOCONVERTNOTSET","Video conversion is not set on this server.");




DEFINE("_UPLOADCONTROL","Yükleme Kontrol");
DEFINE("_CONVERSIONCHECK","Video Dönüþtürme");
DEFINE("_THUMBNAILCHECK","Video Resmi Oluþturma");
DEFINE("_GETTINGINPUTFORM","Bilgi Formu");
DEFINE("_PLEASEFILLTHEDETAILSBELOW","Lütfen videonuz için aþaðýdaki detaylarý giriniz.");


DEFINE("_THUMBNAILSEXTRACTED","Thumbnails are generated.");
DEFINE("_THUMBNAILSEXTRACTIONBYADMIN","Thumbnails will be generated by admin later.");
DEFINE("_NOTHUMBNAILSEXTRACT","Thumbnails will not be generated by system.");

DEFINE("_DONTEXTRACT","Don't extract");

 
DEFINE("_PLEASESELECTTHUMBNAIL","Lütfen videonuz için bir küçük resim seçiniz");

DEFINE("_SIZEEXCEEDSERVERCONF","Upload failed. Your video size exceeds server configuration maximum size.");
DEFINE("_SIZEEXCEEDCOMPONENTCONF","Upload failed. Your video size exceeds component configuration maximum size.");
DEFINE("_PARTIALUPLOADERROR","The video was only partially uploaded. Try again please.");
DEFINE("_UNSUPPORTEDFILETYPE","Unsupported file type.");
DEFINE("_THEFILEISBIGGERPOSTMAXSIZE","File is larger than server maximum post size.");


DEFINE("_NOTUPLOADEDERROR","Video file was not uploaded. Please try again.");
DEFINE("_SEYRETDATE","Tarih");
DEFINE("_SEYRETMENU","SEYRET MENÜ");
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
DEFINE("_PLAYTIME","Oynatma Süresi");
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
DEFINE("_ABOUTTHISVIDEO","Video hakkýnda");
DEFINE("_FFMPEGNOTFOUND","Hata: Dönüþtürme aracý bulunamadý. Lütfen yönetici ile görüþün.");
DEFINE("_MENCODERNOTFOUND","Hata: Dönüþtürme aracý bulunamadý. Lütfen yönetici ile görüþün.");
DEFINE("_INPUTFILENOTFOUND","Hata: Girdi dosyasý bulunamadý. Lütfen yönetici ile görüþün.");

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

DEFINE("_FEATUREDVIDEOS","Seçilenler");
DEFINE("_LATESTVIDEOS","En yeniler");
DEFINE("_HIGHESTRATEDVIDEOS","Beðenilenler");
DEFINE("_MOSTDISCUSSEDVIDEOS","Çok Tartýþýlanlar");
DEFINE("_MOSTVIEWEDVIDEOS","Çok izlenenler");
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
DEFINE("_DOWNLOADBTN","Ýndir");
DEFINE("_REPORTBTN","Raporla");
DEFINE("_DELETEBTN","Sil");
DEFINE("_EDITBTN","Düzenle");
DEFINE("_REFRESHBTN","Yenile");


DEFINE("_CATEGORIESQUICKLIST","Quick List");


//comment line 94
//Line 169 - _ADDVIDEOINFO changed
//Line 109 - _YOURUSERIDPROBLEM changed
?>