<?php

namespace App\Http\Controllers;

use App\Dictionary;
use Illuminate\Http\Request;

class DictionaryController extends Controller
{
    public function index(){
        $words = Dictionary::all();
        return view('admin.dictionary.index', compact('words'));
    }

    public function create(){
        return view('admin.dictionary.create');
    }
    
    public function store(Request $request){
        $this->validate($request, [
            'word'      =>      'required',
            'meaning'      =>      'required',
        ]);
        $word = new Dictionary([
            'word'     =>   $request->get('word'),
            'meaning'     =>   $request->get('meaning'),
            'sentence_1'     =>   $request->get('sentence_1'),
            'sentence_2'     =>   $request->get('sentence_2'),
        ]);
        $word->save();

        return back()->with('success', 'New Word Added To Our Dictionary...');
    }

    public function edit(Request $request, $id){
        $word = Dictionary::find($id);
        return view('admin.dictionary.edit', compact('word', 'id'));
    }
    public function update(Request $request, $id){
        $words = Dictionary::find($id);
        $words->word=$request->get('word');
        $words->meaning=$request->get('meaning');
        $words->sentence_1=$request->get('sentence_1');
        $words->sentence_2=$request->get('sentence_2');
        $words->save();
        return redirect('/admin/our-dictionary')->with('success', 'Word Is Updated');
    }

    public function delete($id){
        $word = Dictionary::find($id);
        $word->delete();
        return back()->with('success', 'Word Is Deleted...');
    }
}

