<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Room</title>

  <base href="/public">

  @include('admin.css')

  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color:#2e3036;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 800px;
      margin: 50px auto;
      background: #2e3036;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      padding: 30px;
    }

    .container h1 {
      font-size: 24px;
      text-align: center;
      font-weight: 20px;
      color: #fff;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      font-weight: bold;
      color: #555;
      display: block;
      margin-bottom: 8px;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
      font-size: 14px;
    }

    .form-group textarea {
      resize: vertical;
      height: 100px;
    }

    .form-group img {
      max-width: 100px;
      display: block;
      margin: 10px auto;
    }

    .form-group input[type="file"] {
      padding: 5px;
    }

    .btn-primary {
      background-color: #007bff;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      width: 100%;
      margin-top: 20px;
    }

    .btn-primary:hover {
      background-color: #0056b3;
    }

    .center-content {
      text-align: center;
    }

  </style>
</head>

<body>

@include('admin.header')
@include('admin.sidebar')

<div class="container">
  <h1>Update Room</h1>
  <form action="{{url('edit_room', $data->id)}}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
      <label for="title">Room Title</label>
      <input type="text" id="title" name="title" value="{{$data->room_title}}">
    </div>

    <div class="form-group">
      <label for="description">Description</label>
      <textarea id="description" name="description">{{$data->description}}</textarea>
    </div>

    <div class="form-group">
          <label for="type">Room Type</label>
          <select id="type" name="type" onchange="updateRoomDetails()">
            <option value="regular">Regular</option>
            <option value="premium">Premium</option>
            <option value="duluxe">Duluxe</option>
          </select>
        </div>

    <div class="form-group">
    <label for="price">Price</label>
    <input 
    type="number" 
    id="price" 
    name="price" 
    placeholder="Enter room price" 
    readonly 
    style="pointer-events: none; background-color: #e9ecef; color: #6c757d;">
    </div>

    <div class="form-group">
     <label for="wifi">Free Wifi</label>
     <select 
    id="wifi" 
    name="wifi" 
    readonly 
    style="pointer-events: none; background-color: #e9ecef; color: #6c757d;">
    <option value="yes">Yes</option>
  <option value="no" selected>No</option>
  </select>
</div>


    <div class="form-group center-content">
      <label>Current Image</label>
      <img src="/room/{{$data->image}}" alt="Room Image">
    </div>

    <div class="form-group">
      <label for="image">Upload New Image</label>
      <input type="file" id="image" name="image">
    </div>

    <div class="form-group">
      <input class="btn-primary" type="submit" value="Update Room">
    </div>
  </form>
</div>

@include('admin.footer')

<script>
      function updateRoomDetails() {
        // Ambil elemen input
        const typeSelect = document.getElementById('type');
        const priceInput = document.getElementById('price');
        const wifiSelect = document.getElementById('wifi');

        // Ambil jenis room type yang dipilih
        const roomType = typeSelect.value;

        // Atur nilai price dan wifi berdasarkan room type
        if (roomType === 'regular') {
          priceInput.value = 500000;
          wifiSelect.value = 'no';
        } else if (roomType === 'premium') {
          priceInput.value = 1000000;
          wifiSelect.value = 'yes';
        } else if (roomType === 'duluxe') {
          priceInput.value = 5000000;
          wifiSelect.value = 'yes';
        }
      }
    </script>
</body>
</html>
