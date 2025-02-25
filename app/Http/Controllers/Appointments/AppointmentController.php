<?php

namespace App\Http\Controllers\Territories;

use App\DataTables\Appointments\AppointmentDataTable;
use App\Http\Requests\Appointments\AppointmentRequest;
use App\Http\Controllers\Controller;
use App\Models\Appointments\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(AppointmentDataTable $dataTable)
    {
        return $dataTable->render('auth.appointments.index', [
            'dataTable' => $dataTable
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $appointment = new Appointment(); 
        return view('auth.appointments.create', [
            'appointment' => $appointment
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AppointmentRequest $request)
    {
        Appointment::create($request->validated()
            + ['code' => uniqueCode(8,'number')]
            + ['slug' => Str::slug($request->name)]
            + ['note' => $request->note ? null : 'N/A']
        );

        return redirect()->route('appointment.create')->with('success', __('Document created successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Appointment $appointment)
    {
        return view('auth.territories.appointments.show', [
            'appointment' => $appointment
        
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appointment $appointment)
    {
        return view('auth.territories.appointments.edit', [
            'appointment' => $appointment
        
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AppointmentRequest $request, Appointment $appointment)
    {
        $appointment->update($request->validated()
            + ['slug' => Str::slug($request->name)]
            + ['note' => $request->note ? null : 'N/A']
        );

        return redirect()->route('appointment.edit', ['appointment' => $appointment])->with('success', __('Document edited successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return redirect()->route('appointment.index')->with('success', __('Document deleted successfully'));
    }
}

