@extends('layouts.landing')

@section('content')
  <div class="home">
    <div class="container">
      <div class="row">
        <div class="col-md-8 left">
          <h1>Wat doet het SigaLab</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

          <h1>Wat doet het SigaLab</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

          <a href="{{route('workshops')}}" class="btn button btn-primary large">
            Bekijk het aanbod
          </a>

        </div>
        <div class="col-md-4 right banner">
          <img src="{{url('/images/background.svg')}}">
          <div class="content">
            <h1>SigaLab</h1>
            <p>Simulation & Game-based learning</p>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection