<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PontoDados extends Model
{
    protected $fillable = ["nome","tipo","produto_id"];

	public function produto (){
 		return $this->belongsTo('App\Produto');
	}
}