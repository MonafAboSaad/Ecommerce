<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'suboffer_id'
        ]; 
        public function product()
        {
            return $this->hasOne(Product::class);
        }
        public function suboffer()
        {
            return $this->hasOne(Suboffer::class);
        }
}
