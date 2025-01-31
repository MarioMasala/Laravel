<?php

namespace App\Models;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $fillable =[
    'name','description'
    ];

    public function movies(){
        return $this->belongsToMany(Movie::class);
    }
}
