<!doctype html>
<html lang="<?= $kirby->language()->code() ?>">
<head>
    <title><?= e(!$page->isHomePage(), $page->title(). ' | ' , '') ?><?= $site->title() ?></title>
    <meta name="Description" content="<?= e(!$page->isHomePage(), $page->description() , $site->description() ) ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="<?= $page->url() ?>"/>
    <?php if($kirby->multilang()): ?>
        <?php foreach($kirby->languages() as $lang): ?>
            <link rel="alternate" hreflang="<?= $lang->code() ?>" href="<?= $page->url($lang->code()) ?>" />
        <?php endforeach; ?>
    <?php endif; ?>
    <?php snippet('meta');?>

    <?php
    // snippet('fontscript');
    ?>
    <link href="https://fonts.googleapis.com/css?family=Exo+2:400,400i,900&display=swap" rel="stylesheet">

    <?= mix('/app.css') ?>
</head>

<body class="ff-sans fs-16 lh-150">

    <a class="skip-link" href="#main">Skip to content</a>

    <div class="site">

        <div class="site__header navbar md__container gutter">
            <?php if($page->isHomePage()): ?>
                <h1 class="navbar__title gutter">
                    <a href="<?= $site->url() ?>"><?= $site->title() ?></a>
                </h1>
            <?php else: ?>
                <span class="navbar__title gutter"><a href="<?= $site->url() ?>"><?= $site->title() ?></a></span>
            <?php endif; ?>
            <?php snippet('nav/single'); ?>
        </div>

        <main class="site__main" id="main">
