<?php

declare(strict_types=1);

namespace Maartenpaauw\Translation\Count;

final class FromCountMessage implements CountAwareMessageContract
{
    public function __construct(
        private int $from,
        private string $message,
    ) {
    }

    public function __toString(): string
    {
        return sprintf(
            '[%d,*] %s',
            $this->from,
            $this->message,
        );
    }
}
