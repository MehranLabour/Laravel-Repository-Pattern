<?php

namespace App\Http\Controllers;

use App\ApplicationService\User\UserServiceInterface;
use Illuminate\Http\Request;
use App\DomainService\User\UserRepositoryInterface;

class UserController extends Controller
{
    private $userRepository;
    private $userService;
    private $userDomain;

    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        return response()->json($this->userService->all(), 200);
    }
}
