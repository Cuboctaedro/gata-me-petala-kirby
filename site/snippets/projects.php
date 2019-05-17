<?php
$projects = $site->find('work');
if($page = $projects) {
    $projectspage = true;
}
?>
<section class="services section">
    <?php if($projectspage = true): ?>
        <h1 class="section__title"><?= $projects->title() ?></h1>
    <?php else: ?>
        <h2 class="section__title">
            <a href="<?= $projects->url() ?>"><?= $projects->title() ?></a>
        </h2>
    <?php endif; ?>
    <div class="section__list">
        <ul>
            <?php foreach($projects->children() as $item): ?>
                <li>
                    <div class="card">
                        <?php if($item->coverimage() != false): ?>
                            <div class="card__image">
                                <img src="<?= $item->coverimage()->url() ?>"  />
                            </div>
                        <?php endif; ?>
                        <?php if($projectspage = true): ?>
                            <h2 class="card__title">
                                <a href="<?= $item->url() ?>" class="card__link"><?= $item->title() ?></a>
                            </h2>
                        <?php else: ?>
                            <h3 class="card__title">
                                <a href="<?= $item->url() ?>" class="card__link"><?= $item->title() ?></a>
                            </h3>
                        <?php endif; ?>
                        <div class="card__text">
                            <?= $page->summary(); ?>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
