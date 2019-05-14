<?php

namespace App\Http\Controllers;
use App\Usuario;
use Illuminate\Http\Request;


class UsuariosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Usuario::all();
        //return Usuario::where('user_id', auth()->id())->get();
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
       print_r($request);
          $usuario = new Usuario();
        $usuario->nombre = $request->nombre;
        $usuario->apellidop = $request->apellidop;
        $usuario->apellidom = $request->apellidom;
        $usuario->edad = $request->edad;
        $usuario->direccion = $request->direccion;
        $usuario->save();

        return $usuario;

        //
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
          ConsoleOutput::writeln('hello'); 
        //  $usuario = Usuario::find($id);
        //  if($request->nombre){
        // $usuario->nombre = $request->nombre;
        //    }
        // if($request->apellidop){
        // $usuario->apellidop = $request->apellidop;
        // }
        // if($request->apellidom){
        // $usuario->apellidom = $request->apellidom;
        // }
        // if($request->edad){
        // $usario->edad = $request->edad;
        // }
        // if($request->direccion){
        // $usuario->direccion = $request->direccion;
        // }
        // $usuario->save();
        // return $usuario;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

          Usuario::find($id)->delete();
        
    }
}
