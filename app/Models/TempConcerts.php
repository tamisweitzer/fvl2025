<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TempConcerts extends Model {
    use HasFactory;
    protected $fillable = [
        'concert_date',
        'concert_time',
        'band_list',
        'location_name',
        'city',
        'concert_url'
    ];
}
