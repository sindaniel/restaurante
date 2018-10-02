@extends('layouts.app')

@section('content')




{{ Breadcrumbs::render('suppliers.forms', 'Productos') }}

    <div class="row page-tilte align-items-center">
        <div class="col-md-auto">
            <a href="#" class="mt-3 d-md-none float-right toggle-controls"><span class="material-icons">keyboard_arrow_down</span></a>
            <h1 class="weight-300 h3 title"> Productos / {{$supplier->name}}</h1>
        </div> 
    </div> 





    <div class="content">

        <div class="card mb-4">
            <div class="card-header">
                    Productos / {{$supplier->name}}
            </div>
            <div class="card-body">


                    <table class="table">
                
                            <thead>
                                <tr>
                                    <th scope="col" class="border-top-0">Codigo</th>
                                    <th scope="col" class="border-top-0">Nombre</th>
                                    <th scope="col" class="border-top-0">Proveedor</th>
            
                                    <th scope="col" class="border-top-0">Unidad</th>
                                    <th scope="col" class="border-top-0">Grupo</th>
                                    <th scope="col" class="border-top-0 text-right"></th>
                                </tr>
                            </thead>
                            <tbody>
            
                            @forelse ($products as $product )
                                <tr>    
            
            
                                    <td class="align-middle">
                                        {{$product->code}}  
                                    </td>
                                    
                                    <td class="align-middle">
                                        <a class='text-primary d-block' href='{{route('products.show', $product->id)}}'>
                                            {{$product->name}}
                                        </a>
                                    </td>
            
                                    <td class="align-middle">
                                        {{$product->supplier->name}}  
                                    </td>
            
                                    <td class="align-middle">
                                        {{$product->unit->name}}  
                                    </td>
            
            
                                    <td class="align-middle">
                                        {{$product->group->name}}  
                                    </td>
            
                                
                                   
                                    <td class='align-middle'>
                                        <a href='{{route('products.show', [$product->id])}}' class='btn text-white btn-primary'><i class="fas fa-edit"></i> Editar</a>
                                     
            
                                        <form class='d-inline-block'  action="{{ route('products.destroy',$product->id) }}" method="POST">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button  class='btn btn-danger confirmation' >Eliminar</button>
                                        </form> 
            
            
                                    </td>
            
                                </tr>
                                @empty
                                <tr>
                                    <td class="text-center" colspan="5">No se encontraron registros</td>
                                </tr>
                             @endforelse
                            
                            </tbody>
                        </table>

                        
                   

            </div>
                    
             
            </div>
        </div>




    </div>



   
             
    
@endsection

