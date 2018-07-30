<?php
$menupages = $site->pages()->visible(); 
?>
<nav class="navbar" aria-label="Main navigation">

    <button aria-expanded="false" aria-controls="menu-list">Menu</button>

    <ul class="d-flex fxd-row" id="menu-list">

        <?php foreach ($menupages as $item):?>

            <li>

                <a href="<?= $item->url() ; ?>" class="<?php e($item->isOpen(), ' active') ?>"><?= $item->title() ; ?></a>

            </li>

    <?php endforeach; ?>

    </ul>

</nav>
