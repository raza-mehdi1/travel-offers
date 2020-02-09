<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddonTranslation extends Model
{
    protected $table = 'addon_translations';
    protected $fillable = ['title', 'description'];
}
