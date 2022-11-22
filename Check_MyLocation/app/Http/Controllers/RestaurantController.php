<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Http\Requests;
use function PHPUnit\Framework\assertJsonFileEqualsJsonFile;


class RestaurantController extends Controller
{

    public function getNearestRestaurant()
    {

        if(isset($_GET["lng"]) && isset($_GET["lat"])) {

            // Save longitude and latitude to variables
            $lng = $_GET["lng"];
            $lat = $_GET["lat"];

            // Make a request with tomtom api to get nearby restaurant within 2km
            $response = Http::get('https://api.tomtom.com/search/2/nearbySearch/.json?lat='.$lat.'&lon='.$lng.'&limit=1&countrySet=EG%2FEGY&radius=2000&categorySet=7315100&view=Unified&openingHours=nextSevenDays&relatedPois=all&key=6IGXkXWkZFHPFuTINPciRNFXAGEgty2e');

            // Convert json to array
            $collection = collect(json_decode($response, true));
            $results = $collection['results'];

            // Get data from array
            $name = $results[0]['poi']['name'];
            $address = $results[0]['address']['freeformAddress'];
            $latitude = $results[0]['position']['lat'];
            $longitude = $results[0]['position']['lon'];

            //Return these data to view nearestRestaurant
            return view('nearestRestaurant',compact('name','address','latitude','longitude'));

        }
    }

}
