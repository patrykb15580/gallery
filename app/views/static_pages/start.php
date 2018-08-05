<ul class="catalogs-list">
    <?php foreach (glob('system/catalogs/*') as $path): ?>
        <?php if (is_dir($path)): ?>
            <li class="catalog">
                <a href="?catalog=<?= basename($path) ?>">
                    <?= basename($path) ?>
                </a>
            </li>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>
<div class="images">
    <?php foreach ($catalog->images() as $image): ?>
        <div class="image">
            <img src="/<?= $image ?>" alt="" />
        </div>
    <?php endforeach; ?>
</div>
