<?php
require 'lib/functions.php';
$pdo = new PDO('mysql:host=localhost;dbname=cars', 'root', 'sh0t0kan');
$result = $pdo->query('SELECT * FROM car');
$cars = $result->fetchAll();

$cars = array_reverse($cars);
?>
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
                <form action="index.php" method="post" id="main-page-form" name="main-page-form">
                   <span class="form-inputs"><label for="car-make">Car Make:</label>
                    <input type="text" name="car-make" /></span>
                   <span class="form-inputs"><label for="car-model">Car Model:</label>
                    <input type="text" name="car-model" /></span>
                    <span class="form-inputs">
                        <label for="car-year">Car Year:</label>
                        <input type="number" name="car-year" />
                    </span>
                    <span class="form-inputs">
                        <label for="est-cost">Est. Cost:</label>
                        <input type="number" name="est-cost" />
                    </span>
                    <span class ="form-inputs">
                        <label for="color">Color:</label>
                        <input type="text" name="color" />
                    </span>
                    <input type="submit" name="submit" id="submit-btn" />
                </form>
            </div>
            <div id="right-side-main-section-homepage">
                    <div class="top-rs-section-hp">
                        <h4>Get Content Here ---></h4>
                        <button type="submit" id='submitGetReq' name="submitGetReq">Get data</button>
                    </div>
                <?php foreach($cars as $car) { ?>
                    <div class="display-content">
                        <p>Model: <?php echo $car['model'];?></p>
                        <p>Make: <?php echo $car['make'];?></p>
                        <p>Color: <?php echo $car['color'];?></p>
                        <p>Year: <?php echo $car['year'];?></p>
                        <p>Estimate Cost: <?php echo $car['estimate_cost'];?></p>

                    </div>
                <?php } ?>





            </div>
        </div>
    </div>
</body>
</html>
