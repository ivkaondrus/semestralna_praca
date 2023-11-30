<?php

/** @var \App\Core\LinkGenerator $link */
/** @var Array $data */

?>
<?php if (!is_null(@$data['errors'])): ?>
    <?php foreach ($data['errors'] as $error): ?>
        <div class="alert alert-danger" role="alert">
            <?= $error ?>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
<form method="post" action="<?= $link->url('recenzie.save') ?>" enctype="multipart/form-data">

    <input type="hidden" name="id" value="<?= @$data['recenzie']?->getId() ?>">

    <label for="post-text" class="form-label">Užívateľské meno</label>
    <div class="input-group has-validation mb-3 ">
        <textarea class="form-control" aria-label="With textarea" name="text" id="post-text"><?= @$data['recenzie']?->getPrihlasenyUsername() ?></textarea>
    </div>
    <label for="inputGroupFile02" class="form-label">Súbor obrázka</label>
    <?php if (@$data['post']?->getPicture() != ""): ?>
        <div>Pôvodný súbor: <?= substr($data['recenzie']->getPicture(), strpos($data['recenzie']->getPicture(), '-') + 1)  ?></div>
    <?php endif; ?>
    <div class="input-group mb-3 has-validation">
        <input type="file" class="form-control " name="picture" id="inputGroupFile02">
    </div>
    <label for="post-text" class="form-label">Text príspevku</label>
    <div class="input-group has-validation mb-3 ">
        <textarea class="form-control" aria-label="With textarea" name="text" id="post-text"><?= @$data['recenzie']?->getText() ?></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Uložiť</button>
</form>