<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Kwitansi;
use App\Models\Penyewa;
use App\Models\Kendaraan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $invoice = Invoice::with(['kwitansi','penyewa','kendaraan'])->get();
        return view('invoice.index', compact('invoice'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kwitansi = Kwitansi::all();
        $penyewa = Penyewa::all();
        $kendaraan = Kendaraan::all();

        return view('invoice.create', compact('kwitansi','penyewa','kendaraan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_kwitansi' => 'required|exists:kwitansi,id',
            'id_penyewa' => 'required|exists:penyewa,id',
            'no_pol' => 'required|string|max:20|exists:kendaraan,id',
        ]);
        Invoice::create($request->all());

        Alert::success('Sukses', 'Invoice Berhasil Ditambahkan');
        return redirect()->route('invoice.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Invoice $invoice)
    {   
        $kwitansi = Kwitansi::all();
        $penyewa = Penyewa::all();
        $kendaraan = Kendaraan::all();
        return view('invoice.edit', compact('invoice', 'kwitansi','penyewa','kendaraan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_kwitansi' => 'required|exists:kwitansi,id',
            'id_penyewa' => 'required|exists:penyewa,id',
            'no_pol' => 'required|string|max:20|exists:kendaraan,id',
        ]);
        
        $invoice = Invoice::findOrFail($id);
        $invoice->update($request->all());

        // 
        Alert::success('Sukses', 'Invoice Berhasil Diupdate');
        return redirect()->route('invoice.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $invoice = Invoice::findOrFail($id);
        $invoice->delete();

        Alert::success('Sukses', 'Data Invoice Berhasil Dihapus');
        return redirect()->route('invoice.index');
    }
}
