<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable = [
        'location',
       'latitude',
       'longitude'
        ];
    public function user()
        {
            return $this->belongsTo(User::class);
        }
    public function state()
        {
            return $this->belongsTo('app\Models\State','state_id');
        }
}
