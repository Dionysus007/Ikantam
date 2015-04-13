<?php
session_start();
   if($_FILES["filename"]["size"] > 1024*3*1024)
   {
     echo ("Размер файла превышает три мегабайта");
     exit;
   }
   // Проверяем загружен ли файл
   if(is_uploaded_file($_FILES["filename"]["tmp_name"]))
   {
     // Если файл загружен успешно, перемещаем его
     // из временной директории в конечную
    
     echo $_SERVER["DOCUMENT_ROOT"];
     move_uploaded_file($_FILES["filename"]["tmp_name"], $_SERVER["DOCUMENT_ROOT"]."/iKantam/upload/".$_FILES["filename"]["name"]);
     $link=mysqli_connect("localhost", "root", "", "ikantam");
     echo $_SESSION['user_id'];
     echo $_FILES["filename"]["name"];
     echo "INSERT INTO files SET name='".$_FILES["filename"]["name"]."', url='".$_SERVER["DOCUMENT_ROOT"]."/iKantam/upload/".$_FILES["filename"]["name"]."' , id_user=".$_SESSION['user_id']."'";
     mysqli_query($link,"INSERT INTO files SET name='".$_FILES["filename"]["name"]."', url='".$_SERVER["DOCUMENT_ROOT"]."/iKantam/upload/".$_FILES["filename"]["name"]."' , id_user='".$_SESSION['user_id']."'");
   } else {
      echo("Ошибка загрузки файла");
   }

