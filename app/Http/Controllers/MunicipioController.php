<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Municipio;
use App\Familia;
use App\Foto;
use App\Http\Requests;

class MunicipioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('evidencias');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $municipios = Municipio::all();
      $aux = array();
      foreach ($municipios as $municipio) {
        $aux[$municipio->id_municipios] = $municipio->Nombre;
      }
      return view('home')->with('municipios',$aux) ;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $familia = new Familia();
        $familia->id_Municipios = $request->id_municipios;
        $familia->nombre = $request->nombre;
        $familia->save();
        if ($request->hasFile('Imagen1')) {
          $path = public_path().'/images/fotos';
          $file1 = $request->file('Imagen1');
          $nombre = 'Imagen1'.time().'.'.$file1->getClientOriginalExtension();
          
          $foto1 = new Foto();
          $foto1->id_Familia = $familia->id;
          $foto1->nombre = $nombre;
          $foto1->tipo = 'PDT';
          $foto1->save();
          $file1->move($path, $nombre);
        }
        if ($request->hasFile('Imagen2')) {
          $path = public_path().'/images/fotos';
          $file2 = $request->file('Imagen2');
          $nombre = 'Imagen2'.time().'.'.$file2->getClientOriginalExtension();
          
          $foto2 = new Foto();
          $foto2->id_Familia = $familia->id;
          $foto2->nombre = $nombre;
          $foto2->tipo = 'PEE';
          $foto2->save();
          $file2->move($path, $nombre);
        }
        if ($request->hasFile('Imagen3')) {
          $path = public_path().'/images/fotos';
          $file3 = $request->file('Imagen3');
          $nombre = 'Imagen3'.time().'.'.$file3->getClientOriginalExtension();
          
          $foto3 = new Foto();
          $foto3->id_Familia = $familia->id;
          $foto3->nombre = $nombre;
          $foto3->tipo = 'PT';
          $foto3->save();
          $file3->move($path, $nombre);
        }
        return redirect()-> route('Municipios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function autocomplete(Request $request)
    {
        if ($request->ajax()) {
            $data = Municipio::where('Nombre', 'LIKE', "$request->name%")->get();
            $municipios = array();
            foreach ($data as $municipio) {
              array_push($municipios,['value' => $municipio->id_municipios, 'label' => $municipio->Nombre]);
            }
            return response()->json([
              'municipios' => $municipios
            ]);
        }
    }
}
