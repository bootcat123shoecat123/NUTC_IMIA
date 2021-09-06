<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class id_model extends Model
{
    use HasFactory;
    
    protected $table='office';
    protected $primaryKey = 'code';
    protected $keyType = 'int';
    protected $fillable=[
        'code',
        'name'
    ];
}
