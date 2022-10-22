<?php

declare(strict_types=1);

use Maartenpaauw\Translation\PluralTranslation;

it('should be possible to generate singular and plural combined translation messages', function () {
    // Act
    $message = (new PluralTranslation())
        ->singular('There is one apple')
        ->plural('There are many apples');

    // Assert
    expect($message)->toEqual('There is one apple|There are many apples');
});
