<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    
    <style>
        .section_style{
            background-color: rgb(0, 27, 74);
        }
        .title_name{
            color: aliceblue;
            font-weight: bold;
        }
        footer{
            background-color: rgb(0, 99, 121);
        }
    </style>

</head>
<body>
    <header class="section-header">

        <section class="header-main border-bottom section_style">
            <div class="container-fluid">
               <div class="row p-2 pt-3 pb-3 d-flex align-items-center">
                   <div class="col-md-3 d-flex">
                       <img  class="d-none d-md-flex" src="/img/laptop.png" width="99">
                       <div class="mt-4 ms-3">
                        <h2 class="title_name">Laptops Shop</h2>
                       </div>
                   </div>
                   
                   <div class="col-md-5 d-flex">
                        <div class="input-group">
                            <input type="text" class="form-control input-lg" placeholder="Search for products" aria-label="Input group example" aria-describedby="basic-addon1">
                            <span class="input-group-text btn btn-light" id="basic-addon1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                                </svg>
                            </span>
                        </div>
                    </div>
                   
                   <div class="col-md-4 d-flex">
                       <div class="d-flex d-none d-md-flex flex-row align-items-center">
                        
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person-circle text-light" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"></path>
                            </svg>
                            
                           <div class="ms-2">
                            @if (Route::has('login'))
                                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                    @auth
                                        <a href="{{ url('/') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                                    @else
                                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 text-white">Log in</a>
                
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500  text-white">Register</a>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                           </div>

                        </div>                         
                        <div class="d-flex d-none d-md-flex flex-row align-items-center">
                                <button type="button" class="btn ms-3 text-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-heart text-light" viewBox="0 0 16 16" href="">
                                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                      </svg>
                                Wishlist
                            </button>                           
                        </div> 

                        <div class="d-flex d-none d-md-flex flex-row align-items-center">
                              <form>
                                <button type="submit" class="btn ms-3 text-light" formaction="">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-cart3 text-light" viewBox="0 0 16 16">
                                      <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                    Cart
                              </button>
                              </form>
                        </div>

                    </div>           
                </div>
            </div> 

        </section>

        </header>

        <main class="py-4 d-flex flex-column min-vh-100">
            @yield('content')
        </main>

        <footer class="bg-secondary text-center text-white mt-auto">
            <!-- Grid container -->
            <div class="container p-4 pb-0">
              <!-- Section: Social media -->
              <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"
                  ><i class="fab fa-facebook-f"></i
                ></a>
          
                <!-- Twitter -->
                <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"
                  ><i class="fab fa-twitter"></i
                ></a>
          
                <!-- Google -->
                <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"
                  ><i class="fab fa-google"></i
                ></a>
          
                <!-- Instagram -->
                <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"
                  ><i class="fab fa-instagram"></i
                ></a>
          
                <!-- Linkedin -->
                <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"
                  ><i class="fab fa-linkedin-in"></i
                ></a>
          
                <!-- Github -->
                <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"
                  ><i class="fab fa-github"></i
                ></a>
              </section>
              <!-- Section: Social media -->
            </div>
            <!-- Grid container -->
          
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgb(0, 27, 74)">
              © 2023 Copyright:
              <a class="text-white" href="https://mdbootstrap.com/">LaptopsShop.com</a>
            </div>
            <!-- Copyright -->
          </footer>
</body>
</html>
