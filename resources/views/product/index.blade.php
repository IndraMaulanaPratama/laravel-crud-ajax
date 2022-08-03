<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <h3>Product Data</h3>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" onclick="create()">
                    Tambah Data Product
                </button>

            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-8">
                <div id="data-product"></div>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div id="page"></div>
                </div>

            </div>
        </div>
    </div>

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>

    <script>
        $(document).ready(function() {
            read();
        });

        function create() {
            $.get("{{ url('product/form_create') }}", {},
                function(data, textStatus, jqXHR) {

                    $("#exampleModalLabel").html("Form Tambah data Product");
                    $("#page").html(data);
                    $("#exampleModal").modal("show");
                }
            );

        }

        function store() {
            var product = $("#product").val();

            $.ajax({
                type: "get",
                url: "{{ url('product/store') }}",
                data: "product=" + product,

                success: function(data, response) {
                    $(".btn-close").click();
                    read();
                }
            });
        }

        function read() {
            $.get("{{ url('product/read') }}", {},
                function(data, textStatus, jqXHR) {
                    $("#data-product").html(data);
                }
            );
        }

        function show(id) {
            $.get("{{ url('product/form_update') }}/" + id, {},
                function(data, textStatus) {
                    $("#exampleModalLabel").html("Form Ubah data Product");
                    $("#page").html(data);
                    $("#exampleModal").modal("show");
                }
            );
        }

        function update(id) {
            var product = $("#product").val();

            $.ajax({
                type: "get",
                url: "{{ url('product/update') }}/" + id,
                data: "product=" + product,
                success: function(response) {
                    $(".btn-close").click();
                    read();
                }
            });
        }

        function destroy(id) {
            var destroy = confirm("Apakah anda yakin akan menghapus data ini?");

            if (destroy) {
                $.ajax({
                    type: "get",
                    url: "{{ url('product/destroy') }}/" + id,
                    data: "",
                    dataType: "",
                    success: function(response) {
                        read();
                    }
                });
            }
        }
    </script>

</body>

</html>
