// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable({
    dom: 'Bfrtip',
    buttons: [ 'excel', 'pdf', 'print'],
    "pageLength": 25,
    "lengthChange": true,
    "lengthMenu": [ 10, 25, 50, 75, 100 ]
});
});
