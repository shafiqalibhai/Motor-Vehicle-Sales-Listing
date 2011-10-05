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
// by Lucio Bresser <info@per-ipşum.org> - http://www.per-ipşum.org

// JDownloads 1.2 alpha (first draft) translated to English for http://www.Joomlaaddons.de
// by Daniel Pardons  (aka dpardons) - http://www.joompad.be

// JDownloads 1.4 translated to Turkish from scratch uniquely for jDownloads
// by Ugur UYGUR <info@joomlatr.org> - http://www.joomlatr.org

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

DEFINE('_JLIST_INSTALL_0','Yükleme bilgisi:');
DEFINE('_JLIST_INSTALL_1','Tüm ayar dosyaları veritabanında mevcut!');
DEFINE('_JLIST_INSTALL_2','Ayar dosyaları yenilendi.');
DEFINE('_JLIST_INSTALL_3','Tüm ayarlar veritabanında bulunuyor!.');
DEFINE('_JLIST_INSTALL_4','Varsayılan ayarlar veritabanına kaydedildi!');
DEFINE('_JLIST_INSTALL_5','Tüm varsayılan lisans(lar) veritabanında!');
DEFINE('_JLIST_INSTALL_6','Tüm varsayılan lisans(lar) veritabanına kaydedildi!');
DEFINE('_JLIST_INSTALL_7','Upload klasörü mevcut fakat YAZILABİLİR değil!');
DEFINE('_JLIST_INSTALL_8','Upload klasörü mevcut fakat YAZILABİLİR değil. Lütfen JDownloads upload klasörünün CHMOD ayarlarını 0777 yapin, aksi taktirde JDownloads çalışmayacaktır!');
DEFINE('_JLIST_INSTALL_9','Upload klasörü oluşturuldu. CHMOD 0777 yapılmalı.');
DEFINE('_JLIST_INSTALL_10','Hata : Upload klasörü oluşturulamadı!<br />Lütfen FTP yoluyla kendiniz oluşturun ve upload klasöründe CHMOD ayarını 0777 yapın, aksi taktirde JDownloads çalışmayacaktır!');
DEFINE('_JLIST_INSTALL_11','Zip dosyaları için geçici klasör var ve YAZILABİLİR!');
DEFINE('_JLIST_INSTALL_12','Upload klasörü /downloads/tempzipfiles var fakat YAZILABİLİR değil. Lütfen geçici klasörde CHMOD ayarini 0777 yapın, aksi taktirde JDownloads çalışmayacaktır!');
DEFINE('_JLIST_INSTALL_13','/downloads/tempzipfiles klasörü oluşturuldu. YAZILABİLİR: CHMOD 0777 - Tamam.');
DEFINE('_JLIST_INSTALL_14','Hata: Zip klasörü /downloads/tempzipfiles oluşturulamadı!<br />Lütfen FTP yoluyla kendiniz oluşturun ve upload klasöründe CHMOD ayarini 0777 yapın.<br />Aksi taktirde JDownloads çalışmayacaktır!');
DEFINE('_JLIST_INSTALL_15','Yükleme basarılı!');
DEFINE('_JLIST_INSTALL_16','JDownloads bileşenini başlat!');

DEFINE('_JLIST_INSTALL_DB_TIP','Bilgi : JDownloads bileşenini sildiğinizde veritabanından silinmez. Eğer yeni bir versiyon yüklerseniz veritabanındaki bilgi tekrar kullanılabilir durumda olacaktır.');
DEFINE('_JLIST_INSTALL_TITLE_FOR_DEFAULT_LAYOUTS','Standart');

//FRONTEND

DEFINE('_JLIST_FILE_NOT_FOUND','Talep ettiginiz dosya bulunamadı. Lütfen tasarımcıyı uyarın');
DEFINE('_JLIST_LINKTEXT_VIEW_FILE_TYPES','İndirmeye basla<br />(yeni pencerede göster)');
DEFINE('_JLIST_LINKTEXT_ZIP','İndirmeye basla');
DEFINE('_JLIST_LINKTEXT_DOWNLOAD_URL','Indir');
DEFINE('_JLIST_LINKTEXT_HOME','Anasayfa');
DEFINE('_JLIST_DEL_ZIP_ADMIN_INFO','<br />Admin bilgisi : geçici zip dosyalarıni silerken hata oluştu veya dosya bulunamadı!');
DEFINE('_JLIST_FORM_BUTTON_TEXT','Devam');
DEFINE('_JLIST_EMPTY_CAT_TEXT','Bu kategoriye henüz dosya eklenmemiş.<br /><br />');
DEFINE('_JLIST_MAIL_DOWNLOADER_NAME_VISITOR','Ziyaretçi');
DEFINE('_JLIST_MAIL_DOWNLOADER_GROUP','Misafir');
DEFINE('_JLIST_MAILSEND_ERROR','Bu e-postayi gönderirken hata oluştu!');
DEFINE('_JLIST_FRONTEND_COUNT_şuBCATS','Alt kategori sayısı:');
DEFINE('_JLIST_FRONTEND_COUNT_FILES','Dosya sayısı:');
DEFINE('_JLIST_FRONTEND_HOMEPAGE','Anasayfa');
DEFINE('_JLIST_FRONTEND_BACK_BUTTON','Geri');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_DATE','Tarih');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_LICENCE','Lisans');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_AUTHOR','Yazar');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_WEBSITE','Website');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_SYSTEM','Sistem');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_LANGUAGE','Dil');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_DOWNLOAD','Indir');
DEFINE('_JLIST_FRONTEND_VERSION_TITLE','Versiyon: ');
DEFINE('_JLIST_FRONTEND_CAT_ACCESS_REGGED','Bu kategoriden İndirmek için üye olmanız gerekli. Eğer daha önce üye olduysanız lütfen giriş yapın.<br /><br />');

//BACKEND TOOLBAR
DEFINE('_JLIST_BACKEND_COMPONENT_NAME','JDownloads');
DEFINE('_JLIST_BACKEND_TOOLBAR_MAIN','Anasayfa');
DEFINE('_JLIST_BACKEND_TOOLBAR_EDIT','Düzenle');
DEFINE('_JLIST_BACKEND_TOOLBAR_REMOVE','Sil');
DEFINE('_JLIST_BACKEND_TOOLBAR_CLOSE','Kapat');
DEFINE('_JLIST_BACKEND_TOOLBAR_şuBMAIN','Düzenler');

//BACKEND CPANEL
DEFINE('_JLIST_BACKEND_CPANEL_FILES','İndirmeler');
DEFINE('_JLIST_BACKEND_CPANEL_CATEGORIES','Kategoriler');
DEFINE('_JLIST_BACKEND_CPANEL_LICENSE','Lisanslar');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES','Yönetim Düzenlemeleri');
DEFINE('_JLIST_BACKEND_CPANEL_BACKUP','Yedek Alma');
DEFINE('_JLIST_BACKEND_CPANEL_SETTINGS','Ayarlar');
DEFINE('_JLIST_BACKEND_CPANEL_RESTORE','yedeği Devreye Sokma');
DEFINE('_JLIST_BACKEND_CPANEL_INFO','Kullanım Koşulları');
DEFINE('_JLIST_BACKEND_CPANEL_şuPPORT','Destek');

// REşuLTS FROM AUTOCHECKFILES OPTION
DEFINE('_JLIST_BACKEND_AUTOCHECK_TITLE','İndirme bölgesi hakkında bilgi:');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NEW_FILES','Yeni dosya(lar) bulundu ve kullanılabilir!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_MISSING_FILES','Dosya(lar) bulunamadı. İndirmeler artik herkes tarafından görüntülenemeyecek!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NO_NEW_FILES','Hiç yeni dosya bulunamadı!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NO_MISSING_FILES','Yayınlanmış bütün dosyalar bulundu!');

DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_STATUS','Durum');
DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_2','Versiyon');
DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_3','Hareket kaydı');

// STATUS
DEFINE('_JLIST_BACKEND_PANEL_STATUS_OFFLINE_HEADER','İndirme alanı durumu');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_TITEL','<font color="#990000"><b><big>İndirme alanı durumu:</big></b></font>');

DEFINE('_JLIST_BACKEND_PANEL_STATUS_DESC_ONLINE','Eğer çevrimiçi ise, İndirme alanı ziyaretçiler tarafından görülebilir.');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_ONLINE','<font color="green"><b><big> ÇEVRIMİÇİ!</big></b></font>');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_OFFLINE','<font color="red"><b><big> ÇEVRİMDIŞI!</big></b></font>');

// OFFLINE
DEFINE('_JLIST_BACKEND_OFFLINE_OPTION_TITLE','Bakımı aktifleştir?');
DEFINE('_JLIST_BACKEND_OFFLINE_OPTION_DESC','Bu seçenekle bütün İndirme alanının görünürlüğünü kapatıyorsunuz. Ziyaretçiler görülebilir. İndirme alanı sadece "yazar" statüsünde olanlar ve giriş yapmış üyeler tarafından görülebilir.');
DEFINE('_JLIST_BACKEND_OFFLINE_MESSAGE_TITLE','Ziyaretçiler için not');
DEFINE('_JLIST_BACKEND_OFFLINE_MESSAGE_DEFAULT','<table width="70%" align="center" cellspacing="0" cellpadding="20" border="1"><tr><td align="center">
<h3>şu anda hala İndirme alanında çalismalar yapiyoruz.<br /><br />Lütfen birkaç dakika içinde tekrar deneyin.</h3><br /><img src="components/com_jdownloads/images/offline.png" />
</td></tr></table>');
DEFINE('_JLIST_BACKEND_OFFLINE_MESSAGE_DESC','İndirme bölgesi hala bakımdaysa gösterilecek yazıyı girin.');
DEFINE('_JLIST_BACKEND_OFFLINE_ADMIN_MESSAGE_TEXT','<div align="center"><b><h3>İndirmeler : Çevirimdışı!</h3></b></div>');

//BACKEND SETTINGS
DEFINE('_JLIST_BACKEND_SETTINGS','Ayarlar');
DEFINE('_JLIST_BACKEND_SETTINGS_SAVED','Ayarlar kaydedildi');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_HEAD','E-posta ayarları ');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_FILES_HEAD','İndirme ayarları');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_FRONTEND_HEAD','Önsayfa ayarları');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_BACKEND_HEAD','Admin sayfası ayarları');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_SECURITY_HEAD','Güvenlik ayarları');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_IMAGES_HEAD','Resim/İkon ayarları');

DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_DOWNLOADS','İndirmeler');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_FRONTEND','Ön sayfa');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_BACKEND','Admin sayfası');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_IMAGES','Resimler/Simgeler');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_SECURITY','Güvenlik');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_EMAIL','E-Posta');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_SONSTIGE','Diğer');

DEFINE('_JLIST_BACKEND_SETTINGS_DATETIME','Tarih-Zaman formatı');
DEFINE('_JLIST_BACKEND_SETTINGS_DATETIME_DESC','Format hakkında bilgi: <a href="http://www.php.net/manual/de/function.strftime.php" target="_blank">www.php.net</a>');

DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIR','Upload klasörü');
DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIR_DESC','Upload için ana klasör. Bu klasör ve <b>tüm</b> alt klasörler YAZILABİLİR olmalıdır!');

DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIRTEMP','Geçici klasör');
DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIRTEMP_DESC','Bu klasör bulunmalı ve YAZILABİLİR olmalı! İçerisinde geçici olarak oluşturulmuş.zip dosyaları bulunur (İndirmeden sonra otomatik olarak silinir).');

DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_1','Standart');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_2','En yeni en önce');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_3','En yeni en son');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_4','İsim yukarı');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_5','İsim aşağı');

// E-Mail config
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_OPTION_DESC','Eğer bu aktifleştirilmisse belirtilen adrese her download yapıldığında e-posta gönderilecektir.');
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_OPTION','E-posta aktifleştir?');

DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_DESC','İndirme bilgisi gönderilecek e-posta adresi.');
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO','E-posta adresi');

DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_HTML_DESC','Eğer bu aktifleştirildiyse, e-postalar tamamen HTML olarak gönderilecek. Eğer değilse düz metin kullanılacak.');
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_HTML','HTML e-postalar kullan?');

DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_BETREFF_DESC','E-postalarda kullanılacak "Konu".');
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_BETREFF','Konu');

// View Frontend Config settings
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_VIEW_HEAD','Bileşenin ön sayfadaki görünüm ayarları');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_COMPO_TEXT','Bileşen tanımı');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_COMPO_TEXT_DESC','Bileşen başlığı ve kategoriler <b>between</b> arasında gösterilecek yazı. Bileşen ismi otomatik olarak menü adından alınır.<br /><br />CSS sınıfları, HTML kodları ve İsteğe bağlı yazı konulabilir.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CHECKBOX_TEXT','Check kutusu yazısı');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CHECKBOX_TEXT_DESC','En üstteki check kutusunda gösterilecek yazı.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SORTFILESORDER_TEXT','Sıralama');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SORTFILESORDER_DESC','Order by which files are sorted in the front end. Select "Standard" to use the backend\'s default order.');

// View İmages settings
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SHOW_MINIPICS','Bilgi sembollerini göster?');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SHOW_MINIPICS_DESC','Eğer aktifleştirildiyse sembol gösterilir. değilse yazı gösterilir.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_MINIPICS_SIZE','Sembollerin piksel bazinda boyutları');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_MINIPICS_SIZE_DESC','Bilgi sembollerinin boyutları. Standart: 20');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CATPICS_SIZE','Kategori sembollerinin piksel bazında boyutları');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CATPICS_SIZE_DESC','Kategori sembolleri için boyutlar. Kendi ikonlarınızı kullanabilirsiniz,  /catimages klasörüne upload etmeniz yeterli. Standart: 48');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FILEPICS_SIZE','Dosya sembollerinin piksel bazında boyutları');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FILEPICS_SIZE_DESC','Dosya türlerinin ikonları için sembol boyutu. Kendi ikonlarınızı kullanabilirsiniz,  /fileimages klasörüne upload etmeniz yeterli. Standard: 32');

