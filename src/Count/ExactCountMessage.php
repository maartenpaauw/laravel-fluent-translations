<?php

declare(strict_types=1);

namespace Maartenpaauw\Translation\Count;

final class ExactCountMessage implements CountAwareMessageContract
{
    public function __construct(
        private int $count,
        private string $message,
    ) {
    }

    public function __toString(): string
    {
        return sprintf(
            '{%d} %s',
            $this->count,
            $this->message,
        );
    }
}
