<?php

namespace Serenaon\User\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Serenaon\User\User
 */
class User extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Serenaon\User\User::class;
    }
}
