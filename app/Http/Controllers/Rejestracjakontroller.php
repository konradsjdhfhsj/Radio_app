<?php

namespace App\Http\Controllers;

use App\Models\Dane;
use Illuminate\Container\Attributes\DB;
use Illuminate\Http\Request;

class Rejestracjakontroller extends Controller
{
    public function Rejestracja(Request $request){
        $request->validate([
            'imie' => 'required|string',
            'nazwisko' => 'required|string',
            'wiek' => 'required|string',
            'email' => 'required|string',
            'haslo' => 'required|string'
        ]); $dane = Dane::create([
            'imie' => $request->imie,
            'nazwisko' => $request->nazwisko,
            'wiek' => $request->wiek,
            'email' => $request->email,
            'haslo' => $request->email
        ]); return redirect('/lobby')->with("Alles war gut");
    }
}
