<?php
header('Content-type: text/html; charset=utf-8');

/* Modified by MWB to use pspell API if available.
 * Otherwise, it'll use the aspell code taken from
 * spellchecker.php of FCKeditor 2.5
 */

$textinputs = $_POST['textinputs']; // array
$lang = "en_US"; // language dictionary

/* Common globals to both pspell and aspell.
 * Use these original locations if only using this script to
 * replace the original... (not using this with plugin)
 */
//$spellercss	= '../spellerStyle.css';
//$word_win_src	= '../wordWindow.js';
/* and comment out these next two */
$spellercss = 'spellerStyle.css';
$word_win_src = 'wordWindow.js';

// we'll use pspell whenever available; unless...
$forceAspell = false; // true; // to force aspell
if(!$forceAspell) if(!function_exists("pspell_check")) $forceAspell=true;

/* Begin of globals that only apply when using aspell command ($forceAspell==true)
 */
# The following variables values must reflect your aspell installation needs.
$aspell_prog	= '"C:\Program Files\Aspell\bin\aspell.exe"';	// by FredCK (for Windows)
#$aspell_prog	= 'aspell';										// by FredCK (for Linux)
$aspell_opts	= "-a --lang=$lang --encoding=utf-8 -H --rem-sgml-check=alt";		// by FredCK
// for older versions of aspell that don't parse html as well
#$aspell_opts	= "-a --lang=$lang -H --rem-sgml-check=alt";
$tempfiledir	= "./";
$input_separator = "A";
// ***** end of globals specific to only aspell *****

// could possibly take longer than default 30 seconds for
// very long winded bad spellers and a very slow server
ini_set('max_execution_time','60'); // in seconds

/* set the JavaScript variable to the submitted text.
 * textinputs is an array, each element corresponding to the (url-encoded)
 * value of the text control submitted for spell-checking
 */
function print_textinputs_var() {
	global $textinputs;
	foreach( $textinputs as $key=>$val ) {
		echo "textinputs[$key] = decodeURIComponent(\"" . $val . "\");\n";
	}
}

/* make declarations for the text input index
 */
function print_textindex_decl( $text_input_idx ) {
	echo "words[$text_input_idx] = [];\n";
	echo "suggs[$text_input_idx] = [];\n";
}

/* set an element of the JavaScript 'words' array to a misspelled word
 */
function print_words_elem( $word, $index, $text_input_idx) {
	$s = "words[$text_input_idx][$index] = '" . escape_quote( $word ) . "';\n";
	echo $s;
}

/* set an element of the JavaScript 'suggs' array to a list of suggestions
 */
function print_suggs_elem( $suggs, $index, $text_input_idx) {
	echo "suggs[$text_input_idx][$index] = [";
	foreach( $suggs as $key=>$val ) {
		if( $val ) {
			echo "'" . escape_quote( $val ) . "'";
			if ( $key+1 < count( $suggs )) {
				echo ", ";
			}
		}
	}
	echo "];\n";
}

/* escape single quote
 */
function escape_quote( $str ) {
	return preg_replace ( "/'/", "\\'", $str );
}

/* handle a server-side error.
 */
function error_handler( $err ) {
	echo "error = '" . escape_quote( $err ) . "';\n";
}

/* feeds our misspell findings and suggestions to the browser in
 * the form of javascript arrays
 */
