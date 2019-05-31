<?php
$blog = $site->find('blog');
if($page = $blog) {
    $blogpage = true;
}
?>
<section class="blog section md__container gutter">
    <header class="gutter section__header">
        <?php if($blogpage = true): ?>
            <h1 class="heading-1"><?= $blog->title() ?></h1>
        <?php else: ?>
            <h2 class="heading-1"><?= $blog->title() ?></h2>
        <?php endif; ?>
    </header>

    <div class="section__content">
        <ul class="section__list">
            <?php foreach($blog->children() as $item): ?>
                <li class=" section__listitem">
                    <article class="blogpost">
                        <header class="blogpost__heading">
                            <?php if($blogpage = true): ?>
                                <h2 class="blogpost__title heading-3 gutter">
                                    <a href="<?= $item->url() ?>" class="blogpost__link"><?= $item->title() ?></a>
                                </h2>
                            <?php else: ?>
                                <h3 class="blogpost__title heading-3 gutter">
                                    <a href="<?= $item->url() ?>" class="blogpost__link"><?= $item->title() ?></a>
                                </h3>
                            <?php endif; ?>
                            <div class="blogpost__date gutter">
                                <?= $item->date()->toDate('l, F jS, Y'); ?>
                            </div>
                        </header>
                        <div class="blogpost__text gutter">
                            <?= $item->summary(); ?>
                            <a class="blogpost__readmore" href="<?= $item->url() ?>" title="<?= $item->title() ?>">Read More</a>
                        </div>
                    </article>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
