<!DOCTYPE html>
<html lang="en">
   <head>
      <base href="/public">
      @include('home.css')

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   </head>
   <body class="main-layout">
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <header>
         @include('home.header')
      </header>
      <div class="our_room">
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
               .our_room{
                  margin-top: -10px;
               }

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
                  height: 150px;
                  background: linear-gradient(to top, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0));
                  pointer-events: none;
               }

               .booking-form {
                  background: white;
                  padding: 13px;
                  border-radius: 20px;
                  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                  max-width: 400px;
                  margin: auto;
               }

               .booking-form h1 {
                  font-size: 36px;
                  text-align: center;
                  margin-bottom: 20px;
                  font-weight: bold;
               }

               .booking-form label {
                  font-weight: bold;
                  margin-top: 10px;
               }

               .booking-form input {
                  width: 100%;
                  padding: 5px;
                  margin-top: 5px;
                  border: 1px solid #ccc;
                  border-radius: 8px;
                  font-size: 16px;
               }

               .booking-form .btn-primary {
                  width: 100%;
                  padding: 5px;
                  margin-top: 15px;
                  background-color: #007bff;
                  border: none;
                  border-radius: 8px;
                  font-size: 18px;
                  color: white;
                  cursor: pointer;
                  transition: background 0.3s ease;
               }

               .booking-form .btn-primary:hover {
                  background-color: #0056b3;
               }

               
            </style>
            <div class="row">
               <div class="col-md-8" style="align-items: center">
                  <div id="serv_hover" class="room">
                     <div class="room_img">
                        <img style="height: 300px; width: 100%; object-fit: cover" 
                           src="/room/{{$room->image}}" alt="#"/>
                     </div>
                     <div class="bed_room">
                        <h3>{{$room->room_title}}</h3>

                        
                        <p style="padding: 12px">{{$room->description}}</p>
                        <h4 style="padding: 12px">Free Wifi : {{$room->wifi}}</h4>
                        <h4 style="padding: 12px">Room Type : {{$room->room_type}}</h4>
                        <h3 style="padding: 12px">Price : Rp{{$room->price}}</h3>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="booking-form">
                     <h1>Book Room</h1>

                     @if(session()->has('message'))

                     <div class="alert alert-success">

                     <button type="button" class="close" data-bs-dismiss="alert">x</button>

                     {{session()->get('message')}}
                     </div>

                     @endif


                     @if($errors)


                     @foreach($errors->all() as $errors)

                     <li style="color:red">
                      {{$errors}}
                     </li>

                     @endforeach
                     @endif

                     <form action="{{url('add_booking',$room->id)}}" method="Post">

                     @csrf

                     <label>Name</label>
                     <input type="text" name="name" placeholder="Enter your name"
                      @if(Auth::id())     
                      value="{{Auth::user()->name}}" placeholder="Enter your name"
                      @endif>


                     <label>Email</label>
                     <input type="email" name="email" placeholder="Enter your email"
                      @if(Auth::id())     
                      value="{{Auth::user()->email}}" placeholder="Enter your email"
                      @endif>

                     <label>Phone</label>
                     <input type="number" name="phone" placeholder="Enter your phone number"
                      @if(Auth::id())     
                      value="{{Auth::user()->phone}}" placeholder="Enter your phone number"
                      @endif>

                     <label>Start Date</label>
                     <input type="date" name="startDate" id="startDate">

                     <label>End Date</label>
                     <input type="date" name="endDate" id="endDate">

                     <input type="submit" class="btn btn-primary" value="Book Room">
                  </div>

                </form> 

                

               </div>
            </div>
         </div>
      </div>
      @include('home.footer')
      <script type="text/javascript">
         $(function(){ 
            var dtToday = new Date(); 
            var month = dtToday.getMonth() + 1; 
            var day = dtToday.getDate(); 
            var year = dtToday.getFullYear(); 
            if(month < 10) 
               month = '0' + month.toString(); 
            if(day < 10) 
               day= '0' + day.toString(); 
            var maxDate = year + '-' + month + '-' + day; 
            $('#startDate').attr('min', maxDate); 
            $('#endDate').attr('min', maxDate); 
         });
      </script>

         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>


   </body>
</html>
