@extends('layouts.app')

@section('content')




{{ Breadcrumbs::render('suppliers.forms', 'Editar proveedor') }}

    <div class="row page-tilte align-items-center">
        <div class="col-md-auto">
            <a href="#" class="mt-3 d-md-none float-right toggle-controls"><span class="material-icons">keyboard_arrow_down</span></a>
            <h1 class="weight-300 h3 title"> Editar proveedor</h1>
        </div> 
    </div> 





    <div class="content">

        <div class="card mb-4">
            <div class="card-header">
                Editar Proveedor
            </div>
            <div class="card-body">
                    {!!Form::open(array(
                        'route'=> ['suppliers.show', $supplier->id],  
                        'method'=>'PATCH',
                        'class'=>'form-horizontal',
                        'autocomplete'=> 'off', 
                        'id'=>'form' ))!!}
                
                    
                    @include('helpers.forms.input',  ['item'=>$supplier->name, 'key'=>'name', 'title' => "Nombre", 'subtitle' => "Nombre del proveedor"])

                    @include('helpers.forms.input',  ['item'=>$supplier->address, 'key'=>'address', 'title' => "Dirección", 'subtitle' => "Dirección del proveedor"])
                
                    @include('helpers.forms.input',  ['item'=>$supplier->phone, 'key'=>'phone', 'title' => "Teléfono", 'subtitle' => "Teléfono del proveedor"])

                    @include('helpers.forms.input',  ['item'=>$supplier->email, 'key'=>'email', 'title' => "Email", 'subtitle' => "Email del proveedor"])

                    <button class='btn text-white btn-success'>Guardar</button>
                    <a href="{{route('suppliers.index')}}" class='btn btn-danger'>Cancelar</a>
                {{ Form::close() }}

            </div>
                    
             
            </div>
        </div>




    </div>



   
             
    
@endsection




