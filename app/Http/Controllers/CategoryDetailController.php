<?php

namespace App\Http\Controllers;
use App\Models\CategoryDetail;
use Illuminate\Http\Request;

class CategoryDetailController extends Controller
{
    public function index()
    {
        $categories = CategoryDetail::all();
        return response()->json($categories);
    }

    public function store(Request $request)
    {
        $category = CategoryDetail::create($request->all());
        return response()->json($category, 201);
    }

    public function show($id)
    {
        $category = CategoryDetail::findOrFail($id);
        return response()->json($category);
    }

    public function update(Request $request, $id)
    {
        $category = CategoryDetail::findOrFail($id);
        $category->update([
            'CATEGOR' => $request->input('CATEGOR'),
            'CATEGOR_u' => $request->input('CATEGOR_u')
            // Add other fields if needed
        ]);

        return response()->json($category, 200);
    }

    public function destroy(Request $request, $id)
    {
        $category = CategoryDetail::findOrFail($id);
        $category->delete();
        return response()->json("Successfully Deleted", 200);
    }
}
