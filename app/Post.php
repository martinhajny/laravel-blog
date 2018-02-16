<?php

namespace SuperBlogHC;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function category() {
    	return $this->belongsTo('SuperBlogHC\Category');
    }
}
