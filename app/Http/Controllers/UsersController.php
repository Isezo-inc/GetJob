<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
class UsersController extends Controller
{
    public function registration(Request $req){
      $user = new Users;
      $user->email = $req->input('email');
      $user->password = $req->input('password');

      $user->save();
    }
}
