<?php snippet('header') ?>

<header>
    <h1><?= $page->title()->html() ?></h1>
</header>
<section itemprop="description">
    <?php snippet('contentblocks/index'); ?>
</section>
<?php snippet('footer') ?>