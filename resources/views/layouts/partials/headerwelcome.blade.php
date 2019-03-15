
       <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
           <div class="container">
                 <a class="navbar-item navbar-brand js-scroll-trigger" href="#page-top">
                     <img src="https://www.cypresshillspartners.com/uploads/5/9/5/6/59561431/cypresshills-black-yellow.png" >
                 </a>
                 <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                   Menu
                      <i class="fas fa-bars"></i>
                 </button>
                 <div class="collapse navbar-collapse" id="navbarResponsive">
                       <ul class="navbar-nav ml-auto">
                             <li class="nav-item">
                                 <a class="nav-link js-scroll-trigger" href="#about">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link js-scroll-trigger" href="#people">People</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link js-scroll-trigger" href="#originate">Originate</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link js-scroll-trigger" href="#specialtylending">Specialty Lending</a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                              </li>
                        </ul>
                  </div>
               @guest
                   <li class="nav-item">
                       <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                   </li>
                   @if (Route::has('register'))
                       <li class="nav-item">
                           <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                       </li>
                   @endif
               @else
                   <li class="nav-item dropdown">
                       <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                           {{ Auth::user()->name }} <span class="caret"></span>
                       </a>
                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                           <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                               {{ __('Logout') }}
                           </a>
                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                               @csrf
                           </form>
                        </div>
                   </li>
               @endguest
            </div>
        </nav>

  