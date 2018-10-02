@extends('layouts.app')

@section('content')



{{ Breadcrumbs::render('recipes.products.form', $recipe, 'Agregar producto') }}


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
                {!!Form::open(array('route'=>['recipes.products.store', $recipe->id],  'method'=>'POST', 'class'=>'form-horizontal' ,'autocomplete'=> 'off', 'id'=>'form', 'enctype'=>"multipart/form-data" ))!!}
                    
                    @include('helpers.forms.input',  ['key'=>'quantity', 'title' => "Cantidad", 'subtitle' => "Cantidad  de la receta", 'item'=>false])

                    @include('helpers.forms.select',  ['key'=>'product_id', 'title' => "Producto", 'subtitle' => "Seleccione el producto", 'item'=>false, 'options'=> $products])
                
                    
                    <button class='btn text-white btn-success'>Guardar</button>
                    <a href="{{route('products.index')}}" class='btn btn-danger'>Cancelar</a>
                {{ Form::close() }}
            </div>
        </div>

    </div>



@endsection






