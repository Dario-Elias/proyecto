
@extends('layouts.app')
@section('content')
<div class="col-sm-offset-3 col-sm-6">

    <div class="panel-title">
        <h2>Listado de Productos Existentes</h2>

  
     </div>
    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->




                   <table border="1">

                <tr>
                        <td>id de Producto</td>
                        <td>Codigo Producto</td>
                        <td>Nombre</td>
                        <td>Proveedor</td>
                        <td>Tienda</td>
                        <td>Costo</td>
                        <td>Precio de Venta</td>
   
                </tr>
                    @foreach($productos as $productos)
                 <tr>
 
                    <td> <a href="{{route('admin_Producto.edit',$productos->id)}}">  {{$productos->id}}</a></td>  
                    <td>  <a href="{{route('admin_Producto.edit',$productos->id)}}">  {{$productos->codigo}}</a></td>                    
                    <td>  {{$productos->nombre}}</td>   
                    <td>  {{$productos->proveedor}}</td>
                    <td>  {{$productos->ubicacion}}</td>
                    <td>  {{$productos->costo}}</td>
                    <td>  {{$productos->precio_venta}}</td>
                </tr>
                    @endforeach
            </table>
                            <div class="links">
                    
                    <a href="{{ '/admin_Producto/' }}"> Regresar</a>
                    

                </div>




     

    
    </div>
</div>



@endsection