<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequestForm;
use App\Product;
use App\Unit;
use App\Supplier;
use App\Group;
use Session; 




class ProductController extends Controller
{
    
    public function index(Request $request)
    {
        
        $products = new Product();
        $query = $request->get('q');
        if($query){
            $products = $products->where('name','like','%'.$query.'%')
                             ->orWhere('code','like','%'.$query.'%');
        }

        $products = $products->paginate(20);
               
        $data = [
            'products' => $products, 
            'title' =>'Grupos',
        ];

        return view('products.index',$data);
    }

    
    public function create()
    {

        $suppliers = Supplier::all()->pluck('name', 'id');
        $units = Unit::all()->pluck('name', 'id');
        $groups = Group::all()->pluck('name', 'id');


        $data = [
            'suppliers' => $suppliers,
            'units' => $units,
            'groups' => $groups,
        ];


        return view('products.create', $data);
    }


   
    public function store(Request $request)
    {
       
        $product = new Product;
        $product->create($request->all());

        Session::flash('message', 'Producto creado exitosamente');
        return Redirect::route('products.index');
    }

   
   
    
    public function show($id)
    {
        $product = Product::find($id);

        if(!$product){
            Session::flash('message','Registro no encontrado');
            return Redirect::route('products.index');
        }
        

        $suppliers = Supplier::all()->pluck('name', 'id');
        $units = Unit::all()->pluck('name', 'id');
        $groups = Group::all()->pluck('name', 'id');

        $data = [
            'product'=> $product,
            'suppliers' => $suppliers,
            'units' => $units,
            'groups' => $groups,
        ];

 
        return view('products.show',$data);
    }

   
    public function update(ProductRequestForm $request, $id)
    {
        $product = Product::find($id);

        if(!$product){
            Session::flash('message','Registro no encontrado');
            return Redirect::route('products.index');
        }
           
        $product->update($request->all());

        Session::flash('message', 'Producto actualizado exitosamente');
        return Redirect::route('products.index');

    }

   
    public function destroy($id)
    {
        

        $product = Product::find($id);

        if(!$product){
            Session::flash('message','Registro no encontrado');
            return Redirect::route('products.index');
        }
           
        $product->delete();

        Session::flash('message', 'Producto eliminado exitosamente');
        return Redirect::route('products.index');


    }
}
