<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class function_model extends Model
{
    use HasFactory;
    public $timestamps = FALSE;
    protected $table="message";
    protected $primaryKey = 'msgIn';
    protected $keyType = 'string';
    protected $fillable=[
        'msgIn',
        'msgOut',
        'mark',
        'sort'
    ];
}
