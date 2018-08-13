<?php snippet('header') ?>

<main class="main" id="main">
    <div class="o-container">
        <article class="o-grid mb-three">
            <header class="o-grid__cell">
                <h1 class="fs-giga titlefont mb-three b-top--solid b-hair pt-one"><?= $page->title()->html() ?></h1>
            </header>
            <div class="s-generated o-grid__cell o-grid__cell--4of12--desk"><?= $page->text()->kt() ?></div>
            <div class="o-grid__cell o-grid__cell--8of12--desk">
                <div class="map-wrapper">
                    <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Asklipiou+12,+Athens,+Greece&amp;aq=0&amp;oq=askliou+12&amp;sll=37.0625,-95.677068&amp;sspn=55.060677,114.169922&amp;ie=UTF8&amp;hq=&amp;hnear=Asklipiou+12,+Athina+106+80,+Greece&amp;t=m&amp;ll=37.982363,23.735962&amp;spn=0.03112,0.072098&amp;z=14" target="_blank">
                        <img src="<?= $page->map()->toFile()->url() ?>" />
                    </a>
            </div>
        </article>
    </div>
</main>
<?php snippet('footer') ?>