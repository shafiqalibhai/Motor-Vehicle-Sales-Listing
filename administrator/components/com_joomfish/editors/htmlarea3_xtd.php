<script language="javascript" type="text/javascript">
	function copyToClipboard(value, action) {
		try {
			if (document.getElementById) {
				innerHTML="";
				if (action=="copy") {
					srcEl = document.getElementById("original_value_"+value);
					innerHTML = srcEl.innerHTML;
				}
				/*
				textArea = document.getElementById("refField_"+value);
				textArea.value=innerHTML;
				alert(textArea.value);
				div = textArea.previousSibling;
				iframe= div.getElementsByTagName('iframe')[0];
				doc = iframe.contentWindow.document;
				alert(doc.body.innerHTML);
				*/
				editorobj = eval("editoreditor_"+value);
				if ( typeof(editorobj)=="object") {
					editorobj.setHTML( innerHTML);
					//editorobj.insertHTML( innerHTML);
					//alert(doc.body.innerHTML);
					//alert(editorobj.getHTML());
				}
				else {
					if (window.clipboardData){
						window.clipboardData.setData("Text",innerHTML);
						alert("<?php echo ereg_replace( '<br />', '\n', JText::_('CLIPBOARD_COPIED') )?>");
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
