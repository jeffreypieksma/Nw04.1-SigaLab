@extends('layouts.app')

@section('content')
<div class="container workshop-read">

    <div class="panel panel-default">
        <div class="panel-body">              
            <div class="workshop">
                <div class="row">
                    <div class="col-md-12">
                        <img src="{{ asset($workshop->imageUrl)}}" alt="{{ $workshop->name }}" class="workshop-img img-responsive" style="width:100%;"/><br>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="competences">
                             @foreach($workshop->competences as $competence)
                                @if($loop->last)
                                    <i>{{$competence->name}}</i>
                                @else
                                    <i>{{$competence->name}},</i>
                                @endif     
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h2>{{ $workshop->name }}</h2>
                        <div class="description"><p>{{ $workshop->description }}</p></div>        
                       {{--  <small>Geplaats op: {{ $workshop->created_at->format('d m Y')}}</small> --}}
                             
                    </div>
                    <div class="col-md-6">
                        <div class="row info">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="content">
                                        <h3>Omschrijving</h3>
                                        <div class="description"></div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="content">
                                        <h6>Ontwikkelaar</h6>
                                        <div class="description">NHL Hogeschool</div>
                                    </div>        
                                </div>
                             </div>
                             <div class="col-md-6">
                                <div class="card">
                                     <div class="content">
                                        <h6>Toepassing</h6>
                                        <div class="description">{{ $workshop->application }}</div>
                                    </div>
                                </div>
                             </div>
                        </div>
                        <div class="row">
                             <div class="col-md-6">
                                <div class="card">
                                    <div class="content">
                                        <h6>Duur</h6>
                                        <div class="description">{{ $workshop->length }} Minuten</div>
                                    </div>
                                </div>
                             </div>
                             <div class="col-md-6">
                                <div class="card">
                                    <div class="content">
                                        <h6>Aantal deelnemers</h6>
                                        <div class="description">{{ $workshop->participants }}</div>
                                    </div>
                                </div>
                                
                             </div>
                        </div>
                    </div>
                </div>      
            </div>
        </div>
    </div> 
</div>
@endsection