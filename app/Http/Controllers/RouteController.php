<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Route;

class RouteController extends Controller
{

    public function index(): View
    {
        $viewData = [];
        $viewData["title"] = "Routes - Medallo-Bike";
        $viewData["subtitle"] =  "Routes List";
        $viewData["routes"] = Route::all();
        return view('route.index')->with("viewData", $viewData);
    }

    public function show(string $id) : View
    {
        $viewData = [];
        $route = Route::findOrFail($id);
        $viewData["title"] = $route["name"]." - Medallo-Bike";
        $viewData["subtitle"] =  $route["name"]." - Route Details";
        $viewData["route"] = $route;
        return view('route.show')->with("viewData", $viewData);
    }

    public function create(): View
    {
        $viewData = [];
        $viewData["title"] = "Create route";

        return view('route.create')->with("viewData",$viewData);
    }

    public function save(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'difficulty' => 'nullable|integer|min:1|max:10',
            'type' => 'nullable|string',
            'zone' => 'nullable|string',
            'imageMap' => 'nullable|string',
            'coordinateStart' => 'nullable|string',
            'coordinateEnd' => 'nullable|string',
        ]);

        $route = Route::create($request->only([
            'name', 'description', 'difficulty', 'type', 'zone', 'imageMap', 'coordinateStart', 'coordinateEnd'
        ]));

        return redirect()->route('route.success', ['id' => $route->id]);
    }

    public function success($id)
    {
        $route = Route::findOrFail($id);

        return view('route.success')->with('route', $route);
    }

    public function destroy($id)
    {
        $route = Route::findOrFail($id);
        $route->delete();

        return redirect()->route('route.index')->with('success', 'Ruta eliminada exitosamente');
    }
}
