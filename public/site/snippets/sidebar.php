<aside>
<?php foreach($pages->find('sidebar-widgets')->children() as $widget): ?>
    <section>
        <h2><?= $widget->title() ?></h2>
        <div><?= $widget->text()->kt() ?></div>
    </section>
<?php endforeach; ?>
</aside>