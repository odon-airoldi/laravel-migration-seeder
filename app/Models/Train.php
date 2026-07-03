<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{

    protected $casts = [
        'orario_partenza' => 'datetime',
        'orario_arrivo' => 'datetime',
    ];

}