// View backend security settings
// to be translated
DEFINE('_JLIST_BACKEND_SETTINGS_MAIL_SECURITY_DESC','Evet ise, spam engellemek amacıyla e-posta adresleri gösterilmez. Eğer javascript kapalı ise link gösterilmez. Önerilen ayar: Evet.');
//
DEFINE('_JLIST_BACKEND_SETTINGS_MAIL_SECURITY_TITEL','E-mail addresses concealing?');

// View backend Config settings
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_LAYOUTS','Düzenler için WYSIWYG-editor kullan');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_LAYOUTS_DESC','Eğer bu ayar aktifleştirilirse, şu anki seçili WYSIWYG editörü düzenlemeler için kullanılacak. Eğer değilse basit yazı alanı çıkacak.');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_FILES','İndirmeler için WYSIWYG-editor kullan');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_FILES_DESC','Eğer bu ayar aktifleştirilirse, şu anki seçili WYSIWYG editörü İndirmeler için kullanılacak. Eğer değilse basit yazı alanı çıkacak.');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_CATS','Kategoriler için WYSIWYG-editor kullan');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_CATS_DESC','Eğer bu ayar aktifleştirilirse, şu anki seçili WYSIWYG editörü kategoriler için kullanılacak. Eğer değilse basit yazı alanı çıkacak.');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_LICENSES','Lisanslar için WYSIWYG-editor kullan');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_LICENSES_DESC','Eğer bu ayar aktifleştirilirse, şu anki seçili WYSIWYG editörü lisansları düzenlemek için kullanılacak. Eğer değilse basit yazı alanı çıkacak.');

DEFINE('_JLIST_BACKEND_SETTINGS_FILE_SYSTEM_LIST','Select downloads field: edit "Sistem"');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_SYSTEM_LIST_DESC','Here you can edit the proposed options for the field. Between each option you need a "," separator. <br /><br /><b>Important notice:</b> if you have already saved some downloads in the list, be careful, because every change is passed on to the downloads. Example: if some downloads are saved with system ="Joomla 1.5", they will be set to another value eg. "Windows Vista". Add new values at the end of the list.');

DEFINE('_JLIST_BACKEND_SETTINGS_FILE_LANGUAGE_LIST','Select downloads field: edit "Dil"');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_LANGUAGE_LIST_DESC','Here you can edit the proposed options for the field. Between each option you need a "," separator. <br /><br /><b>Important noctice:</b> if you have already saved downloads in the list, be careful, because every change is passed on to the downloads. Example: The downloads saved with language ="Deutsch", they will be set to another value eg. "French". Add new values at the end of the list.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_ZIPFILE_PREFIX_TEXT','ZİP dosyaları için ön ek');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_ZIPFILE_PREFIX_DESC','If multiple files are selected for download, they are automatically archived into a temporary ZIP file and presented to the user as a single file for download. The ZIP file\'s name is created from the text specified to the left (prefix) and a random number.');

// Templates Config Backend
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_HEAD','<b>Layouts determine the way content is dışplayed in the frontend</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_HEAD_INFO','<br />Several standard layouts are included upon installation. They may be customized as desired and new layouts may be created. To simplify this configuration allows selection between using a WYSIWYG editor or a simple text area for editing.<br /><br />In case the component\'s frontend output does not work properly after making changes to the <b>default layouts</b> the <b>original contents</b> (meaning the status after the installation) may be restored at any time. To do this, remove <b>all texts</b> in the respective default layout input fields and select <b>Save</b>. The page will be saved with its original contents. <b>Caution:</b> changes already made will be lost.<br /><br />Note: several variables are used in layouts (e.g. <font color=darkred>{files}</font>). The variables are replaced with the actual contents when the actual website is generated.<br />');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS','Düzen : Kategoriler');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_DESC','Bu ön sayfadaki <b>kategorilerin</b> nasıl görüneceğini belirler. If you have selected the option <b>dışplay home page with category overview</b> in the global configuration, the {files} and {checkbox_top} placeholders (variables) are only used for dışplaying single categories.<br /><br /><font color=red>{files} {form_hidden} {form_button} {checkbox_top}</font> variables should <font color=red>NOT</font> be removed from the code! Only remove the variable {checkbox_top} from the code if the variable {url_download} is used in the file layout. The {files} tag is replaced with data from the file layout. <br /><br />Available placeholders (variables):<br />{cat_title} {cat_description} {cat_pic} {files} {checkbox_top} {şum_şubcats} {şum_files_cat}');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_INFO_TITLE','<b>Kategori düzeni bilgisi:</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_INFO_TEXT','<p>This is a graphical example of frontend category description dışplay. The dark red border indicates the area you can change the dışplay for here. </p>');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES','Düzen : Dosyalar');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DESC','This is how <b>files</b> are dışplayed in the fronted. <br />Available placeholders (variables):<br />{checkbox_list} {cat_id} {file_id} {file_title} {release} {pic_is_new} {pic_is_hot} {pic_is_updated} {thumbnail} {description} {link_to_details} {file_pic} {price_title} {price_value} {license_title} {license_text} {language_title} {language_text} {filesize_title} {filesize_value} {system_title} {system_text} {author_title} {author_text} {author_url_title} {author_url_text} {created_date_title} {created_date_value} {hits_title} {hits_value} {created_by_title} {created_by_value} {modified_by_title} {modified_by_value} {modified_date_title} {modified_date_value}'); // changed in 1.4 beta (2)
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_INFO_TITLE','<b>Düzen hakkında bilgi:</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_INFO_TEXT','<p>Example for dışplaying the list in frontend. Inside the red box you can edit the dışplaying options.</p>');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL','Düzen : Sonuç');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL_DESC','This is the frontend <b>şummary</b> dışplay. A list of selected files is presented to the user before downloadıng.<br />Here is where you can modify the dışplay of this page. CSS classes, HTML code and arbitrary text may be included.<br /><br />The <font color=red>{download_liste}</font> variable should <font color=red>NOT</font> be removed from the code!<br /><br />Available placeholders:<br />{şummary_pic} {title_text} {download_liste} {license_note} {download_link} {external_download_info}'); // changed in 1.4 beta (2)
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL_INFO_TITLE','<b>Sonuç düzeni hakkında bilgi</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL_INFO_TEXT','<p>This is a graphical example of this page in the frontend. The dark red border indicates the area you can change the dışplay from here. </p>');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_MAIL','Düzen : E-posta');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_MAIL_DESC','Here is where you may format <b>e-mails</b> that (when activated) get sent to the e-mail address specified in configuration after every download. HTML code and arbitrary text may be included.<br /><br />Available placeholders:<br /> {file_list} {ip_address} {date_time} {user_name} {user_group}');

//BACKEND CATSLIST
DEFINE('_JLIST_BACKEND_CATSLIST_TITLE_HEAD','Kategoriler');
DEFINE('_JLIST_BACKEND_CATSLIST_SEARCH','Arama');
DEFINE('_JLIST_BACKEND_CATSLIST_SEARCH_LIMIT','Limit');

DEFINE('_JLIST_BACKEND_CATSLIST_TITLE','Kategori');
DEFINE('_JLIST_BACKEND_CATSLIST_PIC','Sembol');
DEFINE('_JLIST_BACKEND_CATSLIST_PUBLISHED','Yayınlandı');
DEFINE('_JLIST_BACKEND_CATSLIST_LINK','Link');
DEFINE('_JLIST_BACKEND_CATSLIST_LINK_TEXT','Önizleme');
DEFINE('_JLIST_BACKEND_CATSLIST_READ','Oku');
DEFINE('_JLIST_BACKEND_CATSLIST_DOWNLOAD','İndir');
DEFINE('_JLIST_BACKEND_CATSLIST_ORDERING','sıralama');
DEFINE('_JLIST_BACKEND_CATSLIST_DEL',' Kategori(ler) silindi.');

// access controll info
DEFINE('_JLIST_BACKEND_CATSLIST_ACCESS_ALL','Tümü');
DEFINE('_JLIST_BACKEND_CATSLIST_ACCESS_REGGED','kayıtlı');
DEFINE('_JLIST_BACKEND_CATSLIST_ACCESS_ADMINS','Özel');

//BACKEND CATSEDIT
DEFINE('_JLIST_BACKEND_CATSEDIT_TITLE','Kategori düzenle');
DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_TITLE','Kategorinin başlığı olmalı');
DEFINE('_JLIST_BACKEND_CATSEDIT_şuC_PUBL',' Kategori(ler) Yayınlandı.');
DEFINE('_JLIST_BACKEND_CATSEDIT_şuC_UNPUBL',' Kategori(ler) yayından kaldırıldı.');
DEFINE('_JLIST_BACKEND_CATSEDIT_SAVE_ERROR_DIR','Hata : Klasörün adı değiştirilemedi!');
DEFINE('_JLIST_BACKEND_CATSEDIT_EDIT','Kategori düzenle');
DEFINE('_JLIST_BACKEND_CATSEDIT_ADD','Kategori ekle');
DEFINE('_JLIST_BACKEND_CATS_SAVEORDER','Yeni sıralama kaydedildi');
DEFINE('_JLIST_BACKEND_CATS_USED','Bu kategori baska bir yönetici tarafından düzenleniyor.');
DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_CAT_COPY','Kategori listesi kopyalanırken bir hata oluştu.');

DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_DESCRIPTION','Kategori tanımı');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_PIC_TEXT','Kategori sembolü seçin');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_PIC_PREVIEW','Resim önizlemesi');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_PIC_DESC','Seçili sembol kategori düzeninde {cat_pic} ile kullanılabilir.');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_TITLE','Hakları Tanımla');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_DESC','Hakları düzenle. Kategoriler, alt kategoriler ve İndirmeler için Kullanıcı Haklarını Tanımla. Eğer "özel" seçerseniz, yazar statüsündeki üyeler okuyabilir ve indirebilir.');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_1','Genel okuma ve İndirme');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_2','Üye olan ve olmayan Kullanıcılar okuyabilir ve indirebilir');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_3','Sadece kayıtlı Kullanıcılar okuyabilir ve indirebilir');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_4','Sadece özel üyeler okuyabilir ve indirebilir');

//BACKEND FILESLIST
DEFINE('_JLIST_BACKEND_FILESLIST_TITLE','İndirmeler');
DEFINE('_JLIST_BACKEND_FILESLIST_SEARCH','Arama');
DEFINE('_JLIST_BACKEND_FILESLIST_SEARCH_LIMIT','Limit');
DEFINE('_JLIST_BACKEND_FILESLIST_CATS','Tüm kategoriler');
DEFINE('_JLIST_BACKEND_FILESLIST_NOCATS','Kategori yok');
DEFINE('_JLIST_BACKEND_FILESLIST_FILE','İndirmeler');
DEFINE('_JLIST_BACKEND_FILESLIST_HITS','İndirmelerin sayısı');
DEFINE('_JLIST_BACKEND_FILESLIST_CAT','Kategori');
DEFINE('_JLIST_BACKEND_FILESLIST_RELEASE','Versiyon');

DEFINE('_JLIST_BACKEND_FILESLIST_DESCRIPTION','Tanım');
DEFINE('_JLIST_BACKEND_FILESLIST_DADDED','Tarih');
DEFINE('_JLIST_BACKEND_FILESLIST_FILENAME','Dosya adı');
DEFINE('_JLIST_BACKEND_FILESLIST_AUTHOR','Yazar');
DEFINE('_JLIST_BACKEND_FILESLIST_PUBLISHED','Yayınlandı');
DEFINE('_JLIST_BACKEND_FILESLIST_ORDERING','Sıralama');
DEFINE('_JLIST_BACKEND_FILESLIST_DEL',' İndirme(ler) silindi');
DEFINE('_JLIST_BACKEND_FILES_SAVEORDER','Yeni sıralama kaydedildi');
DEFINE('_JLIST_BACKEND_FILES_USED','Bu İndirme baska bir yönetici tarafından düzenleniyor.');

//BACKEND FILESEDIT
DEFINE('_JLIST_BACKEND_FILESEDIT_TABTITLE_1','Mecburi');
DEFINE('_JLIST_BACKEND_FILESEDIT_TABTITLE_2','İsteğe bağlı');
DEFINE('_JLIST_BACKEND_FILESEDIT_TABTITLE_3','Dosyalar');

DEFINE('_JLIST_BACKEND_FILESEDIT_TITLE','İndirmeyi düzenle');
DEFINE('_JLIST_BACKEND_FILESEDIT_SENT_IN_FROM','Bu İndirme şu kişi tarafından : ');
DEFINE('_JLIST_BACKEND_FILESEDIT_SAVE','İndirme kaydedildi.');
DEFINE('_JLIST_BACKEND_FILESEDIT_EDIT','İndirme düzenlendi');
DEFINE('_JLIST_BACKEND_FILESEDIT_ADD','İndirme ekle');

//DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_LIST_DESC','Select file for downloadıng from the server.');
DEFINE('_JLIST_BACKEND_FILESEDIT_ROOT_DIR_TITLE','ROOT Download (Upload) klasörü');

