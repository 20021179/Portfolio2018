<?php
 error_reporting(0);
 error_reporting(E_ERROR | E_WARNING | E_PARSE);
 
 if(!($fp=fopen('text_generated.html','w')))//open file to write
 	return;
	$text=$_REQUEST["name"]; // name of hidden field
	$htmlCode=" <html><head></head><body>hello there! $text</body></html>" ;
	$len=fprintf($fp, '%s', $htmlCode); //writes the htmlCode to the file
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" type="text/css"href="keyboard2.css"/>

<script language="JavaScript" type="text/JavaScript">
//proverb: Man's griefs are often the cause of his diseases
var frmGroup=new Array();
var caps =0;
var total=0;
var on=true;
var lastValue=0;
var currentValue=0;
var shift=false;
var enable=false;
function lineBreak(){
	document.keyboard.enter.value+"<br/>";
}
function display(fieldObj)// called to a regular keyboard character, updates output display text
{		
	 var elem=document.frm.screen.value+=fieldObj.value;// screen value
	 document.getElementById('name').value+="&#" + fieldObj.value.charCodeAt(0);
	if (shift) {// if shift on, turn off again
		shift=false;
		hideShift();
	}
}
// shift function checks if called, if so it adds one to it




function shifty(){// on click of shift button
	shift=!shift; // false boolean
	
	// if shift is true show values
	if(shift==true){
		showShift();
	}
	// else if isn't pressed, hide
	else {
		hideShift();
	}
	
}	
function big (butt)
{
		if(butt.name="caps"){
		caps = !caps;
		
//		count++;
//		alert(count+"caps on");
		//document.keyboard.a.value="u\945";
				//document.keyboard.a.value="&#945";
		convert(caps);
		}
		
}

function convert(convert){//uppercase
	if (convert) {
		document.keyboard.a.value="\u0391";
		document.keyboard.b.value="\u0392";
		document.keyboard.c.value="\u03A7";
		document.keyboard.d.value="\u0394";
		document.keyboard.e.value="\u0395";
		document.keyboard.f.value="\u03A6";
		document.keyboard.g.value="G";
		document.keyboard.h.value="\u0397";
		document.keyboard.i.value="\u0399";
		document.keyboard.j.value="\u0393";
		document.keyboard.k.value="\u039A";
		document.keyboard.l.value="\u039B";
		document.keyboard.m.value="\u039C";
		document.keyboard.n.value="\u039D";
		document.keyboard.o.value="\u039F";
		document.keyboard.p.value="\u03A0";
		document.keyboard.q.value="\u0398";
		document.keyboard.r.value="\u03A1";
		document.keyboard.s.value="\u03A3";
		document.keyboard.t.value="\u03A4";
		document.keyboard.u.value="U";
		document.keyboard.v.value="V";
		document.keyboard.w.value="\u03A9";
		document.keyboard.x.value="\u039E";
		document.keyboard.y.value="\u03A8";
		document.keyboard.z.value="\u0396";
	}
	else {
//		alert("count off"); lowercase
		document.keyboard.a.value="\u03B1";
		document.keyboard.b.value="\u03B2";
		document.keyboard.c.value="\u03C7" ;
		document.keyboard.d.value="\u03B4" ;
		document.keyboard.e.value="\u03B5";
		document.keyboard.f.value="\u03C6";
		document.keyboard.g.value="\u0968";
		document.keyboard.h.value="\u03B7" ;
		document.keyboard.i.value="\u03B9" ;
		
		document.keyboard.j.value="\u03B3";
		document.keyboard.k.value="\u03BA" ;
		document.keyboard.l.value="\u03BB";
		document.keyboard.m.value="\u03BC";
		document.keyboard.n.value="\u03BD";
		document.keyboard.o.value="\u03BF";
		document.keyboard.p.value="\u03C0" ;
		document.keyboard.q.value="\u0956";
		document.keyboard.r.value="\u03C1";
		document.keyboard.s.value="\u03C3";
		document.keyboard.t.value="\u03C4";
		
		document.keyboard.u.value="\u03C5";
		document.keyboard.v.value="v";
		document.keyboard.w.value="\u03C9";
		document.keyboard.x.value="\u03BE";
		document.keyboard.y.value="\u03C8";
		document.keyboard.z.value="z";
	//	count=0;
	}
}

function showShift(){
//		caps = true;
//		convert(true);
	
		document.keyboard.squiggle.value="~";
		document.keyboard.one.value="!";
		document.keyboard.two.value="@";
		document.keyboard.three.value="#";
		document.keyboard.four.value="$";
		document.keyboard.five.value="%";
		document.keyboard.six.value="^";
		document.keyboard.seven.value="&";
		document.keyboard.eight.value="*";
		document.keyboard.nine.value="(";
		document.keyboard.zero.value=")";
		document.keyboard.minus.value="_";
		document.keyboard.equals.value="+";
		
}

