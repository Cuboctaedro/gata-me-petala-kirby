<?php snippet('header') ?>
<main class="main objectlist">
    <div class="o-container">
        <article class="o-grid mb-three">
            <header class="o-grid__cell">
                <h1 class="fs-giga titlefont mb-three b-top--solid b-hair pt-one"><?= $page->title()->html() ?></h1>
            </header>
            <div class="s-generated o-grid__cell o-grid__cell--6of8--tab o-grid__cell--6of12--desk">
                <?= $page->text()->kt() ?>
            </div>
        </article>
        <section class=" mb-three o-grid" >
        <?php foreach($page->children() as $item): ?>
            <article class="o-grid__cell o-grid__cell--4of8--tab o-grid__cell--4of12--desk c-card">
                <a href="<?= $item->url() ?>">
                    <div class="c-card__image o-aspect-ratio--landscape" style="background-image: url(<?= $item->featuredimage()->toFile()->resize(310, 310)->url() ?>);" >
                        <img class="visually-hidden" src="<?= $item->featuredimage()->toFile()->resize(310, 310)->url() ?>">
                    </div>
                    <div class="c-card__title">
                        <h3 class="ta--center pt-one pb-one"><?= $item->title()->html() ?></h3>
                    </div>
                </a>
            </article>
                <?php endforeach; ?>
        </section>
    </div>
</main>

<?php snippet('footer') ?>