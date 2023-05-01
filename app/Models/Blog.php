<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
      
        'content',
        'description',
        'photo_id',
    ];
    public function Photo(){

        return $this->belongsto(Photo::class);
}
}