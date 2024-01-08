<?php

/** @var \App\Core\IAuthenticator $auth */
/** @var \App\Core\LinkGenerator $link */?>
<link rel="stylesheet" href="public/css/admin_rozhranie.css">
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="welcome">
                Vitaj, <strong><?= $auth->getLoggedUserName() ?></strong>!<br><br>
            </div>
            <div class="buttons">
                <button class="btn btn-primary" type="submit" name="submit">Pridať produkt
                </button>
                <button class="btn btn-primary" type="submit" name="submit">Upraviť produkt
                </button>
                <button class="btn btn-primary" type="submit" name="submit">Odstrániť produkt
                </button>
                <a href="<?= $link->url("home.recenzie") ?>" class="btn btn-primary">Zmazať recenziu</a>
            </div>
        </div>
    </div>
</div>