@extends('layouts.admin')

@section('content')
<div class="content">
    <div class="panel panel-default">
        <div class="panel-heading">Lijst met competenties</div>
        <div class="panel-body">
            <div class="action-bar">
                <a href="{{ route('create_competence')}}" class="btn btn-primary">Competentie Toevoegen</a>
            </div>
            <div class="message-bar">
                @if (Session::has('message'))
                    <div class="alert alert-success">{{ Session::get('message') }}</div>
                @endif
            </div>
            
            @if($competences->isEmpty())
                <div class="empty-state"><span class="no-results">Er zijn nog geen competenties toegevoegd</span></div>
            @else  

                <table class="table table-bordered">
                    <tr>
                        <th>#</th>
                        <th>Competenties</th>
                        <th>Wijzigen</th>
                        <th>Verwijder</th>
                    </tr>
                    @foreach ($competences as $competence)
                        <div class="competence">
                            <tr>
                                <td>{{$competence->id}}</td>
                                <td>{{ $competence->name }}</td>
                                <td>
                                    <a href="{{ route('update_competence_form', ['id' => $competence->id])}}">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        Wijzigen
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('delete_competence', ['id' => $competence->id])}}" 
                                        onclick="return confirm('Weet je zeker dat je deze competentie wilt verwijderen?') ">
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