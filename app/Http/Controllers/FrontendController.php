<?php

namespace App\Http\Controllers;

use App\Models\Occation;
use App\Models\Flower;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        // Get featured flowers (latest 8 flowers)
        $featuredFlowers = Flower::with('category', 'type')
            ->orderBy('created_at', 'desc')
            ->take(8)
            ->get();

        // Get categories with their flowers
        $categories = Category::with('flowers')->get();

        // Get occasions
        $occasions = Occation::with('category')->get();

        return view('frontend.ui.homepage', compact('featuredFlowers', 'categories', 'occasions'));
    }

    public function detail()
    {
        return view('frontend.ui.detailpage');
    }

     public function occassion()
    {
        return view('frontend.ui.occassionpage');
    }

    public function flower()
    {
        // Categories are now shared via middleware
        return view('frontend.ui.flowerpage');
    }

     public function review()
    {
        return view('frontend.ui.reviewpage');
    }

    public function contact()
    {
        return view('frontend.ui.contactpage');
    }

     public function cart()
    {
        return view('frontend.ui.cartpage');
    }

    // New methods for categories and occasions
    public function categoryDetail($id)
    {
        $category = Category::findOrFail($id);
        $flowers = Flower::where('category_id', $id)->get();
        return view('frontend.ui.category-detail', compact('category', 'flowers'));
    }

    public function occasionDetail($id)
    {
        $occasion = Occation::with('category')->findOrFail($id);
        $relatedFlowers = Flower::where('category_id', $occasion->category_id)->get();
        return view('frontend.ui.occasion-detail', compact('occasion', 'relatedFlowers'));
    }

    public function allCategories()
    {
        $categories = Category::with('flowers')->get();
        return view('frontend.ui.all-categories', compact('categories'));
    }

    public function allFlowers()
    {
        $flowers = Flower::with('category')->get();
        return view('frontend.ui.all-flowers', compact('flowers'));
    }
}
