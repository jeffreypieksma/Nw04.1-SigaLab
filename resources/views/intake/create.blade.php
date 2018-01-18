@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-default">
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
            <div class="intake">
                <h1>Intake procedure</h1>
                <p>Voordat je kan deelnemen aan een workshop, doe je eerst gezamelijk met je groep/team een test. Wanneer de test afgerond is kunnen jullie je inschrijven voor een workshop.</p>
                <h3>Groep aanmaken</h3>
                <form method="POST" action="{{route('create_intake')}}"> 
                   <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                    <div class="row">
                      <div class="col-md-6">   
                        <div class="form-group {{ $errors->has('owner_name') ? ' has-errors' : '' }}">
                            <label for="your-name">Jouw naam *</label>
                            <input type="text" class="form-control" name="owner_name"
                                placeholder="Jouw Naam" id="your-name"
                                value="{{ old('owner_name') }}">
                        </div>
                      </div>
                     <div class="col-md-6">  
                      <div class="form-group {{ $errors->has('owner_email') ? ' has-errors' : '' }}">
                          <label for="your-email">Jouw e-mail *</label>
                          <input type="text" class="form-control" name="owner_email"
                              placeholder="Jouw E-mail" id="your-email"
                              value="{{ old('owner_email') }}">
                      </div>
                    </div>
                  </div>
                    <div class="form-group {{ $errors->has('group_name') ? ' has-errors' : '' }}">
                        <label for="group-name">Groepsnaam/code *</label>
                        <input type="text" class="form-control" name="group_name"
                            placeholder="Groupsnaam" id="group-name"
                            value="{{ old('group_name') }}">
                    </div> 
                    <h3>Teamleden uitnodigen</h3>
                    <div class="group">         
                      <div class="row">
                        <div class="col-md-6"> 
                          <label>Naam: </label>
                          <input type="text" name="members[0][name]" class="form-control"
                          value="">
                        </div>
                         <div class="col-md-6"> 
                          <label>Email: </label>
                          <input type="text" name="members[0][email]" class="form-control"
                          value="">
                        </div>
                      </div>
                    </div>

                    <a href="#" class="add_form_field">Meer namen invullen </a>

                    <div style="text-align:left;">
                      <input type="submit" value="Verzenden" class="save btn button btn-primary"/>
                    </div>
                </form> 
            </div>
        </div>
    </div> 
</div>
 <script type='text/javascript'>
   $(document).ready(function() {
        var max_fields      = 100;
        var group         = $(".group");
        var test         = $(".test");
        var add_button      = $(".add_form_field");
        var x = 0;
      
        $(add_button).click(function(e){          
            e.preventDefault();
            if(x < max_fields){
                x++;
                // $(group).append('<div><div class="form-group"><label>Naam: </label><input type="text" name="members[1][name]" class="form-control"/><label>Email: </label><input type="text" name="members[1][email]" class="form-control"/><a href="#" class="delete">Verwijderen'); 

                 $(group).append('<div><div class="row"><div class="form-group"><div class="col-md-6"><label>Naam: </label><input type="text" name="members['+x+'][name]" class="form-control"/></div><div class="col-md-6"><label>Email: </label><input type="text" name="members['+x+'][email]" class="form-control"/></div><a href="#" class="delete">Verwijderen');

                // $(group).innerHTML += '<div><div class="row"><div class="form-group">';

                // $(group).innerHTML += '<div class="col-md-6"><label>Naam: </label><input type="text" name="members['+x+'][name]" class="form-control"/></div>';

                // $(group).innerHTML += '<div class="col-md-6"><label>Email: </label><input type="text" name="members['+x+'][email]" class="form-control"/></div>';

                // $(group).innerHTML += '<a href="#" class="delete">Verwijderen</a></div></div></div>';
                
            }else{
                alert('You Reached the limits');
            }
        });

        $(group).on("click",".delete", function(e){
            e.preventDefault(); 
            $(this).parent('div').remove(); x--;
        })
    });

    </script>
@endsection