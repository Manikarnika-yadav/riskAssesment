<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assets;
class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $asset = Assets::orderBy('created_at', 'DESC')->get();
  
        return view('assets.index', compact('asset'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('assets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        Assets::create($request->all());
         
        return redirect()->route('assets')->with('success', 'Asset added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $asset = Assets::findOrFail($id);
  
        return view('assets.show', compact('asset'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $asset = Assets::findOrFail($id);
  
        return view('assets.edit', compact('asset'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $asset = Assets::findOrFail($id);
  
        $asset->update($request->all());
  
        return redirect()->route('assets')->with('success', 'Asset updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $asset = Assets::findOrFail($id);
  
        $asset->delete();
  
        return redirect()->route('assets')->with('success', 'Asset deleted successfully');
    }
}
