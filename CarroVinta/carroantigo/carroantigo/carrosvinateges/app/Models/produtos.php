<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produtos extends Model
{
    protected $table = 'produto';

    protected $fillable = [
            'Nome',
            'estado',
            'Vendedor',
            'Ano',

    ];
}