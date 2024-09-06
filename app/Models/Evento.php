<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Iatstuti\Database\Support\CascadeSoftDeletes;

class Evento extends Model
{
    protected $table = 'evento';
    protected $dates = ['deleted_at'];
    protected $fillable = ['id',
    'textoevento',
    'visao',
    'missao',
    'valores',
    'whatsapp',
    'email',
    'endereco',
    'instagram',
    'facebook',
    'youtube'    
    ];

    use SoftDeletes, CascadeSoftDeletes;
}
