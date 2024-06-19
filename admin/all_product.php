<?php
SESSION_START();

if(isset($_SESSION['auth'])) {
    if($_SESSION['auth'] != 1) {
        header("location:login.php");
    }
} else {
    header("location:login.php");
}

include 'header.php';
include 'lib/connection.php';

$sql = "SELECT * FROM product";
$result = $conn->query($sql);

if(isset($_POST['update_update_btn'])) {
    $name = $_POST['update_name'];
    $catagory = $_POST['update_catagory'];
    $quantity = $_POST['update_quantity'];
    $price = $_POST['update_Price'];
    $update_id = $_POST['update_id'];
    $update_quantity_query = mysqli_query($conn, "UPDATE `product` SET quantity = '$quantity', name='$name', catagory='$catagory', price='$price' WHERE id = '$update_id'");
    if($update_quantity_query) {
        header('location:all_product.php');
    }
}

if(isset($_GET['remove'])) {
    $remove_id = $_GET['remove'];
    mysqli_query($conn, "DELETE FROM `product` WHERE id = '$remove_id'");
    header('location:all_product.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
    <link rel="stylesheet" href="css/pending_orders.css">
    <style>
        .container {
            margin: 20px auto;
            max-width: 1000px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        img {
            width: 50px;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        a {
            color: #ff0000;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container pendingbody">
        <h5>All Products</h5>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><img src="product_img/<?php echo $row['imgname']; ?>"></td>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <input type="hidden" name="update_id" value="<?php echo $row['id']; ?>">
                        <td><input type="text" name="update_name" value="<?php echo $row['name']; ?>"></td>
                        <td><input type="text" name="update_catagory" value="<?php echo $row['catagory']; ?>"></td>
                        <td><input type="number" name="update_quantity" value="<?php echo $row['quantity']; ?>"></td>
                        <td><input type="number" name="update_Price" value="<?php echo $row['Price']; ?>"></td>
                        <td><input type="submit" value="Update" name="update_update_btn"></td>
                    </form>
                    <td><a href="all_product.php?remove=<?php echo $row['id']; ?>">Remove</a></td>
                </tr>
                <?php 
                    }
                } else {
                    echo "<tr><td colspan='6'>0 results</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
