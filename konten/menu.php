<nav class="navbar navbar-expand-md bg-primary navbar-dark">
      <!-- Brand -->
      <a href="index.php" class="navbar-brand">LP3I</a>

      <!-- Toggler/collapsible Button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

       <?php
      if ($_SESSION['hak'] == "admin") {
       ?>
       <ul class="navbar-nav">
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav">
                <!-- Links -->
                <li class="nav-item">
                  <a class="nav-link" href="?menu=dasbor">Dasbor</a>
                </li>

               <li class="nav-item">
                      <a class="nav-link" href="?menu=kategori">Kategori</a>
               </li>

               <!-- Dropdown -->
                <li class="nav-item dropdown pointer">
                      <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
                        Barang
                      </a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="?menu=barang">Semua Barang</a>
                        <a class="dropdown-item" href="?menu=tambah-barang">Tambah Barang</a>
                      </div>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="?menu=laporan">Laporan</a>
                </li>
              </ul>

              <?php
              if (!empty($_SESSION['hak'])) { ?>
              <ul class="navbar-nav justify-content-end"> <!--lamun hoyong jadi dipinggir pisan si 'KELUAR'-na
                                                              nganggo flex-row ml-md-auto d-none d-md-flex
                                                              tapi diluar div ieu
                                                              Ngan moal tiasa collapsibleNavbar -->
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-twice" href="?menu=logout">KELUAR</a>
                    </li>
              </ul>
              <?php
              } // if
              else { ?>
               <ul class="navbar-nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-twice" href="?menu=login">MASUK</a>
                    </li>
              </ul>
              <?php } // else ?>

              <?php
            } // tutup if hak = admin
            else { ?>
                   <ul class="navbar-nav">
                      <!-- Navbar links -->
                      <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                          <!-- Links -->
                          <li class="nav-item">
                            <a class="nav-link" href="?menu=dasbor">Dasbor</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link text-twice" href="?menu=login">MASUK</a>
                          </li>
                        </ul>
              <?php
              } //tutup else ?>
                    </div>
                  </ul>

</nav>

<br>
