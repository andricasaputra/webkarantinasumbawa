<?php  

if (isset($_POST['query'])) {
	require_once('../../admin/config/database.php');
	require_once('../../admin/classes/class_berita.php');
	$db = Database::getInstance();
	$connect = $db->getConnection();
	$berita = new berita($db);
	$words = $connect->real_escape_string($_POST["query"]);
	$search = $berita->search($words);

	if($search->num_rows > 0){

	 $output = '

	  <div class="table-responsive">
	   <table class="table table-bordered">
	    <tr>
	     <th>Hasil Pencarian</th>
	    </tr>
	 ';

	 while($data = $search->fetch_object()):

	  $output .= '

	   <tr>

	   ';if (is_numeric($data->id)) {

	   		$output .='
	   			 <td>Berita<br><b><a href="berita?id='.$data->id.'">'.$data->kunci.'</a></b></td>
	   		';
	   			
	   }else{

	   		if ($data->acuan == 'laporan') {
   				$output .='
   			 		<td>Laporan<br><b><a href="'.$data->id.'" target="_blank">'.$data->kunci.'</a></b></td>
   				';
   			}elseif ($data->acuan == 'berkala') {
   				$output .='
   			 		<td>Informasi Berkala<br><b><a href="'.$data->id.'">'.$data->kunci.'</a></b></td>
   				';
   			}elseif ($data->acuan == 'serta_merta') {
   				$output .='
   			 		<td>Informasi Serta Merta<br><b><a href="'.$data->id.'">'.$data->kunci.'</a></b></td>
   				';
   			}elseif ($data->acuan == 'setiap_saat') {
   				$output .='
   			 		<td>Informasi Setiap Saat<br><b><a href="'.$data->id.'">'.$data->kunci.'</a></b></td>
   				';
   			}
	   		

	   } 

	   $output .='

	   </tr>';

	 endwhile;

	 $output .= '
		 </table>
	 </div>';

	}else{

	 $output = ' <div class="table-responsive">
	   <table class="table table-bordered">
	    <tr>
	     <th>Hasil Pencarian</th>
	    </tr>
	    <tr><td>Not Found<br><i><b>Hasil pencarian tidak ditemukan, periksa kembali ejaan tulisan atau gunakan kata kunci lain</b></i></td></tr>
	    
	    </table></div>';

	}

	echo $output;
}

?>

