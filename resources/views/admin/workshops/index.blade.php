@extends('layouts.admin')

@section('content')
<div class="content">
    <div class="panel panel-default">
        <div class="panel-heading">Lijst met workshops</div>
            <div class="panel-body">
                <div class="message-bar">
                    @if (Session::has('message'))
                        <div class="alert alert-success">{{ Session::get('message') }}</div>
                    @endif
                </div>
       
                 @if($workshops->isEmpty())
                    <div class="empty-state">
                        <i class="fa fa-list-alt" aria-hidden="true"></i>
                        <span class="no-results">Er zijn nog geen workshops toegevoegd</span>
                         <a href="{{route('create_workshop')}}" class="btn btn-primary">Workshop Toevoegen</a>
                    </div>
                @else
                <div class="action-bar">
                    <a href="{{ route('create_workshop')}}" class="btn btn-primary">Workshop Toevoegen</a>
                 </div>
                <table class="table table-bordered">
                    <tr>
                        <th>#</th>
                        <th>Workshop naam</th>
                        <th>Competenties</th>
                        <th>Wijzigen</th>
                        <th>Verwijder</th>
                    </tr>
                    @foreach ($workshops as $workshop)                        
                        <div class="workshop">
                            <tr>
                                <td>
                                    <a href="{{ route('read_workshop', ['id' => $workshop->id])}}">
                                    <img src="{{ asset($workshop->imageUrl)}}" alt="{{ $workshop->name }}" class="workshop-img img-responsive" style="width:180px;"/>
                                    </a>
                                </td>
                                <td>{{ $workshop->name }}</td>
                                <td>              
                                    @foreach($workshop->competences as $competence)
                                        @if(!$loop->last)
                                            <small>{{$competence->name}}</small>,
                                        @else
                                             <small>{{$competence->name}}</small>
                                        @endif           
                                    @endforeach
                                </td>
                               {{--  <td><small>{{ $workshop->created_at->format('d m Y')}}</small></td> --}}
                                <td>
                                    <a href="{{ route('update_workshop_form', ['id' => $workshop->id])}}">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        Wijzigen
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('delete_workshop', ['id' => $workshop->id])}}" 
                                        onclick="return confirm('Weet je zeker dat je de Workshop wilt verwijderen?') ">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        Verwijder
                                    </a>
                                </td>
                            </tr>
                        </div>
                    @endforeach
                </table>
            @endif
        </div>
    </div>
</div>
@endsection