<?php
header('Content-Type: text/html; charset=utf-8');

$dir ='C:\xampp\htdocs\Test_folder';
$list=scandir($dir);
$z=count(scandir('C:\xampp\htdocs\Test_folder\Tests'))-1;
$x=2;
do {
    echo $list[$x],"  ", " ", "Файл номер - ", $x-1, "</br>"; 
    
}   while ($x++<$z);
    
 
 
 ?>





<?php 
  isset($_GET['name']) ;
echo '<br>';
?> 
<form action="test1.php""> 
Для перехода к тесту <br> Введите Ваше имя   : <input type="text" name="name"> 
<br/> 
<input type="submit" value="OK"> 

<!-- тест работы кнопки
<form enctype="multipart/form-data" action="test.php" method="POST">
 <input type="submit" value="КНОПКА" />
</form> 
-->
</body> 
</html>

