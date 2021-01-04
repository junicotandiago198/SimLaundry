<!-- Shoping Cart Section Begin -->
<section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Invoice</th>
                                    <th>Items</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php
                     
                    include "admin/lib/koneksi.php";
                    $email = $_SESSION['email'];

                    $QueryCart = mysqli_query(
                        $koneksi,
                        "SELECT DISTINCT invoice, total, tanggal FROM tb_detail_order do INNER JOIN tb_order o ON do.id_order = o.id_order INNER JOIN tb_jasa k ON do.id_jasa = k.id_jasa WHERE do.email = '$email'"
                    );
                    while ($row = mysqli_fetch_array($QueryCart)) {
                    ?>
                        <tr class="text-center">
                            <td><a href="detail.php?inv=<?= $row['invoice'] ?>">Berkah-<?= $row['invoice'] ?></a></td>
                            <td>
                                <?php
                                $invoice = $row['invoice'];
                                $QueryItems = mysqli_query($koneksi, "SELECT * FROM tb_detail_order do INNER JOIN tb_order o ON do.id_order = o.id_order INNER JOIN tb_produk p ON o.id_produk = p.id_produk WHERE do.invoice = '$invoice'");;
                                while ($rowItems = mysqli_fetch_array($QueryItems)) {
                                    echo $rowItems['nama_produk'] . ' / ';
                                } ?>
                            </td>
                            <td>
                                Rp <?= number_format($row['total']) ?>
                            </td>
                            <td>
                                <?php
                                $invoice = $row['invoice'];
                                $QueryItems = mysqli_query($koneksi, "SELECT DISTINCT status_order FROM tb_detail_order do INNER JOIN tb_order o ON do.id_order = o.id_order INNER JOIN tb_produk p ON o.id_produk = p.id_produk WHERE do.invoice = '$invoice'");;
                                $rowItems = mysqli_fetch_array($QueryItems);
                                if ($rowItems['status_order'] == 'P') {
                                    $status = 'Proses';
                                } elseif ($rowItems['status_order'] == 'K') {
                                    $status = 'Kirim';
                                } elseif ($rowItems['status_order'] == 'S') {
                                    $status = 'Selesai';
                                }
                                echo $status;
                                ?>
                            </td>
                            <td><?= $row['tanggal'] ?></td>
                        </tr>
                    <?php } ?>
                    </table>
                    </div>
                </div>
            </div>
            </div>