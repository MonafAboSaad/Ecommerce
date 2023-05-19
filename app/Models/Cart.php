<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'token'
        ]; 
        public function user()
        {
            return $this->belongsTo('app/Models/User');
        }
        public function product()
        {
            return $this->belongsToMany('app/Models/Product');
        }
}
