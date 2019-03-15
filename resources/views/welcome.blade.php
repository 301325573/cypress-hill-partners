<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset('css/new-age.min.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body id="page-top">
    @include('layouts.partials.headerwelcome')
    

        <section class="flex-center position-ref full-height" style="background-color: rgba(255,100,200,.1)">

            <div class="content">
                <div class="title m-b-md">
                    Cypress Hill Partners
                </div>
                
                @if (auth()->user())
                    @if (auth()->user()->userType() == 'admin')
                        <h1>Hello, {{ auth()->user()->name }}</h1>
                        <a href="{{ url('/admin') }}">Admin Portal</a>  
                    @elseif (auth()->user()->userType() == 'standard')
                        <h1>Hello, {{ auth()->user()->name }}</h1>
                        <a href="{{ url('/' . auth()->user()->id . '/portfolio') }}">My Portolio</a>
                    @elseif (auth()->user()->userType() == 'ghost')
                        <h1>Hello, {{ auth()->user()->name }}</h1>
                        <a href="https://google.com">Exclusive Portal</a>
                    @endif
                @else
                    <a href="{{ url('/login') }}">Login</a>
                @endif

                    
            </div>


        </section>

        <section id="about" class="w-100 p-3 flex-center position-ref full-height" style="width: 120px; background-color: rgba(0,0,255,.1)">

                <div class="content">

                    <p>hi</p>
                    <p>hi</p>
                    <p>hi</p>
                    <p>hi</p>
                    <p>hi</p>
                    <p>hi</p>
                    
                        
                </div>
    
    
            </section>
            <section id="people" class="w-100 p-3 flex-center position-ref full-height" style="width: 120px; background-color: rgba(100,0,100,0.1)">

                    <div class="content">
    
                        <p>hi</p>
                        <p>hi</p>
                        <p>hi</p>
                        <p>hi</p>
                        <p>hi</p>
                        <p>hi</p>
                        
                            
                    </div>
        
        
                </section>

                <section id="originate" class="w-100 p-3 flex-center position-ref full-height" style="width: 120px; background-color: rgba(100,0,200,0.1)">
                <div class="content">
                    
                            <p>hi</p>
                            <p>hi</p>
                            <p>hi</p>
                            <p>hi</p>
                            <p>hi</p>
                            <p>hi</p>
                            
                                
                        </div>
            
            
                    </section>

                    <section id="specialtylending" class="w-100 p-3 flex-center position-ref full-height" style="width: 120px; background-color: rgba(100,0,200,0.1)">
                            <div class="content">
                                
                                        <p>hi</p>
                                        <p>hi</p>
                                        <p>hi</p>
                                        <p>hi</p>
                                        <p>hi</p>
                                        <p>hi</p>
                                        
                                            
                                    </div>
                        
                        
                                </section>

                                <section id="contact" class="w-100 p-3 flex-center position-ref full-height" style="width: 120px; background-color: rgba(100,0,200,0.1)">
                                        <div class="content">
                                            
                                                    <p>hi</p>
                                                    <p>hi</p>
                                                    <p>hi</p>
                                                    <p>hi</p>
                                                    <p>hi</p>
                                                    <p>hi</p>
                                                    
                                                        
                                                </div>
                                    
                                    
                                            </section>

              <!-- Bootstrap core JavaScript -->
      <script src="{{asset('/js/jquery.min.js')}}"></script>
      <script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
    
      <!-- Plugin JavaScript -->
      <script src="{{asset('/js/jquery.easing.min.js')}}"></script>
    
      <!-- Custom scripts for this template -->
      <script src="{{asset('/js/new-age.min.js')}}"></script>
    </body>
</html>
