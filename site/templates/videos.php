<?php snippet('header') ?>

<article class="container gutter ">
    <header class="gutter mb-12">
        <h1 class="heading-1"><?= $page->title() ?></h1>
    </header>
    <div class="flex flex-row flex-wrap">
        <div class="w-full lg:w-1/2 gutter generated mb-12">
            <?= $page->text()->kt() ?>
        </div>
        <div class="w-full lg:w-1/2 mb-8 lg:order-first">
            <?php foreach($page->videolinks()->toStructure() as $videolink): ?>
                <div class="mb-8 gutter w-full">
                    <?= $videolink->embedcode() ?>
                    <p><?= $videolink->title() ?></p>
                </div>
            <?php endforeach;?>
        </div>

    </div>
</article>

<?php snippet('footer'); ?>