function hideShift(){
//		caps = false;
//		convert(false);
		
		document.keyboard.squiggle.value="~";
		document.keyboard.one.value="1";
		document.keyboard.two.value="2";
		document.keyboard.three.value="3";
		document.keyboard.four.value="4";
		document.keyboard.five.value="5";
		document.keyboard.six.value="6";
		document.keyboard.seven.value="7";
		document.keyboard.eight.value="8";
		document.keyboard.nine.value="9";
		document.keyboard.zero.value="0";
		document.keyboard.minus.value="-";
		document.keyboard.equals.value="=";
		
	
}

 
  var intColour = 0;// changes the background colour

    function changeBg()
    {
       var theColour = '#000000';
       

       // Set the colour this time
       switch ( intColour)
       {
        case(0) :
	        theColour = '#CCCC99';   	  
                intColour++; 
  		break;
        case(1) : 
	        theColour = '#CC9966';  
 		intColour++;
		break;  
		case(2) : 
	        theColour = '#CC9966';  
 		intColour++;
		break;   
		case(3) : 
	        theColour = '#660000';  
 		intColour++;
		break;   
		case(4) : 
	        theColour = '#006600';  
 		intColour++;
		break;   
		case(5) : 
	        theColour = '#000000';  
 		intColour++;
		break; 
        case(6) : 
	        theColour = '#993300';  
 		intColour++;
		break;   
		case(7) : 
	        theColour = '#003333';  
 		intColour++;
		break; 
		case(8) : 
	        theColour = '#000033';  
 		intColour++;
		break; 
		case(9) : 
	        theColour = '#9966CC';  
 		intColour++;
		break;  
		case(10) : 
	        theColour = 'silver';  
 		intColour++;
		break;  
        case(11) : 
	        theColour = '333399';  
 		intColour = 0;
		break;
       }

      // Change all the Anchor tags color to theColor
      var nodeList = document.getElementsByTagName("Input"); 

      for (var i = 0; i < nodeList.length; i++) 
	 nodeList[i].style.backgroundColor = theColour; 


    }// changeColors  

var intColor = 0;// change text colours

    function changeColors()
    {
       var theColor = '#000000';
       

       // Set the colour this time
       switch ( intColor)
       {
        case(0) :
	        theColor = '#FFFFFF';   	  
                intColor++; 
  		break;
		 case(1) :
	        theColor = '#FF0000';   	  
                intColor++; 
  		break;
        case(2) : 
	        theColor = '#00FF00';  
 		intColor++;
		break; 
		case(3) : 
	        theColor = '#000000';  
 		intColor++;
		break;  
		case(4) : 
	        theColor = '#330000';  
 		intColor++;
		break; 
		case(5) : 
	        theColor = '#9933CC';  
 		intColor++;
		break;  
		case(6) : 
	        theColor = '#660066';  
 		intColor++;
		break;  
		case(7) : 
	        theColor = '#FFFF33';  
 		intColor++;
		break;  
        case(8) : 
	        theColor = '#0000FF';  
 		intColor = 0;
		break;
       }

      // Change all the Anchor tags color to theColor
      var nodeList = document.getElementsByTagName("Input"); 

      for (var i = 0; i < nodeList.length; i++) 
	 nodeList[i].style.color = theColor; 


    }// changeColors  
	
	function poppy(){
var popUp;
//Window is called for displaying the help section

popUp=window.open('help.html','newWin','width=300, height=300,scrollbars=yes');


} //	

var intText = 0;

    function changeText()
    {
       var theText = 'normal';
       

       // Set the colour this time
       switch ( intText)
       {
        case(0) :
	        theText = 'bold';   	  
                intText++; 
  		break;
		
        case(1) : 
	        theText = 'lighter';  
 		intText = 0;
		break;
       }

      // Change all the Anchor tags color to theColor
      var nodeList = document.getElementsByTagName("Input"); 

      for (var i = 0; i < nodeList.length; i++) 
	 nodeList[i].style.fontWeight = theText; 


    }// changeColors  
</script>


</head>
<body bgColor="#CCCC99">

<div class="menu"><a href="../calculator_full_version/basic_calculator.html" target="_blank">Project 1</a><br/>
<a href="../project_application_15.5.07/default.html" target="_blank">Project 2</a><br/>
<a href="JavaScript:poppy()">Help</a><br/> <a href="JavaScript:changeColors()">Change Text Colour</a><br/>
<a href="text_generated.html">Text Display</a><br/><a href="JavaScript:changeBg()">Change background</a><br/>
<a href="JavaScript:changeText()">Change Text Weight</a></div>

<div align="center"><img src="greekban.gif"></div>
<!--screen container--><div align="center">
<form name="frm">
<a href="#"><input type="textarea" size="80" class="screen" name="screen" readonly="readonly"></a>
</form>
</div>
<!--end of screen container-->

<!--keyboard container-->
<div align="center">
<form name="keyboard" action="Keyboard.php">
<!--first row-->
<div>
<input type="button" value="`" class="butts1" name="squiggle" onClick="display(this);">


<input type="button" value="1"class="butts1" name="one" onClick="display(this);">


