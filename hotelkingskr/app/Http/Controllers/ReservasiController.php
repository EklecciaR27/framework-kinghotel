<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\Reservasi;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    public function create(){
        return view('datahotel.crud.create', [
        'guest' => Guest::all()
        ]);
    }

    public function store(Request $request){
        // Validate Input
        $validateData = $request->validate([
            'nama' => 'required|string',
            'notelp' => 'required|integer',
            'email' => 'required|string',
            'jumlahkamar' => 'required|integer',
            'guest_id' => 'required'
        ]);


        Reservasi::create($validateData);

        return redirect()->route('datahotel.crud.create')->with('success','Reservasi Berhasil ditambahkan');
    }
    public function edit($id){
        return view('datahotel.crud.edit',[
            'reservasis' => Reservasi::all()->where('id', $id)->first(),
            'guests' => Guest::all(),
        ]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'nama' => 'required|string',
            'notelp' => 'required|integer',
            'email' => 'required|string',
            'jumlahkamar' => 'required|integer',
            'guest_id' => 'required'
        ]);
        $reservasi = Reservasi::findOrFail($id);
        $reservasi->update([
        'nama' => $request->nama,
        'notelp' => $request->notelp,
        'email' => $request->email,
        'jumlahkamar' => $request->jumlahkamar,
        'guest_id' => $request->guest_id,
    ]);
    session(['edited_id' => $id]);
    return redirect()->route('datahotel.reservasi')->with('success','Reservasi ID $id Berhasil diubah');
    }

    public function delete($id){
        $reservasi = Reservasi::findOrFail($id);
        $reservasi->delete();
        session(['deleted_id' => $id]);
        return redirect()->route('datahotel.reservasi')->with('success1','Reservasi ID $id Berhasil dihapus');
    }


}
