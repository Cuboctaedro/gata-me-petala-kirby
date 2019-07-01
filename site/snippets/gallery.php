<?php if($page->imagegallery()): ?>
<div class="imagegallery" >
    <?php foreach($page->imagegallery() as $image): ?>
        <a data-caption="<?= $image->caption() ?>" href="<?= $image->url() ?>"  class=" block gutter w-full mb-8">
            <img src="<?= $image->thumb([
                'width'   => 720,
                'height'  => 540,
                'quality' => 80,
                'crop'    => true
            ])->url() ?>" alt="<?= $image->caption() ?>" class="block w-full card-thumb">
        </a>
    <?php endforeach; ?>
</div>
<?php endif; ?>
