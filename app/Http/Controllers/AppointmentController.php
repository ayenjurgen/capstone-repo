<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AppointmentRequest;
use App\Models\AppointmentLists;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
     return AppointmentLists::all();
    }

    public function show(AppointmentLists $appointment_lists)
    {
        return $appointment_lists;
    }

    public function store(AppointmentRequest $Request)
    {
        $appointment_lists = AppointmentLists::create($Request->all());
        return response(
            [
                'message' => 'Patient successfully created',
                'customer_name' => $appointment_lists,
                'id' => $appointment_lists->id
            ],
            201
        );
    }

    public function update(Request $request, AppointmentLists $appointment_lists)
    {
        $appointment_lists->update($request->all());
        return response([
            'message' => 'Patient successfully updated',
            'patient' => $appointment_lists,
            'id' => $appointment_lists->id
        ]);
    }

    public function destroy(AppointmentLists $appointment_lists)
    {
        AppointmentLists::destroy($appointment_lists->id);

        return response([
            'message' => 'Patient successfully deleted'
        ]);
    }
}
