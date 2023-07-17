<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>List Sudah/Belum Lulus PKL</title>
    <script src="https://unpkg.com/htmlincludejs"></script>
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

<body class="bg-light">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <include src="navdep.html"></include>
    <br />
    <div class="container p-4 bg-white">
        <h3>List Sudah/Belum Lulus PKL</h3>
        <hr />
        <br />
        <!-- <div class="d-grid gap-2 d-md-block">
        <form action="srs16_lul.html">
          <button class="btn btn-outline-success" type="submit">Lulus</button>
          <button class="btn btn-danger" type="button">Belum Lulus</button>
        </form>
      </div> -->
        <br />
        <div class="d-grid gap-2 d-md-block">
            <button class="btn btn-outline-secondary" type="button" disabled>2017</button>
            <button class="btn btn-outline-secondary" type="button" disabled>2018</button>
            <button class="btn btn-secondary" type="button">2019</button>
            <button class="btn btn-outline-secondary" type="button" disabled>2020</button>
            <button class="btn btn-outline-secondary" type="button" disabled>2021</button>
        </div>
        <br />
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Angkatan</th>
                    <th scope="col">Nilai</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <td>1</td>
                    <td>Soleh</td>
                    <td>2406012013333</td>
                    <td>2019</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Nanas</td>
                    <td>2406012013014</td>
                    <td>2019</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Cantik</td>
                    <td>24060120140123</td>
                    <td>2019</td>
                    <td>-</td>
                </tr>
            </tbody>
        </table>
        <br />
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <?PHP
    include('Footer.php');
    ?>
</body>

</html>