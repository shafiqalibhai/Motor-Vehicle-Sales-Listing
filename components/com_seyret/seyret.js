
/*
***********************************************************************************************************
(c) www.joomla-alem.com January 2007

Script for Seyret component.
***********************************************************************************************************
*/


				
				
	var seyretimagelangdir=Cookie.get("seyretdsplnf");
	var cookieread = Json.evaluate(seyretimagelangdir);
	
	siteaddress=cookieread.siteaddress;
	seyrettheme=cookieread.seyrettheme;
	seyretimagelangdir=cookieread.seyretimagelangdir;
	seyretshowvideotooltips=cookieread.seyretshowvideotooltips;
	seyretshowcategorytooltips=cookieread.seyretshowcategorytooltips;
	seyretuseimageads=cookieread.seyretuseimageads;
	seyretuseimageduration=cookieread.seyretuseimageduration;	
	


	imgsrc=new Array();
	imgsrc[1]=siteaddress+"/components/com_seyret/themes/"+seyrettheme+"/images/"+seyretimagelangdir+"/home_2.png";
	imgsrc[2]=siteaddress+"/components/com_seyret/themes/"+seyrettheme+"/images/"+seyretimagelangdir+"/home.png";
	
	imgsrc[3]=siteaddress+"/components/com_seyret/themes/"+seyrettheme+"/images/"+seyretimagelangdir+"/addvideo_2.png";
	imgsrc[4]=siteaddress+"/components/com_seyret/themes/"+seyrettheme+"/images/"+seyretimagelangdir+"/addvideo.png";
	
	imgsrc[5]=siteaddress+"/components/com_seyret/themes/"+seyrettheme+"/images/"+seyretimagelangdir+"/uploadvideo_2.png";
	imgsrc[6]=siteaddress+"/components/com_seyret/themes/"+seyrettheme+"/images/"+seyretimagelangdir+"/uploadvideo.png";
	
	imgsrc[7]=siteaddress+"/components/com_seyret/themes/"+seyrettheme+"/images/"+seyretimagelangdir+"/featured_2.png";
	imgsrc[8]=siteaddress+"/components/com_seyret/themes/"+seyrettheme+"/images/"+seyretimagelangdir+"/featured.png";
	
	imgsrc[9]=siteaddress+"/components/com_seyret/themes/"+seyrettheme+"/images/"+seyretimagelangdir+"/myvideos_2.png";
	imgsrc[10]=siteaddress+"/components/com_seyret/themes/"+seyrettheme+"/images/"+seyretimagelangdir+"/myvideos.png";
	
	imgsrc[11]=siteaddress+"/components/com_seyret/themes/"+seyrettheme+"/images/"+seyretimagelangdir+"/allvideos_2.png";
	imgsrc[12]=siteaddress+"/components/com_seyret/themes/"+seyrettheme+"/images/"+seyretimagelangdir+"/allvideos.png";
	
	imgsrc[13]=siteaddress+"/components/com_seyret/themes/"+seyrettheme+"/images/"+seyretimagelangdir+"/help_2.png";
	imgsrc[14]=siteaddress+"/components/com_seyret/themes/"+seyrettheme+"/images/"+seyretimagelangdir+"/help.png";
	
	imgsrc[15]=siteaddress+"/components/com_seyret/themes/"+seyrettheme+"/images/"+seyretimagelangdir+"/reportedvideos_2.png";
	imgsrc[16]=siteaddress+"/components/com_seyret/themes/"+seyrettheme+"/images/"+seyretimagelangdir+"/reportedvideos.png";
	
	imgsrc[17]=siteaddress+"/components/com_seyret/themes/"+seyrettheme+"/images/"+seyretimagelangdir+"/pendingvideos_2.png";
	imgsrc[18]=siteaddress+"/components/com_seyret/themes/"+seyrettheme+"/images/"+seyretimagelangdir+"/pendingvideos.png";
	
	imgsrc[19]=siteaddress+"/components/com_seyret/themes/"+seyrettheme+"/images/"+seyretimagelangdir+"/batchconversion_2.png";
	imgsrc[20]=siteaddress+"/components/com_seyret/themes/"+seyrettheme+"/images/"+seyretimagelangdir+"/batchconversion.png";	
	

	img =new Array();
				
	for (i=1; i< 21; i++) {
		img[i]=new Image();
		img[i].src=imgsrc[i];
	}


	
	function changebuttonstatus(number, picture) {
	  {
		document[picture].src=img[number].src;
	  }
	}	
	
	
	window.addEvent('load', function(){


		//mySlideuserplaylist = new Fx.Slide('userplaylist');	
		//mySlideuserplaylist.hide();

		//not ready yet
		//document.getElementById("userplaylistcontainer").style.display="block";
		
		if ($defined($("hiddenimagead"))){
			var dummyembed=$("hiddenimagead").innerHTML;
			$("hiddenimagead").innerHTML=dummyembed;	
		}
		


		
			if (seyretshowvideotooltips=="1"){
				var video = new Tips($$('.videothumbss'), {
				showDelay:1000,
				initialize:function(){
					this.fx = new Fx.Style(this.toolTip, 'opacity', {duration: 500, wait: false}).set(0);
				},
				onShow: function(toolTip) {
					this.fx.start(1);
				},
				onHide: function(toolTip) {
					this.fx.start(0);
				}
				});
			} else {
				$$('.videothumbss').setProperties({
			    title: ''
				});
			}	
				
			if (seyretshowcategorytooltips=="1"){
				var category = new Tips($$('.videodirimg'), {
				showDelay:1000,
				className: 'categorytips',
				initialize:function(){
					this.fx = new Fx.Style(this.toolTip, 'opacity', {duration: 500, wait: false}).set(0);
				},
				onShow: function(toolTip) {
					this.fx.start(1);
				},
				onHide: function(toolTip) {
					this.fx.start(0);
				}
				});				
			} else {
				$$('.videodirimg').setProperties({
			    title: ''
				});
			}	
		
	});
	
	function showembedcodeafteradonload(){
	
			if ($defined($("hiddenimagead"))){
				if ($defined($("isareplytocontainer"))){
					document.getElementById("isareplytocontainer").innerHTML = document.getElementById("hiddenisareplytocontainer").innerHTML;
				}
				var hembedcode=document.getElementById("hiddenimagead").innerHTML;
				document.getElementById("hiddenimagead").innerHTML = hembedcode;
				document.getElementById("showvideo").innerHTML = document.getElementById("hiddenimagead").innerHTML;	
				var dummyembed=document.getElementById("hiddenimagead").innerHTML;
				document.getElementById("hiddenimagead").innerHTML=dummyembed;
				
				intIndexOfMatch = dummyembed.indexOf( "MediaPlayer" );
				if (intIndexOfMatch != -1){
					document.getElementById("MediaPlayer").setAttribute("autoStart","1");
				}	
			}
				
				
	


			
	}
	
		
		//general request object
		function createRequestObject() {
			var xRequest='';
			if (window.XMLHttpRequest) 
			{
				xRequest=new XMLHttpRequest(); 
			}
			else if (typeof ActiveXObject != "undefined")
			{
				xRequest=new ActiveXObject("Microsoft.XMLHTTP");
			}
			return xRequest;
		}
		
		seyrethttp = createRequestObject();

		
		function nextlist() {
		document.getElementById("blockit").style.visibility="visible";
		document.getElementById("ajxgif").style.visibility="visible";
		var startstring=document.getElementById("navstart").value;
		var thecatid=document.getElementById("catid").value;
		seyrethttp.open('post', 'index2.php?option=com_seyret&no_html=1&task=videolist&act=next&sender=ajax&navstart='+startstring+'&catid='+thecatid);
		seyrethttp.onreadystatechange = handleResponselist;
		seyrethttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		seyrethttp.send('');
		}
		
		function previouslist() {
		document.getElementById("blockit").style.visibility="visible";
		document.getElementById("ajxgif").style.visibility="visible";
		var thecatid=document.getElementById("catid").value;
		var startstring=document.getElementById("navstart").value;
		seyrethttp.open('post', 'index2.php?option=com_seyret&no_html=1&task=videolist&act=prev&sender=ajax&navstart='+startstring+'&catid='+thecatid);
		seyrethttp.onreadystatechange = handleResponselist;
		seyrethttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		seyrethttp.send('');
		}

