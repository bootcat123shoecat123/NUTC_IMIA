<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class card_model extends Model
{
    use HasFactory;
    public $timestamps = FALSE;
    protected $table='card';
    protected $fillable=[
        'card_id',
        'enter',
        'title',
        'text'
    ];
}
