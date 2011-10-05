<script language="javascript" type="text/javascript">
	function copyToClipboard(value, action) {
		try {
			if (document.getElementById) {
				innerHTML="";
				if (action=="copy") {
					srcEl = document.getElementById("original_value_"+value);
					innerHTML = srcEl.innerHTML;
				}
				editorobj = document.getElementById("refField_"+value+'_rEdit');
				// Gecko
				if (editorobj.contentDocument) {
					editorobj = editorobj.contentDocument
				}
				else {
					editorobj = window.frames["refField_"+value+'_rEdit'].document;
				}
				editorobj.body.innerHTML = innerHTML;
			}

		}
		catch(e){
			alert("<?php echo ereg_replace( '<br />', '\n', JText::_('CLIPBOARD_NOSUPPORT'));?>");
		}
	}
</script>
