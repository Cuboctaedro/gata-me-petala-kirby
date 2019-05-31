<?php snippet('header') ?>

<article class="section page md__container gutter">
    <header class="section__header page__header gutter">
        <h1 class="page__title heading-1"><?= $page->title()->html() ?></h1>
    </header>

    <div class="page__text gutter generated">
        <?= $page->text()->kt() ?>
    </div>

</article>


<?php snippet('footer'); ?>
