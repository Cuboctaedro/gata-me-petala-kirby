<?php snippet('header') ?>

<article class="page">
    <header class="page__header">
        <h1 class="page__title"><?= $page->title()->html() ?></h1>
        <time class="page__date" datetime="<?= $page->date() ?>"><?= $page->date()->toDate('F jS, Y') ?></time>
    </header>

    <div class="page__text">
        <?= $page->text()->kt() ?>
    </div>

</article>


<?php snippet('footer') ?>
