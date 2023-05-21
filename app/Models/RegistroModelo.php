<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroModelo extends Model
{
    use HasFactory;
    protected $table = 'registro';
    protected  $primaryKey = 'num_Registro';
    public $timestamps = false;
}
