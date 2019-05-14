$(document).on('click','.create-modal', function() {
   $('#tambahobat').modal('show');
   $('.form-horizontal').show();
   $('.modal-title').text('Add Post');
 });
 $("#add").click(function() {
   $.ajax({
     type: 'POST',
     url: 'createresep',
     data: {
       '_token': $('input[name=_token]').val(),
       'id_visitor': $('input[name=id_visitor]').val(),
       'obat': $('input[name=obat]').val(),
        'dosis': $('input[name=dosis]').val(),
        'jumlah': $('input[name=jumlah]').val()
     },
     success: function(data){
       if ((data.errors)) {
         $('.error').removeClass('hidden');
         $('.error').text(data.errors.id_visitor);
         $('.error').text(data.errors.obat);
         $('.error').text(data.errors.dosis);
         $('.error').text(data.errors.jumlah);
       } else {
         $('.error').remove();
         $('#table').append("<tr class='post" + data.id + "'>"+
         "<td>" + data.id + "</td>"+
         "<td>" + data.id_visitor + "</td>"+
         "<td>" + data.obat + "</td>"+
         "<td>" + data.dosis + "</td>"+
        "<td>" + data.jumlah + "</td>"+

         "</tr>");
       }
     },
   });
   $('#id_visitor').val('');
   $('#obat').val('');
   $('#dosis').val('');
   $('#jumlah').val('');
 });
