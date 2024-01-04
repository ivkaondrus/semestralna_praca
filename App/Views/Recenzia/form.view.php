<?php

/** @var \App\Core\LinkGenerator $link */
/** @var Array $data */

?>

<?php if (isset($data['errors']) && count($data['errors']) > 0): ?>
    <?php foreach ($data['errors'] as $error): ?>
        <div class="alert alert-danger" role="alert"><?= $error ?></div>
    <?php endforeach; ?>
<?php endif; ?>
<form method="post" action="<?= $link->url('recenzia.save') ?>" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= @$data['recenzia']?->getId() ?>">
    <input type="hidden" name="rating" id="rating">
    <label for="post-text" class="form-label">Ako ste boli spokojni?</label>
    <div class="input-group has-validation mb-3 ">
        <div class="rating">
            <span class="rating__result" name="rating" required></span>
            <i class="rating__star far fa-star"></i>
            <i class="rating__star far fa-star"></i>
            <i class="rating__star far fa-star"></i>
            <i class="rating__star far fa-star"></i>
            <i class="rating__star far fa-star"></i>
        </div>
    </div>
    <script src="public/js/script_rec.js"></script>
    <label for="post-text" class="form-label">Text príspevku</label>
    <div class="input-group has-validation mb-3 ">
        <textarea class="form-control" aria-label="With textarea" name="text_r" required
                  id="post-text"><?= @$data['recenzia']?->getText() ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Uložiť</button>

</form>