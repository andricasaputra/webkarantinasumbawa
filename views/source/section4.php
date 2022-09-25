<?php

    require_once('../../admin/config/database.php');
    require_once('../../admin/classes/class_berita.php');

    $db = Database::getInstance();
    $connect = $db->getConnection();
    $conn = new berita($db);
    $tampil2 = $conn->tampilWebBerita();


?>


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

                                <img data-frz-src="assets/img/berita/<?=$data2->gambar;?>" class="img-responsive" alt="berita" src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== onload=lzld(this) onerror=lzld(this) />

                                <figcaption>

                                    <h2>

									<?php 

										$num_char = 20;

										$text = $data2->judul;

										$cut_text = substr($text, 0, $num_char);

										if ($text{$num_char - 1} != ' ') : 

											$new_pos = strrpos($cut_text, ' '); 

											$cut_text = substr($text, 0, $new_pos);

										endif;

										echo $cut_text . '<br/>'; ?>

								</h2>

                                    <p>

                                        <?php 

										$num_char = 40;

										$text = $data2->isi;

										$cut_text = substr($text, 0, $num_char);

										if ($text{$num_char - 1} != ' ') : 

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