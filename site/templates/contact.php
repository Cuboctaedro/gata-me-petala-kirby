<?php snippet('header') ?>

<article class="container gutter ">
    <header class="gutter mb-12">
        <h1 class="heading-1"><?= $page->title() ?></h1>
    </header>
    <div class="flex flex-row flex-wrap">
        <div class="w-full lg:w-1/3 xl:w-1/4 gutter generated mb-12">
            <?= $page->text()->kt() ?>
        </div>
        <div class="w-full lg:w-2/3 xl:w-3/4 flex flex-row flex-wrap mb-8 gutter">
            <a href="https://maps.google.com/maps?f=q&source=embed&hl=en&geocode=&q=Asklipiou+12,+Athens,+Greece&aq=0&oq=askliou+12&sll=37.0625,-95.677068&sspn=55.060677,114.169922&ie=UTF8&hq=&hnear=Asklipiou+12,+Athina+106+80,+Greece&t=m&ll=37.982363,23.735962&spn=0.03112,0.072098&z=14" target="_blank">
                <img src="<?= $page->map()->toFile()->url() ?>" class="block w-full card-thumb"  />
            </a>
        </div>

    </div>
</article>

<?php snippet('footer'); ?>
