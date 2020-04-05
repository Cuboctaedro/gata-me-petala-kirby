<?php snippet('header') ?>

<div class="container gutter">
    <article class="w-full lg:w-2/3 xl:w-1/2 gutter">
        <div class="homebox mb-12 p-6 text-white text-base md:text-lg">
            <?= $page->text()->kt() ?>
        </div>
    </article>
<?php $newsitem = $pages->find('news')->children()->sortBy('date', 'desc')->first();?>
    <div class="w-full lg:w-2/3 xl:w-1/2 gutter">
        <div class="homebox mb-12 p-6">
            <h2 class="uppercase tracking-wider text-base md:text-xl mb-4 ">
                <a href="<?= $newsitem->url() ?>" class="blueline"><?= $newsitem->title() ?></h2></a>
            <div class="text-base hometext">
                <?= $newsitem->text()->kt() ?>
            </div>
        </div>
    </div>

</div>

<?php snippet('footer'); ?>
