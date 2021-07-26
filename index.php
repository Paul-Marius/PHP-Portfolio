<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- fontawesome connection for icons -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <!-- css connection -->
    <link rel="stylesheet" text="text/css" href="css/style.css">

    <!-- Website Title -->
    <title>Paul Portfolio</title>
</head>

<body>

    <header class="navbar">

        <?php include('view/layouts/navbar.php') ?>

    </header>

    <main class="main-container">

        <?php

        //short version and for all pages
        if (isset($_GET['page'])) {

            $page = $_GET['page'];
            $filename = "view/pages/" . $page . '.php';

            if (file_exists($filename)) {
                include $filename;
            } else {
                include "view/pages/home.php";
            }
        } else {
            include "view/pages/home.php";
        }

        ?>

    </main>

    <footer class="footer">

        <?php include('view/layouts/footer.php') ?>

    </footer>

</body>

</html>