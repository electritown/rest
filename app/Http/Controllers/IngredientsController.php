<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Ingredient;

class IngredientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingredients = Ingredient::orderBy('updated_at', 'desc')->paginate(10);
        return view('ingredients.index')->with('ingredients', $ingredients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ingredients.create');
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
            'name' => 'required',
            // 'cover_image' => 'image|nullable|max:1999'
            'quantity' => 'required'
        ]);

        //Create Ingredient
        $ing = new Ingredient;
        $ing->ing_name = $request->input('name');
        $ing->ing_desc = $request->input('description');
        $ing->ing_quantity = $request->input('quantity');
        // $ing->cover_image = $fileNameToStore;
        $ing->save();

        return redirect('/ingredients')->with('success', 'Ingredient Created');
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
        $ing = Ingredient::find($id);
        return view('ingredients.edit')->with('ing', $ing);
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
            'name' => 'required',
            'quantity' => 'required'
        ]);

        //Update Post
        $ing = Ingredient::find($id);
        $ing->ing_name = $request->input('name');
        $ing->ing_desc = $request->input('describtion');
        $ing->ing_quantity = $request->input('quantity');
        
        /* if($request->hasFile('cover_image')){
            $post->cover_image = $fileNameToStore;
        } */
        
        $ing->save();

        return redirect('/ingredients')->with('success', 'Ingredient Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ing = Ingredient::find($id);
        $ing->delete();
        return redirect('/ingredients')->with('success', 'Ingredient Removed');
    }
}