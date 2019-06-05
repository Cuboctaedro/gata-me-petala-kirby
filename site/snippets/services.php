<?php
$services = $site->find('services');
if($page = $services) {
    $servicepage = true;
}
?>
<section class="container gutter">
    <header class="gutter mb-12">
        <?php if($servicepage = true): ?>
            <h1 class="heading-1"><?= $services->title() ?></h1>
        <?php else: ?>
            <h2 class="heading-1"><?= $services->title() ?></h2>
        <?php endif; ?>
    </header>
    <div class="mb-6 sm:mb-12 md:mb-24">
        <ul class="flex flex-row flex-wrap justify-end">
            <?php foreach($services->children() as $item): ?>
                <li class="gutter w-full md:w-1/2 lg:w-1/3 xl:w-1/4">
                    <div class="mb-12">
                        <?php if($servicepage = true): ?>
                            <h2 class="heading-2 mb-6"><?= $item->title() ?></h2>
                        <?php else: ?>
                            <h3 class="heading-2 mb-6"><?= $item->title() ?></h3>
                        <?php endif; ?>
                        <div class="generated">
                            <?= $item->text()->kt(); ?>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
