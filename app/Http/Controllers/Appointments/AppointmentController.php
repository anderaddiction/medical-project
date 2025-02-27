<?php

namespace App\Http\Controllers\Appointments;

use App\DataTables\Appointments\AppointmentDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Appointments\AppointmentRequest;
use App\Models\Appointments\Appointment;
use App\Models\Medicals\Medical_Specialties\Medical_Specialty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $specialities  = Medical_Specialty::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('auth.appointments.create', [
            'appointment' => $appointment,
            'specialities' => $specialities
        ]);
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(AppointmentRequest $request)
    {

        dd($request->all());
         
        $userId = Auth::check() ? Auth::user()->id : null;
        Appointment::create($request->validated()
            + ['code' => uniqueCode(8,'number')]
            + ['slug' => Str::slug($request->name)]
            + ['responsable_id'=> $userId]
            + ['note' => $request->note ? null : 'N/A']
        );

        return redirect()->route('appointment.create')->with('success', __('Document created successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Appointment $appointment)
    {
        return view('auth.appointments.show', [
            'appointment' => $appointment
        
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appointment $appointment)
    {
        $speciality  = Medical_Specialty::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('auth.appointments.edit', [
            'appointment' => $appointment,
            'medical_specialty' => $speciality
        
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

