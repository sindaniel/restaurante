<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use Session; 
use Illuminate\Support\Facades\Redirect;


class GroupController extends Controller
{
    
    public function index(Request $request)
    {
        
        $groups = new Group();
        $query = $request->get('q');
        if($query){
            $groups = $groups->where('name','like','%'.$query.'%')
                             ->orWhere('username','like','%'.$query.'%');
        }

        $groups = $groups->paginate(20);
        
        //var_dump(Uuid::generate()->string);
       
        $data = [
            'groups' => $groups, 
            'title' =>'Grupos',
        ];

        return view('groups.index',$data);
    }

    
    public function create(Request $request)
    {

        $data = [ 
           
        ];
       
        return view('groups.create',$data);
    }


   
    public function store(Request $request)
    {
       
        $group = new Group;
        $group->create($request->all());

        Session::flash('message', 'Proveedor creado exitosamente');
        return Redirect::route('groups.index');
    }

   
   
    
    public function show($id)
    {
        $group = Group::find($id);

        if(!$group){
            Session::flash('message','Registro no encontrado');
            return Redirect::route('groups.index');
        }
           

        $data = [
            'group'=> $group,
        ];
 
        return view('groups.show',$data);
    }

   
    public function update(Request $request, $id)
    {
        $group = Group::find($id);

        if(!$group){
            Session::flash('message','Registro no encontrado');
            return Redirect::route('groups.index');
        }
           
        $group->update($request->all());

        Session::flash('message', 'Proveedor actualizado exitosamente');
        return Redirect::route('groups.index');

    }

   
    public function destroy($id)
    {
        

        $group = Group::find($id);

        if(!$group){
            Session::flash('message','Registro no encontrado');
            return Redirect::route('groups.index');
        }
           
        $group->delete();

        Session::flash('message', 'Proveedor eliminado exitosamente');
        return Redirect::route('groups.index');


    }
}
