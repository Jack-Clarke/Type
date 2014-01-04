<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head lang="en">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Just Type</title>
	<style type="text/css">
		body {
			font-family: Arial, Helvetica, sans-serif;
			font-size: .9em;
			color: #000000;
			background-color: #FFFFFF;
			margin: 0;
			padding: 10px 20px 20px 20px;
		}

		samp {
			font-size: 1.3em;
		}

		a {
			color: #000000;
			background-color: #FFFFFF;
		}
		
		sup a {
			text-decoration: none;
		}

		hr {
			margin-left: 90px;
		    height: 1px;
		    color: #000000;
			background-color: #000000;
		    border: none;
		}

		.text {
			width: 80%;
			margin-left: 90px;
			line-height: 140%;
		}
		
		html	{
			margin:0;
			padding:0;
		}
		
		body	{
			margin:0;
			padding:0;
			vertical-align:center;
			height:500px;
		}
		
		.type	{
			font-size:100%;
			font-family:"Courier New", Courier, monospace;
			width:700px; 
			min-height:1px;
			display:block;
			border:2px solid #000000;
			background:#ffffff;
			padding:30px 30px 10px 30px;
			resize: none;
		}
		
		#texttype {
			position: absolute;
   			bottom:0;
			overflow:hidden;
			vertical-align:center;
			margin-left:18px;
		}
		
		#page	{
			width:100%;
			padding:100px 0;
			overflow:scroll;
		}
		
		#charNum{
			width:700px;
			margin:10px auto;
		}
		
		*.unselectable {
   			-moz-user-select: -moz-none;
   			-khtml-user-select: none;
   			-webkit-user-select: none;
   			-o-user-select: none;
   			user-select: none;
    	}  
		
		#line {
			height: 3px;
			width:800px;
			background:#000000;
			margin-top:280px;
			margin-left:auto;
			margin-right:auto;
			position:relative;
		}
		
		#about {
			font-size:100%;
			font-family:"Courier New", Courier, monospace;
			position:fixed;
			top:10px;
			left:25px;
		}
		
	</style>
    
   
    
</head>

<body OnLoad="document.typeapp.texttype.focus();">
	<form name="typeapp" id="typeapp">
    	<div id="page">
        <div id="about"><p>Typewriter</p></div>
            <div id ="line">
            	<textarea wrap="off" draggable="false" unselectable="on" id="texttype" name="texttype" spellcheck="false" class="type" onkeyup="countChar(this)" onkeypress="keypressed(e)"></textarea>
			</div>
            <div id="charNum"></div>
    	</div>
    </form>
    
    
    
    <script src="/js/jquery-1.10.2.js"></script>
    <script>
	
	/*var len = $('#texttype').keyup(function () {
		$(this).val().length; //gets the length of the variable #texttype and stores it in varaible 'len'
	});*/
	
	document.getElementById('texttype').addEventListener('keyup', function () {
		this.style.height = 0; // this is necessary to make it shrink when deleting
		this.style.height = this.scrollHeight + 'px';
	}, false);
	
	var dissapear = $('#texttype').keyup(function(event){ 
		var typewriter = $('#about');
		 typewriter.fadeOut();
	});
	
	var show = $('#page').mousedown(function(event){ 
		var typewriter = $('#about');
		 typewriter.fadeIn();
	});
	
	var len = 0; //declares len with an initial value of 0
	
	$('#texttype').keypress(function(event){ //on keypress in the div #texttype execute this function
 
		var keycode = (event.keyCode ? event.keyCode : event.which); //defines variable which just looks around the keyboard?
			if(keycode == '8'){ //if the keycode is 8 (delete key)...
				len--; //counteracts problem where keystroke adds to the value of len
				return false; //return false disabling the key's functionality
			}
				event.stopPropagation(); //this is apparently good practice when dealing with keycodes?
	});
		
	
	var enter = $('#texttype').keydown(function(event){ //declares variable named enter which on a keypress in the div #texttype executes this function
 
		var keycode = (event.keyCode ? event.keyCode : event.which); //still very little clue what this does
		if(keycode == '13'){ //if the keycode is 13 (enter key)...
			len = -1; //give variable len the value of -1 (it's not 0 as enter is technically a keystroke, this would make len 1 before anything was pressed)
		}
			event.stopPropagation();
	});
	
	$('#texttype').on("keypress",function(){ //on keypress within the div #texttype...
    	len++; //add one to the value of len
	});
	
	
      $('#texttype').keyup(function () { //on keyup of any key in div #texttype execute this function
		  
		  var close = 70; //establishes a variable called 'close' which simply holds the value 70
		  var max = 80; //establishes a variable called 'max' which simply holds the value 80
		  
		   if (len >= max) { //if the value of len is greater than or equal to the value of the variable 'max' then...
		   	$('#charNum').text('You have reached the limit.'); //places the text 'You have...' in the #charNum div
		  	$("#texttype").keydown(function(event) { //gets the variable #texttype and tells it that on the keydown function this will happen...
				return false; //...it will return false which disallows access to key down
			});
		  
		  } else if (len >= close) { //if the length of #texttype is greater than or equal to the value of the variable 'close' then...
		  	var char = max - len; //establishes the variable 'char' as being the value of 'max' - the length of the variable #texttype
			$('#charNum').text(char + ' characters left.' + ' You are approaching the limit.'); //replaces the text in #charNum div with 'you have...'
		 
		  } else { //if the length of the #texttype variable has not reached either the value of 'max' or 'close' then...
			var char = max - len; //establishes the variable 'char' as being the value of 'max' - the length of the variable #texttype
			$('#charNum').text(char + ' characters left.'); //places the text in #charNum with the value of variable 'char' and the text 'characters...'
		  }
		});
		
			

    </script>
	
</body>
</html>