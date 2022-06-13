<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class map_model extends Model
{
    use HasFactory;
    public $timestamps = FALSE;
    protected $table='coursemap';
    protected $primaryKey = 'name';
    protected $keyType = 'string';
    protected $fillable=[
        'name',
        'url'
    ];
}
