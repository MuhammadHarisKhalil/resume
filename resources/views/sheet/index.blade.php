<!DOCTYPE html>

<html>

<head>

    <title>Spreadsheet in Laravel</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" />




</head>

<body>

    <div class="container">

        <div class="card-header bg-secondary dark bgsize-darken-4 white card-header">

            <h4 class="text-white">Google Sheet read and write in Laravel</h4>

        </div>

        <div class="row ">

            <div class="col-md-6 mt-4">

                <div class="card">

                    <div class="card-header bgsize-primary-4 white card-header">

                        <h4 class="card-title">Customer Form</h4>

                    </div>

                    <div class="card-body">

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">




                                <button type="button" class="close" data-dismiss="alert">×</button>




                                <strong>{{ $message }}</strong>




                            </div>

                            <br>
                        @endif

                        <form method="POST" action="send-sheet-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlInput1">value</label>
                                <input type="number" class="form-control" name="name" id="exampleFormControlInput1"
                                    placeholder="name">
                            </div>
                            <input type="submit" class=" mt-2 btn btn-primary">
                        </form>
                    </div>

                </div>

            </div>

            <div class="row justify-content-left col-md-6 mt-4">

                <div class="col-md-12">

                    <div class="card">

                        <div class="card-header bgsize-primary-4 white card-header">

                            <h4 class="card-title">Data Table</h4>

                        </div>

                        <div class="card-body">

                            <div class=" card-content table-responsive">

                                <table id="example" class="table table-striped table-bordered" style="width:100%">

                                    <thead>

                                        <th scope="col">value</th>
                                        <th scope="col">value</th>
                                        <th scope="col">sum</th>

                                    </thead>

                                    <tbody>
                                        @foreach ($data as $value)
                                            <tr>
                                                @if (!$loop->first)
                                                    <th scope="row">{{ $value[0] }}</th>
                                                    <td>{{ $value[1] }}</td>
                                                    <td>{{ $value[2] }}</td>
                                                @endif
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>

</html>
