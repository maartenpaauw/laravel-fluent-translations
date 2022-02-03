<?php

declare(strict_types=1);

use Maartenpaauw\Translation\Count\FromCountMessage;

it('should convert to the correct syntax', function () {
    // Act
    $message = new FromCountMessage(20, 'There are many');

    // Assert
    expect($message)->toEqual('[20,*] There are many');
});
