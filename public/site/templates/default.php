<?php snippet('header') ?>

<main class="main" id="main">
    <div class="o-container">
        <article class="o-grid mb-three">
            <header class="o-grid__cell">
                <h1 class="fs-giga titlefont mb-three b-top--solid b-hair pt-one"><?= $page->title()->html() ?></h1>
            </header>
            <div class="s-generated o-grid__cell o-grid__cell--5of8--tab o-grid__cell--6of12--desk"><?= $page->text()->kt() ?></div>
            <div class="o-grid__cell o-grid__cell--3of8--tab o-grid__cell--6of12--desk">
            <?php snippet('gallery'); ?>
            </div>
        </article>
    </div>
</main>

<?php snippet('footer') ?>