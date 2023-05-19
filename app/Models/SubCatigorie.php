<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCatigorie extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        ]; 
    public function catigorie()
        {
            return $this->belongsTo(Catigorie::class);
        }
}
