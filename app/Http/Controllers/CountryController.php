<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{

    public function index()
    {
        return Country::all();
    }

    public function show(Country $country)
    {
        return $country;
    }

    public function store(Request $request)
    {
        $country = Country::create($request->all());

        return response()->json($country, 201);
    }

    public function update(Request $request, Country $country)
    {
        $country->update($request->all());

        return response()->json($country, 200);
    }

    public function delete(Country $country)
    {
        $country->delete();

        return response()->json(null, 204);
    }

}
