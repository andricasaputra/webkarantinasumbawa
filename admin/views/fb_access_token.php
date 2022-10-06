<?php  
require_once('config/database.php');
require_once('classes/class_berita.php');

$db = Database::getInstance();
$conn = $db->getConnection();
$connection = new berita($db);
$tampilData = $connection->fb_access_token();
$tampilData2 = $connection->fb_access_token();

?>

<style>
  td{
        word-wrap: break-word;
        min-width: 160px;
        max-width: 260px;
    }
</style>

<section class="content container-fluid">
  <table class="table table-hover table-striped" id="tabel_berita1">
      <thead>
          <tr>
              <th>Access Token</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
          <?php  
              $no = 1;
              while($data = $tampilData->fetch_object()):
          ?>
          <tr>
              <td><?php echo $data->access_token ?></td>
              <td width="200">
               <a href="?halaman=fb_access_token&edit" class="btn btn-warning">Edit</a>
              </td>
          </tr>
          <?php  
              endwhile;
          ?>
      </tbody>
  </table>
</section>


<?php 

if(isset($_GET['edit'])){ ?>

   
            
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Access Token</h4>
        </div>

          <?php $data = (new berita($db))->fb_access_token()->fetch_object(); ?>

          <form action="controller/proses_edit_aces_token.php" method="post">

          <input type="hidden" class="form-control" name="id" value="<?= $data->id; ?>" />

          <div class="column-full">
              <label for="access_token">Access Token</label>
              <textarea class="form-control" name="access_token" rows="10" required><?= $data->access_token ?></textarea>
          </div>  

          <button type="submit" class="btn btn-primary">Edit</button>


        </form>

<?php  }

?>



<script src="./assets/ckeditor/ckeditor.js"></script>
