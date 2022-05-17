<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $table = "tags";
    protected $fillable = ['name'];

    public function articles(){
        return $this->belongsToMany('App\Models\Article')->withTimestamps();
    }
}
// $article = new App\Models\Article();
// $article->title = "Noticia de ultima hora";
// $article->content = "Esta es una noticia de ultima hora que esta en desarrollo :v";
// $article->user_id = 13;
// $article->category_id = 1;
// $article->save();


// $user = new App\Models\User();
// $user->name = "Kevin Tellez Guerrero";
// $user->email = "kevin@gmail.com";
// $user->password = bcrypt("kevin");
// $user->save();

// $tag = new App\Models\Tag();
// $tag->name = "Sucesos";
// $tag->save();