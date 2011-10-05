function addLoadEvent(func) {
  var oldonload = window.onload;
  if (typeof window.onload != 'function') {
    window.onload = func;
  } else {
    window.onload = function() {
      oldonload();
      func();
    }
  }
}

function prepareInputsForHints() {
  var inputs = document.getElementsByTagName("input");
  for (var i=0; i<inputs.length; i++){
    inputs[i].onfocus = function () {
       this.parentNode.style.backgroundPosition ="bottom left";
    }
    inputs[i].onblur = function () {
      this.parentNode.style.backgroundPosition ="top left";
    }
  }
}
addLoadEvent(prepareInputsForHints);
