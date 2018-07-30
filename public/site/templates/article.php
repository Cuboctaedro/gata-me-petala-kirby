<?php snippet('header') ?>
<article itemprop="mainEntity" itemscope itemtype="http://schema.org/Article">

    <header>
        <h1 itemprop="headline"><?= $page->title()->html() ?></h1>
        <time datetime="<?= $page->date('c') ?>" itemprop="datePublished"><?= $page->date('l F jS, Y') ?></time>
        <ul>
            <?php foreach($page->tags()->split(',') as $tag): ?>
                <li>
                    <a href="<?= url('blog/' . url::paramsToString(['tag' => $tag])) ?>"><?= html($tag) ?></a>
                </li>
            <?php endforeach ?>
        </ul>
    </header>

    <meta itemprop="author" content="<?= $site->title() ?>">
    <meta itemprop="publisher" content="<?= $site->title() ?>">

    <div itemprop="articleBody">
        <?php snippet('contentblocks/index'); ?>
    </div>

    <footer>
        <?php snippet('ui/share') ?>
    </footer>

</article>

<?php snippet('footer') ?>