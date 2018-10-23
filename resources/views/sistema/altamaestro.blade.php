<html>
<body>
<h1>Alta de Empleado</h1>
                                            <br>
                                            <form action ="{{route('guardamaestro')}}" method = 'POST' enctype='multipart/form-data'>
                                            {{csrf_field()}}
                                            
                                            @if($errors->first('idemple')) 
                                            <i> {{ $errors->first('idemple') }} </i> 
                                            @endif	<br>
                                                
                                            clave <input type = 'text' name = 'idemple' value="{{$idemple}}" readonly = 'readonly'>
                                            <br>

                                            @if($errors->first('nombre')) 
                                            <i> {{ $errors->first('nombre') }} </i> 
                                            @endif	<br>
                                            Nombre<input type = 'text' name = 'nombre' value="{{old('nombre')}}">
                                            <br>
                                           
                                            @if($errors->first('apellidopa')) 
                                            <i> {{ $errors->first('apellidopa') }} </i> 
                                            @endif	<br>
                                            Apellido Paterno<input type = 'text' name = 'apellido paterno' value="{{old('apellidopa')}}">
                                            <br>
                                           
                                            @if($errors->first('apellidoma')) 
                                            <i> {{ $errors->first('apellidoma') }} </i> 
                                            @endif	<br>
                                            Apellido Materno<input type = 'text' name = 'apellido materno' value="{{old('apellidoma')}}">
                                            <br>

                                            @if($errors->first('calle')) 
                                            <i> {{ $errors->first('calle') }} </i> 
                                            @endif	<br>
                                            Calle<input type = 'text' name = 'calle' value="{{old('calle')}}">
                                            <br>

                                            @if($errors->first('colonia')) 
                                            <i> {{ $errors->first('colonia') }} </i> 
                                            @endif	<br>
                                            Colonia<input type = 'text' name = 'colonia' value="{{old('colonia')}}">
                                            <br>

                                            @if($errors->first('municipio')) 
                                            <i> {{ $errors->first('municipio') }} </i> 
                                            @endif
                                            <br>

                                            Municipio<input type = 'text' name = 'municipio' value="{{old('municipio')}}">
                                            <br>

                                            @if($errors->first('codigopostal')) 
                                            <i> {{ $errors->first('codigopostal') }} </i> 
                                            @endif	
                                            <br>

                                            Codigo Postal<input type = 'text' name= 'codigopostal' value="{{old('codigopostal')}}" alt='el codigo postal debe de ser de 5 digitos'>
                                            <br>

                                           

                                            @if($errors->first('correo')) 
                                            <i> {{ $errors->first('correo') }} </i> 
                                            @endif	<br>
                                            Correo<input type = 'text' name= 'correo' value="{{old('correo')}}">
                                            <br>

                                             @if($errors->first('telefono')) 
                                            <i> {{ $errors->first('telefono') }} </i> 
                                            @endif
                                            <br>
                                            Telefono<input type ='text' name = 'edad' value="{{old('telefono')}}">
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





