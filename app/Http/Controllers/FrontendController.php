<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $packages = Package::with([
            'itineraries',
            'itineraries.itinerary_features',
            'images'
        ])
        ->get()
        ->map(function($sql) {
            return $sql->setRelation('images', $sql->images->take(1));
        })
        ->map(function($sql) {
            return $sql->setRelation('itineraries', $sql->itineraries->take(1));
        });
        return view('index', compact('packages'));
    }

    public function details($slug){

        $package = Package::with([
            'itineraries',
            'itineraries.itinerary_features',
            'images',
            'included_addons',
            'excluded_addons',
            'features'
        ])
        ->whereTranslation('title', $slug)
        ->first();

        if(!$package)
            return redirect()->route('index');

        return view('details', compact('package'));
    }
}
