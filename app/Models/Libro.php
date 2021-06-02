<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = 'prueba';
    protected $fillable=['nomLi','canEx', 'price' , 'description','user_id'];
    use HasFactory;
}
