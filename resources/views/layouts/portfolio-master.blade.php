<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    
    <title>Portfolio</title>
    <style>
        .stick-bot {
            min-height: 67vh;
        }
        .decor {
            color: #FBC033;
        }
        .le-decor {
            font-weight: 200 !important;
        }
    </style>
</head>
<body>
    
    @include('layouts.partials.header')
    
    <main class="stick-bot">
        <div class="container">
            <div class="has-text-centered">
                <h1 class="title"><span class="decor">Portfolio of</span> <span class="le-decor">{{ $user[0]->name }}</span></h1>
            </div>
        </div>
        <div class="container">&nbsp;</div>
    <div class="container">
        <div class="has-text-centered">
            <section class="section">
                @yield('client-portfolio')
            </section>
        </div>
    </div>

    </main>



    @include('layouts.partials.footer')

      <!-- Bootstrap core JavaScript -->
      <script src="{{asset('js/jquery.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    
      <!-- Plugin JavaScript -->
      <script src="{{asset('js/jquery.easing.min.js')}}"></script>
    
      <!-- Custom scripts for this template -->
      <script src="{{asset('js/new-age.min.js')}}"></script>
</body>
</html