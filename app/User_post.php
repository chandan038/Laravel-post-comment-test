<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use App\User;
use App\User_post_comment;


class User_post extends Model
{
    protected $table = 'user_post';
	
	public function user(){
		return $this->belongsTo(User::class);
	}
	
	public function Post_comment(){
		return $this->hasMany(User_post_comment::class,'post_id');
	}
	
	
}
