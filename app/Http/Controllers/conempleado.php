<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;  
use App\empleados;
use App\area;

class conempleado extends Controller
{
    public function altaempleado()
	{
   $clavequesigue = empleados::orderBy('idemple','desc')
						    ->take(1)
							->get();
     $idms = $clavequesigue[0]->idemple+1;
		
		
		//$carreras = areas::orderBy('nombre','asc')
					 // ->get();
		//return $carreras;
	    return view ('sistema.altamaestro')->with('idemple',$idms);
		   //  ->with('area',$carreras)
			  
    }
	public function guardamaestro(Request $request)
	{   
	$nombre = $request->nombre;
	$apellidopaterno = $request->apellidopaterno;
	$appellidomaterno = $request->apellidomaterno;
	$calle = $request->calle;
	$colonia = $request->colonia;
	$municipio = $request->municipio;
	$codigopostal= $request->codigopostal;
	$telefono = $request->telefono;
	$correo = $request->correo;
	$idarea = $request->idarea;
	

	//no se recibe el archivo
	
	 $this->validate($request,[
	     'idemple'=>'required|numeric',
		 'nombre'=>'required|alpha',
		 'apellidopaterno'=>'required|alpha',
		 'apellidomaterno'=>'required|alpha',
		 'calle'=>'required|alpha',
		 'colonia'=>'required|alpha',
		 'municipio'=>'required|alpha',
		 'codigopostal'=>['regex:/^[0-9]{5}$/'],
		 'telefono'=>['regex:/^[0-9]{10}$/'],
         'correo'=>'required|email',
		 
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
	        $emple = new empleados;
			$emple->archivo = $img2;
			$emple->idemple = $request->idemple;
			$emple->nombre = $request->nombre;
			$emple->apellidopa = $request->apellidopa;
			$emple->apellidoma = $request->apellidoma;
			$emple->calle = $request->calle;
			$emple->colonia = $request->colonia;
			$emple->municipio = $request->municipio;
            $emple->codigopostal =$request->codigopostal;
            $emple->correo= $request->correo;
			$emple->telefono =$request->telefono;
			
			$emple->idcarea=$request->idarea;
			$emple->save();
			$proceso = "ALTA DE MAESTRO";
			$mensaje = "Maestro guardado correctamente";
			return view ("sistema.mensaje")
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
	}
	public function reporteempleado()
	{
		$empleado = empleados::orderBy('nombre','asc')->get();
		return view ('sistema.reporte')
		->with('empleados',$empleado);
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
