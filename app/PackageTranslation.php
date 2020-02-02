<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageTranslation extends Model
{
    protected $table = 'packages_translations';
    public $timestamps = false;
    protected $fillable = ['package_id', 'title', 'tag_line', 'description'];
}