function print_checker_results() {
	global $forceAspell;
	global $textinputs;
	global $lang;	// consider getting this from the plugin parameter

	// default uses pspell when possible
	if(!$forceAspell) {
		/* Read custom dictionary to add if we can. (pspell only feature)
		 *
		 * pspell personal dictionary is too fussy about file permissions
		 * and too difficult to trap error if anything goes wrong.
		 * So, we use our own text file which everybody should be able to
		 * open for 'read only' access. Ignored if we can't read anything.
		 */
		$dfile = dirname(__FILE__)."/dictionary.txt";
		if(strtolower(substr(PHP_OS,0,3))=="win") $dfile = str_replace("/","\\",$dfile);
		if($fp=@fopen($dfile,"rb")) {
			$addDictionary = "";
			while(!feof($fp)) $addDictionary .= fread($fp,4096);
			fclose($fp);
			$addDictionary = preg_split("/\W+/", $addDictionary,-1,PREG_SPLIT_NO_EMPTY);
		} else $addDictionary = array();

		/* get the list of miss-spelled words. Put the results in the javascript words array
		 * for each miss-spelled word, get suggestions and put in the javascript suggs array
		 */
		if(($pspell_link = @pspell_new($lang)) == 0) {
		 	error_handler( "System error: undefined language '$lang' can not spell check." );
			return TRUE;
		}

		// add custom dictionary
		foreach($addDictionary as $word) pspell_add_to_session($pspell_link,$word);

		// for each text input given to us
		$text_input_index = 0; 		
		for( $i = 0; $i < count( $textinputs ); $i++ ) {
			$text = rawurldecode( $textinputs[$i] );
			// treat <BR> and &nbsp; as word delimeters
			$lines = str_replace("<BR>"," ",$text); //<br /> = <BR> after url encode/decode
			$lines = str_replace("&nbsp;"," ",$lines);
			$lines = str_replace("\r\n","\n",$lines);
			$lines = explode( "\n", $lines );
			print_textindex_decl( $text_input_index );
			$idx = 0;
			foreach( $lines as $oLine ) {
				// return string of words with:
				//  - no tags
				//  - delimited by only 1 space
				//  - treat hyphens like spaces; because...
				// aspell isn't intelligent enough about hyphenated words
				$line = trim(preg_replace("/[\s-]+/"," ",strip_tags($oLine)));
				$words = explode(" ",$line);
/*start************************************
 * This line is only necessary as an alternative javascript bug work around.
 * Read more below...*/
				$lnIdx = 0;
/*end**************************************/
				foreach($words as $word) {
					// take only words with letters and possible embedded apostrophy
					// but allow words nested in special characters (e.g. &lt;word&gt;)
					$cword = preg_replace("/&[a-zA-Z]{2,6};/", "", $word); //remove special characters
					$cword = preg_replace("/[^a-zA-Z\']+/", "", $cword);
					$cword = trim($cword,"'"); // unquote words in single quotes
					// skip this word if it's not still the same word after stripping
					if($cword=="" || strpos($word,$cword)===FALSE) continue;
/*start************************************
 * These lines of code (and noted line above) are a work around to the bug
 * noted on line 164 of original 'wordWindow.js' file of v2.5 that reads:
 *	// word not found? messed up! 
 * Javascript of the plugin fixes it, but it doesn't hurt to leave this here. */
 					// If we can't find parsed form of word in original script,
					// then we skip to avoid confusing javascript.
					if(($nxtIdx = strpos($oLine, $cword, $lnIdx))===FALSE) continue;
					$lnIdx = $nxtIdx+strlen($cword);
/*end**************************************/
					if(!pspell_check($pspell_link, $cword)) {
						print_words_elem( $cword, $idx, $text_input_index);
						print_suggs_elem( pspell_suggest($pspell_link, $cword), $idx, $text_input_index);
						$idx++;
					}
				} // foreach word
			} // foreach line
			$text_input_index++;
		} // foreach textinput
	} else { 
		/* Use aspell command line alternative.
		 * This code block is virtually untouched from FCKeditor 2.5
		 */
		# get the list of misspelled words. Put the results in the javascript words array
		# for each misspelled word, get suggestions and put in the javascript suggs array
		global $aspell_prog;
		global $aspell_opts;
		global $tempfiledir;
		//global $textinputs; // already have this
		global $input_separator;
		$aspell_err = "";
		# create temp file
		$tempfile = tempnam( $tempfiledir, 'aspell_data_' );

		# open temp file, add the submitted text.
		if( $fh = fopen( $tempfile, 'w' )) {
			for( $i = 0; $i < count( $textinputs ); $i++ ) {
				$text = urldecode( $textinputs[$i] );
				$lines = explode( "\n", $text );
				fwrite ( $fh, "%\n" ); # exit terse mode
				fwrite ( $fh, "^$input_separator\n" );
				fwrite ( $fh, "!\n" ); # enter terse mode
				foreach( $lines as $key=>$value ) {
					# use carat on each line to escape possible aspell commands
					fwrite( $fh, "^$value\n" );
				}
			}
			fclose( $fh );

			# exec aspell command - redirect STDERR to STDOUT
			$cmd = "$aspell_prog $aspell_opts < $tempfile 2>&1";
			if( $aspellret = shell_exec( $cmd )) {
				$linesout = explode( "\n", $aspellret );
				$index = 0;
				$text_input_index = -1;
				# parse each line of aspell return
				foreach( $linesout as $key=>$val ) {
					$chardesc = substr( $val, 0, 1 );
					# if '&', then not in dictionary but has suggestions
					# if '#', then not in dictionary and no suggestions
					# if '*', then it is a delimiter between text inputs
					# if '@' then version info
					if( $chardesc == '&' || $chardesc == '#' ) {
						$line = explode( " ", $val, 5 );
						print_words_elem( $line[1], $index, $text_input_index );
						if( isset( $line[4] )) {
							$suggs = explode( ", ", $line[4] );
						} else {
							$suggs = array();
						}
						print_suggs_elem( $suggs, $index, $text_input_index );
						$index++;
					} elseif( $chardesc == '*' ) {
						$text_input_index++;
						print_textindex_decl( $text_input_index );
						$index = 0;
					} elseif( $chardesc != '@' && $chardesc != "" ) {
						# assume this is error output
						$aspell_err .= $val;
					}
				}
				if( $aspell_err ) {
					$aspell_err = "Error executing `$cmd`\\n$aspell_err";
					error_handler( $aspell_err );
				}
			} else {
				error_handler( "System error: Aspell program execution failed (`$cmd`)" );
			}
		} else {
			error_handler( "System error: Could not open file '$tempfile' for writing" );
		}
		# close temp file, delete file
		unlink( $tempfile );
	}
}

// so we don't immediately wipe out 'Spell Check in Progress...' message
ob_start(); // buffer browser output untill we're done

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="<?php echo $spellercss ?>" />
<script language="javascript" src="<?php echo $word_win_src ?>"></script>
<script language="javascript">
var suggs = new Array();
var words = new Array();
var textinputs = new Array();
var error;

<?php
print_textinputs_var();
print_checker_results();
?>

var wordWindowObj = new wordWindow();
wordWindowObj.originalSpellings = words;
wordWindowObj.suggestions = suggs;
wordWindowObj.textInputs = textinputs;

function init_spell() {
	// check if any error occured during server-side processing
	if( error ) {
		alert( error );
	} else {
		// call the init_spell() function in the parent frameset
		if (parent.frames.length) {
			parent.init_spell( wordWindowObj );
		} else {
			alert('This page was loaded outside of a frameset. It might not display properly');
		}
	}
}
</script>

</head>
<!-- <body onLoad="init_spell();">		by FredCK -->
<body class="normtext" onLoad="init_spell();" bgcolor="#ffffff">
<script type="text/javascript">
wordWindowObj.writeBody();
</script>
<?php
ob_end_flush(); // now release output to browser
?>
</body>
</html>