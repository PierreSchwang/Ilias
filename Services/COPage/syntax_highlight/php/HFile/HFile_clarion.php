<?php
$BEAUT_PATH = realpath(".")."/Services/COPage/syntax_highlight/php";
if (!isset ($BEAUT_PATH)) return;
require_once("$BEAUT_PATH/Beautifier/HFile.php");
  class HFile_clarion extends HFile{
   function HFile_clarion(){
     $this->HFile();	
/*************************************/
// Beautifier Highlighting Configuration File 
// Clarion Plus
/*************************************/
// Flags

$this->nocase            	= "1";
$this->notrim            	= "0";
$this->perl              	= "0";

// Colours

$this->colours        	= array("blue", "purple", "gray", "brown", "blue", "purple", "gray", "brown");
$this->quotecolour       	= "blue";
$this->blockcommentcolour	= "green";
$this->linecommentcolour 	= "green";

// Indent Strings

$this->indent            	= array("LOOP", "IF", "THEN", "OF", "ELSE");
$this->unindent          	= array("END", "UNTIL", "WHILE");

// String characters and delimiters

$this->stringchars       	= array("'");
$this->delimiters        	= array("~", "@", "%", "^", "*", "(", ")", "-", "+", "|", "\\", "/", "{", "}", "[", "]", ";", "\"", "'", ".", ",");
$this->escchar           	= "";

// Comment settings

$this->linecommenton     	= array("!");
$this->blockcommenton    	= array("OMIT");
$this->blockcommentoff   	= array("ENDOM");

// Keywords (keyword mapping to colour number)

$this->keywords          	= array(
			"C" => "1", 
			"CODE" => "1", 
			"DATA" => "1", 
			"DLL" => "1", 
			"FUNCTION" => "1", 
			"MAP" => "1", 
			"MEMBER" => "1", 
			"MODULE" => "1", 
			"PASCAL" => "1", 
			"PROC" => "1", 
			"PROCEDURE" => "1", 
			"PROGRAM" => "1", 
			"RAW" => "1", 
			"ROUTINE" => "1", 
			"?" => "2", 
			"ASSERT" => "2", 
			"BEGIN" => "2", 
			"COMPILE" => "2", 
			"EJECT" => "2", 
			"EMBED" => "2", 
			"ENDEMBED" => "2", 
			"EQUATE" => "2", 
			"INCLUDE" => "2", 
			"ITEMIZE" => "2", 
			"OMIT" => "2", 
			"SECTION" => "2", 
			"SIZE" => "2", 
			"SUBTITLE" => "2", 
			"TITLE" => "2", 
			"_PROC" => "3", 
			"_PROC1" => "3", 
			"_PROC2" => "3", 
			"_PROC3" => "3", 
			"ANY" => "3", 
			"AUTO" => "3", 
			"BYTE" => "3", 
			"BFLOAT4" => "3", 
			"BFLOAT8" => "3", 
			"BINARY" => "3", 
			"BINDABLE" => "3", 
			"BLOB" => "3", 
			"BOOL" => "3", 
			"CLASS" => "3", 
			"CREATE" => "3", 
			"CSTRING" => "3", 
			"DATE" => "3", 
			"DECIMAL" => "3", 
			"DIM" => "3", 
			"DISPOSE" => "3", 
			"DRIVER" => "3", 
			"DUP" => "3", 
			"ENCRYPT" => "3", 
			"EXTERNAL" => "3", 
			"FILE" => "3", 
			"FILTER" => "3", 
			"FLOAT4" => "3", 
			"GROUP" => "3", 
			"INDEX" => "3", 
			"INNER" => "3", 
			"JOIN" => "3", 
			"KEY" => "3", 
			"LIKE" => "3", 
			"LONG" => "3", 
			"MEMO" => "3", 
			"NEW" => "3", 
			"NOCASE" => "3", 
			"OEM" => "3", 
			"OPT" => "3", 
			"ORDER" => "3", 
			"OVER" => "3", 
			"OWNER" => "3", 
			"PDECIMAL" => "3", 
			"PRE" => "3", 
			"PRIMARY" => "3", 
			"PRIVATE" => "3", 
			"PSTRING" => "3", 
			"PROJECT" => "3", 
			"PROTECTED" => "3", 
			"QUEUE" => "3", 
			"REAL" => "3", 
			"RECLAIM" => "3", 
			"RECORD" => "3", 
			"SHORT" => "3", 
			"SIGNED" => "3", 
			"SREAL" => "3", 
			"STATIC" => "3", 
			"STRING" => "3", 
			"TIME" => "3", 
			"THREAD" => "3", 
			"TYPE" => "3", 
			"USHORT" => "3", 
			"ULONG" => "3", 
			"UNSIGNED" => "3", 
			"VIEW" => "3", 
			"APPLICATION" => "4", 
			"ABSOLUTE" => "4", 
			"ABOVE" => "4", 
			"ALONE" => "4", 
			"ALRT" => "4", 
			"ANGLE" => "4", 
			"AT" => "4", 
			"AUTOSIZE" => "4", 
			"AVE" => "4", 
			"BELOW" => "4", 
			"BREAK" => "4", 
			"BOX" => "4", 
			"BUTTON" => "4", 
			"BEVEL" => "4", 
			"BOXED" => "4", 
			"CHECK" => "4", 
			"COMBO" => "4", 
			"CAP" => "4", 
			"CENTER" => "4", 
			"CENTERED" => "4", 
			"CLIP" => "4", 
			"CNT" => "4", 
			"COLOR" => "4", 
			"COLUMN" => "4", 
			"COMPATIBILITY" => "4", 
			"CURSOR" => "4", 
			"DETAIL" => "4", 
			"DEFAULT" => "4", 
			"DELAY" => "4", 
			"DISABLE" => "4", 
			"DOCK" => "4", 
			"DOCKED" => "4", 
			"DOCUMENT" => "4", 
			"DOUBLE" => "4", 
			"DRAGID" => "4", 
			"DROP" => "4", 
			"DROPID" => "4", 
			"DOWN" => "4", 
			"ELLIPSE" => "4", 
			"ENTRY" => "4", 
			"ENABLE" => "4", 
			"FOOTER" => "4", 
			"FORM" => "4", 
			"FILL" => "4", 
			"FIRST" => "4", 
			"FLAT" => "4", 
			"FONT" => "4", 
			"FORMAT" => "4", 
			"FROM" => "4", 
			"FULL" => "4", 
			"GRAY" => "4", 
			"GRID" => "4", 
			"HEADER" => "4", 
			"HIDE" => "4", 
			"HLP" => "4", 
			"HSCROLL" => "4", 
			"HVSCROLL" => "4", 
			"IMAGE" => "4", 
			"ITEM" => "4", 
			"ICON" => "4", 
			"ICONIZE" => "4", 
			"IMM" => "4", 
			"INS" => "4", 
			"LAST" => "4", 
			"LINE" => "4", 
			"LIST" => "4", 
			"LANDSCAPE" => "4", 
			"LEFT" => "4", 
			"LINEWIDTH" => "4", 
			"LINK" => "4", 
			"MENU" => "4", 
			"MENUBAR" => "4", 
			"MARK" => "4", 
			"MASK" => "4", 
			"MAX" => "4", 
			"MAXIMIZE" => "4", 
			"MDI" => "4", 
			"META" => "4", 
			"MIN" => "4", 
			"MODAL" => "4", 
			"MSG" => "4", 
			"MM" => "4", 
			"NOBAR" => "4", 
			"NOFRAME" => "4", 
			"NOMERGE" => "4", 
			"NOSHEET" => "4", 
			"OLE" => "4", 
			"OPTION" => "4", 
			"OVR" => "4", 
			"OPEN" => "4", 
			"PAGE" => "4", 
			"PANEL" => "4", 
			"PROMPT" => "4", 
			"PROGRESS" => "4", 
			"PAGEAFTER" => "4", 
			"PAGEBEFORE" => "4", 
			"PAGENO" => "4", 
			"PALETTE" => "4", 
			"PAPER" => "4", 
			"PASSWORD" => "4", 
			"PREVIEW" => "4", 
			"POINTS" => "4", 
			"RADIO" => "4", 
			"REGION" => "4", 
			"REPORT" => "4", 
			"RIGHT" => "4", 
			"RANGE" => "4", 
			"READONLY" => "4", 
			"REPEAT" => "4", 
			"REQ" => "4", 
			"RESIZE" => "4", 
			"ROUND" => "4", 
			"SHEET" => "4", 
			"SPIN" => "4", 
			"SCROLL" => "4", 
			"SEPARATOR" => "4", 
			"SINGLE" => "4", 
			"SPREAD" => "4", 
			"STATUS" => "4", 
			"STD" => "4", 
			"STEP" => "4", 
			"STRETCH" => "4", 
			"SUM" => "4", 
			"SYSTEM" => "4", 
			"TAB" => "4", 
			"TEXT" => "4", 
			"TOOLBAR" => "4", 
			"TALLY" => "4", 
			"TARGET" => "4", 
			"THOUS" => "4", 
			"TILED" => "4", 
			"TIMER" => "4", 
			"TIP" => "4", 
			"TOOLBOX" => "4", 
			"TRN" => "4", 
			"UP" => "4", 
			"UPR" => "4", 
			"USE" => "4", 
			"VBX" => "4", 
			"VALUE" => "4", 
			"VCR" => "4", 
			"VSCROLL" => "4", 
			"WALLPAPER" => "4", 
			"WITHNEXT" => "4", 
			"WITHPRIOR" => "4", 
			"WIZARD" => "4", 
			"WRAP" => "4", 
			"WINDOW" => "4", 
			"ZOOM" => "4", 
			"+" => "5", 
			"+=" => "5", 
			"-" => "5", 
			"-=" => "5", 
			"=" => "5", 
			"//" => "5", 
			"/" => "5", 
			"/=" => "5", 
			"*" => "5", 
			"*=" => "5", 
			"%" => "5", 
			"&" => "5", 
			"&=" => "5", 
			">" => "5", 
			">=" => "5", 
			"<" => "5", 
			"<=" => "5", 
			"~" => "5", 
			":=:" => "5", 
			"ACCEPT" => "5", 
			"BIND" => "5", 
			"BY" => "5", 
			"CASE" => "5", 
			"CYCLE" => "5", 
			"CLEAR" => "5", 
			"DO" => "5", 
			"ELSE" => "5", 
			"ELSIF" => "5", 
			"END" => "5", 
			"EXECUTE" => "5", 
			"EXIT" => "5", 
			"EVALUATE" => "5", 
			"GOTO" => "5", 
			"IF" => "5", 
			"LOOP" => "5", 
			"MATCH" => "5", 
			"OF" => "5", 
			"OR" => "5", 
			"OROF" => "5", 
			"POPBIND" => "5", 
			"RETURN" => "5", 
			"THEN" => "5", 
			"TIMES" => "5", 
			"TO" => "5", 
			"UNTIL" => "5", 
			"UNBIND" => "5", 
			"WHILE" => "5", 
			"ABS" => "6", 
			"ACCEPTED" => "6", 
			"ACOS" => "6", 
			"ADD" => "6", 
			"ADDRESS" => "6", 
			"AGE" => "6", 
			"ALERT" => "6", 
			"ALIAS" => "6", 
			"ALL" => "6", 
			"APPEND" => "6", 
			"ARC" => "6", 
			"ASIN" => "6", 
			"ASK" => "6", 
			"ATAN" => "6", 
			"BAND" => "6", 
			"BEEP" => "7", 
			"BLANK" => "6", 
			"BOF" => "6", 
			"BOR" => "6", 
			"BSHIFT" => "6", 
			"BUILD" => "6", 
			"BUFFER" => "6", 
			"BXOR" => "6", 
			"BYTES" => "6", 
			"CALL" => "6", 
			"CHAIN" => "6", 
			"CHANGE" => "6", 
			"CHANGES" => "6", 
			"CHOICE" => "6", 
			"CHOOSE" => "6", 
			"CHORD" => "6", 
			"CHR" => "6", 
			"CLIPBOARD" => "6", 
			"CLOCK" => "6", 
			"CLOSE" => "6", 
			"COL" => "6", 
			"COLORDIALOG" => "6", 
			"COMMAND" => "6", 
			"COMMIT" => "6", 
			"CONTENTS" => "6", 
			"CONVERTANSITOOEM" => "6", 
			"CONVERTOEMTOANSI" => "6", 
			"COPY" => "6", 
			"COS" => "6", 
			"DAY" => "6", 
			"DEFORMAT" => "6", 
			"DELETE" => "6", 
			"DESTROY" => "6", 
			"DIRECTORY" => "6", 
			"DISPLAY" => "6", 
			"DRAGIT" => "6", 
			"DROPIT" => "6", 
			"DUPLICATE" => "6", 
			"EMPTY" => "6", 
			"ENDPAGE" => "6", 
			"EOF" => "6", 
			"ERASE" => "6", 
			"ERROR" => "6", 
			"ERRORCODE" => "6", 
			"ERRORFILE" => "6", 
			"EVENT" => "6", 
			"EXISTS" => "6", 
			"FIELD" => "6", 
			"FILEDIALOG" => "6", 
			"FILEERROR" => "6", 
			"FILEERRORCODE" => "6", 
			"FIRSTFIELD" => "6", 
			"FLUSH" => "6", 
			"FOCUS" => "6", 
			"FONTDIALOG" => "6", 
			"FREE" => "6", 
			"GET" => "6", 
			"GETFONT" => "6", 
			"GETINI" => "6", 
			"GETPOSITION" => "6", 
			"HALT" => "6", 
			"HELP" => "6", 
			"HOLD" => "6", 
			"IDLE" => "6", 
			"INCOMPLETE" => "6", 
			"INLIST" => "6", 
			"INRANGE" => "6", 
			"INSTRING" => "6", 
			"INT" => "6", 
			"ISALPHA" => "6", 
			"ISLOWER" => "6", 
			"ISSTRING" => "6", 
			"ISUPPER" => "6", 
			"KEYBOARD" => "6", 
			"KEYCHAR" => "6", 
			"KEYCODE" => "6", 
			"KEYSTATE" => "6", 
			"LASTFIELD" => "6", 
			"LEN" => "6", 
			"LOCALE" => "6", 
			"LOCK" => "6", 
			"LOCKTHREAD" => "6", 
			"LOG10" => "6", 
			"LOGE" => "6", 
			"LOGOUT" => "6", 
			"LONGPATH" => "6", 
			"LOWER" => "6", 
			"MAXIMUM" => "6", 
			"MESSAGE" => "6", 
			"MONTH" => "6", 
			"MOUSEX" => "6", 
			"MOUSEY" => "6", 
			"NAME" => "6", 
			"NEXT" => "6", 
			"NOMEMO" => "6", 
			"NULL" => "6", 
			"NUMERIC" => "6", 
			"OMITTED" => "6", 
			"OUT" => "6", 
			"PACK" => "6", 
			"PATH" => "6", 
			"PEEK" => "6", 
			"PENCOLOR" => "6", 
			"PENSTYLE" => "6", 
			"PENWIDTH" => "6", 
			"PIE" => "6", 
			"POINTER" => "6", 
			"POKE" => "6", 
			"POLYGON" => "6", 
			"POPUP" => "6", 
			"POST" => "6", 
			"PRESS" => "6", 
			"PRESSKEY" => "6", 
			"PREVIOUS" => "6", 
			"PRINT" => "6", 
			"PRINTERDIALOG" => "6", 
			"PUT" => "6", 
			"PUTINI" => "6", 
			"RANDOM" => "6", 
			"RECORDS" => "6", 
			"REGISTER" => "6", 
			"REGISTEREVENT" => "6", 
			"REGET" => "6", 
			"REJECTCODE" => "6", 
			"RELEASE" => "6", 
			"REMOVE" => "6", 
			"RENAME" => "6", 
			"RESET" => "6", 
			"ROLLBACK" => "6", 
			"ROUNDBOX" => "6", 
			"RUN" => "6", 
			"RUNCODE" => "6", 
			"SELECT" => "6", 
			"SELECTED" => "6", 
			"SEND" => "6", 
			"SET3DLOOK" => "6", 
			"SET" => "6", 
			"SETCLOCK" => "6", 
			"SETCURSOR" => "6", 
			"SETCOMMAND" => "6", 
			"SETCLIPBOARD" => "6", 
			"SETDROPID" => "6", 
			"SETFONT" => "6", 
			"SETKEYCHAR" => "6", 
			"SETKEYCODE" => "6", 
			"SETNONULL" => "6", 
			"SETNULL" => "6", 
			"SETPATH" => "6", 
			"SETPENCOLOR" => "6", 
			"SETPENSTYLE" => "6", 
			"SETPENWIDTH" => "6", 
			"SETPOSITION" => "6", 
			"SETPROPERTY" => "6", 
			"SETTARGET" => "6", 
			"SETTODAY" => "6", 
			"SHORTNAME" => "6", 
			"SHORTPATH" => "6", 
			"SHOW" => "6", 
			"SHUTDOWN" => "6", 
			"SIN" => "6", 
			"SKIP" => "6", 
			"SORT" => "6", 
			"SQRT" => "6", 
			"START" => "6", 
			"STOP" => "6", 
			"STREAM" => "6", 
			"TAN" => "6", 
			"THREADLOCKED" => "6", 
			"TODAY" => "6", 
			"UNHIDE" => "6", 
			"UNLOAD" => "6", 
			"UNLOCK" => "6", 
			"UNLOCKTHREAD" => "6", 
			"UNREGISTER" => "6", 
			"UNREGISTEREVENT" => "6", 
			"UPDATE" => "6", 
			"UPPER" => "6", 
			"VAL" => "6", 
			"WATCH" => "6", 
			"WHAT" => "6", 
			"WHERE" => "6", 
			"WHO" => "6", 
			"YEAR" => "6", 
			"YIELD" => "6", 
			"DDEACKNOWLEDGE" => "7", 
			"DDEAPP" => "7", 
			"DDECHANNEL" => "7", 
			"DDECLIENT" => "7", 
			"DDECLOSE" => "7", 
			"DDEEXECUTE" => "7", 
			"DDEITEM" => "7", 
			"DDEPOKE" => "7", 
			"DDEQUERRY" => "7", 
			"DDEREAD" => "7", 
			"DDESERVER" => "7", 
			"DDETOPIC" => "7", 
			"DDEVALUE" => "7", 
			"DDEWRITE" => "7", 
			"OLEDIRECTORY" => "7", 
			"OCXGETPARAM" => "7", 
			"OCXGETPARAMCOUNT" => "7", 
			"OCXLOADIMAGE" => "7", 
			"OCXREGISTEREVENTPROC" => "7", 
			"OCXREGISTERPROPCHANGE" => "7", 
			"OCXREGISTERPROPEDIT" => "7", 
			"OCXSETPARAM" => "7", 
			"OCXSETPARAMOCXEVENT" => "7", 
			"OCXUNREGISTERPROPCHANGE" => "7", 
			"OCXUNREGISTERPROPEDIT" => "7", 
			"OCXUNREGISTEREVENTPROC" => "7", 
			"FALSE" => "8", 
			"PARENT" => "8", 
			"SELF" => "8", 
			"TRUE" => "8", 
			"VIRTUAL" => "8", 
			"**" => "8", 
			"&A" => "8", 
			"&B" => "8", 
			"&C" => "8", 
			"&D" => "8", 
			"&E" => "8", 
			"&F" => "8", 
			"&G" => "8", 
			"&H" => "8", 
			"&I" => "8", 
			"&J" => "8", 
			"&K" => "8", 
			"&L" => "8", 
			"&M" => "8", 
			"&N" => "8", 
			"&O" => "8", 
			"&P" => "8", 
			"&Q" => "8", 
			"&R" => "8", 
			"&S" => "8", 
			"&T" => "8", 
			"&U" => "8", 
			"&V" => "8", 
			"&W" => "8", 
			"&X" => "8", 
			"&Y" => "8", 
			"&Z" => "8", 
			"BEEP:" => "8", 
			"BUTTON:" => "8", 
			"COLOR:" => "8", 
			"CREATE:" => "8", 
			"CURSOR:" => "8", 
			"DDE:" => "8", 
			"EVENT:" => "8", 
			"ff_:" => "8", 
			"FILE:" => "8", 
			"FONT:" => "8", 
			"ICON:" => "8", 
			"LISTZONE:" => "8", 
			"PEN:" => "8", 
			"PROP:" => "8", 
			"PROPLIST:" => "8", 
			"PROPPRINT:" => "8", 
			"REJECT:" => "8", 
			"STD:" => "8", 
			"VBXEVENT:" => "8");

// Special extensions

// Each category can specify a PHP function that returns an altered
// version of the keyword.
        
        

$this->linkscripts    	= array(
			"1" => "donothing", 
			"2" => "donothing", 
			"3" => "donothing", 
			"4" => "donothing", 
			"5" => "donothing", 
			"6" => "donothing", 
			"7" => "donothing", 
			"8" => "donothing");
}


function donothing($keywordin)
{
	return $keywordin;
}

}?>