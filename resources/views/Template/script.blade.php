<!-- jQuery -->
<script src="{{asset('Admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('Admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('Admin/dist/js/adminlte.min.js')}}"></script>
<!-- datatables server side -->
<script src="{{ asset('js/dataTables.min.js') }}"></script>

<script>
    $(document).ready( function () {
    $('#dataSiswa').DataTable();
} );
</script>

<script>
    $(document).ready( function () {
    $('#id_penilaian').DataTable();
} );
</script>