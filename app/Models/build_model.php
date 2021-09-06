<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class build_model extends Model
{
    use HasFactory;
    protected $table='building';
    protected $primaryKey = 'code';
    protected $keyType = 'int';
    protected $fillable=[
        'code',
        'name',
        'campus'
    ];
}
