<?php if ($file = $block->file()->toFile()): ?>
    <a href="<?= $file->url() ?>" class="file-wrapper">
        <?= $block->doctitle()->isNotEmpty() ? $block->doctitle() : $file->filename(); ?> -
        <?= $file->niceSize() ?>
    </a>
<?php endif ?>
