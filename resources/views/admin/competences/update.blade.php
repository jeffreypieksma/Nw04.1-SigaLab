@extends('layouts.admin')

@section('content')
<div class="content">
    <div class="panel panel-default">
        <div class="panel-heading">updating competence: {{$competence->name}}</div>
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

             <form method="POST" action="{{ route('update_competence', ['id' => $competence->id])}}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" value="{{$competence->id}}">
                
                <div class="form-group {{ $errors->has('name') ? ' has-errors' : '' }}">
                    <label for="name">Naam</label>
                    <input type="text" class="form-control" name="name"
                        placeholder="naam" id="name"
                        value="{{$competence->name}}">
                </div>

                <div class="form-group {{ $errors->has('description') ? ' has-errors' : '' }}">
                  <label for="description">Beschrijving</label>
                  <textarea class="form-control" name="description" placeholder="Beschrijving" id="description">{{$competence->description}}</textarea>
                </div>

                <div class="form-group {{ $errors->has('workshops') ? ' has-errors' : '' }}">
                    <label for="workshops">Workshops</label><br>          

                    <select multiple="multiple" name="workshops[]" id="workshops" class="form-control">                  
                      @foreach($workshops as $workshop)
                        @if(in_array($workshop->id, $s_workshops))
                          <option value="{{$workshop->id}}" selected="selected">{{$workshop->name}}</option>
                        @else
                          <option value="{{$workshop->id}}">{{$workshop->name}}</option>
                        @endif
                      @endforeach
                    </select>
                    <small id="iconHelp" class="form-text text-muted">Selecteer meerdere met Ctrl</small>
                </div>

                <div class="form-group file upload">
                  <label for="image">Competence Afbeelding</label> 
                  <img src="{{ asset($competence->imageUrl)}}" alt="" class="competence-img img-responsive" style="width:180px;"/>
                  <input type="file" name="file" id="image">
                </div>

                <div style="text-align:left;">
                    <input type="submit" value="Competentie opslaan" class="save btn button btn-primary"/>
                </div>
           </form>
          
        </div>
  </div>
</div>
@endsection

