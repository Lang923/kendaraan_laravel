<?php

namespace App\Http\Controllers;

use App\Models\Penyewa;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PenyewaController extends Controller
{
    //tampilan
    public function index() {
        $penyewa = Penyewa::all();
        return view('penyewa.index', compact('penyewa'));
    }

    //untuk menambahkan
    public function create (){
        return view('penyewa.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nama_penyewa' => 'required|string|max:100',
            'alamat' => 'required|string',
            'no_hp' => 'required|string|max:15',
        ]);
        Penyewa::create($request->all());

        // Alert Notification
        Alert::success('Sukses', 'Penyewa Berhasil Ditambahkan');
        return redirect()->route('penyewa.index');
    }

    //untuk mengedit

    public function edit (Penyewa $penyewa ){
        return view('penyewa.edit', compact('penyewa'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'nama_penyewa' => 'required|string|max:100',
            'alamat' => 'required|string',
            'no_hp' => 'required|string|max:15',
        ]);
        
        $penyewa = Penyewa::findOrFail($id);
        $penyewa->update($request->all());

        // Alert Notification
        Alert::success('Sukses', 'Penyewa Berhasil Di Update');
        return redirect()->route('penyewa.index');
    }
    
    // untuk menghapus
    public function destroy($id) {
        $penyewa = Penyewa::findOrFail($id);
        $penyewa->delete();

        // Alert Notification
        Alert::success('Sukses', 'Penyewa Berhasil Dihapus');
        return redirect()->route('penyewa.index');
    }
}
