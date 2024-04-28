<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Daftar Produk</title>
</head>
<body>
                    <div class="card-header text-center text-light border-bottom border-1 p-2 fs-5 border-secondary bg-dark">Daftar Produk</div>
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Kategori</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produk as $produk)
                            <tr>
                                <td>{{ $produk->nama }}</td>
                                <td>{{ $produk->harga }}</td>
                                <td>{{ $produk->kategori }}</td>
                                <td><img src="{{ asset('storage/img/' . $produk->foto) }}" alt="{{ $produk->nama }}" style="max-width: 100px;"></td>
                                <td>
                                    <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('produk.destroy', $produk->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{ route('produk.create') }}" class="btn btn-primary">Tambah Produk</a>

</body>
</html>
