<html>

<head>
  <meta name="viewpoint" content="width=device-width,initial-scale=1.0" />

  <meta http-equiv="content-type" content="text/html; charset=utf-8" />

  <title>Shop</title>

  <link rel="stylesheet" href="shop.css" type="text/css" media="all" />

  <script src="shop.js" crossorigin="anonymous"></script>
 
</head>

<body>

  <?php
  include_once("../Navbar/navbar.php");

  ?>
  <?php

  print_r($_SESSION['cart']);

  ?>

  <section id="feature-product">


    <div class="feature-product-container">
      <div class="feature-product-box">
        <form action="manageCART.php" method="post">
          <div class="product-feature-img">
            <img
              src="https://i2.wp.com/www.marknepal.com/wp-content/uploads/2019/09/IMG-6bd6b5be52c5c7cdc20af3b0ff60099f-V.jpg?fit=1280%2C1280&ssl=1"
              alt="" />
          </div>

          <div class="product-feature-text-container">
            <div class="product-feature-text">
              <strong>Unique Collection</strong>

              <span>Rs.350.00</span>
            </div>

            <div class="cart-like">
              <button type="submit" name="Add_To_Cart" class="round-button"><i class="fa-solid fa-cart-shopping"></i></button>
              <input type="hidden" name="Item_Name" value="Unique Collection">
                  <input type="hidden" name="Price" value="350.00">

              <button type="submit" id="like-icon" class="round-button"><i class="fa-regular fa-heart"></i></button>
            </div>
          </div>
      </div>

      <div class="feature-product-box">
        <form action="manageCART.php" method="post">
          <div class="product-feature-img">
            <img src="https://zed.com.pk/cdn/shop/products/black-pants.jpg?v=1607076192" alt="" />
          </div>

          <div class="product-feature-text-container">
            <div class="product-feature-text">
              <strong>Unique Collection</strong>

              <span>RS350.00</span>
            </div>

            <div class="cart-like">
              <button type="submit" name="Add_To_Cart" class="round-button"><i
                  class="fa-solid fa-cart-shopping"></i></button>
                  <input type="hidden" name="Item_Name" value="Unique Collection">
                  <input type="hidden" name="Price" value="350.00">

              <a href="#"><i class="fa-regular fa-heart"></i></a>
            </div>
          </div>
      </div>

      <div class="feature-product-box">
        <form action="manageCART.php" method="post">
          <div class="product-feature-img">
            <img
              src="../Images/unique_collection1.jpeg"
              alt="" />
          </div>

          <div class="product-feature-text-container">
            <div class="product-feature-text">
              <strong>Unique Collection</strong>

              <span>RS450.00</span>
            </div>

            <div class="cart-like">
              <button type="submit" name="Add_To_Cart" class="round-button"><i
                  class="fa-solid fa-cart-shopping"></i></button>
                  <input type="hidden" name="Item_Name" value="Unique Collection">
                  <input type="hidden" name="Price" value="350.00">

              <a href="#"><i class="fa-regular fa-heart"></i></a>
            </div>
          </div>
      </div>

      <div class="feature-product-box">
        <form action="manageCART.php" method="post">
          <div class="product-feature-img">
          <img
              src="../Images/unique_collection2.jpg"
              alt="" />
          </div>

          <div class="product-feature-text-container">
            <div class="product-feature-text">
              <strong>Unique Collection</strong>

              <span>RS350.00</span>
            </div>

            <div class="cart-like">
              <button type="submit" name="Add_To_Cart" class="round-button"><i
                  class="fa-solid fa-cart-shopping"></i></button>
                  <input type="hidden" name="Item_Name" value="Unique Collection">
                  <input type="hidden" name="Price" value="350.00">

              <a href="#"> <i class="fa-regular fa-heart"></i></a>
            </div>
          </div>
      </div>
    </div>
  </section>

  <div class="feature-product-container">
    <div class="feature-product-box">
      <form action="manageCART.php" method="post">
        <div class="product-feature-img">
        <img
              src="../Images/unique_collection3.jpg"
              alt="" />
        </div>

        <div class="product-feature-text-container">
          <div class="product-feature-text">
            <strong>Unique Collection</strong>

            <span>RS250.00</span>
          </div>

          <div class="cart-like">
            <button type="submit" name="Add_To_Cart" class="round-button"><i
                class="fa-solid fa-cart-shopping"></i></button>
                <input type="hidden" name="Item_Name" value="Unique Collection">
                  <input type="hidden" name="Price" value="350.00">

            <a href="#"><i class="fa-regular fa-heart"></i></a>
          </div>
        </div>
    </div>

    <div class="feature-product-box">
      <form action="manageCART.php" method="post">
        <div class="product-feature-img">
        <img
              src="../Images/unique_collection4.jpeg"
              alt="" />
        </div>

        <div class="product-feature-text-container">
          <div class="product-feature-text">
            <strong>Unique Collection</strong>

            <span>RS450.00</span>
          </div>

          <div class="cart-like">
            <button type="submit" name="Add_To_Cart" class="round-button"><i
                class="fa-solid fa-cart-shopping"></i></button>
                <input type="hidden" name="Item_Name" value="Unique Collection">
                  <input type="hidden" name="Price" value="350.00">

            <a href="#"><i class="fa-regular fa-heart"></i></a>
          </div>
        </div>
    </div>

    <div class="feature-product-box">
      <form action="manageCART.php" method="post">
        <div class="product-feature-img">
        <img
              src="../Images/unique_collection5.jpeg"
              alt="" />
        </div>

        <div class="product-feature-text-container">
          <div class="product-feature-text">
            <strong>Unique Collection</strong>

            <span>RS550.00</span>
          </div>

          <div class="cart-like">
            <button type="submit" name="Add_To_Cart" class="round-button"><i
                class="fa-solid fa-cart-shopping"></i></button>
                <input type="hidden" name="Item_Name" value="Unique Collection">
                  <input type="hidden" name="Price" value="350.00">

            <a href="#"><i class="fa-regular fa-heart"></i></a>
          </div>
        </div>
    </div>

    <div class="feature-product-box">
      <form action="manageCART.php" method="post">
        <div class="product-feature-img">
        <img
              src="../Images/unique_collection6.jpg"
              alt="" />
        </div>

        <div class="product-feature-text-container">
          <div class="product-feature-text">
            <strong>Unique Collection</strong>

            <span>RS350.00</span>
          </div>

          <div class="cart-like">
            <button type="submit" name="Add_To_Cart" class="round-button"><i
                class="fa-solid fa-cart-shopping"></i></button>
                <input type="hidden" name="Item_Name" value="Unique Collection">
                  <input type="hidden" name="Price" value="350.00">

            <a href="#"> <i class="fa-regular fa-heart"></i></a>
          </div>
        </div>
    </div>
  </div>




  <section id="feature-product">

    <div class="feature-product-container">
      <div class="feature-product-box">
        <form action="manageCART.php" method="post">
          <div class="product-feature-img">
          <img
              src="../Images/unique_collection7.jpeg"
              alt="" />
          </div>

          <div class="product-feature-text-container">
            <div class="product-feature-text">
              <strong>Unique Collection</strong>

              <span>RS450.00</span>
            </div>

            <div class="cart-like">
              <button type="submit" name="Add_To_Cart" class="round-button"><i
                  class="fa-solid fa-cart-shopping"></i></button>
                  <input type="hidden" name="Item_Name" value="Unique Collection">
                  <input type="hidden" name="Price" value="350.00">

              <a href="#"><i class="fa-regular fa-heart"></i></a>
            </div>
          </div>
      </div>

      <div class="feature-product-box">
        <form action="manageCART.php" method="post">
          <div class="product-feature-img">
          <img
              src="../Images/unique_collection8.jpeg"
              alt="" />
          </div>

          <div class="product-feature-text-container">
            <div class="product-feature-text">
              <strong>Unique Collection</strong>

              <span>RS250.00</span>
            </div>

            <div class="cart-like">
              <button type="submit" name="Add_To_Cart" class="round-button"><i
                  class="fa-solid fa-cart-shopping"></i></button>
                  <input type="hidden" name="Item_Name" value="Unique Collection">
                  <input type="hidden" name="Price" value="350.00">

              <a href="#"><i class="fa-regular fa-heart"></i></a>
            </div>
          </div>
      </div>

      <div class="feature-product-box">
        <form action="manageCART.php" method="post">
          <div class="product-feature-img">
          <img
              src="../Images/unique_collection9.jpeg"
              alt="" />
          </div>

          <div class="product-feature-text-container">
            <div class="product-feature-text">
              <strong>Unique Collection</strong>

              <span>RS150.00</span>
            </div>

            <div class="cart-like">
              <button type="submit" name="Add_To_Cart" class="round-button"><i
                  class="fa-solid fa-cart-shopping"></i></button>
                  <input type="hidden" name="Item_Name" value="Unique Collection">
                  <input type="hidden" name="Price" value="350.00">

              <a href="#"><i class="fa-regular fa-heart"></i></a>
            </div>
          </div>
      </div>

      <div class="feature-product-box">
        <form action="manageCART.php" method="post">
          <div class="product-feature-img">
          <img
              src="../Images/unique_collection10.jpeg"
              alt="" />
          </div>

          <div class="product-feature-text-container">
            <div class="product-feature-text">
              <strong>Unique Collection</strong>

              <span>RS350.00</span>
            </div>

            <div class="cart-like">
              <button type="submit" name="Add_To_Cart" class="round-button"><i
                  class="fa-solid fa-cart-shopping"></i></button>
                  <input type="hidden" name="Item_Name" value="Unique Collection">
                  <input type="hidden" name="Price" value="350.00">

              <a href="#"> <i class="fa-regular fa-heart"></i></a>
            </div>
          </div>
      </div>
    </div>
  </section>

  <div class="feature-product-container">
    <div class="feature-product-box">
      <form action="manageCART.php" method="post">
        <div class="product-feature-img">
        <img
              src="../Images/unique_collection11.jpeg"
              alt="" />
        </div>

        <div class="product-feature-text-container">
          <div class="product-feature-text">
            <strong>Unique Collection</strong>

            <span>RS350.00</span>
          </div>

          <div class="cart-like">
            <button type="submit" name="Add_To_Cart" class="round-button"><i
                class="fa-solid fa-cart-shopping"></i></button>
                <input type="hidden" name="Item_Name" value="Unique Collection">
                  <input type="hidden" name="Price" value="350.00">

            <a href="#"><i class="fa-regular fa-heart"></i></a>
          </div>
        </div>
    </div>

    <div class="feature-product-box">
      <form action="manageCART.php" method="post">
        <div class="product-feature-img">
        <img
              src="../Images/unique_collection12.jpeg"
              alt="" />
        </div>

        <div class="product-feature-text-container">
          <div class="product-feature-text">
            <strong>Unique Collection</strong>

            <span>RS350.00</span>
          </div>

          <div class="cart-like">
            <button type="submit" name="Add_To_Cart" class="round-button"><i
                class="fa-solid fa-cart-shopping"></i></button>
                <input type="hidden" name="Item_Name" value="Unique Collection">
                  <input type="hidden" name="Price" value="350.00">

            <a href="#"><i class="fa-regular fa-heart"></i></a>
          </div>
        </div>
    </div>

    <div class="feature-product-box">
      <form action="manageCART.php" method="post">
        <div class="product-feature-img">
        <img
              src="../Images/unique_collection13.jpeg"
              alt="" />
        </div>

        <div class="product-feature-text-container">
          <div class="product-feature-text">
            <strong>Unique Collection</strong>

            <span>RS250.00</span>
          </div>

          <div class="cart-like">
            <button type="submit" name="Add_To_Cart" class="round-button"><i
                class="fa-solid fa-cart-shopping"></i></button>
                <input type="hidden" name="Item_Name" value="Unique Collection">
                  <input type="hidden" name="Price" value="350.00">

            <a href="#"><i class="fa-regular fa-heart"></i></a>
          </div>
        </div>
    </div>

    <div class="feature-product-box">
      <form action="manageCART.php" method="post">
        <div class="product-feature-img">
        <img
              src="../Images/unique_collection14.jpeg"
              alt="" />
        </div>

        <div class="product-feature-text-container">
          <div class="product-feature-text">
            <strong>Unique Collection</strong>

            <span>RS6s50.00</span>
          </div>

          <div class="cart-like">
            <button type="submit" name="Add_To_Cart" class="round-button"><i
                class="fa-solid fa-cart-shopping"></i></button>
                <input type="hidden" name="Item_Name" value="Unique Collection">
                  <input type="hidden" name="Price" value="350.00">

            <a href="#"> <i class="fa-regular fa-heart"></i></a>
          </div>
        </div>
    </div>
  </div>
</body>



<?php
include("../pagination/pagination.html");
include("../footer/footer.html");

?>

</html>