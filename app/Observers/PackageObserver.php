<?php

namespace App\Observers;

use App\Package;

class PackageObserver
{
    private function sync($model){
        $model->images()->sync(request()->get('image_ids'));
        $model->itineraries()->sync(request()->get('itinerary_ids'));
    }

    private function detach($model){
        $model->images()->detach();
        $model->itineraries()->detach();
    }

    /**
     * Handle the package "created" event.
     *
     * @param  \App\Package  $package
     * @return void
     */
    public function created(Package $package) {
        $this->sync($package);
    }

    /**
     * Handle the package "updated" event.
     *
     * @param  \App\Package  $package
     * @return void
     */
    public function updated(Package $package){
        $this->sync($package);
    }

    /**
     * Handle the package "deleted" event.
     *
     * @param  \App\Package  $package
     * @return void
     */
    public function deleted(Package $package)
    {
        $this->detach($package);
    }

    /**
     * Handle the package "restored" event.
     *
     * @param  \App\Package  $package
     * @return void
     */
    public function restored(Package $package)
    {
        //
    }

    /**
     * Handle the package "force deleted" event.
     *
     * @param  \App\Package  $package
     * @return void
     */
    public function forceDeleted(Package $package)
    {
        //
    }

}
