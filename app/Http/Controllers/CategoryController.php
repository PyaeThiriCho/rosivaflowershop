<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $categories=Category::all();
       return view('backend.category.list',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('backend.category.create');
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
            'categoryName'=> 'required|min:3',
        ]);
        //validation end

        $categoryName=$request->categoryName;

        //store into database tabel
        Category::create([
            'name'=>$categoryName,
        ]);

        //redirect to list page
        return redirect()->route('category.index')->with('success','Book created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
         review('backend.category.detail',compact('id'));  
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('backend.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        // var_dump($request->all());
        // die();
        // return 'store';

        //Validation start
        $request->validate([
            'categoryName'=> 'required|min:3',
        ]);
        //validation end

        $categoryName=$request->categoryName;

        //update into database tabel
        $category->name=$categoryName;
        $category->save();


        //redirect to list page
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index'); //
    }
}
