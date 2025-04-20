<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Room;

use App\Models\Booking;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function room_details($id)
    {
        $room = Room::find($id);

        return view('home.room_details',compact('room'));


    }

    public function add_booking(Request $request, $id)
    {

        $request->validate([

             'startDate'=> 'required|date', 

             'endDate'=> 'date|after:startDate',
        ]);

        $data = new Booking;

        $data->room_id = $id;

        $data->name = $request->name;

        $data->email = $request->email;
        
        $data->phone = $request->phone;

        $startDate = $request->startDate;

        $endDate = $request->endDate;

        $isBooked = Booking::where('room_id',$id) 
        ->where('start_date', '<=', $endDate) 
        ->where('end_date', '>=', $startDate)->exists(); 
        
        
        if($isBooked) 
        { 
            return redirect()->back()->with('message', 'Room is already booked please try different date'); 
        } 

        else 
        {
            $data->start_date = $request->startDate;

            $data->end_date = $request->endDate;

            $data->save();

            return redirect()->back()->with('message', 'Room Booked Successfully'); 
        }
    }

    public function bookings()
    {
        $bookings = Booking::with('room')->get(); 
        return view('home.user_bookings', compact('bookings'));
    }

    public function user_bookings()
    {
        $room = Room::all();
        $user = Auth::user()->email;
        $bookings = Booking::with('room')->where('email', '=', $user)->get();
        return view('home.user_bookings', compact('bookings'), compact('room'));

    }

    public function home()
    {
        return view('home.home');
    }

    
}
