<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->paginate(10);
        return view('users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('users.create');
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
            'email' => 'required',
            'password' => 'required'
        ]);
        
        //Create item
        
        $user = new User;
        $user->name             = $request->input('name');
        $user->email            = $request->input('email');
        $user->password         = $request->input('password');
            
        //request for something to get the ingredients linked with the items from menu 

        // $item->cover_image = $fileNameToStore;
        $user->save();

        return redirect('/users')->with('success', 'User Created Successfully');
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

        $user = User::find($id);
        return view('users.edit')->with('user', $user);
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
            // 'cover_image' => 'image|nullable|max:1999'
            'email' => 'required',
            'password' => 'required'
        ]);
        
        
        
        $user = User::find($id);
        $user->name             = $request->input('name');
        $user->email            = $request->input('email');
        $user->password         = $request->input('password');
            
        //request for something to get the ingredients linked with the items from menu 

        // $item->cover_image = $fileNameToStore;
        $user->save();

        return redirect('/users')->with('success', 'User Edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/users')->with('success', 'User Removed');
    }
}
