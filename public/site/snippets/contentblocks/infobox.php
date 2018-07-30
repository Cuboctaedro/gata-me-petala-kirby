<aside>
    <?php if ($data->picture()->isNotEmpty()) : ?>
        <div class="ratio-gold bg-pos-center bg-size-cover" style="background-image:url(<?= $page->image($data->picture())->url() ?>);"></div>
    <?php endif; ?>
    <div class="p-25">
        <h2><?= $data->title() ?></h2>
        <div>
            <?= $data->text()->kt() ?>
        </div>
    </div>
</aside>