@extends('layouts.app')

@section('content')




{{ Breadcrumbs::render('recipes.forms', 'Crear receta') }}

    <div class="row page-tilte align-items-center">
        <div class="col-md-auto">
            <a href="#" class="mt-3 d-md-none float-right toggle-controls"><span class="material-icons">keyboard_arrow_down</span></a>
            <h1 class="weight-300 h3 title"> Crear receta</h1>
        </div> 
    </div> 


    <div class="content">

        <div class="card mb-4">
            <div class="card-header">
                Crear receta
            </div>
            <div class="card-body">
                {!!Form::open(array('route'=>['recipes.store'],  'method'=>'POST', 'class'=>'form-horizontal' ,'autocomplete'=> 'off', 'id'=>'form', 'enctype'=>"multipart/form-data" ))!!}

                    @include('helpers.forms.input',  ['key'=>'name', 'title' => "Nombre", 'subtitle' => "Nombre de la receta", 'item'=>false])

                    @include('helpers.forms.input',  ['key'=>'portions', 'title' => "Porciones", 'subtitle' => "Numero de porciones", 'item'=>false])

                    @include('helpers.forms.input',  ['key'=>'price', 'title' => "Precio porcion", 'subtitle' => "Precio por porcion", 'item'=>false])

                    @include('helpers.forms.input',  ['key'=>'error_range', 'title' => "Margen de error", 'subtitle' => "Porcentaje del margen de error", 'item'=>false])

                    @include('helpers.forms.text',  ['key'=>'instructions', 'title' => "Instrucciones", 'subtitle' => "Instrucciones de la receta", 'item'=>false])

                
                    
                    <button class='btn text-white btn-success'>Guardar</button>
                    <a href="{{route('products.index')}}" class='btn btn-danger'>Cancelar</a>
                {{ Form::close() }}
            </div>
        </div>

    </div>



@endsection






