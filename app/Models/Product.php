<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'price',
        'quaintity',
        'description',
        'color',
        'size',
        'catigories_id'
        ]; 
        public function cart()
        {
            return $this->belongsToMany('app/Models/Cart');
        }
        public function rating()
        {
            return $this->belongsTo(Rating::class);
        }
        public function catigories()
    {
        return $this->hasOne(Catigorie::class);
    }
    public function offer()
        {
            return $this->belongsTo(Offer::class);
        }
        
}
