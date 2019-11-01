@extends('layouts.app')
@section('content')
<div class="col-sm-offset-3 col-sm-6">
    <div class="panel-title">
        <h2>Tiendas</h2>
     </div>
    <div class="panel-body">
    	<table border="1">
    					<tr>
    	                <td>id de Tienda</td>
                        <td>Nombre de Tienda</td>
                        <td>Nit de Tienda</td>
                        <td>Encargado de Tienda</td>
                        <td>Ubicacion de Tienda</td>
                        <td>Capacidad de Tienda</td>
                        </tr>
                        <tr>
    					<td>{{$tienda->id}}</td>
    					<td>{{$tienda->tienda}}</td>
    					<td>{{$tienda->nit}}</td>
    					<td>{{$tienda->encargado_id}}</td>
    					<td>{{$tienda->ubicacion}}</td>
    					<td>{{$tienda->capacidad}}</td>
    			    	</tr>
   	     </table>
        <a href="{{ '/tienda' }}"> Regresar</a>
    </div>
</div>
@endsection