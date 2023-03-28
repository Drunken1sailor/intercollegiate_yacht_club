
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
	<!-- <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300&display=swap" rel="stylesheet"> -->
</head>
<body>
	<main class="main_admin">
		<div class="nav">
					<div class="wrapper nav__wrapper">
						<div class="nav__left">
							<a class="nav__logo" href="index.php">
								<img src="img/index/header/logo.png" alt="">
							</a>
						</div>
						<div class="nav__right">
							<a class="nav__link" href="#about">О нас</a>
							<a class="nav__link" href="#">Членство</a>
							<a class="nav__link" href="#">Занятия</a>
							<a class="nav__link" href="#">Мероприятия</a>
							<a class="nav__link" href="#">Контакты</a>
							<a class="nav__search" href="#">
								<img src="img/index/header/loupe.png">
							</a>
						</div>
					</div>
				</div>
		<h3>страница админа</h3>
		<div class="add_news">
			<form action="#">
				<input type="text" pl>

			</form>
			<form class="form form_admin add_news__form" action="../php/admin_auth.php" method="POST">
				<h3 class="form__title">добавление новости</h3>
				<input class="form__input" name="login" type="text" placeholder="Заголовок новости">
				<input class="form__input" name="password" type="password" placeholder="Дата">
				<textarea class="form__textarea" name="" id="" placeholder="Текст новости"></textarea>
				<input type="text">
				<input id="formImage" name="loaded_image" type="file" class="_size _loadedImage _req" placeholder="изображение новости">
				<button type="submit" class="form__button button">
					<p class="button__text">добавить новость</p>
				</button>
			</form>
		</div>
	</main>
</body>
<!-- <script src="js/main.js"></script> -->
<script src="js/preloader.js"></script>
</html>