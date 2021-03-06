<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
    	"user_id", "nome", "notas", "estado"
    ];
    
    public function pontos_dados (){
 		return $this->hasMany('App\PontoDados')->orderBy('id');
 	}
 	
 	public function opcaos (){
 		return $this->hasMany('App\Opcao');
 	}

 	public function user (){
 		return $this->belongsTo('App\User');
	}
}


