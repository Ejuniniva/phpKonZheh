<?php include("blocks/header.php") ?>


<main class="main login" id="login">
  <section class ="login-block">
    <div class="container login-block__container">
      <h1 class="title-h1 login-block__h1">Авторизация</h1>
      <div class="login-block__backgrow">
        <form action="include/forms.php" method="POST">
          <input type="text" name="login" value="" class="input" placeholder="Логин">
          <input type="password" name="password" value="" class="input" placeholder="Пароль">
          <input type="submit" name="login-block__btn" class="btn login-block__btn" value="Войти">
        </form>
        <p>
          <?php
          echo $_SESSION['error'];
          unset($_SESSION['error']);
          echo $_SESSION['uspex'];
          unset($_SESSION['uspex']);
          ?>
        </p>
        <a href="./registration.php" class="text-link login-block__a">регистрация</a>
      </div>
    </div>
  </section>
</main>
<?php include("blocks/footer.php") ?>
