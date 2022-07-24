<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        //return 'ok, users controller';
        $user = User::all();
        return json_encode($user);
    }
}
