<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="{{asset('/bootstrap/js/bootstrap.min.js')}}"></script>
    <script
            src="https://code.jquery.com/jquery-3.2.1.js"
            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
            crossorigin="anonymous"></script>
    <script>
        function funcBefore() {
            $("#info").text("...");
        }

        function funcSuccess(data) {
            $("#info").text(data);
        }
        $(document).ready(function () {
            $("#load").bind("click", function () {

                $.ajax({
                    url: "/create",
                    type: "GET",
                    data: ({name: 1, prod_id: 2}),
                    dataType: "html",
                    deforeSend: funcBefore,
                    success: funcSuccess
                });
            });
        });
    </script>

</head>
<body>
<p id="load" style="cursor: pointer;"  >load</p>
<div id="info"></div>
@yield('content')

</body>
</html>
