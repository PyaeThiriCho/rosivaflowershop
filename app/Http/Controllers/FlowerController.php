<?php

namespace App\Http\Controllers;

use App\Models\Flower;
use App\Models\Type;
use App\Models\Category;
use Illuminate\Http\Request;

class FlowerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $flowers= Flower::all();
        return view('backend.flower.list',compact('flowers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types=Type::all();
        $categories=Category::all();
        return view('backend.flower.create',compact('types','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'flowerName'=>'required|min:3',
            'flowerPrice'=>'required|numeric',
            'flowerType'=>'required|exists:types,id',
            'flowerCategory'=>'required|exists:categories,id',
            'flowerImage'=>'required|image|mimes:jpg,png,jpg,gif,svg|max:2048',
            'flowerDescription'=>'required|min:20',
        ]);

            $flower=new Flower();// flowers From model
        $flower->name        =$request->flowerName;
        $flower->price       =$request->flowerPrice;
        $flower->type_id     =$request->flowerType;
        $flower->category_id =$request->flowerCategory;
        $flower->description =$request->flowerDescription;

        //store image in the database
        if($request->hasFile('flowerImage')){
            $image=$request->file('flowerImage');
            $imageName=time().'.'.$image->getClientOriginalExtension();
            $uploadPath=public_path('images/flowers');
            $image->move($uploadPath,$imageName);
            $flower->image='images/flowers/'.$imageName;
            }
         $flower->save();

         return redirect()->route('admin.flowers.index')->with('success', 'Flower created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Flower $flower)
    {
        return view('backend.flower.detail',compact('flower'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Flower $flower)
    {
        $types=Type::all();
        $categories=Category::all();
        return view('backend.flower.edit',compact('flower','types','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Flower $flower)
    {
         $request->validate([
            'flowerName'=>'required|min:3',
            'flowerPrice'=>'required|numeric',
            'flowerType'=>'required|exists:types,id',
            'flowerCategory'=>'required|exists:categories,id',
            'flowerImage'=>'nullable|image|mimes:jpg,png,jpg,gif,svg|max:2048',
            'flowerDescription'=>'required|min:20',
        ]);

        $flower->name        =$request->flowerName;
        $flower->price       =$request->flowerPrice;
        $flower->type_id     =$request->flowerType;
        $flower->category_id =$request->flowerCategory;
        $flower->description =$request->flowerDescription;

        //store image in the database
        if($request->hasFile('flowerImage')){

             // Delete the old image if it exists
            if ($flower->image && file_exists(public_path($flower->image)))
            {
                unlink(public_path($flower->image));
            }

            $image=$request->file('flowerImage');
            $imageName=time().'.'.$image->getClientOriginalExtension();
            $uploadPath=public_path('images/flowers');
            $image->move($uploadPath,$imageName);
            $flower->image='images/flowers/'.$imageName;
        }
         $flower->save();

         return redirect()->route('admin.flowers.index')->with('success', 'Flower updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Flower $flower)
    {
        $flower->delete();
        return redirect()->route('admin.flowers.index');
    }
}
