<?php

namespace App\Http\Controllers;

use App\Article;
use App\Categories;
use App\SubCategories;
use Illuminate\Http\Request;
use stdClass;

class ArticleController extends Controller
{

    public function articleIndex(){
        $articles = Article::join('sub_categories', 'sub_categories.id', '=', 'articles.subcat_id')
                    ->join('categories', 'sub_categories.cat_id', '=', 'categories.id')
                    ->select('categories.cat_name', 'sub_categories.subcat_name', 'articles.*')
                    ->get();
        return view('admin.article.index', compact('articles'));
    }

    public function create(){
        $categories = Categories::all();
        return view('admin.article.create', compact('categories'));
    }

    public function getSubcategory(Request $request){
        $sub_categories = SubCategories::where('cat_id',$request->get('cat_id'))->get();
        return response($sub_categories);
    }


    public function store(Request $request){ 
        $this->validate($request, [
            'subcat_id'     =>  'required',
            'title'         =>  'required|unique:articles,title',
            'short_desc'    =>  'required',
        ]);
        $article = new Article([
            'subcat_id'     =>  $request->get('subcat_id'),
            'title'         =>  $request->get('title'),
            'short_desc'    =>  $request->get('short_desc'),
            'breif'         =>  $request->get('breif'),
        ]);
        $article->save();
        return redirect('/admin/article/articleIndex')->with('success', 'New Article Is Added');
    }

    public function show($id){
        $title = str_replace('-', ' ', $id);
        $article = Article::join('sub_categories', 'sub_categories.id', '=', 'articles.subcat_id')
                    ->join('categories', 'sub_categories.cat_id', '=', 'categories.id')
                    ->select('categories.cat_name', 'sub_categories.subcat_name', 'articles.*')
                    ->where('title', $title)->first();
        return view('admin.article.show_single', compact('article'));
    }
}
