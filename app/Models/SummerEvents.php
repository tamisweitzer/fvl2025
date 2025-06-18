<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SummerEvents extends Model {
    use HasFactory;
    protected $fillable = [
        'concert_date',
        'concert_time',
        'band',
        'venue',
        'city',
        'concert_url',
        'is_bar_gig',
        'is_lunch_gig',
        'notes'
    ];
}
