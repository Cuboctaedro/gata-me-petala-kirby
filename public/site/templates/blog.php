<?php snippet('header') ?>

<header>
    <h1 itemprop="name"><?= $page->title()->html() ?></h1>
</header>

<section class="d-flex fx-d-row fx-w-wrap" itemscope itemtype="http://schema.org/Blog">
    <ul>
        <?php foreach($articles as $item): ?>
        <li>
            <?php snippet('card', array('item' => $item)); ?>
        </li>
        <?php endforeach; ?>
    </ul>
</section>
<?php snippet('sidebar') ?>

<?php snippet('footer') ?>