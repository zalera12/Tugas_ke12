<?php

namespace App\Http\Controllers;

use App\Models\Cast;
use Illuminate\Http\Request;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.cast.index',[
            'title' => 'Cast',
            'dataCast' => Cast::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.cast.create',[
            'title' => 'CreateCast',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|max:255',
            'umur' => 'required',
            'bio' => 'required'
        ]);

        Cast::create($validated);

        return redirect()->back()->with('success','data berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show(Cast $cast)
    {
        return view('dashboard.cast.show',[
            'title' => $cast->nama,
            'cast' => $cast
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cast $cast)
    {
        return view('dashboard.cast.edit',[
            'title' => 'EditCast',
            'cast' => $cast
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cast $cast)
    {
        $validated = $request->validate([
            'nama' => 'required|max:255',
            'umur' => 'required',
            'bio' => 'required'
        ]);

        Cast::where('id',$cast->id)->update($validated);
        return redirect()->back()->with('success','data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cast $cast)
    {
        Cast::destroy($cast->id);
        return redirect()->back()->with('success_delete','data berhasil dihapus');
    }
}
