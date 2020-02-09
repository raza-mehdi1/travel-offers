<?php

namespace App\Observers;

use App\Itinerary;

class ItineraryObserver
{
    private function sync($model){
        $model->itinerary_features()->sync(request()->get('itinerary_feature_ids'));
    }

    private function detach($model){
        $model->itinerary_features()->detach();
        $model->packages()->detach();
    }
    /**
     * Handle the itinerary "created" event.
     *
     * @param  \App\Itinerary  $itinerary
     * @return void
     */
    public function created(Itinerary $itinerary)
    {
        $this->sync($itinerary);
    }

    /**
     * Handle the itinerary "updated" event.
     *
     * @param  \App\Itinerary  $itinerary
     * @return void
     */
    public function updated(Itinerary $itinerary)
    {
        $this->sync($itinerary);
    }

    /**
     * Handle the itinerary "deleting" event.
     *
     * @param  \App\Itinerary  $itinerary
     * @return void
     */
    public function deleting(Itinerary $itinerary)
    {
        $this->detach($itinerary);
    }

    /**
     * Handle the itinerary "deleted" event.
     *
     * @param  \App\Itinerary  $itinerary
     * @return void
     */
    public function deleted(Itinerary $itinerary)
    {
        //
    }

    /**
     * Handle the itinerary "restored" event.
     *
     * @param  \App\Itinerary  $itinerary
     * @return void
     */
    public function restored(Itinerary $itinerary)
    {
        //
    }

    /**
     * Handle the itinerary "force deleted" event.
     *
     * @param  \App\Itinerary  $itinerary
     * @return void
     */
    public function forceDeleted(Itinerary $itinerary)
    {
        //
    }
}
