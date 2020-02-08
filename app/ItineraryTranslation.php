<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItineraryTranslation extends Model
{
    protected $table = 'itinerary_translations';
    public $timestamps = false;
    protected $fillable = ['itinerary_id', 'title', 'side_title', 'description'];
}
