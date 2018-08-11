<article itemprop="itemListElement" itemscope itemtype="https://schema.org/CreativeWork">
    
    <?php if ($item->featuredimage()->isNotEmpty()) : ?>
    <div class="" itemprop="image">
        <img src="<?= $item->featuredimage()->toFile()->resize(300, 300)->url() ?>"/>
    </div>
    <?php endif; ?>

    <div>
        <h2 itemprop="name">
            <a href="<?= $item->url() ?>" itemprop="url"><?= $item->title() ?></a>
        </h2>
    </div>
    
</article>