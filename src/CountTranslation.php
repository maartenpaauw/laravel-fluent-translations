<?php

declare(strict_types=1);

namespace Maartenpaauw\Translation;

use Maartenpaauw\Translation\Count\CountAwareMessageContract;
use Maartenpaauw\Translation\Count\ExactCountMessage;
use Maartenpaauw\Translation\Count\FromCountMessage;
use Maartenpaauw\Translation\Count\InRangeMessage;

final class CountTranslation implements TranslationContract
{
    /**
     * @param array<array-key, CountAwareMessageContract> $messages
     */
    public function __construct(
        private array $messages = [],
    ) {
    }

    public function exact(int $count, string $message): self
    {
        return $this->merge(new ExactCountMessage($count, $message));
    }

    public function range(int $from, int $to, string $message): self
    {
        return $this->merge(new InRangeMessage($from, $to, $message));
    }

    public function from(int $from, string $message): self
    {
        return $this->merge(new FromCountMessage($from, $message));
    }

    private function merge(CountAwareMessageContract $message): self
    {
        return new self([
            ...$this->messages,
            $message,
        ]);
    }

    public function __toString(): string
    {
        return $this->toString();
    }

    public function toString(): string
    {
        return implode('|', $this->messages);
    }
}
