<?php  
  require_once('../../config/database.php');
  require_once('../../classes/class_calendar.php');
  $db = Database::getInstance();
  $calendar = new calendar($db);

  if(isset($_REQUEST['id'])){

    $id = intval($_REQUEST['id']);

    $tampil = $calendar->tampilCalendar($id);
    $data = $tampil->fetch_object();

    $id = $data->id;
    $title =$data->title;
    $start = $data->start;
    $end = $data->end;

  }

?>


<div class="modal-content" id="modal-edit">
  <form id="form_edit_events">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Ubah Agenda</h4>
    </div>
    <div class="modal-body">
      <div class="column-full">
          <input type="hidden" name="id" id="id" value="<?=$id;?>">
          <label for="title">Nama Agenda</label>
          <input type="text" class="form-control" name="title" id="title" value="<?=$title;?>">
      </div>                
      <div class="column-full">
          <label for="penulis">Start Date</label>
          <input type="date" class="form-control" name="start" id="start" value="<?= substr($start, 0,10);?>">
      </div> 
      <div class="column-full">
          <label for="penulis">End Date</label>
          <input type="date" class="form-control" name="end" id="end" value="<?php echo substr($end, 0,10); ?>">
      </div>                
    </div>
    <div class="modal-footer">
      <button type="submit" class="btn btn-primary" name="input">Ubah</button>
    </div>
  </form>
</div>

<script type="text/javascript">
  $("#form_edit_events").on("submit", (function(e){

 e.preventDefault();

 $.ajax({

   url :'controller/proses_edit_events.php',

   type :'POST',

   data : new FormData (this),

   contentType : false,

   cache : false,

   processData : false,

   success : function(data){

        alert('data berhasil diubah');

          window.location.href = '?halaman=events';

      }
   });  
}));
</script>