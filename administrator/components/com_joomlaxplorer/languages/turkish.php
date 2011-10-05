<?php

// Turkish Language for joomlaXplorer (Translated by Sinan Ata, Tolga �anc�'(cumla.blogspot.com))

$GLOBALS["charset"] = "iso-8859-9";
$GLOBALS["text_dir"] = "ltr"; // ('ltr' for left to right, 'rtl' for right to left)
$GLOBALS["date_fmt"] = "Y/m/d H:i";
$GLOBALS["error_msg"] = array(
	// error
	"error"			=> "HATA(LAR)",
	"back"			=> "Geri Gel",
	
	// root
	"home"			=> "Ana klas�r olu�turulmam�� ayarlar�n�z� kontrol edin.",
	"abovehome"		=> "Bu klas�r ana klas�r�n �st�nde olmamal�d�r.",
	"targetabovehome"	=> "Hedef klas�r ana klas�r�n �st�nde olmamal�d�r.",
	
	// exist
	"direxist"		=> "Bu klas�r olu�turulamad�.",
	//"filedoesexist"	=> "Bu dosya zaten var.",
	"fileexist"		=> "Bu dosya olu�turulamad�.",
	"itemdoesexist"		=> "Bu ��e zaten var.",
	"itemexist"		=> "Bu ��e olu�turulamad�.",
	"targetexist"		=> "Hedef klas�r olu�turulmam��.",
	"targetdoesexist"	=> "Hedef madde zaten olu�turumu�.",
	
	// open
	"opendir"		=> "Klas�r A��lamaz.",
	"readdir"		=> "Klas�r Okunamaz.",
	
	// access
	"accessdir"		=> "Bu klas�re ula�mak i�in izinleriniz yetersiz.",
	"accessfile"		=> "Bu dosyaya ula�mak i�in izinleriniz yetersiz.",
	"accessitem"		=> "Bu ��eye ula�mak i�in izinleriniz yetersiz.",
	"accessfunc"		=> "Bu fonksiyonu kullanmak i�in izinleriniz yetersiz.",
	"accesstarget"		=> "Hedef klas�re ula�mak i�in izinleriniz yetersiz.",
	
	// actions
	"permread"		=> "�zin g�sterimi ba�ar�s�z.",
	"permchange"		=> "�zin de�i�tirme ba�ar�s�z.",
	"openfile"		=> "Dosya a��lmas� ba�ar�s�z.",
	"savefile"		=> "Dosya kayd� ba�ar�s�z.",
	"createfile"		=> "Dosya olu�umu ba�ar�s�z.",
	"createdir"		=> "Klas�r olu�umu ba�ar�s�z.",
	"uploadfile"		=> "Dosya y�klemesi ba�ar�s�z.",
	"copyitem"		=> "Kopyalama ba�ar�s�z.",
	"moveitem"		=> "Ta��ma ba�ar�s�z.",
	"delitem"		=> "Silme ba�ar�s�z.",
	"chpass"		=> "�ifre de�i�tirme ba�ar�s�z.",
	"deluser"		=> "Kullan�c� kald�rma ba�ar�s�z.",
	"adduser"		=> "Kullan�c� ekleme ba�ar�s�z.",
	"saveuser"		=> "Kullan�c� de�i�iklik kayd� ba�ar�s�z.",
	"searchnothing"		=> "Aramak i�in bir de�er girmelisiniz.",
	
	// misc
	"miscnofunc"		=> "Fonksiyon kullan�labilir.",
	"miscfilesize"		=> "Dosya maksimum boyutu a�t�.",
	"miscfilepart"		=> "Dosyan�n yaln�zca bir k�sm� y�klenebildi.",
	"miscnoname"		=> "Bir isim girmelisiniz.",
	"miscselitems"		=> "Hi�bir ��e(ler) se�mediniz.",
	"miscdelitems"		=> " \"+num+\" ��elerini silmek istedi�inizden eminmisiniz?",
	"miscdeluser"		=> "'\"+user+\"' kullan�c�s�n� silmek istedi�inizden eminmisiniz?",
	"miscnopassdiff"	=> "Yeni �ifre eskisinden farkl� de�il.",
	"miscnopassmatch"	=> "�ifreler e�le�miyor.",
	"miscfieldmissed"	=> "Gerekli bir bo�lu�u atlad�n�z.",
	"miscnouserpass"	=> "Kullan�c� ad� yada �ifreniz yanl��.",
	"miscselfremove"	=> "Kendinizi silemezsiniz.",
	"miscuserexist"		=> "Kullan�c� zaten var.",
	"miscnofinduser"	=> "Kullan�c� bulunamad�.",
	"extract_noarchive" => "The File is no extractable Archive.",
	"extract_unknowntype" => "Unknown Archive Type"
);
$GLOBALS["messages"] = array(
	// links
	"permlink"		=> "�zinleri De�i�tir",
	"editlink"		=> "De�i�tir",
	"downlink"		=> "A�a��",
	"uplink"		=> "Yukar�",
	"homelink"		=> "Ba�a D�n",
	"reloadlink"		=> "Yenile",
	"copylink"		=> "Kopyala",
	"movelink"		=> "Ta��",
	"dellink"		=> "Sil",
	"comprlink"		=> "Depola",
	"adminlink"		=> "Y�netici",
	"logoutlink"		=> "��k��",
	"uploadlink"		=> "Y�kle",
	"searchlink"		=> "Ara",
	"extractlink"	=> "Extract Archive",
	'chmodlink'		=> 'Change (chmod) Rights (Folder/File(s))', // new mic
	'mossysinfolink'	=> $_VERSION->PRODUCT.' System Information ('.$_VERSION->PRODUCT.', Server, PHP, mySQL)', // new mic
	'logolink'		=> 'Go to the joomlaXplorer Website (new window)', // new mic
	
	// list
	"nameheader"		=> "�sim",
	"sizeheader"		=> "Boyut",
	"typeheader"		=> "Tip",
	"modifheader"		=> "De�i�tirme",
	"permheader"		=> "�zinler",
	"actionheader"		=> "Hareketler",
	"pathheader"		=> "Yol",
	
	// buttons
	"btncancel"		=> "��k��",
	"btnsave"		=> "Kaydet",
	"btnchange"		=> "De�i�tir",
	"btnreset"		=> "S�f�rla",
	"btnclose"		=> "Kapat",
	"btncreate"		=> "Olu�tur",
	"btnsearch"		=> "Ara",
	"btnupload"		=> "Y�kle",
	"btncopy"		=> "Kopyala",
	"btnmove"		=> "Ta��",
	"btnlogin"		=> "Giri�",
	"btnlogout"		=> "��k��",
	"btnadd"		=> "Ekle",
	"btnedit"		=> "De�i�tir",
	"btnremove"		=> "Kald�r",
	
	// user messages, new in joomlaXplorer 1.3.0
	'renamelink'	=> 'YEN�DEN ADLANDIR',
	'confirm_delete_file' => 'Bu dosyay� silmek istedi�inize eminmisiniz? \\n%s',
	'success_delete_file' => '��e(ler) ba�ar�yla silindi.',
	'success_rename_file' => 'Dizin/dosya %s ba�ar�yla yeniden atland�r�ld�  %s.',
	
	// actions
	"actdir"		=> "Klas�r",
	"actperms"		=> "�zinleri De�i�tir",
	"actedit"		=> "Dosyay� De�i�tir",
	"actsearchresults"	=> "Arama Sonu�lar�",
	"actcopyitems"		=> "��e(ler)i kopyala",
	"actcopyfrom"		=> " /%s dan /%s ya ",
	"actmoveitems"		=> "��e(ler)i ta��",
	"actmovefrom"		=> " /%s dan /%s ya ta�� ",
	"actlogin"		=> "Giri�",
	"actloginheader"	=> "QuiXplorer kullan�m� i�in giri� yap",
	"actadmin"		=> "Y�netim",
	"actchpwd"		=> "�ifre De�i�tir",
	"actusers"		=> "Kullan�c�lar",
	"actarchive"		=> "��e(ler)i Yedekle",
	"actupload"		=> "Dosya(lar)i Y�kle",
	
	// misc
	"miscitems"		=> "��e(ler)",
	"miscfree"		=> "Serbest",
	"miscusername"		=> "Kullan�c� Ad�",
	"miscpassword"		=> "�ifre",
	"miscoldpass"		=> "Eski �ifre",
	"miscnewpass"		=> "Yeni �ifre",
	"miscconfpass"		=> "�ifreyi Onayla",
	"miscconfnewpass"	=> "Yeni �ifeyi Onayla",
	"miscchpass"		=> "�ifre De�i�tir",
	"mischomedir"		=> "Ana Klas�r",
	"mischomeurl"		=> "Ba� URL",
	"miscshowhidden"	=> "Gizli ��eleri G�ster",
	"mischidepattern"	=> "Resim Gizle",
	"miscperms"		=> "�zinler",
	"miscuseritems"		=> "(isim, ana klas�r, gizli ��eleri g�ster, izinler, Aktif)",
	"miscadduser"		=> "Kullan�c� ekle",
	"miscedituser"		=> "'%s' kullan�c�s�n� de�i�tir",
	"miscactive"		=> "Aktif",
	"misclang"		=> "Dil",
	"miscnoresult"		=> "Hi� sonu� yok.",
	"miscsubdirs"		=> "Alt kategorileri de ara",
	"miscpermnames"		=> array("Sadece bak�labilir","Modifiye","�ifre de�i�tir","Modifiye & �ifre De�i�tir",
					"Y�netici"),
	"miscyesno"		=> array("Evet","Hay�r","E","H"),
	"miscchmod"		=> array("Sahip", "Grup", "Halk"),
	// from here all new by mic
	'miscowner'			=> 'Sahip',
	'miscownerdesc'		=> '<strong>A��klama:</strong><br />User (UID) /<br />Group (GID)<br />Current rights:<br /><strong> %s ( %s ) </strong>/<br /><strong> %s ( %s )</strong>',

	// sysinfo (new by mic)
	'simamsysinfo'		=> $_VERSION->PRODUCT.' Sistem bilgisi',
	'sisysteminfo'		=> 'Sistem Bilgisi',
	'sibuilton'			=> '��letim Sistemi',
	'sidbversion'		=> 'Veritaban� Versiyonu (MySQL)',
	'siphpversion'		=> 'PHP Versiyonu',
	'siphpupdate'		=> 'Bilgi: <span style="color: red;">The PHP version you use is <strong>not</strong> actual!</span><br />To guarantee all functions and features of '.$_VERSION->PRODUCT.' and addons,<br />you should use as minimum <strong>PHP.Version 4.3</strong>!',
	'siwebserver'		=> 'Webserver',
	'siwebsphpif'		=> 'WebServer - PHP Interface',
	'simamboversion'	=> $_VERSION->PRODUCT.' Version',
	'siuseragent'		=> 'Taray�c� Versiyonu',
	'sirelevantsettings' => '�nemli PHP Ayarlar�',
	'sisafemode'		=> 'Safe Mode',
	'sibasedir'			=> 'Open basedir',
	'sidisplayerrors'	=> 'PHP Hatalar�',
	'sishortopentags'	=> 'Short Open Tags',
	'sifileuploads'		=> 'Datei Uploads',
	'simagicquotes'		=> 'Magic Quotes',
	'siregglobals'		=> 'Register Globals',
	'sioutputbuf'		=> 'Output Buffer',
	'sisesssavepath'	=> 'Session Savepath',
	'sisessautostart'	=> 'Session auto start',
	'sixmlenabled'		=> 'XML enabled',
	'sizlibenabled'		=> 'ZLIB enabled',
	'sidisabledfuncs'	=> 'Non enabled functions',
	'sieditor'			=> 'WYSIWYG Editor',
	'siconfigfile'		=> 'Config file',
	'siphpinfo'			=> 'PHP Info',
	'siphpinformation'	=> 'PHP Information',
	'sipermissions'		=> '�zinler',
	'sidirperms'		=> 'Directory permissions',
	'sidirpermsmess'	=> 'To be shure that all functions and features of '.$_VERSION->PRODUCT.' are working correct, following folders should have permission to write [chmod 0777]',
	'sionoff'			=> array( 'On', 'Off' ),
	
	'extract_warning' => "Ger�etten bu dosyay� ��kartmak istiyormusunuz? Buraya?\\nThis will overwrite existing files when not used carefully!",
	'extract_success' => "Extraction was successful",
	'extract_failure' => "Extraction failed",
	
	'overwrite_files' => 'Varolan dosyan�n �zerine yaz?',
	"viewlink"		=> "G�STER",
	"actview"		=> "Kaynak dosyas�n� g�ster",
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to fun_chmod.php file
	'recurse_subdirs'	=> 'Recurse into subdirectories?',
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to footer.php file
	'check_version'	=> 'Son s�r�m� kontrol et',
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to fun_rename.php file
	'rename_file'	=>	'Dizini yada dosyay� yenidien adland�r...',
	'newname'		=>	'Yeni �sim',
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to fun_edit.php file
	'returndir'	=>	'Kaydettikten sonra dizine geri d�n?',
	'line'		=> 	'Line',
	'column'	=>	'Column',
	'wordwrap'	=>	'Wordwrap: (IE only)',
	'copyfile'	=>	'Copy file into this filename',
	
	// Bookmarks
	'quick_jump' => 'H�zl� Atlama',
	'already_bookmarked' => 'Bu dizin zaten yer imlerinde',
	'bookmark_was_added' => 'Bu dizin yer imleri listesine eklendi.',
	'not_a_bookmark' => 'Bu dizin yer imlerinde de�il.',
	'bookmark_was_removed' => 'Bu dizin yer imleri listesinden ��kart�ld�.',
	'bookmarkfile_not_writable' => "Failed to %s the bookmark.\n The Bookmark File '%s' \nis not writable.",
	
	'lbl_add_bookmark' => 'Bu dizini yerimlerine ekle',
	'lbl_remove_bookmark' => 'Bu dizini yer imleri listesinden ��kart',
	
	'enter_alias_name' => 'L�tfen bu yer imi i�in takma ad girin',
	
	'normal_compression' => 'normal s�k��t�rma',
	'good_compression' => 'iyi s�k��t�rma',
	'best_compression' => 'en iyi s�k��t�rma',
	'no_compression' => 's�k��t�rma yok',
	
	'creating_archive' => 'Ar�iv dosyas� olu�tur...',
	'processed_x_files' => 'Processed %s of %s Files',
	
	'ftp_header' => 'Local FTP Authentication',
	'ftp_login_lbl' => 'Please enter the login credentials for the FTP server',
	'ftp_login_name' => 'FTP Kullan�c� Ad�',
	'ftp_login_pass' => 'FTP �ifresi',
	'ftp_hostname_port' => 'FTP Server Hostname and Port <br />(Port is optional)',
	'ftp_login_check' => 'FTP ba�lant�s� Kontrol ediliyor...',
	'ftp_connection_failed' => "The FTP server could not be contacted. \nPlease check that the FTP server is running on your server.",
	'ftp_login_failed' => "The FTP login failed. Please check the username and password and try again.",
		
	'switch_file_mode' => '�imdiki mod: <strong>%s</strong>. Dilerseniz %s moduna ge�ebilirsiniz.',
	'symlink_target' => 'Target of the Symbolic Link',
	
	"permchange"		=> "CHMOD Success:",
	"savefile"		=> "Dosya kaydedildi.",
	"moveitem"		=> "Ta��ma Tamamland�.",
	"copyitem"		=> "Kopyalama Tamamland�.",
	'archive_name' 	=> 'Ar�iv dosyas� ismi',
	'archive_saveToDir' 	=> 'Ar�ivi bu dizine kaydet',
	
	'editor_simple'	=> 'Basit Edit�r Modu',
	'editor_syntaxhighlight'	=> 'Syntax-Highlighted Mode'
);
?>
