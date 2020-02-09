<?php

namespace App;

use App\Interfaces\ModelInterface;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class PackageInclude extends Model implements ModelInterface, TranslatableContract
{
    use Translatable;


    protected $guarded = ['_token','locale', '_method', 'itinerary_feature_ids'];

    public $translatedAttributes = ['title', 'description'];

}
