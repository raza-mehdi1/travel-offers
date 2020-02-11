<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Package;
use Carbon\Carbon;
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

    public function book($slug){

        $package = Package::whereTranslation('title', $slug)
            ->first();

        if(!$package)
            return redirect()->back();

        return request()->all();

    }

    public function bookingDetails($slug){

        $package = Package::whereTranslation('title', $slug)
            ->first();

        if(!$package)
            return redirect()->back();

        $adults = request()->adult_guests;
        $children = request()->child_guests;

        return view('booking-details', compact('package', 'adults', 'children'));
    }


    public function checkout(){

        \request()->validate([
            "adult_guests"=>'required',
            "child_guests"=>'required',
            "total_cost"=>'required',
            "package_name"=>'required',
            "title"=>'required',
            "first_name"=>'required',
            "last_name"=>'required',
            "email"=>'required',
            "phone"=>'required'
        ]);

        $package = Package::whereTranslation('title', request()->package_name)
            ->first();

        if(!$package)
            return redirect()->back()->with('status', 'error')->with('message', 'Admin has Deleted The Package!');

        $included = '';

        foreach ($package->included_addons as $addon){
            $included .= $addon->title.': '.$addon->description.'<br>';
        }

        $booking_request = [
            'booking_id'=>\Carbon\Carbon::now()->format('Y').'-'.time().'-'.request()->first_name.'-'.request()->package_name,
            'travel_date'=>$package->trip_from_till.' ('.$package->trip_tenure.')',
            'starting_datetime'=>$package->trip_start_date_time,
            'starting_point'=>'',
            'ending_datetime'=>$package->trip_end_date_time,
            'ending_point'=>'',
            'included'=>$included,
            'package_name'=>$package->title,
            'lead_traveller'=>request()->title.' '.request()->first_name.' '.request()->last_name,
            'lead_travellers_email'=>request()->email,
            'lead_travellers_phone'=>request()->phone,
            'adult_travellers'=>request()->adult_guests,
            'child_travellers'=>request()->child_guests,
            //  Saving the biggest total cost and package fee among the 2 mentioned below
            //  1. total cost coming from the form
            //  2. total cost calculated on the go
            //  This is done due to probable change of price of package during the booking proceeding
            'package_fees'=> max([
                $package->price_per_head,
                request()->package_price
            ]),
            'total_cost'=>max([

                request()->total_cost,
                //  Cost coming from the form


                ($package->price_per_head * request()->adult_guests)
                +
                (($package->price_per_head * config('travel-offers.child_rate_fraction')) * request()->child_guests)
                // Cost calculated on the go
            ])
        ];

        $booking = Booking::create($booking_request);

        if(!$booking)
            return redirect()->back()->with('status', 'error')->with('message', 'Booking failed');

        return redirect()->route('confirmed', $booking->booking_id);
    }

    public function confirmed($booking_id){

        $booking = Booking::where('booking_id', $booking_id)->first();

        if(!$booking)
            return 'No Booking found!';

        return view('confirmed', compact('booking'));
    }


}