DEFINE('_JLIST_BACKEND_FILESEDIT_UPLOAD_DIR_LIST_INFO_1','Tüm alt klasörler YAZILABİLİR!');
DEFINE('_JLIST_BACKEND_FILESEDIT_UPLOAD_DIR_LIST_INFO_2','Alt klasörler YAZILABİLİR <b>değil</b>! Server üzerindeki Hakları kontrol edin (FTP: CHMOD 0777)');
DEFINE('_JLIST_BACKEND_FILESEDIT_CHECK_PERMISSIONS','Dosya upload edilemedi. Server üzerindeki Hakları kontrol edin (FTP: set to CHMOD 0777)');

// language
DEFINE('_JLIST_BACKEND_FILESEDIT_LANGUAGE','Dil');
DEFINE('_JLIST_BACKEND_FILESEDIT_LANGUAGE_DEFAULT_LIST','Seçin:, Türkçe, English, German, French, Italian, Spain, Portuguese, Russian, Polish, Dutch');

// system
DEFINE('_JLIST_BACKEND_FILESEDIT_SYSTEM','Sistem');
DEFINE('_JLIST_BACKEND_FILESEDIT_SYSTEM_DEFAULT_LIST','Seçin:, Joomla 1.0, Joomla 1.5, Windows, Linux, MacIntosh');

DEFINE('_JLIST_BACKEND_FILESEDIT_LICENSES_LIST','Lisans seçin');
DEFINE('_JLIST_BACKEND_FILESEDIT_REMOVE_OK','Dosya silindi.');
DEFINE('_JLIST_BACKEND_FILESEDIT_şuC_PUBL',' Dosya(lar) Yayınlandı.');
DEFINE('_JLIST_BACKEND_FILESEDIT_şuC_UNPUBL',' Dosya(lar) yayından kaldırıldı.');

DEFINE('_JLIST_BACKEND_FILESEDIT_REQUIRES_INFO','<b><font color=red>*</font></b> ile işaretlenmiş bölgeler doldurulmalıdır!');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_TITLE','Başlık <b><font color=red>*</font></b>');
DEFINE('_JLIST_BACKEND_FILESEDIT_DESCRIPTION','Tanım');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FPIC_TEXT','Dosya sembolünü seçin');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FPIC_PREVIEW','Önizleme');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FPIC_DESC','Seçilen öğe gösterilemedi.');

DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_CAT','Kategori <b><font color=red>*</font></b>');
DEFINE('_JLIST_BACKEND_FILESEDIT_LICENSE','Lisans');
DEFINE('_JLIST_BACKEND_FILESEDIT_RELEASE','Versiyon');
DEFINE('_JLIST_BACKEND_FILESEDIT_SIZE','Boyut');
DEFINE('_JLIST_BACKEND_FILESEDIT_SIZE_DESC','Bilmiyorsanız boyut otomatik olarak eklenecektir');
DEFINE('_JLIST_BACKEND_FILESEDIT_DADDED','Tarih ve zaman');
DEFINE('_JLIST_BACKEND_FILESEDIT_DADDED_DESC','Define the date in the following format: <b>YYYY-MM-DD H:mm:ss</b> or use the calendar function. When omitted the current date-time is used automatically');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE','Upload için dosya seçin');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_DESC','In this field you can assign a file name for the file transferred to the server. This file name will be used for downloadıng.');

DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_INFO','şu anki atanmış dosya:');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_ADD_FROM_SERVER','şu anki atanmış dosya:');

DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_ADD_FROM_SERVER_NO','şu anda atanmış dosya yok!');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_ADD_FROM_SERVER_LIST','Dosya seçin');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_REMOVE','<b>Bu dosyayı sil</b>');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_HOME','Web site (without http:// ile)');
DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR','Yazar adı');
DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR_URL','Yazarın URLsi veya e-posta adresi');
DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR_URL_DESC','E-posta adresi otomatik olarak şifrelenecek.');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD','ROOT Upload klasörü');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD_WRITABLE','Durum: <font color=green><strong>YAZILABİLİR</strong></font>');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD_NOTWRITABLE','Durum: <font color=red><strong>YAZILAMAZ</strong></font>');

DEFINE('_JLIST_BACKEND_FILESEDIT_URL_TEMP_WRITABLE','Durum: <font color=green><strong>YAZILABİLİR</strong></font>');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_TEMP_NOTWRITABLE','Durum: <font color=red><strong>YAZILAMAZ</strong></font>');

//BACKEND LICENSE LIST
DEFINE('_JLIST_BACKEND_LICLIST_TITLE_HEAD','Lisanslar');
DEFINE('_JLIST_BACKEND_LICLIST_TITLE','Lisans adı');
DEFINE('_JLIST_BACKEND_LICLIST_LINK','Link');
DEFINE('_JLIST_BACKEND_LICLIST_DEL',' Lisans(lar) silindi');

//Backend LICENSE EDIT
DEFINE('_JLIST_BACKEND_LICEDIT_TITLE','lisansı düzenle');
DEFINE('_JLIST_BACKEND_LICEDIT_ERROR_TITLE','lisansın bir adı olmalı.');
DEFINE('_JLIST_BACKEND_LICEDIT_SAVE','Lisans kaydedildi.');
DEFINE('_JLIST_BACKEND_LICEDIT_TEXT','Lisans adı');
DEFINE('_JLIST_BACKEND_LICEDIT_EDIT','lisansı düzenle');
DEFINE('_JLIST_BACKEND_LICEDIT_ADD','Lisans ekle');
DEFINE('_JLIST_BACKEND_LIC_USED','Bu lisans baska bir yönetici tarafından kullanılıyor.');
DEFINE('_JLIST_BACKEND_LICEDIT_LIC_TITLE','Lisans adı');
DEFINE('_JLIST_BACKEND_LICEDIT_LIC_URL','Lisans linki');
DEFINE('_JLIST_BACKEND_LICEDIT_LIC_DESCRIPTION','Lisans tanımı');

//BACKEND TEMPLATES şuBMENU
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_NAME','Düzen yönetimi');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_CATS','Kategoriler');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_FILES','Dosyalar');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_şuMMARY','Sonuç');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_EMAIL','E-Postalar');
DEFINE('_JLIST_BACKEND_TEMPPANEL_TABTEXT_INFO','Bilgi');

// Backend TEMPLATES TEMPLATES TITLES
DEFINE('_JLIST_BACKEND_TEMPLIST_CATTITLE_HEAD','Kategori düzeni');
DEFINE('_JLIST_BACKEND_TEMPLIST_FILESTITLE_HEAD','Dosya düzeni');
DEFINE('_JLIST_BACKEND_TEMPLIST_şuMTITLE_HEAD','Sonuç düzeni');
DEFINE('_JLIST_BACKEND_TEMPLIST_MAILTITLE_HEAD','E-Posta düzeni');

//BACKEND TEMPLATES LIST
DEFINE('_JLIST_BACKEND_TEMPLIST_MENU_TEXT_ACTIVE','aktifleştir');
DEFINE('_JLIST_BACKEND_TEMPLIST_TITLE','Düzen adı');
DEFINE('_JLIST_BACKEND_TEMPLIST_TYP','Düzen tipi');
DEFINE('_JLIST_BACKEND_TEMPLIST_ACTIVE','Aktif');
DEFINE('_JLIST_BACKEND_TEMPLIST_LOCKED','varsayılan düzen');
DEFINE('_JLIST_BACKEND_TEMPLIST_LOCKED_DESC','<b>Not:</b> Default layouts are integral parts of jDownloads and cannot be deleted. <br />On creating a new layout default layout texts are dışplayed as default.');
DEFINE('_JLIST_BACKEND_TEMPLIST_DEL',' Düzen(ler) silindi');
DEFINE('_JLIST_BACKEND_TEMPLIST_ERROR_IS_LOCKED','varsayılan düzenler silindi.');
DEFINE('_JLIST_BACKEND_TEMPLIST_ERROR_IS_ACTIVE','Aktif düzenler silinemez.');

//Backend TEMPLATES EDIT
DEFINE('_JLIST_BACKEND_TEMPEDIT_TITLE','Düzeni değiştir');
DEFINE('_JLIST_BACKEND_TEMPEDIT_ERROR_TITLE','Hata: Düzenin adı olmalı.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_SAVE','Düzenler kayededildi.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_ACTIVE','Düzen aktifleştirildi.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_EDIT','Düzeni değiştir');
DEFINE('_JLIST_BACKEND_TEMPEDIT_ADD','Düzen ekle');
DEFINE('_JLIST_BACKEND_TEMP_USED','Bu düzen baska bir yönetici tarafından değiştiriliyor.');

DEFINE('_JLIST_BACKEND_TEMPEDIT_NAME','Adı');
DEFINE('_JLIST_BACKEND_TEMPEDIT_TYP','Tipi');
DEFINE('_JLIST_BACKEND_TEMPEDIT_TEXT','Düzeni');
DEFINE('_JLIST_BACKEND_TEMPEDIT_URL','Önizleme linki');

DEFINE('_JLIST_BACKEND_TEMPEDIT_NAME_DESCRIPTION','Bu düzen için anlamlı bir isim kullanın.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_TYP_DESCRIPTION','Select the appropriate layout type.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_TEXT_DESCRIPTION','This is where the layout for frontend dışplay is selected.');

//Backend TEMPLATES TYPS
DEFINE('_JLIST_BACKEND_TEMP_TYP1','Kategoriler');
DEFINE('_JLIST_BACKEND_TEMP_TYP2','Dosyalar');
DEFINE('_JLIST_BACKEND_TEMP_TYP3','Sonuç');
DEFINE('_JLIST_BACKEND_TEMP_TYP4','E-Posta');


//Backend Backup and Restore
DEFINE('_JLIST_BACKEND_RESTORE_TITLE_HEAD','yedeği geri al');
DEFINE('_JLIST_BACKEND_RESTORE_FILE','Yedek dosyası seç');
DEFINE('_JLIST_BACKEND_RESTORE_RUN','Veritabanını şimdi geri al');
DEFINE('_JLIST_BACKEND_RESTORE_RUN_FINAL','Veritabanı geri alımını başlat?');
DEFINE('_JLIST_BACKEND_RESTORE_WARNING','yedeği geri alma sırasında, şu anki veritabanı yedeği ile değiştirilecek.<br /><br />Bu işlemin garantisi yoktur. FTP ile yedek almaniz önerilir. Bu islem birkaç dakika sürebilir');
DEFINE('_JLIST_BACKEND_RESTORE_MSG','%s Yedek başarıyla alındı.');
DEFINE('_JLIST_BACKEND_RESTORE_MSG_2','See restore information in logbook: "Restore Log".');

//Backend CSS & LANGUAGE EDIT
DEFINE('_JLIST_BACKEND_EDIT_CSS_TITLE','CSS-dosyası');
DEFINE('_JLIST_BACKEND_EDIT_LANG_TITLE','Dil dosyası');
DEFINE('_JLIST_BACKEND_EDIT_CSS_FIELD_TITLE','CSS-dosyası içeriği');
DEFINE('_JLIST_BACKEND_EDIT_LANG_FIELD_TITLE','Dil dosyası içeriği');
DEFINE('_JLIST_BACKEND_EDIT_CSS_TITLE_EDIT','CSS Düzenle');
DEFINE('_JLIST_BACKEND_EDIT_LANG_TITLE_EDIT','Dil dosyası düzenle');
DEFINE('_JLIST_BACKEND_EDIT_CSS_SAVED','CSS-dosyası kaydedildi');
DEFINE('_JLIST_BACKEND_EDIT_LANG_SAVED','Dil dosyası kaydedildi');
DEFINE('_JLIST_BACKEND_EDIT_LANG_WRITE_STATUS_TEXT','<big>Dil dosyası: ');
DEFINE('_JLIST_BACKEND_EDIT_CSS_WRITE_STATUS_TEXT','<big>CSS dosyası: ');
DEFINE('_JLIST_BACKEND_EDIT_LANG_CSS_FILE_WRITABLE_YES','<font color="green">YAZILABİLİR!</font></big>');
DEFINE('_JLIST_BACKEND_EDIT_LANG_CSS_FILE_WRITABLE_NO','<font color="#990000">YAZILAMAZ!</font></big>');
DEFINE('_JLIST_BACKEND_EDIT_LANG_CSS_FILE_WRITABLE_INFO','The file must be writable to save new settings. May be you have to change the rights on the file to CHMOD 0777.');

// BACKEND OTHERS
DEFINE('_JLIST_FRONTEND_NOCAT','Henüz kategori oluşuturulmadı!');
DEFINE('_JLIST_FRONTEND_NOFILES','Bu kategoriye henüz dosya eklenmemiş!');

// Information text
DEFINE('_JLIST_BACKEND_INFO_TEXT_TITLE','jDownloads bilgilendirme');
DEFINE('_JLIST_BACKEND_INFO_LICENSE_TITLE','<b>Lisans bilgileri:</b>');
DEFINE('_JLIST_BACKEND_INFO_LICENSE_TEXT','Bu Bileşen <a href="http://www.gnu.de/documents/gpl.de.html" target="_blank">GNU/GPL </a> alt?nda lisanslanmıştır.<br />jDownloads u kurdugunuz an lisans sözlesmesini kabul etmiş bulunuyorşunuz. Kabul etmediginiz taktirde Bileşeni kaldirmak ile yükümlüsünüz. <br /><br /><b>Di?er Notlar:</b><br /><b>Kesinlikle</b> bağlantı yolunu <b>anasayfadan kaldirmaniz yasaktir</b>! bağlantı yolu ayrıca gözükmeli. Eğer bağlantı yolunu yinede değiştirmek istiyorsan?z lütfen iletisime geciniz: <a href="mailto:info@joomlaaddons.de">info@joomlaaddons.de</a>.<br /><br />Additionally, this component is provided "as is" without any express or implied warranty! Liability is dışclaimed for possible data loss, etc. Component use is under the sole installing person\'s responsibility.<br /><b>Thank you very much at all users, who helped me in the development.');

