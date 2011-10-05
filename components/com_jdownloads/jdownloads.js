/**
* Toggles the check state of a group of boxes
*
* Checkboxes must have an id attribute in the form cb0, cb1...
* @param The number of box to 'check'
* @param An alternative field name
*
*/

function checkAlle( n, formid, fldName) {
  if (!fldName) {
     fldName = 'cb';
  }
    var formname = 'down'+ formid;
    var f = document.forms[formname];
	var c = f.toggle.checked;
	var n2 = 0;
	for (i=0; i < n; i++) {
		cb = eval( 'f.' + fldName + '' + i );
		if (cb) {
			cb.checked = c;
			n2++;
		}
	}
	if (c) {
		document.forms[formname].boxchecked.value = n2;
	} else {
		document.forms[formname].boxchecked.value = 0;
	}
}

function istChecked(isitchecked,formid){
    var formname = 'down'+ formid;
    if (isitchecked == true){
		document.forms[formname].boxchecked.value++;
	}
	else {
		document.forms[formname].boxchecked.value--;
	}
}

function pruefen(formid,text1,text2){
   var formname = 'down'+ formid;
   var f = document.forms[formname];
   var fehler = "";
   if (f.boxchecked.value < 1) {
      fehler += text1;
   }
   
    // *** error message
   if (fehler != "") {
      var fehlertext = text2;
      fehlertext += fehler;
      alert(fehlertext);
      return false;
   }
   return true;
}

function gocat(catid,itemid){
     var id = document.getElementById("cat_list").value;
     if (id > 0) {
        var link = "index.php?option=com_jdownloads&Itemid=" + itemid + "&task=viewcategory&catid=" + id;
     } else {
        var link = "index.php?option=com_jdownloads&Itemid=" + itemid;
     }
     top.location.href=link;
}

