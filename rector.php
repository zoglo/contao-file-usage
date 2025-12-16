<?php

declare(strict_types=1);

use Contao\Rector\Set\SetList;
use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withSets([SetList::CONTAO])
    ->withPaths([
        __DIR__.'/contao',
        __DIR__.'/src',
        __DIR__.'/templates',
    ])
    ->withParallel()
    ->withCache(sys_get_temp_dir().'/rector_cache')
;
