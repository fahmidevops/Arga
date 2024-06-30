<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use App\Http\Requests\StorePendudukRequest;
use App\Http\Requests\UpdatePendudukRequest;
use Illuminate\Http\Request;


class AdminPendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.penduduk.index', [
            'warga' => Penduduk::orderBy('nama', 'asc')->get(),
            

            // 'komponen' => Komponen::orderBy('name', 'asc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.penduduk.create', [
            // 'komponens' => Komponen::orderBy('name', 'asc')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePendudukRequest  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(StorePendudukRequest $request)
    public function store(StorePendudukRequest $request)
    {

        // dd($request);
        
        $validatedData = $request->validate([

            'KK' => '',
            'NIK' => '',
            'nama' => '',
            'tmpt_lahir' => '',
            'tgl_lahir' => '',
            'jk' => '',
            'alamat' => '',
            'RT' => '',
            'RW' => '',
            'agama' => '',
            'telp' => '',
            'is_kepala_keluarga' => ''
        ]);

        // $validatedData['user_id'] = auth()->user()->id;

        // dd($validatedData);

        Penduduk::create($validatedData);

        return redirect('/dashboard/penduduk')->with('success', 'Data Warga Berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function show(Penduduk $penduduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function edit(Penduduk $penduduk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePendudukRequest  $request
     * @param  \App\Models\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePendudukRequest $request, Penduduk $penduduk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penduduk $penduduk)
    {
        //
    }
}
