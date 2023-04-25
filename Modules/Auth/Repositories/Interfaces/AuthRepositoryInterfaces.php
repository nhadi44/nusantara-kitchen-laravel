<?php

namespace Modules\Auth\Repositories\Interfaces;

interface AuthRepositoryInterfaces
{
    public function login($request);
    public function register($request);
}
