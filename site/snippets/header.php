<!doctype html>
<html lang="<?= $kirby->language()->code() ?>">
<head>
    <title><?= e(!$page->isHomePage(), $page->title(). ' | ' , '') ?><?= $site->title() ?></title>
    <meta name="Description" content="<?= $page->metadescription()?>">
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
    <link rel="stylesheet" href="https://use.typekit.net/oij5uex.css">

    <!-- <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:400,400i,800&display=swap&subset=greek" rel="stylesheet"> -->

    <?= mix('/app.css') ?>
    <?= mix('/baguetteBox.css') ?>
</head>

<body class="font-sans text-base text-black bg-bluegray-500 <?php e($page->isHomePage(), ' bg-center bg-no-repeat bg-cover' , '') ?>" <?php if($page->isHomePage()): ?> style="background-image:url('<?= $page->featuredimage()->toFile()->url()?>');" <?php endif; ?> >

    <a class="skip-link" href="#main">Skip to content</a>

    <div class="flex flex-col min-h-screen flex-none ">

        <div class="fixed w-full flex-none flex flex-row flex-wrap justify-between  h-12 mb-6 sm:mb-12 bg-teal-500 shadow-2xl text-white z-10">
            <?php snippet('nav/single'); ?>
            <?php snippet('nav/languages'); ?>
        </div>

        <main class="flex-auto pt-24" id="main">
            <div class="container mb-12 md:mb-24 gutter">
                <a class="block gutter w-full md:w-1/2 lg:w-1/3 xl:w-1/4 max-w-sm" href="<?= $site->url() ?>" title="Home Page">
                    <?php snippet('logo'); ?>
                </a>
            </div>
