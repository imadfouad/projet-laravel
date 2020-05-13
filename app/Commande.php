<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{

	protected $primaryKey = 'id_comm';
	

	//la relation n:n
    public function articles(){
    	return $this->belongsToMany('App\Article','lignes','id_comm','id_article');
    }
}
