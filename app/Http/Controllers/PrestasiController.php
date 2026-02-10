<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    public function index()
    {
        $prestasis = Prestasi::all()->groupBy('student_name');
        return view('menu1', compact('prestasis'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_name' => 'required',
            'title' => 'required',
            'description' => 'nullable'
        ]);

        Prestasi::create($request->all());

        return redirect()->back()->with('success', 'Prestasi berhasil ditambahkan.');
    }

    public function update(Request $request, Prestasi $prestasi)
    {
        $request->validate([
            'student_name' => 'required',
            'title' => 'required',
            'description' => 'nullable'
        ]);

        $prestasi->update($request->all());

        return redirect()->back()->with('success', 'Prestasi berhasil diperbarui.');
    }

    public function destroy(Prestasi $prestasi)
    {
        $prestasi->delete();
        return redirect()->back()->with('success', 'Prestasi berhasil dihapus.');
    }
}
