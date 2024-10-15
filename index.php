<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">
    <title>Silvestre's Site</title>

</head>
<body>
    <div class="main-container">
        <?php require 'structure/header.php'; ?>
        <div class="homepage-main-section">
            <div id="left-side-main-section-homepage">
                <h1>Welcome to Silvestre's Site</h1>
                <h4>This is a test site I am making while learning PHP</h4>
                <p>The idea is to upload information about a car of your choosing,
                    and it will then be uploading into a database</p>
                <p>The form will be provided below:</p>
                <form action="index.php" method="post" id="main-page-form">
                   <span class="form-inputs"><label for="car-make">Car Make:</label>
                    <input type="text" name="car-make" /></span>
                   <span class="form-inputs"><label for="car-model">Car Model:</label>
                    <input type="text" name="car-model" /></span>
                    <span class="form-inputs">
                        <label for="car-year">Car Year:</label>
                        <input type="number" name="car-year" />
                    </span>

                </form>
            </div>
            <div id="right-side-main-section-homepage"></div>
        </div>
    </div>
</body>
</html>
