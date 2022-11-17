    <head>
      <link rel="stylesheet" href="Footer.css">
    </head>
    <!-- FOOTER -->
    <footer class="w-100 py-4 flex-shrink-0">
        <div class="container py-4">
            <div class="row gy-4 gx-5 justify-content-between">
                <div class="col-lg-4 col-md-6">
                    <h5 class="h1 text-white">Informatika</h5>
                    <p class="small text-muted">Sebuah project pembuatan web untuk mata kuliah proyek perangkat lunak.</p>
                    <p class="small text-muted mb-0">&copy; Made With &#10084 by Kelompok 3 <a class="text-primary" href="#">Informatika.com</a></p>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-3">Quick links</h5>
                    <ul class="list-unstyled text-muted">
                        <li><a href="<?php if ($_SESSION['status']==1) {echo "srs9.php";} elseif($_SESSION['status']==2){echo "srs10.php";} elseif($_SESSION['status']==3) {echo "srs11";} elseif ($_SESSION['status']==4){echo 'srs12.php';}?>">Home</a></li>
                        <li><a href="https://github.com/renyaw/PPL_C_2022_3">Our Repository</a></li>
                        <li><a href="https://github.com/renyaw/PPL_C_2022_3/graphs/contributors">Contribution</a></li>
                        <li><a href="#">Insight</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </footer>
