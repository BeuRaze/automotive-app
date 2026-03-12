@extends('layouts.app')

@section('content')
<div style="background: linear-gradient(135deg, #1a1a2e, #16213e); color: white; padding: 100px 0; text-align: center;">
    <div class="container">
        <h1 style="font-size: 3rem; font-weight: bold;">Welcome to <span style="color: #e94560;">AutoDrive</span></h1>
        <p style="font-size: 1.3rem; margin: 20px 0;">Your Premium Car Showroom Experience</p>
        <a href="/cars" style="background: #e94560; color: white; padding: 15px 40px; border-radius: 30px; text-decoration: none; font-size: 1.1rem;">Browse Our Cars 🚗</a>
    </div>
</div>

<div class="container" style="margin-top: 60px;">
    <div class="row text-center">
        <div class="col-md-4">
            <div style="padding: 30px; border-radius: 10px; box-shadow: 0 0 15px rgba(0,0,0,0.1);">
                <h2 style="color: #e94560;">500+</h2>
                <p>Cars Available</p>
            </div>
        </div>
        <div class="col-md-4">
            <div style="padding: 30px; border-radius: 10px; box-shadow: 0 0 15px rgba(0,0,0,0.1);">
                <h2 style="color: #e94560;">10+</h2>
                <p>Years Experience</p>
            </div>
        </div>
        <div class="col-md-4">
            <div style="padding: 30px; border-radius: 10px; box-shadow: 0 0 15px rgba(0,0,0,0.1);">
                <h2 style="color: #e94560;">1000+</h2>
                <p>Happy Customers</p>
            </div>
        </div>
    </div>
</div>
@endsection