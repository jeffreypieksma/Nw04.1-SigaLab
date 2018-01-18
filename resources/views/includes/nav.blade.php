<nav class="navbar navbar-default navbar-static-top" id="navbar">  
    <div class="container">
    <div class="navbar-header">

        <!-- Collapsed Hamburger -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        {{-- <img class="logo-sigalab" src="{{url('/images/sigalab-logo.png')}}" /> --}}

        <!-- Branding Image -->
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'SigaLab') }}
        </a>
        {{-- <div class="page-title">{{Request::route()->getName()}}</div> --}}

    </div>

    <div class="collapse navbar-collapse" id="app-navbar-collapse">
        <!-- Left Side Of Navbar -->
        <ul class="nav navbar-nav">
            &nbsp;
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right"> 
            <li class="{{ (\Request::route()->getName() == 'home') ? 'active' : '' }}">
                <a href="{{route('home')}}">Home</a>
            </li>
            <li class="{{ (\Request::route()->getName() == 'workshops') ? 'active' : '' }}">
                <a href="{{route('workshops')}}">Workshops</a>
            </li>
            <li class="{{ (\Request::route()->getName() == 'team') ? 'active' : '' }}">
                <a href="{{route('team')}}">Het Team</a>
            </li>
            <li class="{{ (\Request::route()->getName() == 'contact') ? 'active' : '' }}">
                <a href="{{route('contact')}}">Contact</a>
            </li>  

            <li class="">
                <a href="{{route('create_intake_form')}}" class="btn button white small">Aanmelden</a>
            </li>    
        </ul>
    </div>
</div>
</nav>