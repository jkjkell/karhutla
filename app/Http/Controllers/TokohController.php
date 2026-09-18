<?php

namespace App\Http\Controllers;

use App\Models\Tokoh;
use Illuminate\Http\Request;

class TokohController extends Controller
{
    public function index()
    {
        $tokoh = Tokoh::where('status', 'approved')->get();

        return view('tokoh', compact('tokoh'));
    }

    public function create()
    {
        return view('tambah-tokoh');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpg,jpeg,png,webp|max:5120',
            'deskripsi' => 'required|string',
            'link' => 'nullable|url',
            'sumber' => 'nullable|string|max:255',
        ]);

        $foto = $request->file('foto')->store('tokoh', 'public');

        Tokoh::create([
            'nama' => $request->nama,
            'foto' => $foto,
            'deskripsi' => $request->deskripsi,
            'link' => $request->link,
            'sumber' => $request->sumber,
            'status' => 'pending',
            'user_id' => auth()->id(),
        ]);

        return redirect('/tokoh')->with(
            'success',
            'Berita berhasil dikirim dan sedang menunggu peninjauan admin.'
        );
    }

    public function review()
    {
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        $tokoh = Tokoh::where('status', 'pending')
            ->latest()
            ->get();

        return view('admin-tokoh', compact('tokoh'));
    }

    public function approve($id)
    {
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        $tokoh = Tokoh::findOrFail($id);

        $tokoh->update([
            'status' => 'approved',
        ]);

        return back()->with('success', 'Berita berhasil diterima.');
    }

    public function reject($id)
    {
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        $tokoh = Tokoh::findOrFail($id);

        $tokoh->update([
            'status' => 'rejected',
        ]);

        return back()->with('success', 'Berita berhasil ditolak.');
    }

    public function destroy($id)
    {
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        $tokoh = Tokoh::findOrFail($id);

        $tokoh->delete();

        return redirect('/tokoh')->with(
            'success',
            'Berita berhasil dihapus.'
        );
    }
}