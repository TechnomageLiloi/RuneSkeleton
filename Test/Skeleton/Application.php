<?php

namespace Skeleton;

use Rune\Application\Conceptual;

/**
 * @inheritDoc
 */
class Application extends Conceptual
{
    public function compile(): string
    {
        return 'Skeleton application';
    }
}