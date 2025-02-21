<?php

namespace App\Http\Controllers;

use App\Models\Sall;
use Illuminate\Http\Request;

class SallController extends Controller
{


    public function index()
    {
        $sall = Sall::all();
        return view('pages.sall', compact('sall'));
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
    }

    public function delete(Request $request)
    {
        dd($request['id']);
        $sall = Sall::find($request['id']);
        $sall->delete();
    }

    public function PathToUpdate(int $id)
    {
        $sall = Sall::find($id);
        return view('pages.salledit', compact('sall'));
    }

    public function update(Request $request)
    {
        $sall = new Sall();
        $sall->fill([
            'name' => $request->name,
            'description' => $request->description,
            'location'  => $request->location,
            'photo'  => $request->photo
        ]);
        $sall->save();
    }
}
