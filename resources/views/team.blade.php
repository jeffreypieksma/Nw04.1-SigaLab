@extends('layouts.app')

@section('content')

<div id="team">
    <div class="container">
        
        <div class="row text-center intro">
            <h1>SigaLab Team</h1>
            <div class="col-md-12 text-center description">
                <p>
                    Bij het SiGa-Lab zijn verschillende mensen betrokken. Djoerd Hiemstra is projectleider. Daarnaast zijn Steven de Rooij en Anne Zagt projectmedewerkers. Verder is er een lectoraat betrokken bij het SiGa-Lab: Het lectoraat Serious Gaming van lector Hylke van Dijk. Verder kent het SiGa-Lab een actieve community van betrokken docenten.
                </p>
            </div>
        </div>
        <div class="row member">
            <div class="">
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{url('/images/default-placeholder.png')}}" alt="img" class="img-responsive"/>
                        <div class="content">
                            <h6>Djoerd Hiemstra</h6>
                            <p class="function">Arbeids- &amp; organisatiepsycholoog (NIP)</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-9 description">
                    <div class="seperator whitespace small"></div>
                    Djoerd Hiemstra (Phd) is arbeids- &amp; organisatiepsycholoog (NIP). Hij is projectleider van het SiGa-Lab,  senior-onderzoeker bij het lectoraat Serious Gaming en Persoonlijk Leiderschap en docent bij de master Serious Gaming. In zijn onderzoek en praktijkwerk staat de vraag centraal hoe we mensen kunnen motiveren om te leren.
                </div>
            </div>
        </div>
        <div class="row member">
             <div class="">
                
                <div class="col-md-9 description">
                    <div class="seperator whitespace small"></div>
Steven de Rooij (MaSc) is naast projectmedewerker bij het SiGa-Lab, onderzoeker bij het lectoraat Serious Gaming. Allereerst verzorgd Steven workshops die vanuit het SiGA-Lab worden aangeboden. Daarnaast onderzoekt Steven op welke wijze entertainmentgames in het onderwijs ingezet kunnen worden om leerdoelen te behalen.
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
            </div>
        </div>
        <div class="row member">
            <div class="">
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{url('/images/default-placeholder.png')}}" alt="img" class="img-responsive"/>
                        <div class="content">
                            <h6>Anne Zagt</h6>
                            <p class="function">Projectmedewerker bij het SiGa-Lab</p>
                        </div>
                    </div>
                </div>
                <div class="seperator whitespace small"></div>
                <div class="col-md-9 description">
Anne Zagt (MaSc) is naast projectmedewerker bij het SiGa-Lab, onderzoeker bij het lectoraat Persoonlijk Leiderschap en Innovatiekracht, en docent bij BA. Vanuit het SiGa-Lab organiseerden Anne, Djoerd  en Steven een pilot met een Communicatiestijlengame en onderzochten de motiverende werking van Adaptive Video Role Play. Dit onderzoek resulteerde in een publicatie:

Zagt, A.C. &amp; Hiemstra, D. (2016). De motiverende werking van adaptive video role play. OnderwijsInnovatie, 4, 37-41.

                </div>
            </div>
        </div>
        <div class="row member">
            <div class=""> 

                <div class="col-md-9 description">
                    <div class="seperator whitespace small"></div> 
Hylke van Dijk (Phd) is lector van het lectoraat Serious Gaming en is met name geïnteresseerd in het punt waar wetenschap, techniek en de mens samen komen. In het multidisciplinaire veld van Serious Gaming vervult hij de rol van systeemarchitect en ontwerpt, samen met mensen uit het mkb en het onderwijs, systemen voor een functionele game en omgevingen waarin spelers in staat zijn veranderingen te initiëren of te accepteren.
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
        </div>
    </div>
</div>   

@endsection

