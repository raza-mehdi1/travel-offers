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

    public function getStoragePathAttribute($value){
        if(config('filesystems.default') === 's3')
            return config('filesystems.disks.s3.url').'/'.$value;
        else if(config('filesystems.default') === 'public')
            return asset('storage/'.$value);
    }
}
