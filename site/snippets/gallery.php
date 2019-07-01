<?php if($page->imagegallery()): ?>
<?php foreach($page->imagegallery() as $image): ?>
    <a class="glightbox block gutter w-full mb-8" href="<?= $image->url() ?>">
        <img src="<?= $image->thumb([
            'width'   => 720,
            'height'  => 540,
            'quality' => 80,
            'crop'    => true
        ])->url() ?>" class="block w-full card-thumb"  />
    </a>
<?php endforeach; ?>
<?php endif; ?>
