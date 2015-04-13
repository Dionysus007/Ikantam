<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
    <head>
        <title>ТЕСТОВОЕ ЗАДАНИЕ "iKantam"</title>
        <meta http-equiv="content-type"
              content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>

        <div id="header">
            <!-- Верхняя часть страницы -->
            <span class="slogan">ТЕСТОВОЕ ЗАДАНИЕ "iKantam"</span>
            <!-- Верхняя часть страницы -->
        </div>

        <div id="content">
           <? include_once "/inc/inc_registration.php"; ?>

            <form method="POST">
                <br>
                <h1>Регистрация</h1>
                <table>
                    <tr>
                        <td>Логин</td>
                        <td><input name="login" type="text"></td>
                    </tr>
                    <tr>
                        <td>Пароль</td>
                        <td><input name="password" type="password"></td>
                    </tr>             
                </table>
                <input name="submit" type="submit" value="Зарегистрироваться">
            </form>


            <!-- Область основного контента -->
        </div>
        <div id="nav">
            <!-- Навигация -->
            <h2>Навигация по сайту</h2>
            <!-- Меню -->
            <? include_once "/inc/inc_menu.php"; ?>
            <!-- Меню -->
            <!-- Навигация -->
        </div>
    </body>
</html>