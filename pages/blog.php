<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="<?= $baseUrl2; ?>assets/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Blog</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Home</a>
                            <span>Blog</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <br>
    <br>

<div class="col-lg-7 col-md-6">
<div class="row">
<div class="col-lg-5 col-md-5 col-sm-5">
<div class="blog__item">
                        <?php 
                        $artikel = mysqli_query($koneksi,"SELECT * FROM tb_blog");
                        while($a = mysqli_fetch_array($artikel)) {

                        ?>
                                <div class="blog__item__pic">
                                    <img src="<?= $baseUrl; ?>assets/img/artikel/<?= $a['gambar']; ?>" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i><?= $a['tanggal']; ?></li>
                                        <li><i class="fa fa-comment-o"></i>5</li>
                                    </ul>
                                    <h5><a href="#"><?= $a['nama_blog']; ?></a></h5>
                                    <p><?= $a['deskripsi']; ?></p>
                                    <a href="https://wolipop.detik.com/home/d-2031426/13-cara-mudah-merawat-pakaian-agar-tahan-lama" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>