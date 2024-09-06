<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Iatstuti\Database\Support\CascadeSoftDeletes;

class Ministrante extends Model
{
    protected $table = 'ministrantes';
    protected $dates = ['deleted_at'];
    protected $fillable = ['id',
    'nome',
    'descricao',
    'imagem'
    ];

    use SoftDeletes, CascadeSoftDeletes;
}
