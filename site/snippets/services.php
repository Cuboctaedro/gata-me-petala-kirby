<?php
$services = $site->find('services');
if($page = $services) {
    $servicepage = true;
}
?>
<section class="services section md__container gutter">
    <header class="gutter section__header">
        <?php if($servicepage = true): ?>
            <h1 class="heading-1"><?= $services->title() ?></h1>
        <?php else: ?>
            <h2 class="heading-1"><?= $services->title() ?></h2>
        <?php endif; ?>
    </header>
    <div class="section__content">
        <ul class="section__list">
            <?php foreach($services->children() as $item): ?>
                <li class="gutter section__listitem">
                    <div class="service">
                        <?php if($servicepage = true): ?>
                            <h2 class="service__title heading-3"><?= $item->title() ?></h2>
                        <?php else: ?>
                            <h3 class="service__title heading-3"><?= $item->title() ?></h3>
                        <?php endif; ?>
                        <div class="service__text">
                            <?= $item->text()->kt(); ?>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
