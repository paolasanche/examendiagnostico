




<h1 align="center">EXAMEN DIAGNOSTICO </h1>

</div>
</div>


<div class="contenido" align="center">	

	
<center>
<table>
	<tr>
<td>Nombre</td>
<td>@if($errors->first('nombre'))
<p><i> {{ $errors->first('nombre') }}</i></p>
@endif </td> 
<td>{{Form::text('nombre',old('nombre'))}}</td>
</tr>
<tr>
<td>Apellido</td>
<td>@if($errors->first('apellido'))
<p><i> {{ $errors->first('apellido') }}</i></p>
@endif     </td>               
<td>{{Form::text('apellido',old('apellido'))}}</td>
</tr>
<tr>
<td>Correo </td>
<td>@if($errors->first('correo'))
<p><i> {{ $errors->first('correo') }}</i></p>
@endif</td>
<td>{{Form::text('correo',old('correo'))}}</td>
</tr>
<tr>
<td>Telefono</td>
<td>@if($errors->first('telefono'))
<p><i> {{ $errors->first('telefono') }}</i></p>
@endif</td>
<td>{{Form::text('telefono',old('telefono'))}}</td>
</tr>
<tr>
<td>User</td>
<td>@if($errors->first('user'))
<p><i> {{ $errors->first('user') }}</i></p>
@endif</td>
<td>{{Form::text('user',old('user'))}}</td>
</tr>
<tr>
<td>Password</td>
<td>@if($errors->first('password'))
<p><i> {{ $errors->first('password') }}</i></p>
@endif</td>
<td>{{Form::text('password',old('password'))}}</td>
</tr>

</table>
</center>

{{Form::submit('Guardar',['class' => 'btn btn-success'])}}
</div>





