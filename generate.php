<?php
/**
 * pupose 	generate dynamic html pages
 * @authors Your Name (you@example.org)
 * @date    2017-07-10 14:54:05
 * @version $Id$
 */

$myFile = "file.html"; // or .php   
$fh = fopen($myFile, 'w'); // or die("error");
$stringData = "your html code php code goes here";   
fwrite($fh, $stringData);
fclose($fh);

?>

