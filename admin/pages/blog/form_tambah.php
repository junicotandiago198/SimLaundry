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
                    <a href="main.php" class="btn btn-danger">Kembali Ke Data Artikel<i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body">

                <form action="simpan_blog.php" method="POST">
                    <div class="form-group">
                      <label>Tanggal</label>
                      <input type="date" class="form-control" name="tanggal">
                    </div>    

                    <div class="form-group">
                      <label>Judul Artikel</label>
                      <input type="text" class="form-control" name="judul">
                    </div>    

                    <div class="form-group">
                      <label>Deskripsi</label>
                      <input type="text" class="form-control" name="deskripsi">
                    </div>    

                    <div class="form-group">
                      <label>Gambar</label>
                      <input type="text" class="form-control" name="gambar">
                    </div>  
                    
                    
                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
                  </form>
              </div>
            </div>
          
          </div>
        </section>
      </div>

<?php 
include "../../footer.php"
?>