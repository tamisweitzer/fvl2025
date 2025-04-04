<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model {
  use HasFactory;

  protected $fillable = [
    'name',
    'admin_name',
    'band_id',
    'venue_id',
    'event_date',
    'event_time',
    'event_details'
  ];

  public function band() {
    return $this->belongsTo(Band::class);
  }

  public function venue() {
    return $this->belongsTo(Venue::class);
  }
}
