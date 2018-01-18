@extends('layouts.admin')

@section('content')
<div class="content">

    <div class="panel panel-default">
        <div class="panel-heading">Adding a workshop</div>
        <div class="panel-body">
            <a href="{{ route('admin_workshops') }}" class="btn btn-primary">Terug naar lijst</a>
        </div>

        <div class="panel-body">
          @if (Session::has('message'))
            <div class="alert alert-success">{{ Session::get('message') }}</div>
          @endif
          @if (count($errors) > 0)
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
            @endif

             <form method="POST" action="{{route('create_workshop')}}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                <div class="form-group {{ $errors->has('name') ? ' has-errors' : '' }}">
                    <label for="name">Naam*</label>
                    <input type="text" class="form-control" name="name"
                        placeholder="naam" id="name"
                        value="{{ old('name') }}">
                </div>

                <div class="form-group {{ $errors->has('competences') ? ' has-errors' : '' }}">
                    <label for="competences">Competenties*</label>
                    <select multiple="multiple" name="competences[]" id="competences" class="form-control">
                      
                      @foreach($competences as $key => $competence)
                        <option value="{{$competence->id}}">{{$competence->name}}</option>
                          
                      @endforeach
                    </select>
                    <small id="iconHelp" class="form-text text-muted">Selecteer meerdere met Ctrl</small>
                </div>

                <div class="form-group {{ $errors->has('description') ? ' has-errors' : '' }}">
                  <label for="description">Beschrijving*</label>
                  <textarea class="form-control" name="description" placeholder="Beschrijving" id="description">{{ old('description') }}</textarea>
                </div>

                <div class="form-group {{ $errors->has('length') ? ' has-errors' : '' }}">
                  <label for="length">Duur in minuten*</label>
                  <input type="text" class="form-control" name="length"
                    placeholder="75" id="length"
                    value="{{ old('length') }}">
                </div>

                <div class="form-group {{ $errors->has('participants') ? ' has-errors' : '' }}">
                    <label for="participants">Aantal deelnemers*</label>
                    <select name="participants" id="participants" class="form-control">
                      @for ($i = 1; $i < 10; $i++)
                        @if($i == old('participants'))
                          <option value="{{$i}}" selected="selected">{{$i}}</option>
                        @else
                         <option value="{{$i}}">{{$i}}</option>
                        @endif
                      @endfor
                    </select>
                </div>

                <div class="form-group {{ $errors->has('application') ? ' has-errors' : '' }}">
                  <label for="application">Toepassing*</label>
                  <input type="text" class="form-control" name="application"
                    placeholder="Training/Workshop" id="application"
                    value="{{ old('application') }}">
                </div>

                <div class="form-group file upload">
                  <label for="image">Workshop Afbeelding*</label> 
                  <input type="file" name="file" id="image">
                </div>

                <div style="text-align:left;">
                    <input type="submit" value="Workshop opslaan" class="save btn button btn-primary"/>
                </div>
           </form>
        </div>
    </div>
  </div>
@endsection

