@extends('layouts.app')
@section('content')
<div class="col-sm-offset-3 col-sm-6">

    <div class="panel-title">
        <h2>Tiendas</h2>

  
     </div>
    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->


                <div class="links">
                    
                    <a href="{{ '/tienda/new' }}"> Crear</a>
                    <a href="{{ '/home' }}"> Regresar</a>

                </div>

                                  <table border="1">

                <tr>
                        <td>id de Tienda</td>
                        <td>Nombre de Tienda</td>
                        <td>Nit de Tienda</td>
                        <td>Encargado de Tienda</td>
                        <td>Ubicacion de Tienda</td>
                        <td>Capacidad de Tienda</td>
                        <td>Fecha de Creacion</td>
   
                </tr>
                    @foreach($tienda as $tienda)
                 <tr>
                    <td><a href="{{route('tiendas.edit',$tienda->id)}}"> {{$tienda->id}}</a></td>
                    <td><a href="{{route('tiendas.edit',$tienda->id)}}">  {{$tienda->tienda}}</a></td>                    
                    <td>  {{$tienda->nit}}</td>   
                    <td>  {{$tienda->encargado_id}}</td>
                    <td>  {{$tienda->ubicacion}}</td>
                    <td>  {{$tienda->capacidad}}</td>
                    <td>  {{$tienda->created_at}}</td>
                </tr>
                    @endforeach
            </table>




     

    
    </div>
</div>



@endsection