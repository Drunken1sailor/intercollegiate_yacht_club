<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<!-- <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
	<!-- <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300&display=swap" rel="stylesheet"> -->
</head>
<body>
	<main class="main_admin_auth">
		<form class="form form_admin" action="../php/admin_auth.php" method="POST">
			<h3 class="form__title">авторизация админа</h3>
			<input class="form__input" name="login" type="text" placeholder="Ввелите логин">
			<input class="form__input" name="password" type="password" placeholder="Ввелите пароль">
			<button type="submit" class="form__button button">
				<p class="button__text">войти</p>
			</button>
		</form>
	</main>
</body>
<!-- <script src="js/main.js"></script> -->
<script src="js/preloader.js"></script>
</html>