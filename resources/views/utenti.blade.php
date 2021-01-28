@extends('layouts.main')


@section('main')
    
<div class="container">
    
    <ul class="users d-flex">
        
        @foreach ($users as $utente)
        
        <li class="user"> 
            
            <img src="{{$utente['image']}}" alt="">
            <h4>{{ $utente['first_name'] }}</h4>
            <h4>{{ $utente['last_name'] }}</h4>
            <p>{{ $utente['email'] }}</p>
            <p>{{ $utente['gender'] }}</p>
            <a href="/utenti/{{$utente['id']}}">Dettaglio Utente</a>
        </li>
        
        @endforeach
        
    </ul>
    
</div>

@endsection