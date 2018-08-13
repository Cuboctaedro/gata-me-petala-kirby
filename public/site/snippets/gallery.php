<div class="lightbox-gallery">
<?php foreach ($page->images() as $element): ?>
<?php
    $image = $element->resize(310,310);
    $bigimage = $element->resize(1200); 
?>
    <a href="<?= $bigimage->url() ?>" >
    <?php if ($element->width() > $element->height()): ?>
    <figure class="o-grid__cell o-grid__cell--2of3--desk c-card" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
        <div class="c-card__image o-aspect-ratio--landscape" style="background-image: url(<?= $image->url() ?>);">
            <img class="visually-hidden" src="<?= $image->url() ?>" alt="<?= $element->name() ?>">
        </div>
    </figure>
    <?php elseif ($element->width() < $element->height()): ?>
    <figure class="o-grid__cell o-grid__cell--2of3--desk c-card" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
        <div class="c-card__image o-aspect-ratio--landscape"  style="background-image: url(<?= $image->url() ?>);">
            <img class="visually-hidden" src="<?= $image->url() ?>" alt="<?= $element->name() ?>">
        </div>
    </figure>
    <?php else: ?>
    <figure class="o-grid__cell o-grid__cell--1of2--desk c-card" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
        <div class="c-card__image o-aspect-ratio--landscape"  style="background-image: url(<?= $image->url() ?>);">
            <img class="visually-hidden" src="<?= $image->url() ?>" alt="<?= $element->name() ?>">
        </div>
    </figure>
    <?php endif; ?>
    </a>
<?php endforeach; ?>
</div>