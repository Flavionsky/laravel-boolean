@extends('layouts.main')


@section('main')
    
<div class="container">
    
    <ul class="user d-flex">
        
        <li class="user"> 
            
            <img src="{{$user['image']}}" alt="">
            <h4>{{ $user['first_name'] }}</h4>
            <h4>{{ $user['last_name'] }}</h4>
            <p>{{ $user['email'] }}</p>
            <p>{{ $user['gender'] }}</p>
            
        </li>
        
    </ul>
    
</div>

@endsection