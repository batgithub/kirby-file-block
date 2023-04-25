<?php

Kirby::plugin('baptiste/file-block', [
    'blueprints' => [
        'blocks/file' => __DIR__ . '/blueprints/blocks/file.yml',
        'files/download-file'  => __DIR__ . '/blueprints/files/download-file.yml',
    ],
    'snippets' => [
        'blocks/file' => __DIR__ . '/snippets/blocks/file.php',
    ],
    'tranlations' => [
        'fr' => require 'languages/fr.php'
    ]
]);