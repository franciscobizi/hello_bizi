<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
        //public $timestamps = true; //to disable the timestamp
        protected $fillable = [
            'title','author','picture','news'
        ];
        
    
}
