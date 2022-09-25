<style type="text/css">
	#mobile_app{
		display: none;
	}

	.button_share2{
			display: none;
	}

	.a2a_kit {
	  display: flex !important;
	  justify-content: center !important;
	}

	@media only screen and (max-width: 610px){
		#mobile_app{
			display: block;
			margin: auto;
		}

		#full_web{
			display: none;
		}

	}

	#about > div > div > div > div > span > p{
		padding-bottom: 20px; 
		font-size: 22px; 
		text-align: justify; 
		letter-spacing: 1px; 
		line-height: 0.8cm; 
		color: black; 
		font-family: 'Nunito Sans';
	}
	
</style>
<?php

require_once('templates/head.php');
$Paginator  = new Paginator($db);
$limit      = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 5;
$page       = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
$links      = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 7;

$q = $Paginator->sql();

$results  = $Paginator->getData($limit, $page);

if (isset($_GET['id'])) {
	
	$id = $_GET['id'];

	$berita = $conn->tampilBerita($id);

	while($data = $berita->fetch_object()):

		$judul = $data->judul;



?>

<section id="about" class="light-bg top-margin">
	<div class="container">
		<div class="row">
			<div class="mz-module" >
				<div class="mz-module-about text-center col-md-12">
					<div class="section-title">
						<h2 class="judul text-center" style="font-size: 28pt"><?=$data->judul?></h2>
					</div>		

					<?php if(! is_null($data->id_facebook ?? NULL) || str_contains($data->gambar, "fbcdn"))  : ?>

						 <img style="border-radius: 10px" id="full_web" src="<?=$data->gambar;?>" width="550" style="box-shadow: 1px solid black; padding-bottom: 10px;" alt="full-web" />

					 	<img style="border-radius: 10px" id="mobile_app" src="<?=$data->gambar;?>" width="300" style="box-shadow: 1px solid black; padding-bottom: 10px;" alt="mobile" />

					<?php else : ?>

						 <img style="border-radius: 10px" id="full_web" src="assets/img/berita/<?=$data->gambar;?>" width="550" style="box-shadow: 1px solid black; padding-bottom: 10px;" alt="full-web" />

					 	<img style="border-radius: 10px" id="mobile_app" src="assets/img/berita/<?=$data->gambar;?>" width="300" style="box-shadow: 1px solid black; padding-bottom: 10px;" alt="mobile" />

					<?php endif; ?>

					

					<br>
					<i>Penulis : <?php echo $data->penulis ?> </i>| Tanggal : <?php echo tgl_indo(date($data->tanggal)); ?>
					<br><br><br>
					<span class="col-md-8 col-md-offset-2"> <?php echo html_entity_decode($data->isi); ?></span> 
					<a href="berita" class="button-cta btn-berita" style="margin-top: 30px; border-radius: 10px">Temukan Berita Lainnya</a>	

					<br><br>

					<i>Share berita ini via</i>

            		<br><br>
            		
        			<div class="a2a_kit a2a_kit_size_36 a2a_default_style" data-a2a-url="http://sumbawa.karantina.pertanian.go.id/berita?id=<?=$id;?>" data-a2a-title="<?=$data->judul;?>">
						<a class="a2a_button_facebook"></a>
						<a class="a2a_button_twitter"></a>
						<a class="a2a_button_google_plus"></a>
						<a class="a2a_button_whatsapp"></a>
					</div>							
				</div>

			<!-- end about module -->
			</div>
		</div>

	</div>
	<!-- /.container -->
</section>

<?php endwhile; } else { ?>

<div class="container" style="margin-bottom: 100px; margin-top: 100px">
	<div class="row">
		<div class="col-sm-12 text-center">
			<div>
				<h1 style="margin-bottom: 30px"><b>Index Berita</b></h1>

			<?php for( $i = 0; $i < count( $results->data ); $i++ ) : ?>

				<div class="mz-module" style="display: flex; justify-content: center; align-items:center">

					<div class="mz-module-about" style="min-height: 400px; display: flex; justify-content: center; align-tems:center;">

						<div id="full_web" class="col-md-6">

						
							<?php if(! is_null($results->data[$i]['id_facebook']))  : ?>

								<img style="border-radius: 10px" src="<?=$results->data[$i]['gambar'];?>" width="350" alt="berita" />

							<?php else : ?>

								<img style="border-radius: 10px" src="assets/img/berita/<?=$results->data[$i]['gambar'];?>" width="350" alt="berita" />

							<?php endif; ?>
						</div>


						<div class="col-md-6" style="display: flex; justify-content: center; align-tems:center; flex-direction: column">

							<h4><b><?php echo $results->data[$i]['judul'] ?></b></h4>

							<p style="font-size: 16px; letter-spacing: 1px; ; color: black;">
								<?php $num_char = 400;
									$text = html_entity_decode($results->data[$i]['isi']);
									$cut_text = substr($text, 0, $num_char);
									if ($text[$num_char - 1] != ' ') { // jika huruf ke 50 (50 - 1 karena index dimulai dari 0) buka  spasi
										$new_pos = strrpos($cut_text, ' '); // cari posisi spasi, pencarian dari huruf terakhir
										$cut_text = substr($text, 0, $new_pos);
									}

									echo $cut_text . '...';
									?>
							</p>

							<a href="berita?id=<?=$results->data[$i]['id'];?>&judul=<?=$results->data[$i]['judul'];?>" class="button-cta btn-berita" style="max-width: 250px; text-align: center; margin: 25px auto; border-radius: 10px">Selengkapnya</a>
						</div>
					</div>
				</div>
				<?php endfor; ?>
				<div style="position: relative; margin-top: -30px;"><?php echo $Paginator->createLinks( $links, 'pagination pagination' ); ?></div> 			
			</div>
		</div>
	</div>
</div>


<?php }  

	require_once('templates/footer_web.php');

?>