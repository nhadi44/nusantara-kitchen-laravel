<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Auth\Repositories\Interfaces\AuthRepositoryInterfaces;

class AuthController extends Controller
{
    private $authRepository;

    public function __construct(AuthRepositoryInterfaces $authRepository)
    {
        $this->authRepository = $authRepository;
    }

    public function index()
    {
        return view('auth::index');
    }
}
