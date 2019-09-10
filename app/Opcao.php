<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opcao extends Model
{
    protected $fillable = ["valor","produto_id", "pontosdados_id"];

	public function produto (){
 		return $this->belongsTo('App\Produto');
 	}

 	public function pontos_dados (){
 		return $this->belongsTo('App\PontoDados');
 	}
}
