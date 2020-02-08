<?php

namespace App\Observers;

use App\ItinerariesFeature;

class ItineraryFeatureObserver
{
    /**
     * Handle the itinerary_feature "created" event.
     *
     * @param  ItinerariesFeature $itinerary_feature
     * @return void
     */
    public function created(ItinerariesFeature $itinerary_feature)
    {
        //
    }

    /**
     * Handle the itinerary_feature "updated" event.
     *
     * @param  ItinerariesFeature $itinerary_feature
     * @return void
     */
    public function updated(ItinerariesFeature $itinerary_feature)
    {
        //
    }

    /**
     * Handle the itinerary_feature "deleting" event.
     *
     * @param  ItinerariesFeature $itinerary_feature
     * @return void
     */
    public function deleting(ItinerariesFeature $itinerary_feature)
    {
        $itinerary_feature->itineraries()->detach();
    }


    /**
     * Handle the itinerary_feature "deleted" event.
     *
     * @param  ItinerariesFeature $itinerary_feature
     * @return void
     */
    public function deleted(ItinerariesFeature $itinerary_feature)
    {
        //
    }

    /**
     * Handle the itinerary_feature "restored" event.
     *
     * @param  ItinerariesFeature $itinerary_feature
     * @return void
     */
    public function restored(ItinerariesFeature $itinerary_feature)
    {
        //
    }

    /**
     * Handle the itinerary_feature "force deleted" event.
     *
     * @param  ItinerariesFeature $itinerary_feature
     * @return void
     */
    public function forceDeleted(ItinerariesFeature $itinerary_feature)
    {
        //
    }
}
