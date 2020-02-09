<?php

namespace App;

use App\Interfaces\ModelInterface;
use Illuminate\Database\Eloquent\Model;

class Image extends Model implements ModelInterface
{
    protected $table = 'images';

    protected $fillable = ['path', 'storage_path'];

    /**
     * Get all of the packages that are assigned this image.
     */
    public function packages()
    {
        return $this->morphedByMany(Package::class, 'imagable');
    }
}
