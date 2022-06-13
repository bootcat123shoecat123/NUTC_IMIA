<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer_model extends Model
{
    use HasFactory;
    public $timestamps = FALSE;
    protected $table='question';
    protected $fillable=[
        'answer',
        'help'
    ];
}
