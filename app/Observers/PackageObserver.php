<?php

namespace App\Observers;

use App\Package;

class PackageObserver
{
    private function sync($model){
        $model->images()->sync(request()->get('image_ids'));
        $model->itineraries()->sync(request()->get('itinerary_ids'));
        $model->features()->sync(request()->get('feature_ids'));

        if(request()->has('include_addon_ids')){
            $include_addon_ids = [];
            foreach (request()->get('include_addon_ids') as $include_addon_id) {
                $include_addon_ids[$include_addon_id] = ['is_included' => true];
            }
            $model->included_addons()->sync($include_addon_ids);
        }else{
            $model->included_addons()->detach();
        }

        if(request()->has('exclude_addon_ids')) {
            $exclude_addon_ids = [];
            foreach (request()->get('exclude_addon_ids') as $exclude_addon_id) {
                $exclude_addon_ids[$exclude_addon_id] = ['is_included' => false];
            }
            $model->excluded_addons()->sync($exclude_addon_ids);
        }else{
            $model->excluded_addons()->detach();
        }


    }

    private function detach($model){
        $model->images()->detach();
        $model->itineraries()->detach();
        $model->features()->detach();
        $model->excluded_addons()->detach();
        $model->included_addons()->detach();
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
