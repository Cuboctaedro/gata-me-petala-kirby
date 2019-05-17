<?php
$blog = $site->find('blog');
if($page = $blog) {
    $blogpage = true;
}
?>
<section class="services section">
    <?php if($blogpage = true): ?>
        <h1 class="section__title"><?= $blog->title() ?></h1>
    <?php else: ?>
        <h2 class="section__title">
            <a href="<?= $blog->url() ?>"><?= $blog->title() ?></a>
        </h2>
    <?php endif; ?>
    <div class="section__list">
        <ul>
            <?php foreach($blog->children() as $item): ?>
                <li>
                    <div class="card">
                        <?php if($blogpage = true): ?>
                            <h2 class="card__title">
                                <a href="<?= $item->url() ?>" class="card__link"><?= $item->title() ?></a>
                            </h2>
                        <?php else: ?>
                            <h3 class="card__title">
                                <a href="<?= $item->url() ?>" class="card__link"><?= $item->title() ?></a>
                            </h3>
                        <?php endif; ?>
                        <div class="card__date">
                            <?= $page->date(); ?>
                        </div>
                        <div class="card__text">
                            <?= $page->summary(); ?>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
