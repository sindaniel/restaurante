<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Session; 

use App\Http\Requests\RecipeRequestForm;


use App\Recipe;
use App\Unit;
use App\Supplier;
use App\Group;




class RecipeController extends Controller
{
    
    public function index(Request $request)
    {
        
        $recipes = new Recipe();
        $query = $request->get('q');
        if($query){
            $recipes = $recipes->where('name','like','%'.$query.'%');
        }

        $recipes = $recipes->paginate(20);
               
        $data = [
            'recipes' => $recipes, 
            'title' =>'Grupos',
        ];

        return view('recipes.index',$data);
    }

    
    public function create(Request $request)
    {
        return view('recipes.create');
    }


   
    public function store(RecipeRequestForm $request)
    {
       
        $recipe = new Recipe;
        $recipe->create($request->all());

        Session::flash('message', 'Receta creada exitosamente');
        return Redirect::route('recipes.index');
    }

   
   
    
    public function show($id)
    {
        $recipe = Recipe::find($id);

        if(!$recipe){
            Session::flash('message','Registro no encontrado');
            return Redirect::route('recipes.index');
        }
        


        $data = [
            'recipe'=> $recipe,
        ];

 
        return view('recipes.show',$data);
    }


    public function edit($id)
    {
        $recipe = Recipe::find($id);

        if(!$recipe){
            Session::flash('message','Registro no encontrado');
            return Redirect::route('recipes.index');
        }
        


        $data = [
            'recipe'=> $recipe,
        ];

 
        return view('recipes.edit',$data);
    }



   
    public function update(RecipeRequestForm $request, $id)
    {
        $recipe = Recipe::find($id);

        if(!$recipe){
            Session::flash('message','Registro no encontrado');
            return Redirect::route('recipes.index');
        }
           
        $recipe->update($request->all());

        Session::flash('message', 'Receta actualizada exitosamente');
        return Redirect::route('recipes.index');

    }

   
    public function destroy($id)
    {
        

        $recipe = Recipe::find($id);

        if(!$recipe){
            Session::flash('message','Registro no encontrado');
            return Redirect::route('recipes.index');
        }
           
        $recipe->delete();

        Session::flash('message', 'Receta eliminada exitosamente');
        return Redirect::route('recipes.index');


    }
}
