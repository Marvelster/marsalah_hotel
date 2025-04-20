<!DOCTYPE html>
<html>
  <head> 
   @include('admin.css')

   <style>
  body {
    background-color: #111;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: white;
    margin: 0;
  }

  .table-wrapper {
    position: relative;
  }

  .table-responsive {
    overflow-x: auto;
    width: 100%;
    scroll-behavior: smooth;
  }

  .table-scroll-buttons {
    display: flex;
    justify-content: center;
    margin-top: 1rem;
    gap: 1rem;
  }

  .scroll-btn {
    background-color: #222;
    color: white;
    border: 1px solid #444;
    border-radius: 0.5rem;
    padding: 0.5rem 1rem;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  .scroll-btn:hover {
    background-color: #444;
  }

  .table_deg {
    background: rgba(0, 0, 0, 0.6);
    border-collapse: collapse;
    margin: 2rem auto;
    width: 100%;
    min-width: 1000px;
    text-align: center;
    border-radius: 1rem;
    overflow: hidden;
    box-shadow: 0 0 30px rgba(255, 0, 0, 0.1);
  }

  .table_deg thead {
    background: linear-gradient(to right, #4b0000, #000);
  }

  .th_deg {
    padding: 14px;
    font-weight: bold;
    font-size: 0.95rem;
    color: #fff;
    border-bottom: 1px solid #333;
  }

  td {
    padding: 12px;
    font-size: 0.9rem;
    border-bottom: 1px solid #333;
  }

  tr {
    background: linear-gradient(to right, black, #2b0000);
  }   

  .room-img {
    width: 80px !important;
    height: 60px !important;
    max-width: none !important;
    border-radius: 0.5rem;
    border: 2px solid #fff;
  }

  .btn {
    font-size: 0.8rem;
    padding: 6px 10px;
    border-radius: 0.4rem;
  }

  .btn-success {
    background-color: #0f0;
    color: #000;
    border: none;
  }

  .btn-warning {
    background-color: #ffcc00;
    color: #000;
    border: none;
  }

  .btn-danger {
    background-color: #cc0000;
    color: #fff;
    border: none;
  }

  .page-content {
    padding: 2rem;
  }

  .page-header {
    background: linear-gradient(to right, black, #2b0000);
    padding: 1rem;
    text-align: center;
    border-bottom: 1px solid #333;
  }

  .page-header h2 {
    margin: 0;
    font-size: 1.2rem;
    color: #fff;
  }
</style>

  </head>   
  <body>
    @include('admin.header')
    @include('admin.sidebar')

    <div class="page-content">
      <div class="page-header">
        <div class="container-fluid">
          <h2 class="h5 no-margin-bottom" style="color: white;">Booking Table</h2>
        </div>
      </div>

      <div class="table-wrapper">
        <div class="table-responsive" id="scrollableTable">
          <table class="table_deg">
            <tr> 
              <th class="th_deg">Room_id</th> 
              <th class="th_deg">Customer name</th> 
              <th class="th_deg">Email</th> 
              <th class="th_deg">Phone</th> 
              <th class="th_deg">Arrival Date</th> 
              <th class="th_deg">Leaving Date</th> 
              <th class="th_deg">Status</th>
              <th class="th_deg">Room Title</th>
              <th class="th_deg">Price</th>
              <th class="th_deg">Image</th>
              <th class="th_deg">Delete</th>
              <th class="th_deg">Status Update</th>
            </tr>

            @foreach($data as $data)
            <tr> 
              <td>{{$data->room_id}}</td> 
              <td>{{$data->name}}</td> 
              <td>{{$data->email}}</td>
              <td>{{$data->phone}}</td>
              <td>{{$data->start_date}}</td> 
              <td>{{$data->end_date}}</td> 
              <td>
                @if($data->status == 'approve')
                  <span style="color: skyblue;">Approved</span>
                @endif
                @if($data->status == 'rejected')
                  <span style="color: red;">Rejected</span>
                @endif
                @if($data->status == 'waiting')
                  <span style="color: yellow;">Waiting</span>
                @endif
              </td>
              <td>{{$data->room->room_title}}</td>
              <td>Rp{{$data->room->price}}</td>
              <td>
                <img class="room-img" src="/room/{{$data->room->image}}">
              </td>
              <td>
                <a onclick="return confirm('Apakah anda yakin ingin menghapus data booking ini?')" class="btn btn-danger" href="{{url('delete_booking',$data->id)}}">Delete</a>
              </td>
              <td>
                <span style="padding-bottom: 10px; display: inline-block;">
                  <a class="btn btn-success" href="{{url('approve_book',$data->id)}}">Approve</a>
                </span>
                <a class="btn btn-warning" href="{{url('reject_book',$data->id)}}">Rejected</a>
              </td>
            </tr>
            @endforeach
          </table>
        </div>

        <div class="table-scroll-buttons">
          <button class="scroll-btn" onclick="scrollTable(-200)">&laquo;</button>
          <button class="scroll-btn" onclick="scrollTable(200)">&raquo;</button>
        </div>
      </div>
    </div>

    <script>
      function scrollTable(amount) {
        const container = document.getElementById('scrollableTable');
        container.scrollLeft += amount;
      }
    </script>

    @include('admin.footer')
  </body>
</html>