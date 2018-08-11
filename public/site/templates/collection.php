<?php snippet('header') ?>

<header>
    <h1 itemprop="name"><?= $page->title()->html() ?></h1>
</header>

<section class="d-flex fx-d-row fx-w-wrap" itemscope itemtype="https://schema.org/ItemList">
    <ul>
        <?php foreach($page->children() as $item): ?>
        <li>
            <?php snippet('itemcard', array('item' => $item)); ?>
        </li>
        <?php endforeach; ?>
    </ul>
</section>

<?php snippet('footer') ?>