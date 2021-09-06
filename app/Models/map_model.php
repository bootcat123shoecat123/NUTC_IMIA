<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class map_model extends Model
{
    use HasFactory;
    protected $table='coursemap';
    protected $primaryKey = 'name';
    protected $keyType = 'varchar';
    protected $fillable=[
        'name',
        'url'
    ];
}
