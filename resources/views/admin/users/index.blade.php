@extends('layouts.admin')

@section('content')
<div class="content">
  <div class="panel panel-default">
      <div class="panel-heading">All users</div>
      <div class="panel-body">
        <div class="message-bar">
            @if (Session::has('message'))
                <div class="alert alert-success">{{ Session::get('message') }}</div>
            @endif
        </div>
        @if($users->isEmpty())
          <div class="empty-state">
            <i class="fa fa-user-o" aria-hidden="true"></i>
            <span class="no-results">Er zijn nog geen gebruikers toegevoegd</span>
            <a href="{{ route('create_questionnaire_form')}}" class="btn btn-primary">Vragenlijst Toevoegen</a>
          </div>
        @else
          <div class="action-bar">
            <a href="{{ route('create_user_form')}}" class="btn btn-primary">Gebruiker Toevoegen</a>
          </div>
          <table class="table table-striped">
            <tr>
                <th>Name</th><th>E-mail</th><th>Role</th><th>Wijzigen</th><th>Verwijder</th>
            </tr>
            @foreach($users as $user)
              <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->is_admin === 1 ? "User" : "Admin" }}</td>
               {{--  <td>{{$user->role === 2 ? "Admin" : "User" }}</td> --}}
                <td>
                    <a href="{{ route('update_user_form', ['id' => $user->id])}}">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        Wijzigen
                    </a>
                </td>
                <td>
                  <a href="{{ route('delete_user', ['id' => $user->id])}}" 
                      onclick="return confirm('Weet je zeker dat je de gebruiker wilt verwijderen?') ">
                      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                      Verwijder
                  </a>
                </td>
              </tr>
            @endforeach
          </table>
        @endif
      </div>
  </div>
</div>
@endsection