//*************************************
		function gopage() {
		var pagnum=document.getElementById("pagenumber").value;
		var thecatid=document.getElementById("cid").value;
		document.getElementById("blockit").style.visibility="visible";
		document.getElementById("ajxgif").style.visibility="visible";
		

		var seyretbrwsrls=Cookie.get("seyretbrwsrl");
		var thecookieread = Json.evaluate(seyretbrwsrls);
		var limstep=thecookieread.videocountinvideolist;
		var intlimstep=parseInt(limstep);
		var intpagnum=parseInt(pagnum);
		
		var startstring=intlimstep*(intpagnum-2);
		seyrethttp.open('post', 'index2.php?option=com_seyret&no_html=1&task=videolist&act=next&sender=ajax&navstart='+startstring+'&catid='+thecatid);
		seyrethttp.onreadystatechange = handleResponselist;
		seyrethttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		seyrethttp.send('');
		}

		function handleResponselist() {

			if(seyrethttp.readyState == 4){
				var response = seyrethttp.responseText;
				document.getElementById("blockit").style.visibility="hidden";
				document.getElementById("ajxgif").style.visibility="hidden";				
				document.getElementById("videolistdiv").innerHTML = response;


				if (seyretshowvideotooltips=="1"){
					var video = new Tips($$('.videothumbss'), {
					showDelay:1000,
					initialize:function(){
						this.fx = new Fx.Style(this.toolTip, 'opacity', {duration: 500, wait: false}).set(0);
					},
					onShow: function(toolTip) {
						this.fx.start(1);
					},
					onHide: function(toolTip) {
						this.fx.start(0);
					}
					});
				} else {
					$$('.videothumbss').setProperties({
				    title: ''
					});
				}



			}
		}		
