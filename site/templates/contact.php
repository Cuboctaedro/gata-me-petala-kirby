<?php snippet('header') ?>

<article class="services section md__container gutter">
    <header class="gutter section__header">
        <h1 class="heading-1"><?= $page->title() ?></h1>
    </header>
    <div class="section__content">
        <ul class="section__list">
            <?php foreach($page->contactblocks()->toStructure() as $item): ?>
                <li class="gutter section__listitem">
                    <div class="service">
                        <h2 class="service__title heading-3"><?= $item->title() ?></h2>
                        <div class="service__text">
                            <?= $item->text()->kt(); ?>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</article>


<?php snippet('footer'); ?>
