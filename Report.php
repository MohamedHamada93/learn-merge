<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
   	protected $table = 'reports';
	
	public function User()
	{
		return $this->belongsTo('App\User','user_id','iiiid');
		return $this->belongsTo('App\User','user_id','id');
		return $this->belongsTo('App\User','user_id','id');
		return $this->belongsTo('App\User','user_id','id');
		return $this->belongsTo('App\User','user_id','id');
		return 'hahahahahahahahahaha';
	}
}

# edit in branch-1
