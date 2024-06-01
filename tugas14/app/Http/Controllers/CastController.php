<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cast;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cast = Cast::all();

        return view('cast.tampil', ['cast' => $cast]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cast.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:3',
            'umur' => 'required',
            'bio' => 'required',
        ],
        [
            'nama.required' => 'nama harus diisi, karena perlu',
            'umur.required' => 'Umur harus diisi, karena biar tau kamu lebih tua/muda',
            'bio.required' => 'Bio sebenarnya gak harus diisi tapi perlu',
        ]);
        $cast = new Cast;
        $cast->nama = $request->input('nama');
        $cast->umur = $request->input('umur');
        $cast->bio = $request->input('bio');

        $cast->save();

        return redirect('/cast');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cast = Cast::find($id);

        return view('cast.bio', ['cast' => $cast]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cast = Cast::find($id);

        return view('cast.edit', ['cast' => $cast]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|min:3',
            'umur' => 'required',
            'bio' => 'required',
        ],
        [
            'nama.required' => 'nama harus diisi, karena perlu',
            'umur.required' => 'Umur harus diisi, karena biar tau kamu lebih tua/muda',
            'bio.required' => 'Bio sebenarnya gak harus diisi tapi perlu',
        ]);
        Cast::where('id', $id)
            ->update(
                [
                    'nama' => $request->input('nama'),
                    'umur' => $request->input('umur'),
                    'bio' => $request->input('bio'),
                ]
            );
            return redirect ('/cast');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Cast::where('id', $id)->delete();
        return redirect('/cast');
    }
}
