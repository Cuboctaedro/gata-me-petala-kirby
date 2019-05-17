<?php
$services = $site->find('services');
if($page->parent() == $services) {
    go($page->parent());
} else {
?>

<?php snippet('header') ?>

<article class="page">
    <header class="page__header">
        <h1 class="page__title"><?= $page->title()->html() ?></h1>
    </header>

    <div class="page__text">
        <?php foreach($page->contentblocks()->toBuilderBlocks() as $block): ?>
            <?php snippet('blocks/' . $block->_key(), array('block' => $block)) ?>
        <?php endforeach ?>
    </div>

</article>


<?php snippet('footer');
}; ?>
