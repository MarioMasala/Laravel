<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Movie extends Model
{
    use HasFactory;
    protected $fillable =[
        'title','director','plot','poster','user_id'
    ];
    
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function categories(){
        return $this->belongsToMany(Category::class);
    }

}
