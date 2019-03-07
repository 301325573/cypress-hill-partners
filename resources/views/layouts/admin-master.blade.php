<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- I DON'T KNOW WHAT THE NEXT LINE OF CODE DOES EVEN THOUGH I HAVE GOOGLED IT SO MANY TIMES --}}
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <title>Cypress Hill Partners</title>

    <style>
        .Site {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        /* .Site-content {
            flex: 1;
        } */

        .shrinker {
            /* zoom: 0.3; */
            /* -moz-transform: scale(0.3);
            /* -moz-transform-origin: 0 0; */
            -webkit-transform:scale(0.9); */
            -moz-transform:scale(0.9);
            -ms-transform:scale(0.9);
            transform:scale(0.9);
        }

        .stick-bot {
            min-height: 67vh;
        }

        .ml {
            margin-left: 1.47em;
        }
    </style>
</head>
<body class="Site">
    @include('layouts.partials.header')
    
    <main class="stick-bot">
        <svg class="figure__animation" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
            <path fill="#FFF" d="M0 0h512v512H0z"></path>
            <text transform="translate(97.173 475.104)"></text>
            <path d="M307.2 224.6c0 4.6-.5 9-1.6 13.2-2.5-4.4-5.6-8.4-9.2-12-4.6-4.6-10-8.4-16-11.2 2.8-11.2 4.5-22.9 5-34.6 1.8 1.4 3.5 2.9 5 4.5 10.5 10.3 16.8 24.5 16.8 40.1zM232.2 214.6c-6 2.8-11.4 6.6-16 11.2-3.5 3.6-6.6 7.6-9.1 12-1-4.3-1.6-8.7-1.6-13.2 0-15.7 6.3-29.9 16.6-40.1 1.6-1.6 3.3-3.1 5.1-4.5.6 11.8 2.2 23.4 5 34.6z" fill="#2E3B39"></path>
            <path class="body" d="M279.7 217.6c12.9-48.1 5.1-104-23.4-142.6-28.5 38.5-36.2 94.5-23.4 142.6h46.8z" fill="#FF7058"></path>
            <path class="tip" d="M273 104.7c-4.4-10.6-9.9-20.6-16.6-29.7-6.7 9-12.2 19-16.6 29.7H273z" fill="#2E3B39"></path>
            <circle cx="256.3" cy="144.8" fill="#FFF" r="15.5"></circle>
            <circle class="circle" cx="256.3" cy="144.8" fill="#84DBFF" r="12.2"></circle>
            <path class="removehole" d="M267.5 139.9l-16 16c4.5 2 9.8 1.1 13.5-2.5 3.6-3.7 4.5-9.1 2.5-13.5z" fill="#54C0EB"></path>
            <path class="fuel" d="M276.8 234.9c.4-2.4.6-5.1.6-7.9 0-12.1-3.9-21.8-8.8-21.8s-8.8 9.8-8.8 21.8c0 2.8.2 5.4.6 7.9h16.4zM252.3 234.9c.4-2.4.6-5.1.6-7.9 0-12.1-3.9-21.8-8.8-21.8-4.8 0-8.8 9.8-8.8 21.8 0 2.8.2 5.4.6 7.9h16.4z" fill="#FFD05B"></path>
            <path class="smoke" d="M416.6 358.8c0-1.8-.4-3.6-1-5.2-2.1-5.6-7.5-9.6-13.8-9.6-.7 0-1.4.1-2.1.2-.3-9.6-8.2-17.3-17.9-17.3-2.1 0-4.2.4-6.1 1.1-3-5.6-8.9-9.4-15.7-9.4-.5 0-1 0-1.5.1-.5 0-1-.1-1.5-.1-6.8 0-12.7 3.8-15.7 9.4-1.9-.7-3.9-1.1-6.1-1.1-9.9 0-17.9 8-17.9 17.9 0 1.1.1 2.3.3 3.3-.9-.2-1.8-.3-2.8-.3-5.1 0-9.5 2.6-12.1 6.5-2.2-1.4-4.9-2.3-7.8-2.3-7.6 0-13.8 5.9-14.4 13.3h-.1c-5.9 0-11 3.6-13.2 8.7-2.6-3-6.5-5-10.9-5h-.1-.5-.1-.1c-4.3 0-8.2 1.9-10.9 5-2.2-5.1-7.3-8.7-13.2-8.7h-.1c-.6-7.5-6.8-13.3-14.4-13.3-2.9 0-5.5.8-7.8 2.3-2.6-3.9-7-6.5-12.1-6.5-.9 0-1.9.1-2.8.3.2-1.1.3-2.2.3-3.3 0-9.9-8-17.9-17.9-17.9-2.1 0-4.2.4-6.1 1.1-3-5.6-8.9-9.4-15.7-9.4-.5 0-1 0-1.5.1-.5 0-1-.1-1.5-.1-6.8 0-12.7 3.8-15.7 9.4-1.9-.7-3.9-1.1-6.1-1.1-9.7 0-17.6 7.7-17.9 17.3-.7-.1-1.4-.2-2.1-.2-6.3 0-11.7 4-13.8 9.6-.6 1.6-1 3.4-1 5.2 0 4 1.6 7.6 4.2 10.3-.5 1.2-.8 2.6-.8 4 0 6 4.9 10.9 10.9 10.9H402c6 0 10.9-4.9 10.9-10.9 0-1.4-.3-2.8-.8-4 2.9-2.7 4.5-6.3 4.5-10.3z" fill="#E6E9EE"></path>
            <rect class="exhaust" fill="#6DDCBD" x="241" y="220" width="30" height="8"></rect>
            <rect class="exhaust two" fill="#FF871C" x="245" y="231" width="20" height="9"></rect>
            <rect class="exhaust__line" fill="#E6E9EE" x="252" y="240" width="7" height="70"></rect>
            <path class="flame" d="M 6.7 1.14 l 2.8 4.7 s 1.3 3 -1.82 3.22 l -5.4 0 s -3.28 -.14 -1.74 -3.26 l 2.76 -4.7 s 1.7 -2.3 3.4 0 z" fill="#AA2247"></path>
          </svg>
            <div class="container has-text-centered">
                <h1 class="title is-2">Register a New Client</h1>
            </div>
            <div class="container has-text-centered shrinker">
                <section class="section">
                    @yield('new-client-ayy')
                </section>
            </div>

        <hr class="hr" style="height: 10px;">
        
        <div class="container content">
            <section class="section">
                @yield('list-clients')
            </section>
        </div>

        <hr class="hr" style="height: 10px;">

        <div class="container has-text-centered">
            <h1 class="title is-2">Do Something Else</h1>
            <p>something else</p>
        </div>

        <hr class="hr" style="height: 10px;">

        <div class="container has-text-centered">
            <h1 class="title is-2">Do Something Else</h1>
            <p>something else</p>
        </div>
    </main>

    @include('layouts.partials.footer')
</body>
</html>