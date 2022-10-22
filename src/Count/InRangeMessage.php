<?php

declare(strict_types=1);

namespace Maartenpaauw\Translation\Count;

final class InRangeMessage implements CountAwareMessageContract
{
    public function __construct(
        private int $from,
        private int $to,
        private string $message,
    ) {
    }

    public function __toString(): string
    {
        return sprintf(
            '[%d,%d] %s',
            $this->from,
            $this->to,
            $this->message,
        );
    }
}
