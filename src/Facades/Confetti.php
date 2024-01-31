<?php

namespace Karabin\Confetti\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Karabin\Confetti\Confetti
 */
class Confetti extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Karabin\Confetti\Confetti::class;
    }
}
