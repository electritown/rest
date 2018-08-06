<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Meal;
use App\CategoryMeal;
use App\Supcategory;
use App\ingcategory;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        //  Authentication 

        // if(!Gate::allows('isAdmin', 'isCooker')){
        //     abort(404, "Sorry this page is not Avilable");
        // }

        $categories = Category::orderBy('updated_at', 'desc')->paginate(10);
        $ingCats = ingcategory::orderBy('updated_at', 'desc')->paginate(10);
        return view('mealsCategories.index')->with('categories', $categories)->with('ingCats', $ingCats);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $supCatName = Supcategory::pluck('supcat_name', 'supcat_id');
        $supCatId = Supcategory::pluck('supcat_id', 'supcat_id');
        return view('mealsCategories.create')->with('supCatName', $supCatName)->with('supCatId', $supCatId);
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
        $cat = new Category;
        $cat->cat_name = $request->input('name');
        $cat->supcat_id = $request->input('supCat');
        
        $cat->save();

        return redirect('/categories')->with('success', 'category Created');
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
        $cat = Category::find($id);
        return view('mealsCategories.edit')->with('cat', $cat);
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
        $cat = Category::find($id);
        $cat->cat_name = $request->input('name');
        
        /* if($request->hasFile('cover_image')){
            $post->cover_image = $fileNameToStore;
        } */
        
        $cat->save();

        return redirect('/categories')->with('success', 'categories Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = category::find($id);
        $cat->delete();
        return redirect('/categories')->with('success', 'categories Removed');
    }

    
}


