<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageNotIncludeTranslation extends Model
{
    protected $table = 'package_not_include_translations';
    protected $fillable = ['title', 'description'];
}
