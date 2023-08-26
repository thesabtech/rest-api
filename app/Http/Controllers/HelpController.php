<?php

namespace App\Http\Controllers;

use App\Models\Help;
use Illuminate\Http\Request;

class HelpController extends Controller
{
    public function index()
    {
        $helps = Help::all();
        return response()->json($helps);
    }

    public function store(Request $request)
    {
        $help = Help::create($request->all());
        return response()->json($help, 201);
    }

    public function show($ACTID_help)
    {
        $help = Help::findOrFail($ACTID_help);
        return response()->json($help);
    }

    public function update(Request $request, $ACTID_help)
    {
        $help = Help::findOrFail($ACTID_help);
        $help->update($request->all());
        return response()->json($help, 200);
    }

    public function destroy($ACTID_help)
    {
        $help = Help::findOrFail($ACTID_help);
        $help->delete();
        return response()->json(null, 204);
    }
}
