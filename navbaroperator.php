<?php
session_start();
require_once('db_login.php');
?>
<nav class="navbar bg-light sticky-top border">
  <div class="container">
    <a class="navbar-brand" href="srs1.php">
      <img src="img/logo.png" alt="Logo" width="30" height="35" class="d-inline-block" />
      <b>informatika | Hi, Admin.</b>
      
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">informatika</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="srs1.php">Tambah Data Mahasiswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="srs9.php">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false"> List Skripsi </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="srs16_lul.php">Lulus</a></li>
              <li><a class="dropdown-item" href="srs16_blm.php">Belum Lulus</a></li>
            </ul>
          </li> -->
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>
