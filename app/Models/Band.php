<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Band extends Model {
    /** @use HasFactory<\Database\Factories\BandFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'common_name',
        'proper_name',
        'tagline',
        'bio',
        'city_id',
        'state_id',
        'website_url',
        'thumbnail_img',
        'banner_img'
    ];
}
