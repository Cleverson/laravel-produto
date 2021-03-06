<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = "produtos";

    protected $fillable = ['nome','descricao','categoria_id'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
