<script language="javascript" type="text/javascript">
	function copyToClipboard(value, action) {
		try {
			if (document.getElementById) {
				innerHTML="";
				if (action=="copy") {
					srcEl = document.getElementById("original_value_"+value);
					innerHTML = srcEl.innerHTML;
				}
				if ( typeof(FCKeditorAPI)=="object") {
					var oEditor = FCKeditorAPI.GetInstance("refField_"+value) ;
					if ( oEditor.EditMode == FCK_EDITMODE_WYSIWYG )
					{
						// Insert the desired HTML.
						oEditor.InsertHtml(innerHTML) ;
					}
					else	alert( 'Please switch to WYSIWYG mode.' ) ;

				}
				else {
					if (window.clipboardData){
						window.clipboardData.setData("Text",innerHTML);
						alert("<?php echo ereg_replace( '<br />', '\n', JText::_('CLIPBOARD_COPIED') );?>");
					}
					else {
						srcEl = document.getElementById("text_origText_"+value);
    	       			srcEl.value = innerHTML;
        	   			srcEl.select();
						alert("<?php echo ereg_replace( '<br />', '\n', JText::_('CLIPBOARD_COPY'));?>");
					}
				}
			}
		}
		catch(e){
			alert("<?php echo ereg_replace( '<br />', '\n', JText::_('CLIPBOARD_NOSUPPORT'));?>");
		}
	}
</script>
