
$('#editstatus').on('show.bs.modal', function (event) {
  console.log("Modal Opened");
var button = $(event.relatedTarget) // Button that triggered the modal
var status = button.data('status') // Extract info from data-* attributes
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
var modal = $(this)
 $('#btn-save').val("updatestatus");
modal.find('.modal-body #status').val(status)
})
