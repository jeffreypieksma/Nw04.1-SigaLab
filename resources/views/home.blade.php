@extends('layouts.app')

@section('content')
<div id="home">
    <section id="header">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="content">
                            <img class="logo-sigalab" src="{{url('/images/sigalab-logo.png')}}" />
                            <h1>21th Century Skills Ontwikkelen met Behulp van een Workshop</h1>
                            <p>Wil jij met jou team je teamprestaties verbeteren? Meld jou team nu aan voor de test.</p>
                            <a class="btn button cta white large" href="{{route('create_intake_form')}}">Aanmelden</a> 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image">
                            <img src="{{url('/images/tablet.png')}}" class="img-responsive" />
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </section>

    <div class="container">
        <section id="training-assesment">
            <div class="row">
                <div class="col-md-6">
                    <div class="seperator whitespace small"></div>
                    <h2>Training & Assessment</h2>
                    <p>We bieden een scala aan simulaties en serious games voor het ontwikkelen en beoordelen van professionele competenties, zoals leiderschap, samenwerking, communicatie, projectmanagement, accountmanagement, crisismanagement en ethisch handelen. Wil jij met jou team je teamprestaties verbeteren? Bekijk onze workshops.
                    </p>
                    <a href="{{route('workshops')}}" class="btn button large grey">Lees meer</a>
                </div>

                <div class="col-md-6 workshops">
                   {{--  <h1 class="title line bottom text-center">Workshops</h1>   --}}
                    <div class="row">
                       
                        @foreach($workshops->slice(0,4) as $workshop)
                            <div class="col-md-6" style="margin-bottom:20px;">  
                                <div class="workshop card">        
                                    <img src="{{$workshop->imageUrl}}" class="img-responsive" alt="{{ $workshop->name }}"/> 
                                        <div class="content">
                                            <a href="{{ route('read_workshop', ['id' => $workshop->id])}}">
                                                <h3>{{$workshop->name}}</h3>
                                            </a>
                                            <div class="short-description">{{$workshop->description}}</div>
                                        </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <hr class="horizontal-line">

        <section id="facilities">
            <div class="row facilities">
                <div class="col-md-6">   
                    <img src="{{url('/images/default-placeholder.png')}}" class="img-responsive" alt="">
                </div>
                <div class="col-md-6">
                    <div class="seperator whitespace small"></div>
                    <h2>Faciliteiten</h2>            
                    <p>We beschikken over een eigen workshop- en onderzoeksruimte binnen de NHL. Deze ruimte kan, afhankelijk van de simulaties of games die worden gespeeld of het onderzoek dat wordt verricht, flexibel worden ingericht. </p>
                    <p>Het lab beschikt over moderne multimedia-faciliteiten, waaronder prowise board, game-computers, beamers, (touch)screens, tablets, licht- en audio-installatie en een video-gedragsobservatiesysteem.</p>
                    <p>Docent of onderzoeker aan NHL Hogeschool? Het SiGa-Lab kan worden gereserveerd via de beheerder: Martin Renema Email: m.renema@nhl.nl.</p>
                </div>
            </div>
        </section>

        <hr class="horizontal-line">

        <section id="team">
            <div class="row text-center team">   
                <h1 class="title line bottom">SigaLab team</h1>  
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{url('/images/default-placeholder.png')}}" alt="img" class="img-responsive"/>
                        <div class="content">
                            <h6>Djoerd Hiemstra</h6>
                            <p class="function">Arbeids- &amp; organisatiepsycholoog (NIP)</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <img src="{{url('/images/default-placeholder.png')}}" alt="img" class="img-responsive"/>
                        <div class="content">
                            <h6>Steven de Rooij </h6>
                            <p class="function">Projectmedewerker bij het SiGa-Lab</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{url('/images/default-placeholder.png')}}" alt="img" class="img-responsive"/>
                        <div class="content">
                            <h6>Anne Zagt</h6>
                            <p class="function">Projectmedewerker bij het SiGa-Lab</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{url('/images/default-placeholder.png')}}" alt="img" class="img-responsive"/>
                        <div class="content">
                            <h6>Hylke van Dijk</h6>
                            <p class="function">Lector van het loctoraat Serious Gaming</p>
                        </div>
                    </div>
                </div>   
            </div>
        </section>
    </div>
</div>
@endsection