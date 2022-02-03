<?php

declare(strict_types=1);

namespace Maartenpaauw\Translation;

use Stringable;

interface TranslationContract extends Stringable
{
    public function toString(): string;
}
