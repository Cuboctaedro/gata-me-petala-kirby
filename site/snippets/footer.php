        </main>

        <footer class="flex-none container gutter pb-12" id="contact">
            <div class="gutter w-full flex-none mb-3">
                <hr class="w-full h-0 block border-t border-solid border-red-600 py-0 m-0" />
            </div>
            <?php $contact = $pages->find('contact'); ?>
            <div class="flex flex-row flex-wrap justify-end">
                <?php foreach ($contact->contactblocks()->toStructure() as $block): ?>
                    <div class="gutter w-full md:w-1/2 lg:w-1/3 xl:w-1/4 mb-12">
                        <h3 class="heading-2"><?= $block->title() ?></h3>
                        <div class="generated">
                            <?= $block->text()->kt() ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </footer>

    </div>
<?= mix('/app.js') ?>
</body>
</html>
