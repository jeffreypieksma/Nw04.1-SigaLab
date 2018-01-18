@extends('layouts.admin')

@section('content')
<div class="content">
    <div class="panel panel-default">
        <div class="panel-heading">Vragenlijst</div>
        <div class="panel-body">
            <div class="message-bar">
                @if (Session::has('message'))
                    <div class="alert alert-success">{{ Session::get('message') }}</div>
                @endif
            </div>     
            @if($questionnaires->isEmpty())
                <div class="empty-state">
                    <i class="fa fa-question" aria-hidden="true"></i>
                    <span class="no-results">Er is nog geen vragenlijst toegevoegd</span>
                    <a href="{{ route('create_questionnaire_form')}}" class="btn btn-primary">Vragenlijst Toevoegen</a>
                </div>
            @else 
                <div class="action-bar">
                    <a href="{{ route('create_questionnaire_form')}}" class="btn btn-primary">Vragenlijst Toevoegen</a>
                </div> 
                <table class="table table-bordered">
                    <tr>
                        <th>#</th>
                        <th>Vragenlijst</th>
                        <th>Wijzigen</th>
                        <th>Verwijder</th>
                    </tr>
                    @foreach ($questionnaires as $questionnaire)
                        <div class="competence">
                            <tr>
                                <td>{{$questionnaire->id}}</td>
                                <td>{{ $questionnaire->name }}</td>
                                <td>
                                    <a href="{{ route('update_questionnaire_form', ['id' => $questionnaire->id])}}">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        Wijzigen
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('delete_questionnaire', ['id' => $questionnaire->id])}}" 
                                        onclick="return confirm('Weet je zeker dat je deze vragenlijst wilt verwijderen?') ">
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