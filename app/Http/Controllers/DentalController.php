<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AppointmentLists;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;

class DentalController extends Controller
{
    public function index()
    {
     return Products::all();
    }

    public function addProduct()
    {
     return Products::all();
    }

    public function appointmentList()
    {
     return AppointmentLists::all();
    }
}
