<?php snippet('header') ?>
<article itemprop="mainEntity" itemscope itemtype="http://schema.org/CreativeWork">

    <header>
        <h1 itemprop="name"><?= $page->title()->html() ?></h1>
    </header>

    <div itemprop="description">
        <?= $page->text()->kt() ?>
    </div>

    <ul>
        <?php foreach ($page->images() as $image): ?>
            <li>
                <a href="<?= $image->url(); ?>">
                    <img src="<?= $image->resize(300, 300)->url() ?>" />
            </a>
            </li>
        <?php endforeach; ?>
    </ul>

    <footer>
        <?php snippet('ui/share') ?>
    </footer>

</article>

<?php snippet('footer') ?>