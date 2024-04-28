<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Edit data</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Edit Produk</div>
    
                    <div class="card-body">
                        <form action="{{ route('produk.update', $produk->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nama">Nama:</label>
                                <input type="text" name="nama" id="nama" class="form-control" value="{{ $produk->nama }}">
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga:</label>
                                <input type="text" name="harga" id="harga" class="form-control" value="{{ $produk->harga }}">
                            </div>
                            <div class="form-group">
                                <label for="kategori">Kategori:</label>
                                <input type="text" name="kategori" id="kategori" class="form-control" value="{{ $produk->kategori }}">
                            </div>
                            <div class="form-group">
                                <label for="foto">Foto:</label>
                                <input type="file" name="foto" id="foto" class="form-control">
                            </div>                            
                            <!-- Tambahkan input untuk foto jika diperlukan -->
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>



