<?php 
require_once __DIR__.'/classes/category.php';
require_once __DIR__.'/classes/category.php';
require_once __DIR__.'/db.php';
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pet Store</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="text-center my-3">
                            Pet Store
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <div class="container">
                <div class="row">
                    <div class="col d-flex justify-content-between">
                        <!-- Card 1 -->
                        <div class="card" style="width: 18rem;">
                            <?php
                                $bed->printProduct();
                            ?>
                            <a href="#" class="btn btn-primary m-3">
                                Buy now
                            </a>
                        </div>

                         <!-- Card 2 -->
                         <div class="card" style="width: 18rem;">
                            <?php
                                $dryFood->printProduct();
                            ?>
                            <a href="#" class="btn btn-primary m-3">
                                Buy now
                            </a>
                        </div>

                        <!-- Card 3 -->
                        <div class="card" style="width: 18rem;">
                            <?php
                                $catToy->printProduct();
                            ?>
                            <a href="#" class="btn btn-primary m-3">
                                Buy now
                            </a>
                        </div>

                        <!-- Card 4 -->
                        <div class="card" style="width: 18rem;">
                            <?php
                                $dogToy->printProduct();
                            ?>
                            <a href="#" class="btn btn-primary m-3">
                                Buy now
                            </a>
                        </div>
                    </div>   
                </div>
            </div>
        </main>
    </body>
</html>