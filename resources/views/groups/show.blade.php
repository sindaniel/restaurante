@extends('layouts.app')

@section('content')




{{ Breadcrumbs::render('groups.forms', 'Editar group') }}

    <div class="row page-tilte align-items-center">
        <div class="col-md-auto">
            <a href="#" class="mt-3 d-md-none float-right toggle-controls"><span class="material-icons">keyboard_arrow_down</span></a>
            <h1 class="weight-300 h3 title"> Editar grupo</h1>
        </div> 
    </div> 





    <div class="content">

        <div class="card mb-4">
            <div class="card-header">
                Editar Group
            </div>
            <div class="card-body">
                    {!!Form::open(array(
                        'route'=> ['groups.show', $group->id],  
                        'method'=>'PATCH',
                        'class'=>'form-horizontal',
                        'autocomplete'=> 'off', 
                        'id'=>'form' ))!!}
                
                    
                    @include('helpers.forms.input',  ['item'=>$group->name, 'key'=>'name', 'title' => "Nombre", 'subtitle' => "Nombre del proveedor"])


                    <button class='btn text-white btn-success'>Guardar</button>
                    <a href="{{route('groups.index')}}" class='btn btn-danger'>Cancelar</a>
                {{ Form::close() }}

            </div>
                    
             
            </div>
        </div>




    </div>



   
             
    
@endsection




