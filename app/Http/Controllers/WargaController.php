<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataWarga = Warga::all();

        return response()->json([
            'success' => true,
            'message' => 'berhasil coy',
            'data' => $dataWarga
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataWarga = Warga::create([
            "nama" => $request->name,
            "jenis_kelamin" => $request->jenis_kelamin,
            "no_rumah" => $request->no_rumah
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dataWarga = Warga::find($id);

        return response()->json([
            'success' => true,
            'message' => 'berhasil coy',
            'data' => $dataWarga
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dataWarga = Warga::find($id);

        $dataWarga->update([
            "nama" => $request->name,
            "jenis_kelamin" => $request->jenis_kelamin,
            "no_rumah" => $request->no_rumah
        ]);

        return response()->json([
            'success' => true,
            'message' => 'berhasil coy',
            'data' => $dataWarga
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = Warga::find($id);

        $hapus->delete();
    }
}
