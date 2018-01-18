@extends('layouts.admin')

@section('content')
<div class="content">
    <div class="panel panel-default">
        <div class="panel-heading">Opleidingen</div>
        <div class="panel-body">      
            <div class="message-bar">
                @if (Session::has('message'))
                    <div class="alert alert-success">{{ Session::get('message') }}</div>
                @endif
            </div>
            
            @if($educations->isEmpty())
                <div class="empty-state">
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    <span class="no-results">Er zijn nog geen opleidingen toegevoegd</span>
                    <a href="{{ route('create_education')}}" class="btn btn-primary">Opleiding Toevoegen</a>
                </div>
            @else
                <div class="action-bar">
                    <a href="{{ route('create_education')}}" class="btn btn-primary">Opleiding Toevoegen</a>
                 </div>
                @foreach($educations as $education)

                    <h2>{{$education->name}}</h2>
                    <ul>
                        @foreach ($education->competences as $competence)
                            <li>{{$competence->name}}</li>
                        @endforeach
                    </ul>
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection