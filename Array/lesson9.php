<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>


<div class="container">
    <h1 class="text-center text-primary font-weight-bold mt-4">Loop Card</h1>
    <div class="row">

        <?php
$products = array(
    array("id" => 1, "title" => "Ma Ma", "image" => "cover.png", "price" => 200),
    array("id" => 2, "title" => "Ma Ma", "image" => "cover.png", "price" => 200),
    array("id" => 3, "title" => "Ma Ma", "image" => "cover.png", "price" => 200),
    array("id" => 4, "title" => "Ma Ma", "image" => "cover.png", "price" => 200),
    array("id" => 5, "title" => "Ma Ma", "image" => "cover.png", "price" => 200),
    array("id" => 6, "title" => "Ma Ma", "image" => "cover.png", "price" => 200),
    array("id" => 7, "title" => "Ma Ma", "image" => "cover.png", "price" => 200),
);
        for ($i = 0; $i <= count($products)-1; $i++ ){
            ?>

            <div class="card ml-5 mt-5" style="width: 18rem;">
                <img src="../image/<?php echo $products[$i]["image"]?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class=card-title"><?php echo $products[$i]["title"]?></h5>
                    <p class="card-text"><?php echo $products[$i]["price"]?></p>
                    <a href="#" class="btn btn-<?php echo ($i%2 == 0) ? 'danger' : 'primary'; ?>">Add to cart</a>
                </div>
            </div>
            <?php
        }
        ?>


    </div>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>