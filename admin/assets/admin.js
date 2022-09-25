$("#form_edit").on("submit", (function(e){

 e.preventDefault();

 $.ajax({

   url :'controller/proses_edit_berita.php',

   type :'POST',

   data : new FormData (this),

   contentType : false,

   cache : false,

   processData : false,

   success : function(data){

        console.log(data);

      }
   });  
}));