<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('app.main');
    }

    public function show($id){

        $user = User::findOrFail($id);

        return view('main.show', ['user' => $user]);
    }
    
}
