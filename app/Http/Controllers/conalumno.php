<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\alumnos;
use App\carreras;

class conalumno extends Controller
{
    public function altaalumno()

    {
    $clavequesigue = alumnos::orderBy('idalumno','desc')
                            ->take(1)
                            ->get();
     $idms = $clavequesigue[0]->idalumno+1;
        
        
        //$carreras = carreras::where('activo','Si')
                      //        ->orderBy('nombre','asc')
                        //      ->get();
        //return $carreras;
        return view ('sistema.altaalumno')->with('idalumno',$idms);
              //->with('carreras',$carreras)
              
    }
    public function guardaalumno(Request $request)
    {   
    $nombre = $request->nombre;
    $apellidopaterno = $request->apellidopaterno;
    $appellidomaterno = $request->apellidomaterno;
    $matricula = $request->matricula;
    $telefono = $request->telefono;
    $correo = $request->correo;
    $calle = $request->calle;
    $colonia = $request->colonia;
    $municipio = $request->municipio;
    $codigopostal= $request->codigopostal;
    $activo = $request->activo;
    $idcarrera = $request->idcarrera;
    
    
    //no se recibe el archivo
    
     $this->validate($request,[
         'idemple'=>'required|numeric',
         'nombre'=>'required|alpha',
         'apellido paterno'=>'required|alpha',
         'apellido materno'=>'required|alpha',
         'matricula'=>'required|alpha',
         'telefono'=>['regex:/^[0-9]{10}$/'],
         'correo'=>'required|email',
         'calle'=>'required|alpha',
         'colonia'=>'required|alpha',
         'municipio'=>'required|alpha',
         'codigopostal'=>['regex:/^[0-9]{5}$/'],
         'activo'=>'required|alpha',
         
         'archivo' =>'image|mimes:jpeg,jpg,gif,png'
         ]);
        //$file => c:/>users/misimagenes/carpt/normita.jpg
     $file = $request->file('archivo');
     if($file!="")
     {
     //ldate => 20180928_063455_
     $ldate = date('Ymd_His_');
     //$img = normita.jpg
     $img = $file->getClientOriginalName();
     //img2 = 20180928_063455_normita.jpg
     $img2 = $ldate.$img;
     
     \Storage::disk('local')->put($img2, \File::get($file));
     }
     else
     {
         $img2 = 'sinfoto.png';
     }		 
    
         //insert into maestros (idm,nomre,edad)-------
            $alum = new alumnos;
            $alum->archivo = $img2;
            $alum->idm = $request->idm;
            $alum->nombre = $request->nombre;
            $alum->apellidopaterno = $request->apellidopaterno;
            $alum->apellidomaterno = $request->apellidomaterno;
            $alum->matricula= $request->matricula;
            $alum->telefono =$request->telefono;
            $alum->correo= $request->correo;
            $alum->calle = $request->calle;
            $alum->colonia = $request->colonia;
            $alum->municipio = $request->municipio;
            $alum->codigopostal =$request->codigopostal;
            $alum->activo= $request->activo;
            $alum->idcarrera =$request->idcarrera;
            $alum->save();
            $proceso = "ALTA DE MAESTRO";
            $mensaje = "Maestro guardado correctamente";
            return view ("sistema.mensaje")
            ->with('proceso',$proceso)
            ->with('mensaje',$mensaje);
    }
    public function reportemaestros()
    {
        $alumno = alumnos::orderBy('nombre','asc')->get();
        return view ('sistema.reporte')
        ->with('alumnos',$alumno);
    }
    public function eliminam($idm)
    {
            maestros::find($idm)->delete();
            $proceso = "ELIMINAR MAESTROS";
            $mensaje = "El maestro ha sido borrado Correctamente";
            return view ('sistema.mensaje')
            ->with('proceso',$proceso)
            ->with('mensaje',$mensaje);
    }
    public function modificam($idm)
    {
        $infom= maestros::where('idm','=',$idm)->get();
        $idc = $infom[0]->idc;
        
        $carrera  = carreras::where('idc','=',$idc)->get();
        
        $todasdemas = carreras::where('idc','!=',$idc)->get();
        
        return view ('sistema.modificamaestro')
        ->with('infom',$infom[0])
        ->with('idc',$idc)
        ->with('carrera',$carrera[0]->nombre)
        ->with('todasdemas',$todasdemas);
    }
}
    
