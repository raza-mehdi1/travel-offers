<?php

namespace App;

use App\Interfaces\ModelInterface;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;

class Package extends Model implements ModelInterface, TranslatableContract
{
    use Translatable;

    protected $guarded = ['_token','locale', '_method'];

    protected $appends = ['trip_tenure', 'from_till'];

    public $translatedAttributes = ['title', 'tag_line', 'description'];

    protected $fillable = ['trip_start_date_time', 'trip_end_date_time', 'price_per_head'];

    public function getTripStartDateTimeAttribute($value){
        return Carbon::parse($value)->format('Y-m-d H:i:s');
    }

    public function getTripEndDateTimeAttribute($value){
        return Carbon::parse($value)->format('Y-m-d H:i:s');
    }

    public function setTripStartDateTimeAttribute($value){
        $this->attributes['trip_start_date_time'] = Carbon::parse($value)->format('Y-m-d H:i:s');
    }

    public function setTripEndDateTimeAttribute($value){
        $this->attributes['trip_end_date_time'] = Carbon::parse($value)->format('Y-m-d H:i:s');
    }

    public function getDescriptionAttribute($value){
        if(
            in_array(request()->route()->getName(), ['index'])
            &&
            strlen($value) >= 20
        )
            $value = substr($value, 0 , 20).'...';


        return $value;
    }

    public function getTripTenureAttribute($value){

        $date = Carbon::parse($this->trip_end_date_time);
        $now = Carbon::parse($this->trip_start_date_time);

        $diff = $date->diffInDays($now)+1;

        $isDay = ' day';

        if($diff > 1){
            $isDay = ' days';
        }

        return $diff.$isDay;
    }

    public function getTripFromTillAttribute($value){

        $endMonth = Carbon::parse($this->trip_end_date_time)->format('M');
        $startMonth = Carbon::parse($this->trip_start_date_time)->format('M');

        $endYear = Carbon::parse($this->trip_end_date_time)->format('Y');
        $startYear = Carbon::parse($this->trip_start_date_time)->format('Y');

        if($endYear != $startYear){
            return
                Carbon::parse($this->trip_start_date_time)->format('d M, Y')
                .' - '.
                Carbon::parse($this->trip_end_date_time)->format('d M, Y');
        }
        else{
            if($endMonth != $startMonth){
                return
                    Carbon::parse($this->trip_start_date_time)->format('d M')
                    .' - '.
                    Carbon::parse($this->trip_end_date_time)->format('d M, Y');
            }
            else{
                return
                    Carbon::parse($this->trip_start_date_time)->format('d')
                    .' - '.
                    Carbon::parse($this->trip_end_date_time)->format('d M, Y');
            }
        }

    }

    /**
     * Get all of the images for the package.
     */
    public function images()
    {
        return $this->morphToMany(Image::class, 'imagable');
    }

    /**
     * Get first of the images for the package.
     */
    public function image()
    {
        return $this->morphToMany(Image::class, 'imagable')->take(1);
    }

    /**
     * Get all of the features for the package.
     */
    public function features(){
        return $this->belongsToMany(Feature::class, 'feature_package_pivot', 'package_id','feature_id');
    }

    /**
     * Get all of the included-add-ons for the package.
     */
    public function included_addons(){
        return $this->belongsToMany(Addon::class, 'package_addon_pivot', 'package_id','addon_id')
            ->wherePivot('is_included', true);
    }

    /**
     * Get all of the excluded-add-ons for the package.
     */
    public function excluded_addons(){
        return $this->belongsToMany(Addon::class, 'package_addon_pivot', 'package_id','addon_id')
            ->wherePivot('is_included', false);
    }

    public function itineraries(){
        return $this->belongsToMany(Itinerary::class, 'itinerary_package_pivot', 'package_id','itinerary_id');
    }

}
