<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    
    public function login(Request $request)
    {
        return $this->response('Autorizado', 200);
    }

    public function logout()
    {
        
    }

}
