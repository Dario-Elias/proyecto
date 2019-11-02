
@extends('layouts.app')
@section('content')
<div class="col-sm-offset-3 col-sm-6">

    <div class="panel-title">
        <h2>Reporte de Ventas</h2>

  
     </div>
    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->



                   <table border="1">

                <tr>
                        <td>id</td>
                        <td>Tienda</td>
                        <td>Venta_Total</td>
                        <td>Empleado</td>
                        <td>Fecha</td>
                        
   
                </tr>
                    @foreach($venta as $venta)
                 <tr>

                    <td>  {{$venta->id}}</td>
                    <td>  {{$venta->tienda}}</td>                    
                    <td>  {{$venta->venta_total}}</td>   
                    <td>  {{$venta->encargado_id}}</td>
                    <td>  {{$venta->id_empleado}}</td>

                </tr>
                    @endforeach
            </table>
                            <div class="links">
                    
                    <a href="{{ '/home/' }}"> Regresar</a>
                    

                </div>




     

    
    </div>
</div>



@endsection