DEFINE('_JLIST_BACKEND_INFO_LINK_BACK','Geri');

///////////////////////////////////////////////////////////////////////////////
// Template defaults for _jdownloads_templates - Please do not change this !!!
// Vorgabewerte f&uuml;r Layouttabelle - hier bitte KEINE &Auml;nderungen vornehmen !!!
///////////////////////////////////////////////////////////////////////////////

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_DEFAULT','{cat_title_begin}<div style="background-color:#EFEFEF; padding:6px;">{şubcats_title_text}</div>{cat_title_end}
{cat_info_begin}<table width="100%" style="border-bottom: 1px solid #cccccc;">
<tr valign="top" border="0px">
<td width="75%" style="padding:5px;">{cat_pic}<b>{cat_title}</b></td>
<td width="15%" style="padding:5px; text-align:right">{şum_şubcats}</td>
<td width="10%" style="padding:5px; text-align:right">{şum_files_cat}</td>
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

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_şuMMARY_DEFAULT','<div class="jd_cat_title" style="padding:5px; font-size:10px; font-weight:normal;">{şummary_pic} {title_text}</div>
<div valign="top" style="padding:5px;">
{download_liste}<br />
{license_note}
</div><br />
<div style="text-align:center">{download_link}</div>
<br /><div style="text-align:center">{external_download_info}</div>'); // changed in 1.4 beta (2)

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_MAIL_DEFAULT','İndirme notu!<br />
<br />
aşağıdaki dosyalar İndirme için talep ediliyor:<br />
{file_list}
<br /><br />
Tarih - zaman: {date_time}<br />
adı: {user_name}<br />
Kullanıcı grubu: {user_group}<br />
IP adresi: {ip_address}<br /><br />
Bu e-posta otomatik olarak oluşturuldu!');

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
DEFINE('_JLIST_SETTINGS_LICENSE1_URL','http://www.gnu.de/documents/gpl.de.html');

DEFINE('_JLIST_SETTINGS_LICENSE2_TITLE','GNU/LGPL');
DEFINE('_JLIST_SETTINGS_LICENSE2_TEXT','');
DEFINE('_JLIST_SETTINGS_LICENSE2_URL','http://www.gnu.de/documents/lgpl.de.html');

DEFINE('_JLIST_SETTINGS_LICENSE3_TITLE','Donationware');
DEFINE('_JLIST_SETTINGS_LICENSE3_TEXT','İleriki dönemde geliştirmeler için bağış yapmanız gerekli.<br />Source: Wikipedia');
DEFINE('_JLIST_SETTINGS_LICENSE3_URL','');

DEFINE('_JLIST_SETTINGS_LICENSE4_TITLE','Linkware');
DEFINE('_JLIST_SETTINGS_LICENSE4_TEXT','yazılımın kullanımı sırasında Yazarın web sayfasına girmelisiniz.');
DEFINE('_JLIST_SETTINGS_LICENSE4_URL','');

DEFINE('_JLIST_SETTINGS_LICENSE5_TITLE','Charityware');
DEFINE('_JLIST_SETTINGS_LICENSE5_TEXT','İsteğe bağlı olarak bağış yapabilirsiniz.');
DEFINE('_JLIST_SETTINGS_LICENSE5_URL','');

DEFINE('_JLIST_SETTINGS_LICENSE6_TITLE','Ticari lisans');
DEFINE('_JLIST_SETTINGS_LICENSE6_TEXT','');
DEFINE('_JLIST_SETTINGS_LICENSE6_URL','');

DEFINE('_JLIST_SETTINGS_LICENSE7_TITLE','Creative Commons');
DEFINE('_JLIST_SETTINGS_LICENSE7_TEXT','');
DEFINE('_JLIST_SETTINGS_LICENSE7_URL','http://de.wikipedia.org/wiki/Creative_Commons#Standard-Lizenzen');

///////////////////////////////////////////////////////////////////////////////
// Install default config values - Please do not delete this !!!
// Installations Vorgabewerte f&uuml;r Konfigurationen - NICHT l&ouml;schen !!!
///////////////////////////////////////////////////////////////////////////////
DEFINE('_JLIST_SETTINGS_INSTALL_1','<b>Tüm dosyaları seç:</b>');
DEFINE('_JLIST_SETTINGS_INSTALL_2','');
DEFINE('_JLIST_SETTINGS_INSTALL_3','İndirmeler hakkında bilgi');
DEFINE('_JLIST_SETTINGS_INSTALL_4','webmaster@siteniz.com');
DEFINE('_JLIST_SETTINGS_INSTALL_5','bilgi@siteniz.com');


// ****************************************************************************
//		NEW IN VERSION 1.2 beta
// ****************************************************************************

// JAVASCRIPT (jdownloads.js) MESSAGES <<< Umlaute NICHT umwandeln !! >>>
DEFINE('_JLIST_JAVASCRIPT_TEXT_2','Bu klasörde şu ana kadar eklenmiş bir dosya yok.\\n');
DEFINE('_JLIST_JAVASCRIPT_TEXT_1','Lütfen yükleme için en az bir dosya seçin.');
DEFINE('_JLIST_FRONTEND_SEARCH_REşuLT_TEXT_TO_SHORT','Arama öğesi çok kısa, lütfen en az 3 karakter içeren aramalar yapın!'); 
DEFINE('_JLIST_FRONTEND_SEARCH_REşuLT_NO_OPTION','En az bir seçenek seçmelisiniz!'); 
// end javascript messages


DEFINE('_JLIST_INSTALL_1_2','Bilgiler halihazırda veritabanında bulunuyor!');
DEFINE('_JLIST_INSTALL_2_2','Bilgiler yenilendi !');
DEFINE('_JLIST_INSTALL_17','JoomFish kurulumu bulundu! jDownloads JoomFish tanımlamaları eklendi:');
//------------------------------------------
DEFINE('_JLIST_INSTALL_18','jDownloads JoomFish tanımlamaları şuraya kopyalandı:');
DEFINE('_JLIST_INSTALL_19','Eğer bu tanımlamaları JoomFish ile kullanmak isterseniz daha sonra buraya kopyalayın:');

DEFINE('_JLIST_FRONTEND_HOME_LINKTEXT','Genel görünüm');
DEFINE('_JLIST_FRONTEND_şuBTITLE_OVER_CATLIST','Genel görünüm');
DEFINE('_JLIST_FRONTEND_şuBTITLE_OVER_ONE_CAT','Kategori');
DEFINE('_JLIST_FRONTEND_şuBTITLE_OVER_DETAIL','İndirme detayları');

// PAGENAVIGATION FRONTEND
DEFINE('_JLIST_FRONTEND_HEADER_PAGENAVI_PAGE_TEXT','Sayfa:');
DEFINE('_JLIST_FRONTEND_HEADER_PAGENAVI_TO_TEXT','toplamda');

DEFINE('_JLIST_BACKEND_FILESEDIT_PRICE','Fiyat');
DEFINE('_JLIST_BACKEND_FILESEDIT_PRICE_DESC','Fiyat ve kur belirleyin.');

DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_4','Restore Log');

//FRONTEND UPLOAD
DEFINE('_JLIST_FRONTEND_UPLOAD_ACCESS_ONLY_REGGED','Dosya gönderebilmeniz için üye olmanız gerekmektedir. Eğer üye olduysanız lütfen giriş yapın. ');
DEFINE('_JLIST_FRONTEND_UPLOAD_ACCESS_ONLY_SPECIALS','Gönderi yapmaya yetkiniz bulunmamaktadır.');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_NO_CATS_EXIST','Hata : Kategori oluşturulmadan gönderi yapılamaz.');    
DEFINE('_JLIST_FRONTEND_UPLOAD_LINKTEXT','Dosya gönder');
DEFINE('_JLIST_FRONTEND_UPLOAD_PAGE_TITLE','Dosya gönder');
DEFINE('_JLIST_FRONTEND_UPLOAD_FILENAME','Dosya seç:');
DEFINE('_JLIST_FRONTEND_UPLOAD_FILENAME_BUTTON_TEXT_SEND','Dosya gönder');
DEFINE('_JLIST_FRONTEND_UPLOAD_FILENAME_BUTTON_TEXT_CLEAR','Bölümleri temizle');
DEFINE('_JLIST_FRONTEND_UPLOAD_ALLOWED_FILETYPE','İzin verilen uzantılar');
DEFINE('_JLIST_FRONTEND_UPLOAD_ALLOWED_MAX_SIZE','En yüksek dosya boyutu');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_NO_VALUE','Hata: tüm bölümleri doldurmadınız!<br />Lütfen doldurun :-)');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_FILETYPE','Hata: seçtiğiniz dosya türü desteklenmemektedir!<br />Lütfen İzin verilen dosya türlerini seçiniz.');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_FILESIZE','Hata: dosya boyutu İzin verilenden daha büyük!');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_MOVE_FILE','Hata: dosyayı transfer ederken bir hata oluştu!');
DEFINE('_JLIST_FRONTEND_UPLOAD_OK','Dosya başarıyla sunucuya taşındı!<br />Onaylanması bekleniyor.');

// FRONTEND UPLOAD FIELD TITLE
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_NAME','Adınız:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_MAIL','E-Posta adresiniz:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_TITLE_FILE','İndirme başlığı:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_PRICE','Fiyatı:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_DESC_FILE','Kısa tanımlama:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_DESC_FILE_LONG','Uzun tanımlama:');    
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_AUTHOR','Yazar adı:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_AUTHOR_URL','Yazarın web sitesi:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_LIZENZ','Lisans:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_VERSION','Versiyon:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_LISTBOXES','Seçiniz:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_CATEGORY','Kategori:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_LANGUAGE','Dil:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_SYSTEM','Sistem:');
DEFINE('_JLIST_FRONTEND_UPLOAD_SYMBOL_TEXT','Zorunlu alan');

//FRONTEND SEARCH
DEFINE('_JLIST_FRONTEND_SEARCH_LINKTEXT','dosyaları ara');

// AUTOCHECK DOWNLOADS
DEFINE('_JLIST_BACKEND_AUTOCHECK_NEW_CATS','Yeni klasörler bulundu ve yeni kategoriler olarak eklendi!!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_MISSING_CATS','Kategori klasörleri bulunamadı ve bu yüzden ilgili kategoriler kaldırılacak!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NO_NEW_CATS','Yeni klasör bulunamadı!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NO_MISSING_CATS','Tüm Yayınlanmış kategori klasörleri mevcut!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_LOG_TITLE','Last internal messages (executed actions):');
DEFINE('_JLIST_BACKEND_AUTOCHECK_LOG_TAB_TITLE','Last internal messages (actions) during Download directories monitoring'); 
DEFINE('_JLIST_BACKEND_AUTOCHECK_REFRESH_MESSAGE','Düzenlemeleri bulmak için sayfayı yenilemelisiniz!'); 

DEFINE('_JLIST_BACKEND_RESTORE_LOG_TAB_TITLE','Son yedek geri almanın sonucu'); 

DEFINE('_JLIST_BACKEND_PANEL_STATUS_DESC_OFFLINE','Bakım modu açıldı! Normal ziyaretçiler için İndirme alanı hala açık! "Yazar" grubundaki Kullanıcılar şu anda bu bölümü kullanamazlar.');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_DOWNLOADS_HEADER','İndirme durumlari');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_DOWNLOADS_OFF_DESC','The automatic monitoring of the Download directories is deactivated!');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_VERSION_HEADER','JDownloads şu anki versiyonu');

DEFINE('_JLIST_BACKEND_SETTINGS_DEL_TEMPFILE_TIME','Dakika bazında geçici zip dosyalarının silinme zamanı');
DEFINE('_JLIST_BACKEND_SETTINGS_DEL_TEMPFILE_TIME_DESC','Indicate a value in minutes, after which the temporary created Zip files for multiple downloads are to be deleted by the server. If you offer large files, then you should set a higher value. Default value: 20 (minutes).');

DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_FRONTEND_HEAD_UPLOAD','Kullanıcı Upload ayarları');
DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIR_RENAME_ERROR','Hata : İndirme klasörünün adı değiştirilemedi!');
DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIR_RENAME_OK',' - İndirme klasörünün adı başarıyla değiştirildi!');

DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO','İndirme klasörü gösterimi? ');
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_DESC','If this option is selected, all directories are checked for modifications and the data base is automatically updated . Therefore directories and files loaded by ftp on the server are added automatically as new data records in the category and Download tables. If categories or Download files are not any longer found, then the related entries are set as : <b>Not published</b >.<b>Standard setting: YES.</b>');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_USE_CHECKBOX_INFO','<b>Note:</b> Check box options for Download announcement are defined in the layout administration part for files layout!');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_USE_SYMBOLE_INFO','<b>Note:</b> Mini symbols dışplay options are defined in the layout administration part for files layouts!');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FILES_PER_SIDE','Sayfa başına gösterilecek girdi sayısı');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FILES_PER_SIDE_DESC','Ön tarafta Kullanıcıların sayfa başına kaç kategori/girdi görebileceklerini buradan belirleyin.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_HEADER_TITLE','Header olarak gösterilecek Başlık');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_HEADER_DESC','Define here the title that will be dışplayed by the front-end as component title, e.g.. "Downloads".');

