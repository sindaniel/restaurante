@extends('layouts.app')

@section('content')



{{ Breadcrumbs::render('suppliers') }}


<div class="row page-tilte align-items-center">
    <div class="col-md-auto">
        <a href="#" class="mt-3 d-md-none float-right toggle-controls"><span class="material-icons">keyboard_arrow_down</span></a>
        <h1 class="weight-300 h3 title">Provedores </h1>
        <p class="text-muted m-0 desc">Listado de provedores creados</p>
    </div> 
    <div class="col controls-wrapper mt-3 mt-md-0 d-none d-md-block ">
        <div class="controls d-flex justify-content-center justify-content-md-end">
            <form class='search-form'>
            <input type="text" name='q' value='{{app('request')->input('q')}}' class="form-control d-inline-block" placeholder="Buscar...">
            </form>
          
            <a  href='{{route('suppliers.create')}}' class="btn btn-primary">Agregar proveedor</a>
        </div>

    </div>
</div> 



<div class="card">                    
    <div class="card-body table-responsive p-md-5">

     
            <table class="table">
                
                <thead>
                    <tr>
                       
                        <th scope="col" class="border-top-0">Nombre</th>
                        <th scope="col" class="border-top-0">Teléfono</th>
                        <th scope="col" class="border-top-0">Dirección</th>
                        <th scope="col" class="border-top-0 text-right"></th>
                    </tr>
                </thead>
                <tbody>

                @forelse ($suppliers as $supplier )
                    <tr>
                        
                        <td class="align-middle">
                            <a class='text-primary d-block' href='{{route('suppliers.show', $supplier->id)}}'>
                                {{$supplier->name}}
                            </a>
                        </td>
                    
                        <td class="align-middle">                            
                            {{$supplier->phone}}
                        </td>

                        <td class="align-middle">                            
                            {{$supplier->address}}
                        </td>

                        <td class='align-middle'>
                            <a href='{{route('suppliers.edit', [$supplier->id])}}' class='btn text-white btn-primary'><i class="fas fa-edit"></i> Editar</a>

                            <a href='{{route('suppliers.show', [$supplier->id])}}' class='btn text-white btn-info'><i class="fas fa-edit"></i> Productos</a>
                         

                            <form class='d-inline-block'  action="{{ route('suppliers.destroy',$supplier->id) }}" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button  class='btn btn-danger confirmation' >Eliminar</button>
                            </form> 


                        </td>

                    </tr>
                    @empty
                    <tr>
                        <td class="text-center" colspan="4">No se encontraron registros</td>
                    </tr>
                 @endforelse
                
                </tbody>
            </table>
            


    </div>
</div>





@endsection





@section('scripts')


@stop

