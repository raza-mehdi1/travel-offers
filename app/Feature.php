<?php

namespace App;

use App\Interfaces\ModelInterface;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model implements ModelInterface, TranslatableContract
{
    use Translatable;

    protected $table = 'features';

    protected $fillable = ['icon'];
    protected $guarded = ['locale', '_token', '_method'];

    public $translatedAttributes = ['key', 'value'];
}
