<?php

declare(strict_types=1);

use Maartenpaauw\Translation\Translation;

it('should be possible to generate a singular and plural translation string', function () {
    // Act
    $message = Translation::singular('There is one apple')
        ->plural('There are many apples')
        ->toString();

    // Assert
    expect($message)->toEqual('There is one apple|There are many apples');
});

it('should not matter what the order of the singular and plural methods are', function () {
    // Act
    $message = Translation::plural('There are many apples')
        ->singular('There is one apple')
        ->toString();

    // Assert
    expect($message)->toEqual('There is one apple|There are many apples');
});
