<article itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">
    
    <?php if ($item->featuredimage()->isNotEmpty()) : ?>
    <div class="ratio-gold bg-pos-center bg-size-cover" style="background-image:url(<?= $item->featuredimage()->toFile()->url() ?>);"></div>
    <?php endif; ?>

    <div>
        <h2 itemprop="headline">
            <a href="<?= $item->url() ?>" itemprop="url"><?= $item->title() ?></a>
        </h2>
        <time datetime="<?= $item->date('c') ?>" itemprop="datePublished"><?= $item->date('l F jS, Y') ?></time>
        <meta itemprop="author" content="<?= $site->title() ?>">
        <meta itemprop="publisher" content="<?= $site->title() ?>">
        <div itemprop="description">
            <?= $item->summary() ?>
        </div>
    </div>
    
</article>