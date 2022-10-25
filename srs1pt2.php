<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/dist/output.css" rel="stylesheet" />
    <script src="https://unpkg.com/htmlincludejs"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Inter" rel="stylesheet" />
    <style>
      body {
        font-family: "Inter";
        font-size: 22px;
      }
    </style>
  </head>
  <body>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <?php 
    session_start();
    require_once('db_login.php');
    ?>
    
    <div class="container mt-4">
      <h2 class="fw-bolder fs-1">Edit Profile</h2>
      <hr />
      <div class="container mx-auto my-100 p-10 pb-56 mt-5 border rounded-md">
        <div class="md:flex no-wrap md:-mx-2">
          <!-- Left Side -->
          <div class="w-full md:w-3/12 md:mx-2">
            <!-- Profile Card -->
            <div class="">
              <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">Data Mahasiswa</h1>
              <div class="image overflow-hidden">
                <img class="" src="img\Bebek.png" alt="" width="250" />
              </div>
            </div>
            <!-- End of profile card -->
            <div class="my-4"></div>
          </div>
          <!-- Right Side -->
          <div class="w-full md:w-9\12 mx-2 h-10 p-2">
            <!-- Profile tab -->
            <!-- About Section -->
            <div class="bg-white p-3 pb-10 shadow-sm rounded-md border">
              <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                <!-- <span clas="text-green-500">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor"> -->
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
              </div>

              <ul class="list-inside space-y-2 mt-6">
                <?php 
                $atnama = $_POST["nama"];
                $atnama = ucwords(strtolower($atnama));
                $nim = test_input($_POST["nim"]);
                $nama = test_input($atnama);
                $angkatan = test_input($_POST["angkatan"]);
                $jalur = test_input($_POST["jalur"]);

                //insert into db
                $input = $db->query(
                  "INSET INTO mahasiswa(nim,nama,angkatan,jalur) values('$nim','$nama','$angkatan','$jalur')"
              );
                ?>
                <li>
                  <div class="text-black font-bold">Nim Mahasiswa</div>
                  
                </li>
                <li>
                  <div class="text-black font-bold">Nama Mahasiswa</div>
                  
                </li>
                <li>
                  <div class="text-black font-bold">Angkatan:</div>
                  
                </li>
                <li>
                  <div class="text-black font-bold">Jalur Masuk:</div>
                  
                </li>
                <li>
                  <div class="text-black font-bold">Status Mahasiswa:</div>
                  
                </li>
              </ul>
              <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md mt-4" role="alert">
                <div class="flex">
                  <div class="py-1">
                    <svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                    </svg>
                  </div>
                  <div>
                    <p class="font-bold">Info: Data berhasil disimpan.</p>
                    <p class="text-sm">Pastikan data yang Anda masukkan benar.</p>
                  </div>
                </div>
              </div>
              <button class="bg-blue-600 focus:bg-blue-200 text-white focus:text-black py-2 px-4 mt-6 rounded-lg shadow-md" type="button">Kembali</button>
            </div>
            <!-- End of about section -->
            <div class="my-4"></div>
          </div>
          <!-- End of profile tab -->
        </div>
      </div>
    </div>
  </body>
</html>
