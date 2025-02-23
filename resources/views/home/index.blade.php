<!DOCTYPE html>
<html lang="en">
   <head>
      @include('home.css')
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         @include('home.header')
      </header>
      <!-- end header inner -->
      <!-- end header --> 
      <!-- banner -->
      
      <style>


    
.banner_main {
    position: relative;
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.5);
    z-index: 2;
}

.carousel-item {
    transition: transform 1s ease, opacity 1s ease;
}

.carousel-item-next,
.carousel-item-prev,
.carousel-item.active {
    display: block;
    opacity: 0;
}

.carousel-item-next.carousel-item-left,
.carousel-item-prev.carousel-item-right,
.carousel-item.active {
    opacity: 1;
}
</style>

<section class="banner_main">
    <div id="myCarousel" class="carousel slide banner" data-ride="carousel" data-interval="5000">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img style="height: 670px; width: 100%" class="first-slide" src="/images/Bedroom Design (1).jpeg" alt="First slide">
                <div class="container">
                </div>
            </div>
            <div class="carousel-item">
                <img style="height: 670px; width: 100%" class="second-slide" src="/images/download (5).jpeg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img style="height: 670px; width: 100%" class="third-slide" src="/images/download (4).jpeg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    
    <style type="text/css">
         html{
            scroll-behavior: smooth;
         }

   </style>
    
    <div class="booking_ocline">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="book_room">
                    <h1>Ayo Cari Kamar yang Cocok untuk Kamu</h1>
                        <div class="col-md-12">
                            <button class="book_btn">Book Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</section>

<script>
    document.querySelector('.book_btn').addEventListener('click', function() {
        document.getElementById('ourroom').scrollIntoView({ behavior: 'smooth' });
    });
</script>

      <!-- end banner -->
      <!-- about -->
      
        @include('home.about')

      <!-- end about -->
      <!-- our_room -->
      
        
<div  class="our_room" id="ourroom">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our Room</h2>
                     <p>Lorem Ipsum available, but the majority have suffered </p>
                  </div>
               </div>
            </div>
            

            <style>
            .bed_room {
                background-color: white;
                border-radius: 30px;
                box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.15);
                padding: 15px;
            }

            .our_room {
               position: relative;
               overflow: hidden;
            }

            .our_room::after {
               content: "";
               position: absolute;
               bottom: 0;
               left: 0;
               width: 100%;
               height: 150px; /* Sesuaikan tinggi efek gradasi */
               background: linear-gradient(to top, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0));
               pointer-events: none; /* Agar tidak mengganggu interaksi elemen lain */
            }
            </style>


            <div class="row">
               @foreach($room as $rooms)

               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img style="height: 200px; width: 360px; object-fit: cover" 
                        src="room/{{$rooms->image}}" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>{{$rooms->room_title}}</h3>
                        <p style="padding: 10px">{!! Str::limit($rooms->description,100) !!}</p>

                        <a class="btn btn-primary"href="{{url('room_details',$rooms->id)}}">Room Details<a>

                     </div>
                  </div>
               </div>
               @endforeach

            </div>
         </div>
      </div>
      

      <!-- end our_room -->
      <!-- gallery -->
      @include('home.gallery')
      <!-- end gallery -->
      <!-- blog -->
      @include('home.blog')
      <!-- end blog -->
      <!--  contact -->
      @include('home.contact')
      <!-- end contact -->
      <!--  footer -->
      @include('home.footer')
      <!-- end footer -->
   </body>
</html>