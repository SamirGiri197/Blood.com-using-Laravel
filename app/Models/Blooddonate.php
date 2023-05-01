<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blooddonate extends Model
{
    use HasFactory;
    protected $fillable = [
        'fname',
        'contact',
        'email',
        'info',
        'bgroup',
        'gender',
    ];
}
