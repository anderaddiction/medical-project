<?php

namespace App\Http\Controllers\Medicals\Medical_Disabilities;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Medicals\Medical_Disabilities\Medical_Disability;
use App\DataTables\Medicals\Medical_Disabilities\DisabilityDataTable;
use App\Http\Requests\Medicals\Medical_Disabilities\DisabilityRequest;
use App\DataTables\Medicals\Medical_Disabilities\DisabilityTrashedDataTable;

class DisabilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(DisabilityDataTable $dataTable)
    {
        return $dataTable->render('auth.medicals.disabilities.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $disability = new Medical_Disability();
        return view('auth.medicals.disabilities.create', [
            'disability' => $disability
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DisabilityRequest $request)
    {
        Medical_Disability::create(
            $request->validated()
                +   ['code' => uniqueCode(8, 'number')]
                +   ['slug' => Str::slug($request->name)]
                +   ['note' => $request->note ? $request->note : 'N/A']
        );

        return redirect()->route('disability.create')
            ->with('success', 'Disability created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Medical_Disability $disability)
    {
        return view('auth.medicals.disabilities.show', [
            'disability' => $disability
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medical_Disability $disability)
    {
        return view('auth.medicals.disabilities.edit', [
            'disability' => $disability
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DisabilityRequest $request, Medical_Disability $disability)
    {
        $disability->update(
            $request->validated()
                +   ['slug' => Str::slug($request->name)]
                +   ['slug' => $request->note ? $request->note : 'N/A']
        );

        return redirect()->route('disability.edit', $disability)
            ->with('success', 'Disability updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medical_Disability $disability)
    {
        $disability->delete();

        return redirect()->route('disability.index')
            ->with('success', 'Disability deleted successfully.');
    }

    /**
     * Display a listing of the trashed resource.
     */
    public function trashed(DisabilityTrashedDataTable $dataTable)
    {
        return $dataTable->render('auth.medicals.disabilities.trashed');
    }

    /**
     * Restore the specified resource from storage.
     */
    public function restore($id)
    {
        $disability = Medical_Disability::withTrashed()->find($id);
        $disability->restore();

        return redirect()->route('disability.index')
            ->with('success', 'Disability restored successfully.');
    }
}
