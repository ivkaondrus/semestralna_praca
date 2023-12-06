<?php

/** @var  \App\Core\LinkGenerator $link */
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-6 d-flex gap-4  flex-column">
            <h1>Pridaj novú recenziu</h1>
            <form method="post" action="">
                <label for="post-text" class="form-label">Hodnotenie</label>
                <div class="input-group has-validation mb-3 ">
                    <textarea class="form-control" aria-label="With textarea" name="hodnotenie" id="post-text"></textarea>
                </div>
                <label for="post-text" class="form-label">Text príspevku</label>
                <div class="input-group has-validation mb-3 ">
                    <textarea class="form-control" aria-label="With textarea" name="text_r" id="post-text"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Uložiť</button>
            </form>
        </div>
    </div>
</div>