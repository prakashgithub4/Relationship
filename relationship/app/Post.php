<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table  = 'posts';
    protected $fillable = ['title', 'description`', 'user_id'];
    public $timstamp =false;

    public function post(){
    	return $this->belongsTo('App\User');
    }
}
