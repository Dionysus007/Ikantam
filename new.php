<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

            $link=mysqli_connect("localhost", "root", "", "ikantam");

            
            # проверяем, не сущестует ли пользователя с таким именем
            $query = mysqli_query($link, "SELECT * FROM users WHERE user_login='".$_POST['login']."' AND user_password='".$_POST['password']."'" );
            if(mysqli_num_rows($query) > 0)
            {
                session_start();
                
                var_dump($query);
            }
           
            