//*************************************



//*************************************
		function sndReqDirectory(id) {
		document.getElementById("blockit").style.visibility="visible";
		document.getElementById("ajxgif").style.visibility="visible";
		seyrethttp.open('post', 'index2.php?option=com_seyret&no_html=1&task=changedirectory&catid='+id);
		seyrethttp.onreadystatechange = handleResponseChangeDirectory;
		seyrethttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		seyrethttp.send('');
		}		

		function handleResponseChangeDirectory() {
			if(seyrethttp.readyState == 4){
				var response = seyrethttp.responseText;
				document.getElementById("blockit").style.visibility="hidden";
				document.getElementById("ajxgif").style.visibility="hidden";				
				document.getElementById("hiddenvalues").innerHTML = response;
				document.getElementById("groupcontext").innerHTML = document.getElementById("directoriesresult").innerHTML;
				document.getElementById("videolistdiv").innerHTML = document.getElementById("videoslistresult").innerHTML;
			


				if (seyretshowvideotooltips=="1"){
					var video = new Tips($$('.videothumbss'), {
					showDelay:1000,
					initialize:function(){
						this.fx = new Fx.Style(this.toolTip, 'opacity', {duration: 500, wait: false}).set(0);
					},
					onShow: function(toolTip) {
						this.fx.start(1);
					},
					onHide: function(toolTip) {
						this.fx.start(0);
					}
					});
				} else {
					$$('.videothumbss').setProperties({
				    title: ''
					});
				}
			
				if (seyretshowcategorytooltips=="1"){
					var category = new Tips($$('.videodirimg'), {
					showDelay:1000,
					className: 'categorytips',
					initialize:function(){
						this.fx = new Fx.Style(this.toolTip, 'opacity', {duration: 500, wait: false}).set(0);
					},
					onShow: function(toolTip) {
						this.fx.start(1);
					},
					onHide: function(toolTip) {
						this.fx.start(0);
					}
					});				
				} else {
					$$('.videodirimg').setProperties({
				    title: ''
					});
				}
			
			}
		}		
