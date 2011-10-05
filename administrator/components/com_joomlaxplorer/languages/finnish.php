<?php
// version 1.6.1 by Markku Suominen, dated 13.7.2007
/// admin@joomlaportal.fi
// Finnish Language Module for joomlaXplorer (translated by Jarmo Ker�nen)
// modifications and translation of new strings by Markku Suominen 10.11.2005
// Finnish Joomla translation team, http://www.joomlaportal.fi, admin@joomlaportal.fi
global $_VERSION;

$GLOBALS["charset"] = "iso-8859-1";
$GLOBALS["text_dir"] = "ltr"; // ('ltr' for left to right, 'rtl' for right to left)
$GLOBALS["date_fmt"] = "j.n.Y H:i";
$GLOBALS["error_msg"] = array(
	// error
	"error"			=> "virheet",
	"message"			=> "viestit",
	"back"			=> "Palaa",
	
	// root
	"home"			=> "Kotihakemistoa ei ole, tarkista asetuksesi.",
	"abovehome"		=> "Nykyinen hakemisto ei saa olla kotihakemiston yl�puolella.",
	"targetabovehome"	=> "Kohdehakemisto ei saa olla kotihakemiston yl�puolella.",
	
	// exist
	"direxist"		=> "Hakemistoa ei ole.",
	//"filedoesexist"	=> "This file already exists.",
	"fileexist"		=> "Tiedostoa ei ole.",
	"itemdoesexist"		=> "Nimike on jo olemassa.",
	"itemexist"		=> "Nimike ei ole olemassa.",
	"targetexist"		=> "Kohdehakemistoa ei ole.",
	"targetdoesexist"	=> "Kohdenimike on jo olemassa.",
	
	// open
	"opendir"		=> "Hakemistoa ei voi avata.",
	"readdir"		=> "Hakemistoa ei voi lukea.",
	
	// access
	"accessdir"		=> "Sinulla ei ole valtuuksia t�h�n hakemistoon.",
	"accessfile"		=> "Sinulla ei ole valtuuksia t�h�n tiedostoon.",
	"accessitem"		=> "Sinulla ei ole valtuuksia t�h�n nimikkeeseen.",
	"accessfunc"		=> "Sinulla ei ole valtuuksia t�h�n toimintoon.",
	"accesstarget"		=> "Sinulla ei ole valtuuksia kohdehakemistoon.",
	
	// actions
	"permread"		=> "K�ytt�oikeuksien luku ep�onnistui.",
	"permchange"		=> "K�ytt�oikeuksien muutos ep�onnistui.",
	"openfile"		=> "Tiedoston avaaminen ep�onnistui.",
	"savefile"		=> "Tiedoston tallennus ep�onnistui.",
	"createfile"		=> "Tiedoston luonti ep�onnistui.",
	"createdir"		=> "Hakemiston luonti ep�onnistui.",
	"uploadfile"		=> "Tiedoston vienti palvelimelle ep�onnistui.",
	"copyitem"		=> "Kopiointi ep�onnistui.",
	"moveitem"		=> "Siirto ep�onnistui.",
	"delitem"		=> "Poisto ep�onnistui.",
	"chpass"		=> "Salasanan vaihto ep�onnistui.",
	"deluser"		=> "K�ytt�j�n poisto ep�onnistui.",
	"adduser"		=> "K�ytt�j�n lis�ys ep�onnistui.",
	"saveuser"		=> "K�ytt�j�n tallennus ep�onnistui.",
	"searchnothing"		=> "Sinun pit�� antaa jotain etsitt�v��.",
	
	// misc
	"miscnofunc"		=> "Toiminto ei ole k�ytett�viss�.",
	"miscfilesize"		=> "Tiedosto koko ylitt�� suurimman sallitun arvon.",
	"miscfilepart"		=> "Tiedoston vienti palvelimelle onnistui vain osittain.",
	"miscnoname"		=> "Anna nimi.",
	"miscselitems"		=> "Et ole valinnut yht��n nimikett�.",
	"miscdelitems"		=> "Haluatko varmasti poistaa n�m� \"+num+\" nimikett�?",
	"miscdeluser"		=> "Haluatko varmasti poistaa k�ytt�j�n '\"+user+\"'?",
	"miscnopassdiff"	=> "Uusi salasana ei eroa nykyisest�.",
	"miscnopassmatch"	=> "Salasanat eiv�t t�sm��.",
	"miscfieldmissed"	=> "Ohitit t�rke�n kent�n.",
	"miscnouserpass"	=> "K�ytt�j�nimi tai salasana on v��r�.",
	"miscselfremove"	=> "Et voi poistaa omaa tunnustasi.",
	"miscuserexist"		=> "K�ytt�j� on jo olemassa.",
	"miscnofinduser"	=> "K�ytt�j�� ei l�ydy.",
	"extract_noarchive" => "Tiedoston tyyppi ei ole sellainen joka voidaan purkaa.",
	"extract_unknowntype" => "Tuntematon arkistointimuoto"
);
$GLOBALS["messages"] = array(
	// links
	"permlink"		=> "Muuta oikeuksia",
	"editlink"		=> "Muokkaa",
	"downlink"		=> "Lataa",
	"uplink"		=> "Yl�s",
	"homelink"		=> "Juurihakemisto",
	"reloadlink"	=> "P�ivit�",
	"copylink"		=> "Kopioi",
	"movelink"		=> "Siirr�",
	"dellink"		=> "Poista",
	"comprlink"		=> "Arkistoi",
	"adminlink"		=> "Hallinta",
	"logoutlink"	=> "Poistu",
	"uploadlink"	=> "Vie palvelimelle",
	"searchlink"	=> "Etsi",
	"extractlink"	=> "Pura arkistotiedosto",
	'chmodlink'		=> 'Muuta (chmod) oikeudet (kansio/tiedosto(t))', // new mic
	'mossysinfolink'	=> $_VERSION->PRODUCT.' J�rjestelm�tiedot ('.$_VERSION->PRODUCT.', palvelin, PHP, mySQL)', // new mic
	'logolink'		=> 'Siirry joomlaXplorer sivustolle(uusi ikkuna)', // new mic
	
	// list
	"nameheader"		=> "Nimi",
	"sizeheader"		=> "Koko",
	"typeheader"		=> "Tyyppi",
	"modifheader"		=> "Muutettu",
	"permheader"		=> "Oikeudet",
	"actionheader"		=> "Toiminnot",
	"pathheader"		=> "Polku",
	
	// buttons
	"btncancel"		=> "Peru",
	"btnsave"		=> "Tallenna",
	"btnchange"		=> "Muuta",
	"btnreset"		=> "Peru",
	"btnclose"		=> "Sulje",
	"btncreate"		=> "Luo",
	"btnsearch"		=> "Etsi",
	"btnupload"		=> "Vie palvelimelle",
	"btncopy"		=> "Kopioi",
	"btnmove"		=> "Siirr�",
	"btnlogin"		=> "Kirjaudu",
	"btnlogout"		=> "Poistu",
	"btnadd"		=> "Lis��",
	"btnedit"		=> "Muokka",
	"btnremove"		=> "Poista",
	
	// user messages, new in joomlaXplorer 1.3.0
	'renamelink'	=> 'Nime�',
	'confirm_delete_file' => 'Haluatko varmasti poistaa tiedoston? \\n%s',
	'success_delete_file' => 'Nimike(tt�) poistettu .',
	'success_rename_file' => 'Hakemisto/tiedosto  %s nimettiin, uusi nimi on %s.',
	
	// actions
	"actdir"		=> "Hakemisto",
	"actperms"		=> "Muuta oikeuksia",
	"actedit"		=> "Muokkaa tiedostoa",
	"actsearchresults"	=> "Haun tulokset",
	"actcopyitems"		=> "Kopioi nimikkeet",
	"actcopyfrom"		=> "Kopioi kohteesta /%s kohteeseen /%s ",
	"actmoveitems"		=> "Siirr� nimikkeet",
	"actmovefrom"		=> "Siirr� kohteesta /%s kohteeseen /%s ",
	"actlogin"		=> "Kirjaudu",
	"actloginheader"	=> "Kirjaudu k�ytt��ksesi joomlaXploreria",
	"actadmin"		=> "Hallinta",
	"actchpwd"		=> "Muuta salasana",
	"actusers"		=> "K�ytt�j�t",
	"actarchive"		=> "Arkistoi nimikkeet",
	"actupload"		=> "Vie tiedostot palvelimelle",
	
	// misc
	"miscitems"		=> "Nimikett�",
	"miscfree"		=> "Vapaana",
	"miscusername"		=> "K�ytt�j�nimi",
	"miscpassword"		=> "Salasana",
	"miscoldpass"		=> "Vanha salasana",
	"miscnewpass"		=> "Uusi salasana",
	"miscconfpass"		=> "Vahvista salasana",
	"miscconfnewpass"	=> "Vahvista uusi salasana",
	"miscchpass"		=> "Muuta salasana",
	"mischomedir"		=> "Kotihakemisto",
	"mischomeurl"		=> "Koti URL",
	"miscshowhidden"	=> "N�yt� piilotetut nimikkeet",
	"mischidepattern"	=> "Piilota kuvio",
	"miscperms"		=> "Oikeudet",
	"miscuseritems"		=> "(nimi, kotihakemisto, n�yt� piilotetut nimikkeet, oikeudet, aktiivi)",
	"miscadduser"		=> "lis�� k�ytt�j�",
	"miscedituser"		=> "muokkaa k�ytt�j�� '%s'",
	"miscactive"		=> "Aktiivi",
	"misclang"		=> "Kieli",
	"miscnoresult"		=> "Ei tuloksia.",
	"miscsubdirs"		=> "Etsi alahakemistoista",
	"miscpermnames"		=> array("Vain katselu","Muokkaa","Muuta salasana","Muokkaa ja muuta salasana",
					"Hallinta"),
	"miscyesno"		=> array("Kyll�","Ei","K","E"),
	"miscchmod"		=> array("Omistaja", "Ryhm�", "Julkinen"),

	// from here all new by mic
	'miscowner'			=> 'Omistaja',
	'miscownerdesc'		=> '<strong>Kuvaus:</strong><br />K�ytt�j� (UID) /<br />Ryhm� (GID)<br />Nykyiset oikeudet:<br /><strong> %s ( %s ) </strong>/<br /><strong> %s ( %s )</strong>',

	// sysinfo (new by mic)
	'simamsysinfo'		=> $_VERSION->PRODUCT.' J�rjestelm�n tiedot',
	'sisysteminfo'		=> 'J�rjestelm�n tiedot',
	'sibuilton'			=> 'K�ytt�j�rjestelm�',
	'sidbversion'		=> 'Tietokannan versio (MySQL)',
	'siphpversion'		=> 'PHP versio',
	'siphpupdate'		=> 'TIETOJA: <span style="color: red;">K�ytt�m�si PHP-versio <strong>ei ole </strong> riitt�v�n uusi</span><br />K�ytt��ksesi tuotteen toimintoja '.$_VERSION->PRODUCT.' ja lis�osia,<br />vanhin hyv�ksytty versio on <strong>PHP 4.3</strong>!',
	'siwebserver'		=> 'Web-palvelin',
	'siwebsphpif'		=> 'Web-palvelin - PHP rajapinta',
	'simamboversion'	=> $_VERSION->PRODUCT.' versio',
	'siuseragent'		=> 'Selaimen versio',
	'sirelevantsettings' => 'T�rke�t PHP-asetukset',
	'sisafemode'		=> 'Safe Mode',
	'sibasedir'			=> 'Open basedir',
	'sidisplayerrors'	=> 'PHP-virheet',
	'sishortopentags'	=> 'Short Open Tags',
	'sifileuploads'		=> 'Tiedostojen lataaminen palvelimelle',
	'simagicquotes'		=> 'Magic Quotes',
	'siregglobals'		=> 'Register Globals',
	'sioutputbuf'		=> 'Output Buffer',
	'sisesssavepath'	=> 'Istunnon tallennuspolku',
	'sisessautostart'	=> 'Istunnon automaattinen k�ynnistys',
	'sixmlenabled'		=> 'XML k�yt�ss�',
	'sizlibenabled'		=> 'ZLIB k�yt�ss�',
	'sidisabledfuncs'	=> 'Estetyt funktiot',
	'sieditor'			=> 'WYSIWYG-editori',
	'siconfigfile'		=> 'Asetustiedosto',
	'siphpinfo'			=> 'PHP-tiedot',
	'siphpinformation'	=> 'PHP-tiedot',
	'sipermissions'		=> 'K�ytt�oikeudet',
	'sidirperms'		=> 'Hakemiston k�ytt�oikeudet',
	'sidirpermsmess'	=> 'Jotta kaikki tuotteen toiminnot ja funktiot toimivat oikein '.$_VERSION->PRODUCT.' , seuraavien kansioihin tulee voida kirjoittaa [chmod 0777]',
	'sionoff'			=> array( 'Pois', 'P��ll�' ),
	
	'extract_warning' => "Haluatko purkaa tiedoston t�h�n hakemistoon? \\nK�yt� toimintoa varoen, sill� olemassa olevat tiedostot ylikirjoitetaan arkistotiedoston tiedostoilla.",
	'extract_success' => "Tiedoston purkaminen onnistui",
	'extract_failure' => "Purkaminen ep�onnistui",
	
	'overwrite_files' => 'Korvaa nykyiset tiedostot?',
	"viewlink"		=> "N�YT�",
	"actview"		=> "N�ytet��n tiedoston sis�lt�",
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to fun_chmod.php file
	'recurse_subdirs'	=> 'Kohdista toiminto my�s alihakemistoihin?',
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to footer.php file
	'check_version'	=> 'Tarkista viimeisin versio',
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to fun_rename.php file
	'rename_file'	=>	'Nime� tiedosto tai hakemisto...',
	'newname'		=>	'Uusi nimi',
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to fun_edit.php file
	'returndir'	=>	'Palaa hakemistoon tallentamisen j�lkeen?',
	'line'		=> 	'Rivi',
	'column'	=>	'Sarake',
	'wordwrap'	=>	'Rivit�: (vain IE)',
	'copyfile'	=>	'Kopioi tiedosto t�lle nimelle',
	
	// Bookmarks
	'quick_jump' => 'Siirry kohteeseen',
	'already_bookmarked' => 'Hakemisto on jo kirjanmerkitty',
	'bookmark_was_added' => 'Hakemisto lis�ttiin kirjanmerkkien listaan.',
	'not_a_bookmark' => 'Hakemisto ei ole kirjanmerkki.',
	'bookmark_was_removed' => 'Hakemisto poistettiin kirjanmerkkien listasta.',
	'bookmarkfile_not_writable' => "Kirjanmerkkiin liittyv� toiminto %s ep�onnistui.\n Kirjanmerkkitiedosto '%s' \n on kirjoitussuojattu.",
	
	'lbl_add_bookmark' => 'Lis�� hakemisto kirjanmerkkeihin',
	'lbl_remove_bookmark' => 'Poista hakemisto kirjanmerkkilistasta',
	
	'enter_alias_name' => 'Anna kirjanmerkin alias',
	
	'normal_compression' => 'normaali pakkaus',
	'good_compression' => 'parempi pakkaus',
	'best_compression' => 'paras pakkaus',
	'no_compression' => 'ei pakkausta',
	
	'creating_archive' => 'Luodaan arkistotiedosto ...',
	'processed_x_files' => 'K�yt� l�pi %s / %s tiedostoa',
	
	'ftp_header' => 'Paikallinen FTP-autentikointi',
	'ftp_login_lbl' => 'Anna FTP-palvelimen vaatimat kirjatumistiedot',
	'ftp_login_name' => 'FTP k�ytt�j�tunnus',
	'ftp_login_pass' => 'FTP salasana',
	'ftp_hostname_port' => 'FTP-palvelimen nimi ja portti<br />(portti on valinnainen)',
	'ftp_login_check' => 'Tarkistetaan FTP-yhteytt�...',
	'ftp_connection_failed' => "FTP-palvelimeen ei saada yhteytt�. \nTarkista ett� FTP-palvelin on toiminnassa.",
	'ftp_login_failed' => "FTP-kirjautuminen ei onnistunut. Tarkista k�ytt�j�tunnus ja salasana ja yrit� uudelleen.",
		
	'switch_file_mode' => 'Nykyinen tila: <strong>%s</strong>. Voit vaihtaa tilaan %s.',
	'symlink_target' => 'Symbolisen linkin kohde',
	
	"permchange"		=> "CHMOD-toiminto onnistui:",
	"savefile"		=> "Tiedosto tallennettiin.",
	"moveitem"		=> "Siirto onnistui.",
	"copyitem"		=> "Kopiointi onnistui.",
	'archive_name' 	=> 'Arkistotiedoston nimi',
	'archive_saveToDir' 	=> 'Tallenna arkistotiedosto t�h�n hakemistoon',
	
	'editor_simple'	=> 'Yksinkertainen editori -tila',
	'editor_syntaxhighlight'	=> 'Syntaksin korostus -tila'
);
?>