<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>One to One Relationship</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="text-center">User with Phone (1 to 1)</h3>
                    <table class=" table table-bordered">
                        <thead>
                            <tr>
                                <th>User Name</th>
                                <th>Phone</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user )
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->phone->name }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


                <div class="col-lg-6">
                    <h3 class="text-center">Phone with User (1 to 1)</h3>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>User Name</th>
                                <th>Phone Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($phones as $phones )
                            <tr>
                                <td>{{ $phones->name }}</td>
                                <td>{{ $phones->user->name }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="row">

            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
    </body>

</html>
