<?php

declare(strict_types=1);

namespace Maartenpaauw\Translation;

class PluralTranslation implements TranslationContract
{
    public function __construct(
        private string $singular = '',
        private string $plural = '',
    ) {
    }

    public function singular(string $message): PluralTranslation
    {
        return new PluralTranslation(
            $message,
            $this->plural,
        );
    }

    public function plural(string $message): PluralTranslation
    {
        return new PluralTranslation(
            $this->singular,
            $message,
        );
    }

    public function __toString(): string
    {
        return $this->toString();
    }

    public function toString(): string
    {
        return "$this->singular|$this->plural";
    }
}
