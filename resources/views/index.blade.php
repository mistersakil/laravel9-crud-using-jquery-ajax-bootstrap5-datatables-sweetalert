<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">


</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-10 offset-md-1">

                <div class="card">
                    <div class="card-header">
                        <nav class="navbar navbar-light bg-light">
                            <div class="container-fluid">
                                <a class="navbar-brand">
                                    Laravel CRUD
                                </a>
                                <div class="d-flex">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#user_add_modal">Add
                                        new user</button>
                                </div>
                            </div>
                        </nav>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Laravel CRUD </strong> Using Bootstrap, jQuery, AJAX, Datatables,
                            SweetAlert
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered caption-top">
                            <caption>List of users</caption>
                            <thead class="bg-primary text-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Designation</th>
                                    <th scope="col">Avatar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>sakil@gmail.com</td>
                                    <td>01720092787</td>
                                    <td>web developer</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>sakil@gmail.com</td>
                                    <td>01720092787</td>
                                    <td>web developer</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>sakil@gmail.com</td>
                                    <td>01720092787</td>
                                    <td>web developer</td>
                                    <td>@mdo</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- User create modal -->

    @includeIf('user_add_modal')

    <!-- JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ asset('js/user.js') }}"></script>
</body>

</html>
