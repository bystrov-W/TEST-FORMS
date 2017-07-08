<html>



  <?php 

// - если добавлять JSON файл методом file_get_contents
  // JSON возвращает - NULL
// $json=  file_get_contents("test.json");

  //при подстановки JSON строк в код - все работает
  $json = 
           '{
    "NAME_OF_TEST" : "Какие виды компьютерной графики используют в настоящее время?",
             "Answer_1": "Растровая",
             "Answer_2": "Векторная",
             "Answer_3": "Фрактальная",
             "Answer_4": "Акварельная" ,
             "Answer_5": "Трёхмерная",
             "Answer_6": "Маслянная",
             "Answer_7": "Пиксель арт"
}';



$data = (json_decode ($json,true));
      if (isset($data) && is_array($data)) foreach ($data as $key => $value) ;
  
 ?>


<form name="form" method="post">
<h2><?php echo $data ["NAME_OF_TEST"] ;?></h2>
</div>

<input type = "checkbox" name = "Q1" value = "1"> <?php echo $data ["Answer_1"] ;?>   
<br>
<input type = "checkbox" name = "Q2" value = "2"><?php echo $data  ["Answer_2"] ;?> 
<br>
<input type = "checkbox" name = "Q3" value = "3"><?php echo $data  ["Answer_3"] ;?> 
<br>
<input type = "checkbox" name = "Q4" value = "4"><?php echo $data  ["Answer_4"] ;?> 
<br>
<input type = "checkbox" name = "Q5" value = "5"><?php echo $data  ["Answer_5"] ;?> 
<br>
<input type = "checkbox" name = "Q6" value = "6"><?php echo $data  ["Answer_6"] ;?> 
<br>
<input type = "checkbox" name = "Q7" value = "7"><?php echo $data  ["Answer_7"] ;?> 
<br>
<hr>
<input type = "submit" name="submit" value = "Далее">
</form>









    <?php
error_reporting(E_ALL & ~E_NOTICE);
  if (isset($_GET['name'])) { 
    echo '<h1>Привет, <b>' . $_GET['name'] . '</b></h1>'; 
  } 


    // проверяем нажатие submit
    if($_POST['submit']); {
    $a =array("1","2"); // массив правильных ответов
    $b= array("Q1","Q2","Q3","Q4","Q5","Q6","Q7"); // массив чекбоксов
    foreach($b as $k => $v){
        // проверяем отмечен чекбокс и есть ли такое значение в массиве правильных ответов
        if(isset($_POST[$v]) and in_array($_POST[$v],$a)){
            $c[]= $v; // добавляем в переменную если ответ правильный
         
               }

        }   
        $count = count ($c); 
        if ($c == 2); // количество правильных ответов
       { echo  'количество правильных ответов: ' , $count; }
       
}

       // $text = "номер сертификата" ;
        //$protocol = $_SERVER ['SERVER_PROTOCOL'];
        //header ('Content-type : image/png') ;

       // create_img ($text);
       // include "gd.php" ;
  
    // заносим результат в базу
   ?>

   <a href="admin.php">Вернуться в начало</a>


   <!-- <a href="/session/imagick.php">Получить сертификат </a>
    
</html>