<nav class="share" aria-labelledby="share-header">

    <h3 id="share-header">Share: </h3>

    <ul>

        <li class="twitter"><!--Twitter-->
            <a title="Tweet it" target="_blank" href="https://twitter.com/share?url=<?= $page->url() ?>&text=<?= $page->title() ?>">Tweet it</a>
        </li>

        <li class="facebook"><!--Facebook-->
            <a target="_blank" title="Share it" href="http://www.facebook.com/sharer.php?u=<?= $page->url() ?>">Share on Facebook</a>
        </li>

        <?php if($page->featuredimage()->isNotEmpty()): ?>
        <li class="pinterest"><!--Pinterest-->
            <a title="Pin it" href="https://pinterest.com/pin/create/bookmarklet/?media=<?= $page->featuredimage()->toFile()->url() ?>&url=<?= $page->url() ?>&description=<?= $page->title() ?>" >Pin it</a>
        </li>
        <?php endif; ?>

        <li class="linkedin"><!--Linkedin-->
            <a target="_blank" title="Share on LinkedIn" href="http://www.linkedin.com/shareArticle?url=<?= $page->url() ?>&title=<?= $page->title() ?>">Share on LinkedIn</a>
        </li>

    </ul>

</nav>
