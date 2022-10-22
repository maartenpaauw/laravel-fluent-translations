<?php

declare(strict_types=1);

namespace Maartenpaauw\Translation;

use Maartenpaauw\Translation\Count\ExactCountMessage;
use Maartenpaauw\Translation\Count\FromCountMessage;
use Maartenpaauw\Translation\Count\InRangeMessage;

final class Translation
{
    public static function singular(string $message): PluralTranslation
    {
        return new PluralTranslation($message);
    }

    public static function plural(string $message): PluralTranslation
    {
        return new PluralTranslation('', $message);
    }

    public static function exact(int $count, string $message): CountTranslation
    {
        return new CountTranslation([
            new ExactCountMessage($count, $message),
        ]);
    }

    public static function range(int $from, int $to, string $message): CountTranslation
    {
        return new CountTranslation([
            new InRangeMessage($from, $to, $message),
        ]);
    }

    public static function from(int $from, string $message): CountTranslation
    {
        return new CountTranslation([
            new FromCountMessage($from, $message),
        ]);
    }
}
