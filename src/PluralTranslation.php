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
        return new self(
            $message,
            $this->plural,
        );
    }

    public function plural(string $message): PluralTranslation
    {
        return new self(
            $this->singular,
            $message,
        );
    }

    public function toString(): string
    {
        return "$this->singular|$this->plural";
    }

    public function __toString(): string
    {
        return $this->toString();
    }
}
