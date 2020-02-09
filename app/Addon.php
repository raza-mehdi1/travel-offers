<?php

namespace App;

use App\Interfaces\ModelInterface;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Addon extends Model implements ModelInterface, TranslatableContract
{
    use Translatable;
    protected $table = 'addon';

    protected $guarded = ['_token','locale', '_method'];

    public $translatedAttributes = ['title', 'description'];

    public function packages(){
        return $this->belongsToMany(Package::class, 'package_addon_pivot', 'addon_id', 'package_id');
    }
}
