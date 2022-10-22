<?php

declare(strict_types=1);

use Maartenpaauw\Translation\CountTranslation;

it('should be possible to generate count aware translation messages', function () {
    // Act
    $message = (new CountTranslation())->exact(0, 'There are none')
        ->range(1, 19, 'There are some')
        ->from(20, 'There are many');

    expect($message)->toEqual('{0} There are none|[1,19] There are some|[20,*] There are many');
});
