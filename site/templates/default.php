<?php snippet('header') ?>

<article class="container gutter">
    <header class="gutter mb-12">
        <h1 class=" heading-1"><?= $page->title()->html() ?></h1>
    </header>

    <div class="lg:w-2/3 xl:w-1/2 xl:mx-auto gutter generated pb-12">
        <?= $page->text()->kt() ?>
    </div>

</article>


<?php snippet('footer'); ?>