<input type="button" value="2" class="butts1" name="two" onClick="display(this);">


<input type="button" value="3" class="butts1" name="three" onClick="display(this);">


<input type="button" value="4" class="butts1" name="four" onClick="display(this);">


<input type="button" value="5" class="butts1" name="five" onClick="display(this);">


<input type="button" value="6" class="butts1" name="six" onClick="display(this);">


<input type="button" value="7" class="butts1" name="seven" onClick="display(this);">

<input type="button" value="8" class="butts1" name="eight" onClick="display(this);">


<input type="button" value="9" class="butts1" name="nine" onClick="display(this);">


<input type="button" value="0" class="butts1" name="zero" onClick="display(this);">

<input type="button" value="-" class="butts1" name="minus" onClick="display(this);">

<input type="button" value="=" class="butts1" name="equals" onClick="display(this);">

<input type="button" value="backspace"  class="backspace" name="backspace">
</div>
<!--end of 1st row--->
<!--2nd row-->
<div>
<input type="button" value="tab" class="tab" name="tab">
<input type="button" value="q" class="butts" name="q" onClick="display(this);">
<input type="button" value="&#969" class="butts" name="w" onClick="display(this);">
<input type="button" value="&#949" class="butts" name="e" onClick="display(this);">
<input type="button" value="&#961" class="butts" name="r" onClick="display(this);">
<input type="button" value="&#964" class="butts" name="t" onClick="display(this);">
<input type="button" value="&#968" class="butts" name="y" onClick="display(this);">
<input type="button" value="&#947" class="butts" name="u" onClick="display(this);">
<input type="button" value="&#953" class="butts" name="i" onClick="display(this);">
<input type="button" value="&#959" class="butts" name="o" onClick="display(this);">
<input type="button" value="&#960" class="butts" name="p" onClick="display(this);">
<input type="button" value="[" class="butts" name="leftBrace" onClick="display(this);">
<input type="button" value="]" class="butts" name="rightBrace" onClick="display(this);">
<input type="button" value="\" class="butts" name="backSlash" onClick="display(this);">
</div>
<!--end of 2nd row-->
<!--3rd row-->
<div>
<input type="button" name="caps" value="Caps lock" class="caps" onClick="big(this);">
<input type="button" value="a" class="butts" name="a" onClick="display(this);">
<input type="button" value="&#963" class="butts" name="s" onClick="display(this);">
<input type="button" value="&#948" class="butts" name="d"onclick="display(this);">
<input type="button" value="&#966" class="butts" name="f" onClick="display(this);">
<input type="button" value="g" class="butts" name="g" onClick="display(this);">
<input type="button" value="&#951" class="butts" name="h" onClick="display(this);">
<input type="button" value="j" class="butts" name="j" onClick="display(this);">
<input type="button" value="&#954" class="butts" name="k" onClick="display(this);">
<input type="button" value="&#955" class="butts" name="l" onClick="display(this);">
<input type="button" value=":" class="butts" name="colon" onClick="display(this);">
<input type="button" value=";" class="butts" name="dash" onClick="display(this);">
<input type="button" value="Enter" class="enter" name="enter" onClick="lineBreak();">
</div>
<!--end of 3rd row-->
<!--4th row-->
<div>
<input type="button" value="Shift" class="shift" name="shift" onClick="shifty(this);">
<input type="button" value="&#950" class="butts" name="z" onClick="display(this);">
<input type="button" value="&#958" class="butts" name="x" onClick="display(this);">
<input type="button" value="&#967" class="butts" name="c" onClick="display(this);">
<input type="button" value="v" class="butts" name="v" onClick="display(this);">
<input type="button" value="&#946" class="butts" name="b" onClick="display(this);">
<input type="button" value="&#957" class="butts" name="n" onClick="display(this);">
<input type="button" value="&#956" class="butts" name="m" onClick="display(this);">
<input type="button" value="," class="butts" name="comma" onClick="display(this);">
<input type="button" value="." class="butts" name="dot" onClick="display(this);">
<input type="button" value="/" class="butts" name="forwardSlash" onClick="display(this);">
<input type="button" value="Shift" class="shift" name="shift" onClick="shifty(this);">
</div>
<!--end of 4th row-->
<!--5th row-->
<div>
<input type="button" value="ctrl" class="alt" name="ctrl2">
<input type="button" value="&#8660" class="alt" name="alt1" >

<input type="button" value="alt" class="alt" name="alt1" >
<input type="button" value=" " class="space" name="space" onClick="display(this);">
<input type="button" value="alt" class="alt" name="alt2">
<input type="button" value="&#8629" class="alt" name="alt2">
<input type="button" value="ctrl" class="alt" name="ctrl2">
</div>
<!--end of 5th row-->
</div>
<!--end of keyboard container-->
<br/>
<!--submit button-->
<div align="center"><input type="submit" class="send" value="Send To Display"></div>

<input type="hidden" id="name" name="name" value=""/>

</form>
</body>
</html>