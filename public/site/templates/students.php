<?php snippet('header') ?>
<main class="main">
    <?php foreach($page->children() as $child): ?>
        <section class="o-container mb-three">
            <div class="o-grid">
                <header class="o-grid__cell">
                    <h2 class="fs-giga titlefont mb-three b-top--solid b-hair pt-one"><?= $child->title() ?></h2>
                </header>
            </div>
            <div class="o-grid mb-nine lightbox-gallery" itemscope itemtype="http://schema.org/ImageGallery">
            <?php foreach($child->images() as $element): ?>
            <?php $image = $element->resize(310, 310); ?>
                <?php if ($element->width() > $element->height()): ?>
                <a href="<?= $element->url() ?>" class="o-grid__cell o-grid__cell--4of8--tab o-grid__cell--4of12--desk c-card" data-caption="<?= $element->caption() ?>">
                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                    <div class="c-card__image o-aspect-ratio--landscape"  style="background-image: url(<?= $image->url() ?>);">
                        <img class="visually-hidden" src="<?= $image->url() ?>" alt="<?= $element->caption() ?>">
                    </div>
                </figure>
                </a>
                <?php elseif ($element->width() < $element->height()): ?>
                <a href="<?= $element->url() ?>" class="o-grid__cell o-grid__cell--2of8--tab o-grid__cell--2of12--desk c-card" data-caption="<?= $element->caption() ?>">
                <figure  itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                    <div class="c-card__image o-aspect-ratio--portrait"  style="background-image: url(<?= $image->url() ?>);">
                        <img class="visually-hidden" src="<?= $image->url() ?>" alt="<?= $element->caption() ?>">
                    </div>
                </figure>
                </a>
                <?php else: ?>
                <a href="<?= $element->url() ?>" class="o-grid__cell o-grid__cell--3of8--tab o-grid__cell--3of12--desk c-card" data-caption="<?= $element->caption() ?>">
                <figure  itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                    <div class="c-card__image o-aspect-ratio--square"  style="background-image: url(<?= $image->url() ?>);">
                        <img class="visually-hidden" src="<?= $image->url() ?>" alt="<?= $element->caption() ?>">
                    </div>
                </figure>
                </a>
                <?php endif; ?>
            <?php endforeach; ?>
            </div>
        </section>
    <?php endforeach;?>
</main>
<?php snippet('footer') ?>