<?php snippet('header') ?>

<article class="container gutter">
    <header class="gutter mb-12">
        <h1 class=" heading-1"><?= $page->title()->html() ?></h1>
    </header>

    <div class="flex flex-row flex-wrap">
        <div class="lg:w-1/3 xl:w-1/4 gutter  pb-12">
            <?php foreach ($page->linklist()->toStructure() as $link): ?>
                <div class="">
                    <a href="<?= $link->url() ?>" target="_blank" class=""><?= $link->text() ?></a>
                </div>
            <?php endforeach ; ?>
        </div>
        <div class="lg:w-2/3 xl:w-1/2 gutter generated pb-12">
            <?= $page->text()->kt() ?>
        </div>
    </div>

</article>


<?php snippet('footer'); ?>
