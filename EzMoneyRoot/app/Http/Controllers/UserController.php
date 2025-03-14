<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * 
     * 
     * 
     * 
     */
    public function store(Request $request)
{
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:3',
            'phone' => 'required|string',
            'gender' => 'required|in:1,2',
            'birth' => 'required|date',
        ]);

    $validatedData['password'] = bcrypt($request->password);

    $user = User::create($validatedData);

    Auth::login($user);

    return redirect(route('main.index'));
}

    
    public function show(string $id)
    {
        $userData = User::find($id);
        return $userData;
    }

    
    public function edit(string $id)
    {
        
    }

   
    public function update(Request $request, string $id)
    {
        
    }

 
    public function destroy(string $id)
    {
        
    }

    public function showName(string $id) {
        $user = User::find($id);
        return $user ? $user->name : 'Usuário não encontrado';
    }

    public function showBalance(string $id) {

        $user = User::find($id);
        return $user ? $user->balance : 'Usuário não encontrado';
    }


}
