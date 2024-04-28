<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    public function index()
{
    $produk = Produk::all();
    return view('crud.index', compact('produk'));
}

public function create()
{
    return view('crud.tambah');
}
public function store(Request $request)
{
    $validatedData = $request->validate([
        'nama' => 'required',
        'harga' => 'required|numeric',
        'kategori' => 'required',
        'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi foto
    ]);

    $produk = new Produk();
    $produk->nama = $request->nama;
    $produk->harga = $request->harga;
    $produk->kategori = $request->kategori;

    // Unggah foto ke direktori yang diinginkan (misalnya: public/img)
    if ($request->hasFile('foto')) {
        $foto = $request->file('foto');
        $fotoName = time() . '.' . $foto->getClientOriginalExtension();
        $foto->move(public_path('img'), $fotoName);
        $produk->foto = $fotoName;
    }
    

    $produk->save();

    return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan');
}

public function show()
{
    $produk = Produk::all(); // Mengambil data produk berdasarkan ID
    return view('tes.tes',['produk' => $produk]); // Ganti 'nama_view' dengan nama view Anda
}
     
     public function edit($id)
     {
         $produk = Produk::findOrFail($id);
         return view('crud.edit', compact('produk'));
     }
     
     public function update(Request $request, $id)
     {
         $validatedData = $request->validate([
             'nama' => 'required',
             'harga' => 'required|numeric',
             'kategori' => 'required',
             'foto' => 'foto|mimes:jpeg,png,jpg,gif|max:2048', // Validasi foto
         ]);
     
         $produk = Produk::findOrFail($id);
         $produk->nama = $request->nama;
         $produk->harga = $request->harga;
         $produk->kategori = $request->kategori;
     
         // Periksa apakah pengguna mengunggah foto baru
         if ($request->hasFile('foto')) {
             // Hapus foto lama jika ada
             if ($produk->foto) {
                 Storage::delete('public/img/' . $produk->foto);
             }
             // Unggah foto baru
             $foto = $request->file('foto');
             $namaFoto = time() . '.' . $foto->getClientOriginalExtension();
             $path = $foto->storeAs('public/img', $namaFoto);
             $produk->foto = $namaFoto;
         }
     
         $produk->save();
     
         return redirect()->route('produk.index')->with('success', 'Produk berhasil diperbarui');
     }
     public function destroy($id)
     {
         $produk = Produk::findOrFail($id);
         $produk->delete();
     
         return redirect()->route('produk.index')->with('success', 'Produk berhasil dihapus');
     }
    }
