<?php

namespace App\Http\Controllers;

use App\Models\Iuran;
use App\Models\Penduduk;
use Illuminate\Http\Request;

class AdminIuranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function index()
    {
        
        // dd(auth()->user()->penduduk_id);

        


        return view('dashboard.iuran.index', [
            'iuran' => Iuran::with('penduduk')->orderBy('bayar_tahun', 'asc')->get(),

            'iuran_pribadi' => Iuran::with('penduduk')->where('penduduk_id', '=', auth()->user()->penduduk_id)->get()

            // Agenda::with('type')->where('date', '>=', $date)->orderBy('date', 'desc')->get();
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return 'tambah iuran';
        return view('dashboard.iuran.create', [
            // 'staffs' => Staff::all(),
            // 'komponens' => Komponen::orderBy('name', 'asc')->get(),
            'penduduk' => Penduduk::orderBy('nama', 'asc')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request);
        $validatedData = $request->validate([
            'penduduk_id' => '',
            'bayar_tahun' => '',
            'bayar_bulan' => ''
            // 'komponen_id' => 'required',
            // 'staff_id' => '',
        ]);


        // $validatedData['penduduk_id'] = auth()->user()->id; //menambah request baru
        $validatedData['status'] = 0; //menambah request baru
        $validatedData['nominal'] = 30000; //menambah request baru

        // dd($validatedData);
        Iuran::create($validatedData);

        return redirect('/dashboard/iuran')->with('success', 'Iuran baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\iuran  $iuran
     * @return \Illuminate\Http\Response
     */
    public function show(iuran $iuran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\iuran  $iuran
     * @return \Illuminate\Http\Response
     */
    public function edit(iuran $iuran)
    {
        return 'halaman bayar disini';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\iuran  $iuran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, iuran $iuran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\iuran  $iuran
     * @return \Illuminate\Http\Response
     */
    public function destroy(iuran $iuran)
    {
        //
    }
}
