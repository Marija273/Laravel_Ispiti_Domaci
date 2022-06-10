<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\KatedraResource;
use App\Models\Katedra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class KatedraKontroler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return KatedraResource::collection(Katedra::all());
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Katedra  $katedra
     * @return \Illuminate\Http\Response
     */
    public function show(Katedra $katedra)
    {
        return new KatedraResource($katedra);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Katedra  $katedra
     * @return \Illuminate\Http\Response
     */
    public function edit(Katedra $katedra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Katedra  $katedra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Katedra $katedra)
    {
        $validator = Validator::make($request->all(), [
            'naziv' => 'required',
            'broj_clanova' => 'required',
            'sef' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $katedra->naziv = $request->naziv;
        $katedra->broj_clanova = $request->broj_clanova;
        $katedra->sef = $request->sef;
        $katedra->save();

        return response()->json('Izmene sačuvane');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Katedra  $katedra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Katedra $katedra)
    {
        //
    }
}
