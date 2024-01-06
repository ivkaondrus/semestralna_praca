<?php

/** @var \App\Core\IAuthenticator $auth */ ?>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div>
                Vitaj, <strong><?= $auth->getLoggedUserName() ?></strong>!<br><br>
            </div>
            <div class="text-center">
                <button class="btn btn-primary" type="submit" name="submit">Pridať produkt
                </button>
            </div>
            <div class="text-center">
                <button class="btn btn-primary" type="submit" name="submit">Upraviť produkt
                </button>
            </div>
            <div class="text-center">
                <button class="btn btn-primary" type="submit" name="submit">Odstrániť produkt
                </button>
            </div>
            <div class="text-center">
                <button class="btn btn-primary" type="submit" name="submit">Zmazať recenziu
                </button>
            </div>
        </div>
    </div>
</div>