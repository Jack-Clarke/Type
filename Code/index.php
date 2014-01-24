<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head lang="en">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Just Type</title>
	<style type="text/css" media="all">
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
			padding:30px 18px 10px 18px;
			resize: none;
		}
		
		#texttype {
			position: absolute;
   			bottom:0;
			overflow:hidden;
			vertical-align:center;
			margin-left:29px;
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
			cursor:pointer;
		}
		
		#about a {
			font-size:100%;
			font-family:"Courier New", Courier, monospace;
			position:fixed;
			top:25px;
			left:25px;
			text-decoration:none;
		}
		
		
		#print_helper {
  			display: none;
		}
		
		#print {
			float:right;
			font-size:100%;
			font-family:"Courier New", Courier, monospace;
			position:fixed;
			top:25px;
			right:25px;
		}
		
		.print_button a {
			text-decoration:none;
		}
		
		#newpage {
			font-size:100%;
			font-family:"Courier New", Courier, monospace;
			bottom: 15px;
    		left: 25px;
    		position: fixed;
		}
		
		#share {
			font-size:100%;
			font-family:"Courier New", Courier, monospace;
			bottom: 15px;
    		right: 25px;
    		position: fixed;
		}
		
		#info {
			position:absolute;
			width:700px;
			padding:100px;
			margin-left:-450px;
   			left:50%;
			margin-top:-350px;	
			font-family:"Courier New", Courier, monospace;
			color: #f00;
			font-size:14px;
			background-color:rgba(255,255,255,0.95);
			z-index:2000;
		}
		
		#columns {
        	width: 700px;
			height: 400px;
    	}

    	#columns .column {
        	position: relative;
        	width: 46%;
        	padding: 1%;
        	border: none;
    	}

    	#columns .left {
        	float: left;
    	}

    	#columns .right {
        	float: right;
    	}
		
		</style>
        
		<style type="text/css" media="print">
		
		#print_helper { 
			position: fixed;
    		display: block;
   		 	overflow: visible;
    		font-family: "Courier New", Courier, monospace;
			font-size: 13px;
    		white-space: pre;
    		white-space: pre-wrap;
			margin-top:-100px; /*this allows you you to fit 59 lines on the print page*/
		}
		
		#texttype {
  			display: none;
		}
		
		#charNum {
			display:none;
		}
		
		#menu {
			display:none;
		}
		
		#info {
			display:none;
		}
		
		#about {
			display:none;
		}
		
		#print {
			display:none;
		}
		
		#newpage {
			display:none;
		}
		
		#share {
			display:none;
		}
	</style>
    
   
    
</head>

<body OnLoad="document.typeapp.texttype.focus();">
	<form name="typeapp" id="typeapp">
    	<div id="page">
        <div id="menu">
        	<div id="about"><a onclick="toggle_visibility('info');">About</a></div>
        	<div id="print" class="print_button"><a href="javascript:window.print()">Print</a></div>
            <div id="newpage"><p>New Page</p></div>
            <div id="share"><p>Share</p></div>
        </div>
        <div id="print_helper"></div>
        <div id ="line">
            	<textarea wrap="off" draggable="false" unselectable="on" id="texttype" name="texttype" spellcheck="false" class="type" onkeyup="countChar(this)" onkeypress="keypressed(e)"></textarea>
		</div>
            <div id="charNum"></div>
            <div id="info" style="display:none">
            <div id="columns">
				<div class="left column">
    			<p>Technology for writers has advanced rapidly from the days of typewriters, notepads and letters, however, is the writing better as a result of this progression and is there a case to be made for reviving methods of creation from the past?</p><p>Take the typewriter as an initial example; albeit cumbersome and unable to erase mistakes, it has a unique quality that can create a more productive and creative platform than a word processor. I believe this to be primarily a result of the aformentioned point, the fact that (on most models at least) you cannot go back and edit mistakes made when writing. This basic limitation forces you to stop caring about your inaccuracies and simply write whatever is in your head.</p>
                </div>
            	<div class="right column"><p>It allows you to write as a free train of thought and the meditative noises and actions required by the machine only aid that effect. When writing on a typewriter I find that I stop to read over what I have written much less often than on a computer and as a result of this the writing is; firstly, more grammatically accurate but also much more true to the core message that I was trying to initially convey. Whether it be a letter, a story or an essay I find this to be almost always true.</p><p>This website is an attempt to recreate that effect, adding limitations such as an inability to delete words, copy and paste and write over an A4 page among others.</p>
                </div>
                </div>
			</div>
    	</div>
    </form>
    
    
    
    <script src="/js/jquery-1.10.2.js"></script>
    <script src="js/ion.sound.js"></script>
    <script src="js/jquery.hotkeys.js"></script>
    <script>
	
	//almost got the text to not be selectable!
	
	/*var toggle_mouse = $('#texttype').mousedown(function(event){
		if (this.focus = true) {
			event.preventDefault();
		}
		if (this.focus = false) {
			event.unbind('mousedown').mousedown();
		}
	});*/
	
	//This function makes the about information display on click
	
	function toggle_visibility(id) {
		var e = document.getElementById(id);
		e.style.display = ((e.style.display!='none') ? 'none' : 'block');
	}
	
	
	
	//These two functions fade the menu in and out when typing
	
	var dissapear = $('#texttype').keyup(function(event){ 
		var menu = $('#menu');
		 menu.fadeOut();
	});
	
	var show = $(window).mousedown(function(event){ 
		var menu = $('#menu');
		 menu.fadeIn();
	});
	
	
	
	//This function makes the textarea automatically resize when the text overflows
	
	document.getElementById('texttype').addEventListener('keyup', function () {
		this.style.height = 0; // this is necessary to make it shrink when deleting
		this.style.height = this.scrollHeight + 'px';
	}, false);



	//These functions create a variable 'len' - define it as 0 and then add one to it everytime a key is pressed
	
	var len = 0; //declares len with an initial value of 0
	
	$('#texttype').on("keypress",function(){ //on keypress within the div #texttype...
    	len++; //add one to the value of len
	});
	
	
	
	// These functions disable the backspace and enter keys
	
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
	
	$('#texttype').bind('keydown.ctrl_a keydown.meta_a', function(event) {
    event.preventDefault();
    	return false;
	});
	
	$('#texttype').bind('keydown.shift_left', function(event) {
    event.preventDefault();
    	return false;
	});
	
	$('#texttype').bind('keydown.shift_up', function(event) {
    event.preventDefault();
    	return false;
	});
	
	//This function does the sound when the user is getting close to the end of the line
	
		$('#texttype').keydown(function() {
		
		  $.ionSound({
			sounds: [
				"bell",
			],
				path: "sounds/",
				multiPlay: true,
				volume: "1.0"
		}); 
			
			if (len == 65) { //there is a slight delay on the clip so when typing at normal speed this gives the most appropriate timeframe
					$.ionSound.play("bell");
			}
		}); 
	
	
	
	//Function that disables the keyboard at 80 characters etc
	
	var max = 80;
		$('#texttype').on("keypress", function (event) {
    		if (len >= max) {
        		if (event.keyCode != 13){ return false;}
        		else{ len = 0;}
    	}
	});
		
		
		
		//Does the printing malarky
		
		jQuery(function($){
  function copy_to_print_helper(){
    $('#print_helper').text($('#texttype').val());
  }
  $('#texttype').bind('keydown keyup keypress cut copy past blur change', function(){
    copy_to_print_helper(); // consider debouncing this to avoid slowdowns!
  });
  copy_to_print_helper(); // on initial page load
});
		

	
	
    </script>
	
</body>
</html>