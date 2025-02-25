<?php

namespace App\Http\Controllers\Medicals\Medical_Specialties;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Medicals\Medical_Specialties\Medical_Specialty;
use App\DataTables\Medicals\Medical_Specialties\MedicalSpecialtyDataTable;
use App\DataTables\Medicals\Medical_Specialties\MedicalSpecialtyTrashedDataTable;
use App\Http\Requests\Medicals\Medical_Specialties\MedicalSpecialtyRequest;

class MedicalSpecialtyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(MedicalSpecialtyDataTable $dataTable)
    {
        return $dataTable->render('auth.medicals.specialties.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $specialty = new Medical_Specialty();
        return view('auth.medicals.specialties.create', ['specialty' => $specialty]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MedicalSpecialtyRequest $request)
    {
        Medical_Specialty::create(
            $request->validated()
                +   ['code' => uniqueCode(8, 'number')]
                +   ['slug' => Str::slug($request->name)]
                +   ['note' => $request->note ? null : 'N/A']
        );

        return redirect()->route('specialty.create')->with('success', __('Medical specialty created successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Medical_Specialty $specialty)
    {
        return view('auth.medicals.specialties.show', [
            'specialty' => $specialty
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medical_Specialty $specialty)
    {
        return view('auth.medicals.specialties.edit', [
            'specialty' => $specialty
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MedicalSpecialtyRequest $request, Medical_Specialty $specialty)
    {
        $specialty->update(
            $request->validated()
                +   ['slug' => Str::slug($request->name)]
                +   ['note' => $request->note ? null : 'N/A']
        );

        return redirect()->route('specialty.edit', $specialty)->with('success', __('Medical specialty updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medical_Specialty $specialty)
    {
        $specialty->delete();
        return redirect()->route('specialty.index')->with('success', __('Medical specialty deleted successfully'));
    }

    public function trashed(MedicalSpecialtyTrashedDataTable $dataTable)
    {
        return $dataTable->render('auth.medicals.specialties.trashed');
    }

    public function restore($id)
    {
        $specialty = Medical_Specialty::onlyTrashed()->findOrFail($id);
        $specialty->restore();
        return redirect()->route('specialty.trashed')->with('success', __('Medical specialty restored successfully'));
    }
}
