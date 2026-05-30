<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\quiz;

class userController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function userCategories(){
        $categories = category::withCount('quizes')->get();
        return view('user-categories', compact('categories'));
    }

     public function userQuizList($id, $category){
        $quizData = quiz::where('category_Id', $id)->get();
        $categoryName = $category;
        return view('userQuizList',Compact('quizData','categoryName'));
    }
}

