<?php snippet('header') ?>

<article class="page">
    <header class="page__header">
        <h1 class="page__title"><?= $page->title()->html() ?></h1>
        <time class="page__date" datetime="<?= $page->projectdate() ?>"><?= $page->projectdate() ?></time>
    </header>

    <div class="page__text">
        <?= $page->text()->kt() ?>
    </div>

    <?php if($page->imagegallery() != false): ?>
        <div class="page__gallery">
            <ul>
                <?php foreach($page->imagegallery() as $pic): ?>
                    <li>
                        <img src="<?= $pic->url() ?>"  />
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
</article>


<?php snippet('footer') ?>
