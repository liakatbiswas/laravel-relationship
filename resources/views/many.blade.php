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
                    <h3 class="text-center">Post with Categories (Many to Many)</h3>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Post Title</th>
                                <th>Categories</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post )
                            <tr>
                                <td>{{ $post->title }}</td>
                                <td>
                                    @foreach ($post->categories as $category )
                                    <li>{{ $category->name }}</li>
                                    @endforeach
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="col-lg-6">
                    <h3 class="text-center">Category with Posts (Many to Many)</h3>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Post Title</th>
                                <th>Categories</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category )
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>
                                    @foreach ($category->posts as $post )
                                    <li>{{ $post->title }}</li>
                                    @endforeach
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
    </body>

</html>
