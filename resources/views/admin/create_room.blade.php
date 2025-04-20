<!DOCTYPE html>
<html>
  <head>
    @include('admin.css')

    <style type="text/css">
      body {
        font-family: 'Poppins', sans-serif;
        background-color: #150C0C;
        margin: 0;
        padding: 0;
      }

      .container {
        width: 100%;
        max-width: 600px;
        margin: 90px auto;
        padding: 20px;
        background: #2e3036;
        border-radius: 10px;
        background-color: #150C0C;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }

      .form-title {
        font-size: 24px;
        font-weight: bold;
        text-align: center;
        margin-bottom: 20px;
        color: #fff;
      }

      .form-group {
        margin-bottom: 20px;
      }

      .form-group label {
        display: block;
        font-weight: 600;
        margin-bottom: 5px;
        color: #aaa;
      }

      .form-group input,
      .form-group select,
      .form-group textarea {
        width: 100%;
        padding: 10px;
        font-size: 14px;
        border: 1px solid #ddd;
        border-radius: 5px;
        outline: none;
        transition: border-color 0.3s ease;
      }

      .form-group input:focus,
      .form-group select:focus,
      .form-group textarea:focus {
        border-color: #007bff;
      }

      .form-group textarea {
        resize: none;
        height: 100px;
      }

      .form-group input[type="file"] {
        padding: 3px;
      }

      .btn-submit {
        display: block;
        width: 100%;
        padding: 10px;
        font-size: 16px;
        font-weight: bold;
        color: #fff;
        background-color: #007bff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }

      .btn-submit:hover {
        background-color: #0056b3;
      }

      .note {
        font-size: 12px;
        color: #777;
        text-align: center;
        margin-top: 10px;
      }
    </style>
  </head>
  <body>
    @include('admin.header')
    @include('admin.sidebar')

    <div class="container">
      <h1 class="form-title">Add Room</h1>
      <form action="{{url('add_room')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
          <label for="title">Room Title</label>
          <input type="text" id="title" name="title" placeholder="Enter room title" required>
        </div>

        <div class="form-group">
          <label for="description">Description</label>
          <textarea id="description" name="description" placeholder="Enter room description"></textarea>
        </div>

        <div class="form-group">
          <label for="type">Room Type</label>
          <select id="type" name="type" onchange="updateRoomDetails()">
           <option value="Regular" selected>Regular</option>
           <option value="Premium">Premium</option>
           <option value="Duluxe">Duluxe</option>
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


        <div class="form-group">
          <label for="image">Upload Image</label>
          <input type="file" id="image" name="image" required>
        </div>

        <button type="submit" class="btn-submit">Add Room</button>
        <p class="note">Make sure all fields are filled correctly before submitting.</p>
      </form>
    </div>

    @include('admin.footer')

 <script>
      function updateRoomDetails() {
      const typeSelect = document.getElementById('type');
      const priceInput = document.getElementById('price');
      const wifiSelect = document.getElementById('wifi');

      const roomType = typeSelect.value;

      if (roomType === 'Regular') {
        priceInput.value = 500000;
        wifiSelect.value = 'no';
      } else if (roomType === 'Premium') {
        priceInput.value = 1000000;
        wifiSelect.value = 'yes';
      } else if (roomType === 'Duluxe') {
        priceInput.value = 5000000;
        wifiSelect.value = 'yes';
      }
    }

      // Call on page load
      window.onload = updateRoomDetails;
  </script>

  </body>
</html>
