<?php snippet('header') ?>

<article class="container gutter">
    <?php snippet('nav/page') ?>
    <header class="gutter w-full mb-12">
        <h1 class="heading-1"><?= $page->title()->html() ?></h1>

    </header>

    <div class="flex flex-row flex-wrap w-full">

        <div class="w-full xl:w-1/4 lg:flex xl:block mb-12">

            <div class="gutter lg:w-1/3 xl:w-full">

                <ul class="mb-8 font-serif">
                    <li>
                        <span class="italic">Description: </span><span class="credits__value"><?= $page->description() ?></span>
                    </li>
                    <li>
                        <span class="italic">Year: </span><time class="credits__value" datetime="<?= $page->projectdate() ?>"><?= $page->projectdate() ?></time>
                    </li>
                    <li>
                        <span class="italic">Tags: </span>
                        <ul class="inline">
                            <?php foreach ($page->tags()->split(',') as $tag): ?>
                                <li class="inline tag"><a href="<?= $page->parent()->url() ?>/tag/<?= Str::kebab($tag) ?>" ><?= $tag ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                </ul>

                <?php if($page->projectlink()->exists() && $page->projectlink()->isNotEmpty()): ?>
                    <div class="mb-8">
                        <a href="<?= $page->projectlink() ?>" class="inline-block text-sm uppercase tracking-wider px-4 py-2 bg-gray-900 text-gray-100 hover:bg-red-700 hover:text-gray-100"  target="_blank" title="Visit: <?= $page->title() ?>">Visit the website</a>
                    </div>
                <?php endif; ?>

            </div>

            <div class=" gutter lg:w-2/3 xl:w-full generated">
                <?= $page->text()->kt() ?>
            </div>

        </div>

        <?php if($page->imagegallery() != false): ?>
            <div class="gutter w-full xl:w-3/4">
                <ul>
                    <?php foreach($page->imagegallery() as $pic): ?>
                        <li>
                            <figure class="mb-12">
                                <picture>
                                    <source media="(max-width: 479px)" data-srcset="<?= $pic->thumb([
                                        'width'      => 415,
                                        'quality'    => 80,
                                    ])->url() ?>">
                                    <source media="(max-width: 767px)" data-srcset="<?= $pic->thumb([
                                        'width'      => 432,
                                        'quality'    => 80,
                                    ])->url() ?>">
                                    <source media="(max-width: 1023px)" data-srcset="<?= $pic->thumb([
                                        'width'      => 720,
                                        'quality'    => 80,
                                    ])->url() ?>">
                                    <source media="(max-width: 960px)" data-srcset="<?= $pic->thumb([
                                        'width'      => 960,
                                        'quality'    => 80,
                                    ])->url() ?>">
                                    <source media="(min-width: 1280px)" data-srcset="<?= $pic->thumb([
                                        'width'      => 904,
                                        'quality'    => 80,
                                    ])->url() ?>">
                                    <img data-src="<?= $pic->thumb([
                                        'width'      => 960,
                                        'quality'    => 80,
                                    ])->url() ?>" class="lazyload block w-full bg-gray-100" alt="<?= $page->title() ?> - <?= $pic->caption() ?>" >
                                </picture>
                                <?php if($pic->caption()->isNotEmpty()): ?>
                                <figcaption class="w-full text-gray-600 text-sm italic">
                                    <?= $pic->caption() ?>
                                </figcaption>
                            <?php endif; ?>
                            </figure>

                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>


    </div>

</article>


<?php snippet('footer') ?>
