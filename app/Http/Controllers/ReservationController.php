<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    //

    public function Create(Request $request)
    {
        Reservation::create([
            'startDate' => $request['startDate'],
            'endDate' => $request['endDate'],
            'status' => $request['status']
        ]);
    }

    public function delete(Request $request)
    {
        dd($request['id']);
        $reservation = Reservation::find($request['id']);
        $reservation->delete();
    }

    public function PathToupdate (int $id)
    {
        $reservation = Reservation::find($id);
        return view('pages.reservationedit', compact('reservation'));
    }

    public function update(Request $request)
    {
        $reservation = new Reservation();
        $reservation->fill([
            'startDate' => $request->startDate,
            'endDate' => $request->endDate,
            'status'  => $request->status
        ]);
        $reservation->save();
    }

}
