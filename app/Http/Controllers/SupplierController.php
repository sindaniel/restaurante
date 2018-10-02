<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
use Session; 
use Illuminate\Support\Facades\Redirect;


class SupplierController extends Controller
{
    
    public function index(Request $request)
    {
        
        $suppliers = new Supplier();
        $query = $request->get('q');
        if($query){
            $suppliers = $suppliers->where('name','like','%'.$query.'%');
        }

        $suppliers = $suppliers->paginate(20);
        
        //var_dump(Uuid::generate()->string);
       
        $data = [
            'suppliers' => $suppliers, 
            'title' =>'Proveedores',
        ];

        return view('suppliers.index',$data);
    }

    
    public function create(Request $request)
    {

        $data = [ 
           
        ];
       
        return view('suppliers.create',$data);
    }


   
    public function store(Request $request)
    {
       
        $supplier = new Supplier;
        $supplier->create($request->all());

        Session::flash('message', 'Proveedor creado exitosamente');
        return Redirect::route('suppliers.index');
    }

   
   
    
    public function show($id)
    {
        $supplier = Supplier::find($id);

        if(!$supplier){
            Session::flash('message','Registro no encontrado');
            return Redirect::route('suppliers.index');
        }
           

        $data = [
            'supplier'=> $supplier,
        ];
 
        return view('suppliers.show',$data);
    }

   
    public function update(Request $request, $id)
    {
        $supplier = Supplier::find($id);

        if(!$supplier){
            Session::flash('message','Registro no encontrado');
            return Redirect::route('suppliers.index');
        }
           
        $supplier->update($request->all());

        Session::flash('message', 'Proveedor actualizado exitosamente');
        return Redirect::route('suppliers.index');

    }

   
    public function destroy($id)
    {
        

        $supplier = Supplier::find($id);

        if(!$supplier){
            Session::flash('message','Registro no encontrado');
            return Redirect::route('suppliers.index');
        }
           
        $supplier->delete();

        Session::flash('message', 'Proveedor eliminado exitosamente');
        return Redirect::route('suppliers.index');


    }
}
