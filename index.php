<?php
require 'function.php';
require 'hasil.php';

$masjids = mysqli_query($conn, "SELECT * FROM masjid");

$donasi = query("SELECT * FROM masjid");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masjid Wikrama</title>
    <link href="style.css" rel="stylesheet">
    <link rel="icon" href="img/wkwk.png">
</head>

<body>
    <div class="scroll-container">
        <div class="container">
            <!-- Header -->
            <i class=""></i>
            <header class=dropdown>
                <nav>
                    <ul>
                        <div class="logo">
                            <div class="awal">
                                <div class="masjid">
                                    <img src="img/wkwk.png">
                                    <a href="">Masjid</a>
                                </div>
                            </div>
                        </div>
                        <div class="nav1">
                            <li class active><a href="https://smkwikrama.sch.id/">Web Wikrama</a>
                            </li>
                            <li class active><a href="#page-4">Gallery</a>
                            </li>
                            </li>
                            </li>
                            <li class active><a href="#page-3">Data Wakaf</a>
                            </li>
                            <li class active><a href="#page-2">Cara Wakaf</a>
                            </li>
                            </li>
                            <li class active><a href="#page-1">Beranda</a>
                            </li>
                            </li>

                            </li>
                        </div>
                    </ul>

                </nav>
            </header>
            <!-- COntent1 -->
            <div class="C1">
                <div class="mjd1">
                    <div class="msj">
                        <img src="img/bbn2.png">
                    </div>
                </div>
                <div class="text1">
                    <div class="scroll-page" id="page-1">
                        <div class="text">
                            <h3 class="C1-title">Masjid Besar SMK Wikrama Bogor</h3>
                            <div class="C1sub-title">
                                <h1>
                                    Mari <span>Tingkatkan Keimanan </span> Masyarakat SMK Wikrama Bogor
                                </h1>
                            </div>
                            <form action="" method="post">
                                <button type="submit" name="submit1"><a href="input-data.php" style="color: white;">
                                        Beri Bantuan Shadaqah
                                    </a>
                                </button>
                            </form>


                        </div>
                    </div>

                </div>
            </div>
            <!-- content2 -->
            <div class="C2">
                <div class="card1">
                    <div class="text2">
                        <ul>
                            <li>Total Target Dana</li>
                            <li class="numb">
                                <h2><?= 'Rp' . $format_target ?></h2>
                            </li>
                        </ul>
                        <ul>
                            <li>Total Dana Terkumpul</li>
                            <li class="numb">
                                <h2><?= 'Rp' . $format_total ?></h2>
                            </li>
                        </ul>
                        <ul>
                            <li>Total Donatur</li>
                            <li class="numb">

                                <h2><?php $angka = 0; ?>
                                    <?php foreach ($donasi as $donatur) : ?>
                                        <?php $angka++ ?>
                                    <?php endforeach ?></h2>
                                <h2><?= $angka; ?></h2>
                            </li>
                        </ul>
                    </div>
                    <hr>
                    <div class="block">
                        <div class="progress">
                            <div class="progress-done" style="width:<?= $pers ?>%;">
                            </div>
                        </div>
                        <div class="persen">
                            <h2><?= $pers ?>%</h2>
                            <br>
                            <h5>Terpenuhi</h5>
                        </div>
                    </div>
                    <div class="foot">
                        <div id="scroll-container1">
                            <div id="scroll-text">
                                <div class="just-text">
                                    <ul>
                                        <div class="all">
                                            <div class="card">
                                                <?php $i = 1 ?>
                                                <?php foreach ($donasi as $donatur) : ?>
                                                    <li>
                                                        <h4><?= $donatur["donatur"]; ?> <br><span>Rp.<?= number_format($donatur['nominal']) ?></span> <br>-</h4><br>
                                                    </li>
                                                    <? $i++ ?>
                                                <?php endforeach ?>
                                            </div>
                                        </div>
                                    </ul>
                                    <ul>
                                        <div class="card">
                                            <li>
                                                <h4>Thanks</h4>
                                            </li>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content3 -->
            <div class="C3">
                <div class="w3-container">
                </div>
                <div style="margin-left: 50%">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
                <div class="slideshow-container">

                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img src="img/sld1.jpg">
                        <div class="text">Masjid 1</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="img/sld2.jpg">
                        <div class="text">Masjid 2</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="img/sld3.jpg">
                        <div class="text">Masjid 3</div>
                    </div>

                </div>
                <br>


                <script>
                    let slideIndex = 0;
                    showSlides();

                    function showSlides() {
                        let i;
                        let slides = document.getElementsByClassName("mySlides");
                        let dots = document.getElementsByClassName("dot");
                        for (i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none";
                        }
                        slideIndex++;
                        if (slideIndex > slides.length) {
                            slideIndex = 1
                        }
                        for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" active", "");
                        }
                        slides[slideIndex - 1].style.display = "block";
                        dots[slideIndex - 1].className += " active";
                        setTimeout(showSlides, 2000); // Change image every 2 seconds
                    }
                </script>

            </div>
            <!-- content4 -->
            <div class="C4">
                <div class="title-text">
                    <h1><span>Manfaat </span>Wakaf, Infaq Shodaqoh.</h1>
                    <h3>Berikut Adalah Beberapa Keutamaan Wakaf,Infaq Shadaqoh Yang Akan Anda Dapatkan.</h3>
                </div>
                <div class="img1"><img src="img/salam1.jpg"></div>
                <div class="max-card1">
                    <div class="Cs1">
                        <div class="card2">
                            <img src="img/correct.png">
                            <h2>Terbukanya pintu rezeki</h2>
                            <p>Allah SWT akan membuka pintu rezeki dari arah
                                yang tidak dikira sebelumnya
                            </p>
                        </div>
                        <div class="card1">
                            <img src="img/hart.png">
                            <h2>Menjadikan hati lebih tenang</h2>
                            <p>Kami memberikan harga yang terbaik dibandingkan dengan kompetitor</p>
                        </div>
                        <br>
                    </div>
                    <div class="Cs2">
                        <div class="card2">
                            <img src="img/star.png">
                            <h2>Pahala yang tak terputus</h2>
                            <p>Ini akan menolong kita di akhirat nantinya,juga dapat menyelamatkannya
                                dari api neraka
                            </p>
                        </div>

                        <div class="card1">
                            <img src="img/defend.png">
                            <h2>Menjauhkan Dari Bahaya</h2>
                            <p>Rasulullah SAW pernah bersabda: "Bersegeralah untuk bersedekah,karena
                                musibah dan bencana tidak bisa mendahului sedekah."</p>
                        </div>
                    </div>
                </div>
                <div class="text4">

                </div>
            </div>
            <!-- content5 -->
            <div class="C5">
                <div class="scroll-page" id="page-2">
                    <div class="title-text">
                        <h1><span>Cara Melakukan </span>Wakaf, Infaq Shodaqoh.</h1>
                        <h3>Berikut Adalah Cara Melakukan Wakaf,Infaq Shadaqoh Untuk Membantu Pembangunan Masjid Besar
                            SMK Bogor.</h3>
                    </div>
                </div>
                <div class="max-card2">
                    <div class="card2">
                        <h1>02</h1>
                        <h2>Isikan Nomimal Shadaqah</h2>
                        <p>
                            Isikan nominal yang akan anda shodaqohkan pastikan isi nominal dengan sekilasnya
                            tanpa ada paksaan apapun.
                        </p>
                    </div>
                    <div class="card1">
                        <h1>01</h1>
                        <h2>Isi Form Data Diri</h2>
                        <p>
                            Isikan form pengisian yang disediakan di form data diri, isikan dengan
                            data diri anda dengan teliti.
                        </p>
                    </div>
                    <div class="card2">
                        <h1>04</h1>
                        <h2>Verifikasi Pembayaran</h2>
                        <p>
                            Pembayaran anda akan di verifikasi oleh admin dan jika terverivikasi nama
                            anda akan tampil</p>
                    </div>
                    <div class="card1">
                        <h1>03</h1>
                        <h2>Upload Bukti Pembayaran</h2>
                        <p>Pilih metode pembayaran dan upload bukti pembayarannya.</p>
                    </div>
                </div>
            </div>

            <!-- content6 -->
            <div class="C6">
                <div class="scroll-page" id="page-3">
                    <div class="title-text">
                        <h1><span>Data donatur </span> Wakaf, Infaq Shodaqoh.</h1>
                        <h3>Berikut Adalah Cara Melakukan Wakaf,Infaq Shadaqoh Untuk Membantu Pembangunan Masjid Besar
                            SMK Bogor.
                        </h3>
                    </div>
                </div>

                <div class="max-card2">
                    <table class="table-border">

                        <thead>
                            <tr>
                                <th scope="col">Donatur</th>
                                <th scope="col">Id</th>
                                <th scope="col">Paket</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Nominal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 ?>
                            <?php foreach ($masjids as $masjid) { ?>
                                <tr>
                                    <td><?= $masjid["donatur"]; ?></td>
                                    <td><?= $masjid["id"]; ?></td>
                                    <div class="gray">
                                        <td style="color:gray;"><?= $masjid["paket"]; ?></td>
                                        <td style="color:gray;"> <?= $masjid["kategori"]; ?></td>
                                        <td style="color:gray;">Rp.<?= $masjid["nominal"]; ?></td>
                                </tr>
                                <?php $i++; ?>
                            <?php } ?>
                            </tr>
                        </tbody>
                        <div class="add">
                            <br>
                        </div>
                    </table>
                </div>

                <!-- content7 -->
                <div class="C7">
                    <div class="scroll-page" id="page-4">
                        <div class="title-text">
                            <h1><span>Gallery </span> Besar SMK Wikrama Bogor.</h1>
                            <h3>Berikut Adalah Gallery Masjid Besar SMK Bogor.</h3>
                        </div>
                    </div>
                    <div class="max-card3">
                        <div class="card2">
                            <img src="img/msj2.jpg">
                        </div>
                        <div class="card3">
                            <img src="img/msj3.jpg">
                        </div>
                        <div class="card1">
                            <img src="img/msj4.jpg">
                        </div>
                    </div>
                    <div class="max-card3">
                        <div class="card2">
                            <img src="img/msj5.jpg">
                        </div>
                        <div class="card3">
                            <img src="img/msj6.jpg">
                        </div>
                        <a href="gallery.html">
                            <button type="submit" class="gallery"></a>
                        <div class="card1">
                            <a href="gallery.html">><h2>Gallery</h2></a>
                        </div>
                        </button>
                    </div>
                </div>
                <!-- footer -->
                <div class="foote">

                    <footer class="footer-main">
                        <div class="footer-grid">
                            <section class="footer-1">
                                <img src="img/wkwk.png">
                                <h2>SMK Wikrama Bogor</h2>
                                <h4>Alamat</h4>
                                <p>Jl. Raya Wangun Kelurahan Sindangsari Bogor Timur 16720</p>
                                <hr>
                                <p>Telepon
                                    0251-8242411 / 082221718035
                                    (Whatsapp)</p>
                                <hr>
                                <div class="foot-medsos">
                                    <a href="https://web.facebook.com/smkwikrama"><img src="img/fb.png"></a>
                                    <a href="https://smkwikrama.sch.id/"><img src="img/mss (2).png"></a>
                                    <a href="https://www.instagram.com/smkwikrama/"><img src="img/mss (3).png"></a>
                                    <a href="https://www.youtube.com/@multimediawikrama7482"><img src="img/mss (4).png"></a>
                                </div>
                            </section>
                            <section class="footer-2">
                                <h4>Tentang Wikrama</h4>
                                <ul>
                                    <li>
                                        Sejarah
                                    </li>
                                    <li>
                                        Peraturan Sekolah
                                    </li>
                                    <li>
                                        Rencana Strategi & Prestasi
                                    </li>
                                    <li>
                                        Yayasan
                                    </li>
                                    <li>
                                        Struktur Organisasi
                                    </li>
                                    <li>
                                        Cabang
                                    </li>
                                    <li>
                                        Penghargaan
                                    </li>
                                    <li>
                                        Kerjasama
                                    </li>
                                </ul>
                            </section>
                            <section class="footer-3">
                                <h4>Kirim Pesan</h4>
                                <form action="">
                                    <input class="chat" type="text" placeholder="Nama...">
                                    <input class="chat" type="text" placeholder="Email...">
                                    <input class="chat1" type="text" placeholder="Pesan Anda...">
                                    <br>
                                    <button type="submit">Submit</button>
                                </form>
                            </section>
                        </div>
                    </footer>
                    <div class="end-foot">
                        <p>Copyright © 2023 - SMK Wikrama Bogor. All Right Reserved. </p>
                    </div>
                </div>
            </div>
        </div>
</body>