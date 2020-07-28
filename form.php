<?php
session_start();
//Проверяем была ли нажата кнопка 
if(isset($_POST["submit"]) && !empty($_POST["submit"])){

//Получаем значения из формы
      $name = htmlspecialchars($_POST["name"]);
      $email = htmlspecialchars($_POST["email"]);
      $pass = htmlspecialchars($_POST["pass"]);
      $c = htmlspecialchars($_POST["captcha"]);
      if ($c == @$_SESSION[rand]) {
    echo "Правильная капча";
    } else {
    echo "Вы ввели неправильную капчу";
    }

    }else{

        //Если на страницу зашли напрямую то останавливаем скрипт и выводим сообщение об ошибке

        exit("<p><strong>Ошибка!</strong> Вы зашли на эту страницу напрямую.</p>");
    }
?>