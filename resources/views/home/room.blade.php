
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
      