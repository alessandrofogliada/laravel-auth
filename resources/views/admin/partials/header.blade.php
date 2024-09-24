{{-- questo sarà il menu piccolo in cima con le funzioni di tornare alla home del sito a sinistra ed a destra la possibilità di login/logout --}}
<div class="row-12 text-bg-dark d-flex justify-content-between">

    <div><a href="{{route('home')}}">Vai al sito</a></div>

    <ul class="navbar-nav ml-auto">
        @guest
        <li><a href="{{route('login')}}"></a></li>
        <li><a href="{{route ('register')}}"></a></li>
        @else 
        <li><a href="#"> {{ Auth::user()->name }} </a></li>
        <li><a href="{{route ('admin.home')}}">Dashboard</a></li>
        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>
      
        @endguest
    </ul>

</div>


{{-- <div class="btn-group">
    <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Collegamenti Vari
    </button>
    <ul class="dropdown-menu dropdown-menu-end">
        <li><a href="{{route ('home')}}" class="dropdown-item" type="button">Home</a></li>
        <li><a href="{{route ('admin.home')}}" class="dropdown-item" type="button">Dashboard</a></li>
    </ul>
</div> --}}

