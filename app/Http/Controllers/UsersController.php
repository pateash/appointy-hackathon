<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UsersController extends Controller
{

   public function show()
   {
      return User::all();
   }

   public function details(User $user){
        return $user;
    }

   public function orders(User $user)
   {
      return $user->orders;
   }
}
