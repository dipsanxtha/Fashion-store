<?php
include 'header.php';
SESSION_START();

if (isset($_SESSION['auth'])) {
    if ($_SESSION['auth'] != 1) {
        header("location:login.php");
    }
} else {
    header("location:login.php");
}
include 'lib/connection.php';
$sql = "SELECT * FROM orders WHERE status='delivered'";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Orders</title>
    <!-- Bootstrap CSS link -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
        crossorigin="anonymous"
    />
    <style>
        body {
            background-color: #f8f9fa;
        }
        .pendingbody {
            margin-top: 50px;
        }
        .pendingbody h5 {
            font-size: 1.75rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
            color: #343a40;
        }
        .table {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .table th, .table td {
            vertical-align: middle;
            text-align: center;
        }
        .table th {
            background-color: #343a40;
            color: white;
        }
        .table tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>

<div class="container pendingbody">
    <h5>All Orders</h5>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Total Product</th>
                    <th scope="col">Total Price</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row["name"] ?></td>
                        <td><?php echo $row["address"] ?></td>
                        <td><?php echo $row["phone"] ?></td>
                        <td><?php echo $row["totalproduct"] ?></td>
                        <td><?php echo $row["totalprice"] ?></td>
                        <td><?php echo $row["status"] ?></td>
                    </tr>
                    <?php
                }
            } else {
                echo "<tr><td colspan='6'>No results found</td></tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Bootstrap JS links -->
<script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
    crossorigin="anonymous"
></script>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK"
    crossorigin="anonymous"
></script>
</body>
</html>
