@extends('layouts.admin')

@section('content')
<div class="content">


    <div class="panel panel-default">
        <div class="panel-heading">Adding a competence</div>
        <div class="panel-body">
            <a href="{{ route('admin_competences') }}" class="btn btn-primary">Terug naar lijst</a>
            @if (Session::has('message'))
              <div class="alert alert-success">{{ Session::get('message') }}</div>
            @endif
        </div>

        <div class="panel-body">
          @if (count($errors) > 0)
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
            @endif

             <form method="POST" action="{{route('create_competence')}}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                <div class="form-group {{ $errors->has('name') ? ' has-errors' : '' }}">
                    <label for="name">Naam</label>
                    <input type="text" class="form-control" name="name"
                        placeholder="naam" id="name"
                        value="{{ old('name') }}">
                </div>

                <div class="form-group {{ $errors->has('workshops') ? ' has-errors' : '' }}">
                    <label for="workshops">Workshops</label><br>
                    <select multiple="multiple" name="workshops[]" id="workshops" class="form-control">
                      @foreach($workshops as $workshop)
                         <option value="{{$workshop->id}}" $selected>{{$workshop->name}}</option>
                      @endforeach
                    </select>
                    <small id="iconHelp" class="form-text text-muted">Selecteer meerdere met Ctrl</small>
                </div>

                <div class="form-group {{ $errors->has('description') ? ' has-errors' : '' }}">
                  <label for="description">Beschrijving</label>
                  <textarea class="form-control" name="description" placeholder="Beschrijving" id="description">{{ old('description') }}</textarea>
                </div>

                <div class="form-group {{ $errors->has('icon') ? ' has-errors' : '' }}">
                  <label for="icon">Icoon</label>
                  <input type="text" class="form-control" name="icon" placeholder="fa-handshake-o" id="icon" value="{{ old('name') }}" />
                   <small id="iconHelp" class="form-text text-muted">http://www.fontawesome.io</small>
                </div>

                <div class="form-group file upload">
                  <label for="image">Competentie Afbeelding</label> 
                  <input type="file" name="file" id="image" value="{{ old('file') }}">
                </div>

                <div style="text-align:left;">
                    <input type="submit" value="Competentie opslaan" class="save btn button btn-primary"/>
                </div>
           </form>
        </div>
  </div>
</div>
@endsection

