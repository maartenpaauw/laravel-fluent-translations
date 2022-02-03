<?php

declare(strict_types=1);

namespace Maartenpaauw\Translation;

class Translation
{
    public static function singular(string $message = ''): PluralTranslation
    {
        return new PluralTranslation($message);
    }

    public static function plural(string $message = ''): PluralTranslation
    {
        return new PluralTranslation('', $message);
    }
}
