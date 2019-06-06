<?php
$items = $site->pages()->listed();
if($items->isNotEmpty()):
?>

<nav aria-label="Main Menu" class="gutter relative">
    <button class="h-6 block md:hidden" aria-expanded="false" data-toggle-menu="#main-menu" title="Menu Toggle">
        <?php snippet('icons/burger'); ?>
        <span class="visually-hidden">Menu</span>
    </button>
    <ul class="absolute md:static hidden md:flex right-0 bg-gray-100 md:bg-transparent shadow-2xl md:shadow-none md:flex-row mt-3 md:mt-0 mr-4 md:mr-0 lowercase text-center md:text-left" id="main-menu">
    <?php foreach($items as $item): ?>
        <li class="md:pl-6 hover:bg-gray-200 md:hover:bg-transparent">
            <a class="px-12 py-4 inline-block md:px-0 md:py-0  <?php e($item->isOpen(), ' text-black ') ?>" href="<?= $item->url() ?>"><?= $item->title() ?></a>
        </li>
    <?php endforeach ?>
        <li class="md:pl-6 hover:bg-gray-200 md:hover:bg-transparent">
            <a class="px-12 py-4 inline-block md:px-0 md:py-0 " href="#contact">Contact</a>
        </li>

    </ul>
</nav>

<?php endif ?>
