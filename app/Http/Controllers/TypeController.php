<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $types=Type::all();
       return view('backend.type.list',compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // var_dump($request->all());
        // die();
        // return 'store';

        //Validation start
        $request->validate([
            'typeName'=> 'required|min:3',
        ]);
        //validation end

        $typeName=$request->typeName;

        //store into database tabel
        Type::create([
            'name'=>$typeName,
        ]);

        //redirect to list page
        return redirect()->route('admin.types.index')->with('success','Type created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Type $type)
    {
        return view('backend.type.detail',compact('type'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type $type)
    {
        return view('backend.type.edit',compact('type'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Type $type)
    {
        // var_dump($request->all());
        // die();
        // return 'store';

        //Validation start
        $request->validate([
            'typeName'=> 'required|min:3',
        ]);
        //validation end

        $typeName=$request->typeName;

        //update into database tabel
        $type->name=$typeName;
        $type->save();

         //redirect to list page
        return redirect()->route('admin.types.index')->with('success','Type updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        $type->delete();
        return redirect()->route('admin.types.index');
    }
}
