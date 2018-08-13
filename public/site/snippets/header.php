<!doctype html>
<html lang="<?= site()->language()->code() ?>">
<head>
    <meta charset="utf-8">
    <?php if($page->isHomePage()): ?>
    <title><?= $site->title() ?></title>
    <?php else: ?>
    <title><?= $page->title() ?> - <?= $site->title() ?></title>
    <?php endif; ?>
    <meta name="description" content="<?= $page->summary() ?>">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <meta name="robots" content="index, follow" />

    <link rel="canonical" href="<?= $page->url() ?>"/>
    <?php foreach($site->languages as $lang): ?>
        <?php if ($lang != site()->language() ): ?>
        <link rel="alternate" hreflang="<?= $lang->code() ?>" href="<?= $page->url($lang->code()) ?>" />
    <?php endif; endforeach; ?>
    <meta property="og:site_name" content="<?= $site->title() ?>" />
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= $page->url() ?>">
    <meta property="og:title" content="<?= $page->title() ?>">
    <meta property="og:description" content="<?= $page->summary() ?>">
    <?php if ($page->hasImages()):?>
        <meta property="og:image" content="<?= $page->images()->first()->url() ?>">
        <meta name="twitter:image" content="<?= $page->images()->first()->url() ?>">
    <?php endif; ?>
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="<?= $page->url() ?>">
    <meta name="twitter:title" content="<?= $page->title() ?>">
    <meta name="twitter:description" content="<?= $page->summary() ?>">

<?php
    if ($page->intendedTemplate() == 'default') {
        snippet('schema/page');
    } elseif ($page->intendedTemplate() == 'item') {
        snippet('schema/item');
    } elseif ($page->intendedTemplate() == 'collection') {
        snippet('schema/list');
    }
?>
    <?php $assetsbaseurl = kirby()->urls()->assets(); ?>
    <link rel="apple-touch-icon" sizes="57x57" href="<?= $assetsbaseurl; ?>/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= $assetsbaseurl; ?>/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= $assetsbaseurl; ?>/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= $assetsbaseurl; ?>/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= $assetsbaseurl; ?>/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= $assetsbaseurl; ?>/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= $assetsbaseurl; ?>/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= $assetsbaseurl; ?>/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $assetsbaseurl; ?>/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?= $assetsbaseurl; ?>/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $assetsbaseurl; ?>/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= $assetsbaseurl; ?>/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $assetsbaseurl; ?>/icons/favicon-16x16.png">
    <link rel="manifest" href="manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?= $assetsbaseurl; ?>/icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:400,700&amp;subset=greek" rel="stylesheet">

    <?= css('assets/css/styles.css'); ?>
</head>
<body itemscope itemtype="http://schema.org/WebPage">
    <p class="visually-hidden"><a href="#main">skip to main content</a></p>

    <nav class="o-bar caps" role="navigation">
        <ul class="o-nav o-nav--h o-bar__last">
        <?php foreach($site->languages() as $language): ?>
        <li>
            <a href="<?= $page->url($language->code()) ?>" class="<?php e($site->language() == $language, ' active') ?>">
                <?= html($language->code()) ?>
            </a>
        </li>
        <?php endforeach ?>
        </ul>

        <button class="o-bar__first o-bar__button js-navbar__toggle none--tab caps" type="button" id="js-navbar__toggle">Menu</button>

        <?php $menupages = $site->pages()->visible(); ?>

        <ul class="o-nav o-nav--v o-nav--h--tab o-bar__extended js-navbar__toggle-target">

        <?php foreach ($menupages as $item):?>
        <?php if ($item->hasChildren() && $item->intendedTemplate() != 'blog'): ?>

            <li class="js-dropdown--click">
                <a href="#" class="js-dropdown__button"><?= $item->title() ; ?></a>
                <ul class="js-dropdown__target js-dropdown__target--push js-dropdown__target--overlay--tab o-nav o-nav--v o-nav__subnav">
                    <?php foreach ($item->children() as $sub):?>
                        <li><a href="<?= $sub->url() ; ?>" class="<?php e($sub->isOpen(), ' active') ?>"><?= $sub->title() ; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </li>

        <?php else: ?>

            <li class="">
            <a href="<?= $item->url() ; ?>" class="<?php e($item->isOpen(), ' active') ?>"><?= $item->title() ; ?></a>
            </li>

        <?php endif; ?>
        <?php endforeach; ?>
        </ul>
    </nav>

    <div class="pt-nine">
        <div class="o-container mb-six">
            <header id="header" class="o-grid" role="banner">
            <?php if ($page->isHomePage()): ?>
                <h1 class="o-grid__cell o-grid__cell--3of4 o-grid__cell--3of8--tab o-grid__cell--3of12--desk">
                    <a href="<?= $site->url() ?>" class="c-sitelogo fill-white">
                        <span class="visually-hidden"><?= $site->title() ?></span>
                        <?php snippet('logo'); ?>
                    </a>
                </h1>
            <?php else: ?>
                <div class="o-grid__cell o-grid__cell--3of4 o-grid__cell--3of8--tab o-grid__cell--3of12--desk">
                    <a href="<?= $site->url() ?>" class="c-sitelogo fill-blue">
                        <span class="visually-hidden"><?= $site->title() ?></span>
                        <?php snippet('logo'); ?>
                    </a>
                </div>
            <?php endif; ?>
            </header>
        </div>


    <div id="main">

