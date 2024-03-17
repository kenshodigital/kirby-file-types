<?php declare(strict_types=1);

return function (): void
{
    $this->extend(
        [
            'fileTypes' => kirby()->option('fileTypes', []),
        ]
    );
};
