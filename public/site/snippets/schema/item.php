<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "CreativeWork",
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "<?= $page->uid() ?>"
        },
        "name": "<?= $page->title() ?>",
        <?php foreach ($page->images() as $image): ?>
        "image": {
            "@type": "ImageObject",
            "url": "<?= $image->url() ?>",
            "height": <?= $image->height() ?>,
            "width": <?= $image->width() ?>
        },
        <?php endforeach; ?>
        "description": "<?= $page->text() ?>",
        "url": "<?= $page->url() ?>"
    }
</script>
