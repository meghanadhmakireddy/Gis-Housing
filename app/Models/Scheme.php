<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scheme extends Model
{
    use HasFactory;

    protected $fillable = [
        'owner_name',
        'description',
        'latitude',
        'longitude',
        'helping_people',
        'fund_usage'
    ];
    
    protected $table = 'houses'; // 👈 explicitly link to correct table



}
