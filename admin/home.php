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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Bootstrap CSS link -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
        crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/home.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .homebody {
            margin-top: 50px;
        }
        .homebody h1 {
            font-size: 2.5rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
            color: #343a40;
        }
        .card {
            background-color: #fff;
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .container {
            max-width: 800px;
        }
    </style>
</head>
<body>
    <div class="container homebody">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h1>Welcome To The Admin Panel</h1>
                    <p class="text-center">Use the navigation to manage your site's content and settings.</p>
                </div>
            </div>
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
