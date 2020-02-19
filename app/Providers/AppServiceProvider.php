<?php

namespace App\Providers;

use App\Addon;
use App\Feature;
use App\Http\Controllers\AddonsController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\ItinerariesController;
use App\Http\Controllers\ItineraryFeaturesController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\PagesController;
use App\Image;
use App\Interfaces\ModelInterface;
use App\ItinerariesFeature;
use App\Itinerary;
use App\Observers\ItineraryObserver;
use App\Observers\PackageObserver;
use App\Observers\PagesObserver;
use App\Package;
use App\Page;
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
        Itinerary::observe(ItineraryObserver::class);
        Package::observe(PackageObserver::class);
        Page::observe(PagesObserver::class);

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

        $this->app->when(AddonsController::class)
            ->needs(ModelInterface::class)
            ->give(function () {
                return new Addon();
            });

        $this->app->when( ImagesController::class)
            ->needs(ModelInterface::class)
            ->give(function () {
                return new Image();
            });

        $this->app->when( PagesController::class)
            ->needs(ModelInterface::class)
            ->give(function () {
                return new Page();
            });

    }
}
