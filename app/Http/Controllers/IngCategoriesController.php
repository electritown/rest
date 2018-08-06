<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ingcategory;

class IngCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ingredientsCategories.create');
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
        ]);

        //Create Ingredient
        $ingCat = new ingcategory;
        $ingCat->ingcat_name = $request->input('name');
        
        $ingCat->save();

        return redirect('/categories')->with('success', 'Ingredient Category Created');
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
        $ingCat = ingcategory::find($id);
        return view('ingredientsCategories.edit')->with('ingCat', $ingCat);
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
        ]);

        //Update Post
        $ingCat = ingcategory::find($id);
        $ingCat->ingcat_name = $request->input('name');
        
        /* if($request->hasFile('cover_image')){
            $post->cover_image = $fileNameToStore;
        } */
        
        $ingCat->save();

        return redirect('/categories')->with('success', 'Ingredient Categorie Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ingCat = ingcategory::find($id);
        $ingCatt->delete();
        return redirect('/categories')->with('success', 'Category Removed');
    }
}
