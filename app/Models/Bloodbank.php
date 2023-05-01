<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bloodbank extends Model
{
    use HasFactory;
    protected $fillable =([
        'name',
        'registration_number',
        'address',
        'contact_number'
    ]);
   public function bloodInventory()
        {
    return $this->hasMany(BloodInventory::class);
    }
}