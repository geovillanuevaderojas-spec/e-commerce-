<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;

class UnitController extends Controller
{
     public function index()
    {
        $units = Unit::all();
        return view('homepage', compact('units'));
    }
    public function info($slug)
    {
        $unit = \App\Models\Unit::where('slug', $slug)->firstOrFail();
        return view('unit_info', compact('unit'));
    }
    public function booking($slug)
{
    $unit = \App\Models\Unit::where('slug', $slug)->firstOrFail();
    return view('booking', compact('unit'));
}
}
