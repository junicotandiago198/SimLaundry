 <!-- Main Content -->
 <div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-stats">
                  <div class="card-stats-title">Statistik Order - Berkah Laundry
                    
                  </div>
                  <div class="card-stats-items">
                    <div class="card-stats-item">
                  <?php 
                  $statistik = mysqli_query ($koneksi,"SELECT * FROM tb_member");
                  ?>
                      <div class="card-stats-item-count"> <?= mysqli_num_rows($statistik); ?></div>
                      <div class="card-stats-item-label">Pelanggan</div>
                    </div>
                    <div class="card-stats-item">
                  <?php 
                  $proses = mysqli_query ($koneksi, "SELECT * FROM tb_order where status_order ='P'");
                  ?>
                      <div class="card-stats-item-count"><?= mysqli_num_rows($proses); ?></div>
                      <div class="card-stats-item-label">Di Proses</div>
                    </div>
                    <div class="card-stats-item">
                  <?php 
                  $kirim = mysqli_query ($koneksi, "SELECT * FROM tb_order where status_order ='K'");
                  ?>
                      <div class="card-stats-item-count"><?= mysqli_num_rows($kirim); ?></div>
                      <div class="card-stats-item-label">Pengiriman</div>
                    </div>
                  </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                  <?php 
                  $selesai = mysqli_query($koneksi,"SELECT * FROM tb_order WHERE status_order ='S'");
                  ?>
                    <h4>Total Order Selesai</h4>
                  </div>
                  <div class="card-body">
                    <?= mysqli_num_rows($selesai); ?>
                  </div>
                </div>
              </div>
            </div>
                 
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-chart">
                  <canvas id="balance-chart" height="80"></canvas>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                <?php 
              $QueryOrder = mysqli_query($koneksi, "SELECT SUM(total*jumlah) as subtotal FROM tb_detail_order");
              $r = mysqli_fetch_array($QueryOrder);
              $total = $r['subtotal'];
                ?>
                    <h4>Total Pendapatan</h4>
                  </div>
                  <div class="card-body">
                  Rp.<?= number_format($total); ?>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-chart">
                  <canvas id="sales-chart" height="80"></canvas>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-shopping-bag"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                  <?php 
                  $produk = mysqli_query($koneksi,"SELECT * FROM tb_produk");
                  ?>
                    <h4>Produk Kami</h4>
                  </div>
                  <div class="card-body">
                    <?= mysqli_num_rows($produk); ?>
                  </div>
                </div>
              </div>
            </div>
        </section>
      </div>