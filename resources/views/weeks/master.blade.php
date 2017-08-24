<!doctype html>
<html>
    <head>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
         <link rel="stylesheet" href="https://rawgit.com/lodev09/bootstrap-markdown/master/css/bootstrap-markdown.min.css">
         <link rel="stylesheet" href="{{ asset('css/frontend.css') }}" type="text/css">
         @yield('cssforpdf')
    </head>
    <body>
            
        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Ausbildungsnachweis</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="/weeks">Home</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
