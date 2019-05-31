<?php snippet('header') ?>

<article class="section page md__container gutter">
    <?php snippet('nav/page') ?>
    <header class="section__header page__header gutter">
        <h1 class="page__title heading-1"><?= $page->title()->html() ?></h1>

    </header>

    <div class="page__grid flex flex-row flex-wrap">

        <div class=" w-full xl__w-1-4 lg__flex xl__block">
            <ul class="mb-32 gutter lg__w-1-3 xl__w-full">
                <li>
                    <span class="credits__label">Description: </span><span class="credits__value"><?= $page->description() ?></span>
                </li>
                <li>
                    <span class="credits__label">Year: </span><time class="credits__value" datetime="<?= $page->projectdate() ?>"><?= $page->projectdate() ?></time>
                </li>
                <li>
                    <span class="credits__label">Tags: </span>
                    <ul class="taglist ">
                        <?php foreach ($page->tags()->split(',') as $tag): ?>
                            <li><a href="<?= $page->parent()->url() ?>/tag/<?= Str::kebab($tag) ?>" ><?= $tag ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <?php if($page->projectlink()->exists() && $page->projectlink()->isNotEmpty()): ?>
                    <li>
                        <span class="credits__label">Website link: </span><a href="<?= $page->projectlink() ?>" class="credits__value"  target="_blank"><?= $page->title() ?></a>
                    </li>
                <?php endif; ?>
            </ul>
            <div class="generated gutter lg__w-2-3 xl__w-full">
                <?= $page->text()->kt() ?>
            </div>


        </div>

        <?php if($page->imagegallery() != false): ?>
            <div class="page__gallery gutter w-full xl__w-3-4">
                <ul>
                    <?php foreach($page->imagegallery() as $pic): ?>
                        <li>
                            <figure class="mb-48">
                                <img src="<?= $pic->url() ?>" class="block w-full" />
                                <figcaption class="w-full border-top fs-14 fs-italic">
                                    <?= $pic->caption() ?>
                                </figcaption>
                            </figure>

                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>


    </div>

</article>


<?php snippet('footer') ?>
