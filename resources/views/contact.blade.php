@extends('layouts.app')

@section('content')

<div id="contact">
    <div class="container">
        
        <div class="row">
            
            <div class="col-md-12" style="font-size:16px">
                
                <h1 class="text-center">Contact</h1>
                <p class="text-center">Neem gerust contact met ons op om te overleggen hoe we u kunnen ondersteunen bij het toepassen van simulaties en games.</p><br>
             

                <b>Student aan de NHL?</b><br>
                <p>We bieden verschillende simulaties en games met open inschrijving.<br>
                Meld je aan om één van onze simulaties of games te spelen.</p><br>

                <p><b>Docent aan NHL Hogeschool?</b><br>
                We bieden verschillende simulaties en games die kunnen worden ingepast in vakken, projecten, minoren en slb-trajecten.</p><br>

                <p><b>Bedrijf of instelling?</b><br>
                We bieden verschillende simulaties en games die kunnen worden gebruikt voor team- en personeelsontwikkeling.</p><br>                
            </div>
            <div class="col-md-4">
                <h3>Contact gegevens</h3>
                <ul>
                    <li>SIGA-LAB</li>
                    <li>info@sigalab.nl</li>
                    <li> 058 251 1528</li>
                    <li>NHL Hogeschool</li>
                    <li>Rengerslaan 10</li>
                    <li>8917 DD Leeuwarden</li>
                </ul>
            </div>
            <div class="col-md-4">
                <h3>Google maps </h3>
                <img src="{{url('/images/googlemap.png')}}" alt="img" class="img-responsive"/>
            </div>
        </div>
        <div class="seperator whitespace small"></div>
    </div>
</div>   

@endsection

