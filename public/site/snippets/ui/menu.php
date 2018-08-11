<?php
$menupages = $site->pages()->visible(); 
?>
<nav class="navbar" aria-label="Main navigation">

    <button aria-expanded="false" aria-controls="menu-list" class="h-6 pl-1 pr-1 fl-left d-block lg__d-none">Menu</button>

    <ul class="d-flex fxd-row" id="menu-list">

        <?php foreach ($menupages as $item):?>

        <?php if ($item->hasChildren() && $item->intendedTemplate() != 'blog'): ?>

            <li>

                <a href="#" class="<?php e($item->isOpen(), ' active') ?> has-dropdown"><?= $item->title() ; ?></a>

                <ul class="submenu">
                    <?php foreach ($item->children() as $sub):?>
                        <li><a href="<?= $sub->url() ; ?>" class="<?php e($sub->isOpen(), ' active') ?>"><?= $sub->title() ; ?></a></li>
                    <?php endforeach; ?>
                </ul>

            </li>

        <?php else: ?>

            <li>

                <a href="<?= $item->url() ; ?>" class="<?php e($item->isOpen(), ' active') ?>"><?= $item->title() ; ?></a>

            </li>

        <?php endif; ?>

    <?php endforeach; ?>

    </ul>

</nav>
