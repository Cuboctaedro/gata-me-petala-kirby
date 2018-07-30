<?php snippet('header') ?>

<header>
    <h1><?= $page->title()->html() ?></h1>
</header>
<section itemprop="description">
    <?= $page->text()->kt(); ?>
</section>
<?php snippet('sidebar') ?>
<?php snippet('footer') ?>