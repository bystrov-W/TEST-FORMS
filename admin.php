<?<!DOCTYPE html>
<?php

//header('Location: http://localhost/ redirec2t.php ');
?>


<html>
	<head>
	<title></title>
	</head>
<body>



<!-- Тип кодирования данных, enctype, ДОЛЖЕН БЫТЬ указан ИМЕННО так -->
<form enctype="multipart/form-data" action="<?=$_SERVER['PHP_SELF']?>" method="POST">
    <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <!-- Название элемента input определяет имя в массиве $_FILES -->
    Отправить этот файл: <input name="userfile" type="file" />
    <input type="submit" value="Send File" />
</form>

<?php
error_reporting(E_ALL & ~E_NOTICE);
   if($_FILES["filename"]["size"] > 1024*3*1024)
   {
     echo ("Размер файла превышает три мегабайта");
     exit;
   }
   // Проверяем загружен ли файл
   if(is_uploaded_file($_FILES["filename"]["tmp_name"]))
   {
     // Если файл загружен успешно, перемещаем егоC:\\\
     // из временной директории в конечную
     move_uploaded_file($_FILES["filename"]["tmp_name"], "xampp\htdocs\uploaded_files".$_FILES["filename"]["name"]);
	 echo ('загружено');
   } else {
      echo("Ошибка загрузки файла");
   }
      
?>
   <form action="list.php" method="GET">
          <input type="submit" value="К списку тестов"><br>
      </form>



</body>
</html>