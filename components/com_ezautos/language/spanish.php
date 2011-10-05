<?php

#############################################################################
#                                                                           #
#  EZ Autos 2.0 - A Joomla/Mambo Vehicle Sales Listing component            #
#  By: Kathy Strickland (aka PixelBunyiP)                                   #
#  Copyright (C) 2006 K.J. Strickland, Raptor Developments Pty Ltd          #
#  All rights reserved                                                      #
#  http://www.raptorservices.com.au                                         #
#  Released as a commercial component!                                      #
#                                                                           #
#############################################################################

    /**** LANGUAGE FILE INFO *****************\
    **   
    **   Spanish language
    **   por: Jorge Moises (Grupo123.Net)
    **   http://www.Grupo123.Net
    **  
    \*****************************************/


defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );


// Etiquetas de lenguaje del archivo admin.ezautos.php


// Funciones mostrarVehiculo (showVehicle)

DEFINE("_EZAUTOS_LISTINGS_SORTTYPEALL","-Todos los Tipos de Vehículo-");
DEFINE("_EZAUTOS_LISTINGS_SORTMAKEALL","-Todas las Marcas de Vehículo-");
DEFINE("_EZAUTOS_LISTINGS_SORTMODELALL","-Todos los Modelos de Vehículo-");
DEFINE("_EZAUTOS_LISTINGS_SORTPRICEALL","-Todos los Rangos de Precio-");

// Funciones editarVehículo (editVehicle)

DEFINE("_EZAUTOS_TAGIT_NEW","Nuevo");
DEFINE("_EZAUTOS_TAGIT_USED","Usado");
DEFINE("_EZAUTOS_TAGIT_DEMO","Demonstrator");
DEFINE("_EZAUTOS_TAGIT_ASNEW","Como Nuevo");
DEFINE("_EZAUTOS_TAGIT_PRELUV","Pre-amo");
DEFINE("_EZAUTOS_TAGIT_SPARE","entrada de repuesto");

DEFINE("_EZAUTOS_AVAIL_AV","Disponible");
DEFINE("_EZAUTOS_AVAIL_UC","Bajo Contrato");
DEFINE("_EZAUTOS_AVAIL_SOLD","Vendido");
DEFINE("_EZAUTOS_AVAIL_OT","Otro");

DEFINE("_EZAUTOS_TRANSTYPE_NS","No especificado");
DEFINE("_EZAUTOS_TRANSTYPE_AUTO","Automatico");
DEFINE("_EZAUTOS_TRANSTYPE_MAN","Manual");

DEFINE("_EZAUTOS_DDSL_MAKE","Seleccionar Marca");
DEFINE("_EZAUTOS_DDSL_MODEL","Seleccionar Modelo");
DEFINE("_EZAUTOS_DDSL_ENGINE","Seleccionar Tamaño de Motor");
DEFINE("_EZAUTOS_DDSL_CATG","Seleccionar Categoria");
DEFINE("_EZAUTOS_DDSL_PRICE","Seleccionar Rango de Precio");
DEFINE("_EZAUTOS_DDSL_YOM","Seleccionar Rango de Edad");

DEFINE("_EZAUTOS_DDIL_SPDD1","Seleccionar Imagen 1");
DEFINE("_EZAUTOS_DDIL_SPDD2","Seleccionar Imagen 2");
DEFINE("_EZAUTOS_DDIL_SPDD3","Seleccionar Imagen 3");
DEFINE("_EZAUTOS_DDIL_SPDD4","Seleccionar Imagen 4");
DEFINE("_EZAUTOS_DDIL_SPDD5","Seleccionar Imagen 5");
DEFINE("_EZAUTOS_DDIL_SPDD6","Seleccionar Imagen 6");

// Acerca de EZ Autos pagina de información

DEFINE("_EZAUTOS_ABOUT_ABOUTTITLE","Acerca de EZ Autos");
DEFINE("_EZAUTOS_ABOUT_ABOUTCONTENT","<p>Welcome to EZ Autos - a simple vehicle listing component for Mambo/Joomla! 
content management systems.&nbsp; EZ Autos comes with a huge list of features 
to make your listings look great - and it's all very configurable via the admin 
backend.</p>
<p><b>Main EZ Autos features include:-</b></p>
<ul>
	<li>Category support - eg. list vehicles by vehicle types such as &quot;luxury&quot;, 
	&quot;vans&quot;, &quot;4x4 off-road&quot;, &quot;sedans&quot; etc.&nbsp; 
	You're only limited by your imagination.</li>
	<li>Secondary categorization of vehicles by engine size, make, model, date 
	of manufacture age range and price bracket for 
	search purposes etc.</li>
	<li>Configure image/thumbnail widths to fit your template width.</li>
	<li>Display up to 6 vehicle images reduced to thumbnail size, which are 
	then previewed by hovering the mouse over each thumbnail.</li>
	<li>All vehicle thumbnail previews can also be opened up to full 
	image size in a new window.</li>
	<li>RSS feed so prospective buyers can download your latest vehicle listings 
	to their email or desktop.</li>
	<li>Leads management so you can collect prospective buyer information such 
	as vehicle type.</li>
	<li>Recommend vehicle to friend email feature.</li>
	<li>Request more vehicle information email feature.</li>
	<li>Dual search options - simple search by keyword, or advanced search using 
	filters.</li>
	<li>Style sheet support to get the look you want.</li>
	<li>Javascript roll-over box colours.</li>
	<li>Multiple ways to upload your images - use FTP, the built-in image/zip 
	archive uploader, 
	a pop-up single image uploader window or Mambo/Joomla!'s built in media 
	manager.</li>
	<li>Approximately 99.99% of EZ Autos is coded for language support - so you're 
	able to modify much of the static output or have it translated into another 
	language.</li>
	<li>Show off your sales prowess - assign the &quot;availability&quot; status of a 
	vehicle rather than just unpublishing them.</li>
</ul>
<p>After installing EZ Autos, click the &quot;components&quot; button on the top admin 
menu, which will show your EZ Autos button in the drop-down list, and when this is clicked - the 
&quot;Manage Vehicle Listings&quot; page will open.&nbsp; This is the &quot;hub&quot; of your EZ 
Autos admin area - and as your major task will be managing vehicle entries - 
buttons leading to &quot;support activities&quot; are located here for easy access.</p>
<p><b>Overview of Settings and Support Activities:-</b></p>
<table border='0' width='100%' cellspacing='5' cellpadding='5' id='table1'>
	<tr>
		<td width='70' valign='top'>
		<img border='0' src='components/com_ezautos/images/admin6a.png' width='60' height='60' hspace='0'></td>
		<td valign='top'>The &quot;Vehicle Category&quot; manager is where you define the 
		categories under which you list vehicles for sale.&nbsp; This is your 
		primary method of categorization, and common choices include:- &quot;Luxury 
		Vehicles&quot;, &quot;Sports Vehicles&quot;, &quot;Sedans&quot;, &quot;Station 
		Wagons&quot;, 
		&quot;4x4 Off-Road&quot;, &quot;Utilities&quot;, &quot;Compacts&quot; etc.&nbsp; It's your 
		choice - and you're only limited by your imagination and vehicle 
		listings.&nbsp; When defining your vehicle categories, give it a name, 
		include a short description, assign access rights, Seleccionar it's order and 
		decide on an image representative of the category.&nbsp; Images are 
		optional.&nbsp; Once you've finished entering in the category details, 
		press the &quot;save&quot; button in the top left corner of the screen.&nbsp; This 
		will save the details to database, then you need to &quot;publish&quot; the 
		category before being able to use it elsewhere on the site.&nbsp; Once 
		saved and published, the categories you've created will appear in 
		&quot;drop-down&quot; Seleccionarion boxes on the &quot;Add/Edit Vehicle Details&quot; page, 
		show up on the front-end as a category containing vehicle listings as 
		well as on the search page as a variable you can filter vehicles by.</td>
	</tr>
	<tr>
		<td width='70' valign='top'>
		<img border='0' src='components/com_ezautos/images/admin9a.png' width='60' height='60'></td>
		<td valign='top'>The &quot;Vehicle Make&quot; manager is where you define the names of 
		a vehicles particular &quot;make&quot; - eg. Toyota, Volkswagen etc.&nbsp; Once created 
		and published, these will then appear in the &quot;drop-down&quot; Seleccionarion box 
		on the &quot;Add/Edit Vehicle Details&quot; page and in the front-end on the 
		search page as a variable you can filter vehicles by.</td>
	</tr>
	<tr>
		<td width='70' valign='top'>
		<img border='0' src='components/com_ezautos/images/admin1a.png' width='60' height='60'></td>
		<td valign='top'>The &quot;Vehicle Model&quot; manager is where you define 
		the names of various &quot;models&quot; associated with the vehicle &quot;makes&quot; - eg. 
		&quot;Prado&quot; is a particular model associated with &quot;Toyota&quot;, and &quot;Golf&quot; is a 
		model associated with &quot;Volkswagen&quot;.&nbsp; 
		Once created and published, these will also appear in the &quot;drop-down&quot; 
		Seleccionarion box on the &quot;Add/Edit Vehicle Details&quot; page and in the 
		front-end on the search page as a variable you can filter vehicles by.</td>
	</tr>
	<tr>
		<td width='70' valign='top'>
		<img border='0' src='components/com_ezautos/images/admin2a.png' width='60' height='60'></td>
		<td valign='top'>The &quot;Engine Size&quot; manager is where you define the range 
		of engine sizes used in your vehicle listings - eg. 1.6 lt, V6 - 
		whatever the standard understanding is in your part of the world.&nbsp; 
		Once created, you need to publish it - and then it will be available in 
		the &quot;drop-down&quot; Seleccionarion box in the &quot;Add/Edit Vehicle Details&quot; page and 
		in the front-end on the search page as a variable you can filter 
		vehicles by.</td>
	</tr>
	<tr>
		<td width='70' valign='top'>
		<img border='0' src='components/com_ezautos/images/admin3a.png' width='60' height='60'></td>
		<td valign='top'>EZ Autos image uploader is deceptively simple - upload 
		a single image in .bmp, .jpg, .gif or .png format or upload a zipped 
		archive that contains image files.&nbsp; You also have other image 
		upload options available - upload via FTP, use the Mambo/Joomla! media 
		manager, or use the pop-up single image file uploader located on the 
		main &quot;Vehicle Listings&quot; page or the &quot;Category Manager&quot; page.&nbsp; 
		Running vehicle listings means you'll have a lot of images - so it's 
		important to read the information on image management detailed below.&nbsp; 
		This information covers aspects such as naming conventions, ordering, 
		zipping, error checking and limitations you must be aware of.</td>
	</tr>
	<tr>
		<td width='70' valign='top'>
		<img border='0' src='components/com_ezautos/images/admin5a.png' width='60' height='60'></td>
		<td valign='top'>The &quot;Vehicle Price Range&quot; manager is where you create 
		the various price ranges of vehicle listings.&nbsp; While vehicle 
		details may have a specific value defined, the price range gives your 
		site visitors a means to search for vehicles within a certain upper 
		and lower price range.&nbsp; The size of these values depends on how 
		narrow you want the search filter to be, and the range of prices you 
		have vehicles listed at.&nbsp; Examples of these include 0 - 4,999 
		and 5,000 - 9,999 etc</td>
	</tr>
	<tr>
		<td width='70' valign='top'>
		<img border='0' src='components/com_ezautos/images/admin8a.png' width='60' height='60'></td>
		<td valign='top'>The &quot;Year of Manufacture&quot; manager is where you define 
		a vehicle's year of manufacture - or age range.&nbsp; You can do this 
		one of two ways:- 1) enter each year in as a separate value, or 2) enter 
		a number range, eg. 2000 - 2004.&nbsp; These values have not been 
		pre-defined - as the type of stock carried by a car dealer varies.&nbsp; 
		Once created, you need to publish it - and then it will be available in 
		the &quot;drop-down&quot; Seleccionarion box in the &quot;Add/Edit Vehicle Details&quot; page and 
		in the front-end on the search page as a variable you can filter 
		vehicles by.</td>
	</tr>
	<tr>
		<td width='70' valign='top'>
		<img border='0' src='components/com_ezautos/images/admin10a.png' width='60' height='60'></td>
		<td valign='top'>&quot;Leads Management&quot; is where you can record the 
		vehicle requirements of prospective buyers, and visitors to your web 
		site can also submit their details via a front-end form.&nbsp; As a new 
		feature, Leads Management still has further development to undergo in 
		terms of automatic search/match ability - however various filters are 
		available to help match buyers to vehicles.&nbsp; Simply filter leads 
		based on the available vehicle parameters, then filter the vehicles 
		based on similar parameters (eg. vehicle type, make/model and price 
		range).&nbsp; This will produce a list of vehicles that meet the 
		general requirements for a list of potential buyers.&nbsp; From there 
		it's all up to your sales ability.</td>
	</tr>
	<tr>
		<td width='70' valign='top'>
		<img border='0' src='components/com_ezautos/images/admin7a.png' width='60' height='60'></td>
		<td valign='top'>The &quot;Configuration Settings&quot; manager is where you set a 
		number of configurable variables that influence how the front-end works, as well as 
		how certain things display.&nbsp; It's divided into 2 tabs :- business details and 
		page layout.&nbsp; Each of these 
		settings has a short explanation, so it's not necessary to repeat each 
		here.&nbsp; When first using EZ Autos, it's always a good idea to 
		begin with the standard template and settings to see how things appear - 
		then experiment with these settings to find what's right for your business 
		and site design.</td>
	</tr>
	<tr>
		<td width='70' valign='top'>
		<img border='0' src='components/com_ezautos/images/admin4a.png' width='60' height='60'></td>
		<td valign='top'>The &quot;Help&quot; page is what you're reading now, and it's 
		designed to give you an overview of what does what, where things are, 
		and how EZ Autos works.</td>
	</tr>
</table>
<p><br>
<b>Managing your vehicle images:-</b></p>
<p>Vehicle images are stored in the images/stories directory, and running 
vehicle listings means you'll have a lot of images - so it's important 
to be organized right from the start.&nbsp; Here are some tips to help.</p>
<p><i>1.&nbsp; Adopt a consistent naming convention:-</i></p>
<p>As all images are stored in one directory, and vehicle listings may have up 
to 6 images - this adds up to a lot of images to scroll through when adding 
your vehicle details.&nbsp; It's for this reason that it's important to adopt a 
naming convention, although such a practice also has other benefits - eg. it's 
easier to identify images for deletion and avoids problems when uploading images 
in zipped archives.&nbsp; So, how does one Seleccionar a consistent naming 
convention?&nbsp; Well, one way is to have a 3-part image name - eg. the first 
part consists of the vehicle reference number (registration number etc), the next part is a number from 
1-6 (depending on how many images the vehicle has) and the final part of the 
image name is its file extension (.jpg, .png, .gif etc).&nbsp; Putting this into 
practice, if your vehicle registration number was AAA957 and you had 3 images for 
this vehicle in .jpg format, the images would be named as follows:- 
AAA957_1.jpg, AAA957_2.jpg, AAA957_3.jpg.</p>
<p><i>2.&nbsp; Plan the order of image display:-</i></p>
<p>When naming vehicle images, give some thought to the order in which you want 
to display them.&nbsp; This will make your job quicker when it comes to 
Seleccionaring images when adding a vehicle listing to your site.&nbsp; The image 
assigned to position 1 is always the main display image - it is the image that 
appears in thumbnail size on the vehicle category listing page, new listings 
page, search results page and it's the first large image displayed on the full 
vehicle details page - so this should be the best overall image of the 
vehicle.</p>
<p><i>3.&nbsp; Zip your images the correct way:-</i></p>
<p>Use a program such a
<a target='_blank' href='http://www.winzip.com'>WinZip</a> to create your zipped 
image archives - they're really easy to do.&nbsp; As EZ Autos images are 
uploaded to and Seleccionared from the images/stories directory, there is a correct way to zip multiple 
image files.&nbsp; Highlight the images to be zipped, then right-click them.&nbsp; 
When the pop-up task window opens, move the mouse down to &quot;Add to Winzip&quot;, then 
Seleccionar &quot;Add to Zip File&quot;.&nbsp; When the &quot;Add&quot; window opens, click the &quot;New&quot; 
button, give it a file name, click &quot;OK&quot;, and then click the &quot;Add&quot; button.&nbsp; 
This will add all of the highlighted images to a zip file which you can now 
upload using EZ Autos uploader.&nbsp; EZ Autos will unzip the archive and 
deposit the images in the images/stories directory.&nbsp; The <u>incorrect</u> 
way to zip multiple images is to zip a directory/folder of images, as this will 
result in that directory being created within the images/stories directory path.&nbsp; 
Your images will then be inaccessible to EZ Autos drop-down image Seleccionaror until you move them into the 
images/stories directory using either the Mambo/Joomla! media manager or FTP 
access.</p>
<p><i>4.&nbsp; Important things to know about EZ Autos image/archive uploader:-</i></p>
<p>EZ Autos image/archive uploader has a number of built-in error-checking 
functions, and it's important that you understand what the uploader will/will 
not check for.&nbsp; In general, the uploader is coded to allow .jpg, .gif, .png, 
.bmp 
and .zip files to be uploaded.&nbsp; Files without these extensions will 
generate an error notice, and will not be uploaded.&nbsp; If you use images in a 
different file format, upload them in a zipped archive.&nbsp; Duplicate image 
names are a potential problem, and EZ Autos will check for duplicate names when 
single images are uploaded.&nbsp; As of version 2 - images contained in zipped 
archives are renamed based on a &quot;generic zip title&quot;, the number of images 
contained in the zip file and an MD5 microtime() number sequence.&nbsp; This 
ensures duplicate names are avoided, and allows you to assign a meaningful name 
to the images - which helps match images to listings.&nbsp; Images renamed to 
contain an MD5 microtime() number sequence are long image names - which is why a 
meaningful generic name is assigned at the beginning of the file name.</p>
<p><i>5.&nbsp; Making the most of EZ Autos slick front-end image display:-</i></p>
<p>EZ Autos front-end image display uses roll-over javascript images to give 
your vehicle images the professional edge in terms of display aesthetics and 
download times.&nbsp; Images are displayed in thumbnail size, with a single 
larger image preview located above.&nbsp; Move your mouse over the thumbnails, 
and the larger image display above changes.&nbsp; Making the most of this professional display format does 
require some image preparation though.&nbsp; In order to achieve a consistent front-end image display, it's necessary for 
vehicle images to be all the same size - eg. 600x450 pixels or whatever 
dimensions you choose.&nbsp; While image 
width is set via the configuration area to enable resizing to fit your template, 
any differences in image height will be very noticeable when hovering your mouse 
over thumbnails to view the larger image display.&nbsp; Should this explanation 
be unclear - use different image sizes for a vehicle listing and see the 
results.</p>
<p><b>Creating your vehicle listing:-</b></p>
<p>Before you start entering information for your first vehicle listing, you need 
to prepare your settings, support information and upload the necessary images.&nbsp; Once you've 
done this, it's time to create 
the actual listing in the &quot;Manage Vehicle Listings&quot; area.</p>
<p>Click 
the &quot;new&quot; button in the top right-hand corner.&nbsp; The add/edit 
vehicle 
listing area is a 3 tabbed page containing vehicle specifications, marketing 
info and vehicle images.&nbsp; This is where much of the 
previous information set up (eg. vehicle types, engine size, year of manufacture 
age range etc) will be put to use to save repetitive data entry.&nbsp; It's also 
where you'll find drop-down Seleccionarion boxes to choose the necessary vehicle 
images uploaded previously.&nbsp; Once the information has been entered, save 
it, publish it and check it out in the front-end.</p>
<p>EZ Autos vehicle listing has both required and optional fields, as well 
as fields that could be considered a 'forced choice'.&nbsp; You'll 
find helpful tips throughout this area, to let you know what the required and 
optional fields are - as well as other helpful information.</p>
<p><b>Front-end page output:-</b></p>
<p>The front-end display of EZ Autos is optimized for a 2-column 800 pixel-wide 
template that has a main content area of at least 595 pixels wide.&nbsp; You can 
also define custom HTML output via the EZ Autos configuration area, which will 
allow you to display your business logo/sales team representatives etc below the 
images on the full vehicle details page.</p>
<p><b>Bonus modules and design template:-</b></p>
<p>EZ Autos also has a number of modules available - Latest Listings, Featured 
Listing, Random Vehicle Listing, and a Loan Calculator.&nbsp; These all combine to provide you with 
a quick and easy solution for your vehicle sales site.&nbsp; EZ Autos also comes 
with a 2-column, center-aligned, 850-pixel wide template (along with its 
original PhotoShop file for editing purposes) suitable for use with either Mambo 
or Joomla!&nbsp; It's coded to display your site name and the following module 
positions:- left, right, user1, user2, banner, top, footer - and the main 
content area.&nbsp; If the pre-defined graphic link buttons are suitable - the 
only thing left to do is edit their dummy hyperlinks in the index.php file.</p>
");

// area de configuración 

DEFINE("_EZAUTOS_CONFIG_TITLE","Administrador Parametros de Configuración");

DEFINE("_EZAUTOS_CONFIG_BIZ1","Negocio");
DEFINE("_EZAUTOS_CONFIG_BIZ2","Negocio-parametros");
DEFINE("_EZAUTOS_CONFIG_LAY1","Estructura");
DEFINE("_EZAUTOS_CONFIG_LAY2","estructura-sitio");
DEFINE("_EZAUTOS_CONFIG_IMAGESIZES","Tamaños De Imagen");

