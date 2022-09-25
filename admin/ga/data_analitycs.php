<?php

	require_once 'CustomAnalytcs_class.php';

	$service_account_email = 'humasskp@websumbawa.iam.gserviceaccount.com';

	$key_file_location = 'websumbawa-14b4fb526599.p12';

	$analytics = new CustomAnalytcs_class($service_account_email, $key_file_location);

	$sessiondata = $analytics->getSessionData();


	?>

<!-- Info boxes -->
	  <div class="row">
	  	<div class="col-md-12" style="margin-bottom: 10px; text-align: left;">
			<h4>Data diambil dari <a href="analytics.google.com">Google Analitycs</a></h4>
		</div>
	    <div class="col-md-6 col-sm-12 col-xs-12">
	      <div class="info-box">
	        <span class="info-box-icon bg-aqua"><i class="ion ion-ios-people-outline"></i></span>

	        <div class="info-box-content">
	          <span class="info-box-text">Pengunjung Hari Ini</span>
	          <span class="info-box-number"><?php echo $sessiondata["visitorsperday"]["0"] ?></span>
	        </div>
	        <!-- /.info-box-content -->
	      </div>
	      <!-- /.info-box -->
	    </div>
	    <!-- /.col -->
	    <div class="col-md-6 col-sm-12 col-xs-12">
	      <div class="info-box">
	        <span class="info-box-icon bg-red"><i class="fa fa-line-chart"></i></span>

	        <div class="info-box-content">
	          <span class="info-box-text">Total Pengunjung</span>
	          <span class="info-box-number"><?php echo $sessiondata["visitorstotal"]["0"] ?></span>
	        </div>
	        <!-- /.info-box-content -->
	      </div>
	      <!-- /.info-box -->
	    </div>
	    <!-- /.col -->

	    <!-- fix for small devices only -->
	    <div class="clearfix visible-sm-block"></div>

	    <div class="col-md-6 col-sm-12 col-xs-12">
	      <div class="info-box">
	        <span class="info-box-icon bg-green"><i class="fa fa-group"></i></span>

	        <div class="info-box-content">
	          <span class="info-box-text">Pengguna</span>
	          <span class="info-box-number"><?php echo $sessiondata["users"]["0"] ?></span>
	        </div>
	        <!-- /.info-box-content -->
	      </div>
	      <!-- /.info-box -->
	    </div>
	    <!-- /.col -->
	    <div class="col-md-6 col-sm-12 col-xs-12">
	      <div class="info-box">
	        <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

	        <div class="info-box-content">
	          <span class="info-box-text">Pengguna Baru</span>
	          <span class="info-box-number"><?php echo $sessiondata["newusers"]["0"] ?></span>
	        </div>
	        <!-- /.info-box-content -->
	      </div>
	      <!-- /.info-box -->
	    </div>
	    <!-- /.col -->
	    <div class="col-md-6 col-sm-12 col-xs-12">
	      <div class="info-box">
	        <span class="info-box-icon bg-blue"><i class="fa fa-laptop"></i></span>

	        <div class="info-box-content">
	          <span class="info-box-text">Jumlah Tayangan Halaman</span>
	          <span class="info-box-number"><?php echo $sessiondata["pageviews"]["0"] ?></span>
	        </div>
	        <!-- /.info-box-content -->
	      </div>
	      <!-- /.info-box -->
	    </div>
	    <!-- /.col -->
	    <div class="col-md-6 col-sm-12 col-xs-12">
	      <div class="info-box">
	        <span class="info-box-icon bg-purple"><i class="fa fa-clock-o"></i></span>

	        <div class="info-box-content">
	          <span class="info-box-text">Durasi Sesi</span>
	          <span class="info-box-number"><?php echo gmdate("d H:i:s",$sessiondata["sessionduration"]["0"]);  ?></span>
	          <b>Ket: Hari Jam:Menit:Detik</b>
	        </div>
	        <!-- /.info-box-content -->
	      </div>
	      <!-- /.info-box -->
	    </div>
	    <!-- /.col -->
	    <div class="col-md-6 col-sm-12 col-xs-12">
	      <div class="info-box">
	        <span class="info-box-icon bg-red"><i class="fa fa-map-marker"></i></span>

	        <div class="info-box-content">
	          <span class="info-box-text">Negara / Kota Terbanyak Berkunjung</span>
	          <span class="info-box-number" style="font-size: 12pt;font-weight: normal;">
	          	<table class="table table-striped">
	          			<tr>
	          				<th>No</th>
	          				<th>Negara</th>
	          				<th>Provinsi</th>
	          				<th>Kota</th>
	          				<th>Jumlah</th>
	          			</tr>
	          			
	          	<?php 
	          	$no =1;
	          	foreach ($sessiondata["allplace"] as $key => $value) {
	          		foreach ($value as $key2 => $value2) : 
	          			$negara = $value[0];
 						$provinsi = $value[1];
 						$kota = $value[2];
 						$jumlah = $value[3];
	          			endforeach; ?>
	          			<tr>
	          				<td><?php echo $no++ ?></td>
	          				<td><?php echo $negara; ?></td>
	          				<td><?php echo $provinsi; ?></td>
	          				<td><?php echo $kota; ?></td>
	          				<td><?php echo $jumlah; ?></td>
	          			</tr> 
	          <?php	} ?></table>
	      		</span>
	        </div>
	        <!-- /.info-box-content -->
	      </div>
	      <!-- /.info-box -->
	    </div>
	    <!-- /.col -->
	    <div class="col-md-6 col-sm-12 col-xs-12">
	      <div class="info-box">
	        <span class="info-box-icon bg-aqua"><i class="fa fa-tablet"></i></span>

	        <div class="info-box-content">
	          <span class="info-box-text">Perangkat Terbanyak Digunakan</span>
	          <span class="info-box-number" style="font-size: 12pt;font-weight: normal;">
	          	<table class="table table-striped">
	          			<tr>
	          				<th>No</th>
	          				<th>Perangkat</th>
	          				<th>Jumlah</th>
	          			</tr>
	          			
	          	<?php 
	          	$no =1;
	          	foreach ($sessiondata["devices"] as $key => $value) {
	          		foreach ($value as $key2 => $value2) : 
	          			$perangkat = $value[0];
 						$jumlah = $value[1];
	          			endforeach; ?>
	          			<tr>
	          				<td><?php echo $no++ ?></td>
	          				<td><?php echo ucfirst($perangkat); ?></td>
	          				<td><?php echo $jumlah; ?></td>
	          			</tr> 
	          <?php	} ?></table>
	      		</span>
	        </div>
	        <!-- /.info-box-content -->
	      </div>
	      <!-- /.info-box -->
	    </div>
	    <!-- /.col -->
	  </div>