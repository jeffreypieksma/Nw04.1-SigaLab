@extends('layouts.app')

@section('content')
<div id="workshops">
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="workshops">
                    <h1>Workshops</h1>
                    <div class="row">
                        @foreach ($workshops as $workshop)
                            @if($loop->iteration === 4) </div><div class="row"> @endif

                            <div class="col-md-4">
                                <div class="workshop">
                                    <a href="{{ route('read_workshop', ['id' => $workshop->id])}}">
                                        <img src="{{ asset($workshop->imageUrl)}}" alt="{{ $workshop->name }}" class="workshop-img img-responsive"/>
                                    
                                        <div class="content">
                                            <h6>{{ $workshop->name }}</h6>
                                            {{-- <small>{{ $workshop->created_at->format('d m Y')}}</small> --}}
                                            <div class="description">
                                                {{ str_limit($workshop->description,120) }}
                                            </div>   
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>
@endsection
