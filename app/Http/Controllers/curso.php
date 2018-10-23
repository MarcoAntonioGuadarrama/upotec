<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\carreras;
use App\maestros;

class curso extends Controller
{
    public function areatriangulo()
    {
        $base = 34;
        $altura= 40;
        $area = $base * $altura /2;
        echo "El area del triangulo es $area";
    }
    public function areacirculo($radio)
    {
        $pi = 3.14;
        $area = $pi * $radio * $radio;
        echo "el Area del circulo es $area";
    }
	public function altamaestro()
	{
   $clavequesigue = maestros::orderBy('idm','desc')
						    ->take(1)
							->get();
     $idms = $clavequesigue[0]->idm+1;
		
		
		$carreras = carreras::where('activo','Si')
		                      ->orderBy('nombre','asc')
							  ->get();
		//return $carreras;
	    return view ('sistema.altamaestro')
		      ->with('carreras',$carreras)
			  ->with('idms',$idms);
    }
	public function guardamaestro(Request $request)
	{   
	$nombre = $request->nombre;
	$edad= $request->edad;
	$correo = $request->correo;
	$idm = $request->idm;
	$cp = $request->cp;

	//no se recibe el archivo
	
	 $this->validate($request,[
	     'idm'=>'required|numeric',
         'nombre'=>'required|alpha',
         'edad'=>'required|integer|min:18|max:70',
         'correo'=>'required|email',
		 'cp'=>['regex:/^[0-9]{5}$/'],
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
	        $maest = new maestros;
			$maest->archivo = $img2;
			$maest->idm = $request->idm;
			$maest->nombre = $request->nombre;
			$maest->edad =$request->edad;
			$maest->correo= $request->correo;
			$maest->cp=$request->cp;
			$maest->idc=$request->idc;
			$maest->save();
			$proceso = "ALTA DE MAESTRO";
			$mensaje = "Maestro guardado correctamente";
			return view ("sistema.mensaje")
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
	}
	public function reportemaestros()
	{
		$maestros = maestros::orderBy('nombre','asc')->get();
		return view ('sistema.reporte')
		->with('maestros',$maestros);
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











