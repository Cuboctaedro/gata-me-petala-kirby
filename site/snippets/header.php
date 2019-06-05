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

    <link rel="stylesheet" href="https://use.typekit.net/ytb8mdx.css">

    <?= mix('/app.css') ?>
</head>

<body class="font-sans text-base text-gray-900 bg-white border-8 border-solid border-gray-200">

    <a class="skip-link" href="#main">Skip to content</a>

    <div class="flex flex-col min-h-screen flex-none">

        <div class="container gutter flex flex-row flex-wrap justify-between items-center pt-2 mb-6 sm:mb-12 md:mb-24">
            <?php if($page->isHomePage()): ?>
                <h1 class="gutter">
                    <a class="font-titles font-bold text-2xl" href="<?= $site->url() ?>"><?= $site->title() ?></a>
                </h1>
            <?php else: ?>
                <span class="gutter"><a class="font-titles font-bold text-2xl" href="<?= $site->url() ?>"><?= $site->title() ?></a></span>
            <?php endif; ?>
            <?php snippet('nav/single'); ?>
            <!-- <div class="w-full flex-none gutter">
                <hr class="w-full h-0 block border-t border-solid border-gray-600 py-0 m-0" />
            </div> -->
        </div>

        <main class="flex-auto" id="main">
