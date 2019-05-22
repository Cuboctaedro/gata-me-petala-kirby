<?php
$items = $site->pages()->listed();
if($items->isNotEmpty()):
?>

<nav class="navbar__nav">
    <button class="navbar__button" data-toggle-target="#main-menu">
        <?php snippet('icons/burger'); ?>
        <span class="visually-hidden">Menu</span>
    </button>
    <div class="navbar__popup" id="main-menu">
        <ul>
        <?php foreach($items as $item): ?>
            <li>
                <a class="<?php e($item->isOpen(), ' is-active ') ?>" href="<?= $item->url() ?>"><?= $item->title() ?></a>
            </li>
        <?php endforeach ?>
        </ul>
    </div>
</nav>

<?php endif ?>
