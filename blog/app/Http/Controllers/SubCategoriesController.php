<?php

namespace App\Http\Controllers;

use App\Categories;
use App\SubCategories;
use Illuminate\Http\Request;

class SubCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = SubCategories::join('categories', 'sub_categories.cat_id', '=', 'categories.id')->select('sub_categories.*', 'categories.cat_name')->get();
        return view('subcategories.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::all();
        return view('subcategories.create', compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'cat_id'        =>      'required',
            'subcat_name'   =>      'required|unique:sub_categories,subcat_name'
        ]);
        
        $subcategory = new SubCategories([
            'cat_id'        =>      $request->get('cat_id'),
            'subcat_name'        =>      $request->get('subcat_name'),
            'subcat_desc'        =>      $request->get('subcat_desc'),
        ]);
        $subcategory->save();
        return back()->with('success', 'Sub-Category Added...');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subcategory = SubCategories::join('categories', 'sub_categories.cat_id', '=', 'categories.id')
                        ->select('sub_categories.*', 'categories.cat_name')
                        ->where('sub_categories.id', $id)
                        ->first();        
        $categories = Categories::where('id', '<>', $subcategory->cat_id)->get();

        return view('subcategories.edit', compact('subcategory', 'categories', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $subcategory = SubCategories::find($id);
        $subcategory->cat_id = $request->get('cat_id');
        $subcategory->subcat_name = $request->get('subcat_name');
        $subcategory->subcat_desc = $request->get('subcat_desc');
        $subcategory->save();
        return redirect('sub-categories')->with('succees', 'Sub-Category Updated');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategory = SubCategories::find($id);
        $subcategory->delete();
        return bacK()->with('success', 'Sub-Category Deleted...');
    }
}
