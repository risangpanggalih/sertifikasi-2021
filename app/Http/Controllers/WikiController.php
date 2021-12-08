<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wiki;

class WikiController extends Controller
{
    public function index()
    {
        $wiki = Wiki::all();
        return view('wiki',[
            "title" => "Wiki",
            'wiki' => $wiki
        ]);
    }

    public function tambah()
    {
        return view('wiki_tambah',[
            "title" => "Input Item"
        ]);
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'name' => 'required',
    		'type' => 'required'
    	]);
 
        Wiki::create([
    		'name' => $request->name,
    		'type' => $request->type,
            'stat' => $request->stat,
            'desc' => $request->desc
    	]);
 
    	return redirect('/wiki');
    }
    public function edit($id)
    {
       $wiki = Wiki::find($id);
       return view('wiki_edit', [
            'title' => 'Edit Item',
            'wiki' => $wiki
        ]);
    }
    public function update($id, Request $request)
    {
        $this->validate($request,[
           'name' => 'required',
           'type' => 'required'
        ]);
     
        $wiki = Wiki::find($id);
        $wiki->name = $request->name;
        $wiki->type = $request->type;
        $wiki->stat = $request->stat;
        $wiki->desc = $request->desc;
        $wiki->save();
        return redirect('/wiki');
    }
    public function delete($id)
    {
        $wiki = Wiki::find($id);
        $wiki->delete();
        return redirect('/wiki');
    }                
}