<figure class="pb-32">
    <?= snippet('landscapeimage', ['file' => $block->image()->toFile(), 'alt' => $block->caption()]);?>
    <figcaption class="hidden"><?= $block->caption() ?></figcaption>
</figure>
