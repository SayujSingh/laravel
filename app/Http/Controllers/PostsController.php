<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *

     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *

     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *

     */
    public function store(Request $request)
    {
        $res = new Post;
        $res -> name = $request->input('name');
        $res -> address = $request->input('address');
        $res -> organization = $request->input('organization');
        $res -> email = $request->input('email');
        $res -> image = $request->input('image');
        $res -> save();
        $request-> session()-> flash ('msg','data submitted');

        return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     *

     */
    public function show(Post $post)
    {
        return view('viewTable')->with("cusDetail",Post::all());
    }

    /**
     * Show the form for editing the specified resource.

     */
    public function edit(Post $post, $id)
    {
        return view('edit_customer')-> with('cusArr', Post::find($id));
    }

    /**
     * Update the specified resource in storage.
     *

     */
    public function update(Request $request, $id)
    {
        $res = Post::find($id);
        $res -> name = $request->input('name');
        $res -> address = $request->input('address');
        $res -> organization = $request->input('organization');
        $res -> email = $request->input('email');
        $res -> image = $request->input('image');
        $res -> save();
        $request->session()->flash('msg', 'Data Updated');

        return redirect('dashboard');
    }

    /**
     * Remove the specified resource from storage.

     */
    public function destroy(Post $post, $id)
    {
        Post::destroy(['id',$id]);

        return redirect('dashboard');
    }
}
