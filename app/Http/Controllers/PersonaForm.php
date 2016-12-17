<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Persona;
use Carbon\Carbon;

class PersonaForm extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id = $request->input('id');
        $persona= [];

        if($id!=0)
        {
            
            if( (isset($id) && $id!="") ){
                $persona = DB::table('personas')          
                    ->where('id', '=', $id)
                    ->first();
                //dd($persona);
            }                 
        }        
        return view('agenda.formPersona', [ 'persona' => $persona ]);         
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
        $id = $request->input('id');
        
        if( $id != "" ){//UPDATE

          $dominio = Persona::where("id", $id)            
            ->update([
              'name' => $request->name,
              'last_name' => $request->last_name,
              'ci' => $request->ci,
              //'cumple' => date('Y-m-d', strtotime($request->cumple)),
              'cumple' => Carbon\Carbon::createFromFormat('Y-m-d', $request->cumple),
              'apodo' => $request->apodo
                
            ]);              
            
          return response()->json([ 'success' => 1, 'message' => "<strong>Excelente!</strong> Datos Actualizados!" ]);//1:OK; 0:ERROR; 
        } else {//INSERT 
          $persona = new Persona;         
          
          $persona->name = $request->name;
          $persona->last_name = $request->last_name;
          $persona->ci = $request->ci;
          $persona->cumple = date('Y-m-d', strtotime($request->cumple));
          $persona->apodo = $request->apodo;
          
          $persona->save();

          return response()->json([ 'success' => 1, 'message' => "<strong>Excelente!</strong> Datos Guardados!" ]);//1:OK; 0:ERROR; 
        }
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
        echo $del = DB::table('personas')->where('id', $id)->delete();
        //dd($del);
        // ->delete();    
        // echo $deleted = DB::delete('delete from personas')->where('id', $id);

    }
}
