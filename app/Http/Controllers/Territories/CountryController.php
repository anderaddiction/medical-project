<?php

namespace App\Http\Controllers\Territories;


use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Territories\Country;
use App\Http\Controllers\Controller;
use App\Models\Territories\Continent;
use App\Http\Requests\Territories\CountryRequest;
use App\DataTables\Territories\Countries\CountryDataTable;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CountryDataTable $dataTable)
    {
        return $dataTable->render('auth.territories.countries.index', [
            'dataTable' => $dataTable
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $country = new Country();
        $continents  = Continent::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('auth.territories.countries.create', [
            'country' => $country,
            'continents' => $continents
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CountryRequest $request)
    {
        Country::create(
            $request->validated()
                + ['code' => uniqueCode(8, 'number')]
                + ['slug' => Str::slug($request->name)]
                + ['note' => $request->note ? null : 'N/A']
        );

        return redirect()->route('country.create')->with('success', __('Document created successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Country $country)
    {
        return view('auth.territories.countries.show', [
            'country' => $country

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Country $country)
    {
        $continents  = Continent::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('auth.territories.countries.edit', [
            'country' => $country,
            'continents' => $continents
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CountryRequest $request, Country $country)
    {
        $country->update(
            $request->validated()
                + ['slug' => Str::slug($request->name)]
                + ['note' => $request->note ? null : 'N/A']
        );

        return redirect()->route('country.edit', ['country' => $country])->with('success', __('Document edited successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Country $country)
    {
        $country->delete();
        return redirect()->route('country.index')->with('success', __('Document deleted successfully'));
    }
}
