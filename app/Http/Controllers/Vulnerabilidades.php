<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Vulnerabilidades extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $vulnera = Vulnerabilidades::all();
        return $vulnera;
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
        $vulnerabilidades = new vulnerabilidades();
        $vulnerabilidades->ano = $request->ano;
        $vulnerabilidades->mes = $request->mes;
        $vulnerabilidades->Codigo_vulnerabilidad = $request->Codigo_vulnerabilidad;

        $vulnerabilidades->save;



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
        //
    }

    public function llamarWeb(){
        $resultado = file_get_contents('https://nvd.nist.gov/vuln/vulnerability-status');
        return $resultado;
      }
}
