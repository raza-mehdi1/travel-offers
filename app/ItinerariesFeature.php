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

}
