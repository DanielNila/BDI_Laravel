<?php

namespace App\Http\Controllers;

use App\autobuses;
use Illuminate\Http\Request;

class AutobusesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['autobuses']= autobuses::paginate(7);
        return view('autobuses.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('autobuses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosAutobus=request()->all();
        $datosAutobus= request()->except('_token');
        autobuses::insert($datosAutobus);
       // return response()->json($datosAutobus);
        return redirect('autobuses')->with('Mensaje','Autobus agreagdo exitosamente');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\autobuses  $autobuses
     * @return \Illuminate\Http\Response
     */
    public function show(autobuses $autobuses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\autobuses  $autobuses
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $autobus=autobuses::findOrFail($id);
        return view('autobuses.edit', compact('autobus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\autobuses  $autobuses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosAutobus=request()->all();
        $datosAutobus= request()->except(['_token','_method']);
        autobuses::where('id_autobus','=',$id)->update($datosAutobus);
        
          
        return redirect('autobuses')->with('Mensaje','Autobus editado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\autobuses  $autobuses
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_autobus)
    {
        
        autobuses::destroy($id_autobus);
        
        return redirect('autobuses')->with('Mensaje','Autobus borrado exitosamente');
    }
}
