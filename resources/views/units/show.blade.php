@extends('layouts.app')

@section('content')




{{ Breadcrumbs::render('units.forms', 'Editar unidad') }}

    <div class="row page-tilte align-items-center">
        <div class="col-md-auto">
            <a href="#" class="mt-3 d-md-none float-right toggle-controls"><span class="material-icons">keyboard_arrow_down</span></a>
            <h1 class="weight-300 h3 title"> Editar unidad</h1>
        </div> 
    </div> 





    <div class="content">

        <div class="card mb-4">
            <div class="card-header">
                Editar unidad
            </div>
            <div class="card-body">
                    {!!Form::open(array(
                        'route'=> ['units.show', $unit->id],  
                        'method'=>'PATCH',
                        'class'=>'form-horizontal',
                        'autocomplete'=> 'off', 
                        'id'=>'form' ))!!}
                

                    @include('helpers.forms.input',  ['item'=>$unit->name, 'key'=>'name', 'title' => "Nombre", 'subtitle' => "Nombre de la unidad"])

                    @include('helpers.forms.input',  ['item'=>$unit->consumption, 'key'=>'consumption', 'title' => "Unidad de consumo", 'subtitle' => "Nombre de la consumo de compra"])
                    
                    @include('helpers.forms.input',  ['item'=>$unit->factor, 'key'=>'factor', 'title' => "Factor de conversion", 'subtitle' => "Valor del factor de conversion",])

    
                    <button class='btn text-white btn-success'>Guardar</button>
                    <a href="{{route('units.index')}}" class='btn btn-danger'>Cancelar</a>
                {{ Form::close() }}

            </div>
                    
             
            </div>
        </div>




    </div>



   
             
    
@endsection




