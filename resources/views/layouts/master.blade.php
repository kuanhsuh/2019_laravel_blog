<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>Clean Blog - Start Bootstrap Theme</title>

        <!-- Bootstrap core CSS -->
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
            crossorigin="anonymous"
        />

        <!-- Custom fonts for this template -->
        <link
            href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic"
            rel="stylesheet"
            type="text/css"
        />
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
            rel="stylesheet"
            type="text/css"
        />

        <!-- Custom styles for this template -->
        <link href="/css/clean-blog.css" rel="stylesheet" />
    </head>

    <body>
        @include('layouts.nav')

        @yield('content')

        @include('layouts.footer')

        <!-- Bootstrap core JavaScript -->
        <script
            src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"
        ></script>

        <!-- Custom scripts for this template -->
        <script src="https://blackrockdigital.github.io/startbootstrap-clean-blog/js/clean-blog.min.js"></script>
    </body>
</html>