DEFINE("_EZAUTOS_CONFIG_YOURBIZSET","Sus parametros de Negocio");
DEFINE("_EZAUTOS_CONFIG_BIZNAME","Nombre de Negocio");
DEFINE("_EZAUTOS_CONFIG_BIZNAMEDESC","El nombre de su negocio de ventas automotriz mostrado en el encabezado del componente y la página de impresión.");
DEFINE("_EZAUTOS_CONFIG_BIZAD","Dirección de Negocio");
DEFINE("_EZAUTOS_CONFIG_BIZADDESC","Su dirección de negocio.  Esto aparece en el encabezado de la página de impresión así que los prospectos compradores tienen un expediente de usted.");
DEFINE("_EZAUTOS_CONFIG_TELEPHONE","Teléfono del contacto");
DEFINE("_EZAUTOS_CONFIG_TELEPHONEDESC","Su número de teléfono del contacto mostrado en la página de impresión.");
DEFINE("_EZAUTOS_CONFIG_EMAIL","Dirección de Email");
DEFINE("_EZAUTOS_CONFIG_EMAILDESC","Dirección de Email a utilizar con las formas de contacto y solicitud de listas de correo.");
DEFINE("_EZAUTOS_CONFIG_CURRENCYSIGN","Signo de Moneda");
DEFINE("_EZAUTOS_CONFIG_CURRENCYSIGNDESC","El signo de moneda  que se mostrara antes de los precios del vehiculo.");
DEFINE("_EZAUTOS_CONFIG_BIZINTRO","Introducción del Negocio");
DEFINE("_EZAUTOS_CONFIG_BIZINTRODESC","Texto introductorio sobre <br />su negocio de ventas automotriz.");
DEFINE("_EZAUTOS_CONFIG_BIZLOGO","HTML Personalizado");
DEFINE("_EZAUTOS_CONFIG_BIZLOGODESC","Use esta área para agregar HTML<br />Personalizado para mostrar el detalle<br />de la pagina del vehiculo. Este mensaje<br />aparecerá debajo de las imagenes<br /> del vehículo, y pueden ser cosas<br />como el logo de tu negocio, etc.");

DEFINE("_EZAUTOS_CONFIG_WIDTHMAINIMG","Anchura de la Imagen Principal");
DEFINE("_EZAUTOS_CONFIG_WIDTHMAINIMGDESC","La anchura de la imagen principal del vehículo cuando es vista en la página de detalle del vehículo.  Se expresa en píxeles para ayudar que entre la imagen dentro de su plantilla.  Se ajustara la medida de las imágenes al tamaño a esta anchura");
DEFINE("_EZAUTOS_CONFIG_WIDTHCATTHUMB","Anchura de Thumbnail de Categoría");
DEFINE("_EZAUTOS_CONFIG_WIDTHCATTHUMBDESC","Anchura de la imagen thumbnail principal del vehículo cuando es visto en la categoría del listado del vehículo.");
DEFINE("_EZAUTOS_CONFIG_WIDTHVEHTHUMB","Anchura de Thumbnail de Vehículo");
DEFINE("_EZAUTOS_CONFIG_WIDTHVEHTHUMBDESC","La anchura de las imágenes thumbnail del vehículo cuando es vista en la página del detalle del vehículo.");

DEFINE("_EZAUTOS_CONFIG_NUMBERSETTINGS","Parámetros de número de páginas");
DEFINE("_EZAUTOS_CONFIG_VEHPERPAGE","Vehículos por pagina");
DEFINE("_EZAUTOS_CONFIG_VEHPERPAGEDESC","Número de vehículos a mostrar por página para los usuarios (front-end)");
DEFINE("_EZAUTOS_CONFIG_NEWLIST","Nueva lista de vehículos");
DEFINE("_EZAUTOS_CONFIG_NEWLISTDESC","Número de vehículos a listar en la página de 'Nuevos listados’.  Esta figura también para definir cuántos va a mostrar en RSS Feed.");

DEFINE("_EZAUTOS_CONFIG_CUSTLINKS","Ligas del Cliente");
DEFINE("_EZAUTOS_CONFIG_RECFRIEND","Recomiende el Vehículo");
DEFINE("_EZAUTOS_CONFIG_RECFRIENDDESC","¿Usted desea permitir que los visitantes utilicen la característica \"recomiende el vehículo a un amigo\"?");
DEFINE("_EZAUTOS_CONFIG_VEHENQ"," Liga de Investigue sobre vehículo");
DEFINE("_EZAUTOS_CONFIG_VEHENQDESC","¿Usted desea mostrar la liga de email \"Investigue sobre vehículo\"?");
DEFINE("_EZAUTOS_CONFIG_MAILINGVIEW","Liga para agregar a lista de correos");
DEFINE("_EZAUTOS_CONFIG_MAILINGDESC","¿Usted desea mostrar la liga de email \"agregar a lista de correos\"? Esto permite que los visitantes le envíen un email automático y usted entonces agrega los detalles contenidos a su administrador de lista de correos.");
DEFINE("_EZAUTOS_CONFIG_RSS","RSS Feed");
DEFINE("_EZAUTOS_CONFIG_RSSDESC","¿Usted desea mostrar la liga RSS feed de sus listados de vehículo mas recientes?");
DEFINE("_EZAUTOS_CONFIG_LEAD","Necesidades de Compradores");
DEFINE("_EZAUTOS_CONFIG_LEADDESC","¿usted quiere permitir que los visitantes coloquen sus requisitos de vehículo con usted?");

DEFINE("_EZAUTOS_CONFIG_ERROR","¡Archivo de configuración no gravable!  Asigne por favor los permisos correctos al archivo e intente otra vez.");


// Etiquetas de lenguaje admin.ezautos.html.php 

// Administre la página de listados de vehículos

DEFINE("_EZAUTOS_LISTINGS_TITLE","Administre listados de vehículos ");
DEFINE("_EZAUTOS_LISTINGS_DISPLAYNUM","Mostrar #");
DEFINE("_EZAUTOS_LISTINGS_FILTER","Filtrar por:-");
DEFINE("_EZAUTOS_LISTINGS_REGID","Rego #");
DEFINE("_EZAUTOS_LISTINGS_CATG","Categoría de Vehículo");
DEFINE("_EZAUTOS_LISTINGS_MM","Marca/Modelo");
DEFINE("_EZAUTOS_LISTINGS_PRICE","Precio de Lista");
DEFINE("_EZAUTOS_LISTINGS_AV","Disponibilidad");
DEFINE("_EZAUTOS_LISTINGS_HITS","Hits");
DEFINE("_EZAUTOS_LISTINGS_DATE","Fecha Listado");
DEFINE("_EZAUTOS_LISTINGS_UPDATE","Ultima Actualización");

// Agergar/editar pagina detelles de vehículos

DEFINE("_EZAUTOS_VLDET_SPECS1","Especificaciones");
DEFINE("_EZAUTOS_VLDET_SPECS2","vehículo-especificaciones");
DEFINE("_EZAUTOS_VLDET_FEAT1","Características");
DEFINE("_EZAUTOS_VLDET_FEAT2","vehículo-características ");
DEFINE("_EZAUTOS_VLDET_MKTG1","Comercialización");
DEFINE("_EZAUTOS_VLDET_MKTG2","vehículo-comercialización");
DEFINE("_EZAUTOS_VLDET_IMG1","Imagenes");
DEFINE("_EZAUTOS_VLDET_IMG2","vehículo-imagenes");


DEFINE("_EZAUTOS_VLDET_TITLE","Listado de Vehículos");
DEFINE("_EZAUTOS_VLDET_REG","Registro #");
DEFINE("_EZAUTOS_VLDET_AV","Disponibilidad");
DEFINE("_EZAUTOS_VLDET_YOM","Año de fabricación");
DEFINE("_EZAUTOS_VLDET_CATG","Categoria");
DEFINE("_EZAUTOS_VLDET_MAKE","Marca");
DEFINE("_EZAUTOS_VLDET_MODEL","Modelo");
DEFINE("_EZAUTOS_VLDET_ENG","Tamaño de motor");
DEFINE("_EZAUTOS_VLDET_TRANS","Transmisión");
DEFINE("_EZAUTOS_VLDET_PRICE","Precio de vehículo");
DEFINE("_EZAUTOS_VLDET_MILEAGE","Millas");
DEFINE("_EZAUTOS_VLDET_COLOUR","Color");
DEFINE("_EZAUTOS_VLDET_TAG","Condición ");
DEFINE("_EZAUTOS_VLDET_LDATE","Fecha de listado");
DEFINE("_EZAUTOS_VLDET_SDESC","Descripción corta");
DEFINE("_EZAUTOS_VLDET_SDESCMAX","255 caracteres max<br />aparece sobre las<br />fotografías del vehículo");
DEFINE("_EZAUTOS_VLDET_LDESC","Descripción larga");
DEFINE("_EZAUTOS_VLDET_LDESCMAX","opcional <br />aparece debajo de las<br />fotografías del vehículo");


DEFINE("_EZAUTOS_VLDET_ADDFEAT","Características adicionales");
DEFINE("_EZAUTOS_VLDET_AIRCO","Aire acondicionado");
DEFINE("_EZAUTOS_VLDET_POWIN","Ventanas electricas");
DEFINE("_EZAUTOS_VLDET_POSTEER","Dirección hidráulica");
DEFINE("_EZAUTOS_VLDET_CC","Control de la travesía");
DEFINE("_EZAUTOS_VLDET_AIRBAGS","Bolsas de Aire");
DEFINE("_EZAUTOS_VLDET_ALBS","Sistema de Frenos AntiLock");
DEFINE("_EZAUTOS_VLDET_AMFM","Radio AM/FM");
DEFINE("_EZAUTOS_VLDET_CDP","Lector de CD's");
DEFINE("_EZAUTOS_VLDET_ATS","Sistema contra-robos");
DEFINE("_EZAUTOS_VLDET_TS","Tilt steering");

DEFINE("_EZAUTOS_VLDET_CUSTFEAT","<strong>Opciones del Cliente:</strong><br />Éstos pueden variar para <br />cada carro, y<br />deje el espacio en blanco de nombres<br />si no se necesitan.");




DEFINE("_EZAUTOS_VLDET_SPI","Seleccionar Imagenes de Vehículo");
DEFINE("_EZAUTOS_VLDET_SELPIC1","Vehículo imagen 1");
DEFINE("_EZAUTOS_VLDET_SELPIC2","Vehículo imagen 2");
DEFINE("_EZAUTOS_VLDET_SELPIC3","Vehículo imagen 3");
DEFINE("_EZAUTOS_VLDET_SELPIC4","Vehículo imagen 4");
DEFINE("_EZAUTOS_VLDET_SELPIC5","Vehículo imagen 5");
DEFINE("_EZAUTOS_VLDET_SELPIC6","Vehículo imagen 6");
DEFINE("_EZAUTOS_VLDET_PREVPIC1","Vehículo imagen 1 vista previa");
DEFINE("_EZAUTOS_VLDET_PREVPIC2","Vehículo imagen 2 vista previa");
DEFINE("_EZAUTOS_VLDET_PREVPIC3","Vehículo imagen 3 vista previa");
DEFINE("_EZAUTOS_VLDET_PREVPIC4","Vehículo imagen 4 vista previa");
DEFINE("_EZAUTOS_VLDET_PREVPIC5","Vehículo imagen 5 vista previa");
DEFINE("_EZAUTOS_VLDET_PREVPIC6","Vehículo imagen 6 vista previa");

DEFINE("_EZAUTOS_VLDET_ERROR1","Usted debe incluir un número de registro, o valor tal como n/r");
DEFINE("_EZAUTOS_VLDET_ERROR2","Usted debe incluir un año de fabricación");
DEFINE("_EZAUTOS_VLDET_ERROR3","Usted debe incluir un rango de la edad");
DEFINE("_EZAUTOS_VLDET_ERROR4","Usted debe definir una categoría");
DEFINE("_EZAUTOS_VLDET_ERROR5","Usted debe definir la marca del vehículo");
DEFINE("_EZAUTOS_VLDET_ERROR6","Usted debe definir el modelo vehículo");
DEFINE("_EZAUTOS_VLDET_ERROR7","Usted debe especificar un tamaño del motor");
DEFINE("_EZAUTOS_VLDET_ERROR8","Usted debe especificar un tipo de transmisión");
DEFINE("_EZAUTOS_VLDET_ERROR9","Usted debe incluir un precio de venta");
DEFINE("_EZAUTOS_VLDET_ERROR10","Usted debe asignar un rango de precio");
DEFINE("_EZAUTOS_VLDET_ERROR11","Usted debe escribir una descripción corta");
DEFINE("_EZAUTOS_VLDET_ERROR12","Usted debe incluir por lo menos 1 imagen en la primera posición");
DEFINE("_EZAUTOS_VLDET_ERROR13","Usted debe definir el millaje del vehículo");
DEFINE("_EZAUTOS_VLDET_ERROR14","Usted debe definir el color del vehículo");

// administre la página de la categoría del vehículo 

DEFINE("_EZAUTOS_CATEGORY_PAGETITLE","Administrador de Categorías de Vehículo");
DEFINE("_EZAUTOS_CATEGORY_CATNAME","Categoría");
DEFINE("_EZAUTOS_CATEGORY_ACCLEVEL","Acceso");
DEFINE("_EZAUTOS_CATEGORY_MAIN","Vehículo Categoría");
DEFINE("_EZAUTOS_CATEGORY_DEFTITLE","Titulo");
DEFINE("_EZAUTOS_CATEGORY_DEFCONTENT","Descripción");
DEFINE("_EZAUTOS_CATEGORY_DEFACCESS","Acceso");
DEFINE("_EZAUTOS_CATEGORY_IMAGE","Categoría Imagen");
DEFINE("_EZAUTOS_CATEGORY_IMAGESEL","Categoría Imagen Seleccionar");
DEFINE("_EZAUTOS_CATEGORY_ERROR1","Categoría debe tener un título");

// administe las páginas de marcas de vehículo

DEFINE("_EZAUTOS_MAKE_TITLE","Administre vehículo marca buscar/Seleccionar Lista");
DEFINE("_EZAUTOS_MAKE_MAKE","Vehículo Marca");
DEFINE("_EZAUTOS_MAKE_STITLE","vehículo marca buscar/Seleccionar artículo de la lista");
DEFINE("_EZAUTOS_MAKE_NAME","Nombre de marca de vehículo");
DEFINE("_EZAUTOS_MAKE_ERROR1","Usted debe incorporar el nombre de una marca de vehículo");

// administre las páginas modelo de vehículo 

DEFINE("_EZAUTOS_MODEL_TITLE","Administre vehículo modelo buscar/Seleccionar Lista");
DEFINE("_EZAUTOS_MODEL_MODEL","Vehículo Modelo");
DEFINE("_EZAUTOS_MODEL_STITLE","vehículo modelo buscar/Seleccionar artículo de la lista");
DEFINE("_EZAUTOS_MODEL_NAME","Nombre de modelo de vehículo");
DEFINE("_EZAUTOS_MODEL_ERROR1","Usted debe incorporar el nombre de un modelo de vehículo");

// dministre las páginas tamaño de motor de vehículo 

DEFINE("_EZAUTOS_ENGINE_TITLE","Administre vehículo tamaño de motor buscar/Seleccionar Lista");
DEFINE("_EZAUTOS_ENGINE_ENGINE","Tamaño De Motor");
DEFINE("_EZAUTOS_ENGINE_STITLE","tamaño de motor buscar/Seleccionar artículo de la lista");
DEFINE("_EZAUTOS_ENGINE_NAME","Nombre de tamaño de motor");
DEFINE("_EZAUTOS_ENGINE_ERROR1","Usted debe incorporar el tamaño del motor");

// administre las páginas del año de fabricación rango de edad 

DEFINE("_EZAUTOS_YOMR_TITLE","Administre vehículo año de fabricación rango de edad buscar/Seleccionar Lista");
DEFINE("_EZAUTOS_YOMR_YOMR","Rango de Edad");
DEFINE("_EZAUTOS_YOMR_STITLE","año de fabricación buscar/Seleccionar artículo de la lista");
DEFINE("_EZAUTOS_YOMR_NAME","Año de fabricación rango de edad");
DEFINE("_EZAUTOS_YOMR_ERROR1","Usted debe incorporar el Año de fabricación rango de edad");

// administre las páginas de rango de precio del vehículo 

DEFINE("_EZAUTOS_PRANGE_TITLE","Administre vehículo rango de precio buscar/Seleccionar Lista");
DEFINE("_EZAUTOS_PRANGE_PRANGE","Rango de Precio");
DEFINE("_EZAUTOS_PRANGE_STITLE","rango de precio buscar/Seleccionar artículo de la lista");
DEFINE("_EZAUTOS_PRANGE_NAME","Rango de Precio");
DEFINE("_EZAUTOS_PRANGE_ERROR1","Usted debe incorporar un rango de precio");

// Image and zip archive upload page

