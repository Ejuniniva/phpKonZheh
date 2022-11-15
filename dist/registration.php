<?php include("blocks/header.php") ?>


<main class="main registration" id="registration">
  <section class ="registration-block">
    <div class="container registration-block__container">
      <h1 class="title-h1 registration-block__h1">Регистрация</h1>
      <p class="registration-block__p"></p>
      <form action="include/forms.php" method="POST">
        <input type="text" name="name" value="" class="input" placeholder="Введите имя">
        <input type="text" name="login" value="" class="input" placeholder="Введите логин">
        <input type="text" name="email" value="" class="input" placeholder="Введите почту">
        <input type="password" name="password" value="" class="input" placeholder="Введите пароль">
        <input type="password" name="password_2" value="" class="input" placeholder="Введите повторите пароль">
        <input type="submit" name="add_user_btn" class="btn registration-block__btn" value="Зарегистрироваться">
      </form>
      <p>
        <?php
        echo $_SESSION['error'];
        unset($_SESSION['error']);
        echo $_SESSION['uspex'];
        unset($_SESSION['uspex']);
        ?>
      </p>
      <a href="./login.php" class="text-link registration-block__a">назад</a>
    </div>
  </section>

</main>

<?php include("blocks/footer.php") ?>
