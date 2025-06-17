<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TempEvents extends Model {
    use HasFactory;
    protected $fillable = [
        'concert_date',
        'concert_time',
        'band',
        'venue',
        'city',
        'concert_url'
    ];
}
