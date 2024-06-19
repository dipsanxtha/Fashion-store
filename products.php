<div class="container product">
    <div class="row">
      <?php
      $sql = "SELECT * FROM product";
      $result = $conn->query($sql);
      
      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
      ?>
          <div class="col-md-3 col-sm-6 col-6 mb-5 product-card">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
              <img src="admin/product_img/<?php echo $row['imgname']; ?>">
              <div>
                <h6 class="mb-0"><?php echo $row["name"] ?></h6>
                <span>Rs <?php echo $row["Price"] ?></span>
                <input type="hidden" name="userid" value="<?php if(isset($_SESSION['userid'])) { echo $_SESSION ['userid']; } ?>">
                <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                <input type="hidden" name="product_name" value="<?php echo $row['name']; ?>">
                <input type="hidden" name="product_price" value="<?php echo $row['Price']; ?>"><br>
                <input type="submit" class="btn btn btn-primary" value="Add to cart" name="add_to_cart">
              </div>
            </form>
          </div>
      <?php
        }
      } else
        echo "0 results";
      ?>


    </div>
  </div>

