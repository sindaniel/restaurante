<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

use App\Http\Requests\ProductRecipeRequestForm;

use Session; 
use App\Recipe;
use App\Product;
use App\ProductRecipe;






class ProductRecipeController extends Controller
{
   
    public function index(Request $request, $recipe_id){
        
        
        $recipe = Recipe::find($recipe_id);

        if(!$recipe){
            Session::flash('message','Registro no encontrado');
            return Redirect::route('recipes.index');
        }

        $data = [
            'recipe'=> $recipe
        ];
        
        return view('recipes.products.index',$data);

    }


    public function create($recipe_id){

        $recipe = Recipe::find($recipe_id);

        

        if(!$recipe){
            Session::flash('message','Registro no encontrado');
            return Redirect::route('recipes.index');
        }
        

        
        $products = Product::all()->pluck('name', 'id');

        $data = [
            'recipe'=> $recipe,
            'products'=> $products
        ];
        
        
     
        return view('recipes.products.create', $data);

    }


    public function store(ProductRecipeRequestForm $request, $recipe_id)
    {
       
        $productRecipe = new ProductRecipe;
        
        $productRecipe->create($request->all());

        $productRecipe->recipe_id = $recipe_id;
        $productRecipe->quantity = $request->get('quantity');
        $productRecipe->product_id = $request->get('product_id');

        $productRecipe->save();

        Session::flash('message', 'Producto agregado exitosamente');
        return Redirect::route('recipes.products.index', $recipe_id);
    }


    public function destroy($recipe_id, $id)
    {
          

        $productRecipe = ProductRecipe::find($id);

        if(!$productRecipe){
            Session::flash('message','Registro no encontrado');
            return Redirect::route('recipes.products.index', $id);
        }
           
        $productRecipe->delete();

        Session::flash('message', 'Producto eliminado exitosamente');
        return Redirect::route('recipes.products.index', $recipe_id);


    }



}
