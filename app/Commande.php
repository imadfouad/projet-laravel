<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
	//la relation n:n
    public function article(){
    	return $this->belongsToMany(related:'App\Article');
    }
}
