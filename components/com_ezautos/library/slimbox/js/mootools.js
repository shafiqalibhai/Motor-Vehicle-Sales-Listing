/*
Script: Moo.js
	My Object Oriented javascript.

Author:
	Valerio Proietti, <http://mad4milk.net>

License:
	MIT-style license.

Mootools Credits:
	- Class is slightly based on Base.js <http://dean.edwards.name/weblog/2006/03/base/> (c) 2006 Dean Edwards, License <http://creativecommons.org/licenses/LGPL/2.1/>
	- Some functions are based on those found in prototype.js <http://prototype.conio.net/> (c) 2005 Sam Stephenson sam [at] conio [dot] net, MIT-style license
	- Documentation by Aaron Newton (aaron.newton [at] cnet [dot] com) and Valerio Proietti.
*/

/*
Class: Class
	The base class object of the <http://mootools.net> framework.

Arguments:
	properties - the collection of properties that apply to the class. Creates a new class, its initialize method will fire upon class instantiation.

Example:
	(start code)
	var Cat = new Class({
		initialize: function(name){
			this.name = name;
		}
	});
	var myCat = new Cat('Micia');
	alert myCat.name; //alerts 'Micia'
	(end)
*/

var Class = function(properties){
	var klass = function(){
		if (this.initialize && arguments[0] != 'noinit') return this.initialize.apply(this, arguments);
		else return this;
	};
	for (var property in this) klass[property] = this[property];
	klass.prototype = properties;
	return klass;
};

/*
Property: empty
	Returns an empty function
*/

Class.empty = function(){};

Class.prototype = {

	/*
	Property: extend
		Returns the copy of the Class extended with the passed in properties.

	Arguments:
		properties - the properties to add to the base class in this new Class.

	Example:
		(start code)
		var Animal = new Class({
			initialize: function(age){
				this.age = age;
			}
		});
		var Cat = Animal.extend({
			initialize: function(name, age){
				this.parent(age); //will call the previous initialize;
				this.name = name;
			}
		});
		var myCat = new Cat('Micia', 20);
		alert myCat.name; //alerts 'Micia'
		alert myCat.age; //alerts 20
		(end)
	*/

	extend: function(properties){
		var pr0t0typ3 = new this('noinit');

		var parentize = function(previous, current){
			if (!previous.apply || !current.apply) return false;
			return function(){
				this.parent = previous;
				return current.apply(this, arguments);
			};
		};

		for (var property in properties){
			var previous = pr0t0typ3[property];
			var current = properties[property];
			if (previous && previous != current) current = parentize(previous, current) || current;
			pr0t0typ3[property] = current;
		}
		return new Class(pr0t0typ3);
	},

	/*
	Property: implement
		Implements the passed in properties to the base Class prototypes, altering the base class, unlike <Class.extend>.

	Arguments:
		properties - the properties to add to the base class.

	Example:
		(start code)
		var Animal = new Class({
			initialize: function(age){
				this.age = age;
			}
		});
		Animal.implement({
			setName: function(name){
				this.name = name
			}
		});
		var myAnimal = new Animal(20);
		myAnimal.setName('Micia');
		alert(myAnimal.name); //alerts 'Micia'
		(end)
	*/

	implement: function(properties){
		for (var property in properties) this.prototype[property] = properties[property];
	}

};

/* Section: Object related Functions */

/*
Function: Object.extend
	Copies all the properties from the second passed object to the first passed Object.
	If you do myWhatever.extend = Object.extend the first parameter will become myWhatever, and your extend function will only need one parameter.

Example:
	(start code)
	var firstOb = {
		'name': 'John',
		'lastName': 'Doe'
	};
	var secondOb = {
		'age': '20',
		'sex': 'male',
		'lastName': 'Dorian'
	};
	Object.extend(firstOb, secondOb);
	//firstOb will become: 
	{
		'name': 'John',
		'lastName': 'Dorian',
		'age': '20',
		'sex': 'male'
	};
	(end)

Returns:
	The first object, extended.
*/

Object.extend = function(){
	var args = arguments;
	args = (args[1]) ? [args[0], args[1]] : [this, args[0]];
	for (var property in args[1]) args[0][property] = args[1][property];
	return args[0];
};

/*
Function: Object.Native
	Will add a .extend method to the objects passed as a parameter, equivalent to <Class.implement>

Arguments:
	a number of classes/native javascript objects

*/

Object.Native = function(){
	for (var i = 0; i < arguments.length; i++) arguments[i].extend = Class.prototype.implement;
};

new Object.Native(Function, Array, String, Number, Class);

/*
Script: Utility.js
	Contains Utility functions

Author:
	Valerio Proietti, <http://mad4milk.net>

License:
	MIT-style license.
*/

//htmlelement

if (typeof HTMLElement == 'undefined'){
	var HTMLElement = Class.empty;
	HTMLElement.prototype = {};
} else {
	HTMLElement.prototype.htmlElement = true;
}

//window, document

window.extend = document.extend = Object.extend;
var Window = window;

/*
Function: $type
	Returns the type of object that matches the element passed in.

Arguments:
	obj - the object to inspect.

Example:
	>var myString = 'hello';
	>$type(myString); //returns "string"

Returns:
	'element' - if obj is a DOM element node
	'textnode' - if obj is a DOM text node
	'whitespace' - if obj is a DOM whitespace node
	'array' - if obj is an array
	'object' - if obj is an object
	'string' - if obj is a string
	'number' - if obj is a number
	'boolean' - if obj is a boolean
	'function' - if obj is a function
	false - (boolean) if the object is not defined or none of the above.
*/

function $type(obj){
	if (obj === null || obj === undefined) return false;
	var type = typeof obj;
	if (type == 'object'){
		if (obj.htmlElement) return 'element';
		if (obj.push) return 'array';
		if (obj.nodeName){
			switch (obj.nodeType){
				case 1: return 'element';
				case 3: return obj.nodeValue.test(/\S/) ? 'textnode' : 'whitespace';
			}
		}
	}
	return type;
};

/*
Function: $chk
	Returns true if the passed in value/object exists or is 0, otherwise returns false.
	Useful to accept zeroes.
*/

function $chk(obj){
	return !!(obj || obj === 0);
};

/*
Function: $pick
	Returns the first object if defined, otherwise returns the second.
*/

function $pick(obj, picked){
	return ($type(obj)) ? obj : picked;
};

/*
Function: $random
	Returns a random integer number between the two passed in values.

Arguments:
	min - integer, the minimum value (inclusive).
	max - integer, the maximum value (inclusive).

Returns:
	a random integer between min and max.
*/

function $random(min, max){
	return Math.floor(Math.random() * (max - min + 1) + min);
};

/*
Function: $clear
	clears a timeout or an Interval.

Returns:
	null

Arguments:
	timer - the setInterval or setTimeout to clear.

Example:
	>var myTimer = myFunction.delay(5000); //wait 5 seconds and execute my function.
	>myTimer = $clear(myTimer); //nevermind

See also:
	<Function.delay>, <Function.periodical>
*/

function $clear(timer){
	clearTimeout(timer);
	clearInterval(timer);
	return null;
};

/*
Class: window
	Some properties are attached to the window object by the browser detection.

Properties:
	window.ie - will be set to true if the current browser is internet explorer (any).
	window.ie6 - will be set to true if the current browser is internet explorer 6.
	window.ie7 - will be set to true if the current browser is internet explorer 7.
	window.khtml - will be set to true if the current browser is Safari/Konqueror.
	window.gecko - will be set to true if the current browser is Mozilla/Gecko.
*/

if (window.ActiveXObject) window.ie = window[window.XMLHttpRequest ? 'ie7' : 'ie6'] = true;
else if (document.childNodes && !document.all && !navigator.taintEnabled) window.khtml = true;
else if (document.getBoxObjectFor != null) window.gecko = true;

//enables background image cache for internet explorer 6

if (window.ie6) try {document.execCommand("BackgroundImageCache", false, true);} catch (e){};

/*
Script: Array.js
	Contains Array prototypes, <$A>, <$each>

Authors:
	- Christophe Beyls, <http://digitalia.be>
	- Valerio Proietti, <http://mad4milk.net>

License:
	MIT-style license.
*/

/*
Class: Array
	A collection of The Array Object prototype methods.
*/

//emulated methods

/*
Property: forEach
	Iterates through an array; This method is only available for browsers without native *forEach* support.
	For more info see <http://developer.mozilla.org/en/docs/Core_JavaScript_1.5_Reference:Global_Objects:Array:forEach>
*/

