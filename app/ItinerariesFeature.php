<?php

namespace App;

use App\Interfaces\ModelInterface;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class ItinerariesFeature extends Model implements ModelInterface, TranslatableContract
{
    use Translatable;
    protected $table = 'itinerary_features';

    protected $guarded = ['_token','locale', '_method'];

    public $translatedAttributes = ['text'];
    public $fillable = ['icon'];

    public function itineraries(){
        return $this->belongsToMany(Itinerary::class, 'itinerary_feature_pivot','itinerary_feature_id','itinerary_id');
    }

}
