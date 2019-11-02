
@extends('layouts.app')
@section('content')
<div class="col-sm-offset-3 col-sm-6">

    <div class="panel-title">
        <h2>Listado de Empleados</h2>

  
     </div>
    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->




                   <table border="1">

                <tr>


                        <td>id de Producto</td>
                        <td>DPI</td>
                        <td>Nombre</td>
                        <td>Apellido</td>
                        <td>email</td>
                        <td>Direccion</td>
                        <td>Telefono Casa</td>
                        <td>Telefono Movil</td>
   
                </tr>
                    @foreach($empleados as $empleados)
                 <tr>
 
                    <td> <a href="{{route('admin_Empleado.edit',$empleados->id)}}">  {{$empleados->id}}</a></td>   
                    <td>  {{$empleados->cui}}></td>                    
                    <td>  {{$empleados->nombre}}</td>   
                    <td>  {{$empleados->apellido}}</td>
                    <td>  {{$empleados->email}}</td>
                    <td>  {{$empleados->direccion}}</td>
                    <td>  {{$empleados->telefono_casa}}</td>
                    <td>  {{$empleados->telefono_movil}}</td>
                </tr>
                    @endforeach
            </table>
                            <div class="links">
                    
                    <a href="{{ '/admin_Empleado/' }}"> Regresar</a>
                    

                </div>




     

    
    </div>
</div>



@endsection