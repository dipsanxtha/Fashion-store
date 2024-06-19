<?php
include 'header.php';
include 'lib/connection.php';

if (isset($_POST['add_to_cart'])) {

  if (isset($_SESSION['auth'])) {
    if ($_SESSION['auth'] != 1) {
      header("location:login.php");
    }
  } else {
    header("location:login.php");
  }
  $user_id = $_POST['userid'];;
  $product_name = $_POST['product_name'];
  $product_price = $_POST['product_price'];
  $product_id = $_POST['product_id'];
  $product_quantity = 1;

  $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE productid = '$product_id'  && userid='$user_id'");

  if (mysqli_num_rows($select_cart) > 0) {
    echo $message[] = 'product already added to cart';
  } else {
    $insert_product = mysqli_query($conn, "INSERT INTO `cart`(userid, productid, name, quantity, price) VALUES('$user_id', '$product_id', '$product_name', '$product_quantity', '$product_price')");
    echo $message[] = 'product added to cart succesfully';
    header('location:index.php');
  }
}

?>



<!--banner start-->
<div class="banner">
  <div class="container">
    <div class="row">
      <div class="col-md-6">

        <div class="banner-text">
          <p class="bt1">Welcome To</p>
          <p class="bt2"><span class="bt3">Fashion</span>Store</p>
          <p class="bt4">Trendiest Fashion at a Price You Love</p>

        </div>


      </div>

      <div class="col-md-6">

        <img src="" class="img-fluid">

      </div>

    </div>
  </div>
</div>

<!--banner end-->


<!---top sell start---->

<section>
  <div class="container ">
    <div class="topsell-head">
      <div class="row">
        <div class="col-md-12 text-center">

          <h2>All Products</h2>
          <p>Trendiest Fashion at Price you Love</p>

        </div>


      </div>

    </div>
  </div>
  <?php 
  include 'products.php';
  ?>
</section>


<!---top sell end---->





<?php
include 'footer.php';
?>