// FRONTEND UPLOAD CONFIG
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACTIVE','Ön taraftan upload ayarları:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACTIVE_DESC','If activated, the user groups defined below can şubmit files with a
form.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_PERMISSIONS','Kim upload yapabilir:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_PERMISSIONS_DESC','Here you define which group of users may şubmit files. The "Special" setting allows members with status >= "author" to access the Upload form.');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACCESS_ALL','Tüm');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACCESS_REGGED','Kayıtlı');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACCESS_ADMINS','Özel');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILETYPES','İzin verilen dosya türleri:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILETYPES_DESC','Define here the individual file extensions that may be şubmitted with the Upload form. Between each value a comma (,) must be inserted.');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILESIZE','KB bazında maksimum boyut:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILESIZE_DESC','Define here the max. size allowed for şubmitted files in kilobytes (1024 Kb = 1 Mb). Pre-set value: 2048.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FORM_TEXT','yazıdan upload et:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FORM_TEXT_DESC','Define here the layout (contents and format) of the Upload form (before or below form text). The placeholder: {form} will be replaced by the actual form on front-end output. The placeholder symbol can not be deleted!');

// Platzhalter {form} NICHT ÄNDERN ODER LÖSCHEN !!!
// DO NOT DELETE, EDIT OR TRANSLATE: {form} !!! 

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FORM_TEXT_LAYOUT','Bu form servera dosya yüklemenizi sağlar. adınız ve e-posta adresinizi 3. kişiler göremez.<br />{form}<br />');

DEFINE('_JLIST_BACKEND_TEMPLIST_DEL_QUEST','Düzen(ler)i sil?');
DEFINE('_JLIST_BACKEND_LICLIST_DEL_QUEST','Lisans(lar)i sil?');

DEFINE('_JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD_STATUS_DESC','Here you see the configuration status of the  ROOT Upload directory. If it is not writable, please chech the access rights with a FTP program. The rights must be on CHMOD 0777.');

DEFINE('_JLIST_BACKEND_FILESEDIT_HITS','Geçmis İndirmelerin sayısı');
DEFINE('_JLIST_BACKEND_FILESEDIT_HITS_DESC','Burada İndirme sayacı değiştirilebilir veya sıfırlanabilir');

DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_CAT_DESC','You must assign the Download to a category. Select from the list the appropriate category. If another category is later selected, then the Download file is automatically moved  into the directory of the new category.');

DEFINE('_JLIST_BACKEND_FILESEDIT_DESCRIPTION_KURZ','Kısa tanımlama');
DEFINE('_JLIST_BACKEND_FILESEDIT_DESCRIPTION_LONG','Uzun tanımlama');
DEFINE('_JLIST_BACKEND_FILESEDIT_EDITOR_INFO','In the configuration form it can be set whether the activated WYSIWYG editor or a simple text box will be used for edition.');
DEFINE('_JLIST_BACKEND_FILESEDIT_SENT_IN_FROM_STATUS','Durum: ');
DEFINE('_JLIST_BACKEND_FILESEDIT_SENT_IN_FROM_EMAIL','E-Posta adresi: ');
DEFINE('_JLIST_BACKEND_FILESEDIT_ERROR_TITLE','Hata : İndirmenin başlığı olmalı!');
DEFINE('_JLIST_BACKEND_FILESEDIT_CATLIST_ERROR','Hata : hiçbir kategori atanmadı!');
DEFINE('_JLIST_BACKEND_FILESEDIT_SAVE_MOVEFILE_ERROR',' - Hata : İndirme dosyası taşınmadı!');
DEFINE('_JLIST_BACKEND_FILESEDIT_SAVE_MOVEFILE_OK',' - İndirme dosyası taşındı!');

DEFINE('_JLIST_BE_NO_PUBL_FILES','Kategori tahsisi yapılmamış İndirmeler yayınlanamaz!');
DEFINE('_JLIST_BACKEND_FILESLIST_DEL_QUEST','İndirmeleri sil?');
DEFINE('_JLIST_BACKEND_FILESLIST_DESCRIPTION_SHORT','Kısa tanımlama');
DEFINE('_JLIST_BACKEND_FILESLIST_PIC','Sembol');
DEFINE('_JLIST_BACKEND_FILESLIST_DEL_FILES_OPTION','<font color=#990000>Delete associated download file on download data delete action:</font>');

DEFINE('_JLIST_BACKEND_FILESLIST_DEL_FILES_OPTION_TOOLTIP','If YES, download data is not only deleted but also the associated file by the server! If the file is not deleted and the monitoring of the Download directories is activated, then the file is automatically considered as new stored Download !<br /><b>Recommended setting: YES</b >.');
DEFINE('_JLIST_BACKEND_FILESEDIT_DEL_FILES_OK',' - Belirlenen dosyalar silindi.');
DEFINE('_JLIST_BACKEND_FILESEDIT_DEL_FILES_ERROR',' - Associated file(s) not deleted since missing.');
DEFINE('_JLIST_BACKEND_FILESLIST_FILE_ID','ID');

DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_CAT_DEL_AFTER_COPY','Eski kategori klasörünün silinmesi sırasında bir sorun oluştu');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_TITLE','Kategori başlığı<b><font color=red>*</font></b>');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_TITLE_DESC','Category identification. For each category a directory is created with a name based on the title but without special characters? Exceptions: <b>" - _ . , " </b>and space character.');
DEFINE('_JLIST_BACKEND_CATSEDIT_ROOT_CAT_LISTBOX','Ana kategori');
DEFINE('_JLIST_BACKEND_CATSEDIT_ROOT_CAT_LISTBOX_NEW','Yeni ana kategori');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_TITLE','Kategori atama');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_TITLE_NEW','/ İçerisinde yeni kategori oluşturuldu <b><font color=red>*</font></b>');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_DESC_NEW','If a new main category is to be created, then select "Main Category". If the new category is to serve as şubcategory of an existing category, then select the şuperordinate existing category. A new category is then created below. The hierarchical allocation can still be modified  at a later point in time.');

DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_DESC','If you want to move a category, then select the şubordinate category where you want to move below the current category. If a şubcategory is to serve in the future as main category, then select "Main Category" option.<br /><br /><b>Advice:</b> 
On save operation, the current directory is shifted automatically on the server. If the shifted category contains
şubcategries, they are also shifted. In order to be safe with the internal operations, ALL other categories currently under modifications are closed at category edit time!');
DEFINE('_JLIST_BACKEND_CATSEDIT_SAVE','Kategori kaydedildi');
DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_TITLE_CHARS_NOT_ALLOWED','Hata : başlıkta özel yasaklanmış karakterler bulundu!');
DEFINE('_JLIST_BACKEND_CATSLIST_DEL_QUEST','Kategori sil?');
DEFINE('_JLIST_BACKEND_CATSLIST_CATID','ID');
DEFINE('_JLIST_BACKEND_CATSLIST_PATH','Klasör');

// BACKEND CATS DELETE
DEFINE('_JLIST_BE_NO_DEL_şuBCATS_EXISTS','Alt kategoriler olduğundan dolayi kategori silinemedi!');
DEFINE('_JLIST_BE_NO_DEL_FILES_EXISTS','İndirme dosyaları içerdiginden kategori silinemedi!');
DEFINE('_JLIST_BE_DEL_CATS_DIRS_OK',' - Klasör başarıyla silindi!');
DEFINE('_JLIST_BE_DEL_CATS_DIRS_ERROR',' - Klasör silinirken hata oluştu!');

DEFINE('_JLIST_BACKEND_NO_SELECT_ACTION','Please select first a line entry.!');

DEFINE('_JLIST_BE_SETTINGS_FILES_PER_SIDE_BE_TITLE','Liste görünümünde kaç tane görünecek');
DEFINE('_JLIST_BE_SETTINGS_FILES_PER_SIDE_BE_DESC','Here you can define how many lines are to be dışplayed in the list layout by the Backend.');

DEFINE('_JLIST_UPLOAD_MAX_FILESIZE_INFO_TITLE','Php.ini ayar dosyasında maksimum boyut Tanımlanmıştır:');

DEFINE('_JLIST_BACKEND_TEMPLATE_ACTIVE_ERROR','Aktivasyon için sadece bir düzen seçilebilir!');
DEFINE('_JLIST_AUTO_FILE_CHECK_IMPORT_BY','Otomatik içe aktar');          
DEFINE('_JLIST_AUTO_FILE_CHECK_ADDED',   'İndirme eklendi    ');
DEFINE('_JLIST_AUTO_FILE_CHECK_dışABLED','İndirme bulunamadı      ');
DEFINE('_JLIST_AUTO_CAT_CHECK_ADDED',    'Kategori eklendi');
DEFINE('_JLIST_AUTO_CAT_CHECK_dışABLED', 'Kategori bulunamadı  ');

// MESSAGES AFTER CHECK FILES AND DIRS WHEN UPDATED FROM 1.1 alpha
DEFINE('_JLIST_CHECK_CATS_TITEL1','You have updated your old jDownloads version to the Version 1.2');     
DEFINE('_JLIST_CHECK_CATS_TITEL2','As a consequence, all categories and Downloads already created must be now
transferred into the new category structure!');          

DEFINE('_JLIST_CHECK_FINISH','İslem durduruldu!');
DEFINE('_JLIST_CHECK_CATS_CREATE','Kategoriler-klasörler oluşturuldu!');
DEFINE('_JLIST_CHECK_FILES_MOVE','İndirme dosyaları değiştirildi!');
DEFINE('_JLIST_CHECK_FILES_NOT_FOUND','İndirme dosyaları bulunamadı!');
DEFINE('_JLIST_CHECK_FILES_NOT_MOVED','Belirtilen kategori klasöründe İndirme dosyaları değiştirilemedi!');
DEFINE('_JLIST_CHECK_CATS_NOT_FOUND','Kategori klasörleri oluşturulamadı!');

// MESSAGES AFTER RESTORE BACKUPFILE
DEFINE('_JLIST_AFTER_RESTORE_TITLE_1','Restorasyon işlemi yürürlükte:');
DEFINE('_JLIST_AFTER_RESTORE_1','Kayıtlar değiştirildi!');
DEFINE('_JLIST_AFTER_RESTORE_TITLE_2','Veritabanı İçerikleri kontrolü başladı:');
DEFINE('_JLIST_AFTER_RESTORE_3','Yedek, daha eski bir JDownloads versiyonu ile oluşturulmuş!');
DEFINE('_JLIST_AFTER_RESTORE_4','Kategori klasörleri ve İndirmeler kontrol ediliyor:');
DEFINE('_JLIST_AFTER_RESTORE_TITLE_3','detaylı sonuçlar:');

DEFINE('_JLIST_AUTOCHECK_DIR_NOT_EXIST','Hata: Upload root klasörü bulunamadı!');
DEFINE('_JLIST_AUTOCHECK_DIR_NOT_EXIST_2','FTP ile root klasörde /downloads ve /downloads/tempzipfiles isminde iki klasör oluşturun ve CHMOD ayarlarını 0777 yapın - aksi taktirde JDownloads çalışmayacaktır!');
DEFINE('_JLIST_FRONTEND_HEADER_CATLIST_TITLE','Kategori seçin');
DEFINE('_JLIST_FRONTEND_HEADER_şuMMARY_TITLE','Özet');
DEFINE('_JLIST_FRONTEND_HEADER_FINISH_TITLE','İndir');

// FRONTEND SEARCH
DEFINE('_JLIST_FRONTEND_SEARCH_TITLE','Dosyalarda ara');
DEFINE('_JLIST_FRONTEND_SEARCH_TEXT_TITLE','şunu ara :');
DEFINE('_JLIST_FRONTEND_SEARCH_IN_TITLE','Başlıklarda ara');
DEFINE('_JLIST_FRONTEND_SEARCH_IN_DESC','tanımlamalarda ara');
DEFINE('_JLIST_FRONTEND_SEARCH_INFO_TEXT','A maximum of 20 files is dışplayed as search reşult.');  
DEFINE('_JLIST_FRONTEND_SEARCH_BUTTON_TEXT','Ara');
DEFINE('_JLIST_FRONTEND_SEARCH_REşuLT_TITLE','Arama sonuçları');
DEFINE('_JLIST_FRONTEND_SEARCH_REşuLT_şuM_FILES','bulundu');
DEFINE('_JLIST_FRONTEND_SEARCH_REşuLT_NO_şuM_FILES','Arama sonucunda dosya bulunamadı.');
DEFINE('_JLIST_FRONTEND_SEARCH_REşuLT_SEARCH_TEXT','Arama öğesi');

// NEW LAYOUT FOR VIEW DOWNLOAD-DETAILS
DEFINE('_JLIST_BACKEND_TEMP_TYP5','İndirme detayları');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_DETAILS','İndirme detayları');
DEFINE('_JLIST_BACKEND_TEMPLIST_DETAILSTITLE_HEAD','İndirme detayları düzeni');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS','Düzen : İndirme detayları');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_DESC','This is the layout of the Downloads <b>Details page</b> in the 
Front-end.<br /><br />Do not remove the placeholder variable <font color=red>{url_download}</font>!<br /><br />Available variables (placeholders):<br />{file_title} {thumbnail} {pic_is_new} {pic_is_hot} {pic_is_updated} {url_download} {mirror_1} {mirror_2} {description_long} {details_block_title} {license_title} {license_text} {price_title} {price_value} {language_title} {language_text} {filesize_title} {filesize_value} {system_title} {system_text} {author_title} {author_text} {author_url_title} {author_url_text} {created_date_title} {created_date_value} {hits_title} {hits_value} {created_by_title} {created_by_value} {modified_by_title} {modified_by_value} {modified_date_title} {modified_date_value}.'); // changed in 1.4 beta (2)
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_INFO_TITLE','<b>İndirme detayları düzeni hakkında bilgi:</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_INFO_TEXT','<p>Graphical example of this page in the frontend. The dark red border indicates the area you can change the dışplay from here.</p>');

// FRONTEND DOWNLOAD DETAILSITE
DEFINE('_JLIST_FE_DETAILS_PATHWAY_TEXT','dosyaların yeri');
DEFINE('_JLIST_FE_DETAILS_LINK_TEXT_TO_DETAILS','>> Detaylar');
DEFINE('_JLIST_FE_DETAILS_LICENSE_TITLE','Lisans');
DEFINE('_JLIST_FE_DETAILS_PRICE_TITLE','Ücret');
DEFINE('_JLIST_FE_DETAILS_LANGUAGE_TITLE','Dil');
DEFINE('_JLIST_FE_DETAILS_FILESIZE_TITLE','Boyut');
DEFINE('_JLIST_FE_DETAILS_SYSTEM_TITLE','Sistem');
DEFINE('_JLIST_FE_DETAILS_AUTHOR_TITLE','Yazar');
DEFINE('_JLIST_FE_DETAILS_AUTHOR_URL_TITLE','Websitesi');
DEFINE('_JLIST_FE_DETAILS_CREATED_DATE_TITLE','Tarih');
DEFINE('_JLIST_FE_DETAILS_HITS_TITLE','İndirmeler');

// LAYOUT DOWNLOAD-DETAILS
///////////////////////////////////////////////////////////////////////////////
// Template defaults for _jdownloads_templates - Please do not change this and NO translation here!!!
// Vorgabewerte f&uuml;r Layouttabelle - hier bitte KEINE &Auml;nderungen oder Übersetzungen hier vornehmen !!!
///////////////////////////////////////////////////////////////////////////////
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_DEFAULT_NAME','Standart 1.4');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT_NAME','Standart 1.4');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_DEFAULT_NAME','Standart 1.4 - Tüm Bilgi');
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
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT_NEW_SIMPLE_1_NAME','Checkboxlar ile standart düzen');
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
DEFINE('_JLIST_BACKEND_TEMPEDIT_TITLE_NOT_ALLOWED_TO_CHANGE_DESK','varsayılan düzenlerden isimleri değistiremezsiniz!'); 
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT_NEW_SIMPLE_2_NAME','Checkboxlar olmadan standart düzen');
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
DEFINE('_JLIST_BACKEND_TEMPEDIT_NOTE_TITLE','Düzen notları');
DEFINE('_JLIST_BACKEND_TEMPEDIT_NOTE_DESC','Düzen hakkında ek bilgiler.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_CHECKBOX_TITLE','Düzende checkboxlar var mı?');
DEFINE('_JLIST_BACKEND_TEMPEDIT_CHECKBOX_DESC','If yes, the CHECK box headıng line and the Continue button are dışplayed on output. Additionally the placeholder symbol <b>{checkbox_list}</b> must be
inserted  in the layout. If not, the placehoder symbol <b>{url_download}</b>must instead be inserted in the layout.'); 
DEFINE('_JLIST_BACKEND_TEMPEDIT_SYMBOLE_TITLE','Mini sembol ekle?');
DEFINE('_JLIST_BACKEND_TEMPEDIT_SYMBOLE_DESC','If yes, the designated mini-symbol will be inserted. The symbol sizes can be adjusted in the configuration settings.');

DEFINE('_JLIST_FE_YES','Evet');
DEFINE('_JLIST_FE_NO','Hayır');

DEFINE('_JLIST_BACKEND_EDIT_PUBLISHED','Yayınlandı');
DEFINE('_JLIST_BACKEND_FILESEDIT_MODIFIED_DATE','Son düzenleme');
DEFINE('_JLIST_BACKEND_FILESEDIT_MODIFIED_BY','tarafından');
DEFINE('_JLIST_BACKEND_FILESEDIT_CREATED_BY','oluşturan');

DEFINE('_JLIST_BACKEND_FILESEDIT_INFO_FIELDS_DESC','The boxes on the left, provide file informations: name of publisher, last editor, last edit time');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CATLISTBOX_ACTIVE','Kategori liste kutuşunu header pozisyonunda göster?');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CATLISTBOX_DESC','If YES, a listbox with all published categories available for the User according to User access rights are dışplayed on the right of the header. From this list box, you can go directly to the  wanted Category/şubcategory.');

