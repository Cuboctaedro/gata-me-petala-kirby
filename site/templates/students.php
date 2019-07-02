<?php snippet('header') ?>

<article class="container gutter">
    <header class="hidden">
        <h1 class=""><?= $page->title() ?></h1>
    </header>

    <ul class="pb-12">
        <?php foreach ($page->children() as $item): ?>
            <li class="pb-12">
                <section>
                    <header class="gutter mb-12">
                        <h2 class="heading-1"><?= $item->title() ?></h2>
                    </header>
                    <div class="flex flex-row flex-wrap imagegallery" >
                        <?php foreach ($item->images() as $subitem): ?>
                            <a data-caption="<?= $subitem->caption() ?>" class="gutter w-full md:w-1/2 lg:w-1/3 xl:w-1/4 mb-8"  href="<?= $subitem->url() ?>">
                                <img src="<?= $subitem->thumb([
                                    'width'   => 432,
                                    'height'  => 432,
                                    'quality' => 80,
                                    'crop'    => true
                                ])->url() ?>" class="block w-full shadow-md hover:shadow-xl"  />
                                <p class="text-center text-base pt-1 text-black"><?= $subitem->caption() ?></p>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </section>
            </li>
        <?php endforeach; ?>
    </ul>

</article>


<?php snippet('footer'); ?>
