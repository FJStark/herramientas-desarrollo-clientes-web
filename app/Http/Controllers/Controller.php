<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    
    /**
     * Get all users stored in users table
     */
    public function getAllUsers(){
        return response()->json(User::all());
    }
     /** @param id
     * Get one user from users table, filter by id
     */
    public function getUserById($id){
        return response()->json(User::findOrFail($id));
    }
}

