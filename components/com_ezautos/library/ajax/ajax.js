/* Simple AJAX Code-Kit (SACK) v1.6.1 */
/* ©2005 Gregory Wild-Smith */
/* www.twilightuniverse.com */
/* Software licenced under a modified X11 licence,
   see documentation or authors website for more details */

function sack(file) {
    this.xmlhttp = null;

    this.resetData = function() {
        this.method = "POST";
        this.queryStringSeparator = "?";
        this.argumentSeparator = "&";
        this.URLString = "";
        this.encodeURIString = true;
        this.execute = false;
        this.element = null;
        this.elementObj = null;
        this.requestFile = file;
        this.vars = new Object();
        this.responseStatus = new Array(2);
    };

    this.resetFunctions = function() {
        this.onLoading = function() { };
        this.onLoaded = function() { };
        this.onInteractive = function() { };
        this.onCompletion = function() { };
        this.onError = function() { };
        this.onFail = function() { };
    };

    this.reset = function() {
        this.resetFunctions();
        this.resetData();
    };

    this.createAJAX = function() {
        try {
            this.xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e1) {
            try {
                this.xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e2) {
                this.xmlhttp = null;
            }
        }
        if (! this.xmlhttp) {
            if (typeof XMLHttpRequest != "undefined") {
                this.xmlhttp = new XMLHttpRequest();
            } else {
                this.failed = true;
            }
        }
    };

    this.setVar = function(name, value){
        this.vars[name] = Array(value, false);
    };

    this.encVar = function(name, value, returnvars) {
        if (true == returnvars) {
            return Array(encodeURIComponent(name), encodeURIComponent(value));
        } else {
            this.vars[encodeURIComponent(name)] = Array(encodeURIComponent(value), true);
        }
    }

    this.processURLString = function(string, encode) {
        encoded = encodeURIComponent(this.argumentSeparator);
        regexp = new RegExp(this.argumentSeparator + "|" + encoded);
        varArray = string.split(regexp);
        for (i = 0; i < varArray.length; i++){
            urlVars = varArray[i].split("=");
            if (true == encode){
                this.encVar(urlVars[0], urlVars[1]);
            } else {
                this.setVar(urlVars[0], urlVars[1]);
            }
        }
    }

    this.createURLString = function(urlstring) {
        if (this.encodeURIString && this.URLString.length) {
            this.processURLString(this.URLString, true);
        }

        if (urlstring) {
            if (this.URLString.length) {
                this.URLString += this.argumentSeparator + urlstring;
            } else {
                this.URLString = urlstring;
            }
        }

        // prevents caching of URLString
        this.setVar("rndval", new Date().getTime());

        urlstringtemp = new Array();
        for (key in this.vars) {
            if (false == this.vars[key][1] && true == this.encodeURIString) {
                encoded = this.encVar(key, this.vars[key][0], true);
                delete this.vars[key];
                this.vars[encoded[0]] = Array(encoded[1], true);
                key = encoded[0];
            }

            urlstringtemp[urlstringtemp.length] = key + "=" + this.vars[key][0];
        }
        if (urlstring){
            this.URLString += this.argumentSeparator + urlstringtemp.join(this.argumentSeparator);
        } else {
            this.URLString += urlstringtemp.join(this.argumentSeparator);
        }
    }

    this.runResponse = function() {
        eval(this.response);
    }

    this.runAJAX = function(urlstring) {
        if (this.failed) {
            this.onFail();
        } else {


            this.createURLString(urlstring);
            //this.createURLString(this.requestFile);

            if (this.element) {
                this.elementObj = document.getElementById(this.element);
            }
            if (this.xmlhttp) {
                var self = this;
                if (this.method == "GET") {
                    totalurlstring = this.requestFile + this.queryStringSeparator + this.URLString;
                    this.xmlhttp.open(this.method, totalurlstring, true);
                } else {
                    this.xmlhttp.open(this.method, this.requestFile, true);
                    try {
                        this.xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded")
                    } catch (e) { }
                }

                this.xmlhttp.onreadystatechange = function() {

                    switch (self.xmlhttp.readyState) {
                        case 1:
                            self.onLoading();
                            break;
                        case 2:
                            self.onLoaded();
                            break;
                        case 3:
                            self.onInteractive();
                            break;
                        case 4:
                            self.response = self.xmlhttp.responseText;
                            self.responseXML = self.xmlhttp.responseXML;
                            self.responseStatus[0] = self.xmlhttp.status;
                            self.responseStatus[1] = self.xmlhttp.statusText;

                            if (self.execute) {
                                self.runResponse();
                            }

                            if (self.elementObj) {
                                elemNodeName = self.elementObj.nodeName;
                                elemNodeName.toLowerCase();
                                if (elemNodeName == "input"
                                || elemNodeName == "select"
                                || elemNodeName == "option"
                                || elemNodeName == "textarea") {
                                    self.elementObj.value = self.response;
                                } else {
                                    self.elementObj.innerHTML = self.response;
                                }
                            }
                            if (self.responseStatus[0] == "200") {
                                self.onCompletion();
                            } else {
                                self.onError();
                            }

                            self.URLString = "";
                            break;
                    }
                };
                this.xmlhttp.send(this.URLString);
            }
        }

    };

    this.reset();
    this.createAJAX();
}

