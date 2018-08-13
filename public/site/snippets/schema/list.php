<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "ItemList",
        "itemListElement": [
            <?php
            $length = $page->children()->count();
            $position = 0;
            ?>
            <?php foreach ($page->children() as $child):?>
            {
                "@type": "ListItem",
                <?php $position = $position + 1 ; ?>
                "position": <?= $position ?>,
                "url": "<?= $child->url() ?>"
            }
            <?php if($position < $length): ?>
            ,
            <?php endif; ?>
            <?php endforeach; ?>
        ]
    }
</script>
