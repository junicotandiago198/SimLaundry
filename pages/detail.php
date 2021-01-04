<?php
$invoice = $_GET['inv'];
$email = $_SESSION['email'];
$QueryDetail = mysqli_query($koneksi, "SELECT * FROM tb_detail_order WHERE invoice = '$invoice'");
$rowDetail = mysqli_fetch_array($QueryDetail);
$QueryPersonal = mysqli_query($koneksi, "SELECT * FROM tb_member WHERE email = '$email'");
$rowPersonal = mysqli_fetch_array($QueryPersonal);
$QueryOrder = mysqli_query($koneksi, "SELECT * FROM tb_detail_order do INNER JOIN tb_order o ON do.id_order = o.id_order WHERE do.invoice = '$invoice'");
$rowOrder = mysqli_fetch_array($QueryOrder);

if ($rowOrder['status_order'] == 'P') {
    $status = 'Dalam Proses';
} elseif ($rowOrder['status_order'] == 'K') {
    $status = 'Dalam Pengiriman';
} elseif ($rowOrder['status_order'] == 'S') {
    $status = 'Selesai';
}
?>

  <!-- Breadcrumb Section Begin -->
  <section class="breadcrumb-section set-bg" data-setbg="assets/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <br>
    <br>
    <br>

    <div class="row" style="margin-top: -50px;">
            <div class="col-md-6">
                <div class="detail-order" style="margin-bottom:3rem;">
                    <h3>No. <?= $rowDetail['invoice']; ?></h3>
                    <p><?= $rowPersonal['nama']; ?></p>
                    <p><?= $rowPersonal['alamat']; ?></p>
                    <p><?= $rowPersonal['no_hp']; ?></p>
                    <p><?= $rowPersonal['email']; ?></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="detail-order text-right" style="margin-bottom:3rem;">
                    <h3>Status - <?= $status; ?></h3>
                    <h5>Total - Rp<?= number_format($rowDetail['total']); ?></h5>
                    <p><?= $rowDetail['tanggal']; ?></p>
                </div>
            </div>
        </div>
    
    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Jumlah</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>

                    <?php
                    include "admin/lib/koneksi.php";
                    $QueryCart = mysqli_query($koneksi, "SELECT * FROM tb_detail_order do INNER JOIN tb_order o ON do.id_order = o.id_order INNER JOIN tb_produk p ON o.id_produk = p.id_produk WHERE do.invoice = '$invoice'");
                    while ($Cart = mysqli_fetch_array($QueryCart)) {
                    ?>

                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="<?= $baseUrl2; ?>admin/assets/img/kategori/<?= $Cart['gambar']; ?>" width="150">
                                        <h5><?= $Cart['nama_produk']; ?></h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                       Rp.<?= number_format($Cart['harga']); ?>
                                    </td>
                                   
                                    <td class="shoping__cart__total">
                                        <?= $Cart['jumlah']; ?>
                                    </td>

                                    <td class="shoping__cart__total">
                                        Rp.<?= number_format($Cart['harga'] * $Cart['jumlah']); ?>
                                    </td>
                
                                </tr>
                                <tr>
                                </tr>
                            </tbody>
                             <?php } ?>
                        </table>
                       
                    </div>
                </div>
            </div>
            </div>