<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SummerEvents extends Model {
    use HasFactory;
    protected $fillable = [
        'start_date',
        'end_date',
        'start_time',
        'band',
        'event_name',
        'venue',
        'city',
        'url',
        'notes',
        'event_type'
    ];

    protected function casts() {
        return [
            'start_date' => 'datetime:m-d-YYYY',
            'end_date' => 'datetime:m-d-YYYY'
        ];
    }
}
