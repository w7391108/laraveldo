<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Route;
use App\Http\Requests\StoreBlogPost;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ArticlesController extends Controller
{
    //
    public function index(Request $request)
    {
        var_dump(env('APP_ENV'));die();
        $res = DB::table('user')->select('name')->get();
        echo "<pre>";
        print_r($res);
        echo "</pre>";die();
        foreach($res as $value) {
            echo "<pre>";
            print_r($value->age);
            echo "</pre>";die();
        }

        $user = Auth::id();
        var_dump($user);die();
        // $res = $request->all();
        // var_dump($res);die();
    	$articles = Article::orderBy('created_at','desc')->get();
    	return view('articles.index',compact('articles'));
    }

    public function create()
    {
    	return view('articles.create');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'title'	=> 'required|max:50',
    	]);

    	$article = Article::create([
    		'title'	=> $request->title,
    		'content'	=> $request->content,
    	]);

    	return redirect()->route('articles.index');
    }

    public function edit($id) {
    	$article = Article::findOrFail($id);
    	return view('articles.edit',compact('article'));
    }

    public function update(Request $request,$id)
    {
    	// $this->validate($request,[
    	// 	'title'	=> 'required|max:50',
    	// ]);

    	$article = Article::findOrFail($id);
    	$article->update([
    		'title'=>$request->title,
    		'content'=>$request->content,
    	]);

    	return back();

    }
}
