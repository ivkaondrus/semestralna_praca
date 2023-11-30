<?php
/** @var \App\Core\LinkGenerator $link */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Účtovníctvo</title>

    <link rel="icon" type="image/png" href="images/logo.png"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="public/css/sekcia_uctovnictvo.css">

</head>
<body>
<div class="popis_sekcie_uctovnictvo">
    <p><br>
        Naša firma ponúka spoľahlivé a zodpovedné vedenie jednoduchého účtovníctva pre podnikateľov.
    </p>
    <p>
        V prípade, že ste podnikateľ, ktorý sa nechce starať o byrokraciu a administratívu, my za Vás všetko vyriešime. <br>
        Od faktúr, skladového hospodárstva až po podanie daňového priznania. Nižšie nájdete cenník našich služieb.
    </p>
</div>
<div class="obrazky_uctovnictvo">
    <hr class="mt-2 mb-5">
    <div class="row text-center text-lg-start">
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="images/administration3.jpg" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="images/administration1.jpg" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="images/administration2.webp" alt="">
            </a>
        </div>
    </div>
</div>
<div class="hlavicka_tabulky"> <br><h4>Cenník:</h4></div>
<table class="cennik">
    <tr>
        <th>Služba</th>
        <th>Zahŕňa:</th>
        <th>Cena</th>
    </tr>
    <tr>
        <td>Vedenie jednoduchého účtovníctva - základ</td>
        <td>Základ zahŕňa len mesačné výkazy, fakturácia, daňové priznania, archivácia dokladov na rok</td>
        <td>200€/mes.</td>
    </tr>
    <tr>
        <td>Vedenie jednoduchého účtovníctva - rozšírené</td>
        <td>Základ zahŕňa mesačné výkazy, fakturácia, daňové priznania, skladové hospodárstvo, DPH, archivácia dokladov na rok</td>
        <td>400€/mes.</td>
    </tr>
    <tr>
        <td>Vedenie jednoduchého účtovníctva - úplné</td>
        <td>Základ zahŕňa mesačné výkazy, fakturácia, daňové priznania, skladové hospodárstvo, DPH, personalistika, archivácia dokladov na rok</td>
        <td>700€/mes.</td>
    </tr>
    <tr>
        <td>Daňové priznanie k dani z príjmov FO typ A</td>
        <td></td>
        <td>50€/mes.</td>
    </tr>
    <tr>
        <td>Daňové priznanie k dani z príjmov FO typ B</td>
        <td></td>
        <td>60€/mes.</td>
    </tr>
</table>
<br>
<div class="blizsie_info">
    <p>
        Ak máte záujem o niektorú z našich služieb, neváhajte nás kontaktovať na: tel. číslo: 0901 234 567 alebo e-mail: pivyon@gmail.com
    </p>
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
</body>
</html>