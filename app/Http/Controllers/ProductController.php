<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::all();
        //eloquent
        return view('authors.index',compact('authors'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $producto = new Author();
        $producto->name = $request->name;
        $producto->nationality= $request->nationality;
        $producto->birth_date= $request->birth_date;
        $producto->save();
        return redirect()->route('producto.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $producto= author::find($id);
        return view('producto.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $producto = new Author();
        $producto = Author::find($id);

        if ($producto) {
            $producto->delete();
            return redirect()->route('authors.index');
        }
    }
}