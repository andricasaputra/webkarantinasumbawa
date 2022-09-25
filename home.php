<?php

    require_once('templates/head.php');

    $headline = $conn->tampilHeadline();

    $tampil  = $conn->tampilWebHeader();

    $tampil2 = $conn->tampilWebBerita();

    $tampil3 = $conn->tampilWebMarquee();

    $tampilDataOperasional = $conn->data_operasionalWeb();

?>

    <style type="text/css">
        .marquee {
            padding-bottom: 10px;
        }
        
        .hide {
            display: none;
        }
        
        .show {
            display: none;
        }
        
        .show img {
            display: none;
        }
        
        .right {
            display: block;
            position: fixed;
            top: 56.5%;
            /*left: 48.5%;*/
            left: 50%;
            transform: translate(43%, 50%);
            width: 100%;
            z-index: 100;
            -webkit-transition: all 0.5s;
            /* Safari */
            transition: all 0.5s;
            transition-timing-function: ease-in-out;
        }

        .right-bottom {
            display: block;
            position: fixed;
            top: 73%;
            left: 50%;
            transform: translate(43%, 50%);
            width: 100%;
            z-index: 100;
            -webkit-transition: all 0.5s;
            /* Safari */
            transition: all 0.5s;
            transition-timing-function: ease-in-out;
        }
        
        .right img, .right-bottom img {
            position: sticky;
        }
        
        @media only screen and (max-width: 1500px) {
            .right {
                top: 55%;
                left: 47%;
            }

            .right-bottom {
                top: 72%;
                left: 47%;
            }
        }
        
        @media only screen and (max-width: 1200px) {
            .right, .right-bottom {
                display: none;
            }

            .show {
                display: block;
                position: absolute;
                width: 100%;
                z-index: 100;
            }
            .show img {
                display: block;
                position: relative;
                left: 75%;
                margin-top: -60px;
                margin-left: 50px;
            }
        }
        
        @media only screen and (max-width: 900px) {
            .right, .right-bottom {
                display: none;
            }
            .show {
                display: block;
                position: absolute;
                width: 100%;
                z-index: 100;
            }
            .show img {
                display: block;
                position: relative;
                left: 62%;
                margin-top: -60px;
                margin-left: 0px;
            }
        }
        
        @media only screen and (max-width: 700px) {
            .right, .right-bottom {
                display: none;
            }
            .show {
                display: block;
                position: sticky;
                width: 100%;
                z-index: 100;
            }
            .show img {
                display: block;
                position: relative;
                left: 24%;
                margin-top: 0%
            }
            #show {
                display: none !important;
            }
        }
        
        @media only screen and (max-width: 500px) {
            .right, .right-bottom {
                display: none;
            }
            .show {
                display: block;
                position: sticky;
                width: 100%;
                z-index: 100;
            }
            .show img {
                display: block;
                position: relative;
                left: 22%;
                margin-top: 0%
            }
            #show {
                display: none !important;
            }
            iframe {
                display: none;
            }
            #about .section-title p {
                font-size: 10pt;
            }
        }

        @media only screen and (max-width: 1700px){
            .right, .right-bottom {
                left: 48.5%;
            }
        }
    </style>

    <header>

        <div class="container-fluid">

            <div class="slider-container">

                <div class="owl-slider owl-carousel" style="max-height: 600px">

                    <?php  

                            while($head = $headline->fetch_object()):

                        ?>

                        <div class="item">

                            <div class="owl-slider-item" >

                                <img data-frz-src="assets/img/headline/<?php echo $head->gambar ?>"   class="img-responsive" alt="portfolio" src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== onload=lzld(this) onerror=lzld(this)  />

                            </div>

                            <div class="intro-text col-md-6">

                                <div class="intro-lead-in"></div>

                                <div class="intro-heading">
                                    <?php echo $head->judul2; ?>
                                </div>

                            </div>

                        </div>

                        <?php endwhile; ?>

                </div>

            </div>

        </div>

    </header>

    <div id="parallax">
        <img data-frz-src="assets/img/org/hkp144.png" class="img-responsive" alt="bg" style="overflow: hidden; opacity: 0.5;" src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== onload=lzld(this) onerror=lzld(this) />
    </div>

    <section class="section-cta" id="atas">

        <div class="container" id="padding">

            <div class="row marquee" style="padding-top: 45px">

                <div class="col-md-12 text hide" id="show">

                    <a href="assets/docs/Larangan laulintas Hewan Penular Rabies (HPR) ke dan dari Pulau Sumbawa-1550069290.pdf">Dilarang membawa <span style="color: #000; font-weight: 500;"> Anjing, Kucing, Kera dan sebangsanya </span> masuk dan keluar Pulau Sumbawa</a>

                    <a href="#">Dihimbau Kepada Pengguna Jasa Karantina Untuk <span style="color: #000; font-weight: 500;">&nbsp;Tidak Memberi Gratifikasi Kepada Pejabat Atau Petugas Karantina Dalam Bentuk Apapun</span></a>

                    <a href="#">Seluruh Pejabat dan Petugas Karantina Sumbawa <span style="color: #000; font-weight: 500;">&nbsp;Tidak Menerima Gratifikasi, Baik Dalam Bentuk Uang, Parcel, dan Bentuk Lainnya</span> </a>

                    <?php  

                            while ($marquee = $tampil3->fetch_object()) : 

                            $tulisan = $marquee->judul;

                        ?>

                        <a href="berita?id=<?=$marquee->id;?>">
                            <?php echo $tulisan; ?>
                        </a>

                        <?php endwhile; ?>

                            <a href="kh">Cari Tahu Semua Tentang Pelayanan Karantina Hewan</a>

                            <a href="berita">Lihat Semua Kumpulan Berita</a>

                </div>

            </div>

        </div>

    </section>

    <section class="light-bg" style="margin-bottom: -100px">

        <div class="container" id="padding">

            <div class="col-md-12">

                <input class="search2" type="text" name="search" id="search2" placeholder="Search...">

            </div>

            <div class="secondResult" id="result"></div>

            <div class="row ">

                <div class="col-md-12">

                    <div class="right" id="pengaduan">

                        <img data-frz-src="assets/img/org/pengaduan-web-kecil.png" width="500" alt="pengaduan" src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== onload=lzld(this) onerror=lzld(this) style="margin-left: -20px; margin-top: -20px" />

                    </div>

                    <div class="show" id="pengaduan2">

                        <img data-frz-src="assets/img/org/pengaduan-web-kecil.png" width="250" alt="pengaduan2" src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== onload=lzld(this) onerror=lzld(this)  style="margin-left: -30px; margin-top: 20px"/>

                    </div>

                </div>

            </div>
            <div class="row">
                <div class="col-md-12">

                    <div class="right-bottom survey">

                        <img data-frz-src="assets/img/org/survey-ikm-kecil.png" width="500" alt="survey" src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== onload=lzld(this) onerror=lzld(this) style="margin-left: -25px; margin-top: 20px" />

                    </div>

                    <div class="show" id="survey2">

                        <img data-frz-src="assets/img/org/survey-ikm-kecil.png" width="250" alt="pengaduan2" src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== onload=lzld(this) onerror=lzld(this) style="margin-left: -25px; margin-top: 20px" />

                    </div>

                </div>
            </div>

        </div>

    </section>

    <section id="about" class="light-bg" style="margin-top: -120px">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 text-center">

                    <div class="section-title">

                        <h2>Layanan Karantina Pertanian</h2>

                        <p>"Dengan ini kami menyatakan sanggup menyelenggarakan pelayanan
                            <br>sesuai standar pelayanan yang telah ditetapkan serta siap menerima sanksi untuk setiap pengaduan yang tidak ditindaklanjuti sesuai peraturan perundangan"
                            <br><strong>- Maklumat Pelayanan -</strong></p>

                    </div>

                </div>

            </div>

            <div class="row">

                <!-- about module -->

                <div class="col-md-6 text-center">

                    <div class="mz-module">

                        <div class="mz-module-about">

                            <i class="fa fa-paw"></i>

                            <h3><b>Karantina Hewan</b></h3>

                            <p>Temukan Semua Informasi Tentang Layanan Dibidang Karantina Hewan</p>

                        </div>

                        <a href="kh" class="button-cta btn-berita">Selengkapnya</a>

                    </div>

                </div>

                <!-- end about module -->

                <!-- about module -->

                <div class="col-md-6 text-center">

                    <div class="mz-module">

                        <div class="mz-module-about">

                            <i class="fa fa-leaf"></i>

                            <h3><b>Karantina Tumbuhan</b></h3>

                            <p>Temukan Semua Informasi Tentang Layanan Dibidang Karantina Tumbuhan</p>

                        </div>

                        <a href="kt" class="button-cta btn-berita">Selengkapnya</a>

                    </div>

                </div>

                <!-- end about module -->

            </div>

        </div>

        <!-- /.container -->

    </section>

    <section id="features" class="section-features">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 text-center">

                    <div class="section-title">

                        <h2 style="text-shadow: 2px 2px 3px #000000;">Pertanyaan yang Sering Diajukan</h2>

                    </div>

                </div>

            </div>

            <div class="row row-gutter">

                <div class="col-md-4 col-gutter">

                    <div class="featured-item">

                        <div class="featured-icon"><i class="fa fa-info-circle"></i></div>

                        <div class="featured-text">

                            <h4 style="text-shadow: 2px 2px 3px #eee;">Apa Itu Karantina?</h4>

                            <p>Karantina adalah tempat pengasingan dan/atau tindakan sebagai upaya pencegahan...
                                <br><a href="faq?id=1" class="btn-faq">Baca Selengkapnya</a></p>

                        </div>

                    </div>

                    <div class="featured-item">

                        <div class="featured-icon"><i class="fa fa-clipboard"></i></div>

                        <div class="featured-text">

                            <h4 style="text-shadow: 2px 2px 3px #eee;">Bagaimana Prosedurnya?</h4>

                            <p>Dilengkapi sertifikat kesehatan dari negara asal dan negara transit, Dilaporkan dan diserahkan...
                                <br><a href="faq?id=4" class="btn-faq">Baca Selengkapnya</a></p>

                        </div>

                    </div>

                </div>

                <div class="col-md-4 col-gutter">

                    <div class="featured-item">

                        <div class="featured-icon"><i class="fa fa-question-circle"></i></div>

                        <div class="featured-text">

                            <h4 style="text-shadow: 2px 2px 3px #eee;">Kenapa Harus Dikarantina?</h4>

                            <p>Untuk mencegah masuknya hama dan penyakit hewan karantina, dan organisme penggangu tumbuhan karantina...
                                <br><a href="faq?id=2" class="btn-faq">Baca Selengkapnya</a></p>

                        </div>

                    </div>

                    <div class="featured-item">

                        <div class="featured-icon"><i class="fa fa-plane"></i></div>

                        <div class="featured-text">

                            <h4 style="text-shadow: 2px 2px 3px #eee;">Dimana Lapor Karantina?</h4>

                            <p>Pelabuhan Laut, Pelabuhan Penyeberangan, Bandara, Kantor Pos, dan Pos lintas batas antar Negara...
                                <br><a href="faq?id=5" class="btn-faq">Baca Selengkapnya</a></p>

                        </div>

                    </div>

                </div>

                <div class="col-md-4 col-gutter">

                    <div class="featured-item">

                        <div class="featured-icon"><i class="fa fa-search"></i></div>

                        <div class="featured-text">

                            <h4 style="text-shadow: 2px 2px 3px #eee;">Apa Saja Komoditi Yang Wajib Lapor Karantina?</h4>

                            <p>Hewan, Bagian Hewan, Produk Hewan Serta Tumbuhan dan Bagian-bagiannya...
                                <br><a href="faq?id=3" class="btn-faq">Baca Selengkapnya</a></p>

                        </div>

                    </div>

                    <div class="featured-item">

                        <div class="featured-icon"><i class="fa fa-money"></i></div>

                        <div class="featured-text">

                            <h4 style="text-shadow: 2px 2px 3px #eee;">Berapa Estimasi Tarif Jasa Karantina?</h4>

                            <p>Berdasarkan PP 35 Tahun 2016 Tentang Jenis dan Tarif Atas Jenis Penerimaan...
                                <br><a href="faq?id=6" class="btn-faq">Baca Selengkapnya</a></p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section id="portfolio" class="light-bg">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 text-center">

                    <div class="section-title">

                        <h2 class="judul">Sekilas Berita</h2>

                        <p></p>

                    </div>

                </div>

            </div>

            <div class="row row-0-gutter">

                <!-- start portfolio item -->

                <?php  

                    while($data2 = $tampil2->fetch_object()):

                ?>

                    <div class="col-md-4 col-0-gutter">

                        <div class="ot-portfolio-item">

                            <figure class="effect-bubba">

                                <?php 
                                    if (is_null($data2->id_facebook)) {
                                        $gambar = "assets/img/berita/$data2->gambar";
                                    } else {
                                        $gambar =$data2->gambar;
                                    }
                                 ?>

                                <img style=" float: left;width:  400px;height: 300px; object-fit: cover;" data-frz-src="<?=$gambar ;?>" class="img-responsive" alt="berita" src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== onload=lzld(this) onerror=lzld(this) />

                                <figcaption>

                                    <h2>

                                    <?php 

                                        $num_char = 20;

                                        $text = $data2->judul;

                                        $cut_text = substr($text, 0, $num_char);

                                        if ($text[$num_char - 1] != ' ') : 

                                            $new_pos = strrpos($cut_text, ' '); 

                                            $cut_text = substr($text, 0, $new_pos);

                                        endif;

                                        echo $cut_text . '<br/>'; ?>

                                </h2>

                                    <p>

                                        <?php 

                                        $num_char = 40;

                                        $text = str_replace("<p>", "", html_entity_decode($data2->isi));

                                        $cut_text = substr($text, 0, $num_char);

                                        if ($text[$num_char - 1] != ' ') : 

                                            $new_pos = strrpos($cut_text, ' '); 

                                            $cut_text = substr($text, 0, $new_pos);

                                        endif;

                                        echo $cut_text . '...';

                                    ?>

                                    </p>

                                    <a type="button" href="berita?id=<?=$data2->id;?>" class="button-cta btn-berita"></a>

                                </figcaption>

                            </figure>

                        </div>

                    </div>

                    <?php endwhile; ?>

                        <!-- end portfolio item -->

            </div>

            <br>

            <div class="col-md-12 text-center">

                <a href="berita" class="button-cta btn-berita">Lihat Semua Berita</a>

            </div>

        </div>
        <!-- end container -->

    </section>

    <section class="dark-bg short-section stats-bar">

        <div class="container text-center">

            <div class="row" id="data_operasional_container">

                <div class="col-md-12">

                    <h2 style="color: #fff">Data Operasional Sampai Dengan </h2>

                </div>

                <div class="col-md-2 mb-sm-30">

                    <div class="counter-item">

                        <h2 class="stat-number" data-n="0">0</h2>

                        <h6>Ekspor</h6>

                    </div>

                </div>

                <div class="col-md-2 mb-sm-30">

                    <div class="counter-item">

                        <h2 class="stat-number" data-n="0">0</h2>

                        <h6>Impor</h6>

                    </div>

                </div>

                <div class="col-md-2 mb-sm-30">

                    <div class="counter-item">

                        <h2 class="stat-number" data-n="0">0</h2>

                        <h6>Domestik Keluar</h6>

                    </div>

                </div>

                <div class="col-md-2 mb-sm-30">

                    <div class="counter-item">

                        <h2 class="stat-number" data-n="0">0</h2>

                        <h6>Domestik Masuk</h6>

                    </div>

                </div>

                <div class="col-md-4 mb-sm-30">

                    <div class="counter-item">

                        <h2 class="stat-number" data-n="0">0</h2>

                        <h6>Penerimaan Negara Bukan Pajak</h6>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="section-cta" style="background-color: #fff">

        <div class="container">

            <div class="row">

                <div class="col-md-12 text-center">

                    <h2 style="color: #000; font-size: 25pt; font-weight: bold;">Statistik</h2>

                </div>

                <div class="col-md-12 text-center">

                    <div class="row">

                        <div class="col-md-4">

                            <div id="khchart" style="min-width: 310px; max-width: 600px; height: 400px; margin: 0 auto"></div>

                        </div>

                        <div class="col-md-4">

                            <div id="keuchart" style="min-width: 210px; max-width: 350px; height: 200px; margin: 0 auto; margin-top: 100px"></div>

                        </div>

                        <div class="col-md-4">

                            <div id="ktchart" style="min-width: 310px; max-width: 600px; height: 400px; margin: 0 auto"></div>

                        </div>

                    </div>

                </div>

                <div class="col-md-12 text-center">

                    <a href="data_operasional" class="button-cta btn-berita">Selengkapnya</a>

                </div>

            </div>

        </div>

    </section>

    <section id="partners">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 text-center">

                    <div class="section-title">

                        <h2 style="text-shadow: 2px 2px 3px #000000;">Tautan Terkait</h2>

                        <p style="text-shadow: 2px 2px 3px #000000;">Berikut Link Instansi & Aplikasi Terkait Perkarantinaan</p>

                    </div>

                </div>

            </div>

            <div class="row">

                <div class="col-lg-12 text-center">

                    <div class="owl-partners owl-carousel">

                        <div class="item">

                            <div class="partner-logo">
                                <a href="http://www.pertanian.go.id/" target="_blank"><img style="border-radius: 10px" src="assets/img/org/tautan-baru/kementan.png" alt="partners"></a>
                            </div>

                        </div>

                        <div class="item">

                            <div class="partner-logo">
                                <a href="http://karantina.pertanian.go.id/" target="_blank"><img style="border-radius: 10px" src="assets/img/org/tautan-baru/barantan.png" alt="partners"></a>
                            </div>

                        </div>

                        <div class="item">

                            <div class="partner-logo">
                                <a href="https://www.lapor.go.id/" target="_blank"><img style="border-radius: 10px" src="assets/img/org/tautan-baru/lapor.png" alt="partners"></a>
                            </div>

                        </div>

                        <div class="item">

                            <div class="partner-logo">
                                <a href="https://sipp.menpan.go.id/" target="_blank"><img style="border-radius: 10px" src="assets/img/org/tautan-baru/sipp.png" alt="partners"></a>
                            </div>

                        </div>

                        <div class="item">

                            <div class="partner-logo">
                                <a href="https://ppkonline.karantina.pertanian.go.id/" target="_blank"><img style="border-radius: 10px" src="assets/img/org/tautan-baru/ppk.png" alt="partners"></a>
                            </div>

                        </div>

                        <div class="item">

                            <div class="partner-logo">
                                <a href="http://skp1sumbawabesar.ppid.pertanian.go.id/" target="_blank"><img style="border-radius: 10px" src="assets/img/org/tautan-baru/ppid.png" alt="partners"></a>
                            </div>

                        </div>              

                        <div class="item">

                            <div class="partner-logo">
                                <a href="https://ppkonline.karantina.pertanian.go.id/" target="_blank"><img style="border-radius: 10px" src="assets/img/org/tautan-baru/ppk.png" alt="partners"></a>
                            </div>

                        </div>

                        <div class="item">

                            <div class="partner-logo">
                                <a href="http://ikm.pertanian.go.id/?u=G38" target="_blank"><img style="border-radius: 10px" src="assets/img/org/tautan-baru/e-ikm.png" alt="partners"></a>
                            </div>

                        </div>

                        <div class="item">

                            <div class="partner-logo">
                                <a href="http://epersonal.pertanian.go.id/login/" target="_blank"><img style="border-radius: 10px" src="assets/img/org/tautan-baru/epersonal.png" alt="partners"></a>
                            </div>

                        </div>

                        <div class="item">

                            <div class="partner-logo">
                                <a href="https://simponi.karantina.pertanian.go.id/" target="_blank"><img style="border-radius: 10px" src="assets/img/org/tautan-baru/simponi.png" alt="partners"></a>
                            </div>

                        </div>

                        <div class="item">

                            <div class="partner-logo">
                                <a href="http://fungsional.pertanian.go.id/" target="_blank"><img style="border-radius: 10px" src="assets/img/org/tautan-baru/sijaka.png" alt="partners"></a>
                            </div>

                        </div>

                        <div class="item">

                            <div class="partner-logo">
                                <a href="http://tnde.pertanian.go.id/" target="_blank"><img style="border-radius: 10px" src="assets/img/org/tautan-baru/tnde.png" alt="partners"></a>
                            </div>

                        </div>

                        <div class="item">

                            <div class="partner-logo">
                                <a href="http://lab.eqosistem.com/" target="_blank"><img style="border-radius: 10px" src="assets/img/org/tautan-baru/sile.png" alt="partners"></a>
                            </div>

                        </div>

                        <div class="item">

                            <div class="partner-logo">
                                <a href="http://e-office.eqosistem.com/" target="_blank"><img style="border-radius: 10px" src="assets/img/org/tautan-baru/e-office.png" alt="partners"></a>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Social Frame Section -->

    <section class="dark-bg short-section stats-bar">

        <div class="container text-center">

            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">

                        <h2 class="judul">Social Timeline</h2>

                    </div>
                </div>
            </div>

            <div class="row" id="timeline-container">

                <div class="col-md-4" style="margin-bottom: 10px">
                  <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fkarantinapertaniansumbawa%2F&tabs=timeline&width=340&height=780&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=2602415166709198" width="340" height="780" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>
            </div>

        </div>

    </section>

    <!-- End Social Frame Section -->

    <!-- Modal survey ikm -->

    <div id="survey-container" class="modal fade" id="flipFlop" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
          <div class="modal-content">
             <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="modalLabel" style="font-weight: bold;">Survey Indeks Kepuasan Masyarakat</h4>
             </div>
             <div class="modal-body">
                <div class="col-md-12">
                    <h5 style="font-weight: bold;">Mohon berkenan meluangkan waktu anda sejenak untuk mengikuti survey terhadap pelayanan kami <i style="color: #EC1504" class="fa fa-heart"></i></h5>
                    <h5 style="line-height: 20px">Survey ini bertujuan untuk mendapatkan gambaran secara menyeluruh tentang pelayanan karantina yang selama ini kami berikan, dan juga sebagai upaya kami untuk meningkatkan kualitas pelayanan kepada masyarakat dimasa yang akan datang.</h5>
                </div>
                <div class="col-md-12">
                    <a href="http://ikm.pertanian.go.id/?u=G38" class="btn btn-danger" target="_blank" rel="noreferrer" style="border-radius: 20px;background-color: #081E5B"><i class="fa fa-check"></i> Ikuti survey sekarang</a>
                </div>
             </div>
             <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal" style="border-radius: 20px;background-color: #081E5B"><i class="fa fa-remove"></i> Close</button>
             </div>
          </div>
       </div>
    </div>

<?php  

    require_once('templates/footer_web.php');

?>