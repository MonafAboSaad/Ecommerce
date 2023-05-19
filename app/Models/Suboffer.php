<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suboffer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
        ]; 
        public function offer()
        {
            return $this->belongsTo(Offer::class);
        }
}
