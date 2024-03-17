# File Types for Kirby

Adds additional [supported file types][1] from [configuration][2] to [Kirby][3] projects.

## General

Kirby offers plenty of [configuration options][4] to modify the system’s behavior in an easy and straightforward way based on your project specific requirements. Registering additional file types, however, requires the [creation of a dedicated plugin][5] by default.

This is actually easy enough, but still feels like overkill sometimes. So this plugin adds file types to the configuration options.

## Installation

```shell
composer require kenshodigital/kirby-file-types ^1.0
```

## Usage

Just add your file types directly to your `config.php`. 

This example adds support for [WebVTT][6] files to you project:

```php
<?php declare(strict_types=1); 

return [
    'fileTypes' => [
        'vtt' => [
            'mime' => 'text/vtt',
            'type' => 'document',
        ],
    ],
    ...
];
```

[1]: https://getkirby.com/docs/guide/files#supported-file-types
[2]: https://getkirby.com/docs/guide/configuration
[3]: https://getkirby.com
[4]: https://getkirby.com/docs/guide/configuration#using-options__all-configuration-options
[5]: https://getkirby.com/docs/reference/plugins/extensions/file-types#registering-a-new-file-type
[6]: https://developer.mozilla.org/en-US/docs/Web/API/WebVTT_API
