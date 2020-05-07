<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	protected $primaryKey = 'id_article';

	//la relation n:n
    public function commande(){
    	return $this->belongsToMany('App\Commande');
    }
}
