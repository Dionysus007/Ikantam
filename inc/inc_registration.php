<?php

$link=mysqli_connect("localhost", "root", "", "ikantam");

            if(isset($_POST['submit']))
            {
            $err = array();	
            # проверяем, является ли логин email-ом
            if (!filter_var($_POST['login'], FILTER_VALIDATE_EMAIL)) 
                    $err[] = "Логин должен иметь формат email"; 
            
            # проверяем, не сущестует ли пользователя с таким именем
            $query = mysqli_query($link, "SELECT user_id FROM users WHERE user_login='".$_POST['login']."'");
            if(mysqli_num_rows($query) > 0) 
                $err[] = "Пользователь с таким логином уже существует в базе данных";
            
            # проверяем, есть ли длину пароля
            if (strlen($_POST['password'])< 8)
                $err[] = "Пароль должен быть не менее 8 символов";

            # Если нет ошибок, то добавляем в БД нового пользователя
            if(count($err) == 0)
            {
                $login = $_POST['login'];
                $password =$_POST['password'];
                mysqli_query($link,"INSERT INTO users SET user_login='".$login."', user_password='".$password."'");
                echo "Регистрация прошла успешно";
            }
            
            else
                {
                print "<b>При регистрации произошли следующие ошибки:</b><br>";
                foreach($err AS $error)
                    {
                        print $error."<br>";
                    }
                }
            }
