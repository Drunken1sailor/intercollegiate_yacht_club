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
	<main>
		<div class="preloader" id="preloader">
			<!-- <div class="shield"></div> -->
			<img class="preloader__img" src="img/index/loading.svg">
		</div>
		<!-- <div class="bg">
			<img src="img/index/bg.jpg">
		</div> -->
		<header class="header">
			<div class="wrapper header__wrapper">
				<div class="header__bg">
					<!-- <img src="img/index/header_bg.jpg"> -->
					<div class="header__shadow"></div>
					<video preload="auto" class="video_bg" autoplay muted loop>
						<!-- <source type="video/webm" src="videos/index/header/bg.webm"> -->
						<source type="video/mp4" src="videos/index/header/bg.mp4">
					</video>
				</div>
				<div class="nav">
					<div class="wrapper nav__wrapper">
						<div class="nav__left">
							<a class="nav__logo" href="#">
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
				<div class="header__title" id="root">
					<h1 class="title__text">санкт-петербургский межвузовский студенческий яхтенный клуб</h1>
					<p class="subtitle">курсы по яхтингу и парусному спорту</p>
				</div>
			</div>
		</header>
		<section class="about">
			<div class="wrapper">
				<h3 class="about__title">
					<p>о нас</p>
				</h3>
				<div class="about__text regularText">
					<p>Историческое название "Секция яхтинга СПбГУ" (до 28.01.2021г). Бесплатное теоретическое обучение парусному спорту по программе подготовки квалифицированных яхтсменов</p>
				</div>
				<div class="about__row">
					<div class="about__column">
						Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur tempora reprehenderit, illo! Beatae rerum velit obcaecati quibusdam ullam sed similique vel nostrum, necessitatibus itaque quos hic quam pariatur. Similique, dolore?
					</div>
					<div class="about__column">
						Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur tempora reprehenderit, illo! Beatae rerum velit obcaecati quibusdam ullam sed similique vel nostrum, necessitatibus itaque quos hic quam pariatur. Similique, dolore?
					</div>
					<div class="about__column">
						Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur tempora reprehenderit, illo! Beatae rerum velit obcaecati quibusdam ullam sed similique vel nostrum, necessitatibus itaque quos hic quam pariatur. Similique, dolore?
					</div>
					<div class="about__column">
						Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur tempora reprehenderit, illo! Beatae rerum velit obcaecati quibusdam ullam sed similique vel nostrum, necessitatibus itaque quos hic quam pariatur. Similique, dolore?
					</div>
				</div>
			</div>
		</section>
		<!-- <section class="parallax">
		</section> -->
		<section class="news">
			<div class="wrapper">
				<h3 class="news-section__title">
					<p>новости</p>
				</h3>
				<div class="news__body">
					<div class="news__elements">
						<div class="main__news">
							<div class="main-news__img news__img">
								<img src="img/index/news/newsImg.jpg">
							</div>
							<div class="main-news__title news__title">
								заголовок новости
							</div>
							<div class="main-news__date news__date">
								01.01.2023
							</div>
							<div class="main-news__text news__text regularText">
								Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio facere laboriosam maxime amet velit nam quia voluptatem labore architecto, vero, ad reprehenderit, repellat nobis magnam laudantium eveniet, iure aliquam illo.
							</div>
							<a class="allNews__link news__title" href="news.php">все новости →</a>
						</div>
						<div class="second__news news__row">
							<div class="news__column">
								<div class="second-news__img news__img">
									<img src="img/index/news/newsImg.jpg">
								</div>
								<div class="second-news__title news__title">
									заголовок новости
								</div>
								<div class="second-news__date news__date">
									01.01.2023
								</div>
								<div class="second-news__text news__text regularText">
									Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio facere laboriosam maxime amet velit nam quia voluptatem labore architecto, vero, ad reprehenderit, repellat nobis magnam laudantium eveniet, iure aliquam illo.
								</div>
							</div>
							<div class="news__column">
								<div class="second-news__img news__img">
									<img src="img/index/news/newsImg.jpg">
								</div>
								<div class="second-news__title news__title">
									заголовок новости
								</div>
								<div class="second-news__date news__date">
									01.01.2023
								</div>
								<div class="second-news__text news__text regularText">
									Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio facere laboriosam maxime amet velit nam quia voluptatem labore architecto, vero, ad reprehenderit, repellat nobis magnam laudantium eveniet, iure aliquam illo.
								</div>
							</div>
							<div class="news__column">
								<div class="second-news__img news__img">
									<img src="img/index/news/newsImg.jpg">
								</div>
								<div class="second-news__title news__title">
									заголовок новости
								</div>
								<div class="second-news__date news__date">
									01.01.2023
								</div>
								<div class="second-news__text news__text regularText">
									Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio facere laboriosam maxime amet velit nam quia voluptatem labore architecto, vero, ad reprehenderit, repellat nobis magnam laudantium eveniet, iure aliquam illo.
								</div>
							</div>
							<div class="news__column">
								<div class="second-news__img news__img">
									<img src="img/index/news/newsImg.jpg">
								</div>
								<div class="second-news__title news__title">
									заголовок новости
								</div>
								<div class="second-news__date news__date">
									01.01.2023
								</div>
								<div class="second-news__text news__text regularText">
									Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio facere laboriosam maxime amet velit nam quia voluptatem labore architecto, vero, ad reprehenderit, repellat nobis magnam laudantium eveniet, iure aliquam illo.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="participants">
			<div class="wrapper">
				<h3 class="participants__title">
					<p>Участвующие вузы</p>
				</h3>
				<div class="participants__universities">
					<a class="universities__img" href="#">
						<img src="img/index/participants/bonch.jpg" alt="СПбГУТ">
					</a>
					<a class="universities__img" href="#">
						<img src="img/index/participants/leti.jpg" alt="ЛЭТИ">
					</a>
					<a class="universities__img" href="#">
						<img src="img/index/participants/politech.jpg" alt="ПОЛИТЕХ">
					</a>
				</div>
			</div>
		</section>
		<footer class="footer">
			<div class="contacts">
				<div class="mail contact">
					<img src="img/index/footer/mail.png">
					<p>info@gmail.com</p>
				</div>
				<div class="telephone contact">
					<img src="img/index/footer/telephone.png">
					<p>+79128000000</p>
				</div>
				<div class="place contact">
					<img src="img/index/footer/home.png">
					<p>St. Petersburg</p>
				</div>
				<a class="vkontakte" href="#">
					<img src="img/index/footer/vkontakte.png">
				</a>
			</div>
		</footer>
	</main>
</body>
<!-- <script src="js/main.js"></script> -->
<script src="js/preloader.js"></script>
</html>