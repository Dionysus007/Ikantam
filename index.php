<?session_start(); ?>
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
			<!-- Заголовок -->
			<h1>Добро пожаловать <? echo $_SESSION['user_login']; ?>!</h1>
			<!-- Заголовок -->
			<!-- Область основного контента -->
			<h3>Общее описание задания</h3>
			<p>
			Система должна предоставлять возможность пользователям сайта осуществлять загрузку файлов.
			<br> Все данные о файле и пользователе, загрузившем его, сохраняются в БД MySQL.
			<br> Страничка для работы с файлами должна содержать:
			</p>
			<li>список всех файлов пользователя: (file_id |  url)</li>
			<li>форму закачки файла</li>
			<p>
			Страничка авторизации должна содержать 2 поля:
			</p>
			<li>E-mail (формат email) - обязательное поле</li>
			<li>pass - не менее 8 символов</li>
			<p>
			Сортировка по умолчанию – LIFO.
			</p>
			
			
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