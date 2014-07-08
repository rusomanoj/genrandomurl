<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link href="style.css" rel="stylesheet" type="text/css"></link>
        <title>Bitlyclone</title>
    </head>
    <body>
	<div class ="container">
	    <div id="menu">
		    <header>
			<ul>
			    <li>
				<a href="index.php">Home</a>
			    </li>
			</ul>
		    </header>
	    </div> <!-- end of menu -->
	    
	    <div id="shortenurl">
		<form method="post" action="randomkey.php">
		<input id="text" type="text" placeholder="Enter the url link to shorten" name="shortenurl"/><!--
	     --><input id="submit" type="submit" value="Shortenurl"/>
		</form>
		
	    </div> <!-- end of shorten url -->
	    
	    <footer>&COPY; 2014</footer>
	</div> <!-- end of container -->
    </body>
</html>
