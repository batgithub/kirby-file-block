<?php if ($files = $block->file()->toFile()): ?>
<div class="files-wrapper">
    <?= $files ?>
</div>
<?php endif ?>