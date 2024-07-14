<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\Kwitansi;
use App\Models\Penyewa;
use App\Models\Sewa;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SewaController extends Controller
{
    // Tampilan Data
    public function index() {
        $sewa = Sewa::with(['kendaraan', 'penyewa', 'kwitansi'])->get();
        return view('sewa.index', compact('sewa'));
    }

    // untuk menambahkan Data
    public function create() {  
        $kendaraan = Kendaraan::all();
        $penyewa = Penyewa::all();
        $kwitansi = Kwitansi::all();

        return view('sewa.create', compact('kendaraan', 'penyewa', 'kwitansi'));
    }

    public function store(Request $request) {
        $request->validate([
            'no_pol' => 'required|max:20|exists:kendaraan,id',
            'tgl_sewa' => 'required|date',
            'tgl_selesai' => 'required|date',
            'tlp_tujuan' => 'required|string|max:15',
            'alamat_tujuan' => 'required|string',
            'biaya_tujuan' => 'required|integer',
            'kota' => 'required|string|max:50',
            'id_penyewa' => 'required|exists:penyewa,id',
            'jlh_penumpang' => 'required|integer',
            'id_kwitansi' => 'required|exists:kwitansi,id'
        ]);
        Sewa::create($request->all());

        // Alert Notification
        Alert::success('Sukses', 'Data Sewa Berhasil Ditambahkan');
        return redirect()->route('sewa.index');
    }

    // untuk mengedit
    public function edit(Sewa $sewa) {
        $kendaraan = Kendaraan::all();
        $penyewa = Penyewa::all();
        $kwitansi = Kwitansi::all();

        return view('sewa.edit', compact('sewa', 'kendaraan', 'penyewa', 'kwitansi'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'no_pol' => 'required|string|max:20|exists:kendaraan,id',
            'tgl_sewa' => 'required|date',
            'tgl_selesai' => 'required|date',
            'tlp_tujuan' => 'required|string|max:15',
            'alamat_tujuan' => 'required|string',
            'biaya_tujuan' => 'required|integer',
            'kota' => 'required|string|max:50',
            'id_penyewa' => 'exists:penyewa,id',
            'jlh_penumpang' => 'required|integer',
            'id_kwitansi' => 'exists:kwitansi,id'
        ]);
        
        $sewa = Sewa::findOrFail($id);
        $sewa->update($request->all());

        // Alert Notification
        Alert::success('Sukses', 'Data Sewa Berhasil Di Update');
        return redirect()->route('sewa.index');
    }
    
    // untuk menghapus
    public function destroy($id) {
        $sewa = Sewa::findOrFail($id);
        $sewa->delete();

        // Alert Notification
        Alert::success('Sukses', 'Data Sewa Berhasil Di Hapus');
        return redirect()->route('sewa.index');
    }
}
