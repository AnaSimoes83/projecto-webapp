<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PontoDados extends Model
{
    protected $fillable = [
    	"nome","tipo"];

	public function produto (){
 		return $this->belongsTo('App\Produtos');
	}

}