<?php
$blog = $site->find('blog');
if($page = $blog) {
    $blogpage = true;
}
?>
<section class="container gutter">
    <header class="gutter mb-12">
        <?php if($blogpage = true): ?>
            <h1 class="heading-1"><?= $blog->title() ?></h1>
        <?php else: ?>
            <h2 class="heading-1"><?= $blog->title() ?></h2>
        <?php endif; ?>
    </header>

    <ul class="mb-6 sm:mb-12 md:mb-24">
        <?php foreach($blog->children() as $item): ?>
            <li>
                <article class="flex flex-col items-end mb-12">
                    <header class="flex flex-row flex-wrap w-full">
                        <?php if($blogpage = true): ?>
                            <h2 class="w-full lg:w-2/3 xl:w-3/4 order-2 gutter heading-2 mb-6">
                                <a href="<?= $item->url() ?>" ><?= $item->title() ?></a>
                            </h2>
                        <?php else: ?>
                            <h3 class="w-full lg:w-2/3 xl:w-3/4 order-2 gutter heading-2 mb-6 block">
                                <a href="<?= $item->url() ?>"><?= $item->title() ?></a>
                            </h3>
                        <?php endif; ?>
                        <div class="w-full lg:w-1/3 xl:w-1/4 order-1 gutter font-sans">
                            <?= $item->date()->toDate('l, F jS, Y'); ?>
                        </div>
                    </header>
                    <div class="w-full lg:w-2/3 xl:w-3/4 order-2 gutter ">
                        <div class="xl:w-2/3 generated">
                            <?= $item->summary(); ?>
                            <a class="font-sans lowercase" href="<?= $item->url() ?>" title="<?= $item->title() ?>">Read More</a>
                        </div>
                    </div>
                </article>
            </li>
        <?php endforeach; ?>
    </ul>

</section>
