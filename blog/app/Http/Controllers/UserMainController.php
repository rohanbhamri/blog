<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class UserMainController extends Controller
{
    public function userindex(){
        // echo 'HELLO';
        $articles = Article::join('sub_categories', 'sub_categories.id', '=', 'articles.subcat_id')
        ->join('categories', 'sub_categories.cat_id', '=', 'categories.id')
        ->select('categories.cat_name', 'sub_categories.subcat_name', 'articles.*')
        ->orderby('articles.id', 'DESC')
        ->get();
        return view('users.home.index', compact('articles'));
    }

    public function getArticlefull(Request $request){
        $id = $request->get('id');
        $articles = Article::join('sub_categories', 'sub_categories.id', '=', 'articles.subcat_id')
        ->join('categories', 'sub_categories.cat_id', '=', 'categories.id')
        ->select('categories.cat_name', 'sub_categories.subcat_name', 'articles.*')
        ->where('articles.id', $id)
        ->first();
        return response($articles);
    }
}
