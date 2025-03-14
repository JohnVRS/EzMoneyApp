<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    protected $userController;
    public function __construct(UserController $userController) {
        $this->userController = $userController;
    }
    
        
    /*
    public function index(){
        $userId = auth()->id();
        $name = $this->userController->showName($userId);
        $balance = $this->userController->showBalance($userId);


        return view('app.main', compact('name', 'balance'));
    }
    */

    public function index(){
        $userId = auth()->id();
        $user = $this->userController->show($userId);

        return view('app.main', compact('user'));
    }
    
}
