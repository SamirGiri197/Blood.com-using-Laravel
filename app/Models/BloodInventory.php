<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodInventory extends Model
{
    use HasFactory;
    public function Bloodbank()
    {
        return $this->belongsTo(Bloodbank::class);
    }
}
