<?php
/** @var \App\Core\LinkGenerator $link */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PIVYON</title>
    <link rel="icon" type="image/png" href="images/logo.png"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="public/css/domovska_stranka.css">
</head>
<body>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/handmade2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="images/administracia.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="images/packages.jpg" class="d-block w-100" alt="...">
        </div>
    </div>

    <div class="container">

        <!-- Hlavicka sekcie -->
        <br>
        <h1 class="hlavicka">Naše služby <br>
            <small>V našej ponuke služieb pre Vás, nájdete: </small>
        </h1>
        <br>
        <!-- E-shop -->
        <div class="row">
            <div class="images">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="images/handmade.png" alt="">
                </a>
            </div>
            <div class="text">
                <h3>E-shop handmade výrobkov</h3>
                <p>Objavte širokú škálu nádherných handmade výrobkov. Skrášlite si domov krásnou ručnou prácou a podporte slovenskú umelkyňu.</p>
                <a class="btn btn-primary" href="<?= $link->url("home.eshop") ?>">E-shop</a>
            </div>
        </div>
        <hr>
        <!-- Uctovnictvo -->
        <div class="row">
            <div class="images">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="images/uctovnictvo-pre-zivnostnikov.png" alt="">
                </a>
            </div>
            <div class="text">
                <h3>Vedenie účtovníctva</h3>
                <p>Ste podnikateľ, malá firma alebo väčšia spoločnosť? Potrebujete radu v oblasti účtovníctva alebo dokonca niekoho na koho sa v tejto oblasti môžete spoľahnúť?
                    Ponúkame Vám službu poradenstva v oblasti účtovníctva, ale aj úplné vedenie jednoduhcého či podvojného účtovníctva pre Vašu malú alebo veľkú firmu.</p>
                <a class="btn btn-primary" href="<?= $link->url("home.uctovnictvo") ?>">Viac...</a>
            </div>
        </div>
        <hr>
        <!-- Balikovo -->
        <div class="row">
            <div class="images">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="images/SPS_Balikovo_LOGO_RGB_positive_vertical.png" alt="">
                </a>
            </div>
            <div class="text">
                <h3>Súčasť tímu Balíkovo</h3>
                <p>Spolupracujeme so spoločnosťou Slovak Parcel Service, aby sa k Vám dostali balíky rýchlo a pohodlne.</p>
                <a class="btn btn-primary" href="<?= $link->url("home.balikovo") ?>">Ako to funguje?</a>
            </div>
        </div>
        <hr>
    </div>
    <div class="bg-purple p-3 text-center">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="<?= $link->url("home.index") ?>" class="nav-link text-light-gray">Domov</a></li>
            <li class="nav-item"><a href="<?= $link->url("home.uctovnictvo") ?>" class="nav-link text-light-gray">Účtovníctvo</a></li>
            <li class="nav-item"><a href="<?= $link->url("home.balikovo") ?>" class="nav-link text-light-gray">Balíkovo</a></li>
            <li class="nav-item"><a href="<?= $link->url("home.eshop") ?>" class="nav-link text-light-gray">E-shop</a></li>
        </ul>
        <p class="text-center text-light-gray">© 2023 made by Ondrušová Ivana</p>
    </div>
</div>
</body>
</html>
