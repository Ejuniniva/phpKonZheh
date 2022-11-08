<?php include("blocks/connect.php"); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="telephone=no" name="format-detection">
  <meta name="HandheldFriendly" content="true">
	<meta name="format-detection" content="telephone=no">
	<meta name="format-detection" content="address=no">
  <meta name="google" value="notranslate">
	<meta name="robots" content="index,follow" />

	<meta name="description" content="Описание страницы">
	<meta name="keywords" content="ключевое слово 1, ключевое слово 2, ключевое слово 3…" />
	<meta name="author" content="Author site">
	<meta name="copyright" content="Copyright site">

  <title>Личный кабинет</title>

  <link rel="icon" href="img/favicons/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="img/favicons/favicon.ico" type="image/x-icon">

  <link rel="stylesheet" href="css/main.min.css" />
</head>
<body>

<header class="header" id="header">
  <div class="container header__container">
    <div class="menu-burger__header">
      <span></span>
    </div>

    <div class="logo header__logo">
      <a href="/" class="text-link logo__link">
        <img src="img/logo.png" alt="" class="img logo__img">
      </a>
    </div>

    <nav class="header__nav">
      <ul class="menu header__menu">
        <li><a href="products.html" class="text-link menu__item ">Продукция</a></li>
        <li><a href="aboutUs.html" class="text-link menu__item">О нас</a></li>
        <li><a href="stocks.html" class="text-link menu__item">Новости</a></li>
        <li><a href="login.php" class="text-link menu__item">Личный кабинет</a></li>
      </ul>
    </nav>
  </div>
</header>


<main class="main personalAccount" id="personalAccount">

  <section class ="inform-personalAccount">
    <div class="container inform-personalAccount__container">
      <h1 class="title-h1 inform-personalAccount__h1">Личный кабинет</h1>
      <p class="text inform-personalAccount__p">Вас зовут: <?php echo $_SESSION['user']['name']; ?> , если не забыли</p>
      <form action="">
        <input class="input" type="file" name="" value="">
        <input class="input" type="text" name="" value="">
        <input class="input" type="text" name="" value="">
        <input class="input" type="text" name="" value="">
        <input class="input" type="password" name="" value="">
        <input class="input" type="password 2" name="" value="">
      </form>
      <a href="/blocks/logout.php">выйти</a>
    </div>
  </section>

</main>

<footer class="footer" id="footer">
  <div class="grid">
    <p class="text">Сайт разрабатывается в рамках Курсовой работы, не является рабочим на данном этапе</p>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="js/main.min.js"></script>
</body>
</html>
