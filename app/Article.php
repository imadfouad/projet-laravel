<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	//la relation n:n
    public function commande(){
    	return $this->belongsToMany('App\Commande');
    }
}
