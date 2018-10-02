<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unit;
use Session; 
use Illuminate\Support\Facades\Redirect;


class UnitController extends Controller
{
    
    public function index(Request $request)
    {
        
        $units = new Unit();
        $query = $request->get('q');
        if($query){
            $units = $units->where('name','like','%'.$query.'%')
                             ->orWhere('username','like','%'.$query.'%');
        }

        $units = $units->paginate(20);
        
        //var_dump(Uuid::generate()->string);
       
        $data = [
            'units' => $units, 
            'title' =>'Grupos',
        ];

        return view('units.index',$data);
    }

    
    public function create(Request $request)
    {

        return view('units.create');
    }


   
    public function store(Request $request)
    {
       
        $unit = new Unit;
        $unit->create($request->all());

        Session::flash('message', 'Unidad creada exitosamente');
        return Redirect::route('units.index');
    }

   
   
    
    public function show($id)
    {
        $unit = Unit::find($id);

        if(!$unit){
            Session::flash('message','Registro no encontrado');
            return Redirect::route('units.index');
        }
           

        $data = [
            'unit'=> $unit,
        ];

 
        return view('units.show',$data);
    }

   
    public function update(Request $request, $id)
    {
        $unit = Unit::find($id);

        if(!$unit){
            Session::flash('message','Registro no encontrado');
            return Redirect::route('units.index');
        }
           
        $unit->update($request->all());

        Session::flash('message', 'Unidad actualizado exitosamente');
        return Redirect::route('units.index');

    }

   
    public function destroy($id)
    {
        

        $unit = Unit::find($id);

        if(!$unit){
            Session::flash('message','Registro no encontrado');
            return Redirect::route('units.index');
        }
           
        $unit->delete();

        Session::flash('message', 'Unidad eliminado exitosamente');
        return Redirect::route('units.index');


    }
}
