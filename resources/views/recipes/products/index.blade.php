@extends('layouts.app')

@section('content')



{{ Breadcrumbs::render('recipes.products', $recipe) }}


<div class="row page-tilte align-items-center">
    <div class="col-md-auto">
        <a href="#" class="mt-3 d-md-none float-right toggle-controls"><span class="material-icons">keyboard_arrow_down</span></a>
        <h1 class="weight-300 h3 title">{{$recipe->name}} </h1>
        <p class="text-muted m-0 desc">Listado de producto de la  creadas</p>
    </div> 
    <div class="col controls-wrapper mt-3 mt-md-0 d-none d-md-block ">
        <div class="controls d-flex justify-content-center justify-content-md-end">
            <a  href='{{route('recipes.products.create', $recipe->id)}}' class="btn btn-primary">Agregar producto a receta</a>
        </div>

    </div>
</div> 



<div class="card">                    
    <div class="card-body table-responsive p-md-5">

     
            <table class="table">
                
                <thead>
                    <tr>
                        
                        <th scope="col" class="border-top-0">Producto</th>
                        <th scope="col" class="border-top-0">Cantidad</th>
                        <th scope="col" class="border-top-0">Presentacion</th>
                        <th scope="col" class="border-top-0">Unidad de compra</th>
                        <th scope="col" class="border-top-0">Costo</th>
                        <th scope="col" class="border-top-0">Precio de compra</th>
                        <th scope="col" class="border-top-0">Total</th>
                        <th scope="col" class="border-top-0 text-right"></th>
                    </tr>
                </thead>
                <tbody>
                @php 
                    $totalCost = 0
                @endphp
                @forelse ($recipe->products as $product )
                    <tr>    
                        
                        <td class="align-middle">
                            <a class='text-primary d-block' href='{{route('products.show', $product->product->id)}}'>
                                {{$product->product->name}}
                            </a>
                        </td>

                        <td class="align-middle">
                            {{$product->quantity}}
                        </td>

                        <td class="align-middle">
                            {{$product->product->unit->name}} ({{$product->product->unit->factor}})
                        </td>

                      
                        <td class="align-middle">
                            $ {{number_format($product->product->cost,2)}}
                        </td>


                        <td class="align-middle">
                         
                            $ {{number_format((float)($product->product->cost/$product->product->unit->factor), 2, '.', '')}}
                            
                        </td>

                        <td class="align-middle">
                            
                            ${{number_format($product->product->cost, 2)}}
                        </td>


                        <td class="align-middle">
                                @php
                                $total = (($product->product->cost/$product->product->unit->factor) * $product->quantity);
                                $totalCost += $total
                            @endphp

                            
                            $ {{number_format($total,2)}}
                        </td>


                       
                        <td class='align-middle'>
                            {{-- <a href='{{route('recipes.products.destroy', [$recipe->id, $product->id])}}' class='btn text-white btn-primary'><i class="fas fa-edit"></i> Editar</a> --}}

                            <form class='d-inline-block'  action="{{ route('recipes.products.destroy',[$recipe->id, $product->id]) }}" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button  class='btn btn-danger confirmation' >Eliminar</button>
                            </form> 


                        </td>

                    </tr>


                    
                    @empty
                    <tr>
                        <td class="text-center" colspan="2">No se encontraron registros</td>
                    </tr>
                @endforelse


                <tr>
                    <th class="text-right" colspan="6">Total</th> 
                    <th>$ {{number_format($totalCost, 2)}}</th>
                    <th></th>
                </tr>

                <tr>
                    <th class="text-right" colspan="6">Margen Error ({{$recipe->error_range}}%)</th> 
                    <th>$ {{number_format(($totalCost * ($recipe->error_range/100)), 2)}}</th>
                    <th></th>
                </tr>


                <tr>
                    <th class="text-right" colspan="6">Total Costo</th> 
                    <th>$ {{number_format($totalCost + (($totalCost * ($recipe->error_range/100))), 2)}}</th>
                    <th></th>
                </tr>


                <tr>
                    <th class="text-right" colspan="6">PRECIO DE VENTA ANTES DE INC</th> 
                    <th>$ {{ ($recipe->price/$recipe->tax)*100}}</th>
                    <th></th>
                </tr>


                <tr>
                        <th class="text-right" colspan="6">PRECIO DE VENTA ANTES DE INC</th> 
                        <th>$ {{round( ($recipe->price/$recipe->tax)*100, -2)}}</th>
                        <th></th>
                    </tr>


                   


                
                </tbody>
            </table>
            


    </div>
</div>





@endsection





@section('scripts')


@stop