//*************************************


		function sortbytype(type){
			var seyretbrwsrls=Cookie.get("seyretbrwsrl");
			var thecookieread = Json.evaluate(seyretbrwsrls);
			thecookieread.orderingtype=type;
			var newcookie=Json.toString(thecookieread);
			Cookie.remove('seyretbrwsrl');
			Cookie.set('seyretbrwsrl', newcookie, {path:'/'});
			
			gopage();
		}

		function sortbykey(){
			var key=document.getElementById("orderingkeyselect").value;
			var seyretbrwsrls=Cookie.get("seyretbrwsrl");
			var thecookieread = Json.evaluate(seyretbrwsrls);
			thecookieread.orderingkey=key;
			var newcookie=Json.toString(thecookieread);
			Cookie.remove('seyretbrwsrl');
			Cookie.set('seyretbrwsrl', newcookie, {path:'/'});		
			gopage();
		}

		function applyvideolink() {
		var videolink=document.getElementById("videolink").value;		
		var newvideolink1=videolink.replace(/&/g,"*am*");
		var newvideolink2=newvideolink1.replace(/=/g,"*eq*");
		var strReplaceAll = newvideolink2;
        var intIndexOfMatch = strReplaceAll.indexOf( "/" );
  
		 // Loop over the string value replacing out each matching
		 // substring.
		 while (intIndexOfMatch != -1){
		 // Relace out the current instance.
		 strReplaceAll = strReplaceAll.replace( "/", "25ja25" )
		  
		 // Get the index of any next matching substring.
		 intIndexOfMatch = strReplaceAll.indexOf( "/" );
		 }
		
		seyrethttp.open('post', 'index2.php?option=com_seyret&no_html=1&task=applyvideolink&videourl='+strReplaceAll);
		seyrethttp.onreadystatechange = handleResponseVideolinkdetails;
		seyrethttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		seyrethttp.send('');
		}
		
		function handleResponseVideolinkdetails() {
		
			if(seyrethttp.readyState == 4){
				var response = seyrethttp.responseText;
				document.getElementById("videodetailsinput").innerHTML = response;
			}
		}

		
		
