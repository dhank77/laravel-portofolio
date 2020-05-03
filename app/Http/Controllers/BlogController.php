<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function __construct() {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        // dd($request->file());
        $request->validate([
            'title' => 'required',
            'deskripsi' => 'required',
            'images' => 'required|image|mimes:jpg,jpeg,png,gif,svg'
        ]);

        if($request->file('images')){
            $name = $request->file('images')->store('uploads');
        }

        $blog = new Blog;
        $blog->title = $request->title;
        $blog->deskripsi = $request->deskripsi;
        $blog->slug = Str::slug($request->title);
        $blog->image = $name;
        $blog->save();

        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
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
