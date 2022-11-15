<?php session_start();
if (!isset($_SESSION['user'])) {
  header("Location: /login.php");
}?>
<?php include("blocks/header.php") ?>


<main class="main personalAccount" id="personalAccount">

  <section class ="inform-personalAccount">
    <div class="container inform-personalAccount__container">
      <h1 class="title-h1 inform-personalAccount__h1">Личный кабинет</h1>
      <p class="text inform-personalAccount__p">Вас зовут: <?php echo $_SESSION['user']['name']; ?> , если не забыли</p>
      <?php if ($_SESSION['user']['rols']!='adm') {
        ?>
      <form action="">
        <input class="input" type="file" name="" value="">
        <input class="input" type="text" name="" value="">
        <input class="input" type="text" name="" value="">
        <input class="input" type="text" name="" value="">
        <input class="input" type="password" name="" value="">
        <input class="input" type="password 2" name="" value="">
      </form>
      <?php
      } ?>

      <?php if ($_SESSION['user']['rols']=='adm') {
        ?>
        <form action="include/forms.php" method="POST">
          <input type="text" name="name" value="" class="input" placeholder="Введите имя">
          <input type="text" name="login" value="" class="input" placeholder="Введите логин">
          <input type="text" name="email" value="" class="input" placeholder="Введите почту">
          <input type="password" name="password" value="" class="input" placeholder="Введите пароль">
          <input type="password" name="password_2" value="" class="input" placeholder="Введите повторите пароль">
          <input type="submit" name="add_conditers_btn" class="btn registration-block__btn" value="Зарегистрироваться">
        </form>
        <p>
          <?php
          echo $_SESSION['error'];
          unset($_SESSION['error']);
          echo $_SESSION['uspex'];
          unset($_SESSION['uspex']);
          ?>
        </p>

        <?php
      } ?>


      <a href="/blocks/logout.php">выйти</a>
    </div>
  </section>

</main>

<?php include("blocks/footer.php") ?>
