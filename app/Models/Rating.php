<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'user_id',
        'rating',
        'comment'
        ]; 
        public function user()
        {
            return $this->hasOne('app/Models/User','user_id');
        }
        public function product()
        {
            return $this->hasOne('app/Models/Product','product_id');
        }
}
