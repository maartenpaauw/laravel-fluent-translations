<?php

declare(strict_types=1);

namespace Maartenpaauw\Translation\Count;

use Stringable;

interface CountAwareMessageContract extends Stringable
{
    public function __toString(): string;
}
