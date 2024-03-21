<?php declare(strict_types=1);

return function (): void
{
    $this->extend(
        [
            'fileTypes' => $this->option('fileTypes', []),
        ]
    );
};
