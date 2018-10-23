<html>
<body>
<h1>Modifica maestro</h1>
<br>
<form action ="" method = 'POST' enctype='multipart/form-data'>
{{csrf_field()}}

@if($errors->first('idm')) 
<i> {{ $errors->first('idm') }} </i> 
@endif	<br>
    
clave <input type = 'text' name = 'idm' value="{{$infom->idm}}" readonly = 'readonly'>
<br>
@if($errors->first('nombre')) 
<i> {{ $errors->first('nombre') }} </i> 
@endif	<br>
Nombre<input type = 'text' name = 'nombre' value="{{$infom->nombre}}">
<br>
@if($errors->first('edad')) 
<i> {{ $errors->first('edad') }} </i> 
@endif	<br>
Edad<input type ='text' name = 'edad' value="{{$infom->edad}}">
<br>
@if($errors->first('correo')) 
<i> {{ $errors->first('correo') }} </i> 
@endif	<br>
correo<input type = 'text' name= 'correo' value="{{$infom->correo}}">
<br>
@if($errors->first('cp')) 
<i> {{ $errors->first('cp') }} </i> 
@endif	<br>
Codigo Postal<input type = 'text' name= 'cp' value="{{$infom->cp}}" alt='el codigo postal debe de ser de 5 digitos'>
<br>
Seleccione carrera<select name = 'idc'>
                   <option value = '{{$idc}}'>{{$carrera}}</option>
				   @foreach($todasdemas as $td)
				     <option value = '{{$td->idc}}'>{{$td->nombre}}</option>
				   @endforeach
                  </select>
<br>
@if($errors->first('archivo')) 
<i> {{ $errors->first('archivo') }} </i> 
@endif	<br>
<img src = "{{asset('archivos/'.$infom->archivo)}}"
height =150 width=150></td></td>
<br>
Seleccione Foto <input type  ='file' name = 'archivo'>
<br>
<input type = 'submit' value = 'Guardar'>
</form>
</body>
</html>





