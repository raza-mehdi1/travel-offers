<?php

namespace App\Observers;

use App\Itinerary;

class ItineraryObserver
{
    /**
     * Handle the itinerary "created" event.
     *
     * @param  \App\Itinerary  $itinerary
     * @return void
     */
    public function created(Itinerary $itinerary)
    {
        $itinerary_feature_ids = request()->get('itinerary_feature_ids');
        $itinerary->itinerary_features()->sync($itinerary_feature_ids);
    }

    /**
     * Handle the itinerary "updated" event.
     *
     * @param  \App\Itinerary  $itinerary
     * @return void
     */
    public function updated(Itinerary $itinerary)
    {
        //
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
