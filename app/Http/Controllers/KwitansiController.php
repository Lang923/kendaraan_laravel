<?php

namespace App\Http\Controllers;

use App\Models\Kwitansi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KwitansiController extends Controller
{
    //tampilan
    public function index() {
        $kwitansi = Kwitansi::all();
        return view('kwitansi.index', compact('kwitansi'));
    }

    //untuk menambahkan
    public function create (){
        return view('kwitansi.create');
    }

    public function store(Request $request) {
        $request->validate([
            'tgl_kwitansi' => 'required|date',
        ]);
        Kwitansi::create($request->all());

        // Alert Notification
        Alert::success('Sukses', 'Data Kwitansi Berhasil Ditambahkan');
        return redirect()->route('kwitansi.index');
    }

    //untuk mengedit
    public function edit (Kwitansi $kwitansi ){
        return view('kwitansi.edit', compact('kwitansi'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'tgl_kwitansi',
        ]);
        
        $kwitansi = Kwitansi::findOrFail($id);
        $kwitansi->update($request->all());

        // Alert Notification
        Alert::success('Sukses', 'Data Kwitansi Berhasil Di Update');
        return redirect()->route('kwitansi.index');
    }
    
    // untuk menghapus
    public function destroy($id) {
        $kwitansi = Kwitansi::findOrFail($id);
        $kwitansi->delete();

        // Alert Notification
        Alert::success('Sukses', 'Data Kwitansi Berhasil Di Hapus');
        return redirect()->route('kwitansi.index');
    }
}