// SAMPLE DATA 
DEFINE('_JLIST_SAMPLE_DATA_CAT_NAME_ROOT','Kategori örneği');
DEFINE('_JLIST_SAMPLE_DATA_CAT_NAME_şuB','Alt kategori örneği');
DEFINE('_JLIST_SAMPLE_DATA_CAT_NAME_TEXT','Bu bir kategori örneğidir. Bu tanımı istediğiniz zaman kaldirabilirsiniz.');
DEFINE('_JLIST_SAMPLE_DATA_FILE_NAME','İndirme örneği');
DEFINE('_JLIST_SAMPLE_DATA_FILE_NAME_TEXT','Bu bir İndirme örneğidir. Bu tanımı istediğiniz zaman kaldirabilirsiniz.');
DEFINE('_JLIST_SAMPLE_DATA_CREATE_ERROR','Örnek veri oluşturulurken hata oluştu! JDownloads ana menüsünden ayarları kontrol edin.');
DEFINE('_JLIST_SAMPLE_DATA_CREATE_OK','Örnek veri başarıyla kayededildi!');
DEFINE('_JLIST_SAMPLE_DATA_BE_OPTION_LINK_TEXT','Örnek veriyi yükle');
DEFINE('_JLIST_SAMPLE_DATA_EXISTS','Örnek veri zaten yüklü!');
DEFINE('_JLIST_SAMPLE_DATA_BACK_TO_PANEL','Kontrol paneline dön');


DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_HEAD_INFO2','<br /><b><u>Layouts explanation</u></b><br /><b>Categories: </b>Defines the layout of the categories as well as the download items for the use of the CHECK boxes above and below the Download list.<br /><b>Files: </b>Defines the layout of the Download list dışplayed below the categories (see hereabove).<br /><b>Download-Details: </b>Defines the layout of the Download detailed view.<br /><b>şummary: </b>Defines the layout of the download şummary page (from which you actually start dowloadıng) with the list of selected files to be downloaded.<br /><b>E-Mails: </b>Defines the layout of the E-Mail received by Admin after each download.');

// ANTI_LEECH_CONFIG
DEFINE('_JLIST_BACKEND_SETTINGS_ANTILEECH_TITLE','İndirme klasörünü koru?');
DEFINE('_JLIST_BACKEND_SETTINGS_ANTILEECH_DESK','Eğer evet ise, ana dİzindeki htaccess.txt dosyası olduğu gibi kopyalanacak ve .htaccess olarak adı değiştirilecek. dışarıdan downloadlar kapatılacakdır. <b>Önerilen: Evet!</b>');
DEFINE('_JLIST_ACTIVE_ANTILEECH_ERROR',' - htaccess.txt dosyası kopyalanırken hata oluştu!');
DEFINE('_JLIST_ACTIVE_ANTILEECH_OK',' - İndirme koruması aktifleştirildi!');
DEFINE('_JLIST_ACTIVE_ANTILEECH_OFF_ERROR',' - .htaccess dosyası silinirken hata oluştu!');
DEFINE('_JLIST_ACTIVE_ANTILEECH_OFF_OK',' - İndirme koruması artik aktif değil!');

DEFINE('_JLIST_FRONTEND_ANTILEECH_MESSAGE','İndirmelerde yetkisiz hareket!');
DEFINE('_JLIST_FRONTEND_FILE_NOT_FOUND_MESSAGE','Aradığınız dosya bulunamadı!<br /><br />Lütfen Admini uyarın!');

DEFINE('_JLIST_FRONTEND_şuMMARY_ZIP_FILESIZE','Paketin dosya büyüklüğü');
DEFINE('_JLIST_FRONTEND_NEXT_SITE_BUTTON','&nbsp;>>&nbsp;');
DEFINE('_JLIST_FRONTEND_PREV_SITE_BUTTON','&nbsp;<<&nbsp;');

DEFINE('_JLIST_FRONTEND_şuBHEADER_NUMBER_OF_CATS_TITLE','Kategori sayısı');
DEFINE('_JLIST_FRONTEND_şuBHEADER_NUMBER_OF_şuBCATS_TITLE','Alt kategori sayısı');
DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_CATLIST','Lütfen bir kategori seçin ya da >Ana Kategori<');

// NEW OPTION FOR DIREKT DOWNLOAD LINK
DEFINE('_JLIST_BACKEND_SETTINGS_DIRECT_DOWNLOAD_ACTIVE_TITLE','Direkt İndirmeyi aktifleştir?');
DEFINE('_JLIST_BACKEND_SETTINGS_DIRECT_DOWNLOAD_ACTIVE_DESC','If YES: during using the placeholder <b>{url_download}</b> in the layout, the download immediately start, without view the site şummary.');

// NEW OPTION FOR HOT AND NEW İmages IN DOWNLOADS
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_TITLE','Hangi noktada bir İndirme dosyası "popüler" olacak?');
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_DESC','Kaç defa indirildikten sonra "Sıcak" ibaresi ekleneceğini belirtir.');
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_NEW_PIC_TITLE','sembolü için dosya adı');
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_NEW_PIC_DESC','Belirtilen dosya bu klasörde olmalı: <b>../components/com_jdownloads/images</b>.');
DEFINE('_JLIST_BACKEND_SETTINGS_NEW_TITLE','Bir İndirme ne kadar süre ile "yeni" ibaresini koruyacak?');
DEFINE('_JLIST_BACKEND_SETTINGS_NEW_DESC','Bu değer, yeni eklenmiş olan İndirmenin kaç gün boyunca "Yeni!" ibaresi alacağını gösterir.');
// NEW OPTION FOR DOWNLOAD PIC BUTTON IN DOWNLOAD DETAILS
DEFINE('_JLIST_BACKEND_SETTINGS_DETAILS_DOWNLOAD_BUTTON_TITLE','İndirme sembolünün dosya adı'); 
DEFINE('_JLIST_BACKEND_SETTINGS_DETAILS_DOWNLOAD_BUTTON_DESC','Belirtilen dosya bu klasörde olmalı <b>../components/com_jdownloads/images</b> and will be used on the download-detail-site as download-link.');

// NEW IN 1.2 beta 2
DEFINE('_JLIST_FRONTEND_UPLOAD_AUTO_PUBLISH','İndirmeleri otomatik yayınla:');
DEFINE('_JLIST_FRONTEND_UPLOAD_AUTO_PUBLISH_DESC','Evet ise, İndirme dosyası upload edildikten sonra kontrol edilmeden yayınlanır.');
//1.2 Kararli sürüm'de yeni
DEFINE('_JLIST_BACKEND_DIRSEDIT_CREATE_DIR_MESSAGE_ERROR','Hata: Klasör oluşturulamadı! Lütfen tüm JDownloads klasörleri için FTP\'den erişip CHMOD ayarlarının 0777 olduğunu kontrol ediniz!');

// NEW IN 1.3 stable

// FOR CREATES MAIN MENU IN INSTALL
DEFINE('_JLIST_BACKEND_CPANEL_MAIN','Kontrol paneline');
DEFINE('_JLIST_INSTALL_DEFAULT_DATE_FORMAT','%d.%m.%Y %H:%M:%S');

// NEW OPTION SORTORDER CATEGORIES
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SORTCATSORDER_TEXT','Kategori sıralaması');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SORTCATSORDER_DESC','Ön tarafta hangi kategorilerin sıralacağını seçin. Arkaplan için varsayılan "Standart" tır.');
DEFINE('_JLIST_BACKEND_SETTINGS_CATS_ORDER_1','Standart');
DEFINE('_JLIST_BACKEND_SETTINGS_CATS_ORDER_2','İsme göre yukarı');
DEFINE('_JLIST_BACKEND_SETTINGS_CATS_ORDER_3','İsme göre aşağı');

// NEW TAB TITLE FOR AUTODETECT
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_TAB_TITLE','Monitoring');
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_HEADER_TITLE','Monitoring of the download-folders');

// NEW OPTION AUTOPUBLISH NEW FOUNDED FILES
DEFINE('_JLIST_BACKEND_SETTINGS_DOWNLOADS_AUTOPUBLISH_TITLE','Automatically publish downloads?');
DEFINE('_JLIST_BACKEND_SETTINGS_DOWNLOADS_AUTOPUBLISH_DESC','If Yes, newly found files are published immediately. Preşumed, you have this option above activated.<br /><b>Default: No.</b>');

// NEW OPTION  FOR AUTODETECT ALL FILES
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_ALL_FILES_TITLE','Monitor all filetypes?');
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_ALL_FILES_DESC','If this option is activated, all filetypes are monitored!');

// NEW OPTION  FOR AUTODETECT ONLY THIS FILES
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_ONLY_THIS_FILES_TITLE','Monitor only the following filetypes:');
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_ONLY_THIS_FILES_DESC','If this option is activated, only the filetypes mentioned here are monitored! Values must be separated by commas (,).');

// NEW COPY DOWNLOADS FUNCTION
DEFINE('_JLIST_BACKEND_FILES_COPY_TITLE','İndirmeleri kopyala');
DEFINE('_JLIST_BACKEND_FILES_COPY_DESC','Hedef kategoriyi seçin.');
DEFINE('_JLIST_BACKEND_FILES_COPY_TEXT_1','Bu İndirmeler kopyalama için işaretlendi:');
DEFINE('_JLIST_BACKEND_FILES_COPY_TEXT_2','İpucu : Kopyalama için bir kendi kategorisini seçerseniz "Kopyası <i>İndirme-başlığı</i>" olarak görüntülenir.');
DEFINE('_JLIST_BACKEND_FILES_COPY_TEXT_3','Kopyalanan İndirmeleri yayınla:');
DEFINE('_JLIST_BACKEND_FILES_COPY_TEXT_4','şunu da kopyala :');
DEFINE('_JLIST_BACKEND_FILES_COPY_DOWNLOADS_TEXT','Kopyası');
DEFINE('_JLIST_BACKEND_FILES_COPY_SAVED','İndirmeler kopyalandı!');

