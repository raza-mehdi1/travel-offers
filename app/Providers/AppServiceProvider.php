<?php

namespace App\Providers;

use App\Feature;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\IncludesController;
use App\Http\Controllers\ItinerariesController;
use App\Http\Controllers\ItineraryFeaturesController;
use App\Http\Controllers\NotIncludesController;
use App\Http\Controllers\PackagesController;
use App\Image;
use App\Interfaces\ModelInterface;
use App\ItinerariesFeature;
use App\Itinerary;
use App\Observers\ItineraryObserver;
use App\Package;
use App\PackageInclude;
use App\PackageNotInclude;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->when(PackagesController::class)
            ->needs(ModelInterface::class)
            ->give(function () {
                return new Package();
            });

        $this->app->when(ItinerariesController::class)
            ->needs(ModelInterface::class)
            ->give(function () {
                return new Itinerary();
            });

        $this->app->when(ItineraryFeaturesController::class)
            ->needs(ModelInterface::class)
            ->give(function () {
                return new ItinerariesFeature();
            });

        $this->app->when(FeatureController::class)
            ->needs(ModelInterface::class)
            ->give(function () {
                return new Feature();
            });

        $this->app->when(IncludesController::class)
            ->needs(ModelInterface::class)
            ->give(function () {
                return new PackageInclude();
            });

        $this->app->when( NotIncludesController::class)
            ->needs(ModelInterface::class)
            ->give(function () {
                return new PackageNotInclude();
            });

        $this->app->when( ImagesController::class)
            ->needs(ModelInterface::class)
            ->give(function () {
                return new Image();
            });

        Itinerary::observe(ItineraryObserver::class);
    }
}
