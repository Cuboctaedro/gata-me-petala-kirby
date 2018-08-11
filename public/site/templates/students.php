<?php snippet('header') ?>

<header>
    <h1 itemprop="name"><?= $page->title()->html() ?></h1>
</header>

<?php foreach($page->children() as $child): ?>
    <section >
        <h2><?= $child->title() ?></h2>
        <ul class="d-flex fx-d-row fx-w-wrap" itemscope itemtype="https://schema.org/ItemList">
            <?php foreach($child->images() as $image): ?>
                <li>
                    <a href="<?= $image->url(); ?>">
                        <img src="<?= $image->resize(300, 300)->url() ?>" />
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
<?php endforeach;?>
<?php snippet('footer') ?>