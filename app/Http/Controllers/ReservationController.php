<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    //

    public function validation()
    {   
        $validation = Reservation::all();
        return view('pages.validation', compact('validation'));
    }



    public function Create(Request $request)
    {
        Reservation::create([
            'startDate' => $request['startDate'],
            'endDate' => $request['endDate'],
            'status' => $request['status'],
            'user_id' => $request['user_id'],
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
            'status'  => $request->status,
            'user_id'  => $request->user_id
        ]);
        $reservation->save();
    }

}
