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
		html	{margin:0;padding:0;}
		body	{margin:0;padding:0;valign:center;}
		.type	{font-size:225%;font-family:"Courier New", Courier, monospace;width:70%;height:300px;display:block;border:1px solid #c1c1c1;margin:0 auto;background:#f1f1f1;}
		#page	{width:100%;padding:100px 0;}
		#charNum	{width:70%;margin:10px auto;}
	</style>
    
   
    
</head>

<body OnLoad="document.typeapp.texttype.focus();">
	<form name="typeapp" id="typeapp">
    	<div id="page">
    		<span><textarea wrap="off" draggable="false" id="texttype" name="texttype" spellcheck="false" class="type" onkeyup="countChar(this)"></textarea>
        	<span id="texttypeSpan">&nbsp;</span></span>
            <div id="charNum"></div>
    	</div>
    </form>
    
    
    
    <script src="/js/jquery-1.10.2.js"></script>
    <script>
      $('#texttype').keyup(function () {
		  var max = 50;
		  var len = $(this).val().length;
		  if (len >= max) {
			$('#charNum').text(' you have reached the limit');
			// Do other stuff here
		  } else {
			var char = max - len;
			$('#charNum').text(char + ' characters left');
		  }
		});
    </script>
	
</body>
</html>