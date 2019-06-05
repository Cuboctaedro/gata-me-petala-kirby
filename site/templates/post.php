<?php snippet('header') ?>

<article class="container gutter">
    <?php snippet('nav/page') ?>
    <header class="gutter">
        <h1 class=" heading-1"><?= $page->title()->html() ?></h1>
        <time class="block italic mb-12" datetime="<?= $page->date() ?>"><?= $page->date()->toDate('F jS, Y') ?></time>
    </header>

    <div class="lg:w-2/3 xl:w-1/2 xl:mx-auto gutter generated pb-12">
        <?= $page->text()->kt() ?>
    </div>

</article>


<?php snippet('footer') ?>
