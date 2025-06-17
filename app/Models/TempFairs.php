<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempFairs extends Model {
    use HasFactory;
    protected $fillable = [
        'start_date',
        'end_date',
        'event_name',
        'band_list',
        'location_name',
        'city',
        'event_url'
    ];
}
