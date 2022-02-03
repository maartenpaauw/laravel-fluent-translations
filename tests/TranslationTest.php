<?php

declare(strict_types=1);

use Maartenpaauw\Translation\Translation;

it('should be possible to generate a singular and plural translation message', function () {
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

it('should be possible to to generate count aware translation messages', function () {
    // Act
    $message = Translation::exact(0, 'There are none')
        ->range(1, 19, 'There are some')
        ->from(20, 'There are many')
        ->toString();

    expect($message)->toEqual('{0} There are none|[1,19] There are some|[20,*] There are many');
});
