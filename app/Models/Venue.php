<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model {
  use HasFactory;

  protected $fillable = [
    'name',
    'fullname',
    'excerpt',
    'bio',
    'address1',
    'address2',
    'city_id',
    'state_id',
    'zip',
    'neighborhood',
    'phone',
    'website_url',
    'lat',
    'long',
    'thumbnail_img',
    'banner_img'
  ];

  public function city() {
    return $this->belongsTo(City::class);
  }

  public function state() {
    return $this->belongsTo(State::class);
  }
}
