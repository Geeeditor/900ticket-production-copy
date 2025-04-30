<?php

namespace App\Http\Controllers\AdminController;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
     public function dashboard(){
        $totalUsers = User::where('usertype', 'user')->count();





        return view('admin.pages.index', ['totalUsers' => $totalUsers]);

    }

    public function userList(){
         $users = User::where('usertype', 'user')->latest()->get();

        return view('admin.pages.userList', ['users' => $users]);
    }


}
