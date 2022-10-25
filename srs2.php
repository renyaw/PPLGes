<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update Data Pribadi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <script src="https://unpkg.com/htmlincludejs"></script>
  </head>
  <body>
    <div class="container mt-4">
      <h2>Update Data Pribadi</h2>
      <div class="alert alert-warning pt-2 pb-1 col-11" role="alert">
        <h5>Peringatan!</h5>
        <p>Lakukan update data pribadi untuk menggunakan fitur lain.</p>
      </div>
      <div class="row">
        <div class="col-3">
          <div class="image overflow-hidden d-flex justify-content-center">
            <img class="" src="img\Bebek.png" alt="" width="250" />
          </div>
            <div class="d-flex justify-content-center">
            <a href="" class=""><button type="button" class="btn btn-warning px-5 mt-2 text-white" style="width: 250px; background-color:#FF8064;">Ubah Foto</button></a>
            
            </div>
            <div class="d-flex justify-content-center">
              <p class="mt-2 mx-auto">2023/2024 Ganjil</p>
            </div>
            <div class="d-flex justify-content-center">
              <a href="#" class="btn btn-success">Aktif</a>
            </div>
            
        </div>
        <div class="col-4">
        <form>
        <div class="">
          <label for="staticEmail" class=" col-form-label">NIM Mahasiswa</label>
            <input type="text" readonly class="form-control-plaintext form-control-sm" id="staticEmail" value="(ambil dari db)">
        </div>
        <div class="">
          <label for="staticEmail" class=" col-form-label">Nama Mahasiswa</label>
            <input type="text" readonly class="form-control-plaintext form-control-sm" id="staticEmail" value="(ambil dari db)">
        </div>
        <div class="">
          <label for="staticEmail" class=" col-form-label">Angkatan</label>
            <input type="text" readonly class="form-control-plaintext form-control-sm" id="staticEmail" value="(ambil dari db)">
        </div>
        <div class="">
            <label for="prodi" class=" col-form-label">Prodi</label>
              <input type="text" readonly class="form-control-plaintext form-control-sm" id="prodi" value="Informatika">
          </div>
          <div class="">
            <label for="fakultas" class=" col-form-label">Fakultas</label>
              <input type="text" readonly class="form-control-plaintext form-control-sm" id="prodi" value="Sains dan Matematika">
          </div>
          <button type="submit" class="btn btn-primary mt-4">Update</button>
        </form>
        </div>

        <div class="col-4">
        <form>
          
          <div class="mb-3 mt-2">
            <label for="NoHp" class="form-label">Nomor Handphone</label>
            <input type="text" class="form-control form-control-sm" id="nohp">
          </div>
          <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control form-control-sm" id="alamat">
          </div>
          <div class="mb-3">
            <label for="provinsi" class="form-label">Provinsi</label>
            <input type="text" class="form-control form-control-sm" id="provinsi">
          </div>
          <div class="mb-3">
            <label for="kota" class="form-label">Kabupaten/Kota</label>
            <input type="text" class="form-control form-control-sm" id="kota">
          </div>

        </form>

        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="ajaxsrs9.js"></script>
  </body>
</html>