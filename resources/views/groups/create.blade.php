@extends('layouts.app')

@section('content')




{{ Breadcrumbs::render('groups.forms', 'Crear grupo') }}

    <div class="row page-tilte align-items-center">
        <div class="col-md-auto">
            <a href="#" class="mt-3 d-md-none float-right toggle-controls"><span class="material-icons">keyboard_arrow_down</span></a>
            <h1 class="weight-300 h3 title"> Crear Group</h1>
        </div> 
    </div> 


    <div class="content">

        <div class="card mb-4">
            <div class="card-header">
                Crear Grupo
            </div>
            <div class="card-body">
                {!!Form::open(array('route'=>['groups.store'],  'method'=>'POST', 'class'=>'form-horizontal' ,'autocomplete'=> 'off', 'id'=>'form', 'enctype'=>"multipart/form-data" ))!!}

                    @include('helpers.forms.input',  ['key'=>'name', 'title' => "Nombre", 'subtitle' => "Nombre del grupo", 'item'=>false])
                    
                    
                    <button class='btn text-white btn-success'>Guardar</button>
                    <a href="{{route('groups.index')}}" class='btn btn-danger'>Cancelar</a>
                {{ Form::close() }}
            </div>
        </div>

    </div>



@endsection



@section('scripts')

<script>
    $( "#leaderboard-btn" ).click(function() {
        $( "#leaderboard-options" ).toggle();
    });
</script>
@stop


