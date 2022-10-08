    <script src=<?= base_url("vendor/jquery/jquery.min.js") ?>></script>
    <script src=<?= base_url("vendor/bootstrap/js/bootstrap.bundle.min.js") ?>></script>

    <!-- Core plugin JavaScript-->
    <script src=<?= base_url("vendor/jquery-easing/jquery.easing.min.js") ?>></script>

    <!-- Custom scripts for all pages-->
    <script src=<?= base_url("js/sb-admin-2.min.js") ?>></script>

    <!-- Page level plugins -->
    <script src=<?= base_url("vendor/chart.js/Chart.min.js") ?>></script>

    <!-- Page level plugins -->
    <script src=<?= base_url("vendor/chart.js/Chart.min.js") ?>></script>

    <!-- Page level custom scripts -->
    <link href=<?= base_url("vendor/datatables/dataTables.bootstrap4.min.css") ?> rel="stylesheet">
    <!-- Page level plugins -->
    <script src=<?= base_url("vendor/datatables/jquery.dataTables.min.js") ?> ></script>
    <script src=<?= base_url("vendor/datatables/dataTables.bootstrap4.min.js") ?> ></script>

    <!-- Page level custom scripts -->
    <script src=<?= base_url("js/demo/datatables-demo.js") ?> ></script>

     <!-- Buat Preview gambar foto -->
        <script>
        function readURL(input, id) {
            id = id || '#blah';
            if (input.files && input.files[0]) {
                var reader = new FileReader();
        
                reader.onload = function (e) {
                    $(id)
                            .attr('src', e.target.result)
                            .height(150);
                };
        
                reader.readAsDataURL(input.files[0]);
            }
        }
        </script> 