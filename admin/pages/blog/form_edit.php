<?php 
include "../../header.php";
?>

 <!-- Main Content -->
 <div class="main-content">
        <section class="section">
        
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <h4>Menu Artikel</h4>
                  <div class="card-header-action">
                    <a href="main.php" class="btn btn-danger">Kembali Ke Data Artikel <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body">

                <?php
                include '../../lib/koneksi.php';
                $id = $_GET['id'];
                $data = mysqli_query($koneksi,"select * from tb_blog where id_blog='$id'");
                while($q=mysqli_fetch_array($data)){
              ?>

                <form action="edit.php" method="POST">
                    <div class="form-group">
                      <label>Tanggal</label>
                      <input type="hidden" name="id" value="<?php echo $q['id_blog']; ?>">
                      <input type="date" class="form-control" name="tanggal" value="<?= $q['tanggal']; ?>">
                    </div>    
                    <div class="form-group">
                      <label>Judul Blog</label>
                      <input type="text" class="form-control" name="nama" value="<?= $q['nama_blog']; ?>">
                    </div> 
                    <div class="form-group">
                      <label>Deskripsi</label>
                      <input type="text" class="form-control" name="deskripsi" value="<?= $q['deskripsi']; ?>">
                    </div> 
                    <div class="form-group">
                      <label>Gambar</label>
                      <input type="text" class="form-control" name="gambar" value="<?= $q['gambar']; ?>">
                    </div> 
                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
                  </form>
                <?php } ?>
              </div>
            </div>
          
          </div>
        </section>
      </div>

<?php 
include "../../footer.php"
?>