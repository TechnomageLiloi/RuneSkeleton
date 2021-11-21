<?php

namespace Base;

use Rune\Application\Conceptual;

/**
 * @inheritDoc
 */
class Application extends Conceptual
{
    public function compile(): string
    {
        return 'Base application';
    }
}