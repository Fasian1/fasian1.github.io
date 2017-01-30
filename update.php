<?php
$file=fopen("counter.txt","c+");//open or create counter.txt
$counter=fread($file, 10);//read content
$counter=(int)$counter+1;//add one
fwrite($file,$counter);//save counter
fclose($file);//close file
Header("Location: index.php");//go back to index.php
?>