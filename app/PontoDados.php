<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PontoDados extends Model
{
    protected $fillable = [
    	"nome","preco","produto_id" // produto_id ???
    ];
}