<?php if ($file = $block->file()->toFile()): ?>
    <a href="<?= $file->url() ?>" class="file-wrapper">
        <?= $file->filename() ?> -
        <?= $file->niceSize() ?>
    </a>
<?php endif ?>

