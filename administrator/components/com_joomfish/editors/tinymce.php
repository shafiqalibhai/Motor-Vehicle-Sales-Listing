<script language="javascript" type="text/javascript">
	function copyToClipboard(value, action) {
		try {
			if (document.getElementById) {
				innerHTML="";
				if (action=="copy") {
					srcEl = document.getElementById("original_value_"+value);
					innerHTML = srcEl.innerHTML;
				}
				if ( typeof(tinyMCE)=="object") {
					ed = document.getElementById("refField_"+value);
					ed.value = innerHTML;
					tinyMCE.updateContent("refField_"+value);
				}
				else {
					if (window.clipboardData){
						window.clipboardData.setData("Text",innerHTML);
						alert('<?php echo ereg_replace( '<br />', '\n', JText::_('CLIPBOARD_COPIED') );?>');
					}
					else {
						srcEl = document.getElementById("text_origText_"+value);
    	       			srcEl.value = innerHTML;
        	   			srcEl.select();
						alert('<?php echo ereg_replace( '<br />', '\n', JText::_('CLIPBOARD_COPY'));?>');
					}
				}
			}
		}
		catch(e){
			alert('<?php echo ereg_replace( '<br />', '\n', JText::_('CLIPBOARD_NOSUPPORT'));?>');
		}
	}

   function getRefField(value){
      try {
         if (document.getElementById) {
            if ( typeof(tinyMCE)=="object") {
            	return tinyMCE.getContent("refField_"+value);
            }
            else {
                return "";
            }
         }
      }
      catch(e){
         alert("<?php echo ereg_replace( '<br />', '\n', JText::_('NO_PREVIEW'));?>");
         return "";
      }
   }
   
</script>