Array.prototype.forEach = Array.prototype.forEach || function(fn, bind){
	for (var i = 0; i < this.length; i++) fn.call(bind, this[i], i, this);
};

/*
Property: filter
	This method is provided only for browsers without native *filter* support.
	For more info see <http://developer.mozilla.org/en/docs/Core_JavaScript_1.5_Reference:Objects:Array:filter>
*/

Array.prototype.filter = Array.prototype.filter || function(fn, bind){
	var results = [];
	for (var i = 0; i < this.length; i++){
		if (fn.call(bind, this[i], i, this)) results.push(this[i]);
	}
	return results;
};

/*
Property: map
	This method is provided only for browsers without native *map* support.
	For more info see <http://developer.mozilla.org/en/docs/Core_JavaScript_1.5_Reference:Global_Objects:Array:map>
*/

Array.prototype.map = Array.prototype.map || function(fn, bind){
	var results = [];
	for (var i = 0; i < this.length; i++) results[i] = fn.call(bind, this[i], i, this);
	return results;
};

/*
Property: every
	This method is provided only for browsers without native *every* support.
	For more info see <http://developer.mozilla.org/en/docs/Core_JavaScript_1.5_Reference:Global_Objects:Array:every>
*/

Array.prototype.every = Array.prototype.every || function(fn, bind){
	for (var i = 0; i < this.length; i++){
		if (!fn.call(bind, this[i], i, this)) return false;
	}
	return true;
};

/*
Property: some
	This method is provided only for browsers without native *some* support.
	For more info see <http://developer.mozilla.org/en/docs/Core_JavaScript_1.5_Reference:Global_Objects:Array:some>
*/

Array.prototype.some = Array.prototype.some || function(fn, bind){
	for (var i = 0; i < this.length; i++){
		if (fn.call(bind, this[i], i, this)) return true;
	}
	return false;
};

/*
Property: indexOf
	This method is provided only for browsers without native *indexOf* support.
	For more info see <http://developer.mozilla.org/en/docs/Core_JavaScript_1.5_Reference:Global_Objects:Array:indexOf>
*/

Array.prototype.indexOf = Array.prototype.indexOf || function(item, from){
	from = from || 0;
	if (from < 0) from = Math.max(0, this.length + from);
	while (from < this.length){
		if(this[from] === item) return from;
		from++;
	}
	return -1;
};

//custom methods

Array.extend({

	/*
	Property: each
		Same as <Array.forEach>.

	Arguments:
		fn - the function to execute with each item in the array
		bind - optional, the object that the "this" of the function will refer to.

	Example:
		>var Animals = ['Cat', 'Dog', 'Coala'];
		>Animals.forEach(function(animal){
		>	document.write(animal)
		>});
	*/

	each: Array.prototype.forEach,

	/*
	Property: copy
		returns a copy of the array.

	Returns:
		a new array which is a copy of the current one.
	
	Arguments:
		start - optional, the index where to start the copy, default is 0. If negative, it is taken as the offset from the end of the array.
		length - optional, the number of elements to copy. By default, copies all elements from start to the end of the array.

	Example:
		>var letters = ["a","b","c"];
		>var copy = letters.copy();		// ["a","b","c"] (new instance)
	*/

	copy: function(start, length){
		start = start || 0;
		if (start < 0) start = this.length + start;
		length = length || (this.length - start);
		var newArray = [];
		for (var i = 0; i < length; i++) newArray[i] = this[start++];
		return newArray;
	},

	/*
	Property: remove
		Removes all occurrences of an item from the array.

	Arguments:
		item - the item to remove

	Returns:
		the Array with all occurrences of the item removed.

	Example:
		>["1","2","3","2"].remove("2") // ["1","3"];
	*/

	remove: function(item){
		var i = 0;
		while (i < this.length){
			if (this[i] === item) this.splice(i, 1);
			else i++;
		}
		return this;
	},

	/*
	Property: test
		Tests an array for the presence of an item.

	Arguments:
		item - the item to search for in the array.
		from - optional, the index at which to begin the search, default is 0. If negative, it is taken as the offset from the end of the array.

	Returns:
		true - the item was found
		false - it wasn't

	Example:
		>["a","b","c"].test("a"); // true
		>["a","b","c"].test("d"); // false
	*/

	test: function(item, from){
		return this.indexOf(item, from) != -1;
	},

	/*
	Property: extend
		Extends an array with another

	Arguments:
		newArray - the array to extend ours with

	Example:
		>var Animals = ['Cat', 'Dog', 'Coala'];
		>Animals.extend(['Lizard']);
		>//Animals is now: ['Cat', 'Dog', 'Coala', 'Lizard'];
	*/

	extend: function(newArray){
		for (var i = 0; i < newArray.length; i++) this.push(newArray[i]);
		return this;
	},

	/*
	Property: associate
		Creates an object with key-value pairs based on the array of keywords passed in
		and the current content of the array.

	Arguments:
		keys - the array of keywords.

	Example:
		(start code)
		var Animals = ['Cat', 'Dog', 'Coala', 'Lizard'];
		var Speech = ['Miao', 'Bau', 'Fruuu', 'Mute'];
		var Speeches = Animals.associate(speech);
		//Speeches['Miao'] is now Cat.
		//Speeches['Bau'] is now Dog.
		//...
		(end)
	*/

	associate: function(keys){
		var obj = {}, length = Math.min(this.length, keys.length);
		for (var i = 0; i < length; i++) obj[keys[i]] = this[i];
		return obj;
	}

});

/* Section: Utility Functions */

/*
Function: $A()
	Same as <Array.copy>, but as function.
	Useful to apply Array prototypes to iterable objects, as a collection of DOM elements or the arguments object.

Example:
	(start code)
	function myFunction(){
		$A(arguments).each(argument, function(){
			alert(argument);
		});
	};
	//the above will alert all the arguments passed to the function myFunction.
	(end)
*/

function $A(array, start, length){
	return Array.prototype.copy.call(array, start, length);
};

/*
Function: $each
	use to iterate through iterables that are not regular arrays, such as builtin getElementsByTagName calls, or arguments of a function.

Arguments:
	iterable - an iterable element.
	function - function to apply to the iterable.
	bind - optional, the 'this' of the function will refer to this object.
*/

function $each(iterable, fn, bind){
	return Array.prototype.forEach.call(iterable, fn, bind);
};

/*
Script: String.js
	Contains String prototypes and Number prototypes.

Author:
	Valerio Proietti, <http://mad4milk.net>

License:
	MIT-style license.
*/

/*
Class: String
	A collection of The String Object prototype methods.
*/

