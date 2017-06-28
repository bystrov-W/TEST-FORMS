<?php
header('Content-Type: text/html; charset=utf-8');

$dir ='C:\xampp\htdocs\Test_folder';
$list=scandir($dir);
$z=count(scandir('C:\xampp\htdocs\Test_folder'))-1;
$x=2;
do {
    echo $list[$x],"  ", "Number ", $x-1, "</br>"; 
    
}   while ($x++<$z);
    
 
 
$file = file_get_contents('test2.json'); 
$fileDecode = json_decode($file, true); 

 
 

 
$label = $fileDecode['calculate']['label'];
$type = $fileDecode['calculate']['input']['type'];
$result = $fileDecode['calculate']['result'];
 
echo '<br>';
echo '<br>';
echo '<br>';
 ?>



<p> Перейти к тесту </p>

<form action="test.php" method="get">
<input type="submit" value="Перейти к тесту">
</form>







 
