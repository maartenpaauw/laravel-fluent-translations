<?php

declare(strict_types=1);

use Maartenpaauw\Translation\Count\ExactCountMessage;

it('should convert to the correct syntax', function () {
    // Act
    $message = new ExactCountMessage(0, 'There are none');

    // Assert
    expect($message)->toEqual('{0} There are none');
});
