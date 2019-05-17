<?php
$services = $site->find('services');
if($page = $services) {
    $servicepage = true;
}
?>
<section class="services section">
    <?php if($servicepage = true): ?>
        <h1 class="section__title"><?= $services->title() ?></h1>
    <?php else: ?>
        <h2 class="section__title">
            <a href="<?= $services->url() ?>"><?= $services->title() ?></a>
        </h2>
    <?php endif; ?>
    <div class="section__list">
        <ul>
            <?php foreach($services->children() as $item): ?>
                <li>
                    <div class="card">
                        <?php if($servicepage = true): ?>
                            <h2 class="card__title">
                                <a href="<?= $item->url() ?>" class="card__link"><?= $item->title() ?></a>
                            </h2>
                        <?php else: ?>
                            <h3 class="card__title">
                                <a href="<?= $item->url() ?>" class="card__link"><?= $item->title() ?></a>
                            </h3>
                        <?php endif; ?>
                        <div class="card__text">
                            <?= $item->text()->kt(); ?>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
