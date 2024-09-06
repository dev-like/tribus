<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Iatstuti\Database\Support\CascadeSoftDeletes;

class Noticia extends Model
{
    protected $table = 'noticias';
    protected $dates = ['deleted_at'];
    protected $fillable = ['id','titulo','descricao','conteudo','tags','imagem','datapublicacao','slug'];

    use SoftDeletes, CascadeSoftDeletes;
}