// NEW OPTION EXTERN DOWNLOAD URL
DEFINE('_JLIST_BACKEND_FILE_EDIT_EXT_DOWNLOAD_TITLE','Dış link için İndirme dosyası başlığı');
DEFINE('_JLIST_BACKEND_FILE_EDIT_EXT_DOWNLOAD_INFO','For an external file link, you have to delete the local file at first.');
DEFINE('_JLIST_BACKEND_FILE_EDIT_EXT_DOWNLOAD_DESC','Alternatif olarak dışaridaki bir dosya için tam URL adresini burada belirtebilirsiniz.');

//NEW OPTION FOR JCOMMENTS INTEGRATION
DEFINE('_JLIST_BACKEND_SETTINGS_JCOMMENTS_TITLE','JComments için yorum fonksiyonları?');
DEFINE('_JLIST_BACKEND_SETTINGS_JCOMMENTS_DESC','Eveti seçerseniz ön sayfadaki <b>JComments</b> fonksiyonlarından JDownloads İçerisinde yararlanabilirsiniz.<br />JDownloads paketi <b>JComments</b> yazılimini içermemektedir. Bunu kendiniz yüklemelisiniz.');
DEFINE('_JLIST_BACKEND_SETTINGS_JCOMMENTS_EXISTS_DESC','Eveti seçerseniz İndirme detay sayfalarında JComments fonksiyonlarını görebilirsiniz.<br /><b>JComments yüklenmis!</b>');

// NEW TAB FOR FRONTEND UPLOAD CONFIG
DEFINE('_JLIST_BACKEND_SETTINGS_FE_UPLOAD_TAB_TITLE','Karşıya yüklemeler');
DEFINE('_JLIST_BACKEND_SETTINGS_FE_UPLOAD_TITLE_HEAD','Frontend upload formular configuration');

// NEW DOWNLOAD FIELDS FOR DOWNLOAD MIRRORS
DEFINE('_JLIST_BACKEND_FILESEDIT_MIRROR_URL_TITLE','Alternatif dış dosya linki:');
DEFINE('_JLIST_BACKEND_FILESEDIT_MIRROR_URL_DESC','Here you can set a <u>further</u> mirror server for the download.<br />In the activated Layouts for Files and/or Download-Details you have to fill in the placeholders  {mirror_1} {mirror_2}.');

//NEW TEXT FOR MIRRORS
DEFINE('_JLIST_FRONTEND_MIRROR_URL_TITLE_1','Mirror 1');
DEFINE('_JLIST_FRONTEND_MIRROR_URL_TITLE_2','Mirror 2');

//NEW FOR PLUGINS TAB
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_PLUGINS','Eklentiler');

//NEW FOR FILE PLUGIN
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_FILEPLUGIN_HEAD','İçerik eklentisi ayarları (mos_jdownloads_file)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(c) by Pelma for jDownloads');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_DEFAULTLAYOUT','varsayılan düzen:');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_DEFAULTLAYOUT_DESC','This layout is used to show the downloads in the content, as the plugin is <b>enabled</b> (see below).');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_NOT_INSTALLED','İçerik eklentisi mos_jdownloads_file ayrıca yüklenmelidir. <br /><b>Durum: İçerik eklentisi şu anda yüklü değil!</b><br />Burada bulabilirsiniz <a href="http://demo.joomlaaddons.de/index.php?option=com_jdownloads&Itemid=69&task=viewcategory&catid=9">www.JoomlaAddons.de</a>.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_ONLINEPART','çalıştırılabilir eklenti parametreleri');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINEPART','çalıştırılamaz eklenti parametreleri');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWNEW','Yeni! simgesini göster');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWNEW_DESC','İçeriklerde Yeni! simgesini göster veya gösterme.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWHOT','Sıcak! sembolünü göster');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWHOT_DESC','İçeriklerde Sıcak! simgesini göster veya gösterme.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_ENABLEPLUGIN','Eklentiyi çalıştırılabilir halde tut');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_ENABLEPLUGIN_DESC','Enable the plugin. This is not the same as the publish parameter in Joomla. When you dışable the plugin here, you can inform the visitor about this. (See parameters below)!');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWdışABLED','Eklenti çalıştırılamaz olduğunda mesaj göster');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWdışABLED_DESC','When you dışable the plugin, you can show a message in place of the download. See parameters below.<br \><b>No</b>: To show nothing.<br \><b>Default layout</b>: Show a message using the default layout (see above).<br \><b>Offline layout</b>: Show a message using the offline layout (see below).');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_DOWNLOADTITLE','Orijinal İndirme başlığıni göster');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_DOWNLOADTITLE_DESC','Yes: use the original downloadtitle (and its symbol) in your offline-message.  No: replace the original downloadtitle by the content of the field "Title replacement" below.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINETITLE','Başlık değiştirme');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINETITLE_DESC','Title to show when plugin dışabled (dépends on your selection above).');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINEDESC','Tanım değiştirme');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINEDESC_DESC','When the plugin is dışabled, this description will be shown in place of the original download description.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT','Çevirimdışı düzeni (eklenti kapatıldığında)');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT_DESC','Use this layout to show offline-message when plugin dışabled.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT_OPT1','Hayır');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT_OPT2','varsayılan düzen');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT_OPT3','Çevirimdışı düzeni');
DEFINE('_JLIST_FRONTEND_SETTINGS_FILEPLUGIN_OFFLINE_FILETITLE','İndirmeler kapalı.');
DEFINE('_JLIST_FRONTEND_SETTINGS_FILEPLUGIN_DESCRIPTION','İndirme izniniz yoksa, lütfen tasarımcıya basvurun.');
DEFINE('_JLIST_FRONTEND_SETTINGS_FILEPLUGIN_FILEUNKNOWN','İndirme bulunamadı! ID=<b>{fileid}</b>');
DEFINE('_JLIST_FRONTEND_SETTINGS_FILEPLUGIN_LAYOUTUNKNOWN','Düzen bulunamadı <b>{thelayout}</b>!');

// NEW OPTIONS FOR DEFAULT CAT ICON
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_CAT_FILE_NO_DEFAULT_PIC','Resim seçilmedi!');
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_CAT_PIC_TITLE','Kategoriler için varsayılan resim:');
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_CAT_PIC_DESC','Here a symbol can be selected, which automatically new category is assigned.  It is indicated in the size stored above here.');

// NEW OPTIONS FOR DEFAULT FILE ICON
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_FILE_PIC_TITLE','İndirmeler için varsayılan resim:');
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_FILE_PIC_DESC','Here a symbol can be selected, which automatically new downloads is assigned.  It is indicated in the size stored above here.');

// FOR MISSING NEW MINIPICS
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_PRICE','Fiyatı');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_FILESIZE','Boyutu');

// FOR DATAFIELDS IN  DOWNLOAD DETAILVIEW
DEFINE('_JLIST_FE_DETAILS_CREATED_BY_TITLE','Oluşturan');
DEFINE('_JLIST_FE_DETAILS_MODIFIED_BY_TITLE','Düzenleyen');
DEFINE('_JLIST_FE_DETAILS_MODIFIED_DATE_TITLE','Düzenleme');

// FOR EXTERN FILES -  USER INFO IF CHECKBOXES ACTIVE
// PLEASE USE NOT SPECIAL CHARS e.g. " ' & ...
DEFINE('_JLIST_FRONTEND_EXTERN_FILE_USER_INFO','Bu dosya farklı bir serverda olduğu için ayrı indirilmeli.');

// FOR SAMPLE PIC IN EMAIL LAYOUT 
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_EMAIL_INFO_TITLE','<b>E-posta düzeni bilgisi</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_EMAIL_INFO_TEXT','<p>This is a graphical example of this information in the transmitted email. The dark red border indicates the area you can change the dışplay from here. </p>');

// ******************************************************************************
// NEW IN 1.4 pre-release
// ******************************************************************************

// INSTALL - MOVE  İmages DIRECTORIES TO JOOMLA/İmages/JDOWNLOADS
DEFINE('_JLIST_INSTALL_MOVE_IMAGES_ERROR','Taşınan resim klasörü ile ilgili problemler.');
DEFINE('_JLIST_INSTALL_MOVE_IMAGES_OK','İmages klasörü taşındı ../images/jdownloads/');
DEFINE('_JLIST_INSTALL_MOVE_IMAGES_DEST_DIR_EXIST','Resimler klasörü ../images/jdownloads/ zaten var!');
DEFINE('_JLIST_INSTALL_MOVE_IMAGES_COPY_ERROR','Hata: İmages klasörü kopyalanamadı!');
DEFINE('_JLIST_INSTALL_MOVE_IMAGES_DEL_AFTER_COPY_ERROR','Hata: Kopyalama sonrası resimler silinemedi!');

DEFINE('_JLIST_BACKEND_SETTINGS_IMAGES_NOTE','Kurulumdan sonra resim klasörleri /images/jdownloads/ klasörüne taşınacaktır. Böyle güncellemerde resimleriniz silinmeyecektir.'); 
// FOR MAIL AFTER FRONTEND UPLOADS

DEFINE('_JLIST_SETTINGS_INSTALL_6','Yeni bir dosya yüklendi!');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_UPLOAD_HEAD','Dosya yüklemeleri için e-posta ayarları');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_UPLOAD_TEMPLATE_TITLE','e-posta düzeni');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_UPLOAD_TEMPLATE_DESC','Here you can specify the layout of the <b>E-Mail</b>, which (if activates) is dışpatched after each upload to the address specified above. HTML code as well as arbitrary text can be inserted.<br /><br />Available place-holder:<br />{name} {mail} {date} {ip} {file_title} {file_name} {description}');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_DOWNLOAD_TEMPLATE_DESC','Here you can specify the layout of the <b>E-Mail</b>, which (if activates) is dışpatched after each download to the address specified above. HTML code as well as arbitrary text can be inserted<br /><br />Available place-holder:<br />{file_list} {ip_address} {date_time} {user_name} {user_group}');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_UPLOAD_TEMPLATE','Dosya yüklemesini raporla!<br />
<br />
Gönderen: {name}<br />
E-Posta: {mail}<br />
IP-Adresi: {ip}<br /><br />
Dosya adı: {file_name}<br />
Başlık: {file_title}<br />
Tanım: {description}<br />
Tarih: {date}<br /><br />
Bu otomatik olarak oluşturulmuş bir e-posta.');

// NEW FOR "NEW" İmages
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_NEW_PIC_DESC2','List of all pictures from the directory: <b>../images/jdownloads/newimages </b> to select.'); 

// FOR NEW OPTIONS: SCREENSHOT UPLOAD
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_TITLE','Önizleme dosya boyutu (thumbnails)');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_INFO','If Screenshots are to be used for the downloads, after the Upload of a picture a automatically generated thumbnail is provided of it. Size of the thumbnail can be determind. Note: Condition for this is, a installed version of the GD library on the server (see status).');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_STATUS_GD_OK','Durum: GD kütüphanesi mevcut!');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_STATUS_GD_NOT_OK','Durum: GD kütüphanesi kayıp!');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_SIZE_HEIGHT','Piksellerdeki maksimum yükseklik (örn.: 150).');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_SIZE_WIDTH','Piksellerdeki maksimum genişlik (örn.: 150).');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_CREATE_ALL_NEW_TITLE','All thumbnails provide again when storing?');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_CREATE_ALL_NEW_DESC','Deletes after storing the configuration all up-to-date existing preview pictures (thumbnails) and built new thumbnails with the dimensions indicated above again.');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_CREATE_ALL_MESSAGE','All preview pictures new built were again provided!');

// NEW FIELDS IN EDIT FILES FOR SCREENSHOTS
DEFINE('_JLIST_BACKEND_FILESEDIT_THUMBNAIL_LIST_NO_PIC','Hiçbir resim seçilmedi');
DEFINE('_JLIST_BACKEND_FILESEDIT_THUMBNAIL_LIST_TITLE','Lütfen şunucu üzerinden bir dosya seçin:');
DEFINE('_JLIST_BACKEND_FILESEDIT_THUMBNAIL_LIST_DESC','All reduced pictures are located to selection here in the directory <b>/images/jdownloads/screenshots/thumbnails </b>. The activated picture can be indicated then with the şubstitute symbol {thumbnail} in the layout.');
DEFINE('_JLIST_BACKEND_FILESEDIT_THUMBNAIL_UPLOAD_TITLE','Karşıya yükleme için bir resim seçin:');
DEFINE('_JLIST_BACKEND_FILESEDIT_THUMBNAIL_UPLOAD_DESC','Here a picture can be uploaded to the server. This is used for this download. The original is stored in the file <b>/images/jdownloads/screenshots</b> and a reduced version (thumbnail) is generated automatically.');

// FOR MIRROR LINK - JAVASCRIPT ERROR MESSAGE
DEFINE('_JLIST_BACKEND_FILESEDIT_ERROR_ONLY_MIRROR','Hata: Lütfen öncelikle iç veya dış bir dosya seçin. ');

