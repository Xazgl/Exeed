<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function TXL()
    {
        return view('cars.TXL');
    }
    public function VX()
    {
        return view('cars.VX');
    }
}
