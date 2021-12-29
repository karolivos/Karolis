<?php
    require __DIR__.'./../app/src/app.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Black&White</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300&family=Open+Sans&family=Roboto:ital,wght@0,100;0,300;0,400;1,100;1,300;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../app/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../app/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="../app/css/normalize.css">
    <link rel="stylesheet" href="../app/css/style.css">
    <link rel="icon" href="../app/images/logo.png" type="image/logo">
</head>

<body>
    <?php
        include('../app/views/header.php');
        include('../app/views/hero.php');
        include('../app/views/timeline.php');
        include('../app/views/teams.php');
        include('../app/views/blog.php');
        include('../app/views/contact.php');
        include('../app/views/footer.php');
    ?>
    <script src="../app/script/jquery-3.6.0.min.js"></script>
    <script src="../app/script/owl.carousel.min.js"></script>
    <script src="../app/script/scripts.js"></script>
</body>
