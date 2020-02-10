<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;

class ArticleController extends Controller
{
    public function create(){
        return view('article.create');
    }


    public function store(Request $request){ 
        $text =  $request->get('brief');
        return view('article.index', compact('text'));
    }
}
