<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use LdapRecord\Models\Model;
use App\Models\User;

class UserController extends BaseController{
    function index (){
    $users =  User::where('name')->get();
  
          // Faça algo com a lista de usuários, por exemplo, retornar uma view
          // return view('user', compact('users'));
          dd($users);
  
  }
  
}
