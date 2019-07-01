<?php snippet('header') ?>

<article class="container gutter">
    <header class="gutter mb-12">
        <h1 class="heading-1"><?= $page->title() ?></h1>
    </header>

    <ul class="pb-12 flex flex-row flex-wrap">
        <?php foreach ($page->children() as $item): ?>
            <li class="gutter w-full md:w-1/2 xl:w-1/3 card-container">
                <article class="mb-8 card relative z-0">
                    <?php if ($item->cover()): ?>
                        <img src="<?= $item->cover()->thumb([
                            'width'   => 464,
                            'height'  => 348,
                            'quality' => 80,
                            'crop'    => true
                        ])->url() ?>" class="block w-full card-thumb"  />
                    <?php else: ?>
                        <div class="w-full imageframe" ></div>
                    <?php endif; ?>
                    <h2 class="text-center text-base pt-1">
                        <a href="<?= $item->url() ?>" class="text-black card-link"><?= $item->title() ?></a>
                    </h2>
                </article>
            </li>
        <?php endforeach; ?>
    </ul>

</article>


<?php snippet('footer'); ?>
