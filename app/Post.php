<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function category(){
        return $this->hasOne(Category::class);
    }
    public function factorier(){
        return $this->hasOne(Factorier::class);
    }
    public function user(){
        return $this->hasOne(User::class);
    }
    public function comments(){
        return $this->hasMany(Category::class);
    }
}
