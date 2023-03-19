<?php

namespace Takiwos\YegaraSms\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Takiwos\YegaraSms\YegaraSms
 */
class YegaraSms extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Takiwos\YegaraSms\YegaraSms::class;
    }
}
