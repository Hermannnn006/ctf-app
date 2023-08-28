<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Tables\DashboardCategories;
use ProtoneMedia\Splade\Facades\Toast;

class DashboardCategoryController extends Controller
{
    public function index()
    {
        return view('dashboard.category.index', [
            'categories' => DashboardCategories::build()
        ]);
    }

    public function create()
    {
        return view('dashboard.category.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255|unique:categories',     
        ],
        [
            'name.required' => 'Category field is required',
        ]
    );
        $validated['slug'] = Str::of($request->name)->slug('-');
        Category::create($validated);
        Toast::title('Category added!')->autoDismiss(3);
        return redirect('/dashboard/category');
    }

    public function edit(Category $category)
    {
        return view('dashboard.category.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name' => 'required|max:255|unique:categories,name,'.$category->id, 
        ],
        [
            'name.required' => 'Category field is required',
        ]
    );
        $validated['slug'] = Str::of($request->name)->slug('-');
        $category->update($validated);
        Toast::success('Category updated!')->autoDismiss(3);
        return redirect('/dashboard/category');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        Toast::danger('Category deleted!')->autoDismiss(3);
        return redirect('/dashboard/category');
    }
}
