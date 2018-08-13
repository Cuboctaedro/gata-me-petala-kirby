<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "WebPage",
        "name": "<?= $page->title() ?>",
        <?php foreach ($page->images() as $image): ?>
        "image": {
            "@type": "ImageObject",
            "url": "<?= $image->url() ?>",
            "height": <?= $image->height() ?>,
            "width": <?= $image->width() ?>
        },
        <?php endforeach; ?>
"description": "<?= $page->summary() ?>"
    }
</script>
