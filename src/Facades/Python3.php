<?php

namespace diaeai\LaravelPython3\Facades;

use Illuminate\Support\Facades\Facade;

class Python3 extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'python3';
    }

}
