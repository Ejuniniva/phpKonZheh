<?php include("blocks/header.php") ?>

<main class="main products" id="products">

  <section class ="inform-products">
    <div class="container inform-products__container">
      <h1 class="title-h1 inform-products__h1">Торты</h1>
      <p class="text inform-сonfectionery__p"></p>
    </div>
  </section>

  <section class ="listProducts">
    <div class="grid listProducts__container">
      <div class="grid__wrapper listProducts__list">

        <?php
          $products_q = mysqli_query($connection, "SELECT * FROM `product` ORDER BY `id` DESC");
          $products = array();
          while ($t = mysqli_fetch_assoc($products_q)) {
            $products[] = $t;
          }
          foreach ($products as $t){
        ?>

        <a href="about-tovar.php?id=<?php echo $t['id'] ?>" class="text-link listProducts__item">
          <h3 class="title-h3 listProducts__title"><?php echo $t['title'] ?></h3>
          <div class="listProducts__img">
            <img src="img/products/<?php echo $t['img'] ?>" alt="" class="img">
          </div>
        </a>
        <?php } ?>

      </div>
    </div>
  </section>

</main>

<?php include("blocks/footer.php") ?>
