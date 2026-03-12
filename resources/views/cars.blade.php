@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 40px;">
    <h1 class="text-center" style="color: #1a1a2e; font-weight: bold;">Our <span style="color: #e94560;">Car Collection</span></h1>
    <p class="text-center text-muted mb-5">Find your perfect drive</p>

    <div class="row">
        @foreach($cars as $car)
        <div class="col-md-4 mb-4">
            <div style="border-radius: 15px; overflow: hidden; box-shadow: 0 0 20px rgba(0,0,0,0.1);">
                <img src="{{ $car['image'] }}" alt="{{ $car['name'] }}" style="width: 100%; height: 200px; object-fit: cover;">
                <div style="padding: 20px;">
                    <h5 style="font-weight: bold;">{{ $car['name'] }}</h5>
                    <span style="background: #1a1a2e; color: white; padding: 3px 10px; border-radius: 20px; font-size: 0.8rem;">{{ $car['type'] }}</span>
                    <h4 style="color: #e94560; margin-top: 10px;">{{ $car['price'] }}</h4>
                    <a href="#" style="background: #1a1a2e; color: white; padding: 8px 20px; border-radius: 20px; text-decoration: none; display: inline-block; margin-top: 5px;">View Details</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection