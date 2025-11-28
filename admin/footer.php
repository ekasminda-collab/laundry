<!-- footer.php -->
<footer class="footer bg-dark text-light mt-5">
  <div class="container py-4">
    <div class="row">

      <!-- Kolom 1: Brand -->
      <div class="col-md-4 mb-3">
        <h5 class="fw-bold">Sistem Informasi Laundry</h5>
        <p style="font-size:14px;">
          Aplikasi manajemen laundry untuk memudahkan pencatatan pelanggan, transaksi, dan laporan.
        </p>
      </div>

      <!-- Kolom 2: Navigasi -->
      <div class="col-md-4 mb-3">
        <h5 class="fw-bold">Navigasi</h5>
        <ul class="list-unstyled" style="font-size:14px;">
          <li><a href="dashboard.php" class="text-light text-decoration-none"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
          <li><a href="pelanggan.php" class="text-light text-decoration-none"><i class="glyphicon glyphicon-user"></i> Pelanggan</a></li>
          <li><a href="transaksi.php" class="text-light text-decoration-none"><i class="glyphicon glyphicon-transfer"></i> Transaksi</a></li>
          <li><a href="laporan.php" class="text-light text-decoration-none"><i class="glyphicon glyphicon-list-alt"></i> Laporan</a></li>
        </ul>
      </div>

      <!-- Kolom 3: Kontak -->
      <div class="col-md-4 mb-3">
        <h5 class="fw-bold">Kontak Kami</h5>
        <p style="font-size:14px;">
          <i class="glyphicon glyphicon-envelope"></i> info@laundryku.com <br>
          <i class="glyphicon glyphicon-earphone"></i> +62 813 9154 9104
        </p>
        <div>
          <a href="#" class="text-light me-3"><i class="glyphicon glyphicon-thumbs-up"></i></a>
          <a href="#" class="text-light me-3"><i class="glyphicon glyphicon-camera"></i></a>
          <a href="#" class="text-light"><i class="glyphicon glyphicon-comment"></i></a>
        </div>
      </div>

    </div>
    <hr class="border-light">
    <div class="text-center" style="font-size:13px;">
      &copy; <?php echo date("Y"); ?> Sistem Informasi Laundry. Dibuat dengan <i class="glyphicon glyphicon-heart text-danger"></i>
    </div>
  </div>
</footer>

<style>
  .footer a:hover {
    color: #00ffcc !important;
  }
</style>



