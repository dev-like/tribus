<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Iatstuti\Database\Support\CascadeSoftDeletes;
use App\Models\InformacaoNutricional;

class Galeria extends Model
{
    protected $table = 'foto';
    protected $dates = ['deleted_at'];
    protected $fillable = ['id',
    'imagem'
    ];

    use SoftDeletes, CascadeSoftDeletes;
}
