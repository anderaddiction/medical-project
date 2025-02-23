<?php

namespace App\Http\Controllers\Territories;

use App\DataTables\Territories\Continents\ContinentDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Territories\ContinetRequest;
use App\Models\Territories\Continent;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ContinentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ContinentDataTable $dataTable)
    {
        return $dataTable->render('auth.territories.continents.index', [
            'dataTable' => $dataTable
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $continent = new Continent(); 
        return view('auth.territories.continents.create', [
            'continent' => $continent
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContinetRequest $request)
    {
        Continent::create($request->validated()
            + ['code' => uniqueCode(8,'number')]
            + ['slug' => Str::slug($request->name)]
            + ['note' => $request->note ? null : 'N/A']
        );

        return redirect()->route('continent.create')->with('success', __('Document created successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Continent $continent)
    {
        return view('auth.territories.continents.show', [
            'continent' => $continent
        
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Continent $continent)
    {
        return view('auth.territories.continents.edit', [
            'continent' => $continent
        
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContinetRequest $request, Continent $continent)
    {
        $continent->update($request->validated()
            + ['slug' => Str::slug($request->name)]
            + ['note' => $request->note ? null : 'N/A']
        );

        return redirect()->route('continent.edit', ['continent' => $continent])->with('success', __('Document edited successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Continent $continent)
    {
        $continent->delete();
        return redirect()->route('continent.index')->with('success', __('Document deleted successfully'));
    }
}