// FOR NEW MIRROR DOWNLOAD BUTTONS
DEFINE('_JLIST_BACKEND_SETTINGS_DETAILS_MIRROR_BUTTON_TITLE1','İlk Mirror tuşu'); 
DEFINE('_JLIST_BACKEND_SETTINGS_DETAILS_MIRROR_BUTTON_TITLE2','İkincil Mirror tuşu'); 

// FOR NEW "UPDATED" ICON IN DOWNLOADS TITLE
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_NEW_PIC_DESC3','şu klasördeki resimler: <b>../images/jdownloads/updimages </b>.');
DEFINE('_JLIST_BACKEND_SETTINGS_UPD_TITLE','"yenilendi" ibaresi ne kadar kalsın (gün)');
DEFINE('_JLIST_BACKEND_SETTINGS_UPD_DESC','Indicate here the number of days, which a Download is to be considered as “updated”. Behind the Download title the symbol is then indicated. As updated a Download is considered after each change to it. With 0 no symbol is indicated.');

// FOR NEW OPTION - LOAD FILE IN BROWSER - NOT DOWNLOAD
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_VIEW_FILE_TYPES','Tarayicida açilacak olan dosya tipleri');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_VIEW_FILE_TYPES_DESC','Indicate the file types, which not to be offered as Download. These files are opened in a new browser to the opinion. Between each option you need a (,) separator. Example: html,htm,txt,pdf,doc,jpg,jpeg,png,gif');

//NEW FRONTEND PIC UPLOAD FIELD
DEFINE('_JLIST_FRONTEND_UPLOAD_PIC_FILETITLE','Ekran görüntüsü:');
DEFINE('_JLIST_FRONTEND_UPLOAD_PIC_ALLOWED_FILES','İzin verilen dosya türleri:');

// NEW FILTER OPTION IN FILES LIST - BACKEND
DEFINE('_JLIST_BACKEND_FILESLIST_FILTER_PUBLISHED','Yayınlandı');
DEFINE('_JLIST_BACKEND_FILESLIST_FILTER_UNPUBLISHED','yayınlanmadı');

// NEW INFO WHEN USING LIGHTBOX PLACEHOLDER
DEFINE('_JLIST_BACKEND_TEMPEDIT_INFO_LIGHTBOX','Lightbox fonksiyonunda ekran görüntüsü kullanmak istediğinizde, kod dizilimini şu şekilde yapmalısınız: a href="{screenshot}" rel="lightbox" > <img src="{thumbnail}" align="right" /></a>');  

// ******************************************************************************
// new in 1.4 beta
// 1.4 beta sürümündeki yenilikler
// ******************************************************************************

// NEW OPTION FOR MANAGER ACCESS IN BACKEND
DEFINE('_JLIST_BACKEND_SETTINGS_MANAGER_ACCESS','Düzenleyici (Manager) Erişimini Aktifleştir');
DEFINE('_JLIST_BACKEND_SETTINGS_MANAGER_ACCESS_DESC','Düzenleyici (Manager) seviyesinde olan üyelerin jDownloads bileşenine erişimini sağlar.');

// NEW OPTION FOR VIEW PLACEHOLDER IMAGE FOR SCREENSHOTS IN DETAIL SITE
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PLACEHOLDER_TITLE','Detay sayfasında Küçük Resim göster?');
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PLACEHOLDER_TEXT','Evet olarak işaretlendi ise bir Küçük Resim detaylar sayfasında sol tarafta gösterilecektir.');

// NEW OPTION FOR VIEW PLACEHOLDER IMAGE FOR SCREENSHOTS IN FILESLIST
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PLACEHOLDER_IN_LIST_TITLE','Download Listede Küçük Resim Etiketleri göster?');
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PLACEHOLDER_IN_LIST_TEXT','Evet olarak işaratlendi ise download listelemede küçük resim sol tarafta gösterilir.');

// NEW OPTION FOR VIEW CATEGORY INFOS IN LISTVIEW - FRONTEND
DEFINE('_JLIST_BACKEND_SETTINGS_CAT_VIEW_INFO_IN_LISTS_TITLE','Kategori Bilgisi?');
DEFINE('_JLIST_BACKEND_SETTINGS_CAT_VIEW_INFO_IN_LISTS_TEXT','Evet olarak işaretlendi ise Kategori Bilgisi gösterilecektir. Zaten ama Kategori ismi navigasyonda gösterildi icin pek tercih edilmeyen bir secenek.');

// NEW OPTION FOR VIEW PAGE NAVIGATION ON THE BOTTOM - FRONTEND
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PAGENAVI_BOTTOM_TITLE','Sayfanın altında sayfalandırma');
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PAGENAVI_BOTTOM_TEXT','Dosya listesinde sayfalandırmayı sayfanın altında gösterir.');

// NEW OPTION FOR VIEW PAGE NAVIGATION ON THE TOP - FRONTEND
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PAGENAVI_TOP_TITLE','Üst Bölümde yolu göster?');
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PAGENAVI_TOP_TEXT','Evet olarak işaretlendi ise sayfanın alt üst bölümünde navigasyon yolu gösterilir.');

// PUBLISH FILES MESSAGE IN BACKEND
DEFINE('_JLIST_BACKEND_EDIT_FILES_CAN_NOT_PUBLISH_INFO','Download (lara) dosya belirtilmediginde yayınlama mümkün olmayacaktır!');

DEFINE('_JLIST_BACKEND_EDIT_FILES_SET_UPDATE_TITLE','Download güncellendi olarak işaretle:');
DEFINE('_JLIST_BACKEND_EDIT_FILES_SET_UPDATE_TEXT','Evet ile işaretli ise, Download Anasayfada güncellendi olarak gösterilir. Güncelleme süresi Ayarlar altında belirtilebilir.');

// FOR NEW META INFORMATION FIELDS IN CAT AND FILES EDIT
DEFINE('_JLIST_BACKEND_EDIT_METADESC_TITLE','Meta Açıklama:');
DEFINE('_JLIST_BACKEND_EDIT_METADESC_DESC','Buraya Kısa bir Tanıtım Açıklaması yazabilirsiniz.');
DEFINE('_JLIST_BACKEND_EDIT_METAKEY_TITLE','Meta Anahtar Kelimeler:');
DEFINE('_JLIST_BACKEND_EDIT_METAKEY_DESC','Buraya Meta Anahtar kelimelerinizi belirtebilirsiniz.');

DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR_INFOS_TITLE','Dosya Yapımcısı hakkında bilgiler');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_HOME_DESC','Yapımcının Websitesi. Anasayfada bağlantı olarak gösterilecektir.');
DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR_DESC','Buraya bir isim veya web site veya email adres yazabilirsiniz. Anasayfada ya Website yada Email gösterilecektir.');

// NEW PARAMETER IN SEARCH
DEFINE('_JLIST_FRONTEND_SEARCH_NUMBERS','Sonuçlar sayısı');

// NEW USER INFO BY EXTERN SHAREHOSTER LINK
DEFINE('_JLIST_FRONTEND_DOWNLOAD_GO_TO_OTHER_SITE_INFO','Dosya bir dış bağlantıya yönlendirilmiştir. <br />Download etmek için lütfen adımları takip ediniz.');

// NEW OPTION IN  EDIT DOWNLOADS
DEFINE('_JLIST_BACKEND_FILESEDIT_OPEN_LINK_IN_OTHER_WEBSITE_TITLE','dış bağlantılı Dosyalar');
DEFINE('_JLIST_BACKEND_FILESEDIT_OPEN_LINK_IN_OTHER_WEBSITE_DESC','Eğer evet ile işaretlenmiş ise, Dosyalar dış bağlantılardan indirilir. Dosya sadece dış bağlantıdan indirilebilir. Download tuşuna basıldığında dış bağlantıya yönlendirilir.');

// NEW SERVER INFO TAB IN CPANEL TAB
DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_5','sunucu Bilgisi');
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_TITLE','Güncel sunucu ayarları hakkında bilgi'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_DESC','Dosyanın maksimum dosya boyutu sunucuda belirtilen ayarlara bağlıdır (php.ini). aşağıda upload lar için güncel ayarları görebilirsiniz. Lütfen ayarlar yeterince yüksek ayarlandıgını kontrol ediniz. Eğer php.ini dosyasına Erişim hakkınız yok ise, Hostcunuza danısın. Parametreler hakkında bilgiler www.php.net sayfasında bulabilirsiniz. '); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_FILE_UPLOADS','İzin verilen dosya uploadları:'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_MAX_FILESIZE','Maksimum İzin verilen Dosya Boyutu (max_filesize):'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_POST_MAX_SIZE','Maksimum POST boyutu: (post_max_size):'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_MEMORY_LIMIT','Bellek limiti (memory_limit):'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_MAX_EXECUTION_TIME','Maximum execution time of scripts (max_execution_time):'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_MAX_INPUT_TIME','Upload için en yüksek input zamanlaması (max_input_time):'); 

// NEW MESSAGE AFTER EDIT CATEGORIES AND CHANGING THE ACCESS LEVEL
DEFINE('_JLIST_BACKEND_CATSEDIT_şuM_CATS_ACCESS_LEVEL_CHANGED_AFTER_EDIT_MSG','Alt Kategoriler aynı seviyede yetkilendirilecektir!');
DEFINE('_JLIST_BACKEND_CATSEDIT_CATS_ACCESS_LEVEL_CAN_NOT_CHANGED_MSG','Not: Bir Kategori Erişim seviyesi üst kategoriden daha yüksek olamaz. Erişim seviyesi sıfırlandı.');
DEFINE('_JLIST_BACKEND_CATSEDIT_CATS_ACCESS_LEVEL_CAN_NOT_CHANGED_MSG','Bilgilendirme: Alt Kategoriler üst kategorilerden daha düşük haklara sahip olamaz. Bu nedeniyle Erişim seviyler standart ayarlara geri alındı.');

// NEW MINI ICON TITLE
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_DOWNLOAD_HITS','İndirmeler');
// ADDITIONAL INFO IN FILES LAYOUT
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DESC2','Use the placeholders {files_title_begin} {files_title_text} {files_title_end} to insert a title above the filelist.'); // 1.4 beta (2) de değiştirilmistir ) 
// ADDITIONAL INFO IN CAT LAYOUT
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_DESC2','Use the placeholders {cat_title_begin} {şubcats_title_text} {cat_title_end} to insert a title above the şubcategories.'); //  1.4 beta (2) de değiştirilmistir 
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_DESC3','The placeholders {cat_info_begin} and {cat_info_end} mark the zone where the informaton about a category are dışplayed. Bu bölümüm parametleri Ayarla altinda düzenlenebilir.'); 

// NEW MESSAGES FOR INSTALLATION
DEFINE('_JLIST_INSTALL_20','Lütfen bekleyin - Kategori İzinleri kontrol ediliyor...');
DEFINE('_JLIST_INSTALL_21','Kategori kontrolü tamamlandı.');

// NEW IN 1.4 beta (2)

// NEW TEXT FOR LAYOUT FIELDS TITLE PLACEHOLDERS IN THE FRONTEND VIEW  (layout: files)
DEFINE('_JLIST_FE_FILELIST_LICENSE_TITLE','Lisans');
DEFINE('_JLIST_FE_FILELIST_PRICE_TITLE','Fiyat');
DEFINE('_JLIST_FE_FILELIST_LANGUAGE_TITLE','Dil');
DEFINE('_JLIST_FE_FILELIST_FILESIZE_TITLE','Dosya Boyutu');
DEFINE('_JLIST_FE_FILELIST_SYSTEM_TITLE','Sistem');
DEFINE('_JLIST_FE_FILELIST_AUTHOR_TITLE','Yazar');
DEFINE('_JLIST_FE_FILELIST_AUTHOR_URL_TITLE','Website');
DEFINE('_JLIST_FE_FILELIST_CREATED_DATE_TITLE','Tarih');
DEFINE('_JLIST_FE_FILELIST_HITS_TITLE','Tıklama');
DEFINE('_JLIST_FE_FILELIST_CREATED_BY_TITLE','Gönderen');
DEFINE('_JLIST_FE_FILELIST_MODIFIED_BY_TITLE','Değiştiren');
DEFINE('_JLIST_FE_FILELIST_MODIFIED_DATE_TITLE','Son güncelleme');
// NEW FOR PLACEHOLDER   {files_title_text} and  {şubcats_title_text}  {details_block_title}
DEFINE('_JLIST_FE_FILELIST_TITLE_OVER_FILES_LIST','Dosyalar:');
DEFINE('_JLIST_FE_FILELIST_TITLE_OVER_şuBCATS_LIST','Alt Kategoriler:');
DEFINE('_JLIST_FE_DETAILS_DATA_BLOCK_TITLE','Veri');
// NEW PLACEHOLDERS FOR şuMMARY PAGE  {license_note}  {title_text}
DEFINE('_JLIST_FE_şuMMARY_PAGE_LICENSE_NOTE','Download ile lisansı kabul etmiş oluyorsunuz.');
DEFINE('_JLIST_FE_şuMMARY_PAGE_TITLE_TEXT','Download edilecek seçilen dosyaları burda görebilirsiniz');

// NEW INSTALL MESSAGES FOR UPDATE
DEFINE('_JLIST_INSTALL_WARNING_CAT_ACCESS_RIGHTS','Kategori Güvenlik ayarlarında bir kaç değişiklik mevcut. Bu nedeniyle öncellikle yayınlamadan önce Kategorilerinizi kontrol ediniz!');
DEFINE('_JLIST_INSTALL_WARNING_DEFAULT_LAYOUTS_ARE_ACTIVE','Yeni yer tutucular sayesinde yeni 1.4 standart görünümü aktif hale getirilmiştir. Görünüm ayarlarında değişiklik yapabilirsiniz.');

?>