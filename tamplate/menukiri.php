<!-- Hero Section Begin -->
<section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Semua Kategori</span>
                        </div>
                        <?php 
                      $QueryKategori = mysqli_query($koneksi,"SELECT * FROM tb_kategori");
                      while ($k = mysqli_fetch_array($QueryKategori)) {
                      ?>
                        <ul>
                            <li><a href="kategori.php?id=<?= $k['id_kategori']; ?>"><?= $k['nama_kategori']; ?></a></li> 
                        </ul>
                      <?php } ?>
                    </div>
                </div>
               </div>
               </div>