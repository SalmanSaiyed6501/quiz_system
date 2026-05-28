<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class userController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function userCategories(){
        $categories = category::all();
        return view('user-categories', compact('categories'));
    }
}
