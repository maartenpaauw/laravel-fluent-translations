<?php

declare(strict_types=1);

namespace Maartenpaauw\Translation;

use Maartenpaauw\Translation\Count\CountAwareMessageContract;
use Maartenpaauw\Translation\Count\ExactCountMessage;
use Maartenpaauw\Translation\Count\FromCountMessage;
use Maartenpaauw\Translation\Count\InRangeMessage;

class CountTranslation implements TranslationContract
{
    /**
     * @param  array<int, CountAwareMessageContract>  $messages
     */
    public function __construct(
        private array $messages = [],
    ) {
    }

    public function exact(int $count, string $message): CountTranslation
    {
        return new CountTranslation(array_merge(
            $this->messages,
            [new ExactCountMessage($count, $message)],
        ));
    }

    public function range(int $from, int $to, string $message): CountTranslation
    {
        return new CountTranslation(array_merge(
            $this->messages,
            [new InRangeMessage($from, $to, $message)],
        ));
    }

    public function from(int $from, string $message): CountTranslation
    {
        return new CountTranslation(array_merge(
            $this->messages,
            [new FromCountMessage($from, $message)],
        ));
    }

    public function __toString()
    {
        return $this->toString();
    }

    public function toString(): string
    {
        return implode('|', $this->messages);
    }
}
