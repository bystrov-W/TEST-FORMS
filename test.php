<html>
<form name="form" method="post">
<div>
<h2>Какие виды компьютерной графики используют в настоящее время?</h2>
</div>
<input type = "checkbox" name = "Q1" value = "1">Растровая
<br>
<input type = "checkbox" name = "Q2" value = "2">Векторная
<br>
<input type = "checkbox" name = "Q3" value = "3">Фрактальная
<br>
<input type = "checkbox" name = "Q4" value = "4">Акварельная
<br>
<input type = "checkbox" name = "Q5" value = "5">Трёхмерная
<br>
<input type = "checkbox" name = "Q6" value = "6">Маслянная
<br>
<input type = "checkbox" name = "Q7" value = "7">Пиксель арт
<br>
<hr>
<input type = "submit" name="submit" value = "Далее">
</form>

    <?php
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
        $count = count ($c); // количество правильных ответов
        echo  'количество правильных ответов:', $count;
        
    } 
    //  заносим результат в базу
   ?>
    
</html>