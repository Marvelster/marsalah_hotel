<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    // ...existing code...

    public function hotels()
    {
        // Logika untuk metode hotels
        return view('home.hotels'); // Pastikan view yang dikembalikan adalah 'home.hotels'
    }

    // ...existing code...
}