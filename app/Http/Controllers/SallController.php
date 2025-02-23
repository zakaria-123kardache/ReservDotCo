<?php

namespace App\Http\Controllers;

use App\Models\Sall;
use Illuminate\Http\Request;

class SallController extends Controller
{


    public function sall()
    {
        $sall = Sall::all();
        return view('pages.sall', compact('sall'));
    }

    public function PathToUpdate(int $id)
    {
        $sall = Sall::find($id);
        return view('pages.salledit', compact('sall'));
    }

    public function create(Request $request)
    {
        Sall::create([
            'name' => $request['name'],
            'description' => $request['description'],
            'location' => $request['location'],
            'photo' => $request['photo'],
            'user_id' => $request['user_id'],
        ]);

        return redirect()->route('sall');
    }

    public function delete($id)
    {
        $sall = Sall::find($id);
        $sall->delete();
        return redirect()->route('sall');
    }

    public function update(Request $request)
    {
        $sall =sall::find($request->sall_id);
        $sall->update([
            'name' => $request->name,
            'description' => $request->description,
            'location'  => $request->location,
            'photo'  => $request->photo
        ]);
        return redirect()->route('sall');
    }
}


