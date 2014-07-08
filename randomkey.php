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
	    
	    <div id="randomurl">
		
		<div id="newurl">
		
			<?php 


			$randomkey = $_POST['shortenurl'];

			function RandomStr($len=6)
			{
			    $char = array_merge(range('A', 'Z'), range('a', 'z'), range('0', '9'));
			    $ran = "";
			    for($i=0;$i<$len;$i++)
			    {
				$ran .=$char[mt_rand(0, count($char) - 1)];
			    }
			    return $ran;
			}

			$randomreach = RandomStr();
			$bitlyclone = "http://xyz.ly/$randomreach";

			$replace = str_replace($randomkey,'', $bitlyclone);


			echo $replace;
	        
		
		?>
		
		</div> <!-- end of newurl -->

	    </div> <!-- end of randomurl url -->
	    
	    <footer>&COPY; 2014</footer>
	</div> <!-- end of container -->
    </body>
</html>
