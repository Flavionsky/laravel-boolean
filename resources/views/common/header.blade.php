<header>  
  <div class="container">
    <div class="navbar d-flex">
      <div class="logo">
        <img src="{{URL::asset('img/logo.png')}}" alt="">
      </div>
      <ul class="d-flex">
        @foreach(config('main.routes') as $route)
        <li class="{{ Route::currentRouteName() == $route['pathId'] ? 'active' : '' }}">
            <a href="{{ route($route['pathId']) }}">{{$route['text']}}</a>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
</header>
