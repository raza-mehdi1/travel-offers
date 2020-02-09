<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeatureTranslation extends Model
{
    public $timestamps = false;

    protected $table = 'feature_translations';

    protected $fillable = ['feature_id', 'locale', 'key', 'value'];
}
