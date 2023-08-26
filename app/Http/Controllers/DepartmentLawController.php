<?php
// app/Http/Controllers/DepartmentLawController.php

namespace App\Http\Controllers;

use App\Models\DepartmentLaw;
use Illuminate\Http\Request;

class DepartmentLawController extends Controller
{
    public function index()
    {
        $departments = DepartmentLaw::all();
        return response()->json($departments);
    }

    public function store(Request $request)
    {
        $department = DepartmentLaw::create($request->all());
        return response()->json($department, 201);
    }

    public function show($catid)
    {
        $department = DepartmentLaw::findOrFail($catid);
        return response()->json($department);
    }

    public function update(Request $request, $catid)
    {
        $department = DepartmentLaw::findOrFail($catid);
        $department->update($request->all());
        return response()->json($department, 200);
    }

    public function destroy($catid)
    {
        $department = DepartmentLaw::findOrFail($catid);
        $department->delete();
        return response()->json(null, 204);
    }
}