//*************************************
		function sndReqVideo(id) {
		document.getElementById("blockit").style.visibility="visible";
		document.getElementById("ajxgif").style.visibility="visible";
		seyrethttp.open('post', 'index2.php?option=com_seyret&no_html=1&task=showvideo&id='+id+'&sender=ajax');
		seyrethttp.onreadystatechange = handleResponseVideo;
		seyrethttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		seyrethttp.send('');
		}
				
		function handleResponseVideo() {
		
			if(seyrethttp.readyState == 4){
				var response = seyrethttp.responseText;
				document.getElementById("blockit").style.visibility="hidden";
				document.getElementById("ajxgif").style.visibility="hidden";
				document.getElementById("hiddenvalues").innerHTML = response;
				document.getElementById("videotitlearea").innerHTML = document.getElementById("hiddenvideotitle").innerHTML;

				document.getElementById("videodetailsarea").innerHTML = document.getElementById("hiddenvideodetails").innerHTML;
				document.getElementById("videooperationsarea").innerHTML = document.getElementById("hiddenvideooperations").innerHTML;
				document.getElementById("votearea").innerHTML = document.getElementById("hiddenvotearea").innerHTML;
				document.getElementById("videodirectlink").innerHTML = document.getElementById("hiddenvideodirectlink").innerHTML;
				document.getElementById("embedcode").innerHTML = document.getElementById("hiddenembedcode").innerHTML;				
				document.getElementById("comments").innerHTML = document.getElementById("hiddencomments").innerHTML;
				if ($defined($("addedby"))){
				document.getElementById("addedby").innerHTML = document.getElementById("hiddenaddedby").innerHTML;
				}
				if ($defined($("useravatar"))){
				document.getElementById("useravatar").innerHTML = document.getElementById("hiddenuseravatar").innerHTML;
				}				
				document.getElementById("totalhit").innerHTML = document.getElementById("hiddentotalhit").innerHTML;
				document.getElementById("totalvotes").innerHTML = document.getElementById("hiddentotalvotes").innerHTML;
				document.getElementById("vidrating").innerHTML = document.getElementById("hiddenvidrating").innerHTML;
				
				document.getElementById("addeddate").innerHTML = document.getElementById("hiddenaddeddate").innerHTML;
				document.getElementById("videotags").innerHTML = document.getElementById("hiddenvideotags").innerHTML;
				document.getElementById("bookmarks").innerHTML = document.getElementById("hiddenbookmarks").innerHTML;
		

				if ($defined($("isareplytocontainer"))){
					document.getElementById("isareplytocontainer").innerHTML = document.getElementById("hiddenisareplytocontainer").innerHTML;		
				}
				
				
				if ($defined($("hiddenreplylist"))){
					document.getElementById("videorepliescontainer").innerHTML=document.getElementById("hiddenreplylist").innerHTML;
			
				} else {
					document.getElementById("videorepliescontainer").innerHTML="";
				}
				
				//second run?? Thanks JSON for 1.5 native works.
				if ($defined($("hiddenreplylist"))){
					document.getElementById("videorepliescontainer").innerHTML=document.getElementById("hiddenreplylist").innerHTML;
			
				} else {
					document.getElementById("videorepliescontainer").innerHTML="";
				}
				

				if ($defined($("script"))){
					var strReplaceAll = document.getElementById("script").innerHTML;
					var intIndexOfMatch = strReplaceAll.indexOf( "&amp;" );
			  
					 // Loop over the string value replacing out each matching
					 // substring.
					 while (intIndexOfMatch != -1){
					 // Relace out the current instance.
					 strReplaceAll = strReplaceAll.replace( "&amp;", "&" )
					  
					 // Get the index of any next matching substring.
					 intIndexOfMatch = strReplaceAll.indexOf( "&amp;" );
					 }
				 
				 }
				 
				 
				eval(strReplaceAll);		
				 

				
		

				/* add AGE joomlacomment */
		        if (self.JOSC_afterAjaxResponse) {
		          JOSC_afterAjaxResponse('hide');
		          JOSC_afterAjaxResponse("hidePOST");
		        }
				/* end add AGE joomlacomment ************  */	
		
				
				if ($defined($("seyretfbdiscussinput"))){
					var mySlide = new Fx.Slide('seyretfbdiscussinput');
					mySlide.hide();		  
					$('toggle').addEvent('click', function(e){
						e = new Event(e);
						mySlide.toggle();
						e.stop();
					});
				}


				if (seyretuseimageads=="0"){
					document.getElementById("showvideo").innerHTML=document.getElementById("hiddenvideoembed").innerHTML;;
				} else {
					document.getElementById("showvideo").innerHTML=document.getElementById("hiddenimagead").innerHTML;

					var intduration=parseInt(seyretuseimageduration);				
					var iTimeoutId = setTimeout("showembedcodeafterad()", intduration);					
				}				
				
			top.document.title = document.getElementById("hiddenvideotitle").innerHTML;
			
			
			}
	
		}
		
		
		function showembedcodeafterad(){
			var hembedcode=document.getElementById("hiddenvideoembed").innerHTML;
			document.getElementById("showvideo").innerHTML = hembedcode;
			
			intIndexOfMatch = hembedcode.indexOf( "MediaPlayer" );
			if (intIndexOfMatch != -1){
				document.getElementById("MediaPlayer").setAttribute("autoStart","1");
			}
			
		}
		
		

		
