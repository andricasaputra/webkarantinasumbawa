 <?php  

 require_once('../config/database.php');
require_once('../classes/class_berita.php');

$db = Database::getInstance();
$conn = $db->getConnection();
$connection = new berita($db);

ini_set('display_errors', true);
error_reporting(E_ALL);

$id  = $_POST['id'];
$access_token  = htmlspecialchars($conn->real_escape_string($_POST['access_token']));

$masuk = $connection->update_fb_access_token($access_token, $id);

 if($masuk = 'masuk'){
  echo '<script>alert("Berhasil Ubah Data");
        window.location="../?halaman=fb_access_token";
  </script>';
 }
        



