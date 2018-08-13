<?php snippet('header') ?>

<main class="main" id="main">
    <div class="o-container">
        <section class="o-grid mb-three">
            <header class="o-grid__cell">
                <h1 class="fs-giga titlefont mb-three b-top--solid b-hair pt-one"><?= $page->title()->html() ?></h1>
            </header>
        </section>
    <?php foreach($articles as $item): ?>
    <article class="o-grid mb-three">
        <div class="o-grid__cell o-grid__cell--6of8--tab o-grid__cell--8of12--desk">
            <time><?= $item->format_date() ?></time>
            
           <header class="">
                <h2 class="postheader fs-mega titlefont mb-one b-top--solid b-hair pt-one b-blue">
                    <a href="<?= $item->url() ?>"><?= $item->title() ?></a>
                </h2>
            </header>
            <div class="s-generated "><?= $item->summary() ?></div>
        </div>
    </article>
    <?php endforeach; ?>
</div>
</main>

<?php snippet('footer') ?>