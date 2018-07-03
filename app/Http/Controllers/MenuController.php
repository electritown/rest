<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Ingredients;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Menu::orderBy('updated_at', 'desc')->paginate(10);
        return view('Menu.index')->with('items', $items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Menu::pluck('item_category', 'item_id');
        $ingredients = Ingredients::pluck('ing_name', 'ing_id');
        return view('menu.create')->with('categories', $categories)->with('ingredients', $ingredients);
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
            // 'cover_image' => 'image|nullable|max:1999'
            'item_category' => 'required',
            'item_ingredients' => 'required'
        ]);
        
        //Create item
        
        $item = new Menu;
        $item->item_name             = $request->input('item_name');
        $item->item_description      = $request->input('item_describtion');
        $item->item_category         = $request->input('item_category');
        $item->item_ingredients      = $request->input('item_ingredients');
            
        //request for something to get the ingredients linked with the items from menu 

        // $item->cover_image = $fileNameToStore;
        $item->save();

        return redirect('/menu')->with('success', 'item Created Successfully');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
