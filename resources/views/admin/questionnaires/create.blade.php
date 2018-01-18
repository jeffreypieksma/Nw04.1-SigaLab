@extends('layouts.admin')

@section('content')
<div class="content">


    <div class="panel panel-default">
        <div class="panel-heading">Adding a questionnaire</div>
        <div class="panel-body">
            <a href="{{ route('admin_questionnaires') }}" class="btn btn-primary">Terug naar lijst</a>
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

             <form method="POST" action="{{route('create_questionnaire')}}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                <div class="form-group {{ $errors->has('name') ? ' has-errors' : '' }}">
                    <label for="name">Naam</label>
                    <input type="text" class="form-control" name="name"
                        placeholder="naam" id="name"
                        value="{{ old('name') }}">
                </div>

                <div class="form-group {{ $errors->has('competences') ? ' has-errors' : '' }}">
                    <label for="competences">Competentie</label>
                    <select name="competence" id="competences">
                      @foreach($competences as $competence)
                         <option value="{{$competence->id}}">{{$competence->name}}</option>
                      @endforeach
                    </select>
                </div>

                <div style="text-align:left;">
                    <input type="submit" value="Vragenlijst opslaan" class="save btn button btn-primary"/>
                </div>
           </form>
        </div>
  </div>
</div>
@endsection

