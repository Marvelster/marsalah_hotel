<style>

</style> 

<div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar" style="background-image: linear-gradient(to bottom, black, darkred); opacity: 0.95;">

        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar" style="width: 78px; height: 60px; overflow: hidden;">
            <img src="admin/img/profile-me.jpg" alt="..." class="img-fluid rounded-circle" style="width: 100%; height: auto;">
          </div>
          <div class="title">
            <h1 class="h5">Marchellino Salvian Hartanto</h1>
            <p>Section: <b>CEO</b></p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li class="active"><a href="index.html"> <i class="icon-home"></i>Home </a></li>
                
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Hotel Rooms</a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{url('create_room')}}">Add Rooms</a></li>
                    <li><a href="{{url('view_room')}}">View Rooms</a></li>
                  </ul>
                </li>

                <li>
                  <a href="{{url('bookings')}}"> <i class="icon-home"></i>Bookings</a>
                </li>
        </ul>
      </nav>