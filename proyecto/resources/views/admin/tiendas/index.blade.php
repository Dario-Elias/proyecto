@extends('layouts.app')
@section('content')
<div class="col-sm-offset-3 col-sm-6">
<div class="col-sm-offset-3 col-sm-6">
    <div class="panel-title">
        <h2>ADMINISTRACION DE TIENDAS</h2>

  
     </div>
 </div>
    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->

            <div class="col-sm-offset-3 col-sm-6">
                <div class="links">
                    
                    <a href="{{ '/admin/create' }}"> Crear</a>
                    <br>
                    <a href="{{ '/admin/show' }}"> Ver Listado de Tiendas</a>
                    

                </div>
            </div>






     

    
    </div>
</div>



@endsection