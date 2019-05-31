<?php snippet('header') ?>

<article class="section page md__container gutter">
    <?php snippet('nav/page') ?>
    <header class="section__header page__header gutter">
        <h1 class="page__title heading-1"><?= $page->title()->html() ?></h1>
        <time class="page__date" datetime="<?= $page->date() ?>"><?= $page->date()->toDate('F jS, Y') ?></time>
    </header>

    <div class="page__text gutter generated">
        <?= $page->text()->kt() ?>
    </div>

</article>


<?php snippet('footer') ?>
