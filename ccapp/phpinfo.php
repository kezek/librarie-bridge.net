<?php



$fp = fopen("precision.bss", "r") or die("Couldn't open file");

$data = fread($fp, filesize('precision.bss'));



while(!feof($fp))

{

$data .= fgets($fp, 1024);

}



fclose($fp);



$values = explode("\r\n", $data);



$counter = 0;



$pattern1 = "/^.{4}$/";

$pattern2 ="/00/";



while (!empty($values[$counter]))

{

$values2 = explode ("=" , $values[$counter]);

//echo $values2[0]."<br>";





//if (preg_match($pattern1,$values2[0])) echo $values2[0]."<br>";

if (preg_match($pattern1,$values2[0])) 

{

	echo preg_replace($pattern2,"",$values2[0])."<br>";

	echo $values2[1]."<br>";

}



$counter++;

}

?> 