//*************************************






		
		
		
		function openinpopup(url,width,height){
		
		//window.open (url,'ana' ,'top=100, left=100, menubar=no, toolbar=no, scrollbars=yes, location=no, width='+width+', height='+height+'')
		//oldcode. Didn't remove to be respectful for its service till now :)
		if (height==20) {
			window.open (url,'ana' ,'top=100, left=100, menubar=no, toolbar=no, scrollbars=yes, location=no, width='+width+', height='+height+'');
		} else {
			window.open(url, 'ana', 'menubar=no, toolbar=no, location=no, width='+screen.availWidth+', height='+screen.availHeight+', fullscreen=yes');
		}
		
		}

		function showdirectlink() {
		var vlink=document.getElementById("videolink");	
		vlink.focus();
		vlink.select()
		}

		function showshareembed() {
		var vlink=document.getElementById("embedlink");	
		vlink.focus();
		vlink.select()
		}

		
		function rnormal(){
		var normalrating=document.getElementById("hiddenrating").innerHTML;
		document.getElementById("ratingscale").style.width=normalrating;
		document.getElementById("yellowratingscale").style.width="0%";
		}
		
		
		function ratinganimate(width){
		document.getElementById("ratingscale").style.width="0%";
		document.getElementById("yellowratingscale").style.width=width+"%";
		}
		
		function voteclick(point) {
		document.getElementById("blockit").style.visibility="visible";
		document.getElementById("ajxgif").style.visibility="visible";
		var videoid=document.getElementById("hiddenthevideoid").innerHTML;
		seyrethttp.open('post', 'index2.php?option=com_seyret&no_html=1&task=voteclick&point='+point+'&videoid='+videoid);
		seyrethttp.onreadystatechange = handleResponsevote;
		seyrethttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		seyrethttp.send('');
		}
		
		
		function handleResponsevote() {
			if(seyrethttp.readyState == 4){
				var response = seyrethttp.responseText;
				document.getElementById("blockit").style.visibility="hidden";
				document.getElementById("ajxgif").style.visibility="hidden";
				document.getElementById("hiddenvalues").innerHTML = response;
				document.getElementById("votearea").innerHTML = document.getElementById("hiddennewstars").innerHTML;
				var message=document.getElementById("hiddenmessage").innerHTML;
				alert(message);
			}
		}
		

		
		function selectthisfile() {
		  	
			var file=document.getElementById("remotefilelist").value;
			document.getElementById("videoservercode").value=file;
		  
		}

		

		function showsearchbox() {
		var shwsfstatus=document.getElementById("searchfloatform").style.visibility;
			if (shwsfstatus=="visible"){
			document.getElementById("searchfloatform").style.visibility="hidden";	
			} else {
			document.getElementById("searchfloatform").style.visibility="visible";
			}
		}
		


				
		function addmetoplaylist(vid,thumb){
			
			mySlideuserplaylist.slideIn();
			
			var seyretplaylist=Cookie.get("seyretplaylist");
			var cookieread=Json.evaluate(seyretplaylist);
			
			playlistvideocount=cookieread.videocount;
			playlistvideoids=cookieread.videoids;
			
			var intplaylistvideocount=parseInt(playlistvideocount);
			var newcount=intplaylistvideocount+1;
			cookieread.videocount=newcount;
			
			newplaylistvideoids=playlistvideoids+vid+"a";
			cookieread.videoids=newplaylistvideoids;

			var newcookie=Json.toString(cookieread);
			Cookie.set('seyretplaylist', newcookie, {path:'/'});

			var existingthumbs=document.getElementById("pllistthumbs").innerHTML;
			var imagethumb=existingthumbs+"&nbsp;<a href=\"\"><img src=\""+thumb+"\" style=\"height:24px; border:none;\" />";
			$('pllistthumbs').setHTML(imagethumb);	
		
			var vc=$('userplaylistvideocount');
			var vidcountfx = new Fx.Styles(vc,{
				duration: 1500,
				wait: false,
				transition: Fx.Transitions.Quad.easeOut
			});
			
			var fadeback=$('userplaylist').getStyle('background-color');
			var fadecol=$('userplaylist').getStyle('color');
			vidcountfx.start({
			'background-color': ['#ff0000', fadeback],
			'color': ['#ff0000', fadecol]
			});


			$('userplaylistvideocount').setHTML(newcount);	
			
		
			var inlistimage="<img src=\""+siteaddress+"/components/com_seyret/themes/"+seyrettheme+"/images/alreadyinlist.png\">";
			var addpldiv="addpladiv"+vid;
			$(addpldiv).setHTML(inlistimage);
			

		}
		
		
		function togglepl(){
			mySlideuserplaylist.toggle();
		}


		function updatersslink(){
		var cid=document.getElementById("cid").value;
		var feedtype=document.getElementById("feedtype").value;
		var ordertype=document.getElementById("ordertype").value;
		var feedlimit=document.getElementById("feedlimit").value;
		
		var rsslink=document.getElementById("rsslink");	
		var rss=siteaddress+"/index2.php?option=com_seyret&Itemid=2&task=rss2feed&no_html=1&feedtype="+feedtype+"&cid="+cid+"&order="+ordertype+"&feedlimit="+feedlimit;
		rsslink.value=rss;
		
		$('openrsslink').setProperty('href', rss);
		rsslink.focus();
		rsslink.select()

		}
		
		
		
