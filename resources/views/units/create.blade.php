@extends('layouts.app')

@section('content')




{{ Breadcrumbs::render('units.forms', 'Crear grupo') }}

    <div class="row page-tilte align-items-center">
        <div class="col-md-auto">
            <a href="#" class="mt-3 d-md-none float-right toggle-controls"><span class="material-icons">keyboard_arrow_down</span></a>
            <h1 class="weight-300 h3 title"> Crear unidad</h1>
        </div> 
    </div> 


    <div class="content">

        <div class="card mb-4">
            <div class="card-header">
                Crear unidad
            </div>
            <div class="card-body">
                {!!Form::open(array('route'=>['units.store'],  'method'=>'POST', 'class'=>'form-horizontal' ,'autocomplete'=> 'off', 'id'=>'form', 'enctype'=>"multipart/form-data" ))!!}

                    @include('helpers.forms.input',  ['key'=>'name', 'title' => "Nombre", 'subtitle' => "Nombre de la unidad", 'item'=>false])

                    @include('helpers.forms.input',  ['key'=>'consumption', 'title' => "Unidad de consumo", 'subtitle' => "Nombre de la unidad de consumo", 'item'=>false])

                    @include('helpers.forms.input',  ['key'=>'factor', 'title' => "Factor de conversion", 'subtitle' => "Valor del factor de conversion", 'item'=>false])
                    
                    
                    <button class='btn text-white btn-success'>Guardar</button>
                    <a href="{{route('units.index')}}" class='btn btn-danger'>Cancelar</a>
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


