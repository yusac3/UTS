<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\barang;
use App\Models\satuan;

use Illuminate\Http\Request;

class barangeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $pageTitle = 'barangs List';
     $barang = barang::all();
     return view('barangnng.index', ['pageTitle' => $pageTitle, 'barang' => $barang]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
 $pageTitle = 'Create barang';
 return view('barangnng.create', compact('pageTitle'));
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':attribute harus diisi.',
            'email' => 'Isi :attribute dengan format yang benar',
            'numeric' => 'Isi :attribute dengan angka'
        ];

        $validator = Validator::make($request->all(), [
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'dekripsi_barang' => 'required',
            'harga_barang' => 'required|numeric',
            'satuan_barang' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        $barang = new Barang;
        $barang->kode_barang = $request->kode_barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->dekripsi_barang = $request->dekripsi_barang;
        $barang->harga_barang = $request->harga_barang;
        $barang->satuan_barang = $request->satuan_barang;
        $barang->save();

        return redirect()->route('barangs.index');
    }




    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    $pageTitle = 'barang Detail';
    // ELOQUENT
    $barang =  barang::find($id);
    return view('barang.show', compact('pageTitle', 'barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'edit barang';

        $satuan = satuan::all();
        $barang = barang::find($id);
         return view('barangs.edit', compact('pageTitle', 'satuan', 'barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // ELOQUENT
    barang::find($id)->delete();
    return redirect()->route('barangnng.index');
    }
}
