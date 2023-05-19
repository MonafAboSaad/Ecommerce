<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catigorie extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'subcatigores_id'
        ]; 
        public function product()
        {
            return $this->belongsTo(Product::class);
        }
        public function subcatigorie()
    {
        return $this->hasOne(SubCatigorie::class);
    }

}
