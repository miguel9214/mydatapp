<?php

namespace App\Http\Controllers;

use App\Models\MercadoLibre;
use Illuminate\Http\Request;

class MercadoLibreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(

            MercadoLibre::latest()->paginate()
        );
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MercadoLibre $mercadoLibre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MercadoLibre $mercadoLibre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MercadoLibre $mercadoLibre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MercadoLibre $mercadoLibre)
    {
        $mercadoLibre->delete();
    }
}