var displayuploadmessages = new Class({


	initialize: function(){
		this.contruct();
		this.display();
		this.setTarget();

	},
	
	
	contruct: function(){
		if($('displayuploadmessages')) return false;
		new Element('div',{
				id:'uploadmessagelister-overlay',
				styles:{
					display:'none',
					position:'absolute',
					left:0,
					top:0
				}
			})
			.injectInside(document.body);
		var uploadmessagelister = new Element('div',{
				id:'uploadmessagelister',
				styles:{
					display:'none'
				}
			})
			.injectInside(document.body);

		new Element('a',{
				id:'uploadmessagelister-close',
				href:'#'
			})
			.appendText('Close')
			.injectInside(uploadmessagelister);

		new Element('div',{
				id:'uploadmessagelister-browser'
			})
			.injectInside(uploadmessagelister);

			
	
	},
	
	display: function() {
		
		
		$('uploadmessagelister-overlay').setStyles({
			display:'block',
			width:window.getWidth()+'px',
			height:window.getHeight()+'px'
		});
		
		$('uploadmessagelister').setStyle('display', 'block');
		$('uploadmessagelister-browser').setHTML($('postuploadmessagesall').innerHTML);
		

	},
	
	setTarget: function() {

			$('uploadmessagelister-close').removeEvents('click').addEvent('click',this.close.bind(this));
			
	},
	
	close: function(e){
		$('uploadmessagelister').setStyle('display','none');
		$('uploadmessagelister-overlay').setStyle('display','none');
		new Event(e).stop();
	}
})	



function displayuploadmsg(){
	new displayuploadmessages(); 
}


function selectextrthumbnail(thumbno){
	var selectedthumb='thumbselectorimg'+thumbno; 
	var newsrc=$(selectedthumb).getProperty('src');
	$('thumbselectorthumbprev').setProperty('src',newsrc);
	$('picturelink').setProperty('value',newsrc);
	
	$(selectedthumb).addClass('thumbselectorthumbselected');
	
	var oldthumbno=$('selectedthumbnailno').getProperty('value');
	var oldthumbid='thumbselectorimg'+oldthumbno; 
	$(oldthumbid).removeClass('thumbselectorthumbselected');
	
	$('selectedthumbnailno').setProperty('value', thumbno);

}
		
function showmoredetails(spanid){
	var lesspanid="less"+spanid;
	var morepanid="more"+spanid;
	$(spanid).removeClass('hiddenspan');
	$(lesspanid).removeClass('hiddenspan');
	$(morepanid).addClass('hiddenspan');
}

function showlessdetails(spanid){
	var lesspanid="less"+spanid;
	var morepanid="more"+spanid;
	$(spanid).addClass('hiddenspan');
	$(lesspanid).addClass('hiddenspan');
	$(morepanid).removeClass('hiddenspan');
}		