var ajax = new sack();


function getDropModelList(sel,admin)
{
  var firstCode = sel.options[sel.selectedIndex].value;
  document.getElementById('model').options.length = 0;  // Empty second select box
  if(firstCode.length>0){
  //if call from admin then make sure front end file is called
  if(admin){
   ajax.requestFile = '../index2.php?option=com_ezautos&task=helpers&id=1&no_html=1&firstCode='+firstCode;  // Specifying which file to get
  }else{
   ajax.requestFile = 'index2.php?option=com_ezautos&task=helpers&id=1&no_html=1&firstCode='+firstCode;  // Specifying which file to get
  }
    ajax.onCompletion = createSecond;  // Specify function that will be executed after file has been found
    ajax.runAJAX();    // Execute AJAX function
  }
}

function createSecond()
{
  var obj = document.getElementById('model');
  eval(ajax.response);  // Executing the response from Ajax as Javascript code

}


function getDropModelList2(sel,admin)
{

  var firstCode2 = sel.options[sel.selectedIndex].value;
  document.getElementById('model2').options.length = 0;  // Empty second select box

  if(firstCode2.length>0){
  //if call from admin then make sure front end file is called
   ajax.requestFile = 'index2.php?option=com_ezautos&task=helpers&id=1&no_html=1&firstCode='+firstCode2;  // Specifying which file to get

    ajax.onCompletion = createSecond2;  // Specify function that will be executed after file has been found
    ajax.runAJAX();    // Execute AJAX function
  }
}

function createSecond2()
{
  var obj = document.getElementById('model2');
  eval(ajax.response);  // Executing the response from Ajax as Javascript code

}


function getDropModelList3(sel,admin)
{

  var firstCode3 = sel.options[sel.selectedIndex].value;
  document.getElementById('model3').options.length = 0;  // Empty second select box

  if(firstCode3.length>0){
  //if call from admin then make sure front end file is called
   ajax.requestFile = 'index2.php?option=com_ezautos&task=helpers&id=1&no_html=1&firstCode='+firstCode3;  // Specifying which file to get

    ajax.onCompletion = createSecond3;  // Specify function that will be executed after file has been found
    ajax.runAJAX();    // Execute AJAX function
  }
}

function createSecond3()
{
  var obj = document.getElementById('model3');
  eval(ajax.response);  // Executing the response from Ajax as Javascript code

}


function getDropModelList4(sel,admin)
{

  var firstCode4 = sel.options[sel.selectedIndex].value;
  document.getElementById('model4').options.length = 0;  // Empty second select box

  if(firstCode4.length>0){
  //if call from admin then make sure front end file is called
   ajax.requestFile = 'index2.php?option=com_ezautos&task=helpers&id=1&no_html=1&firstCode='+firstCode4;  // Specifying which file to get

    ajax.onCompletion = createSecond4;  // Specify function that will be executed after file has been found
    ajax.runAJAX();   // Execute AJAX function
  }
}

function createSecond4()
{
  var obj = document.getElementById('model4');
  eval(ajax.response);  // Executing the response from Ajax as Javascript code
}




// Added by Hrvoje for City/Country drop down list
function getDropCityList6(sel,admin)
{
  var firstCode6 = sel.options[sel.selectedIndex].value;
  document.getElementById('city').options.length = 0;  // Empty second select box
  if(firstCode6.length>0){
  //if call from admin then make sure front end file is called 
   if(admin){
   ajax.requestFile = '../index2.php?option=com_ezautos&task=helpers&id=1&no_html=1&firstCode6='+firstCode6;  // Specifying which file to get
  }else{
   ajax.requestFile = 'index2.php?option=com_ezautos&task=helpers&id=1&no_html=1&firstCode6='+firstCode6;  // Specifying which file to get
  }
    ajax.onCompletion = createSecond6;  // Specify function that will be executed after file has been found
    ajax.runAJAX();    // Execute AJAX function
  }
}

function createSecond6()
{
  var obj = document.getElementById('city');
  eval(ajax.response);  // Executing the response from Ajax as Javascript code

}


// by Hrvoje for frontend admin
function getDropModelList10(sel,admin)
{

  var firstCode10 = sel.options[sel.selectedIndex].value;
  document.getElementById('city2').options.length = 0;  // Empty second select box

  if(firstCode10.length>0){
  //if call from admin then make sure front end file is called
   ajax.requestFile = 'index2.php?option=com_ezautos&task=helpers&id=1&no_html=1&firstCode10='+firstCode10;  // Specifying which file to get

    ajax.onCompletion = createSecond10;  // Specify function that will be executed after file has been found
    ajax.runAJAX();    // Execute AJAX function
  }
}

function createSecond10()
{
  var obj = document.getElementById('city2');
  eval(ajax.response);  // Executing the response from Ajax as Javascript code

}



// End Code added by Hrvoje
