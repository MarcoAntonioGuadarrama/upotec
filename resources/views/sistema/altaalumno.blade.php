
<html>
<body>


<h1>Alta de alumno</h1>
                                            <br>
                                            <form action ="{{route('guardamaestro')}}" method = 'POST' enctype='multipart/form-data'>
                                            {{csrf_field()}}
                                            
                                            @if($errors->first('idm')) 
                                            <i> {{ $errors->first('idm') }} </i> 
                                            @endif	<br>
                                                
                                            clave <input type = 'text' name = 'idm' value="{{$idalumno}}" readonly = 'readonly'>
                                            <br>
                                            @if($errors->first('nombre')) 
                                            <i> {{ $errors->first('nombre') }} </i> 
                                            @endif	<br>
                                            Nombre<input type = 'text' name = 'nombre' value="{{old('nombre')}}">
                                            <br>

                                               @if($errors->first('apellido paterno')) 
                                            <i> {{ $errors->first('apellido paterno') }} </i> 
                                            @endif	<br>
                                            Apellido paterno<input type = 'text' name = 'apellido paterno' value="{{old('apellido paterno')}}">
                                            <br>

                                               @if($errors->first('apellido materno')) 
                                            <i> {{ $errors->first('apellido materno') }} </i> 
                                            @endif	<br>
                                            Apellido materno<input type = 'text' name = 'apellido materno' value="{{old('apellido materno')}}">
                                            <br>

                                            @if($errors->first('matricula')) 
                                            <i> {{ $errors->first('matricula') }} </i> 
                                            @endif	<br>
                                            Matricula<input type ='text' name = 'matricula' value="{{old('matricula')}}">
                                            <br>

                                            @if($errors->first('telefono')) 
                                            <i> {{ $errors->first('telefono') }} </i> 
                                            @endif	<br>
                                            Telefono<input type = 'text' name= 'telefono' value="{{old('telefono')}}">
                                            <br>
                                            
                                            @if($errors->first('correo')) 
                                            <i> {{ $errors->first('correo') }} </i> 
                                            @endif	<br>
                                            correo<input type = 'text' name= 'correo' value="{{old('correo')}}">
                                            <br>

                                             @if($errors->first('calle')) 
                                            <i> {{ $errors->first('calle') }} </i> 
                                            @endif	<br>
                                            Calle<input type = 'text' name= 'calle' value="{{old('calle')}}">
                                            <br>

                                             @if($errors->first('colonia')) 
                                            <i> {{ $errors->first('colonia') }} </i> 
                                            @endif	<br>
                                            Colonia<input type = 'text' name= 'colonia' value="{{old('colonia')}}">
                                            <br>

                                             @if($errors->first('municipio')) 
                                            <i> {{ $errors->first('municipio') }} </i> 
                                            @endif	<br>
                                            Municipio<input type = 'text' name= 'municipio' value="{{old('municipio')}}">
                                            <br>
                                            
                                            @if($errors->first('codigopostal')) 
                                            <i> {{ $errors->first('codigopostal') }} </i> 
                                            @endif	<br>
                                            Codigo Postal<input type = 'text' name= 'codigopostal' value="{{old('codigopostal')}}" alt='el codigo postal debe de ser de 5 digitos'>
                                            <br>

                                             @if($errors->first('activo')) 
                                            <i> {{ $errors->first('activo') }} </i> 
                                            @endif	<br>
                                            Activo<input type = 'text' name= 'activo' value="{{old('activo')}}">
                                            <br>

                                           
                                            <br>
                                            @if($errors->first('archivo')) 
                                            <i> {{ $errors->first('archivo') }} </i> 
                                            @endif	<br>
                                            Seleccione Foto <input type  ='file' name = 'archivo'>
                                            <br>
                                            <input type = 'submit' value = 'Guardar'>
                                            </form>
                                            </body>
</html>