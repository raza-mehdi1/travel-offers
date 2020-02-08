<?php

namespace App;

use App\Interfaces\ModelInterface;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Itinerary extends Model implements ModelInterface, TranslatableContract
{
    use Translatable;

    protected $guarded = ['_token','locale', '_method'];

    public $translatedAttributes = ['title', 'side_title', 'description'];
//    protected $fillable = ['trip_start_date_time', 'trip_end_date_time', 'price_per_head'];

}
