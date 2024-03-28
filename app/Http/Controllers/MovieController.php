<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\MovieRequest;
use Illuminate\Support\Facades\Auth;

class MovieController extends Controller
{

    public function index(){
        $movies=Movie::all();
        return view('movie.index',compact('movies'));
    }

    public function create(){
        $categories = Category::all();
        return view('movie.create',compact('categories'));
    }

    public function store(MovieRequest $request){
    $movie = Movie::create([
    'title'=>$request->title,
    'director'=>$request->director,
    'plot'=>$request->plot,
    'poster'=>$request->file('poster')->store('public/posters'),
    'user_id'=>Auth::user()->id
    ]);
    
    $movie->categories()->attach($request->categories);
    return redirect()->back()->with('successMessage','Hai caricato la serie tv nel sito');  
}

}