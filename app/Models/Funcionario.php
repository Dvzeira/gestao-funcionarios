<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Funcionario extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'cpf',
        'birth_date',
        'gender',
        'position',
        'salary',
    ];
    
    


}
