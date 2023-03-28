<?php

	//переменные
	$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
	$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

	//хэширование пароля
	$password = md5($password);

	//установка соединения с БД
	require "connectMYSQLi.php";

	//SQL запрос 
	$result = $link->query("SELECT * FROM `admin` WHERE `login` = '$login' AND `password` = '$password'");


	//преобразование в массив
	$admin = $result->fetch_assoc();
	//если нет элементов в массиве то произошла ошибка авторизации
	if(!is_countable($admin)){
		echo "Логин или пароль неверен";
		exit();
	}
	
	//создание cookie с названием "admin" и значением ввеленного логина
	setcookie('admin', $admin['login'], time() + 86400, "/");
	
	//закрытие соединения и возвращение на исходную страницу
	$link->close();
	header('Location: /admin.php');
?>