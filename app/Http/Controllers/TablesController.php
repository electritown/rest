<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Table;


class TablesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //  Authentication 

        // if(!Gate::allows('isAdmin', 'isWaiter')){
        //     abort(404, "Sorry this page is not Avilable");
        // }

        $tables = Table::orderBy('num_ot', 'asc')->paginate(10);
        return view('table.index')->with('tables', $tables);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('table.create');
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
            
            'image' => 'image|nullable|max:1999'
        ]);
       
        
        //Create item
        if($request->hasFile('image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image')->storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'dish (2).png';
        }
        
        $table = new Table;
        $table->image = $fileNameToStore;  
             
        $table->num_ot            = $request->input('num_ot');
        $table->status            = true;
            
        //request for something to get the ingredients linked with the items from menu 
        // $item->cover_image = $fileNameToStore;
        $table->save();
        return redirect('/table');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $table = Table::find($id);
        $table->status = true;
        $table->save();
        
        return redirect('/table');
    }
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $table = Table::find($id);
        $table->status = false;
        $table->save();
        
        return redirect('/table')->with('success', 'Table Created Successfully');
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
