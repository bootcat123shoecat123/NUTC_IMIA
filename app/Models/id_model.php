<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class id_model extends Model
{
    use HasFactory;
    public $timestamps = FALSE;
    protected $table='office';
    protected $fillable=[
        'code',
        'name'
    ];
}
