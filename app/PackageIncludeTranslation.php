<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageIncludeTranslation extends Model
{
    protected $table = 'package_include_translations';
    protected $fillable = ['title', 'description'];
}
