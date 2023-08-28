<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Chalengge;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Tables\DashboardChalengges;
use ProtoneMedia\Splade\Facades\Toast;

class DashboardChalenggeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.chalengge.index', [
            'chalengges' => DashboardChalengges::build() 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('dashboard.chalengge.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255|unique:chalengges',
            'category_id' => 'required',
            'description' => 'required',
            'clue' => 'required',
            'answer' => 'required',
            'point' => 'required|numeric|min:1',
            'link' => 'url|nullable'
        ], 
        [
            'category_id.required' => 'The category field is required.'
        ]
        );
        $validated['user_id'] = auth()->user()->id;
        $validated['slug'] = Str::of($request->name)->slug('-');
        Chalengge::create($validated);
        Toast::title('Chalengge added!')->autoDismiss(3);
        return redirect('/dashboard/chalengge');
    }

    public function edit(Chalengge $chalengge)
    {
        $categories = Category::all();
        return view('dashboard.chalengge.edit', compact('chalengge', 'categories'));
    }

    public function update(Request $request, Chalengge $chalengge)
    {
        $validated = $request->validate([
            'name' => 'required|max:255|unique:chalengges,name,'.$chalengge->id,
            'category_id' => 'required',
            'description' => 'required',
            'clue' => 'required',
            'answer' => 'required',
            'point' => 'required|numeric|min:1',
            'link' => 'url|nullable'
        ],
        [
            'category_id.required' => 'The category field is required.'
        ]);

        $validated['slug'] = Str::of($request->name)->slug('-');
        $chalengge->update($validated);
        Toast::success('Chalengge updated!')->autoDismiss(3);
        return redirect('/dashboard/chalengge');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chalengge $chalengge)
    {
        $chalengge->delete();
        Toast::danger('Chalengge deleted!')->autoDismiss(3);
        return redirect('/dashboard/chalengge');
    }
}
