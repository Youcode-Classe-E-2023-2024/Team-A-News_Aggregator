<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Http\Requests\categoryStore;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

        {
            $categories = Category::all(); 
            return view('pages.category', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     return view('pages.category');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(categoryStore $request)
    {
        $input = $request->validated();
        
        Category::create(['category' => $input['category']]);
        return redirect()->back()->withSuccess('Category Created successfully .');

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required|string|max:255', 
        ]);
    
        $category = Category::findOrFail($id);
        $category->category = $request->category;
        $category->save();
    
        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
    
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');  
    }
}
