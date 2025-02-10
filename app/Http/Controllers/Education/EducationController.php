<?php

namespace App\Http\Controllers\Education;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Education\Education;
use App\Http\Controllers\Controller;
use App\DataTables\Education\EducationDataTable;
use App\DataTables\Education\EducationTrashedDataTable;
use App\Http\Requests\Education\EducationRequest;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(EducationDataTable $dataTable)
    {
        return $dataTable->render('auth.education.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $education = new Education();
        return view('auth.education.create', ['education' => $education]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EducationRequest $request)
    {
        $education = Education::create(
            $request->validated()
                +   ['code' => uniqueCode(8, 'number')]
                +   ['slug' => Str::slug($request->name)]
                +   ['note' => $request->note ? null : 'N/A']
        );

        return redirect()->route('education.create')->with('success', __('Education level created successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Education $education)
    {
        return view('auth.education.show', [
            'education' => $education
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Education $education)
    {
        return view('auth.education.edit', [
            'education' => $education
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EducationRequest $request, Education $education)
    {
        $education->update(
            $request->validated()
                +   ['slug' => Str::slug($request->name)]
                +   ['note' => $request->note ? null : 'N/A']
        );

        return redirect()->route('education.edit', ['education' => $education])->with('success', __('Education level updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Education $education)
    {
        $education->delete();

        return redirect()->route('education.index')->with('success', __('Education level deleted successfully'));
    }

    /**
     * Display a listing resource from trash.
     */
    public function trashed(EducationTrashedDataTable $dataTable)
    {
        return $dataTable->render('auth.education.trashed');
    }

    /**
     * Restore the specified resource from trash.
     */
    public function restore($id)
    {
        $education = Education::withTrashed()->find($id);
        $education->restore();

        return redirect()->route('education.trashed')->with('success', 'Education level restored successfully');
    }
}
