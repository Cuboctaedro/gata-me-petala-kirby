<?php snippet('header') ?>

<?php if ($page->background()->isNotEmpty()):?>
<div class="none block--tab fixed top-zero bottom-zero left-zero right-zero" style="background-image: url(<?= $page->background()->toFile()->thumb(['width' => 1800, 'quality' => 80])->url() ?>); background-size:cover; z-index:-1; background-position:center;"></div>
<div class="block none--tab fixed top-zero bottom-zero left-zero right-zero" style="background-image: url(<?= $page->background()->toFile()->thumb(['width' => 800, 'quality' => 80])->url() ?>); background-size:cover; z-index:-1; background-position:center;"></div>
<?php endif; ?>

<main class="main" id="main">
    <div class="o-container">
        <article class="o-grid">
            <div class="o-grid__cell o-grid__cell--6of12--desk fs-large fw-3 c-white">
                <div class="c-overlay-box">
                    <?= $page->text()->kt() ?>
                </div>
            </div>
        </article>
        <?php 
        $blog = $pages->findBy('intendedTemplate', 'blog'); 
        $post = $blog->children()->sortBy('date', 'desc')->first(); 
        ?>
            <article class="o-grid">
                <div class="o-grid__cell o-grid__cell--6of12--desk fs-large fw-3 c-white">
                    <a href="<?= $post->url() ?>">
                        <div class="c-overlay-box">
                            <header class="">
                                <h2 class="fs-large boldfont mb-one b-top--solid b-hair pt-one b-blue"><?= $post->title() ?></h2>
                            </header>
                            <div class="s-generated ">
                                <div class="c-white"><?= $post->summary() ?></div>
                            </div>
                        </div>
                    </a>
                </div>
            </article>
    </div>

</main>
<?php snippet('footer') ?>