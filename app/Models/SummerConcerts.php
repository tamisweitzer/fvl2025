<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SummerConcerts extends Model {
    use HasFactory;
    protected $fillable = [
        'start_date',
        'end_date',
        'band_list',
        'concert_name',
        'location_name',
        'city',
        'url',
        'notes',
        'is_fair'
    ];
}
