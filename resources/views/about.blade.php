@extends('layouts.app')

@section('content')
<div style="background: linear-gradient(135deg, #1a1a2e, #16213e); color: white; padding: 60px 0; text-align: center;">
    <div class="container">
        <h1 style="font-weight: bold;">About <span style="color: #e94560;">AutoDrive</span></h1>
        <p style="font-size: 1.2rem;">We are passionate about connecting people with their dream cars</p>
    </div>
</div>

<div class="container" style="margin-top: 60px;">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h2 style="color: #1a1a2e; font-weight: bold;">Who We <span style="color: #e94560;">Are</span></h2>
            <p style="color: #555; line-height: 1.8;">AutoDrive is a premium automotive showroom founded with a passion for cars. We offer a wide range of vehicles from economy to luxury, ensuring every customer finds their perfect match.</p>
            <p style="color: #555; line-height: 1.8;">Our team of experts is dedicated to providing the best car buying experience with transparent pricing and exceptional service.</p>
        </div>
        <div class="col-md-6">
            <div class="row text-center">
                <div class="col-6 mb-4">
                    <div style="background: #1a1a2e; color: white; padding: 30px; border-radius: 15px;">
                        <h3 style="color: #e94560;">500+</h3>
                        <p>Cars in Stock</p>
                    </div>
                </div>
                <div class="col-6 mb-4">
                    <div style="background: #1a1a2e; color: white; padding: 30px; border-radius: 15px;">
                        <h3 style="color: #e94560;">10+</h3>
                        <p>Years Experience</p>
                    </div>
                </div>
                <div class="col-6 mb-4">
                    <div style="background: #1a1a2e; color: white; padding: 30px; border-radius: 15px;">
                        <h3 style="color: #e94560;">1000+</h3>
                        <p>Happy Customers</p>
                    </div>
                </div>
                <div class="col-6 mb-4">
                    <div style="background: #1a1a2e; color: white; padding: 30px; border-radius: 15px;">
                        <h3 style="color: #e94560;">50+</h3>
                        <p>Car Brands</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection