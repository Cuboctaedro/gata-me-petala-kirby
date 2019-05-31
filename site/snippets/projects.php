<?php
$projects = $site->find('work');
?>

<section class="projects section md__container gutter">
    <header class="gutter section__header">
        <?php if($page == $projects): ?>
            <h1 class="heading-1"><?= $page->title() ?></h1>
        <?php else: ?>
            <h2 class="heading-1"><?= $projects->title() ?></h2>
        <?php endif; ?>
    </header>


    <div class="section__content">
        <div class="projects__nav gutter">
            <?php snippet('nav/tagcloud')?>
        </div>
        <ul class="section__list">
            <?php foreach($projectlist as $item): ?>
                <li class="gutter section__listitem">
                    <div class="project">
                        <?php if($item->coverimage() != false): ?>
                            <div class="project__image">
                                <img src="<?= $item->coverimage()->thumb([
                                    'width'   => 430,
                                    'height'  => 430,
                                    'crop'    => true
                                ])->url() ?>"  />
                            </div>
                        <?php endif; ?>
                        <?php if($page == $projects): ?>
                            <h2 class="project__title heading-3">
                                <a href="<?= $item->url() ?>" class="project__link"><?= $item->title() ?></a>
                            </h2>
                        <?php else: ?>
                            <h3 class="project__title heading-3">
                                <a href="<?= $item->url() ?>" class="project__link"><?= $item->title() ?></a>
                            </h3>
                        <?php endif; ?>
                        <div class="c-grey">
                            <?= $item->projectdate() ?>
                        </div>
                        <div class="project__text">
                            <?= $item->description(); ?>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
