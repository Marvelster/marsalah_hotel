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
     <!-- BODY SECTION: Redesain simple dan elegan -->
<div class="our_room py-5 bg-light" style="margin-top: -1px;">
  <div class="container pt-5">
    <div class="row justify-content-center mb-5">
      <div class="col-md-8 text-center">
        <h2 class="display-5 fw-bold">Our Rooms</h2>
        <p class="text-muted">Pilih kamar yang paling sesuai dengan kebutuhan Anda.</p>
      </div>
    </div>
    <div class="row gx-4 gy-5">
      <!-- ROOM CARD -->
      <div class="col-lg-7">
        <div class="card shadow-sm room-card overflow-hidden">
          <div class="ratio ratio-16x9 mb-3">
            <img src="/room/{{$room->image}}" class="card-img-top object-fit-cover" alt="{{$room->room_title}}">
          </div>
          <div class="card-body">
            <h3 class="card-title fw-bold mb-2">{{$room->room_title}}</h3>
            <p class="card-text text-secondary small mb-4">{{$room->description}}</p>
            <ul class="list-unstyled mb-0" style="margin-left: -8px;">
              <li class="mb-2"><i class="bi bi-wifi me-2"></i>Free Wifi: <strong>{{$room->wifi}}</strong></li>
              <li><i class="bi bi-house-door me-2"></i>Room Type: <strong>{{$room->room_type}}</strong></li>
            </ul>
            <h4 class="mt-4 text-primary fw-bold">Rp {{$room->price}}</h4>
          </div>
        </div>
      </div>
      <!-- BOOKING FORM -->
      <div class="col-lg-5">
        <div class="card shadow-sm booking-card p-4">
        <h3 class="mb-4 text-center fw-semibold fs-3">Book Your Stay</h3>
          @if(session()->has('message'))
            <div class="alert alert-success small mb-3">
              {{ session('message') }}
            </div>
          @endif
          <form action="{{ url('add_booking', $room->id) }}" method="POST" novalidate>
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" id="name" name="name" class="form-control" placeholder="Masukkan nama Anda"
                @if(Auth::id()) value="{{ Auth::user()->name }}" @endif>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" id="email" name="email" class="form-control" placeholder="Masukkan email"
                @if(Auth::id()) value="{{ Auth::user()->email }}" @endif>
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label">Phone</label>
              <input type="text" id="phone" name="phone" class="form-control" placeholder="Nomor telepon"
                @if(Auth::id()) value="{{ Auth::user()->phone }}" @endif>
            </div>
            <div class="row gx-2">
              <div class="col">
                <label for="startDate" class="form-label">Start Date</label>
                <input type="date" id="startDate" name="startDate" class="form-control" min="{{ date('Y-m-d') }}">
              </div>
              <div class="col">
                <label for="endDate" class="form-label">End Date</label>
                <input type="date" id="endDate" name="endDate" class="form-control" min="{{ date('Y-m-d') }}">
              </div>
            </div>
            <button type="submit" class="btn btn-primary w-100 mt-4">Book Room</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- CUSTOM CSS -->
<style>
  .room-card {
    border: none;
    border-radius: 1rem;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  .room-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
  }
  .ratio.overflow-hidden {
    overflow: hidden;
    border-radius: 1rem;
  }
  .object-fit-cover {
    object-fit: cover;
    transition: transform 0.3s ease;
  }
  .object-fit-cover:hover {
    transform: scale(1.05);
  }
  .booking-card {
    border: none;
    border-radius: 1rem;
    background: #ffffff;
  }
  .booking-card .form-control {
    border-radius: .5rem;
  }
  .booking-card .btn-primary {
    border-radius: .75rem;
    box-shadow: 0 4px 12px rgba(0, 123, 255, 0.3);
    transition: background 0.3s ease, transform 0.2s ease;
  }
  .booking-card .btn-primary:hover {
    background: #0056b3;
    transform: translateY(-2px);
  }
</style>
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
