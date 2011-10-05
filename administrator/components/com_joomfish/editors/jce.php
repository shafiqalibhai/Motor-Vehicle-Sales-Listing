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
               tinyMCE.editors["refField_"+value].execCommand("mceSetContent",false,innerHTML );
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
   
   function getRefField(value){
      try {
         if (document.getElementById) {
            if ( typeof(tinyMCE)=="object") {
            	editor = tinyMCE.editors["refField_"+value];
            	if (editor){
            		return editor.getContent();
            	}
            	return "";
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