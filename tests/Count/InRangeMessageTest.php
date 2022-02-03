<?php

declare(strict_types=1);

use Maartenpaauw\Translation\Count\InRangeMessage;

it('should convert to the correct syntax', function () {
    // Act
    $message = new InRangeMessage(1, 19, 'There are some');

    // Assert
    expect($message)->toEqual('[1,19] There are some');
});
