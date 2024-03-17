<?php declare(strict_types=1);

use Kirby\Cms\App;

App::plugin('kensho/file-types', [
    'hooks' => [
        'system.loadPlugins:after' => require __DIR__ . '/hooks/system/load-plugins/after.php',
    ],
]);
