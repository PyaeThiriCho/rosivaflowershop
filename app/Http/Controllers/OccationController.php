<?php

namespace App\Http\Controllers;

use App\Models\Occation;
use App\Models\Category;
use Illuminate\Http\Request;

class OccationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $occations= Occation::all();
        return view('backend.occation.list',compact('occations'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::all();
        return view('backend.occation.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'occationName'=>'required|min:3',
            'occationPrice'=>'required|numeric',
            'occationCategory'=>'required|exists:categories,id',
            'occationImage'=>'required|image|mimes:jpg,png,jpg,gif,svg|max:2048',
            'occationDescription'=>'required|min:20',
        ]);

            $occation=new Occation();// occations From model
        $occation->name        =$request->occationName;
        $occation->price       =$request->occationPrice;
        $occation->category_id =$request->occationCategory;
        $occation->description =$request->occationDescription;

        //store image in the database
        if($request->hasFile('occationImage')){
            $image=$request->file('occationImage');
            $imageName=time().'.'.$image->getClientOriginalExtension();
            $uploadPath=public_path('images/occations');
            $image->move($uploadPath,$imageName);
            $occation->image='images/occations/'.$imageName;
            }
         $occation->save();

         return redirect()->route('occations.index')->with('success', 'Book created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Occation $occation)
    {
        return view('backend.occation.detail',compact('occation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Occation $occation)
    {
        $categories=Category::all();
        return view('backend.occation.edit',compact('occation','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Occation $occation)
    {
        $request->validate([
            'occationName'=>'required|min:3',
            'occationPrice'=>'required|numeric',
            'occationCategory'=>'required|exists:categories,id',
            'occationImage'=>'required|image|mimes:jpg,png,jpg,gif,svg|max:2048',
            'occationDescription'=>'required|min:20',
        ]);

            $occation=new Occation();// occations From model
        $occation->name        =$request->occationName;
        $occation->price       =$request->occationPrice;
        $occation->category_id =$request->occationCategory;
        $occation->description =$request->occationDescription;

        //store image in the database
        if($request->hasFile('occationImage')){

             // Delete the old image if it exists
            if ($occation->image && file_exists(public_path($occation->image))) 
            {
                unlink(public_path($occation->image));
            }

            $image=$request->file('occationImage');
            $imageName=time().'.'.$image->getClientOriginalExtension();
            $uploadPath=public_path('images/occations');
            $image->move($uploadPath,$imageName);
            $occation->image='images/occations/'.$imageName;
            }
         $occation->save();

         return redirect()->route('occations.index')->with('success', 'Book created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Occation $occation)
    {
        $occation->delete();
        return redirect()->route('occations.index');
    }
}
