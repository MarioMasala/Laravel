<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function profile(){
        
        $movies = Movie::where('user_id', Auth::user()->id)->orderBy('created_at','DESC')->get();
        
        return view('profile',compact('movies'));
    }
    
    
    public function destroy(){
        $user = Auth::user();
        
        $user_movies = $user->movies;
        
        if(count($user_movies)>0){
            foreach($user_movies as $movie){
                /* if($movie->cover){
                    Storage::delete($movie->cover);
                }
                $movie->delete(); */
                $movie->update([
                'user_id'=>  null
                ]);
                
            }
            
        }
        
        $user->delete();
        return redirect()->route('homepage')->with('successMessage','Hai cancellato la tua categoria');
        
    }
}
