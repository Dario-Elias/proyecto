@extends('layouts.app')
@section('content')
<div class="col-sm-offset-3 col-sm-6">
<div class="col-sm-offset-3 col-sm-6">
    <div class="panel-title">
        <h2>Administracion de Empleados</h2>

  
     </div>
 </div>
    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->

            <div class="col-sm-offset-3 col-sm-6">
                <div class="links">
                    
                    <a href="{{ '/admin_Empleado/new' }}"> Crear</a>
                    <br>
                    <a href="{{ '/admin_Empleado/show' }}"> Ver Listado de Empleados</a>
                    

                </div>
            </div>
    </div>
</div>



@endsection