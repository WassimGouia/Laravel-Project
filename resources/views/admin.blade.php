@extends('template')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('start',['Med',25])}}">Start</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/info')}}">InfoForm</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/products')}}">Products</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{url('contact')}}">Contact</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
@section('content')
    @yield('page')
@endsection
