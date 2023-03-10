<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <header id="site_header">
        <nav class="navbar navbar-expand navbar-light bg-light justify-content-center">
            <ul class="nav navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </nav>
    </header>
    <!-- /#site_header -->
    <main id="site_main">
        <h1>{{$about_title}}</h1>
    </main>
    <!-- /#site_main -->
    <footer id="site_footer">

    </footer>
    <!-- /#site_footer -->
</body>

</html>