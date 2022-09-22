<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\City;

class CountryController extends Controller
{

    public function index()
    {
        $users = Country::all();
        return view('countries.list', compact('users'));

    }

    public function citiesList($countryId)
    {

        return view('cities.list', compact('cities'));
    }

}
