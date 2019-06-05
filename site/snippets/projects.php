<?php
$projects = $site->find('work');
?>

<section class="container gutter">
    <header class="gutter mb-12">
        <?php if($page == $projects): ?>
            <h1 class="heading-1"><?= $page->title() ?></h1>
        <?php else: ?>
            <h2 class="heading-1"><?= $projects->title() ?></h2>
        <?php endif; ?>
    </header>


    <div class="flex flex-row flex-wrap mb-6 sm:mb-12 md:mb-24">
        <div class="gutter w-full lg:w-1/3 xl:w-1/4 mb-8 sm:mb-12">
            <?php snippet('nav/tagcloud')?>
        </div>
        <ul class="w-full lg:w-2/3 xl:w-3/4 flex flex-row flex-wrap">
            <?php foreach($projectlist as $item): ?>
                <li class="gutter md:w-1/2 xl:w-1/3 mb-12">
                    <div class="relative project-card ">
                        <?php if($item->coverimage() != false): ?>
                            <div class="mb-3 h-0 relative flex items-center justify-center " style="padding-bottom:50%;padding-top:50%;">
                                <img src="<?= $item->coverimage()->thumb([
                                    'width'   => 430,
                                    'height'  => 430
                                ])->url() ?>" class="w-full block " />
                            </div>
                        <?php endif; ?>
                        <?php if($page == $projects): ?>
                            <h2 class="heading-2">
                                <a href="<?= $item->url() ?>" class="card-link"><?= $item->title() ?></a>
                            </h2>
                        <?php else: ?>
                            <h3 class="heading-2">
                                <a href="<?= $item->url() ?>" class="card-link"><?= $item->title() ?></a>
                            </h3>
                        <?php endif; ?>
                        <div class="generated">
                            <?= $item->description(); ?>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
