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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header class="my-bg-dark"> 
            <div class="container">
                <div class="row">
                    <div class="col d-flex justify-content-between align-items-center">
                        <h1 class="my-color my-3">
                            Pet Store
                        </h1>
                        <div class="my-color">
                            <i class="fa-solid fa-cart-shopping fa-xl"></i>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <!-- Main -> Header -->
            <header>
                <div class="header-top my-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h3 class="mt-5">
                                    Categories
                                </h3>
                                <ul class="d-flex justify-content-between ul-style">
                                    <?php
                                        $dog->printCategory();
                                        $cat->printCategory();
                                        $bird->printCategory();
                                        $fish->printCategory();
                                    ?>
                                </ul>
                            </div>
                        </div>  
                    </div>  
                </div>
            </header>

            <!-- Main -> Section -->
            <section>
                <div class="container mt-3">
                    <div class="row">
                        <div class="col">
                            <h3 class="mt-5">
                                All products
                            </h3>
                            <div class="d-flex justify-content-between">
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
                </div>
            </section>
        </main>
    </body>
</html>