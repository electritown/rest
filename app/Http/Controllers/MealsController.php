<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meal;
use App\Ingredient;
use App\Category;
use App\Supcategory;


class MealsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Meal::orderBy('updated_at', 'desc')->paginate(10);
        $supCategories = Supcategory::All();

        return view('meal.index')->with('items', $items)->with('supCategories', $supCategories);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ingredients = Ingredient::all();
        $catName = Category::pluck('cat_name', 'cat_id');
        $catId = Category::pluck('cat_id', 'cat_id');

        return view('meal.create')->with('ingredients', $ingredients)->with('catName', $catName)->with('catId', $catId);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'item_name' => 'required',
            // 'cover_image' => 'image|nullable|max:1999',
            'ing_id' => 'required'
        ]);
        
        //Create item
        
        $item = new Meal();
        $item->item_name             = $request->input('item_name');
        $item->item_describtion      = $request->input('item_describtion');
        $item->cat_id                = $request->Input('categories');
        //request for something to get the ingredients linked with the items from menu 
            
        // $item->cover_image = $fileNameToStore;
         $item->save();

        // $meal = $request->get("item_name");
        // $meal = Meal::findOrFail($request->item_id);
        
        // $ing = $request->get('ing_name');
        // $ing = Ingredient::findOrFail($request->ing_id);
        
        // foreach ($ing as $ingId) {
        //     $meal->meals()->attach($ingId);
        // }
        
        $ingIds = $request->input('ing_id');
        $amount = $request->input('amount');


        $item->ingredients()->attach($ingIds,['amount'=>$amount]); // Attach ing to the meal.
       // Attach Amount to the meal.

        
       return redirect('/meals')->with('success', 'Item Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item= Meal::find($id);
        $ingredients = Ingredient::all();
        return view('meal.edit')->with('item', $item)->with('ingredients', $ingredients);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'item_name' => 'required',
            // 'cover_image' => 'image|nullable|max:1999',
            'item_ingredients' => 'required'
        ]);
        
        //Create item
        
        $item = Meal::find($id);
        $item->item_name             = $request->input('item_name');
        $item->item_describtion      = $request->input('item_describtion');
            
        //request for something to get the ingredients linked with the items from menu 

        // $item->cover_image = $fileNameToStore;
        $item->save();

        

        return redirect('/meals')->with('success', 'item Edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Meal::find($id);
        $item->delete();
        $item->ingredients()->detach();

        return redirect('/meals')->with('success', 'Item Removed');
    }
    public function findCat($id)
    {    //$items = DB::table('meals')->where('cat_id', '=', $id)->get();
        $items = Meal::where('cat_id',$id)->paginate(10);
         $categories = Category::All();
         return  view('meal.index')->with('items',$items)->with('categories', $categories);
        
        
    }

}
