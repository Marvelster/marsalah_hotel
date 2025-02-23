<!DOCTYPE html>
<html>
<head>
  @include('admin.css')

  <style type="text/css">
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #2e3036;
      margin: 0;
      padding: 0;
    }

    .container {
      width: 90%;
      margin: auto;
      padding: 20px;
    }

    .card {
      background-color: #A9A9A9;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin: 20px 0;
      overflow: hidden;
      display: flex;
      flex-direction: row;
      align-items: center;
      padding: 20px;
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card img {
      width: 150px;
      height: 100px;
      border-radius: 8px;
      object-fit: cover;
      margin-right: 20px;
    }

    .card-content {
      flex: 1;
    }

    .card-title {
      font-size: 20px;
      font-weight: bold;
      color: #333;
      margin-bottom: 10px;
    }

    .card-description {
      font-size: 14px;
      color: #666;
      margin-bottom: 10px;
    }

    .card-details {
      font-size: 14px;
      color: #555;
      margin-bottom: 10px;
    }

    .card-actions {
      display: flex;
      gap: 10px;
    }

    .btn {
      padding: 10px 15px;
      font-size: 14px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .btn-danger {
      background-color: #e74c3c;
      color: white;
    }

    .btn-danger:hover {
      background-color: #c0392b;
    }

    .btn-warning {
      background-color: #f39c12;
      color: white;
    }

    .btn-warning:hover {
      background-color: #d68910;
    }

  </style>
</head>
<body>
  @include('admin.header')
  @include('admin.sidebar')

  <div class="container">
    @foreach($data as $data)
    <div class="card">
      <img src="room/{{$data->image}}" alt="{{$data->room_title}}">
      <div class="card-content">
        <div class="card-title">{{$data->room_title}}</div>
        <div class="card-description">{!! Str::limit($data->description, 150) !!}</div>
        <div class="card-details">
          <p><strong>Price:</strong> Rp{{$data->price}}</p>
          <p><strong>Wifi:</strong> {{$data->wifi}}</p>
          <p><strong>Room Type:</strong> {{$data->room_type}}</p>
        </div>
      </div>
      <div class="card-actions">
        <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Ini');" class="btn btn-danger" href="{{url('room_delete',$data->id)}}">Delete</a>
        <a class="btn btn-warning" href="{{url('room_update',$data->id)}}">Update</a>
      </div>
    </div>
    @endforeach
  </div>

  @include('admin.footer')
</body>
</html>
