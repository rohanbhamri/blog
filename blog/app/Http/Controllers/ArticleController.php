<?php

namespace App\Http\Controllers;

use App\Categories;
use App\SubCategories;
use Illuminate\Http\Request;
use stdClass;

class ArticleController extends Controller
{
    public function create(){
        $categories = Categories::all();
        return view('article.create', compact('categories'));
    }

    public function getSubcategory(Request $request){
        $sub_categories = SubCategories::where('cat_id',$request->get('cat_id'))->get();
        return response($sub_categories);
    }


    public function store(Request $request){ 
        $text =  $request->get('brief');
        return view('article.index', compact('text'));
    }
}
