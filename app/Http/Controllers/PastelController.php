<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pastel;

class PastelController extends Controller
{
    public function guardaPastel(Request $request)
    {
        $pastel= new Pastel();
        $pastel->sabor=$request->sabor;
        $pastel->precio=$request->precio;
        $pastel->save();

        return redirect('/');
    }

    public function muestra()
    {
        $pasteles=Pastel::all();
        return view('welcome')->with('pasteles',$pasteles);
    }

    public function editaPastel($id)
    {
        $pastel=Pastel::find($id);
        return view('editapastel')->with('pastel',$pastel);
    }

    public function GuardaEdicion(Request $request)
    {
        $pastel=Pastel::find($request->id);
        $pastel->sabor=$request->sabor;
        $pastel->precio=$request->precio;
        $pastel->save();
        return redirect('/');
    }

    public function borra($id)
    {
        $pastel=Pastel::find($id);
        $pastel->delete();
        return redirect('/');
    }
}