String.extend({

	/*
	Property: test
		Tests a string with a regular expression.

	Arguments:
		regex - a string or regular expression object, the regular expression you want to match the string with
		params - optional, if first parameter is a string, any parameters you want to pass to the regex ('g' has no effect)

	Returns:
		true if a match for the regular expression is found in the string, false if not.
		See <http://developer.mozilla.org/en/docs/Core_JavaScript_1.5_Reference:Objects:RegExp:test>

	Example:
		>"I like cookies".test("cookie"); // returns true
		>"I like cookies".test("COOKIE", "i") // ignore case, returns true
		>"I like cookies".test("cake"); // returns false
	*/

	test: function(regex, params){
		return ((typeof regex == 'string') ? new RegExp(regex, params) : regex).test(this);
	},

	/*
	Property: toInt
		parses a string to an integer.

	Returns:
		either an int or "NaN" if the string is not a number.

	Example:
		>var value = "10px".toInt(); // value is 10
	*/

	toInt: function(){
		return parseInt(this);
	},

	toFloat: function(){
		return parseFloat(this);
	},

	/*
	Property: camelCase
		Converts a hiphenated string to a camelcase string.

	Example:
		>"I-like-cookies".camelCase(); //"ILikeCookies"

	Returns:
		the camel cased string
	*/

	camelCase: function(){
		return this.replace(/-\D/g, function(match){
			return match.charAt(1).toUpperCase();
		});
	},

	/*
	Property: hyphenate
		Converts a camelCased string to a hyphen-ated string.

	Example:
		>"ILikeCookies".hyphenate(); //"I-like-cookies"
	*/

	hyphenate: function(){
		return this.replace(/\w[A-Z]/g, function(match){
			return (match.charAt(0)+'-'+match.charAt(1).toLowerCase());
		});
	},

	/*
	Property: capitalize
		Converts the first letter in each word of a string to Uppercase.

	Example:
		>"i like cookies".capitalize(); //"I Like Cookies"

	Returns:
		the capitalized string
	*/

	capitalize: function(){
		return this.toLowerCase().replace(/\b[a-z]/g, function(match){
			return match.toUpperCase();
		});
	},

	/*
	Property: trim
		Trims the leading and trailing spaces off a string.

	Example:
		>"    i like cookies     ".trim() //"i like cookies"

	Returns:
		the trimmed string
	*/

	trim: function(){
		return this.replace(/^\s+|\s+$/g, '');
	},

	/*
	Property: clean
		trims (<String.trim>) a string AND removes all the double spaces in a string.

	Returns:
		the cleaned string

	Example:
		>" i      like     cookies      \n\n".clean() //"i like cookies"
	*/

	clean: function(){
		return this.replace(/\s{2,}/g, ' ').trim();
	},

	/*
	Property: rgbToHex
		Converts an RGB value to hexidecimal. The string must be in the format of "rgb(255,255,255)" or "rgba(255,255,255,1)";

	Arguments:
		array - boolean value, defaults to false. Use true if you want the array ['FF','33','00'] as output instead of "#FF3300"

	Returns:
		hex string or array. returns "transparent" if the output is set as string and the fourth value of rgba in input string is 0.

	Example:
		>"rgb(17,34,51)".rgbToHex(); //"#112233"
		>"rgba(17,34,51,0)".rgbToHex(); //"transparent"
		>"rgb(17,34,51)".rgbToHex(true); //['11','22','33']
	*/

	rgbToHex: function(array){
		var rgb = this.match(/\d{1,3}/g);
		return (rgb) ? rgb.rgbToHex(array) : false;
	},

	/*
	Property: hexToRgb
		Converts a hexidecimal color value to RGB. Input string must be the hex color value (with or without the hash). Also accepts triplets ('333');

	Arguments:
		array - boolean value, defaults to false. Use true if you want the array [255,255,255] as output instead of "rgb(255,255,255)";

	Returns:
		rgb string or array.

	Example:
		>"#112233".hexToRgb(); //"rgb(17,34,51)"
		>"#112233".hexToRgb(true); //[17,34,51]
	*/

	hexToRgb: function(array){
		var hex = this.match(/^#?(\w{1,2})(\w{1,2})(\w{1,2})$/);
		return (hex) ? hex.slice(1).hexToRgb(array) : false;
	}

});

Array.extend({
	
	/*
	Property: rgbToHex
		see <String.rgbToHex>, but as an array method.
	*/
	
	rgbToHex: function(array){
		if (this.length < 3) return false;
		if (this[3] && (this[3] == 0) && !array) return 'transparent';
		var hex = [];
		for (var i = 0; i < 3; i++){
			var bit = (this[i]-0).toString(16);
			hex.push((bit.length == 1) ? '0'+bit : bit);
		}
		return array ? hex : '#'+hex.join('');
	},
	
	/*
	Property: hexToRgb
		same as <String.hexToRgb>, but as an array method.
	*/
	
	hexToRgb: function(array){
		if (this.length != 3) return false;
		var rgb = [];
		for (var i = 0; i < 3; i++){
			rgb.push(parseInt((this[i].length == 1) ? this[i]+this[i] : this[i], 16));
		}
		return array ? rgb : 'rgb('+rgb.join(',')+')';
	}

});

/*
Class: Number
	contains the internal method toInt.
*/

Number.extend({

	/*
	Property: toInt
		Returns this number; useful because toInt must work on both Strings and Numbers.
	*/

	toInt: function(){
		return parseInt(this);
	},

	toFloat: function(){
		return parseFloat(this);
	}

});

/* 
Script: Function.js
	Contains Function prototypes and utility functions .

Author:
	Valerio Proietti, <http://mad4milk.net>

License:
	MIT-style license.

Credits:
	- Some functions are inspired by those found in prototype.js <http://prototype.conio.net/> (c) 2005 Sam Stephenson sam [at] conio [dot] net, MIT-style license
*/

/*
Class: Function
	A collection of The Function Object prototype methods.
*/

Function.extend({

	/*
	Property: create
		Main function to create closures.
	
	Returns:
		a function.
	
	Arguments:
		options - An Options object.
	
	Options:
		bind - The object that the "this" of the function will refer to. Default is the current function.
		event - If set to true, the function will act as an event listener and receive an event as first argument.
				If set to a class name, the function will receive a new instance of this class (with the event passed as argument's constructor) as first argument.
				Default is false.
		arguments - A single argument or array of arguments that will be passed to the function when called.
					If both the event and arguments options are set, the event is passed as first argument and the arguments array will follow.
					Default is no custom arguments, the function will receive the standard arguments when called.
		delay - Numeric value: if set, the returned function will delay the actual execution by this amount of milliseconds and return a timer handle when called.
				Default is no delay.
		periodical - Numeric value: if set, the returned function will periodically perform the actual execution with this specified interval and return a timer handle when called.
				Default is no periodical execution.
		attempt - If set to true, the returned function will try to execute and return either the results or the error when called. Default is false.
	*/

	create: function(options){
		var fn = this;
		options = Object.extend({
			'bind': fn, 
			'event': false, 
			'arguments': null, 
			'delay': false, 
			'periodical': false, 
			'attempt': false
		}, options || {});
		if ($chk(options.arguments) && $type(options.arguments) != 'array') options.arguments = [options.arguments];
		return function(event){
			var args;
			if (options.event){
				event = event || window.event;
				args = [(options.event === true) ? event : new options.event(event)];
				if (options.arguments) args = args.concat(options.arguments);
			}
			else args = options.arguments || arguments;
			var returns = function(){
				return fn.apply(options.bind, args);
			};
			if (options.delay) return setTimeout(returns, options.delay);
			if (options.periodical) return setInterval(returns, options.periodical);
			if (options.attempt){
				try {
					return returns();
				} catch(err){
					return err;
				}
			}
			return returns();
		};
	},

	/*
	Property: pass
		Shortcut to create closures with arguments and bind.

	Returns:
		a function.

	Arguments:
		args - the arguments passed. must be an array if arguments > 1
		bind - optional, the object that the "this" of the function will refer to.

	Example:
		>myFunction.pass([arg1, arg2], myElement);
	*/

	pass: function(args, bind){
		return this.create({'arguments': args, 'bind': bind});
	},
	
	/*
	Property: attempt
		Tries to execute the function, returns either the function results or the error.

	Arguments:
		args - the arguments passed. must be an array if arguments > 1
		bind - optional, the object that the "this" of the function will refer to.

	Example:
		>myFunction.attempt([arg1, arg2], myElement);
	*/

	attempt: function(args, bind){
		return this.create({'arguments': args, 'bind': bind, 'attempt': true})();
	},

	/*
	Property: bind
		method to easily create closures with "this" altered.

	Arguments:
		bind - optional, the object that the "this" of the function will refer to.
		args - optional, the arguments passed. must be an array if arguments > 1

	Returns:
		a function.

	Example:
		>function myFunction(){
		>	this.setStyle('color', 'red');
		>	// note that 'this' here refers to myFunction, not an element
		>	// we'll need to bind this function to the element we want to alter
		>};
		>var myBoundFunction = myFunction.bind(myElement);
		>myBoundFunction(); // this will make the element myElement red.
	*/

	bind: function(bind, args){
		return this.create({'bind': bind, 'arguments': args});
	},

	/*
	Property: bindAsEventListener
		cross browser method to pass event firer

	Arguments:
		bind - optional, the object that the "this" of the function will refer to.
		args - optional, the arguments passed. must be an array if arguments > 1

	Returns:
		a function with the parameter bind as its "this" and as a pre-passed argument event or window.event, depending on the browser.

	Example:
		>function myFunction(event){
		>	alert(event.clientx) //returns the coordinates of the mouse..
		>};
		>myElement.onclick = myFunction.bindAsEventListener(myElement);
	*/

	bindAsEventListener: function(bind, args){
		return this.create({'bind': bind, 'event': true, 'arguments': args});
	},

	/*
	Property: delay
		Delays the execution of a function by a specified duration.

	Arguments:
		ms - the duration to wait in milliseconds
		bind - optional, the object that the "this" of the function will refer to.
		args - optional, the arguments passed. must be an array if arguments > 1

	Example:
		>myFunction.delay(50, myElement) //wait 50 milliseconds, then call myFunction and bind myElement to it
		>(function(){alert('one second later...')}).delay(1000); //wait a second and alert
	*/

	delay: function(ms, bind, args){
		return this.create({'delay': ms, 'bind': bind, 'arguments': args})();
	},

	/*
	Property: periodical
		Executes a function in the specified intervals of time

	Arguments:
		ms - the duration of the intervals between executions.
		bind - optional, the object that the "this" of the function will refer to.
		args - optional, the arguments passed. must be an array if arguments > 1
	*/

	periodical: function(ms, bind, args){
		return this.create({'periodical': ms, 'bind': bind, 'arguments': args})();
	}

});

/*
Script: Element.js
	Contains useful Element prototypes, to be used with the dollar function <$>.

Authors:
	- Valerio Proietti, <http://mad4milk.net>
	- Christophe Beyls, <http://digitalia.be>

License:
	MIT-style license.

Credits:
	- Some functions are inspired by those found in prototype.js <http://prototype.conio.net/> (c) 2005 Sam Stephenson sam [at] conio [dot] net, MIT-style license
*/

/*
Class: Element
	Custom class to allow all of its methods to be used with any DOM element via the dollar function <$>.
*/

var Element = new Class({

	/*
	Property: initialize
		Creates a new element of the type passed in.

	Arguments:
		el - the tag name for the element you wish to create.

	Example:
		>var div = new Element('div');
	*/

	initialize: function(el){
		if ($type(el) == 'string') el = document.createElement(el);
		return $(el);
	}

});

/*
Section: Utility Functions

Function: $
	returns the element passed in with all the Element prototypes applied.

Arguments:
	el - a reference to an actual element or a string representing the id of an element

Example:
	>$('myElement') // gets a DOM element by id with all the Element prototypes applied.
	>var div = document.getElementById('myElement');
	>$(div) //returns an Element also with all the mootools extentions applied.

	You'll use this when you aren't sure if a variable is an actual element or an id, as
	well as just shorthand for document.getElementById().

Returns:
	a DOM element or false (if no id was found).

Note:
	you need to call $ on an element only once to get all the prototypes.
	But its no harm to call it multiple times, as it will detect if it has been already extended.
*/

function $(el){
	if (!el) return false;
	if (el._element_extended_ || [window, document].test(el)) return el;
	if ($type(el) == 'string') el = document.getElementById(el);
	if ($type(el) != 'element') return false;
	if (['object', 'embed'].test(el.tagName.toLowerCase()) || el.extend) return el;
	el._element_extended_ = true;
	Garbage.collect(el);
	el.extend = Object.extend;
	if (!(el.htmlElement)) el.extend(Element.prototype);
	return el;
};

//elements class

var Elements = new Class({});

new Object.Native(Elements);

document.getElementsBySelector = document.getElementsByTagName;

/*
Function: $$
	Selects, and extends DOM elements.

Arguments:
	HTMLCollection(document.getElementsByTagName, element.childNodes), an array of elements, a string.

Note:
	if you loaded <Dom.js>, $$ will also accept CSS Selectors.

Example:
	>$$('a') //an array of all anchor tags on the page
	>$$('a', 'b') //an array of all anchor and bold tags on the page
	>$$('#myElement') //array containing only the element with id = myElement. (only with <Dom.js>)
	>$$('#myElement a.myClass') //an array of all anchor tags with the class "myClass" within the DOM element with id "myElement" (only with <Dom.js>)

Returns:
	array - array of all the dom elements matched
*/

function $$(){
	if (!arguments) return false;
	if (arguments.length == 1){
		if (!arguments[0]) return false;
		if (arguments[0]._elements_extended_) return arguments[0];
	}
	var elements = [];
	$each(arguments, function(selector){
		switch ($type(selector)){
			case 'element': elements.push($(selector)); break;
			case 'string': selector = document.getElementsBySelector(selector);
			default:
			if (selector.length){
				$each(selector, function(el){
					if ($(el)) elements.push(el);
				});
			}
		}
	});
	elements._elements_extended_ = true;
	return Object.extend(elements, new Elements);
};

Elements.Multi = function(property){
	return function(){
		var args = arguments;
		var items = [];
		var elements = true;
		$each(this, function(el){
			var returns = el[property].apply(el, args);
			if ($type(returns) != 'element') elements = false;
			items.push(returns);
		});
		if (elements) items = $$(items);
		return items;
	};
};

Element.extend = function(properties){
	for (var property in properties){
		HTMLElement.prototype[property] = properties[property];
		Element.prototype[property] = properties[property];
		Elements.prototype[property] = Elements.Multi(property);
	}
};

/*
Class: Element
	Custom class to allow all of its methods to be used with any DOM element via the dollar function <$>.
*/

Element.extend({

	inject: function(el, where){
		el = $(el) || new Element(el);
		switch (where){
			case "before": $(el.parentNode).insertBefore(this, el); break;
			case "after":
				if (!el.getNext()) $(el.parentNode).appendChild(this);
				else $(el.parentNode).insertBefore(this, el.getNext());
				break;
			case "inside": el.appendChild(this);
		}
		return this;
	},

	/*
	Property: injectBefore
		Inserts the Element before the passed element.

	Parameteres:
		el - a string representing the element to be injected in (myElementId, or div), or an element reference.
		If you pass div or another tag, the element will be created.

	Example:
		>html:
		><div id="myElement"></div>
		><div id="mySecondElement"></div>
		>js:
		>$('mySecondElement').injectBefore('myElement');
		>resulting html:
		><div id="mySecondElement"></div>
		><div id="myElement"></div>

	*/

	injectBefore: function(el){
		return this.inject(el, 'before');
	},

	/*
	Property: injectAfter
		Same as <Element.injectBefore>, but inserts the element after.
	*/

	injectAfter: function(el){
		return this.inject(el, 'after');
	},

	/*
	Property: injectInside
		Same as <Element.injectBefore>, but inserts the element inside.
	*/

	injectInside: function(el){
		return this.inject(el, 'inside');
	},

	/*
	Property: adopt
		Inserts the passed element inside the Element. Works as <Element.injectInside> but in reverse.

	Parameteres:
		el - a string representing the element to be injected in (myElementId, or div), or an element reference.
		If you pass div or another tag, the element will be created.
	*/

	adopt: function(el){
		this.appendChild($(el) || new Element(el));
		return this;
	},

	/*
	Property: remove
		Removes the Element from the DOM.

	Example:
		>$('myElement').remove() //bye bye
	*/

	remove: function(){
		this.parentNode.removeChild(this);
		return this;
	},

	/*
	Property: clone
		Clones the Element and returns the cloned one.

	Returns: 
		the cloned element

	Example:
		>var clone = $('myElement').clone().injectAfter('myElement');
		>//clones the Element and append the clone after the Element.
	*/

	clone: function(contents){
		var el = this.cloneNode(contents !== false);
		return $(el);
	},

	/*
	Property: replaceWith
		Replaces the Element with an element passed.

	Parameteres:
		el - a string representing the element to be injected in (myElementId, or div), or an element reference.
		If you pass div or another tag, the element will be created.

	Returns:
		the passed in element

	Example:
		>$('myOldElement').replaceWith($('myNewElement')); //$('myOldElement') is gone, and $('myNewElement') is in its place.
	*/

	replaceWith: function(el){
		el = $(el) || new Element(el);
		this.parentNode.replaceChild(el, this);
		return el;
	},

	/*
	Property: appendText
		Appends text node to a DOM element.

	Arguments:
		text - the text to append.

	Example:
		><div id="myElement">hey</div>
		>$('myElement').appendText(' howdy'); //myElement innerHTML is now "hey howdy"
	*/

	appendText: function(text){
		if (window.ie){
			switch(this.getTag()){
				case 'style': this.styleSheet.cssText = text; return this;
				case 'script': this.setProperty('text', text); return this;
			}
		}
		this.appendChild(document.createTextNode(text));
		return this;
	},

	/*
	Property: hasClass
		Tests the Element to see if it has the passed in className.

	Returns:
	 	true - the Element has the class
	 	false - it doesn't
	 
	Arguments:
		className - the class name to test.
	 
	Example:
		><div id="myElement" class="testClass"></div>
		>$('myElement').hasClass('testClass'); //returns true
	*/

	hasClass: function(className){
		return this.className.test('(?:^|\\s)'+className+'(?:\\s|$)');
	},

	/*
	Property: addClass
		Adds the passed in class to the Element, if the element doesnt already have it.

	Arguments:
		className - the class name to add

	Example: 
		><div id="myElement" class="testClass"></div>
		>$('myElement').addClass('newClass'); //<div id="myElement" class="testClass newClass"></div>
	*/

	addClass: function(className){
		if (!this.hasClass(className)) this.className = (this.className+' '+className).clean();
		return this;
	},

	/*
	Property: removeClass
		works like <Element.addClass>, but removes the class from the element.
	*/

	removeClass: function(className){
		this.className = this.className.replace(new RegExp('(^|\\s)'+className+'(?:\\s|$)'), '$1').clean();
		return this;
	},

	/*
	Property: toggleClass
		Adds or removes the passed in class name to the element, depending on if it's present or not.

	Arguments:
		className - the class to add or remove

	Example:
		><div id="myElement" class="myClass"></div>
		>$('myElement').toggleClass('myClass');
		><div id="myElement" class=""></div>
		>$('myElement').toggleClass('myClass');
		><div id="myElement" class="myClass"></div>
	*/

	toggleClass: function(className){
		return this.hasClass(className) ? this.removeClass(className) : this.addClass(className);
	},

	/*
	Property: setStyle
		Sets a css property to the Element.

		Arguments:
			property - the property to set
			value - the value to which to set it

		Example:
			>$('myElement').setStyle('width', '300px'); //the width is now 300px
	*/

	setStyle: function(property, value){
		if (property == 'opacity') this.setOpacity(parseFloat(value));
		else this.style[property.camelCase()] = (value.push) ? 'rgb('+value.join(',')+')' : value;
		return this;
	},

	/*
	Property: setStyles
		Applies a collection of styles to the Element.

	Arguments:
		source - an object or string containing all the styles to apply. You cannot set the opacity using a string.

	Examples:
		>$('myElement').setStyles({
		>	border: '1px solid #000',
		>	width: '300px',
		>	height: '400px'
		>});

		OR

		>$('myElement').setStyles('border: 1px solid #000; width: 300px; height: 400px;');
	*/

	setStyles: function(source){
		switch ($type(source)){
			case 'object':
				for (var property in source) this.setStyle(property, source[property]);
				break;
			case 'string':
				this.style.cssText = source;
		}
		return this;
	},

	/*
	Property: setOpacity
		Sets the opacity of the Element, and sets also visibility == "hidden" if opacity == 0, and visibility = "visible" if opacity > 0.

	Arguments:
		opacity - Accepts numbers from 0 to 1.

	Example:
		>$('myElement').setOpacity(0.5) //make it 50% transparent
	*/

	setOpacity: function(opacity){
		if (opacity == 0){
			if(this.style.visibility != "hidden") this.style.visibility = "hidden";
		} else {
			if(this.style.visibility != "visible") this.style.visibility = "visible";
		}
		if (!this.currentStyle || !this.currentStyle.hasLayout) this.style.zoom = 1;
		if (window.ie) this.style.filter = "alpha(opacity=" + opacity*100 + ")";
		this.style.opacity = this.opacity = opacity;
		return this;
	},

	/*
	Property: getStyle
		Returns the style of the Element given the property passed in.

	Arguments:
		property - the css style property you want to retrieve

	Example:
		>$('myElement').getStyle('width'); //returns "400px"
		>//but you can also use
		>$('myElement').getStyle('width').toInt(); //returns "400"

	Returns:
		the style as a string
	*/

	getStyle: function(property){
		property = property.camelCase();
		var style = this.style[property] || false;
		if (!$chk(style)){
			if (property == 'opacity') return $chk(this.opacity) ? this.opacity : 1;
			if (['margin', 'padding'].test(property)){
				return [this.getStyle(property+'-top') || 0, this.getStyle(property+'-right') || 0,
						this.getStyle(property+'-bottom') || 0, this.getStyle(property+'-left') || 0].join(' ');
			}
			if (document.defaultView) style = document.defaultView.getComputedStyle(this, null).getPropertyValue(property.hyphenate());
			else if (this.currentStyle) style = this.currentStyle[property];
		}
		if (style == 'auto' && ['height', 'width'].test(property)) return this['offset'+property.capitalize()]+'px';
		return (style && property.test(/color/i) && style.test(/rgb/)) ? style.rgbToHex() : style;
	},

	/*
	Property: addEvent
		Attaches an event listener to a DOM element.

	Arguments:
		type - the event to monitor ('click', 'load', etc) without the prefix 'on'.
		fn - the function to execute

	Example:
		>$('myElement').addEvent('click', function(){alert('clicked!')});
	*/

	addEvent: function(type, fn){
		this.events = this.events || {};
		this.events[type] = this.events[type] || {'keys': [], 'values': []};
		if (!this.events[type].keys.test(fn)){
			this.events[type].keys.push(fn);
			if (this.addEventListener){
				this.addEventListener((type == 'mousewheel' && window.gecko) ? 'DOMMouseScroll' : type, fn, false);
			} else {
				fn = fn.bind(this);
				this.attachEvent('on'+type, fn);
				this.events[type].values.push(fn);
			}
		}
		return this;
	},

	addEvents: function(source){
		if (source){
			for (var type in source) this.addEvent(type, source[type]);
		}
		return this;
	},

	/*
	Property: removeEvent
		Works as Element.addEvent, but instead removes the previously added event listener.
	*/

	removeEvent: function(type, fn){
		if (this.events && this.events[type]){
			var pos = this.events[type].keys.indexOf(fn);
			if (pos == -1) return this;
			var key = this.events[type].keys.splice(pos,1)[0];
			if (this.removeEventListener){
				this.removeEventListener((type == 'mousewheel' && window.gecko) ? 'DOMMouseScroll' : type, key, false);
			} else {
				this.detachEvent('on'+type, this.events[type].values.splice(pos,1)[0]);
			}
		}
		return this;
	},

	/*
	Property: removeEvents
		removes all events of a certain type from an element. if no argument is passed in, removes all events.
	*/

	removeEvents: function(type){
		if (this.events){
			if (type){
				if (this.events[type]){
					this.events[type].keys.each(function(fn){
						this.removeEvent(type, fn);
					}, this);
					this.events[type] = null;
				}
			} else {
				for (var evType in this.events) this.removeEvents(evType);
				this.events = null;
			}
		}
		return this;
	},

	/*
	Property: fireEvent
		executes all events of the specified type present in the element.
	*/

	fireEvent: function(type, args){
		if (this.events && this.events[type]){
			this.events[type].keys.each(function(fn){
				fn.bind(this, args)();
			}, this);
		}
	},

	getBrother: function(what){
		var el = this[what+'Sibling'];
		while ($type(el) == 'whitespace') el = el[what+'Sibling'];
		return $(el);
	},

	/*
	Property: getPrevious
		Returns the previousSibling of the Element, excluding text nodes.

	Example:
		>$('myElement').getPrevious(); //get the previous DOM element from myElement

	Returns:
		the sibling element or undefined if none found.
	*/

	getPrevious: function(){
		return this.getBrother('previous');
	},

	/*
	Property: getNext
		Works as Element.getPrevious, but tries to find the nextSibling.
	*/

	getNext: function(){
		return this.getBrother('next');
	},

	/*
	Property: getFirst
		Works as <Element.getPrevious>, but tries to find the firstChild.
	*/

	getFirst: function(){
		var el = this.firstChild;
		while ($type(el) == 'whitespace') el = el.nextSibling;
		return $(el);
	},

	/*
	Property: getLast
		Works as <Element.getPrevious>, but tries to find the lastChild.
	*/

	getLast: function(){
		var el = this.lastChild;
		while ($type(el) == 'whitespace') el = el.previousSibling;
		return $(el);
	},
	
	/*
	Property: getParent
		returns the $(element.parentNode)
	*/

	getParent: function(){
		return $(this.parentNode);
	},
	
	/*
	Property: getChildren
		returns all the $(element.childNodes), excluding text nodes. Returns as <Elements>.
	*/

	getChildren: function(){
		return $$(this.childNodes);
	},

	/*
	Property: setProperty
		Sets an attribute for the Element.

	Arguments:
		property - the property to assign the value passed in
		value - the value to assign to the property passed in

	Example:
		>$('myImage').setProperty('src', 'whatever.gif'); //myImage now points to whatever.gif for its source
	*/

	setProperty: function(property, value){
		switch (property){
			case 'class': this.className = value; break;
			case 'style': this.setStyles(value); break;
			case 'name': if (window.ie6){
				var el = $(document.createElement('<'+this.getTag()+' name="'+value+'" />'));
				$each(this.attributes, function(attribute){
					if (attribute.name != 'name') el.setProperty(attribute.name, attribute.value);
				});
				if (this.parentNode) this.replaceWith(el);
				return el;
			}
			default: this.setAttribute(property, value);
		}
		return this;
	},

	/*
	Property: setProperties
		Sets numerous attributes for the Element.

	Arguments:
		source - an object with key/value pairs.

	Example:
		(start code)
		$('myElement').setProperties({
			src: 'whatever.gif',
			alt: 'whatever dude'
		});
		<img src="whatever.gif" alt="whatever dude">
		(end)
	*/

	setProperties: function(source){
		for (var property in source) this.setProperty(property, source[property]);
		return this;
	},

	/*
	Property: setHTML
		Sets the innerHTML of the Element.

	Arguments:
		html - the new innerHTML for the element.

	Example:
		>$('myElement').setHTML(newHTML) //the innerHTML of myElement is now = newHTML
	*/

	setHTML: function(){
		this.innerHTML = $A(arguments).join('');
		return this;
	},

	/*
	Property: getProperty
		Gets the an attribute of the Element.

	Arguments:
		property - the attribute to retrieve

	Example:
		>$('myImage').getProperty('src') // returns whatever.gif

	Returns:
		the value, or an empty string
	*/

	getProperty: function(property){
		return (property == 'class') ? this.className : this.getAttribute(property);
	},

	/*
	Property: getTag
		Returns the tagName of the element in lower case.

	Example:
		>$('myImage').getTag() // returns 'img'

	Returns:
		The tag name in lower case
	*/

	getTag: function(){
		return this.tagName.toLowerCase();
	},

	/*
	Property: scrollTo
		scrolls the element to the specified coordinated (if the element has an overflow)

	Arguments:
		x - the x coordinate
		y - the y coordinate

	Example:
		>$('myElement').scrollTo(0, 100)
	*/

	scrollTo: function(x, y){
		this.scrollLeft = x;
		this.scrollTop = y;
	},

	/*
	Property: getValue
		Returns the value of the Element, if its tag is textarea, select or input. no multiple select support.
	*/

	getValue: function(){
		switch (this.getTag()){
			case 'select':
				if (this.selectedIndex != -1){
					var opt = this.options[this.selectedIndex];
					return opt.value || opt.text;
				}
				break;
			case 'input': if (!(this.checked && ['checkbox', 'radio'].test(this.type)) && !['hidden', 'text', 'password'].test(this.type)) break;
			case 'textarea': return this.value;
		}
		return false;
	},
	
	/*
	Property: getSize
		return an Object representing the size/scroll values of the element.

	Example:
		(start code)
		$('myElement').getSize();
		(end)

	Returns:
		(start code)
		{
			'scroll': {'x': 100, 'y': 100},
			'size': {'x': 200, 'y': 400},
			'scrollSize': {'x': 300, 'y': 500}
		}
		(end)
	*/

	getSize: function(){
		return {
			'scroll': {'x': this.scrollLeft, 'y': this.scrollTop},
			'size': {'x': this.offsetWidth, 'y': this.offsetHeight},
			'scrollSize': {'x': this.scrollWidth, 'y': this.scrollHeight}
		};
	},

	/*
	Property: getPosition
		Returns the real offsets of the element.

	Example:
		>$('element').getPosition();

	Returns:
		>{x: 100, y:500};
	*/
	
	getPosition: function(overflown){
		overflown = overflown || [];
		var el = this, left = 0, top = 0;
		do {
			left += el.offsetLeft || 0;
			top += el.offsetTop || 0;
			el = el.offsetParent;
		} while (el);
		overflown.each(function(element){
			left -= element.scrollLeft || 0;
			top -= element.scrollTop || 0;
		});
		return {'x': left, 'y': top};
	},
	
	/*
	Property: getTop
		Returns the distance from the top of the window to the Element.
	*/

	getTop: function(){
		return this.getPosition().y;
	},

	/*
	Property: getLeft
		Returns the distance from the left of the window to the Element.
	*/

	getLeft: function(){
		return this.getPosition().x;
	},
	
	/*
	Property: getCoordinates
		Returns an object with width, height, left, right, top, and bottom, representing the values of the Element

	Example:
		(start code)
		var myValues = $('myElement').getCoordinates();
		(end)

	Returns:
		(start code)
		{
			width: 200,
			height: 300,
			left: 100,
			top: 50,
			right: 300,
			bottom: 350
		}
		(end)
	*/
	
	getCoordinates: function(overflown){
		var position = this.getPosition(overflown);
		var obj = {
			'width': this.offsetWidth,
			'height': this.offsetHeight,
			'left': position.x,
			'top': position.y
		};
		obj.right = obj.left + obj.width;
		obj.bottom = obj.top + obj.height;
		return obj;
	}

});

window.addEvent = document.addEvent = Element.prototype.addEvent;
window.removeEvent = document.removeEvent = Element.prototype.removeEvent;
window.removeEvents = document.removeEvents = Element.prototype.removeEvents;

var Garbage = {

	elements: [],

	collect: function(element){
		Garbage.elements.push(element);
	},

	trash: function(){
		Garbage.collect(window);
		Garbage.collect(document);
		Garbage.elements.each(function(el){
			el.removeEvents();
			for (var p in Element.prototype) el[p] = null;
			el.extend = null;
		});
	}

};

window.addEvent('unload', Garbage.trash);

/*
Script: Common.js
	Contains common implementations for custom classes. In Mootools is implemented in <Ajax>, <XHR> and <Fx.Base>.

Author:
	Valerio Proietti, <http://mad4milk.net>

License:
	MIT-style license.
*/

/*
Class: Chain
	An "Utility" Class. Its methods can be implemented with <Class.implement> into any <Class>.
	Currently implemented in <Fx.Base>, <XHR> and <Ajax>. In <Fx.Base> for example, is used to execute a list of function, one after another, once the effect is completed.
	The functions will not be fired all togheter, but one every completion, to create custom complex animations.

Example:
	(start code)
	var myFx = new Fx.Style('element', 'opacity');

	myFx.start(1,0).chain(function(){
		myFx.start(0,1);
	}).chain(function(){
		myFx.start(1,0);
	}).chain(function(){
		myFx.start(0,1);
	});
	//the element will appear and disappear three times
	(end)
*/

var Chain = new Class({

	/*
	Property: chain
		adds a function to the Chain instance stack.

	Arguments:
		fn - the function to append.
	*/

	chain: function(fn){
		this.chains = this.chains || [];
		this.chains.push(fn);
		return this;
	},

	/*
	Property: callChain
		Executes the first function of the Chain instance stack, then removes it. The first function will then become the second.
	*/

	callChain: function(){
		if (this.chains && this.chains.length) this.chains.shift().delay(10, this);
	},

	/*
	Property: clearChain
		Clears the stack of a Chain instance.
	*/

	clearChain: function(){
		this.chains = [];
	}

});

/*
Class: Events
	An "Utility" Class. Its methods can be implemented with <Class.implement> into any <Class>.
	In <Fx.Base> Class, for example, is used to give the possibility add any number of functions to the Effects events, like onComplete, onStart, onCancel

Example:
	(start code)
	var myFx = new Fx.Style('element', 'opacity').addEvent('onComplete', function(){
		alert('the effect is completed');
	}).addEvent('onComplete', function(){
		alert('I told you the effect is completed');
	});

	myFx.start(0,1);
	//upon completion it will display the 2 alerts, in order.
	(end)
*/

var Events = new Class({

	/*
	Property: addEvent
		adds an event to the stack of events of the Class instance.
	*/

	addEvent: function(type, fn){
		if (fn != Class.empty){
			this.events = this.events || {};
			this.events[type] = this.events[type] || [];
			if (!this.events[type].test(fn)) this.events[type].push(fn);
		}
		return this;
	},

	/*
	Property: fireEvent
		fires all events of the specified type in the Class instance.
	*/

	fireEvent: function(type, args, delay){
		if (this.events && this.events[type]){
			this.events[type].each(function(fn){
				fn.create({'bind': this, 'delay': delay, 'arguments': args})();
			}, this);
		}
		return this;
	},

	/*
	Property: removeEvent
		removes an event from the stack of events of the Class instance.
	*/

	removeEvent: function(type, fn){
		if (this.events && this.events[type]) this.events[type].remove(fn);
		return this;
	}

});

/*
Class: Options
	An "Utility" Class. Its methods can be implemented with <Class.implement> into any <Class>.
	Used to automate the options settings, also adding Class <Events> when the option begins with on.
*/

var Options = new Class({

	/*
	Property: setOptions
		sets this.options

	Arguments:
		defaults - the default set of options
		options - the user entered options. can be empty too.

	Note:
		if your Class has <Events> implemented, every option beginning with on, followed by a capital letter (onComplete) becomes an Class instance event.
	*/

	setOptions: function(defaults, options){
		this.options = Object.extend(defaults, options);
		if (this.addEvent){
			for (var option in this.options){
				if (($type(this.options[option]) == 'function') && option.test(/^on[A-Z]/)) this.addEvent(option, this.options[option]);
			}
		}
		return this;
	}

});

/*
Class: Group
	An "Utility" Class.
*/

var Group = new Class({

	initialize: function(){
		this.instances = $A(arguments);
		this.events = {};
		this.checker = {};
	},
	
	addEvent: function(type, fn){
		this.checker[type] = this.checker[type] || {};
		this.events[type] = this.events[type] || [];
		if (this.events[type].test(fn)) return false;
		else this.events[type].push(fn);
		this.instances.each(function(instance, i){
			instance.addEvent(type, this.check.bind(this, [type, instance, i]));
		}, this);
		return this;
	},
	
	check: function(type, instance, i){
		this.checker[type][i] = true;
		var every = this.instances.every(function(current, j){
			return this.checker[type][j] || false;
		}, this);
		if (!every) return;
		this.instances.each(function(current, j){
			this.checker[type][j] = false;
		}, this);
		this.events[type].each(function(event){
			event.call(this, this.instances, instance);
		}, this);
	}

});

/*
Script: Window.Base.js
	Contains Window.onDomReady
	
Authors:
	- Christophe Beyls, <http://www.digitalia.be>
	- Valerio Proietti, <http://mad4milk.net>

License:
	MIT-style license.
*/

/*
Class: Window
	Cross browser methods to get the window size, onDomReady method.
*/

window.extend({
	
	/*
	Property: window.addEvent
		same as <Element.addEvent> but allows the event 'domready', which is the same as <window.onDomReady>

	Credits:
		(c) Dean Edwards/Matthias Miller/John Resig, remastered for mootools.

	Arguments:
		init - the function to execute when the DOM is ready

	Example:
		> window.addEvent('domready', function(){alert('the dom is ready')});
	*/

	addEvent: function(type, fn){
		if (type == 'domready'){
			if (this.loaded) fn();
			else if (!this.events || !this.events.domready){
				var domReady = function(){
					if (this.loaded) return;
					this.loaded = true;
					if (this.timer) this.timer = $clear(this.timer);
					Element.prototype.fireEvent.call(this, 'domready');
					this.events.domready = null;
				}.bind(this);
				if (document.readyState && this.khtml){ //safari and konqueror
					this.timer = function(){
						if (['loaded','complete'].test(document.readyState)) domReady();
					}.periodical(50);
				}
				else if (document.readyState && this.ie){ //ie
					document.write("<script id=ie_ready defer src=javascript:void(0)><\/script>");
					$('ie_ready').onreadystatechange = function(){
						if (this.readyState == 'complete') domReady();
					};
				} else { //others
					this.addEvent("load", domReady);
					document.addEvent("DOMContentLoaded", domReady);
				}
			}
		}
		Element.prototype.addEvent.call(this, type, fn);
		return this;
	},

	/*
	Property: window.onDomReady
		Executes the passed in function when the DOM is ready (when the document tree has loaded, not waiting for images).
		Same as <window.addEvent> ('domready', init).

	Arguments:
		init - the function to execute when the DOM is ready

	Example:
		> window.addEvent('domready', function(){alert('the dom is ready')});
	*/

	onDomReady: function(init){
		return this.addEvent('domready', init);
	}

});

/*
Script: Window.Size.js
	Window cross-browser dimensions methods.

Authors:
	- Christophe Beyls, <http://www.digitalia.be>
	- Valerio Proietti, <http://mad4milk.net>

License:
	MIT-style license.
*/

/*
Class: window
	Cross browser methods to get various window dimensions.
	Warning: All these methods require that the browser operates in strict mode, not quirks mode.
*/

window.extend({

	/*
	Property: getWidth
		Returns an integer representing the width of the browser window (without the scrollbar).
	*/

	getWidth: function(){
		if (this.khtml) return this.innerWidth;
		if (this.opera) return document.body.clientWidth;
		return document.documentElement.clientWidth;
	},

	/*
	Property: getHeight
		Returns an integer representing the height of the browser window (without the scrollbar).
	*/

	getHeight: function(){
		if (this.khtml) return this.innerHeight;
		if (this.opera) return document.body.clientHeight;
		return document.documentElement.clientHeight;
	},

	/*
	Property: getScrollWidth
		Returns an integer representing the scrollWidth of the window.
		This value is equal to or bigger than <getWidth>.

	See Also:
		<http://developer.mozilla.org/en/docs/DOM:element.scrollWidth>
	*/

	getScrollWidth: function(){
		if (this.ie) return Math.max(document.documentElement.offsetWidth, document.documentElement.scrollWidth);
		if (this.khtml) return document.body.scrollWidth;
		return document.documentElement.scrollWidth;
	},

	/*
	Property: getScrollHeight
		Returns an integer representing the scrollHeight of the window.
		This value is equal to or bigger than <getHeight>.

	See Also:
		<http://developer.mozilla.org/en/docs/DOM:element.scrollHeight>
	*/

	getScrollHeight: function(){
		if (this.ie) return Math.max(document.documentElement.offsetHeight, document.documentElement.scrollHeight);
		if (this.khtml) return document.body.scrollHeight;
		return document.documentElement.scrollHeight;
	},

	/*
	Property: getScrollLeft
		Returns an integer representing the scrollLeft of the window (the number of pixels the window has scrolled from the left).

	See Also:
		<http://developer.mozilla.org/en/docs/DOM:element.scrollLeft>
	*/

	getScrollLeft: function(){
		return this.pageXOffset || document.documentElement.scrollLeft;
	},

	/*
	Property: getScrollTop
		Returns an integer representing the scrollTop of the window (the number of pixels the window has scrolled from the top).

	See Also:
		<http://developer.mozilla.org/en/docs/DOM:element.scrollTop>
	*/

	getScrollTop: function(){
		return this.pageYOffset || document.documentElement.scrollTop;
	},

	/*
	Property: getSize
		Same as <Element.getSize>
	*/

	getSize: function(){
		return {
			'size': {'x': this.getWidth(), 'y': this.getHeight()},
			'scrollSize': {'x': this.getScrollWidth(), 'y': this.getScrollHeight()},
			'scroll': {'x': this.getScrollLeft(), 'y': this.getScrollTop()}
		};
	},

	//ignore
	getPosition: function(){return {'x': 0, 'y': 0}}

});

/*
Script: Fx.Base.js
	Contains <Fx.Base> and two Transitions.

Author:
	Valerio Proietti, <http://mad4milk.net>

License:
	MIT-style license.
*/

var Fx = {};

/*
Class: Fx.Base
	Base class for the Mootools Effects (Moo.Fx) library.

Options:
	onStart - the function to execute as the effect begins; nothing (<Class.empty>) by default.
	onComplete - the function to execute after the effect has processed; nothing (<Class.empty>) by default.
	transition - the equation to use for the effect see <Fx.Transitions>; default is <Fx.Transitions.sineInOut>
	duration - the duration of the effect in ms; 500 is the default.
	unit - the unit is 'px' by default (other values include things like 'em' for fonts or '%').
	wait - boolean: to wait or not to wait for a current transition to end before running another of the same instance. defaults to true.
	fps - the frames per second for the transition; default is 30
*/

Fx.Base = new Class({

	getOptions: function(){
		return {
			onStart: Class.empty,
			onComplete: Class.empty,
			onCancel: Class.empty,
			transition: Fx.Transitions.sineInOut,
			duration: 500,
			unit: 'px',
			wait: true,
			fps: 50
		};
	},

	initialize: function(options){
		this.element = this.element || null;
		this.setOptions(this.getOptions(), options);
		if (this.options.initialize) this.options.initialize.call(this);
	},

	step: function(){
		var time = new Date().getTime();
		if (time < this.time + this.options.duration){
			this.cTime = time - this.time;
			this.setNow();
			this.increase();
		} else {
			this.stop(true);
			this.now = this.to;
			this.increase();
			this.fireEvent('onComplete', this.element, 10);
			this.callChain();
		}
	},

	/*
	Property: set
		Immediately sets the value with no transition.

	Arguments:
		to - the point to jump to

	Example:
		>var myFx = new Fx.Style('myElement', 'opacity').set(0); //will make it immediately transparent
	*/

	set: function(to){
		this.now = to;
		this.increase();
		return this;
	},

	setNow: function(){
		this.now = this.compute(this.from, this.to);
	},

	compute: function(from, to){
		return this.options.transition(this.cTime, from, (to - from), this.options.duration);
	},

	/*
	Property: start
		Executes an effect from one position to the other.

	Arguments:
		from - integer: staring value
		to - integer: the ending value

	Examples:
		>var myFx = new Fx.Style('myElement', 'opacity').start(0,1); //display a transition from transparent to opaque.
	*/

	start: function(from, to){
		if (!this.options.wait) this.stop();
		else if (this.timer) return this;
		this.from = from;
		this.to = to;
		this.time = new Date().getTime();
		this.timer = this.step.periodical(Math.round(1000/this.options.fps), this);
		this.fireEvent('onStart', this.element);
		return this;
	},

	/*
	Property: stop
		Stops the transition.
	*/

	stop: function(end){
		if (!this.timer) return this;
		this.timer = $clear(this.timer);
		if (!end) this.fireEvent('onCancel', this.element);
		return this;
	},

	//compat
	custom: function(from, to){return this.start(from, to)},
	clearTimer: function(end){return this.stop(end)}

});

Fx.Base.implement(new Chain);
Fx.Base.implement(new Events);
Fx.Base.implement(new Options);

/*
Class: Fx.Transitions
	A collection of transition equations for use with the <Fx.Base> Class.

See Also:
	<Fx.Transitions.js> for a whole bunch of transitions.

Credits:
	Easing Equations, (c) 2003 Robert Penner (http://www.robertpenner.com/easing/), Open Source BSD License.
*/

Fx.Transitions = {

	/* Property: linear */
	linear: function(t, b, c, d){
		return c*t/d + b;
	},

	/* Property: sineInOut */
	sineInOut: function(t, b, c, d){
		return -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;
	}

};

/*
Script: Fx.CSS.js
	Css parsing class for effects. Required by <Fx.Style>, <Fx.Styles>, <Fx.Elements>. No documentation needed, as its used internally.

Authors:
	- Christophe Beyls, <http://www.digitalia.be>
	- Valerio Proietti, <http://mad4milk.net>

License:
	MIT-style license.
*/

Fx.CSS = {

	select: function(property, to){
		if (property.test(/color/i)) return this.Color;
		if (to.test && to.test(' ')) return this.Multi;
		return this.Single;
	},

	parse: function(el, property, fromTo){
		if (!fromTo.push) fromTo = [fromTo];
		var from = fromTo[0], to = fromTo[1];
		if (!to && to != 0){
			to = from;
			from = el.getStyle(property);
		}
		var css = this.select(property, to);
		return {from: css.parse(from), to: css.parse(to), css: css};
	}

};

Fx.CSS.Single = {

	parse: function(value){
		return parseFloat(value);
	},

	getNow: function(from, to, fx){
		return fx.compute(from, to);
	},

	getValue: function(value, unit){
		return value+unit;
	}

};

Fx.CSS.Multi = {

	parse: function(value){
		return value.push ? value : value.split(' ').map(function(v){
			return parseFloat(v);
		});
	},

	getNow: function(from, to, fx){
		var now = [];
		for (var i = 0; i < from.length; i++) now[i] = fx.compute(from[i], to[i]);
		return now;
	},

	getValue: function(value, unit){
		return value.join(unit+' ')+unit;
	}

};

Fx.CSS.Color = {

	parse: function(value){
		return value.push ? value : value.hexToRgb(true);
	},

	getNow: function(from, to, fx){
		var now = [];
		for (var i = 0; i < from.length; i++) now[i] = Math.round(fx.compute(from[i], to[i]));
		return now;
	},

	getValue: function(value){
		return 'rgb('+value.join(',')+')';
	}

};

/*
Script: Fx.Style.js
	Contains <Fx.Style>

Author:
	Valerio Proietti, <http://mad4milk.net>

License:
	MIT-style license.
*/

/*
Class: Fx.Style
	The Style effect; Extends <Fx.Base>, inherits all its properties. Used to transition any css property from one value to another. Includes colors.
	Colors must be in hex format.

Arguments:
	el - the $(element) to apply the style transition to
	property - the property to transition
	options - the Fx.Base options (see: <Fx.Base>)

Example:
	>var marginChange = new Fx.Style('myElement', 'margin-top', {duration:500});
	>marginChange.start(10, 100);
*/

Fx.Style = Fx.Base.extend({

	initialize: function(el, property, options){
		this.element = $(el);
		this.property = property;
		this.parent(options);
	},

	/*
	Property: hide
		Same as <Fx.Base.set> (0)
	*/

	hide: function(){
		return this.set(0);
	},

	setNow: function(){
		this.now = this.css.getNow(this.from, this.to, this);
	},

	set: function(to){
		this.css = Fx.CSS.select(this.property, to);
		return this.parent(this.css.parse(to));
	},

	/*
	Property: start
		displays the transition to the value/values passed in

	Example:
		(start code)
		var var marginChange = new Fx.Style('myElement', 'margin-top', {duration:500});
		marginChange.start(10); //tries to read current margin top value and goes from current to 10
		(end)
	*/

	start: function(from, to){
		if (this.timer && this.options.wait) return this;
		var parsed = Fx.CSS.parse(this.element, this.property, [from, to]);
		this.css = parsed.css;
		return this.parent(parsed.from, parsed.to);
	},

	increase: function(){
		this.element.setStyle(this.property, this.css.getValue(this.now, this.options.unit));
	}

});

/*
Class: Element
	Custom class to allow all of its methods to be used with any DOM element via the dollar function <$>.
*/

Element.extend({

	/*
	Property: effect
		Applies an <Fx.Style> to the Element; This a shortcut for <Fx.Style>.

	Example:
		>var myEffect = $('myElement').effect('height', {duration: 1000, transition: Fx.Transitions.linear});
		>myEffect.start(10, 100);
	*/

	effect: function(property, options){
		return new Fx.Style(this, property, options);
	}

});

/*
Script: Fx.Styles.js
	Contains <Fx.Styles>

Author:
	Valerio Proietti, <http://mad4milk.net>

License:
	MIT-style license.
*/

/*
Class: Fx.Styles
	Allows you to animate multiple css properties at once; Extends <Fx.Base>, inherits all its properties. Includes colors.
	Colors must be in hex format.

Arguments:
	el - the $(element) to apply the styles transition to
	options - the fx options (see: <Fx.Base>)

Example:
	(start code)
	var myEffects = new Fx.Styles('myElement', {duration: 1000, transition: Fx.Transitions.linear});

	//height from 10 to 100 and width from 900 to 300
	myEffects.start({
		'height': [10, 100],
		'width': [900, 300]
	});

	//or height from current height to 100 and width from current width to 300
	myEffects.start({
		'height': 100,
		'width': 300
	});
	(end)
*/

Fx.Styles = Fx.Base.extend({

	initialize: function(el, options){
		this.element = $(el);
		this.parent(options);
	},

	setNow: function(){
		for (var p in this.from) this.now[p] = this.css[p].getNow(this.from[p], this.to[p], this);
	},

	set: function(to){
		var parsed = {};
		this.css = {};
		for (var p in to){
			this.css[p] = Fx.CSS.select(p, to[p]);
			parsed[p] = this.css[p].parse(to[p]);
		}
		return this.parent(parsed);
	},

	/*
	Property: start
		The function you'll actually use to execute a transition.

	Arguments:
		an object

	Example:
		see <Fx.Styles>
	*/

	start: function(obj){
		if (this.timer && this.options.wait) return this;
		this.now = {};
		this.css = {};
		var from = {}, to = {};
		for (var p in obj){
			var parsed = Fx.CSS.parse(this.element, p, obj[p]);
			from[p] = parsed.from;
			to[p] = parsed.to;
			this.css[p] = parsed.css;
		}
		return this.parent(from, to);
	},

	increase: function(){
		for (var p in this.now) this.element.setStyle(p, this.css[p].getValue(this.now[p], this.options.unit));
	}

});

/*
Class: Element
	Custom class to allow all of its methods to be used with any DOM element via the dollar function <$>.
*/

Element.extend({

	/*
	Property: effects
		Applies an <Fx.Styles> to the Element; This a shortcut for <Fx.Styles>.

	Example:
		>var myEffects = $(myElement).effects({duration: 1000, transition: Fx.Transitions.sineInOut});
 		>myEffects.start({'height': [10, 100], 'width': [900, 300]});
	*/

	effects: function(options){
		return new Fx.Styles(this, options);
	}

});