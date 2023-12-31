<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class group extends Model
{
    use HasFactory;
    protected  $table = 'groups';
    protected $fillable = [
        'name',
        'message',
        'start_date',
        'end_date',
        'count',
        'type',
        'status'
    ];
    public $timestamps = false;
}
