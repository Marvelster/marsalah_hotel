   <!-- header inner -->
   <style>
      /* Hover untuk tombol Register */
      .btn-primary:hover {
         background-color: white !important;
         color: #0d6efd !important;            /* Bootstrap Primary (biru) */
      }
      
      .nav-link {
         color: white !important; 
      }
   </style>

   <div class="header" style="background: linear-gradient(to right, white, blue);">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                           <div class="center-desk">
                              <div class="logo">
                                 <a href="{{url('/')}}"><img style="margin-top: -10px; margin-left: -40px; height: 80px; width: auto;" src="/images/MARSALAH.png" alt="#" /></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                           </button>
                           <div class="collapse navbar-collapse" id="navbarsExample04">
                              <ul class="navbar-nav mx-auto d-flex justify-content-center">
                                 <li class="nav-item active">
                                    <a class="nav-link" href="{{url('/')}}">Home</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="">About</a>
                                 </li>
                                 @auth
                                 <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/user_bookings') }}">Bookings</a>
                                 </li>
                                 @endauth

                                 <li class="nav-item">
                                    <a class="nav-link" href="">Gallery</a>
                                 </li>                             
                                 <li class="nav-item">
                                    <a class="nav-link" href="">Contact</a>
                                 </li>

                                 

                                 
                                 

                           @if (Route::has('login'))
                              
                              
                           @auth
                           <div class="user-menu">
                           <x-app-layout>
      
                           </x-app-layout>
                           </div>
                           @else
                           <li class="nav-item" style="margin-left: {{ Auth::check() ? '90px' : '160px' }};">
                              <a class="btn btn-primary" href="{{ url('login') }}">Login</a>
                           </li>


                           @if (Route::has('register'))
                           <li class="nav-item"  style="margin-left: 20px;">
                                    <a class="btn btn-primary" href="{{url('register')}}">Register</a>
                                 </li>
                           @endif
                           @endauth
                     
                     @endif  
                              </ul>
                           </div>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>

            <style>
               .h-16 {
                  height: auto;
               }

               .user-menu{
                  margin-left: 70px;
               }
            </style>