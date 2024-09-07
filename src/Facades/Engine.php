<?php

namespace XMultibyte\Engine\Facades;

use Illuminate\Support\Facades\Facade;

class Engine extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'engine';
    }
}