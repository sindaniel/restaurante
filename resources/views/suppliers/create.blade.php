@extends('layouts.app')

@section('content')




{{ Breadcrumbs::render('suppliers.forms', 'Crear proveedor') }}

    <div class="row page-tilte align-items-center">
            <div class="col-md-auto">
              <a href="#" class="mt-3 d-md-none float-right toggle-controls"><span class="material-icons">keyboard_arrow_down</span></a>
              <h1 class="weight-300 h3 title"> Crear proveedor</h1>
            </div> 
        <div class="col controls-wrapper mt-3 mt-md-0 d-none d-md-block ">
            <div class="controls d-flex justify-content-center justify-content-md-end">
            
            </div>
        </div>
    </div> 





    <div class="content">

        <div class="card mb-4">
            <div class="card-header">
                Crear Proveedor
            </div>
            <div class="card-body">
                {!!Form::open(array('route'=>['suppliers.store'],  'method'=>'POST', 'class'=>'form-horizontal' ,'autocomplete'=> 'off', 'id'=>'form', 'enctype'=>"multipart/form-data" ))!!}

                    @include('helpers.forms.input',  ['key'=>'name', 'title' => "Nombre", 'subtitle' => "Nombre del proveedor", 'item'=>false])
                    
                    @include('helpers.forms.input',  ['key'=>'address', 'title' => "Dirección", 'subtitle' => "Dirección del proveedor", 'item'=>false])
                
                    @include('helpers.forms.input',  ['key'=>'phone', 'title' => "Teléfono", 'subtitle' => "Teléfono del proveedor", 'item'=>false])

                    @include('helpers.forms.input',  ['key'=>'email', 'title' => "Email", 'subtitle' => "Email del proveedor", 'item'=>false])
                    
                    <button class='btn text-white btn-success'>Guardar</button>
                    <a href="{{route('suppliers.index')}}" class='btn btn-danger'>Cancelar</a>
                {{ Form::close() }}
            </div>
        </div>




    </div>



   
             
       
       

@endsection



