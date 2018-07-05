<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Challenge Technique Code 42">
    <meta name="author" content="Adam GENDRE">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Online Note-Pad</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/album.css" rel="stylesheet">
  </head>

  <body>
    @include ('layouts.nav')       
    <div class="container">
      @yield('content')
    </div>
    @include ('layouts.footer')
  </body>
</html>
