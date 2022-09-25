<header>

        <div class="container-fluid">

            <div class="slider-container">

                <div class="owl-slider owl-carousel">

                    <?php  

                            while($head = $headline->fetch_object()):

                        ?>

                        <div class="item">

                            <div class="owl-slider-item">

                                <img data-frz-src="assets/img/headline/<?php echo $head->gambar ?>"   class="img-responsive" alt="portfolio" src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== onload=lzld(this) onerror=lzld(this) />

                                <div class="intro-text col-md-6">

                                    <div class="intro-lead-in"></div>

                                    <div class="intro-heading">
                                        <?php echo $head->judul2; ?>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <?php endwhile; ?>

                </div>

            </div>

        </div>

    </header>

    <div id="parallax">
        <img data-frz-src="assets/img/org/bg-bb.jpg" class="img-responsive" alt="bg" style="overflow: hidden;" src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== onload=lzld(this) onerror=lzld(this) />
    </div>

    <section class="section-cta" id="atas">

        <div class="container" id="padding">

            <div class="row marquee">

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

                        <img data-frz-src="assets/img/org/pengaduan-web.png" width="500" alt="pengaduan" src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== onload=lzld(this) onerror=lzld(this) />

                    </div>

                    <div class="show" id="pengaduan2">

                        <img data-frz-src="assets/img/org/pengaduan-web.png" width="250" alt="pengaduan2" src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== onload=lzld(this) onerror=lzld(this) />

                    </div>

                </div>

            </div>

        </div>

    </section>
