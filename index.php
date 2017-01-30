<?php
 $file=fopen("counter.txt","c+");
$counter=fread($file, 10);
fclose($file);
Echo $counter;
?>
<a href="update.php">Click me</a>