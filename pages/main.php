<!-- Featured Section Begin -->
<section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".oranges">Oranges</li>
                            <li data-filter=".fresh-meat">Fresh Meat</li>
                            <li data-filter=".vegetables">Vegetables</li>
                            <li data-filter=".fastfood">Fastfood</li>
                        </ul>
                    </div>
                </div>
            </div>
           
            <div class="row featured__filter">
            <?php
            $QueryProduk = mysqli_query($koneksi, "SELECT * FROM tb_produk");
            while($p = mysqli_fetch_array($QueryProduk)) {
            ?>
                
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="<?= $baseUrl2; ?>admin/assets/img/kategori/<?= $p['gambar']; ?>">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#"><?= $p['nama_produk']; ?></a></h6>
                            <h5>Rp.<?= number_format($p['harga']); ?></h5>
                        </div>
                    </div>
            </div>
            <?php } ?>
                    </div>
                </div>