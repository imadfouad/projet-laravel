<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{

	protected $primaryKey = 'id_comm';
	

	//la relation n:n
    public function article(){
    	return $this->belongsToMany('App\Article');
    }
}
