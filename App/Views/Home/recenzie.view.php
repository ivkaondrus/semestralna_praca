<?php

/** @var Array $data */
/** @var \App\Models\Post $recenzia */

/** @var \App\Core\LinkGenerator $link */
?>

<div class="container-fluid">
    <div class="row justify-content-center">
        <?php foreach ($data['recenzie'] as $recenzia): ?>
            <div class="col-3 d-flex gap-4 flex-column">
                <div class="border post d-flex flex-column">
                    <div>
<!--                        <img src="--><?php //= \App\Helpers\FileStorage::UPLOAD_DIR . '/' . $recenzia->getObrazok()?><!--" class="img-fluid">-->
                    </div>
                    <div class="m-2">
                        <?= $recenzia->getText() ?>
                    </div>
                    <div class="m-2 d-flex gap-2 justify-content-end">
                        <a href="<?= $link->url('recenzie.edit', ['id' => $recenzia->getId()]) ?>" class="btn btn-primary">Upraviť</a>
                        <a href="<?= $link->url('recenzie.delete', ['id' => $recenzia->getId()]) ?>" class="btn btn-danger">Zmazať</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
