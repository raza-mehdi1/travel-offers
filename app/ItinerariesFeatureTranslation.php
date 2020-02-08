<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItinerariesFeatureTranslation extends Model
{
    protected $table = 'itinerary_features_translations';

    protected $fillable = ['itineraries_feature_id', 'text'];
}
