<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;
use App\Models\Booking;

class BookingController extends Controller
{
    public function create(Request $request, $slug)
{
    if (!session('user')) return redirect('/');

    $unit = Unit::where('slug', $slug)->firstOrFail();

    return view('booking', [
        'unit' => $unit,
        'check_in' => $request->check_in,
        'check_out' => $request->check_out,
    ]);
}

public function store(Request $request, $slug)
{
    if (!session('user')) return redirect('/');

    $unit = Unit::where('slug', $slug)->firstOrFail();

    $conflict = Booking::where('unit_id', $unit->id)
        ->where(function ($query) use ($request) {
            $query->whereBetween('check_in', [$request->check_in, $request->check_out])
                  ->orWhereBetween('check_out', [$request->check_in, $request->check_out])
                  ->orWhere(function ($q) use ($request) {
                      $q->where('check_in', '<=', $request->check_in)
                        ->where('check_out', '>=', $request->check_out);
                  });
        })
        ->exists();

    if ($conflict) {
        return back()->with('error', 'Selected dates are already booked.');
    }

    Booking::create([
        'account_id' => session('user')->id,
        'unit_id' => $unit->id,
        'check_in' => $request->check_in,
        'check_out' => $request->check_out,
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'email' => $request->email,
        'phone_number' => $request->phone_number,
        'message' => $request->message,
    ]);

    return view('booking_confirmation', [
        'unit' => $unit,
        'check_in' => $request->check_in,
        'check_out' => $request->check_out,
    ]);
}
}
