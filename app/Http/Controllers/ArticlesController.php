<?php

namespace App\Http\Controllers;

use Request;
use App\Article;
use App\Tag;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class ArticlesController extends Controller
{

    /**
     * ArticlesController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth', ['only' => 'create']);
    }

    public function index(){
    $articles = Article::latest('created_at')->get();
    return view('articles.index', compact('articles'));
}

public function show(Article $article){
        return view('articles.show', compact('article'));
    }

public function create(){
    $tags = Tag::lists('name', 'id');
    return view('articles.create', compact('tags'));
}

    public function store(Requests\CreateArticle $request){
        $article = \Auth::user()->articles()->create($request->all());
        $article->tags()->attach($request->input('tag_list'));
        \Session::flash('flash_message', 'Your article has been created!');
        return redirect('articles');
    }
    
    public function edit(Article $article){
        $tags = Tag::lists('name', 'id');

        return view('articles.edit', compact('article', 'tags'));
    }
    
  public function update(Article $article,  Requests\CreateArticle $request){
      $article->update($request->all());
      $tags = $request->input('tag_list');
      $article->tags()->sync(!$tags ? [] : $tags);
      return redirect('articles');
  }  
}