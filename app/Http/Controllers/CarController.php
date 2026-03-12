<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function cars()
    {
        $cars = [
            ['name' => 'Toyota Camry', 'price' => '$25,000', 'type' => 'Sedan', 'image' => 'https://images.unsplash.com/photo-1621007947382-bb3c3994e3fb?w=400'],
            ['name' => 'Ford Mustang', 'price' => '$55,000', 'type' => 'Sports', 'image' => 'https://images.unsplash.com/photo-1584345604476-8ec5f452d1f8?w=400'],
            ['name' => 'BMW X5', 'price' => '$75,000', 'type' => 'SUV', 'image' => 'https://images.unsplash.com/photo-1555215695-3004980ad54e?w=400'],
            ['name' => 'Tesla Model 3', 'price' => '$45,000', 'type' => 'Electric', 'image' => 'https://images.unsplash.com/photo-1560958089-b8a1929cea89?w=400'],
            ['name' => 'Mercedes C-Class', 'price' => '$65,000', 'type' => 'Luxury', 'image' => 'https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?w=400'],
            ['name' => 'Honda Civic', 'price' => '$22,000', 'type' => 'Sedan', 'image' => 'https://images.unsplash.com/photo-1606152421802-db97b9c7a11b?w=400'],
        ];

        return view('cars', compact('cars'));
    }

    public function about()
    {
        return view('about');
    }
}