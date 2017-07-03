<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model {
	protected $guarded = ['id'];
	protected $fillable = ['title', 'content', 'slug', 'status', 'user_id'];
	/**
	 *the Ticket model is just a PHP class that extends the Model class. Now we can use this file to tell Laravel about its relationships. For instance, each ticket is created by a user, we can tell tickets belongs to users by writing like this:
	 **/
	public function user() {
		return $this->belongTo('App\User');
	}

}
