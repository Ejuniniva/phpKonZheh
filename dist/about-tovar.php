<?php include("blocks/header.php") ?>


<main class="main tovars" id="tovars">

  <?php
    $tovar_q = mysqli_query($connection, "SELECT * FROM `product` WHERE `id` = " . $_GET['id']);
    $t = mysqli_fetch_assoc($tovar_q);
  ?>

  <section class ="tovar">
    <div class="container tovar__container">
      <h1 class="title-h1 tovar__h1"><?php echo $t['title'] ?></h1>
        <div class="tovar__block-img">
        <div class="tovar__img">
          <img src="img/products/<?php echo $t['img'] ?>" alt="" class="img">
        </div>
      </div>
      <h2 class="title-h2 tovar__h2">Описание</h2>
      <div class="tovar__block-info">
        <p class="text tovar__text"><?php echo $t['discription'] ?></p>
        <p class="text tovar__text"><?php echo $t['mass'] ?>г</p>
        <p class="text tovar__text"><?php echo $t['price'] ?>руб.</p>
      </div>
    </div>
  </section>

</main>

<?php include("blocks/footer.php") ?>
