<?php

/** @var Array $data */
/** @var \App\Models\Recenzia $recenzia */
/** @var App\Core\IAuthenticator $auth */
/** @var \App\Core\LinkGenerator $link */
?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <ul class="pridanie">
                <a class="nav-link" href="<?= $link->url("recenzia.add") ?>">Pridať recenziu</a>
        </ul>
        <?php foreach ($data['recenzie'] as $recenzia): ?>
            <div class="col-3 d-flex gap-4 flex-column">
                <div class="border post d-flex flex-column">
                    <div class="m-2">
                        <?= $recenzia->getRating() ?>
                    </div>
                    <div class="m-2">
                        <?= $recenzia->getText() ?>
                    </div>
                    <div>
                        <img src="<?= \App\Helpers\FileStorage::UPLOAD_DIR . '/' . $recenzia->getPicture() ?>" class="img-fluid">
                    </div>
                    <div class="m-2">
                        Autor: <strong><?= $recenzia->getAuthor() ?></strong>
                    </div>
                    <div class="m-2 d-flex gap-2 justify-content-end">
                        <?php if ($auth->isLogged() && ($auth->getLoggedUserName() == $recenzia->getAuthor())): ?>
                        <a href="<?= $link->url('recenzia.edit', ['id' => $recenzia->getId()]) ?>" class="btn btn-primary">Upraviť</a>
                        <a href="<?= $link->url('recenzia.delete', ['id' => $recenzia->getId()]) ?>" class="btn btn-danger">Zmazať</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