DEFINE("_EZAUTOS_UPLOAD_PICUPTITLE","Subir Imagenes de Vehículo");
DEFINE("_EZAUTOS_UPLOAD_PICUP","Subir");
DEFINE("_EZAUTOS_UPLOAD_INFO1","<strong>Lea por favor la información siguiente sobre el manejo de sus archivo subidos.</strong>");
DEFINE("_EZAUTOS_UPLOAD_INFO2","<ul>
								<li>Todos los archivos se suben en el directorio de images/stories.</li>
								<li>Usted puede subir archivos individuales de la imagen de gif, de jpg, de bmp y de png, o elija subir un archivo comprimido del archivo que contiene archivos de imagen múltiples.</li>
								<li>NO VAYA A comprimir una carpeta de imágenes - simplemente seleccione las imágenes entonces las comprime antes de subirlas.  Esto asegurará que las imágenes se subiran y se extraeran en el directorio de images/stories - en vez de dentro de otro subdirectorio. </li>
								<li>Subir una imagen - Los nombres de archivos duplicados serán detectados y el Subir la imagen será abortado.</li>
								<li>Subir archivos comprimidos (Zipped)- los archivos de imagen 
								se asignan un nuevo nombre basado en  &quot;Título Genérico de Proceso 
								&quot;, el numero de archivos, y el  MD5 microtime() sequencia de 
								numeros.&nbsp; Esto asegura toda los archjivos de imagen subidas
								tenga un nombre del archivo único, y que usted  
								pueda asignar un identificador significativo que forma 
								la primera parte del nombre del archivo - imágenes que 
								sean encontrados a los listados debe ser más fácil .</li>
							</ul>");
DEFINE("_EZAUTOS_UPLOAD_INFO3","<br /><br /><strong><font color='#FF0000'>Su archivo de configuración de php no permite subir el archivo.  Entre en contacto por favor con su administrado de red sobre esto .</font></strong><br /><br />");

DEFINE("_EZAUTOS_UPLOAD_FORM1","Método  1 - Subir solo un archivo de imagen:-");
DEFINE("_EZAUTOS_UPLOAD_FORM2","Localizar el archivo de imagen .jpg, .gif, .png o .bmp ");
DEFINE("_EZAUTOS_UPLOAD_FORM3","Método  2 - Subir un archivo comprimido de archivos de imagenes:-");
DEFINE("_EZAUTOS_UPLOAD_FORM4","Localizar el archivo comprimido de archivos de imagenes");
DEFINE("_EZAUTOS_UPLOAD_FORM5","Asiganr un Titulo Generico al Proceso");

DEFINE("_EZAUTOS_UPLOAD_ERR1","Error al Subir - ¡Ningún Archivo Seleccionado!");
DEFINE("_EZAUTOS_UPLOAD_ERR2","FALLO Subir - Solamente archivos .bmp, .jpg, .gif y .png pueden subirse!");
DEFINE("_EZAUTOS_UPLOAD_SUCCESS","Extracción de archivo exitoso");
DEFINE("_EZAUTOS_UPLOAD_ERR5","FALLO Subir. ¡Archivo ya existe!");
DEFINE("_EZAUTOS_UPLOAD_ERR6","¡FALLO Subir!");
DEFINE("_EZAUTOS_UPLOAD_ERR7","FALLO Subir - ¡tu archivo comprimido (zip) es muy grande - hagalo más pequeño con pocas imágenes!");
DEFINE("_EZAUTOS_UPLOAD_COMPLETE","Subir Completo!");


// Administrar lista de solicitudes

DEFINE("_EZAUTOS_LEADS_LNAME","Nombre");
DEFINE("_EZAUTOS_LEADS_LEMAIL","Email");
DEFINE("_EZAUTOS_LEADS_AR","Agrega/Fecha de Revisión");
DEFINE("_EZAUTOS_LEADS_CAT","Categoría de Vehículo");
DEFINE("_EZAUTOS_LEADS_MAK","Marca");
DEFINE("_EZAUTOS_LEADS_MOD","Modelo");
DEFINE("_EZAUTOS_LEADS_PRANG","Rango de Precio");
DEFINE("_EZAUTOS_LEADS_LCONTACT","Detalles de Contacto");
DEFINE("_EZAUTOS_LEADS_HPHONE","Telefono de casa");
DEFINE("_EZAUTOS_LEADS_WPHONE","Telefono de trabajo");
DEFINE("_EZAUTOS_LEADS_MOBILE","Telefono celular");
DEFINE("_EZAUTOS_LEADS_FAX","Fax");
DEFINE("_EZAUTOS_LEADS_DETAILS","Detalles del vehículo");
DEFINE("_EZAUTOS_LEADS_SOURCE","Donde usted nos encontró");
DEFINE("_EZAUTOS_LEADS_COMMENTS","Comentarios");
DEFINE("_EZAUTOS_LEADS_SOURCE1","Motor de Busqueda");
DEFINE("_EZAUTOS_LEADS_SOURCE2","Sitio Web");
DEFINE("_EZAUTOS_LEADS_SOURCE3","Pase por ahi");
DEFINE("_EZAUTOS_LEADS_SOURCE4","Red de Vehículos");
DEFINE("_EZAUTOS_LEADS_SOURCE5","Otro - por favor specificar abajo");
DEFINE("_EZAUTOS_LEADS_ERROR1","Usted debe incorporar un nombre ");
DEFINE("_EZAUTOS_LEADS_ERROR2","Usted debe incorporar una direccion de email");
DEFINE("_EZAUTOS_LEADS_ERROR3","Usted debe incorporar una categoría del vehículo");
DEFINE("_EZAUTOS_LEADS_ERROR4","Usted debe incorporar una marca de vehículo");
DEFINE("_EZAUTOS_LEADS_ERROR5","Usted debe incorporar un modelo de vehículo");
DEFINE("_EZAUTOS_LEADS_ERROR6","Usted debe incorporar un rango de precio");
DEFINE("_EZAUTOS_LEADS_REGISTER","¡Registrate con nosotros!");
DEFINE("_EZAUTOS_LEADS_THANKS","Gracias para colocar sus requisitos del vehículo con nosotros.");
DEFINE("_EZAUTOS_LEADS_SUBMIT","Enviar");
DEFINE("_EZAUTOS_LEADS_NOTON","Disculpenos - no estamos aceptando actualmente envios de requisitos de comprador");
DEFINE("_EZAUTOS_LEADS_SUBTITLE","Envie los Requisitos del tipo de la compra del vehículo ");
DEFINE("_EZAUTOS_LEADS_INTRO","Los vehículos están siempre llegando al mercado.  Si usted no puede encontrar lo que usted está buscando en el momento, porqué no  registra sus requisitos del vehículo con nosotros.  Entonces le notificaremos cuando algo que iguale a sus requisitos este disponible.
");


// generic language tags

DEFINE("_EZAUTOS_GENERIC_DISPLAYNUM","Mostrar #");
DEFINE("_EZAUTOS_GENERIC_SAVED","Detalles Salvados");
DEFINE("_EZAUTOS_GENERIC_ERROR1","Seleccionar un artículo para");
DEFINE("_EZAUTOS_GENERIC_BACK","Regresar a Administración de Listas");
DEFINE("_EZAUTOS_GENERIC_PUBSTATUS","Publicado");
DEFINE("_EZAUTOS_GENERIC_EDITDETAILS","Editar Detalles");
DEFINE("_EZAUTOS_GENERIC_PUBLISHED","Publicado");
DEFINE("_EZAUTOS_GENERIC_UNPUBLISHED","DesPublicado");
DEFINE("_EZAUTOS_GENERIC_CHECKOUT","Checked Out");
DEFINE("_EZAUTOS_GENERIC_UP","Mover Arriba");
DEFINE("_EZAUTOS_GENERIC_DOWN","Mover Abajo");
DEFINE("_EZAUTOS_GENERIC_ADD","Agregar Nuevo");
DEFINE("_EZAUTOS_GENERIC_EDIT","Editar");
DEFINE("_EZAUTOS_GENERIC_REQ","Requerido");
DEFINE("_EZAUTOS_GENERIC_OPT","Opcional");
DEFINE("_EZAUTOS_GENERIC_REORDER","Reordenar");
DEFINE("_EZAUTOS_GENERIC_DEFORDER","Ordenado");


// Front end files

// includes.ezautos.php file

DEFINE("_EZAUTOS_INCLUDES_HOME","Inicio");
DEFINE("_EZAUTOS_INCLUDES_SEARCH","Buscar en listado");
DEFINE("_EZAUTOS_INCLUDES_NEW","Nuevo listado");
DEFINE("_EZAUTOS_INCLUDES_TELEPHONE","Telefono:");
DEFINE("_EZAUTOS_INCLUDES_CLOSE","Cerrar Ventana");
DEFINE("_EZAUTOS_INCLUDES_PRINT","Imprimir pantalla");
DEFINE("_EZAUTOS_INCLUDES_BACK","Regresar");
DEFINE("_EZAUTOS_INCLUDES_POSTMAIL","Gracias - ahora puede cerrar esta ventana.");
DEFINE("_EZAUTOS_INCLUDES_RSS","Obent los ultimos listados RSS feed");

// ezautos.php file

DEFINE("_EZAUTOS_CATEGORIES","Tipos de Vehículos");
DEFINE("_EZAUTOS_VEHICLES","Vehículos");

DEFINE("_EZAUTOS_MAIL_VEHENQSENT","¡Gracias! Su petición para más información sobre este vehículo se ha enviado...");
DEFINE("_EZAUTOS_VEHENQREQ"," Solicitud de Información del Vehículo ");
DEFINE("_EZAUTOS_REQUEST_VEHENQ","ha solicitado información adicional sobre un vehículo listado.  Utilice por favor la liga abajo para ver el vehículo que preguntan");
DEFINE("_EZAUTOS_REQUEST_VEHENQ","ha solicitado información adicional sobre un vehículo listado.  Utilice por favor la liga abajo para ver el vehículo que preguntan");

DEFINE("_EZAUTOS_RECOMEND_VEH_FROM_FRIEND"," Un vehículo recomendado de su amigo");
DEFINE("_EZAUTOS_INVITE_VIEW_VEH","le ha invitado a que vea un vehículo listado para venta. Utilice por favor la liga abajo para verlo.");
DEFINE("_EZAUTOS_MAIL_SENT","¡Gracias!  Se ha enviado su recomendación del vehículo...");
DEFINE("_EZAUTOS_MAILING_TITLE"," Solicitud para agregar a lista de correos");
DEFINE("_EZAUTOS_MAILINGLIST_SENT","Gracias! Su solicitud para ser agregado a nuestra lista de correos ha sido enviada...");
DEFINE("_EZAUTOS_REQUEST_MAILINGLIST","le gustaria ser agregado a la lista de correos. Utilice por favor la liga abajo para ver el vehículo que miraban, como éste puede ayudar a identificar sus intereses.");
DEFINE("_EZAUTOS_VEHICLE_INTERESTS","Este visitante está interesado en los tipos siguientes de vehículo:-");

// viewcategory.ezautos.php file

DEFINE("_EZAUTOS_NOENTRY","Disculpenos , esta categoría de vehículo no está disponible en este momento.");
DEFINE("_EZAUTOS_PAGES","Paginas");
DEFINE("_EZAUTOS_PREV","Previo");
DEFINE("_EZAUTOS_NEXT","Siguiente");
DEFINE("_EZAUTOS_VEHICLE_IN_CATEGORY","vehículo");
DEFINE("_EZAUTOS_VEHICLES_IN_CATEGORY","vehículos");
DEFINE("_EZAUTOS_READMORE","Leer mas");
DEFINE("_EZAUTOS_PICTAG_VEHICLE","vehículo");

// viewdetails.ezautos.php file

DEFINE("_EZAUTOS_NOVEHVIEW","¡No se le permite ver este vehículo!");
DEFINE("_EZAUTOS_VEHGONE","¡El vehículo que usted está buscando ya no existe más, o es todavía no se publica en el listado!");

DEFINE("_EZAUTOS_CLICKOPEN","click para abrir en una nueva ventana");
DEFINE("_EZAUTOS_VEHICLE_SPECS","Especificaciones del Vehículo");

DEFINE("_EZAUTOS_DET_PRICE","Precio");
DEFINE("_EZAUTOS_DET_ENGSIZE","Tamaño de motor");
DEFINE("_EZAUTOS_DET_TRANSMISSION","Transmisión");
DEFINE("_EZAUTOS_DET_MILEAGE","Millaje");
DEFINE("_EZAUTOS_DET_COLOUR","Color");
DEFINE("_EZAUTOS_DET_CONDITION","Condición");
DEFINE("_EZAUTOS_DET_AVAILABILITY","Disponibilidad");
DEFINE("_EZAUTOS_DET_ADDFEAT","Características Adicionales");
DEFINE("_EZAUTOS_DET_AIRCO","Aire acondicionado");
DEFINE("_EZAUTOS_DET_POWIN","Ventanas eléctricas");
DEFINE("_EZAUTOS_DET_POSTEER","Dirección hidráulica");
DEFINE("_EZAUTOS_DET_CC","Control de la travesía");
DEFINE("_EZAUTOS_DET_AB","Bolsas de Aire");
DEFINE("_EZAUTOS_DET_ABS","Sistema de Frenos AntiLock");
DEFINE("_EZAUTOS_DET_AMFM","Radio AM/FM ");
DEFINE("_EZAUTOS_DET_CDP","Lector de CD's");
DEFINE("_EZAUTOS_DET_ATS","Sistema contra-robos");
DEFINE("_EZAUTOS_DET_TS","Tilt steering");
DEFINE("_EZAUTOS_DET_CUSTOPTIONS","Opciones del Cliente");
DEFINE("_EZAUTOS_DET_PRINT","Imprimir esta pagina");
DEFINE("_EZAUTOS_DET_ENQUIRE","Investigue sobre este vehículo");
DEFINE("_EZAUTOS_DET_FRIEND","Dígale a un amigo sobre este vehículo");
DEFINE("_EZAUTOS_DET_MLIST","Unirse a nuestra lista de correos");
DEFINE("_EZAUTOS_DET_FAVS","Agregue a favoritos");
DEFINE("_EZAUTOS_DET_YES","Si");
DEFINE("_EZAUTOS_DET_NO","No");

// ezautos nuevo y buscar stuff

DEFINE("_EZAUTOS_RESULTS_Seleccionar","¡Por favor Seleccionar sus parámetros de búsqueda!");
DEFINE("_EZAUTOS_RESULTS_RESULTS","Resultados:-");
DEFINE("_EZAUTOS_RESULTS_NORESULTS","Disculpe - ningun resultado encontrado...");
DEFINE("_EZAUTOS_RESULTS_NEW","Ultimos");
DEFINE("_EZAUTOS_RESULTS_NEWLISTINGS","listados de vehículo");


DEFINE("_EZAUTOS_SEARCH_SEARCH","Buscar");
DEFINE("_EZAUTOS_SEARCH_ASC","Ascendente");
DEFINE("_EZAUTOS_SEARCH_DESC","Descendiente");
DEFINE("_EZAUTOS_SEARCHPRICE","Rango de precio");
DEFINE("_EZAUTOS_SEARCHVEHTYPE","Tipo de vehículo");
DEFINE("_EZAUTOS_SEARCHORD","Ordenar");
DEFINE("_EZAUTOS_SEARCHADV","Filtro Avanzado de Búsqueda de Vehículo");
DEFINE("_EZAUTOS_SEARCH_KEYWORD","Palabras claves");
DEFINE("_EZAUTOS_SEARCH_TITLE","Buscar vehículo por Palabras claves");
DEFINE("_EZAUTOS_SEARCH_MAKE","Marca");
DEFINE("_EZAUTOS_SEARCH_MODEL","Modelo");
DEFINE("_EZAUTOS_SEARCH_YEAR","Rango de Año");

// varios formas de email

DEFINE("_EZAUTOS_SEND","Enviar");
DEFINE("_EZAUTOS_SEND_FRIEND","¡Dígale a un amigo sobre este vehículo!");
DEFINE("_EZAUTOS_YOUR_NAME","Tu Nombre");
DEFINE("_EZAUTOS_YOUR_MAIL","Tu Email");
DEFINE("_EZAUTOS_YOUR_PHONE","Tu Telefono");
DEFINE("_EZAUTOS_FRIENDS_NAME","El nombre de tu amigo");
DEFINE("_EZAUTOS_FRIENDS_MAIL","El Email de tu amigo");
DEFINE("_EZAUTOS_YOUR_INTERESTS","Estoy interesado en los siguientes tipos de vehículo");
DEFINE("_EZAUTOS_JOIN_US","Unirse a nuestra lista de correos");
DEFINE("_EZAUTOS_JOIN_SPEIL","Nuestro inventario está siempre en movimiento - así que manténgase actualizado con nuestra lista de correos.");
DEFINE("_EZAUTOS_ASK_US","Investigue sobre este vehículo ");
DEFINE("_EZAUTOS_FORM_INCOMPLETE","¡Termine por favor todos los campos de la forma!");
DEFINE("_EZAUTOS_MSG","Mensaje:");
DEFINE("_EZAUTOS_TELEPHONE","Telefono:-");


DEFINE("_EZAUTOS_VIEWCAR","View vehicles");

DEFINE("_EZAUTOS_EMAIL_ERROR1","Please include your name");
DEFINE("_EZAUTOS_EMAIL_ERROR2","Please include your email");
DEFINE("_EZAUTOS_EMAIL_ERROR3","Please include your contact telephone");
DEFINE("_EZAUTOS_EMAIL_ERROR4","Please include your questions");
DEFINE("_EZAUTOS_EMAIL_ERROR5","Please include your friends name");
DEFINE("_EZAUTOS_EMAIL_ERROR6","Please include your friends email");
DEFINE("_EZAUTOS_EMAIL_ERROR7","Please include a bit about your interests");
DEFINE("_EZAUTOS_EMAIL_ERROR8","Sorry - this email feature is not currently available");
DEFINE("_EZAUTOS_EMAIL_ERROR9","Please include a short message");

DEFINE("_EZAUTOS_LM_ERROR1","Please enter your name");
DEFINE("_EZAUTOS_LM_ERROR2","Please enter an email address");
DEFINE("_EZAUTOS_LM_ERROR3","Please select a category");
DEFINE("_EZAUTOS_LM_ERROR4","Please select a make");
DEFINE("_EZAUTOS_LM_ERROR5","Please select a model");
DEFINE("_EZAUTOS_LM_ERROR6","Please select a price range");

DEFINE("_EZAUTOS_LM_BUDGET","Budget");

DEFINE("_EZAUTOS_VIEWDET_VSELLERS","Sellers");


// front-end member stuff

DEFINE("_EZAUTOS_LISTINGS_INTRO","You may have the following number of free vehicle listings");


DEFINE("_EZAUTOS_NOLISTINGS","You have no current listings");
DEFINE("_EZAUTOS_ADDNEW","Add new listing");
DEFINE("_EZAUTOS_SUBMIT_LISTING","Submit Listing");
DEFINE("_EZAUTOS_YOUVEGOTMAIL","New Vehicle Listing");
DEFINE("_EZAUTOS_DONE","Image upload and vehicle listing successful!");
DEFINE("_EZAUTOS_UPDATEDONE","You have successfully updated your listing!");
DEFINE("_EZAUTOS_CHECKDELETE","Are you sure you want to delete this listing?");
DEFINE("_EZAUTOS_DELETE_LISTING","Delete Listing");
DEFINE("_EZAUTOS_LISTINGS_PREVIEW","Preview Listing");
DEFINE("_EZAUTOS_LISTINGS_EDIT","Edit Listing");
DEFINE("_EZAUTOS_DELIMGOOPS","Could not delete the image file");
DEFINE("_EZAUTOS_LISTING_DELETED","Vehicle listing deleted successfully");
DEFINE("_EZAUTOS_LISTING_TERMS","Terms of Listing");
DEFINE("_EZAUTOS_PREVIEW_LISTING","Your Vehicle Listing Preview");

DEFINE("_EZAUTOS_MEMBERS_LOC","Location");
DEFINE("_EZAUTOS_MEMBERS_CARDET","Vehicle Details");
DEFINE("_EZAUTOS_MEMBERS_HITS","Hits");
DEFINE("_EZAUTOS_MEMBERS_ACTION","Action");
DEFINE("_EZAUTOS_MEMBERS_STATUS","Status");
DEFINE("_EZAUTOS_MEMBERS_UPGRADE","Upgrade");
DEFINE("_EZAUTOS_MEMBERS_FEATURED","Featured");
DEFINE("_EZAUTOS_MEMBERS_IMAGE","Vehicle image");
DEFINE("_EZAUTOS_MEMBERS_IMAGE2","Images");
DEFINE("_EZAUTOS_SUB_MSG","A member of your site has submitted a new or updated listing");
DEFINE("_EZAUTOS_VIEWDET_SELLER_VIEWING","Contact seller about this listing");
DEFINE("_EZAUTOS_LISTING_IMGDELETED","Image deleted");
DEFINE("_EZAUTOS_LISTING_RESTRICTED","**This information is not available for free listings**");


DEFINE("_EZAUTOS_LISTING1","Seller's contact details");
DEFINE("_EZAUTOS_LISTING5","Vehicle specs");
DEFINE("_EZAUTOS_MEMBERS_AN","Add New Listing");
DEFINE("_EZAUTOS_MEMBERS_EN","Edit Listing");

DEFINE("_EZAUTOS_SELLER_ERROR1","You must include a contact name");
DEFINE("_EZAUTOS_SELLER_ERROR2","You must include a contact telephone number");
DEFINE("_EZAUTOS_SELLER_ERROR3","You must include a contact email address");
DEFINE("_EZAUTOS_SELLER_ERROR4","You must include your location");

DEFINE("_EA_UPLOAD_ERR1","Upload Error - No File Selected!");
DEFINE("_EA_UPLOAD_ERR2","Upload FAILED - Only .bmp, .jpg, .gif and .png files can be uploaded!");
DEFINE("_EA_UPLOAD_ERR5","Upload FAILED.File already exists!");
DEFINE("_EA_UPLOAD_ERR6","Upload FAILED!");

DEFINE("_EZAUTOS_NOCATLISTINGS","Sorry - there are no listings in this category");
DEFINE("_EZAUTOS_SELLERSPANEL","Seller's Panel");
DEFINE("_EZAUTOS_MAINPANEL","Main Listings");

DEFINE("_EZAUTOS_IPN1","Listing Upgraded to");
DEFINE("_EZAUTOS_IPN2","A site member has just upgraded their listing to");
DEFINE("_EZAUTOS_IPN3","Purchaser details:-");
DEFINE("_EZAUTOS_IPN4","Vehicle ID#:-");

DEFINE("_EZAUTOS_POR","Price on Request");
DEFINE("_EZAUTOS_CONFIG_SBIMP","List by Impressions");
DEFINE("_EZAUTOS_CONFIG_SBIMPDESC","If allowing site members to list vehicles, do you want to do this based on impressions - ie. hits on the full details page. Listings will then cease to display once they exceed the number of impressions and you'll be able to clean the database of these old listings by pressing the 'Clean Listings' button.");
DEFINE("_EZAUTOS_CONFIG_IMPNUM","Number of Impressions");
DEFINE("_EZAUTOS_CONFIG_IMPNUMDESC","If limiting listings based on impressions/hits - how many should be shown.");
DEFINE("_EZAUTOS_RESET_MSG","Hits have been reset");
DEFINE("_EZAUTOS_RESET_BTN","Reset");
DEFINE("_EZAUTOS_CLEANDB","Clean Listings");
DEFINE("_EZAUTOS_LISTINGS_PAID1","listings cost");
DEFINE("_EZAUTOS_LISTINGS_PAID2","per upgrade");
DEFINE("_EZAUTOS_LISTINGS_HITSINTRO","Listings are discontinued and removed from the database after");
DEFINE("_EZAUTOS_LISTINGS_HITS2","hits");
DEFINE("_EZAUTOS_SEARCH_ANYCOND","Any Condition");

DEFINE("_EZAUTOS_ALT_CATG","Manage category information");
DEFINE("_EZAUTOS_ALT_MAKE","Manage vehicle makes");
DEFINE("_EZAUTOS_ALT_MODEL","Manage vehicle models");
DEFINE("_EZAUTOS_ALT_ENGINE","Manage engine sizes");
DEFINE("_EZAUTOS_ALT_PRICE","Manage price increments");
DEFINE("_EZAUTOS_ALT_LEADS","Manage leads");
DEFINE("_EZAUTOS_ALT_SETTINGS","Manage configuration settings");
DEFINE("_EZAUTOS_ALT_INFO","About info");

// NEW TAGS THAT WERE ADDED FOR THE 3.2.2 VERSION

DEFINE("_EZAUTOS_SETTINGS_SAVED","Settings saved");
DEFINE("_EZAUTOS_TOOLBAR_CLOSE","Close");
DEFINE("_EZAUTOS_TOOLBAR_PUB","Publish");
DEFINE("_EZAUTOS_TOOLBAR_UNPUB","Unpublish");
DEFINE("_EZAUTOS_NLAVAIL","Sorry - this listing is not currently available");

// NEW TAGS THAT WERE ADDED AFTER THE 3.2.2 VERSION FOR CB INTEGRATION

DEFINE("_EZAUTOS_CONFIG_CBINT","Community Builder Integration");
DEFINE("_EZAUTOS_CONFIG_CBINTDESC","If you are using Community Builder, do you want to use the information from its membership tables for seller contact details?");
DEFINE("_EZAUTOS_PROFILER_CBMSG1","The EZ Autos motorvehicle listings component is not installed.  Please contact the site administrator.");
DEFINE("_EZAUTOS_PROFILER_CBMSG2","There are no motorvehicle listings for this member.");
DEFINE("_EZAUTOS_PROFILER_CBPROFILE","View Profile");




// NEW TAGS THAT WERE ADDED FOR THE 4.0.0 RELEASE



DEFINE("_EZAUTOS_VLDET_DERIVATIVE","Derivative");
DEFINE("_EZAUTOS_CONFIG_PAYPAL","PayPal Settings");
DEFINE("_EZAUTOS_CONFIG_PAIDOPT1","FREE with option to UPGRADE");
DEFINE("_EZAUTOS_CONFIG_PAIDOPT2","PAID listings ONLY");
DEFINE("_EZAUTOS_CONFIG_PAIDONLY","Payment Choices");
DEFINE("_EZAUTOS_CONFIG_PAIDONLYDESC","If offering paid listings - do you want to offer FREE listings with the option to upgrade - OR ONLY paid listings.");


DEFINE("_EZAUTOS_CONFIG_PPPREMIUM1","Standard Upgrade Name");
DEFINE("_EZAUTOS_CONFIG_PPPREMIUMDESC1","What would you like to call your listing upgrades - eg. Premium/Enhanced Listing etc. This will appear as the Item Name in button code and PayPal transaction reports.");
DEFINE("_EZAUTOS_CONFIG_PPCOST1","Standard Upgrade Cost");
DEFINE("_EZAUTOS_CONFIG_PPCOSTDESC1","The cost of upgrading a free vehicle listing to a paid listing.");
DEFINE("_EZAUTOS_CONFIG_PPPOSTMODE1","Post Mode");
DEFINE("_EZAUTOS_CONFIG_PPPOSTMODEDESC1","Set to 'Live Sales' to sell real updates via the PayPal system, or test your installation by doing 'Test Sales' via the PayPal Developers Network Sandbox.");

DEFINE("_EZAUTOS_CONFIG_SITETYPE","Primary Mode of Operation");
DEFINE("_EZAUTOS_CONFIG_SITETYPEDESC","You can run EZ Autos in one of two ways - to list cars for sale, or as a library display for club sites wanting to allow members to show off their cars.");
DEFINE("_EZAUTOS_CONFIG_SALESITE","Listings for Sale");
DEFINE("_EZAUTOS_CONFIG_LIBSITE","Listings for Display");
DEFINE("_EZAUTOS_LISTINGS_INTRO2","You may have the following number of display listings");
DEFINE("_EZAUTOS_CONFIG_FREEPIC","Free Listing Images");
DEFINE("_EZAUTOS_CONFIG_FREEPICDESC","If you have free and paid listings for your members, do you want free listings to be able to show an image? If you select 'NO' just a placeholder will be displayed, which may encourage more paid listings. If you select 'YES' - free listings will only be able to have one image. This will not affect listings if you're ONLY running in free listings mode - members can have 12 images when run in this mode.");

DEFINE("_EZAUTOS_FEND_BUYNOW","Purchase a 'Featured Listing' first and you don't have to pay the initial 'Premium Listing' fee.");
DEFINE("_EZAUTOS_VLDET_TAGS","Metatags");
DEFINE("_EZAUTOS_VLDET_METADESC","Description");
DEFINE("_EZAUTOS_VLDET_METAKEYS","Keywords");
DEFINE("_EZAUTOS_LISTING1B","Owner's details");
DEFINE("_EZAUTOS_CONFIG_OP1","Operations Mode");
DEFINE("_EZAUTOS_CONFIG_OP2","Define the basics of how your site will operate");
DEFINE("_EZAUTOS_LISTING_UPGRADE","Upgrade");

DEFINE("_EZAUTOS_CONFIG_SELFENTRY","Front-end Additions");
DEFINE("_EZAUTOS_CONFIG_SELFENTRYDESC","Do you want to allow site members access to add new makes or models themselves. When allowing this - these makes and models will be automatically published to allow access when creating the front-end listing.");
DEFINE("_EZAUTOS_CONFIG_COLOUR1","Rollover Colour 1");
DEFINE("_EZAUTOS_CONFIG_COLOUR1DESC","This is the colour cells will change to when hovering your mouse over an item in the list.");
DEFINE("_EZAUTOS_CONFIG_COLOUR2","Rollover Colour 2");
DEFINE("_EZAUTOS_CONFIG_COLOUR2DESC","This is the colour cells will return to after mousing off the cell. For best results - this should be the colour of your page background.");

DEFINE("_EZAUTOS_CHECK_MAKE","Check Makes");
DEFINE("_EZAUTOS_CHECK_MODEL","Check Models");
DEFINE("_EZAUTOS_CHECK_AVAIL","Check Availability");
DEFINE("_EZAUTOS_CHECK_SUBMIT","Submit New");
DEFINE("_EZAUTOS_CHECK_GO","Go");
DEFINE("_EZAUTOS_CHECK_REFRESH","<strong><br /><br />Refresh the screen after closing this window - then you'll see the new entry.</strong>");

DEFINE("_EZAUTOS_DATABASE1","Upgrade Database");
DEFINE("_EZAUTOS_DATABASE2","Database upgrades have been done");



// EXISTING TAGS THAT HAD THEIR LANGUAGE CONTENT CHANGED FOR THE 4.0.0 RELEASE



DEFINE("_EZAUTOS_LISTINGS_HITSEXPL","If upgrading between listing levels/types - hits will be reset to 0");


// NEW TAGS FOR THE 4.1.0 RELEASE

DEFINE("_EZAUTOS_CONFIG_MOBILE","Mobile phone #");
DEFINE("_EZAUTOS_CONFIG_MOBILEDESC","This will be used for the SMS contact form if you don't allow site members to list. It MUST be in the international number format:- Country Code, Network prefix without the leading '0' and Number - no spaces, only numerals.");

DEFINE("_EZAUTOS_SELLER_SMS1","SMS #");
DEFINE("_EZAUTOS_SELLER_SMS2","SMS me!");
DEFINE("_EZAUTOS_SELLER_SMS3","NOTE: Before using this, You need to have an active");
DEFINE("_EZAUTOS_SELLER_SMS4","account! You also need to set up a HTTP API via your Clickatell control panel.");
DEFINE("_EZAUTOS_SELLER_SMS5","Your mobile number in international format:- Country Code, Network prefix without the leading '0' and Number - no spaces, only numerals.");
DEFINE("_EZAUTOS_SELLER_SMS6","Send SMS via Clickatell to this vehicle seller");
DEFINE("_EZAUTOS_SELLER_SMS7","Username");
DEFINE("_EZAUTOS_SELLER_SMS8","Password");
DEFINE("_EZAUTOS_SELLER_SMS9","Mobile Phone #");
DEFINE("_EZAUTOS_SELLER_SMS10","Message");
DEFINE("_EZAUTOS_SELLER_SMS11","success");
DEFINE("_EZAUTOS_SELLER_SMS12","message ID");
DEFINE("_EZAUTOS_SELLER_SMS13","send message failed");
DEFINE("_EZAUTOS_SELLER_SMS14","Authentication failure");
DEFINE("_EZAUTOS_SELLER_SMS15","You need to insert your Clickatell username");
DEFINE("_EZAUTOS_SELLER_SMS16","You need to insert your Clickatell password");
DEFINE("_EZAUTOS_SELLER_SMS17","You need to insert the Mobile phone number associated with your Clickatell account");
DEFINE("_EZAUTOS_SELLER_SMS18","You need to include a message to this vehicle seller");
DEFINE("_EZAUTOS_SELLER_SMS19","HTTP API ID#");
DEFINE("_EZAUTOS_SELLER_SMS20","You need to insert your Clickatell API ID. If you don't already have one, set up a HTTP API via your Clickatell control panel.");
DEFINE("_EZAUTOS_SELLER_SMS21","150 characters max");
DEFINE("_EZAUTOS_SELLER_SMS22","Your Clickatell Details");
DEFINE("_EZAUTOS_SELLER_SMS23","Send SMS via Clickatell");
DEFINE("_EZAUTOS_SELLER_SMS24","Send SMS via Clickatell to this sales lead - Create sales lead BEFORE sending SMS!");
DEFINE("_EZAUTOS_SELLER_SMS25","Done!");
DEFINE("_EZAUTOS_SELLER_SMS26","Send SMS");
DEFINE("_EZAUTOS_SELLER_SMS27","Make sure your Clickatell details have been set in the EZ Autos configuration settings area BEFORE sending an SMS!!");

DEFINE("_EZAUTOS_SELLER_SMS7DESC","This must be your Clickatell Central API account username.");
DEFINE("_EZAUTOS_SELLER_SMS8DESC","This must be your Clickatell Central API account password");
DEFINE("_EZAUTOS_SELLER_SMS19DESC","This must be your Clickatell Central API account HTTP API ID#. Create your API ID# via your Clickatell control panel.");


DEFINE("_EZAUTOS_CONFIG_TEXTBOX","Text box width");
DEFINE("_EZAUTOS_CONFIG_TEXTBOXDESC","The width of the larger text boxes in the front-end add/edit vehicle details form. This width helps to reduce template distortion.");
DEFINE("_EZAUTOS_CONFIG_TEXTAREA","Text area width");
DEFINE("_EZAUTOS_CONFIG_TEXTAREADESC","The width of the text areas in the front-end add/edit vehicle details form. This width helps to reduce template distortion.");
DEFINE("_EZAUTOS_IMAGE_WARNING","<strong><font color='#FF0000'>Image types MUST be jpg's or png's!!</font></strong>");
DEFINE("_EZAUTOS_IMAGE_WARNING2","One or more of your images exceed the allowed image height or width!!");
DEFINE("_EZAUTOS_CONFIG_MAXWIDTH","Maximum allowed image width");
DEFINE("_EZAUTOS_CONFIG_MAXWIDTHDESC","What is the maximum width in pixels allowed for image uploads?");
DEFINE("_EZAUTOS_CONFIG_MAXHEIGHT","Maximum allowed image height");
DEFINE("_EZAUTOS_CONFIG_MAXHEIGHTDESC","What is the maximum height in pixels allowed for image uploads?");

DEFINE("_EZAUTOS_CONFIG_COLCOUNT","Column count");
DEFINE("_EZAUTOS_CONFIG_COLCOUNTDESC","How many columns do you want the first category listing page layout to have?");
DEFINE("_EZAUTOS_CONFIG_COLWIDTH","Column width");
DEFINE("_EZAUTOS_CONFIG_COLWIDTHDESC","How wide are the columns on the first category listing page? For example, if you have 1 column, the width should be 100%, if you have 2 columns the width should be 50%, and if you have 3 columns the width should be 33%. You MUST include the percent sign.");

DEFINE("_EZAUTOS_PIXELS","pixels");
DEFINE("_EZAUTOS_INTERESTED","Interested?");
DEFINE("_EZAUTOS_WANTED","Wanted");
DEFINE("_EZAUTOS_LEAD_RESPONSEERROR"," You must include a short message");
DEFINE("_EZAUTOS_CONFIG_NLLINK","New Listings Link");
DEFINE("_EZAUTOS_CONFIG_NLLINKDESC","Do you want to show the new listings link on the front-end EZ Autos header?");
DEFINE("_EZAUTOS_RESET","Reset");
DEFINE("_EZAUTOS_SKIPFREE_LISTING","Skip the free listing and go straight to a paid listing!!");

DEFINE("_EZAUTOS_CONFIG_FORMATTING","Formatting");


DEFINE("_EZAUTOS_SEARCH_ANYFUEL","Any fuel type");




// TAGS THAT HAD THEIR LANGUAGE CONTENT CHANGED FOR THE 4.1.0 RELEASE


DEFINE("_EZAUTOS_CONFIG_NEWLIST","Special vehicle listing pages");
DEFINE("_EZAUTOS_CONFIG_NEWLISTDESC","Number of vehicles to list on the 'New Listings', 'Vehicles Wanted' and 'RSS feed' page");
DEFINE("_EZAUTOS_SEARCH_SELALCAT","Any Category");
DEFINE("_EZAUTOS_SEARCH_SELALMAK","Any Make");
DEFINE("_EZAUTOS_SEARCH_SELALMOD","Any Model");
DEFINE("_EZAUTOS_SEARCH_SELALTRANS","Any Transmission");

DEFINE("_EZAUTOS_DDSL_SELMIN","Minimum Price");
DEFINE("_EZAUTOS_DDSL_SELMAX","Maximum Price");



// NEW TAGS FOR THE 4.2.0 RELEASE


DEFINE("_EZAUTOS_LISTS_MAKES","Vehicle Makes");
DEFINE("_EZAUTOS_LISTS_MODELS","Models");
DEFINE("_EZAUTOS_CONFIG_STRUCTURE","Listing Structure");
DEFINE("_EZAUTOS_CONFIG_STRUCTUREDESC","What type of listing structure do you want to use - vehicle makes leading into their models and finally the listings for each model, or do you want to use categories that lead into the listings.");
DEFINE("_EZAUTOS_CONFIG_MAKEMOD","Makes/Models");
DEFINE("_EZAUTOS_CONFIG_CATG","Categories");
DEFINE("_EZAUTOS_ERROR_DUPLICATE","ERROR - duplicate entry!!");
DEFINE("_EZAUTOS_COPY","Copy");




// NEW LANGUAGE TAGS FOR THE *** 4.2.1 STABLE *** RELEASE


DEFINE('_EZAUTOS_NAV_LT','&lt;');
DEFINE('_EZAUTOS_NAV_RT','&gt;');
DEFINE('_EZAUTOS_NAV_PAGE','Page');
DEFINE('_EZAUTOS_NAV_OF','of');
DEFINE('_EZAUTOS_NAV_START','Start');
DEFINE('_EZAUTOS_NAV_PREVIOUS','Prev');
DEFINE('_EZAUTOS_NAV_NEXT','Next');
DEFINE('_EZAUTOS_NAV_END','End');
DEFINE('_EZAUTOS_NAV_RESULTS','Results');


// NEW TAGS FOR THE 5.0.0 RELEASE


DEFINE("_EZAUTOS_SPECS_FUELSYS","Fuel system");

DEFINE("_EZAUTOS_SPECS_BORESTROKE","Bore and Stroke");
DEFINE("_EZAUTOS_SPECS_POWER","Power");
DEFINE("_EZAUTOS_SPECS_TORQUE","Torque");
DEFINE("_EZAUTOS_SPECS_WEIGHTPOWER","Weight to Power Ratio");
DEFINE("_EZAUTOS_SPECS_FRONTBRAKES","Front Brakes");
DEFINE("_EZAUTOS_SPECS_REARBRAKES","Rear Brakes");
DEFINE("_EZAUTOS_SPECS_WHEELDIMS","Wheel Dimension");
DEFINE("_EZAUTOS_SPECS_TURNCIRC","Turning Circle");
DEFINE("_EZAUTOS_SPECS_COMPRAT","Compression Ratio");
DEFINE("_EZAUTOS_SPECS_TANKCAP","Tank Capacity");
DEFINE("_EZAUTOS_SPECS_EXTLENGTH","Exterior Length");
DEFINE("_EZAUTOS_SPECS_EXTWIDTH","Exterior Width");
DEFINE("_EZAUTOS_SPECS_EXTHEIGHT","Exterior Height");
DEFINE("_EZAUTOS_SPECS_FRONTTRACK","Front Track");
DEFINE("_EZAUTOS_SPECS_REARTRACK","Rear Track");
DEFINE("_EZAUTOS_SPECS_WHEELBASE","Wheel Base");
DEFINE("_EZAUTOS_SPECS_FRONTSUS","Front Suspension");
DEFINE("_EZAUTOS_SPECS_REARSUS","Rear Suspension");
DEFINE("_EZAUTOS_SPECS_KERBWEIGHT","Kerb Weight");
DEFINE("_EZAUTOS_SPECS_GRCLEAR","Ground Clearance");
DEFINE("_EZAUTOS_SPECS_SEATCAP","Seating Capacity");
DEFINE("_EZAUTOS_SPECS_HWYFUEL","Highway Fuel Consumption");
DEFINE("_EZAUTOS_SPECS_CITYFUEL","City Fuel Consumption");
DEFINE("_EZAUTOS_SPECS_TOWCAP","Towing Capacity");
DEFINE("_EZAUTOS_SPECS_COUNTRYORIGIN","Country of Origin");
DEFINE("_EZAUTOS_SPECS_DOORSBODY","Doors and Body Style");
DEFINE("_EZAUTOS_SPECS_STOCKNUM","Stock Number");

DEFINE("_EZAUTOS_LISTINGS_SUMMARY","Summary");
DEFINE("_EZAUTOS_LISTINGS_EXPAND","click to expand");
DEFINE("_EZAUTOS_LISTINGS_TECHNICAL","Technical Specifications");
DEFINE("_EZAUTOS_LISTINGS_NOTECHSPECS","There are no technical specifications listed for this vehicle");
DEFINE("_EZAUTOS_LISTINGS_CLICKOPEN","Click to open the full-size image");
DEFINE("_EZAUTOS_LISTINGS_SPECS","Specifications");
DEFINE("_EZAUTOS_LISTINGS_FEATS","Features");

DEFINE("_EZAUTOS_LISTINGS_ADDLIGHTBOX","Add to Shortlist");
DEFINE("_EZAUTOS_NEEDTOLOGIN","Sorry - You must be logged in to use this feature.");
DEFINE("_EZAUTOS_VIEW_LIGHTBOX","View Shortlist");
DEFINE("_EZAUTOS_REMOVE_LIGHTBOX","Remove from Shortlist");

DEFINE("_EZAUTOS_EMPTY_LIGHTBOX","There are no listings currently in your Shortlist");
DEFINE("_EZAUTOS_MY_LIGHTBOX","My Shortlist Listings");
DEFINE("_EZAUTOS_NO_MODELS","There are no listings for this model");
DEFINE("_EZAUTOS_FEATURED_LIST","Featured Vehicles");
DEFINE("_EZAUTOS_EMPTY_FEATURED","There are currently no featured vehicles");

DEFINE("_EZAUTOS_TOOLS","Tools");
DEFINE("_EZAUTOS_BOOKMARK","Bookmark this page");

DEFINE("_EZAUTOS_CONFIG_SHOWMENU","Show EZ Autos Menu");
DEFINE("_EZAUTOS_CONFIG_SHOWMENU_DESC","Do you want to display the top menu in EZ Autos");
DEFINE("_EZAUTOS_CONFIG_NEWLINK","Show new listings link");
DEFINE("_EZAUTOS_CONFIG_NEWLINK_DESC","Do you want to display the new listings link in the top menu");
DEFINE("_EZAUTOS_CONFIG_FEATLINK","Show featured listings link");
DEFINE("_EZAUTOS_CONFIG_FEATLINK_DESC","Do you want to display the featured listings link in the top menu");
DEFINE("_EZAUTOS_CONFIG_LIGHTBOXEXP","Shortlist Expirary Time");
DEFINE("_EZAUTOS_CONFIG_LIGHTBOXEXPDESC","How many days should shortlisted items remain in the database. After this they can be pruned using the prune function.");
DEFINE("_EZAUTOS_CONFIG_CURRENCYPOS","Currency Position");
DEFINE("_EZAUTOS_CONFIG_CURRENCYPOS_DESC","You may define whether to display the currency sign before or after the price");
DEFINE("_EZAUTOS_CONFIG_BEFORE","Before");
DEFINE("_EZAUTOS_CONFIG_AFTER","After");
DEFINE("_EZAUTOS_CONFIG_CURRENCYFORMAT","Currency Format");
DEFINE("_EZAUTOS_CONFIG_CURRENCYFORMAT_DESC","You may define whether to display the currency in a decimal or european format");
DEFINE("_EZAUTOS_CONFIG_DECIMAL","Decimal");
DEFINE("_EZAUTOS_CONFIG_EUROPEAN","European");
DEFINE("_EZAUTOS_CONFIG_PAYMENTS","Payments");
DEFINE("_EZAUTOS_CONFIG_USESMS","Enable SMS");
DEFINE("_EZAUTOS_CONFIG_USESMS_DESC","Do you want to display the SMS contact link/form to enable SMS messaging via the site's front-end? If Clickatell doesn't service your part of the world - set this to NO.");
DEFINE("_EZAUTOS_CONFIG_LISTINGSTEMPL","Listings Page Template");
DEFINE("_EZAUTOS_CONFIG_LISTINGSTEMPL_DESC","There are now different layouts available for the listings pages - ie. category contents, new listings, search results, featured listings, model contents pages.");
DEFINE("_EZAUTOS_CONFIG_CHANGEIMAGES","Change Listing Images");
DEFINE("_EZAUTOS_CONFIG_CHANGEIMAGES_DESC","Do you want to allow site members the ability to change the images in a listing once they've been uploaded? Setting this to 'no' will prevent changes to the images only. Some members may find this inconvenient if they don't like their initial image order.");
DEFINE("_EZAUTOS_CONFIG_PAYMENTSYS","Select your payment system");
DEFINE("_EZAUTOS_CONFIG_PAYMENTSYS_DESC","EZ Autos currently supports 2 ways to handle payments for paid upgrades. The PayPal system will allow you to handle these automatically via a built-in IPN script, or if PayPal isn't available to you - you can do this manually by linking listings to a page that explains how they must go about paying you.");



DEFINE("_EZAUTOS_VLDET_ADDNUM","Ad #");
DEFINE("_EZAUTOS_VLDET_SHOWPRICE","Show Price");
DEFINE("_EZAUTOS_VLDET_NOEXTDESC","There is no extended description for this vehicle");
DEFINE("_EZAUTOS_LISTINGS_NOEXTFEAT","There are no additional features listed for this vehicle");
DEFINE("_EZAUTOS_NOPERSONAL_DETAILS","There are no personal details needed at this stage.");

DEFINE("_EZAUTOS_PRUNE_LIGHTBOX","Prune Shortlist");
DEFINE("_EZAUTOS_PRUNE_DONE","Shortlist entries pruned");
DEFINE("_EZAUTOS_PRANGE_DISPLAY","Display Value");
DEFINE("_EZAUTOS_EDIT_PERSONAL","Personal");
DEFINE("_EZAUTOS_SELECT_SELLER","Select Dealer/Seller");
DEFINE("_EZAUTOS_DEALER_SELLER","Dealer/Seller");

DEFINE("_EZAUTOS_LISTINGS_EXPDATE","Expiration Date");
DEFINE("_EZAUTOS_LISTINGS_EXPIRED","Expired");
DEFINE("_EZAUTOS_LISTINGS_RENEW","Renew");
DEFINE("_EZAUTOS_LEADS_SUBMSG","A visitor to your site has just submitted details to your leads management system. Please login to check it out when you've got the time.");

DEFINE("_EZAUTOS_CONFIG_DEFEXPMGMT","Define your various Expiration Management settings");
DEFINE("_EZAUTOS_CONFIG_USEEXPMGMT","Use Expiration Management");
DEFINE("_EZAUTOS_CONFIG_USEEXPMGMTDESC","Do you want to use the expiration management system. This allows you to limit how long listings are displayed for based on either time or page impressions.");
DEFINE("_EZAUTOS_CONFIG_EXPSYS","Expiration system");
DEFINE("_EZAUTOS_CONFIG_EXPSYSDESC","If using the expiration management system - select the method to limit how long listings are displayed for.");
DEFINE("_EZAUTOS_CONFIG_EXPHITSBASED","Page Impressions");
DEFINE("_EZAUTOS_CONFIG_EXPDATEBASED","Time-based");
DEFINE("_EZAUTOS_CONFIG_EXPFIG","Time in Days");
DEFINE("_EZAUTOS_CONFIG_EXPFIGDESC","If using 'Time-based' expiration management, specify how many days listings should be displayed for.");
DEFINE("_EZAUTOS_CONFIG_EXPGRACE","Grace Period");
DEFINE("_EZAUTOS_CONFIG_EXPGRACEDESC","If using 'Time-based' listings, specify a grace period in days. This is the amount of time between when a listing is discontinued, and when it can be cleaned from the database. During this period, listings can be renewed.");

DEFINE("_EZAUTOS_CONFIG_MGSCHFILTER","Manage your search filter settings");
DEFINE("_EZAUTOS_CONFIG_USECATEGORY","Use Category select list");
DEFINE("_EZAUTOS_CONFIG_USECATEGORY_DESC","Do you want to use the drop-down category selector list on the main search filter?");
DEFINE("_EZAUTOS_CONFIG_USEMAKMOD","Use Make/Model select list");
DEFINE("_EZAUTOS_CONFIG_USEMAKMOD_DESC","Do you want to use the drop-down make/model selector lists on the main search filter?");
DEFINE("_EZAUTOS_CONFIG_USETRANS","Use Transmission select list");
DEFINE("_EZAUTOS_CONFIG_USETRANS_DESC","Do you want to use the drop-down transmission selector list on the main search filter?");
DEFINE("_EZAUTOS_CONFIG_USEFUEL","Use Fuel select list");
DEFINE("_EZAUTOS_CONFIG_USEFUEL_DESC","Do you want to use the drop-down fuel-type selector list on the main search filter?");
DEFINE("_EZAUTOS_CONFIG_USECOND","Use Vehicle Condition select list");
DEFINE("_EZAUTOS_CONFIG_USECOND_DESC","Do you want to use the drop-down vehicle condition selector list on the main search filter?");
DEFINE("_EZAUTOS_CONFIG_LEADSNOTIFY","Leads Notification");
DEFINE("_EZAUTOS_CONFIG_LEADSNOTIFY_DESC","If you are using the Leads Management feature, do you want to be notified via email of new sales leads?");

DEFINE("_EZAUTOS_CONFIG_USEDEMONSTRATOR","Use demonstrator selector option");
DEFINE("_EZAUTOS_CONFIG_USEDEMONSTRATOR_DESC","Select whether to display the demonstrator item in the vehicle condition list");

DEFINE("_EZAUTOS_CONFIG_USEASNEW","Use 'As New' selector option");
DEFINE("_EZAUTOS_CONFIG_USEASNEW_DESC","Select whether to display the 'as new' item in the vehicle condition list");

DEFINE("_EZAUTOS_CONFIG_USEPRELUV","Use 'Pre-loved' selector option");
DEFINE("_EZAUTOS_CONFIG_USEPRELUV_DESC","Select whether to use the 'pre-loved' item in the vehicle condition list");

DEFINE("_EZAUTOS_CONFIG_USESPARE","Use the spare entry selector option");
DEFINE("_EZAUTOS_CONFIG_USESPARE_DESC","Select whether to use the 'spare entry' item in the vehicle condition list. If you need to use this - remember to give it a new name by editing the language file");

DEFINE("_EZAUTOS_CONFIG_SHOWPROF","Show Profile");

DEFINE("_EZAUTOS_CONFIG_MAPPING","Mapping");
DEFINE("_EZAUTOS_CONFIG_MAPPINGDESC","Define your mapping settings");
DEFINE("_EZAUTOS_CONFIG_USEMAPPING","Use Mapping");
DEFINE("_EZAUTOS_CONFIG_USEMAPPINGDESC","Do you want to display a map of where the dealer/seller is located?");
DEFINE("_EZAUTOS_CONFIG_MAPTYPE","Select mapping service");
DEFINE("_EZAUTOS_CONFIG_MAPTYPEDESC","Which mapping service do you want to use? If your site template has lots of javascript, you may have to use the Yahoo mapping option.");
DEFINE("_EZAUTOS_CONFIG_MAPTYPE1","Google maps");
DEFINE("_EZAUTOS_CONFIG_MAPTYPE2","Yahoo maps");

DEFINE("_EZAUTOS_CONFIG_MAPAPI","Map API");
DEFINE("_EZAUTOS_CONFIG_MAPAPIDESC","Define your map API number");
DEFINE("_EZAUTOS_CONFIG_MAPWIDTH","Map Width");
DEFINE("_EZAUTOS_CONFIG_MAPWIDTHDESC","Define your map width in pixels");
DEFINE("_EZAUTOS_CONFIG_MAPHEIGHT","Map Height");
DEFINE("_EZAUTOS_CONFIG_MAPHEIGHTDESC","Define your map height in pixels");



DEFINE("_EZAUTOS_TABS_SELLER","Seller");
DEFINE("_EZAUTOS_TABS_SUMMARY","Summary");
DEFINE("_EZAUTOS_TABS_SPECS","Specs");
DEFINE("_EZAUTOS_TABS_FEAT","Features");
DEFINE("_EZAUTOS_TABS_ADMIN","Admin");
DEFINE("_EZAUTOS_TABS_SEO","MetaTags");
DEFINE("_EZAUTOS_TABS_MARKETING","Marketing");
DEFINE("_EZAUTOS_TABS_IMAGES","Images");


DEFINE("_EZAUTOS_GENERIC_LOGOS","Logos");
DEFINE("_EZAUTOS_GENERIC_IMAGES","Images");

DEFINE("_EZAUTOS_SELECT_IMAGE","Select image");
DEFINE("_EZAUTOS_DISPLAY_PREVIEW","Image preview");

DEFINE("_EZAUTOS_SELECT_LOGO","Select logo");
DEFINE("_EZAUTOS_PREVIEW_LOGO","Logo preview");
DEFINE("_EZAUTOS_ALERT_EMAILS","Send Alert Emails");
DEFINE("_EZAUTOS_NOALERT_SENT","Alert emails for pending listing deletions have not been sent, as your site is not using time-based expiration management.");

DEFINE("_EZAUTOS_EXPIRY_WARNING","Pending listing expiry");
DEFINE("_EZAUTOS_EXPIRY_MESSAGE","Your autos listing on our site is due to expire soon, and we hope you've had a successful advertising campaign. Should you wish to extend your advertisement, please visit our site to renew your listing. You'll find us here:-");
DEFINE("_EZAUTOS_EXPIRY_MESSAGE2","Log into the site and visit the member's control panel. From there you'll be able to renew your listing.");



DEFINE("_EZAUTOS_PROFILE_DSDET","Contact Details");
DEFINE("_EZAUTOS_PROFILE_MANAGE","Manage Dealer/Seller Profiles");
DEFINE("_EZAUTOS_PROFILE_IMAGE","Profile Image");
DEFINE("_EZAUTOS_PROFILE_NAME","Dealer/Seller Name");
DEFINE("_EZAUTOS_PROFILE_NUMPROPS","Number of Listings");
DEFINE("_EZAUTOS_PROFILE_COMPANY","Company");
DEFINE("_EZAUTOS_PROFILE_EDIT","Edit Seller");
DEFINE("_EZAUTOS_PROFILE_LINK","Link to Existing Member");
DEFINE("_EZAUTOS_PROFILE_TYPE4","Seller Type");
DEFINE("_EZAUTOS_PROFILE_INTRO","Personal Introduction<br />255 char max");
DEFINE("_EZAUTOS_PROFILE_ADDRESS1","Street #");
DEFINE("_EZAUTOS_PROFILE_ADDRESS2","Street Name");
DEFINE("_EZAUTOS_PROFILE_LOCALITY","Locality");
DEFINE("_EZAUTOS_PROFILE_PCODE","Zip/Postcode");
DEFINE("_EZAUTOS_PROFILE_STATE","State");
DEFINE("_EZAUTOS_PROFILE_COUNTRY","Country");
DEFINE("_EZAUTOS_PROFILE_EMAIL","Email");
DEFINE("_EZAUTOS_PROFILE_PHONE","Phone");
DEFINE("_EZAUTOS_PROFILE_FAX","Fax");
DEFINE("_EZAUTOS_PROFILE_MOBILE","Mobile #");
DEFINE("_EZAUTOS_PROFILE_SMS","International Mobile #");
DEFINE("_EZAUTOS_PROFILE_ALLOWSMS","Allow SMS contact");
DEFINE("_EZAUTOS_PROFILE_WEB","Web Site URL");
DEFINE("_EZAUTOS_PROFILE_BLOG","Blog Site URL");
DEFINE("_EZAUTOS_PROFILE_MSN","MSN Username");
DEFINE("_EZAUTOS_PROFILE_SKYPE","Skype Username");
DEFINE("_EZAUTOS_PROFILE_YAHOO","Yahoo Username");
DEFINE("_EZAUTOS_PROFILE_ICQ","ICQ Username");
DEFINE("_EZAUTOS_PROFILE_APPROVE","Approve Profile");
DEFINE("_EZAUTOS_PROFILE_DETAILS","Dealer/Seller Profile Details");
DEFINE("_EZAUTOS_PROFILE_SAVE","Save/Update Profile");
DEFINE("_EZAUTOS_PROFILE_PROFILE","My Profile");
DEFINE("_EZAUTOS_PROFILE_TYPE1","Select your seller status");
DEFINE("_EZAUTOS_PROFILE_TYPE2","Dealer");
DEFINE("_EZAUTOS_PROFILE_TYPE3","Private seller");
DEFINE("_EZAUTOS_PROFILE_SAVED","Profile Details Saved");
DEFINE("_EZAUTOS_PROFILE_SEARCHALL","Search all localities");
DEFINE("_EZAUTOS_PROFILE_AGSELLERS","Our Dealers and Private Sellers");
DEFINE("_EZAUTOS_PROFILE_NOPROFILES","There are no profiles currently listed");
DEFINE("_EZAUTOS_PROFILE_FINDDEALER","Find a dealer/private seller in your area");
DEFINE("_EZAUTOS_PROFILE_AGLINK","Find a Dealer/Seller");
DEFINE("_EZAUTOS_PROFILE_MOBILE2","Mobile");
DEFINE("_EZAUTOS_PROFILE_TEXT","Text message");
DEFINE("_EZAUTOS_SELLER_C","Click here to email");
DEFINE("_EZAUTOS_AGENT_CURRENTLISTINGS","Current Listings");
DEFINE("_EZAUTOS_AGENT_MYLISTINGS","View My Listings");
DEFINE("_EZAUTOS_AGENT_LISTINGSFOR","Listings for:-");
DEFINE("_EZAUTOS_DEALER_NOLISTINGS","There are no listings associated with this profile");
DEFINE("_EZAUTOS_PROFILE_SENDCONTACT","Contact this dealer/seller");
DEFINE("_EZAUTOS_PROFILE_SMSCONTACT","Send SMS via Clickatell to this dealer/seller");
DEFINE("_EZAUTOS_ERROR_NOPROFILE","ATTENTION - You must create your profile before being able to add/edit property listings!! Please click the 'My Profile' link above to do this.");

DEFINE("_EZAUTOS_CONFIG_PROFILING","Manage your site's profile settings");
DEFINE("_EZAUTOS_CONFIG_PROFACCESS","Profile Access");
DEFINE("_EZAUTOS_CONFIG_PROFACCESSDESC","Specify who should be able to view details of a seller's profile. REMEMBER - you MUST NOT restrict access above registered member level - otherwise people will not be able to contact the seller. For the majority of sites - public access should work well.");
DEFINE("_EZAUTOS_CONFIG_PROFILEWIDTH","Profile image width");
DEFINE("_EZAUTOS_CONFIG_PROFILEWIDTHDESC","Maximum allowed width of the profile image. Keep in mind that this is the width that will be displayed on the front-end profile page. Images that exceed this height will be rejected during the upload process.");
DEFINE("_EZAUTOS_CONFIG_PROFILEHEIGHT","Profile image height");
DEFINE("_EZAUTOS_CONFIG_PROFILEHEIGHTDESC","Maximum allowed height of the profile image. keep in mind that this is the height that will be displayed on the front-end profile page. Images that exceed this height will be rejected during the upload process.");

DEFINE("_EZAUTOS_PROFACCESS_DENIED","Our Dealer/Seller profiles have access privileges enabled. Please login first.");

DEFINE("_EZAUTOS_CONFIG_PROFILES","Profiles");
DEFINE("_EZAUTOS_CONFIG_SMS","SMS");
DEFINE("_EZAUTOS_CONFIG_EXP","Expiration");
DEFINE("_EZAUTOS_CONFIG_FMT","Formatting");
DEFINE("_EZAUTOS_CONFIG_SCH","Search");
DEFINE("_EZAUTOS_CONFIG_LINKS","Links");
DEFINE("_EZAUTOS_CONFIG_OPS","Operation");

DEFINE("_EZAUTOS_MIGRATE","Do Migration");
DEFINE("_EZAUTOS_CPANEL","Control Panel");

DEFINE("_EZAUTOS_CPANEL_VMGR","Vehicle Manager");
DEFINE("_EZAUTOS_CPANEL_MGCAT","Manage Categories");
DEFINE("_EZAUTOS_CPANEL_MGVEHMAKE","Manage Vehicle Makes");
DEFINE("_EZAUTOS_CPANEL_MGVEHMOD","Manage Vehicle Models");
DEFINE("_EZAUTOS_CPANEL_MGENG","Manage Engine Size List");
DEFINE("_EZAUTOS_CPANEL_MGPRICE","Manage Price List");
DEFINE("_EZAUTOS_CPANEL_PROFMGR","Profile Manager");
DEFINE("_EZAUTOS_CPANEL_MGSALES","Manage Sales Leads");
DEFINE("_EZAUTOS_CPANEL_SENDALERT","Send Alert Email");
DEFINE("_EZAUTOS_CPANEL_CLEANLIST","Clean Listings");
DEFINE("_EZAUTOS_CPANEL_PRUNE","Prune Shortlist");
DEFINE("_EZAUTOS_CPANEL_UPGRADE","Upgrade Database");
DEFINE("_EZAUTOS_CPANEL_HELP","Help");
DEFINE("_EZAUTOS_CPANEL_MIGRATE","Migrate Members");
DEFINE("_EZAUTOS_CPANEL_CONFIG","Configuration Settings");
DEFINE("_EZAUTOS_CPANEL_INTRO","Introduction");

DEFINE("_EZAUTOS_PROFILE_ERROR_MID","ERROR - You must assign an existing member to this profile!!");

DEFINE("_EZAUTOS_LOCALITY_ERROR","Error - you must include a dealer locality");

DEFINE("_EZAUTOS_USERS","Username");
DEFINE("_EZAUTOS_CONFIG_SHORTLIST","Use shortlist");
DEFINE("_EZAUTOS_CONFIG_SHORTLIST_DESC","The shortlist feature allows registered members to save favourite listings for later review. Select whether you want to use this feature.");
DEFINE("_EZAUTOS_CONFIG_OSTATUS","Online status indicator");
DEFINE("_EZAUTOS_CONFIG_OSTATUSDESC","Online status indicators for the IM systems come and go, and are occasionally offline - and have a range of different indicator buttons. Choose the 'Status Indicator Server' you want to use for your site.");

DEFINE("_EZAUTOS_CONFIG_QUICKLIST","Display Quick List Link");
DEFINE("_EZAUTOS_CONFIG_QUICKLIST_DESC","The quick list is a page listing all of your current published vehicles. It is a text-only page in tabular format. Select whether you want to display a link to this page.");

DEFINE("_EZAUTOS_CURRENT_STOCK","Our Current Stock");
DEFINE("_EZAUTOS_VIEW_STOCK","Quick List");

DEFINE("_EZAUTOS_FILTER_VIN","-All VIN numbers-");
DEFINE("_EZAUTOS_FILTER_REGO","-All Rego numbers-");
DEFINE("_EZAUTOS_ERROR_TYPE","Error - you must assign a seller type");







// TAGS THAT HAD THEIR CONTENT CHANGED FOR THE 5.0.0 RELEASE

DEFINE("_EZAUTOS_VLDET_PRICEDESC","<font color='#FF0000'>This database field has an input mask. Enter figures in this format - 10000.00 - do not use commas!</font>");
DEFINE("_EZAUTOS_CLEANDB_SUCCESS","The database has been cleaned of listings that exceed the allowed number of impressions/days");
DEFINE("_EZAUTOS_CLEANDB_FAIL","The database has not been cleaned as you do not have the 'Expiration Management' system turned on.");
DEFINE("_EZAUTOS_CONFIG_WIDTHMAINIMGDESC","Width of main vehicle image when viewed on the vehicle details page. It's expressed in pixels to assist fitting the image within your template. Images will be resized in the browser to this width for templating, but will retain their original size when opened up.");



//****************************************************//
//  TAGS FROM THE CONFIGURATION AREA THAT ARE NEEDED  //
//****************************************************//



DEFINE("_EZAUTOS_VLDET_AIRCO","Air conditioning");
DEFINE("_EZAUTOS_VLDET_POWIN","Power windows");
DEFINE("_EZAUTOS_VLDET_POSTEER","Power steering");
DEFINE("_EZAUTOS_VLDET_CC","Cruise control");
DEFINE("_EZAUTOS_VLDET_AIRBAGS","Airbags");
DEFINE("_EZAUTOS_VLDET_ALBS","Antilock Braking");
DEFINE("_EZAUTOS_VLDET_AMFM","AM/FM radio");
DEFINE("_EZAUTOS_VLDET_CDP","CD player");
DEFINE("_EZAUTOS_VLDET_ATS","Anti-theft system");
DEFINE("_EZAUTOS_VLDET_TS","Tilt steering");



DEFINE("_EZAUTOS_PREMIUM","Premium");
DEFINE("_EZAUTOS_FEATURED","Featured");






// TAGS THAT NEED TO STAY FOR NOW

DEFINE("_EZAUTOS_CONFIG_ADDFEAT","Additional Features List");
DEFINE("_EZAUTOS_CONFIG_ADDFEATDESC","Would you like to show the additional features list?");
DEFINE("_EZAUTOS_CONFIG_LAY1","Layout");

DEFINE("_EZAUTOS_DETAILS_PROPPOSTCODE","Zip/Post Code Location of Vehicle");
DEFINE("_EZAUTOS_SEARCH_ANYPCODE","Any Zip/Post Code");
DEFINE("_EZAUTOS_SEARCH_PCODEAREA","Zip/Post Code Area");


DEFINE("_EZAUTOS_ERROR_PCODE","You must include a zip/post code");
DEFINE("_EZAUTOS_CONFIG_PCODE","Use Zip/PostCode");
DEFINE("_EZAUTOS_CONFIG_PCODE_DESC","Do you want to use the zip/postcode variable on the search filters to allow identification of listings in a particular area? If you only list your own vehicles, this wouldn't be relevant so set it to 'no'.");


// AFTERTHOUGHTS - TAGS INTRODUCED LATE IN THE DEVELOPMENT PROCESS


DEFINE("_EZAUTOS_OPTIMIZE_DATABASE","The EZ Autos database tables have been optimized!");
DEFINE("_EZAUTOS_CPANEL_OPTIMIZE","Optimize Tables");
DEFINE("_EZAUTOS_MIGRATE_ERROR","Error - you forgot to select your site members!");
DEFINE("_EZAUTOS_ALERTMSG_PT1","E-mail sent to");
DEFINE("_EZAUTOS_ALERTMSG_PT2","users");

DEFINE("_EZAUTOS_ORDER_LIST1","ID asc");
DEFINE("_EZAUTOS_ORDER_LIST2","ID desc");
DEFINE("_EZAUTOS_ORDER_LIST3","Seller Name asc");
DEFINE("_EZAUTOS_ORDER_LIST4","Seller Name desc");
DEFINE("_EZAUTOS_ORDER_LIST5","Category Name asc");
DEFINE("_EZAUTOS_ORDER_LIST6","Category Name desc");
DEFINE("_EZAUTOS_ORDER_LIST7","Year asc");
DEFINE("_EZAUTOS_ORDER_LIST8","Year desc");
DEFINE("_EZAUTOS_ORDER_LIST9","Published asc");
DEFINE("_EZAUTOS_ORDER_LIST10","Published desc");
DEFINE("_EZAUTOS_ORDER_LIST11","Approved asc");
DEFINE("_EZAUTOS_ORDER_LIST12","Approved desc");
DEFINE("_EZAUTOS_ORDER_LIST13","Premium asc");
DEFINE("_EZAUTOS_ORDER_LIST14","Premium desc");
DEFINE("_EZAUTOS_ORDER_LIST15","Featured asc");
DEFINE("_EZAUTOS_ORDER_LIST16","Featured desc");
DEFINE("_EZAUTOS_ORDER_LIST17","Expiration date asc");
DEFINE("_EZAUTOS_ORDER_LIST18","Expiration date desc");
DEFINE("_EZAUTOS_ORDER_LIST19","Model asc");
DEFINE("_EZAUTOS_ORDER_LIST20","Model desc");

DEFINE("_EZAUTOS_LISTINGS_TIMEINTRO","Listings are discontinued after");
DEFINE("_EZAUTOS_LISTINGS_TIME2","days, and you will have a further");
DEFINE("_EZAUTOS_LISTINGS_TIME3","days during which you may renew your listing.");
DEFINE("_EZAUTOS_LISTINGS_TIMEEXPL","If upgrading between listing levels/types - the expiry date will be reset.");

DEFINE("_EZAUTOS_MYEZPANEL","My EZ Panel");
DEFINE("_EZAUTOS_MYPROFILE","My Profile");
DEFINE("_EZAUTOS_MYLISTINGS","My Listings");
DEFINE("_EZAUTOS_MYLIGHTBOX","My Shortlist");

DEFINE("_EZAUTOS_ORDERBY","Order by");
DEFINE("_EZAUTOS_MAPPING_INCOMPATIBLE","Sorry - Your browser does not support mapping display");


DEFINE("_EZAUTOS_PRANGE_ERROR2","Error - you must include a display value");
DEFINE("_EZAUTOS_TEMPLATE_ERROR","Error - you must define the frontend template layouts - check the formatting tab in the EZ Autos configuration area. ");


//****************************************************//
//  TAGS ADDED FOR THE 5.1.0 STABLE RELEASE           //
//****************************************************//



DEFINE("_EZAUTOS_CPANEL_STATIC","Static Content");
DEFINE("_EZAUTOS_CPANEL_DOCUMENTATION","Documentation");
DEFINE("_EZAUTOS_CPANEL_MLIST","Mailing List Submissions");
DEFINE("_EZAUTOS_MANAGE_STATIC","Manage Static Content");
DEFINE("_EZAUTOS_CONTENT_ITEM","Content Item");
DEFINE("_EZAUTOS_CONTENT_ERROR","you must add some content");
DEFINE("_EZAUTOS_MANAGE_SUBSCRIBER","Manage Mailing List Submissions");
DEFINE("_EZAUTOS_SUBSCRIBER_NAME","Name");
DEFINE("_EZAUTOS_SUBSCRIBER_EMAIL","Email address");
DEFINE("_EZAUTOS_SUBSCRIBER_CONFIRMED","Confirmed");
DEFINE("_EZAUTOS_SUBSCRIBER_DATE","Date");
DEFINE("_EZAUTOS_ERROR_SUBNAME","Error - you must include a name");
DEFINE("_EZAUTOS_ERROR_EMAIL","Error - you must include an email address");
DEFINE("_EZAUTOS_EMAIL_FORMAT_ERROR","Error - incorrect email address format : please supply a valid email address");

DEFINE("_EZAUTOS_CPANEL_FEEDS","Feeds");
DEFINE("_EZAUTOS_CPANEL_FEEDSDESC","In addition to the RSS 2.0 feed of new listings that has always been available, EZ Autos now has the ability to feed your vehicle listings out to the Google Base system.<br /><br /><strong>This feed is a new feature - and it's still experimental - so if you encounter problems with it please submit a support ticket reporting any bugs.</strong>");
DEFINE("_EZAUTOS_CPANEL_GOOGLE1","Your Google RSS 2.0 Feed");
DEFINE("_EZAUTOS_CPANEL_GOOGLE2","Visit Google for more information");

DEFINE("_EZAUTOS_VLDET_PRICETYPE","Price type");
DEFINE("_EZAUTOS_VLDET_DECLAT","Decimal Latitude");
DEFINE("_EZAUTOS_VLDET_DECLONG","Decimal Longitude");

DEFINE("_EZAUTOS_CONFIG_YOURVIDEOS","Your Video Settings");
DEFINE("_EZAUTOS_CONFIG_FLV","Embed FLV Video Files");
DEFINE("_EZAUTOS_CONFIG_FLV_DESC","You can now allow externally hosted FLV files to be embedded in the page output for use as a video display of a vehicle. FLV files are flash movies, which have a number of benefits over embedding other video formats.");
DEFINE("_EZAUTOS_CONFIG_FLVWIDTH","Display Width");
DEFINE("_EZAUTOS_CONFIG_FLVWIDTH_DESC","The display width of embedded FLV files in pixels. The width you define will depend on its position in the template, and your template width.");
DEFINE("_EZAUTOS_CONFIG_FLVHEIGHT","Display Height");
DEFINE("_EZAUTOS_CONFIG_FLVHEIGHT_DESC","The display height of embedded FLV files in pixels. This can be left the same as the display width.");
DEFINE("_EZAUTOS_TABS_VIDEO","Video");
DEFINE("_EZAUTOS_LISTINGS_FLVMODE","This site is configured to allow use of embedded FLV files as a marketing tool. Please enter the URL to your FLV file if applicable.");
DEFINE("_EZAUTOS_DETAILS_VTOUR","URL to FLV Video File");

DEFINE("_EZAUTOS_EMAIL_FORMAT_ERROR","You have an error with your email address - please try again.");


DEFINE("_EZAUTOS_MAP_DIRECTIONS","Directions");
DEFINE("_EZAUTOS_MAP_TOHERE","To here");
DEFINE("_EZAUTOS_MAP_FROMHERE","From here");
DEFINE("_EZAUTOS_MAP_START","Start address");
DEFINE("_EZAUTOS_MAP_END","End address");
DEFINE("_EZAUTOS_MAPPING_INCOMPATIBLE","Sorry, the Google Maps API is not compatible with this browser");

DEFINE("_EZAUTOS_VIDEO","Video");
DEFINE("_EZAUTOS_OWNER_ERROR","Error - you must assign a listing owner");

DEFINE("_EZAUTOS_CONFIG_MAPTYPE3","Google Coordinates");
DEFINE("_EZAUTOS_CONFIG_SEARCHLINK","Show search filter link");
DEFINE("_EZAUTOS_CONFIG_SEARCHLINK_DESC","Do you want to show the link to the main search filter?");

DEFINE("_EZAUTOS_FNA","File not available");
DEFINE("_EZAUTOS_KSNA","Your keyserver file is missing");
DEFINE("_EZAUTOS_LFNA","License file is missing");
DEFINE("_EZAUTOS_VEHICLE_INFO","Vehicle Info");
DEFINE("_EZAUTOS_LICKEYNUM","License Key Number");
DEFINE("_EZAUTOS_LICKEYNUM_ERROR","Error - you must insert a license key number");

DEFINE("_EZAUTOS_ENTER_CAPTCHA","Enter security code shown below");
DEFINE("_EZAUTOS_SECURITY_FAILED","Error - Incorrect Security Code");

DEFINE("_EZAUTOS_PNPFC","You can contact this seller once their profile is approved.");
DEFINE("_EZAUTOS_FIND_COORDINATES","CLICK HERE to find your decimal coordinates");
DEFINE("_EZAUTOS_SHORTLIST_ERROR","ERROR - You already have this vehicle in your shortlist.");
DEFINE("_EZAUTOS_PROFILE_TYPE_ERROR","ERROR - You must select a seller type");
DEFINE("_EZAUTOS_PRICETYPE","You can add a message to your price such as 'negotiable', or if hiding your VEHICLE price - write a special message - eg. 'suit buyers above $5,000 etc'");

DEFINE("_EZAUTOS_WRITABLE","Writeable");
DEFINE("_EZAUTOS_UNWRITABLE","Unwriteable");
DEFINE("_EZAUTOS_SAVE","Save");
DEFINE("_EZAUTOS_LICENSE_KEY","License Key Number");

DEFINE("_EZAUTOS_DUPLICATE_PROFILE_ERROR","Error - each site member can only have one profile, and you have already created a profile for this username.");


// TAGS THAT HAD THEIR CONTENT CHANGED FOR THE 5.1.0 STABLE RELEASE


DEFINE("_EZAUTOS_CONFIG_SHOWPROF_DESC","Do you want to display member profile details on the full details page of the listing? If setting this to 'NO' this will also turn off all access to front-end profiles, although people who create listings will still be required to create a profile. You can then use the vehicle enquiry link if wanting people to contact admin about listings.");



// MISSING TAGS FOUND DURING A REVIEW OF THE 5.1.2 VERSION


DEFINE("_EZAUTOS_LISTINGS_SELLER","Seller");
DEFINE("_EZAUTOS_VLDET_DELETE","Delete");
DEFINE("_EZAUTOS_VLDET_FUEL","Fuel type");
DEFINE("_EZAUTOS_VLDET_VIN","VIN #");
DEFINE("_EZAUTOS_VLDET_SHOWCARFEAT","Show additional/custom features");
DEFINE("_EZAUTOS_VLDET_SHOWCARFEATDESC","If you have nothing to specify from the items below, set this value to 'no' so the boxed area won't show up on the front-end.");
DEFINE("_EZAUTOS_VLDET_ADDFEATDESC","The names for these are now defined in the configuration area, so you can name the features according to your needs. Features will not show up on the front-end if set to 'no'.");
DEFINE("_EZAUTOS_DETAILS_PUBL","Publish Vehicle Listing");
DEFINE("_EZAUTOS_DETAILS_LISTSTATUS","Listing Type");
DEFINE("_EZAUTOS_DETAILS_FREESTATUS","Free Listing");
DEFINE("_EZAUTOS_DETAILS_LISTPREMIUM","Make Featured");
DEFINE("_EZAUTOS_VLDET_IMAGE1","IMAGE1");
DEFINE("_EZAUTOS_VLDET_IMAGE2","IMAGE2");
DEFINE("_EZAUTOS_VLDET_IMAGE3","IMAGE3");
DEFINE("_EZAUTOS_VLDET_IMAGE4","IMAGE4");
DEFINE("_EZAUTOS_VLDET_IMAGE5","IMAGE5");
DEFINE("_EZAUTOS_VLDET_IMAGE6","IMAGE6");
DEFINE("_EZAUTOS_VLDET_IMAGE7","IMAGE7");
DEFINE("_EZAUTOS_VLDET_IMAGE8","IMAGE8");
DEFINE("_EZAUTOS_VLDET_IMAGE9","IMAGE9");
DEFINE("_EZAUTOS_VLDET_IMAGE10","IMAGE10");
DEFINE("_EZAUTOS_VLDET_IMAGE11","IMAGE11");
DEFINE("_EZAUTOS_VLDET_IMAGE12","IMAGE12");
DEFINE("_EZAUTOS_VLDET_OPENFULLSIZE","Open full size image");
DEFINE("_EZAUTOS_VLDET_DELETEIMG","Delete image");
DEFINE("_EZAUTOS_VLDET_CURRENTIMG","Current Image");
DEFINE("_EZAUTOS_VLDET_IMAGEDELETED","Image deleted");
DEFINE("_EZAUTOS_VLDET_UPLOADNEW","Upload new image");
DEFINE("_EZAUTOS_CONFIG_TNCREATOR","Thumbnail Creator");
DEFINE("_EZAUTOS_CONFIG_GDCHOOSE","Choose image processor for thumbnail creation.");
DEFINE("_EZAUTOS_CONFIG_GDFOUND","Found GD");
DEFINE("_EZAUTOS_CONFIG_GDLIMIT","GD only supports jpg and png!");
DEFINE("_EZAUTOS_CONFIG_WIDTHTHUMB","Thumbnail max Width");
DEFINE("_EZAUTOS_CONFIG_WIDTHTHUMBDESC","Width of the vehicle image thumbnails created which will then be used on the front-end");
DEFINE("_EZAUTOS_CONFIG_THUMBQUAL","Thumbnail Quality");
DEFINE("_EZAUTOS_CONFIG_THUMBQUALDESC","Quality of the thumbnails created.");
DEFINE("_EZAUTOS_CONFIG_IMGDIR","Image Directory");
DEFINE("_EZAUTOS_CONFIG_IMGDIRDESC","The default image directory is called 'ezautos' and located in the components/com_ezautos/ezautos path. Thumbnails are stored in a directory within this one, called th. If you change your directory name, you'll need to create a new image/thumbs directory manually. You MUST NOT change the name of the th directory.");
DEFINE("_EZAUTOS_CONFIG_IMG1","Images");
DEFINE("_EZAUTOS_CONFIG_TNNONE","None");
DEFINE("_EZAUTOS_CONFIG_TNGD1","GD Library");
DEFINE("_EZAUTOS_CONFIG_TNGD2","GD2 Library");
DEFINE("_EZAUTOS_CONFIG_TPL","Front-end Template");
DEFINE("_EZAUTOS_CONFIG_TPLDESC","Select the layout you want for the front-end. This currently influences the look of the vehicle details page and print details page.");
DEFINE("_EZAUTOS_CONFIG_SELTPL","Select Template");
DEFINE("_EZAUTOS_CONFIG_RSSNN","New RSS Listings Feed name");
DEFINE("_EZAUTOS_CONFIG_RSSNNDESC","What would you like to call your new listings RSS feed?");
DEFINE("_EZAUTOS_CONFIG_MEMLISTINGS","Member Listings");
DEFINE("_EZAUTOS_CONFIG_MEMLISTINGSDESC","Would you like to allow registered site members to list vehicles for sale via the front-end listings panel?");
DEFINE("_EZAUTOS_CONFIG_PAIDLISTINGS","Paid Listings");
DEFINE("_EZAUTOS_CONFIG_PAIDLISTINGSDESC","Do you want to offer paid listings on your site? Paid listings allow members to include additional images and information in their listing.");
DEFINE("_EZAUTOS_CONFIG_NOTIFICATION","Listings Notification");
DEFINE("_EZAUTOS_CONFIG_NOTIFICATIONDESC","Would you like to be notified of new and updated listings?");
DEFINE("_EZAUTOS_CONFIG_MEMAPPROVAL","Approval Process");
DEFINE("_EZAUTOS_CONFIG_MEMAPPROVALDESC","Do new and updated listings require admin approval before publishing?");
DEFINE("_EZAUTOS_CONFIG_NUMLISTINGS","Number of listings");
DEFINE("_EZAUTOS_CONFIG_NUMLISTINGSDESC","How many FREE listings can members have?");
DEFINE("_EZAUTOS_CONFIG_MEMSALES","Manage Front-end Vehicle Listings by Registered Members");
DEFINE("_EZAUTOS_CONFIG_MEMLISTINGS","Member Listings");
DEFINE("_EZAUTOS_CONFIG_MEM1","Members");
DEFINE("_EZAUTOS_CONFIG_PP","Your PayPal Settings for Offering Paid Listings");
DEFINE("_EZAUTOS_CONFIG_PPEMAIL","PayPal email address");
DEFINE("_EZAUTOS_CONFIG_CHECKMAIL","CheckMail");
DEFINE("_EZAUTOS_CONFIG_CHECKMAILDESC","Repeat your PRIMARY PayPal email address here. It's used to check transactions for forms of electronic fraud involving PayPal email addresses.  This one MUST NOT be an encrypted format!!");
DEFINE("_EZAUTOS_CONFIG_PPCURRENCY","Currency Code");
DEFINE("_EZAUTOS_CONFIG_PPCURRENCYDESC","This must be the 3-letter PayPal currency code for your PRIMARY PayPal currency - not one your make up.");
DEFINE("_EZAUTOS_CONFIG_PPBUTTON","Button Image");
DEFINE("_EZAUTOS_CONFIG_PPBUTTONDESC","Name of the button image used for upgrading listings on the front-end. Button images must be kept in the front-end images directory.");
DEFINE("_EZAUTOS_CONFIG_PPPREMIUM","Standard Upgrade Name");
DEFINE("_EZAUTOS_CONFIG_PPPREMIUMDESC","What would you like to call your listing upgrades - eg. Premium/Enhanced Listing etc. This will appear as the Item Name in button code and PayPal transaction reports.");
DEFINE("_EZAUTOS_CONFIG_PPCOST","Standard Upgrade Cost");
DEFINE("_EZAUTOS_CONFIG_PPCOSTDESC","The cost of upgrading a free vehicle listing to a paid listing.");
DEFINE("_EZAUTOS_CONFIG_PPPOSTMODE","Post Mode");
DEFINE("_EZAUTOS_CONFIG_PPPOSTMODEDESC","Set to 'Live Sales' to sell real updates via the PayPal system, or test your installation by doing 'Test Sales' via the PayPal Developers Network Sandbox.");
DEFINE("_EZAUTOS_CONFIG_LS","Live Sales");
DEFINE("_EZAUTOS_CONFIG_TS","Test Sales");
DEFINE("_EZAUTOS_CONFIG_FPCOST","Featured Listing Upgrade Cost");
DEFINE("_EZAUTOS_CONFIG_FPCOSTDESC","The cost of upgrading a paid vehicle listing to a featured listing. Remember - members cannot upgrade directly from a free listing - they must first upgrade to a standard paid listing.");
DEFINE("_EZAUTOS_CONFIG_PAGELAYOUT","Manage the front-end layout of your site");
DEFINE("_EZAUTOS_DDSL_TRANS","Transmission");
DEFINE("_EZAUTOS_SEARCH_SEARCHORD","Select Order");
DEFINE("_EZAUTOS_DDSL_PRASC","Price Ascending");
DEFINE("_EZAUTOS_DDSL_PRDESC","Price Descending");
DEFINE("_EZAUTOS_DDSL_IDASC","Date Ascending");
DEFINE("_EZAUTOS_DDSL_IDDESC","Date Descending");
DEFINE("_EZAUTOS_LISTING2","Contact name");
DEFINE("_EZAUTOS_LISTING3","Contact telephone");
DEFINE("_EZAUTOS_LISTING4","Email address");
DEFINE("_EZAUTOS_LISTING6","Contact email");
DEFINE("_EZAUTOS_LISTING7","Contact seller");
DEFINE("_EZAUTOS_LISTING8","Owner Details");

DEFINE("_EZAUTOS_LISTING9","Name");
DEFINE("_EZAUTOS_LISTING10","Telephone");
DEFINE("_EZAUTOS_LISTING11","Email");


// NEW LANGUAGE TAGS FOR THE 5.2.0 STABLE RELEASE


DEFINE("_EZAUTOS_PROFILE_PDF_BROCH","Promotional PDF File");
DEFINE("_EZAUTOS_PROFILE_PDF_UPLOAD","Upload PDF File");
DEFINE("_EZAUTOS_PROFILE_PDF_DELETE","Delete PDF File");
DEFINE("_EZAUTOS_PROFILE_PDF_DELETED","PDF File Deleted");
DEFINE("_EZAUTOS_PROFILE_CURRENT_PDF","Current PDF File");
DEFINE("_EZAUTOS_PROFILE_DOWNLOAD_PROMO","Download our promotional PDF");

DEFINE("_EZAUTOS_PROFILE_LOGO","Dealership Logo");
DEFINE("_EZAUTOS_PROFILE_MAXSIZE","Maximum image size allowed is");

DEFINE("_EZAUTOS_CONFIG_LOGOWIDTH","Logo Width");
DEFINE("_EZAUTOS_CONFIG_LOGOHEIGHT","Logo Height");

DEFINE("_EZAUTOS_CONFIG_LOGOWIDTHDESC","Maximum allowed width of the logo image associated with a seller. Keep in mind that this is the width that will be displayed on the front-end profile page and property listings pages. Images that exceed this width will be resized during the upload process. A good width is 160 pixels.");
DEFINE("_EZAUTOS_CONFIG_LOGOHEIGHTDESC","Maximum allowed height of the logo image associated with a seller. Keep in mind that this is the width that will be displayed on the front-end profile page and property listings pages. Images that exceed this height will be resized during the upload process. A good height is 30 pixels.");

DEFINE("_EZAUTOS_DEALER_EXEMPT","Payment exemption");
DEFINE("_EZAUTOS_DEALER_EXEMPT_DESC","If running in one of the paid listing modes - would you like this seller to be exempt from having to pay for premium listings?");

DEFINE("_EZAUTOS_FEAT_UPGR","Featured listings upgrade");
DEFINE("_EZAUTOS_FEAT_UPGR_DESC","If your seller is exempt from paid listings, would you like to allow them to assign featured status to their own listings?");

DEFINE("_EZAUTOS_PUBLISH_OWN","Publishing privileges");
DEFINE("_EZAUTOS_PUBLISH_OWN_DESC","Would you like this seller to have frontend publishing privileges? This will allow the seller to publish/unpublish their own listings via the frontend if you do not autopublish listings.");

DEFINE("_EZAUTOS_EXPRESET","Expiry reset privileges");
DEFINE("_EZAUTOS_EXPRESET_DESC","Would you like to allow your seller to reset their own expired listing dates?");

DEFINE("_EZAUTOS_PROFILE_UNITNUM","Flat/Unit/Apartment Number");

DEFINE("_EZAUTOS_PROFILE_DEXEMPT","You are exempt from the pay per listing system");
DEFINE("_EZAUTOS_PROFILE_DFEAT","You are permitted to upgrade your listings to premium status");
DEFINE("_EZAUTOS_PROFILE_DOWN","You are permitted to publish/unpublish your own listings");
DEFINE("_EZAUTOS_PROFILE_DEXPRESET","You are permitted to reset the expiry date of your own listings");
DEFINE("_EZAUTOS_PROFILE_NOSPECPRIV","No special privileges");

DEFINE("_EZAUTOS_VLDET_IMAGE13","IMAGE13");
DEFINE("_EZAUTOS_VLDET_IMAGE14","IMAGE14");
DEFINE("_EZAUTOS_VLDET_IMAGE15","IMAGE15");
DEFINE("_EZAUTOS_VLDET_IMAGE16","IMAGE16");
DEFINE("_EZAUTOS_VLDET_IMAGE17","IMAGE17");
DEFINE("_EZAUTOS_VLDET_IMAGE18","IMAGE18");
DEFINE("_EZAUTOS_VLDET_IMAGE19","IMAGE19");
DEFINE("_EZAUTOS_VLDET_IMAGE20","IMAGE20");
DEFINE("_EZAUTOS_VLDET_IMAGE21","IMAGE21");
DEFINE("_EZAUTOS_VLDET_IMAGE22","IMAGE22");
DEFINE("_EZAUTOS_VLDET_IMAGE23","IMAGE23");
DEFINE("_EZAUTOS_VLDET_IMAGE24","IMAGE24");

DEFINE("_EZAUTOS_REORDER_IMAGES","Reorder Images");

DEFINE("_EZAUTOS_FUEL_TYPE1","Not specified");
DEFINE("_EZAUTOS_FUEL_TYPE2","Unleaded Petrol");
DEFINE("_EZAUTOS_FUEL_TYPE3","Diesel");
DEFINE("_EZAUTOS_FUEL_TYPE4","Bio-Diesel");
DEFINE("_EZAUTOS_FUEL_TYPE5","Electric");
DEFINE("_EZAUTOS_FUEL_TYPE6","Hybrid");
DEFINE("_EZAUTOS_FUEL_TYPE7","E85");
DEFINE("_EZAUTOS_FUEL_TYPE8","LPG/Auto Gas");
DEFINE("_EZAUTOS_FUEL_TYPE9","Gas");
DEFINE("_EZAUTOS_FUEL_TYPE10","Two Stroke");
DEFINE("_EZAUTOS_FUEL_TYPE11","Other");
DEFINE("_EZAUTOS_FUEL_TYPE12","Any");
DEFINE("_EZAUTOS_FUEL_TYPE13","Petrol");

DEFINE("_EZAUTOS_COLOUR_TYPE0","Not specified");
DEFINE("_EZAUTOS_COLOUR_TYPE2","Beige");
DEFINE("_EZAUTOS_COLOUR_TYPE3","Black");
DEFINE("_EZAUTOS_COLOUR_TYPE4","Blue");
DEFINE("_EZAUTOS_COLOUR_TYPE5","Brown");
DEFINE("_EZAUTOS_COLOUR_TYPE6","Burgundy");
DEFINE("_EZAUTOS_COLOUR_TYPE7","Cream");
DEFINE("_EZAUTOS_COLOUR_TYPE8","Gold");
DEFINE("_EZAUTOS_COLOUR_TYPE9","Green");
DEFINE("_EZAUTOS_COLOUR_TYPE10","Grey");
DEFINE("_EZAUTOS_COLOUR_TYPE11","Multicoloured");
DEFINE("_EZAUTOS_COLOUR_TYPE12","Orange");
DEFINE("_EZAUTOS_COLOUR_TYPE13","Oyster");
DEFINE("_EZAUTOS_COLOUR_TYPE14","Pink");
DEFINE("_EZAUTOS_COLOUR_TYPE15","Purple");
DEFINE("_EZAUTOS_COLOUR_TYPE16","Red");
DEFINE("_EZAUTOS_COLOUR_TYPE17","Silver");
DEFINE("_EZAUTOS_COLOUR_TYPE18","Tan");
DEFINE("_EZAUTOS_COLOUR_TYPE19","White");
DEFINE("_EZAUTOS_COLOUR_TYPE20","Wine");
DEFINE("_EZAUTOS_COLOUR_TYPE21","Yellow");

DEFINE("_EZAUTOS_IMGMGR_PAGETITLE","Manage Main Vehicle Images");
DEFINE("_EZAUTOS_IMGMGR_IMGNAME","File name");
DEFINE("_EZAUTOS_IMGMGR_DIMENSIONS","File dimensions (widthxheight)");
DEFINE("_EZAUTOS_IMGMGR_SIZE","File size");
DEFINE("_EZAUTOS_IMGMGR_ASSOCID","Associated listing ID");
DEFINE("_EZAUTOS_IMGMGR_DELIFUNUSED","Delete file if unused");
DEFINE("_EZAUTOS_IMGMGR_BYTES","bytes");
DEFINE("_EZAUTOS_IMGMGR_DELTHISFILE","Delete this file");
DEFINE("_EZAUTOS_IMGMGR_ASSTN","(and associated thumbnail)");
DEFINE("_EZAUTOS_IMGMGR_THPAGETITLE","Manage Vehicle Image Thumbnails");
DEFINE("_EZAUTOS_IMGMGR_ASSMI","(and associated main image)");
DEFINE("_EZAUTOS_IMGMGR_MGPROFUPLOADS","Manage Profile Uploads");
DEFINE("_EZAUTOS_IMGMGR_FILEDELETED","File Deleted");
DEFINE("_EZAUTOS_IMGMGR_PROPDOCUPLOADS","Manage vehicle listing document uploads");


DEFINE("_EZAUTOS_CPANEL_MGEUPLOADS","Manage Orphan Uploads");
DEFINE("_EZAUTOS_CPANEL_SYNCH_DONE","new member account details have been added to the EZ Autos profiling system");
DEFINE("_EZAUTOS_CPANEL_SYNCH","Synch New Members with Profiles");

DEFINE("_EZAUTOS_TOOLS_PRUNEORPHANS","Prune Orphan Profiles & Listings");
DEFINE("_EZAUTOS_TOOLS_PRUNEORPHANS_WARNING","WARNING - This action will delete profiles and property listings that no longer have an associated core membership account. It is permanent - and you cannot retrieve the data once it has been deleted.");
DEFINE("_EZAUTOS_TOOLS_PRUNEORPHANS_MSG1","Deleted:-");
DEFINE("_EZAUTOS_TOOLS_PRUNEORPHANS_MSG2","user profiles and any associated property listings.");
DEFINE("_EZAUTOS_TOOLS_PRUNEORPHANS_MSG3","No profiles found eligible for pruning.");

DEFINE("_EZAUTOS_NO_SUBSCRIBER_EXPORTS","There are no current subscribers to export");
DEFINE("_EZAUTOS_MLIST_EXPORTED","Exported");
DEFINE("_EZAUTOS_MLIST_NOTEXPORTED","Not Exported");
DEFINE("_EZAUTOS_MLIST_NOTCONFIRMED","Not Confirmed");
DEFINE("_EZAUTOS_MLIST_PRUNESUBS","Prune Mailing List");
DEFINE("_EZAUTOS_MLIST_PRUNESUBS_WARNING","WARNING - This will delete all mailing list submissions that have previously been exported out into the xml file. It is permanent - and you cannot retrieve the data once it has been deleted.");
DEFINE("_EZAUTOS_MLIST_PRUNESUBS_DONE","subscription listings that were previously exported");
DEFINE("_EZAUTOS_MLIST_PRUNESUBS_NONE","No subscriptions found for pruning.");
DEFINE("_EZAUTOS_MLIST_EXPORT","Export Mailing List subscribers in XML format for import into your mailing list manager");
DEFINE("_EZAUTOS_EXPORTS","Exports");

DEFINE("_EZAUTOS_CPANEL_MAINTTOOLS","Maintenance Tools");
DEFINE("_EZAUTOS_CPANEL_DBTOOLS","Database Tools");
DEFINE("_EZAUTOS_CPANEL_SYSTOOLS","System Management Areas");
DEFINE("_EZAUTOS_CPANEL_EMAILTOOLS","Email Tools");

DEFINE("_EZAUTOS_SEARCH_MAXPRI","Select Max Price");
DEFINE("_EZAUTOS_LEADS_BUDGET","Max. Purchase Budget");

DEFINE("_EZAUTOS_LEADS_PUBLISHONWANTED","Show vehicle details on frontend wanted page");
DEFINE("_EZAUTOS_LEADS_OLDBUDGET","Redundant Budget Details<br />This has been replaced by a maximum budget list - to assist in automatching properties for email notifications. Please select an appropriate value from the max budget list.");
DEFINE("_EZAUTOS_LEADS_HTML","Receive HTML email format");
DEFINE("_EZAUTOS_LEADS_PUBLFE","Publish wanted details");

DEFINE("_EZAUTOS_PROFILE_SHOWRAP","Show RapLeaf Reputation");
DEFINE("_EZAUTOS_PROFILE_CURRENTRAP","Current RapLeaf Reputation");
DEFINE("_EZAUTOS_PROFILE_MORERAP","Get your own RapLeaf reputation account");
DEFINE("_EZAUTOS_PROFILE_RAPMAIL","Use the email address associated with your RapLeaf account if you want to display your RapLeaf reputation.");

DEFINE("_EZAUTOS_PROFILE_MAIL_CURRENTLISTINGS","Your Property Listings Report");
DEFINE("_EZAUTOS_PROFILE_MAIL_LISTINGSREPORT","Listings Report");
DEFINE("_EZAUTOS_PROFILE_VIPNOTIFICATIONS","VIP Buyers notifications");
DEFINE("_EZAUTOS_NOTIFICATIONS_OVERVIEW","Property overview:-");
DEFINE("_EZAUTOS_NOTIFICATIONS_UNSUBSCRIBE","Unsubscribe");

DEFINE("_EZAUTOS_NOTIFICATIONS_SUMMARY","Summary");
DEFINE("_EZAUTOS_NOTIFICATIONS_TOTALLISTINGS","Total listings");
DEFINE("_EZAUTOS_NOTIFICATIONS_TOTALHITS","Total hits");
DEFINE("_EZAUTOS_NOTIFICATIONS_EMAILSENT","Email of current listings sent");
DEFINE("_EZAUTOS_CPANEL_SENDLISTINGS","Send Listings Report to Sellers");

DEFINE("_EZAUTOS_LISTINGS_RPT","Vehicle Listings Report");
DEFINE("_EZAUTOS_CHECK_LEADSALERT","You are about to send email notifications to people on your buyers register. This could take a while.");
DEFINE("_EZAUTOS_CPANEL_LEADNOTIFICATIONS","Send VIP Buyer Email Notifications");

DEFINE("_EZAUTOS_CONFIG_USEWATERMARK","Use Image Watermarks");
DEFINE("_EZAUTOS_CONFIG_USEWATERMARK_DESC","Do you want to use watermarking on your images. Watermarks currently include a sold graphic for sold listings, and a WOW graphic for featured listings.");

DEFINE("_EZAUTOS_CONFIG_INI","PHP.INI Memory Over-ride Settings");
DEFINE("_EZAUTOS_CONFIG_INIOVERRIDE","Over-ride php.ini memory");
DEFINE("_EZAUTOS_CONFIG_INIOVERRIDE_DESC","Some servers run out of memory when uploading and resizing/thumbnailing images, so you can over-ride the php.ini memory settings temporarily during the image upload process. Do you want to do this?");

DEFINE("_EZAUTOS_CONFIG_INISIZE","Temporary memory size");
DEFINE("_EZAUTOS_CONFIG_INISIZE_DESC","How much memory in megabytes do you want to allocate temporarily? If you are receiving memory errors when saving vehicle listings - start with 20 and gradually increase until the error is resolved. ***USE NUMBERS ONLY***");
DEFINE("_EZAUTOS_CONFIG_APPROF","Auto-approve Profile");
DEFINE("_EZAUTOS_CONFIG_APPROF_DESC","Do you want member profiles to be automatically approved when they're created?");


DEFINE("_EZAUTOS_PROFILE_TOPPER","Page Topper");
DEFINE("_EZAUTOS_CONFIG_TOPPERWIDTH","Max Page Topper Width");
DEFINE("_EZAUTOS_CONFIG_TOPPERWIDTHDESC","Size in pixels that the page topper graphic will be resized to. This graphic appears above the page that displays the agents listings.");

DEFINE("_EZAUTOS_CONFIG_TOPPERHEIGHT","Max Page Topper Height");
DEFINE("_EZAUTOS_CONFIG_TOPPERHEIGHTDESC","Size in pixels that the page topper graphic will be resized to. This graphic appears above the page that displays the agents listings.");

DEFINE("_EZAUTOS_CONFIG_MAPVIEW","Map Overlay");
DEFINE("_EZAUTOS_CONFIG_MAPVIEWDESC","Select the default map overlay type you want to use.");
DEFINE("_EZAUTOS_CONFIG_MAPVIEW1","Normal");
DEFINE("_EZAUTOS_CONFIG_MAPVIEW2","Satellite");
DEFINE("_EZAUTOS_CONFIG_MAPVIEW3","Hybrid");

DEFINE("_EZAUTOS_PROFILE_LINKEDIN","LinkedIn");
DEFINE("_EZAUTOS_PROFILE_LINKEDIN_DESC","Your LinkedIn profile link code.");

DEFINE("_EZAUTOS_PROF_BIO","Professional Bio");

DEFINE("_EZAUTOS_TRANSTYPE_SEMIA","Semi-Automatic");
DEFINE("_EZAUTOS_TRANSTYPE_CVT","CVT");
DEFINE("_EZAUTOS_TRANSTYPE_OTH","Other");

DEFINE("_EZAUTOS_SPECS_CO2","CO2 emission");
DEFINE("_EZAUTOS_SPECS_CO2_DESC","The unit is g/km - enter this amount in numbers only");

DEFINE("_EZAUTOS_SPECS_NUMOWNERS","Number of owners");
DEFINE("_EZAUTOS_SPECS_NUMOWNERS_DESC","Enter this in numbers only");

DEFINE("_EZAUTOS_SPECS_DOORS1","1");
DEFINE("_EZAUTOS_SPECS_DOORS2","2");
DEFINE("_EZAUTOS_SPECS_DOORS3","3");
DEFINE("_EZAUTOS_SPECS_DOORS4","4");
DEFINE("_EZAUTOS_SPECS_DOORS5","5");
DEFINE("_EZAUTOS_SPECS_DOORS6","6");
DEFINE("_EZAUTOS_SPECS_DOORS7","7");
DEFINE("_EZAUTOS_SPECS_DOORS8","8");
DEFINE("_EZAUTOS_SPECS_DOORS9","9");
DEFINE("_EZAUTOS_SPECS_DOORS10","10");
DEFINE("_EZAUTOS_SPECS_DOORS11","11");
DEFINE("_EZAUTOS_SPECS_DOORS12","12");


DEFINE("_EZAUTOS_SPECS_DOORSNS","Not specified");

DEFINE("_EZAUTOS_SPECS_BODYNS","Not specified");
DEFINE("_EZAUTOS_SPECS_BODY1","Bus");
DEFINE("_EZAUTOS_SPECS_BODY2","Cabriolet");
DEFINE("_EZAUTOS_SPECS_BODY3","Chassis cab");
DEFINE("_EZAUTOS_SPECS_BODY4","Combi");
DEFINE("_EZAUTOS_SPECS_BODY5","Coupe");
DEFINE("_EZAUTOS_SPECS_BODY6","Estate");
DEFINE("_EZAUTOS_SPECS_BODY7","Hatchback");
DEFINE("_EZAUTOS_SPECS_BODY8","MPV");
DEFINE("_EZAUTOS_SPECS_BODY9","Pickup");
DEFINE("_EZAUTOS_SPECS_BODY10","Saloon");
DEFINE("_EZAUTOS_SPECS_BODY11","SUV");
DEFINE("_EZAUTOS_SPECS_BODY12","VAN");

DEFINE("_EZAUTOS_SPECS_DOORS","Doors");
DEFINE("_EZAUTOS_SPECS_ODOMETER","Odometer reading");
DEFINE("_EZAUTOS_SPECS_BODY","Body type");

DEFINE("_EZAUTOS_SPECS_REDUNDANT","This field is now redundant and has been replaced by other fields. Please update the data.");

DEFINE("_EZAUTOS_VLDET_LISTTYPE","Listing Type");
DEFINE("_EZAUTOS_TYPE_SELECT","Select Type");
DEFINE("_EZAUTOS_TYPE_SALE","For sale");
DEFINE("_EZAUTOS_TYPE_RENTAL","For rent");
DEFINE("_EZAUTOS_TYPE_LEASE","For lease");
DEFINE("_EZAUTOS_TYPE_AUCTION","For auction");
DEFINE("_EZAUTOS_TYPE_SWAP","For swap");
DEFINE("_EZAUTOS_TYPE_TENDER","For tender");

DEFINE("_EZAUTOS_SPECS_PRICINGCLASSIF","Pricing and Classification");

DEFINE("_EZAUTOS_SPECS_FREQUENCY","Rental/Lease Frequency");

DEFINE("_EZAUTOS_RENTAL_NA","Not applicable");
DEFINE("_EZAUTOS_RENTAL_DAILY","Daily");
DEFINE("_EZAUTOS_RENTAL_WEEKLY","Per week");
DEFINE("_EZAUTOS_RENTAL_FNIGHT","Per fortnight");
DEFINE("_EZAUTOS_RENTAL_MONTH","Per month");

DEFINE("_EZAUTOS_VLDET_FINANCE","Financing");
DEFINE("_EZAUTOS_VLDET_FINANCE_AVAILABLE","Finance Available");
DEFINE("_EZAUTOS_VLDET_REPAYMENTS","Monthly Repayments");
DEFINE("_EZAUTOS_VLDET_DEPOSIT","Deposit");
DEFINE("_EZAUTOS_VLDET_TERM","Term of Loan");
DEFINE("_EZAUTOS_VLDET_TERMTYPENA","Not Applicable");
DEFINE("_EZAUTOS_VLDET_TERM_MONTHS","Months");
DEFINE("_EZAUTOS_VLDET_TERM_YEARS","Years");

DEFINE("_EZAUTOS_VLDET_MARKETINGMATERIAL","Marketing Material<br />(pdf, doc, xls format)");
DEFINE("_EZAUTOS_VLDET_REDUNDANT_FEATURES","The features selector lists and fields below have now been replaced by the new multi-selector list above. Please update your vehicle details.");
DEFINE("_EZAUTOS_VLDET_SELMULT","Use ctrl-click to select multiple items");

DEFINE("_EZAUTOS_FEATURES_MANAGEFEATURES","Manage Features List");
DEFINE("_EZAUTOS_FEATURES_ADD","Add feature");
DEFINE("_EZAUTOS_FEATURE_ERROR1","Error - you must enter the name of a feature first");
DEFINE("_EZAUTOS_FEATURES_NAME","Name of vehicle feature");
DEFINE("_EZAUTOS_FEATURES_ORDERING","Ordering");

DEFINE("_EZAUTOS_TOOLS_INSTALLSAMPLE_WARNING","WARNING - This will install sample data into your database to populate your list data. You should only do this if doing a new installation.");
DEFINE("_EZAUTOS_TOOLS_INSTALLSAMPLE","Install Sample Data");
DEFINE("_EZAUTOS_SAMPLE_INSTALLED","Sample Data Installed");

DEFINE("_EZAUTOS_CONFIG_DEFINE_NOTIFICATIONS","Define the notifications that you want");
DEFINE("_EZAUTOS_CONFIG_MISC","Miscellaneous");
DEFINE("_EZAUTOS_CONFIG_CCINTEGRATION","Cross-component Integration Links");


DEFINE("_EZAUTOS_CONFIG_LETTERMAN","Letterman Integration");
DEFINE("_EZAUTOS_CONFIG_LETTERMAN_DESC","Do you want to save newsletter requests directly to the letterman subscriber database table?");
DEFINE("_EZAUTOS_CONFIG_PMS","My PMS Integration");
DEFINE("_EZAUTOS_CONFIG_PMS_DESC","Do you want to show a link to the My PMS messaging system, so buyers can contact sellers via the MyPMS system on your site? You need to have the MyPMS component installed on your site.");
DEFINE("_EZAUTOS_CONFIG_JREVIEWS","jReviews Integration");
DEFINE("_EZAUTOS_CONFIG_JREVIEWS_DESC","If you use the jReviews commenting system, you can enable EZ Realty to tap into this system so that people can comment on listings.");

DEFINE("_EZAUTOS_CONFIG_LEFT","Left");
DEFINE("_EZAUTOS_CONFIG_RIGHT","Right");
DEFINE("_EZAUTOS_CONFIG_ALIGN","Text alignment");
DEFINE("_EZAUTOS_CONFIG_ALIGN_DESC","Define whether your text alignment should be 'left to right' or 'right to left'.");

DEFINE("_EZAUTOS_CONFIG_DATA","Data");
DEFINE("_EZAUTOS_CONFIG_DATA_TYPES","Data Types for Listings");
DEFINE("_EZAUTOS_CONFIG_VEHSPECS","Vehicle Specifications");
DEFINE("_EZAUTOS_CONFIG_VEHSPECS_DESC","This will enable/disable the vehicle specifications tabbed page.");
DEFINE("_EZAUTOS_CONFIG_VEHFEATS","Vehicle Features");
DEFINE("_EZAUTOS_CONFIG_VEHFEATS_DESC","This will enable/disable the vehicle features tabbed page.");
DEFINE("_EZAUTOS_CONFIG_FINANCE","Finance Section");
DEFINE("_EZAUTOS_CONFIG_FINANCE_DESC","This will enable/disable the finance section on the marketing tabbed page.");
DEFINE("_EZAUTOS_CONFIG_META","Meta Tags");
DEFINE("_EZAUTOS_CONFIG_META_DESC","This will enable/disable the meta tags tabbed page.");

DEFINE("_EZAUTOS_CONFIG_CONDITION_OPTIONS","Select which choices to use in the Vehicle Condition select list");

DEFINE("_EZAUTOS_CONFIG_USEIT","Use vehicle condition list");
DEFINE("_EZAUTOS_CONFIG_USEIT_DESC","Do you want to use the vehicle condition selector list?");
DEFINE("_EZAUTOS_CONFIG_NEW","Use 'New' selector option");
DEFINE("_EZAUTOS_CONFIG_USED","Use 'Used' selector option");

DEFINE("_EZAUTOS_CONFIG_LISTTYPE","Select which choices to use in the Listing Type select list");
DEFINE("_EZAUTOS_USE_TYPE","Use listing type selector list");
DEFINE("_EZAUTOS_USE_TYPE_DESC","Do you want to use the listing type selector list?");

DEFINE("_EZAUTOS_CONFIG_FREQUENCYLIST","Select which choices to use in the Rental/Lease Frequency List");
DEFINE("_EZAUTOS_CONFIG_USERENTALFREQ","Use Rental Frequency list");
DEFINE("_EZAUTOS_CONFIG_USERENTALFREQ_DESC","Do you want to use the rental frequency selector list when creating property listings?");
DEFINE("_EZAUTOS_RENTAL_NIGHTLY","Per day");

DEFINE("_EZAUTOS_LEADS_NOTPUBL","Notifications and publication");
DEFINE("_EZAUTOS_LEADS_FEEDBACK","Feedback");
DEFINE("_EZAUTOS_VIP_UNSUBSCRIBE","VIP Unsubscribe");

DEFINE("_EZAUTOS_LEADS_UNSUBSCRIBE","Unsubscribe from our VIP Buyers Register");
DEFINE("_EZAUTOS_LEADS_UNSUBSCRIBE_INSTRUCTIONS","Please enter the email address you receive our notifications to and press the 'Unsubscribe' button. This will remove you from our VIP Buyers Register.");
DEFINE("_EZAUTOS_VIEWDET_VMAIL","Your Email");
DEFINE("_EZAUTOS_UNSUBSCRIBE","Unsubscribe");
DEFINE("_EZAUTOS_UNSUBSCRIBE_SUCCESS","You have been successfully unsubscribed from the VIP Buyer's Register and should no longer receive email notifications.");
DEFINE("_EZAUTOS_UNSUBSCRIBE_FAILED","Sorry - there has been an error processing your request.  Please contact the site administrator to organize your removal from the VIP Buyher's Register.");

DEFINE("_EZAUTOS_TABS_ADDRESS","Summary");
DEFINE("_EZAUTOS_PROFILE_CONTDETS","Contact");
DEFINE("_EZAUTOS_PROFILE_PROMO","Promotional");
DEFINE("_EZAUTOS_PROFILE_PRIVILEGES","Privileges");
DEFINE("_EZAUTOS_PROFILE_SHOWADDY","Display address");
DEFINE("_EZAUTOS_PROFILE_SHOWADDYDESC","Do you want to display your address on your profile page? If set to no - neither your address or a map to your address or vehicle location will be displayed.");

DEFINE("_EZAUTOS_SPECS_ODOMETER_TYPE1","km");
DEFINE("_EZAUTOS_SPECS_ODOMETER_TYPE2","miles");
DEFINE("_EZAUTOS_SEARCH_ANYCOLOUR","Any colour");
DEFINE("_EZAUTOS_SEARCH_ANYDOORNUM","Any doors number");
DEFINE("_EZAUTOS_SEARCH_ANYBODY","Any body type");

DEFINE("_EZAUTOS_SEARCH_AGERANGE","Age range");


DEFINE("_EZAUTOS_LMIN_YEAR","Minimum year");
DEFINE("_EZAUTOS_LMAX_YEAR","Maximum year");
DEFINE("_EZAUTOS_LMIN_YEAR2","Min year");
DEFINE("_EZAUTOS_LMAX_YEAR2","Max year");

DEFINE("_EZAUTOS_SCH_DISTANCE","Unit of Measure");
DEFINE("_EZAUTOS_SCH_DISTANCEDESC","Define the unit of measure you want to use for the zip/post code search radius");
DEFINE("_EZAUTOS_SCH_KILOMETER","Kilometers");
DEFINE("_EZAUTOS_SCH_MILE","Statute miles");
DEFINE("_EZAUTOS_SCH_NAUTMILE","Nautical miles");
DEFINE("_EZAUTOS_SCH_RADIUS","Radius");

DEFINE("_EZAUTOS_SCH_5","5");
DEFINE("_EZAUTOS_SCH_10","10");
DEFINE("_EZAUTOS_SCH_20","20");
DEFINE("_EZAUTOS_SCH_50","50");
DEFINE("_EZAUTOS_SCH_100","100");

DEFINE("_EZAUTOS_SCH_K","km's");
DEFINE("_EZAUTOS_SCH_SM","miles");
DEFINE("_EZAUTOS_SCH_NM","nm's");

DEFINE("_EZAUTOS_CONFIG_USECOLOUR","Use colour select list");
DEFINE("_EZAUTOS_CONFIG_USECOLOUR_DESC","Do you want to use the colour selector list on the search form?");

DEFINE("_EZAUTOS_CONFIG_USEDOORS","Use door number select list");
DEFINE("_EZAUTOS_CONFIG_USEDOORS_DESC","Do you want to use the door number selector list on the search form?");

DEFINE("_EZAUTOS_CONFIG_USEBODY","Use body type select list");
DEFINE("_EZAUTOS_CONFIG_USEBODY_DESC","Do you want to use the body type selector list on the search form?");

DEFINE("_EZAUTOS_CONFIG_USEYEAR","Use min/max year select list");
DEFINE("_EZAUTOS_CONFIG_USEYEAR_DESC","Do you want to use the year of manufacture selector list on the search form?");

DEFINE("_EZAUTOS_SPECS_TAX","Price includes tax");
DEFINE("_EZAUTOS_SPECS_ONROAD","On-road costs");

DEFINE("_EZAUTOS_CONFIG_HEIGHTMAINIMG","Main Image Height");
DEFINE("_EZAUTOS_CONFIG_HEIGHTMAINIMGDESC","Height of the main image when viewed on the full details page.");

DEFINE("_EZAUTOS_VLDET_CO2EMM","g/km");
DEFINE("_EZAUTOS_VIEW_SLIDESHOWGALLERY","Click thumbnails to open slideshow gallery");


DEFINE("_EZAUTOS_CONFIG_MULTI","Multi-layout");
DEFINE("_EZAUTOS_SCH_NEWCARS","New Cars");
DEFINE("_EZAUTOS_SCH_USEDCARS","Used Cars");

DEFINE("_EZAUTOS_LEADSMAILBACK","A vehicle listing that may interest you");
DEFINE("_EZAUTOS_TABS_DESCRIPTION","Description");
DEFINE("_EZAUTOS_DET_ADDNUM","Ad#");

DEFINE("_EZAUTOS_CARLISTER_ID","Carlister.ie ID number");
DEFINE("_EZAUTOS_CATEGORY_TAXCLASS","Tax Class");
DEFINE("_EZAUTOS_CATEGORY_TAXCLASS_DESC","Some sites identify category based on tax class, so if your categories are based on these tax classes - you need to fill in this field with the tax class identifyer so that you can match these two fields when importing data into your site. The majority of users can leave this field blank.");

DEFINE("_EZAUTOS_PREFIX","Prefix");
DEFINE("_EZAUTOS_NUM","Number");
DEFINE("_EZAUTOS_SPECIAL_IMAGES_DESCRIPTION","Your listing uses image details stored as a string in a single data field. Images stored in this manner must be a full image URL, and each one must be separated by a comma - and no spaces.");
DEFINE("_EZAUTOS_SELECT_FEATURES","-Select features-");
DEFINE("_EZAUTOS_NEW_LISTINGS","New Listings");

DEFINE("_EZAUTOS_SEARCH_DOORS","Doors");

DEFINE("_EZAUTOS_CONFIG_USEENG","Use engine size select list");
DEFINE("_EZAUTOS_CONFIG_USEENG_DESC","Do you want to use the engine size select list on the search form?");
DEFINE("_EZAUTOS_CONFIG_MINYEAR_DESC","Specify the minimum year to show on the minimum year search select list.  This MUST be a 4-digit value - eg. 1970");
DEFINE("_EZAUTOS_CONFIG_MAXYEAR_DESC","Specify the maximum year to show on the maximum year search select list.  This MUST be a 4-digit value - eg. 2008");

DEFINE("_EZAUTOS_DETAILS_EXTCOLOUR","Exterior colour");
DEFINE("_EZAUTOS_DETAILS_INTCOLOUR","Interior colour");
DEFINE("_EZAUTOS_DETAILS_SELYEAR","Select year");

DEFINE("_EZAUTOS_PROFILE_PROFID","Profile ID#");
DEFINE("_EZAUTOS_PROFILE_ADDUPDATE_MSG","There has been a new/updated seller profile on your site.");
DEFINE("_EZAUTOS_CONFIG_PROFUPDATE","Profile Notification");
DEFINE("_EZAUTOS_CONFIG_PROFUPDATE_DESC","Do you want to be notified of new and updated seller profiles?");

DEFINE("_EZAUTOS_CONFIG_FILTERS","Define the Admin area Filters and other things to use");
DEFINE("_EZAUTOS_CONFIG_FILTERS_VIN","VIN number filter");
DEFINE("_EZAUTOS_CONFIG_FILTERS_VIN_DESC","Do you want to use the VIN number filter on the admin area listings manager. If you have a lot of listings - you may want to turn this off.");
DEFINE("_EZAUTOS_CONFIG_FILTERS_REG","Registration number filter");
DEFINE("_EZAUTOS_CONFIG_FILTERS_REG_DESC","Do you want to use the registration number filter on the admin area listings manager. If you have a lot of listings - you may want to turn this off.");
DEFINE("_EZAUTOS_CONFIG_FILTERS_MAKE","Vehicle Make filter");
DEFINE("_EZAUTOS_CONFIG_FILTERS_MAKE_DESC","Do you want to use the vehicle make filter on the admin area listings manager. If you have a lot of listings - you may want to turn this off.");
DEFINE("_EZAUTOS_CONFIG_FILTERS_MODEL","Vehicle Model filter");
DEFINE("_EZAUTOS_CONFIG_FILTERS_MODEL_DESC","Do you want to use the vehicle model filter on the admin area listings manager. If you have a lot of listings - you may want to turn this off.");
DEFINE("_EZAUTOS_CONFIG_SHOWPICS","Listings management thumbnails");
DEFINE("_EZAUTOS_CONFIG_SHOWPICS_DESC","Do you want to show thumbnails on the admin area listings managers. If you have a lot of listings - you may want to turn this off to save page-loading time.");

DEFINE("_EZAUTOS_VEHICLE_CATEGORIES","Vehicle Categories");
DEFINE("_EZAUTOS_LOCAL_DEALERS","Get in touch with a local dealer");

DEFINE("_EZAUTOS_CONFIG_SCHMILES","Use maximum mileage field");
DEFINE("_EZAUTOS_CONFIG_SCHMILES_DESC","Do you want to use the maximum mileage search field?");
DEFINE("_EZAUTOS_SCHMILES","Maximum mileage");

DEFINE("_EZAUTOS_CONFIG_USECOUNT","Use profile manager listings count");
DEFINE("_EZAUTOS_CONFIG_USECOUNT_DESC","Do you want to use the listings count on the admin area profile listings page? On sites with lots of listings and members - using this may may opening of the profile manager very slow.");

DEFINE("_EZAUTOS_MYPMS","My PMS");
DEFINE("_EZAUTOS_MYPMS_MSG","Send Private Message");
DEFINE("_EZAUTOS_REPMS","Re: Listing ID");

DEFINE("_EZAUTOS_CONFIG_USEBACK","Use back button");
DEFINE("_EZAUTOS_CONFIG_USEBACK_DESC","Do you want to use the back button on the frontend footer?");

DEFINE("_EZAUTOS_SPECS_MONTHYEAR_FIRSTREG","Month/Year first registered");
DEFINE("_EZAUTOS_SPECS_MONTHYEAR_NEXTINSPECTION","Month/Year of next mechanical inspection");
DEFINE("_EZAUTOS_SPECS_MONTHYEAR_NEXTEMISSIONSINSP","Month/Year of next emission inspection");
DEFINE("_EZAUTOS_SPECS_SELMONTH","Select month");

DEFINE("_EZAUTOS_ANY_TRANS","Any Transmission");
DEFINE("_EZAUTOS_ANY_ENG","Any Engine Size");
DEFINE("_EZAUTOS_ANY_COLOUR","Any Colour");
DEFINE("_EZAUTOS_ANY_FUEL","Any Fuel Type");

DEFINE("_EZAUTOS_VEHICLES_WANTED","Vehicles Wanted");
DEFINE("_EZAUTOS_VEHICLES_WANTEDDESC","We've got people on the VIP Buyers Register waiting for the following vehicles. If you have something that meets the needs of one of our VIP buyers - contact us using the link associated with the specific listing below and we'll arrange an introduction.");
DEFINE("_EZAUTOS_VEHICLES_AGERANGE","Age range");
DEFINE("_EZAUTOS_INTERESTED","Interested?");
DEFINE("_EZAUTOS_EA","Email Admin");
DEFINE("_EZAUTOS_LEADCONTACT_PROMO","Got a vehicle that may match one we've got a buyer for?");

DEFINE("_EZAUTOS_VIEWDET_VNAME","Your Name");
DEFINE("_EZAUTOS_VIEWDET_VMAIL","Your Email");
DEFINE("_EZAUTOS_VIEWDET_VPHONE","Your Telephone");
DEFINE("_EZAUTOS_SELLER_SMS10","Message");
DEFINE("_EZAUTOS_VIEWDET_SEND","Send");
DEFINE("_EZAUTOS_LEAD_RESPONSE"," Sales Lead for VIP Buyer");
DEFINE("_EZAUTOS_RESPONS_PROPLEAD","may have a vehicle for a VIP Buyer you have listed. VIP Buyer ID# is:-");

DEFINE("_EZAUTOS_REPMS_PRIVATE","Private PM via Profile");
DEFINE("_EZAUTOS_EARLIEST_YEAR","Earliest year of manufacture");
DEFINE("_EZAUTOS_LATEST_YEAR","Latest year of manufacture");


DEFINE("_EZAUTOS_SEL_SELLER_TYPE","Select seller type");

DEFINE("_EZAUTOS_CONFIG_CMS","Content Management System");
DEFINE("_EZAUTOS_CONFIG_CMSTYPE","Specify your CMS");
DEFINE("_EZAUTOS_CONFIG_CMSTYPE_DESC","Some content management systems have different needs - so specify the one you're using.");
DEFINE("_EZAUTOS_CONFIG_MAMBO","Mambo 4.6.4 and above");
DEFINE("_EZAUTOS_CONFIG_JOOMLA10","Joomla 1.0x or Mambo 4.6.3 and lower");
DEFINE("_EZAUTOS_CONFIG_JOOMLA15","Joomla 1.5x");


DEFINE("_EZAUTOS_IMPORT_POSTCODES","Imports");
DEFINE("_EZAUTOS_IMPORT_POSTCODETITLE","Import Zip/Postcodes via CSV file");
DEFINE("_EZAUTOS_IMPORT_POSTCODESERROR","File not found.");
DEFINE("_EZAUTOS_IMPORT_POSTCODES_OPENERROR","Error opening data file.");
DEFINE("_EZAUTOS_IMPORT_POSTCODES_EMPTY","File is empty.");
DEFINE("_EZAUTOS_IMPORT_POSTCODES_NOTES","Things to remember:-<br /><br />
1. make sure you have the following columns of data in this exact order:- id, zip/postcode, city, state, county, latitude, longitude.<br /><br />
2. It is not necessary to have data in every column - BUT - you must have data in the zip/postcode, latitude and longitude columns. The others can be left empty.<br /><br />
3. make sure you do not have any column titles in the first row of data.<br /><br />
4. Use a CSV comma delimited file and call it postcodes.csv<br /><br />
5. Click the browse button to locate the CSV file on your local computor, then click the import CSV file button to begin the upload and import process.<br />
");
DEFINE("_EZAUTOS_TAG3","Sorry - there was a problem uploading the file.");
DEFINE("_EZAUTOS_TAG4","Sorry - that was the wrong file type.  You must upload a CSV file.");
DEFINE("_EZAUTOS_TAG5","Error - a file already exists with that name");
DEFINE("_EZAUTOS_TAG6","Error - the file could not be moved into the destination directory");
DEFINE("_EZAUTOS_TAG10","Imported a total of");
DEFINE("_EZAUTOS_TAG11","Error - you must select a CSV file to upload");
DEFINE("_EZAUTOS_TAG12","Import CSV file");
DEFINE("_EZAUTOS_TAG13","Import Makes via CSV file");
DEFINE("_EZAUTOS_TAG14","Import Models via CSV file");
DEFINE("_EZAUTOS_TAG23","records from the csv file into the destination table");

DEFINE("_EZAUTOS_PUBLISH_OWN_DENIED","Sorry - you do not have self-publishing rights.");
DEFINE("_EZAUTOS_NOFEAT_UPGRADE","ERROR - You do not have the necessary privileges to assign featured status to your listing");
DEFINE("_EZAUTOS_NORESET","ERROR - You do not have the necessary privileges to reset the expiry date for your listing");
DEFINE("_EZAUTOS_EXPDATE_RESET","The Expiration Date has been reset!");
DEFINE("_EZAUTOS_PROFILE_MAILLISTINGS","Email Listings");
DEFINE("_EZAUTOS_CHECK_ALERT","You are about to send out emails to all expired listings in the database. This may take a while if you have a lot. Are you sure you want to do that?");

DEFINE("_EZAUTOS_CPANEL_FEEDS","Feeds");
DEFINE("_EZAUTOS_CPANEL_FEEDSDESC","In addition to the RSS 2.0 feed that has always been available, EZ Autos now has the ability to feed your vehicle listings to a couple of large external listing sites.<br /><br />
These feeds are new features - and are still experimental - so if you encounter problems with them please submit a support ticket reporting any bugs.");
DEFINE("_EZAUTOS_CPANEL_GOOGLE1","Your Google RSS 2.0 Feed");
DEFINE("_EZAUTOS_CPANEL_GOOGLE2","Visit Google for more information");
DEFINE("_EZAUTOS_CPANEL_VAST1","Your Vast XML Feed");
DEFINE("_EZAUTOS_CPANEL_VAST2","Visit Vast for more information");





//changed language tags for the 5.2.0 version

DEFINE("_EZAUTOS_LEADS_TITLE","Manage Buyers Register");
DEFINE("_EZAUTOS_LEADS_TITLE2","Potential Buyer Details");
DEFINE("_EZAUTOS_CPANEL_SENDALERT","Send Listing Expired Email Alert");

DEFINE("_EZAUTOS_LEADS_SUBTITLE","Join the VIP Buyers Register");
DEFINE("_EZAUTOS_LEADS_INTRO","Vehicles are always coming on the market, so beat other buyers to the BEST new listings . If you can't find what you're looking for at the moment, register your vehicle requirements with us. We'll then notify you via email when something matching your requirements becomes available - and we can list your vehicle requirements on our 'Vehicles Wanted' page.");
DEFINE("_EZAUTOS_LEADS_NOTON","Sorry - our VIP Buyer's Register is not currently available");
DEFINE("_EZAUTOS_LEADS_REGISTER","VIP Buyer's Register");
DEFINE("_EZAUTOS_LEADS_THANKS","Thankyou for for joining our VIP Buyer's Register.");
DEFINE("_EZAUTOS_CPANEL_MGSALES","VIP Buyers Register");
DEFINE("_EZAUTOS_CONFIG_PPEMAILDESC","This must be your PRIMARY PayPal email address.");


?>