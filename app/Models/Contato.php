<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;

    public function lista()
    {
        return (object)[
            'nome'=>'guilherme',
            'tel'=>'975156401'
        ];
    }
}
