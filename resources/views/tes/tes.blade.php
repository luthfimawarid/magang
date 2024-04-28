<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/tes.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> --}}
    <title>Document</title>
</head>
<body>
    <div class="utama">
      <div class="kiri">
        <div class="menu text-center">
          <div class="row row-cols-3 row-gap-2">
            @foreach ($produk as $produkItem)
            <div class="col">
                <div class="card" style="width: 10rem;">
                    <img src="{{ asset ('img/' . $produkItem->foto) }}" class="card-img-top" alt="...">
                    <div class="card-body bg-ligh p-2">
                        <h5 class="card-title text-center">{{ $produkItem->nama }}</h5>
                    </div>
                </div>   
            </div>
            @endforeach  
        </div>
      </div>
      <div class="kat">
        <div class="col">
          <div class="card" style="width: 10rem;">
            <img src="img/cumi.jpg" class="card-img-top" alt="...">
            <div class="card-body bg-ligh p-2">
              <h5 class="card-title text-center">Tumis Cumi</h5>
            </div>
          </div>        
        </div>
        <div class="col">
          <div class="card" style="width: 10rem;">
            <img src="img/cumi.jpg" class="card-img-top" alt="...">
            <div class="card-body bg-ligh p-2">
              <h5 class="card-title text-center">Tumis Cumi</h5>
            </div>
          </div>        
        </div>
        <div class="col">
          <div class="card" style="width: 10rem;">
            <img src="img/cumi.jpg" class="card-img-top" alt="...">
            <div class="card-body bg-ligh p-2">
              <h5 class="card-title text-center">Tumis Cumi</h5>
            </div>
          </div>        
        </div>
        <div class="col">
          <div class="card" style="width: 10rem;">
            <img src="img/cumi.jpg" class="card-img-top" alt="...">
            <div class="card-body bg-ligh p-2">
              <h5 class="card-title text-center">Tumis Cumi</h5>
            </div>
          </div>        
        </div>
        <div class="col">
          <div class="card" style="width: 10rem;">
            <img src="img/cumi.jpg" class="card-img-top" alt="...">
            <div class="card-body bg-ligh p-2">
              <h5 class="card-title text-center">Tumis Cumi</h5>
            </div>
          </div>        
        </div>
      </div>
      <div class="kanan">
        <div class="atas d-flex justify-content-between">
          <div class="profil align-items-center text-center">
          <i class="bi bi-person-circle fs-2"></i>
          <p class="cus">Customer</p>
          </div>
          <p class="teks fw-bold">New Customer</p>
          <div class="pricelist align-items-center text-center">
          <i class="bi bi-list-ul fs-2"></i>
          <p class="pri">Pricing List</p>
          </div>
        </div>  
        <div class="bill">
          <div class="dine d-flex justify-content-center  border-bottom border-3 p-2">
            <p class="mt-auto mb-auto me-1">Dine In</p>
            <i class="bi bi-chevron-down mt-auto mb-auto text-primary"></i>
          </div>
          <table class="table table-borderless">
            <tbody>
              <tr>
                <td class="text-start text-primary">1</td>
                <td></td>
                <td class="text-primary">View Table</td>
              </tr>
              <tr>
                <td class="text-start">Tumis Cumi</td>
                <td></td>
                <td>Rp 15.000</td>
              </tr>
              <tr>
                <td class="text-start">Tumis Cumi</td>
                <td>x 3</td>
                <td>Rp 45.000</td>
              </tr>
              <tr>
                <td class="text-start">Tumis Cumi</td>
                <td></td>
                <td>Rp 15.000</td>
              </tr>
              <tr>
                <td class="text-start">Tumis Cumi</td>
                <td>x 2</td>
                <td>Rp 30.000</td>
              </tr>
              <tr>
                <td class="text-start">Sub-Total :</td>
                <td></td>
                <td>Rp 105.000</td>
              </tr>
              <tr>
                <td class="text-start">Total :</td>
                <td></td>
                <td>Rp 105.000</td>
              </tr>
            </tbody>
          </table>
          <div class="clear">
            <p class="border-top border-bottom border-3 p-1 text-secondary">Clear Sale</p>
          </div>
        </div>
        <div class="kembali">
          <div class="save d-flex justify-content-around pt-2 pb-2">
            <button type="submit" class="fs-5 bg-transparent border-0" onclick="showPopup()">Save Bill</button>
            <button type="submit" class="fs-5 bg-transparent border-0">Print Bill</button>
          </div>
          <div class="charge d-flex justify-content-around">
            <div class="icon border-end border-light border-2 p-2">
              <i class="bi bi-currency-exchange fs-3 text-light"></i>
            </div>
            <div class="duit pt-2">
              <p class="fs-4 text-light fw-semibold">Charge Rp 105.000</p>
            </div>
          </div>
        </div>
    </div>  
    <script src="/tes.js"></script>
</body>
</html>