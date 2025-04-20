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

      <div class="container mt-5">
   <h2 class="text-center mb-4 elegant-heading">Status Pemesanan Kamar</h2>

   @foreach ($bookings as $data)
   <div class="booking-card elegant-card">
      <div class="card-header d-flex justify-content-between align-items-center">
         <h4 class="room-title">{{ $data->room->room_title }}</h4>
         <div class="status-indicator 
            @if($data->status == 'approve') status-approved 
            @elseif($data->status == 'rejected') status-rejected 
            @else status-waiting @endif">
            @if($data->status == 'approve')
               <i class="fas fa-check-circle"></i> Approved
            @elseif($data->status == 'rejected')
               <i class="fas fa-times-circle"></i> Rejected
            @else
               <i class="fas fa-clock"></i> Waiting
            @endif
         </div>
      </div>
      <div class="card-body">
         <p><strong>Tanggal:</strong> {{ $data->start_date }} to {{ $data->end_date }}</p>
         <p><strong>Kode Booking:</strong> #BK{{ str_pad($data->id, 4, '0', STR_PAD_LEFT) }}</p>
      </div>
   </div>
   @endforeach
</div>


<style>
  .elegant-heading {
   font-size: 32px;
   color: #0b2c4d;
   font-weight: 600;
   margin-bottom: 40px;
}

.elegant-card {
   background: #ffffff;
   border-radius: 20px;
   padding: 25px;
   margin-bottom: 30px;
   border-left: 6px solid transparent;
   position: relative;
   z-index: 1;
   transition: transform 0.3s ease, box-shadow 0.3s ease;
   box-shadow:
      0 12px 30px rgba(0, 0, 0, 0.12),
      0 0 8px rgba(0, 162, 255, 0.1); /* Neon biru halus */
}

.elegant-card:hover {
   transform: translateY(-6px);
   box-shadow:
      0 18px 45px rgba(0, 0, 0, 0.15),
      0 0 12px rgba(0, 162, 255, 0.2); /* Tambah glow saat hover */
}

@keyframes blink {
   0%, 100% { opacity: 1; }
   50% { opacity: 0.5; }
}

.status-waiting {
   background-color: #fffbe6;
   color: #ffcc00;
   border-left: 6px solid #ffcc00;
   animation: blink 1.2s infinite;
}

.status-waiting i {
   animation: blink 1.2s infinite;
}


.room-title {
   font-size: 20px;
   color: #1f3b5c;
   font-weight: bold;
}

.card-header {
   display: flex;
   justify-content: space-between;
   align-items: center;
   margin-bottom: 15px;
}

.card-body p {
   margin: 6px 0;
   color: #444;
   font-size: 15px;
}

.status-indicator {
   font-weight: bold;
   padding: 6px 12px;
   border-radius: 20px;
   display: flex;
   align-items: center;
   gap: 6px;
   font-size: 14px;
}

.status-approved {
   background-color: #e6f9ff;
   color: #007bff;
   border-left: 6px solid #00bfff;
}

.status-rejected {
   background-color: #ffe6e6;
   color: #ff4d4d;
   border-left: 6px solid #ff4d4d;
}

.status-waiting {
   background-color: #fffbe6;
   color: #ffcc00;
   border-left: 6px solid #ffcc00;
}

</style>
      
      
      
      <!--  footer -->
      @include('home.footer')
      <!-- end footer -->
   </body>
</html>