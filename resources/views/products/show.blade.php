@extends('layouts.app')

@section('content')




{{ Breadcrumbs::render('products.forms', 'Editar product') }}

    <div class="row page-tilte align-items-center">
        <div class="col-md-auto">
            <a href="#" class="mt-3 d-md-none float-right toggle-controls"><span class="material-icons">keyboard_arrow_down</span></a>
            <h1 class="weight-300 h3 title"> Editar producto</h1>
        </div> 
    </div> 





    <div class="content">

        <div class="card mb-4">
            <div class="card-header">
                Editar producto
            </div>
            <div class="card-body">
                    {!!Form::open(array(
                        'route'=> ['products.show', $product->id],  
                        'method'=>'PATCH',
                        'class'=>'form-horizontal',
                        'autocomplete'=> 'off', 
                        'id'=>'form' ))!!}
                

                    @include('helpers.forms.input',  ['key'=>'name', 'title' => "Nombre", 'subtitle' => "Nombre de la unidad", 'item'=>$product->name])

                    @include('helpers.forms.input',  ['key'=>'code', 'title' => "Codigo", 'subtitle' => "Nombre de la unidad de compra", 'item'=>$product->code])

                    @include('helpers.forms.input',  ['key'=>'cost', 'title' => "Costo", 'subtitle' => "Valor del costo", 'item'=>$product->cost])

                    @include('helpers.forms.select',  ['key'=>'supplier_id', 'title' => "Proveedor", 'subtitle' => "Nombre del provedor", 'item'=>$product->supplier_id, 'options'=> $suppliers])

                    @include('helpers.forms.select',  ['key'=>'group_id', 'title' => "Grupo", 'subtitle' => "Nombre del grupo", 'item'=>$product->group_id, 'options'=> $groups])

                    @include('helpers.forms.select',  ['key'=>'unit_id', 'title' => "Unidad", 'subtitle' => "Nombre de la unidad", 'item'=>$product->unit_id, 'options'=> $units])
                    


                        

    
                    <button class='btn text-white btn-success'>Guardar</button>
                    <a href="{{route('products.index')}}" class='btn btn-danger'>Cancelar</a>
                {{ Form::close() }}

            </div>
                    
             
            </div>
        </div>




    </div>



   
             
    
@endsection




