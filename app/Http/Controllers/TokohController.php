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

        // Simpan foto
        $foto = $request->file('foto')->store('tokoh', 'public');

        // Admin langsung tampil
        // User biasa menunggu persetujuan
        $status = auth()->user()->role === 'admin'
            ? 'approved'
            : 'pending';

        Tokoh::create([
            'nama' => $request->nama,
            'foto' => $foto,
            'deskripsi' => $request->deskripsi,
            'link' => $request->link,
            'sumber' => $request->sumber,
            'status' => $status,
            'user_id' => auth()->id(),
        ]);

        if ($status === 'approved') {
            return redirect('/tokoh')->with(
                'success',
                'Berita berhasil ditambahkan.'
            );
        }

        return redirect('/tokoh')->with(
            'success',
            'Berita berhasil dikirim dan sedang menunggu peninjauan admin.'
        );
    }

public function login()
{
    return view('login');
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