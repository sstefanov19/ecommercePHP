<?php

include 'header.php'

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Macbook</title>
</head>

<body>

    <div class="size-container">
        <h1>Chose your Macbook air size</h1>
    </div>
    <div class="container mt-5">
        <div class="tabbed-interface d-flex justify-content-center">
            <div class="tab">
                <input type="radio" id="tab1" name="tab" checked>
                <label for="tab1" class="tab-label">13-inch (M2 chip)<br><span class="tab-price">From
                        $999</span></label>
            </div>
            <div class="tab">
                <input type="radio" id="tab2" name="tab">
                <label for="tab2" class="tab-label">13-inch (M3 chip)<br><span class="tab-price">From
                        $1099</span></label>
            </div>
            <div class="tab">
                <input type="radio" id="tab3" name="tab">
                <label for="tab3" class="tab-label">15-inch (M3 chip)<br><span class="tab-price">From
                        $1299</span></label>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <!-- Product Items -->
            <div class="col-md-4">
                <div class="product-item">
                    <img src="pictures/macbook-2020.jpg" alt="Macbook Air">
                    <h4 class="mt-2">Macbook Air M1</h4>
                    <div class="color-buttons">
                        <button type="button" class="btn btn-gold p-3 m-2 rounded-circle btn-lg"></button>
                        <button type="button" class="btn btn-silver p-3 m-2 rounded-circle btn-lg"></button>
                        <button type="button" class="btn btn-space-grey p-3 m-2 rounded-circle btn-lg"></button>
                    </div>

                    <a href="macbook-air/macbook-m1.php" class="btn rounded-pill btn-dark">Buy Now</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-item">
                    <img src="pictures/macbook-m2.jpg" alt="Macbook Pro">
                    <h4 class="mt-2">Macbook Air M2</h4>
                    <div class="color-buttons">
                        <button type="button" class="btn btn-gold p-3 m-2 rounded-circle btn-lg"></button>
                        <button type="button" class="btn btn-silver p-3 m-2 rounded-circle btn-lg"></button>
                        <button type="button" class="btn btn-space-grey p-3 m-2 rounded-circle btn-lg"></button>
                    </div>
                    <a href="#" class="btn rounded-pill btn-dark">Buy Now</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-item">
                    <img src="pictures/macbook air.jpg" alt="Airpods">
                    <h4 class="mt-2">Macbook Air M3</h4>
                    <div class="color-buttons">
                        <button type="button" class="btn btn-gold p-3 m-2 rounded-circle btn-lg"></button>
                        <button type="button" class="btn btn-silver p-3 m-2 rounded-circle btn-lg"></button>
                        <button type="button" class="btn btn-space-grey p-3 m-2 rounded-circle btn-lg"></button>
                    </div>
                    <a href="#" class="btn rounded-pill btn-dark">Buy Now</a>
                </div>
            </div>
        </div>


    </div>

</body>

</html>